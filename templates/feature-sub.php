<?php 
if ( has_post_thumbnail() ) {
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'featured', true);
  $thumb_url = $thumb_url_array[0];
} else {
  $thumb_url = get_template_directory_uri() . '/screenshot.png';
}
?>

<article class="mdl-cell mdl-cell--8-col sub-feature"style="background-image: url('<?php echo $thumb_url; ?>');">
  <div class="content">
    <?php 
      $categories = get_the_category( $post->ID );
      if ( ! empty( $categories ) ) {
          echo '<div class="category"><mark>' . esc_html( $categories[0]->name ) . '</mark></div>';
      }
    ?>
    <div class="title"><mark><a href="<?php echo the_permalink(); ?>" title="<?php echo the_title(); ?>"><?php echo the_title(); ?></a></mark></div>
  </div>
</article>