<?php
/*
* Theme function
*
* @package OurTheme
*/
echo '<pre>';
print_r(get_template_directory());
wp_die();

function ourtheme_enqueue_script(){
    wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filetime() );
}

add_action('wp_enqueue_script', 'ourtheme_enqueue_script');

?>