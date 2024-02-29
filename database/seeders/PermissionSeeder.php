<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $permissions=[  'create-role',
            'edit-role',
            'delete-role',
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
      ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
