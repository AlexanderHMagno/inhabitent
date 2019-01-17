<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	



<section class="journal-stuff">

        <h1> LATEST ADVENTURES</h1>
        <?php 
        $args = array(
            'post_type'         => 'adventure', 
            'order'             => 'ASC', 
            'offset'            => '0',
            'posts_per_page'     => 4);
        $product_posts = get_posts($args);
        ?>
        <div class="grid-container">
            <?php $count = 5;?>
            <?php foreach ( $product_posts as $post) : setup_postdata( $post);?>
            <div class="item<?php echo $count ;?>">
                <div class="subtitles-adventures">
                     <h3><a href="<?php the_permalink()?>"><?php the_title();?></a></h3>
                     <a href="<?php the_permalink()?>" class="btn-white">READ MORE</a>
            
                 </div>
            </div>
       
            <?php 
            $count++;
            endforeach;?>
            
		
	    </div>


</section>

<?php get_footer(); ?>
