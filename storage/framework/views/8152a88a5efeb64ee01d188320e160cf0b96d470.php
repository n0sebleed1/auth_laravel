<?php $__env->startSection('title'); ?>
    Статьи
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="post__list">
        <div class="flex">
            <h1 class="post__tittle">Новые статьи</h1>
            <a href="create" class="post__create">Создать тему</a>
        </div>
        <div class="post__filter">
            <a class="post__filter-link" href="software">Разработка ПО</a>
            <a class="post__filter-link" href="web">Веб-разработка</a>
            <a class="post__filter-link" href="uiux">UI/UX</a>
            <a class="post__filter-link" href="cybersecurity">Кибер-безопасность</a>
            <a class="post__filter-link" href="popular">Популярное</a>
            <a class="post__filter-link" href="news">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                        <path d="M2375 4924 c-459 -48 -857 -194 -1185 -434 -157 -115 -141 -106 -154 -87 -6 9 -67 116 -135 237 -139 246 -153 262 -242 262 -62 0 -118 -34 -144 -88 -17 -35 -16 -63 7 -713 22 -630 25 -679 43 -710 28 -47 65 -72 116 -78 61 -7 1463 223 1504 246 90 52 102 184 23 258 -18 17 -344 135 -547 198 -24 7 -24 8 -6 21 41 30 214 113 308 148 217 81 417 112 666 103 680 -24 1272 -436 1532 -1066 97 -237 134 -443 126 -711 -8 -278 -54 -468 -173 -715 -196 -407 -565 -730 -1003 -875 -213 -71 -297 -84 -546 -85 -189 0 -235 3 -331 22 -578 118 -1044 496 -1271 1033 -81 192 -121 369 -132 595 -8 166 -17 197 -73 237 -32 22 -42 23 -243 26 -206 3 -211 3 -244 -20 -65 -44 -76 -68 -79 -183 -7 -205 38 -484 118 -726 252 -768 883 -1357 1665 -1554 217 -55 333 -69 580 -69 161 -1 251 4 335 17 906 138 1639 750 1919 1601 251 766 105 1586 -399 2228 -154 195 -410 419 -632 551 -264 157 -578 269 -878 312 -109 16 -440 28 -525 19z"/>
                    </g>
                </svg>
            </a>
        </div>
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
                            <g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)" fill="#4A4A4A" stroke="none">
                                <path d="M127 589 c-55 -13 -83 -35 -107 -83 -38 -79 -20 -155 63 -258 39 -50 216 -198 236 -198 42 0 261 215 300 294 85 173 -133 333 -276 203 l-23 -20 -22 20 c-46 42 -107 57 -171 42z"/>
                            </g>
                        </svg>
                    </div>
                    <div class="flex post__feedback">
                        <p class="post__like-count"><?php echo e($el->comments_count); ?></p>
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" viewBox="0 0 64.000000 64.000000" preserveAspectRatio="xMidYMid meet">
                            <g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)" fill="#4A4A4A" stroke="none">
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
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\technohub\resources\views/news.blade.php ENDPATH**/ ?>