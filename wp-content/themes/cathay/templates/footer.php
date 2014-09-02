<footer class="content-info" role="contentinfo">
  <div class="bottom-btn-container hidden-xs visible-sm visible-md visible-lg">
    <div class="btn-download">
        <a href="<?=site_url()?>/resources/pdf-download/"><span class="fa-stack-2x fa-lg">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-file-text-o fa-stack fa-inverse"></i>
        </span></a>
        <p><a href="<?=site_url()?>/resources/pdf-download/">Download Report</a></p>
    </div>
    <div class="btn-video-gallery">
        <a href="<?=site_url()?>/resources/video-gallery/"><span class="fa-stack-2x fa-lg">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-film fa-stack fa-inverse"></i>
        </span></a>
        <p><a href="<?=site_url()?>/resources/video-gallery/">Video Gallery</a></p>
    </div>
    <a href="#" class="btn-feedback">Feedback</a>
  </div>
  <div class="container">
    <?php //dynamic_sidebar('sidebar-footer'); ?>
    <ul class="list-inline">
    	<li><a href="<?=home_url();?>/">Home</a></li>
    	<li><a href="<?=site_url()?>/about-this-report">About this report</a></li>
    	<li><a href="<?=site_url();?>/contact-us">Contact us</a></li>
    	<li><a href="<?=site_url();?>/sitemap">Sitemap</a></li>
    </ul>
    <p class="copyright">Copyright &copy; <?php echo date('Y'); ?> <a href="http://www.cathaypacific.com/" target="_blank">Cathay Pacific Airways Limited 國泰航空有限公司</a>. All Right reserved.</p>
  </div>
</footer>

<?php wp_footer(); ?>
