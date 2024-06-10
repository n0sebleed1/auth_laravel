<?php $__env->startSection('title'); ?>
    Регистрация
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('register')); ?>" method="post" novalidate autocomplete="off" class="registration">
        <?php echo csrf_field(); ?>
        <ul class="error">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="error__message"><?php echo e($message); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <h1 class="registration__title">Регистрация</h1>
        <input class="<?php echo e($errors->has('name') ? 'error__input' : 'registration__input'); ?>" autofocus name="name" value="<?php echo e(old('name')); ?>" id="login" type="text" placeholder="Логин">
        <input class="<?php echo e($errors->has('password') ? 'error__input' : 'registration__input'); ?>" name="password" id="password" type="password" placeholder="Пароль">
        <input class="<?php echo e($errors->has('password_confirmation') ? 'error__input' : 'registration__input'); ?>" name="password_confirmation" id="confirm_password" type="password" placeholder="Повтор пароля">
        <input class="<?php echo e($errors->has('email') ? 'error__input' : 'registration__input'); ?>" name="email" type="email" value="<?php echo e(old('email')); ?>" id="email" placeholder="Email">
        <button type="submit" class="registration__submit">Регистрация</button>
        <a class="registration__link" href="login">У меня уже есть аккаунт</a>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\FQW\resources\views/registration.blade.php ENDPATH**/ ?>