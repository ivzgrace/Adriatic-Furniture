<?php get_header(); ?>

    <!-- Header Carousel -->
    <?php 
  $products = get_post_meta($post->ID); 
  $prodbanner = $products['Banner'][0];
  $dimension = $products['Dimension'][0];
  $topcolor = $products['NoOfTopColor'][0];
  $color1 = $products['Color1'][0];
  $color2 = $products['Color2'][0];
  $color3 = $products['Color3'][0];
  $color4 = $products['Color4'][0];
  $color5 = $products['Color5'][0];
  $quality = $products['Quality'][0];
  $suspension = $products['Suspension'][0];
  $frame = $products['Frame'][0];
  $warranty = $products['Warranty'][0];
  $foam = $products['Suspension'][0];
  $touchglide = $products['Touchglide'][0];
  $isleather = $products['IsLeather'][0];

$categories = get_the_category();

    ?>  
    <header>
<?php 
if( get_field('banner_rotator') ): 
	the_field('banner_rotator');
endif; 
?>
    </header>
   
<div id="inforamtion">  
    <div id="more-details">
        <div class="container">
                 <div class="col-md-12">
                       <div class="col-md-3"><b>Where is your nearest store?</b> 
<form><select id="selecturl" name="selecturl" onchange="javascript:selecturlfn(this.value)">
<option value="" selected="selected">Select Store Location</option>
  <option value="http://www.adriatic.com.au/chadstone-enquiry?product=<?php single_post_title(); ?>">Chadstone</option>
  <option value="http://www.adriatic.com.au/essendon-enquiry?product=<?php single_post_title(); ?>">Essendon</option>
  <option value="http://www.adriatic.com.au/maribyrnong-enquiry?product=<?php single_post_title(); ?>">Maribyrnong</option>
  <option value="http://www.adriatic.com.au/moorabbin-enquiry?product=<?php single_post_title(); ?>">Moorabbin</option>
  <option value="http://www.adriatic.com.au/nunawading-enquiry?product=<?php single_post_title(); ?>">Nunawading</option>
  <option value="http://www.adriatic.com.au/oakleigh-enquiry?product=<?php single_post_title(); ?>">Oakleigh Clearance Centre</option>
  <option value="http://www.adriatic.com.au/taylor-lakes-enquiry?product=<?php single_post_title(); ?>">Taylors Lakes</option>
  <option value="http://www.adriatic.com.au/thomastown-enquiry?product=<?php single_post_title(); ?>">Thomastown</option>
</select> 
<a id="enquirebtn" class="bot green" style="cursor:pointer">ENQUIRE NOW</a>                  
</form>
                       <a class="bot print" onclick="myFunction()" href="#">PRINT THIS PAGE</a>
<script>

function selecturlfn(linkurl){
	jQuery("a#enquirebtn").attr('href', linkurl);
}
function myFunction() {
    window.print();
}
</script>
                       </div>         
                       <div class="col-md-4">
                       <?php the_excerpt(); ?>
                       <div class="more-content">
                        <?php if( get_field('category') ): ?>
                            <p><strong>Category:</strong> <?php the_field('category'); ?></p>
                        <?php endif; ?>
                        
                        <?php if( get_field('details') ): ?>
                            <p><strong>Details:</strong> <?php the_field('details'); ?></p>
                        <?php endif; ?>
                        <?php if( get_field('product_dimensions') ): ?>
                            <p><strong>Dimensions:</strong> <?php the_field('product_dimensions'); ?></p>
                        <?php endif; ?>
                        <?php if( get_field('others') ): ?>
                            <?php the_field('others'); ?>
                        <?php endif; ?>
                        </div>
                       </div>
                       <div class="col-md-5"> 
                       
                       <?php the_post_thumbnail();  ?>
                       
                       

                       </div>

                 </div>
<?php if( get_field('more_info_content') ): ?>
<div class="col-md-12">
<div class="col-md-3">
</div>
<div class="col-md-9">

 <?php the_field('more_info_content'); ?>

