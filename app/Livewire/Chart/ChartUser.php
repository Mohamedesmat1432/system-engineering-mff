<?php

namespace App\Livewire\Chart;

use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class ChartUser extends Component
{
    public $chartDataUser;

    public function mount()
    {
        // Fetch data grouped by month
        $monthlyData = User::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->get()
            ->mapWithKeys(function ($item) {
                return [Carbon::create()->month($item->month)->format('F') => $item->count];
            });

        $this->chartDataUser = [
            'labels' => $monthlyData->keys(),
            'datasets' => [
                [
                    'label' => __('site.users'),
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 1,
                    'data' => $monthlyData->values(),
                ],
            ],
        ];
    }

    public function render()
    {
        $this->authorize('view-chart');
        
        return view('livewire.chart.chart-user');
    }
}
