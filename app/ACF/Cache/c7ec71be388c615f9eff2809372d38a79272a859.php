<?php $__env->startSection('content'); ?>
    <div class="st-margin post-without-cat-single">
        <div class="m-auto content-wrap content-max-width">            
            <div class="post-single-page">
               <div class="main-info">
                    <?php echo $post_description; ?>

               </div>
               <div class="list-and-image">
                    <div class="post-list"> <?php echo $post_list_items; ?></div>
                    <div class="img-wrap"><img src="<?php echo e($post_item_img['url']); ?>" alt="<?php echo e($post_item_img['url']['alt']); ?>"></div>
               </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\highberrycomua\wp-content\themes\highberry\app\ACF\Template/post_without_cat_single.blade.php ENDPATH**/ ?>