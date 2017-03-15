<?php get_header(); ?>
<?php setPostViews(get_the_ID()); ?>
<div id="container">

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<div class="entry">
<div class="postmetadata">
<span class="metaDate"><?php the_time('d.m.Y') ?></span> | <?php the_category(', ') ?>  

</div>
<?php the_content(); ?>
<?php wp_link_pages('<p><strong>გვერდები:</strong> ', '</p>', 'number'); ?>
<?php if (get_the_tags()) : ?><?php the_tags('<span class="post_tags">საკვანძო სიტყვები:</span> ', ', ', '<br />'); ?><?php endif; ?>
</div>

</div>
<?php endwhile; ?>

<br>
<!-- share this article -->
<span class='st_facebook_large' displayText='Facebook'></span>
<span class='st_twitter_large' displayText='Tweet'></span>
<span class='st_googleplus_large' displayText='Google +'></span>
<span class='st_email_large' displayText='Email'></span>
<span class='st_fblike_large' displayText='Facebook Like'></span>
<span class='st_fbrec_large' displayText='Facebook Recommend'></span>
<span class='st_fbsub_large' displayText='Facebook Subscribe'></span>
<!-- -->
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "c19b8c35-8e49-4e3c-b9d4-024e44fd3ce9", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<?php // $theme->hook('content_after'); ?>
<p><br></p>
<div id="fb-root">კომენტარები სტატიაზე</div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-comments" data-href="http://new.grma.ge/?p=<?php the_ID(); ?>" data-width="700" data-numposts="9"></div>
<!-- related article -->

<?php $test=get_posts('category=3');
if ($test) {
include_once ("inc/project.php");
} else {

include_once ("inc/loop.php");
}
/**/
?>

<div class="navigation">
<?php previous_post_link('&laquo; %link') ?> <?php next_post_link(' %link &raquo;') ?>
</div>
<?php else : ?>
<div class="post">
<h2><?php _e('Not Found'); ?></h2>
</div>
<?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>