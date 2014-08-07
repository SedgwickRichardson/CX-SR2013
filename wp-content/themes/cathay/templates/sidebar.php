<div id="sidebar">
<ul class="side-menu">
<?php
	//dynamic_sidebar('sidebar-primary');
	$ancestors = get_ancestors($post->ID, 'page' );
	$args = array('title_li'=>'','child_of'=>$ancestors[sizeof($ancestors)-1]);
	wp_list_pages( $args );
?>
</ul>
<?=get_template_part('partials/factsheet'); ?>
</div>