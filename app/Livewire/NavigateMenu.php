<?php

declare(strict_types=1);

namespace App\Livewire;

use Laravel\Jetstream\Http\Livewire\NavigationMenu;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class NavigateMenu extends NavigationMenu
{
    public function dropdwonLinks()
    {
        return [
            [
                'name' => 'profile.show',
                'value' => 'site.profile',
                'icon' => 'user',
                'role' => 'view-profile',
            ],
            [
                'name' => 'users',
                'value' => 'site.users',
                'icon' => 'user-group',
                'role' => 'view-user',
            ],
            [
                'name' => 'departments',
                'value' => 'site.departments',
                'icon' => 'squares-2x2',
                'role' => 'view-department',
            ],
            [
                'name' => 'roles',
                'value' => 'site.roles',
                'icon' => 'lock-closed',
                'role' => 'view-role',
            ],
            [
                'name' => 'permissions',
                'value' => 'site.permissions',
                'icon' => 'receipt-percent',
                'role' => 'view-permission',
            ],
            [
                'name' => 'backup',
                'value' => 'site.backup',
                'icon' => 'inbox-stack',
                'role' => 'view-backup-database',
            ],
        ];
    }

    public function responsiveLinks()
    {
        return [
            [
                'name' => 'customers',
                'value' => 'site.customers',
                'icon' => 'user-group',
                'role' => 'view-customer',
            ],
            [
                'name' => 'companies',
                'value' => 'site.companies',
                'icon' => 'building-office-2',
                'role' => 'view-company',
            ],
            [
                'name' => 'shops',
                'value' => 'site.shops',
                'icon' => 'building-storefront',
                'role' => 'view-shop',
            ],
            [
                'name' => 'sales',
                'value' => 'site.sales',
                'icon' => 'document-text',
                'role' => 'view-sale',
            ],
        ];
    }

    public function render()
    {
        return view('livewire.navigate-menu');
    }
}
