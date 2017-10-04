<div id="subscribe">
        
           <div class="container">
           <!-- Call to Action Section -->
                <div class="well">
                    <div class="row">
                        <div class="col-md-8">
                           <div class="want"><span>Love Adriatic? Get our emails</span>
<?php echo do_shortcode('[mc4wp_form]'); ?> </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="follow"><span>Follow Us </span> <div class="soc"><a href="https://www.facebook.com/adriaticfurnitureonline/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/fb.png"></a><a href="https://www.instagram.com/adriatic.furniture/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/inst.png"></a><a href="https://twitter.com/adriatic_melb" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/tw.png"></a><a href="https://au.pinterest.com/adriaticaus/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/pinterest.png"></a><a href="https://www.youtube.com/channel/UCHpe6Nq5iAEeXxEXZkWlnwg" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/yt.png"></a></div></div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        
        <div id="footer-widget">
             <div class="container">
                   <?php   if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-link') ) : ?> <?php endif; ?> 
             </div>
        </div>
        
        
        <div id="footer-area">
                <div class="container">
                <!-- Footer -->
                <footer>
                    <div class="row">
                        <div class="col-lg-12">
                            <p>© 2017 Adriatic Furniture Store. SEO by <a href="https://www.wadecockfield.com.au/seo-melbourne/" target="_blank">Wade Cockfield SEO Melbourne</a>. All Rights Reserved</p>
                        </div>
                    </div>
                </footer>
                </div>
        </div>
        <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
 
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })

   jQuery(document).ready(function(){
	jQuery("a#inquirebtn").click(function(){
		var hreflink = jQuery(this).attr('href');
		alert(hreflink);
		if(hreflink == "#" || hreflink == undefined){
    		e.preventDefault();
    	}
	});
});
   </script>

   
<?php wp_footer(); ?>

</body>

</html>
