<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="col-xs-9 col-sm-3"><a href="#">Cathay Pacific</a></div>
      <div class="col-xs-9 col-sm-9 pull-right visible-md visible-lg">
        <ul class="nav navbar-nav  pull-right">
          <li><a href="#">Corporate website</a></li>
          <li><a href="#">Download</a></li>
          <li><a href="#">Print</a></li>
          <li><a href="#">About this report</a></li>
          <li><a href="#">Resources</a></li>
          <li>
            <ul class="nav navbar-nav" id="fontSizeSwitcher">
              <li><a href="javascript:;" onclick="changeFontSize(0, this);" id="fontSmall">A</a></li>
              <li><a href="javascript:;" onclick="changeFontSize(1, this);" id="fontMid">A</a></li>
              <li><a href="javascript:;" onclick="changeFontSize(2, this);" id="fontLarge">A</a></li>
            </ul>
          </li>
          <li><?php get_search_form(); ?></li>
        </ul>
        <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
      </div>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(array('depth' => 5, 'theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
      endif;
        /*$args = array('depth' => 1,'exclude' => '4');
        wp_list_pages( $args );*/
        ?>
      </nav>
    </div>
  </header>
