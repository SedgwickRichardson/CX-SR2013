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
         <!-- <ul id="font-size-switcher">
            <li><a href="javascript:;" onclick="changeFontSize(0, this);" id="fontSmall">A</a></li>
            <li><a href="javascript:;" onclick="changeFontSize(1, this);" id="fontMid">A</a></li>
            <li><a href="javascript:;" onclick="changeFontSize(2, this);" id="fontLarge">A</a></li>
          </ul> -->
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
    <div class="video-banner-container main-banner">
      <div id="main-banner-text-container">
        <h1>Connecting</h1>
        <!-- <span class="main-banner-line-left"></span>
        <span class="main-banner-line-right"></span> -->
        <div class="main-banner-text">
          <!-- <h1>Connecting</h1> -->
          <h2>Our Stakeholders</h2>
          <p>with</p>
          <h2><strong>Sustainability</strong></h2>
        </div>
        <div class="main-banner-text">
          <!-- <h1>Connecting</h1> -->
          <h2>Cathay Pacific’s Sustainable Development Strategy</h2>
          <p>with</p>
          <h2><strong>Our Business Vision</strong></h2>
        </div>
        <div class="main-banner-text">
          <!-- <h1>Connecting</h1> -->
          <h2>Addressing Our Operational Impacts</h2>
          <p>with</p>
          <h2><strong>Creating Value</strong></h2>
        </div>
        <div class="main-banner-text">
          <!-- <h1>Connecting</h1> -->
          <h2>Our Sustainability Commitments</h2>
          <p>with</span>
          <h2><strong>Innovative Solutions</strong></h2>
        </div>
      </div>
      <div class="overlay color1"></div>
      <img class="img-responsive hidden-xs" src="<?=get_stylesheet_directory_uri()?>/assets/img/banner-home-no-filter.jpg" />
      <img class="img-responsive visible-xs" src="<?=get_stylesheet_directory_uri()?>/assets/img/main-banner.jpg" />
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
        <p>PARTNERING WITH STAKEHOLDERS</p>
        <a class="btn-video-watch btn-show-video-popup" href="javascript:;">Watch videos</a>
        </div>
      <div class="video-overlay"></div>
      <img src="<?=get_stylesheet_directory_uri()?>/assets/video/plane.jpg" class="img-responsive visible-xs visible-sm visible-md hidden-lg" />
      <video autoplay loop poster="<?=get_stylesheet_directory_uri()?>/assets/video/plane.jpg" id="video-loop" class="hidden-xs hidden-sm hidden-md visible-lg">
        <source src="<?=get_stylesheet_directory_uri()?>/assets/video/plane.webm" type="video/webm">
        <source src="<?=get_stylesheet_directory_uri()?>/assets/video/plane.mp4" type="video/mp4">
        <source src="<?=get_stylesheet_directory_uri()?>/assets/video/plane.ogv" type="video/ogg">
        <img src="<?=get_stylesheet_directory_uri()?>/assets/video/plane.jpg" class="img-responsive" />
      </video>
<?
        break;
      case 9:
        //echo 'id="child-of-2013-progress"';
?>
        <p>PERFORMANCE HIGHLIGHTS</p>
        <span class="btn-video-watch video-tagline"></span>
        </div>
      <div class="video-overlay"></div>
      <img src="<?=get_stylesheet_directory_uri()?>/assets/video/plane.jpg" class="img-responsive visible-xs visible-sm visible-md hidden-lg" />
      <video autoplay loop poster="<?=get_stylesheet_directory_uri()?>/assets/video/plane.jpg" id="video-loop" class="hidden-xs hidden-sm hidden-md visible-lg">
        <source src="<?=get_stylesheet_directory_uri()?>/assets/video/plane.webm" type="video/webm">
        <source src="<?=get_stylesheet_directory_uri()?>/assets/video/plane.mp4" type="video/mp4">
        <source src="<?=get_stylesheet_directory_uri()?>/assets/video/plane.ogv" type="video/ogg">
        <img src="<?=get_stylesheet_directory_uri()?>/assets/video/plane.jpg" class="img-responsive" />
      </video>
<?
        break;
      case 14:
        //echo 'id="child-of-safety"';
