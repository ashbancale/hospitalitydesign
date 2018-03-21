<?php
global $current_category;  
global $cat_obj;
$current_category = "products";
$cat_obj = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>
<?php get_header(); ?>    
       
<?php

// Get category and save to variable to be used in product nav template part for highlighting          
$current_category = $cat_obj->slug;

// Start get parent category info for breadcrumb
global $category_parent;
global $category_parent_id;

$category_parent_id = $cat_obj->parent;

if ( $category_parent_id != 0 ) {
  $category_parent = get_term($category_parent_id, 'products-categories');
}

?>       

<!-- START #breadcrumbs -->
<section id="breadcrumbs-block">
    <div class="container">
        
            <section id="breadcrumbs-block">
                <div class="container">
                    <div>
                            <p><a href="<?php bloginfo('siteurl'); ?>/products/">Products</a></p> 
                                <?php if(( $cat_obj->slug != 'accessories-art') && ( $cat_obj->slug != 'bath') && ( $cat_obj->slug != 'beds-bedding') && ( $cat_obj->slug != 'flooring') && ( $cat_obj->slug != 'furniture') && ( $cat_obj->slug != 'lighting') && ( $cat_obj->slug != 'outdoor') && ( $cat_obj->slug != 'surfaces') && ( $cat_obj->slug != 'technology') && ( $cat_obj->slug != 'textiles')) { ?>
                                  <p><span>&rarr;</span>
                                  <a href="<?php echo esc_url( get_category_link($category_parent_id)); ?>"><?php echo $category_parent->name; ?></a></p>
                                  <style>
                                  span.prod-cat {display:none;}
                                  </style>    
                                  <p><span>&rarr;</span><strong><h1><?php echo $cat_obj->name; ?></h1></strong></p>                              
                                <?php } else { ?>      
                                  <p><span>&rarr;</span><strong><h1><?php echo $cat_obj->name; ?></h1></strong></p>                         
                                <?php } ?>
                                
                                                          
                    </div>
                </div>
            </section>
            
    </div>
</section>
<!-- END #breadcrumbs -->

<div class="container">
    
    <!--START #mid  -->
    <div id="mid" class="row">
    
        <!-- START #content   -->
        <section id="content" class="two-thirds column">
        <?php get_template_part('inc/product-nav'); ?>
   
        <?php //get_template_part('inc/product-nav-mobile'); ?>
    
                
                          
            <div class="products-grid sub">
                <?php get_template_part('inc/product-nav-mobile'); ?>                  

                
                    <?php



                    // wp query

                      $args = array(

                        'post_type' => 'products',

                        'posts_per_page' => 200,

                        'tax_query' => array(

                              array(

                                  'taxonomy' => 'products-categories',

                                  'field'    => 'slug',

                                  'terms'    => $cat_obj->slug

                              ),

                          ),

                      );

                        $get_products = new WP_Query( $args );

                        if ($get_products->have_posts()) :
                              //Filter the post ID of the featured article
                              echo do_shortcode('[ajax_load_more post_type="products" taxonomy="products-categories" taxonomy_terms="'.$cat_obj->slug.'" taxonomy_operator="IN" posts_per_page="15" scroll="false" container_type="div" button_label="Load More"]'); 

                      endif; ?>              
                     

                </div><!-- end products-grid sub -->

            
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