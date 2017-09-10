<section class="mdl-cell mdl-cell--8-col recommended">
  <hr>
  <h3 class="center section-title">Recommended <strong>Stories</strong></h3>
  <div class="mdl-grid">
    <?php
      $categories = get_the_category( $post->ID );
      if ( $categories ) {
        $first_category = $categories[0]->term_id;
        $args = array(
          'category__in'     => array( $first_category ),
          'post__not_in'     => array( $post->ID ),
          'posts_per_page'   => 2,
          'ignore_sticky_posts' => 1,
        );
        $my_query = new WP_Query( $args );
        if( $my_query->have_posts() ) {
          while ($my_query->have_posts()) {
            $my_query->the_post();
            get_template_part( 'templates/teaser' );
          }
        }
        wp_reset_query();
      }
      ?>

  </div>
</section>