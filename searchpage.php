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

if ( isset( $_POST['filter'] ) ) {
  foreach ( $_POST['filter'] as $filter ) {
    $search_cat[] = get_category_by_slug( $filter )->term_id;
  }
} else {
  $search_cat = array( $cat_tidbit_id, $cat_story_id, $cat_mcu_id );
}

$args = array(
  's' => $s,
  'category__in' => $search_cat,
  'posts_per_page'  => -1,
);

query_posts( $args );

?>

<?php get_header(); ?>

<main class="mdl-layout__content">
  <div class="page-content">
    <div class="mdl-grid">
      <div class="mdl-layout-spacer"></div>
      <section class="mdl-cell mdl-cell--8-col">
        <h1 class="center">Search Results</h1>

      </section>
      <div class="mdl-layout-spacer"></div>
    </div>
     <div class="mdl-grid">
      <div class="mdl-layout-spacer"></div>
        <section class="mdl-cell mdl-cell--3-col mdl-cell--8-col-tablet search-side">
          
          <?php if ( $s != '' ) : ?>
            <form class="filters" action="/search/?keyword=<?php echo $s; ?>" method="post">
          <?php else : ?>
            <form class="filters" action="/search/" method="post">
          <?php endif; ?>
          
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="tidbits">
              <input type="checkbox" name="filter[]" id="tidbits" class="mdl-checkbox__input" value="tidbits" <?php echo ( in_array( 'tidbits', $_POST['filter'] ) ? 'checked' : '' ); ?>>
              <span class="mdl-checkbox__label">Tidbits</span>
            </label>

            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="stories">
              <input type="checkbox" name="filter[]" id="stories" class="mdl-checkbox__input" value="stories" <?php echo ( in_array( 'stories', $_POST['filter'] ) ? 'checked' : '' ); ?>>
              <span class="mdl-checkbox__label">Stories</span>
            </label>

            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="mcu">
              <input type="checkbox" name="filter[]" id="mcu" class="mdl-checkbox__input" value="mcu" <?php echo ( in_array( 'mcu', $_POST['filter'] ) ? 'checked' : '' ); ?>>
              <span class="mdl-checkbox__label">Morning Chalk Up</span>
            </label>

            <button type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect submit">
              Filter
            </button>
          
          </form>
        </section>
        <section class="mdl-cell mdl-cell--8-col main search">

          <form class="keywords" action="/search/" method="get">
            <i class="mdi mdi-magnify"></i>
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type="text" name="keyword" id="keyword" value="<?php echo $s; ?>">
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