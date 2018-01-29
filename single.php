<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

<div class="content" id="blog-single">
	<div class="fade-in fade-in-1">
		<h6><?php the_category(); ?></h6>
		<h4><?php single_post_title(); ?></h4>
		<span class="date"><?php the_field('date'); ?></span>
		<span class="tags"><?php the_field('tags') ?></span>
	</div>
	<div id="blog-single-main-image" class="fade-in fade-in-2">
		<img src="<?php the_field('main_image'); ?>" alt="">
	</div>
	<div class="blog-body fade-in fade-in-3">
		<p><?php the_content(); ?></p>
	</div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>