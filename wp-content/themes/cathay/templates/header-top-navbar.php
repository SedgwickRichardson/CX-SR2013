<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header clearfix">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="col-xs-10 col-sm-3">
        <a class="top-logo" href="<?php echo home_url(); ?>">Cathay Pacific</a>
        <a class="navbar-brand hidden-sm hidden-md hidden-lg" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?><span>Making the connection</span></a>
      </div>
      <div class="col-xs-9 col-sm-9 visible-sm visible-md visible-lg utility-menu-container clearfix">
         <?php get_search_form(); ?>
         <ul id="font-size-switcher">
            <li><a href="javascript:;" onclick="changeFontSize(0, this);" id="fontSmall">A</a></li>
            <li><a href="javascript:;" onclick="changeFontSize(1, this);" id="fontMid">A</a></li>
            <li><a href="javascript:;" onclick="changeFontSize(2, this);" id="fontLarge">A</a></li>
          </ul>
        <?php
            if (has_nav_menu('utility_menu')) :
              wp_nav_menu(array('theme_location' => 'utility_menu', 'menu_class' => 'nav navbar-nav','depth' => 1));
            endif;
        ?>
        <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?> <span>Making the connection</span></a>
      </div>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
      //main menu for mobile
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(array('depth' => 5, 'theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav visible-xs hidden-sm hidden-md hidden-lg'));
      //main menu for desktop
      wp_nav_menu(array('depth' => 1, 'theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav hidden-xs visible-sm visible-md visible-lg'));
      endif;
      echo '<div class="visible-xs hidden-sm hidden-md hidden-lg">';
      get_search_form();
      echo '</div>';
      if (has_nav_menu('utility_menu')) :
              wp_nav_menu(array('theme_location' => 'utility_menu', 'menu_class' => 'nav navbar-nav visible-xs hidden-sm hidden-md hidden-lg','depth' => 1));
            endif;
        /*$args = array('depth' => 1,'exclude' => '4');
        wp_list_pages( $args );*/
        ?>
      </nav>
    </div>
  </header>
  <!-- this has to be done a bit better -->
  <? if ($post->post_name == "home"): ?>
    <div class="video-banner-container">
      <img class="img-responsive" src="<?=get_stylesheet_directory_uri()?>/assets/img/home_temp.jpg" />
    </div>
  <? else: ?>
    <div class="video-banner-container">
      <div class="video-banner-text-container"><p>View the CEO statement</p><a class="btn-video-play" href="#">Play video</a></div>
      <img class="img-responsive visible-xs hidden-sm hidden-md hidden-lg" src="<?=get_stylesheet_directory_uri()?>/assets/img/video-loop-mobile.jpg" />
      <img class="img-responsive hidden-xs visible-sm visible-md visible-lg" src="<?=get_stylesheet_directory_uri()?>/assets/img/video-loop.jpg" />
    </div>
  <? endif; ?>
