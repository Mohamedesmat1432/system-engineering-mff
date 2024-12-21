<?php

namespace App\Livewire\Dashboard;

use App\Models\DataShopDamiettaOnly;
use App\Models\DataShopOutsideDamietta;
use App\Models\Department;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class DashboardComponent extends Component
{
    public function dashboardLinks()
    {
        return [
            [
                'name' => 'users',
                'value' => __('site.users'),
                'icon' => 'user-group',
                'role' => 'view-user',
                'bg' => 'bg-green-500',
                'hover' => 'hover:bg-green-600',
                'count' => User::count(),
            ],
            [
                'name' => 'roles',
                'value' => __('site.roles'),
                'icon' => 'lock-closed',
                'role' => 'view-role',
                'bg' => 'bg-blue-600',
                'hover' => 'hover:bg-blue-700',
                'count' => Role::count(),
            ],
            [
                'name' => 'permissions',
                'value' => __('site.permissions'),
                'icon' => 'lock-open',
                'role' => 'view-permission',
                'bg' => 'bg-red-500',
                'hover' => 'hover:bg-red-600',
                'count' => Permission::count(),
            ],
            [
                'name' => 'shops.outside.damietta',
                'value' => __('site.list_shop_outside_damietta'),
                'icon' => 'list-bullet',
                'role' => 'view-shop-outside-damietta',
                'bg' => 'bg-gray-800',
                'hover' => 'hover:bg-gray-900',
                'count' => DataShopOutsideDamietta::count(),
            ],
            [
                'name' => 'shops.damietta.only',
                'value' => __('site.list_shop_damietta_only'),
                'icon' => 'clipboard-document-list',
                'role' => 'view-shop-damietta-only',
                'bg' => 'bg-gray-500',
                'hover' => 'hover:bg-gray-600',
                'count' => DataShopDamiettaOnly::count(),
            ],
            [
                'name' => 'departments',
                'value' => __('site.departments'),
                'icon' => 'squares-2x2',
                'role' => 'view-department',
                'bg' => 'bg-red-600',
                'hover' => 'hover:bg-red-700',
                'count' => Department::count(),
            ],
        ];
    }

    public function render()
    {      
        return view('livewire.dashboard.dashboard-component');
    }
}
