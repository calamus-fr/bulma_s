<?php
/**
 * Template Name: Full Width Page
 * Description: Page sans marges latérales (full-width)
 */
get_header(); ?>

<main id="primary" class="site-main full-width">
    <?php
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/content', 'page');
    endwhile;
    ?>
</main><!-- #main -->

<?php get_footer(); ?>