<?php
namespace HASTE\Inc;
get_template_part('template-parts/header');

?>

<main class="main">

<header class="main__header">


<?php wc_print_notices(); the_content(); ?>

</main>

<?php get_template_part('template-parts/footer') ?>
