<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<section class="single-post-section">
	<div class="journal-stuff">
		

		<div class="contenedor-post page-contenedor-post">
			
		
		<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<header class="entry-header">
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
	</header><!-- .entry-header -->

	<div style="overflow:hidden;width: 760px;position: relative;"><iframe width="760" height="300" src="https://maps.google.com/maps?width=760&amp;height=300&amp;hl=en&amp;q=1490%20W%20Broadway%2C%20Vancouver%2C%20BC%20V6H%204E8+(RED%20ACADEMY)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 20px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;"><small style="line-height: 1.8;font-size: 8px;background: #fff;">Powered by <a href="https://embedgooglemaps.com/">Embedgooglemaps EN</a> & <a href="http://fbaddlikebutton.com/">Fbaddlikebutton</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><br />

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

	<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
					

			</div>
		
			
		
		<div class="sidebar-right">
		<?php get_sidebar(); ?>
		</div>		 
	</div>

	</div>	
<!--< get_template_part( 'template-parts/content', 'single' ); ?>-->
           
           

</section>

<?php get_footer(); ?>
