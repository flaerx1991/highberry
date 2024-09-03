<ul class="prod-list">
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(isset($category['children']) && count($category['children']) > 0): ?>
        <li>
            <a href="<?php echo get_term_link($category['term_id']); ?>"><?php echo e($category['name']); ?></a>
            <?php echo $__env->make('Components.category-filter-component', $category['children'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                 
        </li>
        <?php else: ?>
            <li>
                <a href="<?php echo get_term_link($category['term_id']); ?>"><?php echo e($category['name']); ?></a>           
            </li>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul><?php /**PATH /work/sites/highberry/wp-content/themes/highberry/app/ACF/Template/Components/category-filter-component.blade.php ENDPATH**/ ?>