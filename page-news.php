<?php
/* Template Name: News */
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
    if ($styles){echo $styles;}
    echo '" style="';
    if ($bg_image){echo 'background-image:url(\''. $bg_image . '\'); ';}
    if ($bg_color){echo 'background-color:'. $bg_color;}
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

<!-- CONTENT -->
<div class="content">

	<!-- Article Repeater -->
	<div class="masonry" style="margin-bottom:-200px;">
		<?php $loop = new WP_Query( array(
			'post_type' => 'articles',
			'posts_per_page' => 6
			)
		); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="masonry__child article-container-half fade-in fade-in-1">
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
		<a class="btn" style="display:block; margin-top:24px;" href="/peaxy-in-the-news">More News</a>
	</div>

	<!-- COMPANY UPDATES -->
	<hr>
	<h4 class="fade-in fade-in-2">COMPANY UPDATES</h4>
	<!-- Press Release loop -->
	<?php query_posts('post_type=company-update&posts_per_page=-1'); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="press-release fade-in fade-in-1">
			<a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
			<?php the_excerpt(); ?>
<!-- 			<a href="<?php the_permalink(); ?>">Continue Reading</a> -->
		</div>
		<?php endwhile; // end of the loop. ?>
		<?php wp_reset_query(); ?>

</div>

<?php get_footer(); ?>
