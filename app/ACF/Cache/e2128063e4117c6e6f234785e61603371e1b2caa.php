<?php $__env->startSection('content'); ?>
    <div class="two-text-cols  <?php echo e($additional_class); ?>">
        <div class="m-auto content-wrap">
            <div class="grid two-text-cols-wrap">

                <div class="text-col"><?php echo $first_text_col; ?></div>
                <?php if($second_text_col): ?>
                    <div class="know-more-link text-col"><?php echo $second_text_col; ?></div>
                <?php endif; ?>
                
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\highberrycomua\wp-content\themes\highberry\app\ACF\Template/two_text_cols.blade.php ENDPATH**/ ?>