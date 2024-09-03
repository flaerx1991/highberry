<?php $__env->startSection('content'); ?>
    <div class="st-margin-full raising-slider">
        <div class="m-auto content-wrap">
            <div class="swiper production-slider">
                <div class="swiper-wrapper slider-raise">
                    <?php $__currentLoopData = $raising_slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $raising_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="swiper-slide slide" data-imgurl="<?php echo e($raising_item['product_image']['url']); ?>" data-productname="<?php echo e($raising_item['product_name']); ?>" data-icon1="<?php echo e($raising_item['product_icon1']['url']); ?>" data-textinf1="<?php echo $raising_item['product_info1']; ?>" data-icon2="<?php echo e($raising_item['product_icon2']['url']); ?>" data-textinf2="<?php echo $raising_item['product_info2']; ?>">
                            <div class="img-wrap"><img src="<?php echo e($raising_item['product_image']['url']); ?>" alt="<?php echo e($raising_item['product_image']['alt']); ?>"></div>
                            <div class="slide-name"><?php echo e($raising_item['product_name']); ?></div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="swiper-pagination"></div>
        
                <div class="buttons-wrap">
                    <div class="swiper-button-prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/raising-slider-prev-arrow.svg" alt=""></div>
                    <div class="swiper-button-next"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/raising-slider-next-arrow.svg" alt=""></div>
                </div>
        
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/sites/highberry/wp-content/themes/highberry/app/ACF/Template/raising_slider.blade.php ENDPATH**/ ?>