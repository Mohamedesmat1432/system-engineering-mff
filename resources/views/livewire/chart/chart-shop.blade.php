<div>
    <div x-data="chartShop" class="grid grid-cols-1 place-items-center gap-6 mt-3">
        <canvas id="chartShopId" x-init="initChartShop()"></canvas>
        <x-select x-model="chartType" @change="updateChartShopType">
            <option value="doughnut">{{ __('site.doughnut') }}</option>
            <option value="bar">{{ __('site.bar') }}</option>
            <option value="line">{{ __('site.line') }}</option>
        </x-select>
    </div>

    @push('scripts')
    <script>
        function chartShop() {
            return {
                chart: null,
                chartType: localStorage.getItem('chartTypeShop') || 'bar',
                initChartShop() {
                    const ctx = document.getElementById('chartShopId').getContext('2d');

                    // Ensure any existing chart is destroyed before creating a new one
                    if (this.chart) {
                        this.chart.destroy();
                    }

                    // Fetch data dynamically from Livewire (replace this with your actual data)
                    const chartDataShop = @js($chartDataShop);

                    // Create a new Chart.js instance
                    this.chart = new Chart(ctx, {
                        type: this.chartType,
                        data: chartDataShop,
                        options: {
                            responsive: true,
                            maintainAspectRatio: true,
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        },

                    });
                },
                updateChartShopType() {
                    localStorage.setItem('chartTypeShop', this.chartType);
                    this.initChartShop();
                }
            };
        }
    </script>
    @endpush
</div>