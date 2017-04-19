<?php get_header(); ?>

<?php
  $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
  $user_id = $curauth->ID;
?>

  <main class="mdl-layout__content">
    <div class="page-content">
      <div class="mdl-grid">
        <section class="mdl-cell mdl-cell--12-col main archive">
          <div class="mdl-grid">
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-cell mdl-cell--10-col title">

              <div class="user-image">
                <?php if(get_cupp_meta($user_id, 'team-member') != ''): ?>
                  <img src="<?php echo get_cupp_meta($user_id, 'team-member');  ?>" class="circle" alt="<?php echo $curauth->display_name; ?>">
                <?php else: ?>
                  <img src="<?php echo get_avatar_url($curauth->ID); ?>" class="circle" alt="<?php echo $curauth->display_name; ?>">
                <?php endif; ?>
              </div>
              
              <h1 class="author"><?php echo $curauth->display_name; ?></h1>
              
              <div class="location"><?php the_field('user_location', 'user_' . $user_id) ?></div>
              
              <div class="bio"><?php echo $curauth->user_description; ?></div>
              
              <div class="social">

                <?php if (isset($curauth->user_email) && $curauth->user_email != ''): ?>
                  <a href="mailto:<?php echo $curauth->user_email ?>"><i class="mdi mdi-email"></i></a>
                <?php endif; ?>

                <?php if(get_field('user_instagram', 'user_' . $user_id) != ''): ?>
                  <a target="_balnk" href="https://www.instagram.com/<?php the_field('user_instagram', 'user_' . $user_id) ?>"><i class="mdi mdi-instagram"></i></a>
                <?php endif; ?>

                <?php if (get_the_author_meta('twitter', $user_id) != ''): ?>
                  <a target="_balnk" href="https://twitter.com/<?php the_author_meta('twitter', $user_id) ?>"><i class="mdi mdi-twitter"></i></a>
                <?php endif; ?>

                <?php if (get_the_author_meta('facebook', $user_id) != ''): ?>
                  <a target="_balnk" href="<?php the_author_meta('facebook', $user_id) ?>"><i class="mdi mdi-facebook-box"></i></a>
                <?php endif; ?>

              </div>
            </div>
            <div class="mdl-layout-spacer"></div>
          </div>
          <div class="mdl-grid">
            <?php 
            global $query_string;
            parse_str( $query_string, $args );
            $args['posts_per_page'] = -1;
            query_posts( $args );
            if (have_posts()) {
              $i = 0;
              while (have_posts() && $i < 9) {
                the_post(); $i++;
                get_template_part( 'templates/teaser', 'archive' );
              }
            }
            ?>
          </div>
        </section>
      </div>
      
      <?php get_template_part( 'templates/subscribe' ); ?>
      
      <?php if (have_posts() && $i >= 9) : ?>
      <div class="mdl-grid">
        <section class="mdl-cell mdl-cell--12-col main archive">
          <div class="mdl-grid">
            <?php 
              while (have_posts()) {
                the_post();
                get_template_part( 'templates/teaser', 'archive' );
              }
            ?>
          </div>
        </section>
      </div>
    <?php endif; ?>
    </div>

    <?php get_template_part( 'templates/footer' ); ?>
    
  </main>

<?php get_footer(); ?>