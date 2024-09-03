<!doctype html>
<html <?php (language_attributes()); ?>>
<head>
    <meta charset="<?php (bloginfo( 'charset' )); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

   
    <?php (wp_head()); ?>
</head>

<body <?php (body_class((is_front_page()) ? '' : 'sec-page')); ?>>
    <div id="page" class="site">
        <?php if(!isset($_SESSION['first_enter'])): ?>
            <?php echo $__env->make('Components.preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php ($_SESSION['first_enter'] = true); ?>
        <?php endif; ?>
        <header class="site-header <?php echo (is_front_page()) ? '' : 'other-page'; ?>" id="header">
            <div class="header-menu-wrap ">
                <div class="flex header-visible-part">
                    <div class="flex left-col">
                        <div class="logo">
                            <a href="<?php echo e($logo_link['url']); ?>"><img src="<?php echo e((is_front_page()) ? $main_page_logo['url'] : $secondary_pages_logo['url']); ?>" alt="<?php echo e((is_front_page()) ? $main_page_logo['alt'] : $secondary_pages_logo['alt']); ?>"></a>

                        </div>
                        <a class="catalog" href="<?php echo e($catalog_file['url']); ?>"
                           <?php switch($catalog_file_link_action):
                              case (1): ?>
                           target="_blank"
                              <?php break; ?>
                           <?php case (2): ?>
                              download
                           <?php break; ?>
                              <?php default: ?>
                           <?php break; ?>
                              <?php endswitch; ?>>
                        <?php echo e($catalog_text); ?> <img src="<?php echo e($catalog_icon['url']); ?>" alt="<?php echo e($catalog_icon['alt']); ?>">
                        </a>
                    </div>
                    <div class="flex right-col">
                        <div class="language-selector">
                            <p class="language current-language">UA</p><div class="divider"></div>
                            <p class="language">EN</p><div class="divider"></div>
                        </div>
                        <div class="mobile-burger"><?php echo $__env->make('Components.menu-burger-button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
                    </div> 
                </div>               
                <div class="menu-wrapper">
                    <div id="sideNav" class="menu">
                     <div class="languages">
                        <div class="language-selector"><p class="language current-language">UA</p><div class="divider"></div><p class="language">EN</p><div class="divider"></div></div>
                        <div class="mobile-languages">
                           <a href="<?php echo e($logo_link['url']); ?>"><?php echo $__env->make('Components.home-menu-button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></a> 
                           <div class="close-menu">
                              <?php echo $__env->make('Components.close-menu-button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                           </div>
                        </div>
                     </div>
                    <?php if($navigation): ?>
                       <ul class="menu-ul">
                        <?php $__currentLoopData = $navigation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li class="menu-item">
                             <a href="<?php echo e($item['menu_item']['url']); ?>"><?php echo e($item['menu_item']['title']); ?></a>
                              <div class="open-menu-icon">
                                 <?php if(isset($item['has_sub_menu']) && $item['has_sub_menu']): ?>
                                    <?php echo $__env->make('Components.sub-menu-arrow', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                 <?php endif; ?>
                              </div>
                              <?php if(isset($item['has_sub_menu']) && $item['has_sub_menu']): ?>
                                    <?php echo $__env->make('Components.header_sub_menu', ['items' => $item['sub_menu']], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                              <?php endif; ?>
                          </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                     
                       </ul>
                     <?php endif; ?>
                       <div class="phones-info">
                           <?php if($nav_contacts): ?>
                              <div class="flex contacts">
                                 <?php $__currentLoopData = $nav_contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="flex con-item">
                                       <a href="<?php echo e($contact_item['contact_link']['url']); ?>"><?php echo e($contact_item['contact_link']['title']); ?></a>
                                       <span><?php echo e($contact_item['purpose']); ?></span>
                                    </div>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                              </div>
                           <?php endif; ?>
                       </div>
                    </div>
                 </div>                
            </div>
        </header><?php /**PATH /work/sites/highberry/wp-content/themes/highberry/app/ACF/Template/Static/header.blade.php ENDPATH**/ ?>