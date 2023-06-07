<?php
/*
Plugin Name: Artworks - PeterWHart


Description: Plugin for Artworks with taxonomy: Categories, Colection, Status, Dimension, Size-Price
Plugin URI: https://peterwhart.com/
Version: 1.0.6
Author: Flavius G.
Author URI: https://peterwhart.com/
License: GPL3
License URI: https://peterwhart.com/
*/


/**
licence to Flavius G

*/
// this is where to add the snippets below


if (! defined ('ABSPATH')){
	echo "Nothing here!";
	die;
}
	
//custom post type: Artworks
require 'includes/cpt-artworks.php';
require 'includes/taxonom.php';
require 'includes/custom-metabox.php';



function add_stylesheet_to_head() {
    echo "<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>";
}
 
add_action( 'wp_head', 'add_stylesheet_to_head' );
 
/**
*add CSS file
*/

// load css into the admin pages
function mytheme_enqueue_options_style() {
    wp_enqueue_style( 'mytheme-options-style', get_template_directory_uri() . 'assets/css/style-artworks.css' );
}
// the callback function
add_action( 'admin_enqueue_scripts', 'mytheme_enqueue_options_style' );
