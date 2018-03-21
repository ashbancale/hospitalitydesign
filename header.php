<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie10 lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie10 lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if !IE]><!--><script>if(/*@cc_on!@*/false){document.documentElement.className='ie10';}</script><!--<![endif]-->

<head>
<!-- Browser Title  -->

<title><?php wp_title(' - ', true, 'right'); ?></title>

<?php wp_head(); ?>             

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<meta name="keywords" CONTENT="restaurant design, hotel design, hospitality design, commercial interior design">
<meta name="google-site-verification" content="wGqR4nW2ml3vLsmrxOgNw2rqDqVksP8nZ75SHV0DEro" />
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon" />
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">


 
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skeleton.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?v=1.1" />
            

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href=""/>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.1.min.js"></script>
    <link href='//fonts.googleapis.com/css?family=PT+Serif:400,700|Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css' />     
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" language="javascript" src="//www.google.com/jsapi?key=ABQIAAAASx8O-6x5fkYrFOLd_9rGcBThCHcKAeHdM6r8_xzh1U_uYCj_RhTQHlt49cahNNgd8H-YW92yeC1PhA"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/LoadBlogPosts.js"></script>
    <!-- /static/chrome-slider-fix.css -->


<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/Jquery-fitvids.js"></script>

<!-- if single with gallery -->
<?php if ((get_post_type() == "galleries") || (get_post_type() == "projects") || (get_post_type() == "news")) { ?>


<?php } ?>

<!-- if homepage -->
<?php if(is_front_page()): ?>


<?php endif; ?>

<?php if(is_page(array('terms-of-use','privacy-policy','terms','privacy'))){ ?>
    <script>
      $.ajaxSetup({
          scriptCharset: "utf-8", //maybe "ISO-8859-1"
          contentType: "application/json; charset=utf-8"
      });
      $.ajax({
        type: 'GET',
        url: '//www.emeraldexpositions.com/wp-json/wp/v2/pages?slug=privacy-policy',
        data: { get_param: 'value' },
        dataType: 'json',
        success: function (data) {
          $.each(data, function(index, element) {
            var txt = element.content.rendered;
            $("#privacy").html(txt);
          });
        }
      });
      $.ajax({
        type: 'GET',
        url: '//www.emeraldexpositions.com/wp-json/wp/v2/pages?slug=terms-of-use',
        data: { get_param: 'value' },
        dataType: 'json',
        success: function (data) {
          $.each(data, function(index, element) {
            var txt = element.content.rendered;
            $("#terms").html(txt);
          });
        }
      });
    </script>
<?php } ?>
    


<!-- Share This Script -->
<script type="text/javascript">var switchTo5x=true;</script>
<script charset="utf-8" type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">
                    stLight.options({
                    publisher:'21bafb00-9a56-45cc-a093-ffe3cafcd8d0',
                    onhover: false,
                    minorServices:false
                   });
             </script>
<!-- End Share This -->


<!-- DFP Tags -->

<!-- Change later -->
<?php get_template_part('inc/ad-scripts'); ?> 
  

<!-- End DFP Tags -->


</head>
<body>
<?php if(is_front_page()){ ?>
<!-- /5993/nbm.con.hd/home -->
<div id="HD_wallpaper">
<script type="text/javascript">
googletag.cmd.push(function() { googletag.display('HD_wallpaper'); });
</script>
</div>
<?php } ?>

    
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KLBHZQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KLBHZQ');</script>
<!-- End Google Tag Manager -->

<?php if(is_front_page()){ ?>
<!-- begin top 1x1 - Show ad tag -->
<div id="HD_prestitial" style="float:left;">
<script type="text/javascript">
googletag.cmd.push(function() { googletag.display('HD_prestitial'); });
</script>
</div>
<?php } else { ?>

<!-- begin top 1x1 - Show ad tag -->
<div id="HD_interstitial" style="float:left;">
<script type="text/javascript">
googletag.cmd.push(function() { googletag.display('HD_interstitial'); });
</script>
</div>

<?php } ?>    


