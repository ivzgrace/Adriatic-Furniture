<?php
/**
 * The template for displaying products
 *
 * Template Name: Location
 *
 * @package adriatic
 * @since adriatic 1.0
 */

 
get_header(); ?>
     <header id="header-banner" class="bg-content hire">
       <div class="container">
         <div class="col-lg-12">
         <?php if(is_page(86)): ?>
        	<div class="col-md-4">
                 <h2><?php the_title(); ?></h2>
                 
                 </div>
                 <div class="col-md-8">
                 <img src="<?php bloginfo('url') ?>/wp-content/uploads/2015/09/RELOCATION-SALE.jpg" alt="" class="img-responsive">
                 </div>
         <?php else: ?>
                 <div class="col-md-9">
                 <h2><?php the_title(); ?></h2>
                 
                 </div>
                 <div class="col-md-3"></div>
        <?php endif; ?>
         </div>
                
        </div>
    </header>  
<div id="white">
    <div class="container">
        <!-- Portfolio Section -->
        <div class="row">
            <div class="space" style="padding: 10px 0"></div> 
            <div class="col-lg-12 location">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col-md-3 adr-st-loc-cate-9">
                    <div class="adr-st-loc-cate-cascade-9">
                    <h4>STORE LOCATIONS</h4>
                    <?php                         
                            $tops = array(                            
                            'theme_location'  => 'left-menu',  
                            'container'       => '',                                                       
                            'items_wrap'      => '<ul>%3$s</ul>'  
                            );                        
                            wp_nav_menu( $tops );                         
                    ?>
                    </div>
                </div>
                <div class="col-md-9">

                    <?php the_content(); ?>

                </div>
                      <!-- Page Content -->
                <?php endwhile; else: ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?> 
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>
<?php get_footer(); ?>
        
        