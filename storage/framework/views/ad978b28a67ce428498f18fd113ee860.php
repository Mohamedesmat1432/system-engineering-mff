<div>
    <?php if (isset($component)) { $__componentOriginal562cb1477a8769da678d472fe5deeba8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal562cb1477a8769da678d472fe5deeba8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-content','data' => ['pageName' => ''.e(__('site.list_shop_damietta_only')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('page-content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['page-name' => ''.e(__('site.list_shop_damietta_only')).'']); ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create-shop-damietta-only')): ?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('shop-damietta-only.create-shop-damietta-only', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1217790814-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-shop-damietta-only')): ?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('shop-damietta-only.update-shop-damietta-only', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1217790814-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete-shop-damietta-only')): ?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('shop-damietta-only.delete-shop-damietta-only', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1217790814-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('bulk-delete-shop-damietta-only')): ?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('shop-damietta-only.bulk-delete-shop-damietta-only', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1217790814-3', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('export-shop-damietta-only')): ?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('shop-damietta-only.export-shop-damietta-only', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1217790814-4', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php endif; ?>

        <div class="p-6 lg:p-8 bg-white border-b border-gray-200 rounded-md">

            <div class="flex justify-between">
                <h1 class="text-2xl font-medium text-gray-900 underline">
                    <?php echo e(__('site.list_shop_damietta_only')); ?>

                </h1>
            </div>

            <div class="mt-6 text-gray-500 leading-relaxed">
                <div class="mt-3">
                    <div class="md:flex justify-between">
                        <div class="mb-2 grid grid-cols-1 md:grid-cols-3 gap-4">
                            <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['type' => 'search','wire:model.live.debounce.500ms' => 'search','placeholder' => ''.e(__('site.search')).'...']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'search','wire:model.live.debounce.500ms' => 'search','placeholder' => ''.e(__('site.search')).'...']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>

                            <?php if (isset($component)) { $__componentOriginaled2cde6083938c436304f332ba96bb7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled2cde6083938c436304f332ba96bb7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select','data' => ['wire:model.live.debounce.500ms' => 'search_by_government','wire:change' => 'cities']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live.debounce.500ms' => 'search_by_government','wire:change' => 'cities']); ?>
                                <option value=""><?php echo e(__('site.search_by_government')); ?></option>
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->governments(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($key); ?>"><?php echo e($val); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
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

                            <?php if (isset($component)) { $__componentOriginaled2cde6083938c436304f332ba96bb7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled2cde6083938c436304f332ba96bb7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select','data' => ['wire:model.live.debounce.500ms' => 'search_by_city']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live.debounce.500ms' => 'search_by_city']); ?>
                                <option value=""> <?php echo e(__('site.search_by_city')); ?></option>
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->cities(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($key); ?>"><?php echo e($val); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
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
                        <div class="mb-2 grid grid-cols-2 md:grid-cols-2 gap-4">
                            <?php if (isset($component)) { $__componentOriginala6d15d77335de01bd81addac814f21ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala6d15d77335de01bd81addac814f21ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.create-button','data' => ['permission' => 'create-shop-damietta-only']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('create-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['permission' => 'create-shop-damietta-only']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala6d15d77335de01bd81addac814f21ff)): ?>
<?php $attributes = $__attributesOriginala6d15d77335de01bd81addac814f21ff; ?>
<?php unset($__attributesOriginala6d15d77335de01bd81addac814f21ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala6d15d77335de01bd81addac814f21ff)): ?>
<?php $component = $__componentOriginala6d15d77335de01bd81addac814f21ff; ?>
<?php unset($__componentOriginala6d15d77335de01bd81addac814f21ff); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginalead669e33878677f706bb89fd3f8e06c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalead669e33878677f706bb89fd3f8e06c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.export-button','data' => ['permission' => 'export-shop-damietta-only']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('export-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['permission' => 'export-shop-damietta-only']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalead669e33878677f706bb89fd3f8e06c)): ?>
<?php $attributes = $__attributesOriginalead669e33878677f706bb89fd3f8e06c; ?>
<?php unset($__attributesOriginalead669e33878677f706bb89fd3f8e06c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalead669e33878677f706bb89fd3f8e06c)): ?>
<?php $component = $__componentOriginalead669e33878677f706bb89fd3f8e06c; ?>
<?php unset($__componentOriginalead669e33878677f706bb89fd3f8e06c); ?>
<?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('bulk-delete-shop-damietta-only')): ?>
                <?php if (isset($component)) { $__componentOriginal6c52264334eecd11608d21550eaa588a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6c52264334eecd11608d21550eaa588a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bulk-delete-button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bulk-delete-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6c52264334eecd11608d21550eaa588a)): ?>
