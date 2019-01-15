
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
                            <p class="subtitle-product"><?php echo CFS()->get( 'price' );?></p>
                            <p><?php the_content();?></p>
                            
                            <a class="btn-journal" href=""><i class="fab fa-facebook-f" aria-hidden="true"></i>LIKE</a>
                                <a class="btn-journal" href=""><i class="fab fa-twitter" aria-hidden="true"></i>TWEET</a>
                                <a class="btn-journal" href=""><i class="fab fa-pinterest" aria-hidden="true"></i>PIN</a>
                     </div>   
             </div>     
     </div>
<?php endwhile; ?>

                                  
  
			
</section>

                      
                   

	
		

<?php get_footer(); ?>
