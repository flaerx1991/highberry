<?php $__env->startSection('content'); ?>
    <div class="st-margin mission-and-values-banner">
        <div class="m-auto content-wrap">
           <div class="grid mission-banner">
                <div class="img-col"><img src="<?php echo e($banner_logo['url']); ?>" alt="<?php echo e($banner_logo['alt']); ?>"></div>
                <div class="info-col">
                     <h2><?php echo e($banner_heading); ?></h2>
                     <p><?php echo e($banner_info); ?></p>
                </div>
           </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/sites/highberry/wp-content/themes/highberry/app/ACF/Template/mission_and_values_banner.blade.php ENDPATH**/ ?>