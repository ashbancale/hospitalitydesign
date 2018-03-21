
<?php
global $current_gategory;
$current_category = "awards-events";
?>
<?php get_header(); ?>

<script type="text/javascript">
$( "body" ).addClass( "awards" );
</script>

<?php while(have_posts()) : the_post(); ?>


<!-- START #breadcrumbs -->
<section id="breadcrumbs-block">
    <div class="container">
        
            <section id="breadcrumbs-block">
    <div class="container">
        <div>
        
                <p><a href="<?php bloginfo('siteurl'); ?>/awards-events/">Awards + Events</a></p> 
                
                            <p><span>&rarr;</span></p> <h1><strong><?php the_title(); ?></strong></h1>
                          
              
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


<section class="two-thirds column" id="content">            
            
    <article>      

        <?php 
        $logoimage = get_field('awards_logo');
        if ($logoimage != ''):
        ?>

          <img class="award-hdrLogo" src="<?php echo $logoimage['url']; ?>"
          <?php
          if ($logoimage['alt'] != ''):
          ?>
          alt="<?php echo $logoimage['alt']; ?>"
          <?php endif; ?>
        >
        <?php endif; ?>

        <h2><?php the_field('page_title'); ?></h2>
        <?php the_content(); ?>
                
                 
        <div class="share clearfix">
            <span class="st_facebook_custom" displaytext="Facebook" st_processed="yes"></span>
            <span class="st_linkedin_custom" displaytext="LinkedIn" st_processed="yes"></span>
            <span class="st_twitter_custom" displaytext="Tweet" st_via="hdmag" st_processed="yes"></span>
            <span class="st_googleplus_custom" displaytext="Google +" st_processed="yes"></span>
            <span class="st_email_custom" displaytext="Email" st_processed="yes"></span>
            <span class="print"><a href="javascript:window.print()">Print</a></span>
       </div>
 
                                   
  </article>

   <!--Judges-->
   <div class="award-grid clearfix">
        <h2><?php the_field('judges_title'); ?></h2>
    
          <?php

            // check if the repeater field has rows of data

            if( have_rows('judges') ) :

              // loop through the rows of data

                while ( have_rows('judges') ) : the_row(); ?>
                  <?php 

                  $image = get_sub_field('judge_image');

                  ?>
                  <div class="award-item">

                     <div class="index-image-box">
                        <img src="<?php echo $image['url']; ?>"
                        <?php if (!empty($image['alt'])) { ?>
                        alt="<?php echo $image['alt']; ?>"
                        <?php } ?>
                        /> 
                     </div>
                     <div class="award-blurb">
                         <h4><?php the_sub_field('judge_name'); ?></h4>
                         <p><?php the_sub_field('judge_description'); ?></p>
                      </div>   
                  </div>                                                              

                <?php 

                endwhile;

            endif; ?> 
     
   </div>  

   <!--Sponsors-->
   <div class="award-grid clearfix">
        <h2><?php the_field('main_sponsors_title'); ?></h2>
   </div> 

   <!-- Title Sponsors -->
   <div class="award-grid clearfix">
        <h2><?php the_field('sponsors_flex_1_title'); ?></h2>
             
          <?php

            // check if the repeater field has rows of data

            if( have_rows('flex_1_sponsors') ) :

              // loop through the rows of data

                while ( have_rows('flex_1_sponsors') ) : the_row(); ?>
                  <?php 

                  $image = get_sub_field('sponsor_image');

                  ?>

                    <div class="sponsor-item">
           
                        <a href="<?php the_sub_field('sponsor_link'); ?>" target="_blank">
                                <div class="sponsor-image-box">
                                    <img src="<?php echo $image['url']; ?>"
                                <?php if (!empty($image['alt'])) { ?>
                                    alt="<?php echo $image['alt']; ?>"
                                    <?php } ?>
                                /> 
                                </div>
                              
                        </a>

                    </div>                                                                    

                <?php 

                endwhile;

            endif; ?> 

   </div> 

   <!-- Event Sponsors -->
   <div class="award-grid clearfix"> 
        <h2><?php the_field('sponsors_flex_2_title'); ?></h2>
             
          <?php

            // check if the repeater field has rows of data

            if( have_rows('flex_2_sponsors') ) :

              // loop through the rows of data

                while ( have_rows('flex_2_sponsors') ) : the_row(); ?>
                  <?php 

                  $image = get_sub_field('sponsor_image');

                  ?>

                    <div class="sponsor-item">
           
                        <a href="<?php the_sub_field('sponsor_link'); ?>" target="_blank">
                                <div class="sponsor-image-box">
                                    <img src="<?php echo $image['url']; ?>"
                                <?php if (!empty($image['alt'])) { ?>
                                    alt="<?php echo $image['alt']; ?>"
                                    <?php } ?>
                                /> 
                                </div>
                              
                        </a>

                    </div>                                                                    

                <?php 

                endwhile;

            endif; ?> 
   </div> 

   <!-- Supporting Sponsors --> 
   <div class="award-grid clearfix">
        <h2><?php the_field('sponsors_flex_3_title'); ?></h2>
             
          <?php

            // check if the repeater field has rows of data

            if( have_rows('flex_3_sponsors') ) :

              // loop through the rows of data

                while ( have_rows('flex_3_sponsors') ) : the_row(); ?>
                  <?php 

                  $image = get_sub_field('sponsor_image');

                  ?>

                    <div class="sponsor-item">
           
                        <a href="<?php the_sub_field('sponsor_link'); ?>" target="_blank">
                                <div class="sponsor-image-box">
                                    <img src="<?php echo $image['url']; ?>"
                                <?php if (!empty($image['alt'])) { ?>
                                    alt="<?php echo $image['alt']; ?>"
                                    <?php } ?>
                                /> 
                                </div>
                              
                        </a>

                    </div>                                                                    

                <?php 

                endwhile;

            endif; ?> 
   </div> 

    <!--Previous Winners-->
     <div class="event-news">
            <h2><?php the_field('winners_title'); ?></h2>



            <ul>

          <?php

            // check if the repeater field has rows of data

            if( have_rows('winners') ) :

              // loop through the rows of data

                while ( have_rows('winners') ) : the_row(); ?>

                    <li>

                    <?php //if ((get_sub_field('title')) AND (get_sub_field('event_article_link'))) : ?>
                       <a href="<?php the_sub_field('event_article_link'); ?>"><?php the_sub_field('title'); ?></a>
                    <?php //endif; ?>
                       
                        <span class="date"></span>           
                        <p></p>
                         
                        <p class="links">
                            <?php if(get_sub_field('event_article_link') != '') : ?>
                               <a href="<?php the_sub_field('event_article_link'); ?>">Read Article</a> 
                            <?php endif; ?>   
                            <?php if ((get_sub_field('event_winners_gallery_link') != '') AND (get_sub_field('event_winners_gallery_title') != '')) : ?>
                               <a href="<?php the_sub_field('event_winners_gallery_link'); ?>"><?php the_sub_field('event_winners_gallery_title'); ?></a>
                            <?php endif; ?>    
                            <?php if ((get_sub_field('event_gallery_link') != '') AND (get_sub_field('event_gallery_title') != '')) : ?>
                               <a href="<?php the_sub_field('event_gallery_link'); ?>"><?php the_sub_field('event_gallery_title'); ?></a>
                            <?php endif; ?>  
                        </p>      
                    </li>                                                                   

                <?php 

                endwhile;

            endif; ?> 



            </ul>
     </div>
  
            
        </section>   
                
        <!-- END #content --> 
        
        <!-- START #right -->
                
            <?php get_sidebar(); ?>
                
        <!-- END #right --> 
        
    </div>
    <!-- END #mid -->

</div>
<!-- END container -->
<?php endwhile; ?>
<?php get_footer(); ?>   