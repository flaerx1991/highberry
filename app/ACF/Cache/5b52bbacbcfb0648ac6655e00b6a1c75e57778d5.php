<?php $__env->startSection('content'); ?>
    <div class="product-card">
        <div class="content-wrap">
            <div class="slider-and-additional-info">
                <div class="product-card-slider">
                    <div class="swiper-container gallery-top">
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $product_images_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod_card_img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <div class="swiper-slide-container"> 
                                        <img src="<?php echo e($prod_card_img['product_card_slide_img']['url']); ?>"
                                        alt="<?php echo e($prod_card_img['product_card_slide_img']['alt']); ?>"> 
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="slider-arrows-container">
                            <div class="swiper-button-prev-img prod-arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/prod-prev-arrow.svg" alt=""></div>
                            <div class="swiper-button-next-img prod-arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/prod-next-arrow.svg" alt=""></div>
                        </div>
                    </div>
                    <div  class="swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $product_images_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod_card_img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <div class="swiper-slide-container"> 
                                        <img src="<?php echo e($prod_card_img['product_card_slide_img']['url']); ?>" 
                                        alt="<?php echo e($prod_card_img['product_card_slide_img']['alt']); ?>"> 
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="product-info">
                    <div class="main-product-info">
                        <h3><?php echo e($heading); ?></h3>
                        <div class="additional-product-description"><?php echo $product_card_description; ?></div>
                    </div>
                    <div class="additional-info-product-tabs">
                        <?php $__currentLoopData = $product_card_additional_info_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $add_tab_info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="add-info-product-item">
                                <div class="green-circle-item"><img src="<?php echo e($add_tab_info['item_icon']['url']); ?>" alt="<?php echo e($add_tab_info['item_icon']['alt']); ?>"></div>
                                <div class="text-info">
                                    <p class="top-text"><?php echo e($add_tab_info['item_name']); ?></p>
                                    <p class="bottom-text"><?php echo e($add_tab_info['item_info']); ?></p>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
        
                </div>
            </div>
            <?php if($relative_products): ?>
                <div class="additional-products-slider">
                    <h3><?php echo e($additional_products_slider_title); ?></h3>
                    <div class="swiper-container additional-products-slider-wrap">
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $relative_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relative_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $isLinkActive = isset($relative_product['activate_product_url']) && $relative_product['activate_product_url']?>
                                <div class="swiper-slide">
                                    <div class="prod-item">
                                        <a href="<?php echo e(($isLinkActive) ? $relative_product['link'] : ''); ?>" style="<?php echo ($isLinkActive) ? '' : 'pointer-events:none'; ?>" >
                                            <div class="img-wrap"><img src="<?php echo e($relative_product['product_tab_square_image']['url']); ?>" alt="<?php echo e($relative_product['product_tab_square_image']['alt']); ?>"></div>
                                            <div class="prod-name">
                                                <p><?php echo e($relative_product['title']); ?></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="slider-prod-arrows-container">
                        <div class="swiper-button-prev-prod"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/prev-arrow-prod-card.svg" alt=""></div>
                        <div class="swiper-button-next-prod"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/next-arrow-prod-card.svg" alt=""></div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/sites/highberry/wp-content/themes/highberry/app/ACF/Template/product_card.blade.php ENDPATH**/ ?>