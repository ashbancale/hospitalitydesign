<?php //Displays ad scripts based on what kind of page or post type ?>

<script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>

<?php if(is_front_page()) : ?>

<script type='text/javascript'>
googletag.cmd.push(function() {
	 var topMapping = googletag.sizeMapping()
	.addSize([1024, 0 ], [[970, 90], [728, 90]])
	.addSize([768, 0 ], [728, 90])
	.addSize([330, 0 ], [300, 50])
	.build();		
googletag.defineSlot('/5993/nbm.con.hd/home/', [[728, 90], [300, 50], [970, 90]],  'HD_728_Top')
.addService(googletag.pubads())
.defineSizeMapping(topMapping)
.setTargeting("pos", "top")
.setCollapseEmptyDiv(true,true);
googletag.defineSlot('/5993/nbm.con.hd/home/', [[300, 250],[300, 600]],  'HD_300_Top')
.addService(googletag.pubads())
.setTargeting("pos", "top")
.setCollapseEmptyDiv(true,true);
googletag.defineSlot('/5993/nbm.con.hd/home/', [300, 250],  'HD_300_Middle1')
.addService(googletag.pubads())
.setTargeting("pos", "middle1")
.setCollapseEmptyDiv(true,true);
googletag.defineSlot('/5993/nbm.con.hd/home/', [300, 250],  'HD_300_Bottom')
.addService(googletag.pubads())
.setTargeting("pos", "bottom")
.setCollapseEmptyDiv(true,true);
googletag.defineSlot('/5993/nbm.con.hd/home/',  [[728, 90], [300, 50], [970, 90]],  'HD_728_Bottom')
.addService(googletag.pubads())
.setTargeting("pos", "bottom")
.setCollapseEmptyDiv(true,true);
googletag.defineOutOfPageSlot('/5993/nbm.con.hd/home/','HD_prestitial')
.addService(googletag.pubads())
.setTargeting("pos", "prestitial")
.setCollapseEmptyDiv(true,true);
googletag.defineOutOfPageSlot('/5993/nbm.con.hd','HD_wallpaper')
.addService(googletag.pubads())
.setTargeting("pos", "wallpaper")
.setCollapseEmptyDiv(true,true);
googletag.defineOutOfPageSlot('/5993/nbm.con.hd','HD_sliding_billboard')
.addService(googletag.pubads())
.setTargeting("pos", "sliding_billboard")
.setCollapseEmptyDiv(true,true);
googletag.defineOutOfPageSlot('/5993/nbm.con.hd/home/','HD_interstitial')
.addService(googletag.pubads())
.setTargeting("pos", "interstitial");
googletag.pubads().setTargeting("s1","home")
.setTargeting("s2","")
.setTargeting("url","home__index.shtml");
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>

<?php endif; ?>

<?php 
global $is_search;
if(is_page('about-us') || is_page('contact-us') || is_page('newsletters') || is_page('whitepapers-form') || is_page('whitepapers-confirmation') || is_page('whitepapers') || is_page('site-map') || is_page('privacy-policy') || is_page('terms-of-use') || is_page('rss-feeds') || is_page('hd-editorial-advisory-board') || ($is_search == "true")) : ?> 
<?php
global $post;
$url = $post->slug;
?>

<script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})(); 
</script>

<script type='text/javascript'>
    googletag.cmd.push(function() {
	 var topMapping = googletag.sizeMapping()
	.addSize([1024, 0 ], [[970, 90], [728, 90]])
	.addSize([768, 0 ], [728, 90])
	.addSize([330, 0 ], [300, 50])
	.build();	    	
    googletag.defineSlot('/5993/nbm.con.hd/info/', [[728, 90], [300, 50], [970, 90]],  'HD_728_Top')
    .defineSizeMapping(topMapping)
    .addService(googletag.pubads())
    .setTargeting("pos", "top")
    .setCollapseEmptyDiv(true,true);
    googletag.defineSlot('/5993/nbm.con.hd/info/', [[300, 250],[300, 600]],  'HD_300_Top')
    .addService(googletag.pubads())
    .setTargeting("pos", "top")
    .setCollapseEmptyDiv(true,true);
    googletag.defineSlot('/5993/nbm.con.hd/info/', [300, 250],  'HD_300_Middle1')
    .addService(googletag.pubads())
    .setTargeting("pos", "middle1")
    .setCollapseEmptyDiv(true,true);
    googletag.defineSlot('/5993/nbm.con.hd/info/', [300, 250],  'HD_300_Bottom')
    .addService(googletag.pubads())
    .setTargeting("pos", "bottom")
    .setCollapseEmptyDiv(true,true);
    googletag.defineSlot('/5993/nbm.con.hd/info/',  [[728, 90], [300, 50], [970, 90]],  'HD_728_Bottom')
    .addService(googletag.pubads())
    .setTargeting("pos", "bottom")
    .setCollapseEmptyDiv(true,true);
    googletag.defineOutOfPageSlot('/5993/nbm.con.hd/info/','HD_interstitial')
    .addService(googletag.pubads())
    .setTargeting("pos", "interstitial")
    .setCollapseEmptyDiv(true,true);
    googletag.pubads().setTargeting("s1","info")
    .setTargeting("s2","")
    .setTargeting("url","info__about-us.shtml");
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
    });
