<?php
	$social_media_settings = get_field('social_media_settings', 'option');
	$facebook = $social_media_settings['facebook'];
	$twitter = $social_media_settings['twitter'];
	$instagram = $social_media_settings['instagram'];
	$linkedin = $social_media_settings['linkedin'];
	$youtube = $social_media_settings['youtube'];
?>

<?php if ($social_media_settings) : ?>
	<div class="flex align-items-center justify-content-end gap-1">
		<?php if ($facebook) : ?>
			<a href="<?php echo $facebook; ?>" class="text-color-primary"><i class="fa-brands fa-facebook-f"></i></a>
		<?php endif; ?>
		<?php if ($twitter) : ?>
			<a href="<?php echo $twitter; ?>" class="text-color-primary"><i class="fa-brands fa-x-twitter"></i></a>
		<?php endif; ?>
		<?php if ($instagram) : ?>
			<a href="<?php echo $instagram; ?>" class="text-color-primary"><i class="fa-brands fa-square-instagram"></i></a>
		<?php endif; ?>
		<?php if ($linkedin) : ?>
			<a href="<?php echo $linkedin; ?>" class="text-color-primary"><i class="fa-brands fa-linkedin-in"></i></a>
		<?php endif; ?>
		<?php if ($youtube) : ?>
			<a href="<?php echo $youtube; ?>" class="text-color-primary"><i class="fa-brands fa-youtube"></i></a>
		<?php endif; ?>
	</div>
<?php endif; ?>
