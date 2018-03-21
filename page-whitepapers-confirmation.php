<?php get_header(); ?>

<div class="main-container">
  <div class="main wrapper clearfix">
    <div id="contentwrapper">
      <article>
        <section id="content"> 


          <?php if (have_posts()) : ?>

          <?php while (have_posts()) : the_post(); ?>
                               
          <h1 class="title">Whitepapers</h1>
          <?php the_content(); ?>   


          <ul class="pdf-list">

          <?php if($_GET['whiteaper_1'] == "on"): ?>
  
            <a class="pdf" href="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2016/11/TCGRetailProgramEvolutionWP.pdf" target="_blank"><span>Retail Program Evolution</span> (1.52 mb)</a> 

          <?php endif; ?>
          <?php if ($_GET['whitepaper_2'] == "on"): ?>
            <a class="pdf" href="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2016/11/Outlet Stores Snapshot - final sm.pdf" target="_blank"><span>Outlet Stores</span> (0.5 mb)</a>
          <?php endif; ?> 
          <?php if ($_GET['whitepaper_4'] == "on"): ?>
            <a class="pdf" href="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2016/11/South America Retail.pdf" target="_blank"><span>South American Retail</span> (0.5 mb)</a>
            <?php endif; ?>
            <?php if ($_GET['whitepaper_5'] == "on"): ?>
              <a class="pdf" href="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2016/11/Future of Retail WP 2 10 14.pdf" target="_blank"><span>Future of Retail</span> (2.76 mb)</a>]]>
            <?php endif; ?>
            <?php if ($_GET['whitepaper_6'] == "on"): ?>
              <a class="pdf" href="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2016/11/Work-Market-Guide-to-Finding-and-Managing-Freelancers.pdf" target="_blank"><span>Guide to Finding and Managing Freelancers</span> (250 kb)</a>
            <?php endif; ?>
            <?php if ($_GET['whitepaper_7'] == "on"): ?>
              <a class="pdf" href="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2016/11/Whitepaper_Succeeding-with-Millennials-at-Retail.pdf" target="_blank"><span>Succeeding with Millennials at Retail</span> (885 kb)</a>
            <?php endif; ?>
            <?php if ($_GET['whitepaper_8'] == "on"): ?>
              <a class="pdf" href="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2016/11/The Value Of Evaluation WP 12-1-14.pdf" target="_blank"><span>The Value of Evaluation</span> (629 kb)</a>
              <?php endif; ?>
            <?php if ($_GET['whitepaper_9'] == "on"): ?>        
              <a class="pdf" href="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2016/11/Retail Activation_r1.pdf" target="_blank"><span>Strategic Retail Activation</span> (741 kb)</a>
            <?php endif; ?>
            <?php if ($_GET['whitepaper_10'] == "on"): ?>
              <a class="pdf" href="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2016/11/MaterialTrendsReclaimedWood.pdf" target="_blank"><span>Material Trends: Reclaimed Wood</span> (5.53 mb)</a>
            <?php endif; ?>

       
            </ul>       

          <?php endwhile; ?>

          <?php endif; ?>
       
        </section>
      </article>
    </div>           
        
        <?php get_sidebar(); ?>
                
        <!-- END #right --> 
    
  </div>
  <!-- #main --> 
</div>
<!-- #main-container -->

<?php get_footer(); ?>