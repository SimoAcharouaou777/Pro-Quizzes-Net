<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $addClassPermission = Permission::create([
            'name' => 'AddClass',
        ]);

        $teacherRole = Role::find(4);
        $teacherRole->permissions()->attach($addClassPermission);
    }
}
