                <footer class="site-footer">
                    <div class="footer-wrap">
                        <div class="background-image"><?php echo $__env->make('Components.picture', array('classes' => $picture_classes, 'image' => $desktop_image,
                            'imageTablet' => $tablet_image,
                            'imageMobile' => $mobile_image), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>

                        <div class="grid footer-menu">
                            <div class="grid col1">
                                <div class="footer-logo"><img src="<?php echo e($footer_logo['url']); ?>" alt="<?php echo e($footer_logo['alt']); ?>"></div>
                                <div class="company-info">
                                    <p class="company-name"><?php echo e($company_name); ?></p>
                                    <div> <?php echo $company_info; ?></div>
                                </div>
                                <div class="grid phones-contacts">
                                    <?php $__currentLoopData = $contacts_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="flex contact-item">
                                            <a href="<?php echo e($item['contact_item']['url']); ?>"><?php echo e($item['contact_item']['title']); ?></a>
                                            <span><?php echo e($item['purpose']); ?></span>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <?php if($footer_menu): ?>
                                    <ul class="grid footer-menu-list">
                                        <?php $__currentLoopData = $footer_menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="footer-menu-item"><a href="<?php echo e($link['navigation_links']['url']); ?>"><?php echo e($link['navigation_links']['title']); ?></a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                <?php endif; ?>
                                <a class="flex catalog" href="<?php echo e($footer_catalog_file['url']); ?>"
                                    <?php switch($footer_catalog_file_link_action):
                                        case (1): ?>
                                    target="_blank"
                                        <?php break; ?>
                                    <?php case (2): ?>
                                        download
                                    <?php break; ?>
                                        <?php default: ?>
                                    <?php break; ?>
                                        <?php endswitch; ?>>
                                    <?php echo e($footer_catalog_text); ?> <img src="<?php echo e($footer_catalog_icon['url']); ?>" alt="<?php echo e($footer_catalog_icon['alt']); ?>">
                                </a>
                            </div>

                            <div class="col2">

                                <div class="form-wrap">
                                    <?php echo apply_shortcodes('[contact-form-7 id="216" title="Footer form"]'); ?>

                                </div>

                                <div class="grid phones-contacts">
                                    <?php $__currentLoopData = $contacts_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="flex contact-item">
                                            <a href="<?php echo e($item['contact_item']['url']); ?>"><?php echo e($item['contact_item']['title']); ?></a>
                                            <span><?php echo e($item['purpose']); ?></span>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-footer-block">
                            <p><?php echo e($footer_company_credentials_name); ?></p>
                            <a href="<?php echo e($privacy_policy_file['url']); ?>"
                            <?php switch($privacy_policy_link_action):
                                case (1): ?>
                            target="_blank"
                                <?php break; ?>
                            <?php case (2): ?>
                                download
                            <?php break; ?>
                                <?php default: ?>
                            <?php break; ?>
                                <?php endswitch; ?>>
                            <?php echo e($privacy_policy_text); ?> 
                        </a>
                        </div>

                    </div>
                </footer>
            </div>

        <?php wp_footer(); ?>
        <link rel="stylesheet" id="highberry-font-css" href="<?php echo get_template_directory_uri(); ?>/assets/css/fonts.css?ver=<?php echo e(_S_VERSION); ?>" media="all">
    </body>


</html>
<?php /**PATH C:\OpenServer\domains\highberrycomua\wp-content\themes\highberry\app\ACF\Template/Static/footer.blade.php ENDPATH**/ ?>