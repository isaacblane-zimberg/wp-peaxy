<?php /* Template Name: White Paper Landing Page2 */?>

<?php get_header();?>

<style>
    html {
        margin-top: 0px !important;
    }

    .content img {
        width: inherit;
        margin-top: inherit;
    }

    .main-header .mobile-menu {
        display: none !important;
    }
    .main-header #main-navigation {
        display: none !important;
    }
    footer {
        display: none !important;
    }
    #whitepaper {
        line-height: normal;
    color: #5f6060;
    background-color: #fdf6ed;
    }

    .whitepaper-hero {
        text-align: center;
        height: 350px;
        padding: 20px 0px;
        /*background: linear-gradient( rgba(20, 20, 20, 0.27), rgba(20,20,20, .27)),url(<?php the_field('whitepaper-hero')?>);*/
        /* TODO: text and fix for IE8 */
        background: linear-gradient( rgba(20, 20, 20, 0.7), rgba(20,20,20, .2)),url(<?php the_field('whitepaper-hero')?>);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
    }

    .whitepaper-hero h1 {
        text-shadow: 1px 1px 7px rgb(36, 48, 63);
    }

    #whitepaper-landing-page {
        max-width: 900px;
        padding: 0px;
    }

    #whitepaper-head {
        background-color: <?php the_field('whitepaper-head-color')?>;
        color: #FFFFFF;
        font-size: 2.5em;
        line-height: 1em;
        padding: 20px;
        text-align: center;
    }

    #whitepaper-head h2 {
        color: #FFFFFF;
    }

    h3.whitepaper-subhead {
    font-weight: bold;
    font-size: 24px;
    }

    #whitepaper-description {
        margin-bottom: 20px;
    }

    #whitepaper .floaterbox {
    }

    #whitepaper .floaterbox-image {
    float: left;
    width: 400px;
        margin: 10px 10px 0px 0px;
    }

    #whitepaper .floaterbox-text {
    overflow: hidden;
    }

    .whitepaper-point {
        margin: 45px 0px;
    }

    .whitepaper-point-title {
        font-weight: bold;
        font-size:1.5em;
    color: #323b4c;
    }

    .whitepaper-point-description {
        font-size: 1.4em;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .whitepaper-description-close {
        font-size: 1.25em;
        text-align: center;
        font-weight: bold;
        margin-top: 1em;
    }

    #whitepaper-form-section {
        background-color: #323b4c;
        padding: 20px;
        text-align: center;
    }

    .whitepaper-form {
        margin: 0px auto;
        width: 95%;
    }

    .whitepaper-form .wpcf7-form label {
        width: 47%;
        margin: 0px 10px;
        text-align: left;
        font-weight: bold;
        color: #FFFFFF;
    }

    .whitepaper-form .wpcf7-form input {
        color: #000000;
    }

    .whitepaper-form .wpcf7-form input[type='submit'] {
        color: #FFFFFF;
    }

    .whitepaper-form .wpcf7-form input.wpcf7-form-control.wpcf7-submit.contact-btn {
        width: inherit;
        padding: 20px 30px 20px 75px;
        font-size: 1.5em;
        font-weight: bold;
        margin: 40px auto 0px auto;
        display: block;

    background: url(<?php bloginfo('template_directory');?>/img/whitepaper/arrow.png?v=1) no-repeat 15px center/50px 50px, linear-gradient(to bottom, #fdca36, #c96602);
    -webkit-border-radius: 12;
    -moz-border-radius: 12;
    border-radius: 12px;
    color: #ffffff;
    text-decoration: none;
    text-transform: uppercase;
    }

    /*Mobile Styles*/
    @media (max-width: 885px) {
        #whitepaper-landing-page {
            width: 100%;
        }

    .whitepaper-hero {
            height: 300px;
         }

    #whitepaper-description {
        padding: 0 5%;
    }

        .whitepaper-form .wpcf7-form label {
            width: 100%;
            margin: inherit;
            margin-bottom: 10px;
        }

        .whitepaper-form .wpcf7-form input.wpcf7-form-control.wpcf7-submit.contact-btn {
            white-space: normal;
        }

        .whitepaper-form .wpcf7-form p {
            margin-bottom: 0px;
        }

        .whitepaper-subhead {
            text-align: center !important;
        padding: 0 5%;
        }

        #whitepaper .floaterbox-image {
            margin: 20px auto !important;
            float: none !important;
            display: block !important;
        }

        #whitepaper-description {
            text-align: center;
        }
    }
    ul {
        padding-left: 1.5em;  /* allows the bullet to show since list-style-position set to outside in li */
    }

    ul, li {
        font-size: 1.1em;
    }

    li {
        list-style-type: disc;
        list-style-position: outside; /* lets wrapping text line up with that above it */
        margin-bottom: 0.5em;
    }

    @media (min-width: 965px) {
        .peaxy-logo {
            margin-right: auto;
            margin-left: auto;
        }
    }
