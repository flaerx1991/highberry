<?php $__env->startSection('content'); ?>
    <div class="secondary-pages-banner post-banner">
        <div class="content-wrap">
            <div class="banner-template">
                <div class="widescreenimg"> <?php echo $__env->make('Components.picture', array('classes' => $picture_classes, 'image' => $desktop_image,
                                                                                                            'imageTablet' => $tablet_image,
                                                                                                            'imageMobile' => $mobile_image), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                
                <div class="pagename-col-pad">
                    <div class="page-name-col"> 
                                        
                        <?php if(is_tax()): ?>
                            <h1><?php echo e(single_cat_title()); ?></h1>
                        <?php elseif(is_archive()): ?>
                            <?php if(is_post_type_archive('products')): ?>
                            <h1><?php echo e($products_heading); ?></h1>
                            <?php elseif(is_post_type_archive('news')): ?>
                            <h1><?php echo e($news_heading); ?></h1>
                            <?php elseif(is_post_type_archive('article')): ?>
                            <h1><?php echo e($article_heading); ?></h1>
                            <?php else: ?>
                            <?php endif; ?>
                        <?php else: ?>
                            <h1> <?php echo e($heading); ?></h1>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\highberrycomua\wp-content\themes\highberry\app\ACF\Template/post_banner.blade.php ENDPATH**/ ?>