<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header id="header">
          <img src="<?= IMAGES_PATH.'logo.png' ?>" alt="<?php bloginfo("title"); ?>">
          <a href="<?php bloginfo("url"); ?>" title="<?php bloginfo('url'); ?>"><?php bloginfo('url'); ?></a>
        <!-- Tout le contenu de l entête de mon site -->
        <?php
        $defaults = array(
          'theme_location' => '',
          'menu' => '',
          'container' => 'nav',
          'container_class' => 'menu-{menu-slug-container',
          'container_id' => '',
          'menu_class' => 'menu',
          'menu_id' => '',
          'echo' => true,
          'fallback_cb' => 'wp_page_menu',
          'before' => '',
          'after' => '',
          'link_before' => '',
          'link_after' => '',
          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth' => 0,
          'walker' => ''
        });
        wp_nav_menu( $defaults );
         ?>
        </header>
