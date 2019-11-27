<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
			
	<div class="logo-image">
	<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" alt="Tent Logo">	
		</div>		
			<main id="main" class="site-main" role="main">
			<?php
		        if ( has_post_thumbnail() ) {
			  		the_post_thumbnail();
			 	}
			?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		
		
		<h1>SHOP STUFF</h1>
<div id="product-type" class="product-types">
	<div class="product-type-do">				 
			<img src="<?php echo get_template_directory_uri(); ?>/images/product-type-icons/do.svg" alt="Do">
			<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
			<p><a href="https://tent.academy.red/product-type/do/" class="btn">Do Stuff</a></p>
			</div>

	<div class="product-type-eat">	
			<img src="<?php echo get_template_directory_uri(); ?>/images/product-type-icons/eat.svg" alt="Eat">
			<p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
			<p><a href="https://tent.academy.red/product-type/eat/" class="btn">Eat Stuff</a></p>
			</div>

	<div class="product-type-sleep">	
			<img src="<?php echo get_template_directory_uri(); ?>/images/product-type-icons/sleep.svg" alt="Sleep">
			<p>Get a good night's rest in the wild in a home away from home that travels well.</p>
			<p><a href="https://tent.academy.red/product-type/sleep/" class="btn">Sleep Stuff</a></p>
			</div>

	<div class="product-type-wear">	
			<img src="<?php echo get_template_directory_uri(); ?>/images/product-type-icons/wear.svg" alt="Wear">
			<p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
			<p><a href="https://tent.academy.red/product-type/wear/" class="btn">Wear Stuff</a></p>
			</div>
		</div>
<h1>INHABITENT JOURNAL</h1>
<div id="journal" class="journal">
	<div class="entry1">
		<img src="<?php echo get_template_directory_uri(); ?>/images/blog-photos/van-camper.jpg" alt="Van Camper">
		<p>Van Camping Photo Contest</p>
		<p><a href="http://localhost:8888/Inhabitent-project/journal/" class="btn">Read Entry</a></p>
		</div>

		<div class="entry2">
		<img src="<?php echo get_template_directory_uri(); ?>/images/blog-photos/warm-cocktail.jpg" alt="Van Camper">
		<p>FIRESIDE LIBATIONS: 3 WARM COCKTAIL RECIPES</p>
		<p><a href="http://localhost:8888/Inhabitent-project/journal/" class="btn">Read Entry</a></p>
		</div>

		<div class="entry3">
		<img src="<?php echo get_template_directory_uri(); ?>/images/blog-photos/healthy-camp-food.jpg" alt="Van Camper">
		<p>HOW TO: EATING HEALTHY MEALS IN THE WILD</p>
		<p><a href="http://localhost:8888/Inhabitent-project/journal/" class="btn">Read Entry</a></p>
		</div>

</div>
	
<h1>LATEST ADVENTURES</h1>
<div id="adventures" class="adventure-stories">
	<div class="story1">
	<img src="<?php echo get_template_directory_uri(); ?>/images/adventure-photos/canoe-girl.jpg" alt="Canoe">
			<p>GETTING BACK TO NATURE IN A CANOE</p>
			<p><a href="http://localhost:8888/Inhabitent-project/latest-adventures/" class="btn">Read Entry</a></p>
	</div>

	<div class="story2">
	<img src="<?php echo get_template_directory_uri(); ?>/images/adventure-photos/beach-bonfire.jpg" alt="Beach Bonfire">
			<p>A NIGHT WITH FRIENDS AT THE BEACH</p>
			<p><a href="http://localhost:8888/Inhabitent-project/latest-adventures/" class="btn">Read Entry</a></p>
	</div>

	<div class="story3">
	<img src="<?php echo get_template_directory_uri(); ?>/images/adventure-photos/mountain-hikers.jpg" alt="Big Mountain">
			<p>TAKING IN THE VIEW AT BIG MOUNTAIN</p>
			<p><a href="http://localhost:8888/Inhabitent-project/latest-adventures/" class="btn">Read Entry</a></p>
	</div>

	<div class="story4">
	<img src="<?php echo get_template_directory_uri(); ?>/images/adventure-photos/night-sky.jpg" alt="Night Sky">
			<p>STAR-GAZING AT THE NIGHT SKY</p>
			<p><a href="http://localhost:8888/Inhabitent-project/latest-adventures/" class="btn">Read Entry</a></p>
	</div>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->

	


<?php get_footer(); ?>
