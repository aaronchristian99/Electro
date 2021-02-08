<?php
/**
 * Template Name: Contact
 * The template for displaying about page
 *
 * This is the template that displays about page by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Electro
 */

get_header();
?>

	<!-- <main id="primary" class="site-main">
		<section class="slider grid-x red">
			<div class="img-container cell large-12">

			</div>
		</section>

		<section class="grid-container">
			<div class="weekly-deals grid-x">
				<div class="entry-title large-12">Weekly Deals</div>
				<div class="card item-container darkgrey">
					<div class="item-img grey">Item Image</div>
					<div class="card-section item-info white">Item Info</div>
				</div>
				<div class="card item-container darkgrey">
					<div class="item-img grey">Item Image</div>
					<div class="card-section item-info white">Item Info</div>
				</div>
				<div class="card item-container darkgrey">
					<div class="item-img grey">Item Image</div>
					<div class="card-section item-info white">Item Info</div>
				</div>
				<div class="card item-container darkgrey">
					<div class="item-img grey">Item Image</div>
					<div class="card-section item-info white">Item Info</div>
				</div>
			</div>
		</section> -->

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
