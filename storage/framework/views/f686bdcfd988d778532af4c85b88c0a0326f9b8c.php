<!DOCTYPE html>
<html>
    <head>
        <title>Регистрация</title>
    </head>
    <body>
        <h1>Вы успешно авторизовались!</h1>
        <form method="POST" action="<?php echo e(route('logout')); ?>">
            <?php echo csrf_field(); ?>
            <button type="submit">Выйти</button>
        </form>
    </body>
</html><?php /**PATH C:\OSPanel\domains\auth_and_reg\resources\views/success.blade.php ENDPATH**/ ?>