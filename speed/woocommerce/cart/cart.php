<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.9.0
 */

 defined( 'ABSPATH' ) || exit;
 ?>

<div class="top">
<span class="top__title">Your Shopping Basket</span>
<a class="top__checkout" href="<?php echo esc_url( wc_get_checkout_url() ); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="18" viewBox="0 0 14 18" class="responsiveBasket_lockIcon">
<path fill-rule="evenodd" d="M6.99924169,0 C5.45228036,0 4.11537212,0.6345 3.28198462,1.66575 C2.4478388,2.697 2.09977251,4.0335 2.09977251,5.4735 L2.09977251,6.231 L4.20030333,6.231 L4.20030333,5.4735 C4.20030333,4.38 4.47177987,3.5205 4.9214603,2.964 C5.37189904,2.4075 5.97855054,2.07675 6.99924169,2.07675 C8.02296609,2.07675 8.62961759,2.38875 9.07778139,2.94225 C9.52594518,3.49575 9.79969667,4.36875 9.79969667,5.4735 L9.79969667,6.231 L11.9002275,6.231 L11.9002275,5.4735 C11.9002275,4.02525 11.5309284,2.67375 10.6967826,1.644 C9.86263677,0.615 8.54392807,0 6.99924169,0 Z M2.10053082,6.9225 C0.940439682,6.9225 1.4207019e-16,7.85262843 0,9 L0,15.9225 C1.4207019e-16,17.0698716 0.940439682,18 2.10053082,18 L11.8994692,18 C13.0595603,18 14,17.0698716 14,15.9225 L14,9 C14,7.85262843 13.0595603,6.9225 11.8994692,6.9225 L2.10053082,6.9225 Z M6.99924169,10.3845 C7.77272235,10.3845 8.39984834,11.00475 8.39984834,11.769 C8.39984834,12.2805 8.11699708,12.71925 7.69992417,12.95925 L7.69992417,14.53875 C7.69909002,14.9207269 7.3862114,15.230175 7,15.231 C6.6137886,15.230175 6.30090998,14.9207269 6.30007583,14.53875 L6.30007583,12.95925 C5.86798379,12.7152018 5.60096706,12.2611288 5.60015166,11.769 C5.60015166,11.00475 6.22727765,10.3845 7,10.3845 L6.99924169,10.3845 Z"></path></svg> Checkout Securely Now</a>
</div>



<div class="info">
  <div class="info__delivery">Enjoy <strong>Free</strong> Delivery on All Orders!</div>
  <div class="info__voucher">Use code <strong>GOBEST10</strong> for a 10% Discount!</div>
  <?php do_action( 'woocommerce_before_cart_contents' ); ?>
</div>

<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">

<!-- Table header -->
<div class="table">
<div class="table__thumbnail head"> </div>
<div class="table__name head"> </div> 
<div class="table__price head"><span>Price</span></div>
<div class="table__quantity head"><span>Quantity</span></div>
<div class="table__subtotal head"><span>Subtotal</span></div>
<div class="table__remove head"><span></span></div>

<?php
// loop each item in basket
foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {

	$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
	$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
	$product_name = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );

	if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
		$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
		
		
		$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
		// image
		?>
		<div class="table__thumbnail"><a href="<?= $product_permalink ?>"><?php echo $thumbnail ?></a></div>

		<div class="table__name"><a href="<?= $product_permalink ?>"><span><?= $product_name ?></span></a></div>

		<?php
		// price
		$price = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok. 
		?>
		<div class="table__price"><?php echo $price ?></div>

<?php
// quantity

	$min_quantity = 0;
	$max_quantity = $_product->get_max_purchase_quantity();

?>
<div class="table__quantity">
<button class="table__minus" data-key="<?= $cart_item_key ?>">-</button>
<input 
	type="text" data-key="<?= $cart_item_key ?>" 
	class="table__input" 
	name="<?= "cart[{$cart_item_key}][qty]"?>" 
	value="<?= $cart_item['quantity'] ?>"
	min="0"
	max="10"
	>
	<button class="table__plus" data-key="<?= $cart_item_key ?>">+</button>
</div>


<div class="table__subtotal">
	<?= apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ) ?>
</div>

<div class="table__remove">
	<a href="<?=wc_get_cart_remove_url( $cart_item_key)?>">
	<svg class="responsiveBasket_cross auto-basketaction-trash" width="24" height="24" viewBox="-3 -4 20 20" xmlns="http://www.w3.org/2000/svg">
    	<path d="M8.414 7l5.293-5.293c.391-.391.391-1.023 0-1.414s-1.023-.391-1.414 0l-5.293 5.293-5.293-5.293c-.391-.391-1.023-.391-1.414 0s-.391 1.023 0 1.414l5.293 5.293-5.293 5.293c-.391.391-.391 1.023 0 1.414.195.195.451.293.707.293.256 0 .512-.098.707-.293l5.293-5.293 5.293 5.293c.195.195.451.293.707.293.256 0 .512-.098.707-.293.391-.391.391-1.023 0-1.414l-5.293-5.293"></path>
    </svg>
	</a>
</div>
		
		
		<?php
	}
?> 

<?php
}

?>


</div>
<?php
// PLACEHOLDER FOR TOTAL BEFORE DISCOUNT
ob_start();
wc_cart_totals_subtotal_html();
$subtotal = ob_get_clean();

?>

<div class="total" >
<div class="total__text">Basket Subtotal:</div>	
<div class="total__price"> <?php wc_cart_totals_order_total_html(); ?></div>
</div>



<div class="checkout__bottom">
<div class="cart-collaterals">
<?php
/**
* Cart collaterals hook.
*
* @hooked woocommerce_cross_sell_display
* @hooked woocommerce_cart_totals - 10
*/
do_action( 'woocommerce_cart_collaterals' );
?>
</div>


<div class="update">
	
<button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>


</div>
<div class="vouchers">


		<?php if ( wc_coupons_enabled() ) { ?>
			<div class="coupon">
				<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Got a discount code? Enter it here:" /> <button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>">add</button>
				<?php do_action( 'woocommerce_cart_coupon' ); ?>
			</div>
		<?php } ?>



<?php do_action( 'woocommerce_after_cart' ); ?>

</div>
</div>
<div class="wc-proceed-to-checkout">
<div class="continue">
			<a class="continue__link"href="<?= home_url() ?>">Continue Shopping</a>
		</div>
		<?php do_action( 'woocommerce_proceed_to_checkout' ); ?>


	</div>

<!-- The following input contains a nonce, a one-time token used to prevent CSRF attacks. It helps ensure that the request is coming from an authorized source. -->
<div style="display:none;"><?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?></div>

</form>

