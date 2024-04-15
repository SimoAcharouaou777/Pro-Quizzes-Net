<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Quize extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $table = 'quizzes';
    protected $fillable = ['title', 'description', 'category_id', 'user_id', 'quiz_type','status','start_time','end_time'];
    protected $dates = ['start_time', 'end_time'];
    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function teachers()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function classes()
    {
        return $this->belongsToMany(MyClass::class, 'classe_quize', 'quize_id', 'class_id');
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
