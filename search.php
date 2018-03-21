<?php global $is_search;
$is_search = "true"; ?>
<?php get_header(); ?>    

<script type="text/javascript">
$( "body" ).addClass( "search-pg" );
</script>

<!-- START #breadcrumbs -->
<section id="breadcrumbs-block">
    <div class="container">
        
    <section id="breadcrumbs-block">
        <div class="container">
            <div>
        
                <h1><strong>Search</strong></h1>
              
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
            <span class="num-results"><?php search_results_title(); ?>
      </span>
        <div class="search-nav clearfix">
        <!--ul class="clearfix"-->
        <?php if(function_exists('wp_paginate')){wp_paginate();} ?>
        <p>
              	Sort By | 
              	 <a href="<?php bloginfo('siteurl'); ?>/?s=<?php the_search_query(); ?><?= ( isset( $_GET['post_type']) == true ? "&post_type=recipes" : "" ); ?>&orderby=relevanse" <?php if ($_GET['orderby'] == "relevanse") { ?> style="color:#435AA8;font-weight:600;" <?php }else{ ?> style="color:#111;font-weight:400;" <?php }  ?>>relevance</a> |
              	<a href="<?php bloginfo('siteurl'); ?>/?s=<?php the_search_query(); ?><?= ( isset( $_GET['post_type']) == true ? "&post_type=recipes" : "" ); ?>&orderby=post_date&order=desc" <?php if ($_GET['order'] == "desc") { ?> style="color:#435AA8;font-weight:600;" <?php }else{ ?> style="color:#111;font-weight:400;" <?php }  ?>>newest</a> |
              	<a href="<?php bloginfo('siteurl'); ?>/?s=<?php the_search_query(); ?><?= ( isset( $_GET['post_type']) == true ? "&post_type=recipes" : "" ); ?>&orderby=post_date&order=asc" <?php if ($_GET['order'] == "asc") { ?> style="color:#435AA8;font-weight:600;" <?php }else{ ?> style="color:#111;font-weight:400;" <?php }  ?>>oldest</a>
        </p>
        </div>
        <ul class="search-items">

            <?php 

            // the loop

            if (have_posts()) : ?>

             <?php while (have_posts()) : the_post(); ?>


                <li><a href="<?php the_permalink(); ?>"><?php relevanssi_the_title(); ?></a>

                    <p><?php relevanssi_the_excerpt(); ?>

                </p></li>
               

            <?php endwhile;

      else :

        ?>

        

          <li><h2>We're Sorry</h2>

          <p>We couldn't find any results to display for your search term. Please try a different keyword.</p></li>

      

        <?php

        endif;

            ?>
    </ul>
    <div class="search-nav clearfix">

    <?php if(function_exists('wp_paginate')){wp_paginate();} ?>

    <p>
              	Sort By | 
              	 <a href="<?php bloginfo('siteurl'); ?>/?s=<?php the_search_query(); ?><?= ( isset( $_GET['post_type']) == true ? "&post_type=recipes" : "" ); ?>&orderby=relevanse" <?php if ($_GET['orderby'] == "relevanse") { ?> style="color:#435AA8;font-weight:600;" <?php }else{ ?> style="color:#111;font-weight:400;" <?php }  ?>>relevance</a> |
              	<a href="<?php bloginfo('siteurl'); ?>/?s=<?php the_search_query(); ?><?= ( isset( $_GET['post_type']) == true ? "&post_type=recipes" : "" ); ?>&orderby=post_date&order=desc" <?php if ($_GET['order'] == "desc") { ?> style="color:#435AA8;font-weight:600;" <?php }else{ ?> style="color:#111;font-weight:400;" <?php }  ?>>newest</a> |
              	<a href="<?php bloginfo('siteurl'); ?>/?s=<?php the_search_query(); ?><?= ( isset( $_GET['post_type']) == true ? "&post_type=recipes" : "" ); ?>&orderby=post_date&order=asc" <?php if ($_GET['order'] == "asc") { ?> style="color:#435AA8;font-weight:600;" <?php }else{ ?> style="color:#111;font-weight:400;" <?php }  ?>>oldest</a>
    </p>
    </div>

<script>jQuery('ol.wp-paginate li:first-child').addClass('sp-first');</script>

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
 
