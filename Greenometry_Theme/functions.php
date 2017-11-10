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
	register_post_type( 'qa', 
		array(
			'labels' 		=> array(
				'name' 				=> __('Q&A\'s'),
				'singular_name' 	=> __('Q&A'),
				'add_new_item'		=> __('Add New Q&A')
			),
			'public' 		=> true,
			'taxonomies' 	=> array('category', 'post_tag'),
			'supports'		=> array( 'title', 'thumbnail', 'custom-fields' )
		) 
	);
}

add_action( 'init', 'custom_post_types' );


/**
 * Change the placeholder in the title field of QA editor to Question 
 **/
function qa_title_placeholder( $title ) {
	$screen = get_current_screen();
	if ('qa' == $screen->post_type ) {
		$title = 'Enter Question Here';
	}
	return $title;
}

add_filter( 'enter_title_here', 'qa_title_placeholder' );