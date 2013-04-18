<?php
add_theme_support( 'woocommerce' );
wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/font-awesome.css' );
wp_enqueue_style( 'jquery-modal', get_stylesheet_directory_uri() . '/js/jquery-modal/jquery.modal.css' );
wp_enqueue_script( 'jquery-modal', get_stylesheet_directory_uri() . '/js/jquery-modal/jquery.modal.min.js', array( 'jquery' ) );

//Override some of the WooThemes framework
remove_action('woo_main_before','woo_display_breadcrumbs',10);
?>