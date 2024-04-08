<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Student extends Model implements HasMedia
{
    
    use HasFactory, InteractsWithMedia;
    protected $fillable = ['username','user_id','email', 'phone_number', 'student_id']; 

    public function classes()
    {
        return $this->belongsToMany(MyClass::class, 'class_student', 'student_id', 'class_id');
    }
    
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
