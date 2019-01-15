<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<section class="single-post-section">
	<div class="journal-stuff">
		<?php while ( have_posts() ) : the_post(); ?>

		<div class="contenedor-post">
			<div class="foto-post">
				<?php the_post_thumbnail("big");?>
				<div class="contenedor-title">
					<h2><?php the_title() ?></h2>
				</div>
			
				<div class="contenedor-subtitle">
				<?php the_date() ?><span> by </span>  <?php the_author() ?>
				<?php echo get_comments_number() ?>
					</div>
			</div>

			<div class="contenedor">
				 <?php the_content() ?>
				 
				 <p>POSTED IN →</p><p>TAGGED IN →</p>
				 <a class="btn-journal" href=""><i class="fab fa-facebook-f" aria-hidden="true"></i>LIKE</a>
                                <a class="btn-journal" href=""><i class="fab fa-twitter" aria-hidden="true"></i>TWEET</a>
                                <a class="btn-journal" href=""><i class="fab fa-pinterest" aria-hidden="true"></i>PIN</a>
                     
			</div>
					
					<?php the_post_navigation(); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // End of the loop. ?>
					

			</div>
		
			
		
		<div class="sidebar-right">
		<?php get_sidebar(); ?>
		</div>		 
	</div>

	</div>	
<!--< get_template_part( 'template-parts/content', 'single' ); ?>-->
           
           

</section>

<?php get_footer(); ?>
