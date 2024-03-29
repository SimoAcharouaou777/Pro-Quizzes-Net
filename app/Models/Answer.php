<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $table = 'answers';
    protected $fillable = ['response', 'question_id', 'status'];
    public function questions()
    {
        return $this->belongsTo(Question::class);
    }
}
