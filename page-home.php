<?php 

/**  Template Name: Home Template */ 

?>
<?php get_header(); ?>
 
<script type="text/javascript">
$( "body" ).addClass( "home" );
</script>
  
<!-- Start Rotator -->
<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?> 
<div id="banner-block">
<div class="banner">

    <div class="flexslider-main">
        
        <ul class="slides">


          <?php

            // check if the repeater field has rows of data

            if( have_rows('rotator_slides') ) :

              // loop through the rows of data

                while ( have_rows('rotator_slides') ) : the_row(); ?>
                  <?php 

                  $image = get_sub_field('slide_image');

                  ?>

                    <li>
           
                    <a href="<?php the_sub_field('slide_link'); ?>">

                            <img src="<?php echo $image['url']; ?>"
                            <?php if (!empty($image['alt'])) { ?>
                                alt="<?php echo $image['alt']; ?>"
                                <?php } ?>
                            /> 
                          
                    </a>
                        <div class="slider-caption">    
                        <h4><?php the_sub_field('slide_category'); ?></h4>  
                        <p><a href="<?php the_sub_field('slide_link'); ?>"><?php the_sub_field('slide_title'); ?></a>
                        </p>
                        </div>
                    </li>                                                                    

                <?php 

                endwhile;

            endif; ?>  

 
        </ul>
        
    </div>
</div>
</div>

<script>
/*--------------------------------------------------- Carousels ----*/
$(document).ready (function () {

    

    $('.flexslider-main').flexslider({
        
        startAt: 0,
        
        
        animation: "fade",
        slideshow: true,
        prevText: "",      
        nextText: "",
        start: function(slider){
          $('body').removeClass('loading');
        }
   });
});
</script>
<?php endwhile; ?>

<?php endif; ?>
<!-- End Rotator -->

