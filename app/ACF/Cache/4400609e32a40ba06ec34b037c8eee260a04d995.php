<?php $__env->startSection('content'); ?>
    <div class="st-margin freezing-tabs">
        <div class="m-auto content-max-width content-wrap">
            <div class="production-cards">
                <?php $__currentLoopData = $freezing_tabs_repeater; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $freeze_tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="production-cards-item">
                        <div class="card-first-col">
                            <p class="card-title">
                                <?php echo e($freeze_tab['icon_heading']); ?>

                            </p>
                            <div class="img-wrap">
                                <img src="<?php echo e($freeze_tab['icon_image']['url']); ?>" alt="<?php echo e($freeze_tab['icon_image']['alt']); ?>">
                            </div>
            
                        </div>
                        <div class="card-second-col">
                            <p class="card-second-title"><?php echo e($freeze_tab['text_col_heading']); ?></p>
                            <div class="production-card-info">
                                <?php echo $freeze_tab['info_col']; ?>

                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\highberrycomua\wp-content\themes\highberry\app\ACF\Template/freezing_tabs.blade.php ENDPATH**/ ?>