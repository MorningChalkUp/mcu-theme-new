<?php

add_theme_support('post-thumbnails'); 

add_theme_support( 'title-tag' );

function mcu_register_menu() {
  register_nav_menu('main-menu',__( 'Main Nav' ));
}
add_action( 'init', 'mcu_register_menu' );

function remove_ul ( $menu ){
  return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
}
add_filter( 'wp_nav_menu', 'remove_ul' );

function mcu_infinite_scroll_init() {
  add_theme_support( 'infinite-scroll', array(
    'container' => 'content',
    'render' => 'mcu_infinite_scroll_render',
    'footer' => 'footer',
  ) );
}
add_action( 'init', 'mcu_infinite_scroll_init' );

function mcu_infinite_scroll_render() {
  get_template_part( 'loop' );
}
