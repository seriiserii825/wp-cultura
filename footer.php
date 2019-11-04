<footer>
    <div class="container footer">
        <div class="row">
            <div class="col-lg-3">
                <div class="adrestwo">
                    <h3 class="footer__title">
                        <strong><?php bloginfo('name'); ?></strong>
                    </h3>
                    </em>
                    </span>

                    <div class="phone">
		                <?php $phone = get_field('phone', 176); ?>
                        <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="adrestwo">
                    <h3 class="footer__title"><?php the_field('footer_menu', 176); ?></h3>

					<?php wp_nav_menu([
						'theme_location' => 'menu-footer',
						'menu' => '',
						'container' => 'nav',
						'container_class' => 'sm-center',
						'container_id' => 'bottommenu',
						'menu_class' => 'list-inline',
						'menu_id' => '',
						'echo' => true,
						'fallback_cb' => 'wp_page_menu',
						'before' => '',
						'after' => '',
						'link_before' => '',
						'link_after' => '',
						'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth' => 0,
						'walker' => '',
					]); ?>
                </div>
            </div>

            <div class="col-lg-6">
                <h3 class="footer__title"><?php the_field('footer_our_contacts', 176); ?></h3>
		        <?php echo do_shortcode('[yamap center="47.0301,28.8253" height="30rem" controls="" zoom="12" type="yandex#map" mobiledrag="0"][yaplacemark  coord="47.0245,28.8322" icon="islands#dotIcon" color="#1e98ff"][/yamap]') ?>
            </div>
        </div>
    </div>
    <div class="container footer">
        <div class="row">
            <div class="col-lg-6">
                <div id="copyright" class="sm-center">
                    <p>Copyright © centrul cultural</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div style="margin-top:10px; text-align:right" class="sm-center"></div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>


