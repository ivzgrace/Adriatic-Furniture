<?php
/**
 * The template for contact page
 *
 * Template Name: Contact
 *
 * @package adriatic
 * @since adriatic 1.0
 */

 
get_header(); ?>
 <!-- Header Carousel -->
 <?php if(is_page(19)):?>
    <header id="header-banner" class="bg-content">
       <?php putRevSlider( 'contact' ); ?>
    </header>
<?php else: ?>
    <header id="header-banner" class="bg-content hire post-<?php the_ID(); ?>">
       <div class="container">
         <div class="col-lg-12">
                 <div class="col-md-9">
                 <h2>Contact Us</h2>
                 
                 </div>
                 <div class="col-md-3"></div>
         </div>
                
        </div>
    </header>
<?php endif; ?> 
<div id="content-box">
    <div class="container">
        <!-- Page Content -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>

        <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?> 

        <!-- /.row -->
    </div>
</div>
<div id="map" style="padding-top:10px">   
       <div class="container"> 
         <h2 class="head-location">Locations</h2>
         <div class="col-md-12">
                        
                 <!-- tabs left -->
                  <div class="tabbable tabs-left">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#a" data-toggle="tab">All locations</a></li>
                      <li><a href="#b" data-toggle="tab">Chadstone</a></li>
                      <li><a href="#c" data-toggle="tab">Essendon DFO</a></li>
                      <li><a href="#d" data-toggle="tab">Maribyrnong</a></li>
                      <li><a href="#e" data-toggle="tab">Moorabbin</a></li>
                      <li><a href="#f" data-toggle="tab">Nunawading</a></li>
                      <li><a href="#g" data-toggle="tab">Taylors Lakes</a></li>
                      <li><a href="#h" data-toggle="tab">Thomastown</a></li>
                      <li><a href="#i" data-toggle="tab">Factory Outlet</a></li>
                    </ul>
                    
                    <div class="tab-content">
                     <div class="tab-pane active" id="a"><iframe src="https://mapsengine.google.com/map/embed?mid=zsG1wczW6uB8.kOKvCa8HW7Xo" width="100%" height="453"></iframe></div>
                     <div class="tab-pane" id="b"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3149.28368178495!2d145.08980331532064!3d-37.87704797974096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad66a7e335ef5c9%3A0x487267cc19cdc82a!2sAdriatic+Furniture+Chadstone!5e0!3m2!1sen!2sph!4v1445227266737" width="100%" height="453" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                     <div class="tab-pane" id="c"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3155.3829741716395!2d144.90315111531646!3d-37.734158679766864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65c77f0ef6a51%3A0x32cae6134c4933ad!2sAdriatic+Furniture+Essendon!5e0!3m2!1sen!2sph!4v1445227468862" width="100%" height="453" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                     <div class="tab-pane" id="d"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.793368239638!2d144.88221131531756!3d-37.771442979760025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65dcede5c2c0b%3A0x94be632258c7b4d8!2sAdriatic+Furniture+Maribyrnong!5e0!3m2!1sen!2sph!4v1445227638141" width="100%" height="453" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                     <div class="tab-pane" id="e"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3146.6071134627628!2d145.03641831532246!3d-37.93960797972975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad66eb0236a8b87%3A0xa0209aeed6f413ab!2sAdriatic+Furniture+Moorabbin!5e0!3m2!1sen!2sph!4v1445228041829" width="100%" height="453" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                     <div class="tab-pane" id="f"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8054483766737!2d145.17292231469932!3d-37.81802574205905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad638da13f18575%3A0xed05180e1bb03188!2sAdriatic+Furniture+Nunawading!5e0!3m2!1sen!2sph!4v1445228159457" width="100%" height="453" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                     <div class="tab-pane" id="g"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3156.995435935677!2d144.7688563146943!3d-37.69630623510324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad6f5fae282208d%3A0xba60b974e7e2314f!2sAdriatic+Furniture+Taylors+Lakes!5e0!3m2!1sen!2sph!4v1445228706354" width="100%" height="453" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                     <div class="tab-pane" id="h"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3157.3673926431934!2d145.02367061531515!3d-37.687569979775404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad64f72dc34d53b%3A0x9f00308eb620a90c!2sAdriatic+Furniture+Thomastown!5e0!3m2!1sen!2sph!4v1445228786165" width="100%" height="453" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                     <div class="tab-pane" id="i"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3154.852110643134!2d145.03090710000004!3d-37.74661359999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad6443681d2cf59%3A0xa90996ed22a0e9cc!2s78-82+Chifley+Dr%2C+Preston+VIC+3072%2C+Australia!5e0!3m2!1sen!2sph!4v1495706817189" width="100%" height="453" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                    </div>
                  </div>
                  <!-- /tabs -->
       
          </div>
       </div>
    </div>
<?php get_footer(); ?>
        
        