<?php $__env->startSection('content'); ?>
    <div class="st-margin after-slider-textblock">
        <div class="m-auto content-wrap">
            <div class="flex after-slider-block">
                <h2><?php echo e($after_slider_heading); ?></h2>
                <div class="flex two-cols-info">
                    <div class="img-col"><img src="<?php echo e($after_slider_img['url']); ?>" alt="<?php echo e($after_slider_img['alt']); ?>"></div>
                    <div class="text-col-block">
                        <div class="know-more-link text-col"><?php echo $after_slider_info; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/sites/highberry/wp-content/themes/highberry/app/ACF/Template/after_slider_textblock.blade.php ENDPATH**/ ?>