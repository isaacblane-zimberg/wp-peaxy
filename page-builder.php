<?php /* Template Name: Page Builder */ ?>

<?php get_header();?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>

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

<!-- Start: CONTENT BLOCKS -->
<?php if( have_rows('sections') ): ?>
<?php
    while( have_rows('sections') ): the_row();
    $type = get_sub_field('block_type');
    $bg_image = get_sub_field('bg_image');
    $bg_color = get_sub_field('bg_color');
    $classes = get_sub_field('classes');
?>

    <?php if ($type == 'box'): ?>
        <!--  Block: Box -->
        <?php $content = get_sub_field('block_box'); ?>
        <section id="<?php the_sub_field('id'); ?>" class="content-block type--<?php echo $type . ' ' . $classes; ?>" style="<?php if ($bg_image){echo 'background-image:url(\'' . $bg_image . '\');';} if ($bg_color){echo 'background-color:'. $bg_color;} ?>">
            <div class="container container--fw">
                <div class="row">
                    <div class="col col--12-of-12 col--centered">
                        <?php echo $content['content']; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($type == 'quote'): ?>
        <!--  Block: Quote -->
        <?php $content = get_sub_field('block_quote'); ?>
        <section id="<?php the_sub_field('id'); ?>" class="content-block type--<?php echo $type . ' ' . $classes; ?>" style="<?php if ($bg_image){echo 'background-image:url(\'' . $bg_image . '\');';} if ($bg_color){echo 'background-color:'. $bg_color;} ?>">
            <div class="container container--fw">
                <span class="quote"><?php echo $content['quote']; ?></span>
                <div class="citation">
                    <span class="cite__name">&ndash; <?php echo $content['citation_name']; ?>,</span>
                    <span class="cite__title"><?php echo $content['citation_title']; ?></span>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($type == 'wysiwyg'): ?>
        <!--  Block: WYSIWYG -->
        <?php $content = get_sub_field('block_wysiwyg'); ?>
        <section id="<?php the_sub_field('id'); ?>" class="content-block type--<?php echo $type . ' ' . $classes; ?>" style="<?php if ($bg_image){echo 'background-image:url(\'' . $bg_image . '\');';} if ($bg_color){echo 'background-color:'. $bg_color;} ?>">
            <div class="container container--fw">
                <?php echo $content['wysiwyg']; ?>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($type == 'panel-split'): ?>
        <!--  Block: Panel (Split Layout) -->
        <?php $content = get_sub_field('block_panel_split'); ?>
        <section id="<?php the_sub_field('id'); ?>" class="content-block type--panel type--<?php echo $type . ' ' . $classes; ?>" style="<?php if ($bg_image){echo 'background-image:url(\'' . $bg_image . '\');';} if ($bg_color){echo 'background-color:'. $bg_color;} ?>">
            <div class="container container--fw">
                <div style="padding:0 24px;">
                    <div class="row">
                        <div class="col col--10-of-12 col--centered">
                            <?php echo $content['top_panel']; ?>
                        </div>
                    </div>
                </div>
                <div class="flex__wrapper">
                    <div class="flex__child">
                        <div class="flex__child--inner">
                            <?php echo $content['left_panel']; ?>
                        </div>
                    </div>
                    <div class="flex__divider">&nbsp;</div>
                    <div class="flex__child">
                        <div class="flex__child--inner">
                            <?php echo $content['right_panel']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($type == 'panel-anchor'): ?>
        <!--  Block: Panel (Anchor Blocks) -->
        <?php $content = get_sub_field('block_panel_anchor'); ?>
        <section id="<?php the_sub_field('id'); ?>" class="content-block type--panel type--<?php echo $type . ' ' . $classes; ?>" style="<?php if ($bg_image){echo 'background-image:url(\'' . $bg_image . '\');';} if ($bg_color){echo 'background-color:'. $bg_color;} ?>">
            <div class="container container--fw">
                <div style="padding:0 24px;">
                    <div class="row">
                        <div class="col col--10-of-12 col--centered">
                            <?php echo $content['content']; ?>
                        </div>
                    </div>
                </div>
                <div class="flex__wrapper">
                    <?php if( have_rows('anchor_blocks') ): ?>
                    <?php while( have_rows('anchor_blocks') ): the_row(); ?>
                        <div class="anchor">
                            <div class="anchor__info">
                                <div class="anchor__icon">
                                    <img class="anchor__icon--light" src="<?php the_sub_field('light_icon'); ?>" alt="">
                                    <img class="anchor__icon--dark" src="<?php the_sub_field('dark_icon'); ?>" alt="">
                                </div>
                                <h4><?php the_sub_field('title'); ?></h4>
                                <p><?php the_sub_field('description'); ?></p>
                            </div>
                            <a class="btn" href="<?php the_sub_field('anchor_id'); ?>"><?php the_sub_field('anchor_text'); ?></a>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($type == 'split'): ?>
        <!--  Block: Split Layout -->
        <?php
            $content = get_sub_field('block_split_layout');
            $stack = $content['stack_order'];
            $alignment = $content['column_alignment'];
            $shadowLeft = $content['left_shadow'];
            $shadowRight = $content['right_shadow'];
        ?>
        <section id="<?php the_sub_field('id'); ?>" class="content-block type--<?php echo $type . ' ' . $classes; ?>" style="<?php if ($bg_image){echo 'background-image:url(\'' . $bg_image . '\');';} if ($bg_color){echo 'background-color:'. $bg_color;} ?>">
            <div class="container container--fw">
                <div class="flex__wrapper <?php echo $stack . ' v-align-' . $alignment; ?>">
                    <div class="flex__child">
                        <div class="flex__child--inner <?php if ($shadowLeft){echo ' has--shadow';} ?>">
                            <?php echo $content['left_block']; ?>
                        </div>
                    </div>
                    <div class="flex__child">
                        <div class="flex__child--inner <?php if ($shadowRight){echo ' has--shadow';} ?>">
                            <?php echo $content['right_block']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($type == 'people'): ?>
        <!--  Block: People List -->
        <?php $content = get_sub_field('block_people_list'); ?>
        <section id="<?php the_sub_field('id'); ?>" class="content-block type--<?php echo $type . ' ' . $classes; ?>" style="<?php if ($bg_image){echo 'background-image:url(\'' . $bg_image . '\');';} if ($bg_color){echo 'background-color:'. $bg_color;} ?>">
            <div class="container container--fw">
                <?php if ($content['title']) : ?>
                <div style="padding:0 24px;">
                    <h3><?php echo $content['title']; ?></h3>
                </div>
                <?php endif; ?>
                <div class="row">
                    <?php if( have_rows('people') ): ?>
                    <?php while( have_rows('people') ): the_row(); ?>
                        <?php $image = get_sub_field('photo'); ?>
                        <?php $id = str_replace(" ", "", get_sub_field("name")); ?>
                        <?php $bio = get_sub_field('bio'); ?>
                        <div class="col col--1-of-5 col--m-1-of-3 col--s-1-of-2 team-member <?php if ($bio) { echo 'has--bio'; } ?>"
                        <?php if ($bio) { echo 'data-toggle="modal" data-target="#' . $id . '-bio"'; } ?>>
                            <img class="team-member__photo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                            <span class="team-member__name"><?php echo the_sub_field('name'); ?></span>
                            <span class="team-member__title"><?php echo the_sub_field('title'); ?></span>
                        </div>
                        <!-- Bio modal -->
                        <?php if ($bio) : ?>
                            <div class="modal fade" id="<?php echo $id; ?>-bio" tabindex="-1" role="dialog" style="display: none;">
                                <div class="modal-dialog modal-medium">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <h3 class="modal-title" style="margin-bottom:0;"><?php echo the_sub_field('name'); ?></h3>
                                            <p style="margin-top:0;">
                                                <?php echo the_sub_field('title'); ?>
                                            </p>
                                        </div>
                                        <div class="modal-body" style="margin-top:16px; overflow:hidden;">
                                            <div style="float:left; margin:0 16px 0 0; width:180px; text-align:center;">
                                                <img class="team-member__photo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                            </div>
                                            <?php the_sub_field('bio'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <!-- /Bio modal -->
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($type == 'timeline'): ?>
        <!--  Block: Timeline -->
        <?php $content = get_sub_field('block_timeline'); ?>
        <section id="<?php the_sub_field('id'); ?>" class="content-block type--<?php echo $type . ' ' . $classes; ?>" style="<?php if ($bg_image){echo 'background-image:url(\'' . $bg_image . '\');';} if ($bg_color){echo 'background-color:'. $bg_color;} ?>">

            <?php if( have_rows('events_group') ): ?>
            <?php while( have_rows('events_group') ): the_row(); ?>
                <div class="timeline">
                    <div class="timeline-date"><?php the_sub_field('start_year'); ?></div>
                    <?php if( have_rows('event') ): ?>
            		<ul>
                        <?php while( have_rows('event') ): the_row(); ?>
            			<li class="fade-in fade-in-1">
            				<div class="timeline-dot"></div>
            				<h5><?php the_sub_field('date'); ?></h5>
            				<h2><?php the_sub_field('title'); ?></h2>
            				<p><?php the_sub_field('description'); ?></p>
            			</li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            <?php endwhile; endif; ?>
        </section>
    <?php endif; ?>

<?php endwhile; endif; ?>
<!-- End: CONTENT BLOCKS -->

<!-- Start: MODALS -->
<?php if( have_rows('modals') ): ?>
<?php while( have_rows('modals') ): the_row(); ?>
    <div class="modal fade" id="<?php the_sub_field('id'); ?>" tabindex="-1" role="dialog" style="display: none;">
        <div class="modal-dialog modal-small">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title"><?php the_sub_field('title'); ?></h4>
                </div>
                <div class="modal-body" id="<?php the_sub_field('id'); ?>-body">
                    <?php the_sub_field('content'); ?>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
<?php endwhile; endif; ?>

<?php endwhile; endif; ?>

<?php get_footer();?>
