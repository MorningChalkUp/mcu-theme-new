<?php 
if ( has_post_thumbnail() ) {
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src( $thumb_id, $size='blog-roll' );
  $thumb_url = $thumb_url_array[0];
} else {
  $thumb_url = get_template_directory_uri() . '/screenshot.png';
}
?>

<article class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet teaser">
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
    <span>•</span>
    <?php echo get_the_date('M j, Y'); ?>
  </div>
  <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
  <div class="byline">
    BY  <?php the_author(); ?>   |  STAFF
  </div>
</article>