
<ul class="submenu">
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($item['menu_item']): ?>
            <li class="submenu-item line-height-1_3">
                <div>
                    <a href="<?php echo e($item['menu_item']['url']); ?>"><?php echo e($item['menu_item']['title']); ?></a>
                    <?php if(isset($item['has_sub_menu']) && $item['has_sub_menu']): ?>
                        <?php echo $__env->make('Components.sub-menu-arrow', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>
                </div>
                <?php if(isset($item['has_sub_menu']) && $item['has_sub_menu']): ?>
                    <?php echo $__env->make('Components.header_sub_menu', ['items' => $item['sub_menu']], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </li>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul><?php /**PATH /work/sites/highberry/wp-content/themes/highberry/app/ACF/Template/Components/header_sub_menu.blade.php ENDPATH**/ ?>