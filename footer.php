<!-- START footer -->
<footer>
    <?php 
      global $seo_copy;
      get_template_part('inc/seo-copy'); 
    ?>
    <?php if (!empty($seo_copy)): ?>
        <div class="seo-copy">
            <div class="container">
                <?php echo $seo_copy; ?>
            </div>
        </div>
        <!-- end seo copy -->
        <?php endif; ?>         

     <div class="bottom-ad-block">
         <div class="container">
            
            <div id='HD_728_Bottom' class="ad-center">
            <script type='text/javascript'>
            googletag.cmd.push(function() { googletag.display('HD_728_Bottom'); });
            </script>
            </div>
            
         </div>   
     </div>



    <div class="footer-navs">
    <div class="container">
        <div class="four columns">
            <h3>sections</h3>
            <ul>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/">News</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>projects/">Projects</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>products">Products</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>people">People</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>galleries">Galleries</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>awards-events">Awards + Events</a></li>
            </ul>
        </div>
        
        <div class="four columns">
            <h3>tools</h3>
            <ul>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us">About Us</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us">Contact Us</a></li>
                <li><a href="http://www.hdmediakit.com/">Advertise</a></li>
                <li><a href="http://www.omeda.com/cgi-win/nhd.cgi?mode=main">Subscribe</a></li>
                <li><a href="<?php echo do_shortcode("[pods name='sitesettings' field='magazine_digital_edition_link']"); ?>" target="_blank">Digital Edition</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>newsletters">Newsletters</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>site-map">Site Map</a></li>
            </ul>
        </div>
        
        <div class="four columns">
            <h3>resources</h3>
            <ul>
                <li><a href="<?php echo do_shortcode("[pods name='sitesettings' field='buyers_guide_link']"); ?>" target="_blank">Buyer's Guide</a></li>
                <li><a href="<?php echo do_shortcode("[pods name='sitesettings' field='catalog_request_link']"); ?>" target="_blank">Catalog Request</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>hd-editorial-advisory-board">HD Editorial Advisory Board</a></li>
                <!--li><a href="/whitepapers.shtml" target="_blank">Whitepapers</a></li-->
                <!--li><a href="" target="_blank">Webinars</a></li  -->

            </ul>
        </div>
        
        <div class="four columns">
            <h3>brands</h3>
            <ul>
                <li><a href="http://www.hdexpo.com/" target="_blank">HD Expo</a></li>
                <!-- li><a href="" target="_blank">Design Americas</a></li -->
                <li><a href="http://www.hdsummit.com/" target="_blank">HD Summit</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>awards-events/HD-Awards" target="_blank">HD Awards</a></li>
                <li><a href="http://www.hdplatinumcircle.com" target="_blank">Platinum Circle</a></li>
                <li><a href="http://www.hdnextgenforum.com/wotf/" target="_blank">Wave of the Future</a></li>
                <li><a href="http://www.hdnextgenforum.com/" target="_blank">NextGen Forum</a></li>
            </ul>
        </div>        
    </div>
</div>   
    
<div class="copyright container">   
    <p>&copy; <?php echo date('Y'); ?> <a target="_blank" href="http://www.emeraldexpositions.com">Emerald Expositions</a>, LLC. All rights reserved. <span> | <a target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>terms-of-use">Terms of Use</a> | <a target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy">Privacy Policy</a></span></p>
    
    <ul class="social">
        <li class="fb"><span class="ir"><a href="<?php echo do_shortcode("[pods name='sitesettings' field='facebook_link']"); ?>" target="_blank">Facebook</a></span></li>
        <li class="tw"><span class="ir"><a href="<?php echo do_shortcode("[pods name='sitesettings' field='twitter_link']"); ?>" target="_blank">Twitter</a></span></li>
        <li class="insta"><span class="ir"><a href="<?php echo do_shortcode("[pods name='sitesettings' field='instagram_link']"); ?>" target="_blank">Instagram</a></span></li>
        <li class="linkedin"><span class="ir"><a href="<?php echo do_shortcode("[pods name='sitesettings' field='linkedin_link']"); ?>" target="_blank">LinkedIn</a></span></li>
        <li class="gplus"><span class="ir"><a href="<?php echo do_shortcode("[pods name='sitesettings' field='googleplus_link']"); ?>" target="_blank">Google Plus</a></span></li>
        <li class="rss"><span class="ir"><a href="<?php echo esc_url( home_url( '/' ) ); ?>rss-feeds">RSS</a></span></li>
    </ul>
 </div>
 
        
</footer>
<!-- END footer -->

<!-- CUSTOM JS FILES -->
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.7.1.min.js"></script>
<!--script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script-->
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<!-- if home -->
<?php if(is_front_page()): ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/home-sliders.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/home-carousel.js"></script>
<?php endif; ?>
<!-- end if home -->
<!-- if galleries -->
<?php if (get_post_type() == "galleries") : ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/gallery-script.js"></script>
<?php endif; ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.flexslider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-validate.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/form-validation.js"></script>

<!-- if home -->
<?php if(is_front_page()): ?>
    <script>
        (function() {
            Response.create({ mode: 'markup', prefix: 'r', breakpoints: [0,320,481,641,961,1020,1281] });
            Response.create({ mode: 'src',  prefix: 'src', breakpoints: [0,320,481,641,961,1020,1281] });
        })();
    </script>
<?php endif; ?>
<!-- end if home -->

<?php wp_footer(); ?>

</body>
</html>