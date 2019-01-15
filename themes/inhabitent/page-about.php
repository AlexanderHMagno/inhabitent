<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<!--========
Main Picture
=========-->

<section class="about-photo">

<h1 class="home-logo">About</h1>

</section>


<!--========
About
=========-->

<section class="journal-stuff about-wrap">
   
<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'page' ); ?>

	<?php endwhile; // End of the loop. ?>

   
</section>





<?php get_footer(); ?>
