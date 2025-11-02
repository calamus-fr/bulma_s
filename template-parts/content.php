<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bulma_s
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>><!-- content -->
    <header class="card-header">
        <?php
        if (is_singular()) :
            the_title('<h1 class="title is-3">', '</h1>');
        else :
            the_title('<h2 class="title is-4"><a class="has-text-link" href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        endif;
        ?>
    </header>
    <div class="card-content">
        <div class="content">
            <?php the_excerpt(); ?>
        </div>
    </div>
    <footer class="card-footer">
        <a class="card-footer-item" href="<?php esc_url(get_permalink()); ?>">Lire plus</a>
    </footer>
</article><!-- #post-<?php the_ID(); ?> -->