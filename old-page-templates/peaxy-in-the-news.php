<?php 
/* Template Name: Peaxy In The News */ 
?>

<?php get_header(); ?>

<div class="content">
	
	<hr class="no-pad" style="margin: 100px 0 0 0">	
	<h4 class="fade-in fade-in-1">PEAXY IN THE NEWS</h4>

	<div id="grid" >

		<?php $loop = new WP_Query( array(
			'post_type' => 'articles',
			'posts_per_page' => -1
			)
		); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

				<div class="article-container-half fade-in fade-in-1">
					<span class="article-tag"><?php the_field("article_publication"); ?></span>
					<div class="article-col-half left-col">
						<h1><?php the_title(); ?></h1>
						<p class="article-date"><?php the_field("article_date"); ?></p>
					</div>
					<div class="article-col-half right-col">
						<p><?php the_excerpt(); ?></p>
						<div class="article-link">
							<a href="<?php the_field("article_link"); ?>">Read More</a>
						</div>
					</div>
				</div>

		<?php endwhile; wp_reset_query(); ?>

	</div>

<div class="support-feature">
	<h1><a href="/news">Back to News</a></h1>
</div>

</div>

<?php get_footer(); ?>