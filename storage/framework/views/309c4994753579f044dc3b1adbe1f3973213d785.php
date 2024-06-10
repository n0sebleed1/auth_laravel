

<?php $__env->startSection('title'); ?>
    <?php echo e($news->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="article-block">
        <h1 class="article-block__name"><?php echo e($news->name); ?></h1>
        <div class="article-block__profile">
            <img style="border-radius: 16px;" src="<?php echo e(asset('img/default_avatar.png')); ?>" width="50px" height="50px">
            <div class="article-block__data">
                <a href="../profile/<?php echo e($news->user_id); ?>" class="article-block__data-name"><?php echo e($news->user->name); ?></a>
                <p class="article-block__data-id"><?php echo e($news->created_at); ?></p>
            </div>
            <?php if($user_id == $news->user_id): ?>
                <form class="article-block__delete-form" action="<?php echo e(route('delete')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <input class="hiden" name="id" value="<?php echo e($news->id); ?>">
                    <button class="article-block__delete">Удалить</button>
                </form>
            <?php endif; ?>
        </div>
        <p class="article-block__text"><?php echo e($news->text_1); ?></p>
        <?php if($news->code_1 != null): ?>
            <pre><code class=" language-js"><?php echo e($news->code_1); ?></code></pre>
        <?php endif; ?>
        <?php if($news->image_1 != null): ?>
            <img width="600px" class="article-block__img" src="<?php echo e(asset('storage/app/public/' . $news->image_1)); ?>">
        <?php endif; ?>

        <?php if($news->text_2 != null): ?>
            <p class=" article-block__text"><?php echo e($news->text_2); ?></p>
        <?php endif; ?>
        <?php if($news->code_2 != null): ?>
            <pre><code class=" language-js"><?php echo e($news->code_2); ?></code></pre>
        <?php endif; ?>
        <?php if($news->image_2 != null): ?>
            <img width="600px" class="article-block__img" src="<?php echo e(asset('storage/app/public/' . $news->image_2)); ?>">
        <?php endif; ?>

        <?php if($news->text_3 != null): ?>
            <p class=" article-block__text"><?php echo e($news->text_3); ?></p>
        <?php endif; ?>
        <?php if($news->code_3 != null): ?>
            <pre><code class=" language-js"><?php echo e($news->code_3); ?></code></pre>
        <?php endif; ?>
        <?php if($news->image_3 != null): ?>
            <img width="600px" class="article-block__img" src="<?php echo e(asset('storage/app/public/' . $news->image_3)); ?>">
        <?php endif; ?>

        <?php if($news->text_4 != null): ?>
            <p class=" article-block__text"><?php echo e($news->text_4); ?></p>
        <?php endif; ?>
        <?php if($news->code_4 != null): ?>
            <pre><code class=" language-js"><?php echo e($news->code_4); ?></code></pre>
        <?php endif; ?>
        <?php if($news->image_4 != null): ?>
            <img width="600px" class="article-block__img" src="<?php echo e(asset('storage/app/public/' . $news->image_4)); ?>">
        <?php endif; ?>

        <?php if($news->text_5 != null): ?>
            <p class=" article-block__text"><?php echo e($news->text_5); ?></p>
        <?php endif; ?>
        <?php if($news->code_5 != null): ?>
            <pre><code class=" language-js"><?php echo e($news->code_5); ?></code></pre>
        <?php endif; ?>
        <?php if($news->image_5 != null): ?>
            <img width="600px" class="article-block__img" src="<?php echo e(asset('storage/app/public/' . $news->image_5)); ?>">
        <?php endif; ?>

        <?php if($news->text_6 != null): ?>
            <p class=" article-block__text"><?php echo e($news->text_6); ?></p>
        <?php endif; ?>
        <form class="article-block__likes" action="<?php echo e(route('like')); ?>" method="post">
        <?php echo csrf_field(); ?>
            <button class="article-block__likes-button"
            <?php if($name != null): ?>
                <?php if($like): ?>{
                    disabled
                    style="cursor: default;"
                }
                <?php else: ?>
                    style="cursor: pointer;"
                <?php endif; ?>
            <?php endif; ?>
            type="submit">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="25.000000px" height="25.000000px" viewBox="0 0 64.000000 64.000000" preserveAspectRatio="xMidYMid meet">
                    <g class="article-block__likes-count" transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)" fill="
                    <?php if($name != null): ?>
                        <?php if($like): ?>
                            #FF0000
                        <?php else: ?>
                            #909090
                        <?php endif; ?>
                    <?php else: ?>
                        #909090
                    <?php endif; ?>
                    " stroke="none">
                        <path d="M127 589 c-55 -13 -83 -35 -107 -83 -38 -79 -20 -155 63 -258 39 -50 216 -198 236 -198 42 0 261 215 300 294 85 173 -133 333 -276 203 l-23 -20 -22 20 c-46 42 -107 57 -171 42z"/>
                    </g>
                </svg>
            </button>
            <p class="article-block__likes-count"><?php echo e($news->likes_count); ?></p>
                <input class="hiden" name="id" value="<?php echo e($news->id); ?>">
                <input class="hiden" type="number" name="likes_count" value="<?php echo e($news->likes_count); ?>">
        </form>
        
        <h1 class="article__comment-count">Комментарии <?php echo e($news->comments_count); ?></h1>
        <?php if($profile != null): ?>
            <form class="article__comment" action="<?php echo e(route('comment')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input class="hiden" name="id" value="<?php echo e($news->id); ?>">
                <input class="hiden" type="number" name="comments_count" value="<?php echo e($news->comments_count); ?>">
                <textarea class="article__comment-input" name='text' placeholder="Введите текст..."></textarea>
                <button class="article__comment-button">Отправить</button>
            </form>
        <?php endif; ?>
        <?php $__currentLoopData = $comments_count; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $commentId = $el->id ?>
        <?php if($el->news_id == $news->id): ?>
            <div class="article__comment-block js__comment-block">
                <div class="flex">
                    <img src="<?php echo e(asset('img/default_avatar.png')); ?>" width="50px" height="50px">
                    <div>
                        <a href="../profile/<?php echo e($el->user_id); ?>" class="article__comment-data"><?php echo e($el->user->name); ?></a>
                        <p class="article__comment-date"><?php echo e($el->created_at); ?></p>
                    </div>
                </div>
                <p class="article__comment-text"><?php echo e($el->text); ?></p>
                <div class="flex answers">
                    <p class="answers__count js__answers-count"><?php echo e($el->answers_count); ?> ответов</p>
                    <?php if($profile != null): ?>
                        <p class="answers__button" id="js__answers-button">Ответить</p>
                    <?php endif; ?>
                </div>
                <form class="hiden" id="js__answers-form" action="<?php echo e(route('answer')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <input class="hiden" name="user_id" placeholder="user" value="
                    <?php if($profile != null): ?>
                        <?php echo e($profile->id); ?>

                    <?php else: ?>
                        0
                    <?php endif; ?>
                    ">
                    <input class="hiden" name="id" placeholder="comment" value="<?php echo e($el->id); ?>">
                    <input class="hiden" name="answers_count" placeholder="count" value="<?php echo e($el->answers_count); ?>">
                    <input class="hiden" name="news_id" placeholder="news" value="<?php echo e($news->id); ?>">
                    <input class="answers__input" name="text" placeholder="Введите ответ...">
                    <div class="flex answers__action">
                        <p class="answers__action-cancel" id="js__answers-cancel">Отмена</p>
                        <button class="answers__action-submit" type="submit">Ответить</button>
                    </div>
                </form>
                <?php if($answers): ?>
                    <?php $__currentLoopData = $answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($el->comment_id == $commentId): ?>
                            <div class="hiden answers__block js__answers-block">
                                <div class="flex">
                                    <img src="<?php echo e(asset('img/default_avatar.png')); ?>" width="50px" height="50px">
                                    <div>
                                        <a href="../profile/<?php echo e($el->user_id); ?>" class="article__comment-data"><?php echo e($el->user->name); ?></a>
                                        <p class="article__comment-date"><?php echo e($el->created_at); ?></p>
                                    </div>
                                </div>
                                <p class="article__comment-text"><?php echo e($el->text); ?></p>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\technohub\resources\views/article.blade.php ENDPATH**/ ?>