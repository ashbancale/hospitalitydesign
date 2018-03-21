<?php
global $current_gategory;
$current_category = "products";
?>
<?php get_header(); ?>

<?php while(have_posts()) : the_post(); ?>
<?php

// Get the first category and save to variable to be used in product nav template part

global $current_category;            
global $product_categories;

$product_categories = get_the_terms( $post->ID, 'products-categories' ); 
$current_category = $product_categories[0]->slug;


// Start get parent category info for breadcrumb
global $category_parent;
global $category_parent_id;

$category_parent_id = $product_categories[0]->parent;

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
                    
                            <p>
                              <a href="<?php bloginfo('siteurl'); ?>/products/">Products</a>
                            </p> 
                            <?php if($category_parent->name != '') { ?>
                            <p>
                              <span>&rarr;</span>
                              <a href="<?php echo esc_url( get_category_link($category_parent_id)); ?>"><?php echo $category_parent->name; ?></a>
                            </p>
                            <?php } ?>
                            <p><span>&rarr;</span><h1><strong><?php echo get_the_term_list( $post->ID, 'products-categories' ); ?></strong></h1></p>
                                
                          
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
        <?php get_template_part('inc/product-nav'); ?>

        

            <div class="products-grid">
              <?php get_template_part('inc/product-nav-mobile'); ?>
                   <article class="clearfix">
                    
                    
                       <h1><?php the_title(); ?></h1>
                       <span class="date"><?php the_date(); ?></span>
                    
                        
                        <div class="share clearfix">
                          <span class='st_facebook_custom' displayText='Facebook'></span>
                          <span class='st_linkedin_custom' displayText='LinkedIn'></span>
                          <span class='st_twitter_custom' displayText='Tweet' st_via="hdmag"></span>
                          <span class='st_googleplus_custom' displayText='Google +'></span>
                          <span class='st_email_custom' displayText='Email'></span>
                          <span class="print"><a href="javascript:window.print()">Print</a></span>
                      </div>
 
                                                       
                          <?php if ( has_post_thumbnail() ) { ?>   
                            <img src="<?php the_post_thumbnail_url( 'full' ); ?>" border="0" 
                            <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                                alt="<?php the_post_thumbnail_alt(get_the_ID()); ?>"
                                <?php } ?>
                            />  

                          <?php } ?> 
                       <p><?php echo remove_p(get_the_content()); ?></p>
                
                   </article>
                   
                   <div class="latest clearfix">
                    
                    <h2>latest <?php echo $product_categories[0]->name; ?></h2>


              <?php

              $currentTitle = get_the_title();

              $args = array(

                'posts_per_page' => 6,

                'post_type' => 'products', 

                'post__not_in' => array(get_the_ID()),  

                'tax_query' => array(

                  array(

                    'taxonomy' => 'products-categories',

                    'field'    => 'slug',

                    'terms'    => $product_categories[0]->slug,

                  ),

                ),

                

              );

            $query = new WP_Query( $args );

            while ( $query->have_posts() ) : $query->the_post(); 
              if (get_the_title() != $currentTitle) { ?>

                <p class="prod">
                  <?php if ( has_post_thumbnail() ) { ?>  
                  <a href="<?php echo post_permalink( $ID ); ?>"> 
                    <img src="<?php the_post_thumbnail_url( 'full' ); ?>" 
                    <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                        alt="<?php the_post_thumbnail_alt(get_the_ID()); ?>"
                        <?php } ?>
                    />  
                  </a>
                  <?php } ?>
                    <a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a>
                    <span class="sub-cat">
                    <?php if (get_the_term_list( $ID, 'project-categories', '', ', ', '' )): ?> 
                    <?php echo get_the_term_list( $ID, 'project-categories', '', ', ', '' );
                      endif;
                    ?>
                    </span>
                </p>                

                <?php } //end if current title ?>


            <?php

            endwhile; ?> 

                   </div>

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

<?php

endwhile; ?> 

<?php get_footer(); ?>  