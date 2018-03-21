<?php
global $current_category;
$current_category = "products";
?>
<?php get_header(); ?>          

<!-- START #breadcrumbs -->
<section id="breadcrumbs-block">
    <div class="container">
        
            <section id="breadcrumbs-block">
                <div class="container">
                    <div>
                      <h1><strong>Products</strong></h1>
                                
                          
                    </div>
                </div>
            </section>
            
    </div>
</section>
<!-- END #breadcrumbs -->

<div class="container">
    
    <!--START #mid -->
    <div id="mid" class="row">
    
        <!-- START #content   -->
        <section id="content" class="two-thirds column">
        <?php get_template_part('inc/product-nav'); ?>
   
<div class="products-grid">
   
    <?php get_template_part('inc/product-nav-mobile'); ?>
    
       
    <p class="prod" style="display: block;">
        <a href="<?php bloginfo('siteurl'); ?>/products/accessories-art/">accessories / art</a>
        <a href="<?php bloginfo('siteurl'); ?>/products/accessories-art/">

              <?php


              $args = array(

                'posts_per_page' => 1,

                'post_type' => 'products', 

                'post__not_in' => array(get_the_ID()),  

                'tax_query' => array(

                  array(

                    'taxonomy' => 'products-categories',

                    'field'    => 'slug',

                    'terms'    => 'accessories-art',

                  ),

                ),

                

              );

            $query = new WP_Query( $args );

            while ( $query->have_posts() ) : $query->the_post(); 
            ?>

                    <img src="<?php the_post_thumbnail_url( 'full' ); ?>" 
                    <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                        alt="<?php the_post_thumbnail_alt(get_the_ID()); ?>"
                        <?php } ?>
                    data-pin-nopin="true" />  


            <?php

            endwhile; ?>         

        </a>
    </p>
    


    
       
        
    <p class="prod" style="display: block;">
        <a href="<?php bloginfo('siteurl'); ?>/products/bath/">bath / spa</a>
        <a href="<?php bloginfo('siteurl'); ?>/products/bath/">
              <?php


              $args = array(

                'posts_per_page' => 1,

                'post_type' => 'products', 

                'post__not_in' => array(get_the_ID()),  

                'tax_query' => array(

                  array(

                    'taxonomy' => 'products-categories',

                    'field'    => 'slug',

                    'terms'    => 'bath',

                  ),

                ),

                

              );

            $query = new WP_Query( $args );

            while ( $query->have_posts() ) : $query->the_post(); 
            ?>

                    <img src="<?php the_post_thumbnail_url( 'full' ); ?>" 
                    <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                        alt="<?php the_post_thumbnail_alt(get_the_ID()); ?>"
                        <?php } ?>
                    data-pin-nopin="true" />  


            <?php

            endwhile; ?>    
        </a>
    </p>
    

    
       
        
    <p class="prod" style="display: block;">
        <a href="<?php bloginfo('siteurl'); ?>/products/beds-bedding/">beds/ bedding</a>
        <a href="<?php bloginfo('siteurl'); ?>/products/beds-bedding/">
              <?php


              $args = array(

                'posts_per_page' => 1,

                'post_type' => 'products', 

                'post__not_in' => array(get_the_ID()),  

                'tax_query' => array(

                  array(

                    'taxonomy' => 'products-categories',

                    'field'    => 'slug',

                    'terms'    => 'beds-bedding',

                  ),

                ),

                

              );

            $query = new WP_Query( $args );

            while ( $query->have_posts() ) : $query->the_post(); 
            ?>

                    <img src="<?php the_post_thumbnail_url( 'full' ); ?>" 
                    <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                        alt="<?php the_post_thumbnail_alt(get_the_ID()); ?>"
                        <?php } ?>
                    data-pin-nopin="true" />  


            <?php

            endwhile; ?> 
        </a>
    </p>
    
        
    
       
        
    <p class="prod" style="display: block;">
        <a href="<?php bloginfo('siteurl'); ?>/products/flooring/">flooring</a>
        <a href="<?php bloginfo('siteurl'); ?>/products/flooring/">
              <?php


              $args = array(

                'posts_per_page' => 1,

                'post_type' => 'products', 

                'post__not_in' => array(get_the_ID()),  

                'tax_query' => array(

                  array(

                    'taxonomy' => 'products-categories',

                    'field'    => 'slug',

                    'terms'    => 'flooring',

                  ),

                ),

                

              );

            $query = new WP_Query( $args );

            while ( $query->have_posts() ) : $query->the_post(); 
            ?>

                    <img src="<?php the_post_thumbnail_url( 'full' ); ?>" 
                    <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                        alt="<?php the_post_thumbnail_alt(get_the_ID()); ?>"
                        <?php } ?>
                    data-pin-nopin="true" />  


            <?php

            endwhile; ?> 
        </a>
    </p>
        
  

    
       
        
    <p class="prod" style="display: block;">
        <a href="<?php bloginfo('siteurl'); ?>/products/furniture/">furniture</a>
        <a href="<?php bloginfo('siteurl'); ?>/products/furniture/">
              <?php


              $args = array(

                'posts_per_page' => 1,

                'post_type' => 'products', 

                'post__not_in' => array(get_the_ID()),  

                'tax_query' => array(

                  array(

                    'taxonomy' => 'products-categories',

                    'field'    => 'slug',

                    'terms'    => 'furniture',

                  ),

                ),

                

              );

            $query = new WP_Query( $args );

            while ( $query->have_posts() ) : $query->the_post(); 
            ?>

                    <img src="<?php the_post_thumbnail_url( 'full' ); ?>" 
                    <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                        alt="<?php the_post_thumbnail_alt(get_the_ID()); ?>"
                        <?php } ?>
                    data-pin-nopin="true" />  


            <?php

            endwhile; ?> 
        </a>
    </p>
    
        
    
       
        
    <p class="prod" style="display: block;">
        <a href="<?php bloginfo('siteurl'); ?>/products/lighting/">lighting</a>
        <a href="<?php bloginfo('siteurl'); ?>/products/lighting/">
              <?php


              $args = array(

                'posts_per_page' => 1,

                'post_type' => 'products', 

                'post__not_in' => array(get_the_ID()),  

                'tax_query' => array(

                  array(

                    'taxonomy' => 'products-categories',

                    'field'    => 'slug',

                    'terms'    => 'lighting',

                  ),

                ),

                

              );

            $query = new WP_Query( $args );

            while ( $query->have_posts() ) : $query->the_post(); 
            ?>

                    <img src="<?php the_post_thumbnail_url( 'full' ); ?>" 
                    <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                        alt="<?php the_post_thumbnail_alt(get_the_ID()); ?>"
                        <?php } ?>
                    data-pin-nopin="true" />  


            <?php

            endwhile; ?> 
        </a>
    </p>
    
        
    
       
        
    <p class="prod" style="display: block;">
        <a href="<?php bloginfo('siteurl'); ?>/products/outdoor/">outdoor</a>
        <a href="<?php bloginfo('siteurl'); ?>/products/outdoor/">
              <?php


              $args = array(

                'posts_per_page' => 1,

                'post_type' => 'products', 

                'post__not_in' => array(get_the_ID()),  

                'tax_query' => array(

                  array(

                    'taxonomy' => 'products-categories',

                    'field'    => 'slug',

                    'terms'    => 'outdoor',

                  ),

                ),

                

              );

            $query = new WP_Query( $args );

            while ( $query->have_posts() ) : $query->the_post(); 
            ?>

                    <img src="<?php the_post_thumbnail_url( 'full' ); ?>" 
                    <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                        alt="<?php the_post_thumbnail_alt(get_the_ID()); ?>"
                        <?php } ?>
                    data-pin-nopin="true" />  


            <?php

            endwhile; ?> 
        </a>
    </p>
    
        
    
       
        
    <p class="prod" style="display: block;">
        <a href="<?php bloginfo('siteurl'); ?>/products/surfaces/">surfaces</a>
        <a href="<?php bloginfo('siteurl'); ?>/products/surfaces/">
              <?php


              $args = array(

                'posts_per_page' => 1,

                'post_type' => 'products', 

                'post__not_in' => array(get_the_ID()),  

                'tax_query' => array(

                  array(

                    'taxonomy' => 'products-categories',

                    'field'    => 'slug',

                    'terms'    => 'surfaces',

                  ),

                ),

                

              );

            $query = new WP_Query( $args );

            while ( $query->have_posts() ) : $query->the_post(); 
            ?>

                    <img src="<?php the_post_thumbnail_url( 'full' ); ?>" 
                    <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                        alt="<?php the_post_thumbnail_alt(get_the_ID()); ?>"
                        <?php } ?>
                    data-pin-nopin="true" />  


            <?php

            endwhile; ?> 
        </a>
    </p>
    
        
    
       
        
    <p class="prod" style="display: block;">
        <a href="<?php bloginfo('siteurl'); ?>/products/technology/">technology</a>
        <a href="<?php bloginfo('siteurl'); ?>/products/technology/">
              <?php


              $args = array(

                'posts_per_page' => 1,

                'post_type' => 'products', 

                'post__not_in' => array(get_the_ID()),  

                'tax_query' => array(

                  array(

                    'taxonomy' => 'products-categories',

                    'field'    => 'slug',

                    'terms'    => 'technology',

                  ),

                ),

                

              );

            $query = new WP_Query( $args );

            while ( $query->have_posts() ) : $query->the_post(); 
            ?>

                    <img src="<?php the_post_thumbnail_url( 'full' ); ?>" 
                    <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                        alt="<?php the_post_thumbnail_alt(get_the_ID()); ?>"
                        <?php } ?>
                    data-pin-nopin="true" />  


            <?php

            endwhile; ?> 
        </a>
    </p>
    
        
    
       
        
    <p class="prod" style="display: block;">
        <a href="<?php bloginfo('siteurl'); ?>/products/textiles/">textiles</a>
        <a href="<?php bloginfo('siteurl'); ?>/products/textiles/">
              <?php


              $args = array(

                'posts_per_page' => 1,

                'post_type' => 'products', 

                'post__not_in' => array(get_the_ID()),  

                'tax_query' => array(

                  array(

                    'taxonomy' => 'products-categories',

                    'field'    => 'slug',

                    'terms'    => 'textiles',

                  ),

                ),

                

              );

            $query = new WP_Query( $args );

            while ( $query->have_posts() ) : $query->the_post(); 
            ?>

                    <img src="<?php the_post_thumbnail_url( 'full' ); ?>" 
                    <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                        alt="<?php the_post_thumbnail_alt(get_the_ID()); ?>"
                        <?php } ?>
                    data-pin-nopin="true" />  


            <?php

            endwhile; ?> 
        </a>
    </p>
    

    <!--p class="prod">
        <a href="/donotpublish/catalog-library/">catalog library</a>
        <a href="/donotpublish/catalog-library/">
            <img src="/static/structural_images/cat-lib.jpg">
        </a>
    </p-->
        
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