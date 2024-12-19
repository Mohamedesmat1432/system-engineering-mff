<?php

namespace App\Livewire\Chart;

use App\Models\DataShopDamiettaOnly;
use Livewire\Component;

class ChartShopDamiettaOnly extends Component
{
    public $chartDataShopDamiettaOnly;

    public function mount()
    {
        // Fetch data grouped by month
        $monthlyData = DataShopDamiettaOnly::selectRaw('national_number  as n, COUNT(*) as count')
            ->groupBy('n')
            ->get()
            ->mapWithKeys(function ($item) {
                return [$item->n => $item->count];
            });

        $this->chartDataShopDamiettaOnly = [
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
        return view('livewire.chart.chart-shop-damietta-only');
    }
}
