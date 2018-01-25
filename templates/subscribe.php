<section class="mdl-grid ">
  <div class="mdl-layout-spacer"></div>
  <div class="mdl-cell mdl-cell--8-col">
    <?php 
      $bgs = get_field('banner_images','options');
      shuffle($bgs);
    ?>
    <div class="subscribe" style="background-image:url('<?php echo $bgs[0]['url'] ?>');" >
      <h3>Get The Morning Chalk Up<br><small>Delivered to your inbox every morning.</small></h3>
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
  <div class="mdl-layout-spacer"></div>
</section>