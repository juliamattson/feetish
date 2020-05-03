<?php
/**
 * The template for displaying our shops. Copy from fullwidth.
 *
 * Template Name: Butiker
 *
 * @package storefront
 */

get_header();
?>





	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

    <?php
		$args = array(  
        'post_type' => 'butikerna',
        'post_status' => 'publish',
        'posts_per_page' => 5, 
        'orderby' => 'title', 
        'order' => 'ASC', 
    );

    $loop = new WP_Query( $args ); 
		
	
	/* Looping ACF for shops */
	while ( $loop->have_posts() ) : $loop->the_post();  
		/* Saving ACF in variables */
		$shop_name = get_the_title();
		$shop_hours = get_field('oppettider');
		$shop_adress = get_field('adress');
		$shop_map = get_field('karta');


		echo '<h1>' . '<a href="' . get_the_permalink() . '">' . $shop_name . '</h1>';
		echo '<p>' . $shop_hours . '</p>';
		echo '<p>' . $shop_adress . '</p>';
		echo $shop_map;
		echo '<br><br>' . '<hr>';


	
		 
    endwhile;

    wp_reset_postdata(); 
 	?>

								


		</main><!-- #main -->
	</div><!-- #primary -->


<?php
do_action( 'storefront_sidebar' );
get_footer();
