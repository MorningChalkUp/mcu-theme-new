<?php 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
$thumb_url = $thumb_url_array[0];

$tags = wp_get_post_tags( $post->ID );
?>

<article class="mdl-cell mdl-cell--8-col main article">
  <h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">Two <?php the_title(); ?></a></h1>
  <div class="meta">
    <?php the_date('F j, Y'); ?><br>
    by BY  <?php the_author(); ?>  | STAFF
  </div>
  <div class="share">
    <button class="mdl-button js-share-facebook fb">
      <i class="mdi mdi-facebook-box"></i> Facebook
    </button>
    <button class="mdl-button js-share-twitter tw">
      <i class="mdi mdi-twitter"></i> Twitter
    </button>
    <button class="mdl-button js-share-email em">
      <i class="mdi mdi-email"></i> Email
    </button>
  </div>
  <div class="img">
    <img class="feature-img" src="<?php echo $thumb_url; ?>" alt="<?php the_title(); ?>">
  </div>
  <div class="content">
    <?php the_content(); ?>
  </div>
  <?php if($tags): ?>
  <div class="tags">
    <?php foreach ($tags as $tag) {
      $tag_link = get_tag_link( $tag->term_id );
      echo "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug} tag'>#{$tag->name}</a> ";
    } ?>
  </div>
<?php endif; ?>
</article>