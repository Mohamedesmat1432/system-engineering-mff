<?php
declare(strict_types=1);
namespace App\Livewire;

use Laravel\Jetstream\Http\Livewire\NavigationMenu;

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
                'name' => 'shops.outside.damietta',
                'value' => 'site.list_shop_outside_damietta',
                'icon' => 'squares-2x2',
                'role' => 'view-shop-outside-damietta',
            ],
            [
                'name' => 'shops.damietta.only',
                'value' => 'site.list_shop_damietta_only',
                'icon' => 'squares-2x2',
                'role' => 'view-shop-damietta-only',
            ],
        ];
    }

    public function render()
    {
        return view('livewire.navigate-menu');
    }
}
