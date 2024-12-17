<div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-3">
        <canvas id="chartUserId" x-data="chartUser" x-init="initChartUser()" class="w-full"></canvas>
    </div>

    @push('scripts')
    <script>
        function chartUser() {
                return {
                    chart: null,
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
                            type: 'bar',
                            data: chartDataUser,
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
                    updateChartUser() {
                        // Reinitialize the chart on Livewire navigation
                        this.initChartUser();
                    },
                };
            }
    </script>
    @endpush
</div>