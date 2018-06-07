<?php /* Template Name: Giveaway Template */ ?>
<?php get_header(); ?>
<script>$('#navbar').addClass('noban');</script>

<main class="mdl-layout__content">
  <div class="page-content">
    <article class="main subscribe-page">

      <?php
        if ( have_posts() ) :
          while ( have_posts() ) : the_post();
      ?>
        <section id="giveaway" class="hero" style="background-color:#f9f9f9;background-image:none;">
            <div class="mdl-grid" style="align-items:center;min-height:90vh;">
        
              <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet">
                <style>.wp-post-image{height:auto;max-width:100%;}</style>
                <?php the_post_thumbnail( 'large' ); ?>
              </div>
        
              <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet">
                <?php the_content(); ?>
              </div>
        
            </div>
        </section>
      <?php
          endwhile;
        endif;
      ?>

    </article>

</main>

<?php get_footer(); ?>