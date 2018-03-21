<?php
global $current_category;
$current_category = "awards-events"; 
?>
<?php get_header(); ?>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>  

<!-- START #breadcrumbs -->
<section id="breadcrumbs-block">
    <div class="container">
        
            <section id="breadcrumbs-block">
                <div class="container">
                    <div>
                    
                            <h1><strong>Awards + Events</strong></h1>
                          
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
            
    <div class="featured-cat events clearfix">

        <?php
            $image = get_field('featured_event_image');
        ?>

        <a href="<?php the_field('featured_event_link'); ?>">
            <img src="<?php echo $image['url']; ?>" 
            <?php if ($image['alt'] != ''): ?>
                alt="<?php echo $image['alt']; ?>"
            <?php endif; ?>
            />
        </a>
        
        <div class="feature-blurb">
            
            <h1><a href="<?php the_field('featured_event_link'); ?>"><?php the_field('featured_event_title'); ?></a></h1>
            
            <p><?php the_field('featured_event_description'); ?><br></p>

            <p><a href="<?php the_field('featured_event_link'); ?>">Read More</a></p>
        </div>
    </div>

    <div class="events-grid">


            <?php 

                if( have_rows('event_blocks') ) :

                    // loop through the rows of data

                      while ( have_rows('event_blocks') ) : the_row(); ?>
                        <?php 

                        $image = get_sub_field('image');

                        ?>

                        <div class="event">

                            <?php if (!empty(get_sub_field('image'))) { ?>                    
                                <a href="<?php the_sub_field('read_more_link'); ?>">
                                  <img src="<?php echo get_sub_field('image')['url']; ?>" 
                                  <?php if (!empty(get_sub_field('image')['alt'])) { ?>
                                  alt="<?php echo get_sub_field('image')['alt']; ?>"
                                  <?php } ?>>
                                </a>
                            <?php } ?>

                            <div class="event-blurb">
                                
                                <h2><a href="<?php the_sub_field('read_more_link'); ?>"><?php the_sub_field('title'); ?></a></h2>
                                
                                <p><em><?php the_sub_field('dates'); ?><br>
                                <?php the_sub_field('location'); ?></em><br>
                                
                                <?php the_sub_field('description'); ?>
                            
                                <?php if(!empty(get_sub_field('registration_form_link'))) { ?>
                                <a href="<?php the_sub_field('registration_form_link'); ?>" class="link-out" target="_blank">Registration Form</a>
                                <?php } ?>                

                                <?php if(!empty(get_sub_field('visit_website_link'))) { ?>
                                <a href="<?php the_sub_field('visit_website_link'); ?>" class="link-out" target="_blank">Visit website</a>
                                <?php } ?>  

                                <?php if(!empty(get_sub_field('read_more_link'))) { ?>
                                <a href="<?php the_sub_field('read_more_link'); ?>" class="event-more">View More ›</a>
                                <?php } ?>                  

                                </p>
                            </div>
                        </div>                                                                    

                      <?php 

                      endwhile;

                endif; ?>


    </div> 
            
        </section>
       
        
        <?php get_sidebar(); ?>
                
        <!-- END #right --> 
        
    </div>
    <!-- END #mid --> 
    
</div>
<!-- END container -->

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>