<?php $attributes = $__attributesOriginal6c52264334eecd11608d21550eaa588a; ?>
<?php unset($__attributesOriginal6c52264334eecd11608d21550eaa588a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6c52264334eecd11608d21550eaa588a)): ?>
<?php $component = $__componentOriginal6c52264334eecd11608d21550eaa588a; ?>
<?php unset($__componentOriginal6c52264334eecd11608d21550eaa588a); ?>
<?php endif; ?>
                <?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal163c8ba6efb795223894d5ffef5034f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal163c8ba6efb795223894d5ffef5034f5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                     <?php $__env->slot('thead', null, []); ?> 
                        <tr>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('bulk-delete-shop-damietta-only')): ?>
                            <td class="px-4 py-2 border">
                                <div class="text-center">
                                    <?php if (isset($component)) { $__componentOriginal74b62b190a03153f11871f645315f4de = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal74b62b190a03153f11871f645315f4de = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.checkbox','data' => ['wire:click' => 'checkboxAll','wire:model.live' => 'checkbox_status']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'checkboxAll','wire:model.live' => 'checkbox_status']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal74b62b190a03153f11871f645315f4de)): ?>
<?php $attributes = $__attributesOriginal74b62b190a03153f11871f645315f4de; ?>
<?php unset($__attributesOriginal74b62b190a03153f11871f645315f4de); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal74b62b190a03153f11871f645315f4de)): ?>
<?php $component = $__componentOriginal74b62b190a03153f11871f645315f4de; ?>
<?php unset($__componentOriginal74b62b190a03153f11871f645315f4de); ?>
<?php endif; ?>
                                </div>
                            </td>
                            <?php endif; ?>
                            <td class="p-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('id')">
                                        <?php echo e(__('site.id')); ?>

                                    </button>
                                    <?php if (isset($component)) { $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sort-icon','data' => ['sortField' => 'id','sortBy' => $sort_by,'sortAsc' => $sort_asc]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sort-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sort_field' => 'id','sort_by' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_by),'sort_asc' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_asc)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $attributes = $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $component = $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('government_id')">
                                        <?php echo e(__('site.government_id')); ?>

                                    </button>
                                    <?php if (isset($component)) { $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sort-icon','data' => ['sortField' => 'government_id','sortBy' => $sort_by,'sortAsc' => $sort_asc]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sort-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sort_field' => 'government_id','sort_by' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_by),'sort_asc' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_asc)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $attributes = $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $component = $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('city_id')">
                                        <?php echo e(__('site.city_id')); ?>

                                    </button>
                                    <?php if (isset($component)) { $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sort-icon','data' => ['sortField' => 'city_id','sortBy' => $sort_by,'sortAsc' => $sort_asc]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sort-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sort_field' => 'city_id','sort_by' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_by),'sort_asc' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_asc)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $attributes = $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $component = $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('auction_date')">
                                        <?php echo e(__('site.auction_date')); ?>

                                    </button>
                                    <?php if (isset($component)) { $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sort-icon','data' => ['sortField' => 'auction_date','sortBy' => $sort_by,'sortAsc' => $sort_asc]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sort-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sort_field' => 'auction_date','sort_by' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_by),'sort_asc' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_asc)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $attributes = $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $component = $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('center')">
                                        <?php echo e(__('site.center')); ?>

                                    </button>
                                    <?php if (isset($component)) { $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sort-icon','data' => ['sortField' => 'center','sortBy' => $sort_by,'sortAsc' => $sort_asc]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sort-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sort_field' => 'center','sort_by' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_by),'sort_asc' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_asc)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $attributes = $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $component = $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('location')">
                                        <?php echo e(__('site.location')); ?>

                                    </button>
                                    <?php if (isset($component)) { $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sort-icon','data' => ['sortField' => 'location','sortBy' => $sort_by,'sortAsc' => $sort_asc]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sort-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sort_field' => 'location','sort_by' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_by),'sort_asc' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_asc)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $attributes = $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $component = $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('building_number')">
                                        <?php echo e(__('site.building_number')); ?>

                                    </button>
                                    <?php if (isset($component)) { $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sort-icon','data' => ['sortField' => 'building_number','sortBy' => $sort_by,'sortAsc' => $sort_asc]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sort-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sort_field' => 'building_number','sort_by' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_by),'sort_asc' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_asc)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $attributes = $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $component = $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('building_entrance_number')">
                                        <?php echo e(__('site.building_entrance_number')); ?>

                                    </button>
                                    <?php if (isset($component)) { $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sort-icon','data' => ['sortField' => 'building_entrance_number','sortBy' => $sort_by,'sortAsc' => $sort_asc]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sort-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sort_field' => 'building_entrance_number','sort_by' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_by),'sort_asc' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_asc)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $attributes = $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $component = $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('shop_number')">
                                        <?php echo e(__('site.shop_number')); ?>

                                    </button>
                                    <?php if (isset($component)) { $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sort-icon','data' => ['sortField' => 'shop_number','sortBy' => $sort_by,'sortAsc' => $sort_asc]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sort-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sort_field' => 'shop_number','sort_by' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_by),'sort_asc' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_asc)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $attributes = $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $component = $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('shop_area')">
                                        <?php echo e(__('site.shop_area')); ?>

                                    </button>
                                    <?php if (isset($component)) { $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sort-icon','data' => ['sortField' => 'shop_area','sortBy' => $sort_by,'sortAsc' => $sort_asc]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sort-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sort_field' => 'shop_area','sort_by' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_by),'sort_asc' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_asc)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $attributes = $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $component = $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('type_of_shop')">
                                        <?php echo e(__('site.type_of_shop')); ?>

                                    </button>
                                    <?php if (isset($component)) { $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sort-icon','data' => ['sortField' => 'type_of_shop','sortBy' => $sort_by,'sortAsc' => $sort_asc]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sort-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sort_field' => 'type_of_shop','sort_by' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_by),'sort_asc' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_asc)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $attributes = $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $component = $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('buyer_name')">
                                        <?php echo e(__('site.buyer_name')); ?>

                                    </button>
                                    <?php if (isset($component)) { $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sort-icon','data' => ['sortField' => 'buyer_name','sortBy' => $sort_by,'sortAsc' => $sort_asc]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sort-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sort_field' => 'buyer_name','sort_by' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_by),'sort_asc' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_asc)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $attributes = $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $component = $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('national_number')">
                                        <?php echo e(__('site.national_number')); ?>

                                    </button>
                                    <?php if (isset($component)) { $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sort-icon','data' => ['sortField' => 'national_number','sortBy' => $sort_by,'sortAsc' => $sort_asc]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sort-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sort_field' => 'national_number','sort_by' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_by),'sort_asc' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_asc)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $attributes = $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $component = $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('count_of_national_number')">
                                        <?php echo e(__('site.count_of_national_number')); ?>

                                    </button>
                                    <?php if (isset($component)) { $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sort-icon','data' => ['sortField' => 'count_of_national_number','sortBy' => $sort_by,'sortAsc' => $sort_asc]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sort-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sort_field' => 'count_of_national_number','sort_by' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_by),'sort_asc' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_asc)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $attributes = $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $component = $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('phone_number')">
                                        <?php echo e(__('site.phone_number')); ?>

                                    </button>
                                    <?php if (isset($component)) { $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sort-icon','data' => ['sortField' => 'phone_number','sortBy' => $sort_by,'sortAsc' => $sort_asc]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sort-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sort_field' => 'phone_number','sort_by' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_by),'sort_asc' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_asc)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $attributes = $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $component = $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('sell_price')">
                                        <?php echo e(__('site.sell_price')); ?>

                                    </button>
                                    <?php if (isset($component)) { $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sort-icon','data' => ['sortField' => 'sell_price','sortBy' => $sort_by,'sortAsc' => $sort_asc]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sort-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sort_field' => 'sell_price','sort_by' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_by),'sort_asc' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_asc)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $attributes = $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $component = $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('sell_price_for_meter')">
                                        <?php echo e(__('site.sell_price_for_meter')); ?>

                                    </button>
                                    <?php if (isset($component)) { $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sort-icon','data' => ['sortField' => 'sell_price_for_meter','sortBy' => $sort_by,'sortAsc' => $sort_asc]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sort-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sort_field' => 'sell_price_for_meter','sort_by' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_by),'sort_asc' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_asc)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $attributes = $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $component = $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('payment_method')">
                                        <?php echo e(__('site.payment_method')); ?>

                                    </button>
                                    <?php if (isset($component)) { $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sort-icon','data' => ['sortField' => 'payment_method','sortBy' => $sort_by,'sortAsc' => $sort_asc]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sort-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sort_field' => 'payment_method','sort_by' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_by),'sort_asc' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_asc)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $attributes = $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $component = $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
                                </div>
                            </td>
                            <td class="px-2 border" colspan="2">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('insurance_date')">
                                        <?php echo e(__('site.insurance')); ?>

                                    </button>
                                    <?php if (isset($component)) { $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sort-icon','data' => ['sortField' => 'insurance_date','sortBy' => $sort_by,'sortAsc' => $sort_asc]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sort-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sort_field' => 'insurance_date','sort_by' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_by),'sort_asc' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_asc)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $attributes = $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $component = $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
                                </div>
                                <div class="flex justify-between">
                                    <span><?php echo e(__('site.amount')); ?></span>
                                    <span><?php echo e(__('site.date')); ?></span>
                                </div>
                            </td>
                            <td class="px-2 py-2 border" colspan="2">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('remaining_sale_date')">
                                        <?php echo e(__('site.remaining_amount_sale')); ?>

                                    </button>
                                    <?php if (isset($component)) { $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sort-icon','data' => ['sortField' => 'remaining_sale_date','sortBy' => $sort_by,'sortAsc' => $sort_asc]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sort-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sort_field' => 'remaining_sale_date','sort_by' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_by),'sort_asc' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_asc)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $attributes = $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $component = $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
                                </div>
                                <div class="flex justify-between">
                                    <span><?php echo e(__('site.amount')); ?></span>
                                    <span><?php echo e(__('site.date')); ?></span>
                                </div>
                            </td>
                            <td class="px-2 py-2 border" colspan="2">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('maintenance_deposit_date')">
                                        <?php echo e(__('site.maintenance_deposit')); ?>

                                    </button>
                                    <?php if (isset($component)) { $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sort-icon','data' => ['sortField' => 'maintenance_deposit_date','sortBy' => $sort_by,'sortAsc' => $sort_asc]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sort-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sort_field' => 'maintenance_deposit_date','sort_by' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_by),'sort_asc' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_asc)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $attributes = $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $component = $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
                                </div>
                                <div class="flex justify-between">
                                    <span><?php echo e(__('site.amount')); ?></span>
                                    <span><?php echo e(__('site.date')); ?></span>
                                </div>
                            </td>
                            <!--[if BLOCK]><![endif]--><?php for($i = 1; $i <= 15; $i++): ?> 
                            <td class="px-2 py-2 border" colspan="2">
                            <div class="flex justify-center">
                                <button wire:click="sortByField('installment_date_<?php echo e($i); ?>')">
                                    <?php echo e(__("site.installment_{$i}")); ?>

                                </button>
                                <?php if (isset($component)) { $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sort-icon','data' => ['sortField' => 'installment_date_'.e($i).'','sortBy' => $sort_by,'sortAsc' => $sort_asc]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sort-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sort_field' => 'installment_date_'.e($i).'','sort_by' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_by),'sort_asc' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sort_asc)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $attributes = $__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__attributesOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e)): ?>
