<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
		        if ( has_post_thumbnail() ) {
			  		the_post_thumbnail();
			 	}
			?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

<div id="product-type" class="product-container">
			<img src="<?php echo get_template_directory_uri(); ?>/images/product-type-icons/do.svg" alt="Do">
			<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
			<p><a href="https://tent.academy.red/product-type/do/" class="btn">Do Stuff</a></p>
			<img src="<?php echo get_template_directory_uri(); ?>/images/product-type-icons/eat.svg" alt="Eat">
			<p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
			<p><a href="https://tent.academy.red/product-type/eat/" class="btn">Eat Stuff</a></p>
			<img src="<?php echo get_template_directory_uri(); ?>/images/product-type-icons/sleep.svg" alt="Sleep">
			<p>Get a good night's rest in the wild in a home away from home that travels well.</p>
			<p><a href="https://tent.academy.red/product-type/sleep/" class="btn">Sleep Stuff</a></p>
			<img src="<?php echo get_template_directory_uri(); ?>/images/product-type-icons/wear.svg" alt="Wear">
			<p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
			<p><a href="https://tent.academy.red/product-type/wear/" class="btn">Wear Stuff</a></p>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer(); ?>