?>
        <p>CORE CULTURE</p>
        <a class="btn-video-play btn-show-video-popup hidden-xs visible-sm visible-md visible-lg" href="javascript:;">Play video</a>
        <a class="btn-video-play btn-show-video-popup visible-xs hidden-sm hidden-md hidden-lg" href="http://youtu.be/rqZ3oWJ1dr8" target="_blank">Play video</a>
        </div>
      <div class="video-overlay"></div>
      <img src="<?=get_stylesheet_directory_uri()?>/assets/video/safety2.jpg" class="img-responsive visible-xs visible-sm visible-md hidden-lg" />
      <video autoplay loop poster="<?=get_stylesheet_directory_uri()?>/assets/video/safety2.jpg" id="video-loop" class="hidden-xs hidden-sm hidden-md visible-lg">
        <source src="<?=get_stylesheet_directory_uri()?>/assets/video/safety2.webm" type="video/webm">
        <source src="<?=get_stylesheet_directory_uri()?>/assets/video/safety2.mp4" type="video/mp4">
        <source src="<?=get_stylesheet_directory_uri()?>/assets/video/safety2.ogv" type="video/ogg">
        <img src="<?=get_stylesheet_directory_uri()?>/assets/video/safety2.jpg" class="img-responsive" />
      </video>
<?
        break;
      case 16:
        //echo 'id="child-of-climate-change"';
?>
        <p>TAKING ON RESPONSIBILITY</p>
        <a class="btn-video-play btn-show-video-popup hidden-xs visible-sm visible-md visible-lg" href="javascript:;">Play video</a>
        <a class="btn-video-play btn-show-video-popup visible-xs hidden-sm hidden-md hidden-lg" href="http://youtu.be/C_Q9YEgAXYo" target="_blank">Play video</a>
        </div>
      <div class="video-overlay"></div>
      <img src="<?=get_stylesheet_directory_uri()?>/assets/video/climate.jpg" class="img-responsive visible-xs visible-sm visible-md hidden-lg" />
      <video autoplay loop poster="<?=get_stylesheet_directory_uri()?>/assets/video/climate.jpg" id="video-loop" class="hidden-xs hidden-sm hidden-md visible-lg">
        <source src="<?=get_stylesheet_directory_uri()?>/assets/video/climate.webm" type="video/webm">
        <source src="<?=get_stylesheet_directory_uri()?>/assets/video/climate.mp4" type="video/mp4">
        <source src="<?=get_stylesheet_directory_uri()?>/assets/video/climate.ogv" type="video/ogg">
        <img src="<?=get_stylesheet_directory_uri()?>/assets/video/climate.jpg" class="img-responsive" />
      </video>
<?
        break;
      case 18:
        //echo 'id="child-of-waste"';
?>
        <p>REDUCE, REUSE & RECYCLE</p>
        <a class="btn-video-play btn-show-video-popup hidden-xs visible-sm visible-md visible-lg" href="javascript:;">Play video</a>
        <a class="btn-video-play btn-show-video-popup visible-xs hidden-sm hidden-md hidden-lg" href="http://youtu.be/BezF1LljE4Y" target="_blank">Play video</a>
        </div>
      <div class="video-overlay"></div>
      <img src="<?=get_stylesheet_directory_uri()?>/assets/video/waste.jpg" class="img-responsive visible-xs visible-sm visible-md hidden-lg" />
      <video autoplay loop poster="<?=get_stylesheet_directory_uri()?>/assets/video/waste.jpg" id="video-loop" class="hidden-xs hidden-sm hidden-md visible-lg">
        <source src="<?=get_stylesheet_directory_uri()?>/assets/video/waste.webm" type="video/webm">
        <source src="<?=get_stylesheet_directory_uri()?>/assets/video/waste.mp4" type="video/mp4">
        <source src="<?=get_stylesheet_directory_uri()?>/assets/video/waste.ogv" type="video/ogg">
        <img src="<?=get_stylesheet_directory_uri()?>/assets/video/waste.jpg" class="img-responsive" />
      </video>
<?
        break;
      case 20:
        //echo 'id="child-of-sourcing"';
