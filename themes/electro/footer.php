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
