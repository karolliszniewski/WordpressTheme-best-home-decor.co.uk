<?php namespace HASTE\Inc;
get_template_part('template-parts/header');
defined( 'ABSPATH' ) || exit;
?>

<main class="main">

<header class="main__header">
<?php
$homepageUrl = esc_url(home_url());
$current_url .= $_SERVER["REQUEST_URI"];
$current_name = trim($current_url, '/');
$cutfrom = strpos($current_name,'/') + 1;
if($cutfrom > 1){
$current_name = substr($current_name,$cutfrom);
}

echo <<<HTML
            <nav class="category">
                <ul class="category__list">
                    <li class="category__item"><a class="category__link" href="{$homepageUrl}">Homepage</a></li>
                    <li class="category__divider">›</li>
                    <li class="category__item"><a class="category__link" href="{$pageUrl}">{$current_name}</a></li>
                </ul>
            </nav>
HTML;


?>

</header>

<?php



?>
<?php
        if ( have_posts() ) :
            woocommerce_product_loop_start();

            while ( have_posts() ) : the_post();

                wc_get_template_part( 'content', 'product' ); // Ten plik szablonu odpowiada za pojedynczy produkt

            endwhile;

            woocommerce_product_loop_end();
        else :
            do_action( 'woocommerce_no_products_found' );
        endif;
        ?>

</main>

<?php get_template_part('template-parts/footer') ?>

      

    </main><!-- #main -->
</div><!-- #primary -->

