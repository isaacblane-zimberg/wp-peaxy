<?php /* Template Name: White Paper Thank You Page */ ?>

<?php get_header(); ?>

<style>
    #follow {    
    	margin-top: 20px;
    	padding: 30px;
    	border-radius: 6px;
    	border: 2px solid #F2F2F2;
        font-size: 2em;
text-align:center;
}
 
    .social {} .social ul {
        padding: 0;
        margin-bottom: 0;
    }
    
    .social ul li {
        z-index: 99;
        display: inline-block;
    }
    
    .social ul li a {
        background-image: url("<?php bloginfo('template_directory'); ?>/img/social.png");
        width: 32px;
        height: 29px;
        float: left;
        z-index: 99;
    }
   
    .social ul li.twitter a {
        background-position: 96px;
    }
  
    .social ul li.facebook a {
        background-position: 64px;
    }
   
    .social ul li.youtube a {
        background-position: 32px;
    }

.relatedposts {
  display: table; 
	margin: 0 auto;
  padding: 0px 0px 10px 0px;
}

.relatedposts h3 {
    font-size: 1.1em;
    color: inherit;
    margin: 0px 0px 20px 0px;
}

.relatedposts .relatedpost {
float: left;
    width: 200px;
    text-align: center;
    margin: 0 10px;
}

.relatedposts .relatedpost .related-image {
    margin-bottom: 10px;
}


.relatedposts .relatedpost .related-image img{
    height: 100px;
    object-fit: cover;
    width: 200px;
}

    /*Mobile Styles*/
    @media (max-width: 885px) {

 .relatedposts {
	display:inherit;
	margin: inherit;
	text-align:center;
}

.relatedposts .relatedpost {
	float:none;
	width: 100%;
	margin: 20px 0px;
}

.relatedposts .relatedpost .related-image img {
	width: 100%;
	height: initial;
	object-fit: cover;
}

}

</style>

<!-- HERO SECTION -->
<div class="hero" id="about">
	<div class="container">
		<h1 class="text-xs-center fade-in fade-in-1"> </h1>
	</div>
</div>

<!-- CONTENT -->
<div class="blog-content">
	<div class="download-report">
		<a href="<?php the_field('report_link') ?>">
			<h6 class="contact-btn" id="download-btn">Download the White Paper</h6>
		</a>
		<div style='text-align:center;font-size:.85em;'>
			(You should also receive an email with the link shortly.)
		</div>
	</div>
	<div id="follow">
		<div>For more great content, follow us here:</div>
                <div class="social">
                    <ul>
                        <li class="linkedin">
                            <a href="https://www.linkedin.com/company/peaxy-inc-" target="_blank"></a>
                        </li>
                        <li class="twitter">
                            <a href="https://twitter.com/PeaxyAureum" target="_blank"></a>
                        </li>
                        <li class="facebook">
                            <a href="http://www.facebook.com/PeaxyInc" target="_blank"></a>
                        </li>
                        <li class="youtube">
                            <a href="https://www.youtube.com/channel/UCdQ8vbmIkrlMK2UJX8dsy4Q" target="_blank"></a>
                        </li>
                    </	ul>
                </div>
	</div>
	<div>
		<h3><?php the_field('subheading') ?></h3>
		<p><?php the_field('body') ?></p>
		<p><?php the_field('read_more') ?></p>
		<img class="featured-blog" src="" alt="">
	</div>

	<div class='relatedposts'>
		<h3>You might also enjoy these related articles:</h3>
<?php
	$relatedPosts = array(get_field( "related_post_1" ), get_field( "related_post_2" ), get_field( "related_post_3" ));

        foreach($relatedPosts as $value){
	 $postURL = get_permalink($value);
	 $postTitle =  get_post($value)->post_title;
	 $postImg = get_field('main_image', $value);

	echo "<div class='relatedpost'>
		 <a class='relatedpostlink' href='$postURL' target='_blank'>
		   <div class='related-image'><img src='$postImg'></div>
		   <div class='related-title'>$postTitle</div>
		 </a>
	      </div>";

	}

?>
	</div>
</div>


<?php get_footer(); ?>