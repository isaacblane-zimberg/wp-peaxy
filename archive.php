<?php get_header(); ?>

<!-- Start: BANNER -->
<section class="banner banner--s" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/bg/blog-hero.png');">
    <div class="banner__content">
        <div class="row">
            <div class="col col--8-of-12 col--centered">
                <h1 class="title">Blog: <?php single_cat_title(); ?></h1>
            </div>
        </div>
    </div>
</section>
<!-- End: BANNER -->

<section class="content-block">
	<div class="container container--fw">
		<div class="row">
			<!-- POSTS -->
			<div class="col col--6-of-12 col--push-1-of-12">
                <?php if( have_posts() ): ?>
            	<?php while( have_posts() ): the_post(); ?>
            	<!-- posts -->
            	<div class="posts fade-in fade-in-2">
            		<h6><?php the_category(); ?></h6>
            		<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
            		<span class="date"><?php the_field('date'); ?></span>
            		<span class="tags"><?php the_field('tags') ?></span>
            		<a href="<?php the_permalink(); ?>"><img src="<?php the_field('main_image') ?>" alt=""></a>
            		<p><?php the_excerpt(); ?></p>
            		<a href="<?php the_permalink(); ?>">Continue Reading</a>
            		<div class="social-share">
            			<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img//facebook-icon.png" alt="Facebook"></a>
            			<a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" title="Share on LinkedIn"><img src="<?php bloginfo('template_directory'); ?>/assets/img//linkedin-icon.png" alt="LinkedIn"></a>
            			<a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Check out this blog post from Peaxy"><img src="<?php bloginfo('template_directory'); ?>/assets/img//twitter-icon.png" alt="Twitter"></a>
            			<a href="mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img//email-icon.png" alt="Email"></a>
            		</div>
            		<!-- social links -->
            		<hr class="blog-separator">
            	</div>
            	<!-- end / reset loop -->
            	<?php endwhile; else : ?>
            	<?php endif; ?>
			</div>
			<!-- /POSTS -->

			<!-- SIDEBAR -->
			<div class="col col--3-of-12 col--push-1-of-12">
                <hr class="blog-separator">
        		<h6>CATEGORIES</h6>
        		<p><?php wp_list_categories('exclude=4,7&title_li='); ?></p>
        		<hr class="blog-separator">
        		<h6>RECENT POSTS</h6>
        		<p><?php get_archives('postbypost', 4); ?></p>
        		<hr class="blog-separator">
			</div>
			<!-- /SIDEBAR -->

		</div>
	</div>
</section>

<?php get_footer(); ?>
