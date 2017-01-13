<?php get_header(); ?>

<main class="mdl-layout__content">
  <div class="page-content">
    <div class="mdl-grid">
      <div class="mdl-layout-spacer"></div>
        <section class="mdl-cell mdl-cell--2-col search-side">
          Sidebar
        </section>
        <section class="mdl-cell mdl-cell--6-col main search">

          <?php
            if ( have_posts() ) {
              while ( have_posts() ) {
                the_post();
                get_template_part( 'templates/search', 'result' );
              }
            }
          ?>

        </section>
      <div class="mdl-layout-spacer"></div>
    </div>

  <?php get_template_part( 'templates/subscribe' ); ?>

  <?php get_template_part( 'templates/footer' ); ?>

</main>

<?php get_footer(); ?>