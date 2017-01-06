<?php 
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
  <!-- <div class="mdl-cell mdl-cell--12-col filters">
    Filters
  </div> -->
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