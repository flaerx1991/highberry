<?php $__env->startSection('content'); ?>
    <div class="breadcrumbs">
        <div class="m-auto content-max-width bread-wrap flex">
            <a class="posts-page-link" href="<?php echo e(get_post_type_archive_link(get_post_type())); ?>"></a>
            <div class="post-name-date flex">
                <div class="post-name"><?php echo e(get_the_title()); ?></div>
                <div class="post-date"><?php echo e(get_the_date()); ?></div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/sites/highberry/wp-content/themes/highberry/app/ACF/Template/Static/post_breadcrumbs.blade.php ENDPATH**/ ?>