<?php get_header(); ?>

<div class="container">
    <div class="page-single">
        <?php if(have_posts()): ?>
			<?php the_post(); ?>
            <h1><?php the_title(); ?></h1>
	        <?php the_content(); ?>

            <?php else: ?>
        <?php endif; ?>

    </div>
</div>

<?php get_footer(); ?>



