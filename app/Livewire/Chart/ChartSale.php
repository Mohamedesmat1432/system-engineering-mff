<?php

namespace App\Livewire\Chart;

use App\Models\Customer;
use App\Models\Sale;
use Carbon\Carbon;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class ChartSale extends Component
{
    public $chartDataSale;

    public function mount()
    {
        // Fetch data grouped by month
        $monthlyData = Sale::selectRaw('customer_id as customer , COUNT(*) as count')
        ->groupBy('customer')
        ->get()
        ->mapWithKeys(function ($item) {
            $customer = Customer::findOrFail($item->customer);
            return [$customer->customer_name => $item->count];
        });

        $this->chartDataSale = [
            'labels' => $monthlyData->keys(),
            'datasets' => [
                [
                    'label' => __('site.sales'),
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
        $this->authorize('view-chart-sale');

        return view('livewire.chart.chart-sale');
    }
}
