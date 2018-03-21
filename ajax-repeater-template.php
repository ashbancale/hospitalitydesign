<?php if (get_post_type( $ID ) == 'news'): ?>
        <article class="news-item" style="display: block;">
        <h2><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h2>
            <span class="date">
                <?php echo get_the_date(); ?> 
                
                <span class="cat"><?php if (get_the_term_list( $ID, 'news-categories', '', ', ', '' )): ?> • <?php echo get_the_term_list( $ID, 'news-categories', '', ', ', '' ) ?><?php endif; ?>
            </span> 
                
            </span>

            <p>
            <?php      

                if ( get_field('abstract_text') != ''){
                  the_field('abstract_text');
                } else {
                  the_excerpt();
                }
            ?>
              
            </p>
        </article>
<?php endif; //end news post type ?>

<?php if(get_post_type( $ID ) == 'projects'): ?>

    <div class="project">
      <?php if ( has_post_thumbnail() ) { ?>  
          <a href="<?php echo post_permalink( $ID ); ?>">
          <div class="index-image-box"><img src="<?php the_post_thumbnail_url( 'full' ); ?>" border="0" 
            <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                alt="<?php echo the_post_thumbnail_alt(get_the_ID()); ?>"
                <?php } ?>
            /> 
          </div><!-- end index-image-box -->
          </a>
      <?php } ?>    
        <div class="proj-blurb">
            <h2><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h2>
            <span class="date"><?php echo get_the_date(); ?>
                                    
              <span class="cat"> • <?php if (get_the_term_list( $ID, 'project-categories', '', ', ', '' )): ?> 
                <?php echo get_the_term_list( $ID, 'project-categories', '', ', ', '' );
                  endif;
                ?>    
              </span>                               
            </span>
            <p><?php      

                if ( get_field('abstract_text') != ''){
                  the_field('abstract_text');
                } else {
                  echo wp_trim_words( get_the_excerpt(), 15, '...' );
                }
            ?></p>
        </div>
    </div>    
<?php endif; //end project post type ?>

<?php if (get_post_type( $ID ) == 'products'): ?>

    <p class="prod" style="display: block;">
      
      <a href="<?php echo post_permalink( $ID ); ?>">
        <img src="<?php the_post_thumbnail_url( 'full' ); ?>" border="0" class="lazy" style="display: inline;" data-pin-nopin="true" 
          <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
              alt="<?php echo the_post_thumbnail_alt(get_the_ID()); ?>"
              <?php } ?>
          /> 
      </a>
      <a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a>
      
      <?php if (get_the_term_list( $ID, 'products-categories', '', ', ', '' )): ?> 
      <span class="prod-cat">
            <?php echo get_the_term_list( $ID, 'products-categories', '', ', ', '' ); ?>
      </span>
      <?php
             endif;
            ?>                      
      
    </p>    
<?php endif; //end product post type ?>

<?php if(get_post_type( $ID ) == 'galleries'): ?>

    <div class="gallery-item main" style="display: block;">
        <a href="<?php echo post_permalink( $ID ); ?>">
                <img src="<?php the_post_thumbnail_url( 'full' ); ?>" 
                <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                    alt="<?php the_post_thumbnail_alt(get_the_ID()); ?>"
                    <?php } ?>
                data-pin-nopin="true" />  
        </a>
        <h2><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h2>
        <span class="date"><?php echo get_the_date(); ?>
        
         <?php if (get_the_term_list( $ID, 'gallery-categories', '', ', ', '' )): ?><span class="cat"> • <?php echo get_the_term_list( $ID, 'gallery-categories', '', ', ', '' ) ?></span><?php endif; ?>
                          
        </span>
            <p><?php      

                    if ( get_field('description') != ''){
                      the_field('description');
                    } else {
                      echo wp_trim_words( get_the_excerpt(), 15, '...' );
                    }
                ?> 
            </p>
        <a href="<?php echo post_permalink( $ID ); ?>" class="event-more">View Photos ›</a>
    </div>    

<?php endif; //end galleries post type ?>

<?php if (get_post_type( $ID ) == 'people'): ?>

    <div class="people-item" style="display: block;">

        <a href="<?php echo post_permalink( $ID ); ?>">
        <div class="people-image">
            <img src="<?php the_post_thumbnail_url( 'full' ); ?>" data-pin-nopin="true" 
              <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                  alt="<?php echo the_post_thumbnail_alt(get_the_ID()); ?>"
                  <?php } ?>
              /> 
        </div>
        </a>
        <div class="people-blurb">
            <h2><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h2>
            <span class="date"><?php echo get_the_date(); ?>
            
            <?php if (get_the_term_list( $ID, 'people-categories', '', ', ', '' )): ?> 
             <span class="cat"> • <?php echo get_the_term_list( $ID, 'people-categories', '', ', ', '' );
             endif;
            ?> </span></a>

                                      
            </span>
            <p>
              <?php 
                if ( get_field('abstract_text') != ''){
                    the_field('abstract_text');
                } else {
                    echo wp_trim_words( get_the_excerpt(), 15, '...' );
                }
                ?>
            <br></p>
        </div>
    </div>   
<?php endif; //end people post type ?>