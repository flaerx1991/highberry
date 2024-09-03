<?php $__env->startSection('content'); ?>
    <div class="st-margin activities-cards posts-grid-without-cat"> 
        <div class="m-auto content-wrap">            
            <div class="raising-cards">
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="raising-card-item">
                        <?php if($item['post_item_img']): ?>
                            <div class="img-col"><img src="<?php echo e($item['post_item_img']['url']); ?>" alt="<?php echo e($item['post_item_img']['alt']); ?>"></div>
                        <?php endif; ?>
                       
                        <div class="raising-card-info">
                            <div class="card-logo"><img src="<?php echo e($item['post_icon']['url']); ?>" alt="<?php echo e($item['post_icon']['alt']); ?>"></div>
                            <p class="name-of-card"><?php echo e($item['title']); ?></p>
                            <div class="add-info know-more-link">
                                <?php echo wp_trim_words($item['post_description'], 45, '...'); ?>

                                <a href="<?php echo e($item['link']); ?>"><?php echo e($item['link_text']); ?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\highberrycomua\wp-content\themes\highberry\app\ACF\Template/posts_grid_without_cat.blade.php ENDPATH**/ ?>