</div>
</div>
<?php endif; ?>
            </div>
   </div>  
   
   <div id="features">
        <div class="container">
                 <div class="col-md-12">
                 <?php if( get_field('features') ): ?>
                       <div class="col-md-3"> <h3> <span> Features</span></h3> </div>         
                       <div class="col-md-9" style="padding-top: 10px"> 
                       <?php global $post; echo apply_filters("the_content", $post->post_content); ?>
                        
                            <p><?php the_field('features'); ?></p>
                        
                       </div>
                    <?php endif; ?>
                 </div>
                 <div class="col-md-12">
                 <?php if( get_field('structure_details') ): ?>
                       <div class="col-md-3"> <h3> <span> Structure Details</span></h3> </div>         
                       <div class="col-md-9 structdetails"> 
                        
                            <?php the_field('structure_details'); ?>
                        
                       </div>
                    <?php endif; ?>
                 </div>
                 <div class="col-md-12">
                 <?php if( get_field('information_&_warranty') ): ?>
                       <div class="col-md-3"> <h3> <span> Information &amp; Warranty</span></h3> </div>         
                       <div class="col-md-9 structdetails infowar"> 
                        
                            <?php the_field('information_&_warranty'); ?>
                        
                       </div>
                    <?php endif; ?>
                 </div>
            </div>
   </div>  
</div>

   
   <div id="big-product">
       <div class="container">
       <?php if( get_field('gallery') ): ?>
       <center><?php the_field('gallery'); ?></center>
       <?php endif; ?>
       </div>
   </div> 

    <div id="box-colours">   
       <div class="container">
       
       <div class="col-md-12 top-five">

                 <div class="col-md-4"><h2>
                 <h2>
                 
                 
                   <strong><span>Color Options</span></strong>
                
                 
                
                 </h2></div>
                 <div class="col-md-8">
                        <?php /*<div class="col-md-2 pad-left"><h3>White</h3><img src="<?php echo get_template_directory_uri(); ?>/images/white.jpg"></div>
                        <div class="col-md-2 pad-left"><h3>Black</h3><img src="<?php echo get_template_directory_uri(); ?>/images/black.jpg"></div>
                        <div class="col-md-2 pad-left"><h3>Red</h3><img src="<?php echo get_template_directory_uri(); ?>/images/red.jpg"></div>
                        <div class="col-md-2 pad-left"><h3>Brown</h3><img src="<?php echo get_template_directory_uri(); ?>/images/brown.jpg"></div>
                        <div class="col-md-2 pad-left"><h3>Grey</h3><img src="<?php echo get_template_directory_uri(); ?>/images/grey.jpg"></div> */ ?>
                        
                        <?php if($categories[0]->term_id == '24'): ?>
                        
                        <p>At Adriatic, we have huge range of timber, leather &amp; fabric colours and styles. We look forward to seeing you in store, so we can take you through the complete range and help you select the right timber, leather and fabric colours for your bedroom furniture.</p>
                        
                        <?php elseif($categories[0]->term_id == '23'): ?>
                        
                        <p>At Adriatic, we have huge range of fabric & leather colours and styles. We look forward to seeing you in store, so we can take you through the complete range and help you select the right colour for your occasional chair.</p>
                        
                        <?php elseif($categories[0]->term_id == '29'): ?>
                        
                        <p>At Adriatic, we have huge range of timber, glass, stone, concrete, fabric & leather colours and styles. We look forward to seeing you in store, so we can take you through the complete range and help you select the right colour for your sideboard & occasional pieces.</p>
                        
                        <?php elseif($categories[0]->term_id == '22'): ?>
                        
                        <p>At Adriatic, we have huge range of timber, glass, stone & concrete colours and styles. We look forward to seeing you in store, so we can take you through the complete range and help you select the right timber, glass, stone & concrete colours for your coffee & side tables.</p>
                        
                        <?php elseif($categories[0]->term_id == '19'): ?>
                        
                        <p>At Adriatic, we have huge range of timber, glass, stone & concrete colours and styles. We look forward to seeing you in store, so we can take you through the complete range and help you select the right timber, glass, stone & concrete colours for your dining table. We also have a huge range of timber, leather & fabric colours, for your dining chairs.</p>
                        
                        <?php elseif($categories[0]->term_id == '20'): ?>
                        
                        <p>At Adriatic, we have huge range of timber, glass, & concrete colours and styles. We look forward to seeing you in store, so we can take you through the complete range and help you select the right timber, glass & concrete colour for your entertainment unit.</p>
                        
                        <?php elseif($categories[0]->term_id == '21'): ?>
                        
                        <p>At Adriatic, we have huge range of timber, fabric & leather colours and styles. We look forward to seeing you in store, so we can take you through the complete range and help you select the right timber, fabric & leather colour for your stools.</p>
                        
                        <?php elseif($categories[0]->term_id == '18' || $categories[0]->term_id == '51' || $categories[0]->term_id == '52' ||$categories[0]->term_id == '53'): ?>
                        
                        <p>At Adriatic, we have huge range of leather & fabric colours and styles. We look forward to seeing you in store, so we can take you through the complete range and help you select the right leather and fabric colour for your lounge.</p>
                        
                        <?php endif; ?>
                       
                        
                 </div>
                 
       </div>
       

       
       
       </div> <!- Container end ->
       
   </div> <!- box-colours end -> 

   