<!--START nav#network-->
    <nav id="network">
        <img src="<?php echo get_template_directory_uri(); ?>/images/network-nav-logo.png" class="network-logo" alt="HD Network">
        <h5><span class="ir"><a href="javascript:void(0)">Menu</a></span></h5>
        <ul>
            <li><a class="active" href="/index/">Hospitality Design</a></li>
            <li><a href="http://www.hdexpo.com/">HD Expo</a></li>
            <!-- li><a href="http://www.designamericas.com">Design Americas</a></li -->
            <li><a href="http://www.hdsummit.com">HD Summit</a></li>
            <li><a href="http://www.hdmediakit.com/">Advertise</a></li>            
        </ul>
    </nav>
<!--END nav#network-->            

<!-- START top ad block -->
<div id="ad-block">
    <div class="container">
      
        <div id='HD_728_Top' class="ad-center">
        <script type='text/javascript'>
        googletag.cmd.push(function() { googletag.display('HD_728_Top'); });
        </script>
        </div>

    </div>
</div>    
<!-- END top ad block -->

<div class="container">
    
    <!-- START header -->
    <header class="row">
        
        <div class="logo">
            <h3><span class="ir"><a href="<?php bloginfo('siteurl'); ?>">Hospitality Design</a></span></h3>
        </div>
                     
        <!-- START nav#main -->
        <?php 
        //change nav later 
        get_template_part('inc/main-nav'); 
        ?>  

        <!-- END nav#main -->
        
        
        <!-- START search -->
        <div class="search">
            <ul>
                <li><a href="javascript:void(0)">Search</a>
                    <form method="get" id="search-form" action="<?php bloginfo('siteurl'); ?>/">
                        <input type="text" value="Search" name="s" id="s" onblur="if(this.value == '') this.value = 'Search'" onfocus="if(this.value == 'Search') this.value = ''" />
                        <input type="submit" id="searchsubmit" value="" />
                    </form>
                </li>
            </ul>
        </div>
        <!-- END search -->
          
        <h4><a href="javascript:void(0)"><span class="ir">Menu</span></a></h4>
                       
        <!--START social -->
        <ul class="social">
            <li class="fb"><span class="ir"><a href="<?php echo do_shortcode("[pods name='sitesettings' field='facebook_link']"); ?>" target="_blank">Facebook</a></span></li>
            <li class="tw"><span class="ir"><a href="<?php echo do_shortcode("[pods name='sitesettings' field='twitter_link']"); ?>" target="_blank">Twitter</a></span></li>
            <li class="insta"><span class="ir"><a href="<?php echo do_shortcode("[pods name='sitesettings' field='instagram_link']"); ?>" target="_blank">Instagram</a></span></li>
            <li class="linkedin"><span class="ir"><a href="<?php echo do_shortcode("[pods name='sitesettings' field='linkedin_link']"); ?>" target="_blank">LinkedIn</a></span></li>
            <li class="gplus"><span class="ir"><a href="<?php echo do_shortcode("[pods name='sitesettings' field='googleplus_link']"); ?>" target="_blank">Google Plus</a></span></li>
        </ul>
        <!-- END social -->
                        
    </header>
    <!-- END header -->
</div>

<!-- START #breadcrumbs -->
<?php //only if article??? FIX THIS ?>
<section id="breadcrumbs-block">
    <div class="container">
        
            
            
    </div>
</section>
<!-- END #breadcrumbs -->

<?php if(is_front_page()){ ?>
<!-- Sliding Billboard Ad -->
<div class="container row">
    <div id="HD_sliding_billboard">
    <script type='text/javascript'>
    googletag.cmd.push(function() { googletag.display('HD_sliding_billboard'); });
    </script>
    </div>
</div>
<?php } ?>