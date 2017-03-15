<div id="sidebar">

<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="search-form">
<input type="hidden" name="page" value="search" />
<input name="s" type="search" class="search" value="" placeholder="ძიება ..." />
<button type="submit" class="search-submit"><span><i class="fa fa-search"></i></span></button>
</form>

<br>
<h1 class="widget">მოქალაქე ჟურნალისტი <i class="fa fa-television color"></i></h1>
<?php
$args = array( 'posts_per_page' => 2, 'cat' => 12);
$query = new WP_Query( $args );
while ( $query->have_posts() ) {
$query->the_post();?>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?>
<p><b><?php the_title(); ?></b></p></a>
<?php the_excerpt(); ?>
<?php } wp_reset_postdata(); ?>

<?php
$args = array( 'posts_per_page' => 4, 'cat' => 6, 'offset' => 1);
$query = new WP_Query( $args );
while ( $query->have_posts() ) {
$query->the_post();?>
<li class="color"><span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></li>
<?php } wp_reset_postdata(); ?>
<br>
<p>
<!--/*** Revive Adserver Asynchronous JS Tag  */-->
<ins data-revive-zoneid="3" data-revive-id="5edf38ec5d64dc01db28fe9732ae5db9"></ins>
<script async src="//grma.ge/ads/www/delivery/asyncjs.php"></script>
</p>
<br>
<h1><i class="fa fa-calendar color"></i> ანონსი </h1>
<?php
$args = array( 'posts_per_page' => 2, 'cat' => 8);
$query = new WP_Query( $args );
while ( $query->have_posts() ) {
$query->the_post();?>
<h3><i class="fa fa-circle color"></i> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="color"><?php the_title(); ?></a></h3>
<br>
<?php } wp_reset_postdata(); ?>

<p>
<!--/*** Revive Adserver Asynchronous JS Tag  */-->
<ins data-revive-zoneid="3" data-revive-id="5edf38ec5d64dc01db28fe9732ae5db9"></ins>
<script async src="//grma.ge/ads/www/delivery/asyncjs.php"></script>
</p>
<br>
<h1>კონკურსი</h1>
<?php
$args = array( 'posts_per_page' => 2, 'cat' => 9);
$query = new WP_Query( $args );
while ( $query->have_posts() ) {
$query->the_post();?>
<p><i class="fa fa-circle color"></i> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>

<?php } wp_reset_postdata(); ?>
<br>
<p>
<!--/*** Revive Adserver Asynchronous JS Tag  */-->
<ins data-revive-zoneid="3" data-revive-id="5edf38ec5d64dc01db28fe9732ae5db9"></ins>
<script async src="//grma.ge/ads/www/delivery/asyncjs.php"></script>
</p>
<br>
<h2>პოპულარული სტატიები</h2>
<?php require_once("inc/popular.php") ?>
<br>
<p>
<!--/*** Revive Adserver Asynchronous JS Tag  */-->
<ins data-revive-zoneid="3" data-revive-id="5edf38ec5d64dc01db28fe9732ae5db9"></ins>
<script async src="//grma.ge/ads/www/delivery/asyncjs.php"></script>
</p>
<br>

<h1 class="color aligncenter"><i class="fa fa-external-link-square"></i> რედაქტორის რჩევით</h1>
<?php
$sticky = get_option( 'sticky_posts' );
$args = array( 'posts_per_page' => 5, 'post__in'=>$sticky);
$query = new WP_Query( $args );
while ( $query->have_posts() ) {
$query->the_post();?>
<p><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(  ); ?>
<?php the_title(); ?></a></p>

<?php } wp_reset_postdata(); ?>
<br>
<p>
<!--/*** Revive Adserver Asynchronous JS Tag  */-->
<ins data-revive-zoneid="3" data-revive-id="5edf38ec5d64dc01db28fe9732ae5db9"></ins>
<script async src="//grma.ge/ads/www/delivery/asyncjs.php"></script>
</p>
<br>
<h2><?php _e('კალენდარი'); ?></h2>
<?php get_calendar(); ?>
<br>
<h1 class="widget"><a href="/?page_id=149">სასარგებლო ბმულები </a> <i class="fa fa-link color"></i></h1>
<!--/**
* Revive Adserver Asynchronous JS Tag
* - Generated with Revive Adserver v3.2.2 */-->
<ins data-revive-zoneid="2" data-revive-id="5edf38ec5d64dc01db28fe9732ae5db9"></ins>
<script async src="//grma.ge/ads/www/delivery/asyncjs.php"></script>

</div><!-- #sidebar -->