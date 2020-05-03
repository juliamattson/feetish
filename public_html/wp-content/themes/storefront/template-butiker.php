<?php
/**
 * The template for displaying full width pages.
 *
 * Template Name: Butiker
 *
 * @package storefront
 */

get_header(); ?>




	<div id="primary" class="content-area" style="width:70%!important;">
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
		echo '<iframe id="shop-map" style="width:500px;height:300px;float:right;">' . $shop_map . '</iframe>';
		echo '<br><br>' . '<hr>';

		// Bug: GoogleMaps inte visas -> API relaterad problem
		// Hämta post metadata -> Custom Post Type ska visas på single-butik.php sida när man trycker på butiksnamn
	
		 
    endwhile;

    wp_reset_postdata(); 
 	?>

								


		</main><!-- #main -->
	</div><!-- #primary -->


<?php
get_footer();
