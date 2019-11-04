<?php get_header(); ?>

<div class="index">
	<div class="container">

        </section>
			<?php if(have_posts()): ?>
                <div class="publications">
				<?php while(have_posts()): ?>
					<?php the_post(); ?>
					<div class="publications__item">
						<div class="publications__image">
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
                    <?php
                    $args = array(
	                    'show_all'     => true, // показаны все страницы участвующие в пагинации
	                    'end_size'     => 1,     // количество страниц на концах
	                    'mid_size'     => 1,     // количество страниц вокруг текущей
	                    'prev_next'    => false,  // выводить ли боковые ссылки "предыдущая/следующая страница".
	                    'prev_text'    => __(''),
	                    'next_text'    => __(''),
	                    'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
	                    'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
	                    'screen_reader_text' => __( 'Posts navigation' ),
                    );
                    ?>
	                <?php the_posts_pagination($args); ?>
                </div>
			<?php else: ?>
			<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>
