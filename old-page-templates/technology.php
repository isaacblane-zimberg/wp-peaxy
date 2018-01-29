<?php 
/* Template Name: Technology */ 
?>

<?php get_header(); ?>

<!-- HERO SECTION -->
<div class="hero" id="technology">
	<div class="container">
		<h1 class="text-xs-center fade-in fade-in-1">Technology</h1>
	</div>
</div>

<!-- CONTENT -->
<div class="content">

	<!-- INTRO SECTION -->
	<h2 class="fade-in fade-in-2"><?php the_field('introductory_heading') ?></h2>
	<h3 class="fade-in fade-in-3"><?php the_field('introductory_subheading') ?></h3>



	<!--  CAROUSEL  -->

	<div id="carousel-example-generic" class="carousel slide fade-in fade-in-1" data-ride="carousel" data-interval="25000">
		<div class="carousel-inner" role="listbox">
	
			<div class="item active"> 
				<img class="tech-screenshot" src="<?php bloginfo('template_directory'); ?>/img/screenshot1.png" alt=""> 
				<div class="screenshot-caption">
					<p>Peaxy Name dashboard</p>
				</div>				
				<div class="carousel-caption fade-in fade-in-2">
				    <h1><?php the_field('screenshot1_title') ?></h1>
				    <p><?php the_field('screenshot1_description') ?></p>
				</div>
			</div>
			<div class="item"> 
				<img class="tech-screenshot" src="<?php bloginfo('template_directory'); ?>/img/screenshot2.png" alt="">
				<div class="screenshot-caption">
					<p>Replication Policy dashboard</p>
				</div>				
				<div class="carousel-caption">
				    <h1><?php the_field('screenshot2_title') ?></h1>
				    <p><?php the_field('screenshot2_description') ?></p>
				</div>
			</div>
			<div class="item"> 
				<img class="tech-screenshot" src="<?php bloginfo('template_directory'); ?>/img/screenshot3.png" alt="">
				<div class="screenshot-caption">
					<p>Flexible dashboard for configuration</p>
				</div>				
				<div class="carousel-caption">
				    <h1><?php the_field('screenshot3_title') ?></h1>
				    <p><?php the_field('screenshot3_description') ?></p>
				</div>
			</div>
			<div class="item"> 
				<img class="tech-screenshot" src="<?php bloginfo('template_directory'); ?>/img/screenshot4.png" alt="">
				<div class="screenshot-caption">
					<p>Search results showing non-textual file types</p>
				</div>				
				<div class="carousel-caption">
				    <h1><?php the_field('screenshot4_title') ?></h1>
				    <p><?php the_field('screenshot4_description') ?></p>
				</div>
			</div>
			<div class="item"> 
				<img class="tech-screenshot" src="<?php bloginfo('template_directory'); ?>/img/screenshot5.png" alt="">
				<div class="screenshot-caption">
					<p>Configuring security</p>
				</div>									
				<div class="carousel-caption">
				    <h1><?php the_field('screenshot5_title') ?></h1>
				    <p><?php the_field('screenshot5_description') ?></p>
				</div>
			</div>
			<div class="item"> 
				<img class="tech-screenshot" src="<?php bloginfo('template_directory'); ?>/img/screenshot6.png" alt=""> 
				<div class="carousel-caption">
				    <h1><?php the_field('screenshot6_title') ?></h1>
				    <p><?php the_field('screenshot6_description') ?></p>
				</div>
			</div>
		</div>
		<ol class="carousel-indicators fade-in fade-in-3">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
			<li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
			<li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
			<li data-target="#carousel-example-generic" data-slide-to="4" class=""></li>
			<li data-target="#carousel-example-generic" data-slide-to="5" class=""></li>
		</ol>
	</div>

	<!-- ONE-PAGER SECTION -->
	<p class="fade-in fade-in-2"><?php the_field ('One_pager') ?></p>


	<!-- VISUALIZATION SECTION -->
	<p class="fade-in fade-in-2"><?php the_field ('Visualization') ?></p>

</div>




<?php get_footer(); ?>