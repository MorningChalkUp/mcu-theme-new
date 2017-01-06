<?php
  $event_date = get_field('event_date', false, false);
  $event_date = new DateTime($event_date);
  $terms = wp_get_post_terms($post->ID, 'event_type');
?>

<div class="row mdl-grid">
  <div class="mdl-cell mdl-cell--1-col mdl-cell--middle date">
    <a href="?date=<?php echo $event_date->format('Y-m-d'); ?>"><?php echo $event_date->format('M d, Y'); ?></a>
  </div>
  <div class="mdl-cell mdl-cell--10-col mdl-cell--middle event-info">
    <a href="<?php echo get_field('event_url'); ?>" target="_blank" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"><h5><?php the_title(); ?></h5></a>
    <div class="event-address"><?php echo get_field('event_address') ?></div>
  </div>
  <div class="mdl-cell mdl-cell--1-col mdl-cell--middle tag">
    <?php
      if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
        foreach ( $terms as $term ) :
    ?>
          <a href="?type=<?php echo $term->slug; ?>">
            <span class="mdl-chip <?php echo $term->slug; ?>">
              <span class="mdl-chip__text"><?php echo $term->name ?></span>
            </span>
          </a>
    <?php
        endforeach;
      endif;
    ?>
    
  </div>
</div>