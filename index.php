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