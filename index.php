<?php
  $cat_mcu = get_category_by_slug( 'mcu' );
  $cat_mcu_id = $cat_mcu->term_id;
  $cat_mcu_link = get_category_link( $cat_mcu_id );

  $cat_tidbits = get_category_by_slug( 'tidbits' );
  $cat_tidbits_id = $cat_tidbit->term_id;
  $cat_tidbits_link = get_category_link( $cat_tidbits_id );

  $cat_story = get_category_by_slug( 'story' );
  $cat_story_id = $cat_story->term_id;
  $cat_story_link = get_category_link( $cat_story_id );

  $quote_num = 0;
?>

<?php get_header(); ?>

  <main class="mdl-layout__content">
    <div class="page-content">
      
      <?php get_template_part( 'templates/features' ); ?>

      <div class="mdl-grid">

        <?php get_template_part( 'templates/tidbits' ); ?>

        <?php get_template_part( 'templates/stories' ); ?>

      </div>
      
    <?php get_template_part( 'templates/subscribe' ); ?>
      
    <?php get_template_part( 'templates/footer' ); ?>
    
  </main>

<?php get_footer(); ?>