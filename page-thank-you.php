<?php 

$name = $_GET['fname'];

?>

<?php get_header(); ?>

<main class="mdl-layout__content">
  <div class="page-content">
    <article class="main subscribe-page">
      <section class="hero">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--12-col mdl-grid">
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-cell mdl-cell--10-col form thank-you">
              <div class="mdl-grid">
                <div class="mdl-layout-spacer"></div>
                <div class="mdl-cell mdl-cell--8-col headline">
                  <h1>
                    <i class="mdi mdi-email"></i>
                    <?php 
                      if (isset($name)) {
                        echo 'Thank you ' . $name . '. You are now subscribed.';
                      } else {
                        echo 'Thank you. You are now subscribed.';
                      }
                    ?>
                  </h1>
                  <div class="like">
                    Like us on Facebook
                  </div>
                  <div class="fb-like" data-href="https://www.facebook.com/MorningChalkUp/" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="false"></div>
                </div>
                <div class="mdl-layout-spacer"></div>
              </div>
            </div>
            <div class="mdl-layout-spacer"></div>
          </div>
        </div>
      </section>
    </article>

  <?php get_template_part( 'templates/footer' ); ?>

</main>

<?php get_footer(); ?>