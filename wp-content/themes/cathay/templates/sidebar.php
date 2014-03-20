<?php
dynamic_sidebar('sidebar-primary');
$ancestors = get_ancestors($post->ID, 'page' );
$args = array('child_of'=>$ancestors[sizeof($ancestors)-1]);
wp_list_pages( $args );
?>
