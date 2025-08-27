<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
  <div class="site-branding">
    <?php
    if ( has_custom_logo() ) {
        the_custom_logo();
    } else {
        echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="site-title">' . get_bloginfo( 'name' ) . '</a>';
    }
    ?>
  </div>
  <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
    <span class="screen-reader-text"><?php esc_html_e( 'Menu', 'printhub-3d' ); ?></span>
    &#9776;
  </button>
  <nav id="site-navigation" class="primary-menu" aria-label="<?php esc_attr_e( 'Primary Menu', 'printhub-3d' ); ?>">
    <?php
      wp_nav_menu( array(
        'theme_location' => 'menu-1',
        'menu_id'        => 'primary-menu',
      ) );
    ?>
  </nav>
</header>
<div id="content" class="site-content">
