<div class="mdl-grid">
    <div class="mdl-layout-spacer"></div>
    <section class="mdl-cell mdl-cell--8-col recommended">
      <div class="mdl-grid">
        <h2 class="mdl-cell mdl-cell--12-col center">Recommended Stories</h2>
        
        <?php
          $tags = wp_get_post_tags( $post->ID );
          if ( $tags ) {
            $first_tag = $tags[0]->term_id;
            $args = array(
              'tag__in'          => array( $first_tag ),
              'post__not_in'     => array( $post->ID ),
              'posts_per_page'   => 2,
              'caller_get_posts' => 1,
            );
            $my_query = new WP_Query( $args );
            if( $my_query->have_posts() ) {
              while ($my_query->have_posts()) : $my_query->the_post() {
                get_template_part( 'templates/recommended', 'post' );
              }
            }
            wp_reset_query();
            }
          ?>

      </div>
    </section>
    <div class="mdl-layout-spacer"></div>
  </div>
</div>