<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Permission;
class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';

    public function users()
    {
        return $this->belongsToMany(User::class);
    }


}