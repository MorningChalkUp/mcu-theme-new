<?php get_header(); ?>
  <script>$('#navbar').addClass('noban');</script>
  <main class="mdl-layout__content">
    <div class="page-content">
      <div class="mdl-grid">
        <section class="mdl-cell mdl-cell--12-col main archive">
          <div class="mdl-grid">
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-cell mdl-cell--8-col center">
              <br><hr>
              <h3 class="top-title section-title "><strong><?php the_archive_title(); ?></strong></h2>
              <p><?php the_archive_description(); ?></p>
            </div>
            <div class="mdl-layout-spacer"></div>
          </div>
          <div class="mdl-grid">
            <?php 
            global $query_string;
            parse_str( $query_string, $args );
            $args['posts_per_page'] = -1;
            query_posts( $args );
            if (have_posts()) {
              $i = 0;
              while (have_posts() && $i < 9) {
                the_post(); $i++;
                get_template_part( 'templates/teaser', 'archive' );
              }
            }
            ?>
          </div>
        </section>
      </div>
      
      <?php get_template_part( 'templates/subscribe' ); ?>
      
      <?php if (have_posts() && $i >= 9) : ?>
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