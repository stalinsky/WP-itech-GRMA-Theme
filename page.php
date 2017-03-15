<?php get_header(); ?>
<div id="container">
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
<h2><?php the_title(); ?></h2>
<div class="entry">
<?php the_content(); ?>
<?php wp_link_pages('<p><strong>Pages:</strong>','</p>','number'); ?>		
</div>
</div>
<?php endwhile; ?>
<?php else : ?>
<div class="post">
<h2><?php _e('Not Found'); ?></h2>
</div>
<?php endif; ?>


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
</div><!-- #photo box -->


</div><?php get_sidebar(); ?>
<?php get_footer(); ?>