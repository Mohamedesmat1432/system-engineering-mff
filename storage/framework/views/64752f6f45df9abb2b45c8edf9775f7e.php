<button <?php echo e($attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-yellow-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-700 focus:bg-yellow-500 active:bg-yellow-900 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 transition ease-in-out duration-150'])); ?>>
    <?php echo e($slot); ?>

</button>
<?php /**PATH /var/www/resources/views/components/yellow-button.blade.php ENDPATH**/ ?>