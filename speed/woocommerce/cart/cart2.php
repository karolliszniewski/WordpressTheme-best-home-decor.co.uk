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
                <path fill-rule="evenodd" d="M6.99924169,0 C5.45228036,0 4.11537212,0.6345 3.28198462,1.66575 C2.4478388,2.697 2.09977251,4.0335 2.09977251,5.4735 L2.09977251,6.231 L4.20030333,6.231 L4.20030333,5.4735 C4.20030333,4.38 4.47177987,3.5205 4.9214603,2.964 C5.37189904,2.4075 5.97855054,2.07675 6.99924169,2.07675 C8.02296609,2.07675 8.62961759,2.38875 9.07778139,2.94225 C9.52594518,3.49575 9.79969667,4.36875 9.79969667,5.4735 L9.79969667,6.231 L11.9002275,6.231 L11.9002275,5.4735 C11.9002275,4.02525 11.5309284,2.67375 10.6967826,1.644 C9.86263677,0.615 8.54392807,0 6.99924169,0 Z M2.10053082,6.9225 C0.940439682,6.9225 1.4207019e-16,7.85262843 0,9 L0,15.9225 C1.4207019e-16,17.0698716 0.940439682,18 2.10053082,18 L11.8994692,18 C13.0595603,18 14,17.0698716 14,15.9225 L14,9 C14,7.85262843 13.0595603,6.9225 11.8994692,6.9225 L2.10053082,6.9225 Z M6.99924169,10.3845 C7.77272235,10.3845 8.39984834,11.00475 8.39984834,11.769 C8.39984834,12.2805 8.11699708,12.71925 7.69992417,12.95925 L7.69992417,14.53875 C7.69909002,14.9207269 7.3862114,15.230175 7,15.231 C6.6137886,15.230175 6.30090998,14.9207269 6.30007583,14.53875 L6.30007583,12.95925 C5.86798379,12.7152018 5.60096706,12.2611288 5.60015166,11.769 C5.60015166,11.00475 6.22727765,10.3845 7,10.3845 L6.99924169,10.3845 Z"></path>
              </svg> Checkout Securely Now</a>
</div>

<div class="info">
  <div class="info__delivery">Enjoy <strong>Free</strong> Delivery on All Orders!</div>
  <div class="info__voucher">Use code <strong>GOBEST10</strong> for a 10% Discount!</div>
</div>


<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
	<?php do_action( 'woocommerce_before_cart_table' ); ?>

	<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
		<thead>
			<tr>
				
				<th class="product-thumbnail"><span class="screen-reader-text"><?php // esc_html_e( 'Thumbnail image', 'woocommerce' ); ?></span></th>
				<th class="product-name"><?php // esc_html_e( 'Product', 'woocommerce' ); ?></th>
				<th class="product-price"><?php esc_html_e( 'Price', 'woocommerce' ); ?></th>
				<th class="product-quantity"><?php esc_html_e( 'Quantity', 'woocommerce' ); ?></th>
				<th class="product-subtotal"><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></th>
				<th class="product-remove"><span class="screen-reader-text"><?php esc_html_e( 'Remove item', 'woocommerce' ); ?></span></th>
			</tr>
		</thead>
		<tbody>
			<?php do_action( 'woocommerce_before_cart_contents' ); ?>

			<?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
				/**
				 * Filter the product name.
				 *
				 * @since 2.1.0
				 * @param string $product_name Name of the product in the cart.
				 * @param array $cart_item The product in the cart.
				 * @param string $cart_item_key Key for the product in the cart.
				 */
				$product_name = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					?>
					<tr class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">



						<td class="product-thumbnail">
						<?php
						$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

						if ( ! $product_permalink ) {
							echo $thumbnail; // PHPCS: XSS ok.
						} else {
							printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
						}
						?>
						</td>

						<td class="product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
						<?php
						if ( ! $product_permalink ) {
							echo wp_kses_post( $product_name . '&nbsp;' );
						} else {
							/**
							 * This filter is documented above.
							 *
							 * @since 2.1.0
							 */
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
						}

						do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

						// Meta data.
						echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

						// Backorder notification.
						if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
						}
						?>
						</td>

						<td class="product-price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
							<?php
								echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?>
						</td>

						<td class="product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
						<?php
						if ( $_product->is_sold_individually() ) {
							$min_quantity = 1;
							$max_quantity = 1;
						} else {
							$min_quantity = 0;
							$max_quantity = $_product->get_max_purchase_quantity();
						}

						$product_quantity = woocommerce_quantity_input(
							array(
								'input_name'   => "cart[{$cart_item_key}][qty]",
								'input_value'  => $cart_item['quantity'],
								'max_value'    => $max_quantity,
								'min_value'    => $min_quantity,
								'product_name' => $product_name,
							),
							$_product,
							false
						);

						// remove label
						$quantityHtml = apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
						$pattern = '/<label[^>]*>.*?<\/label>/i';
						$quantityHtml = preg_replace($pattern, '',$quantityHtml);

						// ad buttons -/+
						$regex = '/(<input[^>]+id="quantity_[^"]+"[^>]+>)/';
						$replacement = '<button class="minusQuantity" data-key="'.$cart_item_key.'">-</button>$1<button class="plusQuantity" data-key="'.$cart_item_key.'">+</button>';
						$quantityHtml = preg_replace($regex, $replacement, $quantityHtml);

						// change type number to text
						$pattern = '/<input\s+type="number"([^>]*)>/';
						$replace = '<input type="text" data-key="'.$cart_item_key.'" $1>';
						$quantityHtml = preg_replace($pattern, $replace, $quantityHtml);
						echo $quantityHtml;
						
						
						?>
						</td>

						<td class="product-subtotal" data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
							<?php
								echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?>
						</td>

						
						<td class="product-remove">
							<?php
								echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
									'woocommerce_cart_item_remove_link',
									sprintf(
										'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s" data-key="%s">&times;</a>',
										esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
										/* translators: %s is the product name */
										esc_attr( sprintf( __( 'Remove %s from cart', 'woocommerce' ), wp_strip_all_tags( $product_name ) ) ),
										esc_attr( $product_id ),
										esc_attr( $_product->get_sku()),
										esc_attr($cart_item_key),
										
									),
									$cart_item_key
								);
							?>
						</td>
					</tr>





					<?php
				}
			}
			?>

			<?php do_action( 'woocommerce_cart_contents' ); ?>

			<tr>
				<td colspan="6" class="actions">

					<?php if ( wc_coupons_enabled() ) { ?>
						<div class="coupon">
							<label for="coupon_code" class="screen-reader-text"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_html_e( 'Apply coupon', 'woocommerce' ); ?></button>
							<?php do_action( 'woocommerce_cart_coupon' ); ?>
						</div>
					<?php } ?>

					<button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>

					<?php do_action( 'woocommerce_cart_actions' ); ?>

					<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
				</td>
			</tr>

			<?php do_action( 'woocommerce_after_cart_contents' ); ?>
		</tbody>
	</table>
	<?php do_action( 'woocommerce_after_cart_table' ); ?>
</form>

<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>

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

<?php do_action( 'woocommerce_after_cart' ); ?>
