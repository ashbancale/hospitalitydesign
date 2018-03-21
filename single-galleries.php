<?php
global $current_category;
$current_category = "galleries";

get_header(); 

if (have_posts()) : 

while (have_posts()) : the_post(); 

    global $galleryClass;

    if (get_field('gallery_image_size') == 'Large'){
        
        $galleryClass = "large-gallery";
        //echo '$( "body" ).addClass( "prod-stores" );';
    }

    if(get_field('gallery_image_size') == 'Small'){ 
        $galleryClass = "sm-gal";
    }
?>

<?php

// Get the first category and save to variable to be used in product nav template part

global $current_category;            
global $gallery_categories;

$gallery_categories = get_the_terms( $post->ID, 'gallery-categories' ); 
$current_category = $gallery_categories[0]->slug;


// Start get parent category info for breadcrumb
global $category_parent;
global $category_parent_id;

$category_parent_id = $gallery_categories[0]->parent;

if ( $category_parent_id != 0 ) {
  $category_parent = get_term($category_parent_id, 'gallery-categories');
}

?>
  
<!-- START #breadcrumbs -->

<section id="breadcrumbs-block">
    <div class="container">
		<div style="display:none">
			<?php var_dump($_GET); ?>
			<?php  ?>
		</div>

        <div>
              <?php if (!empty($_GET["articleurl"])) { ?>
                <p><a href="<?php echo get_permalink($_GET["articleurl"]); ?>" class="return"><span>‹ Return to Story: <?php echo $_GET["articletitle"]; ?></span></a></p>              
              <?php } else { ?>
        
                <p>
                    <a href="<?php bloginfo('siteurl'); ?>/galleries/">Galleries</a>
                </p> 
                <?php if($category_parent->name != '') { ?>
                <p>
                  <span>&rarr;</span>
                    <a href="<?php echo esc_url( get_category_link($category_parent_id)); ?>"><?php echo $category_parent->name; ?></a>
                </p>
                <p><span>&rarr;</span><h1><strong><?php echo get_the_term_list( $post->ID, 'gallery-categories' ); ?></strong></h1></p>
                <?php } else { ?>
                <p><span>&rarr;</span><h1><strong><?php echo get_the_term_list( $post->ID, 'gallery-categories' ); ?></strong></h1></p>
                <?php } ?>

              <?php } ?>
              
                                                                
        </div>
    </div>
</section>
          


<!-- END #breadcrumbs -->

<div class="container">    
    <!--START #mid -->
    <section id="mid" class="row gallery-page">
        

        <?php
        global $galleryTitle;
        $galleryTitle = get_the_title();
        ?>         
        
        <?php
            if(get_field('gallery_image_size') == 'Large') :
        ?>
            <h1><?php the_title(); ?></h1>
        <?php endif; ?>

         <div id="slider" class="flexslider <?php echo $galleryClass; ?>">
         
              <ul class="slides">

                    <?php

                      // check if the repeater field has rows of data

                      if( have_rows('slides') ) :

                        // loop through the rows of data
                            $slideCounter = 0;

                          while ( have_rows('slides') ) : the_row(); ?>
                            <?php 

                            $slideCounter += 1;
                            $image = get_sub_field('image');

                            ?> 

                                <li  number="<?php echo $slideCounter; ?>">

                                    <?php if(get_field('gallery_image_size') == 'Small') : ?>

                                        <p class="sm-gallery-image">
                                        <img src="<?php echo $image['url']; ?>" class="slide" 
                                            <?php if (!empty($image['alt'])) { ?>
                                            alt="<?php echo $image['alt']; ?>"
                                            <?php } ?>
                                        /></p>
                                        <div class="gallery-info-sm">
                                            <div class="num-slide"><span class="current-slide"></span> of <span class="total-slides"></span></div>
                                            <h1><?php echo $galleryTitle; ?></h1>
                                            <?php the_sub_field('description'); ?>
                                            <div class="share">
                                                <span class='st_facebook_custom' displayText='Facebook'></span>
                                                <span class='st_linkedin_custom' displayText='LinkedIn'></span>
                                                <span class='st_twitter_custom' displayText='Tweet' st_via="hdmag"></span>
                                                <span class='st_googleplus_custom' displayText='Google +'></span>
                                                <span class='st_email_custom' displayText='Email'></span>
                                                <span class="print"><a href="javascript:window.print()">Print</a></span>
                                           </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if(get_field('gallery_image_size') == 'Large') : ?>
                                        <div class="num-slide"><span class="current-slide"></span> of <span class="total-slides"></span></div>
                                        <div class="img-border">
                                            <img src="<?php echo $image['url']; ?>" 
                                            <?php if (!empty($image['alt'])) { ?>
                                            alt="<?php echo $image['alt']; ?>"
                                            <?php } ?>
                                        />
                                        </div>
                                        <div class="gallery-info clearfix">
                                            <?php the_sub_field('description'); ?>
                                            <div class="share">
                                                <span class='st_facebook_custom' displayText='Facebook'></span>
                                                <span class='st_linkedin_custom' displayText='LinkedIn'></span>
                                                <span class='st_twitter_custom' displayText='Tweet' st_via="hdmag"></span>
                                                <span class='st_googleplus_custom' displayText='Google +'></span>
                                                <span class='st_email_custom' displayText='Email'></span>
                                                <span class="print"><a href="javascript:window.print()">Print</a></span>
                                           </div>
                                        </div>
                                    <?php endif; ?>

                                </li>                                                                                            

                          <?php 

                          endwhile;

                      endif; ?>               

                                 
              </ul>
         
         </div>
        
        
        <div id="carousel" class="flexslider <?php echo $galleryClass; ?>">
          <ul class="slides">

                <?php

                  // check if the repeater field has rows of data

                  if( have_rows('slides') ) :

                    // loop through the rows of data
                        $slideCounter = 0;

                      while ( have_rows('slides') ) : the_row(); ?>
                        <?php 

                        $slideCounter += 1;
                        $image = get_sub_field('image');

                        ?> 

                        <li id="thumb<?php echo $slideCounter; ?>" style="width:98px;">
                            <?php if (!empty(get_sub_field('image'))) { ?>

                                <img src="<?php echo $image['url']; ?>" 
                                <?php if (!empty($image['alt'])) { ?>
                                    alt="<?php echo $image['alt']; ?>"
                                    <?php } ?>
                                /> 

                            <?php } ?>                                
                        </li>                                                                                             

                      <?php 

                      endwhile;

                  endif; ?>                       
            
          </ul>    
       </div>   
    </section>
    <!-- END #mid -->    
</div>
<!-- END container -->
<?php endwhile; ?>

<?php endif; ?>  

<?php get_footer(); ?>  

 