<div class="container">    

    <!--START #mid -->
    <div id="mid" class="row"> 

        <!-- START #content -->
        <section id="content" class="two-thirds column">            
            
            <section class="products">
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>products/">products</a></h1>
                <div class="flexslider-products">
                    <ul class="slides">
                        
                      <?php

                      $args = array(

                        'posts_per_page' => 4,

                        'post_type' => 'products',               

                      );

                    $query = new WP_Query( $args );

                    while ( $query->have_posts() ) : $query->the_post(); ?>

                        <?php if ( has_post_thumbnail() ) {   
                        ?>
                           

                        <li data-thumb="<?php the_post_thumbnail_url('full') ?>">
                            <span class="cat">
                            <?php if (get_the_term_list( $ID, 'products-categories', '', ', ', '' )): ?> <?php echo get_the_term_list( $ID, 'products-categories', '', ', ', '' ) ?><?php endif; ?>
                                
                            </span>                        
                            <h2><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h2>
                              <a href="<?php echo post_permalink( $ID ); ?>">
                              <img src="<?php the_post_thumbnail_url('full') ?>" 
                              <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                                  alt="<?php echo the_post_thumbnail_alt(get_the_ID()); ?>"
                                  <?php } ?>
                              /> 

                            </a>
                          </li>    

                       <?php } ?>                                 


                    <?php

                    endwhile; ?>  
                                               
                        
                    </ul>
                </div>
    
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>products/" class="more">More Products &rsaquo;</a>
            </section>
            <section class="news">
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>news">news</a></h1>
                    <ul>

                          <?php

                          $newsargs = array(

                            'posts_per_page' => 6,

                            'post_type' => 'news',               

                          );

                        $newsquery = new WP_Query( $newsargs );

                        while ( $newsquery->have_posts() ) : $newsquery->the_post(); ?>
                                 

                              <li><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a>
                                  <?php echo get_the_date(); ?>
                                  
                                          &bull; <?php if (get_the_term_list( $ID, 'news-categories', '', ', ', '' )): ?> <?php echo get_the_term_list( $ID, 'news-categories', '', ', ', '' ) ?><?php endif; ?>
                                        
                              </li>                                            


                        <?php

                        endwhile; 
                        wp_reset_query();
                        ?>                     
                                                    

                        
                    </ul>
    
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>news" class="more">More News &rsaquo;</a>
            </section>

            <section class="projects clearfix">
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>projects">projects</a></h1>
                <div id="slider" class="flexslider projects">
                    <ul class="slides">
                        
                        <?php

                        $currentTitle = get_the_title();

                        $args = array(

                          'posts_per_page' => 6,

                          'post_type' => 'projects',                 

                        );

                      $query = new WP_Query( $args );

                      while ( $query->have_posts() ) : $query->the_post(); ?>

                            <li>
                                <?php if ( has_post_thumbnail() ) : ?>  
                                <div class="img-div">
                                  <img class="lazy" src="<?php the_post_thumbnail_url( 'full' ); ?>" 
                                  <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                                      alt="<?php echo the_post_thumbnail_alt(get_the_ID()); ?>"
                                      <?php } ?>
                                  />
                                </div>
                                <?php endif; ?>
                                <div class="projects-blurb">
                                    <h2><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h2>
                                    <span class="cat"><?php echo get_the_date(); ?>
                                        
                                                &bull; <?php if (get_the_term_list( $ID, 'project-categories', '', ', ', '' )): ?> <?php echo get_the_term_list( $ID, 'project-categories', '', ', ', '' ) ?><?php endif; ?>
                                               
                                    </span>
                                    <p>
                                    <?php 
                                    if ( get_field('abstract_text') != ''){
                                        the_field('abstract_text');
                                    } else {
                                        echo wp_trim_words( get_the_excerpt(), 15, '...' );
                                    }
                                    ?> <a href="<?php echo post_permalink( $ID ); ?>">Read More</a></p>
                                </div>
                            </li>                   

                      <?php

                      endwhile; ?> 
                            
         

                        
                    </ul>
                </div>

                <div id="carousel" class="flexslider projects">

                    <ul class="slides">
                        
                        <?php

                        $args = array(

                          'posts_per_page' => 6,

                          'post_type' => 'projects',                 

                        );

                      $query = new WP_Query( $args );

                      while ( $query->have_posts() ) : $query->the_post(); ?>

                            <?php if ( has_post_thumbnail() ) { ?>    

                            <li><img src="<?php the_post_thumbnail_url( 'full' ); ?>" 
                              <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                                  alt="<?php echo the_post_thumbnail_alt(get_the_ID()); ?>"
                                  <?php } ?>
                              /> 
                            </li>

                            <?php } ?>                 

                      <?php

                      endwhile; ?>                              

                        
                    </ul>
                </div>
                
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>projects" class="more">More Projects &rsaquo;</a>
            </section>

            <section class="people-vids">
              <div class="left-sections clearfix">
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>people">people</a></h1>
                  
                        <?php

                        $currentTitle = get_the_title();

                        $args = array(

                        'posts_per_page' => 1,

                        'post_type' => 'people', 

                        'meta_key' => 'featured_homepage',

                        'meta_value' => true,                 

                        );

                      $query = new WP_Query( $args );

                      while ( $query->have_posts() ) : $query->the_post(); ?>

                          <img src="<?php the_post_thumbnail_url( 'full' ); ?>" class="videoimage"
                          <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                              alt="<?php echo the_post_thumbnail_alt(get_the_ID()); ?>"
                              <?php } ?>
                          data-pin-nopin="true" />                                            

                          <h2><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h2>

                          <span class="date">
                          <?php echo get_the_date(); ?>
                          <?php if (get_the_term_list( $ID, 'people-categories', '', ', ', '' )): ?>  • <?php echo get_the_term_list( $ID, 'people-categories', '', ', ', '' ) ?><?php endif; ?>
                            
                          </span>

                                                              
                          <?php 
                            if ( get_field('abstract_text') != ''){
                                the_field('abstract_text');
                            } else {
                                echo wp_trim_words( get_the_excerpt(), 15, '...' );
                            }
                            ?>&nbsp; <a href="<?php echo post_permalink( $ID ); ?>">Read More</a>

                          <a href="<?php echo esc_url( home_url( '/' ) ); ?>people" class="more">More People ›</a>                 

                      <?php

                      endwhile; ?> 

                  
              </div>

                <div class="left-sections clearfix">
                    
                  <?php if (have_posts()) : ?>

                  <?php while (have_posts()) : the_post(); ?>   

                    <h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>people/video-interviews/">video interviews</a></h3>
                    
                    <?php 
                    $videoimage = get_field('video_interviews_image');
                    if ($videoimage != ''):
                    ?>

                      <img src="<?php echo $videoimage['url']; ?>" class="videoimage"
                      <?php
                      if ($videoimage['alt'] != ''):
                      ?>
                      alt="<?php echo $videoimage['alt']; ?>"
                      <?php endif; ?>
                    >
                    <?php endif; ?>
                    <h4><a href="<?php the_field('video_interviews_link'); ?>"><?php the_field('video_interviews_title'); ?></a></h4>
                    <p><?php remove_p(the_field('video_interviews_text')); ?> <a href="<?php the_field('video_interviews_link'); ?>">View the interview</a></p>
                    
                    <?php 
                    $sponsorimage = get_field('video_interviews_sponsor_image');
                    if ($sponsorimage != ''):
                    ?>
                    <strong class="sponsor">Sponsored by:</strong>
                    <!--a href=""--><img src="<?php echo $sponsorimage['url']; ?>" class="walters"><!--/a-->
                    <?php endif; ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>people/video-interviews/" class="more">More Videos &rsaquo;</a>

                  <?php endwhile; ?>

                  <?php endif; ?>                    
                </div>
            </section>
            <section class="blog">
                <h1>blog: hd talks</h1>
                <div id="hdtalkImage"></div>
                    <script type="text/javascript">
                        LoadBlogPosts.start('https://hdtalks.hospitalitydesign.com/wp-json/wp/v2/posts', 'json', 'hdtalksblog_rss');
                    </script>
                    <div id="hdtalksblog_rss"></div>  
                <a href="https://hdtalks.hospitalitydesign.com/" target="_blank" class="more">Visit HD Talks &rsaquo;</a>
            </section> 
            
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