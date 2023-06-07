<?php




// cu doi parametrii initilizare si numele functiei de initializat
//****cream CPT ****

/*
* Pentru a crea un CPT, utilizam functie register_post_type 
* Acceptă doi parametri; 
* mai întâi identificatorul de tip post și în al doilea rând un array cu toate argumentele.
*/


/**
 * Register a custom post type called "Artwork".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_Artwork_init() {
    $labels = array(
        'name'                  => _x( 'Artworks', 'Post type general name', 'PeterWHart' ),
        'singular_name'         => _x( 'Artwork', 'Post type singular name', 'PeterWHart' ),
        'menu_name'             => _x( 'Artworks', 'Admin Menu text', 'PeterWHart' ),
        'name_admin_bar'        => _x( 'Artwork', 'Add New on Toolbar', 'PeterWHart' ),
        'add_new'               => __( 'Adauga nou', 'PeterWHart' ),
        'add_new_item'          => __( 'Adauga o pictura', 'PeterWHart' ),
        'new_item'              => __( 'New Artwork', 'PeterWHart' ),
        'edit_item'             => __( 'Editeaza', 'PeterWHart' ),
        'view_item'             => __( 'Vezi', 'PeterWHart' ),
        'all_items'             => __( 'All Artworks', 'PeterWHart' ),
        'search_items'          => __( 'Search Artworks', 'PeterWHart' ),
        'parent_item_colon'     => __( 'Parent Artworks:', 'PeterWHart' ),
        'not_found'             => __( 'No Artworks found.', 'PeterWHart' ),
        'not_found_in_trash'    => __( 'No Artworks found in Trash.', 'PeterWHart' ),
        'featured_image'        => _x( 'Artwork Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'PeterWHart' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'PeterWHart' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'PeterWHart' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'PeterWHart' ),
        'archives'              => _x( 'Artwork archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'PeterWHart' ),
        'insert_into_item'      => _x( 'Insert into Artwork', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'PeterWHart' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Artwork', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'PeterWHart' ),
        'filter_items_list'     => _x( 'Filter Artworks list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'PeterWHart' ),
        'items_list_navigation' => _x( 'Artworks list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'PeterWHart' ),
        'items_list'            => _x( 'Artworks list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'PeterWHart' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Artwork' ), //the name of the CPT=Artworks
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5, // numarul si pozitia in meniu
		'menu_icon' 		 => 'dashicons-format-gallery', // iconita de la menu
        'supports'           => array( 'title', 'editor', 'thumbnail'),
		//'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
 
    register_post_type( 'Artwork', $args );
}
 
add_action( 'init', 'wpdocs_codex_Artwork_init' );

