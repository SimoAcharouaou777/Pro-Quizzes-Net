<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    
    use HasFactory;
    protected $fillable = ['username','user_id']; 

    public function classes()
    {
        return $this->belongsToMany(MyClass::class, 'class_student', 'student_id', 'class_id');
    }
    
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
