<?php

/**
 * functions.php
 * 
 * Greenometry Theme Functions and Definitions
 * 
 * @author: Sean Gilliland, Melissa Wong, Analia Arredondo, Ronald Hamasaki
 * @version 1.0
 * 
 **/


/** 
 * Add Meta Tags to head 
 **/
function add_meta_title_tags() {
	 $grCharSet = get_bloginfo( 'charset' );
	 $grDescription = get_bloginfo( 'description' );
	 $grSiteTitle = get_bloginfo( 'name' );
	 echo '<meta charset="' . $grCharSet . '" />' . "\n";
	 echo '<meta name="description" content="' . $grDescription . '" />' . "\n";
	 echo '<meta name="robots" content="noindex,nofollow" />' . "\n";
	 echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">' . "\n";
	 //echo '<title>' . $grSiteTitle . '</title>';
}
add_action('wp_head', 'add_meta_title_tags');

/** 
 * Greenometry theme supports and registers
**/
function greenometry_theme_supports() {
	
	register_nav_menus( array( 
		'main-menu'	=> __('Main'), 
		'social' 	=> __('Social') 
		) 
	);

	add_theme_support( 'html5', array(
		'comment-form',
		'search-form',
		'comment-list',
		'gallery',
		'caption'
		) 
	);

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'custom-logo', array(
		'height'		=> 100,		//TODO add height
		'width'			=> 400,		//TODO add width
		'flex-width'	=> true 	//TODO add flex options
		) 
	);
}
add_action( 'after_setup_theme', 'greenometry_theme_supports' );


/**
 * Add categories and tags to Page post-type 
 **/
function add_taxonomies_to_pages() {
	register_taxonomy_for_object_type( 'category', 'page' );
	register_taxonomy_for_object_type( 'post_tag', 'page' );
}

add_action( 'init', 'add_taxonomies_to_pages');

/**
 * Enqueue scripts and styles 
 **/
 function greenometry_scripts_and_styles() {
	 wp_enqueue_style( 'greenometry_style', get_stylesheet_uri() );
 }

 /**
  * 
  **/

/**
 * Add Question/Answer custom post type 
 **/
function custom_post_types() {
	register_post_type( 'question_answer', 
		array(
			'labels' 		=> array(
				'name' 				=> __('Q&A\'s'),
				'singular_name' 	=> __('Q&A'),
				'add_new_item'		=> __('Add New Q&A')
			),
			'public' 		=> true,
			'taxonomies' 	=> array('category', 'post_tag'),
			'supports'		=> array( 'title', 'thumbnail', 'custom-fields'),
			'has_archive'	=> true,
			'menu_position'	=> 20,
			'description'	=> 'Helping understand and estimate your carbon footprint. Answers provided by Greenometry'
		) 
	);
	register_post_type('videos', 
		array(
			'labels'		=> array(
				'name'				=> __('Videos'),
				'singular_name'		=> __('Video'),
				'add_new_item'		=> __('Add New Video')
			),
			'public'		=> true,
			'taxonomies'	=> array('category', 'post_tag'),
			'supports'		=> array('title', 'editor', 'thumbnail', 'custom-fields'),
			'has_archive'	=> true,
			'menu_position'	=> 20,
			'menu_icon'		=> 'dashicons-video-alt'

		)
	);
	register_post_type('team_members', 
	array(
		'labels'		=> array(
			'name'				=> __('Our Team'),
			'singular_name'		=> __('Team Member'),
			'add_new_item'		=> __('Add New Team Member')
		),
		'public'		=> true,
		'taxonomies'	=> array('category', 'post_tag'),
		'supports'		=> array('title', 'thumbnail', 'custom-fields'),
		'has_archive'	=> true,
		'menu_position'	=> 20,
		'menu_icon'		=> 'dashicons-groups'

	)
);
}

add_action( 'init', 'custom_post_types' );


/**
 * Change the placeholder in the title field of QA editor to Question 
 **/
function qa_title_placeholder( $title ) {
	$screen = get_current_screen();
	if ('question_answer' == $screen->post_type ) {
		$title = 'Enter Question Here';
	}
	return $title;
}

add_filter( 'enter_title_here', 'qa_title_placeholder' );

function team_title_placeholder( $title ) {
	$screen = get_current_screen();
	if ('team_members' == $screen->post_type ) {
		$title = 'Enter Name Here';
	}
	return $title;
}

add_filter( 'enter_title_here', 'team_title_placeholder' );


function recent_posts_home() {
	$latest_posts_home = new WP_Query( array( 'posts_per_page' => 3 ) );
	if ( $latest_posts_home->have_posts() ) : while ( $latest_posts_home->have_posts() ) : $latest_posts_home->the_post();
		$recent_posts_loop  = '<div><figure>';
		$recent_posts_loop .= the_post_thumbnail();
		$recent_posts_loop .= '</figure><h3>' . the_title() . '</h3>';
		$recent_posts_loop .= '<p>' . the_excerpt() . '</p>';
		$recent_posts_loop .= '<a href="' . get_permalink() . '" >';
		$recent_posts_loop .= '<button>Read More</button></a></div>';
		echo $recent_posts_loop;
	endwhile; endif;
}

/**
 * TODO: 
 * functions for loops that query post types for abstraction
 * functions for multi loop pages. Look into post rewind or what function calls are needed for multiple loops
 * function for meta tags
 **/