<?php
  $string = file_get_contents( get_template_directory_uri() . "/js/crossfit_affiliates.json" );
  $affiliates = json_decode($string, true);
?>

<?php get_header(); ?>

<main class="mdl-layout__content">
  <div class="page-content">

    <article class="main subscribe-page">
      <section class="hero">
        <div class="mdl-grid" style="padding-bottom: 0">
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-cell mdl-cell--8-col title">
            <img src="<?php echo get_template_directory_uri(); ?>/img/eu.svg" alt="Morning Chalk Up Europe" style="max-width: 100px;width: 100%;float: right;">
          </div>
        </div>
        <div class="mdl-grid" style="padding-top: 0">
          <div class="mdl-cell mdl-cell--12-col mdl-grid" style="padding-top: 0; margin-top: 0;">
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-cell mdl-cell--10-col form" style="margin-top: 0">
              <div class="mdl-grid">
                
                <div class="mdl-layout-spacer"></div>

                <div class="mdl-cell mdl-cell--10-col headline" style="margin-top: 0;">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/chalkup-eu.svg" alt="Morning Chalk Up Europe" style="max-width: 370px;width: 100%;display: block;margin: 0 auto 10px auto;">
                  The daily newsletter for CrossFitters in Europe. Be ignored no longer.
                </div>

                <div class="mdl-layout-spacer"></div>
              </div>
              <form action="/process/europe.php" method="post">
                <div class="mdl-grid fields">
                  <div class="mdl-layout-spacer"></div>
                  <div class="mdl-cell mdl-cell--4-col">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="mdl-textfield__input" type="text" id="full-name" name="full-name">
                      <label class="mdl-textfield__label" for="full-name">Full Name *</label>
                    </div>
                  </div>

                  <div class="mdl-layout-spacer"></div>

                  <div class="mdl-cell mdl-cell--4-col">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="mdl-textfield__input" type="text" id="email" name="email">
                      <label class="mdl-textfield__label" for="email">Email *</label>
                    </div>
                  </div>

                  <div class="mdl-layout-spacer"></div>
                </div>
                <div class="mdl-grid fields">
                  <div class="mdl-layout-spacer"></div>

                  <div class="mdl-cell mdl-cell--4-col">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="mdl-textfield__input" type="text" id="country" name="country">
                      <label class="mdl-textfield__label" for="country">Country *</label>
                    </div>
                  </div>

                  <div class="mdl-layout-spacer"></div>

                  <div class="mdl-cell mdl-cell--4-col">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="mdl-textfield__input" type="text" id="affiliate" name="affiliate">
                      <label class="mdl-textfield__label" for="affiliate">Search For Your Box</label>
                    </div>
                  </div>

                  <div class="mdl-layout-spacer"></div>
                </div>
                <div class="mdl-grid fields">
                  <div class="mdl-layout-spacer"></div>

                  <div class="mdl-cell mdl-cell--4-col">

                    <!-- <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="mdl-textfield__input" type="text" id="about" name="about">
                      <label class="mdl-textfield__label" for="about">Tell Us More About Youself *</label>
                    </div> -->

                    <div class="mdl-select mdl-js-select mdl-select--floating-label">
                      <select class="mdl-select__input" id="about" name="about">
                        <option value=""></option>
                        <option value="CrossFit Fan!">CrossFit Fan!</option>
                        <option value="Elite Athlete">Elite Athlete</option>
                        <option value="Box Owner/Coach">Box Owner/Coach</option>
                        <option value="Media">Media</option>
                        <option value="Vendor">Vendor</option>
                      </select>
                      <label class="mdl-select__label" for="about">Tell Us More About Youself *</label>
                    </div>

                  </div>

                  <div class="mdl-layout-spacer"></div>

                  <div class="mdl-cell mdl-cell--4-col">
                    &nbsp;
                  </div>

                   <div class="mdl-layout-spacer"></div>
                </div>
                <div class="mdl-grid fields">
                  <div class="mdl-layout-spacer"></div>

                  <div class="hidden" style="display:none;">
                    <input type="hidden" name="URL" id="URL" value="">
                    <input type="hidden" name="UTM_SOURCE" id="UTM_SOURCE" value="">
                    <input type="hidden" name="UTM_MEDIUM" id="UTM_MEDIUM" value="">
                    <input type="hidden" name="UTM_CAMP" id="UTM_CAMP" value="">
                    <input type="hidden" name="GCLID" id="GCLID" value="">
                  </div>

                  <div class="mdl-cell mdl-cell--4-col">
                    <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect submit">
                      Subscribe
                    </button>
                  </div>

                  <div class="mdl-layout-spacer"></div>

                  <div class="mdl-cell mdl-cell--4-col">
                    &nbsp;
                  </div>
                  
                  <div class="mdl-layout-spacer"></div>
                </div>
              </form>
            </div>
            <div class="mdl-layout-spacer"></div>
          </div>
        </div>
      </section>
    </article>

  <?php get_template_part( 'templates/footer' ); ?>

</main>

<?php get_footer(); ?>