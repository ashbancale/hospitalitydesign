<?php 
global $current_category;
$current_category = "galleries";
get_header(); 
?>          

<!-- START #breadcrumbs -->
<section id="breadcrumbs-block">
    <div class="container">
        
            <section id="breadcrumbs-block">
                <div class="container">
                    <div>
                    <h1><strong><a href="<?php bloginfo('siteurl'); ?>/galleries/">Galleries</a></strong></h1>
                                
                          
                    </div>
                </div>
            </section>
            
    </div>
</section>
<!-- END #breadcrumbs -->

<div class="container">
    
    <!--START #mid   -->
    <div id="mid" class="row">


<section id="content" class="two-thirds column">            
            
                

 
<div class="gallery-section clearfix">
<section>
    <h1>projects</h1>   
    <div class="proj-gal">
    

              <?php


              $args = array(

                'posts_per_page' => 4,

                'post_type' => 'galleries', 

                'tax_query' => array(

                  array(

                    'taxonomy' => 'gallery-categories',

                    'field'    => 'slug',

                    'terms'    => 'projects',

                  ),

                ),

                

              );

            $query = new WP_Query( $args );

            while ( $query->have_posts() ) : $query->the_post(); 
            ?>

                <div class="gallery-item main" style="display: block;">
                    <a href="<?php echo post_permalink( $ID ); ?>">
                            <img src="<?php the_post_thumbnail_url( 'full' ); ?>" 
                            <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                                alt="<?php the_post_thumbnail_alt(get_the_ID()); ?>"
                                <?php } ?>
                            data-pin-nopin="true" />  
                    </a>
                    <h2><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h2>
                    <span class="date"><?php echo get_the_date(); ?>
                    
                             • <?php if (get_the_term_list( $ID, 'gallery-categories', '', ', ', '' )): ?> <?php echo get_the_term_list( $ID, 'gallery-categories', '', ', ', '' ) ?><?php endif; ?>
                                      
                    </span>
                    <p><?php the_field('description'); ?></p>
                    <a href="<?php echo post_permalink( $ID ); ?>" class="event-more">View Photos &rsaquo;</a>
                </div>


            <?php

            endwhile; ?>          
        
    
    <a href="<?php bloginfo('siteurl'); ?>/galleries/projects/" class="more">More Projects &rsaquo;</a>
    </div>
</section>
<section>
    <h1>events</h1>  
    <div class="event-gal">
    

              <?php


              $args = array(

                'posts_per_page' => 4,

                'post_type' => 'galleries', 

                'tax_query' => array(

                  array(

                    'taxonomy' => 'gallery-categories',

                    'field'    => 'slug',

                    'terms'    => 'events',

                  ),

                ),

                

              );

            $query = new WP_Query( $args );

            while ( $query->have_posts() ) : $query->the_post(); 
            ?>

                <div class="gallery-item main" style="display: block;">
                    <a href="<?php echo post_permalink( $ID ); ?>">
                            <img src="<?php the_post_thumbnail_url( 'full' ); ?>" 
                            <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                                alt="<?php the_post_thumbnail_alt(get_the_ID()); ?>"
                                <?php } ?>
                            data-pin-nopin="true" />  
                    </a>
                    <h2><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h2>
                    <span class="date"><?php echo get_the_date(); ?>
                    
                             • <?php if (get_the_term_list( $ID, 'gallery-categories', '', ', ', '' )): ?> <?php echo get_the_term_list( $ID, 'gallery-categories', '', ', ', '' ) ?><?php endif; ?>
                                      
                    </span>
                    <p><?php the_field('description'); ?></p>
                    <a href="<?php echo post_permalink( $ID ); ?>" class="event-more">View Photos &rsaquo;</a>
                </div>


            <?php

            endwhile; ?>  
           
    
    <a href="<?php bloginfo('siteurl'); ?>/galleries/events/" class="more">More Events &rsaquo;</a>
    </div>
</section>
<section>
    <h1>products</h1> 
    <div class="prod-gal">  
    

              <?php


              $args = array(

                'posts_per_page' => 4,

                'post_type' => 'galleries', 

                'tax_query' => array(

                  array(

                    'taxonomy' => 'gallery-categories',

                    'field'    => 'slug',

                    'terms'    => 'products',

                  ),

                ),

                

              );

            $query = new WP_Query( $args );

            while ( $query->have_posts() ) : $query->the_post(); 
            ?>

                <div class="gallery-item main" style="display: block;">
                    <a href="<?php echo post_permalink( $ID ); ?>">
                            <img src="<?php the_post_thumbnail_url( 'full' ); ?>" 
                            <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                                alt="<?php the_post_thumbnail_alt(get_the_ID()); ?>"
                                <?php } ?>
                            data-pin-nopin="true" />  
                    </a>
                    <h2><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h2>
                    <span class="date"><?php echo get_the_date(); ?>
                    
                             • <?php if (get_the_term_list( $ID, 'gallery-categories', '', ', ', '' )): ?> <?php echo get_the_term_list( $ID, 'gallery-categories', '', ', ', '' ) ?><?php endif; ?>
                                      
                    </span>
                    <p><?php the_field('description'); ?></p>
                    <a href="<?php echo post_permalink( $ID ); ?>" class="event-more">View Photos &rsaquo;</a>
                </div>


            <?php

            endwhile; ?>  

    
    <a href="<?php bloginfo('siteurl'); ?>/galleries/products/" class="more">More Products &rsaquo;</a>
   </div>
  </section> 
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

<?php get_footer(); ?>          