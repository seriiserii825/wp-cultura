<?php get_header(); ?>

<div class="container">
    <div class="page-single">
        <div class="page-single__content">
            <h1><?php the_title(); ?></h1>

			<?php if (have_posts()): ?>
				<?php the_post(); ?>
                <div class="page-index__image">
					<?php
					$img = kama_thumb_img(array('w' => 650,));
					$img_url = get_the_post_thumbnail_url($post->ID, 'full');
					?>
                    <a href="<?php echo $img_url; ?>">
						<?php echo $img; ?>
                    </a>

                </div>

				<?php the_content(); ?>

			<?php else: ?>
			<?php endif; ?>
        </div>

        <div class="sidebar-single">
            <h2><?php echo carbon_get_theme_option('crb_sidebar_title'.get_lang()); ?></h2>
            <?php $last_posts = new WP_Query([
                'posts_per_page' => 10
            ]); ?>
            <ul class="last-posts">
                <?php if($last_posts->have_posts()): ?>
                	<?php while($last_posts->have_posts()): ?>
                		<?php $last_posts->the_post(); ?>
                        <?php
                            $category = get_the_category()[0];
                            $cat_name = $category->name;
                        ?>
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <span><?php the_title(); ?></span>
                                <span>(<?php echo $cat_name; ?>)</span>
                            </a>
                        </li>
                	<?php endwhile; ?>
                	<?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>

<?php get_footer(); ?>

