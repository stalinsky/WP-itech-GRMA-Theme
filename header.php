<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /><!-- leave this for stats -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/easytabs.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slider.css" type="text/css" media="screen" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
<![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slides.min.jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.slides.min.js"></script>
<!--[if lt IE 9]>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<script>
$(function(){
// Set starting slide to 1
var startSlide = 1;
// Get slide number if it exists
if (window.location.hash) {
// startSlide = window.location.hash.replace('#','');
}
// Initialize Slides
$('#slides').slides({
slideSpeed: 300,
fadeSpeed: 1500,
crossfade: true,
preload: false,
// preloadImage: 'images/loading.gif',
generatePagination: true,
play: 5000,
pause: 2500,
hoverPause: true,
// Get the starting slide
start: startSlide,
animationComplete: function(current){
// Set the slide number as a hash
//window.location.hash = '#' + current;
}
});
});
</script>

<?php wp_get_archives('type=monthly&format=link'); ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<script>
// Find all YouTube videos
var $allVideos = $("iframe[src^='//www.youtube.com']"),
// The element that is fluid width
$fluidEl = $("body");
// Figure out and save aspect ratio for each video
$allVideos.each(function() {
$(this)
.data('aspectRatio', this.height / this.width)
// and remove the hard coded width/height
.removeAttr('height')
.removeAttr('width');
});
// When the window is resized
$(window).resize(function() {
var newWidth = $fluidEl.width();
// Resize all videos according to their own aspect ratio
$allVideos.each(function() {
var $el = $(this);
$el
.width(newWidth)
.height(newWidth * $el.data('aspectRatio'));
});
// Kick off one resize to fix all videos on page load
}).resize();
</script>
<?php wp_head(); ?>
</head>
<body>

<?php /* This code retrieves all our admin options. */
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { 
$$value['id'] = $value['std']; 
} else { 
$$value['id'] = get_settings( $value['id'] ); }
}
?><header>
<div id="header">
<div class="section group" id="logo">
<span class="col col-23">
<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo-grma-03.png" width="133" height="60"></a>
</span>
<span class="col col-74">
<span class="date right"><a href="http://grma.ge/ads/"><i class="fa fa-user fa-lg"></i> ავტორიზაცია სისტემაში</a> 
 &nbsp; <a href="http://grma.ge/ads/www/admin/password-recovery.php"><i class="fa fa-cog fa-lg"></i> პაროლის აღდგენა</a>

</span>
<h2><?php bloginfo('description'); ?></h2>
</span>
</div>
</div></header>

<div id="wrapper">
<div class="section group" id="logo">
<span class="col col-74">
<?php wp_nav_menu(array('container_class' => 'menu-header')); ?>
</span>
<span class="col col-23 alignright">
<a href="https://www.facebook.com/groups/347355782046668/"><span class="fa fa-facebook-square fa-3x"></span></a>
<a href="http://twitter.com/#"><span class="fa fa-twitter-square fa-3x"></span></a>
<a href="http://youtube.com/#"><span class="fa fa-youtube-square fa-3x"></span></a>
<a href="https://plus.google.com/u/7/104398915334756940438"><span class="fa fa-google-plus-square fa-3x"></span></a>
<a href="http://flickr.com/#"><span class="fa fa-flickr fa-3x"></span></a>
<a href="http://new.grma.ge/?feed=rss"><span class="fa fa-rss-square fa-3x"></span></a>
</span>
</div>

