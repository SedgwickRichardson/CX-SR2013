<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>
  <?
    $page_ancestors = get_ancestors($post->ID, 'page' );
    if(sizeof($page_ancestors)>0){
      $page_ancestor = $page_ancestors[sizeof($page_ancestors)-1];
    }
    else{
      $page_ancestor = $post->ID;
    }
    switch($page_ancestor){
      case 2:
        echo 'id="child-of-making-the-connection"';
        break;
      case 9:
        echo 'id="child-of-2013-progress"';
        break;
      case 14:
        echo 'id="child-of-safety"';
        break;
      case 16:
        echo 'id="child-of-climate-change"';
        break;
      case 18:
        echo 'id="child-of-waste-management"';
        break;
      case 20:
        echo 'id="child-of-sustainable-sourcing"';
        break;
      case 22:
        echo 'id="child-of-biodiversity"';
        break;
      case 24:
        echo 'id="child-of-our-people"';
        break;
      default:
        echo 'id="child-of-others"';
        break;
    }
  ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>

  <div class="wrap container" role="document">
    <div class="content row">
      <main class="main <?php echo roots_main_class(); ?>" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
