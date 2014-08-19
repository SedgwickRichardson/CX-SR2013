<?=get_template_part('partials/page_title');?>

<a href="#" class="btn-share">Share<i class="fa fa-share-square-o"></i></a>
<a href="javascript:;" id="back-to-top"><i class="fa fa-chevron-circle-up"></i></a>

<div class="content-container">
<?
if($post->post_name=="sustainable-sourcing-matters" || 
	$post->post_name=="climate-updates-2013" || 
	$post->post_name=="climate-change-matters" || 
	$post->post_name=="sustainable-development-strategy-2020-commitments"){
	echo get_field("html_content",$post->ID);
}
//else if($post->post_name=="climate-updates-2013"){
//}
else{
	echo apply_filters('the_content', $post->post_content);
}
?>
<div class="bottom-next-page-container clearfix">
<?
if(get_field("next_page",$post->ID)){
	$p = get_field("next_page",$post->ID);
	$permalink = get_permalink($p);
	echo '<a href="'.$permalink.'" class="btn-next-page"><i class="fa fa-arrow-circle-o-right fa-2x pull-right"></i></a>';
}
if(get_field("prev_page",$post->ID)){
	$p = get_field("prev_page",$post->ID);
	$permalink = get_permalink($p);
	echo '<a href="'.$permalink.'" class="btn-prev-page"><i class="fa fa-arrow-circle-o-left fa-2x pull-right"></i></a>';
}
?>
</div>
<div class="bottom-factsheet-container hidden-sm hidden-md hidden-lg">
	<?=get_template_part('partials/factsheet'); ?>
</div>