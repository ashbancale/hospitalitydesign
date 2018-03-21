<?php
global $current_gategory;
$current_category = "people"; 
?>
<?php get_header(); ?>

<!-- START #breadcrumbs -->
<section id="breadcrumbs-block">
    <div class="container">
        
            <section id="breadcrumbs-block">
                <div class="container">
                    <div>
                    
                            <h1><strong>People</strong></h1>
                          
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

   <div class="featured-cat people clearfix">
    
    
          <?php

          global $wp_query;

          $cat_obj = $wp_query->get_queried_object();

          //echo $cat_obj->name . " has id ". $cat_obj->term_id;

          ?>
                  


          <?php

            $feat_args = array(

              'posts_per_page' => 1,

              'post_type' => 'people', 

              'meta_key' => 'featured_landing',

              'meta_value' => true,
              

            );


            $get_featured_people = new WP_Query( $feat_args );

            if ($get_featured_people->have_posts()) :

               while ($get_featured_people->have_posts()) : $get_featured_people->the_post(); ?>

                <?php 
                  //Remember the post ID of the featured article 

                  global $featuredID;
                  $featuredID = get_the_ID();
                ?>

                <a href="<?php echo post_permalink( $ID ); ?>">
                      <img src="<?php the_post_thumbnail_url( 'full' ); ?>"
                      <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                      alt="<?php the_post_thumbnail_alt(get_the_ID()); ?>"
                      <?php } ?>
                       />                    
                </a>
                
                <div class="feature-blurb">
                    <h1><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h1>
                    <span class="date"><?php echo get_the_date(); ?> &bull; <?php if (get_the_term_list( $ID, 'people-categories', '', ', ', '' )): ?> <?php echo get_the_term_list( $ID, 'people-categories', '', ', ', '' ) ?><?php endif; ?></span>
                    <p>
                          <?php      

                          if ( get_field('abstract_text') != ''){
                            the_field('abstract_text');
                          } else {
                            echo wp_trim_words( get_the_excerpt(), 15, '...' );
                          }
                          ?>
                    </p>
                    <p><a href="<?php echo post_permalink( $ID ); ?>">Read More</a></p>
                </div><!-- end feature-blurb -->                


                <?php endwhile;

            endif; ?>    


   </div><!-- end featured-cat -->
        
          <div class="people-grid">
    
          <?php



          // wp query 
            global $featuredID;

            $args = array(

              'post_type' => 'people',

              'posts_per_page' => 200,


            );

            $get_projects = new WP_Query( $args );

            if ($get_projects->have_posts()) :
                //Filter the post ID of the featured article
                echo do_shortcode('[ajax_load_more post_type="people" posts_per_page="12" scroll="false" container_type="div" button_label="Load More" custom_args="post__not_in:'.$featuredID.',"]'); 

            endif; ?>
  

              </div><!-- end proj-grid  -->
        </section>
       
        
        <?php get_sidebar(); ?>
                
        <!-- END #right --> 
        
    </div>
    <!-- END #mid --> 
    
</div>
<!-- END container -->

<?php get_footer(); ?>