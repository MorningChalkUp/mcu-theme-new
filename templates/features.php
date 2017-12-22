<div id="signup">
  <div class="wrapper">
    <div class="row">
      <div class="span6">
        other thing here
      </div>
      <div class="span6">
        <div id="demo">
          <img src="<?php bloginfo('stylesheet_directory') ?>/img/iphone.svg" width="300">
          <div class="newsletter">
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