<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
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
        return view('users.UserProfile', compact('user'));
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
        if ($request->has('username')) {
            $user->username = $request->input('username');
        }
        
        if ($request->has('email')) {
            $user->email = $request->input('email');
        }
        
        if ($request->has('phone_number')) {
            $user->phone_number = $request->input('phone_number');
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            if ($image->isValid()) {
                if ($user->hasRole('student')) {
                    $user->clearMediaCollection('media/students');
                    $user->addMediaFromRequest('image')->toMediaCollection('media/students', 'media_students');
                } else {
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
