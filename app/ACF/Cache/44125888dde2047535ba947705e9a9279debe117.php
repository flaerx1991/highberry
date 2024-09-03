<?php $__env->startSection('content'); ?>
    <div class="st-margin production-facilities">
        <div class="m-auto content-wrap">
            <?php echo ($pr_heading) ? '<h2>' . $pr_heading . '</h2>' : ''; ?>

            <div class="pr-wrap">
                <div class="grid pr-content">
                    <div class="grid first-col">
                        <div class="img-col"><img src="<?php echo e($pr_image['url']); ?>" alt="<?php echo e($pr_image['alt']); ?>"></div>
                        <div class="grid tabs-col">
                            <?php $__currentLoopData = $pr_tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr_tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="flex banner-tabs-item">
                                    <div class="green-circle-item"><img src="<?php echo e($pr_tab['pr_icon']['url']); ?>" alt="<?php echo e($pr_tab['pr_icon']['alt']); ?>"></div>
                                    <div class="tab-info">
                                        <div class="flex tab-info-text">
                                            <p class="tab-number"><?php echo e($pr_tab['pr_number']); ?></p>
                                            <span class="tab-number-text"><?php echo e($pr_tab['pr_number_text']); ?></span>
                                        </div>
                                        <span class="name-tab-text"><?php echo e($pr_tab['pr_tab_name']); ?></span>
                                        <span class="add-tab-text"><?php echo e($pr_tab['pr_add_text']); ?></span>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
    
                    <div class="second-col">
                        <?php echo $pr_info; ?>

                    </div>
               </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/sites/highberry/wp-content/themes/highberry/app/ACF/Template/production_facilities.blade.php ENDPATH**/ ?>