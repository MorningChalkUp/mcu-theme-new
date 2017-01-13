<?php 
  global $cat_mcu_id, $cat_mcu_link, $exclude, $ex_str, $feature_cats;

  // Home Feature
  $feature_args = array (
    'cat' => $feature_cats,
    'posts_per_page'  => 1,
    'meta_query'      => array(
      array(
        'key' => 'featured',
        'compare' => '=',
        'value' => 'home',
      ),
    ),
  );

  $feature = new WP_Query($feature_args);

  if ($feature->post_count != 1) {
    $feature_args = array (
      'cat' => $feature_cats,
      'posts_per_page'  => 1,
    );
    $feature = new WP_Query($feature_args);
  }

  $ex = wp_list_pluck( $feature->posts, 'ID' );
  $exclude[] = $ex[0];
  $ex_str = implode( ",", $exclude );
  
  // MCU
  $mcu_args = array (
   'cat'               => $cat_mcu_id,
   'posts_per_page'    => 5,
  );
?>

<section class="feature mdl-grid">
  <?php 
    $feature = new WP_Query($feature_args);
    if ($feature->have_posts()) {
      while($feature->have_posts()) {
        $feature->the_post();
        get_template_part( 'templates/feature' );
      }
    }
  ?>

  <div class="mcu-roll mdl-cell mdl-cell--4-col mdl-cell--order-1-desktop">
    <div class="stories">
      <article class="mdl-grid category-title">
        <div class="img"></div>
        <div class="info">
          The Morning Chalk Up
        </div>
      </article>
      
      <?php 
        $mcu = new WP_Query($mcu_args);
        if ( $mcu->have_posts() ) {
          while( $mcu->have_posts() ) {
            $mcu->the_post();
            get_template_part( 'templates/mcu' );
          }
        }
      ?>

    </div>
    <div class="more"><a href="<?php echo esc_url( $cat_mcu_link ); ?>">Read More ></a></div>
  </div>
</section>