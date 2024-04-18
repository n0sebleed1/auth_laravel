<!DOCTYPE html>
<html>
    <head>
        <title>Вход</title>
    </head>
    <body>
        <form action="<?php echo e(route('auth')); ?>" method="post" novalidate autocomplete="off">
            <?php echo csrf_field(); ?>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($message); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <h1>Вход</h1>
            <input type="text" name="name" placeholder="Name">
            <input type="password" name="password" placeholder="Password">
            <button>Вход</button>
        </form>
        <a href="auth">У меня нет аккаунта!/</a>
    </body>
</html><?php /**PATH C:\OSPanel\domains\auth_and_reg\resources\views/auth.blade.php ENDPATH**/ ?>