<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Electro
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'electro' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="account-header grid-x red">
			<div class="account-info cell large-6 large-offset-6 pink">
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'electro' ); ?></button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-primary',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
				</nav><!-- #site-navigation -->
			</div>
		</div>
		<div class="logo-header grid-x blue align-middle">
			<div class="logo cell large-2 paleblue">
				<?php
				the_custom_logo();
				?>
			</div>
			<div class="search cell large-5 large-offset-2 paleblue">Search</div>
			<div class="cart cell large-2 large-offset-1 paleblue">Cart</div>
		</div>
		<div class="category-header grid-x align-center pink">
			<div class="categories cell large-8 red"></div>
		</div>
	</header><!-- #masthead -->
