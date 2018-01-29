<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

<div class="content" id="blog-single">
	<div class="fade-in fade-in-1">
		<h6>COMPANY UPDATE</h6>
		<h4><?php single_post_title(); ?></h4>
		<span class="date"><?php the_field('date'); ?></span>
	</div>
	<div class="fade-in fade-in-3">
		<p><?php the_content(); ?></p>
	</div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>