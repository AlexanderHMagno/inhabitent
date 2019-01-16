<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

		</div><!-- #content -->


<footer class="footer-img">

<div class="journal-stuff location-footer-menu">


<?php if ( is_page( 'find-us' ) || is_page( 'journal' )) :?>

		<div class="site-footer__col-one">
			<h3 class="school-logo-text school-logo-text--alt-color">Contact Info</h3>
			<p><a class="site-footer__link" href="#">info@inhabitent.com</a></p>
			<p><a class="site-footer__link" href="#">778-456-7891</a></p>
		</div>

		<div class="site-footer__col-two">
		<h3>Business Hours</h3>
		<p><span class="day-0f-the-week">Monday-Friday </span>9am to 5pm </p>
		<p><span class="day-0f-the-week">Saturday </span>10am to 2pm </p>
		<p><span class="day-0f-the-week">Sunday </span>closed</p>
		</div>

<?php else :?>

		<?php get_sidebar(); ?>

<?php endif; ?>

		<div class="site-footer__col-three">
		<a href="<?php echo get_bloginfo('url');?>"><img class="logo-top" src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg"></a>
	</div><!-- .site-info -->
				
		<div class="site-footer__col-fourth">
		<span>COPYRIGHT © 2019 INHABITENT</span>
		</div>
</div>
</footer>
		
</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
