<?php 
  $story_args = array (
    'cat' => $cat_story_id,
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

  $story_feature = new WP_Query($story_args);

  if ($story_feature->post_count != 1) {
    $story_feature = array (
      'cat' => $cat_story_id,
      'posts_per_page'  => 1,
    );
    $story_feature = new WP_Query($story_feature);
  }

  $exclude[] = wp_list_pluck( $story_feature->posts, 'ID' );

  $story_feature = array (
    'cat' => $cat_story_id,
    'posts_per_page'  => 3,
    'post__not_in' => $feature_id,
  );

?>

<section class="mdl-cell mdl-cell--12-col main archive home">
  <div class="mdl-grid">
    <div class="mdl-layout-spacer"></div>
    <div class="mdl-cell mdl-cell--8-col title">
      <a href="<?php echo esc_url( $cat_story_link ); ?>">Latest Stories</a>
    </div>
    <div class="mdl-layout-spacer"></div>
  </div>
  <div class="mdl-grid">
    
    <?php
      $story_feature = new WP_Query($story_feature);
      if ($story_feature->have_posts()) {
        while($story_feature->have_posts()) {
          $story_feature->the_post();
          get_template_part( 'templates/feature', 'sub' );
        }
      }
    ?>

    <?php
      /*if ($quote->have_posts()) {
        while($quote->have_posts()) {
          $quote->the_post();
          get_template_part( 'templates/quote' );
        }
      }*/
    ?>

    <?php
      $stories = new WP_Query($story_feature);
      if ($stories->have_posts()) {
        while($stories->have_posts()) {
          $stories->the_post();
          get_template_part( 'templates/teaser' );
        }
      }
    ?>

  </div>
</section>