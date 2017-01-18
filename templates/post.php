<?php 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'featured', true);
$thumb_url = $thumb_url_array[0];

$caption = get_post( $thumb_id )->post_excerpt;

$tags = wp_get_post_tags( $post->ID );
?>

<article class="mdl-cell mdl-cell--8-col main article">
  <h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
  <div class="meta">
    <?php the_date('F j, Y'); ?><br>
    BY  <?php the_author(); ?>  | STAFF
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
    <?php if ( $caption ) : ?>
      <div class="caption">Photo Credit: <?php echo $caption ?></div>
    <?php endif; ?>
  </div>
  <div class="content">
    <?php the_content(); ?>
    <?php if (get_field('mcu_tips')): ?>
      <div class="sub-sec tips">
        <img src="<?php echo get_template_directory_uri(); ?>/img/tips.png" alt="Chalk Up Tips">
        CHALK UP TIPS
      </div>
      <?php echo get_field('mcu_tips'); ?>
    <?php endif ?>
    <?php if (get_field('mcu_deals')): ?>
      <div class="sub-sec tips">
        <img src="<?php echo get_template_directory_uri(); ?>/img/deals.png" alt="Chalk Up Deals">
        CHALK UP Deals
      </div>
      <?php echo get_field('mcu_deals'); ?>
    <?php endif ?>
    <?php if (get_field('mcu_calendar')): ?>
      <div class="sub-sec tips">
        <img src="<?php echo get_template_directory_uri(); ?>/img/calendar.png" alt="Chalk Up Calendar">
        CHALK UP Calendar
      </div>
      <?php echo get_field('mcu_calendar'); ?>
    <?php endif ?>
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