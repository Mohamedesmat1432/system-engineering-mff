<div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-3">
        <canvas id="chartShopDamiettaOnlyId" x-data="chartShopDamiettaOnly" x-init="initChartShopDamiettaOnly()" class="w-full"></canvas>
    </div>

    @push('scripts')
    <script>
        function chartShopDamiettaOnly() {
                return {
                    chart: null,
                    initChartShopDamiettaOnly() {
                        const ctx = document.getElementById('chartShopDamiettaOnlyId').getContext('2d');

                        // Ensure any existing chart is destroyed before creating a new one
                        if (this.chart) {
                            this.chart.destroy();
                        }

                        // Fetch data dynamically from Livewire (replace this with your actual data)
                        const chartDataShopDamiettaOnly = @js($chartDataShopDamiettaOnly);

                        // Create a new Chart.js instance
                        this.chart = new Chart(ctx, {
                            type: 'bar',
                            data: chartDataShopDamiettaOnly,
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
                    updateChartShopDamiettaOnly() {
                        // Reinitialize the chart on Livewire navigation
                        this.initChartShopDamiettaOnly();
                    },
                };
            }
    </script>
    @endpush
</div>