<?php
  $string = file_get_contents( get_template_directory_uri() . "/js/crossfit_affiliates.json" );
  $affiliates = json_decode($string, true);
?>

<?php get_header(); ?>

<main class="mdl-layout__content">
  <div class="page-content">

    <article class="main subscribe-page">
      <section class="hero">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--12-col title">
            <h1>The Morning <span>Chalk Up</span> is the newsletter for people who do CrossFit.</h1> 
          </div>
        </div>
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--12-col mdl-grid">
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-cell mdl-cell--10-col form">
              <div class="mdl-grid">
                
                <div class="mdl-layout-spacer"></div>

                <div class="mdl-cell mdl-cell--10-col headline">
                  Get the email that CrossFit athletes, insiders and fans are reading every morning.
                </div>

                <div class="mdl-layout-spacer"></div>
              </div>
              <form action="/process/subscribe.php" method="post">
                <div class="mdl-grid fields">
                  <div class="mdl-layout-spacer"></div>
                  <div class="mdl-cell mdl-cell--4-col">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="mdl-textfield__input" type="text" id="full-name" name="full-name">
                      <label class="mdl-textfield__label" for="full-name">Full Name</label>
                    </div>
                  </div>

                  <div class="mdl-layout-spacer"></div>

                  <div class="mdl-cell mdl-cell--4-col">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="mdl-textfield__input" type="text" id="email" name="email">
                      <label class="mdl-textfield__label" for="email">Email</label>
                    </div>
                  </div>

                  <div class="mdl-layout-spacer"></div>
                </div>
                <div class="mdl-grid fields">
                  <div class="mdl-layout-spacer"></div>

                  <!-- <div class="mdl-cell mdl-cell--4-col">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="mdl-textfield__input" type="text" id="zip" name="zip">
                      <label class="mdl-textfield__label" for="zip">Zip Code</label>
                    </div>
                  </div> -->

                  <div class="mdl-cell mdl-cell--4-col">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="mdl-textfield__input" type="text" id="affiliate" name="affiliate">
                      <label class="mdl-textfield__label" for="affiliate">Search For Your Box</label>
                    </div>
                  </div>
                  
                  <!-- <div class="mdl-cell mdl-cell--4-col">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height" style="width: 100%;">
                      <input class="mdl-textfield__input" type="text" required id="affiliate" name="affiliate" readonly tabIndex="-1">
                      <label for="affiliate">
                          <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                      </label>
                      <label for="affiliate" class="mdl-textfield__label">Your Affiliate</label>
                      <ul for="affiliate" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                        <?php 
                          foreach ($affiliates as $affiliate) {
                            echo '<li class="mdl-menu__item">'. $affiliate['name'] .'</li>';
                          }
                        ?>
                          <li class="mdl-menu__item">None/Other</li>
                      </ul>
                    </div>
                  </div> -->

                  <div class="mdl-layout-spacer"></div>

                  <div class="mdl-cell mdl-cell--4-col">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="mdl-textfield__input" type="text" id="about" name="about">
                      <label class="mdl-textfield__label" for="about">Tell Us More About Youself</label>
                    </div>
                  </div>
                  
                  <!-- <div class="mdl-cell mdl-cell--4-col">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height" style="width: 100%;">
                      <input class="mdl-textfield__input" type="text" required id="about" name="about" readonly tabIndex="-1">
                      <label for="about">
                          <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                      </label>
                      <label for="about" class="mdl-textfield__label">Tell Us More About Youself</label>
                      <ul for="about" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                          <li class="mdl-menu__item">CrossFit Fan!</li>
                          <li class="mdl-menu__item">Elite Athlete</li>
                          <li class="mdl-menu__item">Box Owner/Coach</li>
                          <li class="mdl-menu__item">Media/Sponsor</li>
                      </ul>
                    </div>
                  </div> -->

                  <div class="mdl-layout-spacer"></div>
                </div>
                <div class="mdl-grid fields">
                  <div class="mdl-layout-spacer"></div>

                  <div class="mdl-cell mdl-cell--4-col">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="mdl-textfield__input" type="text" id="website" name="website">
                      <label class="mdl-textfield__label" for="website">Website</label>
                    </div>
                  </div>

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