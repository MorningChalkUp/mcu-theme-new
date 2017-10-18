<?php get_header(); ?>

<main class="mdl-layout__content">
  <div class="page-content">
    <article class="main about">

      <section class="hero mdl-grid">
        <div class="mdl-cell mdl-cell--12-col title">
          <h1>The Morning <span>Chalk Up</span> is the newsletter for people who do CrossFit.</h1> 
        </div>
      </section>
      <section class="story mdl-grid">
        <div class="mdl-layout-spacer"></div>
        <div class="mdl-cell mdl-cell--8-col">
          <h2>Our Story</h2>
          <p>We created the Morning Chalk Up in March 2016 to deliver the best CrossFit and elite fitness content together in one email Monday through Friday. Today we’ve become the industry’s go-to source for staying up to date with the CrossFit community.</p>
        </div>
        <div class="mdl-layout-spacer"></div>
      </section>
      <section class="mission mdl-grid">
        <div class="mdl-layout-spacer"></div>
        <div class="mdl-cell mdl-cell--8-col">
          <h2>Our Mission</h2>
          <p>The Morning Chalk Up’s mission is to educate, inform and inspire. To find relevant and timely stories that contribute to the whole community and each reader’s growth as an athlete. We believe that a giving community is a growing community which is why we commit resources to help those in need thrive and grow.</p>
        </div>
        <div class="mdl-layout-spacer"></div>
      </section>
      <section class="team mdl-grid">
        <div class="mdl-layout-spacer"></div>
        <div class="mdl-cell mdl-cell--10-col">
          <h2>The Team</h2>
          <div class="mdl-grid">
            <section class="team-member mdl-cell mdl-cell--6-col">
              <div class="img">
                <img class="circle" src="<?php echo get_template_directory_uri(); ?>/img/justin.png" alt="Justin LoFranco">
              </div>
              <div class="name">
                Justin LoFranco
              </div>
              <div class="info">
                <strong>Founder // Adventurer</strong>
                Location: California
              </div>
              <div class="quote">
                <div class="title">FAVORITE QUOTE</div><br>
                “Write it on your heart that every day is the best day in the year. He is rich who owns the day, and no one owns the day who allows it to be invaded with fret and anxiety.” — Ralph Waldo Emerson
              </div>
              <div class="email">
                <a class="mdl-button" href="mailto:justin@morningchalkup.com">
                  <i class="mdi mdi-email"></i> Email Me
                </a>
              </div>
            </section>
            <section class="team-member mdl-cell mdl-cell--6-col">
              <div class="img">
                <img class="circle" src="<?php echo get_template_directory_uri(); ?>/img/eric.png" alt="Eric Sherred">
              </div>
              <div class="name">
                Eric Sherred
              </div>
              <div class="info">
                <strong>Tech Guru // Cat Herder</strong>
                Location: Florida
              </div>
              <div class="quote">
                <div class="title">FAVORITE QUOTE</div>
                “I must not fear. Fear is the mind-killer. Fear is the little-death that brings total obliteration. I will face my fear. I will permit it to pass over me and through me. And when it has gone past I will turn the inner eye to see its path. Where the fear has gone there will be nothing. Only I will remain.” — Frank Herbert
              </div>
              <div class="email">
                <a class="mdl-button" href="mailto:eric@morningchalkup.com">
                  <i class="mdi mdi-email"></i> Email Me
                </a>
              </div>
            </section>
            <!-- <section class="team-member mdl-cell mdl-cell--6-col">
              <div class="img">
                <img class="circle" src="<?php echo get_template_directory_uri(); ?>/img/jesse-krim.png" alt="Jesse Krim">
              </div>
              <div class="name">
                Jesse Krim
              </div>
              <div class="info">
                <strong>Events Curator // Travel Aficionado</strong>
                Location: New York
              </div>
              <div class="quote">
                <div class="title">FAVORITE QUOTE</div><br>
                “Be who you are and say what you feel, because those who mind don’t matter, and those who matter don’t mind.” — Bernard M Baruch
              </div>
            </section>
            <section class="team-member mdl-cell mdl-cell--6-col">
              <div class="img">
                <img class="circle" src="<?php echo get_template_directory_uri(); ?>/img/jesse-f.png" alt="Jesse Friedl">
              </div>
              <div class="name">
                Jesse Friedl
              </div>
              <div class="info">
                <strong>Writer // Pizza Lover</strong>
                Location: Colorado
              </div>
              <div class="quote">
                <div class="title">FAVORITE QUOTE</div><br>
                “Courage does not always roar. Sometimes it is a quiet voice at the end of the day saying, 'I will try again tomorrow.'” — Maryanne Radmacker
              </div>
            </section> -->
          </div>
        </div>
        <div class="mdl-layout-spacer"></div>
      </section>
      <section class="instagram mdl-grid">
        <div class="mdl-layout-spacer"></div>
        <div class="mdl-cell mdl-cell--10-col">
          <h2>MORNING CHALK UP ON INSTAGRAM</h2>
        </div>
        <div class="mdl-layout-spacer"></div>
        <div class="mdl-grid">
        <?php 
          $url = 'https://api.instagram.com/v1/users/3055294744/media/recent/?access_token=3055294744.1b0f870.d01377c913fa401a8c6e5134a325ce4d&count=12';

          $ch = curl_init($url);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_TIMEOUT, 10);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
          $r = curl_exec($ch);
          curl_close($ch);
          $result = json_decode($r, true);

          foreach ($result['data'] as $image) {
            echo '<div class="mdl-cell mdl-cell--2-col">';
              echo '<a href="' . $image['link'] . '" target="_blank"><img src="' . $image['images']['standard_resolution']['url'] . '"></a>';
            echo '</div>';
          }
        ?>
        </div>


      </section>

    </article>

  <?php get_template_part( 'templates/subscribe' ); ?>

  <?php get_template_part( 'templates/footer' ); ?>

</main>

<?php get_footer(); ?>