<?php

namespace App\Livewire\Chart;

use App\Models\DataShopOutsideDamietta;
use App\Models\Government;
use Livewire\Component;

class ChartShopOutsideDamietta extends Component
{
    public $chartDataShopOutsideDamietta;

    public function mount()
    {
        // Fetch data grouped by month
        $monthlyData = DataShopOutsideDamietta::selectRaw('government_id as government , COUNT(*) as count')
            ->groupBy('government')
            ->get()
            ->mapWithKeys(function ($item) {
                $government = Government::findOrFail($item->government);
                $government = (app()->getLocale() === 'ar') ? $government->name_ar : $government->name_en;
                return [$government => $item->count];
            });

        $this->chartDataShopOutsideDamietta = [
            'labels' => $monthlyData->keys(),
            'datasets' => [
                [
                    'label' => $monthlyData->keys(),
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
        return view('livewire.chart.chart-shop-outside-damietta');
    }
}
