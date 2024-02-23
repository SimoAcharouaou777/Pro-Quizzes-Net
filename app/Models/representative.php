<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class representative extends Model
{
    use HasFactory;
    protected $table = 'representatives';

    protected $fillable = [
        'name',
        'company_id',
        'user_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function companies()
    {
        return $this->belongsTo(Company::class);
    }
}
