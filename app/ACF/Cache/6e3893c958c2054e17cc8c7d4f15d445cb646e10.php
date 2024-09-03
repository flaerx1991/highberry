<?php $__env->startSection('content'); ?>
    <div class="st-margin-full main-accordion">
        <div class="m-auto content-wrap">
            <?php echo ($main_accordion_heading) ? '<h2>' . $main_accordion_heading . '</h2>' : ''; ?>

           <div class="flex main-accordion-cols">
                <div id="tab-img" class="main-accordion-picture-col"></div>
                <div class="main-accordion-list-col"> 
                    <?php echo ($accordion_heading) ? '<h3>' . $accordion_heading . '</h3>' : ''; ?>

                    <ul class="service-tabs">
                        <?php $__currentLoopData = $main_accordion_repeater; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accordion_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="service-tabs-item" data-id="<?php echo e($accordion_item['main_accordion_img']['url']); ?>"> 
                                <span class="service-tabs-title"><?php echo e($accordion_item['main_accordion_item_heading']); ?></span> 
                                <div class="know-more-link service-tabs-inner">
                                    <?php echo $accordion_item['main_accordion_item_description']; ?>

                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
           </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\highberrycomua\wp-content\themes\highberry\app\ACF\Template/main_accordion.blade.php ENDPATH**/ ?>