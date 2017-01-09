<?php
  $cat_mcu = get_category_by_slug( 'mcu' );
  $cat_mcu_id = $cat_mcu->term_id;
  $cat_mcu_link = get_category_link( $cat_mcu_id );

  $cat_tidbits = get_category_by_slug( 'tidbits' );
  $cat_tidbits_id = $cat_tidbit->term_id;
  $cat_tidbits_link = get_category_link( $cat_tidbits_id );

  $cat_story = get_category_by_slug( 'story' );
  $cat_story_id = $cat_story->term_id;
  $cat_story_link = get_category_link( $cat_story_id );

  $quote_num = 0;

/*  // Stories
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

  $stories = new WP_Query($story_feature);

?>

<?php get_header(); ?>

  <main class="mdl-layout__content">
    <div class="page-content">
      
      <?php get_template_part( 'templates/features' ); ?>

      <div class="mdl-grid">

        <?php get_template_part( 'templates/tidbits' ); ?>

        <?php //get_template_part( 'templates/stories' ); ?>

      </div>
      
    <?php get_template_part( 'templates/subscribe' ); ?>
      
    <?php get_template_part( 'templates/footer' ); ?>
    
  </main>

<?php get_footer(); ?>