<?php 


if ($categories[0]->cat_ID == 18 || strtolower($isleather) == 'yes'):
?>
   <div id="leather">
       <div class="col-md-12 pad-left">
          <div class="col-md-6 pad-left">
          <img src="<?php echo get_template_directory_uri(); ?>/images/leather.jpg" width="100%"> 
          </div>
          <div class="col-md-6 care">
               <div class="pad-box">
                <h2><b>Fabric and Leather Care</b></h2>
               <p>All Adriatic  lounges are designed to high-quality specifications.</p>
<p>Taking proper care of your lounge will help ensure you can enjoy it for years to come.</p>
<p>To ensure your lounge stays in optimum condition, please refer to the following care guide for the best way to care for your lounge.</p>
                <a href="<?php bloginfo('url'); ?>/adriatic-care/"><img src="<?php echo get_template_directory_uri(); ?>/images/find-out.jpg"></a>
                </div>
          </div>
       </div>
       <div class="clear"></div> 
   </div> <!- leather end ->
<?php else: ?>
 <div id="leather">
       <div class="col-md-12 pad-left">
          <div class="col-md-6 pad-left">
          <img src="<?php echo get_template_directory_uri(); ?>/images/product-care.jpg" width="100%"> 
          </div>
          <div class="col-md-6 care">
               <div class="pad-box">
                <h2><b>Adriatic Product Care</b></h2>
                
                <?php if($categories[0]->term_id == '24'): ?>
                
                <p>All Adriatic bedroom furniture is designed to high-quality specifications.</p>

<p>Taking proper care of your bedroom furniture will help ensure you can enjoy it for years to come.</p>

<p>To ensure your bedroom furniture stays in optimum condition, please refer to the following care guide for the best way to care for your bedroom furniture.</p>
				
				<?php elseif($categories[0]->term_id == '23'): ?>
				<p>All Adriatic occassional and accent chairs are designed to high-quality specifications.</p>

<p>Taking proper care of your occassional and accent chairs will help ensure you can enjoy it for years to come.</p>

<p>To ensure your occassional and accent chairs stay in optimum condition, please refer to the following care guide for the best way to care for your occassional and accent chairs.</p>
				<?php elseif($categories[0]->term_id == '29'): ?>
				<p>All Adriatic sideboards and occassional pieces are designed to high-quality specifications.</p>

<p>Taking proper care of your sideboards and occassional pieces will help ensure you can enjoy it for years to come.</p>

<p>To ensure your sideboards and occassional pieces stay in optimum condition, please refer to the following care guide for the best way to care for your sideboards and occassional pieces.</p>
				
				<?php elseif($categories[0]->term_id == '19'): ?>
				<p>All Adriatic dining table and chairs are designed to high-quality specifications.</p>

<p>Taking proper care of your dining table and chairs will help ensure you can enjoy it for years to come.</p>

<p>To ensure your dining table and chairs stay in optimum condition, please refer to the following care guide for the best way to care for your dining table and chairs.</p>
				<?php elseif($categories[0]->term_id == '20'): ?>
				<p>All Adriatic entertainment units are designed to high-quality specifications.</p>

<p>Taking proper care of your entertainment unit will help ensure you can enjoy it for years to come.</p>

