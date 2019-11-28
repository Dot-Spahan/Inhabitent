<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header();

if ( is_page ('About')):
	if (has_post_thumbnail ()): ?>
		<div class="about-page-banner">
		
			<?php
				the_post_thumbnail( 'large' , [
					'class'=>'about-page-banner-image',
				]);
			?>
		
		</div>
	
	<?php endif;
endif; ?>

	<div id="primary" class="content-area about-tent">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
    </div><!-- #primary -->
   

<?php get_footer(); ?>
