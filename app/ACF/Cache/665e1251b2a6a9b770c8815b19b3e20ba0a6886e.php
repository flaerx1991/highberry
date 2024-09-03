<?php $__env->startSection('content'); ?>
    <div class="st-margin news-single">
        <div class="m-auto content-wrap content-max-width">            
            <div class="news-single-page">
               <div class="main-info">
                    <?php echo $news_description; ?>

               </div>
               <div class="list-and-image">
                    <div class="news-list"> <?php echo $news_list_items; ?></div>
                    <div class="img-wrap"><img src="<?php echo e($news_item_img['url']); ?>" alt="<?php echo e($news_item_img['url']['alt']); ?>"></div>
               </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/sites/highberry/wp-content/themes/highberry/app/ACF/Template/news_single.blade.php ENDPATH**/ ?>