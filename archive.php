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
            global $query_string;
            query_posts( $query_string . 'posts_per_page=9' );
            if (have_posts()) {
              while (have_posts()) {
                the_post();
                get_template_part( 'templates/teaser', 'archive' );
              }
            }
            wp_reset_postdata();
            ?>
          </div>
        </section>
      </div>
      
      <?php get_template_part( 'templates/subscribe' ); ?>

      <div class="mdl-grid">
        <section class="mdl-cell mdl-cell--12-col main archive">
          <div class="mdl-grid">
            <?php 
              global $query_string;
              query_posts( $query_string . 'posts_per_page=-1' );
              if (have_posts()) {
                $i = 0;
                while (have_posts()) {
                  the_post();
                  if ( $i >= 9) {
                    get_template_part( 'templates/teaser', 'archive' );
                  }
                  $i++;
                }
              }
              wp_reset_postdata();
            ?>
          </div>
        </section>
      </div>
    </div>

    <?php get_template_part( 'templates/footer' ); ?>
    
  </main>

<?php get_footer(); ?>