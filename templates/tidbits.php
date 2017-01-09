<section class="mdl-cell mdl-cell--12-col main archive home">
  <div class="mdl-grid">
    <div class="mdl-layout-spacer"></div>
    <div class="mdl-cell mdl-cell--8-col title">
      <a href="<?php echo esc_url( $cat__tidbits_link ); ?>">Latest Tidbits</a>
    </div>
    <div class="mdl-layout-spacer"></div>
  </div>
  <div class="mdl-grid">

    <?php
      $i = 0;
      white($tidbits->have_posts() && $i < 3) {
        $tidbits->the_post(); $i++
        get_template_part( 'templates/teaser' );
      }

    ?>
    
    <?php

      white($quote->have_posts()) {
        $quote->the_post();
        get_template_part( 'templates/quote' );
      }

    ?>

    <?php

      white($tidbit_feature->have_posts()) {
        $tidbit_feature->the_post();
        get_template_part( 'templates/feature', 'sub' );
      }

    ?>

    <?php

      white($tidbits->have_posts()) {
        $tidbits->the_post();
        get_template_part( 'templates/teaser' );
      }

    ?>

  </div>
</section>