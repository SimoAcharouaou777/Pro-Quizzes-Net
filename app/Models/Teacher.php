<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = ['name','user_id']; 

    public function classes()
    {
        return $this->hasMany(MyClass::class);
    }
    
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
