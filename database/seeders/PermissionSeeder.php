<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'view-profile',
            'view-user',
            'create-user',
            'edit-user',
            'delete-user',
            'show-user',
            'restore-user',
            'force-delete-user',
            'bulk-delete-user',
            'force-bulk-delete-user',
            'import-export-user',
            'view-role',
            'create-role',
            'edit-role',
            'delete-role',
            'show-role',
            'bulk-delete-role',
            'import-export-role',
            'view-permission',
            'create-permission',
            'edit-permission',
            'delete-permission',
            'show-permission',
            'bulk-delete-permission',
            'import-export-permission',
            'view-trash-group-button',
            'view-backup-database',
            'view-department',
            'create-department',
            'edit-department',
            'delete-department',
            'show-department',
            'bulk-delete-department',
            'view-shop-outside-damietta',
            'create-shop-outside-damietta',
            'edit-shop-outside-damietta',
            'delete-shop-outside-damietta',
            'bulk-delete-shop-outside-damietta',
            'view-shop-damietta-only',
            'create-shop-damietta-only',
            'edit-shop-damietta-only',
            'delete-shop-damietta-only',
            'bulk-delete-shop-damietta-only',

        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
