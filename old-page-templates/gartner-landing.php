<?php /* Template Name: Gartner Landing Page */ ?>

<?php get_header(); ?>

<!-- HERO SECTION -->
<div class="hero gartner-hero" id="gartner">
    <div class="container">
        <?php the_field('page_heading') ?>
    </div>
</div>
<!-- <div class="gartner-logo-container">
    <img class="gartner-logo" src="<?php bloginfo('template_directory'); ?>/img/gartner-logo-shadow.png" alt="">
</div> -->

<!-- CONTENT -->
<div class="blog-content" id="gartner-landing-page">
    <?php
    if( have_rows('quote_block') ):
    while ( have_rows('quote_block') ) : the_row(); ?>
        <div class="company-update">
            <h4><?php the_sub_field('quote') ?></h4>
        </div> 
    <?php endwhile;  
    endif;
    ?>
    <div class="table">
        <div id="gartner-content">

            <!-- CONTENT -->
            <h2 class="gartner-header"><?php the_field('header') ?></h2>
            <p><?php the_field('body') ?></p>
            <div class="gartner-features">
                <ul>
                    <li>
                        <img class="list-icon" src="<?php the_field('icon1') ?>" alt="">
                        <h5><?php the_field('list_1_title') ?></h5>
                        <p><?php the_field('list_1') ?></p>
                    </li>
                    <li>
                        <img class="list-icon" src="<?php the_field('icon2') ?>" alt="">
                        <h5><?php the_field('list_2_title') ?></h5>
                        <p><?php the_field('list_2') ?></p>
                    </li>
                    <li>
                        <img class="list-icon" src="<?php the_field('icon3') ?>" alt="">
                        <h5><?php the_field('list_3_title') ?></h5>
                        <p><?php the_field('list_3') ?></p>
                    </li>                       
                </ul>
            </div>
                <?php
                if( have_rows('download_block') ):
                while ( have_rows('download_block') ) : the_row(); ?>
                    <p style="font-style: italic"><?php the_sub_field('read_report') ?>  <!--<a href="<?php the_sub_field('report_link') ?>">click here</a>--></p>
                <?php endwhile;  
                endif;
                ?>
        </div>
        <!-- <div class="gartner-sidebar">
            <div class="gartner-form-heading">
                <h3><?php the_field('sidebar_title') ?></h3>
                <h4><?php the_field('sidebar_subtitle') ?></h4>
                <p><?php the_field('sidebar_body') ?></p>
            </div>
            <div class="gartner-form">
                <script type="text/javascript">
                    var ss_form = {'account': 'MzawMDE2MjCzAAA', 'formID': 'BcFJAQAgDAMwRX3sBjkt86-BhD5VJ4jQK6TLoOxGcC1Wzjv2AQ'};
                    ss_form.width = '100%';
                    ss_form.height = '300';
                    ss_form.domain = 'app-3QMUAIFKOS.marketingautomation.services';
                    // ss_form.hidden = {'Company': 'Anon'}; // Modify this for sending hidden variables, or overriding values
                </script>
                <script type="text/javascript" src="https://koi-3QMUAIFKOS.marketingautomation.services/client/form.js?ver=1.1.1"></script>
                <center><p class="form-disclaimer" style="font-size:12px"></p></center>
            </div>
        </div>-->
    </div>
    <div id='gartner-info-links'>
      <div class='gartner-info-link'>
       <div class='gartner-info-link-image'>
        <a href='https://peaxy.net/digital-twin/'><img src='http://7cc.00d.mwp.accessdomain.com/wp-content/uploads/2018/01/DigTwinsGartnerbutton.jpg'/ alt='Peaxy Aureum empowers universal access to data'></a>
        </div>
      </div>
      <div class='gartner-info-link'>
       <div class='gartner-info-link-image'>
        <a href='https://peaxy.net/industrial-analytics/'><img src='http://7cc.00d.mwp.accessdomain.com/wp-content/uploads/2018/01/IndAnalyticsGartnerbutton.jpg' alt='Aureum provides a large-scale data infrastructure that consolidates data on and off premises into data lakes supported by the unified Peaxy namespace.'/></a>
        </div>
      </div>
        <div style='clear: both;'></div>
    </div>
    <div class="disclaimer-container">
        <p class="disclaimer">
            <?php the_field('disclaimer') ?>
        </p>
    </div>  
</div>

<?php get_footer(); ?>