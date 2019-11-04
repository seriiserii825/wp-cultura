<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
    <meta name="description" content="">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="container header" id="header">
        <div class="row">
            <div class="header__content">
                <div class="header__item">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="header__item">
                    <?php $phone = get_field('phone', 176); ?>
                    <?php if($phone): ?>
                        <h4><em><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></em></h4>
                    <?php endif; ?>
                </div>
                <div class="header__item">
                    <h4>
                        <span>
                            <em>
                                <strong><?php bloginfo('name'); ?></strong>
                            </em>
                        </span>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="mainmenu" id="mainmenu">
    <nav class="navbar" role="navigation">
        <div class="container">
            <div class="navbar-header mainmenu-toggle-button">
                <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse"
                        data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <?php
				wp_nav_menu( [
					'theme_location'  => 'menu-1',
					'menu'            => '',
					'container'       => '',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'nav navbar-nav collapse navbar-collapse',
					'menu_id'         => 'navbar',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => '',
				] );
            ?>
            <?php if(!dynamic_sidebar('sidebar-1')): ?>
                <h1>Add sidebar</h1>
            <?php endif; ?>
        </div>
    </nav>
</div>

