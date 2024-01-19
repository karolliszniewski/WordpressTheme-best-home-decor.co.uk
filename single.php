<?php
namespace HASTE\Inc;
get_template_part('template-parts/header');
?>

<main class="main">

<header class="main__header">
<?php
COMPONENT_BLOG::category();
?>
</header>
</main>


<?php get_template_part('template-parts/footer') ?>
