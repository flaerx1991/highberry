<?php $__env->startSection('content'); ?>
    <div class="st-margin-full main-slider">
        <div class="m-auto content-wrap">
            <div class="swiper product-slider">
                <div class="swiper-wrapper swiper-wr">
                    <?php $__currentLoopData = $slide_repeater; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $isLinkActive = isset($slide_item['slide_product_link']) && $slide_item['slide_product_link']; ?>
                        <div class="swiper-slide slide" data-category="<?php echo e($slide_item['slide_product_category']); ?>" data-products="<?php echo $slide_item['slide_product_items']; ?>" data-url="<?php echo e(($isLinkActive) ? $slide_item['slide_product_link']['url'] : ''); ?>" data-link-title="<?php echo e(($isLinkActive) ? $slide_item['slide_product_link']['title'] : ''); ?>">
                            <div class="img-wrap">
                                <img src="<?php echo e($slide_item['slide_img']['url']); ?>" alt="<?php echo e($slide_item['slide_img']['alt']); ?>">
                            </div>
                            <div class="info-wrap">
                                <div class="product-category-mob"> <p><?php echo e($slide_item['slide_product_category']); ?></p></div>
                                <div class="slide-heading-mob"> <h2><?php echo e($main_slider_heading); ?></h2></div>
                                <div class="mobile-prod-list know-more-link"><?php echo $slide_item['slide_product_items']; ?> 
                                    <?php if($isLinkActive): ?>
                                        <a href="<?php echo e($slide_item['slide_product_link']['url']); ?>"> <?php echo e($slide_item['slide_product_link']['title']); ?> </a> 
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="heading-slider"> <h2><?php echo e($main_slider_heading); ?></h2></div>
                <div class="swiper-pagination"></div>
                <div class="buttons-wrap">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\highberrycomua\wp-content\themes\highberry\app\ACF\Template/main_slider.blade.php ENDPATH**/ ?>