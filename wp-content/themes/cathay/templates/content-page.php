<?=get_template_part('partials/page_title');?>

<a href="#" class="btn-share">Share<i class="fa fa-share-square-o"></i></a>

<div class="content-container">
<?
if($post->post_name=="sustainable-sourcing-matters" || 
	$post->post_name=="climate-updates-2013" || 
	$post->post_name=="climate-change-matters"){
	echo get_field("html_content",$post->ID);
}
else{
	echo apply_filters('the_content', $post->post_content);
}
?>

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