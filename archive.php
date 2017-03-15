<?php get_header(); ?>

<div id="container">

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<div class="entry">
<div class="postmetadata">
<span class="metaDate"><?php the_time('d.m.Y') ?></span> | <?php the_category(', ') ?>  
</div>
<?php the_excerpt(); ?>					
</div>
</div>
<?php endwhile; ?>
<div class="navigation">
<?php posts_nav_link(); ?>
</div>
<?php else : ?>
<div class="post">
<h2><?php _e('Not Found'); ?></h2>
</div>
<?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>