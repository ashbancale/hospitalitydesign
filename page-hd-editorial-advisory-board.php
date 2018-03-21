<?php get_header(); ?>    

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>  

<!-- START #breadcrumbs -->
<section id="breadcrumbs-block">
    <div class="container">
        
    <section id="breadcrumbs-block">
        <div class="container">
            <div>
        
                <h1><strong><?php the_title(); ?></strong></h1>
              
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

          <div id="ad_board_list">
 

            <?php if( have_rows('editorial_advisory_board_members') ): ?>
                <?php while( have_rows('editorial_advisory_board_members') ): the_row(); 

                ?>    
                  <!-- Image / Name / Title / Company / Link -->
                  <div class="advisory_board_item" style="display: block;">

                      <p>
                      <?php
                      $image = get_sub_field('image');
                      ?>
                        <img src="<?php echo $image['url']; ?>" data-pin-nopin="true" 
                          <?php if (!empty($image['alt'])) { ?>
                          alt="<?php echo $image['alt']; ?>"
                          <?php } ?> >

                      </p>
                      <p class="advisory_board_name"><?php echo get_sub_field('member_name'); ?></p>
                      <p class="advisory_board_title"><?php echo get_sub_field('member_title'); ?></p>
                      <p class="advisory_company"><?php echo get_sub_field('company'); ?></p>
                      <p class="advisory_link"><a href="http://<?php echo get_sub_field('website'); ?>" target="_blank"><?php echo get_sub_field('website'); ?></a></p>
                  </div>   
                <?php endwhile;
            endif; ?> 

            <input type="button" class="learnmorebtn" id="loadMore" value="Load More">
          </div>
        </section>
        <!-- END #content  --> 
        
        <!-- START #right -->
        
        <?php get_sidebar(); ?>
                
        <!-- END #right --> 
        
    </div>
    <!-- END #mid --> 
    
</div>
<!-- END container -->

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>    
 