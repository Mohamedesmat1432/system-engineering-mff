<?php

namespace App\Livewire\Chart;

use App\Models\Customer;
use Carbon\Carbon;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class ChartCustomer extends Component
{
    public $chartDataCustomer;

    public function mount()
    {
        // Fetch data grouped by month
        $monthlyData = Customer::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->get()
            ->mapWithKeys(function ($item) {
                return [Carbon::create()->month($item->month)->format('F') => $item->count];
            });

        $this->chartDataCustomer = [
            'labels' => $monthlyData->keys(),
            'datasets' => [
                [
                    'label' => __('site.customers'),
                    'backgroundColor' => [
                        'rgb(54, 162, 235)',
                        'rgb(255, 99, 132)',
                        'rgb(255, 205, 86)',
                        'rgba(75, 192, 192, 0.4)',
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(75, 192, 192, 0.7)',
                        'rgba(75, 192, 192, 0.8)',
                        'rgba(75, 192, 192, 0.9)',
                        'rgba(75, 192, 192, 0.10)',
                        'rgba(75, 192, 192, 0.11)',
                        'rgba(75, 192, 192, 0.12)',
                    ],
                    'borderColor' => [
                        'rgb(54, 162, 235)',
                        'rgb(255, 99, 132)',
                        'rgb(255, 205, 86)',
                        'rgba(75, 192, 192, 0.4)',
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(75, 192, 192, 0.7)',
                        'rgba(75, 192, 192, 0.8)',
                        'rgba(75, 192, 192, 0.9)',
                        'rgba(75, 192, 192, 0.10)',
                        'rgba(75, 192, 192, 0.11)',
                        'rgba(75, 192, 192, 0.12)',
                    ],
                    'hoverOffset' => 4,
                    'borderWidth' => 1,
                    'data' => $monthlyData->values(),
                ],
            ],
        ];
    }

    public function render()
    {
        $this->authorize('view-chart-customer');

        return view('livewire.chart.chart-customer');
    }
}
