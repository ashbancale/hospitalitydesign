
<?php
global $current_category;
$current_category = "awards-events";
?>
<?php get_header(); ?>

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
        <section id="content" class="two-thirds column">

            <article class="clearfix">
                                        
                <?php
                if ( has_post_thumbnail() ) { ?>   
                  <img class="events-article" src="<?php the_post_thumbnail_url( 'full', array( 'class' => 'articleImage' ) ); ?>" border="0"
                  <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                  alt="<?php echo the_post_thumbnail_alt(get_the_ID()); ?>"
                  <?php } ?>
                  /> 
                <?php } 
                ?>
                
                <p><strong><?php the_title(); ?></strong><br>

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
                  
           <div class="latest">
               <h2>More awards + events news</h2>
                
                <ul>

                  <?php 
                  global $current_category;
                  $currentTitle = get_the_title();

                  $args = array(

                    'posts_per_page' => 3,

                    'post_type' => 'news', 

                    'post__not_in' => array(get_the_ID()),  

                    'tax_query' => array(

                      array(

                        'taxonomy' => 'news-categories',

                        'field'    => 'slug',

                        'terms'    => 'awards-events',

                      ),

                    ),

                    

                  );

                $query = new WP_Query( $args );

                while ( $query->have_posts() ) : $query->the_post(); 
                  if (get_the_title() != $currentTitle) { ?>
                        <li>
                        <a href="<?php echo post_permalink( $ID ); ?>"></a>
                        <p>
                          <a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a>
                          <span><?php echo get_the_date( $ID ); ?> •
                            <a href="<?php bloginfo('siteurl'); ?>/news/awards-events/">Awards / Events</a>
                          </span>
                        </p>
                        </li>
                    <?php } //end if current title  ?>


                <?php

                endwhile; ?>                          


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