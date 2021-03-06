<?php
/**
 * The template for displaying all single posts.
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
<?php parallax_hook_header_after(); ?>
<?php parallax_hook_single_before(); ?>
<div class="content-wrap">
	<?php parallax_hook_single_top(); ?>
	<div class="container">

		<div id="primary" class="content-area
		<?php
		if ( is_active_sidebar( 'sidebar-1' ) ) {
			echo 'col-md-8';
		} else {
			echo 'col-md-12';}
?>
">
			<main itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage" id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) :
				the_post();
?>

				<?php get_template_part( 'content', 'single' ); ?>




			<?php endwhile; ?>

			</main><!-- #main -->
		</div><!-- #primary -->



	</div>
	<?php parallax_hook_single_bottom(); ?>
</div><!-- .content-wrap -->
<?php parallax_hook_single_after(); ?>
<?php get_footer(); ?>
