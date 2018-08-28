<?php /* Template Name: Test Slider Page */ ?>

<?php get_header();?>
<?php include 'slider.php'; ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

<div class="content" id="blog-single">
	<div class="blog-body">
		<p><?php the_content(); ?></p>
	</div>
</div>

<?php endwhile; endif; ?>
<?php get_footer();?>


?>
