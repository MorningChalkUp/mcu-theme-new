<header class="mdl-layout__header">
  <div class="mdl-layout__header-row">
    <!-- Title -->
    <span class="mdl-layout-title"><a href="/"><span>Morning</span> Chalk Up</a></span>
    <nav class="mdl-navigation mdl-layout--large-screen-only">
      <?php 
        $array_menu = wp_get_nav_menu_items('Main Nav');
        foreach ($array_menu as $m) {
          echo '<a class="mdl-navigation__link" href="' . $m->url . '" title="' . $m->title . '">' . $m->title . '</a>';
        }
      ?>
    </nav>
    <div class="mdl-layout-spacer"></div>
    <div class="right sub">
      <a href="/subscribe">
        <i class="mdi mdi-email"></i> <span class="mdl-layout--large-screen-only">Subscribe</span>
      </a>
    </div>
    <div class="right search">
      <a href="/search">
        <i class="mdi mdi-magnify"></i>
      </a>
    </div>
  </div>
</header>
<div class="mdl-layout__drawer mdl-layout--small-screen-only">
  <span class="mdl-layout-title"><a href="#"><span>Morning</span> Chalk Up</a></span>
  <nav class="mdl-navigation">
    <?php 
      $array_menu = wp_get_nav_menu_items('Main Nav');
      foreach ($array_menu as $m) {
        echo '<a class="mdl-navigation__link" href="' . $m->url . '" title="' . $m->title . '">' . $m->title . '</a>';
      }
    ?>
  </nav>
</div>