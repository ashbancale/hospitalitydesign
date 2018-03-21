<?php

/* REGISTER SIDEBARS START */

    	register_sidebar( array(

			'name' => 'Holder 1',

        	'before_widget' => '<div id="%1$s" class="block widget %2$s">',

        	'after_widget' => '</div>',

        	'before_title' => '<h3>',

        	'after_title' => '</h3>',

    	));

	register_sidebar( array(

			'name' => 'Holder 2',

        	'before_widget' => '<div id="%1$s" class="block widget %2$s">',

        	'after_widget' => '</div>',

        	'before_title' => '<h3>',

        	'after_title' => '</h3>',

    	));

	register_sidebar( array(

			'name' => 'Holder 3',

        	'before_widget' => '<div id="%1$s" class="block widget %2$s">',

        	'after_widget' => '</div>',

        	'before_title' => '<h3>',

        	'after_title' => '</h3>',

    	));

	

/* REGISTER SIDEBARS END */

//register_new_royalslider_files(1);

/* REGISTER MENUS START */

add_action( 'init', 'register_my_menus' );



function register_my_menus() {

	register_nav_menus(

		array(

			'menu-1' => __( 'Menu 1' ),

			'menu-2' => __( 'Menu 2' )

		)

	);

}

/* REGISTER MENUS END */

/* CUSTOM POST TYPE FUNCTIONS START */

function register_types(){



register_post_type(

        'news',

        // CPT Options

        array(

            'labels' => array(

                'name' => __('News'),

                'singular_name' => __('News'),

                'name_admin_bar' => __('News'),

                'edit_item' => __('Edit News'),

                'add_new_item' => __('Add New News')

            ),

            'public' => true,

	    'menu_icon' => '',

            'rewrite' => array( 'slug' => 'news/%news-categories%', 'with_front' => false ),

            'has_archive' => 'news',

            'supports' => array('thumbnail', title, editor, wps_subtitle, 'themes', 'revisions'),

            'capability_type' => 'page',

        )

    );



     register_post_type(

         'products',

         // CPT Options

         array(

             'labels' => array(

                 'name' => __('Products'),

                 'singular_name' => __('Products'),

                 'name_admin_bar' => __('Products'),

                 'edit_item' => __('Edit Products'),

                 'add_new_item' => __('Add New Products')

             ),

             'public' => true,

             'has_archive', true,

	     'menu_icon' => '',

	     'hierarchical' => true,

             'rewrite' => array( 'slug' => 'products/%products-categories%', 'with_front' => false ),

             'has_archive' => 'products',

             'supports' => array('thumbnail', title, editor, wps_subtitle, 'themes', 'revisions'),

             'capability_type' => 'page',

           

         )

     );

    register_post_type(

        'galleries',

        // CPT Options

        array(

            'labels' => array(

                'name' => __('Gallery'),

                'singular_name' => __('Gallery'),

                'name_admin_bar' => __('Gallery'),

                'edit_item' => __('Edit Gallery'),

                'add_new_item' => __('Add New Gallery')

            ),

            'public' => true,

	    'menu_icon' => '',

            'rewrite' => array( 'slug' => 'galleries/%gallery-categories%', 'with_front' => false ),

            'has_archive' => 'galleries',

            'supports' => array('thumbnail', title, editor, wps_subtitle, 'themes', 'revisions'),

            'capability_type' => 'page',

            'taxonomies' => array('galleries')

        )

    );

    register_post_type(

        'projects',

        // CPT Options

        array(

            'labels' => array(

                'name' => __('Projects'),

                'singular_name' => __('Projects'),

                'name_admin_bar' => __('Projects'),

                'edit_item' => __('Edit Projects'),

                'add_new_item' => __('Add New Projects')

            ),

            'public' => true,

	    'menu_icon' => '',

	    'rewrite' => array( 'slug' => 'projects/%project-categories%', 'with_front' => false ),

            'has_archive' => 'projects',

            'supports' => array('thumbnail', title, editor, wps_subtitle, 'themes', 'revisions'),

            'capability_type' => 'page',

            'taxonomies' => array('projects')

        )

    );

    register_post_type(

        'people',

        // CPT Options

        array(

            'labels' => array(

                'name' => __('People'),

                'singular_name' => __('People'),

                'name_admin_bar' => __('People'),

                'edit_item' => __('Edit People Article'),

                'add_new_item' => __('Add New People Article')

            ),

            'public' => true,

      'menu_icon' => '',

      'rewrite' => array( 'slug' => 'people/%people-categories%', 'with_front' => false ),

            'has_archive' => 'people',

            'supports' => array('thumbnail', title, editor, wps_subtitle, 'themes', 'revisions'),

            'capability_type' => 'page',

            'taxonomies' => array('people')

        )

    );    

    register_post_type(

        'events',

        // CPT Options

        array(

            'labels' => array(

                'name' => __('Events'),

                'singular_name' => __('Events'),

                'name_admin_bar' => __('Events'),

                'edit_item' => __('Events'),

                'add_new_item' => __('Add New Events')

            ),

            'public' => true,

	    'menu_icon' => '',
      'rewrite' => array( 'slug' => 'awards-events', 'with_front' => false ),

            'has_archive' => false,

            'supports' => array('thumbnail', title, editor, wps_subtitle, 'themes', 'revisions'),

            'capability_type' => 'page',

        )

    );


	flush_rewrite_rules();

}

