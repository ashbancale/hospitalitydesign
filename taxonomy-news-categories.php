<?php 
global $current_gategory;
$current_category="news";
?>
<?php get_header(); ?>
 <style>
span.cat {display:none;}
</style>
<?php
global $wp_query;

$cat_obj = $wp_query->get_queried_object();
$current_category = $cat_obj->name;
?>

<!-- START #breadcrumbs -->
<section id="breadcrumbs-block">
    <div class="container">
        
        <section id="breadcrumbs-block">
            <div class="container">
                <div>

                <p><a href="<?php bloginfo('siteurl'); ?>/news/">News</a></p> 
            
                <p><span>&rarr;</span></p> <h1><strong><?php echo $current_category; ?></strong></h1>
              
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

          function custom_field_excerpt() {

            global $post;

            $text = get_the_content(); //Replace 'your_field_name'

            if ( '' != $text ) {

              $text = strip_shortcodes( $text );

              $text = apply_filters('the_content', $text);

              $text = str_replace(']]&gt;', ']]&gt;', $text);

              $excerpt_length = 40; // 20 words

              $excerpt_more = apply_filters('excerpt_more', ' ' . '[]');

              $text = wp_trim_words( $text, $excerpt_length, $excerpt_more );

            }

            return apply_filters('the_excerpt', $text);

          }

          // wp query

            $args = array(

              'post_type' => 'news',

              'posts_per_page' => 200,

              'tax_query' => array(

                    array(

                        'taxonomy' => 'news-categories',

                        'field'    => 'term_id',

                        'terms'    => $cat_obj->term_id

                    ),

                ),

            );

            $get_news = new WP_Query( $args );

            if ($get_news->have_posts()) :
                echo $taxonomyterms;

                echo do_shortcode('[ajax_load_more post_type="news" taxonomy="news-categories" taxonomy_terms="'.$cat_obj->slug.'" taxonomy_operator="IN" posts_per_page="20" scroll="false" container_type="div" button_label="Load More"]'); 

                //endwhile;

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
 
