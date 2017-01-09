<?php 
  /*if ( has_post_thumbnail() ) {
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'mcu-thumb', true);
    $thumb_url = $thumb_url_array[0];
  } else {
    $thumb_url = get_template_directory_uri() . '/screenshot.png';
  }*/
?>

test

<article class="mcu mdl-grid">
  <div class="img"><img src="<?php //echo $thumb_url ?>" alt="<?php the_title(); ?>"></div>
  <div class="info">
    <div class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
    <div class="date"><?php //echo get_the_date('l, M. j, Y'); ?></div>
  </div>
</article>