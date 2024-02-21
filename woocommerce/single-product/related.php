<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * @see      https://docs.woocommerce.com/document/template-structure/
 * @package  WooCommerce\Templates
 * @version  3.0.0
 */

defined('ABSPATH') || exit;


if ($related_products_array && is_array($related_products_array)) :
    ?>

    <section class="related products">

        <?php if ($heading) : ?>
            <h2><?php echo esc_html($heading); ?></h2>
        <?php endif; ?>

        <?php woocommerce_product_loop_start(); ?>

        <?php foreach ($related_products_array as $related_product_id) : ?>
            <?php
            // Ensure the ID is an integer
            $related_product_id = intval($related_product_id);

            // Get the product object
            $related_product = wc_get_product($related_product_id);

            // Check if the product is valid
            if ($related_product && $related_product->is_visible()) :
                setup_postdata($GLOBALS['post'] = $related_product->get_post());

                wc_get_template_part('content', 'product');
            endif;
            ?>
        <?php endforeach; ?>

        <?php woocommerce_product_loop_end(); ?>

    </section>

<?php endif;

wp_reset_postdata();
