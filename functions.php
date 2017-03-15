<?php
if ( function_exists('register_sidebar') )
register_sidebar();

// Add Thumbnail Theme Support
add_theme_support('post-thumbnails');
add_image_size('large', 720, 480, false); // Large Thumbnail
add_image_size('medium', 360, '', false); // Medium Thumbnail
add_image_size('small', 120, '', false); // Small Thumbnail
add_image_size('custom', 720, 480, false); // Custom Thumbnail Size, the_post_thumbnail('custom');

// Add YouTube support
add_filter( 'embed_oembed_html', 'custom_oembed_filter', 10, 4 ) ;
function custom_oembed_filter($html, $url, $attr, $post_ID) {
$return = '<div class="videoWrapper">'.$html.'</div>';
return $return;
}

add_theme_support( 'html5', array( 'search-form' ) );
// upload max size
@ini_set( 'upload_max_size' , '1M' );
//feed
add_theme_support( 'automatic-feed-links' );

// Popular articles
function setPostViews($postID) {
$count_key = 'post_views_count';
$count = get_post_meta($postID, $count_key, true);
if($count==''){
$count = 0;
delete_post_meta($postID, $count_key);
add_post_meta($postID, $count_key, '0');
}else{
$count++;
update_post_meta($postID, $count_key, $count);
}
}
function getPostViews($postID){
$count_key = 'post_views_count';
$count = get_post_meta($postID, $count_key, true);
if($count==''){
delete_post_meta($postID, $count_key);
add_post_meta($postID, $count_key, '0');
return "0";
}
return $count;
}

?>