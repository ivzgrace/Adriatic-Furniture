<?php
/**
 * The template for displaying products
 *
 * Template Name: Hire
 *
 * @package adriatic
 * @since adriatic 1.0
 */

 
get_header(); ?>
 <!-- Header Carousel -->
<?php if(is_page( 120 )): ?>  
    <header id="header-banner" class="bg-content hire post-<?php the_ID(); ?>">
       <div class="container">
         <div class="col-lg-12">
                 <div class="col-md-9">            
		<h2>Adriatic Hire and Property Styling</h2>
                 </div>
                 <div class="col-md-3"></div>
         </div>
                
        </div>
    </header>
 <?php else: ?>
<header id="header-banner" class="bg-content">
<?php putRevSlider( 'banner9' ); ?>
</header>
		
		<?php endif; ?>
   
<div id="white">
    <div class="container">
        <!-- Portfolio Section -->
        <div class="row sofas">
            <div class="space"></div> 
            
            <div class="col-lg-12">
                      <!-- Page Content -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>

    <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?> 
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>
<?php get_footer(); ?>
        
        