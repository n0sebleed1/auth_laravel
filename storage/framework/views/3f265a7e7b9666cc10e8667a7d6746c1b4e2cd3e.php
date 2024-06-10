<?php $__env->startSection('title'); ?>
    <?php echo e($profile->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="user">
        <div class="flex">
            <img style="border-radius: 100px;" name="image" src="<?php echo e(asset('storage/app/public/' . $profileInfo->avatar)); ?>" width="200px">
            <div class="user__data">
                <p class="user__name"><?php echo e($profile->name); ?></p>
                    <?php if($profileInfo->description == null): ?>
                        <p class="user__description">Статус отсутствует</p>
                    <?php else: ?>
                        <p class="user__description"><?php echo e($profileInfo->description); ?></p>
                    <?php endif; ?>
                <?php if($profile->id == $userId): ?>
                    <a class="user__edit" href="edit">Редактировать</a>
                <?php endif; ?>
            </div>
        </div>
        <h2 class="active__title">Последняя активность</h2>
        <?php if(count($data) == 0): ?>
            <p class="active__text">История активности пуста...</p>
        <?php endif; ?>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p class="active__text">
                <a href="../profile/<?php echo e($profile->id); ?>" style="font-weight: bold; color: #1B75D0;">
                    <?php echo e('@' . $el->user->name); ?>

                </a>
                <?php if($el->type == 'like'): ?>
                    понравился пост  
                <?php elseif($el->type == 'create'): ?>
                    написал пост 
                <?php elseif($el->type == 'comment'): ?>
                    прокомментировал пост  
                <?php endif; ?>
                <a href="../news/<?php echo e($el->news_id); ?>" style="font-weight: bold; color: #1B75D0;">
                    <?php echo e($el -> news -> name); ?> 
                </a>
                | <?php echo e($el -> created_at); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\technohub\resources\views/profile.blade.php ENDPATH**/ ?>