<?php
// Template Name: Full Width w Background
?>

<?php get_header(); ?>

<main class="mdl-layout__content">
  <div class="page-content">

    <article class="main subscribe-page">
      <section class="hero">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--12-col mdl-grid">
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-cell mdl-cell--10-col form">
              <div class="mdl-grid">
                
                <div class="mdl-layout-spacer"></div>

                <div class="mdl-cell mdl-cell--10-col headline">
                  <?php the_title(); ?>
                </div>

                <div class="mdl-layout-spacer"></div>
              </div>

              <div class="mdl-grid">
                
                <div class="mdl-layout-spacer"></div>

                <div class="mdl-cell mdl-cell--10-col">
                  <?php the_content(); ?>
                </div>

                <div class="mdl-layout-spacer"></div>
              </div>
              
            </div>
            <div class="mdl-layout-spacer"></div>
          </div>
        </div>
      </section>
    </article>

  

</main>

<?php get_footer(); ?>