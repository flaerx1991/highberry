<?php $__env->startSection('content'); ?>
    <div class="products-filter">
        <div class="content-wrap">
            <div class="products-filter-wrap">
                <div class="filter-button-components">
                    <div class="filter-button"><?php echo $__env->make('Components.product-filter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
                    <div class="prod-list">
                        <?php if(count($categories) > 0): ?>
                            <?php echo $__env->make('Components.category_filter_component', ['categories' => $categories], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\highberrycomua\wp-content\themes\highberry\app\ACF\Template/products_filter.blade.php ENDPATH**/ ?>