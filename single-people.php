<?php
global $current_gategory;
$current_category = "people";
?>
<?php get_header(); ?>

<?php while(have_posts()) : the_post(); ?>

    <?php
    
    // Get the first category and save to variable to be used in product nav template part

    global $current_category_slug;            
    $people_categories = get_the_terms( $post->ID, 'people-categories' ); 
    $current_category_slug = $people_categories[0]->slug;
    $current_category_name = $people_categories[0]->name;

    // Start get parent category info for breadcrumb
    global $category_parent;
    global $category_parent_id;

    $category_parent_id = $people_categories[0]->parent;

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
            <p>
              <span>&rarr;</span>
              <a href="<?php echo esc_url( get_category_link($category_parent_id)); ?>"><?php echo $category_parent->name; ?></a>
            </p>
            <?php } ?>
            <p><span>&rarr;</span><h1><strong><?php echo get_the_term_list( $post->ID, 'people-categories' ); ?></strong></h1></p>
                          
              
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
            <article>
            <!--h3>Restaurants</h3-->
            
            
            <h1><?php the_title(); ?></h1>
            
            <span class="date">
                <?php if (get_field('author')) { ?><?php the_field('author'); ?>&nbsp;&bull; <?php } ?>  
                    <?php echo get_the_date(); ?></span>
            
                    <div class="share clearfix">
                       <span class="st_facebook_custom" displaytext="Facebook" st_processed="yes"></span>
                        <span class="st_linkedin_custom" displaytext="LinkedIn" st_processed="yes"></span>
                        <span class="st_twitter_custom" displaytext="Tweet" st_via="hdmag" st_processed="yes"></span>
                        <span class="st_googleplus_custom" displaytext="Google +" st_processed="yes"></span>
                        <span class="st_email_custom" displaytext="Email" st_processed="yes"></span>
                        <span class="print"><a href="javascript:window.print()">Print</a></span>
                    </div>
  
                
                   <div class="vertical-img">
                      <img src="<?php the_post_thumbnail_url( 'full' ); ?>"
                      <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                      alt="<?php the_post_thumbnail_alt(get_the_ID()); ?>"
                      <?php } ?>
                       /> 
                       
                        <?php if (get_field('image_caption')) { ?>
                            <div class="caption"> 
                               <?php the_field('image_caption'); ?> 
                           </div>                            
                        <?php } ?>

                                                                  
                        <!-- Gallery Link -->

                        <?php

                          $postTitle = get_field('gallery_title');
                          $galleryDescription = get_field('gallery_link_description');

                          $articleTitle = str_replace('&#8211;','&#45;', get_the_title());

                          //$articleURL = post_permalink( $ID );
                          $articleURL = $post->ID;                           

                          if (!empty($postTitle)) :
                          $galleryargs = array(

                
                            'title' => $postTitle,
                            'post_type' => 'galleries',

                          );

                          $get_gallery = new WP_Query( $galleryargs );

                          if ($get_gallery->have_posts()) :

             
                            while ($get_gallery->have_posts()) : $get_gallery->the_post(); 

                            // check if the repeater field has rows of data 

                         ?>
                          <p>
                              <script>
                                console.log('<?= $articleTitle?>');
                              </script>
                              <a class="gallery-link" href="<?php echo post_permalink( $ID ); echo '?articletitle='.$articleTitle.'&articleurl='.$articleURL; ?>">
                                  <?php 
                                  if (!empty($galleryDescription)) {
                                    echo $galleryDescription; 
                                  }
                                  else{
                                    echo "Photos";
                                  }
                                  ?>
                              </a>
                          </p>           
                         <?php
                            endwhile;
                          endif;

                          endif;
                          wp_reset_query();
                         ?>     
                         <!-- end gallery  -->  
                        
                   </div>
                                                      
               <?php the_content(); ?>

            </article>



            <div class="latest people">
                <h2>latest <?php echo $current_category_name; ?></h2>
                <ul>
              <?php

              global $current_category_slug;
              $currentTitle = get_the_title();

              $args = array(

                'posts_per_page' => 3,

                'post_type' => 'people', 

                'post__not_in' => array(get_the_ID()),  

                'tax_query' => array(

                  array(

                    'taxonomy' => 'people-categories',

                    'field'    => 'slug',

                    'terms'    => $current_category_slug,

                  ),

                ),

                

              );

            $query = new WP_Query( $args );

            while ( $query->have_posts() ) : $query->the_post(); 
              if (get_the_title() != $currentTitle) { ?>

                <li>
                    <a href="<?php echo post_permalink( $ID ); ?>">
                        <div class="index-image-box">
                          <?php if ( has_post_thumbnail() ) { ?>   
                            <img src="<?php the_post_thumbnail_url( 'full' ); ?>"
                              <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                                  alt="<?php echo the_post_thumbnail_alt(get_the_ID()); ?>"
                                  <?php } ?>
                              /> 

                          <?php } ?> 
                        </div>
                    </a>
                    <p>
                        <a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a><span><?php echo get_the_date(); ?> <?php if (get_the_term_list( $ID, 'people-categories', '', ', ', '' )): ?> •  <?php echo get_the_term_list( $ID, 'people-categories', '', ', ', '' ) ?><?php endif; ?></span>
                    </p>
                </li>

                <?php } //end if current title ?>


            <?php

            endwhile; ?> 

                </ul>
            </div>
        </section>
        
        <!-- END #content --> 
        
        <?php get_sidebar(); ?>
                
        <!-- END #right --> 
    
  </div>
  <!-- #main --> 
</div>
<!-- #main-container   -->
<?php endwhile; ?>
<?php get_footer(); ?>