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
            $archive = new WP_Query('posts_per_page=9');
            if ($archive->have_posts()) {
              $i = 0;
              while ($archive->have_posts()) {
                $archive->the_post();
                get_template_part( 'templates/teaser', 'archive' );
                $do_not_duplicate[] = $post->ID;
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
              $archive = new WP_Query( array( 'posts_per_page' => -1, 'post__not_in' => $do_not_duplicate ) );
              if ($archive->have_posts()) {
                while ($archive->have_posts()) {
                  $archive->the_post();
                  get_template_part( 'templates/teaser', 'archive' );
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