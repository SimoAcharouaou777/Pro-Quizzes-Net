<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class BaneUserController extends Controller
{
    public function banUser(Request $request, User $user)
    {
        if ($user->status == 'banned') {
            $user->status = 'online';
        } else {
            $user->status = 'banned';
        }
    
        $user->save();
    
        return redirect(route('admin.index'));
    }
}
 