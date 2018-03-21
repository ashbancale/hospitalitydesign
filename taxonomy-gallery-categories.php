<?php
global $current_category;
global $wp_query;
global $cat_obj;

$current_category = "galleries";

?> 
<?php get_header(); ?>

<?php

$cat_obj = $wp_query->get_queried_object();
$current_category = $cat_obj->slug;      

// Start get parent category info for breadcrumb
global $category_parent;
global $category_parent_id;

$category_parent_id = $cat_obj->parent;

if ( $category_parent_id != 0 ) {
  $category_parent = get_term($category_parent_id, 'gallery-categories');
}

?>

<!-- START #breadcrumbs -->
<section id="breadcrumbs-block">
    <div class="container">
        
            <section id="breadcrumbs-block">
              <div class="container">
                  <div>
                  
                    <p><a href="<?php bloginfo('siteurl'); ?>/galleries/">Galleries</a></p> 
                        <?php if($category_parent->name != '') { ?>
                          <p><span>&rarr;</span>
                          <a href="<?php echo esc_url( get_category_link($category_parent_id)); ?>"><?php echo $category_parent->name; ?></a></p>
                          <style>
                          span.cat {display:none;}
                          </style>                           
                        <?php } ?>
                        <p><span>&rarr;</span><strong><h1><?php echo $cat_obj->name; ?></h1></strong></p>
                                                                                              
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
        
          <div class="gallery-section clearfix">
    
          <?php

          // wp query 

            $args = array(

              'post_type' => 'galleries',

              'posts_per_page' => 200,

              'tax_query' => array(

                    array(

                        'taxonomy' => 'gallery-categories',

                        'field'    => 'slug',

                        'terms'    => $cat_obj->slug

                    ),

                ),

            );

            $get_galleries = new WP_Query( $args );

            if ($get_galleries->have_posts()) :
                //Filter the post ID of the featured article
                echo do_shortcode('[ajax_load_more post_type="galleries" posts_per_page="20" scroll="false" container_type="div" taxonomy="gallery-categories" taxonomy_terms="'.$cat_obj->slug.'" taxonomy_operator="IN" button_label="Load More"]'); 

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