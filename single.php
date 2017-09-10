<?php get_header(); ?>

<main class="mdl-layout__content">
  <div class="page-content">
    <div class="mdl-grid">
      <div class="mdl-layout-spacer"></div>

      <?php
        if ( have_posts() ) {
          while ( have_posts() ) {
            the_post();
            get_template_part( 'templates/post' );
          }
        }
      ?>

      <div class="mdl-layout-spacer"></div>
    </div>
    <div class="mdl-grid">
      <div class="mdl-layout-spacer"></div>
      <?php get_template_part( 'templates/recommended' ); ?>
      <div class="mdl-layout-spacer"></div>
    </div>
  </div>

  <?php get_template_part( 'templates/subscribe' ); ?>

  <?php get_template_part( 'templates/footer' ); ?>

</main>

<?php get_footer(); ?>