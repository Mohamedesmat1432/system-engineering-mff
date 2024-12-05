<?php

namespace App\Livewire\Dashboard;

use App\Models\Role;
use App\Models\User;
use App\Traits\SortSearchTrait;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use Carbon\Carbon;

class DashboardComponent extends Component
{
    use WithPagination, SortSearchTrait;

    public $start_date = '';
    public $end_date = '';

    public function dashboardLinks()
    {
        return [
            [
                'name' => 'users',
                'value' => __('site.users'),
                'icon' => 'user-group',
                'role' => 'view-user',
                'bg' => 'bg-gray-500',
                'hover' => 'hover:bg-gray-600',
                'count' => User::count(),
                'total' => '',
            ],
            [
                'name' => 'roles',
                'value' => __('site.roles'),
                'icon' => 'lock-closed',
                'role' => 'view-role',
                'bg' => 'bg-green-500',
                'hover' => 'hover:bg-green-600',
                'count' => Role::count(),
                'total' => '',
            ],
        ];
    }

    public function render()
    {      
        return view('livewire.dashboard.dashboard-component');
    }
}
