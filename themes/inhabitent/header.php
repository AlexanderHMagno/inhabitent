<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
       

	<?php wp_head(); ?>
	</head>

	<body <?php body_class() ?>>

	

	<?php if ( is_front_page() || is_page( 'about' ) ) :?>

	
			<header class="site-header1">
					<div class="container-nav">
						<a href="<?php echo get_bloginfo('url');?>"><img class="logo-top" src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-tent-white.svg"></a>
						<div class="site-header__util">
							<nav class="main-navigation nav-flex">
								<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
										
								<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
									<label>
									
									<span class="screen-reader-text">Search for:</span>
									<i class="fa fa-search search-trigger-white" aria-hidden="true"></i>
									<input type="search" class="search-field" placeholder="TYPE AND HIT ENTER…" value="" name="s" title="Search for:" />
									</label>
						
									<input type="submit" class="search-submit" value="Search" />
						
								</form>
							</nav>          
						</div>
					</div>
			</header>


	<?php else :?>
			
			<header class="site-header2">
					<div class="container-nav">
							<a href="<?php echo get_bloginfo('url');?>"><img class="logo-top" src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-tent.svg"></a>
							<div class="site-header__util">
								<nav class="main-navigation green-color">
									<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
									<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
				
										<label><span class="screen-reader-text">Search for:</span>
											<i class="fa fa-search search-trigger-green" aria-hidden="true"></i>
											<input type="search" class="search-field" placeholder="TYPE AND HIT ENTER…" value="" name="s" title="Search for:" />
										</label>
							
										<input type="submit" class="search-submit" value="Search" />
								
									</form>
								</nav>          
							</div>
					</div>	
			</header>
	<?php endif; ?>


    



