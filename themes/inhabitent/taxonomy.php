<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


		

		<?php if ( have_posts() ) : ?>

			<header class="page-header-archive journal-stuff dashed-line">
							
			<h1><?php $queried_object = get_queried_object();
                    echo $queried_object ->name;?></h1>
                <?php
				    the_archive_description( '<p>', '</p>' );
				?>
			</header><!-- .page-header -->
			<section class="journal-stuff">
			<?php /* Start the Loop */ ?>
			<div class="grid-container">

			
			<?php while ( have_posts() ) : the_post(); ?>

			<a href="<?php the_permalink()?>"><div class="border-product-field">
            <div class="top-product-field">
                    <?php the_post_thumbnail("medium");?>
            </div>
            <div class="bottom-product-field">
			        <p><?php the_title();?></p>
                    <p>..........................</p>
                    <p><?php echo CFS()->get( 'price' );;?></p>
            </div>
        </div></a>

			<?php endwhile; ?>
			</div>
			</section>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
