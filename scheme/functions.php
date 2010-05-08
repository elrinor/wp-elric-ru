<?php
/*
if ( function_exists('register_sidebar') ) {
   register_sidebar(array(
       'before_widget' => '<li id="%1$s" class="widget %2$s">',
       'after_widget' => '</li>',
       'before_title' => '<h2 class="widgettitle">',
       'after_title' => '</h2>',
   ));
}
*/

/* Disable auto p. */
remove_filter('the_content', 'wpautop');

/* Disable wptexturize. */
remove_filter('the_content', 'wptexturize');

?>