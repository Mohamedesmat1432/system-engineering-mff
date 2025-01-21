<div>
    <!--[if BLOCK]><![endif]--><?php if($this->show_modal): ?>
    <?php if (isset($component)) { $__componentOriginal49bd1c1dd878e22e0fb84faabf295a3f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal49bd1c1dd878e22e0fb84faabf295a3f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dialog-modal','data' => ['wire:model' => 'show_modal']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dialog-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'show_modal']); ?>
         <?php $__env->slot('title', null, []); ?> 
            <div class="flex justify-between row-invoice">
                <div><?php echo e(__('site.show_sale')); ?></div>
            </div>
         <?php $__env->endSlot(); ?>

         <?php $__env->slot('content', null, []); ?> 
            <div class="w-full mt-3">
                <div class="grid grid-cols-1 md:grid-cols-1 gap-4 p-8">
                    <div class="relative z-0 w-full group invoice-two">
                        <table class="w-full text-center mb-3 bg-white">
                            <tbody>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.customer_name')); ?>

                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        <?php echo e($this->sale->customer->customer_name); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.national_number')); ?>

                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        <?php echo e($this->sale->customer->national_number); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.phone_number')); ?>

                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        <?php echo e($this->sale->customer->phone_number); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.shop_code')); ?>

                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        <?php echo e($this->sale->shop->shop_code); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.auction_date')); ?>

                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        <?php echo e($this->sale->shop->auction_date); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.company_id')); ?>

                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        <?php echo e($this->sale->shop->company?->name); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.government_id')); ?>

                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        <?php echo e($this->sale->shop->government->name); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.city_id')); ?>

                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        <?php echo e($this->sale->shop->city->name); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.center')); ?>

                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        <?php echo e($this->sale->shop->center); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.location')); ?>

                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        <?php echo e($this->sale->shop->location); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.building_number')); ?>

                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        <?php echo e($this->sale->shop->building_number); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.building_entrance_number')); ?>

                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        <?php echo e($this->sale->shop->building_entrance_number); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.shop_number')); ?>

                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        <?php echo e($this->sale->shop->shop_number); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.type_of_shop')); ?>

                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        <?php echo e($this->sale->shop->type_of_shop); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.shop_area')); ?>

                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        <?php echo e($this->sale->shop->shop_area); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.sell_price')); ?>

                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        <?php echo e($this->sale->shop->sell_price); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.sell_price_for_meter')); ?>

                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        <?php echo e($this->sale->shop->sell_price_for_meter); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.payment_method')); ?>

                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        <?php echo e(__("site.{$this->sale->payment_method}")); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.installment_count')); ?>

                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        <?php echo e($this->sale->installment_count); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.description')); ?>

                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        <?php echo e($this->sale->description); ?>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="relative z-0 w-full group invoice-two">
                        <table class="w-full text-center mb-3 bg-white">
                            <thead class="font-bold">
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            #
                                        </div>
                                    </th>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.amount')); ?>

                                        </div>
                                    </th>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.date')); ?>

                                        </div>
                                    </th>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.status')); ?>

                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.insurance')); ?>

                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        <?php echo e($this->sale->insurance->amount); ?>

                                    </td>
                                    <td class="p-2 bsale border">
                                        <?php echo e($this->sale->insurance->date); ?>

                                    </td>
                                    <td class="p-2 bsale border">
                                        <!--[if BLOCK]><![endif]--><?php if($this->sale->insurance->status): ?>
                                        <div class="p-2 bg-green-500 rounded-full text-white">
                                            <?php echo e(__('site.paid')); ?>

                                        </div>
                                        <?php else: ?>
                                        <div class="p-2 bg-yellow-200 rounded-full">
                                            <?php echo e(__('site.unpaid')); ?>

                                        </div>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.remaining_amount_sale')); ?>

                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        <?php echo e($this->sale->remainingSale->amount); ?>

                                    </td>
                                    <td class="p-2 bsale border">
                                        <?php echo e($this->sale->remainingSale->date); ?>

                                    </td>
                                    <td class="p-2 bsale border">
                                        <!--[if BLOCK]><![endif]--><?php if($this->sale->remainingSale->status): ?>
                                        <div class="p-2 bg-green-500 rounded-full text-white">
                                            <?php echo e(__('site.paid')); ?>

                                        </div>
                                        <?php else: ?>
                                        <div class="p-2 bg-yellow-200 rounded-full">
                                            <?php echo e(__('site.unpaid')); ?>

                                        </div>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.maintenance_deposit')); ?>

                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        <?php echo e($this->sale->maintenanceDeposit->amount); ?>

                                    </td>
                                    <td class="p-2 bsale border">
                                        <?php echo e($this->sale->maintenanceDeposit->date); ?>

                                    </td>
                                    <td class="p-2 bsale border">
                                        <!--[if BLOCK]><![endif]--><?php if($this->sale->maintenanceDeposit->status): ?>
                                        <div class="p-2 bg-green-500 rounded-full text-white">
                                            <?php echo e(__('site.paid')); ?>

                                        </div>
                                        <?php else: ?>
                                        <div class="p-2 bg-yellow-200 rounded-full">
                                            <?php echo e(__('site.unpaid')); ?>

                                        </div>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                    <!--[if BLOCK]><![endif]--><?php if($this->sale->installments()->count() > 0): ?>
                    <div class="relative z-0 w-full group invoice-two">
                        <table class="w-full text-center mb-3 bg-white">
                            <thead class="font-bold">
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.installment')); ?>

                                        </div>
                                    </th>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.amount')); ?>

                                        </div>
                                    </th>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.date')); ?>

                                        </div>
                                    </th>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__('site.status')); ?>

                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->sale->installments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $installment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $count = $loop->index + 1; ?>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            <?php echo e(__("site.installment_{$count}")); ?>

                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        <?php echo e($installment->amount); ?>

                                    </td>
                                    <td class="p-2 bsale border">
                                        <?php echo e($installment->date); ?>

                                    </td>
                                    <td class="p-2 bsale border">
                                        <!--[if BLOCK]><![endif]--><?php if($installment->status): ?>
                                        <div class="p-2 bg-green-500 rounded-full text-white">
                                            <?php echo e(__('site.paid')); ?>

                                        </div>
                                        <?php else: ?>
                                        <div class="p-2 bg-yellow-200 rounded-full">
                                            <?php echo e(__('site.unpaid')); ?>

                                        </div>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                            </tbody>
                        </table>

                    </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
         <?php $__env->endSlot(); ?>

         <?php $__env->slot('footer', null, []); ?> 
            
            <?php if (isset($component)) { $__componentOriginal3b0e04e43cf890250cc4d85cff4d94af = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3b0e04e43cf890250cc4d85cff4d94af = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.secondary-button','data' => ['class' => 'mx-2','wire:click' => '$set(\'show_modal\',false)','wire:loading.attr' => 'disabled']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('secondary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mx-2','wire:click' => '$set(\'show_modal\',false)','wire:loading.attr' => 'disabled']); ?>
                <?php echo e(__('site.cancel')); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3b0e04e43cf890250cc4d85cff4d94af)): ?>
<?php $attributes = $__attributesOriginal3b0e04e43cf890250cc4d85cff4d94af; ?>
<?php unset($__attributesOriginal3b0e04e43cf890250cc4d85cff4d94af); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3b0e04e43cf890250cc4d85cff4d94af)): ?>
<?php $component = $__componentOriginal3b0e04e43cf890250cc4d85cff4d94af; ?>
<?php unset($__componentOriginal3b0e04e43cf890250cc4d85cff4d94af); ?>
<?php endif; ?>
         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal49bd1c1dd878e22e0fb84faabf295a3f)): ?>
<?php $attributes = $__attributesOriginal49bd1c1dd878e22e0fb84faabf295a3f; ?>
<?php unset($__attributesOriginal49bd1c1dd878e22e0fb84faabf295a3f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal49bd1c1dd878e22e0fb84faabf295a3f)): ?>
<?php $component = $__componentOriginal49bd1c1dd878e22e0fb84faabf295a3f; ?>
<?php unset($__componentOriginal49bd1c1dd878e22e0fb84faabf295a3f); ?>
<?php endif; ?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

</div><?php /**PATH /var/www/resources/views/livewire/sale/show-sale.blade.php ENDPATH**/ ?>