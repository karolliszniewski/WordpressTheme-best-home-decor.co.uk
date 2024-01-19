<?php
namespace HASTE\Inc;
get_template_part('template-parts/header');
?>

<main class="main">
<nav class="category">
<?php
$categories = get_the_category();
print_r($categories);
?>

</nav>


</main>


<?php get_template_part('template-parts/footer') ?>
