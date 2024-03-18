<nav class="mobile-nav">
	<button
	id="mobile-menu-trigger"
	class="hamburger hamburger--squeeze"
	type="button"
	aria-label="Menu"
	aria-controls="mobile-menu"
	aria-expanded="false">
		<span class="hamburger-box">
		<span class="hamburger-inner"></span>
		</span>
	</button>

  <div id="mobile-menu" class="mobile-menu">
  	<?php echo wp_nav_menu([
		'theme_location' => 'primary_menu',
		'menu_class' => 'menu list-reset flex align-items-center gap-2',
		'container' => 'ul'
	]); ?>
  </div>
</nav>
