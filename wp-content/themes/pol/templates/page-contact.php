<?php
/*
 Template Name: Contact Us template
*/
?>
<?php get_header('secend'); ?>

<main>

<div class="container">
    <h1><?php the_title(); ?></h1>

    <div class="row">
        <div class="col-lg-8">
<?php get_template_part('inc/section', 'content') ?>
        </div>
        <div class="col-lg-4">This is SideBar</div>
    </div>


    
</div>

</main>

<?php get_footer(); ?>