?>
        <p>WORKING WITH OUR SUPPLIERS</p>
        <a class="btn-video-play btn-show-video-popup hidden-xs visible-sm visible-md visible-lg" href="javascript:;">Play video</a>
        <a class="btn-video-play btn-show-video-popup visible-xs hidden-sm hidden-md hidden-lg" href="http://youtu.be/dfLuQlZv5JI" target="_blank">Play video</a>
        </div>
      <div class="video-overlay"></div>
      <img src="<?=get_stylesheet_directory_uri()?>/assets/video/sourcing.jpg" class="img-responsive visible-xs visible-sm visible-md hidden-lg" />
      <video autoplay loop poster="<?=get_stylesheet_directory_uri()?>/assets/video/sourcing.jpg" id="video-loop" class="hidden-xs hidden-sm hidden-md visible-lg">
        <source src="<?=get_stylesheet_directory_uri()?>/assets/video/sourcing.webm" type="video/webm">
        <source src="<?=get_stylesheet_directory_uri()?>/assets/video/sourcing.mp4" type="video/mp4">
        <source src="<?=get_stylesheet_directory_uri()?>/assets/video/sourcing.ogv" type="video/ogg">
        <img src="<?=get_stylesheet_directory_uri()?>/assets/video/sourcing.jpg" class="img-responsive" />
      </video>
<?
        break;
      case 22:
        //echo 'id="child-of-biodiversity"';
?>
        <p>SUPPORTING CONSERVATION</p>
        <a class="btn-video-play btn-show-video-popup hidden-xs visible-sm visible-md visible-lg" href="javascript:;">Play video</a>
        <a class="btn-video-play btn-show-video-popup visible-xs hidden-sm hidden-md hidden-lg" href="http://youtu.be/nmRhCZDvjQs" target="_blank">Play video</a>
        </div>
      <div class="video-overlay"></div>
      <img src="<?=get_stylesheet_directory_uri()?>/assets/video/biodiversity.jpg" class="img-responsive visible-xs visible-sm visible-md hidden-lg" />
      <video autoplay loop poster="<?=get_stylesheet_directory_uri()?>/assets/video/biodiversity.jpg" id="video-loop" class="hidden-xs hidden-sm hidden-md visible-lg">
        <source src="<?=get_stylesheet_directory_uri()?>/assets/video/biodiversity.webm" type="video/webm">
        <source src="<?=get_stylesheet_directory_uri()?>/assets/video/biodiversity.mp4" type="video/mp4">
        <source src="<?=get_stylesheet_directory_uri()?>/assets/video/biodiversity.ogv" type="video/ogg">
        <img src="<?=get_stylesheet_directory_uri()?>/assets/video/biodiversity.jpg" class="img-responsive" />
      </video>
<?
        break;
      case 24:
        //echo 'id="child-of-people"';
?>
        <p>DIVERSE, VIBRANT AND ENGAGED</p>
        <a class="btn-video-watch btn-show-video-popup" href="javascript:;">Watch videos</a>
        </div>
      <div class="video-overlay"></div>
      <img src="<?=get_stylesheet_directory_uri()?>/assets/video/people.jpg" class="img-responsive visible-xs visible-sm visible-md hidden-lg" />
      <video autoplay loop poster="<?=get_stylesheet_directory_uri()?>/assets/video/people.jpg" id="video-loop" class="hidden-xs hidden-sm hidden-md visible-lg">
        <source src="<?=get_stylesheet_directory_uri()?>/assets/video/people.webm" type="video/webm">
        <source src="<?=get_stylesheet_directory_uri()?>/assets/video/people.mp4" type="video/mp4">
        <source src="<?=get_stylesheet_directory_uri()?>/assets/video/people.ogv" type="video/ogg">
        <img src="<?=get_stylesheet_directory_uri()?>/assets/video/people.jpg" class="img-responsive" />
      </video>
<?
        break;
      default:
        //echo 'id="child-of-others"';
?>
        </div></div>
<?
        break;
    }
?>
      <!-- <img class="img-responsive visible-xs hidden-sm hidden-md hidden-lg" src="<?=get_stylesheet_directory_uri()?>/assets/img/video-loop-mobile.jpg" />
      <img class="img-responsive hidden-xs visible-sm visible-md visible-lg" src="<?=get_stylesheet_directory_uri()?>/assets/img/video-loop.jpg" /> -->
    </div>
  <? endif; ?>
