<?php
/**
 * The template for displaying full width pages.
 *
 * Template Name: Contacts
 *
 * @package storefront
 */

get_header(); ?>

<div id="kontakt" style="float:right;background-color:#b5bbb1;padding:5%; margin-bottom: 5%;">
		<h3>
		Kontakta oss vid frågor eller funderingar.
		</h3>
		<p>
		Vid frågor om t.ex. vårt sortiment eller om du har andra funderingar är du varmt välkommen att höra av dig.  
		Ring oss gärna eller skicka oss ett meddelande från kontaktformuläret. 
		Vi svarar alltid snabbt och vill ge dig den bästa upplevelsen hos oss på Feetish i Göteborg.
		</p>
	
	
	</div>


    <div id="hours" class="content-area" style="width:20%!important; margin-left:2%;margin-top:5%;">
	 <h3>Öppettider:</h3>
		Mån: 08.00-17.00<br>
		Tis: 08.00-17.00<br>
		Ons: 08.00-17.00<br>
		Tors: 08.00-17.00<br>
		Fre: 08.00-17.00<br>
		Lör-Sön <bold style="color:red">STÄNG</bold>
		<br> <br>
	<h3>Hitta till oss:</h3>
		Huvudkontor: <br>
		Kungsportsplatsen 3,  <br>
		41175 Göteborg <br>
		Epost: feetish@company.se <br>
		Telefonnummer: 078877662
	</div>




	<div id="primary" class="content-area" style="width:70%!important;">
		<main id="main" class="site-main" role="main">

    

			<?php 
			while ( have_posts() ) :
				the_post();

				do_action( 'storefront_page_before' );

				get_template_part( 'content', 'page' ); 

				/**
				 * Functions hooked in to storefront_page_after action
				 *
				 * @hooked storefront_display_comments - 10
				 */
				do_action( 'storefront_page_after' );

			endwhile; // End of the loop.     
			?>
		</main><!-- #main -->
   	
		<form method="post">
			Ladda upp en bild:1 <br>
			<input type="file" name="imgUpload" id="imgUpload">
			<input type="submit" value="Ladda upp" accept=".jpg, .jpeg, .png, .pdf" name="submitimg">   <br>
			<span style="font-size:small;">Tillåtna format: .jpg, .jpeg, .png, .pdf </span><br> <br> <br>
			<input type="submit" value="Skicka" name="submit" style="background-color:#616161; color:#FFFFFF;">
		</form>
	</div><!-- #primary -->


<?php
get_footer();
