<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class MyClass extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $table = 'classes';
    protected $fillable = ['name','teacher_name','level','learners','campus','class_code','teacher_id'];
    
    
    
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function quizzes()
    {
        return $this->belongsToMany(Quize::class);
    }
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
