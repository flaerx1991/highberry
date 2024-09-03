<?php $__env->startSection('content'); ?>
    <div class="st-margin tabs-we-are-close">
        <div class="m-auto content-max-width content-wrap">
            <?php echo ($we_are_close_heading) ? '<h2>' . $we_are_close_heading . '</h2>' : ''; ?>

            <div class="grid we-are-close-tabs-repeater">
                <?php $__currentLoopData = $we_are_close_repeater; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $we_are_close_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex we-are-close-tabs-item">
                    <div class="green-circle-item"><img src="<?php echo e($we_are_close_item['green_circle_image']['url']); ?>" alt="<?php echo e($we_are_close_item['green_circle_image']['alt']); ?>"></div>
                    <div class="tab-info">
                        <div class="flex tab-info-text">
                            <p class="tab-number"><?php echo e($we_are_close_item['number_tab']); ?></p>
                            <span class="tab-number-text"><?php echo e($we_are_close_item['number_text']); ?></span>
                        </div>
                        <span class="name-tab-text"><?php echo e($we_are_close_item['name_of_tab']); ?></span>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\highberrycomua\wp-content\themes\highberry\app\ACF\Template/tabs_we_are_close.blade.php ENDPATH**/ ?>