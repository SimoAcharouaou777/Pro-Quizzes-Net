<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\representative;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.UserLogin');
    }

    public function register()
    {
        return view('auth.UserRegister');
    }

    public function CompanyRegister()
    {
        return view('auth.CompanyRegister');
    }

    public function UserRole(){
        return view('auth.UserRole');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->has('remembetrMe'))) {
            if(Auth::user()->status == 'banned'){
                Auth::logout();
                return back()->withErrors([
                    'email' => 'Your account has been banned.',
                ]);
            }
            $request->session()->regenerate();
            Auth::user()->update(['status' => 'online']);
            return redirect(route('home'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function store(Request $request){
        $validate = $request->validate([
            'username' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);
    
        try {
            $data = $request->except('confirm-password', 'password');
            $data['password'] = Hash::make($request->password);
            $user = User::create($data);
            $request->session()->put('user_id', $user->id);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while creating the user.');
        }
    
        return redirect(route('UserRole'));
    }

    public function assignRole($role){
        $user = User::find(session('user_id'));
        if(!$user){
            return redirect()->route('login')->with('error', 'User not found.');
        }
        if($user->roles()->count() > 0){
            return redirect()->back()->with('error', 'User already has a role.');
        }
        
        $user->roles()->attach($role);
    
        if ($role == 3) {
            Student::create([
                'username' => $user->username,
                'user_id' => $user->id,
                'email' => $user->email,
            ]);
        } elseif ($role == 4) {
            Teacher::create([
                'username' => $user->username,
                'user_id' => $user->id
            ]);
        }
    
        session()->forget('user_id');
        return redirect(route('login'));
    }

    public function logout(Request $request)
    {
        Auth::user()->update(['status' => 'offline']);
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }

    public function CompanyStore(Request $request){
        $validateData = $request->validate([
            'username' => 'required',
            'company_name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);


        $user = User::create([
            'username' => $validateData['username'],
            'email' => $validateData['email'],
            'password' => Hash::make($validateData['password']),
        ]);
        $user->roles()->attach(5);
        
        $company = Company::create([
            'company_name' => $validateData['company_name'],
        ]);

        $representative = representative::create([
            'name' => $validateData['username'],
            'user_id' => $user->id,
            'company_id' => $company->id,
        ]);

        return redirect(route('login'));

        
    }
}