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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				
				<div class="site-branding">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-tent-white.svg" alt="Tent Logo">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div><!-- .site-branding -->


				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->



			</header><!-- #masthead -->

			
		
			
				


			<div id="content" class="site-content">

			<div class="front-page-top-container">
<?php // check if the post has a Post Thumbnail assigned to it.

// 1. check if is front page
// 2. if is front page, check if there is thumbnail
// 3. if is front page, if there is thumbnail, get thumbnail (featured image)
// 		3.1. make a parent <div> so we can use position: relative;
//		3.2.  make child <div> so we can use position: absolute for full logo
// 		3.3. make another child <div> for the thumbnail

if ( is_front_page ()):
	if (has_post_thumbnail ()): ?>
		<div class="front-page-banner">
			 <img class="logo-circle" src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" alt="inhabitent logo">
		
			<?php
				the_post_thumbnail( 'large' , [
					'class'=>'front-page-banner-image'
				]);
			?>
		
		</div>
	
	<?php endif;
endif; ?>	

</div>
			
