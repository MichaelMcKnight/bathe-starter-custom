<?php
	$banner_settings = get_field('banner_settings', 'option');
	$show_banner = $banner_settings['show_banner'];
	$banner_content = $banner_settings['banner_content'];
?>

<?php if ($show_banner) : ?>
	<div id="homepage-banner" class="banner position-relative text-align-center pt-1 background-color-primary text-color-white">
		<button id="homepage-banner-close" class="banner__close">&times;</button>
		<?php if ($banner_content) :
			echo $banner_content;
		endif; ?>
	</div>
<?php endif; ?>

