
<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<section class="single-product">
<?php while ( have_posts() ) : the_post(); ?>

    <div class="journal-stuff ">

            <div class="journal-contenedor">
                    <div class="left-product-field">
                            <?php the_post_thumbnail("big");?>
                    </div>
                    <div class="right-product-field">
                            <h2><?php the_title();?></h2>
                            <p><?php echo CFS()->get( 'price' );?></p>
                            <p><?php the_content();?></p>
                    </div>
            </div>

			
    </div>
<?php endwhile; ?>
			
</section>

	
		

<?php get_footer(); ?>