<?php $component = $__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e; ?>
<?php unset($__componentOriginalee2a861ad7afb8a8513aaf5b4abcef1e); ?>
<?php endif; ?>
                            </div>
                            <div class="flex justify-between">
                                <span><?php echo e(__('site.amount')); ?></span>
                                <span><?php echo e(__('site.date')); ?></span>
                            </div>
                            </td>
                            <?php endfor; ?><!--[if ENDBLOCK]><![endif]-->
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <?php echo e(__('site.action')); ?>

                                </div>
                            </td>
                        </tr>
                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('tbody', null, []); ?> 
                        <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $shops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr wire:key="shop-<?php echo e($shop->id); ?>" class="odd:bg-gray-100">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('bulk-delete-shop-damietta-only')): ?>
                            <td class="p-2 border">
                                <?php if (isset($component)) { $__componentOriginal74b62b190a03153f11871f645315f4de = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal74b62b190a03153f11871f645315f4de = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.checkbox','data' => ['wire:model.live' => 'checkbox_arr','value' => ''.e($shop->id).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'checkbox_arr','value' => ''.e($shop->id).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal74b62b190a03153f11871f645315f4de)): ?>
<?php $attributes = $__attributesOriginal74b62b190a03153f11871f645315f4de; ?>
<?php unset($__attributesOriginal74b62b190a03153f11871f645315f4de); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal74b62b190a03153f11871f645315f4de)): ?>
<?php $component = $__componentOriginal74b62b190a03153f11871f645315f4de; ?>
<?php unset($__componentOriginal74b62b190a03153f11871f645315f4de); ?>
<?php endif; ?>
                            </td>
                            <?php endif; ?>
                            <td class="p-2 border">
                                <?php echo e($shop->id); ?>

                            </td>
                            <td class="p-2 border">
                                <?php echo e(app()->getLocale() === 'ar' ? $shop->government?->name_ar : $shop->government->name_en); ?>

                            </td>
                            <td class="p-2 border">
                                <?php echo e(app()->getLocale() === 'ar' ? $shop->city->name_ar : $shop->city->name_en); ?>

                            </td>
                            <td class="p-2 border">
                                <?php echo e($shop->auction_date); ?>

                            </td>
                            <td class="p-2 border">
                                <?php echo e($shop->center); ?>

                            </td>
                            <td class="p-2 border">
                                <?php echo e($shop->location); ?>

                            </td>
                            <td class="p-2 border">
                                <?php echo e($shop->building_number); ?>

                            </td>
                            <td class="p-2 border">
                                <?php echo e($shop->building_entrance_number); ?>

                            </td>
                            <td class="p-2 border">
                                <?php echo e($shop->shop_number); ?>

                            </td>
                            <td class="p-2 border">
                                <?php echo e($shop->shop_area); ?>

                            </td>
                            <td class="p-2 border">
                                <?php echo e($shop->type_of_shop); ?>

                            </td>
                            <td class="p-2 border">
                                <?php echo e($shop->buyer_name); ?>

                            </td>
                            <td class="p-2 border">
                                <?php echo e($shop->national_number); ?>

                            </td>
                            <td class="p-2 border">
                                <?php echo e($shop->count_of_national_number); ?>

                            </td>
                            <td class="p-2 border">
                                <?php echo e($shop->phone_number); ?>

                            </td>
                            <td class="p-2 border">
                                <?php echo e($shop->sell_price); ?>

                            </td>
                            <td class="p-2 border">
                                <?php echo e($shop->sell_price_for_meter); ?>

                            </td>
                            <td class="p-2 border">
                                <?php echo e($shop->payment_method); ?>

                            </td>
                            <td class="p-2 border">
                                <?php echo e($shop->insurance_amount); ?>

                            </td>
                            <td class="p-2 border">
                                <?php echo e($shop->insurance_date); ?>

                            </td>
                            <td class="p-2 border">
                                <?php echo e($shop->remaining_sale_amount); ?>

                            </td>
                            <td class="p-2 border">
                                <?php echo e($shop->remaining_sale_date); ?>

                            </td>
                            <td class="p-2 border">
                                <?php echo e($shop->maintenance_deposit_amount); ?>

                            </td>
                            <td class="p-2 border">
                                <?php echo e($shop->maintenance_deposit_date); ?>

                            </td>
                            <!--[if BLOCK]><![endif]--><?php for($i = 1; $i<= 15; $i++): ?>
                            <td class="p-2 border">
                                <?php echo e($shop->{'installment_amount_' . $i}); ?>

                            </td>
                            <td class="p-2 border">
                                <?php echo e($shop->{'installment_date_' . $i}); ?>

                            </td>
                            <?php endfor; ?><!--[if ENDBLOCK]><![endif]-->
                            <td class="p-2 border">
                                <div class="flex justify-center">
                                    <?php if (isset($component)) { $__componentOriginal8417baeedcb6c131165d53e37e61cc07 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8417baeedcb6c131165d53e37e61cc07 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.edit-button','data' => ['permission' => 'edit-shop-damietta-only','id' => ''.e($shop->id).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('edit-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['permission' => 'edit-shop-damietta-only','id' => ''.e($shop->id).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8417baeedcb6c131165d53e37e61cc07)): ?>
