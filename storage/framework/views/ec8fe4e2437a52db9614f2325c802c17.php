<div>
    <div x-data="chartShopDamiettaOnly" class="grid grid-cols-1 place-items-center gap-6 mt-3">
        <canvas id="chartShopDamiettaOnlyId" x-init="initChartShopDamiettaOnly()"></canvas>
        <?php if (isset($component)) { $__componentOriginaled2cde6083938c436304f332ba96bb7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled2cde6083938c436304f332ba96bb7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select','data' => ['xModel' => 'chartType','@change' => 'updateChartShopDamiettaOnlyType']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-model' => 'chartType','@change' => 'updateChartShopDamiettaOnlyType']); ?>
            <option value="doughnut">Doughnut</option>
            <option value="bar">Bar</option>
            <option value="line">Line</option>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $attributes = $__attributesOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__attributesOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $component = $__componentOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__componentOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>
    </div>

    <?php $__env->startPush('scripts'); ?>
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
                    const chartDataShopDamiettaOnly = <?php echo \Illuminate\Support\Js::from($chartDataShopDamiettaOnly)->toHtml() ?>;

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
    <?php $__env->stopPush(); ?>
</div><?php /**PATH /var/www/resources/views/livewire/chart/chart-shop-damietta-only.blade.php ENDPATH**/ ?>