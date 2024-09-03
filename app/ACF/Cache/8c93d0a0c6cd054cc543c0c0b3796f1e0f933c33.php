<?php $__env->startSection('content'); ?>
    <div class="st-margin map-img-we-are-close">
        <div class="m-auto content-max-width content-wrap">
            <div class="flex we-are-close-img">
                <?php echo $__env->make('Components.picture', array('classes' => $picture_classes, 'image' => $desktop_image,
                                                              'imageTablet' => $tablet_image,
                                                              'imageMobile' => $mobile_image), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/sites/highberry/wp-content/themes/highberry/app/ACF/Template/map_img_we_are_close.blade.php ENDPATH**/ ?>