<?php $attributes = $__attributesOriginal8417baeedcb6c131165d53e37e61cc07; ?>
<?php unset($__attributesOriginal8417baeedcb6c131165d53e37e61cc07); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8417baeedcb6c131165d53e37e61cc07)): ?>
<?php $component = $__componentOriginal8417baeedcb6c131165d53e37e61cc07; ?>
<?php unset($__componentOriginal8417baeedcb6c131165d53e37e61cc07); ?>
<?php endif; ?>
                                    <div class="mx-1"></div>
                                    <?php if (isset($component)) { $__componentOriginalec2502b834f860c8e30d229aa8f280e2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalec2502b834f860c8e30d229aa8f280e2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.delete-button','data' => ['permission' => 'delete-shop-damietta-only','id' => ''.e($shop->id).'','name' => ''.e($shop->national_number).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('delete-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['permission' => 'delete-shop-damietta-only','id' => ''.e($shop->id).'','name' => ''.e($shop->national_number).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalec2502b834f860c8e30d229aa8f280e2)): ?>
<?php $attributes = $__attributesOriginalec2502b834f860c8e30d229aa8f280e2; ?>
<?php unset($__attributesOriginalec2502b834f860c8e30d229aa8f280e2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalec2502b834f860c8e30d229aa8f280e2)): ?>
<?php $component = $__componentOriginalec2502b834f860c8e30d229aa8f280e2; ?>
<?php unset($__componentOriginalec2502b834f860c8e30d229aa8f280e2); ?>
<?php endif; ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="12" class="p-2 border text-center">
                                <?php echo e(__('site.no_data_found')); ?>

                            </td>
                        </tr>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal163c8ba6efb795223894d5ffef5034f5)): ?>
