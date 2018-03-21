<?php get_header(); ?>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>  

<div class="main-container">
  <div class="main wrapper clearfix">
    <div id="contentwrapper">
      <article>
        <section id="content"> 
		
			<script type="text/javascript">
function validateForm() {
if ( ($('#whitepaper_7').prop('checked') == false) && ($('#whitepaper_6').prop('checked') == false ) && ($('#whitepaper_10').prop('checked') == false ) ){
        $( "#errorSummary" ).show();
        $('html, body').animate({
                        scrollTop: $("#errorSummary").offset().top
                    }, 20);
    return false;
    }
return true;
}
</script>

<h1 class="title">Whitepapers</h1>

<h2 class="page-headline"><?php the_field('subheader'); ?></h2>
<p><?php the_field('description'); ?>
</p>

<h5 class="page-subheadline">Choose Whitepapers</h5>
<p id="errorSummary" style="display:none;color:red;">Please choose at least one whitepaper.<br>
<br>
</p>
<form action="<?php bloginfo('siteurl'); ?>/whitepapers-form/" method="get" class="choose-whitepaper" id="whitepaper-selection" name="whitepaper-selection" onsubmit="return validateForm();">
<ul>
<li>
    
    <input type="checkbox" class="wp-check" name="whitepaper_10" id="whitepaper_10">
    <img src="<?= get_stylesheet_directory_uri(); ?>/images/whitepapers/CarlsonGroup-MaterialTrends-CoverImage_rdax_140x181.png" class="wp-img">
    <div>
        
    <p><strong>Material Trends: Reclaimed Wood</strong><br>
    From home furnishings and small coffee shops to office buildings and retail environments, sustainability is all around us. While “going green” was once idle chatter in the fixture world, we’re now seeing natural and reclaimed materials play a key role. Brands and retailers are embracing the movement and becoming environmental stewards. Along the way, reclaimed wood has become a major player, helping them achieve both their desired aesthetic and more environmentally-friendly environments.
</p>
          
    <p class="wp-sponsor"><strong>Sponsored by </strong> 
    <a href="http://www.carlsongroupinc.com/" target="_blank"> <img src="<?= get_stylesheet_directory_uri(); ?>/images/whitepapers/whitepapersponsor2.jpg" class="sponsor-img" data-pin-nopin="true"></a></p>
</div>  
</li><li>
    
    <input type="checkbox" class="wp-check" name="whitepaper_7" id="whitepaper_7">
    <img src="<?= get_stylesheet_directory_uri(); ?>/images/whitepapers/whitepaper1.jpg" class="wp-img" data-pin-nopin="true">
    <div>
        
    <p><strong>Succeeding with Millennials at Retail</strong><br>
    A generational passing of the baton is underway that will increasingly force retailers and brands to respond to consumers in new ways. Anyone who wants to market a brand or merchandise a store should take note; the Millennial generation is already forming lifelong-shopping behaviors. A comprehensive understanding of Millennials is foundational for marketers and retailers.
</p>
          
    <p class="wp-sponsor"><strong>Sponsored by </strong> 
    <a href="http://www.frankmayer.com/" target="_blank"> <img src="<?= get_stylesheet_directory_uri(); ?>/images/whitepapers/whitepapersponsor1.jpg" class="sponsor-img"></a></p>
</div>  
</li><li>
    
    <input type="checkbox" class="wp-check" name="whitepaper_6" id="whitepaper_6">
    <img src="<?= get_stylesheet_directory_uri(); ?>/images/whitepapers/whitepaper3_rdax_140x182.jpg" class="wp-img" data-pin-nopin="true">
    <div>
        
    <p><strong>Freelancers and Consultants Create Greater Profitability and Customer Satisfaction</strong><br>
    Companies using contractors, freelancers, and consultants are driving greater profitability, better quality and higher customer satisfaction. Download this guide to learn how to find and grow your workforce with marketplaces, how to leverage technology and improve compliance within your workforce.
</p>
          
    <p class="wp-sponsor"><strong>Sponsored by </strong> 
    <a href="https://www.workmarket.com/" target="_blank"> <img src="<?= get_stylesheet_directory_uri(); ?>/images/whitepapers/whitepapersponsor3.jpg" class="sponsor-img"></a></p>
</div>  
</li>
</ul>
 <input class="blue-btn" name="submit" value="Sign Up to Download" type="submit">
</form> 
		
        </section>
      </article>
    </div>    

    <?php get_sidebar(); ?>
    
  </div>
  <!-- #main --> 
</div>
<!-- .main-container -->

<?php endwhile; ?>

<?php endif; ?>
<?php get_footer(); ?>