<?php get_header(); ?>

<div class="index">
	<?php $slider = new WP_Query([
		'post_type' => 'slider',
		'posts_per_page' => -1
	]); ?>

	<?php if ($slider->have_posts()): ?>
        <div class="slider-wrap">
            <h1 class="slider-title"><?php the_field('index_slider_title', 176); ?></h1>
            <div class="slider" id="js-slider">
				<?php while ($slider->have_posts()): ?>
					<?php $slider->the_post(); ?>
                    <div class="slider__item">
                        <img src="<?php echo kama_thumb_src('w=1300 &h=600') ?>" alt="">
                    </div>
				<?php endwhile; ?>
            </div>
        </div>
	<?php else: ?>
        <h1 style="color: red;">Место для слайдера</h1>
	<?php endif; ?>

    <div class="container">
        <div class="main-page-wrap">
            <div class="sidebar sidebar-left">
                <div class="donors-sections">
                    <div class="donors-sections__item">
                        <h2 class="section__title"><?php echo carbon_get_theme_option('crb_donors_title' . get_lang()) ?></h2>

                        <div class="donors">
							<?php $images = carbon_get_theme_option('crb_donors_images'); ?>
							<?php foreach ($images as $image): ?>
                                <div class="donors__item">
                                    <a href="<?php echo $image['crb_donors_link']; ?>" target="_blank">
										<?php echo wp_get_attachment_image($image['crb_donors_image'], 'full'); ?>
                                    </a>
                                </div>
							<?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>


            <div class="main-page-content">
                <!--        publications-->
                <section class="section">
                    <h2 class="section__title">
						<?php $publication_field = get_field('index_publications', 176); ?>
						<?php echo $publication_field; ?>
                    </h2>
					<?php
					$publications_count = carbon_get_theme_option('crb_pulications_count');
					$publication = new WP_Query([
						'posts_per_page' => $publications_count,
						'cat' => 32
					]);
					?>
					<?php if ($publication->have_posts()): ?>
                        <div class="publications">
							<?php while ($publication->have_posts()): ?>
								<?php $publication->the_post(); ?>
                                <a class="publications__item" href="<?php the_permalink(); ?>">
                                    <div class="publications__image">
                                        <img src="<?php echo kama_thumb_src('w=300'); ?>" alt="">
                                    </div>
                                    <h4><?php the_title(); ?></h4>
                                </a>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
                        </div>
					<?php else: ?>
                        <h1 style="color: red;">Posts from publications</h1>
					<?php endif; ?>
                    <div class="read-more-block">
						<?php $publications_link = get_category_link(32); ?>
                        <a href="<?php echo $publications_link; ?>"
                           class="btn read-more"><?php echo esc_html__('Read More', 'bs-diona'); ?></a>
                    </div>
                </section>
                <!--        publications-->

                <!--        projects-->
                <section class="section">
                    <h2 class="section__title"><?php the_field('index_projects', 176); ?></h2>
					<?php
					$projects_count = carbon_get_theme_option('crb_projects_count');
					$project = new WP_Query([
						'posts_per_page' => $projects_count,
						'cat' => 25
					]);
					?>
					<?php if ($project->have_posts()): ?>
                        <div class="publications">
							<?php while ($project->have_posts()): ?>
								<?php $project->the_post(); ?>
                                <a class="publications__item" href="<?php the_permalink(); ?>">
                                    <div class="publications__image">
                                        <img src="<?php echo kama_thumb_src('w=300'); ?>" alt="">
                                    </div>
                                    <h4><?php the_title(); ?></h4>
                                </a>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
                        </div>
					<?php else: ?>
                        <h1 style="color: red;">Posts from projects</h1>
					<?php endif; ?>
                    <div class="read-more-block">
						<?php $publications_link = get_category_link(25); ?>
                        <a href="<?php echo $publications_link; ?>"
                           class="btn read-more"><?php echo esc_html__('Read More', 'bs-diona'); ?></a>
                    </div>
                </section>
                <!--        projects-->

                <!--        last-publications-->
                <section class="section">
                    <h2 class="section__title"><?php the_field('last_publications_from_index', 176); ?></h2>
					<?php
					$last_posts_count = carbon_get_theme_option('crb_last_posts_count');
					$publication = new WP_Query([
						'posts_per_page' => $last_posts_count,
						'cat' => '32,25'
					]);
					?>
					<?php if ($publication->have_posts()): ?>
                        <div class="publications last-posts">
							<?php while ($publication->have_posts()): ?>
								<?php $publication->the_post(); ?>
                                <a class="publications__item" href="<?php the_permalink(); ?>">
                                    <div class="publications__image">
                                        <img src="<?php echo kama_thumb_src('w=300'); ?>" alt="">
                                    </div>
                                    <h4><?php the_title(); ?></h4>
                                </a>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
                        </div>
					<?php else: ?>
                        <h1 style="color: red;">Posts from publications</h1>
					<?php endif; ?>
                </section>
                <!--        last-publications-->
            </div>

            <div class="sidebar sidebar-right">
                <div class="donors-sections__item">
                    <h2 class="section__title"><?php echo carbon_get_theme_option('crb_sponsors_title' . get_lang()) ?></h2>

                    <div class="donors">
				        <?php $images = carbon_get_theme_option('crb_sponsors_images'); ?>
				        <?php foreach ($images as $image): ?>
                            <div class="donors__item">
                                <a href="<?php echo $image['crb_sponsors_link']; ?>" target="_blank">
							        <?php echo wp_get_attachment_image($image['crb_sponsors_image']); ?>
                                </a>
                            </div>
				        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
