<?php
global $current_gategory;
$current_category = "projects";

get_header();

global $wp_query;

$cat_obj = $wp_query->get_queried_object();

//echo $cat_obj->name . " has id ". $cat_obj->term_id;
$current_category = $cat_obj->name;
?>
<style>
span.cat {display:none;}
</style>

<!-- START #breadcrumbs -->
<section id="breadcrumbs-block">
    <div class="container">
        
            <section id="breadcrumbs-block">
              <div class="container">
                  <div>
                  
                          <p><a href="<?php bloginfo('siteurl'); ?>/projects/">Projects</a></p> 
                          
                          <p><span>&rarr;</span></p> <h1><strong><?php echo $current_category; ?></strong></h1>
                                                                                              
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
        
          <div class="proj-grid">
    
          <?php



          // wp query 
            global $featuredID;

            $args = array(

              'post_type' => 'projects',

              'posts_per_page' => 200,

              'tax_query' => array(

                    array(

                        'taxonomy' => 'project-categories',

                        'field'    => 'term_id',

                        'terms'    => $cat_obj->term_id

                    ),

                ),

            );

            $get_projects = new WP_Query( $args );

            if ($get_projects->have_posts()) :
                //Filter the post ID of the featured article
                echo do_shortcode('[ajax_load_more post_type="projects" posts_per_page="12" scroll="false" container_type="div" taxonomy="project-categories" taxonomy_terms="'.$cat_obj->slug.'" taxonomy_operator="IN" button_label="Load More"]'); 

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