<?php 
$thumb_id = get_post_thumbnail_id();

$thumb_url_array = wp_get_attachment_image_src( $thumb_id, 'featured', true );
$thumb_url = $thumb_url_array[0];

$thumb_size = getimagesize( $thumb_url );

if ( $thumb_size[0] != 855 || $thumb_size[1] != 590 ) {
  $thumb_url_array = wp_get_attachment_image_src( $thumb_id, 'featured-sm', true );
  $thumb_url = $thumb_url_array[0];
}

$caption = get_post( $thumb_id )->post_excerpt;

$tags = wp_get_post_tags( $post->ID );
?>

<?php if($banner = get_field('banner_image')) : ?>
  
</div>
<div id="banner" style="background-image:url('<?php echo $thumb_url; ?>');">
  <div class="mdl-grid">
    <div class="mdl-layout-spacer"></div>
    <div class="mdl-cell mdl-cell--8-col">
      <h2 class="post-title"><?php the_title(); ?></h2>
      <div class="meta">
        <?php the_date('F j, Y'); ?> by <a href="<?php echo get_author_posts_url($post->post_author) ?>" title="<?php the_author(); ?>" alt="<?php the_author(); ?>"><?php the_author(); ?></a>
      </div>
      <?php if ( $caption ) : ?>
        <div class="caption">Photo Credit: <?php echo $caption ?></div>
      <?php endif; ?>
      <div class="social">
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink() ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook" class="mdi mdi-facebook"></a>
        <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode(get_the_title().' | '.get_bloginfo('name')) ?>&url=<?php echo get_permalink() ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter" class="mdi mdi-twitter"></a>
        <a href="http://www.reddit.com/submit?url=<?php echo get_permalink() ?>&title=<?php echo urlencode(get_the_title().' | '.get_bloginfo('name')) ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Reddit" class="mdi mdi-reddit"></a>
        <a href="mailto:?subject=<?php echo get_the_title().' - '.get_bloginfo('name') ?>&body=<?php echo get_permalink() ?>" target="_blank" title="Share via Email" class="mdi mdi-email"></a>
      </div>
    </div>
    <div class="mdl-layout-spacer"></div>
  </div>
</div>
<div class="mdl-grid">
  <div class="mdl-layout-spacer"></div>
  
<?php endif; ?>
  
  <article class="mdl-cell mdl-cell--8-col main article">
    
    <?php if(!$banner) : ?>
      
    <h2 class="post-title"><?php the_title(); ?></h2>
    <div class="meta">
      <strong><?php the_date('F j, Y'); ?></strong>
       BY  <a href="<?php echo get_author_posts_url($post->post_author) ?>" title="<?php the_author(); ?>" alt="<?php the_author(); ?>"><?php the_author(); ?></a>
    </div>
    <div class="social">
      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink() ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook" class="mdi mdi-facebook"></a>
      <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode(get_the_title().' | '.get_bloginfo('name')) ?>&url=<?php echo get_permalink() ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter" class="mdi mdi-twitter"></a>
      <a href="http://www.reddit.com/submit?url=<?php echo get_permalink() ?>&title=<?php echo urlencode(get_the_title().' | '.get_bloginfo('name')) ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Reddit" class="mdi mdi-reddit"></a>
      <a href="mailto:?subject=<?php echo get_the_title().' - '.get_bloginfo('name') ?>&body=<?php echo get_permalink() ?>" target="_blank" title="Share via Email" class="mdi mdi-email"></a>
    </div>
    <div class="img">
      <img class="feature-img" src="<?php echo $thumb_url; ?>" alt="<?php the_title(); ?>">
      <?php if ( $caption ) : ?>
        <div class="caption">Photo Credit: <?php echo $caption ?></div>
      <?php endif; ?>
    </div>
    
    <?php endif; ?>
    
    <div class="content">
      <?php the_content(); ?>
      <?php if (get_field('mcu_reads')): ?>
        <div class="sub-sec reads">
          <img src="<?php echo get_template_directory_uri(); ?>/img/reads.png" alt="Chalk Up Tips">
          CHALK UP READS
        </div>
        <?php echo get_field('mcu_reads'); ?>
      <?php endif ?>
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