</style>
<div id="whitepaper">
    <div class="hero whitepaper-hero">
        <div class="container">
            <h1>
                <?php the_field('whitepaper-hero-title')?>
            </h1>
        </div>
    </div>
    <div id="whitepaper-head">
        <div class="container">
            <h2>
                <?php the_field('whitepaper-head')?>
            </h2>
        </div>
    </div>
    <!-- CONTENT -->
    <div class="content" id="whitepaper-landing-page">
        <h3 class="whitepaper-subhead">
            <?php the_field('whitepaper-subhead', false, false)?>
        </h3>
        <div id="whitepaper-description">
            <div class="whitepaper-point floaterbox">
                <img class="floaterbox-image" src="<?php the_field('whitepaper-main-image')?>">
                    <div class="whitepaper-point-body floaterbox-text">
                        <div class="whitepaper-point-title">
                            <?php the_field('whitepaper-description-title', false, false)?>
                        </div>
                        <div class="whitepaper-point-description">
                            <?php the_field('whitepaper-description', false, false)?>
                        </div>
                        <ul>
                            <li>
                                <?php the_field('whitepaper-bullet-1', false, false)?>
                            </li>
                            <li>
                                <?php the_field('whitepaper-bullet-2', false, false)?>
                            </li>
                            <li>
                                <?php the_field('whitepaper-bullet-3', false, false)?>
                            </li>
                            <li>
                                <?php the_field('whitepaper-bullet-4', false, false)?>
                            </li>
                        </ul>
                    </div>
                    <div style="clear:both;">
                    </div>
                </img>
                <div class="whitepaper-description-close">
                    <?php the_field('whitepaper-closer', false, false)?>
                </div>
            </div>
            <div id="whitepaper-form-section">
                <div class="whitepaper-form">
                    <?php echo do_shortcode('[contact-form-7 id="2272" title="Whitepaper Download Form_copy"]'); ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        jQuery(document).ready(function($) {

        var url = window.location.hostname + window.location.pathname;
        var query = window.location.search;
		var referrer = document.referrer;

		$("#form-source").val(url);
		$("#form-query").val(query);
		$("#form-referrer").val(referrer);

        //temporarily handle on submit to test things out, then comment this out and swtich to mailsent
        /* $(".wpcf7").on('wpcf7:submit', function(event){
               $(".whitepaper-form-title").hide();
               $(".whitepaper-form").slideUp(500);
               $("#whitepaper-results").show(500);
               return false;
         }); */

        $(".wpcf7").on('wpcf7:mailsent', function(event) {
        location = '/whitepaper-thank-you';
            //$(".whitepaper-form-title").hide();
            //$(".whitepaper-form").slideUp(500);
            //$("#whitepaper-results").show(500);
        });

    });
    </script>

    <?php get_footer();?>
    
</div>