<div>
    <div x-data="chartCustomer" class="grid grid-cols-1 place-items-center gap-6 mt-3">
        <canvas id="chartCustomerId" x-init="initChartCustomer()"></canvas>
        <x-select x-model="chartType" @change="updateChartCustomerType">
            <option value="doughnut">{{ __('site.doughnut') }}</option>
            <option value="bar">{{ __('site.bar') }}</option>
            <option value="line">{{ __('site.line') }}</option>
        </x-select>
    </div>

    @push('scripts')
    <script>
        function chartCustomer() {
            return {
                chart: null,
                chartType: localStorage.getItem('chartTypeCustomer') || 'bar',
                initChartCustomer() {
                    const ctx = document.getElementById('chartCustomerId').getContext('2d');

                    // Ensure any existing chart is destroyed before creating a new one
                    if (this.chart) {
                        this.chart.destroy();
                    }

                    // Fetch data dynamically from Livewire (replace this with your actual data)
                    const chartDataCustomer = @js($chartDataCustomer);

                    // Create a new Chart.js instance
                    this.chart = new Chart(ctx, {
                        type: this.chartType,
                        data: chartDataCustomer,
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
                updateChartCustomerType() {
                    localStorage.setItem('chartTypeCustomer', this.chartType);
                    this.initChartCustomer();
                }
            };
        }
    </script>
    @endpush
</div>