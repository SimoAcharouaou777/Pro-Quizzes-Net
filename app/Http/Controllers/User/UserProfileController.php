<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\representative;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $student = Student::where('user_id', $user->id)->first();
        $representative = representative::where('user_id', $user->id)->first();
        return view('users.UserProfile', compact('user', 'student','representative'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $student = Student::where('user_id', $user->id)->first();
        $representative = representative::where('user_id', $user->id)->first();
        if ($request->has('username')) {
            $user->username = $request->input('username');
        }
        
        if ($request->has('email')) {
            $user->email = $request->input('email');
        }
        
        if ($request->has('phone_number')) {
            $user->phone_number = $request->input('phone_number');
        }
        if($request->has('student_id')){
            $student = Student::where('user_id', $user->id)->first();
            $student->student_id = $request->input('student_id');
            $student->save();
        }
        if($user->hasRole('representative')){
            $company = $representative->company;
            if($request->has('company_name')){
                $company->company_name = $request->input('company_name');
            }
            if($request->has('company_email')){
                $company->company_email = $request->input('company_email');
            }
            if($request->has('description')){
                $company->description = $request->input('description');
            }
            if($request->has('domaine')){
                $company->domaine = $request->input('domaine');
            }
            if($request->has('location')){
                $company->location = $request->input('location');
            }
            if($request->has('founded_date')){
                $company->founded_date = $request->input('founded_date');
            }
            $company->save();
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            if ($image->isValid()) {
                if ($user->hasRole('student')) {
                    $student->clearMediaCollection('media/students');
                    $student->addMediaFromRequest('image')->toMediaCollection('media/students', 'media_students');
                }elseif ($user->hasRole('representative')) {
                    $representative->clearMediaCollection('media/representatives');
                    $representative->addMediaFromRequest('image')->toMediaCollection('media/representatives', 'media_representatives');
                }else{
                    $user->clearMediaCollection('media/users');
                    $user->addMediaFromRequest('image')->toMediaCollection('media/users', 'media_users');
                }
            }
        }
        
        
        $user->save();
        
        return redirect()->back()->with('success', 'Profile updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
