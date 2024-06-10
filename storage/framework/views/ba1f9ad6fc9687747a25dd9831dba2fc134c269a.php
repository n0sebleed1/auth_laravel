<?php $__env->startSection('title'); ?>
    Редактировать
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="edit">
        <h2>Сменить аватар</h2>
        <form action="<?php echo e(route('changeImage')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <input name="avatar" type="file" accept="image/*" class="edit__input">
            <button class="edit__submit">Сохранить</button>
        </form>
        <h2>Личные данные</h2>
        <form action="<?php echo e(route('changeData')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <input name="name" placeholder="Логин" class="edit__input" value="<?php echo e($profile->name); ?>">
            <input name="email" placeholder="Почта" class="edit__input" value="<?php echo e($profile->email); ?>">
            <input name="description" placeholder="Статус" class="edit__input" value="<?php echo e($profileInfo->description); ?>">
            <button class="edit__submit">Сохранить</button>
        </form>
        <form action="<?php echo e(route('changePassword')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <h2>Сменить пароль</h2>
            <input type="password" name="password" placeholder="Новый пароль" class="edit__input">
            <input type="password" name="password_confirmation" placeholder="Повтор пароля" class="edit__input">
            <button class="edit__submit">Сохранить</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\technohub\resources\views/edit.blade.php ENDPATH**/ ?>