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

<section class="home-photo">

<img class="home-logo" src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg">

</section>


<!--========
Shop Stuff
=========-->

<section class="journal-stuff">
    <h1>SHOP STUFF</h1>
    <div class="journal-contenedor">
          
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

       <div class="shop-categories">
       <p><img class="logo-top" src="<?php echo get_template_directory_uri(); ?>/images/product-type-icons/<?echo $term->name.".svg" ;?>"></p>
       <p class="centered"><?php echo $term->description;?></p>
        <p><a class="btn-shop" href="<?php echo get_term_link($term);?>">
        <?php echo $term->name;?> Stuff</a></p>
        </div>  
        
        <?php endforeach; wp_reset_postdata();?>
   
</section>

<!--========
Inhabitent Journal
=========-->

<section class="journal-stuff">
    <h1>INHABITENT JOURNAL</h1>
    <div class="journal-contenedor">
          
        <?php 
        $args = array(
            'post_type'         => 'post', 
            'order'             => 'DSC', 
            'offset'            => '0',
            'posts_per_page'     => 3);
        $product_posts = get_posts($args);
        ?>

        <?php foreach ( $product_posts as $post) : setup_postdata( $post);?>
        <div class="journal-categories">
            <div class="journal-head">
            <?php the_post_thumbnail();?>
            </div>

            <div class="journal-text">
            <span><?php the_date()?> / <?php echo get_comments_number()?> comments</span>
            
            <div class="box-journal-text-space">
                <p><a class="green-color-title" href="<?php the_permalink();?>"><?php the_title()?></a></p>
            </div>
           
            <p><a class="btn-journal" href="<?php the_permalink();?>">Read Entry</a></p>
            </div>
            
        </div>  
        <?php endforeach; wp_reset_postdata();?>
    
    </div>


</section>

<!--========
Lastest Adventures
=========-->

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
    <?php $count = 1;?>
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

    <a class="btn-shop btn-adventure">MORE ADVENTURES</a>

</section>




<?php get_footer(); ?>
