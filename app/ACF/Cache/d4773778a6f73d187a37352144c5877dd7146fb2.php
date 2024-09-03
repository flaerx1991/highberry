<?php $__env->startSection('content'); ?>
    <div class="st-margin mission-and-values-cards">
        <div class="m-auto content-wrap">
            <div class="mv-cards">
                <?php $__currentLoopData = $mv_cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mv_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="mv-card-item">
                        <div class="card-logo"><img src="<?php echo e($mv_item['mv_icon']['url']); ?>" alt="<?php echo e($mv_item['mv_icon']['alt']); ?>"></div>
                        <p class="name-of-card"><?php echo e($mv_item['mv_heading']); ?></p>
                        <div class="add-info">
                            <?php echo $mv_item['mv_info']; ?>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/sites/highberry/wp-content/themes/highberry/app/ACF/Template/mission_and_values_cards.blade.php ENDPATH**/ ?>