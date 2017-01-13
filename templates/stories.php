<?php 
  global $quote_num, $exclude, $ex_str, $cat_story_id, $cat_story_link;

  $story_args_feature = array (
    'cat' => $cat_story_id,
    'posts_per_page'  => 1,
    'meta_query'      => array(
      array(
        'key' => 'featured',
        'compare' => '=',
        'value' => 'section',
      ),
    ),
    'post__not_in' => $ex_str,
  );

  $story_feature = new WP_Query($story_args_feature);

  if ($story_feature->post_count != 1) {
    $story_args_feature = array (
      'cat' => $cat_story_id,
      'posts_per_page'  => 1,
      'post__not_in' => $ex_str,
    );
    $story_feature = new WP_Query($story_args_feature);
  }

  $ex = wp_list_pluck( $story_feature->posts, 'ID' );
  $exclude[] = $ex[0];
  $ex_str = implode(",",$exclude);

  $story_args = array (
    'cat' => $cat_story_id,
    'posts_per_page'  => 6,
    'post__not_in' => $ex_str,
  );

  $quote_args = array (
    'post_type' => 'quote',
    'posts_per_page'  => 1,
    'offset' => 1,
  );

?>
<section class="mdl-cell mdl-cell--12-col main archive home">
  <div class="mdl-grid">
    <div class="mdl-layout-spacer"></div>
    <div class="mdl-cell mdl-cell--8-col sec-title">
      <a href="<?php echo esc_url( $cat_story_link ); ?>">Latest Stories</a>
    </div>
    <div class="mdl-layout-spacer"></div>
  </div>
  <div class="mdl-grid">
    
    <?php
      $story_feature = new WP_Query($story_args_feature);
      if ($story_feature->have_posts()) {
        while($story_feature->have_posts()) {
          $story_feature->the_post();
          get_template_part( 'templates/feature', 'sub' );
        }
      }
    ?>

    <?php
      $quote = new WP_Query($quote_args);
      if ($quote->have_posts()) {
        while($quote->have_posts()) {
          $quote_num++;
          $quote->the_post();
          get_template_part( 'templates/quote' );
        }
      }
    ?>

    <?php
      $stories = new WP_Query($story_args);
      if ($stories->have_posts()) {
        while($stories->have_posts()) {
          $stories->the_post();
          get_template_part( 'templates/teaser', 'archive' );
        }
      }
    ?>

  </div>
</section>