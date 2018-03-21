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
              
              
              <h2><?php the_field('contact_group_1_title'); ?></h2>
              

              <div class="contact-section">
                  <?php
                    // check if the repeater field has rows of data

                    if( have_rows('contact_group_1_rows') ) :

                      // loop through the rows of data

                        while ( have_rows('contact_group_1_rows') ) : the_row(); ?>
                          <?php 

                          $image = get_sub_field('image');

                          ?>

                              <p class="contact-item">
                                  <img src="<?php echo $image['url']; ?>" data-pin-nopin="true" 
                                    <?php if (!empty($image['alt'])) { ?>
                                    alt="<?php echo $image['alt']; ?>"
                                    <?php } ?> >
                                  <?php the_sub_field('name'); ?> <br>
                                  <?php the_sub_field('title'); ?><br>
                                  <?php the_sub_field('phone_number'); ?><br>
                                  <a href="mailto:<?php the_sub_field('email'); ?>" target="_blank"><?php the_sub_field('email'); ?></a><br>
                              </p>                                                  

                        <?php 

                        endwhile;

                    endif; ?>  

              </div> 
                  
              <hr class="clearfix">     
                  
              <?php the_field('flex_spot_1'); ?>
              
              <hr class="clearfix">
                  
              <h2><?php the_field('contact_group_2_title'); ?></h2>
                   
              <div class="contact-section">
              <?php
                    // check if the repeater field has rows of data

                    if( have_rows('contact_group_2_rows') ) :

                      // loop through the rows of data

                        while ( have_rows('contact_group_2_rows') ) : the_row(); ?>
                          <?php 

                          $image = get_sub_field('image');

                          ?>

                              <p class="contact-item">
                                  <img src="<?php echo $image['url']; ?>" data-pin-nopin="true" 
                                    <?php if (!empty($image['alt'])) { ?>
                                    alt="<?php echo $image['alt']; ?>"
                                    <?php } ?> >
                                  <?php the_sub_field('name'); ?> <br>
                                  <?php the_sub_field('title'); ?><br>
                                  <?php the_sub_field('phone_number'); ?><br>
                                  <a href="mailto:<?php the_sub_field('email'); ?>" target="_blank"><?php the_sub_field('email'); ?></a><br>
                              </p>                                                  

                        <?php 

                        endwhile;

                    endif; ?>  
              </div>
              
              <hr class="clearfix">    
                   
              <h2><?php the_field('contact_group_3_title'); ?></h2>
              <?php
                    // check if the repeater field has rows of data

                    if( have_rows('contact_group_3_rows') ) :

                      // loop through the rows of data

                        while ( have_rows('contact_group_3_rows') ) : the_row(); ?>
                          <?php 

                          $image = get_sub_field('image');

                          ?>

                              <p class="contact-item">
                                  <img src="<?php echo $image['url']; ?>" data-pin-nopin="true" 
                                    <?php if (!empty($image['alt'])) { ?>
                                    alt="<?php echo $image['alt']; ?>"
                                    <?php } ?> >
                                  <?php the_sub_field('name'); ?> <br>
                                  <?php the_sub_field('title'); ?><br>
                                  <?php the_sub_field('phone_number'); ?><br>
                                  <a href="mailto:<?php the_sub_field('email'); ?>" target="_blank"><?php the_sub_field('email'); ?></a><br>
                              </p>                                                  

                        <?php 

                        endwhile;

                    endif; ?>  
              
              <hr class="clearfix">
                   
              <?php the_field('flex_spot_2'); ?>
                  
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
 