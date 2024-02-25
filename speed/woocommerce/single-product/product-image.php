<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.8.0
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters(
	'woocommerce_single_product_image_gallery_classes',
	array(
		'woocommerce-product-gallery',
		'woocommerce-product-gallery--' . ( $post_thumbnail_id ? 'with-images' : 'without-images' ),
		'woocommerce-product-gallery--columns-' . absint( $columns ),
		'images',
	)
);
?>
<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>">
	<div class="woocommerce-product-gallery__wrapper">
		
		<?php
		do_action( 'woocommerce_product_thumbnails' );
		if ( $post_thumbnail_id ) {
			$html = wc_get_gallery_image_html( $post_thumbnail_id, true );
		} else {
			$html  = '<div class="woocommerce-product-gallery__image--placeholder">';
			$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
			$html .= '</div>';
		}

		// distable default way of showing product image
		// echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped

		echo <<<HTML
		<div class="slide">
			<button class="slide__next">
				<svg class="productImageCarousel_rightArrowSVG" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<polygon points="16.1371072 15 12 10.7802414 7.86289277 15 6.5 13.6098793 12 8 17.5 13.6098793"></polygon>
				</svg>
			</button>
			
			<button class="slide__previous">
				<svg class="productImageCarousel_leftArrowSVG" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<polygon points="16.1371072 15 12 10.7802414 7.86289277 15 6.5 13.6098793 12 8 17.5 13.6098793"></polygon>
				</svg>	
			</button>
	
			<button class="slide__zoom">
				<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Zm-40-60v-80h-80v-80h80v-80h80v80h80v80h-80v80h-80Z"/></svg>
			</button>
	HTML;
	
		$imageCount = 0;
		$image_id = $product->get_image_id();
		$idimage = $imageCount + 1;
		// main image
		if ($image_id) {
			$image_url = wp_get_attachment_image_src( $image_id, 'full' );
			$alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
			$translateX = $imageCount * 100;
			$translateX .= '%';
			echo <<<HTML
			<div class="slide__image" style="transform: translateX($translateX);">
			<img id="image-$idimage" width="600px" height="600px" src="$image_url[0]" alt="$alt">
			</div>
		HTML;
		$imageCount++;
		$idimage = $imageCount + 1;
		
		}

		// gallery images
		$attachment_ids = $product->get_gallery_image_ids();
if ( $attachment_ids && $product->get_image_id() ) {
	foreach ( $attachment_ids as $attachment_id ) {
		$translateX = $imageCount * 100;
		$translateX .= '%';
		$image_url = wp_get_attachment_image_src( $attachment_id, 'full' );
		$alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true );

		echo <<<HTML
		<div class="slide__image" style="transform: translateX($translateX);">
		<img id="image-$idimage" width="600px" height="600px" src="$image_url[0]" alt="$alt">
		</div>
	HTML;
	$imageCount++;
	
	}
}
		
		?>
		</div>
	</div>
</div>
