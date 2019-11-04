<?php

if( ! defined('ABSPATH') ) exit;

add_action('init', 'my_custom_init');
function my_custom_init(){
	register_post_type('slider', array(
		'labels'             => array(
			'name'               => __('Slider', 'bs-diona'), // Основное название типа записи
			'singular_name'      => __('Slider', 'bs-diona'), // отдельное название записи типа Book
			'add_new'            => __('Add new', 'bs-diona'),
			'add_new_item'       => __('Add new', 'bs-diona'),
			'edit_item'          => __('Edit new', 'bs-diona'),
			'new_item'           => __('New item', 'bs-diona'),
			'view_item'          => __('View', 'bs-diona'),
			'search_items'       => __('Search', 'bs-diona'),
			'not_found'          =>  'Книг не найдено',
			'not_found_in_trash' => 'В корзине книг не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => __('Slider', 'bs-diona')

		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title', 'thumbnail')
	) );
}
