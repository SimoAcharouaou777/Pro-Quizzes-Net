<?php

namespace App\Http\Controllers\Admin\Quize;

use App\Http\Controllers\Controller;
use App\Models\Quize;
use Illuminate\Http\Request;

class ValidateQuizeController extends Controller
{
    public function index(){
        $quizzes = Quize::all();
        return view('admin.quizzes', compact('quizzes'));
    }

    public function publishQuize($id){
        $quize = Quize::find($id);
        $quize->status = 'published';
        $quize->save();
        return redirect()->back()->with('success', 'Quize published successfully');
    }

    public function unpublishQuize($id){
        $quize = Quize::find($id);
        $quize->status = 'unpublished';
        $quize->save();
        return redirect()->back()->with('success', 'Quize unpublished');
    }
}
