<?php
/**
 * Template Name: Schedule
 */
?>

<?php
if ( has_post_thumbnail() ) {
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
  $thumb_url = $thumb_url_array[0];
}

$tags = wp_get_post_tags( $post->ID ); ?>

<?php get_header(); ?>

<main class="mdl-layout__content">
  <div class="page-content">
    <div class="mdl-grid">
      <article class="mdl-cell mdl-cell--12-col main schedule">
        <h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
        <!-- <div class="meta">
          <?php the_date('F j, Y'); ?><br>
        </div> -->
        <div class="share">
          <button class="mdl-button js-share-facebook fb">
            <i class="mdi mdi-facebook-box"></i> Facebook
          </button>
          <button class="mdl-button js-share-twitter tw">
            <i class="mdi mdi-twitter"></i> Twitter
          </button>
          <button class="mdl-button js-share-email em">
            <i class="mdi mdi-email"></i> Email
          </button>
        </div>
        <?php if ($thumb_url): ?>
        <div class="img">
          <img class="feature-img" src="<?php echo $thumb_url; ?>" alt="<?php the_title(); ?>">
        </div>
        <?php endif ?>
      </article>
    </div>
    <div class="mdl-grid tabs">
      <div class="mdl-cell mdl-cell--3-col mdl-grid">
        <ul class="demo-list-item mdl-list" style="width: 100%;">
          <a onclick="tab('#monday', this);">
            <li class="mdl-list__item active">
              <span class="mdl-list__item-primary-content">
                Monday, July 31
              </span>
            </li>
          </a>
          <a onclick="tab('#tuesday', this);">
            <li class="mdl-list__item">
              <span class="mdl-list__item-primary-content">
                Tuesday, August 1
              </span>
            </li>
          </a>
          <a onclick="tab('#wednesday', this);">
            <li class="mdl-list__item">
              <span class="mdl-list__item-primary-content">
                Wednesday, August 2
              </span>
            </li>
          </a>
          <a onclick="tab('#thursday', this);">
            <li class="mdl-list__item">
              <span class="mdl-list__item-primary-content">
                Thursday, August 3
              </span>
            </li>
          </a>
          <a onclick="tab('#friday', this);">
            <li class="mdl-list__item">
              <span class="mdl-list__item-primary-content">
                Friday, August 4
              </span>
            </li>
          </a>
          <a onclick="tab('#saturday', this);">
            <li class="mdl-list__item">
              <span class="mdl-list__item-primary-content">
                Saturday, August 5
              </span>
            </li>
          </a>
          <a onclick="tab('#sunday', this);">
            <li class="mdl-list__item">
              <span class="mdl-list__item-primary-content">
                Sunday, August 6
              </span>
            </li>
          </a>
          <a onclick="tab('#monday-2', this);">
            <li class="mdl-list__item">
              <span class="mdl-list__item-primary-content">
                Monday, August 7
              </span>
            </li>
          </a>
        </ul>
      </div>
      <div class="mdl-cell mdl-cell--9-col mdl-grid mdl-color--white mdl-shadow--2dp faq">
        <div class="mdl-cell mdl-cell--12-col mdl-cell--top day" id="monday">
          <h2>Monday, July 31</h2>
          <p><strong>ALL DAY</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#m1');"><i id="m1-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>Drop-In WOD with Reebok & FITAID @ CrossFit Connex and CrossFit Big Dane</div>

            <div id="m1" class="hidden answer">
              <div>Anyone who drops in for a WOD at CrossFIt Big Dane or CrossFit Connex gets a free FITAID RX after class and a chance to try on the new Reebok Nano Weave.</div>
              <div><strong>Location:</strong> CrossFit Connex or CrossFit Big Dane</div>
            </div>
          </div>

          <div class="question-section">
            <div class="question" onclick="toggel('#m2');"><i id="m2-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>Rogue Fitness Beers & Brats @ State Street Brats</div>

            <div id="m2" class="hidden answer">
              <div>The Rogue Fitness team is taking over State Street Brats in downtown Madison. Come and enjoy a cold one with the team and special deals all day long. </div>
              <div><strong>Location:</strong> State Street Brats</div>
            </div>
          </div>
        </div>

        <div class="mdl-cell mdl-cell--12-col mdl-cell--top day hidden" id="tuesday">
          <h2>Tuesday, August 1</h2>
          <p><strong>ALL DAY</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#t1');"><i id="t1-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>Drop-In WOD with Reebok & FITAID @ CrossFit Recursive</div>

            <div id="t1" class="hidden answer">
              <div>Anyone who drops in for a WOD at CrossFIt Recursive gets a free FITAID RX after class and a chance to try on the new Reebok Nano Weave.</div>
              <div><strong>Location:</strong> CrossFit Recursive</div>
            </div>
          </div>

          <div class="question-section">
            <div class="question" onclick="toggel('#t2');">
              <i id="t2-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Rogue Fitness Beers & Brats @ State Street Brats
            </div>

            <div id="t2" class="hidden answer">
              <div>
                The Rogue Fitness team is taking over State Street Brats in downtown Madison. Come and enjoy a cold one with the team and special deals all day long. 
              </div>
              <div>
                <strong>Location:</strong> CrossFit Recursive
              </div>
            </div>
          </div>
        </div>

        <div class="mdl-cell mdl-cell--12-col mdl-cell--top day hidden" id="wednesday">
          <h2>Wednesday, August 2</h2>
          <p><strong>General</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#m1');"><i id="m1-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>How many points do you earn per new subscriber?</div>

            <div id="m1" class="hidden answer">You get 1 point per subscriber.</div>
          </div>
        </div>

        <div class="mdl-cell mdl-cell--12-col mdl-cell--top day hidden" id="thursday">
          <h2>Thursday, August 3</h2>
          <p><strong>General</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#m1');"><i id="m1-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>How many points do you earn per new subscriber?</div>

            <div id="m1" class="hidden answer">You get 1 point per subscriber.</div>
          </div>
        </div>

        <div class="mdl-cell mdl-cell--12-col mdl-cell--top day hidden" id="friday">
          <h2>Friday, August 4</h2>
          <p><strong>General</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#m1');"><i id="m1-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>How many points do you earn per new subscriber?</div>

            <div id="m1" class="hidden answer">You get 1 point per subscriber.</div>
          </div>
        </div>

        <div class="mdl-cell mdl-cell--12-col mdl-cell--top day hidden" id="saturday">
          <h2>Saturday, August 5</h2>
          <p><strong>General</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#m1');"><i id="m1-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>How many points do you earn per new subscriber?</div>

            <div id="m1" class="hidden answer">You get 1 point per subscriber.</div>
          </div>
        </div>

        <div class="mdl-cell mdl-cell--12-col mdl-cell--top day hidden" id="sunday">
          <h2>Sunday, August 6</h2>
          <p><strong>General</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#m1');"><i id="m1-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>How many points do you earn per new subscriber?</div>

            <div id="m1" class="hidden answer">You get 1 point per subscriber.</div>
          </div>
        </div>

        <div class="mdl-cell mdl-cell--12-col mdl-cell--top day hidden" id="monday-2">
          <h2>Monday, August 7</h2>
          <p><strong>General</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#m1');"><i id="m1-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>How many points do you earn per new subscriber?</div>

            <div id="m1" class="hidden answer">You get 1 point per subscriber.</div>
          </div>
        </div>

        <script>
          function tab(id, tab) {
            $('.day').addClass('hidden');
            $(id).removeClass('hidden');
            $('li.mdl-list__item').removeClass('active');
            $('li.mdl-list__item', tab).addClass('active');
          }
        </script>

      </div>
    </div>

  <?php get_template_part( 'templates/subscribe' ); ?>

  <?php get_template_part( 'templates/footer' ); ?>

</main>

<?php get_footer(); ?>