</script>


<?php endif; ?>

<?php if(is_post_type_archive('news') || is_singular('news') || is_post_type_archive('galleries') || is_singular('galleries') || is_singular('people') || is_post_type_archive('people')  || is_post_type_archive('projects') || is_singular('projects') || is_post_type_archive('products') || is_singular('products') ||  is_page('awards-events') || is_singular('events') || is_tax()) :

	global $current_category;
	$zone1 = "";
	$zone2 = "";
	$url = "";

 if (have_posts()) : 

	while (have_posts()) : the_post(); 		
	
	// News pages

	if(is_post_type_archive('news')) :
		$zone1 = "news";
		$zone2 = "";
		$url = "";
	endif;

	if(is_tax('news-categories')) :
		$terms = get_the_terms( $post->ID, 'news-categories' );
		$term = array_pop($terms);			
		$zone1 = "news";
		$zone2 = "/".$term->slug;
		$url = "_".$term->slug;
	endif;	

	if(is_singular('news'))	:
		$zone1 = "news";
		$terms = get_the_terms( $post->ID, 'news-categories' );
		$term = array_pop($terms);			
		$zone2 = "/".$term->slug;
		$url = "_".$term->slug."_".$post->post_name;
	endif;

	// People pages 
	if(is_post_type_archive('people')) :
		$zone1 = "people";
		$zone2 = "";
		$url = "";
	endif;

	if(is_tax('people-categories')) :
		$terms = get_the_terms( $post->ID, 'people-categories' );
		$term = array_pop($terms);			
		$zone1 = "people";
		$zone2 = "/".$term->slug;
		$url = "_".$term->slug;

		if (($zone2 == '/interviews-5-questions-for') || ($zone2 == '/interviews-back-space') || ($zone2 == '/interviews-in-depth') || ($zone2 == '/interviews-meet-the-minds')) :
			$zone2 = '/interviews';
		endif; 		
	endif;	

	if(is_singular('people'))	:
		$zone1 = "people";
		$terms = get_the_terms( $post->ID, 'people-categories' );
		$term = array_pop($terms);			
		$zone2 = "/".$term->slug;
		$url = "_".$term->slug."_".$post->post_name;

		if (($zone2 == '/interviews-5-questions-for') || ($zone2 == '/interviews-back-space') || ($zone2 == '/interviews-in-depth') || ($zone2 == '/interviews-meet-the-minds')) :
			$zone2 = '/interviews';
		endif;			
	endif;	

	//Project Pages
	if(is_post_type_archive('projects')) :
		$zone1 = "projects";
		$zone2 = "";
		$url = "";
	endif;

	if(is_tax('project-categories')) :
		$terms = get_the_terms( $post->ID, 'project-categories' );
		$term = array_pop($terms);			
		$zone1 = "projects";
		$zone2 = "/".$term->slug;
		$url = "_".$term->slug;
	endif;	

	if(is_singular('projects'))	:
		$zone1 = "projects";
		$terms = get_the_terms( $post->ID, 'project-categories' );
		$term = array_pop($terms);			
		$zone2 = "/".$term->slug;
		$url = "_".$term->slug."_".$post->post_name;
	endif;

	//Gallery pages	
	
	if(is_post_type_archive('galleries')) :
		$zone1 = "galleries";
		$zone2 = "";
		$url = "";
	endif;

	if(is_tax('gallery-categories')) :
		$terms = get_the_terms( $post->ID, 'gallery-categories' );
		$term = array_pop($terms);			
		$zone1 = "galleries";
		$zone2 = "/".$term->slug;
		$url = "_".$term->slug;

		if (($zone2 == '/projects-hotels-resorts-wellness') || ($zone2 == '/projects-nightlife') || ($zone2 == '/projects-restaurants')) :
			$zone2 = '/projects';
		endif;		

		if (($zone2 == '/products-roundup') || ($zone2 == '/products-trends')) :
			$zone2 = '/products';
		endif;			
	endif;	

	if(is_singular('galleries'))	:
		$zone1 = "galleries";
		$terms = get_the_terms( $post->ID, 'gallery-categories' );
		$term = array_pop($terms);			
		$zone2 = "/".$term->slug;
		$url = "_".$term->slug."_".$post->post_name;

		if (($zone2 == '/projects-hotels-resorts-wellness') || ($zone2 == '/projects-nightlife') || ($zone2 == '/projects-restaurants')) :
			$zone2 = '/projects';
		endif;		

		if (($zone2 == '/products-roundup') || ($zone2 == '/products-trends')) :
			$zone2 = '/products';
		endif;			

	endif;

	//Product pages	
	
	if(is_post_type_archive('products')) :
		$zone1 = "products";
		$zone2 = "";
		$url = "";
	endif;

	if(is_tax('products-categories')) :
		$cat_obj = $wp_query->get_queried_object();
		$terms = get_the_terms( $cat_obj->ID, 'products-categories' );
		$term = array_pop($terms);			
		$zone1 = "products";
		$zone2 = "/".$term->slug;
		$url = "_".$term->slug;

		// Start get parent category info 
		global $category_parent;
		global $category_parent_id;

		$category_parent_id = $term->parent;

		if ( isset($category_parent_id) ) {
		  $category_parent = get_term($category_parent_id, 'products-categories');
		}

		if ( isset($category_parent)):
				$zone2 = "/".$category_parent->slug;
				$url = "_".$category_parent->slug."_".$post->post_name;	
		endif;

		if ($zone2 == '/bath') :
			$zone2 = '/bath-spa';
		endif;			

	endif;

	if(is_singular('products'))	:
		$zone1 = "products";
		$terms = get_the_terms( $post->ID, 'products-categories' );
		$term = array_pop($terms);
		$zone2 = "/".$term->slug;
		$url = "_".$term->slug."_".$post->post_name;


		// Start get parent category info 
		global $category_parent;
		global $category_parent_id;

		$category_parent_id = $term->parent;

		if ( isset($category_parent_id) ) {
		  $category_parent = get_term($category_parent_id, 'products-categories');
		}

		if ( isset($category_parent)):
				$zone2 = "/".$category_parent->slug;
				$url = "_".$category_parent->slug."_".$post->post_name;	
		endif;

		if ($zone2 == '/bath') :
			$zone2 = '/bath-spa';
		endif;		

	endif;	

	// Events pages 

	if ($current_category == 'awards-events') :
		$zone1 = "awards-events";
		$zone2 = "";
		$url = "";
	endif;	

	endwhile;
