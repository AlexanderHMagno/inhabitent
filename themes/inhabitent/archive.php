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
                            <?php the_excerpt() ?>
                            <a class="btn-journal" href="<?php the_permalink() ;?>">Read more →</a>
                        </div>
                    </div>
                <?php endwhile; // End of the loop. ?>

            
            
		
			
		
		<div class="sidebar-right">
		<?php get_sidebar(); ?>
		
            </div></div>		 
	</div>

	</div>	
<!--< get_template_part( 'template-parts/content', 'single' ); ?>-->
           
           

</section>

<?php get_footer(); ?>
