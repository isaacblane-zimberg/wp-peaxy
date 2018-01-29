<?php 
/* Template Name: Business Case */ 
?>

<?php get_header(); ?>

<!-- HERO SECTION -->
<div class="hero" id="business-case">
	<div class="container">
		<h1 class="text-xs-center fade-in fade-in-1">Digital Twin</h1>
	</div>
</div>

<!-- CONTENT -->
<div class="content">

	<!-- INTRO SECTION -->
	<h2 class="fade-in fade-in-2"><?php the_field('intro_heading'); ?></h2>
	<div class="fade-in fade-in-3">
		<h3><?php the_field('intro_subheading'); ?></h3>
	</div>

	<!-- Physics-based Digital Twins -->
	<div id="physics">
		<hr>
		<h4 class="fade-in fade-in-1"><?php the_field('gain_productivty_heading'); ?></h4>
		<img class="fade-in fade-in-2" src="<?php the_field('gain_productivty_image'); ?>" alt="">
		<p class="fade-in fade-in-3"><?php the_field('gain_productivity_subheading'); ?></p>
	</div>

	<!-- What do we learn from Digital Twins? -->
	<div>
		<hr>
		<h4 class="fade-in fade-in-1"><?php the_field('drive_new_heading'); ?></h4>
		<img class="fade-in fade-in-2" src="<?php the_field('drive_new_image'); ?>" alt="">
		<p class="fade-in fade-in-3"><?php the_field('drive_new_subheading'); ?></p>
	</div>

	<!-- Multifaceted Digital Twins (MD-DT) -->
	<div id="multifaceted">
		<hr>
		<h4 class="fade-in fade-in-1"><?php the_field('analytics_heading'); ?></h4>
		<img class="fade-in fade-in-2" src="<?php the_field('analytics_image'); ?>" alt="">
		<p class="fade-in fade-in-3"><?php the_field('analytics_subheading'); ?></p>
	</div>


	<!-- How is it different from the PB-DT? -->
	<div>
		<hr>
		<h4 class="fade-in fade-in-1"><?php the_field('lower_tco_heading'); ?></h4>
		<img class="fade-in fade-in-2" src="<?php the_field('lower_tco_image'); ?>" alt="">
		<p class="fade-in fade-in-3"><?php the_field('lower_tco_subheading'); ?></p>
	</div>

	<!-- What is the ultimate benefit of a Digital Twin? -->
	<div>
		<hr>
		<h4 class="fade-in fade-in-1"><?php the_field('benefit_heading'); ?></h4>
		<img class="fade-in fade-in-2" src="<?php the_field('benefit_image'); ?>" alt="">
		<p class="fade-in fade-in-3"><?php the_field('benefit_subheading'); ?></p>
	</div>
</div>

<?php get_footer(); ?>

