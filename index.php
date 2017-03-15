<?php get_header(); ?>
<div id="container">

<?php require_once ("inc/slider.php"); ?>
<?php /*
$args = array( 'posts_per_page' => 1, 'offset' => 0, 'cat' => 1);
$query = new WP_Query( $args );
while ( $query->have_posts() ) {
$query->the_post();?>
<div class="slider-img">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(  ); ?>
<h2 class="slider"><?php the_title(); ?></h2>
<span class="slider"><?php the_excerpt(); ?></span></a>
</div>
<?php } wp_reset_postdata(); */?>

<!-- სპექტრი, ხარაგაული, მესხები: ბლოკი 1-->
<div class="section group"><div class="col col-32">
<?php
include_once(ABSPATH.WPINC.'/rss.php'); // path to include script
$feed = fetch_rss('http://speqtri.ge/?feed=rss2'); // specify feed url
$items = array_slice($feed->items, 0, 1); // specify first and last item
if (!empty($items)) : foreach ($items as $item) : ?>
<div class="media">
<img src="<?php bloginfo('template_url'); ?>/images/media-speqtri.png"><span class="date"><?php $pubdate = $item['pubdate'];
echo date("d.m.Y", strtotime($item['pubdate']));
 ?></span>
<h2><a href="<?php echo $item['link']; ?>" target="_blank"><?php echo $item['title']; ?></a></h2></div>
<?php endforeach; endif; ?>
</div><div class="col col-32">
<?php
include_once(ABSPATH.WPINC.'/rss.php'); 
$feed = fetch_rss('http://chemikharagauli.com/rss.php'); 
$items = array_slice($feed->items, 0, 1); 
if (!empty($items)) : foreach ($items as $item) : ?>
<div class="media">
<img src="<?php bloginfo('template_url'); ?>/images/media-kharagauli.png"><span class="date"><?php $pubdate = $item['pubdate'];
echo date("d.m.Y", strtotime($item['pubdate']));
 ?></span>
<h2><a href="<?php echo $item['link']; ?>" target="_blank"><?php echo $item['title']; ?></a></h2></div>

<?php endforeach; endif; ?>
</div>
<div class="col col-32">
<?php
include_once(ABSPATH.WPINC.'/rss.php'); // path to include script
$feed = fetch_rss('http://sknews.ge/engine/rss.php'); // specify feed url
$items = array_slice($feed->items, 0, 1); // specify first and last item
if (!empty($items)) : foreach ($items as $item) : ?>
<div class="media">
<img src="<?php bloginfo('template_url'); ?>/images/media-sknews.png"><span class="date"><?php $pubdate = $item['pubdate'];
echo date("d.m.Y", strtotime($item['pubdate']));
 ?></span>
<h2><a href="<?php echo $item['link']; ?>" target="_blank"><?php echo $item['title']; ?></a></h2></div>

<?php endforeach; endif; ?>
</div></div>

<!-- ოკრიბა, მთავარი თემა, Traileti express: ბლოკი 2 -->
<div class="section group">
<div class="col col-32">
<?php
include_once(ABSPATH.WPINC.'/rss.php'); // path to include script
$feed = fetch_rss('http://okribanews.ge/?feed=rss2'); // specify feed url
$items = array_slice($feed->items, 0, 1); // specify first and last item
if (!empty($items)) : foreach ($items as $item) : ?>
<div class="media">
<img src="<?php bloginfo('template_url'); ?>/images/media-okribanews.png">
<span class="date"><?php $pubdate = $item['pubdate'];
echo date("d.m.Y", strtotime($item['pubdate']));
 ?></span><h2><a href="<?php echo $item['link']; ?>" target="_blank"><?php echo $item['title']; ?></a></h2>
</div>
<?php endforeach; endif; ?>
</div><div class="col col-32">
<?php
include_once(ABSPATH.WPINC.'/rss.php'); 
$feed = fetch_rss('http://tpress.ge/feed/'); 
$items = array_slice($feed->items, 0, 1); 
if (!empty($items)) : foreach ($items as $item) : ?>
<div class="media">
<img src="<?php bloginfo('template_url'); ?>/images/media-tpress.png">
<span class="date"><?php $pubdate = $item['pubdate'];
echo date("d.m.Y", strtotime($item['pubdate']));
 ?></span><h2><a href="<?php echo $item['link']; ?>" target="_blank"><?php echo $item['title']; ?></a></h2>
 </div>
