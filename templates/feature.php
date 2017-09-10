<?php 
if ( has_post_thumbnail() ) {
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'featured', true);
  $thumb_url = $thumb_url_array[0];

  $thumb_size = getimagesize( $thumb_url );

  if ( $thumb_size[0] != 855 || $thumb_size[1] != 590 ) {
    $thumb_url_array = wp_get_attachment_image_src( $thumb_id, 'featured-sm', true );
    $thumb_url = $thumb_url_array[0];
  }

} else {
  $thumb_url = get_template_directory_uri() . '/screenshot.png';
}
?>

<div class="featured  mdl-cell mdl-cell--8-col mdl-cell--order-2-desktop" style="background-image: url('<?php echo $thumb_url; ?>');">
  <div class="content">
    <?php 
      $categories = get_the_category( $post->ID );
      if ( ! empty( $categories ) ) {
          echo '<div class="category"><mark>' . esc_html( $categories[0]->name ) . '</mark></div>';
      }
    ?>
    <h3 class="title"><mark><a href="<?php echo the_permalink(); ?>" title="<?php echo the_title(); ?>"><?php echo the_title(); ?></a></mark></h3>
  </div>
</div>