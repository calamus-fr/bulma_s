<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bulma_s
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'bulma_s'); ?></a>
    <header id="masthead" class="site-header">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <?php
                    the_custom_logo();
                    if (is_front_page() && is_home()) :
                        ?>
                        <h1 class="navbar-item title is-4 has-text-weight-bold"><?php bloginfo('name'); ?></h1>
                        <?php
                    else :
                        ?>
                        <p class="navbar-item title is-4 has-text-weight-bold"><?php bloginfo('name'); ?></p>
                        <?php
                    endif;
                    ?>
                </a>
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarMenu">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
            <div id="navbarMenu" class="navbar-menu">
                <div class="navbar-start">
                    <?php
                    $_s_description = get_bloginfo('description', 'display');
                    if ($_s_description || is_customize_preview()) :
                        ?>
                        <div class="navbar-item has-text-centered">
                            <p class="subtitle is-6 has-text-grey"><?php echo $_s_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
                        </div>
                        <?php
                    endif;
                    ?>
                </div>
                <div class="navbar-end">
                    <div class="navbar-item">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-1',
                            'menu_id' => 'primary-menu',
                            'container' => false,
                            'menu_class' => 'navbar-nav',
                            'walker' => new Bulma_Nav_Walker(),
                            'items_wrap' => '<div class="%2$s">%3$s</div>',
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </nav>
    </header><!-- #masthead -->

    <?php
    // JS for burger toggle
    if (!is_admin()) :
        ?>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
                if ($navbarBurgers.length > 0) {
                    $navbarBurgers.forEach(el => {
                        el.addEventListener('click', () => {
                            const target = el.dataset.target;
                            const $target = document.getElementById(target);
                            el.classList.toggle('is-active');
                            $target.classList.toggle('is-active');
                        });
                    });
                }
            });
        </script>
        <?php
    endif;
    ?>