<?php
/**
 * Template Name: Contacts
 */
get_header();
?>

<div class="contacts">
    <div class="container">
		<?php if(have_posts()): ?>
			<?php the_post(); ?>
			<?php the_content(); ?>

		<?php else: ?>
		<?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
