<?php
	add_action('wp_enqueue_scripts', 'enqueue_scripts');
	function enqueue_scripts(){
		$parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

		wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'child-style',
			get_stylesheet_directory_uri() . '/style.css',
			array( $parent_style ),
			wp_get_theme()->get('Version')
		);
	}
	
	add_action('init', 'create_member_type');
	function create_member_type(){
		register_post_type(
			'member',
			array(
				'labels'		=>	array(
					'name'			=>	__('Members'),
					'singular_name'	=>	__('Member')
				),
				'supports'		=>	array(
					'title',
					'thumbnail',
					'editor',
					'excerpt'
				),
				'public'		=>	true,
				'has_archive'	=>	true
			)
		);
	}
	
	add_action('init', 'create_service_type');
	function create_service_type(){
		register_post_type(
			'service',
			array(
				'labels'		=>	array(
					'name'			=>	__('Services'),
					'singular_name'	=>	__('Service')
				),
				'supports'		=>	array(
					'title',
					'thumbnail',
					'editor'
				),
				'public'		=>	true,
				'has_archive'	=>	true
			)
		);
	}