function create_taxonomies() {

    register_taxonomy('news-categories', array('news'), array(

	'labels' => array(

	    'name' => 'News Categories'

	),

        'show_ui' => true,

	'show_tagcloud' => false,

	'hierarchical' => true,

	'rewrite' => array( 'slug' => 'news', 'with_front' => false ),

    ));

    register_taxonomy('products-categories', array('products'), array(

	'labels' => array(

	    'name' => 'Products Categories'

	),

        'show_ui' => true,

	'show_tagcloud' => false,

	'hierarchical' => true,

	'rewrite' => array( 'slug' => 'products', 'with_front' => false ),

    ));

    register_taxonomy('gallery-categories', array('galleries'), array(

	'labels' => array(

	    'name' => 'Gallery Categories'

	),

        'show_ui' => true,

	'show_tagcloud' => false,

	'hierarchical' => true,

	'rewrite' => array( 'slug' => 'galleries', 'with_front' => false ),

    ));

    register_taxonomy('project-categories', array('projects'), array(

	'labels' => array(

	    'name' => 'Project Categories'

	),

        'show_ui' => true,

	'show_tagcloud' => false,

	'hierarchical' => true,

	'rewrite' => array( 'slug' => 'projects', 'with_front' => false ),

    ));

    register_taxonomy('people-categories', array('people'), array(

  'labels' => array(

      'name' => 'People Categories'

  ),

        'show_ui' => true,

  'show_tagcloud' => false,

  'hierarchical' => true,

  'rewrite' => array( 'slug' => 'people', 'with_front' => false ),

    ));    

flush_rewrite_rules();

}



function wpa_news_permalinks( $post_link, $post ){

    if ( is_object( $post ) && $post->post_type == 'news' ){

        $terms = wp_get_object_terms( $post->ID, 'news-categories' );

        if( $terms ){

            return str_replace( '%news-categories%' , $terms[0]->slug , $post_link );

        }

    }



    return $post_link;

}

add_filter( 'post_type_link', 'wpa_news_permalinks', 1, 2 );



function wpa_products_permalinks( $post_link, $post ){

    if ( is_object( $post ) && $post->post_type == 'products' ){

        $terms = wp_get_object_terms( $post->ID, 'products-categories' );

        if( $terms ){

            return str_replace( '%products-categories%' , $terms[0]->slug , $post_link );

        }

    }



    return $post_link;

}

add_filter( 'post_type_link', 'wpa_products_permalinks', 1, 2 );



function wpa_galleries_permalinks( $post_link, $post ){

    if ( is_object( $post ) && $post->post_type == 'galleries' ){

        $terms = wp_get_object_terms( $post->ID, 'gallery-categories' );

        if( $terms ){

            return str_replace( '%gallery-categories%' , $terms[0]->slug , $post_link );

        }

    }



    return $post_link;

}

add_filter( 'post_type_link', 'wpa_galleries_permalinks', 1, 2 );



function wpa_projects_permalinks( $post_link, $post ){

    if ( is_object( $post ) && $post->post_type == 'projects' ){

        $terms = wp_get_object_terms( $post->ID, 'project-categories' );

        if( $terms ){

            return str_replace( '%project-categories%' , $terms[0]->slug , $post_link );

        }

    }



    return $post_link;

}

add_filter( 'post_type_link', 'wpa_projects_permalinks', 1, 2 );

function wpa_people_permalinks( $post_link, $post ){

    if ( is_object( $post ) && $post->post_type == 'people' ){

        $terms = wp_get_object_terms( $post->ID, 'people-categories' );

        if( $terms ){

            return str_replace( '%people-categories%' , $terms[0]->slug , $post_link );

        }

    }



    return $post_link;

}

add_filter( 'post_type_link', 'wpa_people_permalinks', 1, 2 );



add_action('init', 'create_taxonomies');

