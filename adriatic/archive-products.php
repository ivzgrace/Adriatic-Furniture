<?php
/**
 * The template for displaying products
 *
 * Template Name: Products
 *
 * @package adriatic
 * @since adriatic 1.0
 */

get_header(); 

global $post;
?>

<?php if ( have_posts() ) : 
	$post_slug=$post->post_name;
	$parentId = $post->post_parent;
?>

<header id="header-banner" class="bg-content <?php echo $post_slug; ?>">
       <div class="container">
         <div class="col-lg-12">
                 <div class="col-md-12">
                <?php the_title( '<h2>', '</h2>' );?>
<div>
<?php
$category = get_category_by_slug($post_slug);
$the_id = $category->term_id;
echo category_description( $the_id );
?>
</div>

                 </div>
                 
         </div>
        </div>
</header>
<div id="white">
    <div class="container">
        <!-- Portfolio Section -->
        <div class="row sofas">
        	<div class="space"></div>
        	<div class="col-lg-12">
				<?php 
					$args = array(
	                   'post_type' => 'products',
			   		   'orderby' => 'title',
			   		   'order'   => 'ASC',
	                   'posts_per_page' => 100,
	                   'category_name' => $post_slug,
	                   'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
	                   );

    				query_posts($args);

				?>
				<?php while (have_posts()) : the_post(); ?>
					<div class="col-md-4 col-sm-6">
				        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumbnail', array( 'class' => "img-responsive img-portfolio img-hover")); ?></a>
                    	<h3><?php the_title(); ?></h3>
				    </div>
				<?php endwhile;?>
						
			</div>
			<div class="space col-lg-12">
				<div class="navigation">
					  <div class="col-md-6" style="text-align:left"><?php previous_posts_link('&laquo; Previous') ?></div>
					  <div class="col-md-6"style="text-align:right"><?php next_posts_link('Next &raquo;') ?></div>
					</div>
			</div>
			<?php
			wp_reset_query();  // Restore global post data
			?>
        </div>
     </div>
</div>

<?php endif; ?>	

<?php get_footer(); ?>
