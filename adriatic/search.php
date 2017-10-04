<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package adriatic
 * @since adriatic 1.0
 */
 
get_header(); ?>

<header id="header-banner" class="bg-content hire">
       <div class="container">
         <div class="col-lg-12">
                 <div class="col-md-9">
                 <h2>Results</h2>
                 
                 </div>
                 <div class="col-md-3"></div>
         </div>
                
        </div>
</header>
    



    


    <div id="white">
    <div class="container">
        <!-- Portfolio Section -->
        <div class="row sofas">
            
            <div class="col-lg-12">
            <?php

		if ( have_posts() ) :

	    ?>
             <!-- Page Content -->
             <h2><?php printf( __( 'Search Results for: %s'), '<span>' . get_search_query() . '</span>' ); ?></h2>
            <ul>
			     <?php while ( have_posts() ) : the_post(); ?>
			    <li>
			    	<h3><?php the_title();  ?></h3>
					<p><?php the_excerpt(); ?></p>
					<p> <a href="<?php the_permalink(); ?>">View More</a> </p>
				</li>
		    	<?php endwhile; ?> 
		    </ul>
	    <?php else : ?>
 
		<h2><?php _e('Sorry no matches for that query'); ?></h2>
		<p>Here are some helpful links instead:</p>
		<ul id="menu-range" class="menu">
 	<li><a href="<?php bloginfo('url'); ?>">Home</a></li>
 	<li><a href="<?php bloginfo('url'); ?>/lounges/">Lounges</a></li>
 	<li><a href="<?php bloginfo('url'); ?>/dining/">Dining</a></li>
 	<li><a href="<?php bloginfo('url'); ?>/entertainment/">Entertainment Units</a></li>
 	<li><a href="<?php bloginfo('url'); ?>/coffee-and-side-tables/">Coffee and Side Tables</a></li>
 	<li><a href="<?php bloginfo('url'); ?>/stools/">Stools</a></li>
 	<li><a href="<?php bloginfo('url'); ?>/occasional-chairs/">Occasional Chairs</a></li>
 	<li><a href="<?php bloginfo('url'); ?>/bedroom/">Bedroom</a></li>
 	<li><a href="<?php bloginfo('url'); ?>/sideboards-and-occasional/">Sideboards and Occasional</a></li>
 	<li><a href="<?php bloginfo('url'); ?>/contact-us/">Contact Us</a></li>
</ul>
		

	<?php endif; ?>
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>


<?php get_footer(); ?>