<?php 
  global $wp;
  $bgs = get_field('banner_images','options');
  shuffle($bgs);
  $feature = get_field('feature_status','options');
?>

<section class="mdl-grid ">
  <?php if(!$feature) echo "<div class=\"mdl-layout-spacer\"></div>"; ?>
  
  <div class="mdl-cell mdl-cell--8-col">

    <div class="cta-box subscribe" style="background-image:url('<?php echo $bgs[0]['url'] ?>');" >
      <h3>Get The Morning Chalk Up</h3>
      <p>Delivered to your inbox every morning.</p>
      <form class="pill-form" action="/process/sub-box.php" method="post">
        <input type="text" id="email" name="email" placeholder="Your Email">
        <div class="hidden" style="display:none;">
          <input type="hidden" name="URL" id="URL" value="">
          <input type="hidden" name="UTM_SOURCE" id="UTM_SOURCE" value="">
          <input type="hidden" name="UTM_MEDIUM" id="UTM_MEDIUM" value="">
          <input type="hidden" name="UTM_CAMP" id="UTM_CAMP" value="">
          <input type="hidden" name="GCLID" id="GCLID" value="">
        </div>
        <button type="submit" class="submit">CHALK UP</button>
      </form>
    </div>
  </div>
  
  <?php if($feature): $link = get_field('feature_link','options'); $bg = get_field('feature_background','options'); ?>
  <div class="mdl-cell mdl-cell--4-col mdl-cell--12-col-tablet">
    <div class="cta-box merch" style="background-image:url('<?php echo $bg['sizes']['large'] ?>');">
      <h3><?php the_field('feature_title','options') ?></h3>
      <p><?php the_field('feature_text','options') ?></p>
      <p><a class="btn" href="<?php echo $link['url'] ?>?utm_source=morningchalkup&utm_medium=banner&utm_campaign=onsite&utm_content=<?php echo home_url( $wp->request ) ?>" target="<?php echo $link['target'] ?>"><?php echo $link['title'] ?></a></p>
    </div>
  </div>
  <?php endif; ?>
  
  <?php if(!$feature) echo "<div class=\"mdl-layout-spacer\"></div>"; ?>
</section>