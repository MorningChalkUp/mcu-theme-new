<?php
  global $quote_num;

  $tidbit_args_feature = array (
    'cat' => $cat_tidbits_id,
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

  $tidbit_feature = new WP_Query($tidbit_args_feature);

  if ($tidbit_feature->post_count != 1) {
    $tidbit_args_feature = array (
      'cat' => $cat_tidbits_id,
      'posts_per_page'  => 1,
    );
    $tidbit_feature = new WP_Query($tidbit_args_feature);
  }

  $exclude[] = wp_list_pluck( $tidbit_feature->posts, 'ID' );

  $tidbit_args = array (
    'cat' => $cat_tidbits_id,
    'posts_per_page'  => 3,
    'post__not_in' => $exclude,
  );

  $tidbit_args_2 = array (
    'cat' => $cat_tidbits_id,
    'posts_per_page'  => 6,
    'offset' => 3,
    'post__not_in' => $exclude,
  );

  $quote_args = array (
    'post_type' => 'quote',
    'posts_per_page'  => 1,
  );

?>

<section class="mdl-cell mdl-cell--12-col main archive home">
  <div class="mdl-grid">
    <div class="mdl-layout-spacer"></div>
    <div class="mdl-cell mdl-cell--8-col sec-title">
      <a href="<?php echo esc_url( $cat__tidbits_link ); ?>">Latest Tidbits</a>
    </div>
    <div class="mdl-layout-spacer"></div>
  </div>
  <div class="mdl-grid">

    <?php
      $tidbits = new WP_Query($tidbit_args);

      if ($tidbits->have_posts()) {
        while($tidbits->have_posts()) {
          $tidbits->the_post();
          get_template_part( 'templates/teaser', 'archive' );
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
      $tidbit_feature = new WP_Query($tidbit_args_feature);
      if ($tidbit_feature->have_posts()) {
        while($tidbit_feature->have_posts()) {
          $tidbit_feature->the_post();
          get_template_part( 'templates/feature', 'sub' );
        }
      }
    ?>

    <?php
      $tidbits = new WP_Query($tidbit_args_2);
       if ($tidbits->have_posts()) {
        while($tidbits->have_posts()) {
          $tidbits->the_post();
          get_template_part( 'templates/teaser', 'archive' );
        }
      }
    ?>

  </div>
</section>