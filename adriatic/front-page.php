<?php
/**
 * The home template file.
 *
 * This is the default home template file in adriatic theme
 *
 * @package adriatic
 * @since adriatic 1.0
 */
 
get_header(); ?>


    <!-- Header Carousel -->
    <header class="bannerslide">
        <div class="container"><?php putRevSlider('homebanner', 'homepage'); ?></div>
    </header>

    <!-- Page Content -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>

    <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?> 

<?php get_footer(); ?>
        
        