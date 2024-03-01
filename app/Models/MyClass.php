<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyClass extends Model
{
    use HasFactory;
    protected $table = 'classes';
    protected $fillable = ['name'];
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function quizzes()
    {
        return $this->belongsToMany(Quize::class);
    }
}
