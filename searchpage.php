<?php
/*
Template Name: Search Page
*/

if ( isset( $_GET['keyword'] ) ) {
  $s = $_GET['keyword'];
} else {
  $s = '';
}

$cat_mcu = get_category_by_slug( 'mcu' );
$cat_mcu_id = $cat_mcu->term_id;
$cat_mcu_link = get_category_link( $cat_mcu_id );

$cat_tidbit = get_category_by_slug( 'tidbits' );
$cat_tidbit_id = $cat_tidbit->term_id;
$cat_tidbit_link = get_category_link( $cat_tidbit_id );

$cat_story = get_category_by_slug( 'stories' );
$cat_story_id = $cat_story->term_id;
$cat_story_link = get_category_link( $cat_story_id );

$search_cat = array( $cat_tidbit_id, $cat_story_id, $cat_mcu_id );

query_posts(array(
  's' => $s,
  'category__in' => $search_cat,
  'posts_per_page'  => -1,
));

?>

<?php get_header(); ?>

<main class="mdl-layout__content">
  <div class="page-content">
    <div class="mdl-grid">
      <div class="mdl-layout-spacer"></div>
        <!-- <section class="mdl-cell mdl-cell--2-col search-side">
          Sidebar
        </section> -->
        <section class="mdl-cell mdl-cell--8-col main search">

          <form class="keywords" action="/search">
            <i class="mdi mdi-magnify"></i>
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type="text" name="keyword" id="keyword" value="<?php echo $_GET['keyword']; ?>">
            </div>
            <button type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect submit">
              Search
            </button>
          </form>

          <?php

            if ( have_posts() ) {
              while ( have_posts() ) {
                the_post();
                get_template_part( 'templates/search', 'result' );
              }
            }
          ?>

        </section>
      <div class="mdl-layout-spacer"></div>
    </div>

  <?php get_template_part( 'templates/subscribe' ); ?>

  <?php get_template_part( 'templates/footer' ); ?>

</main>

<?php get_footer(); ?>