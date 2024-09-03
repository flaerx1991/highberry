<ul class="categories-list">
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(isset($category['children']) && count($category['children']) > 0): ?>
            <li class="menu-with-submenu">
                <a href="<?php echo get_term_link($category['term_id']); ?>"><?php echo e($category['name']); ?></a>
                <div class="open-cat-list-icon">
                    <?php echo $__env->make('Components.sub-menu-arrow', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <?php echo $__env->make('Components.category_filter_component', ['categories' => $category['children']], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </li>
        <?php else: ?>
            <li>
                <a href="<?php echo get_term_link($category['term_id']); ?>" ><?php echo e($category['name']); ?></a>           
            </li>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul><?php /**PATH C:\OpenServer\domains\highberrycomua\wp-content\themes\highberry\app\ACF\Template/Components/category_filter_component.blade.php ENDPATH**/ ?>