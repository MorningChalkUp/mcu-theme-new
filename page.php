<?php get_header(); ?>

<main class="mdl-layout__content">
  <div class="page-content">
    <div class="mdl-grid">
      <div class="mdl-layout-spacer"></div>

      <?php
        if ( have_posts() ) {
          while ( have_posts() ) {
            the_post();
            get_template_part( 'templates/post', 'page' );
          }
        }
      ?>

      <div class="mdl-layout-spacer"></div>
    </div>

  <?php get_template_part( 'templates/subscribe' ); ?>

  

</main>

<?php get_footer(); ?>