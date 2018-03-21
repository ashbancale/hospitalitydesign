<?php

// Displays SEO Copy depending on type of page

global $seo_copy;
$seo_copy = "";

if(is_front_page()) :

	$seo_copy = do_shortcode("[pods name='seo_copy' field='home']");

endif;

if(is_post_type_archive('news')) :

	$seo_copy =  do_shortcode("[pods name='seo_copy' field='news']");

endif;

if(is_post_type_archive('projects')) :

	$seo_copy =  do_shortcode("[pods name='seo_copy' field='projects']");

endif;

if(is_post_type_archive('galleries')) :

	$seo_copy =  do_shortcode("[pods name='seo_copy' field='galleries']");

endif;

if(is_post_type_archive('products')) :

	$seo_copy =  do_shortcode("[pods name='seo_copy' field='products']");

endif;

if(is_page('awards-events')) :

	$seo_copy =  do_shortcode("[pods name='seo_copy' field='events']");

endif;

// Uses slug of page category to get the seo copy field

if(is_tax( 'news-categories' )) :
 if (have_posts()) : 
	while (have_posts()) : the_post(); 		
		$terms = get_the_terms( $post->ID, 'news-categories' );
		$term = array_pop($terms);			
		$seo_copy = do_shortcode("[pods name='seo_copy' field='news_".str_replace("-","_",$term->slug)."']");
	endwhile;
 endif;
endif;

if(is_tax( 'gallery-categories' )) :
 //if (have_posts()) : 
	//while (have_posts()) : the_post(); 		
		global $cat_obj;
		$terms = get_the_terms( $post->ID, 'gallery-categories' );
		$term = array_pop($terms);			
		$seo_copy = do_shortcode("[pods name='seo_copy' field='galleries_".str_replace("-","_",$cat_obj->slug)."']");
		echo "<!-- seo cat: ".str_replace("-","_",$cat_obj->slug)."-->";
	//endwhile;
 //endif;
endif;

if(is_tax( 'project-categories' )) :
 if (have_posts()) : 
	while (have_posts()) : the_post(); 		
		$terms = get_the_terms( $post->ID, 'project-categories' );
		$term = array_pop($terms);			
		$seo_copy = do_shortcode("[pods name='seo_copy' field='projects_".str_replace("-","_",$term->slug)."']");
	endwhile;
 endif;
endif;

if(is_tax( 'products-categories' )) :
 //if (have_posts()) : 
	//while (have_posts()) : the_post(); 		
		global $cat_obj;
		$terms = get_the_terms( $post->ID, 'products-categories' );
		$term = array_pop($terms);			
		$seo_copy = do_shortcode("[pods name='seo_copy' field='products_".str_replace("-","_",$cat_obj->slug)."']");
		echo "<!-- seo cat: ".str_replace("-","_",$cat_obj->slug)."-->";
	//endwhile;
 //endif;
endif;

if(is_singular( 'events' )) :
 if (have_posts()) : 
	while (have_posts()) : the_post(); 		
		global $post;		
		$seo_copy = do_shortcode("[pods name='seo_copy' field='awards_events_".str_replace("-","_",$post->post_name)."']");
	endwhile;
 endif;
endif;

?>


