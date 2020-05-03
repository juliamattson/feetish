<?php
/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		
			$shop_name = get_field('butiksnamn');
			$shop_hours = get_field('oppettider');
			$shop_adress = get_field('adress');
			$shop_map = get_field('karta');
		
			echo '<h1>' . $shop_name . '</h1>';
			echo '<p>' . $shop_hours . '</p>';
			echo '<p>' . $shop_adress . '</p>';
			echo '<iframe id="shop-map">' . $shop_map . '</iframe>';
			echo '<br><br>' . '<hr>';
		

		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();