<?php $attributes = $__attributesOriginal163c8ba6efb795223894d5ffef5034f5; ?>
<?php unset($__attributesOriginal163c8ba6efb795223894d5ffef5034f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal163c8ba6efb795223894d5ffef5034f5)): ?>
<?php $component = $__componentOriginal163c8ba6efb795223894d5ffef5034f5; ?>
<?php unset($__componentOriginal163c8ba6efb795223894d5ffef5034f5); ?>
<?php endif; ?>

                <!--[if BLOCK]><![endif]--><?php if($shops->hasPages()): ?>
                <?php if (isset($component)) { $__componentOriginalbef3dc49b19880cf96603fc512407156 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbef3dc49b19880cf96603fc512407156 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.paginate','data' => ['dataLinks' => $shops->links()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('paginate'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data-links' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($shops->links())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbef3dc49b19880cf96603fc512407156)): ?>
<?php $attributes = $__attributesOriginalbef3dc49b19880cf96603fc512407156; ?>
<?php unset($__attributesOriginalbef3dc49b19880cf96603fc512407156); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbef3dc49b19880cf96603fc512407156)): ?>
<?php $component = $__componentOriginalbef3dc49b19880cf96603fc512407156; ?>
<?php unset($__componentOriginalbef3dc49b19880cf96603fc512407156); ?>
<?php endif; ?>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal562cb1477a8769da678d472fe5deeba8)): ?>
<?php $attributes = $__attributesOriginal562cb1477a8769da678d472fe5deeba8; ?>
<?php unset($__attributesOriginal562cb1477a8769da678d472fe5deeba8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal562cb1477a8769da678d472fe5deeba8)): ?>
<?php $component = $__componentOriginal562cb1477a8769da678d472fe5deeba8; ?>
<?php unset($__componentOriginal562cb1477a8769da678d472fe5deeba8); ?>
<?php endif; ?>
</div><?php /**PATH /var/www/resources/views/livewire/shop-damietta-only/list-shop-damietta-only.blade.php ENDPATH**/ ?>