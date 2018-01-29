<?php /* Template Name: White Paper Landing Page */ ?>

<?php get_header(); ?>

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
        background: linear-gradient( rgba(20, 20, 20, 0.27), rgba(20,20,20, .27)),url(<?php the_field('whitepaper-hero') ?>);
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
        background-color: <?php the_field('whitepaper-head-color') ?>;
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
	width: 100px;
    	margin: 20px 50px 0px 0px; 
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
        font-size: 1.2em;
    }

    .whitepaper-description-close {
        font-size: 1.25em;
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

  	background: url(<?php bloginfo('template_directory'); ?>/img/whitepaper/arrow.png?v=1) no-repeat 15px center/50px 50px, linear-gradient(to bottom, #fdca36, #c96602);
  	-webkit-border-radius: 12;
  	-moz-border-radius: 12;
  	border-radius: 12px;
  	color: #ffffff;
  	text-decoration: none;
	text-transform: uppercase;
    }


    #whitepaper-mandates {
        background-color: #d6d2c4;
        /*color: #00456e;*/
        padding: 50px;
        font-size: 1.25em;
    }
   
    .whitepaper-mandates-title {
        text-align: center;
        font-size: 2em;
        font-weight: bold;
        line-height: 1.1em;
	color: #323b4c;
    	width: 80%;
    	margin: 0px auto 20px auto;
    }
   
    .whitepaper-mandates-description {
}

 .whitepaper-mandate {
        padding: 20px 0px;
    }
    
   
    .whitepaper-mandate-desc {
    }
    
    .whitepaper-mandate-title {
        font-size: 1.5em; 
       font-weight: bold;
	color: #323b4c;
    }
    
    .whitepaper-mandate-body {
}

    .whitepaper-footer-cta {
        background-color: #323b4c;
        text-align: center;
        height: auto;
        padding: 20px 0px;
        color: #FFFFFF;
        font-size: .85em;
    }
    
    .whitepaper-footer-cta-desc {
        display: inline-block;
        margin-right: 30px;
        font-size: 1.5em;
        text-align: left;
        vertical-align: middle;
        width: 55%;
    }
    
    .whitepaper-footer-cta-button {
        width: inherit;
        padding: 20px 30px 20px 75px;
	background: url(<?php bloginfo('template_directory'); ?>/img/whitepaper/arrow.png?v=1) no-repeat 15px center/50px 50px, linear-gradient(to bottom, #fdca36, #c96602);
  	-webkit-border-radius: 12;
  	-moz-border-radius: 12;
  	border-radius: 12px;
  	color: #ffffff;
  	text-decoration: none;
	text-transform: uppercase;
        font-size: 1.5em;
        font-weight: bold;
        color: #FFFFFF;
    }
   
.whitepaper-footer-cta-button:hover, .whitepaper-footer-cta-button:focus {
text-decoration: none;
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

        #whitepaper-mandates {
            text-align: center;
        }

        .whitepaper-mandate-desc {
            vertical-align: inherit;
            width: 100%;
        }

	.whitepaper-footer-cta {
		padding: 0 5%;
	}

        .whitepaper-footer-cta-desc {
            display: block;
            margin-right: 0px;
            font-size: 1.5em;
            text-align: center;
            vertical-align: middle;
            width: 100%;
        }

        .whitepaper-footer-cta-button {
            display: inline-block;
            margin-top: 10px;
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
    @media (min-width: 965px) {
        .peaxy-logo {
            margin-right: auto;
            margin-left: auto;
        }
    }
</style>

<div id='whitepaper'>
    <div class="hero whitepaper-hero">
        <div class="container">
            <h1><?php the_field( 'whitepaper-hero-title') ?></h1>
        </div>
    </div>
    <div id='whitepaper-head'>
        <div class="container">
            <h2><?php the_field( 'whitepaper-head') ?></h2>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="content" id="whitepaper-landing-page">
        <h3 class="whitepaper-subhead"><?php the_field('whitepaper-subhead', false, false) ?></h3>
        <div id='whitepaper-description'>

            <div class="whitepaper-point floaterbox">
               	<img class='floaterbox-image' src="<?php the_field('whitepaper-point1-image') ?>">
                <div class="whitepaper-point-body floaterbox-text">
			<div class="whitepaper-point-title"><?php the_field('whitepaper-point1-title', false, false) ?></div>
                	<div class="whitepaper-point-description"><?php the_field('whitepaper-point1-description', false, false) ?></div>
		</div>
                <div style='clear:both;'> </div>
            </div>
            <div class="whitepaper-point floaterbox">
	        <img class='floaterbox-image' src="<?php the_field('whitepaper-point2-image') ?>">
		<div class="whitepaper-point-body floaterbox-text">
                	<div class="whitepaper-point-title"><?php the_field('whitepaper-point2-title', false, false) ?></div>
                	<div class="whitepaper-point-description"><?php the_field('whitepaper-point2-description', false, false) ?></div>
		</div>
                <div style='clear:both;'> </div>
            </div>
            <div class="whitepaper-description-close">
                A new way of dealing with data access is needed in 2017.<b> Download our white paper and learn what the 4 mandates of a modern data access strategy are</b>, and why they are essential for companies looking for solutions to data-driven problems in 2017.
            </div>
        </div>

        <div id='whitepaper-form-section'>
            <div class='whitepaper-form'>
                <?php echo do_shortcode( '[contact-form-7 id="1598" title="Whitepaper Download Form"]' ); ?>
            </div>
        </div>



        <div id="whitepaper-mandates" style="">
            <div class='whitepaper-mandates-title'>The 4 Mandates of an Effective Data Access Strategy</div>
            <div class='whitepaper-mandates-description'>A data access strategy builds on a cohesive infrastructure for ingesting, aggregating, organizing, finding, preserving and protecting large unstructured data sets. To be truly effective in the realities of 2017, it must support the following key mandates:</div>

            <div class="whitepaper-mandate floaterbox" style="">
                <img class='floaterbox-image' src="<?php bloginfo('template_directory'); ?>/img/whitepaper/1.png?v=1" alt="">
                <div class="whitepaper-mandate-desc floaterbox-text" style="">
                    <div class="whitepaper-mandate-title" style="">
                        INGEST & AGGREGATE
                    </div>
                    <div class="whitepaper-mandate-body" style="">
                        As data flows into locations where analytics are performed, it must be indexed, categorized and classified for later retrieval. The system must know who can access each piece and how available it must be. Since there is far too much data to store centrally, it must be distributed across the storage system—and so must the indexes. The “namespace” in which documents are accessed must be distributed, yet unified.
                    </div>
                </div>
            </div>

            <div class="whitepaper-mandate floaterbox" style="">
                    <img class="floaterbox-image" src="<?php bloginfo('template_directory'); ?>/img/whitepaper/2.png?v=1" alt="">
                <div class="whitepaper-mandate-desc floaterbox-text" style="">
                    <div class="whitepaper-mandate-title" style="">
                        FIND AND ACCESS
                    </div>
                    <div class="whitepaper-mandate-body" style="">
                        Tools for locating information must extend beyond simple structured or text searches to many kinds of unstructured data. It must be able to look intelligently into CAD drawings or simulation results and relate them to common business needs. Users must be easily able to find the operational data they need, even if it is old and stored in a seldom-used archive. Analytics programs must be able to find and manipulate the data as well.
                    </div>
                </div>
            </div>

            <div class="whitepaper-mandate floaterbox" style="">
                    <img class="floaterbox-image" src="<?php bloginfo('template_directory'); ?>/img/whitepaper/3.png?v=1" alt="">
                <div class="whitepaper-mandate-desc floaterbox-text" style="">
                    <div class="whitepaper-mandate-title" style="">
                        PRESERVE & MANAGE
                    </div>
                    <div class="whitepaper-mandate-body" style="">
                        All data must have a known lifecycle, and be accessible throughout that lifecycle no matter how old. All kinds of server and storage systems must be supported. Each file should have an immutable pathname to make sure it never goes dark.
                    </div>
                </div>
            </div>

            <div class="whitepaper-mandate floaterbox" style="">
                    <img class="floaterbox-image" src="<?php bloginfo('template_directory'); ?>/img/whitepaper/4.png?v=1" alt="">
                <div class="whitepaper-mandate-desc floaterbox-text" style="">
                    <div class="whitepaper-mandate-title" style="">
                        SECURE
                    </div>
                    <div class="whitepaper-mandate-body" style="">
                        Data should be encrypted both in flight and at rest, and then checked for integrity. Access to data should be protected by authentication and authorization
                    </div>
                </div>
            </div>
        </div>

        <div class='whitepaper-footer-cta' style="">
            <div class="whitepaper-footer-cta-desc">
                This white paper walks you through the essentials of an effective data access strategy
            </div>
            <a href="#whitepaper-form-section" class="whitepaper-footer-cta-button">Download</a>
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

<?php get_footer(); ?>