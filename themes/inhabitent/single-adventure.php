

<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


<section>

		<?php while ( have_posts() ) : the_post(); ?>

				<?php the_post_thumbnail("big");?>

</section>



				<section class="journal-stuff about-wrap">
   						<?php the_title('<h1>','</h1>');?>
						<?php get_template_part( 'template-parts/content', 'page' ); ?>
				</section>
		<?php endwhile; // End of the loop. ?>

   
<?php get_footer(); ?>