function my_cpt_post_types( $post_types ) {

    $post_types[] = 'show';

    $post_types[] = 'media';

    $post_types[] = 'exhibitors';

    $post_types[] = 'Press';

    $post_types[] = 'attendees';

    $post_types[] = 'events';

    $post_types[] = 'promo-opp';

    $post_types[] = 'conference';

    return $post_types;

}



//add_action('admin_menu', 'add_cards_metaboxes');



add_filter( 'cpt_post_types', 'my_cpt_post_types' );



add_action('init', 'register_types');



/* CUSTOM POST TYPE FUNCTIONS END */









/* SHOW MEDIA LINKS START */

function show_links($device = null){

//	$irceoptions = pods( 'irceoptions', $params );

  ?>

<div class="quicklinks clearfix"> 

    <a class="exhibit" href="<?php the_field('apply_to_exhibit', 'option'); ?>" target="_blank">Apply to Exhibit</a> 

    <a class="attend" href="<?php the_field('register_to_attend', 'option'); ?>" target="_blank">Register to Attend</a> 

    <a href="<?php the_field('floor_plan', 'option'); ?>" class="floorplan"><span>Floor Plan</span></a> 

    <a href="<?php the_field('exhibitors_list', 'option'); ?>" class="exhibitor-list"><span>Exhibitor List</span></a> 

</div>

  <?php

}



add_theme_support( 'post-thumbnails' ); 



function my_wp_subtitle_page_part_support() {

    add_post_type_support( 'my_post_type', 'wps_subtitle' );

}

add_action( 'init', 'my_wp_subtitle_page_part_support' );



function search_results_title() {

  if( is_search() ) {

  

    global $wp_query;

    

    if( $wp_query->post_count == 1 ) {

      $result_title .= '1 search result found';

    } else {

      $result_title .= 'Showing ' . $wp_query->found_posts . ' results';

    }

    

    $result_title .= " for “<span style='color:#ce171f;'>" . wp_specialchars($wp_query->query_vars['s'], 1) . "</span>”";

    

    echo $result_title;

  

  }

}

/*function the_post_thumbnail_caption() {

  global $post;



  $thumbnail_id    = get_post_thumbnail_id($post->ID);

  $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));



  if ($thumbnail_image && isset($thumbnail_image[0])) {

    echo '<span>'.$thumbnail_image[0]->post_excerpt.'</span>';

  }

}*/

function custom_excerpt_length( $length ) {
  return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


function new_excerpt_more( $more ) {

	return '...';

}

add_filter('excerpt_more', 'new_excerpt_more');

function add_jquery_ui() {

    wp_enqueue_script( 'jquery-ui-tabs' );

}

add_action( 'wp_enqueue_scripts', 'add_jquery_ui' );


function category_posts_per_page( $query ) {

    if ( $query->is_category() && $query->is_main_query() ) {

        $query->set( 'posts_per_page', 3 );

    }

}

add_action( 'pre_get_posts', 'category_posts_per_page' );



function remove_page_from_query_string($query_string)

{ 

    if ($query_string['name'] == 'page' && isset($query_string['page'])) {

        unset($query_string['name']);

        // 'page' in the query_string looks like '/2', so i'm spliting it out

        list($delim, $page_index) = split('/', $query_string['page']);

        $query_string['paged'] = $page_index;

    }      

    return $query_string;

}

// I will kill you if you remove this. I died two days for this line 

add_filter('request', 'remove_page_from_query_string');


// following are code adapted from Custom Post Type Category Pagination Fix by jdantzer

function fix_category_pagination($qs){

	if(isset($qs['category_name']) && isset($qs['paged'])){

		$qs['post_type'] = get_post_types($args = array(

			'public'   => true,

			'_builtin' => false

		));

		array_push($qs['post_type'],'post');

	}

	return $qs;

}

add_filter('request', 'fix_category_pagination');



remove_filter('template_redirect', 'redirect_canonical'); 



function remove_menus () {

    if(is_user_logged_in() && current_user_can('editor'))

    {

        global $menu;

        $restricted = array( __('Posts'),__('Contact'), __('Links'), __('Appearance'), __('Tools'), __('Users'), __('Settings'), __('Comments'), __('Plugins'));

        end ($menu);

        while (prev($menu)){

            $value = explode(' ',$menu[key($menu)][0]);

            if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}

        }

    }

if(is_user_logged_in() && current_user_can('editorplus'))

    {

        global $menu;

        $restricted = array( __('Posts'),__('Contact'), __('Links'), __('Appearance'), __('Tools'), __('Users'), __('Settings'), __('Comments'), __('Plugins'));

        end ($menu);

        while (prev($menu)){

            $value = explode(' ',$menu[key($menu)][0]);

            if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}

        }

    }



}