endif;
	

?>



<script type='text/javascript'>
    googletag.cmd.push(function() {
var topMapping = googletag.sizeMapping()
.addSize([1024, 0 ], [[970, 90], [728, 90]])
.addSize([768, 0 ], [728, 90])
.addSize([330, 0 ], [300, 50])
.build();	    	
    googletag.defineSlot('/5993/nbm.con.hd/<?php echo $zone1.$zone2; ?>', [[728, 90], [300, 50], [970, 90]],  'HD_728_Top')
    .addService(googletag.pubads())
    .defineSizeMapping(topMapping)
    .setTargeting("pos", "top");
    googletag.defineSlot('/5993/nbm.con.hd/<?php echo $zone1.$zone2; ?>', [[300, 250],[300, 600]],  'HD_300_Top')
    .addService(googletag.pubads())
    .setTargeting("pos", "top")
    .setCollapseEmptyDiv(true,true);
    googletag.defineSlot('/5993/nbm.con.hd/<?php echo $zone1.$zone2; ?>', [300, 250],  'HD_300_Middle1')
    .addService(googletag.pubads())
    .setTargeting("pos", "middle1")
    .setCollapseEmptyDiv(true,true);
    googletag.defineSlot('/5993/nbm.con.hd/<?php echo $zone1.$zone2; ?>', [300, 250],  'HD_300_Bottom')
    .addService(googletag.pubads())
    .setTargeting("pos", "bottom")
    .setCollapseEmptyDiv(true,true);
    googletag.defineSlot('/5993/nbm.con.hd/<?php echo $zone1.$zone2; ?>',  [[728, 90], [300, 50], [970, 90]],  'HD_728_Bottom')
    .addService(googletag.pubads())
    .setTargeting("pos", "bottom");
    googletag.defineOutOfPageSlot('/5993/nbm.con.hd/<?php echo $zone1.$zone2; ?>','HD_interstitial')
    .addService(googletag.pubads())
    .setTargeting("pos", "interstitial");
    googletag.pubads().setTargeting("s1","<?php echo $zone1; ?>")
	<?php if (!empty($zone2)) : ?>
	.setTargeting("s2","<?php echo str_replace('/','',$zone2); ?>")
	<?php endif; ?>
    .setTargeting("url","<?php echo $zone1.$url; ?>");
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
    });
</script>

<?php endif; ?>
