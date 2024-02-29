<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = user::create([
            'prenom' => 'Massamba',
            'nom' => 'Diouf',
            'email' => 'masspi@gmail.com',
            'password' => Hash::make('passer123')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = user::create([
            'prenom' => 'Mass',
            'nom' => 'diouf',
            'email' => 'mass@mail.com',
            'password' => Hash::make('passer')
        ]);
        $admin->assignRole('admin');

        // Creating Product Manager User
        $user = User::create([
            'prenom' => 'pape',
            'nom' => 'sems',
            'email' => 'sems@mail.com',
            'password' => Hash::make('passer')
        ]);
        $user->assignRole('user');
    }
}
