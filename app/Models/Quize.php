<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quize extends Model
{
    use HasFactory;
    protected $table = 'quizzes';
    protected $fillable = ['title', 'description', 'category_id', 'user_id', 'quiz_type'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function teachers()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function classes()
    {
        return $this->belongsToMany(MyClass::class);
    }
    public function companies()
    {
        return $this->belongsTo(Company::class);
    }
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
