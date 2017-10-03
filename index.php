<?php
  $cat_mcu = get_category_by_slug( 'morningchalkup' );
  $cat_mcu_id = $cat_mcu->term_id;
  $cat_mcu_link = get_category_link( $cat_mcu_id );

  $cat_tidbit = get_category_by_slug( 'tidbits' );
  $cat_tidbit_id = $cat_tidbit->term_id;
  $cat_tidbit_link = get_category_link( $cat_tidbit_id );

  $cat_story = get_category_by_slug( 'stories' );
  $cat_story_id = $cat_story->term_id;
  $cat_story_link = get_category_link( $cat_story_id );

  $quote_num = 0;

  $exclude = array();
  $ex_str = '';

  $feature_cats = array( $cat_tidbit_id, $cat_story_id );
?>

<?php get_header(); ?>

  <main class="mdl-layout__content">
    <div class="page-content">
      
      <?php get_template_part( 'templates/features' ); ?>

      <div class="mdl-grid">

        <?php get_template_part( 'templates/latest' ); ?>
        <?php //get_template_part( 'templates/tidbits' ); ?>
        <?php //get_template_part( 'templates/stories' ); ?>

      </div>
      
    <?php get_template_part( 'templates/subscribe' ); ?>
      
    <?php get_template_part( 'templates/footer' ); ?>
    
  </main>

<?php get_footer(); ?>