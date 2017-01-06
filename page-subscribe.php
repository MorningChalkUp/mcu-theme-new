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
              <div class="mdl-grid fields">
                <div class="mdl-layout-spacer"></div>
                <div class="mdl-cell mdl-cell--4-col">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="fname" name="fname">
                    <label class="mdl-textfield__label" for="fname">First Name</label>
                  </div>
                </div>
                <div class="mdl-layout-spacer"></div>
                <div class="mdl-cell mdl-cell--4-col">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="lname" name="lname">
                    <label class="mdl-textfield__label" for="lname">Last Name</label>
                  </div>
                </div>
                <div class="mdl-layout-spacer"></div>
              </div>
              <div class="mdl-grid fields">
                <div class="mdl-layout-spacer"></div>
                <div class="mdl-cell mdl-cell--4-col">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="email" name="email">
                    <label class="mdl-textfield__label" for="email">Email</label>
                  </div>
                </div>
                <div class="mdl-layout-spacer"></div>
                <div class="mdl-cell mdl-cell--4-col">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="zip" name="zip">
                    <label class="mdl-textfield__label" for="zip">Zip Code</label>
                  </div>
                </div>
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
                <div class="mdl-cell mdl-cell--4-col">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height" style="width: 100%;">
                    <input class="mdl-textfield__input" type="text" required id="about" name="about" readonly tabIndex="-1">
                    <label for="about">
                        <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                    </label>
                    <label for="about" class="mdl-textfield__label">*Tell Us More About Youself</label>
                    <ul for="about" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                        <li class="mdl-menu__item">CrossFit Fan!</li>
                        <li class="mdl-menu__item">Elite Athlete</li>
                        <li class="mdl-menu__item">Box Owner/Coach</li>
                        <li class="mdl-menu__item">Media/Sponsor</li>
                    </ul>
                  </div>
                </div>
                <div class="mdl-layout-spacer"></div>
              </div>
              <div class="mdl-grid fields">
                <div class="mdl-layout-spacer"></div>
                <div class="mdl-cell mdl-cell--4-col">
                  <a href="/thank-you" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
                    Subscribe
                  </a>
                </div>
                <div class="mdl-layout-spacer"></div>
                <div class="mdl-cell mdl-cell--4-col">
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