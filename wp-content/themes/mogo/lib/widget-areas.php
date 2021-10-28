<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 * @package Beetroot
 */

/**
 * beetroot_widgets_init
 *
 * @return void
 */
function beetroot_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'wp_dev'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'wp_dev'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	// Footer Column 1
	register_sidebar(array(
		'name'          => __('Footer Column 1'),
		'id'            => 'footer-col-1',
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
		'before_sidebar' => '',
		'after_sidebar'  => '',
	));

	// Footer Column 2
	register_sidebar(array(
		'name'          => __('Footer Column 2'),
		'id'            => "footer-col-2",
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
		'before_sidebar' => '',
		'after_sidebar'  => '',
	));

	// Footer Column 3
	register_sidebar(array(
		'name'          => __('Footer Column 3'),
		'id'            => "footer-col-3",
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
		'before_sidebar' => '',
		'after_sidebar'  => '',
	));
}
add_action('widgets_init', 'beetroot_widgets_init');
