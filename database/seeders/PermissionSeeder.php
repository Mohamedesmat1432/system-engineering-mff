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
            'view-chart-user',
            'view-role',
            'create-role',
            'edit-role',
            'delete-role',
            'show-role',
            'bulk-delete-role',
            'view-permission',
            'create-permission',
            'edit-permission',
            'delete-permission',
            'show-permission',
            'bulk-delete-permission',
            'view-trash-group-button',
            'view-backup-database',
            'view-department',
            'create-department',
            'edit-department',
            'delete-department',
            'show-department',
            'bulk-delete-department',
            'import-department',
            'export-department',
            'view-customer',
            'create-customer',
            'edit-customer',
            'delete-customer',
            'show-customer',
            'bulk-delete-customer',
            'import-customer',
            'export-customer',
            'view-chart-customer',
            'view-sale',
            'create-sale',
            'edit-sale',
            'delete-sale',
            'bulk-delete-sale',
            'import-sale',
            'export-sale',
            'view-chart-sale',
            'view-shop',
            'create-shop',
            'edit-shop',
            'delete-shop',
            'bulk-delete-shop',
            'import-shop',
            'export-shop',
            'view-chart-shop',
            'view-company',
            'create-company',
            'edit-company',
            'delete-company',
            'bulk-delete-company',
            'import-company',
            'export-company',
            'view-chart-company',
            'delete-profile-account',
            'logout-profile-sessions',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