<?php endforeach; endif; ?>
</div><div class="col col-32">
<?php
include_once(ABSPATH.WPINC.'/rss.php'); // path to include script
$feed = fetch_rss('http://msnews.ge/feed/'); // specify feed url
$items = array_slice($feed->items, 0, 1); // specify first and last item
if (!empty($items)) : foreach ($items as $item) : ?>
<div class="media">
<img src="<?php bloginfo('template_url'); ?>/images/media-msnews.png">
<span class="date"><?php $pubdate = $item['pubdate'];
echo date("d.m.Y", strtotime($item['pubdate']));
 ?></span><h2><a href="<?php echo $item['link']; ?>" target="_blank"><?php echo $item['title']; ?></a></h2>
</div>
<?php endforeach; endif; ?>
</div></div>

<!-- newpress.ge, knews.ge, baTumelebi.ge: ბლოკი 3 -->
<div class="section group">
<div class="col col-32">

<?php
include_once(ABSPATH.WPINC.'/rss.php'); // path to include script
$feed = fetch_rss('http://chiti.ge/rss.xml'); // specify feed url
$items = array_slice($feed->items, 0, 1); // specify first and last item
if (!empty($items)) : foreach ($items as $item) : ?>
<div class="media">
<img src="<?php bloginfo('template_url'); ?>/images/media-newpress.png">
<span class="date"><?php $pubdate = $item['pubdate'];
echo date("d.m.Y", strtotime($item['pubdate']));
 ?></span><h2><a href="<?php echo $item['link']; ?>" target="_blank"><?php echo $item['title']; ?></a></h2>
</div>
<?php endforeach; endif; ?>
</div><div class="col col-32">
<?php
include_once(ABSPATH.WPINC.'/rss.php'); 
$feed = fetch_rss('http://www.tabula.ge/ge/rss.xml'); 
$items = array_slice($feed->items, 0, 1); 
if (!empty($items)) : foreach ($items as $item) : ?>
<div class="media">
<img src="<?php bloginfo('template_url'); ?>/images/media-knews.png">
<span class="date"><?php $pubdate = $item['pubdate'];
echo date("d.m.Y", strtotime($item['pubdate']));
 ?></span><h2><a href="<?php echo $item['link']; ?>" target="_blank"><?php echo $item['title']; ?></a></h2>
</div>
<?php endforeach; endif; ?>
</div><div class="col col-32">
<?php
include_once(ABSPATH.WPINC.'/rss.php'); 
$feed = fetch_rss('http://batumelebi.netgazeti.ge/feed/'); 
$items = array_slice($feed->items, 0, 1); 
if (!empty($items)) : foreach ($items as $item) : ?>
<div class="media">
<img src="<?php bloginfo('template_url'); ?>/images/media-batumelebi.png">
<span class="date"><?php $pubdate = $item['pubdate'];
echo date("d.m.Y", strtotime($item['pubdate']));
 ?></span><h2><a href="<?php echo $item['link']; ?>" target="_blank"><?php echo $item['title']; ?></a></h2>
</div>
<?php endforeach; endif; ?>
</div></div>

<!-- gurianews, svanetiinfo, ajara: ბლოკი 4 -->
<div class="section group">
<div class="col col-32">
<?php
include_once(ABSPATH.WPINC.'/rss.php'); // path to include script
$feed = fetch_rss('https://teqnoblogi.wordpress.com/feed/'); // specify feed url
$items = array_slice($feed->items, 0, 1); // specify first and last item
if (!empty($items)) : foreach ($items as $item) : ?>
<div class="media">
<img src="<?php bloginfo('template_url'); ?>/images/media-gurianews.png">
<span class="date"><?php $pubdate = $item['pubdate'];
echo date("d.m.Y", strtotime($item['pubdate']));
 ?></span><h2><a href="<?php echo $item['link']; ?>" target="_blank"><?php echo $item['title']; ?></a></h2>
</div>
<?php endforeach; endif; ?>
</div><div class="col col-32">
<?php
include_once(ABSPATH.WPINC.'/rss.php'); 
$feed = fetch_rss('http://svanetiinfo.ge/?feed=rss2'); 
$items = array_slice($feed->items, 0, 1); 
if (!empty($items)) : foreach ($items as $item) : ?>
<div class="media">
<img src="<?php bloginfo('template_url'); ?>/images/media-svaneti.png">
<span class="date"><?php $pubdate = $item['pubdate'];
echo date("d.m.Y", strtotime($item['pubdate']));
 ?></span><h2><a href="<?php echo $item['link']; ?>" target="_blank"><?php echo $item['title']; ?></a></h2>
