
<?php $__env->startSection('container'); ?>
    <h1>ini user</h1>
    <?php dd($cars); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.mainUser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Laravel1\resources\views//indexUser.blade.php ENDPATH**/ ?>