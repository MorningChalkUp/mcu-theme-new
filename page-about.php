<?php get_header(); ?>
<div id="banner" class="banner-min" style="background-image:url('<?php bloginfo('stylesheet_directory') ?>/img/racked.jpg');">
  <div class="wrapper">
    <h2 class="post-title">The Morning <span>Chalk Up</span> is the newsletter for people who do CrossFit.</h2>
  </div>
</div>
<main class="mdl-layout__content">
  <div class="page-content">
    <article class="main about">

      <section class="story mdl-grid">
        <div class="mdl-layout-spacer"></div>
        <div class="mdl-cell mdl-cell--8-col center">
          <h2>Our Story</h2>
          <p>We created the Morning Chalk Up in March 2016 to deliver the best CrossFit and elite fitness content together in one email Monday through Friday. Today we’ve become the industry’s go-to source for staying up to date with the CrossFit community.</p>
          <hr>
          <h2>Our Mission</h2>
          <p>The Morning Chalk Up’s mission is to educate, inform and inspire. To find relevant and timely stories that contribute to the whole community and each reader’s growth as an athlete. We believe that a giving community is a growing community which is why we commit resources to help those in need thrive and grow.</p>
        </div>
        <div class="mdl-layout-spacer"></div>
      </section>
      <section class="team mdl-grid center">
        <div class="mdl-cell mdl-cell--12-col">
          <h2>The Team</h2>
          <div class="mdl-grid">
            <section class="team-member mdl-cell mdl-cell--4-col">
              <div class="img"><img class="circle" src="<?php echo get_template_directory_uri(); ?>/img/justin.png" alt="Justin LoFranco"></div>
              <h4>Justin LoFranco</h4>
              <div class="info">
                <strong>Founder // Adventurer</strong><br>
                Location: California
              </div>
              <blockquote class="small">
                “Write it on your heart that every day is the best day in the year. He is rich who owns the day, and no one owns the day who allows it to be invaded with fret and anxiety.” — Ralph Waldo Emerson
              </blockquote>
              <a class="mdl-button" href="mailto:justin@morningchalkup.com"><i class="mdi mdi-email"></i> Email Me</a>
            </section>
            <section class="team-member mdl-cell mdl-cell--4-col">
              <div class="img"><img class="circle" src="<?php echo get_template_directory_uri(); ?>/img/eric.png" alt="Eric Sherred"></div>
              <h4>Eric Sherred</h4>
              <div class="info">
                <strong>Tech Guru // Cat Herder</strong><br>
                Location: Florida
              </div>
              <blockquote class="small">“I must not fear. Fear is the mind-killer. Fear is the little-death that brings total obliteration. I will face my fear. I will permit it to pass over me and through me. And when it has gone past I will turn the inner eye to see its path. Where the fear has gone there will be nothing. Only I will remain.” — Frank Herbert</blockquote>
              <a class="mdl-button" href="mailto:eric@morningchalkup.com"><i class="mdi mdi-email"></i> Email Me</a>
            </section>
            <section class="team-member mdl-cell mdl-cell--4-col">
              <div class="img">
                <img class="circle" src="<?php echo get_template_directory_uri(); ?>/img/mat.jpg" alt="Mat Masoni">
              </div>
              <h4>Mat Masoni</h4>
              <div class="info">
                <strong>Designer // Beer Snob</strong><br>
                Location: California
              </div>
              <blockquote class="small">
                “We are the musicmakers, and we are the dreamers of dreams” — Willy Wonka
              </blockquote>
              <a class="mdl-button" href="mailto:mat@morningchalkup.com"><i class="mdi mdi-email"></i> Email Me</a>
            </section>
          </div>
        </div>
      </section>
      <div id="instagram">
        <h2 class="center">Morning Chalk Up on Instagram</h2>
        
        <div class="insta-container">
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
              echo '<a class="insta-shot" href="' . $image['link'] . '" target="_blank" style="background-image:url('.$image['images']['standard_resolution']['url'].');"></a>';
          }
        ?>
        </div>


      </div>

    </article>

  <?php get_template_part( 'templates/subscribe' ); ?>

  

</main>

<?php get_footer(); ?>