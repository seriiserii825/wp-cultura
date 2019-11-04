<?php

if (!defined('ABSPATH')) exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
	Container::make('theme_options', __('Carbon Fields'))
		->add_tab('Колличество картинок на главной', array(
			Field::make('text', 'crb_pulications_count', 'Число публикаций')
				->set_width(30),
			Field::make('text', 'crb_projects_count', 'Число поектов')
				->set_width(30),
			Field::make('text', 'crb_last_posts_count', 'Число последних записей')
				->set_width(30),
		))
		->add_tab('Спонсоры, Партнеры', array(
			Field::make('text', 'crb_donors_title_ro', 'Партнеры Заголовок Ro'),
			Field::make('text', 'crb_donors_title_ru', 'Партнеры Заголовок Ru'),

			Field::make('text', 'crb_sponsors_title_ro', 'Sponsors Заголовок Ro'),
			Field::make('text', 'crb_sponsors_title_ru', 'Sponsors Заголовок Ru'),

			Field::make('complex', 'crb_donors_images', __('Секция Партнеры'))
				->add_fields(array(
					Field::make('image', 'crb_donors_image', __('Партнеры Картинка')),
					Field::make('text', 'crb_donors_link', 'Партнеры ссылка Link'),
				))
				->set_layout('tabbed-horizontal'),

			Field::make('complex', 'crb_sponsors_images', __('Секция Спонсоры'))
				->add_fields(array(
					Field::make('image', 'crb_sponsors_image', __('Спонсоры картинка')),
					Field::make('text', 'crb_sponsors_link', 'Спонсоры ссылка'),
				))
				->set_layout('tabbed-horizontal'),
		))
		->add_tab('Sidebar posts', array(
			Field::make('text', 'crb_sidebar_posts', 'Sidebar posts id')
		));
}

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
	require_once(__DIR__ . '/../../vendor/autoload.php');
	\Carbon_Fields\Carbon_Fields::boot();
}
