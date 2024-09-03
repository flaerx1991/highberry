<?php $__env->startSection('content'); ?>
    <div class="st-margin vacansies-work-with-us">
        <div class="m-auto content-max-width content-wrap">
           <div class="grid work-with-us">

                <div class="grid form-col">
                    <div class="img-wrap"><img src="<?php echo e($form_vacansies_logo['url']); ?>" alt=""></div>
                    <div class="form-vacansies-wrap">
                        <?php echo ($form_heading) ? '<h4>' . $form_heading . '</h4>' : ''; ?>

                        <?php echo apply_shortcodes('[contact-form-7 id="444" title="Vacancies Form"]'); ?>

                    </div>
                </div>

                <div class="info-work-with-us">
                    <div class="text-heading"><?php echo e($additional_info_heading); ?></div>
                    <div class="grid work-with-us-addtional-info">
                        <?php $__currentLoopData = $additional_info_tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad_info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div>
                                <?php echo $ad_info["company_info"]; ?>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
           </div>
           
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/sites/highberry/wp-content/themes/highberry/app/ACF/Template/vacansies_work_with_us.blade.php ENDPATH**/ ?>