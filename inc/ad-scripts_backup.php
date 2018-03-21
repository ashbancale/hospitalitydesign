
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
googletag.defineSlot('/5993/nbm.con.ddi/home/',  [[728, 90], [300, 50], [970, 90]],  'DDI_728_Top')
.addService(googletag.pubads())
.setTargeting("pos", "top");
googletag.defineSlot('/5993/nbm.con.ddi/home/', [[300, 250],[300, 600]],  'DDI_300_Top')
.addService(googletag.pubads())
.setTargeting("pos", "top");
googletag.defineSlot('/5993/nbm.con.ddi/home/', [300, 100],  'DDI_300_Top1')
.addService(googletag.pubads())
.setTargeting("pos", "top");
googletag.defineSlot('/5993/nbm.con.ddi/home/', [300, 250],  'DDI_300_Middle1')
.addService(googletag.pubads())
.setTargeting("pos", "middle1");
googletag.defineSlot('/5993/nbm.con.ddi/home/', [300, 250],  'DDI_300_Middle2')
.addService(googletag.pubads())
.setTargeting("pos", "middle2");
googletag.defineSlot('/5993/nbm.con.ddi/home/', [300, 250],  'DDI_300_Bottom')
.addService(googletag.pubads())
.setTargeting("pos", "bottom");
googletag.defineSlot('/5993/nbm.con.ddi/home/',  [[728, 90], [300, 50], [970, 90]],  'DDI_728_Bottom')
.addService(googletag.pubads())
.setTargeting("pos", "bottom");
googletag.defineOutOfPageSlot('/5993/nbm.con.ddi/home/','DDI_prestitial')
.addService(googletag.pubads())
.setTargeting("pos", "prestitial");
googletag.defineOutOfPageSlot('/5993/nbm.con.ddi/home/','DDI_wallpaper')
.addService(googletag.pubads())
.setTargeting("pos", "wallpaper")
.setCollapseEmptyDiv(true,true);
googletag.defineOutOfPageSlot('/5993/nbm.con.ddi/home/','DDI_sliding_billboard')
.addService(googletag.pubads())
.setTargeting("pos", "sliding_billboard")
.setCollapseEmptyDiv(true,true);
googletag.defineOutOfPageSlot('/5993/nbm.con.ddi/home/','DDI_interstitial')
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

<?php if(is_page('about-us') || is_page('contact-us') || is_page('newsletters') || is_page('whitepapers') || is_page('site-map') || is_page('privacy-policy') || is_page('terms-of-use')) : ?> 
<?php
global $post;
$url = $post->slug;
?>

