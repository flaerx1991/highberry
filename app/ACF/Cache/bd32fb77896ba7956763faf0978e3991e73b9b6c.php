<?php $__env->startSection('content'); ?>
    <?php ($count = isset($category['children']) ? count($category['children']) : count($category['products'])); ?>

    <?php 
        $addClass = '';
        switch ($count) {
            case $count == 1:
                $addClass = ' one-col';
            break;
            case $count > 2:
                $addClass = ' more-col';
            break;
            default:
        }
    ?>
    <?php 
        // $main_cat_image_obj = $category['children'];
        // $term_id = get_queried_object();
        // $term_ancestor_ids = get_ancestors($term_id, 'products-category');
        // $post_id = 'product_cat_'.$term_ancestor_ids[0];

        // $custom_field = get_field('brand_background', $post_id);
        // $main_cat_image = get_field('product_category_image', $main_cat_image_obj);
        global $post;
        // $ma = get_post();
        $post_slug = $post->post_name;
        // dump($post_slug);

    ;?>
    <div class="categories-product-grid">
        <div class="categories-wrap">
            <a href="<?php echo e(get_term_link($category['term_id'])); ?>" class="cat-tog">
                
                <h3><?php echo e($category['name']); ?></h3>
            </a> 
            <div class="subcategory-grid <?php echo e($addClass); ?>">
                <?php if(isset($category['children'])): ?>
                    <?php $__currentLoopData = $category['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="subcategory-item">
                            <a href="<?php echo e(get_term_link($child_category['data']['term_id'])); ?>">
                                <div class="img-wrap"><img src="<?php echo e($child_category['image']['url']); ?>" alt=""></div>
                                <div class="subcategory-name">
                                    <p><?php echo e($child_category['data']['name']); ?></p>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php elseif(isset($category['products'])): ?>
                    <?php $__currentLoopData = $category['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $isLinkActive = isset($product['activate_product_url']) && $product['activate_product_url']; ?>
                        <div class="subcategory-item">
                            <a href="<?php echo e(($isLinkActive) ? $product['link'] : ''); ?>" style="<?php echo ($isLinkActive) ? '' : 'pointer-events:none'; ?>" >
                                <div class="img-wrap"><img src="<?php echo e($product['product_tab_square_image']['url']); ?>" alt=""></div>
                                <div class="subcategory-name">
                                    <p><?php echo e($product['title']); ?></p>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\highberrycomua\wp-content\themes\highberry\app\ACF\Template/categories_products_grid.blade.php ENDPATH**/ ?>