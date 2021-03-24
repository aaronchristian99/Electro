<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Electro
 */

?>

<?php

/**
 * Wordpress WP Custom Query
 */

	$computerandlaptop_args = array(
		'post_type' => 'computer_and_laptop',
		'posts_per_page' => 3
	);

	$computerandlaptop_query = new WP_Query($computerandlaptop_args);

?>
	<div class="grid-x grid-margin-x custom-query-posts align-center align-spaced">
		<?php

		/**
		 * Showing 3 posts using WP Custom Query
		 */

			if($computerandlaptop_query->have_posts()) {
				while($computerandlaptop_query->have_posts()) {
					$computerandlaptop_query->the_post();
					?>
						<div class="cell large-3 medium-3 small-12">
							<div class="card">
								<img class="query-imgs" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
							</div>
							<div class="card-section">
								<h3><?php the_title(); ?></h3>
								<p><?php the_excerpt(); ?></p>
								<p><a href="<?php the_permalink(); ?>">Go to Post ></a></p>
							</div>
						</div>
				<?php
				}
			}
		?>
	</div>

	<footer id="colophon" class="site-footer grid-x">
		<div class="site-info">
			<span class="sep"> &copy; <?php echo gmdate('Y') ?></span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf('Electro' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
