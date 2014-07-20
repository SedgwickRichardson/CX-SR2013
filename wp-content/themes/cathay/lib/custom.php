<?php
/**
 * Custom functions
 */
add_filter('roots_wrap_base', 'roots_wrap_base_cpts'); // Add our function to the roots_wrap_base filter

function roots_wrap_base_cpts($templates) {
$cpt = get_post_type(); // Get the current post type
if ($cpt) {
   array_unshift($templates, 'base-' . $cpt . '.php'); // Shift the template to the front of the array
}
return $templates; // Return our modified array with base-$cpt.php at the front of the queue
}

function myextensionTinyMCE($init) {
    // Command separated string of extended elements
    $ext = 'dl[*],dd[*],dt[*]';

    // Add to extended_valid_elements if it alreay exists
    if ( isset( $init['extended_valid_elements'] ) ) {
        $init['extended_valid_elements'] .= ',' . $ext;
    } else {
        $init['extended_valid_elements'] = $ext;
    }

    // Super important: return $init!
    return $init;
}

add_filter('tiny_mce_before_init', 'myextensionTinyMCE' );
?>