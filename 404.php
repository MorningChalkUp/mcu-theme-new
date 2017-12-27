<?php get_header(); ?>
<script>$('#navbar').addClass('noban');</script>
<main class="mdl-layout__content">
  <div class="page-content">
    <div class="mdl-grid">
      <div class="mdl-layout-spacer"></div>
      <h1 class="top-title">404</h1>
      <div class="mdl-layout-spacer"></div>
    </div>
    <?php get_template_part( 'templates/subscribe' ); ?>
  </div>
  
  <?php get_template_part( 'templates/footer' ); ?>

</main>

<?php get_footer(); ?>