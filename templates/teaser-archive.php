<?php 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
?>

<article class="mdl-cell mdl-cell--4-col teaser">
  <div class="img">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img class="teaser-img" src="<?php echo $thumb_url; ?>" alt="<?php the_title(); ?>"></a>
  </div>
  <div class="meta">
    <?php 
      $categories = get_the_category( $post->ID );
      if ( ! empty( $categories ) ) {
          echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
      }
    ?>
    •
    <?php the_date('M j, Y'); ?>
  </div>
  <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
  <div class="byline">
    BY  <?php the_author(); ?>   |  STAFF
  </div>
</article>