<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['permission', 'id']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['permission', 'id']); ?>
<?php foreach (array_filter((['permission', 'id']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($permission)): ?>
    <?php if (isset($component)) { $__componentOriginal4bac976549fdd31c893becf9471e13f1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bac976549fdd31c893becf9471e13f1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.yellow-button','data' => ['wire:click' => '$dispatch(\'show-modal\',{id:\''.e($id).'\'})','wire:loading.attr' => 'disabled']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('yellow-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => '$dispatch(\'show-modal\',{id:\''.e($id).'\'})','wire:loading.attr' => 'disabled']); ?>
        <?php if (isset($component)) { $__componentOriginal9be913854797e04f92894da13b6df713 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9be913854797e04f92894da13b6df713 = $attributes; } ?>
<?php $component = WireUi\Heroicons\Icon::resolve(['name' => 'eye'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(WireUi\Heroicons\Icon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9be913854797e04f92894da13b6df713)): ?>
<?php $attributes = $__attributesOriginal9be913854797e04f92894da13b6df713; ?>
<?php unset($__attributesOriginal9be913854797e04f92894da13b6df713); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9be913854797e04f92894da13b6df713)): ?>
<?php $component = $__componentOriginal9be913854797e04f92894da13b6df713; ?>
<?php unset($__componentOriginal9be913854797e04f92894da13b6df713); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4bac976549fdd31c893becf9471e13f1)): ?>
<?php $attributes = $__attributesOriginal4bac976549fdd31c893becf9471e13f1; ?>
<?php unset($__attributesOriginal4bac976549fdd31c893becf9471e13f1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4bac976549fdd31c893becf9471e13f1)): ?>
<?php $component = $__componentOriginal4bac976549fdd31c893becf9471e13f1; ?>
<?php unset($__componentOriginal4bac976549fdd31c893becf9471e13f1); ?>
<?php endif; ?>
<?php else: ?>
    <?php if (isset($component)) { $__componentOriginal4bac976549fdd31c893becf9471e13f1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bac976549fdd31c893becf9471e13f1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.yellow-button','data' => ['class' => 'cursor-not-allowed opacity-60']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('yellow-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'cursor-not-allowed opacity-60']); ?>
        <?php if (isset($component)) { $__componentOriginal9be913854797e04f92894da13b6df713 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9be913854797e04f92894da13b6df713 = $attributes; } ?>
<?php $component = WireUi\Heroicons\Icon::resolve(['name' => 'eye'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(WireUi\Heroicons\Icon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9be913854797e04f92894da13b6df713)): ?>
<?php $attributes = $__attributesOriginal9be913854797e04f92894da13b6df713; ?>
<?php unset($__attributesOriginal9be913854797e04f92894da13b6df713); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9be913854797e04f92894da13b6df713)): ?>
<?php $component = $__componentOriginal9be913854797e04f92894da13b6df713; ?>
<?php unset($__componentOriginal9be913854797e04f92894da13b6df713); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4bac976549fdd31c893becf9471e13f1)): ?>
<?php $attributes = $__attributesOriginal4bac976549fdd31c893becf9471e13f1; ?>
<?php unset($__attributesOriginal4bac976549fdd31c893becf9471e13f1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4bac976549fdd31c893becf9471e13f1)): ?>
<?php $component = $__componentOriginal4bac976549fdd31c893becf9471e13f1; ?>
<?php unset($__componentOriginal4bac976549fdd31c893becf9471e13f1); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/resources/views/components/show-button.blade.php ENDPATH**/ ?>