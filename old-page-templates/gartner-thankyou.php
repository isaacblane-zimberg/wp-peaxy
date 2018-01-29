<?php /* Template Name: Gartner Thank You Page */ ?>

<?php get_header(); ?>

<!-- HERO SECTION -->
<div class="hero" id="about">
	<div class="container">
		<h1 class="text-xs-center fade-in fade-in-1"> </h1>
	</div>
</div>

<!-- CONTENT -->
<div class="blog-content">
	<div class="download-report">
		<a href="<?php the_field('report_link') ?>">
			<h6 class="contact-btn" id="download-btn">DOWLOAD REPORT</h6>
		</a>
	</div>
	<div class="thankyou-letter">
		<h3><?php the_field('subheading') ?></h3>
		<p><?php the_field('body') ?></p>
		<p><?php the_field('read_more') ?></p>
		<img class="featured-blog" src="" alt="">
	</div>
</div>


<?php get_footer(); ?>