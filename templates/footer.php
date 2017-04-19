<footer class="mdl-mini-footer">
  <div class="mdl-mini-footer__left-section">
    <ul class="mdl-mini-footer__link-list">
      <?php 
        $array_menu = wp_get_nav_menu_items('Main Nav');
        foreach ($array_menu as $m) {
          echo '<li><a class="mdl-navigation__link" href="' . $m->url . '" title="' . $m->title . '">' . $m->title . '</a></li>';
        }
      ?>
    </ul>
  </div>
  <div class="mdl-mini-footer__right-section">
    <ul class="mdl-mini-footer__link-list">
      <li>Connect With Us: </li>
      <li><a target="_blank" title="YouTube" href="https://www.youtube.com/channel/UCaVuIEkcQkaLKCUfWF2-Nqg"><i class="mdi mdi-youtube-play"></i></a></li>
      <li><a target="_blank" title="Instagram" href="https://www.instagram.com/morningchalkup/"><i class="mdi mdi-instagram"></i></a></li>
      <li><a target="_blank" title="Facebook" href="https://www.facebook.com/MorningChalkUp/"><i class="mdi mdi-facebook-box"></i></a></li>
    </ul>
  </div>
</footer>