<?php get_header(); ?>

<main>

<div class="container">
    <h1><?php the_title(); ?></h1>


    <?php get_template_part('inc/section', 'content') ?>
</div>

</main>

<?php get_footer(); ?>