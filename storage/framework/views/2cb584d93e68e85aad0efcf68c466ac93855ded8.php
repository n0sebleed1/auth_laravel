<?php $__env->startSection('title'); ?>
    Статьи
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="post__list">
        <div class="flex">
            <h1 class="post__tittle">Новые статьи</h1>
            <a href="create" class="post__create">Создать тему</a>
        </div>
        <input class="post__search" placeholder="Поиск...">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="news/<?php echo e($el->id); ?>">
            <div class="post">
                <div class="post__left-content">
                    <h2 class="post__title"><?php echo e($el->name); ?></h2>
                    <ul class="post__tag-list">
                        <li class="post__tag"><?php echo e($el->tag); ?></li>
                    </ul>
                </div>
                <div class="post__right-content">   
                    <div class="flex">
                        <p class="post__like-count"><?php echo e($el->likes_count); ?></p>
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" viewBox="0 0 64.000000 64.000000" preserveAspectRatio="xMidYMid meet">
                            <g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)" fill="#FFFFFF" stroke="none">
                                <path d="M127 589 c-55 -13 -83 -35 -107 -83 -38 -79 -20 -155 63 -258 39 -50 216 -198 236 -198 42 0 261 215 300 294 85 173 -133 333 -276 203 l-23 -20 -22 20 c-46 42 -107 57 -171 42z"/>
                            </g>
                        </svg>
                    </div>
                    <div class="flex post__feedback">
                        <p class="post__like-count"><?php echo e($el->comments_count); ?></p>
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" viewBox="0 0 64.000000 64.000000" preserveAspectRatio="xMidYMid meet">
                            <g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)" fill="#FFFFFF" stroke="none">
                                <path d="M215 587 c-56 -19 -81 -33 -127 -75 -50 -45 -78 -100 -85 -168 -5 -45 -1 -62 22 -109 15 -31 40 -65 56 -77 37 -28 36 -39 -3 -84 l-33 -37 55 5 c30 2 67 12 82 22 21 14 51 18 140 19 92 2 122 6 160 24 91 42 158 140 158 231 0 94 -68 191 -162 232 -65 29 -201 37 -263 17z"/>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\FQW\resources\views/news.blade.php ENDPATH**/ ?>