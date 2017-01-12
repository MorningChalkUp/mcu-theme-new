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
          <p>The Morning Chalk Up’s mission is to educate, inform and inspire. To find relevelant and timely stories that contribute to the whole community and each reader’s growth as an athlete. We believe that a giving community is a growing community which is why we commit resources to help those in need thrive and grow.</p>
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
                FAVORITE QUOTE<br>
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
                <div>FAVORITE QUOTE</div>
                “I must not fear. Fear is the mind-killer. Fear is the little-death that brings total obliteration. I will face my fear. I will permit it to pass over me and through me. And when it has gone past I will turn the inner eye to see its path. Where the fear has gone there will be nothing. Only I will remain.” — Frank Herbert
              </div>
              <div class="email">
                <a class="mdl-button" href="mailto:eric@morningchalkup.com">
                  <i class="mdi mdi-email"></i> Email Me
                </a>
              </div>
            </section>
            <section class="team-member mdl-cell mdl-cell--4-col">
              <div class="img">
                <img class="circle" src="<?php echo get_template_directory_uri(); ?>/img/jesse-k.png" alt="Jesse Krim">
              </div>
              <div class="name">
                Jesse Krim
              </div>
              <div class="info">
                <strong>Events Curator // CrossFit Assassin</strong>
                Location: New York
              </div>
              <div class="quote">
                FAVORITE QUOTE<br>
                “Be who you are and say what you feel, because those who mind don’t matter, and those who matter don’t mind.”
              </div>
            </section>
            <section class="team-member mdl-cell mdl-cell--4-col">
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
                FAVORITE QUOTE<br>
                “Write it on your heart that every day is the best day in the year. He is rich who owns the day, and no one owns the day who allows it to be invaded with fret and anxiety.” — Ralph Waldo Emerson
              </div>
            </section>
            <section class="team-member mdl-cell mdl-cell--4-col">
              <div class="img">
                <img class="circle" src="<?php echo get_template_directory_uri(); ?>/img/jkatie.jpg" alt="Katie Breazeal">
              </div>
              <div class="name">
                Katie Breazeal
              </div>
              <div class="info">
                <strong>Chief Motivation Officer // Venus de Milo</strong>
                Location: Texas
              </div>
              <div class="quote">
                FAVORITE QUOTE<br>
                It matters not how strait the gate,<br>
                How charged with punishments the scroll,<br>
                I am the master of my fate,<br>
                I am the captain of my soul.<br>
                — William Ernest Henley
              </div>
            </section>
          </div>
        </div>
        <div class="mdl-layout-spacer"></div>
      </section>
      <section class="instagram"></section>

    </article>

  <?php get_template_part( 'templates/subscribe' ); ?>

  <?php get_template_part( 'templates/footer' ); ?>

</main>

<?php get_footer(); ?>