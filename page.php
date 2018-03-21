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

        <!-- START #content  -->
        <section id="content" class="two-thirds column"> 
        <div class="pad-article">
        <article>
                               
          <?php the_content(); ?> 

        </article>
        </div>
        </section>
        <!-- END #content  --> 
        
        <!-- START #right  -->
        
        <?php get_sidebar(); ?>
                
        <!-- END #right --> 
        
    </div>
    <!-- END #mid  --> 
    
</div>
<!-- END container  -->
<?php endwhile; ?>

<?php endif; ?>
<?php get_footer(); ?>    
 