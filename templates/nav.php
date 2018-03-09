<header class="mdl-layout__header" style="display:none">
  <div class="mdl-layout__header-row">
    <!-- Title -->
    <span class="mdl-layout-title">
      <a id="logo" href="/"><?php echo file_get_contents(get_bloginfo('stylesheet_directory').'/img/mcu.svg') ?></a>
    </span>
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
      <a class="search-btn">
        <i class="mdi mdi-magnify"></i>
        <i class="mdi mdi-close"></i>
      </a>
    </div>
  </div>
  <div class="mdl-layout__header-row search-bar">
    <form action="/search/" method="get">
      <i class="mdi mdi-magnify"></i>
      <input type="text" name="keyword" placeholder="Search ...">
      <button class="mdl-btn" type="submit">Search</button>
    </form>
  </div>
</header>
<div class="mdl-layout__drawer mdl-layout--small-screen-only">
  <span class="mdl-layout-title"><a href="/"><span>Morning</span> Chalk Up</a></span>
  <nav class="mdl-navigation">

  </nav>
</div>


<div id="navbar">
  <div class="contain">
    <div class="navleft">
      <a id="menutoggle" href="#"><i class="mdi mdi-menu"></i></a>
    </div>
    <div class="navmid">
      <h1><a id="logo" href="/"><?php echo file_get_contents(get_template_directory().'/img/mcu.svg') ?></a></h1>
    </div>
    <div class="navright">
      <a href="/subscribe" title="Subscribe">
        <i class="mdi mdi-email"></i>
      </a>
    </div>
  </div>
  <div id="menu">
    <?php 
      $array_menu = wp_get_nav_menu_items('Main Nav');
      foreach ($array_menu as $m) {
        echo '<a class="mdl-navigation__link" href="' . $m->url . '" title="' . $m->title . '">' . $m->title . '</a>';
      }
    ?>
  </div>
</div>
