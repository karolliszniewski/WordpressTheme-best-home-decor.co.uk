<?php
do_action('woocommerce_before_single_product');
?>

<div id="product-<?php the_ID(); ?>" class="product__single">
<div class="product__header">
<div class="gallery">
    <?php
    do_action('woocommerce_before_single_product_summary');
    ?>
</div>
    <div class="summary entry-summary">

        <div class="product-description">
            <h2><?php the_title(); ?></h2>
			<p><?php the_excerpt() ?></p>

        </div>

        <!-- Obraz produktu -->


        <!-- Cena produktu -->
        <div class="product-price">
            <?php
            // Sprawdź, czy to jest pojedynczy produkt
            global $product;

            // Sprawdź, czy $product jest obiektem WC_Product
            if (!$product || !is_a($product, 'WC_Product')) {
                $product = wc_get_product(get_the_ID());
            }

            // Wyświetlenie ceny produktu
            echo $product->get_price_html();
            ?>
        </div>
       

        <!-- Formularz "Dodaj do koszyka" -->
        <form class="cart" action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>" method="post" enctype='multipart/form-data'>

          <?php wc_get_template('single-product/add-to-cart/simple.php', array('product' => $product)); ?>

        </form>
<section class="shipping">
    <h3 class="shipping__head"> Delivery Information</h3>
<p class="shipping__text">Standard Delivery - Free UK delivery - usually takes between 2-3 working days from the date of dispatch.</p>
<p class="shipping__text">More information can be read in our <a href="/shipping-returns-policy/">Delivery Policy</a> and our <a href="/terms-and-conditions/">Terms and Conditions</a></p>
<p class="shipping__disclaimer">We can only ship to UK addresses.</p>


</section>
        <!-- Dodatkowe elementy można dodać według potrzeb -->

    </div>
    </div>
	

    <?php
    /**
     * Hook: woocommerce_after_single_product_summary.
     */
	
    do_action('woocommerce_after_single_product_summary');
    ?>

</div>

<script>
    function incrementQuantity(productId) {
        var qty_el = document.getElementById('quantity_' + productId);
        if (!qty_el) return;
        var qty = parseInt(qty_el.value);
        if (!isNaN(qty)) qty_el.value++;
    }

    function decrementQuantity(productId) {
        var qty_el = document.getElementById('quantity_' + productId);
        if (!qty_el) return;
        var qty = parseInt(qty_el.value);
        if (!isNaN(qty) && qty > 1) qty_el.value--;
    }
</script>

<?php
/**
 * Hook: woocommerce_after_single_product.
 */
do_action('woocommerce_after_single_product');
?>
