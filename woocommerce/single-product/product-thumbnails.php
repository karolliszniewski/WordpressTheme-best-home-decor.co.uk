<?php
/**
 * Single Product Thumbnails
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-thumbnails.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.5.1
 */

defined( 'ABSPATH' ) || exit;
echo <<<HTML
<div class="product__thumbnails">
HTML;
// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$attachment_ids = $product->get_gallery_image_ids();




$image_id = $product->get_image_id();

// main image
if ($image_id) {
	$image_url = wp_get_attachment_image_src( $image_id, 'full' );
    $alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
echo <<<HTML
<div class="product__thumbnails-wrap">
    <img src="$image_url[0]" alt="$alt">
</div>
HTML;
}

// gallery images
if ( $attachment_ids && $product->get_image_id() ) {
	foreach ( $attachment_ids as $attachment_id ) {
		$image_url = wp_get_attachment_image_src( $attachment_id, 'full' );
		$alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true );

		echo <<<HTML
		<div class="product__thumbnails-wrap">
			<img src="$image_url[0]" alt="$alt">
		</div>
		HTML;

	}
}




echo <<<HTML
</div>
HTML;