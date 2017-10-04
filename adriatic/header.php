<?php
/** 
* The Header for our theme. 
* Displays all of the <head> section 
* 
*/?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="emJPh48AwkukfRX8-CCp_65bEqOkH9FUrqIoj08vrkc" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<link rel="icon" href="<?php bloginfo('url'); ?>/wp-content/uploads/2016/08/adriatic-favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php bloginfo('url'); ?>/wp-content/uploads/2016/08/adriatic-favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="http://www.adriatic.com.au/wp-content/themes/adriatic/font-awesome/css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" href="http://www.adriatic.com.au/wp-content/themes/adriatic/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="http://www.adriatic.com.au/wp-content/themes/adriatic/css/modern-business.css" type="text/css" />
<script src="http://www.adriatic.com.au/wp-includes/js/wp-emoji-releases.min.js?ver=4.6.1"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        
    <![endif]-->
   <?php wp_head(); ?>
  
</head>

<body class="<?php if(is_single()):echo 'single-product'; endif;?>">
    <div class="container">
    <div id="logo">
     <a class="logo" href="<?php bloginfo('url'); ?>"><img src="/wp-content/uploads/2016/11/home-logo.jpg" alt="Adriatic"></a>
    </div>
   <div id="top-nav">
         <?php                         
                $tops = array(                            
                'theme_location'  => 'top-menu',  
                'container'       => '',                                                       
                'items_wrap'      => '<ul>%3$s</ul>'  
                );                        
                wp_nav_menu( $tops );                         
        ?>
<?php get_search_form(); ?>
      </div>
    </div>
    
    <!-- Navigation -->
    <nav class="navbar navbar-inverse homepage" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

                <?php                         
                        $defaults = array(                            
                        'theme_location'  => 'main-menu',                                                         
                        'menu_class'     => 'nav navbar-nav navbar-right',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker()
                        );                        
                        wp_nav_menu( $defaults );                         
                ?>

                

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>