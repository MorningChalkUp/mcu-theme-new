<?php
  $error = $_GET['e'];
?>

<?php get_header(); ?>

<div id="fb-root"></div>
<script>
function statusChangeCallback(response) {
  if (response.status === 'connected') {
    mcu_fb_signup();
  }
}

function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}


(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=1635216993444923";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function mcu_fb_signup() {
  FB.api('/me?fields=name,email', function(response) {
    $('#FBID').val(response.id);
    $('#full-name').val(response.name);
    $('#email').val(response.email);
    $('#about').val('CrossFit Fan!');
    $('#subscribe').submit();
  });
}
</script>

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
                  <img src="<?php echo get_template_directory_uri(); ?>/img/chalkup.png" alt="Morning Chalk Up Europe" style="max-width: 370px;width: 100%;display: block;margin: 0 auto 10px auto;">
                  The Morning Chalk Up is the daily newsletter for people who do CrossFit<sup style="font-size: small;">&reg;</sup>. Get the email that athletes, insiders and fans are reading every morning.
                </div>

                <div class="mdl-layout-spacer"></div>
              </div>
              <?php if (isset($error)): ?>
              <div class="mdl-grid">
                
                <div class="mdl-layout-spacer"></div>

                <div class="mdl-cell mdl-cell--6-col error" style="border-radius: 5px; border: 1px solid #ebccd1; padding: 5px; background: #f2dede; color: #a94442; text-align: center;">
                  <p><strong>The below fields are required:</strong></p>
                  <?php
                    foreach ($error as $e => $v) {
                      switch ($e) {
                        case 'email':
                          echo 'Email<br>';
                          break;
                        case 'full-name':
                          echo 'Full Name<br>';
                          break;
                        case 'country':
                          echo 'Country<br>';
                          break;
                        case 'about':
                          echo 'Tell Us More About Youself<br>';
                          break;
                        case 'list':
                          echo 'Subscribe To';
                      }
                    }
                  ?>
                </div>

                <div class="mdl-layout-spacer"></div>
              </div>
              <?php endif; ?>

              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col center">
                  <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true" scope="public_profile,email,user_location" onlogin="checkLoginState();"></div>
                  <!-- <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
                  </fb:login-button> -->

                  <div id="status">
                  </div>
                </div>
              </div>

              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col center">
                  Or
                </div>
              </div>

              <form action="/process/fb-process.php" id="subscribe" method="post">
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
                      <input class="mdl-textfield__input" type="text" id="affiliate" name="affiliate">
                      <label class="mdl-textfield__label" for="affiliate">Search For Your Box</label>
                    </div>
                  </div>

                  <div class="mdl-layout-spacer"></div>

                  <div class="mdl-cell mdl-cell--4-col">
                    <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label">
                      <select class="mdl-selectfield__select" id="about" name="about">
                        <option value=""></option>
                        <option value="CrossFit Fan!">CrossFit Fan!</option>
                        <option value="Elite Athlete">Elite Athlete</option>
                        <option value="Box Owner/Coach">Box Owner/Coach</option>
                        <option value="Media">Media</option>
                        <option value="Vendor">Vendor</option>
                      </select>
                      <label class="mdl-selectfield__label" for="about">Tell Us More About Youself *</label>
                    </div>
                  </div>

                  <!-- <div class="mdl-select mdl-js-select mdl-select--floating-label">
                    <select class="mdl-select__input" id="about" name="about">
                      <option value=""></option>
                      <option value="CrossFit Fan!">CrossFit Fan!</option>
                      <option value="Elite Athlete">Elite Athlete</option>
                      <option value="Box Owner/Coach">Box Owner/Coach</option>
                      <option value="Media">Media</option>
                      <option value="Vendor">Vendor</option>
                    </select>
                    <label class="mdl-select__label" for="about">Tell Us More About Youself *</label>
                  </div> -->

                  <div class="mdl-layout-spacer"></div>
                </div>
                <div class="mdl-grid fields">
                  <div class="mdl-layout-spacer"></div>

                  <div class="mdl-cell mdl-cell--4-col">
                    Subscribe to:
                    
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="us">
                      <input type="checkbox" checked="checked" id="us" class="mdl-checkbox__input" name="us">
                      <span class="mdl-checkbox__label">Morning Chalk Up</span>
                    </label>
                    
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="eu">
                      <input type="checkbox" id="eu" class="mdl-checkbox__input" name="eu">
                      <span class="mdl-checkbox__label">Morning Chalk Up Europe</span>
                    </label>

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
                    <input type="hidden" name="FBID" id="FBID" value="">
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