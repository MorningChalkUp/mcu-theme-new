<?php 
  global $quote_num, $exclude, $ex_str;
  
  $mcu = get_category_by_slug('morningchalkup'); 
  $mcu_id = $mcu->term_id;

  $args_feature = array (
    'cat'=> '-'.$mcu_id,
    'posts_per_page'  => 1,
    'meta_query'      => array(
      array(
        'key' => 'featured',
        'compare' => '=',
        'value' => 'section',
      ),
    ),
    'post__not_in' => $exclude,
  );

  $feature = new WP_Query($args_feature);

  if ($feature->post_count != 1) {
    $args_feature = array (
      'cat'=> '-'.$mcu_id,
      'posts_per_page'  => 1,
      'post__not_in' => $exclude,
    );
    $feature = new WP_Query($args_feature);
  }

  $ex = wp_list_pluck( $feature->posts, 'ID' );
  $exclude[] = $ex[0];
  $ex_str = implode(",",$exclude);

  $args = array (
    'cat'=> '-'.$mcu_id,
    'posts_per_page'  => 9,
    'post__not_in' => $exclude,
  );

  $quote_args = array (
    'post_type' => 'quote',
    'posts_per_page'  => 1,
    'offset' => 1,
  );

?>
<section class="mdl-cell mdl-cell--12-col main archive home">
  <h3 class="section-title center">Latest <strong>Articles</strong></h3>
  <div class="mdl-grid">
    <?php
      if ($feature->have_posts()) {
        while($feature->have_posts()) {
          $feature->the_post();
          get_template_part( 'templates/feature', 'sub' );
        }
      }

      $latest = new WP_Query($args);
      if ($latest->have_posts()) {
        while($latest->have_posts()) {
          $latest->the_post();
          get_template_part( 'templates/teaser', 'archive' );
        }
      }
    ?>
  </div>
</section>