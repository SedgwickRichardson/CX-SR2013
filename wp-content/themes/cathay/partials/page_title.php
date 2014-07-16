<div class="page-header">
	<div class="clearfix">
	<?
		//print_r($post->ancestors);
		if (count($post->ancestors) == 1){
			$target = $post->ancestors[0];
		}
		else if (count($post->ancestors) >= 2){
			$target = $post->ancestors[count($post->ancestors)-1];
		}
		echo '<p class="title-parent pull-left">'.get_post($target)->post_title.'</p>';

		if(get_field("next_page",$post->ID)){
			$p = get_field("next_page",$post->ID);
      		$permalink = get_permalink($p);
      		echo '<a href="'.$permalink.'" class="btn-next-page"><i class="fa fa-arrow-circle-o-right fa-2x pull-right"></i></a>';
		}
	?>
	</div>
	<h1>
		<?php echo roots_title(); ?>
	</h1>
</div>