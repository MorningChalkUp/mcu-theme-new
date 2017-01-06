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
                    Thank you [Fname]. You are now subscribed.
                  </h1>
                  <a target="_blank" href="https://www.facebook.com/MorningChalkUp/" class="mdl-button like">
                    Like us on Facebook
                  </a>
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