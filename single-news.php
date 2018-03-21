<?php
global $current_gategory;
$current_category = "news";
?>
<?php get_header(); ?>

<?php while(have_posts()) : the_post(); ?>

    <?php
    
    // Get the first category and save to variable to be used in product nav template part

    global $current_category;            
    $news_categories = get_the_terms( $post->ID, 'news-categories' ); 
    $current_category = $news_categories[0]->slug;

    ?>  

<!-- START #breadcrumbs -->
<section id="breadcrumbs-block">
    <div class="container">
        
            <section id="breadcrumbs-block">
    <div class="container">
        <div>
        
                <p><a href="<?php bloginfo('siteurl'); ?>/news/">News</a></p> 
                
                            <p><span>&rarr;</span></p> <h1><strong><?php echo $news_categories[0]->name; ?></strong></h1>
                          
              
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
                <!--h3>Hotels / Resorts / Wellness</h3-->

                <h1><?php the_title(); ?></h1>

                <span class="date">
                  <?php
                  if (get_field('author') != ''):
                    the_field('author'); ?> &bull; 
                  <?php endif; ?>
                  <?php the_date(); ?>
                  
                </span>

                <div class="share clearfix">
                    <span class='st_facebook_custom' displayText='Facebook'></span>
                    <span class='st_linkedin_custom' displayText='LinkedIn'></span>
                    <span class='st_twitter_custom' displayText='Tweet' st_via="hdmag"></span>
                    <span class='st_googleplus_custom' displayText='Google +'></span>
                    <span class='st_email_custom' displayText='Email'></span>
                    <span class="print">
                        <a href="javascript:window.print()">Print</a>
                    </span>
                </div>

            <!-- Gallery or Image -->       
            <!--div class="vertical-img"-->
            <div class="<?php the_field('featured_image_size'); ?>">
                <?php
                    //if ($nogallery == "yes") :
                    if ( has_post_thumbnail() ) { ?>   
                      <img class="articleImage" src="<?php the_post_thumbnail_url( 'full', array( 'class' => 'articleImage' ) ); ?>" border="0"
                      <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                      alt="<?php echo the_post_thumbnail_alt(get_the_ID()); ?>"
                      <?php } ?>
                      /> 

                      <?php if (get_field('image_copyright')) { ?>
<div class="clearfix"><p class="photo-credit"><?php the_field('image_copyright'); ?></p>
<p class="photo-caption"><?php the_field('featured_image_caption'); ?></p></div>
                      <?php } ?>
                    <?php } 
                    //endif; 
                    ?>
              </div>

              <!-- Gallery Link -->

              <?php
                $articleTitle = get_the_title();
                $articleURL = post_permalink( $ID ); 

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
                <h2>latest <?php echo $news_categories[0]->name; ?></h2>
                <ul>
              <?php 
              global $current_category;
              $currentTitle = get_the_title();

              $args = array(

                'posts_per_page' => 3,

                'post_type' => 'news', 

                'post__not_in' => array(get_the_ID()),  

                'tax_query' => array(

                  array(

                    'taxonomy' => 'news-categories',

                    'field'    => 'slug',

                    'terms'    => $current_category,

                  ),

                ),

                

              );

            $query = new WP_Query( $args );

            while ( $query->have_posts() ) : $query->the_post(); 
              if (get_the_title() != $currentTitle) { ?>
                <li>
                    <a href="<?php echo post_permalink( $ID ); ?>"></a>
                    <p>
                        <a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a>
                        <span><?php echo get_the_date( $ID ); ?> •
                        <?php 

                          $categoryTitle = get_the_term_list( $ID, 'news-categories', '', ', ', '' ); 
                          if ($categoryTitle == '<a href="'.get_bloginfo('siteurl').'/news/main/" rel="tag">Main</a>'){
                            echo '<a href="'.get_bloginfo('siteurl').'/news/main/">news</a>';
                          } else {
                            echo $categoryTitle; 
                          }

                        ?>
                               
                        </span>
                    </p>
                </li>
                <?php } //end if current title ?>


            <?php

            endwhile; ?>    


                </ul>
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
<?php endwhile; ?>
<?php get_footer(); ?>   