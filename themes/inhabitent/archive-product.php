<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	

<section class="journal-stuff dashed-line">
        <h1 class="archive-product-title" >SHOP STUFF</h1>

        <div class="journal-contenedor archive-product-menu">
          
        <?php 
        $args = array(
            'taxonomy'         => 'product-type', 
            'hide_empty'       => false,
            'order'             => 'ASC', 
            'offset'            => '0',
            'posts_per_page'     => 4);
        
        $tax_names = get_terms($args);
        ?>

        <?php foreach ( $tax_names as $term) : setup_postdata( $term);?>

       <div>
        <p><a href="<?php echo get_term_link($term);?>">
        <?php echo $term->name;?> </a></p>
        </div>  
        
        <?php endforeach; wp_reset_postdata();?>
</div>
</section>

<!--posts-->

<section class="journal-stuff">
<?php 
        $args = array(
            'post_type'         => 'product', 
            'order'             => 'ASC', 
            'offset'            => '0',
            'posts_per_page'     => -1);
        $product_posts = get_posts($args);
        ?>
   <div class="grid-container">
        <?php foreach ( $product_posts as $post) : setup_postdata( $post);?>
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
        <?php endforeach; // End of the loop. ?>
        
		
	</div>

</section>

<?php get_footer(); ?>
