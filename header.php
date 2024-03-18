<?php
/**
 * The header
 *
 * @package Bathe
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class( 'antialiased flex flex-col min-h-screen' ); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
	<div class="container flex align-items-center justify-content-space-between">
		<?php get_template_part('template-parts/brand'); ?>
		<nav
			class="primary-nav"
			aria-label="Primary Navigation">
			<?php echo wp_nav_menu([
				'theme_location' => 'primary_menu',
				'menu_class' => 'menu list-reset flex align-items-center gap-2',
				'container' => 'ul'
			]); ?>
		</nav>
		<?php get_template_part('/template-parts/mobile-menu'); ?>
	</div>
</header>

<main id="main-content">
