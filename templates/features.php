<section class="feature mdl-grid">
  <?php 
    // if ($feature->have_posts()) {
    //   while($feature->have_posts()) {
    //     $feature->the_post();
    //     get_template_part( 'templates/feature' );
    //   }
    // }
  ?>

  <div class="mcu-roll mdl-cell mdl-cell--4-col mdl-cell--order-1-desktop">
    <div class="stories">
      <article class="mdl-grid category-title">
        <div class="img"></div>
        <div class="info">
          The Morning Chalk Up
        </div>
      </article>
      
      <?php 
        if ($mcu->have_posts()) {
          while($mcu->have_posts()) {
            $mcu->the_post();
            get_template_part( 'templates/mcu' );
          }
        }
      ?>

    </div>
    <div class="more"><a href="<?php echo esc_url( $cat_mcu_link ); ?>">Read More ></a></div>
  </div>
</section>