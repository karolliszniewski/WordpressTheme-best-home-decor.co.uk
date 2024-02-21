<?php
/**
 * Template Name: My Account
 */

get_header(); // Dodaj nagłówek WordPress
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        // Woocommerce hook do wyświetlenia treści strony Moje Konto
        do_action('woocommerce_account_content');
        ?>

    </main>
</div>

<?php
get_footer(); // Dodaj stopkę WordPress
?>
