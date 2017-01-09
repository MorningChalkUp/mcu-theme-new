<?php 
 /* $tidbit_args = array (
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

  $tidbit_feature = new WP_Query($tidbit_args);

  if ($tidbit_feature->post_count != 1) {
    $tidbit_args = array (
      'cat' => $cat_tidbits_id,
      'posts_per_page'  => 1,
    );
    $tidbit_feature = new WP_Query($tidbit_args);
  }

  $exclude[] = wp_list_pluck( $tidbit_feature->posts, 'ID' );

  $tidbit_args = array (
    'cat' => $cat_tidbits_id,
    'posts_per_page'  => 9,
    'post__not_in' => $exclude,
  );*/

?>

<section class="mdl-cell mdl-cell--12-col main archive home">
  <div class="mdl-grid">
    <div class="mdl-layout-spacer"></div>
    <div class="mdl-cell mdl-cell--8-col title">
      <a href="<?php echo esc_url( $cat_tidbits_link ); ?>">Latest Tidbits</a>
    </div>
    <div class="mdl-layout-spacer"></div>
  </div>
  <div class="mdl-grid">

    <?php
      /*$tidbits = new WP_Query($tidbit_args);
      $i = 0;
      if ($tidbits->have_posts()) {
        while($tidbits->have_posts() && $i < 3) {
          $tidbits->the_post(); $i++
          get_template_part( 'templates/teaser' );
        }
      }*/
    ?>
    
    <?php
     /* if ($quote->have_posts())
        while($quote->have_posts()) {
          $quote->the_post();
          get_template_part( 'templates/quote' );
        }
      }*/
    ?>

    <?php
      /* $tidbit_feature = new WP_Query($tidbit_args);
      if ($tidbit_feature->have_posts()) {
        while($tidbit_feature->have_posts()) {
          $tidbit_feature->the_post();
          get_template_part( 'templates/feature', 'sub' );
        }
      }*/
    ?>

    <?php
       /*if ($tidbits->have_posts()) {
        while($tidbits->have_posts()) {
          $tidbits->the_post();
          get_template_part( 'templates/teaser' );
        }
      }*/
    ?>

  </div>
</section>