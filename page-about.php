<?php get_header(); ?>

<main class="mdl-layout__content">
  <div class="page-content">
    <article class="main about">

      <?php the_content(); ?>

    </article>

  <?php get_template_part( 'templates/subscribe' ); ?>

  <?php get_template_part( 'templates/footer' ); ?>

</main>

<?php get_footer(); ?>