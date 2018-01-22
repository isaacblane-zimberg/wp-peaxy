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

    <!--  Block: Box -->
    <?php if ($type == 'box'): ?>
        <?php $content = get_sub_field('block_box'); ?>
        <section class="content-block type--<?php echo $type . ' ' . $classes; ?>" style="<?php if ($bg_image){echo 'background-image:url(\'' . $bg_image . '\');';} if ($bg_color){echo 'background-color:'. $bg_color;} ?>">
            <div class="container container--fw">
                <div class="row">
                    <div class="col col--6-of-12 col--centered">
                        <?php echo $content['content']; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!--  Block: Quote -->
    <?php if ($type == 'quote'): ?>
        <?php $content = get_sub_field('block_quote'); ?>
        <section class="content-block type--<?php echo $type . ' ' . $classes; ?>" style="<?php if ($bg_image){echo 'background-image:url(\'' . $bg_image . '\');';} if ($bg_color){echo 'background-color:'. $bg_color;} ?>">
            <div class="container container--fw">
                <span class="quote"><?php echo $content['quote']; ?></span>
                <div class="citation">
                    <span class="cite__name">&ndash; <?php echo $content['citation_name']; ?>,</span>
                    <span class="cite__title"><?php echo $content['citation_title']; ?></span>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!--  Block: WYSIWYG -->
    <?php if ($type == 'wysiwyg'): ?>
        <?php $content = get_sub_field('block_wysiwyg'); ?>
        <section class="content-block type--<?php echo $type . ' ' . $classes; ?>" style="<?php if ($bg_image){echo 'background-image:url(\'' . $bg_image . '\');';} if ($bg_color){echo 'background-color:'. $bg_color;} ?>">
            <div class="container container--fw">
                <?php echo $content['wysiwyg']; ?>
            </div>
        </section>
    <?php endif; ?>

    <!--  Block: Panel (Split Layout) -->
    <?php if ($type == 'panel-split'): ?>
        <?php $content = get_sub_field('block_panel_split'); ?>
        <section class="content-block type--panel type--<?php echo $type . ' ' . $classes; ?>" style="<?php if ($bg_image){echo 'background-image:url(\'' . $bg_image . '\');';} if ($bg_color){echo 'background-color:'. $bg_color;} ?>">
            <div class="container container--fw">
                <div style="padding:0 24px;">
                    <?php echo $content['top_panel']; ?>
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

    <!--  Block: Panel (Anchor Blocks) -->
    <?php if ($type == 'panel-anchor'): ?>
        <?php $content = get_sub_field('block_panel_anchor'); ?>
        <section class="content-block type--panel type--<?php echo $type . ' ' . $classes; ?>" style="<?php if ($bg_image){echo 'background-image:url(\'' . $bg_image . '\');';} if ($bg_color){echo 'background-color:'. $bg_color;} ?>">
            <div class="container container--fw">
                <div style="padding:0 24px;">
                    <?php echo $content['content']; ?>
                </div>
                <div class="row">
                    <?php if( have_rows('anchor_blocks') ): ?>
                    <?php while( have_rows('anchor_blocks') ): the_row(); ?>
                        <div class="col col--3-of-12 col--m-1-of-2">
                            <div class="anchor">
                                <div class="anchor__icon">
                                    <img class="anchor__icon--light" src="<?php the_sub_field('light_icon'); ?>" alt="">
                                    <img class="anchor__icon--dark" src="<?php the_sub_field('dark_icon'); ?>" alt="">
                                </div>
                                <h3><?php the_sub_field('title'); ?></h3>
                                <p><?php the_sub_field('description'); ?></p>
                                <a class="btn" href="<?php the_sub_field('anchor_id'); ?>"><?php the_sub_field('anchor_text'); ?></a>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!--  Block: Split Layout -->
    <?php if ($type == 'split'): ?>
        <?php
            $content = get_sub_field('block_split_layout');
            $stack = $content['stack_order'];
            $alignment = $content['column_alignment'];
            $shadowLeft = $content['left_shadow'];
            $shadowRight = $content['right_shadow'];
        ?>
        <section class="content-block type--<?php echo $type . ' ' . $classes; ?>" style="<?php if ($bg_image){echo 'background-image:url(\'' . $bg_image . '\');';} if ($bg_color){echo 'background-color:'. $bg_color;} ?>">
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

    <!--  Block: People List -->
    <?php if ($type == 'people'): ?>
    <?php endif; ?>

    <!--  Block: Timeline -->
    <?php if ($type == 'timeline'): ?>
    <?php endif; ?>

<?php endwhile; endif; ?>
<!-- End: CONTENT BLOCKS -->

<?php endwhile; endif; ?>

<?php get_footer();?>
