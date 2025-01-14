<div>
    <div x-data="chartShopOutsideDamietta" class="grid grid-cols-1 gap-6 mt-3 place-items-center">
        <canvas id="chartShopOutsideDamiettaId" x-init="initChartShopOutsideDamietta()"></canvas>
        <?php if (isset($component)) { $__componentOriginaled2cde6083938c436304f332ba96bb7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled2cde6083938c436304f332ba96bb7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select','data' => ['xModel' => 'chartType','@change' => 'updateChartShopOutsideDamiettaType']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-model' => 'chartType','@change' => 'updateChartShopOutsideDamiettaType']); ?>
            <option value="doughnut"><?php echo e(__('site.doughnut')); ?></option>
            <option value="bar"><?php echo e(__('site.bar')); ?></option>
            <option value="line"><?php echo e(__('site.line')); ?></option>
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
        function chartShopOutsideDamietta() {
            return {
                chart: null,
                chartType: localStorage.getItem('chartTypeShopOutsideDamietta') || 'bar',
                initChartShopOutsideDamietta() {
                    const ctx = document.getElementById('chartShopOutsideDamiettaId').getContext('2d');

                    // Ensure any existing chart is destroyed before creating a new one
                    if (this.chart) {
                        this.chart.destroy();
                    }

                    // Fetch data dynamically from Livewire (replace this with your actual data)
                    const chartDataShopOutsideDamietta = <?php echo \Illuminate\Support\Js::from($chartDataShopOutsideDamietta)->toHtml() ?>;

                    // Create a new Chart.js instance
                    this.chart = new Chart(ctx, {
                        type: this.chartType,
                        data: chartDataShopOutsideDamietta,
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
                updateChartShopOutsideDamiettaType() {
                    localStorage.setItem('chartTypeShopOutsideDamietta', this.chartType);
                    this.initChartShopOutsideDamietta();
                },
            };
        }
    </script>
    <?php $__env->stopPush(); ?>
</div><?php /**PATH /var/www/resources/views/livewire/chart/chart-shop-outside-damietta.blade.php ENDPATH**/ ?>