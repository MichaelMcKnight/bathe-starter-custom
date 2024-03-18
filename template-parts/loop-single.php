<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>

		<article <?php post_class('py-3 py-md-5'); ?>>
			<div class="container">
				<h2>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h2>
			</div>
			<?php the_content(); ?>
		</article>
	<?php endwhile; ?>
<?php endif;
