

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

<section>

<?php while ( have_posts() ) : the_post(); ?>

<?php the_post_thumbnail("big");?>

</section>


<!--========
About
=========-->

<section class="journal-stuff about-wrap">
   <?php the_title('<h1>','</h1>');?>


			<?php get_template_part( 'template-parts/content', 'page' ); ?>

	<?php endwhile; // End of the loop. ?>

   
</section>





<?php get_footer(); ?>
