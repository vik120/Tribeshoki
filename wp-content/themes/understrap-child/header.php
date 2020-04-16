<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory') ?>/fonts/stylesheet.css" /> 
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory') ?>/css/slick.css" /> 
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/jquery.carousel-3d.default.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/animate.css">
      
    <?php wp_head(); ?>

    <script src="<?php bloginfo('stylesheet_directory') ?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory') ?>/js/modernizr.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/js/slick.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory') ?>/js/jquery.resize.js"></script>
    <script src="<?php bloginfo('stylesheet_directory') ?>/js/jquery.waitforimages.js"></script> 
    <script src="<?php bloginfo('stylesheet_directory') ?>/js/jquery.carousel-3d.js"></script>
    <script src="<?php bloginfo('stylesheet_directory') ?>/js/wow.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
     
		$('.instaflex ').slick({
          dots: false,
          infinite: true,
          arrows: false,
          speed: 300,
          slidesToShow: 4,
          slidesToScroll: 4,
          autoplay: true,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
        });


        $('.drinkingway').slick({
    		  
          slidesToShow: 1,
    		  slidesToScroll: 1,
    		  arrows: true, 
    		  dots: false,
    		  autoplay: true,
    		  autoplaySpeed: 2000,

    		});


	})
</script>
</head>
<body  <?php body_class('smooth-scroll-on'); ?>>
<?php if ( has_nav_menu( 'top_menu' ) || get_theme_mod( 'eleganto_socials', 0 ) == 1 ) : ?>
	<div class="rsrc-top-menu ">
		<div class="container">
	        <nav id="site-navigation" class="navbar navbar-inverse" role="navigation">    
				<?php if ( has_nav_menu( 'top_menu' ) ) : ?>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'eleganto' ); ?></span>
							<span class="icon-bar top-bar"></span>
							<span class="icon-bar middle-bar"></span>
							<span class="icon-bar bottom-bar"></span>
						</button>
						<div class="visible-xs navbar-brand"><?php esc_html_e( 'Menu', 'eleganto' ); ?></div>
					</div>
				<?php endif; ?>
				<?php if ( get_theme_mod( 'eleganto_socials', 0 ) == 1 ) : ?>
					<div class="top-section nav navbar-nav navbar-right">
						<?php eleganto_social_links();  ?>                 
					</div>
				<?php endif; ?>
				<?php
				wp_nav_menu( array(
					'theme_location'	 => 'top_menu',
					'depth'				 => 3,
					'container'			 => 'div',
					'container_class'	 => 'collapse navbar-collapse navbar-1-collapse',
					'container_id'		 => 'top-navbar',
					'menu_class'		 => 'nav navbar-nav',
					'fallback_cb'		 => 'wp_bootstrap_navwalker::fallback',
					'walker'			 => new wp_bootstrap_navwalker() )
				);
				?>
	        </nav>
		</div>
	</div>
<?php endif; ?>

 <div class="rsrc-main-menu">
    <div class="rsrc-main-menuin">
      <div class="container"> 
        <nav id="main-navigation" class="navbar navbar-expand-md navbar-inverse" role="navigation">
            <?php if ( 'container' == $container ) : ?>
                <div class="container">
            <?php endif; ?>

                 
                <div class="rsrc-header-img navbar-brand">
                    <h1 class="site-title">
                        
                    
                    <?php if ( ! has_custom_logo() ) { ?>

                        <?php if ( is_front_page() && is_home() ) : ?>

                            <h1 class=" mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

                        <?php else : ?>

                            <a class="" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

                        <?php endif; ?>


                    <?php } else {
                        the_custom_logo();
                    } ?> 
                    </h1>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                    <?php wp_nav_menu(
                        array(
                            'theme_location'  => 'primary',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'navbarNavDropdown',
                            'menu_class'      => 'navbar-nav ml-auto',
                            'fallback_cb'     => '',
                            'menu_id'         => 'main-menu',
                            'depth'           => 2,
                            'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                        )
                    ); ?>
            <?php if ( 'container' == $container ) : ?>
            </div> 
            <?php endif; ?>

        </nav> 

    </div>
    </div>
</div>
 

