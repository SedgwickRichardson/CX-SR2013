<?=get_template_part('partials/page_title');?>

<a href="#" class="btn-share">Share<i class="fa fa-share-square-o"></i></a>

<div class="content-container">
<?//=$post->post_content?>
<img class="img-responsive visible-xs hidden-sm hidden-md hidden-lg" src="<?=get_stylesheet_directory_uri()?>/assets/img/ceo-mobile.jpg" />
<img class="img-responsive hidden-xs visible-sm visible-md visible-lg" src="<?=get_stylesheet_directory_uri()?>/assets/img/ceo.jpg" />
<blockquote>
  <p>“We are committed to practicing sustainable development as it is the right thing to do for our planet, people and  communities. We are in it for the long term in order for our business to be successful and sustainable.” </p>
</blockquote>

</div>

<?
if(get_field("next_page",$post->ID)){
	$p = get_field("next_page",$post->ID);
	$permalink = get_permalink($p);
	echo '<div class="bottom-next-page-container clearfix">';
	echo '<a href="'.$permalink.'" class="btn-next-page"><i class="fa fa-arrow-circle-o-right fa-2x pull-right"></i></a>';
	echo '</div>';
}
?>
<div class="bottom-factsheet-container hidden-sm hidden-md hidden-lg">
	<?=get_template_part('partials/factsheet'); ?>
</div>