add_action('admin_menu', 'remove_menus');



function fontawesome_dashboard() {

   wp_enqueue_style('fontawesome', '//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css', '', '4.2.0', 'all');

}



add_action('admin_init', 'fontawesome_dashboard');



function fontawesome_icon_dashboard() {



   echo '

<style type="text/css" media="screen">

		icon16.icon-media:before, #adminmenu .menu-icon-news div.wp-menu-image:before {

   			font-family: Fontawesome !important;

   			content: "\f1ea";

     		}

		icon16.icon-media:before, #adminmenu .menu-icon-products div.wp-menu-image:before {

   			font-family: Fontawesome !important;

   			content: "\f07a";

     		}

		icon16.icon-media:before, #adminmenu .menu-icon-galleries div.wp-menu-image:before {

   			font-family: Fontawesome !important;

   			content: "\f03e";

     		}

		icon16.icon-media:before, #adminmenu .menu-icon-projects div.wp-menu-image:before {

   			font-family: Fontawesome !important;

   			content: "\f115";

     		}

		icon16.icon-media:before, #adminmenu .menu-icon-events div.wp-menu-image:before {

   			font-family: Fontawesome !important;

   			content: "\f073";

     		}

		icon16.icon-media:before, #adminmenu .menu-icon-awards-events-news div.wp-menu-image:before {

   			font-family: Fontawesome !important;

   			content: "\f1ea";

     		}

    icon16.icon-media:before, #adminmenu .menu-icon-people div.wp-menu-image:before {

        font-family: Fontawesome !important;

        content: "\f0c0";

        }        
     	</style>';

 }

add_action('admin_head', 'fontawesome_icon_dashboard');
add_filter('upload_mimes', 'my_upload_mimes');

function my_upload_mimes ( $existing_mimes=array() ) {
    $existing_mimes['csv'] = 'text/csv';
    return $existing_mimes;
}
add_filter('nav_menu_css_class', 'add_active_class', 10, 2 );

function add_active_class($classes, $item) {
  if( in_array( 'current-menu-item', $classes ) ||
    in_array( 'current-menu-ancestor', $classes ) ||
    in_array( 'current-menu-parent', $classes ) ||
    in_array( 'current_page_parent', $classes ) ||
    in_array( 'current_page_ancestor', $classes )
    ) {
    $classes[] = "active";
  }
  return $classes;
}

// add_action( 'rest_api_init', 'dt_register_api_hooks' );
// function dt_register_api_hooks() {
//     // Add the plaintext content to GET requests for individual posts
//     register_api_field(
//         'post',
//         'plaintext',
//         array(
//             'get_callback'    => 'dt_return_plaintext_content',
//         )
//     );
// }

// // Return plaintext content for posts
// function dt_return_plaintext_content( $object, $field_name, $request ) {
//     return "rstlne";
// }
// add_filter( 'json_prepare_post', function ($data, $post, $context) {
//     $data['myextradata'] = array(
//         'plaintext' => get_post_meta( $post['ID'], 'plaintext', true ),
//     );
//     return $data;
// }, 10, 3 );


if( function_exists('acf_add_options_page') ) {

	$option_page = acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title' 	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability' 	=> 'edit_posts',
		'redirect' 	=> false

	));
} 
add_filter( 'posts_where', 'title_like_posts_where', 10, 2 );
function title_like_posts_where( $where, &$wp_query ) {
    global $wpdb;
    if ( $post_title_like = $wp_query->get( 'post_title_like' ) ) {
        $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'' . esc_sql( $wpdb->esc_like( $post_title_like ) ) . '%\'';
    }
    return $where;
}
//Remove embedded galleries from search  
/*add_filter('relevanssi_do_not_index', 'rlv_exclude_cat', 10, 2);
function rlv_exclude_cat($exclude, $post_id) {
    if (has_term('projects','gallery-categories', $post_id )) $exclude = true;
    if (has_term('news','gallery-categories', $post_id )) $exclude = true;
    return $exclude;
}*/

function get_the_post_thumbnail_alt($post_id) {
  return get_post_meta(get_post_thumbnail_id($post_id), '_wp_attachment_image_alt', true);
}

function the_post_thumbnail_alt($post_id) {
  echo get_the_post_thumbnail_alt($post_id);
}

add_image_size( 'product-index', 250 , 250 );
add_image_size( 'project-index', 200, 122 );

function remove_p($string)
{
  return preg_replace("#(.*?)</p>(.*)<p>(.*)#s", "$1$2$3", $string, 1 );
} 

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
  .acf_postbox.no_box > .inside > .field_type-message {
      padding: 0px;
      margin: 0;
      top: 20px;
  }
  </style>';
}