<div id="signup">
  <div id="bg"></div>
  <div class="wrapper">
    <div class="row">
      <div class="span6 text-right">
        <h2>Start your morning with a fresh cup of fitness.</h2>
        <form class="sub-form" action="/process/sub-bar.php" method="post">
          <input type="text" id="email" name="email" placeholder="Your Email">
          <button type="submit" class="submit">CHALK UP</button>
          <div class="hidden" style="display:none;">
            <input type="hidden" name="URL" id="URL" value="">
            <input type="hidden" name="UTM_SOURCE" id="UTM_SOURCE" value="">
            <input type="hidden" name="UTM_MEDIUM" id="UTM_MEDIUM" value="">
            <input type="hidden" name="UTM_CAMP" id="UTM_CAMP" value="">
            <input type="hidden" name="GCLID" id="GCLID" value="">
          </div>
        </form>
        <!-- <div class="quote">
          <p><em>&ldquo;Proud of you guys!! Your morning chalk talk is absolutely outstanding and has evolved to the top tier of what I read daily!! Keep up the good work!!&rdquo;</em></p><p>- Coach Mike Burgener</p>
        </div> -->
      </div>
      <div class="span6">
        <div id="demo">
          <img src="<?php bloginfo('stylesheet_directory') ?>/img/iphone.svg" width="300">
          <div class="newsletter">
            <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;max-width:600px;font-family:Roboto, sans-serif;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;border-spacing:0 !important;border-collapse:collapse !important;table-layout:fixed !important;margin-top:0 !important;margin-bottom:0 !important;margin-right:auto !important;margin-left:auto !important;">
              <tbody><tr style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;">
                <td align="left" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;padding-top:20px;padding-bottom:20px;padding-right:10px;padding-left:40px;font-size:12px;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;"><a href="mailto:tips@morningchalkup.com?subject=Here's%20a%20tip!" target="_blank" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;color:#3d5ba9;text-decoration:none;"><span style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;color:#3d5ba9;">Send us a tip!</span></a></td>
                <td align="right" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;padding-top:20px;padding-bottom:20px;padding-right:40px;padding-left:10px;font-size:12px;line-height:14px;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;"><?php the_time('l, F j'); ?></td>
              </tr>
            </tbody></table>
            <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;max-width:600px;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;border-spacing:0 !important;border-collapse:collapse !important;table-layout:fixed !important;margin-top:0 !important;margin-bottom:0 !important;margin-right:auto !important;margin-left:auto !important;">
                <tbody><tr style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;">
                    <td style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;padding-top:20px;padding-bottom:0;padding-right:40px;padding-left:40px;text-align:center;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;">
                        <img src="https://i6.createsend1.com/ti/j/DD/CC5/F72/022019/mcu-normal.png" width="320" alt="Morning Chalk Up" border="0" align="center" class="g-img" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;max-width:100%;height:auto;font-family:Roboto, sans-serif;font-size:24px;line-height:36px;color:#555555;margin-top:auto;margin-bottom:auto;margin-right:auto;margin-left:auto;-ms-interpolation-mode:bicubic;">
                    </td>
                </tr>
            </tbody></table>
            <?php 
              $newsletter = get_posts( array(
                'posts_per_page'   => 1,
              	'category_name'    => 'morningchalkup',
              ) ); 
              foreach ( $newsletter as $latest ) { 
                setup_postdata( $latest ); 
                the_content(); 
              } 
              wp_reset_postdata();
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>