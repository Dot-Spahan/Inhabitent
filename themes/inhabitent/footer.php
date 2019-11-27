
<?php wp_footer(); ?>

<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

	</div><!-- #content -->
			

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-inner">
					<div class="contact-info">
						<h2>Contact Info</h2>
						<p>info@inhabitent.com</p>
						<p>778-456-7891</p>

					</div>

					<div class="business-hours">
						<h2>Business Hours</h2>
						<p>Monday to Friday 9am - 5pm</p>
						<p>Saturday 10am - 2pm</p>
						<p>Sunday Closed</p>
					</div>

					<div class="footer-logo-wrapper">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" alt="inhabitent logo">
					</div>
				</div>

				<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		

	</body>
</html>
