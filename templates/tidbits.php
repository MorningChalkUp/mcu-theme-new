<section class="mdl-cell mdl-cell--12-col main archive home">
  <div class="mdl-grid">
    <div class="mdl-layout-spacer"></div>
    <div class="mdl-cell mdl-cell--8-col title">
      <a href="<?php //echo esc_url( $cat__tidbits_link ); ?>">Latest Tidbits</a>
    </div>
    <div class="mdl-layout-spacer"></div>
  </div>
  <div class="mdl-grid">

    <?php
      $tidbit_args = array (
        'cat' => $cat_tidbits_id,
        'posts_per_page'  => 3,
        'post__not_in' => $exclude,
      );

      $tidbits = new WP_Query($tidbit_args);

      if ($tidbits->have_posts()) {
        while($tidbits->have_posts()) {
          $tidbits->the_post();
          get_template_part( 'templates/teaser', 'archive' );
        }
      }
    ?>
    
    <?php
      /*if ($quote->have_posts())
        while($quote->have_posts()) {
          $quote->the_post();
          get_template_part( 'templates/quote' );
        }
      }*/
    ?>

    <?php
      /*if ($tidbit_feature->have_posts()) {
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
          get_template_part( 'templates/teaser', 'archive' );
        }
      }*/
    ?>

  </div>
</section>