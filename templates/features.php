<?php
  // Home Feature
  $feature_args = array (
    'cat' => array($cat_story_id,$cat_tidbits_id),
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
      'cat' => array($cat_story_id,$cat_tidbits_id),
      'posts_per_page'  => 1,
    );
    $feature = new WP_Query($feature_args);
  }

  $exclude[] = wp_list_pluck( $tidbit_feature->posts, 'ID' );

  // MCU
  $mcu_args = array (
    'cat' => $cat_mcu_id,
    'posts_per_page'  => 5,
  );

  $mcu = new WP_Query($args);
?>

<section class="feature mdl-grid">
  
  <?php 
    if ($feature->have_posts()) {
      white($feature->have_posts()) {
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
        if ($mcu->have_posts()) {
          white($mcu->have_posts()) {
            $mcu->the_post();
            get_template_part( 'templates/mcu' );
          }
        }
      ?>

    </div>
    <div class="more"><a href="<?php echo esc_url( $cat_mcu_link ); ?>">Read More ></a></div>
  </div>
</section>