<?php 
global $current_category;
?>
        <nav id="main">
            <ul>
                
                    
             <li class="News1 <?php if ($current_category == 'news') { echo ' active'; } ?>">
                 <a href="<?php bloginfo('siteurl'); ?>/news/">News</a> <span class="open-sub"><a href="javascript:void(0);"></a></span>
                <div class="News-drop">
        
                        <div class="nav-section">
                           <ul class="list">
                               
                        <li><a href="<?php bloginfo('siteurl'); ?>/news/awards-events/">
                            Awards / Events
                            </a>
                     
                    </li>
                
                        <li><a href="<?php bloginfo('siteurl'); ?>/news/business/">
                            Business
                            </a>
                     
                    </li>
                
                        <li><a href="<?php bloginfo('siteurl'); ?>/news/development-destinations/">
                            Development / Destinations
                            </a>
                     
                    </li>
                
                        <li><a href="<?php bloginfo('siteurl'); ?>/news/hotels-resorts-wellness/">
                            Hotels / Resorts / Wellness
                            </a>
                     
                    </li>
                
                        <li><a href="<?php bloginfo('siteurl'); ?>/news/restaurants-nightlife/">
                            Restaurants / Nightlife
                            </a>
                     
                    </li>
					
                        <li><a href="<?php bloginfo('siteurl'); ?>/news/retail-commercial/">
                            Retail / Commercial
                            </a>
                     
                    </li>					
                
                        <li><a href="<?php bloginfo('siteurl'); ?>/news/sustainability/">
                            Sustainability
                            </a>
                     
                    </li>
                
                           </ul>
                        </div>
                    
             </div>
             </li>
           
             <li class="Projects1 <?php if ($current_category == 'projects') { echo ' active'; } ?>">
                 <a href="<?php bloginfo('siteurl'); ?>/projects/">Projects</a> <span class="open-sub"><a href="javascript:void(0);"></a></span>
                <div class="Projects-drop">
        
                        <div class="nav-section">
                           <ul class="list">
                               
                        <li><a href="<?php bloginfo('siteurl'); ?>/projects/hotels-resorts-wellness/">
                            Hotels/Resorts/Wellness
                            </a>
                     
                    </li>
                
                        <li><a href="<?php bloginfo('siteurl'); ?>/projects/nightlife/">
                            Nightlife
                            </a>
                     
                    </li>
                
                        <li><a href="<?php bloginfo('siteurl'); ?>/projects/restaurants/">
                            Restaurants
                            </a>
                     
                    </li>
					
                        <li><a href="<?php bloginfo('siteurl'); ?>/projects/retail-commercial/">
                            Retail / Commercial
                            </a>
                     
                    </li>					
                
                           </ul>
                        </div>
                    
             </div>
             </li>
           
             <li class="Products1 <?php if ($current_category == 'products') { echo ' active'; } ?>">
                 <a href="<?php bloginfo('siteurl'); ?>/products/">Products</a> <span class="open-sub"><a href="javascript:void(0);"></a></span>
                <div class="Products-drop">

              <?php

                $feat_news_args = array(

                  'posts_per_page' => 1,

                  'post_type' => 'products', 

                  'meta_key' => 'featured_navigation',

                  'meta_value' => true,
                  

                );


                $get_featured_products = new WP_Query( $feat_news_args );

                if ($get_featured_products->have_posts()) : ?>


                    <?php

                       while ($get_featured_products->have_posts()) : $get_featured_products->the_post(); ?>

                        <div class="featured">
                            <h4>featured</h4>
                            <?php if ( has_post_thumbnail() ) { ?>  
                                <a href="<?php echo post_permalink( $ID ); ?>">
                                    <img src="<?php the_post_thumbnail_url( 'full' ); ?>"
                                      <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                                      alt="<?php the_post_thumbnail_alt(get_the_ID()); ?>"
                                      <?php } ?> />
                                </a>
                            <?php } ?> 
                            <span class="cat">
                                <?php if (get_the_term_list( $ID, 'products-categories', '', ', ', '' )): ?> 
                                <?php echo get_the_term_list( $ID, 'products-categories', '', ', ', '' );
                                  endif;
                                ?>
                            </span>
                            <a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a>
                        </div><!-- end div.featured -->

                        <?php endwhile; ?>


                <?php endif; ?>  



                        <div class="nav-section">
                           <ul class="list">
                               
                        <li><a href="<?php bloginfo('siteurl'); ?>/products/accessories-art/">
                            Accessories/Art
                            </a>
                    
                            <ul class="sublist">
                                
                <li><a href="<?php bloginfo('siteurl'); ?>/products/accessories/">
                    Accessories
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/products/accessories-tabletop/">
                    Tabletop
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/products/accessories-wall-art/">
                    Wall Art/Sculpture
                    </a> 
                </li>
            
                            </ul>
                           
                    </li>
                
                        <li><a href="<?php bloginfo('siteurl'); ?>/products/bath/">
                            Bath/Spa
                            </a>
                    
                            <ul class="sublist">
                                
                <li><a href="<?php bloginfo('siteurl'); ?>/products/bath-accessories/">
                    Accessories
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/products/bath-shower/">
                    Bath/Shower
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/products/bath-casegoods/">
                    Casegoods
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/products/bath-faucets-fixtures/">
                    Faucets/Fixtures
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/products/bath-sinks/">
                    Sinks
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/products/bath-sustainable/">
                    Sustainable
                    </a> 
                </li>
            
                            </ul>
                           
                    </li>
                
                        <li><a href="<?php bloginfo('siteurl'); ?>/products/beds-bedding/">
                            Beds/Bedding
                            </a>
                     
                    </li>
                
                        <li><a href="<?php bloginfo('siteurl'); ?>/products/flooring/">
                            Flooring
                            </a>
                    
                            <ul class="sublist">
                                
                <li><a href="<?php bloginfo('siteurl'); ?>/products/flooring-carpet/">
                    Carpet
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/products/flooring-sustainable/">
                    Sustainable
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/products/flooring-wood-tile/">
                    Wood / Tile
                    </a> 
                </li>
            
                            </ul>
                           
                    </li>
                
                        <li><a href="<?php bloginfo('siteurl'); ?>/products/furniture/">
                            Furniture
                            </a>
                    
                            <ul class="sublist">
                                
                <li><a href="<?php bloginfo('siteurl'); ?>/products/furniture-casegoods/">
                    Casegoods
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/products/furniture-hardware/">
                    Hardware
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/products/furniture-seating/">
                    Seating
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/products/furniture-sustainable/">
                    Sustainable
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/products/furniture-tables/">
                    Tables
                    </a> 
                </li>
            
                            </ul>
                           
                    </li>
                
                        <li><a href="<?php bloginfo('siteurl'); ?>/products/lighting/">
                            Lighting
                            </a>
                    
                            <ul class="sublist">
                                
                <li><a href="<?php bloginfo('siteurl'); ?>/products/lighting-ceiling/">
                    Ceiling
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/products/lighting-floor/">
                    Floor
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/products/lighting-led/">
                    LED
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/products/lighting-sconce/">
                    Sconce
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/products/lighting-sustainable/">
                    Sustainable
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/products/lighting-table/">
                    Table
                    </a> 
                </li>
            
                            </ul>
                           
                    </li>
                
                        <li><a href="<?php bloginfo('siteurl'); ?>/products/outdoor/">
                            Outdoor
                            </a>
                    
                            <ul class="sublist">
                                
                <li><a href="<?php bloginfo('siteurl'); ?>/products/outdoor-accessories/">
                    Accessories
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/products/outdoor-furniture/">
                    Furniture
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/products/outdoor-lighting/">
                    Lighting
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/products/outdoor-sustainable/">
                    Sustainable
                    </a> 
                </li>
            
                            </ul>
                           
                    </li>
                
                        <li><a href="<?php bloginfo('siteurl'); ?>/products/surfaces/">
                            Surfaces
                            </a>
                    
                            <ul class="sublist">
                                
                <li><a href="<?php bloginfo('siteurl'); ?>/products/surfaces-laminate/">
                    Laminate
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/products/surfaces-sustainable/">
                    Sustainable
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/products/surfaces-tile/">
                    Tile
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/products/surfaces-wallcoverings/">
                    Wallcoverings
                    </a> 
                </li>
            
                            </ul>
                           
                    </li>
                
                        <li><a href="<?php bloginfo('siteurl'); ?>/products/technology/">
                            Technology
                            </a>
                     
                    </li>
                
                        <li><a href="<?php bloginfo('siteurl'); ?>/products/textiles/">
                            Textiles
                            </a>
                    
                            <ul class="sublist">
                                
                <li><a href="<?php bloginfo('siteurl'); ?>/products/textiles-sustainable/">
                    Sustainable
                    </a> 
                </li>
            
                            </ul>
                           
                    </li>
                
                        <li><a href="http://www.hospitalitydesignmarketplace.com/" target="_blank">
                            Buyer's Guide</a> 
                        </li>
                     
                    </li>
                
                           </ul>
                        </div>
                    
             </div>
             </li>
           
             <li class="People1 <?php if ($current_category == 'people') { echo ' active'; } ?>">
                 <a href="<?php bloginfo('siteurl'); ?>/people/">People</a> <span class="open-sub"><a href="javascript:void(0);"></a></span>
                <div class="People-drop">
                  <?php

                    $feat_people_args = array(

                      'posts_per_page' => 1,

                      'post_type' => 'people', 

                      'meta_key' => 'featured_navigation',

                      'meta_value' => true,
                      

                    );


                    $get_featured_people = new WP_Query( $feat_people_args );

                    if ($get_featured_people->have_posts()) : ?>


                        <?php

                           while ($get_featured_people->have_posts()) : $get_featured_people->the_post(); ?>

                            <div class="featured">
                                <h4>featured</h4>
                                <?php if ( has_post_thumbnail() ) { ?>  
                                    <a href="<?php echo post_permalink( $ID ); ?>">
                                        <img src="<?php the_post_thumbnail_url( 'full' ); ?>"
                                          <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                                          alt="<?php the_post_thumbnail_alt(get_the_ID()); ?>"
                                          <?php } ?> />
                                    </a>
                                <?php } ?> 
                                <span class="cat">
                                    <?php if (get_the_term_list( $ID, 'people-categories', '', ', ', '' )): ?> 
                                    <?php echo get_the_term_list( $ID, 'people-categories', '', ', ', '' );
                                      endif;
                                    ?>
                                </span>
                                <a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a>
                            </div><!-- end div.featured -->

                            <?php endwhile; ?>


                    <?php endif; ?>          
                        <div class="nav-section">
                           <ul class="list">
                               
                        <li><a href="<?php bloginfo('siteurl'); ?>/people/interviews/">
                            Interviews
                            </a>
                    
                            <ul class="sublist">
                                
                <li><a href="<?php bloginfo('siteurl'); ?>/people/interviews-5-questions-for/">
                    5 Questions For
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/people/interviews-back-space/">
                    Back Space
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/people/interviews-in-depth/">
                    In-Depth
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/people/interviews-meet-the-minds/">
                    Meet the Minds
                    </a> 
                </li>
            
                            </ul>
                           
                    </li>
                
                        <li><a href="<?php bloginfo('siteurl'); ?>/people/on-the-move/">
                            On the Move
                            </a>
                     
                    </li>
                
                        <li><a href="<?php bloginfo('siteurl'); ?>/people/video-interviews/">
                            Video Interviews
                            </a>
                     
                    </li>
                
                           </ul>
                        </div>
                    
             </div>
             </li>
           
             <li class="Galleries1 <?php if ($current_category == 'galleries') { echo ' active'; } ?>">
                 <a href="<?php bloginfo('siteurl'); ?>/galleries/">Galleries</a> <span class="open-sub"><a href="javascript:void(0);"></a></span>
                <div class="Galleries-drop">

                  <?php

                    $feat_galleries_args = array(

                      'posts_per_page' => 1,

                      'post_type' => 'galleries', 

                      'meta_key' => 'featured_navigation',

                      'meta_value' => true,
                      

                    );


                    $get_featured_galleries = new WP_Query( $feat_galleries_args );

                    if ($get_featured_galleries->have_posts()) : ?>


                        <?php

                           while ($get_featured_galleries->have_posts()) : $get_featured_galleries->the_post(); ?>

                            <div class="featured">
                                <h4>featured</h4>
                                <?php if ( has_post_thumbnail() ) { ?>  
                                    <a href="<?php echo post_permalink( $ID ); ?>">
                                        <img src="<?php the_post_thumbnail_url( 'full' ); ?>"
                                          <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                                          alt="<?php the_post_thumbnail_alt(get_the_ID()); ?>"
                                          <?php } ?> />
                                    </a>
                                <?php } ?> 
                                <span class="cat">
                                    <?php if (get_the_term_list( $ID, 'gallery-categories', '', ', ', '' )): ?> 
                                    <?php echo get_the_term_list( $ID, 'gallery-categories', '', ', ', '' );
                                      endif;
                                    ?>
                                </span>
                                <a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a>
                            </div><!-- end div.featured -->

                            <?php endwhile; ?>


                    <?php endif; ?>         

                        <div class="nav-section">
                           <ul class="list">
                               
                        <li><a href="<?php bloginfo('siteurl'); ?>/galleries/events/">
                            Events
                            </a>
                     
                    </li>
                
                        <li><a href="<?php bloginfo('siteurl'); ?>/galleries/products/">
                            Products
                            </a>
                    
                            <ul class="sublist">
                                
                <li><a href="<?php bloginfo('siteurl'); ?>/galleries/products-roundup/">
                    Roundup
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/galleries/products-trends/">
                    Trends
                    </a> 
                </li>
            
                            </ul>
                           
                    </li>
                
                        <li><a href="<?php bloginfo('siteurl'); ?>/galleries/projects/">
                            Projects
                            </a>
                    
                            <ul class="sublist">
                                
                <li><a href="<?php bloginfo('siteurl'); ?>/galleries/projects-hotels-resorts-wellness/">
                    Hotels/Resorts/Wellness
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/galleries/projects-nightlife/">
                    Nightlife
                    </a> 
                </li>
            
                <li><a href="<?php bloginfo('siteurl'); ?>/galleries/projects-restaurants/">
                    Restaurants
                    </a> 
                </li>
				
                <li><a href="<?php bloginfo('siteurl'); ?>/galleries/projects-retail-commercial/">
                    Retail / Commercial
                    </a> 
                </li>				
            
                            </ul>
                           
                    </li>
                
                           </ul>
                        </div>
                    
             </div>
             </li>
           
             <li class="Awards + Events1 <?php if ($current_category == 'awards-events') { echo ' active'; } ?>">
                 <a href="<?php bloginfo('siteurl'); ?>/awards-events/">Awards + Events</a> <span class="open-sub"><a href="javascript:void(0);"></a></span>
                <div class="Awards + Events-drop">
        
                        <div class="nav-section">
                           <ul class="list">
                               
                        <li><a href="<?php bloginfo('siteurl'); ?>/awards-events/CitySCENE/">
                            CitySCENE
                            </a>
                     
                    </li>
                
                        <li><a href="<?php bloginfo('siteurl'); ?>/awards-events/HD-Awards/">
                            HD Awards
                            </a>
                     
                    </li>
                
                        <li><a href="<?php bloginfo('siteurl'); ?>/awards-events/HD-Expo/">
                            HD Expo
                            </a>
                     
                    </li>
                
                        <li><a href="<?php bloginfo('siteurl'); ?>/awards-events/HD-Summit/">
                            HD Summit
                            </a>
                     
                    </li>
                
                        <li><a href="<?php bloginfo('siteurl'); ?>/awards-events/IIDA-HD-Product-Desi/">
                            IIDA/HD Product Design Competition 
                            </a>
                     
                    </li>
                
                        <li><a href="<?php bloginfo('siteurl'); ?>/awards-events/NextGen-Forum/">
                            NextGen Forum
                            </a>
                     
                    </li>
                
                        <li><a href="<?php bloginfo('siteurl'); ?>/awards-events/Platinum-Circle/">
                            Platinum Circle
                            </a>
                     
                    </li>
                
                        <li><a href="<?php bloginfo('siteurl'); ?>/awards-events/Wave-of-the-Future/">
                            Wave of the Future
                            </a>
                     
                    </li>
                
                           </ul>
                        </div>
                    
             </div>
             </li>
           
                    
            </ul>
        </nav>