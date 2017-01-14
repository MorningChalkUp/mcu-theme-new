<article>
  <div class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
  <div class="meta">
    <?php 
      $categories = get_the_category( $post->ID );
      if ( ! empty( $categories ) ) {
          echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
      }
    ?>
    •
    <?php echo get_the_date('M j, Y'); ?>
  </div>
  <div class="excerpt"><?php the_excerpt(); ?></div>
</article>