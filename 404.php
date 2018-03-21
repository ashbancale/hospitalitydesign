<?php get_header(); ?>
          

    <!--START #error-block-->
<div id="error-block">
    <div class="container">    
        
        <h1>404 page not found</h1>
        <h2>Sorry, the page you were looking for doesn't exist.</h2>
        <p>Please try the links below or use the search above to help find your way</p>
           
        <p>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> <span>|</span>
            <a href="<?php bloginfo('siteurl'); ?>/site-map/">Site Map</a> <span>|</span>
            <a href="<?php bloginfo('siteurl'); ?>/contact-us/">Contact Us</a></p>
           
        <p>If you followed a broken link, please let us know where the broken link came from.</p>
    </div>
</div>
<!--END #error-block --> 


<?php get_footer(); ?>  