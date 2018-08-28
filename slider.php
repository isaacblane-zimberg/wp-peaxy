<script type="text/javascript">
var $ = jQuery;
$(window).load(function() {
  $(".home_page_slider").slick({
    autoplay: false,
    arrows: false,
    dots: false,
    autoplaySpeed: 5000,
    appendDots: $('div.slider_text')
  });
});

</script>
<?php
$args = array( 'post_type' => 'home_page_slide', 'posts_per_page' => 1, 'order'=>'ASC' );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
if ( has_post_thumbnail() ) {
  $featured_image = get_the_post_thumbnail_url();
}
$small_image = get_field( "small_image" );
$medium_image = get_field( "medium_image" );
$large_image = get_field( "large_image" );
endwhile;
?>
<?php
  wp_reset_postdata();
?>
<style type="text/css">

  .home_page_slider{
    height:250px;
    /*z-index:999;
    position:relative;*/
    margin-bottom:100px;
  }

  @media(min-width:400px){
    .home_page_slider{
        z-index:0;
    }
  }

  .slider_wrapper{
    background-image:url('<?php echo $small_image; ?>');
    /*background-size:cover;*/
    background-size:100%;
    background-repeat:no-repeat;
    height:100vh;
    /*background-position:center center;*/
    background-position:center -70px;
    width:100%;
  }
  .slider_text{
    width:80%;
    background:linear-gradient(180deg, #d4e2e7 0%, #d4e2e7 40%, #ffffff 40%, #ffffff 100%);
    padding-bottom:5%;
    margin-left: auto;
    margin-right: auto;
    padding: 2%;
    text-align: center;
    margin-top: 15%;
  }
  .slider_text h4{
    font-size:9.5px;
    margin-left:2px;
  }

  .slider_text h3{
    font-size:13px;
    padding-top:5%;
  }

  .slider_text p{
    font-size:11px;
  }

  .slider_text table tr td{
    vertical-align: top;
  }

  @media screen and (min-width:500px){
    .slider_wrapper{
      background-image:url('<?php echo $medium_image; ?>');
      background-position:center top;
    }
    .slider_text{
      background:linear-gradient(180deg, #d4e2e7 0%, #d4e2e7 45%, #ffffff 45%, #ffffff 100%);
      margin-top:23%;
    }
    .slider_text h4{
      font-size:14px;
      padding-bottom:0;
    }
    .slider_text h3{
      font-size:18px;
    }
    .slider_text p{
      font-size:13px;
    }
  }

  @media screen and (min-width:768px){
    .home_page_slider{
      height:400px;
    }

    .slider_text{
      margin-top:17%;
    }
    .slider_wrapper{
      background-image:url('<?php echo $large_image; ?>');
      background-position:center top;
    }
    .slider_text h4{
      font-size:18px;
    }
    .slider_text h3{
      font-size:22px;
    }
    .slider_text p{
      font-size:16px;
    }
  }

  @media screen and (min-width:992px){
    .home_page_slider{
      height:600px;
    }
    .slider_wrapper{
      background-image:url('<?php echo $featured_image; ?>');
      background-position:center -70px;
    }
    .slider_text{
      width: 80%;
      margin-top:15%;
    }
    .slider_text h4{
      padding-top:2%;
      font-size:20px;
    }
    .slider_text h3{
      font-size:24px;
    }
    .slider_text p{
      font-size:18px;
    }
  }
  @media screen and (min-width:1200px){
    .home_page_slider{
      height:800px;
    }
    .slider_wrapper{
      background-position:center -95px;
    }
    .slider_text{
      width: 60%;
      margin-top:16%;
    }
    .slider_text h4{
      font-size:22px;
    }
    .slider_text h3{
      font-size:26px;
    }
    .slider_text p{
      font-size:20px;
    }
  }

  .slider_text_image{
    width:100%!important;
    height:auto!important;
  }

  ul.slick-dots{
    display: block;
    width: 50%;
    margin: 0 auto;
    height: auto;
    overflow: hidden;
    text-align: center;
    padding-top:2%;
  }

  ul.slick-dots li.slick-active{
    background:url('<?php bloginfo('template_directory'); ?>/images/active_slide.png');
  }

  ul.slick-dots li{
    display:inline-block;
    background:url('<?php bloginfo('template_directory'); ?>/images/inactive_slide.png');
    background-repeat: no-repeat;
    width:10px;
    height: 10px;
    margin-left: 5px;
    margin-right: 5px;
    cursor:pointer;
  }

  ul.slick-dots li button{
    background:transparent;
    border:none;
    font-size:0;
  }
</style>
<div class="home_page_slider">
  <?php
  $args = array( 'post_type' => 'home_page_slide', 'posts_per_page' => 1, 'order'=>'ASC' );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();
  /*if ( has_post_thumbnail() ) {
    $featured_image = get_the_post_thumbnail_url();
  }
  $small_image = get_field( "small_image" );
  $medium_image = get_field( "medium_image" );
  $large_image = get_field( "large_image" );*/
  ?>
  <div class="slider_wrapper">
    <div class="slider_text">
      <?php echo the_content(); ?>
      <h3><?php echo the_title(); ?></h3>
      <p class="description">
      <?php
        if(has_excerpt()){
          ?>

          <?php
            echo the_excerpt();
          ?>
        <?php
        }
      ?>
      </p>
    </div>

  </div>
  <?php
  endwhile;
  ?>
  <?php
    wp_reset_postdata();
  ?>
</div>
