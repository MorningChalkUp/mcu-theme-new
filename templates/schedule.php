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
        <div class="content">
          <?php the_content(); ?>
        </div>
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
        <!-- <div class="img">
          <img class="feature-img" src="<?php echo $thumb_url; ?>" alt="<?php the_title(); ?>">
        </div> -->
        <?php endif ?>
      </article>
    </div>
    <div class="mdl-grid tabs">
      <div class="mdl-cell mdl-cell--3-col mdl-grid">
        <ul class="demo-list-item mdl-list" style="width: 100%;">
          <a onclick="tab('#monday', this);">
            <li class="mdl-list__item">
              <span class="mdl-list__item-primary-content">
                Monday, July 31
              </span>
            </li>
          </a>
          <a onclick="tab('#tuesday', this);">
            <li class="mdl-list__item active">
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
        </ul>
      </div>
      <div class="mdl-cell mdl-cell--9-col mdl-grid mdl-color--white mdl-shadow--2dp faq">
        <div class="mdl-cell mdl-cell--12-col mdl-cell--top day hidden" id="monday">
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

        <div class="mdl-cell mdl-cell--12-col mdl-cell--top day" id="tuesday">
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
          <p><strong>ALL DAY</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#w1');">
              <i id="w1-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Rogue Fitness Beers & Brats @ State Street Brats
            </div>

            <div id="w1" class="hidden answer">
              <div>
                The Rogue Fitness team is taking over State Street Brats in downtown Madison. Come and enjoy a cold one with the team and special deals all day long. 
              </div>
              <div>
                <strong>Location:</strong> CrossFit Recursive
              </div>
            </div>
          </div>

          <p><strong>4 - 6 PM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#w2');">
              <i id="w2-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Brute Strength Session @ CrossFit Foremost 
            </div>

            <div id="w2" class="hidden answer">
              <div>
                Brute Strength's Nick Fowler caching session on mindset. Sponsored by FITAID.
              </div>
              <div>
                <strong>Location:</strong> CrossFit Foremost
              </div>
            </div>
          </div>

          <p><strong>4 - 8 PM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#w3');">
              <i id="w3-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Beer & Barbells @ Wisconsin Brewing Company
            </div>

            <div id="w3" class="hidden answer">
              <div>
                Come out to Wisconsin Brewing Company for an evening of all things health and fitness. We'll kick off the night with an energizing workout by CrossFit Adept that will challenge both experienced and beginner fitness fanatics alike. Cool down afterwards with a refreshing pint of beer and explore local health and wellness resources including: Dragonfly Hot Yoga, Flyght Cycle, NessAlla Kombucha, UW Provisions, Freshii, LulaRoe, Bowl of Heaven, UW Athletic Training students, and chair massages.
              </div>
              <div><a target="_blank" href="http://www.visitmadison.com/event/beer-%26-barbells/41742/?utm_source=The+Morning+Chalk+Up&utm_campaign=events-schedule&utm_medium=link">Details</a></div>
              <div>
                <strong>Location:</strong> Wisconsin Brewing Company
              </div>
            </div>
          </div>

        </div>

        <div class="mdl-cell mdl-cell--12-col mdl-cell--top day hidden" id="thursday">
          <h2>Thursday, August 3</h2>
          <p><strong>ALL DAY</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#th1');">
              <i id="th1-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Rogue Fitness Beers & Brats @ State Street Brats
            </div>

            <div id="th1" class="hidden answer">
              <div>
                The Rogue Fitness team is taking over State Street Brats in downtown Madison. Come and enjoy a cold one with the team and special deals all day long. 
              </div>
              <div>
                <strong>Location:</strong> CrossFit Recursive
              </div>
            </div>
          </div>

          <div class="question-section">
            <div class="question" onclick="toggel('#th2');">
              <i id="th2-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Riding the Mechanical Bull @ Paleoethics Tent
            </div>

            <div id="th2" class="hidden answer">
              <div>
                Come over to Paleoethics and ride their mechanical bull at the Paleoethics tent in Vendor Village.
              </div>
              <div>
                <strong>Location:</strong> Paleoethics Tent in Vendor Village
              </div>
            </div>
          </div>

          <div class="question-section">
            <div class="question" onclick="toggel('#th3');">
              <i id="th3-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Beer Pong @ Kill Cliff Tent
            </div>

            <div id="th3" class="hidden answer">
              <div>
                Show off your beer pong skills on some special Kill Cliff branded beer pong tables, paired with some vodka and your favorite Kill Cliff flavors.
              </div>
              <div>
                <strong>Location:</strong> Kill Cliff Tent in Vendor Village
              </div>
            </div>
          </div>

          <p><strong>10 AM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#th4');">
              <i id="th4-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              ROMWOD with Friends @ ROMWOD
            </div>

            <div id="th4" class="hidden answer">
              <div>
                <strong>Location:</strong> ROMWOD tent in Vendor Village
              </div>
            </div>
          </div>

          <p><strong>12 PM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#th5');">
              <i id="th5-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              ROMWOD with Friends @ ROMWOD
            </div>

            <div id="th5" class="hidden answer">
              <div>
                <strong>Location:</strong> ROMWOD tent in Vendor Village
              </div>
            </div>
          </div>

          <p><strong>2 PM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#th6');">
              <i id="th6-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              ROMWOD with Friends @ ROMWOD
            </div>

            <div id="th6" class="hidden answer">
              <div>
                <strong>Location:</strong> ROMWOD tent in Vendor Village
              </div>
            </div>
          </div>

          <p><strong>3 - 4 PM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#th7');">
              <i id="th7-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Brute Strength OLY Clinic @ FITAID Tent
            </div>

            <div id="th7" class="hidden answer">
              <div>
                The Brute Strength coaching staff will be holding an Olympic weightlifting clinic at the FITAID booth in Vendor Village.
              </div>
              <div>
                <strong>Location:</strong> FITAID Tent in Vendor Village
              </div>
            </div>
          </div>

          <p><strong>4 PM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#th8');">
              <i id="th8-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              ROMWOD with Friends @ ROMWOD
            </div>

            <div id="th8" class="hidden answer">
              <div>
                <strong>Location:</strong> ROMWOD tent in Vendor Village
              </div>
            </div>
          </div>

          <p><strong>6 - 7 PM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#th9');">
              <i id="th9-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Caffeine & Kilos @CrossFit Connex
            </div>

            <div id="th9" class="hidden answer">
              <div>
                Free weightlifting clinic and max out session hosted by Caffeine & Kilos. Sponsored by FITAID.
              </div>
              <div>
                <strong>Location:</strong> CrossFit Connex
              </div>
            </div>
          </div>

          <p><strong>6 - 9 PM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#th10');">
              <i id="th10-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Margaux Alvarez’s Wine Release and Tasting @ Graft Wine Bar
            </div>

            <div id="th10" class="hidden answer">
              <div>
                Join Dan Bailey, Chyna Cho, and Emily Abott as Margaux Alvarez and The Vine Yard release their first vintage to the public.
              </div>
              <div><a href="https://www.thevineyard.space/wine-release/" target="_blank">Grab a Ticket.</a></div>
              <div>
                <strong>Location:</strong> Graft Wine Bar
              </div>
            </div>
          </div>


        </div>

        <div class="mdl-cell mdl-cell--12-col mdl-cell--top day hidden" id="friday">
          <h2>Friday, August 4</h2>
          <p><strong>ALL DAY</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#f1');">
              <i id="f1-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Rogue Fitness Beers & Brats @ State Street Brats
            </div>

            <div id="f1" class="hidden answer">
              <div>
                The Rogue Fitness team is taking over State Street Brats in downtown Madison. Come and enjoy a cold one with the team and special deals all day long. 
              </div>
              <div>
                <strong>Location: </strong> State Street Brats
              </div>
            </div>
          </div>

          <div class="question-section">
            <div class="question" onclick="toggel('#f2');">
              <i id="f2-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Riding the Mechanical Bull @ Paleoethics Tent
            </div>

            <div id="f2" class="hidden answer">
              <div>
                Come over to Paleoethics and ride their mechanical bull at the Paleoethics tent in Vendor Village.
              </div>
              <div>
                <strong>Location: </strong> Paleoethics Tent in Vendor Village
              </div>
            </div>
          </div>

          <div class="question-section">
            <div class="question" onclick="toggel('#f12');">
              <i id="f12-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Beer Pong @ Kill Cliff Tent
            </div>

            <div id="f12" class="hidden answer">
              <div>
                Show off your beer pong skills on some special Kill Cliff branded beer pong tables, paired with some vodka and your favorite Kill Cliff flavors.
              </div>
              <div>
                <strong>Location:</strong> Kill Cliff Tent in Vendor Village
              </div>
            </div>
          </div>

          <p><strong>10 AM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#f3');">
              <i id="f3-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              ROMWOD with Friends @ ROMWOD
            </div>

            <div id="f3" class="hidden answer">
              <div>
                <strong>Location:</strong> ROMWOD tent in Vendor Village
              </div>
            </div>
          </div>

          <div class="question-section">
            <div class="question" onclick="toggel('#f4');">
              <i id="f4-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              RWOD with Sam Dancer and KILL CLIFF @ CrossFit Foremost
            </div>

            <div id="f4" class="hidden answer">
              <div>
                KILL CLIFF community workout at CrossFit Foremost with KILL CLIFF Prez, Sam Dancer, and Logan Farr. 
              </div>
              <div>
                <a href="http://www.facebook.com/killcliff" target="_blank">Register.</a>
              </div>
              <div>
                <strong>Location:</strong> CrossFit Foremost
              </div>
            </div>
          </div>

          <p><strong>11 - 12 PM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#f5');">
              <i id="f5-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Logan Aldridge Meet and Greet @ FITAID Tent
            </div>

            <div id="f5" class="hidden answer">
              <div>
                Come grab a FITAID and hangout with Logan Aldridge.
              </div>
              <div>
                <strong>Location:</strong> FITAID Tent in Vendor Village
              </div>
            </div>
          </div>

          <p><strong>12 PM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#f6');">
              <i id="f6-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              ROMWOD with Friends @ ROMWOD
            </div>

            <div id="f6" class="hidden answer">
              <div>
                <strong>Location:</strong> ROMWOD tent in Vendor Village
              </div>
            </div>
          </div>

          <p><strong>2 PM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#f7');">
              <i id="f7-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              ROMWOD with Friends @ ROMWOD
            </div>

            <div id="f7" class="hidden answer">
              <div>
                <strong>Location:</strong> ROMWOD tent in Vendor Village
              </div>
            </div>
          </div>

          <p><strong>3 - 4 PM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#f8');">
              <i id="f8-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Gymnastics Seminar with Dusty Hyland @ FITAID Tent
            </div>

            <div id="f8" class="hidden answer">
              <div>
                Join Dusty Hyland for a gymnastics seminar at the FITAID tent in Vendor Village.
              </div>
              <div>
                <strong>Location:</strong> FITAID Tent in Vendor Village
              </div>
            </div>
          </div>

          <p><strong>4 PM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#f9');">
              <i id="f9-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              ROMWOD with Friends @ ROMWOD
            </div>

            <div id="f9" class="hidden answer">
              <div>
                <strong>Location:</strong> ROMWOD tent in Vendor Village
              </div>
            </div>
          </div>

          <p><strong>5 - 10 PM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#f10');">
              <i id="f10-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              VIP Party Sponsored by Kill Cliff and 5.11 Tactical Party @ Sky Club at Ovation 309
            </div>

            <div id="f10" class="hidden answer">
              <div>
                VIP party hosted by 5.11 Tactical and KILL CLIFF with Andy Stumpf, Sam Dancer, Brooke Ence, and more. 
              </div>
              <div>
                RSVP at the Kill Cliff booth.
              </div>
              <div>
                <strong>Location:</strong> Sky Club at Ovation 309
              </div>
            </div>
          </div>

          <p><strong>6 - 8 PM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#f11');">
              <i id="f11-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              FITAID Affiliates Box Appreciation Party @ FITAID Tent
            </div>

            <div id="f11" class="hidden answer">
              <div>
                A special BBQ, games and drinks for FITAID Affiliates only at the FITAID tent in Vendor Village.
              </div>
              <div>
                <strong>Location:</strong> FITAID Tent in Vendor Village
              </div>
            </div>
          </div>

        </div>

        <div class="mdl-cell mdl-cell--12-col mdl-cell--top day hidden" id="saturday">
          <h2>Saturday, August 5</h2>
          <p><strong>ALL DAY</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#sa1');">
              <i id="sa1-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Shante Cofield Meet and Greet @ RockTape Tent
            </div>

            <div id="sa1" class="hidden answer">
              <div>
                Physical therapist and CF-L1 coach Shante Cofield is hanging out at the RockTape tent all day. 
              </div>
              <div>
                <strong>Location:</strong> RockTape Tent in Vendor Village
              </div>
            </div>
          </div>

          <div class="question-section">
            <div class="question" onclick="toggel('#sa2');">
              <i id="sa2-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Rogue Fitness Beers & Brats @ State Street Brats
            </div>

            <div id="sa2" class="hidden answer">
              <div>
                The Rogue Fitness team is taking over State Street Brats in downtown Madison. Come and enjoy a cold one with the team and special deals all day long. 
              </div>
              <div>
                <strong>Location: </strong> State Street Brats
              </div>
            </div>
          </div>

          <div class="question-section">
            <div class="question" onclick="toggel('#sa3');">
              <i id="sa3-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Riding the Mechanical Bull @ Paleoethics Tent
            </div>

            <div id="sa3" class="hidden answer">
              <div>
                Come over to Paleoethics and ride their mechanical bull at the Paleoethics tent in Vendor Village.
              </div>
              <div>
                <strong>Location: </strong> Paleoethics Tent in Vendor Village
              </div>
            </div>
          </div>

          <div class="question-section">
            <div class="question" onclick="toggel('#sa14');">
              <i id="sa14-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Beer Pong @ Kill Cliff Tent
            </div>

            <div id="sa14" class="hidden answer">
              <div>
                Show off your beer pong skills on some special Kill Cliff branded beer pong tables, paired with some vodka and your favorite Kill Cliff flavors.
              </div>
              <div>
                <strong>Location:</strong> Kill Cliff Tent in Vendor Village
              </div>
            </div>
          </div>

          <p><strong>10 AM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#sa4');">
              <i id="sa4-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              ROMWOD with Friends @ ROMWOD
            </div>

            <div id="sa4" class="hidden answer">
              <div>
                <strong>Location:</strong> ROMWOD tent in Vendor Village
              </div>
            </div>
          </div>

          <p><strong>10:30 - 12:30 AM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#sa5');">
              <i id="sa5-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              WOD with Jackie Perez and Kenny Santucci @ CrossFit Sanctify
            </div>

            <div id="sa5" class="hidden answer">
              <div>
                Come do a WOD with Jackie Perez and Kenny Santucci at CrossFit Sanctify. Sponsored by FITAID.
              </div>
              <div>
                <strong>Location:</strong> CrossFit Sanctify
              </div>
            </div>
          </div>

          <p><strong>12 PM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#sa6');">
              <i id="sa6-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              ROMWOD with Friends @ ROMWOD
            </div>

            <div id="sa6" class="hidden answer">
              <div>
                <strong>Location:</strong> ROMWOD tent in Vendor Village
              </div>
            </div>
          </div>

          <p><strong>10:30 - 12:30 AM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#sa7');">
              <i id="sa7-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Snatch Clinic with Caffeine & Kilos @ FITAID Tent
            </div>

            <div id="sa7" class="hidden answer">
              <div>
                Come join a snatch clinic with Danny Lehr of Caffeine & Kilos at the FITAID tent in Vendor Village.
              </div>
              <div>
                <strong>Location:</strong> FITAID Tent in Vendor Village
              </div>
            </div>
          </div>

          <p><strong>2 PM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#sa8');">
              <i id="sa8-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              ROMWOD with Friends @ ROMWOD
            </div>

            <div id="sa8" class="hidden answer">
              <div>
                <strong>Location:</strong> ROMWOD tent in Vendor Village
              </div>
            </div>
          </div>

          <p><strong>3 - 4 PM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#sa9');">
              <i id="sa9-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Brooke Ence Meet and Greet @ Paleoethics Tent
            </div>

            <div id="sa9" class="hidden answer">
              <div>
                Come and hangout with Brooke Ence at the Paleoethics tent in Vendor Village.
              </div>
              <div>
                <strong>Location:</strong> Paleoethics Tent in Vendor Village
              </div>
            </div>
          </div>

          <p><strong>3:30 - 4:30 PM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#sa10');">
              <i id="sa10-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              MisFit's Spikeball Challenge @ FITAID Tent 
            </div>

            <div id="sa10" class="hidden answer">
              <div>
                Join the MisFit crew for some Spikeball at the FITAID tent in Vendor Village.
              </div>
              <div>
                <strong>Location:</strong> FITAID Tent in Vendor Village
              </div>
            </div>
          </div>

           <p><strong>4 PM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#sa11');">
              <i id="sa11-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              ROMWOD with Friends @ ROMWOD
            </div>

            <div id="sa11" class="hidden answer">
              <div>
                <strong>Location:</strong> ROMWOD tent in Vendor Village
              </div>
            </div>
          </div>

          <div class="question-section">
            <div class="question" onclick="toggel('#sa12');">
              <i id="sa12-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Brooke Ence Meet and Greet @ Kill Cliff Tent
            </div>

            <div id="sa12" class="hidden answer">
              <div>
                Come out, grab a Kill Cliff and hangout with Brooke Ence at the Kill Cliff tent in Vendor Village. She’s around till 5 PM. 
              </div>
              <div>
                <strong>Location:</strong> Kill Cliff Tent in Vendor Village
              </div>
            </div>
          </div>

          <p><strong>5 - 6 PM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#sa13');">
              <i id="sa13-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Pizza Party @ FITAID Tent
            </div>

            <div id="sa13" class="hidden answer">
              <div>
                FITAID is throwing a pizza party. Come grab a cold FITAID and a slice of pie at the FITAID tent in Vendor Village.
              </div>
              <div>
                <strong>Location:</strong> FITAID Tent in Vendor Village
              </div>
            </div>
          </div>

        </div>

        <div class="mdl-cell mdl-cell--12-col mdl-cell--top day hidden" id="sunday">
          <h2>Sunday, August 6</h2>
          <p><strong>ALL DAY</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#su1');">
              <i id="su1-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Rogue Fitness Beers & Brats @ State Street Brats
            </div>

            <div id="su1" class="hidden answer">
              <div>
                The Rogue Fitness team is taking over State Street Brats in downtown Madison. Come and enjoy a cold one with the team and special deals all day long. 
              </div>
              <div>
                <strong>Location: </strong> State Street Brats
              </div>
            </div>
          </div>

          <div class="question-section">
            <div class="question" onclick="toggel('#su2');">
              <i id="su2-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Riding the Mechanical Bull @ Paleoethics Tent
            </div>

            <div id="su2" class="hidden answer">
              <div>
                Come over to Paleoethics and ride their mechanical bull at the Paleoethics tent in Vendor Village.
              </div>
              <div>
                <strong>Location: </strong> Paleoethics Tent in Vendor Village
              </div>
            </div>
          </div>

          <div class="question-section">
            <div class="question" onclick="toggel('#su10');">
              <i id="su10-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Beer Pong @ Kill Cliff Tent
            </div>

            <div id="su10" class="hidden answer">
              <div>
                Show off your beer pong skills on some special Kill Cliff branded beer pong tables, paired with some vodka and your favorite Kill Cliff flavors.
              </div>
              <div>
                <strong>Location:</strong> Kill Cliff Tent in Vendor Village
              </div>
            </div>
          </div>

          <p><strong>10 AM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#su3');">
              <i id="su3-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              ROMWOD with Friends @ ROMWOD
            </div>

            <div id="su3" class="hidden answer">
              <div>
                <strong>Location: </strong> ROMWOD tent in Vendor Village
              </div>
            </div>
          </div>

          <p><strong>12 PM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#su4');">
              <i id="su4-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              ROMWOD with Friends @ ROMWOD
            </div>

            <div id="su4" class="hidden answer">
              <div>
                <strong>Location: </strong> ROMWOD tent in Vendor Village
              </div>
            </div>
          </div>

          <p><strong>1 PM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#su5');">
              <i id="su5-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Snatch Clinic @ FITAID Tent 
            </div>

            <div id="su5" class="hidden answer">
              <div>
                Come join the Caffeine & Kilos crew for a 1 hour snatch clinic.
              </div>
              <div>
                <strong>Location: </strong> FITAID Tent in Vendor Village
              </div>
            </div>
          </div>

          <div class="question-section">
            <div class="question" onclick="toggel('#su6');">
              <i id="su6-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Brooke Ence Emcees the Mechanical Bull @ Paleoethics Tent
            </div>

            <div id="su6" class="hidden answer">
              <div>
                Brooke Ence will be hanging out at the Paleoethics tent emceeing and cheering on athletes as they take on the bull riding challenge. 
              </div>
              <div>
                <strong>Location: </strong> Paleoethics Tent in Vendor Village
              </div>
            </div>
          </div>

          <p><strong>2 PM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#su7');">
              <i id="su7-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              ROMWOD with Friends @ ROMWOD
            </div>

            <div id="su7" class="hidden answer">
              <div>
                <strong>Location: </strong> ROMWOD tent in Vendor Village
              </div>
            </div>
          </div>

          <div class="question-section">
            <div class="question" onclick="toggel('#su8');">
              <i id="su8-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              Water Wars with Jackie Perez @ FITAID Tent
            </div>

            <div id="su8" class="hidden answer">
              <div>
                Come cool off with Jackie Perez at the FITAID tent and prepare to get soaked.
              </div>
              <div>
                <strong>Location: </strong> FITAID Tent in Vendor Village
              </div>
            </div>
          </div>

          <p><strong>4 PM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#su9');">
              <i id="su9-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              ROMWOD with Friends @ ROMWOD
            </div>

            <div id="su9" class="hidden answer">
              <div>
                <strong>Location: </strong> ROMWOD tent in Vendor Village
              </div>
            </div>
          </div>

          <p><strong>10 PM - 2 AM</strong></p>

          <div class="question-section">
            <div class="question" onclick="toggel('#su11');">
              <i id="su11-i" class="material-icons" style="float: right;">keyboard_arrow_right</i>
              "The Official 2017 Reebok CrossFit Games After-Party" Presented by PARTYAID
            </div>

            <div id="su11" class="hidden answer">
              <div>
                Come celebrate with your favorite athletes and friends at the "The Official 2017 Reebok CrossFit Games After-Party".
              </div>
              <div>
                Event Partners: PARTYAID, Reebok, ROMWOD, Caffeine and Kilos, and RockTape
              </div>
              <div>
                <a href="https://www.eventbrite.com/e/the-official-2017-reebok-crossfit-games-after-party-presented-by-partyaid-tickets-36322565772" target="_blank">Details</a>
              </div>
              <div>
                <strong>Location: </strong> Liquid
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

  <?php get_template_part( 'templates/subscribe' ); ?>

  <?php get_template_part( 'templates/footer' ); ?>

</main>

<?php get_footer(); ?>