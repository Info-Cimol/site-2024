<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Edutechstar
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'edutechstar'); ?></a>

<!--START SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#">
    <i class="fa fa-angle-up"></i>
</a>
<!-- END SCROLL TOP BUTTON -->

<!-- Start menu -->
<section id="mu-menu">
<nav class="main-navbar navbar navbar-expand-lg navbar-light mb-0">
    <div class="container">
        <div class="navbar-header p-0 pb-2 col-2 col-md-1">
            <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
            if (has_custom_logo()) { ?>
                <?php the_custom_logo(); ?>
            <?php }
            if (display_header_text() == true) { ?>
                <div>
                    <a class="w-100 " href="<?php echo esc_url(home_url()); ?>">
                        <span class="site-title"><?php bloginfo('name'); ?></span>
                    </a>
                    <p><span class="site-description"><?php bloginfo('description'); ?></span></p>
                </div>
            <?php }
            ?>
        </div>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse col navbar-collapse align-self-center" id="navbarNav">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'container' => '',
                    'menu_class' => 'text-white navbar-nav navbar__nav  nav justify-content-center menuon',
                    'menu_id' => 'primary-menu',
                )
            );
            ?>
        </div>
        
        <div class="d-none d-lg-block"> 
            <div class="right-image">
                <img width="100" class="right-image-small imgcimol" src="http://infocimol/img/logoCimolBranco.png" alt="Cimol">
            </div>
        </div>
    </div>
</nav>

</section>
<!-- End menu -->

</body>
</html>
