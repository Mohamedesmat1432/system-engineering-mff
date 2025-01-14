<div>
    <div x-data="chartSale" class="grid grid-cols-1 place-items-center gap-6 mt-3">
        <canvas id="chartSaleId" x-init="initChartSale()"></canvas>
        <x-select x-model="chartType" @change="updateChartSaleType">
            <option value="doughnut">{{ __('site.doughnut') }}</option>
            <option value="bar">{{ __('site.bar') }}</option>
            <option value="line">{{ __('site.line') }}</option>
        </x-select>
    </div>

    @push('scripts')
    <script>
        function chartSale() {
            return {
                chart: null,
                chartType: localStorage.getItem('chartTypeSale') || 'bar',
                initChartSale() {
                    const ctx = document.getElementById('chartSaleId').getContext('2d');

                    // Ensure any existing chart is destroyed before creating a new one
                    if (this.chart) {
                        this.chart.destroy();
                    }

                    // Fetch data dynamically from Livewire (replace this with your actual data)
                    const chartDataSale = @js($chartDataSale);

                    // Create a new Chart.js instance
                    this.chart = new Chart(ctx, {
                        type: this.chartType,
                        data: chartDataSale,
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
                updateChartSaleType() {
                    localStorage.setItem('chartTypeSale', this.chartType);
                    this.initChartSale();
                }
            };
        }
    </script>
    @endpush
</div>