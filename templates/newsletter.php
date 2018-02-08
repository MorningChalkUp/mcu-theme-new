<script>$('#navbar').addClass('noban');</script>
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
  
  <article class="mdl-cell mdl-cell--8-col main article">
    <br><hr>
    <div class="content newsletter-code">
      <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;max-width:600px;font-family:Roboto, sans-serif;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;border-spacing:0 !important;border-collapse:collapse !important;table-layout:fixed !important;margin-top:0 !important;margin-bottom:0 !important;margin-right:auto !important;margin-left:auto !important;">
        <tbody><tr style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;">
          <td align="left" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;padding-top:20px;padding-bottom:20px;padding-right:10px;padding-left:40px;font-size:12px;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;"><a href="mailto:tips@morningchalkup.com?subject=Here's%20a%20tip!" target="_blank" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;color:#3d5ba9;text-decoration:none;"><span style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;color:#3d5ba9;">Send us a tip!</span></a></td>
          <td align="right" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;padding-top:20px;padding-bottom:20px;padding-right:40px;padding-left:10px;font-size:12px;line-height:14px;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;"><?php the_time('l, F j, Y'); ?></td>
        </tr>
      </tbody></table>
      <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;max-width:600px;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;border-spacing:0 !important;border-collapse:collapse !important;table-layout:fixed !important;margin-top:0 !important;margin-bottom:0 !important;margin-right:auto !important;margin-left:auto !important;">
          <tbody><tr style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;">
              <td style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;padding-top:20px;padding-bottom:0;padding-right:40px;padding-left:40px;text-align:center;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;">
                  <img src="https://i6.createsend1.com/ti/j/DD/CC5/F72/022019/mcu-normal.png" width="320" alt="Morning Chalk Up" border="0" align="center" class="g-img" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;max-width:100%;height:auto;font-family:Roboto, sans-serif;font-size:24px;line-height:36px;color:#555555;margin-top:auto;margin-bottom:auto;margin-right:auto;margin-left:auto;-ms-interpolation-mode:bicubic;">
              </td>
          </tr>
      </tbody></table>
      <?php the_content(); ?>
    </div>
    <div class="social center">
      <br>
      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink() ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;ga('send', 'event', 'share', 'facebook', '<?php echo get_the_title(); ?>');" target="_blank" title="Share on Facebook" class="mdi mdi-facebook"></a>
      <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode(get_the_title().' | '.get_bloginfo('name')) ?>&url=<?php echo get_permalink() ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;ga('send', 'event', 'share', 'twitter', '<?php echo get_the_title(); ?>');" target="_blank" title="Share on Twitter" class="mdi mdi-twitter"></a>
      <a href="http://www.reddit.com/submit?url=<?php echo get_permalink() ?>&title=<?php echo urlencode(get_the_title().' | '.get_bloginfo('name')) ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;ga('send', 'event', 'share', 'reddit', '<?php echo get_the_title(); ?>');" target="_blank" title="Share on Reddit" class="mdi mdi-reddit"></a>
      <a href="mailto:?subject=<?php echo get_the_title().' - '.get_bloginfo('name') ?>&body=<?php echo get_permalink() ?>" target="_blank" onclick="ga('send', 'event', 'share', 'email', '<?php echo get_the_title(); ?>');" title="Share via Email" class="mdi mdi-email"></a>
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