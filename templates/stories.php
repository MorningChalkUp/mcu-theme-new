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
      if ($story_feature->have_posts()) {
        while($story_feature->have_posts()) {
          $story_feature->the_post();
          get_template_part( 'templates/feature', 'sub' );
        }
      }
    ?>

    <?php
      if ($quote->have_posts()) {
        while($quote->have_posts()) {
          $quote->the_post();
          get_template_part( 'templates/quote' );
        }
      }
    ?>

    <?php
      if ($stories->have_posts()) {
        while($stories->have_posts()) {
          $stories->the_post();
          get_template_part( 'templates/teaser', 'archive' );
        }
      }
    ?>

  </div>
</section>