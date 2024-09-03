<?php $__env->startSection('content'); ?>
    <div class="secondary-pages-banner">
        <div class="content-wrap">
            <div class="banner-template">
                <div class="widescreenimg"> <?php echo $__env->make('Components.picture', array('classes' => $picture_classes, 'image' => $desktop_image,
                                                                                                            'imageTablet' => $tablet_image,
                                                                                                            'imageMobile' => $mobile_image), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="pagename-col-pad">
                    <div class="page-name-col">
                        <?php if(is_archive()): ?>
                            <?php if(is_post_type_archive('news')): ?>
                            <h1><?php echo e($news_heading); ?></h1>
                            <?php elseif(is_post_type_archive('article')): ?>
                            <h1><?php echo e($article_heading); ?></h1>
                            <?php else: ?>
                            <?php endif; ?>
                        <?php else: ?>
                            <h1><?php echo e(( get_the_title() )); ?></h1>
                        <?php endif; ?>
                       
                        <?php if($banner_info): ?>
                            <div class="page-info">
                                <?php echo $banner_info; ?> 
                            </div>
                        <?php endif; ?>
                        <?php if($banner_tabs_items): ?>
                            <div class="grid banner-tabs-repeater">
                                <?php $__currentLoopData = $banner_tabs_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner_tab_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="flex banner-tabs-item">
                                        <div class="green-circle-item"><img src="<?php echo e($banner_tab_item['tab_img']['url']); ?>" alt="<?php echo e($banner_tab_item['tab_img']['alt']); ?>"></div>
                                        <div class="tab-info">
                                            <div class="flex tab-info-text">
                                                <p class="tab-number"><?php echo e($banner_tab_item['tab_number']); ?></p>
                                                <span class="tab-number-text"><?php echo e($banner_tab_item['tab_text']); ?></span>
                                            </div>
                                            <span class="name-tab-text"><?php echo e($banner_tab_item['tab_name']); ?></span>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\highberrycomua\wp-content\themes\highberry\app\ACF\Template/secondary_pages_banner.blade.php ENDPATH**/ ?>