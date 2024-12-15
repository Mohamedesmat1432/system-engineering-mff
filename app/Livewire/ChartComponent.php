<?php

namespace App\Livewire;

use Livewire\Component;

class ChartComponent extends Component
{
    public $chartData;

    public function mount()
    {
        // Sample data
        $this->chartData = [
            'labels' => ['January', 'February', 'March', 'April', 'May'],
            'datasets' => [
                [
                    'label' => 'Sales',
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 1,
                    'data' => [65, 59, 80, 81, 56],
                ],
            ],
        ];
    }

    public function updateChartData()
    {
        $this->chartData['datasets'][0]['data'] = [75, 88, 67, 90, 76];
        $this->dispatch('updateChart');
    }


    public function render()
    {
        $this->authorize('view-chart');
        
        return view('livewire.chart-component');
    }
}
