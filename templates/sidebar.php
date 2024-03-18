<?php
	/**
	 * Template Name: Show Sidebar
	 */

	 get_header();
?>

<div class="container grid gap-3 cols-md-3 py-3 py-md-5">
	<div class="span-md-2">
		<?php get_template_part('template-parts/loop', 'template-sidebar'); ?>
	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
