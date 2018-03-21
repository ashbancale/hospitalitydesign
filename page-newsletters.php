<?php get_header(); ?>  

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>    

<!-- START #breadcrumbs -->
<section id="breadcrumbs-block">
    <div class="container">
        
    <section id="breadcrumbs-block">
        <div class="container">
            <div>
        
                <h1><strong><?php the_title(); ?></strong></h1>
              
            </div>
        </div>
    </section>
            
    </div>
</section>
<!-- END #breadcrumbs -->




<div class="container">    

    <!--START #mid -->
    <div id="mid" class="row"> 

        <!-- START #content -->
        <section id="content" class="two-thirds column"> 
          <article>     
                
              <h1><?php the_field('subheader'); ?></h1>
              

              <p><?php the_field('intro_text'); ?></p>   
              
              <hr>
              <h4>Step 1 - Choose Newsletters</h4>
              
              <form method="post" action="http://www.pages04.net/nielsenhospitalitydesign/newsletters/preferences" pageid="18112825" siteid="304038" parentpageid="18112824" class="newsletter-signup">

            <!-- Silverpop Fields Don't Remove -->
            <input type="hidden" name="formSourceName" value="StandardForm">
            <input type="hidden" name="sp_exp" value="yes">

            <!-- Keep commented out -- 
            <input type="text" name="spb" value="yes" style="display:none;"> 
            -- for silverpop only -->

            <input name="source_channel" type="hidden" value="site_signup_page">

                  <ul>

                <?php

                  // check if the repeater field has rows of data

                  if( have_rows('newsletter_rows') ) :

                    // loop through the rows of data

                      while ( have_rows('newsletter_rows') ) : the_row(); ?>
                        <?php 

                        $newsletterimage = get_sub_field('newsletter_image');

                        ?>

                        <li>
                            
                            <input type="checkbox" value="Yes" name="<?php the_sub_field('newsletter_form_field_name'); ?>" class="check">
                            <div class="newsletter-info">
                                <strong><?php the_sub_field('newsletter_title'); ?></strong>
                                <em><?php the_sub_field('newsletter_type'); ?></em>
                                
                                <p><?php the_sub_field('newsletter_description'); ?></p>
                            </div>
                            <div class="newsletter-img">
                                <img src="<?php echo $newsletterimage['url']; ?>" data-pin-nopin="true"
                                    <?php if (!empty($newsletterimage['alt'])) { ?>
                                        alt="<?php echo $newsletterimage['alt']; ?>"
                                        <?php } ?>
                                    /> 
                                <?php if(!(get_field('newsletter_sample_link'))) : ?>
                                  <a class="<?php the_field('newsletter_sample_link'); ?>">View Sample ›</a>
                                <?php endif; ?>
                            </div>
                        </li>                                      

                      <?php 

                      endwhile;

                  endif; ?>                    


                  </ul>
              <hr>
              
              <h4>Step 2 - Enter Contact Info</h4>
              <ul>
                  <li>
                      <label for="name">Name:</label>
                      <input type="text" name="first_name" placeholder="First" class="textbox small">
                      <input type="text" name="last_name" placeholder="Last" class="textbox small">
                  </li>
                  <li>
                      <label for="email">Email:</label>
                      <input type="text" name="Email" class="textbox">
                  </li>
              </ul>
              
              <input type="submit" value="Sign Up" class="submit-btn">
            
              <a href="<?php bloginfo('siteurl'); ?>/privacy-policy/" class="privacy">Privacy Policy</a>

            </form>
              
               <hr>
              

              <p><?php the_field('bottom_text'); ?></p>
             </article>
        </section>
        <!-- END #content  --> 
        
        <!-- START #right -->
        
        <?php get_sidebar(); ?>
                
        <!-- END #right --> 
        
    </div>
    <!-- END #mid --> 
    
</div>
<!-- END container -->

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>    
 