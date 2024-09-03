<?php $__env->startSection('content'); ?>
    <div class="st-margin main-map-img">
        <div class="m-auto content-max-width content-wrap">
            <?php echo ($map_heading) ? '<h2>' . $map_heading . '</h2>' : ''; ?>

            <div class="flex we-are-close-img">
                <?php echo $__env->make('Components.picture', array('classes' => $picture_classes, 'image' => $desktop_image,
                                                              'imageTablet' => $tablet_image,
                                                              'imageMobile' => $mobile_image), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\highberrycomua\wp-content\themes\highberry\app\ACF\Template/main_map_img.blade.php ENDPATH**/ ?>