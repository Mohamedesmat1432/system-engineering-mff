<div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-3">
        <canvas id="myBarChart" class="w-full"></canvas>
        <canvas id="myChart2" class="w-full"></canvas>
    </div>

    @push('scripts')
        <script>
                import Chart from 'chart.js/auto';

            function initializeChart(chartData) {
                const ctx1 = document.getElementById('myBarChart').getContext('2d');

                if (window.myChart) {
                    window.myChart.destroy();
                }

                window.myChart = new Chart(ctx1, {
                    type: 'bar', // Change to 'line', 'pie', etc., as needed
                    data: {
                        labels: chartData.labels,
                        datasets: chartData.datasets
                    },
                    options: {
                        responsive: false,
                        maintainAspectRatio: false,
                        height: 400,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                        },
                    }
                });
            }

            if (!window.chartInitialized) {
                window.chartInitialized = true;

                document.addEventListener('livewire:navigate', () => {
                    initializeChart(@js($chartData));
                });
            }

            // Initialize the chart on the first load
            document.addEventListener('DOMContentLoaded', () => {
                initializeChart(@js($chartData));
            });

            // document.addEventListener('DOMContentLoaded', () => {
            //     const ctx2 = document.getElementById('myChart2').getContext('2d');
            //     new Chart(ctx2, {
            //         type: 'pie', // Change to 'line', 'pie', etc., as needed
            //         data: {
            //             labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            //             datasets: [{
            //                 label: '# of Votes',
            //                 data: [12, 19, 3, 5, 2, 3],
            //                 backgroundColor: [
            //                     'rgba(255, 99, 132, 0.2)',
            //                     'rgba(54, 162, 235, 0.2)',
            //                     'rgba(255, 206, 86, 0.2)',
            //                     'rgba(75, 192, 192, 0.2)',
            //                     'rgba(153, 102, 255, 0.2)',
            //                     'rgba(255, 159, 64, 0.2)'
            //                 ],
            //                 borderColor: [
            //                     'rgba(255, 99, 132, 1)',
            //                     'rgba(54, 162, 235, 1)',
            //                     'rgba(255, 206, 86, 1)',
            //                     'rgba(75, 192, 192, 1)',
            //                     'rgba(153, 102, 255, 1)',
            //                     'rgba(255, 159, 64, 1)'
            //                 ],
            //                 borderWidth: 1
            //             }]
            //         },
            //         options: {
            //             responsive: false,
            //             maintainAspectRatio: false,
            //             height: 400,
            //             plugins: {
            //                 legend: {
            //                     position: 'top',
            //                 },
            //             },
            //             scales: {
            //                 y: {
            //                     beginAtZero: true
            //                 }
            //             }
            //         }
            //     });
            // });
        </script>
    @endpush
</div>
