<?=get_template_part('partials/page_title');?>

<a href="javascript:;" id="headerShareBtn" class="btn-share">Share<i class="fa fa-share-square-o"></i></a>
<a href="javascript:;" id="back-to-top"><i class="fa fa-chevron-circle-up"></i></a>

<div class="addthis_toolbox addthis_default_style shareBox" id="shareBox">
<div class="shareBox-container clearfix">
	<a class="addthis_button_facebook"><i class="fa fa-facebook-square"></i></a>
	<a class="addthis_button_twitter"><i class="fa fa-twitter-square"></i></a>
	<a class="addthis_button_google_plusone_badge" g:plusone:size="small" g:plusone:name="" g:plusone:href="https://plus.google.com/109489300837768526620/"><i class="fa fa-google-plus-square"></i></a>
	<a class="addthis_button_linkedin"><i class="fa fa-linkedin-square"></i></a>
	<a class="addthis_button_pinterest_share"><i class="fa fa-pinterest-square"></i></a>
</div>
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5203414428341a6e"></script>

<div class="content-container">
<?
if($post->post_name=="sustainable-sourcing-matters" || 
	$post->post_name=="climate-updates-2013" || 
	$post->post_name=="climate-change-matters" || 
	$post->post_name=="sustainable-development-strategy-2020-commitments" || 
	$post->post_name=="abbreviations-glossary"){
	echo get_field("html_content",$post->ID);
}
/*else if($post->post_name=="investor-relations-materials"){

}*/
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