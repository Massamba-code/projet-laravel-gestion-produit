<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Super Admin']);
        $admin = Role::create(['name' => 'admin']);
        $user = Role::create(['name' => 'user']);

        $admin->givePermissionTo([
            'create-user',
            'edit-user',
            'delete-user',
            'create-product',
            'edit-product',
            'delete-product',
            'create-client',
            'edit-client',
            'delete-client',
            'create-categorie',
            'edit-categorie',
            'delete-categorie',
            'create-commande',
            'edit-commande',
            'delete-commande',
            'view-dashboard'

        ]);

        $user->givePermissionTo([
            'create-product',
            'edit-product',
            'delete-product',
            'create-client',
            'edit-client',
            'delete-client',
            'create-commande',
            'edit-commande',
            'delete-commande'
        ]);
    }
}
