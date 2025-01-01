<div>
    <div x-data="chartShopDamiettaOnly" class="grid grid-cols-1 place-items-center gap-6 mt-3">
        <canvas id="chartShopDamiettaOnlyId" x-init="initChartShopDamiettaOnly()"></canvas>
        <x-select x-model="chartType" @change="updateChartShopDamiettaOnlyType">
            <option value="doughnut">{{ __('site.doughnut') }}</option>
            <option value="bar">{{ __('site.bar') }}</option>
            <option value="line">{{ __('site.line') }}</option>
        </x-select>
    </div>

    @push('scripts')
    <script>
        function chartShopDamiettaOnly() {
            return {
                chart: null,
                chartType: localStorage.getItem('chartTypeShopDamiettaOnly') || 'doughnut',
                initChartShopDamiettaOnly() {
                    const ctx = document.getElementById('chartShopDamiettaOnlyId').getContext('2d');

                    // Ensure any existing chart is destroyed before creating a new one
                    if (this.chart) {
                        this.chart.destroy();
                    }

                    // Fetch data dynamically from Livewire (replace this with your actual data)
                    const chartDataShopDamiettaOnly = @js($chartDataShopDamiettaOnly);

                    if(chartDataShopDamiettaOnly) {
                        // Create a new Chart.js instance
                        this.chart = new Chart(ctx, {
                            type: this.chartType,
                            data: chartDataShopDamiettaOnly,
                            options: {
                                responsive: false,
                                maintainAspectRatio: false,
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            },
                        });
                    }
                },
                updateChartShopDamiettaOnlyType() {
                    localStorage.setItem('chartTypeShopDamiettaOnly', this.chartType);
                    this.initChartShopDamiettaOnly();
                },
            };
        }
    </script>
    @endpush
</div>