<p>To ensure your entertainment unit stays in optimum condition, please refer to the following care guide for the best way to care for your entertainment unit.</p>
				
				<?php elseif($categories[0]->term_id == '21'): ?>
				<p>All Adriatic stools are designed to high-quality specifications.</p>
				<p>Taking proper care of your stools will help ensure you can enjoy it for years to come.</p>
				<p>To ensure your stools stays in optimum condition, please refer to the following care guide for the best way to care for your stools.</p>
				
				<?php elseif($categories[0]->term_id == '22'): ?>
				<p>All Adriatic coffee and side tables are designed to high-quality specifications.</p>

<p>Taking proper care of your coffee and side tables will help ensure you can enjoy it for years to come.</p>

<p>To ensure your coffee and side tables stay in optimum condition, please refer to the following care guide for the best way to care for your dining table and chairs.</p>
				<?php else: ?>
               <p>All Adriatic leather lounges are designed to high-quality specifications.</p>

<p>Taking proper care of your leather lounge will help ensure you can enjoy it for years to come.</p>

<p>To ensure your lounge stays in optimum condition, please refer to the following care guide for the best way to care for your leather lounge.</p>
                
                <?php endif; ?>
                <a href="<?php bloginfo('url'); ?>/adriatic-care/"><img src="<?php echo get_template_directory_uri(); ?>/images/find-out.jpg"></a>
                </div>
          </div>
       </div>
       <div class="clear"></div> 
   </div>
 
<?php endif; ?>
     
    <div id="qa" class="colour">
                <div class="container"> 
                     <div class="col-md-12 pad-left">
                        <div class="col-md-6 pad-left care">
                            <div class="pad-less">
                            <h2>Our Quality</h2>
                            <div class="clear"></div>
                            <p><?php echo ($quality != "" ? $quality : 'At Adriatic Furniture we’re committed to continuous improvement of our furniture products. We quality control every piece, and offer a comprehensive warranty program on all of its pieces. We scour the globe to bring the very best from around the world.'); ?></p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 care">
                                                        
                        <?php if ($categories[0]->cat_ID == 18 || strtolower($isleather) == 'yes'): ?>

                        <ul id="myTab" class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#service-one" data-toggle="tab">SUSPENSION</a>
                            </li>
                            <li class=""><a href="#service-two" data-toggle="tab">FRAME</a>
                            </li>
                            <li class=""><a href="#service-three" data-toggle="tab">FOAM</a>
                            </li>
                            <li class=""><a href="#service-four" data-toggle="tab">TOUCHGLIDE</a>
                            </li>
                            <li class=""><a href="#service-five" data-toggle="tab">WARRANTY</a>
                            </li>
                        </ul>
        
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="service-one">
                                <div class="pad-box">
                                    <h3>Suspension</h3>
                                    <div class="clear"></div>
                                    <p>Adriatic comprehensive suspension systems have been designed to ensure maximum support and increase comfort on all of our sofas. The three different systems work to provide the highest level of resilience, including compression and extension. All Adriatic seating Systems provide the ultimate support platform ensuring long lasting personal comfort and durability.</p>
                                <a href="<?php bloginfo('url');?>/suspension/"><img src="<?php echo get_template_directory_uri(); ?>/images/find-out.jpg"></a>    
                                </div>
        
                            </div>
                            
                            <div class="tab-pane fade" id="service-two">
                                <div class="pad-box">
                                    <h3>Frame</h3>
                                    <div class="clear"></div>
                                    <p>The Adriatic frame provides a strong foundation for each sofa. Using only the best hardwood timbers, means your sofa will last longer without sagging or losing its shape.
                                    </p>
                    <p>Not all timber frames are the same. Spot tests are applied to key stress and weight-bearing areas for additional strength.</p>
                                    <a href="<?php bloginfo('url');?>/frame/"><img src="<?php echo get_template_directory_uri(); ?>/images/find-out.jpg"></a>
                                </div>

                             
                            </div>
                            
                            <div class="tab-pane fade" id="service-three">
                                <div class="pad-box">
                                    <h3>Foam</h3>
                                    <div class="clear"></div>
                                    <p>Foam is a light cellular material created from small bubbles of air in polyurethane plastic or rubber as a result of a chemical reaction.</p>
