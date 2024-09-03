
<picture class="<?php echo e($classes); ?>">

    <source media="(min-width: 1200px)" srcset="<?php echo e($image['url']); ?>" type='image/png'>


    <source media="(min-width: 768px)" srcset="<?php echo e($imageTablet['url']); ?>" type='image/png'>


    <source srcset="<?php echo e($imageMobile['url']); ?>" type='image/png'>

    <img src="<?php echo e($imageMobile['url']); ?>" class="img-fluid" alt="<?php echo e($imageMobile['alt']); ?>" width="4096" height="2304">

</picture>
<?php /**PATH C:\OpenServer\domains\highberrycomua\wp-content\themes\highberry\app\ACF\Template/Components/picture.blade.php ENDPATH**/ ?>