<?php $__env->startSection('content'); ?>
    <div class="st-margin product-selection-popup <?php echo (is_front_page()) ? '' : 'pop-up-padding'; ?>">
        <div class="m-auto content-wrap">
            <?php echo ($product_popup_heading) ? '<h2>' . $product_popup_heading . '</h2>' : ''; ?>

           <div class="grid product-selection-popup-grid">
                <div class="product-selection-list-up list-grid">
                    <ul class="flex product-list-up list">
                        <?php $__currentLoopData = $product_popup_repeater_upper; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="product-list-item">
                                <div class="icon-button"><img src="<?php echo e($product['product_icon']['url']); ?>" alt="<?php echo e($product['product_icon']['alt']); ?>"></div> 
                                <div class="selection-pop-up">
                                    <div class="popup-inner">
                                        <div class="popup-item"><?php echo e($product['product_name']); ?></div>
                                        <div class="divider"></div>
                                        <div class="popup-item"><?php echo e($product['product_quantity']); ?></div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                    </ul>
                </div>
                <div class="product-selection-img-medium"><img src="<?php echo e($products_image['url']); ?>" alt="<?php echo e($products_image['alt']); ?>"></div>
                <div class="product-selection-list-down list-grid">
                    <ul class="flex product-list-down list">
                        <?php $__currentLoopData = $product_popup_repeater_down; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="product-list-item">
                                <div class="icon-button"><img src="<?php echo e($product['product_icon']['url']); ?>" alt="<?php echo e($product['product_icon']['alt']); ?>"></div> 
                                <div class="selection-pop-up">
                                    <div class="popup-inner">
                                        <div class="popup-item"><?php echo e($product['product_name']); ?></div>
                                        <div class="divider"></div>
                                        <div class="popup-item"><?php echo e($product['product_quantity']); ?></div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                    </ul>
                </div>
           </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/sites/highberry/wp-content/themes/highberry/app/ACF/Template/product_selection_popup.blade.php ENDPATH**/ ?>