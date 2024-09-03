<?php $__env->startSection('content'); ?>
    <div class="st-margin activities-cards <?php echo e($cards_additional_class); ?>">
        <div class="m-auto content-wrap">
            <?php echo ($activities_cards_heading) ? '<h2>' . $activities_cards_heading . '</h2>' : ''; ?>

            <div class="img-wrap">  <?php echo ($additional_image) ? '<img src="' . $additional_image['url'] .'" src="' . $additional_image['alt'] .'" >' : ''; ?></div>
            
            <div class="raising-cards">
                <?php $__currentLoopData = $cards_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="raising-card-item">
                        <?php if($item['card_img']): ?>
                            <div class="img-col"><img src="<?php echo e($item['card_img']['url']); ?>" alt="<?php echo e($item['card_img']['alt']); ?>"></div>
                        <?php endif; ?>
                       
                        <div class="raising-card-info">
                            <div class="card-logo"><img src="<?php echo e($item['card_icon']['url']); ?>" alt="<?php echo e($item['card_icon']['alt']); ?>"></div>
                            <p class="name-of-card"><?php echo e($item['card_title']); ?></p>
                            <div class="add-info">
                                <?php echo $item['card_info']; ?>

                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/sites/highberry/wp-content/themes/highberry/app/ACF/Template/activities_cards.blade.php ENDPATH**/ ?>