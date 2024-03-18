<?php

	// Grab variables from the Theme Settings.
	$modalSettings = get_field('modal_settings', 'option');
	// You can var_dump the variable to see the array the group renders. var_dump($modalSettings);

	$showModal = $modalSettings['modal_display']['show_modal'];
	$imageOnly = $modalSettings['modal_display']['image_only'];

	$modalHeading = $modalSettings['modal_content']['modal_heading'];
	$modalContent = $modalSettings['modal_content']['modal_content'];
	$modalButton = $modalSettings['modal_content']['modal_button'];
	$modalImage = $modalSettings['modal_content']['modal_image'];

?>

<?php if (is_front_page() && $showModal === true) : ?>
	<div
	id="modal"
	class="modal flex justify-content-center align-items-center"
	role="dialog"
	aria-hidden="true"
	aria-labelledby="modal-title"
	aria-describedby="modal-desc">
		<div class="modal__main">
			<header class="modal__main__header text-align-right">
				<button
				class="modal__main__header__close-button"
				id="modal-close"
				aria-label="Close Modal">
					&times;
				</button>
			</header>
			<div class="modal__main__body <?php echo !$imageOnly && $modalImage ? 'grid cols-md-2' : '' ?>">
				<?php if (!$imageOnly) : ?>
					<div class="modal__main__body__content-wrap order-2 order-md-1 p-3 px-md-3 py-md-5">
						<?php if ($modalHeading) : ?>
							<h2 id="modal__main__body__content-wrap__heading"><?php echo esc_html($modalHeading); ?></h2>
						<?php endif; ?>
						<?php if ($modalContent) : ?>
							<div class="modal__main__body__content-wrap__content">
								<?php echo $modalContent; ?>
							</div>
						<?php endif; ?>
						<?php if ($modalButton) : ?>
							<a
							href="<?php echo esc_url($modalButton['url']); ?>"
							target="<?php echo esc_attr($modalButton['target']); ?>"
							class="btn"
							>
								<?php echo esc_html($modalButton['title']); ?>
							</a>
						<?php endif; ?>
					</div>
					<div class="modal__main__body__image cover-image-wrap-md order-1 order-md-2">
						<?php echo wp_get_attachment_image($modalImage, 'full margin-0'); ?>
					</div>
				<?php else : ?>
					<?php if ($modalButton) : ?>
						<a
						href="<?php echo esc_url($modalButton['url']); ?>"
						target="<?php echo esc_attr($modalButton['target']); ?>"
						>
							<div class="modal__main__body__image-only cover-image-wrap">
								<?php echo wp_get_attachment_image($modalImage, 'full margin-0'); ?>
							</div>
						</a>
					<?php else : ?>
						<p><?php echo __('Please add a url to the Modal Button field.', 'bathe'); ?></p>
					<?php endif; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="modal__bg"></div>
	</div>
<?php endif; ?>
