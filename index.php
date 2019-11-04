<?php get_header(); ?>

<div class="index">
    <div class="container">
        <div class="index-content">
            <?php $index_posts = new WP_Query([
				'posts_per_page' => 15
            ]); ?>
            <?php if($index_posts->have_posts()): ?>
                <?php while($index_posts->have_posts()): ?>
                    <?php $index_posts->the_post(); ?>
						<div class="index__item">
							<div class="index__image">
								<?php
								echo kama_thumb_img( array(
									'w' => 350,
								) );
								?>

							</div>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php
								$content = get_the_content();
								$trimmed_content = wp_trim_words( $content, 20, '<a href="'. get_permalink() .'"> ...</a>' );
								echo $trimmed_content;
							?>
						</div>
                <?php endwhile; ?>
                <?php else: ?>
            <?php endif; ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>
