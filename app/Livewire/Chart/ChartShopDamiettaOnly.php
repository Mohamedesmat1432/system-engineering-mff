<?php

namespace App\Livewire\Chart;

use App\Models\DataShopDamiettaOnly;
use App\Models\Government;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class ChartShopDamiettaOnly extends Component
{
    public $chartDataShopDamiettaOnly;

    public function mount()
    {
        // Fetch data grouped by month
        $monthlyData = DataShopDamiettaOnly::selectRaw('government_id as government , COUNT(*) as count')
            ->groupBy('government')
            ->get()
            ->mapWithKeys(function ($item) {
                $government = Government::findOrFail($item->government);
                $government = (app()->getLocale() === 'ar') ? $government->name_ar : $government->name_en;
                return [$government => $item->count];
            });

        $this->chartDataShopDamiettaOnly = [
            'labels' => $monthlyData->keys(),
            'datasets' => [
                [
                    'label' => $monthlyData->keys(),
                    'backgroundColor' => [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
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
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
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
