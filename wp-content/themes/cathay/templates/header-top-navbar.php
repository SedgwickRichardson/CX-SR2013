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
    <!-- <div id="video-container">
      <iframe src="//player.vimeo.com/video/72421196?title=0&amp;byline=0&amp;portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div> -->
    <?=get_template_part('partials/video-panel'); ?>
    <div class="video-banner-container">
      <div class="video-banner-text-container">
<?
    global $page_ancestor;
    //echo $page_ancestor;
    switch($page_ancestor){
      case 2:
        //echo 'id="child-of-making-the-connection"';
?>
        <p>Lorem ipsum dolor sit amet</p>
        <a class="btn-video-watch btn-show-video-popup" href="javascript:;">Watch videos</a>
<?
        break;
      case 9:
        //echo 'id="child-of-2013-progress"';
        break;
      case 14:
        //echo 'id="child-of-safety"';
?>
        <p>Lorem ipsum dolor sit amet</p>
        <a class="btn-video-play btn-show-video-popup hidden-xs visible-sm visible-md visible-lg" href="javascript:;">Play video</a>
        <a class="btn-video-play btn-show-video-popup visible-xs hidden-sm hidden-md hidden-lg" href="http://www.youtube.com/watch?v=UFHV2bXuLJw" target="_blank">Play video</a>
<?
        break;
      case 16:
        //echo 'id="child-of-climate-change"';
?>
        <p>Lorem ipsum dolor sit amet</p>
        <a class="btn-video-play btn-show-video-popup hidden-xs visible-sm visible-md visible-lg" href="javascript:;">Play video</a>
        <a class="btn-video-play btn-show-video-popup visible-xs hidden-sm hidden-md hidden-lg" href="http://www.youtube.com/watch?v=UFHV2bXuLJw" target="_blank">Play video</a>
<?
        break;
      case 18:
        //echo 'id="child-of-climate-change"';
?>
        <p>Lorem ipsum dolor sit amet</p>
        <a class="btn-video-play btn-show-video-popup hidden-xs visible-sm visible-md visible-lg" href="javascript:;">Play video</a>
        <a class="btn-video-play btn-show-video-popup visible-xs hidden-sm hidden-md hidden-lg" href="http://www.youtube.com/watch?v=UFHV2bXuLJw" target="_blank">Play video</a>
<?
        break;
      case 20:
        //echo 'id="child-of-climate-change"';
?>
        <p>Lorem ipsum dolor sit amet</p>
        <a class="btn-video-play btn-show-video-popup hidden-xs visible-sm visible-md visible-lg" href="javascript:;">Play video</a>
        <a class="btn-video-play btn-show-video-popup visible-xs hidden-sm hidden-md hidden-lg" href="http://www.youtube.com/watch?v=UFHV2bXuLJw" target="_blank">Play video</a>
<?
        break;
      case 22:
        //echo 'id="child-of-climate-change"';
?>
        <p>Lorem ipsum dolor sit amet</p>
        <a class="btn-video-play btn-show-video-popup hidden-xs visible-sm visible-md visible-lg" href="javascript:;">Play video</a>
        <a class="btn-video-play btn-show-video-popup visible-xs hidden-sm hidden-md hidden-lg" href="http://www.youtube.com/watch?v=UFHV2bXuLJw" target="_blank">Play video</a>
<?
        break;
      case 24:
        //echo 'id="child-of-climate-change"';
?>
        <p>Lorem ipsum dolor sit amet</p>
        <a class="btn-video-watch btn-show-video-popup" href="javascript:;">Watch videos</a>
<?
        break;
      default:
        //echo 'id="child-of-others"';
        break;
    }
?>
      </div>
      <div class="video-overlay"></div>
      <img src="<?=get_stylesheet_directory_uri()?>/assets/img/video-ceo.jpg" class="img-responsive visible-xs visible-sm visible-md hidden-lg" />
      <video autoplay loop poster="<?=get_stylesheet_directory_uri()?>/assets/img/video-ceo.jpg" id="video-loop" class="hidden-xs hidden-sm hidden-md visible-lg">
        <source src="<?=get_stylesheet_directory_uri()?>/assets/video/ceo.webm" type="video/webm">
        <source src="<?=get_stylesheet_directory_uri()?>/assets/video/ceo.mp4" type="video/mp4">
        <source src="<?=get_stylesheet_directory_uri()?>/assets/video/ceo.ogv" type="video/ogg">
        <img src="<?=get_stylesheet_directory_uri()?>/assets/img/video-ceo.jpg" class="img-responsive" />
      </video>
      <!-- <img class="img-responsive visible-xs hidden-sm hidden-md hidden-lg" src="<?=get_stylesheet_directory_uri()?>/assets/img/video-loop-mobile.jpg" />
      <img class="img-responsive hidden-xs visible-sm visible-md visible-lg" src="<?=get_stylesheet_directory_uri()?>/assets/img/video-loop.jpg" /> -->
    </div>
  <? endif; ?>