</div>
<?php endforeach; endif; ?>
</div><div class="col col-32">
<?php
include_once(ABSPATH.WPINC.'/rss.php'); 
$feed = fetch_rss('http://studiore.org/?feed=rss2&lang=ka'); 
$items = array_slice($feed->items, 0, 1); 
if (!empty($items)) : foreach ($items as $item) : ?>
<div class="media">
<img src="<?php bloginfo('template_url'); ?>/images/media-ajara.png">
<span class="date"><?php $pubdate = $item['pubdate'];
echo date("d.m.Y", strtotime($item['pubdate']));
 ?></span><h2><a href="<?php echo $item['link']; ?>" target="_blank"><?php echo $item['title']; ?></a></h2>
</div>
<?php endforeach; endif; ?>
</div></div>

<!-- psnews, guriismoambe, qartli: ბლოკი 5 -->
<div class="section group">
<div class="col col-32">
<?php
include_once(ABSPATH.WPINC.'/rss.php'); // path to include script
$feed = fetch_rss('http://marneulifm.ge/ka/feed/'); // specify feed url
$items = array_slice($feed->items, 0, 1); // specify first and last item
if (!empty($items)) : foreach ($items as $item) : ?>
<div class="media">
<img src="<?php bloginfo('template_url'); ?>/images/media-psnews.png">
<span class="date"><?php $pubdate = $item['pubdate'];
echo date("d.m.Y", strtotime($item['pubdate']));
 ?></span><h2><a href="<?php echo $item['link']; ?>" target="_blank"><?php echo $item['title']; ?></a></h2>
</div>
<?php endforeach; endif; ?>
</div><div class="col col-32">
<?php
include_once(ABSPATH.WPINC.'/rss.php'); 
$feed = fetch_rss('http://presscafe.ge/engine/rss.php'); 
$items = array_slice($feed->items, 0, 1); 
if (!empty($items)) : foreach ($items as $item) : ?>
<div class="media">
<img src="<?php bloginfo('template_url'); ?>/images/media-guriismoambe.png">
<span class="date"><?php $pubdate = $item['pubdate'];
echo date("d.m.Y", strtotime($item['pubdate']));
 ?></span><h2><a href="<?php echo $item['link']; ?>" target="_blank"><?php echo $item['title']; ?></a></h2>
</div>
<?php endforeach; endif; ?>
</div><div class="col col-32">
<?php
include_once(ABSPATH.WPINC.'/rss.php'); 
$feed = fetch_rss('http://report.ge/feed/'); 
$items = array_slice($feed->items, 0, 1); 
if (!empty($items)) : foreach ($items as $item) : ?>
<div class="media">
<img src="<?php bloginfo('template_url'); ?>/images/media-qartli.png">
<span class="date"><?php $pubdate = $item['pubdate'];
echo date("d.m.Y", strtotime($item['pubdate']));
 ?></span><h2><a href="<?php echo $item['link']; ?>" target="_blank"><?php echo $item['title']; ?></a></h2>
</div>
<?php endforeach; endif; ?>
</div></div>

<div class="gray">
<ins data-revive-zoneid="1" data-revive-id="5edf38ec5d64dc01db28fe9732ae5db9"></ins>
<script async src="//grma.ge/ads/www/delivery/asyncjs.php"></script></div>

<!-- ვიდეო -->
<div class="videoFrame"><?php
$args = array( 'posts_per_page' => 1, 'cat' => 7);
$query = new WP_Query( $args );
while ( $query->have_posts() ) {
$query->the_post();?>
<h1><a href="/?cat=7">RegStudio's</a></h1>
<br>
<p>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_content(); ?></a>
</p>
<?php } wp_reset_postdata(); ?>
</div>
<div class="gray">
<ins data-revive-zoneid="1" data-revive-id="5edf38ec5d64dc01db28fe9732ae5db9"></ins>
<script async src="//grma.ge/ads/www/delivery/asyncjs.php"></script>
</div>
<!-- ფოტო -->
<div class="photoFrame">
<h1><a href="/?cat=10">კვირის ფოტო</a></h1>
<br>
<div class="section group">
<?php
$args = array( 'posts_per_page' => 2, 'cat' => 10);
$query = new WP_Query( $args );
while ( $query->have_posts() ) {
$query->the_post();?>
<div class="col col-49">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(medium); ?>
<h2 class=""><?php the_title(); ?></a></h2>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_excerpt(); ?></a>
</div>
<?php } wp_reset_postdata(); ?>
</div>
<div class="section group">
<?php
$args = array( 'posts_per_page' => 4, 'offset' => 2, 'cat' => 10);
$query = new WP_Query( $args );
while ( $query->have_posts() ) {
$query->the_post();?>
<div class="col col-23">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(medium); ?>
<h2 class=""><?php the_title(); ?></a></h2>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_excerpt(); ?></a>
</div>
<?php } wp_reset_postdata(); ?>
</div>
</div>
</div><!-- #container -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>