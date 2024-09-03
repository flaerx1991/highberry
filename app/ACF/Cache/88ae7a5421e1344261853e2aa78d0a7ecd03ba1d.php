<?php $__env->startSection('content'); ?>
    <div class="video-full-screen-banner-youtube">
        <div class="video-wrap">
            <div class="content-wrap">
                <h1>grain stream llc</h1>
                <h3>Лідер зернового ринку України</h3>
            </div>
            <img class="poster" src="<?php echo e($poster_image['url']); ?>" alt="<?php echo e($poster_image['alt']); ?>">
            <div class="player" data-video-id="<?php echo e($video_id); ?>"></div>

           <div class="next-section-button" onclick="scrollToSection(this.parentNode.parentNode.parentNode<?php echo ($section_id) ? ' ,' . $section_id : ''; ?>)">
                <img class=""
                src="<?php echo get_template_directory_uri(); ?>/assets/icons/next-section-button.svg"
                alt="">
           </div>
           
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\highberrycomua\wp-content\themes\highberry\app\ACF\Template/video_full_screen_banner_youtube.blade.php ENDPATH**/ ?>