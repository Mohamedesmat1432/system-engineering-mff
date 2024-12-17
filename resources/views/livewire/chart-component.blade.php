<div>
    <div x-data="chartComponent" x-init="initChart()" wire:navigate="updateChart" class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-3">
        <canvas id="chart" class="w-full"></canvas>
    </div>

    @push('scripts')
        <script>
            function chartComponent() {
                return {
                    chart: null,
                    initChart() {
                        const ctx = document.getElementById('chart').getContext('2d');
                        
                        // Ensure any existing chart is destroyed before creating a new one
                        if (this.chart) {
                            this.chart.destroy();
                        }

                        // Fetch data dynamically from Livewire (replace this with your actual data)
                        const chartData = @js($chartData);

                        // Create a new Chart.js instance
                        this.chart = new Chart(ctx, {
                            type: 'bar',
                            data: chartData,
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                            },
                        });
                    },
                    updateChart() {
                        // Reinitialize the chart on Livewire navigation
                        this.initChart();
                    },
                };
            }
        </script>
    @endpush
</div>
