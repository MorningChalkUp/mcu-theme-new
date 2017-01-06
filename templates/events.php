<?php 
$currentdate = date("Y-m-d",mktime(0,0,0,date("m"),date("d")-1,date("Y")));

$currentMonth = (int)date('m');

if ( $_GET['date']) {
  query_posts(array(
    'meta_query'      => array(
      array(
        'key' => 'event_date',
        'compare' => '=',
        'value' => date($_GET['date']),
        'type' => 'DATE',
      )),
    'post_type'       => 'mcu_event',
    'posts_per_page'  => -1,
    'meta_key'        => 'event_date',
    'orderby'         => 'meta_value_num',
    'order'           => 'ASC'
  ));
}
elseif ( $_GET['month']) {
  if ( $_GET['month'] < $currentMonth ) {
    $start_date = date("Y-m-d",mktime(0,0,0,$_GET['month'],1,date("Y")+1));
    $end_date = date("Y-m-d",mktime(0,0,0,$_GET['month'],date("t"),date("Y")+1));
  } else {
    $start_date = date("Y-m-d",mktime(0,0,0,$_GET['month'],1,date("Y")));
    $end_date = date("Y-m-d",mktime(0,0,0,$_GET['month'],date("t"),date("Y")));
  }
  query_posts(array(
    'meta_query'      => array(
      array(
        'key' => 'event_date',
        'compare' => 'BETWEEN',
        'value' => array($start_date, $end_date),
        'type' => 'DATE',
      )),
    'post_type'       => 'mcu_event',
    'posts_per_page'  => -1,
    'meta_key'        => 'event_date',
    'orderby'         => 'meta_value_num',
    'order'           => 'ASC'
  ));
}
elseif ( $_GET['state']) {
  query_posts(array(
    'meta_query'      => array(
      array(
        'key' => 'event_location',
        'compare' => '=',
        'value' => $_GET['state'],
      )),
    'post_type'       => 'mcu_event',
    'posts_per_page'  => -1,
    'meta_key'        => 'event_date',
    'orderby'         => 'meta_value_num',
    'order'           => 'ASC'
  ));
}
elseif ( $_GET['type'] ) {
  query_posts(array(
    'tax_query'      => array(
      array(
        'taxonomy' => 'event_type',
        'field' => 'slug',
        'terms' => $_GET['type'],
      )),
    'post_type'       => 'mcu_event',
    'posts_per_page'  => -1,
    'meta_key'        => 'event_date',
    'orderby'         => 'meta_value_num',
    'order'           => 'ASC'
  ));
}
else {
  query_posts(array(
    'meta_query'      => array(
      array(
        'key' => 'event_date',
         'compare' => '>',
         'value' => $currentdate,
         'type' => 'DATE',
      )),
    'post_type'       => 'mcu_event',
    'posts_per_page'  => -1,
    'meta_key'        => 'event_date',
    'orderby'         => 'meta_value_num',
    'order'           => 'ASC'
  ));
}

$select_terms = get_terms( array(
    'taxonomy' => 'event_type',
    'hide_empty' => false,
) );

?>

