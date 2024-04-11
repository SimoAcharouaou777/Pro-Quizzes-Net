<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'companies';

    protected $fillable = [
        'company_name',
        'company_email',
        'description',
        'domaine',
        'location',
        'founded_date',
    ];

    public function representative()
    {
        return $this->hasOne(Representative::class);
    }
    public function quizzes()
    {
        return $this->hasMany(Quize::class);
    }
}
