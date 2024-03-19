<?php
/**
 * The footer
 *
 * @package Bathe
 */

?>
</main>

<footer class="footer">
	<div class="container grid cols-md-2">
		<p class="copyright">© Copyright <?php echo Date('Y'); ?>.</p>
		<?php get_template_part('template-parts/socials'); ?>
	</div>
</footer>

<?php get_template_part('template-parts/modal'); ?>

<?php wp_footer(); ?>
</body>
</html>
