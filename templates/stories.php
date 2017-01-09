<?php 
  $cat_id = get_category_by_slug('story');
  $feature = 
  $stories = 
?>

<section class="mdl-cell mdl-cell--12-col main archive home">
  <div class="mdl-grid">
    <div class="mdl-layout-spacer"></div>
    <div class="mdl-cell mdl-cell--8-col title">
      <a href="#">Latest Stories</a>
    </div>
    <div class="mdl-layout-spacer"></div>
  </div>
  <div class="mdl-grid">

    <article class="mdl-cell mdl-cell--8-col sub-feature" style="background-image: url('img/annie.png');">
      <div class="content">
        <div class="category"><mark>TIDBITS</mark></div>
        <div class="title"><mark>The CrossFit Games Are Headed to Madison</mark></div>
      </div>
    </article>

    <article class="mdl-cell mdl-cell--4-col quote">
      <div id="quote2">
        “A plan b is a plan to fail. A plan b is a plan to fail. A plan b is a plan to fail. A plan b is a plan to fail.”
        <span>- Ben Bergeron</span>
      </div>
    </article>

    <!-- 6 from stories -->
    <!-- <?php get_template_part( 'templates/teaser' ); ?> -->
  </div>
</section>