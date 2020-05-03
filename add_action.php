<?php 
/**
* Wordpress theme default function and features.
*
*/
if(! function_exsits('pronations_theme_setup')){
	function	pronations_theme_setup(){
		add_theme_support('title-tag');
		add_theme_support('automatic-feed-links');
		$post_formates_setting = array(
		'aside', 
		'chat',
		'gallery',
		'image',
		'link',
		'quote',
		'status',
		'video',
		'audio'
		) ;
		
		$html5 =  array(
		'comment-form',
		'comment-list',
		'search-form',
		'gallery',
		'caption'
		);
		
		$custom_logo = array(
		'width' => 150,
		'height' => 150,
		'flex-width' => true,
		'flex-height' => true,
		'header-text' => array(
		'site-title',
		'site-description'
		) 
		);
		
		$custom_header = array(
		'width' => 1140,
		'height' => 768,
		'default-image' => '',
		'default-text-color' => '000',
		'flex-width' => true,
		'flex-height' => true
		);
		
		$custom_background = array(
		'default-color' => 'fff',
		'default-image' => '',
		'default-repeat' => 'no-repeat',
		'deault-attachment' => 'fixed'
		);
		
		add_theme_support('post-formate', $post_formate_setting);
		add_theme_support('html5', $html5);
		add_theme_support('custom-logo', $custom_logo);
		add_theme_support('custom-header', $custom_header);
		add_theme_support('custom-background', $custom_background);
		add_theme_support('custom-header-upload');
		
		/**
		* Post thumbnail 
		* wordpress default post thumbnail size.
		* the_post_thumbnail('thumbnail'); dimension 150 * 150 .
		* the_post_thumbnail('medium'); dimension 300 * 300 .
		* the_post_thumbnail('medium_large'); dimension 768 * auto .
		* the_post_thumbnail('full'); dimension image accurate size .
		* add custom post thumbnail size 
		* the_post_thumbnail(array(100, 100, true'));
		* add_image_size('recent_post',400, 400, true); callback name width height crop.
	* the_post_thumbnail('recent_post');
	* or use set_post_thumbnail_size(900, 900, true); witdh height crop
	* For support all this feature add_theme_support('post-thumbnails');
	*/
	add_theme_support('post-thumbnails');
	 
	}
	}
	add_action('after_setup_theme', 'pronations_theme_setup');