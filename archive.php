<?php get_header(); ?>

  <main class="mdl-layout__content">
    <div class="page-content">
      <div class="mdl-grid">
        <section class="mdl-cell mdl-cell--12-col main archive">
          <div class="mdl-grid">
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-cell mdl-cell--8-col title">
              <h1><?php the_archive_title(); ?></h1>
              <p><?php the_archive_description(); ?></p>
            </div>
            <div class="mdl-layout-spacer"></div>
          </div>
          <div class="mdl-grid">
            <?php 
            query_posts('posts_per_page=-1' );
            if (have_posts()) {
              while (have_posts()) {
                the_post();
                get_template_part( 'templates/teaser', 'archive' );
              }
            }
            ?>
          </div>
        </section>
      </div>
      
      <?php get_template_part( 'templates/subscribe' ); ?>
      
      <?php if (have_posts()) : ?>
      <div class="mdl-grid">
        <section class="mdl-cell mdl-cell--12-col main archive">
          <div class="mdl-grid">
            <?php 
              while (have_posts()) {
                the_post();
                get_template_part( 'templates/teaser', 'archive' );
              }
            ?>
          </div>
        </section>
      </div>
    <?php endif; ?>
    </div>

    <?php get_template_part( 'templates/footer' ); ?>
    
  </main>

<?php get_footer(); ?>