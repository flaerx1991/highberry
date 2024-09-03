<?php $__env->startSection('content'); ?>
<div class="main-video-before-footer">
    <div class="before-footer-video-wrap">
      <div class="toggle-play-button">
        <img class="playbutton" src="<?php echo get_template_directory_uri(); ?>/assets/icons/video-before-footer-play-button.svg" alt="">
      </div>
      <div id="before-footer-video" class="video" data-video-id="<?php echo e($video_id); ?>">
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\highberrycomua\wp-content\themes\highberry\app\ACF\Template/video_before_footer.blade.php ENDPATH**/ ?>