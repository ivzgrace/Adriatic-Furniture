<?php
/**
 * The main template file.
 *
 * This is the default template file in Twitter theme
 *
 * @package adriatic
 * @since adriatic 1.0
 */
 
get_header(); ?>
  <?php if( get_field('header_banner') ): ?>
     
  	<header id="header-banner" class="bg-content">
    	<?php the_field('header_banner'); ?>
  	</header>  

<?php else: ?>
<header id="header-banner" class="bg-content <?php if(is_page(100)): echo "warranty"; else: echo "hire"; endif; ?> post-<?php the_ID(); ?> ">
       <div class="container">
         <div class="col-lg-12">
                 <div class="col-md-9">
                 <div class="headbg"><h2><?php the_title(); ?></h2></div>
                 
                 </div>
                 <div class="col-md-3"></div>
         </div>
                
        </div>
    </header>

<?php endif; ?>  
<div id="white">
    <div class="container">
        <!-- Portfolio Section -->
        <div class="row sofas">
            <div class="space" style="padding: 10px 0"></div> 
            
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
        
        