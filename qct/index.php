<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="/style.css" type="text/css" />
    <link rel="stylesheet" href="/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="/css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="/custom-css/block.css" type="text/css" />
    <link rel="stylesheet" href="/custom-css/custom.css" type="text/css" />
    <link rel="stylesheet" href="/custom-css/qct.css" type="text/css" />

    <link rel="stylesheet" href="/css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
    	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/plugins.js"></script>

        
    <!-- Document Title
    ============================================= -->
    <title>Quilter's Creative Touch</title>
    
     

</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
        ============================================= -->
        <?php include 'header.php';?>
        <!-- #header end -->
        
        

<section id="slider" class="slider-parallax swiper_wrapper full-width clearfix">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    

                    <div class="swiper-slide dark" style="background-image: url('/images/product-overviews/qct/slider-ui.jpg');">
                            <div class="slider-caption slider-caption-center" style="float:right;">
                                <h2 data-caption-animate="fadeInUp">New Simplified Interface</h2>
                                <p data-caption-animate="fadeInUp" data-caption-delay="200">Even more powerful, and yet, easier.</p>
                            </div>
                    </div>

                    <div class="swiper-slide dark">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-center">
                                <h2 data-caption-animate="fadeInUp">All The Professional Longarm Features</h2>
                                <h2 data-caption-animate="fadeInUp" data-caption-delay="1000">AT A MIDARM PRICE</h2>
                            </div>
                        </div>
                        <div class="video-wrap">
                            <video poster="../images/videos/qnique-overview-poster.jpg" preload="auto" loop autoplay muted>
                                <source src='../images/videos/qnique-video-background.mp4' type='video/mp4' />
                                <source src='../images/videos/qnique-video-background.webm' type='video/webm' />
                            </video>
                            <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
                        </div>
                    </div>

                     <div class="swiper-slide dark">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-center">
                                <h2 data-caption-animate="fadeInUp">Trace Your Favorite Photographs!</h2>
                                <p data-caption-animate="fadeInUp" data-caption-delay="1000">Turn any photo into a pattern</p>
                            </div>
                        </div>
                        
                        <div class="video-wrap">
                            <video poster="../images/product-overviews/qct/trace-poster.jpg" preload="auto" loop autoplay muted>
                                <source src='../images/product-overviews/qct/trace-slider.mp4' type='video/mp4' />
                                <source src='../images/product-overviews/qct/trace-slider.webm' type='video/webm' />
                            </video>
                            <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
                        </div>
                    </div>

                    <div class="swiper-slide dark" style="background-image: url('../images/product-overviews/qct/short-v-long.jpg');">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-center">
                                <h2 data-caption-animate="fadeInUp">From Domestic to Long-Arm</h2>
                                <p data-caption-animate="fadeInUp" data-caption-delay="200">QCT is compatible with a wide variety of quilting machines and frames.
                                    <br /><a href="#" class="button button-border button-rounded" >See a full list here.</a></p>
                            </div>
                        </div>
                        <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);" data-caption-animate="fadeInUp"></div>
                    </div>
                    
                    

                </div>
                <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
                <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
            </div>

            <script>
                jQuery(document).ready(function($){
                    var swiperSlider = new Swiper('.swiper-parent',{
                        paginationClickable: false,
                        slidesPerView: 1,
                        grabCursor: true,
                        loop: true,
                        onSwiperCreated: function(swiper){
                            $('[data-caption-animate]').each(function(){
                                var $toAnimateElement = $(this);
                                var toAnimateDelay = $(this).attr('data-caption-delay');
                                var toAnimateDelayTime = 0;
                                if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
                                if( !$toAnimateElement.hasClass('animated') ) {
                                    $toAnimateElement.addClass('not-animated');
                                    var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                    setTimeout(function() {
                                        $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                                    }, toAnimateDelayTime);
                                }
                            });
                            SEMICOLON.slider.swiperSliderMenu();
                        },
                        onSlideChangeStart: function(swiper){
                            $('[data-caption-animate]').each(function(){
                                var $toAnimateElement = $(this);
                                var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                $toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
                            });
                            SEMICOLON.slider.swiperSliderMenu();
                        },
                        onSlideChangeEnd: function(swiper){
                            $('#slider').find('.swiper-slide').each(function(){
                                if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
                                if($(this).find('.yt-bg-player').length > 0) { $(this).find('.yt-bg-player').pauseYTP(); }
                            });
                            $('#slider').find('.swiper-slide:not(".swiper-slide-active")').each(function(){
                                if($(this).find('video').length > 0) {
                                    if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
                                }
                                if($(this).find('.yt-bg-player').length > 0) {
                                    $(this).find('.yt-bg-player').getPlayer().seekTo( $(this).find('.yt-bg-player').attr('data-start') );
                                }
                            });
                            if( $('#slider').find('.swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('video').get(0).play(); }
                            if( $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').playYTP(); }

                            $('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
                                var $toAnimateElement = $(this);
                                var toAnimateDelay = $(this).attr('data-caption-delay');
                                var toAnimateDelayTime = 0;
                                if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
                                if( !$toAnimateElement.hasClass('animated') ) {
                                    $toAnimateElement.addClass('not-animated');
                                    var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                    setTimeout(function() {
                                        $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                                    }, toAnimateDelayTime);
                                }
                            });
                        }
                    });

                    $('#slider-arrow-left').on('click', function(e){
                        e.preventDefault();
                        swiperSlider.swipePrev();
                    });

                    $('#slider-arrow-right').on('click', function(e){
                        e.preventDefault();
                        swiperSlider.swipeNext();
                    });
                });
            </script>

        </section>


        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <!--intro
                ======================-->
                <div class="container clearfix">
                    <div class="row clearfix">

                        <div class="col-lg-7">
                            <div class="heading-block topmargin">
                                <h3>Quilter's Creative Touch</h3>
                                <span class="before-heading">Creative power right at your fingertips</span>
                            </div>
                            <p class="lead">
                                Quilter's Creative Touch is the top-of-the-line automated quilting system. Enjoy the power of simplified pattern sewing with steps as easy as: <em>select, place, and sew!</em> Have the ultimate quilting experience with the advanced features needed to create, design, edit, layout, and quilt with absolute precision. Quilt your masterpiece with ease as Quilter's Creative Touch takes your ideas from design to reality. 
      		        </p>

                    <p class="center">

                    <a href="#" class="button button-rounded">Try a Free Demo!</a><br>
                    Download a free demo copy of the quilting software here!
                    </p>           
                        </div>

                        <div class="col-lg-5">
                                <img src="/images/product-overviews/qct/qnique-qct-push.jpg" data-animate="fadeIn" alt="Quilter's Cretive Touch ">
                        </div>

                    </div>
                    
                </div>
                
                
                
    <!--promo/demo video
==================================-->
          
              <div class="row clearfix center" style="background-color:rgb(245, 245, 245)">
                <div class="container clearfix" style="padding-bottom:50px;">

                  
                      <div class="heading-block topmargin nobottomborder nobottommargin">
                          <h3>See A Video Demo</h3>
                      </div>

                       <iframe width="560" height="315" src="http://www.youtube.com/embed/SZEflIVnhH8" frameborder="0" allowfullscreen></iframe>

                        <p>
                          Quilter's Creative Touch is the top-of-the-line automated quilting system. Enjoy the power of simplified pattern sewing with steps as easy as: <em>select, place, and sew!</em> Have the ultimate quilting experience with the advanced features needed to create, design, edit, layout, and quilt with absolute precision. Quilt your masterpiece with ease as Quilter's Creative Touch takes your ideas from design to reality. 
                        </p>

                        
                  </div>

              </div>

          





                    <!--ui section
                    =============================-->
                     <div class="section parallax dark nomargin" style="background-image: url('/images/dark-background.jpg'); padding:0px" data-stellar-background-ratio="0.1">

                        <div class="col-lg-5" style="padding-left:150px;" data-animate="fadeIn">
                            <div class="heading-block topmargin-lg">
                                <h3>Quilter's Creative Touch</h3>
                                <span class="before-heading">Creative power right at your fingertips</span>
                            </div>
                            <p>This latest Upgrade of Quilter's Crative Touch features a newly improved interface that's more powerful and eassier to use. The whole software has been made to work with touch screen devices running Windows 7 or 8. More feature have been added, and the software has been carefully re-designed to make pattern creation and quilt design easier.
                    </p>
                               
                        </div>

                        <div class="col-lg-7 topmargin" style="padding:0px;" data-animate="fadeInRight" >

                            <div style="position: relative;">
                                <img src="../images/product-overviews/qct/touch-ui.png" data-animate="fadeIn" alt="Touch Screen Freindly ">
                            </div>

                        </div>

                    </div>
                    
                
  
                
                 <!--flow-through-system
=================================================-->
                <div class="section parallax nomargin" style="background-image:url('/images/backgrounds/square_bg.png'); background-repeat:repeat;"  data-stellar-background-ratio="0.1">
                    <div class="container clearfix">

                        <div class="row topmargin-sm bottommargin-sm">
                            <div class="heading-block center nomargin nobottomborder">
                                <h2>Powerfully Simple</h2>
                                <span class="before-heading">From idea, to design, to quilt</span>
                            </div>
                        </div>
                        <div class="row topmargin-sm clearfix">
                            <div class="col-md-4" data-animate="fadeInUp">
                                <img src="/images/product-overviews/qct/pick-pattern.jpg" alt="selct a pattern">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h4>Pick a pattern</h4>
                                    <span class="before-heading">Expansive pattern library</span>
                                </div>
                                <p>Select a block, continuos line, corner, or more from the library of over 200 included patterns.</p>
                                
                            </div>

                            <div class="col-md-4" data-animate="fadeInUp" data-delay="200">
                                <img src="/images/product-overviews/qct/place.png" alt="using pantostacker in quilter's creative touch" />
                                <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                    <h4>Edit and place</h4>
                                    <span class="before-heading">Percise placement methods</span>
                                </div>
                                <p>Quilter's Creative Touch lets you place your patterns on your quilt the exact way you want. See your pattern in relation to quilt on-screen as set the placement.</p>
                            </div>
                            
                            <div class="col-md-4" data-animate="fadeInUp" data-delay="400">
                                <img src="/images/product-overviews/qct/needle-stitch.jpg" alt="stitching" />
                                <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                    <h4>Let your machine do the sewing</h4>
                                    <span class="before-heading">Automated quilting in your own home</span>
                                </div>
                                <p>The QuiltMotion motor plate and hardware come bundled with Quilter's Creative Touch. QuiltMotion controls your sewing machine to accurately stitch your quilt designs.</p>
                            </div>

                        </div>
                    </div>
                    
                </div>
                
                <!--features section
=================================-->
                <h2 class="toppadding-sm bottompadding-sm center bgcolor-second dark nobottommargin">Professional Quiltng Features</h2>
                 <div class="section nomargin" style="background-image:url("");">
                    <div class="container clearfix">

                        <div class="row topmargin-sm clearfix">
                            <div class="col-md-3" data-animate="fadeInUp">
                                <img src="/images/product-overviews/qct/panto-stacker.png" alt="Panto Stacker">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5>Simplified Pantograph Layout</h5>
                                </div>
                                <p>Creating and editing pantographs is even easier with <strong><em>Panto Stacker!</em></strong> Alternate rows, sizing, and number of patterns can all be edited in a few simple clicks.</p>
                                
                            </div>

                            <div class="col-md-3" data-animate="fadeInUp" data-delay="200">
                                <img src="/images/product-overviews/qct/patterncad.png" alt="Quilt Pattern Creation" />
                                <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                    <h5>Design Your Own Quilt Pattens</h5>
                                </div>
                                <p>The included <strong><em>Pattern CAD</em></strong> gives you the power to bring any idea to life and be stitched with Quilter's Creative Touch.</p>
                            </div>
                            
                            <div class="col-md-3" data-animate="fadeInUp" data-delay="400">
                                <img src="/images/product-overviews/qct/trace.png" alt="Trace Image For Quilt Pattern" />
                                <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                    <h5>Trace Your Favorite Photographs</h5>
                                </div>
                                <p>Create quilting patterns from your favorite photographs! Quilter's Creative Touch lets you import photos and trace your quilt patterns over them!</p>
                            </div>
                            <div class="col-md-3" data-animate="fadeInUp" data-delay="600">
                                <img src="/images/product-overviews/qct/record.jpg" alt="stitching" />
                                <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                    <h5>Record Free-Motion Quilting</h5>
                                </div>
                                <p>With Quilter's Creative Touch, you can record and save any free-motion quilted patterns to use or edit later. </p>
                            </div>
                            
                            <div class="col-md-12 center" data-animate="fadeIn">
                                <img src="/images/product-overviews/qct/qct-screen-shots.png" alt="Quilter's Creative Touch Screen Pictures" />
                                <a class="button button-rounded button-large center">See Full Feature Set Here</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                 
    <!--subscriptions Section
========================================-->
                
                <div class="section parallax nomargin" style="background-image: url('../images/product-overviews/qct/quilt-bg.jpg'); border-top:2px solid #B14949; border-bottom:2px solid #B14949;" data-stellar-background-ratio="0.2">
                                               
                    <div class="container center topmargin bottommargin">

                            <div class="heading-block center nomargin nobottomborder">
                                <h2>Take Your Quilting To the Next Level</h2>
                                <span class="before-heading" style="color:black;">Unlock The Full Potential Of Quilter's Creative Touch With:</span>
                            </div>
                            <img src="/images/product-overviews/qct/gold-logo.png" alt="Quilter's Creative Touch Gold Logo">
                          <p><a href="#" class="button button-rounded button-large">See all the benefits of subscription</a></p>

                    </div>
                    
                   
                    <div class="video-overlay overlay-light" style="background-color: rgba(255,255,255,0.8); z-index:1;"></div>

                </div>


                 <!--download demo Section
========================================-->
                
                <div class="section nomargin dark" style="background-color:#B14949;">
                                               
                    <div class="container center">

                            <div class="heading-block center nomargin nobottomborder">
                                <h2>Download a free Demo Copy of the Quilting Software!</h2>
                                <span class="before-heading">Free to try on your computer or tablet</span>
                            </div>
                          <a href="#" class="button button-rounded button-large">Get a free QCT demo here</a>

                    </div>

                </div>
                
                
               
                <!--compatibility
                ==================-->
                 <div class="row topmargin-lg nobottommargin">
                            <div class="heading-block center nomargin nobottomborder">
                                <h2>Incredibly Compatible</h2>
                            </div>
                </div>

                <div class="row notopmargin clearfix">
                            <div class="col-md-4">
                                <div class="heading-block nobottomborder dark center nobottommargin" data-animate="fadeInUp">
                                    <h4 style="padding:10px; background-color:#B14949;">Long-arm Machines</h4>
                                </div>

                                <img src="../images/product-overviews/qct/qct-on-long.jpg" alt="QCT on Longarm quilting machine">
                                 
                            </div>

                            <div class="col-md-4">
                                <div class="heading-block nobottomborder dark center nobottommargin" data-animate="fadeInUp">
                                    <h4 style="padding:10px; background-color:#B14949;">Mid-arm Machines</h4>
                                </div>
                                <img src="../images/product-overviews/qct/qct-on-mid.jpg" alt="QCT on Mid arm quilting machine" />
                                
                            </div>
                            
                            <div class="col-md-4">
                                <div class="heading-block nobottomborder dark center nobottommargin" data-animate="fadeInUp">
                                    <h4 style="padding:10px; background-color:#B14949;">Domestic Machines</h4>
                                </div>
                                <img src="../images/product-overviews/qct/qct-on-short.jpg" alt="QCT on domestic quilting machine" />
                                
                            </div>

                    </div>

                    <div class="container clearfix center topmargin-sm bottommargin-lg">
                                <p>Quilter's Creative Touch is designed to work with a large number of common quilting machines and quilting frames. It works with domestic machines (short-arms) as well as long-arms and midarms like the Qnique Quilter. It works with all of the current Grace quilting frames and most of the past Grace quilting grames.</p>
                                <p>Click here to learn more about<br />
                                    <a href="#" class="button button-rounded">QCT Machine and Frame Compatibility</a></p>
                    </div>




                <!--tutorials Section
========================-->
        <div class="row clearfix common-height">

                            <div class="col-md-6 center col-padding" style="background: url('../images/product-overviews/qct/fold-bg.jpg') center center no-repeat; background-size: cover;">
                                <div>&nbsp;</div>
                            </div>

                            <div class="col-md-6 center col-padding" style="background-color: #F5F5F5;">
                                <div>
                                    <div class="heading-block nobottomborder">
                                        <span class="before-heading color">Easily Understandable &amp; Customizable.</span>
                                        <h3>Walkthrough Videos &amp; Demos</h3>
                                    </div>

                                    <div class="center bottommargin">
                                        <a href="http://vimeo.com/101373765" data-lightbox="iframe" style="position: relative;">
                                            <img src="../images/product-overviews/qct/tut-play.jpg" alt="Video">
                                        </a>
                                    </div>
                                    <p class="lead nobottommargin">See some tutorial videos for Quilter's Creative Touch. Learn how to do some popular projects, or see a walk-though of the basics.</p>
                                </div>
                            </div>

            </div>


            <!--get QCT Now!
            ===================================-->
            <div class="section parallax nomargin" style="background-image:url('../images/backgrounds/light_wool.png'); background-repeat:repeat; border-top:8px solid #B14949; border-bottom:8px solid #B14949;"  data-stellar-background-ratio="0.1">
                    <div class="container clearfix topmargin-lg bottommargin-lg">

                            <div class="heading-block center nomargin nobottomborder">
                                <h2 style="color:#B14949;">Get Quilter's Creative Touch Now</h2>
                                <span class="before-heading" style="color:#48A0C4">Learn how you can get the ultimate quilting experience in your home!</span>
                                <a href="#" class="button button-rounded button-large button-secondary">See Purchase Options</a> or <a href="#" class="button button-rounded button-large">Download Free Demo</a>
                            </div>
                    </div>
                    
                </div>
                
                
                
                
               

                <script type="text/javascript">

                    jQuery(window).load(function(){

                        var $container = $('#portfolio');

                        $container.isotope({
                            transitionDuration: '0.65s',
                            masonry: {
                                columnWidth: $container.find('.portfolio-item:not(.wide)')[0]
                            }
                        });

                        $('#page-menu a').click(function(){
                            $('#page-menu li').removeClass('current');
                            $(this).parent('li').addClass('current');
                            var selector = $(this).attr('data-filter');
                            $container.isotope({ filter: selector });
                            return false;
                        });

                        $(window).resize(function() {
                            $container.isotope('layout');
                        });

                    });

                </script>

                

        

            </div>

        </section><!-- #content end -->

        <!-- Footer
        ============================================= -->
        <?php include 'footer.php' ?>
        <!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="../js/functions.js"></script>

</body>
</html>