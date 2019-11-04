<?php
/**
 * Template Name: About
 */
get_header();
?>

<div class="about">
	<div class="container">
		<?php if(have_posts()): ?>
			<?php the_post(); ?>
			<?php the_content(); ?>

			<?php else: ?>
		<?php endif; ?>

	</div>
</div>


<?php get_footer(); ?>
