<?php $__env->startSection('title'); ?>
    Новая статья
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="alarm">
        <p class="alarm-text"><?php echo e($text); ?></p>
        <a href=".." class="alarm-link">Назад</a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/u2497761/data/www/allmyfriends.ru/resources/views/alarm.blade.php ENDPATH**/ ?>