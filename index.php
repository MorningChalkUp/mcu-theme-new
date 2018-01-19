<?php get_header(); ?>

<main class="mdl-layout__content">
  <div class="page-content">
    
    <?php get_template_part( 'templates/signup' ); ?>

    <div class="mdl-grid">

      <?php 
        global $exclude, $ex_str;
  
        $mcu = get_category_by_slug('morningchalkup'); 
        $mcu_id = $mcu->term_id;

        $args_feature = array (
          'cat'=> '-'.$mcu_id,
          'posts_per_page'  => 1,
          'meta_query'      => array(
            array(
              'key' => 'featured',
              'compare' => '=',
              'value' => 'section',
            ),
          ),
          'post__not_in' => $exclude,
        );

        $feature = new WP_Query($args_feature);

        if ($feature->post_count != 1) {
          $args_feature = array (
            'cat'=> '-'.$mcu_id,
            'posts_per_page'  => 1,
            'post__not_in' => $exclude,
          );
          $feature = new WP_Query($args_feature);
        }

        $ex = wp_list_pluck( $feature->posts, 'ID' );
        $exclude[] = $ex[0];
        $ex_str = implode(",",$exclude);

        $args = array (
          'cat'=> '-'.$mcu_id,
          'posts_per_page'  => 9,
          'post__not_in' => $exclude,
        );
      ?>
      <section class="mdl-cell mdl-cell--12-col main archive home">
        <div id="quotes" class="center">
          <p><em>&ldquo;Proud of you guys!! The Morning Chalk Up is absolutely outstanding and has evolved to the top tier of what I read daily!! Keep up the good work!!&rdquo;</em></p><p>- Coach Mike Burgener</p>
        </div>
        <h3 class="section-title center">Latest <strong>Articles</strong></h3>
        <div class="mdl-grid" style="align-items:center">
          <?php
            if ($feature->have_posts()) {
              while($feature->have_posts()) {
                $feature->the_post();
                get_template_part( 'templates/feature', 'sub' );
              }
            }
            ?>
        </div>
        <div class="mdl-grid">
          <?php
            $latest = new WP_Query($args);
            if ($latest->have_posts()) {
              while($latest->have_posts()) {
                $latest->the_post();
                get_template_part( 'templates/teaser', 'archive' );
              }
            }
          ?>
        </div>
      </section>

    </div>
    
  <?php get_template_part( 'templates/subscribe' ); ?>
</main>

<?php get_footer(); ?>