<?php $__env->startSection('content'); ?>
    <div class="video-full-screen-banner-youtube">
        <div class="video-wrap">
            <div class="content-wrap">
                <img class="logo" src="<?php echo e($logo['url']); ?>" alt="<?php echo e($logo['alt']); ?>">
                <h1><?php echo e($text); ?></h1>
            </div>
            <img class="poster" src="<?php echo e($poster_image['url']); ?>" alt="<?php echo e($poster_image['alt']); ?>">
            <div class="player" data-video-id="<?php echo e($video_id); ?>"></div>

            <img class="next-section-button"
                 src="<?php echo e($next_section_button_image['url']); ?>"
                 alt="<?php echo e($next_section_button_image['alt']); ?>"
                 onclick="scrollToSection(this.parentNode.parentNode.parentNode<?php echo ($section_id) ? ' ,' . $section_id : ''; ?>)">
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/sites/highberry/wp-content/themes/highberry/app/ACF/Template/video_full_screen_banner_youtube.blade.php ENDPATH**/ ?>