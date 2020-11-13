<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'  => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password'  => Hash::make('12341234'),
        ]);

        $user->assignRole('superadmin');
        $user->givePermissionTo('superadmin');

        $user = User::create([
            'name'  => 'Rizka Agustin',
            'email' => 'admin@gmail.com',
            'password'  => Hash::make('12341234'),
        ]);
        $user->assignRole('admin');
        $user->givePermissionTo('admin');

        $user = User::create([
            'name'  => 'Iis Maesaroh',
            'email' => 'adminsetjen@gmail.com',
            'password'  => Hash::make('12341234'),
        ]);
        $user->assignRole('admin');
        $user->givePermissionTo('admin');

        $user = User::create([
            'name'  => 'Amira Syifa',
            'email' => 'adminlitbang@gmail.com',
            'password'  => Hash::make('12341234'),
        ]);

        $user->assignRole('admin');
        $user->givePermissionTo('admin');
    }
}
