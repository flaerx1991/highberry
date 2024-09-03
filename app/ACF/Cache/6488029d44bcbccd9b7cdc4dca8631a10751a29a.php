<?php $__env->startSection('content'); ?>
    <div class="secondary-pages-banner contacts-banner">
        <div class="content-wrap">
            <div class="banner-template">
                <div class="widescreenimg"> <?php echo $__env->make('Components.picture', array('classes' => $picture_classes, 'image' => $desktop_image,
                                                                                                            'imageTablet' => $tablet_image,
                                                                                                            'imageMobile' => $mobile_image), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="pagename-col-pad">
                    <div class="page-name-col">                   
                            <h1><?php echo e(( get_the_title() )); ?></h1> 
                    </div>
                </div>

                <div class="contacts-banner-wrap">
                    <div class="contacts-info-banner">
                        <div class="first-info-col regular-col grid">
                            <p class="info-col-title"> <?php echo e($first_info_col_title); ?></p>
                            <div class="contacts-info-wrap grid">
                                <div class="contacts-items grid">
                                    <?php $__currentLoopData = $contact_address_page_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $con_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="contacts-item flex">
                                            <div class="green-circle-item"><img src="<?php echo e($con_item['contact_address_icon']['url']); ?>" alt="<?php echo e($con_item['contact_address_icon']['alt']); ?>"></div>
                                            <a href="<?php echo e($con_item['contacts_address_item']['url']); ?>"><?php echo e($con_item['contacts_address_item']['title']); ?></a>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <div class="img-wrap"><img src="<?php echo e($contacts_logo['url']); ?>" alt="<?php echo e($contacts_logo['alt']); ?>"></div>
                            </div>
                        </div>
                        <div class="second-info-col regular-col">
                            <p class="info-col-title"> <?php echo e($second_info_col_title); ?></p>
                            <div class="contacts-info-wrap grid">
                                <div class="contacts-items grid">
                                    <?php $__currentLoopData = $contact_phones_page_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cont_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="contacts-item flex">
                                            <div class="green-circle-item"><img src="<?php echo e($cont_item['contacts_phones_icon']['url']); ?>" alt="<?php echo e($cont_item['contacts_phones_icon']['alt']); ?>"></div>
                                           
                                            <div class="add-info-wrap">
                                                <a href="<?php echo e($cont_item['contacts_phones_item']['url']); ?>"><?php echo e($cont_item['contacts_phones_item']['title']); ?></a>
                                                <div class="add-info-contacts"><?php echo $cont_item['contacts_addinfo']; ?></div>
                                            </div>
                                            
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <div class="contacts-page-form">
                                    <div class="contacts-form-wrap form-wrap">
                                        <p class="form-heading"><?php echo e($form_heading); ?></p>
                                        <?php echo apply_shortcodes('[contact-form-7 id="216" title="Footer form"]'); ?>

                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/sites/highberry/wp-content/themes/highberry/app/ACF/Template/contacts_page_banner.blade.php ENDPATH**/ ?>