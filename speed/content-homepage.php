<?php
/**
 * Szablon koszyka (cart.php)
 *
 * Ten plik szablonu jest uzywany do wyswietlania zawartosci koszyka w WooCommerce.
 *
 * @package WordPress
 * @subpackage TwojMotyw
 */

defined( 'ABSPATH' ) || exit;

get_header();

do_action( 'woocommerce_before_main_content' );

echo '<div class="woocommerce">';
wc_print_notices(); // Wyswietla komunikaty WooCommerce (np. komunikaty o dodaniu do koszyka).

while ( have_posts() ) :
    the_post();
    the_content();
endwhile;

do_action( 'woocommerce_after_main_content' );

get_footer();
