<?php
/**
 * Product template file.
 *
 * This is the catalogue template file in Adriatic theme
 *
 * Template Name: Catalogue
 *
 * @package adriatic
 * @since adriatic 1.0
 */
 
get_header(); ?>

<header id="header-banner" class="bg-content entertainment">
       <div class="container">
         <div class="col-lg-12">
                 <div class="col-md-8">
                 <h2><?php the_title(); ?></h2>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac porta neque. In felis neque, egestas viverra facilisis eu, pharetra ac arcu.</p>
                 </div>
                 <div class="col-md-4"></div>
         </div>
        </div>
</header>

<!-- Page Content -->
    <div id="white">
    <div class="container">
        <!-- Portfolio Section -->
        <!-- Page Content -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>

            <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?> 
        <!-- /.row -->
    </div>
    </div>
<?php get_footer(); ?>
        
        