<p>The density of foam refers to the weight in kilograms and varies from sofa to sofa. For this reason there are variations in density, degrees of comfort and support. Depending on design and features such as upholstery coverings and touch glide mechanisms all sofas will have different density of foams to ensure the comfort look and feel of each Adriatic Sofa.</p>
                                    
                                </div>

                               
                            </div>
                            
                            
                            <div class="tab-pane fade" id="service-four">
                               <div class="pad-box">
                                    <h3>Touch Glide "ASG" System</h3>
                                    <div class="clear"></div>
                                    <p>Effortlessly recline, change the angle of headrests, armrests and leg rests electronically using Adriatic’s Sensor Glide System, which is seamlessly integrated into selected models.
                                    </p>
                                   <a href="<?php bloginfo('url');?>/touch-glide/"><img src="<?php echo get_template_directory_uri(); ?>/images/find-out.jpg"></a>
                                </div>
                              
                            </div>
                            
                            
                            <div class="tab-pane fade" id="service-five">
                               <div class="pad-box">
                                    <h3>Warranty</h3>
                                    <div class="clear"></div>
                                    <p>Adriatic Furniture provide a 12-month warranty against faulty workmanship for all products.</p>

                <p>In addition, we are pleased to offer a 10-year frame warranty on new lounges. </p>
                                    <a href="<?php bloginfo('url');?>/warranty"><img src="<?php echo get_template_directory_uri(); ?>/images/find-out.jpg"></a>
                                </div>

                              
                            </div>

                        </div> <!---end tabs-->

                       <?php else: ?>
                       
              <ul id="myTab" class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#service-one" data-toggle="tab">GLASS</a>
                            </li>
                            <li class=""><a href="#service-two" data-toggle="tab">TIMBER</a>
                            </li>
                            <li class=""><a href="#service-three" data-toggle="tab">STONE</a>
                            </li>
                            <li class=""><a href="#service-four" data-toggle="tab">CONCRETE</a>
                            </li>
                            <li class=""><a href="#service-five" data-toggle="tab">WARRANTY</a>
                            </li>
                        </ul>
        
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="service-one">
                                <div class="pad-box">
                                    <h3>Glass</h3>
                                    <div class="clear"></div>
                                    <p>At Adriatic all of our glass productucts are tempered glass, making them much stronger than non-tempered glass, although not unbreakable.</p>
                                    <a href="<?php bloginfo('url');?>/adriatic-care/#glass"><img src="<?php echo get_template_directory_uri(); ?>/images/find-out.jpg"></a>
                                </div>
        
                            </div>
                            
                            <div class="tab-pane fade" id="service-two">
                                <div class="pad-box">
                                    <h3>Timber</h3>
                                    <div class="clear"></div>
                                    <p>As timber is a natural material, every product made from it will have individual characteristics in colour, grain and even natural blemishes from the growth history of the tree, making each piece of timber furniture unique.
                                    </p>
                                    <a href="<?php bloginfo('url');?>/adriatic-care/#timber"><img src="<?php echo get_template_directory_uri(); ?>/images/find-out.jpg"></a>
                                </div>

                             
                            </div>
                            
                            <div class="tab-pane fade" id="service-three">
                                <div class="pad-box">
                                    <h3>Stone</h3>
                                    <div class="clear"></div>
                                    <p>Quartz stone is a product which is about 90% quartz based. This product has outstanding properties to ensure ease of maintenance and longevity of your surfaces.</p>
                                    <a href="<?php bloginfo('url');?>/adriatic-care/#stone"><img src="<?php echo get_template_directory_uri(); ?>/images/find-out.jpg"></a>
                                </div>

                               
                            </div>
                            
                            
                            <div class="tab-pane fade" id="service-four">
                               <div class="pad-box">
                                    <h3>Concrete</h3>
                                    <div class="clear"></div>
                                    <p>Welcome to the new trend of industrial concrete cement. Everyone of our concrete cement peices is hand made creating a timeless look and feel. Each piece is unique in itself and no top is alike adding character to every finish.  
                                    </p>
                                   <a href="<?php bloginfo('url');?>/adriatic-care/#concrete"><img src="<?php echo get_template_directory_uri(); ?>/images/find-out.jpg"></a>
                                </div>
                              
                            </div>
                            
                            
                            <div class="tab-pane fade" id="service-five">
                               <div class="pad-box">
                                    <h3>Warranty</h3>
                                    <div class="clear"></div>
                                    <p>Adriatic Furniture provide a 12-month warranty against faulty workmanship for all products.</p>

        <p>In addition, we are pleased to offer a 10-year frame warranty on new lounges. </p>
                                    <a href="<?php bloginfo('url');?>/warranty"><img src="<?php echo get_template_directory_uri(); ?>/images/find-out.jpg"></a>
                                </div>

                              
                            </div>

                        </div>
                       <?php endif; ?> 
                            

                        </div>                        
                        
                     </div>
                     
                     
                </div>
    </div>
    
    
    <div id="map">   
       <div class="container"> 
         <h2 class="head-location">Locations</h2>
         <div class="col-md-12">
                        
                  <!-- tabs left -->
                  <div class="tabbable tabs-left">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#a" data-toggle="tab">All locations</a></li>
                      <?php if(!(is_single(array( '2541', '2548', '2433', '2542')))): ?><li><a href="#b" data-toggle="tab">Chadstone</a></li><?php endif; ?>
                      <li><a href="#c" data-toggle="tab">Essendon</a></li>
                      <li><a href="#d" data-toggle="tab">Maribyrnong</a></li>
                      <li><a href="#e" data-toggle="tab">Moorabbin</a></li>
                      <li><a href="#f" data-toggle="tab">Nunawading</a></li>
                      <li><a href="#g" data-toggle="tab">Factory Outlet</a></li>
                      <li><a href="#h" data-toggle="tab">Taylors Lakes</a></li>
                      <li><a href="#i" data-toggle="tab">Thomastown</a></li>
                    </ul>
                    
                    <div class="tab-content">
                     <?php if(is_single(array( '2541', '2548', '2433', '2542'))): ?> 
                     <div class="tab-pane active" id="a"><iframe src="https://www.google.com/maps/d/embed?mid=1WbPq2O4hOkFH_A80nM0vuIVB5FI" width="100%" height="401"></iframe></div>
                     <div class="tab-pane" id="c"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3155.3829741716395!2d144.90315111531646!3d-37.734158679766864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65c77f0ef6a51%3A0x32cae6134c4933ad!2sAdriatic+Furniture+Essendon!5e0!3m2!1sen!2sph!4v1445227468862" width="100%" height="401" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                     <div class="tab-pane" id="d"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.793368239638!2d144.88221131531756!3d-37.771442979760025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65dcede5c2c0b%3A0x94be632258c7b4d8!2sAdriatic+Furniture+Maribyrnong!5e0!3m2!1sen!2sph!4v1445227638141" width="100%" height="401" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                     <div class="tab-pane" id="e"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3146.6071134627628!2d145.03641831532246!3d-37.93960797972975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad66eb0236a8b87%3A0xa0209aeed6f413ab!2sAdriatic+Furniture+Moorabbin!5e0!3m2!1sen!2sph!4v1445228041829" width="100%" height="401" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                     <div class="tab-pane" id="f"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8054483766737!2d145.17292231469932!3d-37.81802574205905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad638da13f18575%3A0xed05180e1bb03188!2sAdriatic+Furniture+Nunawading!5e0!3m2!1sen!2sph!4v1445228159457" width="100%" height="401" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                     <div class="tab-pane" id="g"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3154.852110643134!2d145.03090710000004!3d-37.74661359999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad6443681d2cf59%3A0xa90996ed22a0e9cc!2s78-82+Chifley+Dr%2C+Preston+VIC+3072%2C+Australia!5e0!3m2!1sen!2sph!4v1495706817189" style="border:0" allowfullscreen="" width="100%" height="401" frameborder="0"></iframe></div>
                     <div class="tab-pane" id="h"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3156.995435935677!2d144.7688563146943!3d-37.69630623510324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad6f5fae282208d%3A0xba60b974e7e2314f!2sAdriatic+Furniture+Taylors+Lakes!5e0!3m2!1sen!2sph!4v1445228706354" width="100%" height="401" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                     <div class="tab-pane" id="i"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3157.3673926431934!2d145.02367061531515!3d-37.687569979775404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad64f72dc34d53b%3A0x9f00308eb620a90c!2sAdriatic+Furniture+Thomastown!5e0!3m2!1sen!2sph!4v1445228786165" width="100%" height="401" frameborder="0" style="border:0" allowfullscreen></iframe></div>

                    <?php else: ?>
                    <div class="tab-pane active" id="a"><iframe src="https://www.google.com/maps/d/embed?mid=1WbPq2O4hOkFH_A80nM0vuIVB5FI" width="100%" height="453"></iframe></div>
                      <div class="tab-pane" id="b"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3149.28368178495!2d145.08980331532064!3d-37.87704797974096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad66a7e335ef5c9%3A0x487267cc19cdc82a!2sAdriatic+Furniture+Chadstone!5e0!3m2!1sen!2sph!4v1445227266737" width="100%" height="453" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                     <div class="tab-pane" id="c"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3155.3829741716395!2d144.90315111531646!3d-37.734158679766864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65c77f0ef6a51%3A0x32cae6134c4933ad!2sAdriatic+Furniture+Essendon!5e0!3m2!1sen!2sph!4v1445227468862" width="100%" height="453" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                     <div class="tab-pane" id="d"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.793368239638!2d144.88221131531756!3d-37.771442979760025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65dcede5c2c0b%3A0x94be632258c7b4d8!2sAdriatic+Furniture+Maribyrnong!5e0!3m2!1sen!2sph!4v1445227638141" width="100%" height="453" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                     <div class="tab-pane" id="e"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3146.6071134627628!2d145.03641831532246!3d-37.93960797972975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad66eb0236a8b87%3A0xa0209aeed6f413ab!2sAdriatic+Furniture+Moorabbin!5e0!3m2!1sen!2sph!4v1445228041829" width="100%" height="453" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                     <div class="tab-pane" id="f"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8054483766737!2d145.17292231469932!3d-37.81802574205905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad638da13f18575%3A0xed05180e1bb03188!2sAdriatic+Furniture+Nunawading!5e0!3m2!1sen!2sph!4v1445228159457" width="100%" height="453" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                     <div class="tab-pane" id="g"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3154.852110643134!2d145.03090710000004!3d-37.74661359999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad6443681d2cf59%3A0xa90996ed22a0e9cc!2s78-82+Chifley+Dr%2C+Preston+VIC+3072%2C+Australia!5e0!3m2!1sen!2sph!4v1495706817189" style="border:0" allowfullscreen="" width="100%" height="453" frameborder="0"></iframe></div>
                     <div class="tab-pane" id="h"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3156.995435935677!2d144.7688563146943!3d-37.69630623510324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad6f5fae282208d%3A0xba60b974e7e2314f!2sAdriatic+Furniture+Taylors+Lakes!5e0!3m2!1sen!2sph!4v1445228706354" width="100%" height="453" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                     <div class="tab-pane" id="i"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3157.3673926431934!2d145.02367061531515!3d-37.687569979775404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad64f72dc34d53b%3A0x9f00308eb620a90c!2sAdriatic+Furniture+Thomastown!5e0!3m2!1sen!2sph!4v1445228786165" width="100%" height="453" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                     <?php endif; ?>
                    </div>
                  </div>
                  <!-- /tabs -->
       
          </div>
       </div>
    </div>
    
    

    <!-- Page Content -->
    <div id="darkgray">
    <div class="container">
        <!-- Portfolio Section -->
        <div class="row sofas">
            <div class="col-lg-12">
    <?php $category = get_the_category( $post->ID ); ?>
                <h2 class="single-header">Other <?php echo $category[0]->cat_name; ?></h2>
            </div>
            
            <div class="col-lg-12">
              <?php 

              query_posts(array( 
                  'post_type' => 'products',
                  'showposts' => 3,                               'category_name' => $category[0]->cat_name,
              ) );  
              ?>
              <?php while (have_posts()) : the_post(); ?>
                <div class="col-md-4 col-sm-6">
                  <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('post-thumbnail', array( 'class' => "img-responsive img-portfolio img-hover")); ?></a>
                        <h3><?php the_title(); ?></h3>
              </div>

              <?php endwhile;?>
           
            </div>
        </div>
        <!-- /.row -->
        </div>
        </div>
     

<?php get_footer(); ?>