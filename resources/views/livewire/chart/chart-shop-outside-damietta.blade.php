<div>
    <div x-data="chartShopOutsideDamietta" class="grid grid-cols-1 gap-6 mt-3 place-items-center">
        <canvas id="chartShopOutsideDamiettaId" x-init="initChartShopOutsideDamietta()"></canvas>
        <x-select x-model="chartType" @change="updateChartShopOutsideDamiettaType">
            <option value="doughnut">{{ __('site.doughnut') }}</option>
            <option value="bar">{{ __('site.bar') }}</option>
            <option value="line">{{ __('site.line') }}</option>
        </x-select>
    </div>

    @push('scripts')
    <script>
        function chartShopOutsideDamietta() {
            return {
                chart: null,
                chartType: localStorage.getItem('chartTypeShopOutsideDamietta') || 'doughnut',
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
                        type: this.chartType,
                        data: chartDataShopOutsideDamietta,
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
                },
                updateChartShopOutsideDamiettaType() {
                    localStorage.setItem('chartTypeShopOutsideDamietta', this.chartType);
                    this.initChartShopOutsideDamietta();
                },
            };
        }
    </script>
    @endpush
</div>