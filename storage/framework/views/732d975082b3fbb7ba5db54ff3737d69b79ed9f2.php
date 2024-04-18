<!DOCTYPE html>
<html>
    <head>
        <title>Регистрация</title>
    </head>
    <body>
        <form action="<?php echo e(route('reg')); ?>" method="post" novalidate autocomplete="off">
            <?php echo csrf_field(); ?>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($message); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <h1>Регистрация</h1>
            <input type="text" name="name" placeholder="Name">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="password_confirmation" placeholder="Confirm password">
            <input type="email" name="email" placeholder="Email">
            <button>Регистрация</button>
        </form>
        <a href="auth">У меня есть аккаунт!/</a>
    </body>
</html><?php /**PATH C:\OSPanel\domains\auth_and_reg\resources\views/reg.blade.php ENDPATH**/ ?>