<?php
global $current_gategory;
$current_category = "news";
?>
<?php get_header(); ?>

<!-- START #breadcrumbs -->
<section id="breadcrumbs-block">
    <div class="container">
        
            <section id="breadcrumbs-block">
    <div class="container">
        <div>
        
                <h1><strong>News</strong></h1>
              
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
                            
          <?php

            $args = array(

              'posts_per_page' => 200,

              'post_type' => 'news', 
              

            );


            $get_news = new WP_Query( $args );

            if ($get_news->have_posts()) :

                echo do_shortcode('[ajax_load_more post_type="news" taxonomy="news-categories" taxonomy_terms="" taxonomy_operator="IN" posts_per_page="20" scroll="false" container_type="div" button_label="Load More"]'); ?>


                <?php //endwhile;

            endif; ?>
        

<!--input type="button" class="learnmorebtn" id="loadMore" value="Load More"--> 
            
        </section>
        <!-- END #content --> 
        
        <?php get_sidebar(); ?>
                
        <!-- END #right --> 
    
  </div>
  <!-- #main --> 
</div>
<!-- #main-container   -->

<?php get_footer(); ?>
 