<script type='text/javascript'>
googletag.cmd.push(function() {
googletag.defineSlot('/5993/nbm.con.ddi/info/',  [[728, 90], [300, 50], [970, 90]],  'DDI_728_Top')
.addService(googletag.pubads())
.setTargeting("pos", "top");
googletag.defineSlot('/5993/nbm.con.ddi/info/', [[300, 250],[300, 600]],  'DDI_300_Top')
.addService(googletag.pubads())
.setTargeting("pos", "top");
googletag.defineSlot('/5993/nbm.con.ddi/info/', [300, 100],  'DDI_300_Top1')
.addService(googletag.pubads())
.setTargeting("pos", "top");
googletag.defineSlot('/5993/nbm.con.ddi/info/', [300, 250],  'DDI_300_Middle1')
.addService(googletag.pubads())
.setTargeting("pos", "middle1");
googletag.defineSlot('/5993/nbm.con.ddi/info/', [300, 250],  'DDI_300_Middle2')
.addService(googletag.pubads())
.setTargeting("pos", "middle2");
googletag.defineSlot('/5993/nbm.con.ddi/info/', [300, 250],  'DDI_300_Bottom')
.addService(googletag.pubads())
.setTargeting("pos", "bottom");
googletag.defineSlot('/5993/nbm.con.ddi/info/',  [[728, 90], [300, 50], [970, 90]],  'DDI_728_Bottom')
.addService(googletag.pubads())
.setTargeting("pos", "bottom");
googletag.defineOutOfPageSlot('/5993/nbm.con.ddi/info/','DDI_prestitial')
.addService(googletag.pubads())
.setTargeting("pos", "prestitial");
googletag.defineOutOfPageSlot('/5993/nbm.con.ddi/info/','DDI_wallpaper')
.addService(googletag.pubads())
.setTargeting("pos", "wallpaper")
.setCollapseEmptyDiv(true,true);
googletag.defineOutOfPageSlot('/5993/nbm.con.ddi/info/','DDI_sliding_billboard')
.addService(googletag.pubads())
.setTargeting("pos", "sliding_billboard")
.setCollapseEmptyDiv(true,true);
googletag.defineOutOfPageSlot('/5993/nbm.con.ddi/info/','DDI_interstitial')
.addService(googletag.pubads())
.setTargeting("pos", "interstitial");
googletag.pubads().setTargeting("s1","info")
.setTargeting("s2","")
.setTargeting("url","info__<?php echo $url; ?>");
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>

<?php endif; ?>

<?php if(is_post_type_archive('news') || is_singular('news') || is_post_type_archive('galleries') || is_singular('galleries') || is_post_type_archive('projects') || is_singular('projects') || is_post_type_archive('products') || is_singular('products') || is_tax()) :

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

	if(is_tax('news-categories', 'retail')) :
		$zone1 = "news";
		$zone2 = "/retail";
		$url = "_retail";
	endif;

	if(is_tax('news-categories', 'people')) :
		$zone1 = "news";
		$zone2 = "/people";
		$url = "_people";
	endif;	

	if(is_tax('news-categories', 'industry')) :
		$zone1 = "news";
		$zone2 = "/industry";
		$url = "_industry";
	endif;	

	if(is_tax('news-categories', 'opinions')) :
		$zone1 = "news";
		$zone2 = "/opinions";
		$url = "_opinions";
	endif;	

	if(is_tax('news-categories', 'awards-events')) :
		$zone1 = "news";
		$zone2 = "/awards-events";
		$url = "_awards-events";
	endif;

	if(is_singular('news'))	:
		$zone1 = "news";
		$terms = get_the_terms( $post->ID, 'news-categories' );
		$term = array_pop($terms);			
		$zone2 = "/".$term->slug;
		$url = "_".$term->slug."_".$post->post_name;
	endif;

	//Project Pages

	if(is_post_type_archive('projects')) :
		$zone1 = "projects";
		$zone2 = "";
		$url = "";
	endif;

	if(is_tax('project-categories', 'stores')) :
		$zone1 = "projects";
		$zone2 = "/stores";
		$url = "_stores";
	endif;

	if(is_tax('project-categories', 'visual-merchandising')) :
		$zone1 = "projects";
		$zone2 = "/visual-merchandising";
		$url = "_visual-merchandising";
	endif;	

	if(is_tax('project-categories', 'technology')) :
		$zone1 = "projects";
		$zone2 = "/technology";
		$url = "_technology";
	endif;	

	if(is_tax('project-categories', 'trends')) :
		$zone1 = "projects";
		$zone2 = "/trends";
		$url = "_trends";
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
	endif;	

	/*if(is_tax('gallery-categories', 'events')) :
		$zone1 = "galleries";
		$zone2 = "/events";
		$url = "_events";
	endif;

	if(is_tax('gallery-categories', 'awards')) :
		$zone1 = "galleries";
		$zone2 = "/awards";
		$url = "_awards";
	endif;	

	if(is_tax('gallery-categories', 'retail-trends')) :
		$zone1 = "galleries";
		$zone2 = "/retail-trends";
		$url = "_retail-trends";
	endif;	

	if(is_tax('gallery-categories', 'product-roundups')) :
		$zone1 = "galleries";
		$zone2 = "/product-roundups";
		$url = "_product-roundups";
	endif;	

	if(is_tax('gallery-categories', 'specialty-apparel')) :
		$zone1 = "galleries";
		$zone2 = "/specialty-apparel";
		$url = "_specialty-apparel";
	endif;

	if(is_tax('gallery-categories', 'specialty-non-apparel')) :
		$zone1 = "galleries";
		$zone2 = "/specialty-non-apparel";
		$url = "_specialty-non-apparel";
	endif;	

	if(is_tax('gallery-categories', 'service-retail')) :
		$zone1 = "galleries";
		$zone2 = "/service-retail";
		$url = "_service-retail";
	endif;		

	if(is_tax('gallery-categories', 'grocery-c-store-drug')) :
		$zone1 = "galleries";
		$zone2 = "/grocery-c-store-drug";
		$url = "_grocery-c-store-drug";
	endif;	

	if(is_tax('gallery-categories', 'large-format-mass-merchant')) :
		$zone1 = "galleries";
		$zone2 = "/large-format-mass-merchant";
		$url = "_large-format-mass-merchant";
	endif;		

	if(is_tax('gallery-categories', 'hospitality')) :
		$zone1 = "galleries";
		$zone2 = "/hospitality";
		$url = "_hospitality";
	endif;	*/

	if(is_singular('galleries'))	:
		$zone1 = "galleries";
		$terms = get_the_terms( $post->ID, 'gallery-categories' );
		$term = array_pop($terms);			
		$zone2 = "/".$term->slug;
		$url = "_".$term->slug."_".$post->post_name;
	endif;

	//Product pages	
	
	if(is_post_type_archive('products')) :
		$zone1 = "products";
		$zone2 = "";
		$url = "";
	endif;

	if(is_tax('products-categories')) :
		$terms = get_the_terms( $post->ID, 'products-categories' );
		$term = array_pop($terms);			
		$zone1 = "products";
		$zone2 = "/".$term->slug;
		$url = "_".$term->slug;
	endif;

	if(is_singular('products'))	:
		$zone1 = "products";
		$terms = get_the_terms( $post->ID, 'products-categories' );
		$term = array_pop($terms);			
		$zone2 = "/".$term->slug;
		$url = "_".$term->slug."_".$post->post_name;
	endif;	


	endwhile;
endif;


?>

<script type='text/javascript'>
googletag.cmd.push(function() {
googletag.defineSlot('/5993/nbm.con.ddi/<?php echo $zone1.$zone2; ?>',  [[728, 90], [300, 50], [970, 90]],  'DDI_728_Top')
.addService(googletag.pubads())
.setTargeting("pos", "top");
googletag.defineSlot('/5993/nbm.con.ddi/<?php echo $zone1.$zone2; ?>', [[300, 250],[300, 600]],  'DDI_300_Top')
.addService(googletag.pubads())
.setTargeting("pos", "top");
googletag.defineSlot('/5993/nbm.con.ddi/<?php echo $zone1.$zone2; ?>', [300, 100],  'DDI_300_Top1')
.addService(googletag.pubads())
.setTargeting("pos", "top");
googletag.defineSlot('/5993/nbm.con.ddi/<?php echo $zone1.$zone2; ?>', [300, 250],  'DDI_300_Middle1')
.addService(googletag.pubads())
.setTargeting("pos", "middle1");
googletag.defineSlot('/5993/nbm.con.ddi/<?php echo $zone1.$zone2; ?>', [300, 250],  'DDI_300_Middle2')
.addService(googletag.pubads())
.setTargeting("pos", "middle2");
googletag.defineSlot('/5993/nbm.con.ddi/<?php echo $zone1.$zone2; ?>', [300, 250],  'DDI_300_Bottom')
.addService(googletag.pubads())
.setTargeting("pos", "bottom");
googletag.defineSlot('/5993/nbm.con.ddi/<?php echo $zone1.$zone2; ?>',  [[728, 90], [300, 50], [970, 90]],  'DDI_728_Bottom')
.addService(googletag.pubads())
.setTargeting("pos", "bottom");
googletag.defineOutOfPageSlot('/5993/nbm.con.ddi/<?php echo $zone1.$zone2; ?>','DDI_prestitial')
.addService(googletag.pubads())
.setTargeting("pos", "prestitial");
googletag.defineOutOfPageSlot('/5993/nbm.con.ddi/<?php echo $zone1.$zone2; ?>','DDI_wallpaper')
.addService(googletag.pubads())
.setTargeting("pos", "wallpaper")
.setCollapseEmptyDiv(true,true);
googletag.defineOutOfPageSlot('/5993/nbm.con.ddi/<?php echo $zone1.$zone2; ?>','DDI_sliding_billboard')
.addService(googletag.pubads())
.setTargeting("pos", "sliding_billboard")
.setCollapseEmptyDiv(true,true);
googletag.defineOutOfPageSlot('/5993/nbm.con.ddi/<?php echo $zone1.$zone2; ?>','DDI_interstitial')
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
