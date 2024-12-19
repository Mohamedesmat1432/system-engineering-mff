<div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-3">
        <canvas id="chartShopOutsideDamiettaId" x-data="chartShopOutsideDamietta" x-init="initChartShopOutsideDamietta()" class="w-full"></canvas>
    </div>

    @push('scripts')
    <script>
        function chartShopOutsideDamietta() {
                return {
                    chart: null,
                    initChartShopOutsideDamietta() {
                        const ctx = document.getElementById('chartShopOutsideDamiettaId').getContext('2d');

                        // Ensure any existing chart is destroyed before creating a new one
                        if (this.chart) {
                            this.chart.destroy();
                        }

                        // Fetch data dynamically from Livewire (replace this with your actual data)
                        const chartDataShopOutsideDamietta = @js($chartDataShopOutsideDamietta);

                        // Create a new Chart.js instance
                        this.chart = new Chart(ctx, {
                            type: 'doughnut',
                            data: chartDataShopOutsideDamietta,
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            },
                        });
                    },
                    updateChartShopOutsideDamietta() {
                        // Reinitialize the chart on Livewire navigation
                        this.initChartShopOutsideDamietta();
                    },
                };
            }
    </script>
    @endpush
</div>