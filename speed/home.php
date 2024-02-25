<?php

namespace HASTE\Inc;

get_template_part('template-parts/header');

?>



<main class="main">



<header class="main__header">

<?php

if (have_posts()) : // Sprawdz, czy sa dostepne wpisy
    while (have_posts()) : the_post(); // Petla dla kazdego wpisu
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
       
        </article>
        <?php
    endwhile;
else :
    echo '<p>Brak wpis�w do wyswietlenia.</p>';
endif;

?>

</header>

</main>





<?php get_template_part('template-parts/footer') ?>

