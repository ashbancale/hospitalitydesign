<?php 
global $current_category;   
$current_category = "people";
get_header(); 
?>    
<style>
span.cat {display:none;}
</style>
<?php

$cat_obj = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

?>        
<?php

// Get category and save to variable to be used in product nav template part for highlighting         
$current_category = $cat_obj->slug;

// Start get parent category info for breadcrumb
global $category_parent;
global $category_parent_id;

$category_parent_id = $cat_obj->parent;

if ( $category_parent_id != 0 ) {
  $category_parent = get_term($category_parent_id, 'people-categories');
}

?>       

<!-- START #breadcrumbs -->
<section id="breadcrumbs-block">
    <div class="container">
        
            <section id="breadcrumbs-block">
                <div class="container">
                    <div>
                            <p><a href="<?php bloginfo('siteurl'); ?>/people/">People</a></p> 
                                <?php if($category_parent->name != '') { ?>
                                  <p><span>&rarr;</span>
                                  <a href="<?php echo esc_url( get_category_link($category_parent_id)); ?>"><?php echo $category_parent->name; ?></a></p>
                                <?php } ?>
                                <p><span>&rarr;</span><strong><h1><?php echo $cat_obj->name; ?></h1></strong></p>
                                                          
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
        <div class="people-grid">              

                
                    <?php



                    // wp query

                      $args = array(

                        'post_type' => 'people',

                        'posts_per_page' => 200,

                        'tax_query' => array(

                              array(

                                  'taxonomy' => 'people-categories',

                                  'field'    => 'slug',

                                  'terms'    => $cat_obj->slug

                              ),

                          ),

                      );

                        $get_products = new WP_Query( $args );

                        if ($get_products->have_posts()) :
                              //Filter the post ID of the featured article
                              echo do_shortcode('[ajax_load_more post_type="people" taxonomy="people-categories" taxonomy_terms="'.$cat_obj->slug.'" taxonomy_operator="IN" posts_per_page="15" scroll="false" container_type="div" button_label="Load More"]'); 

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