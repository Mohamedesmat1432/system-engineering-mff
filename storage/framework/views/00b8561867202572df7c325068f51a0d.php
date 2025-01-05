<div>
    <div>
        <input
            type="text"
            wire:model.debounce.300ms.live="query"
            placeholder="Search..."
            class="border px-3 py-2 w-full"
        />
    </div>

    <!--[if BLOCK]><![endif]--><?php if(!empty($query)): ?>
        <ul class="border mt-2 bg-white">
            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <li
                    wire:click="selectItem(<?php echo e($item['id']); ?>)"
                    class="cursor-pointer hover:bg-gray-200 px-3 py-2"
                >
                    <?php echo e($item['customer_name']); ?>

                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <li class="px-3 py-2">No results found.</li>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </ul>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--><?php if($selectedItem): ?>
        <p class="mt-3">Selected Item ID: <?php echo e($selectedItem); ?></p>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH /home/mohammed/Desktop/projects/laravels/system-engineering-mff/resources/views/livewire/customer/searchable-select-customer.blade.php ENDPATH**/ ?>