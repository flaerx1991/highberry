<?php $__env->startSection('content'); ?>
<div class="video-lighthouse-button">
    <div class="showreel-video">
        <div class="showreel-button-wrap">
            <div class="showreel-button">
                <div class="showreel-img-wrap">
                    <img src="<?php echo e($button_icon['url']); ?>" alt="<?php echo e($button_icon['alt']); ?>">
                </div>
                <p><?php echo e($button_text); ?></p>
            </div>
        </div>
        <div class="video-banner">
            <div class="video-wrap" id="showreel-video"  data-video-id="<?php echo e($showreel_video_id); ?>"></div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/sites/highberry/wp-content/themes/highberry/app/ACF/Template/video_lighthouse_button.blade.php ENDPATH**/ ?>