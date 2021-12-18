<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = Role::create(['name' => 'Admin']);
        $client = Role::create(['name' => 'Client']);
// $permission = Permission::create(['name' => 'edit articles']);


        $admin_user = User::create([
            'name'=>'Gustavo',
            'email'=>'gamr21@outlook.es',
            'password'=>'$2y$10$UWrWMU9GPWytScvIDu5fMOJTfiCvqA/ZpjxTiu7Js0310ySTjuYPy'
        ]);
        $admin_user->perfil()->create();
        $admin_user->assignRole('Admin');

        $client_user = User::create([
            'name'=>'Alex',
            'email'=>'alexis.suarez@espoch.edu.ec',
            'password'=>'$2y$10$UWrWMU9GPWytScvIDu5fMOJTfiCvqA/ZpjxTiu7Js0310ySTjuYPy'
        ]);
        $client_user->perfil()->create();
        $client_user->assignRole('Client');
    
    }
}
