<?php /* Template Name: CustomPageCroatia */ ?>
<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package parallax-one
 */

	get_header();
?>

	</div>
	<!-- /END COLOR OVER IMAGE -->
	<?php parallax_hook_header_bottom(); ?>
</header>
<!-- /END HOME / HEADER  -->
<div class="country-headcroatia">
<h1> Split, Croatia </h1>
<h2> October 1 - November 4 </h2>
<button class="cbutton"><a href="#jump">Skip To All The Pictures</a></button>
<div id="map" class="gmap">
	<script>

	      function myMap() {
	        var myLatLng = {lat: 43.503518, lng: 16.473974};
					var workspace = {lat: 43.503698, lng: 16.476554};

	        var map = new google.maps.Map(document.getElementById('map'), {
	          zoom: 11,
	          center: myLatLng
	        });

	        var marker = new google.maps.Marker({
	          position: myLatLng,
	          map: map,
	          title: 'My Apartment'
	        });

					var marker = new google.maps.Marker({
						position: workspace,
						map: map,
						title: 'Our Workspace'
					});
	      }
	    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDvzLDpEffbY7cCmDgDuYmr1fVlvEExJM&callback=myMap"></script>
</div>
</div>

<?php parallax_hook_header_after(); ?>

<?php parallax_hook_content_before(); ?>
<div role="main" id="content" class="content-warp">
	<?php parallax_hook_content_top(); ?>
	<div class="container">

		<div id="primary" class="content-area col-md-8">
			<main
			<?php
			if ( have_posts() ) {
				echo 'itemscope itemtype="http://schema.org/Blog"';}
?>
 id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>

					<?php ;/* Start the Loop */ ?>
					<?php
					query_posts ('cat=croatia');
					while ( have_posts() ) :
						the_post();
?>
						<?php parallax_hook_entry_before(); ?>
						<?php

							/*
							 Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );
						?>
						<?php parallax_hook_entry_after(); ?>
					<?php endwhile; ?>



				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->

<div class="gallery">
	<a name="jump"></a>
		<h1> Split, Croatia - Picture Gallery </h1>

		<br></br>
		<?php echo do_shortcode("[URISP id=219]"); ?>
	</div>

		<?php get_sidebar(); ?>

	</div>
	<?php parallax_hook_content_bottom(); ?>
</div><!-- .content-wrap -->
<?php parallax_hook_content_after(); ?>
<?php get_footer(); ?>
