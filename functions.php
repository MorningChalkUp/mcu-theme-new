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

if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_events',
    'title' => 'Events',
    'fields' => array (
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
    'id' => 'acf_featured-content',
    'title' => 'Featured Content',
    'fields' => array (
      array (
        'key' => 'field_58731b6c14c95',
        'label' => 'Featured',
        'name' => 'featured',
        'type' => 'radio',
        'instructions' => 'Select "Home" for homepage top content.
  
  Select "Section" for section area feature (smaller content).',
        'required' => 1,
        'choices' => array (
          'home = Home' => 'home = Home',
          'section = Section' => 'section = Section',
          'none = None' => 'none = None',
          '' => '',
        ),
        'other_choice' => 0,
        'save_other_choice' => 0,
        'default_value' => 'none',
        'layout' => 'horizontal',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_category',
          'operator' => '==',
          'value' => '341',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
      array (
        array (
          'param' => 'post_category',
          'operator' => '==',
          'value' => '342',
          'order_no' => 0,
          'group_no' => 1,
        ),
      ),
    ),
    'options' => array (
      'position' => 'side',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
  register_field_group(array (
    'id' => 'acf_quotes',
    'title' => 'Quotes',
    'fields' => array (
      array (
        'key' => 'field_5873b4c557f36',
        'label' => 'Quote Text',
        'name' => 'quote_text',
        'type' => 'textarea',
        'instructions' => 'Do not include physical quotes (") around entire quote.',
        'required' => 1,
        'default_value' => '',
        'placeholder' => '',
        'maxlength' => '',
        'rows' => '',
        'formatting' => 'none',
      ),
      array (
        'key' => 'field_5873b50457f37',
        'label' => 'Qute Attribution',
        'name' => 'qute_attribution',
        'type' => 'text',
        'instructions' => 'Attribute the quote ',
        'required' => 1,
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'quote',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'acf_after_title',
      'layout' => 'no_box',
      'hide_on_screen' => array (
        0 => 'permalink',
        1 => 'the_content',
        2 => 'excerpt',
        3 => 'custom_fields',
        4 => 'discussion',
        5 => 'comments',
        6 => 'revisions',
        7 => 'slug',
        8 => 'author',
        9 => 'format',
        10 => 'featured_image',
        11 => 'send-trackbacks',
      ),
    ),
    'menu_order' => 0,
  ));
  register_field_group(array (
    'id' => 'acf_the-morning-chalk-up',
    'title' => 'The Morning Chalk Up',
    'fields' => array (
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
