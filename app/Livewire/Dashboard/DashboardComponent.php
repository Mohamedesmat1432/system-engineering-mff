<?php

namespace App\Livewire\Dashboard;

use App\Models\Customer;
use App\Models\DataShopDamiettaOnly;
use App\Models\DataShopOutsideDamietta;
use App\Models\Department;
use App\Models\Permission;
use App\Models\Role;
use App\Models\Sale;
use App\Models\Shop;
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
                'bg' => 'bg-blue-500',
                'hover' => 'hover:bg-blue-600',
                'count' => Role::count(),
            ],
            // [
            //     'name' => 'permissions',
            //     'value' => __('site.permissions'),
            //     'icon' => 'lock-open',
            //     'role' => 'view-permission',
            //     'bg' => 'bg-red-500',
            //     'hover' => 'hover:bg-red-600',
            //     'count' => Permission::count(),
            // ],
            // [
            //     'name' => 'departments',
            //     'value' => __('site.departments'),
            //     'icon' => 'squares-2x2',
            //     'role' => 'view-department',
            //     'bg' => 'bg-red-500',
            //     'hover' => 'hover:bg-red-600',
            //     'count' => Department::count(),
            // ],
            [
                'name' => 'customers',
                'value' => __('site.customers'),
                'icon' => 'user-group',
                'role' => 'view-customer',
                'bg' => 'bg-red-500',
                'hover' => 'hover:bg-red-600',
                'count' => Customer::count(),
            ],
            [
                'name' => 'shops',
                'value' => __('site.shops'),
                'icon' => 'building-storefront',
                'role' => 'view-shop',
                'bg' => 'bg-gray-800',
                'hover' => 'hover:bg-gray-900',
                'count' => Shop::count(),
            ],
            [
                'name' => 'sales',
                'value' => __('site.sales'),
                'icon' => 'document-text',
                'role' => 'view-sale',
                'bg' => 'bg-gray-500',
                'hover' => 'hover:bg-gray-600',
                'count' => Sale::count(),
            ],
        ];
    }

    public function render()
    {      
        return view('livewire.dashboard.dashboard-component');
    }
}
