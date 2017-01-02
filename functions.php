<?php

add_theme_support('post-thumbnails'); 

function mcu_get_nav() {
  include get_template_directory_uri() . 'templates/nav.php';
}

function mcu_get_fb() {
  include get_template_directory_uri() . 'templates/fb.php';
}

function mcu_get_post() {
  include get_template_directory_uri() . 'templates/post.php';
}

function mcu_get_recommended() {
  include get_template_directory_uri() . 'templates/recommended.php';
}

function mcu_get_recommended_post() {
  include get_template_directory_uri() . 'templates/recommended_post.php';
}

function mcu_get_subscribe() {
  include get_template_directory_uri() . 'templates/subscribe.php';
}

function mcu_get_footer() {
  include get_template_directory_uri() . 'templates/footer.php';
}

function mcu_get_post() {

}