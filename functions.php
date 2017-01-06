<?php

add_theme_support('post-thumbnails'); 

add_theme_support( 'title-tag' );



add_image_size( 'blog-roll', 370, 247, true );

add_image_size( 'mcu-thumb', 75, 75, true );

add_image_size( 'featured', 855, 590, true );

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

if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_events',
    'title' => 'Events',
    'fields' => array (
      array (
        'key' => 'field_57e7feddbc8e5',
        'label' => 'Event Date',
        'name' => 'event_date',
        'type' => 'date_picker',
        'date_format' => 'yymmdd',
        'display_format' => 'dd/mm/yy',
        'first_day' => 1,
      ),
      array (
        'key' => 'field_57e80258c64b7',
        'label' => 'Event URL',
        'name' => 'event_url',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_57e82d242bf2a',
        'label' => 'Event Address',
        'name' => 'event_address',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_57e87ea3d6f20',
        'label' => 'Event Location',
        'name' => 'event_location',
        'type' => 'select',
        'choices' => array (
          '' => '',
          'AL' => 'AL',
          'AK' => 'AK',
          'AZ' => 'AZ',
          'AR' => 'AR',
          'CA' => 'CA',
          'CO' => 'CO',
          'CT' => 'CT',
          'DE' => 'DE',
          'FL' => 'FL',
          'GA' => 'GA',
          'HI' => 'HI',
          'ID' => 'ID',
          'IL' => 'IL',
          'IN' => 'IN',
          'IA' => 'IA',
          'KS' => 'KS',
          'KY' => 'KY',
          'LA' => 'LA',
          'ME' => 'ME',
          'MD' => 'MD',
          'MA' => 'MA',
          'MI' => 'MI',
          'MN' => 'MN',
          'MS' => 'MS',
          'MO' => 'MO',
          'MT' => 'MT',
          'NE' => 'NE',
          'NV' => 'NV',
          'NH' => 'NH',
          'NJ' => 'NJ',
          'NM' => 'NM',
          'NY' => 'NY',
          'NC' => 'NC',
          'ND' => 'ND',
          'OH' => 'OH',
          'OK' => 'OK',
          'OR' => 'OR',
          'PA' => 'PA',
          'RI' => 'RI',
          'SC' => 'SC',
          'SD' => 'SD',
          'TN' => 'TN',
          'TX' => 'TX',
          'UT' => 'UT',
          'VT' => 'VT',
          'VA' => 'VA',
          'WA' => 'WA',
          'WV' => 'WV',
          'WI' => 'WI',
          'WY' => 'WY',
          'INTL' => 'INTL',
        ),
        'default_value' => '',
        'allow_null' => 0,
        'multiple' => 0,
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'mcu_event',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'acf_after_title',
      'layout' => 'no_box',
      'hide_on_screen' => array (
        0 => 'the_content',
        1 => 'excerpt',
        2 => 'custom_fields',
        3 => 'discussion',
        4 => 'comments',
      ),
    ),
    'menu_order' => 0,
  ));
  register_field_group(array (
    'id' => 'acf_the-morning-chalk-up',
    'title' => 'The Morning Chalk Up',
    'fields' => array (
      array (
        'key' => 'field_586a92051b12c',
        'label' => 'Chalk Up Tips',
        'name' => 'mcu_tips',
        'type' => 'wysiwyg',
        'default_value' => '',
        'toolbar' => 'basic',
        'media_upload' => 'no',
      ),
      array (
        'key' => 'field_586a927b1b12d',
        'label' => 'Chalk Up Deals',
        'name' => 'mcu_deals',
        'type' => 'wysiwyg',
        'default_value' => '',
        'toolbar' => 'basic',
        'media_upload' => 'no',
      ),
      array (
        'key' => 'field_586a92981b12e',
        'label' => 'Chalk Up Calendar',
        'name' => 'mcu_calendar',
        'type' => 'wysiwyg',
        'default_value' => '',
        'toolbar' => 'basic',
        'media_upload' => 'no',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_category',
          'operator' => '==',
          'value' => '4',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
}

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

// End of cptui_register_my_cpts()
}

add_action( 'init', 'cptui_register_my_cpts_mcu_event' );
function cptui_register_my_cpts_mcu_event() {
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

// End of cptui_register_my_cpts_mcu_event()
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

add_action( 'init', 'cptui_register_my_taxes_event_type' );
function cptui_register_my_taxes_event_type() {
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

// End cptui_register_my_taxes_event_type()
}

$state['AK'] = 'Alaska'
$state['AZ'] = 'Arizona'
$state['AR'] = 'Arkansas'
$state['CA'] = 'California'
$state['CO'] = 'Colorado'
$state['CT'] = 'Connecticut'
$state['DE'] = 'Delaware'
$state['FL'] = 'Florida'
$state['GA'] = 'Georgia'
$state['HI'] = 'Hawaii'
$state['ID'] = 'Idaho'
$state['IL'] = 'Illinois'
$state['IN'] = 'Indiana'
$state['IA'] = 'Iowa'
$state['KS'] = 'Kansas'
$state['KY'] = 'Kentucky'
$state['LA'] = 'Louisiana'
$state['ME'] = 'Maine'
$state['MD'] = 'Maryland'
$state['MA'] = 'Massachusetts'
$state['MI'] = 'Michigan'
$state['MN'] = 'Minnesota'
$state['MS'] = 'Mississippi'
$state['MO'] = 'Missouri'
$state['MT'] = 'Montana'
$state['NE'] = 'Nebraska'
$state['NV'] = 'Nevada'
$state['NH'] = 'New Hampshire'
$state['NJ'] = 'New Jersey'
$state['NM'] = 'New Mexico'
$state['NY'] = 'New York'
$state['NC'] = 'North Carolina'
$state['ND'] = 'North Dakota'
$state['OH'] = 'Ohio'
$state['OK'] = 'Oklahoma'
$state['OR'] = 'Oregon'
$state['PA'] = 'Pennsylvania'
$state['RI'] = 'Rhode Island'
$state['SC'] = 'South Carolina'
$state['SD'] = 'South Dakota'
$state['TN'] = 'Tennessee'
$state['TX'] = 'Texas'
$state['UT'] = 'Utah'
$state['VT'] = 'Vermont'
$state['VA'] = 'Virginia'
$state['WA'] = 'Washington'
$state['WV'] = 'West Virginia'
$state['WI'] = 'Wisconsin'
$state['WY'] = 'Wyoming'
$state['INTL'] = 'International'
