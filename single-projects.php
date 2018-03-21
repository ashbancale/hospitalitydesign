<?php
global $current_gategory;
$current_category = "projects";
?>
<?php get_header(); ?> 

<?php while(have_posts()) : the_post(); ?>

    <?php
    
    // Get the first category and save to variable to be used in product nav template part

    global $current_category_slug;            
    $project_categories = get_the_terms( $post->ID, 'project-categories' ); 
    $current_category_slug = $project_categories[0]->slug;
    $current_category_name = $project_categories[0]->name;

    ?>  
<!-- START #breadcrumbs -->
<section id="breadcrumbs-block">
    <div class="container">
        
            <section id="breadcrumbs-block">
    <div class="container">
        <div>
        
            <p><a href="<?php bloginfo('siteurl'); ?>/projects/">Projects</a></p> 
            
            <p><span>&rarr;</span></p><h1><strong><?php if (get_the_term_list( $ID, 'project-categories', '', ', ', '' )): ?> <?php echo get_the_term_list( $ID, 'project-categories', '', ', ', '' ) ?><?php endif; ?></strong></h1>
                          
              
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
                <?php if (get_field('author')) { ?><?php the_field('author'); ?>&nbsp;&bull; <?php } ?>  <?php if (get_field('image_copyright')) { ?>
                    <?php the_field('image_copyright'); ?> &bull;
                    <?php } ?> <?php echo get_the_date(); ?></span>
            
            <div class="share clearfix">
                <span class='st_facebook_custom' displayText='Facebook'></span>
                <span class='st_linkedin_custom' displayText='LinkedIn'></span>
                <span class='st_twitter_custom' displayText='Tweet' st_via="hdmag"></span>
                <span class='st_googleplus_custom' displayText='Google +'></span>
                <span class='st_email_custom' displayText='Email'></span>
                <span class="print"><a href="javascript:window.print()">Print</a></span>
            </div>
 
                    
                <!-- Add featured image or gallery here -->            

                   <!--div class="vertical-img"-->
                   <img src="<?php the_post_thumbnail_url( 'full' ); ?>"
                      <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                      alt="<?php the_post_thumbnail_alt(get_the_ID()); ?>"
                      <?php } ?>
                       /> 
                   <?php if (!empty(get_field('image_caption'))) : ?> 
                    <div class="caption"><?php the_field('image_caption'); ?></div>                                        
                   <?php endif; ?>
                        
                   <!--/div-->
                      
              <!-- Gallery Link -->

              <?php

                $articleTitle = get_the_title();
                //$articleURL = post_permalink( $ID ); 
				        $articleURL = $post->ID;
                $postTitle = get_field('gallery_title');
                $galleryDescription = get_field('gallery_link_description');

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
               <!-- end gallery -->                  
               
               <?php the_content(); ?>
            </article>



            <div class="latest projects">
                <h2>latest <?php echo $current_category_name; ?></h2>
                <ul>
              <?php

              global $current_category_slug;
              $currentTitle = get_the_title();

              $args = array(

                'posts_per_page' => 3,

                'post_type' => 'projects', 

                'post__not_in' => array(get_the_ID()),  

                'tax_query' => array(

                  array(

                    'taxonomy' => 'project-categories',

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
                    <a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a><span><?php echo get_the_date(); ?>
                        <?php if (get_the_term_list( $ID, 'project-categories', '', ', ', '' )): ?> •  <?php echo get_the_term_list( $ID, 'project-categories', '', ', ', '' ) ?><?php endif; ?></span>
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
