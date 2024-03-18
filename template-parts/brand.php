<?php
  $custom_logo = get_theme_mod('custom_logo');
?>
<div class="brand">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <?php if ($custom_logo) :
		echo wp_get_attachment_image($custom_logo, 'full margin-0');
	else :
		echo '<h2>' . bloginfo( 'name' ) . '</h2>';
	endif; ?>
  </a>
</div>
