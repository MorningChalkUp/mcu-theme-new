<?php get_header(); ?>

<main class="mdl-layout__content">
  <div class="page-content">
    <div class="mdl-grid">
      <div class="mdl-layout-spacer"></div>

      <?php
        if ( have_posts() ) {
          while ( have_posts() ) {
            the_post(); 
            mcu_get_post();
          }
        }
      ?>

      <div class="mdl-layout-spacer"></div>
    </div>
    <div class="mdl-grid">
      <div class="mdl-layout-spacer"></div>
      
      <?php mcu_get_recommended(); ?>

      <div class="mdl-layout-spacer"></div>
    </div>
  </div>

  <?php mcu_get_subscribe(); ?>

  <?php mcu_get_footer(); ?>

</main>

<?php get_footer(); ?>