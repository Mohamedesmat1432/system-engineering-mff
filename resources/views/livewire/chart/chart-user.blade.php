<div>
    <div x-data="chartUser" class="grid grid-cols-1 place-items-center gap-6 mt-3">
        <canvas id="chartUserId" x-init="initChartUser()"></canvas>
        <x-select x-model="chartType" @change="updateChartUserType">
            <option value="doughnut">Doughnut</option>
            <option value="bar">Bar</option>
            <option value="line">Line</option>
        </x-select>
    </div>

    @push('scripts')
    <script>
        function chartUser() {
            return {
                chart: null,
                chartType: localStorage.getItem('chartTypeUser') || 'doughnut',
                initChartUser() {
                    const ctx = document.getElementById('chartUserId').getContext('2d');

                    // Ensure any existing chart is destroyed before creating a new one
                    if (this.chart) {
                        this.chart.destroy();
                    }

                    // Fetch data dynamically from Livewire (replace this with your actual data)
                    const chartDataUser = @js($chartDataUser);

                    // Create a new Chart.js instance
                    this.chart = new Chart(ctx, {
                        type: this.chartType,
                        data: chartDataUser,
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
                updateChartUserType() {
                    localStorage.setItem('chartTypeUser', this.chartType);
                    this.initChartUser();
                }
            };
        }
    </script>
    @endpush
</div>