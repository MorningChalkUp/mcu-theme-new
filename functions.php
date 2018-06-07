<?php

@ini_set( 'upload_max_size' , '32M' );
@ini_set( 'post_max_size', '32M');
@ini_set( 'max_execution_time', '300' );

add_theme_support('post-thumbnails'); 

add_theme_support( 'title-tag' );

add_image_size( 'blog-roll', 370, 247, true );

add_image_size( 'mcu-thumb', 75, 75, true );

add_image_size( 'featured', 855, 590, true );

add_image_size( 'featured-sm', 513, 354, true );

add_image_size( 'team-member', 200, 200, true );

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

add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
            $title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $title = single_tag_title( '', false );
        } elseif ( is_author() ) {
            $title = get_the_author();
        }
    return $title;
});

$state['AK'] = 'Alaska';
$state['AZ'] = 'Arizona';
$state['AR'] = 'Arkansas';
$state['CA'] = 'California';
$state['CO'] = 'Colorado';
$state['CT'] = 'Connecticut';
$state['DE'] = 'Delaware';
$state['FL'] = 'Florida';
$state['GA'] = 'Georgia';
$state['HI'] = 'Hawaii';
$state['ID'] = 'Idaho';
$state['IL'] = 'Illinois';
$state['IN'] = 'Indiana';
$state['IA'] = 'Iowa';
$state['KS'] = 'Kansas';
$state['KY'] = 'Kentucky';
$state['LA'] = 'Louisiana';
$state['ME'] = 'Maine';
$state['MD'] = 'Maryland';
$state['MA'] = 'Massachusetts';
$state['MI'] = 'Michigan';
$state['MN'] = 'Minnesota';
$state['MS'] = 'Mississippi';
$state['MO'] = 'Missouri';
$state['MT'] = 'Montana';
$state['NE'] = 'Nebraska';
$state['NV'] = 'Nevada';
$state['NH'] = 'New Hampshire';
$state['NJ'] = 'New Jersey';
$state['NM'] = 'New Mexico';
$state['NY'] = 'New York';
$state['NC'] = 'North Carolina';
$state['ND'] = 'North Dakota';
$state['OH'] = 'Ohio';
$state['OK'] = 'Oklahoma';
$state['OR'] = 'Oregon';
$state['PA'] = 'Pennsylvania';
$state['RI'] = 'Rhode Island';
$state['SC'] = 'South Carolina';
$state['SD'] = 'South Dakota';
$state['TN'] = 'Tennessee';
$state['TX'] = 'Texas';
$state['UT'] = 'Utah';
$state['VT'] = 'Vermont';
$state['VA'] = 'Virginia';
$state['WA'] = 'Washington';
$state['WV'] = 'West Virginia';
$state['WI'] = 'Wisconsin';
$state['WY'] = 'Wyoming';
$state['INTL'] = 'International';


add_action( 'init', 'cptui_register_my_cpts' );
function cptui_register_my_cpts() {
  $labels = array(
    "name" => __( 'Events', 'morningchalkup_v2' ),
    "singular_name" => __( 'Event', 'morningchalkup_v2' ),
    );

  $args = array(
    "label" => __( 'Events', 'morningchalkup_v2' ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => false,
    "rest_base" => "",
    "has_archive" => true,
    "show_in_menu" => true,
        "exclude_from_search" => true,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => array( "slug" => "mcu_event", "with_front" => true ),
    "query_var" => true,
    "menu_position" => 5,"menu_icon" => "dashicons-calendar-alt",
    "supports" => array( "title" ),         );
  register_post_type( "mcu_event", $args );

  $labels = array(
    "name" => __( 'Quotes', 'morningchalkup_v2' ),
    "singular_name" => __( 'Quote', 'morningchalkup_v2' ),
    );

  $args = array(
    "label" => __( 'Quotes', 'morningchalkup_v2' ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => false,
    "rest_base" => "",
    "has_archive" => false,
    "show_in_menu" => true,
        "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => array( "slug" => "quote", "with_front" => true ),
    "query_var" => true,
    "menu_position" => 5,"menu_icon" => "dashicons-format-quote",
    "supports" => array( "title", "editor", "thumbnail" ),          );
  register_post_type( "quote", $args );

// End of cptui_register_my_cpts()
}

add_action( 'init', 'cptui_register_my_taxes' );
function cptui_register_my_taxes() {
  $labels = array(
    "name" => __( 'Event Types', 'morningchalkup_v2' ),
    "singular_name" => __( 'Event Type', 'morningchalkup_v2' ),
    );

  $args = array(
    "label" => __( 'Event Types', 'morningchalkup_v2' ),
    "labels" => $labels,
    "public" => true,
    "hierarchical" => false,
    "label" => "Event Types",
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => array( 'slug' => 'event_type', 'with_front' => true, ),
    "show_admin_column" => false,
    "show_in_rest" => false,
    "rest_base" => "",
    "show_in_quick_edit" => false,
  );
  register_taxonomy( "event_type", array( "mcu_event" ), $args );

// End cptui_register_my_taxes()
}
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page('Options');
} 

add_filter('gform_enable_field_label_visibility_settings', '__return_true');

