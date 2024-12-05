<?php

namespace App\Livewire\Dashboard;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Livewire\Component;

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
                'total' => '',
            ],
            [
                'name' => 'roles',
                'value' => __('site.roles'),
                'icon' => 'lock-closed',
                'role' => 'view-role',
                'bg' => 'bg-blue-500',
                'hover' => 'hover:bg-blue-600',
                'count' => Role::count(),
                'total' => '',
            ],
            [
                'name' => 'permissions',
                'value' => __('site.permissions'),
                'icon' => 'lock-open',
                'role' => 'view-permission',
                'bg' => 'bg-red-500',
                'hover' => 'hover:bg-red-600',
                'count' => Permission::count(),
                'total' => '',
            ],
        ];
    }

    public function render()
    {      
        return view('livewire.dashboard.dashboard-component');
    }
}
