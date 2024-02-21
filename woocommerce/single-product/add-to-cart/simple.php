<?php
/**
 * Custom Add to Cart template for Single Product Page
 */

defined('ABSPATH') || exit;

global $product;
$is_in_stock = $product->is_in_stock();


do_action('woocommerce_before_add_to_cart_form'); ?>

<form class="cart" action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>" method="post" enctype='multipart/form-data'>

    <div class="quantity-wrapper">
        <div class="quantity-buttons minus">
            <button type="button" class="minus" onclick="var qty_el = document.getElementById('quantity_<?php echo esc_attr($product->get_id()); ?>'); if( ! qty_el ) return; var qty = parseInt(qty_el.value); if ( ! isNaN( qty ) && qty > 1 ) qty_el.value--; return false;"><svg xmlns="http://www.w3.org/2000/svg" class="productQuantityInput_icon productQuantityInput_icon-decrease" width="24" height="24" viewBox="0 0 24 24">
                            <rect width="12" height="2" x="6" y="11"></rect>
                          </svg></button>
        </div>

        <div class="quantity-input">
            <input
                type="text"
                id="quantity_<?php echo esc_attr($product->get_id()); ?>"
                class="input-text qty text"
                name="quantity"
                value="1"
                aria-label="Product quantity"
                size="4"
                min="1"
                max=""
                step="1"
                placeholder=""
                inputmode="numeric"
                autocomplete="off"
            />
        </div>

        <div class="quantity-buttons plus">
            <button type="button" class="plus" onclick="var qty_el = document.getElementById('quantity_<?php echo esc_attr($product->get_id()); ?>'); if( ! qty_el ) return; var qty = parseInt(qty_el.value); if ( ! isNaN( qty ) ) qty_el.value++; return false;"><svg xmlns="http://www.w3.org/2000/svg" class="productQuantityInput_icon productQuantityInput_icon-increase" width="24" height="24" viewBox="0 0 24 24">
                            <polygon points="11 11 11 6 13 6 13 11 18 11 18 13 13 13 13 18 11 18 11 13 6 13 6 11"></polygon>
                          </svg></button>
        </div>
    </div>

    <button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" class="single_add_to_cart_button button alt <?php echo $is_in_stock > 0 ? '' : 'disabled'; ?>" <?php echo $is_in_stock > 0 ? '' : 'disabled'; ?>><?php echo $is_in_stock > 0 ? 'Add To Cart' : 'out of stock'; ?></button>

</form>

<?php do_action('woocommerce_after_add_to_cart_form'); ?>