<article class="mdl-cell mdl-cell--8-col main events">
  <h1>Competition Calendar</h1>
  <div class="mdl-cell mdl-cell--12-col filters">
    
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height">
      <input class="mdl-textfield__input event-state" type="text" id="state" value="" readonly tabIndex="-1">
      <label for="state">
        <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
      </label>
      <label for="state" class="mdl-textfield__label">State</label>
      <ul for="state" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
        <li class="mdl-menu__item" data-val="AK">Alaska</li>
        <li class="mdl-menu__item" data-val="AZ">Arizona</li>
        <li class="mdl-menu__item" data-val="AR">Arkansas</li>
        <li class="mdl-menu__item" data-val="CA">California</li>
        <li class="mdl-menu__item" data-val="CO">Colorado</li>
        <li class="mdl-menu__item" data-val="CT">Connecticut</li>
        <li class="mdl-menu__item" data-val="DE">Delaware</li>
        <li class="mdl-menu__item" data-val="FL">Florida</li>
        <li class="mdl-menu__item" data-val="GA">Georgia</li>
        <li class="mdl-menu__item" data-val="HI">Hawaii</li>
        <li class="mdl-menu__item" data-val="ID">Idaho</li>
        <li class="mdl-menu__item" data-val="IL">Illinois</li>
        <li class="mdl-menu__item" data-val="IN">Indiana</li>
        <li class="mdl-menu__item" data-val="IA">Iowa</li>
        <li class="mdl-menu__item" data-val="KS">Kansas</li>
        <li class="mdl-menu__item" data-val="KY">Kentucky</li>
        <li class="mdl-menu__item" data-val="LA">Louisiana</li>
        <li class="mdl-menu__item" data-val="ME">Maine</li>
        <li class="mdl-menu__item" data-val="MD">Maryland</li>
        <li class="mdl-menu__item" data-val="MA">Massachusetts</li>
        <li class="mdl-menu__item" data-val="MI">Michigan</li>
        <li class="mdl-menu__item" data-val="MN">Minnesota</li>
        <li class="mdl-menu__item" data-val="MS">Mississippi</li>
        <li class="mdl-menu__item" data-val="MO">Missouri</li>
        <li class="mdl-menu__item" data-val="MT">Montana</li>
        <li class="mdl-menu__item" data-val="NE">Nebraska</li>
        <li class="mdl-menu__item" data-val="NV">Nevada</li>
        <li class="mdl-menu__item" data-val="NH">New Hampshire</li>
        <li class="mdl-menu__item" data-val="NJ">New Jersey</li>
        <li class="mdl-menu__item" data-val="NM">New Mexico</li>
        <li class="mdl-menu__item" data-val="NY">New York</li>
        <li class="mdl-menu__item" data-val="NC">North Carolina</li>
        <li class="mdl-menu__item" data-val="ND">North Dakota</li>
        <li class="mdl-menu__item" data-val="OH">Ohio</li>
        <li class="mdl-menu__item" data-val="OK">Oklahoma</li>
        <li class="mdl-menu__item" data-val="OR">Oregon</li>
        <li class="mdl-menu__item" data-val="PA">Pennsylvania</li>
        <li class="mdl-menu__item" data-val="RI">Rhode Island</li>
        <li class="mdl-menu__item" data-val="SC">South Carolina</li>
        <li class="mdl-menu__item" data-val="SD">South Dakota</li>
        <li class="mdl-menu__item" data-val="TN">Tennessee</li>
        <li class="mdl-menu__item" data-val="TX">Texas</li>
        <li class="mdl-menu__item" data-val="UT">Utah</li>
        <li class="mdl-menu__item" data-val="VT">Vermont</li>
        <li class="mdl-menu__item" data-val="VA">Virginia</li>
        <li class="mdl-menu__item" data-val="WA">Washington</li>
        <li class="mdl-menu__item" data-val="WV">West Virginia</li>
        <li class="mdl-menu__item" data-val="WI">Wisconsin</li>
        <li class="mdl-menu__item" data-val="WY">Wyoming</li>
        <li class="mdl-menu__item" data-val="INTL">International</li>
      </ul>
    </div>

    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height">
      <input class="mdl-textfield__input event-month" type="text" id="month" value="" readonly tabIndex="-1">
      <label for="month">
        <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
      </label>
      <label for="month" class="mdl-textfield__label">Month</label>
      <ul for="month" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
        <?php
          for ($x = $currentMonth; $x < $currentMonth + 12; $x++) {
            echo '<li class="mdl-menu__item" data-val="' . $x . '">' . date('F', mktime(0, 0, 0, $x, 1)) . '</li>';
          }
        ?>
      </ul>
    </div>

    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height">
      <input class="mdl-textfield__input event-type" type="text" id="type" value="" readonly tabIndex="-1">
      <label for="type">
        <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
      </label>
      <label for="type" class="mdl-textfield__label">Type</label>
      <ul for="type" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
        <?php 
          foreach ($select_terms as $select_term) {
            echo '<li class="mdl-menu__item" data-val="' . $select_term->slug . '">' . $select_term->name . '</li>';
          }
        ?>
      </ul>
    </div>

    <a href="?" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Reset</a>

  </div>
  <div class="mdl-cell mdl-cell--12-col info">
    It's not a CrossFit competition unless it's sponsored by CrossFit®. Every other competition, except for weightlifting, is unofficial. Large-scale major sponsored events are "national" and smaller ones are "local."
  </div>
  <div class="mdl-cell mdl-cell--12-col calendar">

    <?php 
      if (have_posts()) {
        while (have_posts()) {
          the_post();
          get_template_part( 'templates/event' );
        }
      } else {
        _e('Sorry, no events currently matched your criteria.');
      }
    ?>
    
  </div>
</article>