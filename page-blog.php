<?php
/* Template Name: Blog */
?>

<?php get_header(); ?>

<!-- Start: BANNER -->
<?php
    $bg_size = get_field('banner_size');
    $clipped = get_field('clipped');
    $bg_image = get_field('banner_bg_img');
    $bg_color = get_field('banner_bg_color');
    $title = get_field('banner_title');
    $subtitle = get_field('banner_subtitle');
    $classes = get_field('banner_classes');
    $styles = get_field('custom_styles');
    $video = get_field('banner_bg_video');
    $video_mp4 = get_field('banner_mp4');
    $video_webm = get_field('banner_webm');
    $poster = get_field('banner_video_poster');

    echo '<section class="banner ';
    if ($bg_size == 'small'){echo 'banner--s ';}
    if ($bg_size == 'large'){echo 'banner--l ';}
    if ($clipped){echo 'is--clipped ';}
    if ($video){echo 'has--video ';}
    if ($classes){echo $classes;}
    echo '" style="';
    if ($bg_image){echo 'background-image:url(\''. $bg_image . '\'); ';}
    if ($bg_color){echo 'background-color:'. $bg_color;}
    if ($styles){echo $styles;}
    echo '">';
        echo '<div class="banner__content ';
        if (get_field('light_background')){echo 'is--light';}
        echo '">';
            echo '<div class="row">';
                echo '<div class="col col--8-of-12 col--centered">';
                if ($title) {
                    echo '<h1 class="title">' . $title . '</h1>';
                }
                if ($subtitle) {
                    echo '<h2 class="subtitle">' . $subtitle . '</h2>';
                }
                echo '</div>';
            echo '</div>';
        echo '</div>';
        if ($video){
            echo '<video class="banner__video" poster="' . $poster . '" autoplay="autoplay" loop muted>';
                echo '<source src="' . $video_mp4 . '" type="video/mp4" />';
                echo '<source src="' . $video_webm . '" type="video/webm" />';
            echo '</video>';
        }
    echo '</section>';
?>
<!-- End: BANNER -->

<section class="content-block">
	<div class="container container--fw">
		<div class="row">
			<!-- POSTS -->
			<div class="col col--6-of-12 col--push-1-of-12">
				<?php query_posts('post_type=post&post_status=publish&posts_per_page=-1'); ?>
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
						<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/facebook-icon.png" alt="Facebook"></a>
						<a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" title="Share on LinkedIn"><img src="<?php bloginfo('template_directory'); ?>/assets/img/linkedin-icon.png" alt="LinkedIn"></a>
						<a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Check out this blog post from Peaxy"><img src="<?php bloginfo('template_directory'); ?>/assets/img/twitter-icon.png" alt="Twitter"></a>
						<a href="mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/email-icon.png" alt="Email"></a>
					</div>
					<!-- social links -->
					<hr class="blog-separator">
				</div>
				<!-- end / reset loop -->
				<?php endwhile; else : ?>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
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
