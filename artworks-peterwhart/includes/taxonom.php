<?PHP


//hook into the init action and call create_categories_en_pwt_taxonomy when it fires
 
add_action( 'init', 'create_categories_en_pwt_taxonomy', 0 );
 
function create_categories_en_pwt_taxonomy() {
 
// Labels part for the GUI
 
  $labels = array(
    'name' => _x( 'Categories', 'taxonomy general name' ),
    'singular_name' => _x( 'Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Categories' ),
    'popular_items' => __( 'Popular Categories' ),
    'all_items' => __( 'All Categories' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Category' ), 
    'update_item' => __( 'Update Category' ),
    'add_new_item' => __( 'Add New Category' ),
    'new_item_name' => __( 'New Category Name' ),
    'separate_items_with_commas' => __( 'Separate Category with commas' ),
    'add_or_remove_items' => __( 'Add or remove Categories' ),
    'choose_from_most_used' => __( 'Choose from the most used Categories' ),
    'menu_name' => __( 'Categories EN' ),
  ); 
 
// Now register the hierarchical taxonomy like tag
 
  register_taxonomy('Categories','artwork',array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'CategoryEnPWT' ),
  ));
}








//hook into the init action and call create_collections_en_pwt_taxonomy when it fires
 
add_action( 'init', 'create_collections_en_pwt_taxonomy', 0 );
 
function create_collections_en_pwt_taxonomy() {
 
// Labels part for the GUI
 
  $labels = array(
    'name' => _x( 'Collections', 'taxonomy general name' ),
    'singular_name' => _x( 'Collection', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Collections' ),
    'popular_items' => __( 'Popular Collections' ),
    'all_items' => __( 'All Collections' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Collection' ), 
    'update_item' => __( 'Update Collection' ),
    'add_new_item' => __( 'Add New Collection' ),
    'new_item_name' => __( 'New Collection Name' ),
    'separate_items_with_commas' => __( 'Separate Collections with commas' ),
    'add_or_remove_items' => __( 'Add or remove Collections' ),
    'choose_from_most_used' => __( 'Choose from the most used Collections' ),
    'menu_name' => __( 'Collections EN' ),
  ); 
 
// Now register the hierarchical taxonomy like tag
 
  register_taxonomy('Collections','artwork',array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'CollectionEnPWT' ),
  ));
}






//hook into the init action and call create_Status_en_pwt_taxonomy when it fires
 
add_action( 'init', 'create_Status_en_pwt_taxonomy', 0 );
 
function create_Status_en_pwt_taxonomy() {
 
// Labels part for the GUI
 
  $labels = array(
    'name' => _x( 'Status', 'taxonomy general name' ),
    'singular_name' => _x( 'Status', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Statuss' ),
    'popular_items' => __( 'Popular Status' ),
    'all_items' => __( 'All Status' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Status' ), 
    'update_item' => __( 'Update Status' ),
    'add_new_item' => __( 'Add New Status' ),
    'new_item_name' => __( 'New Status Name' ),
    'separate_items_with_commas' => __( 'Separate Status with commas' ),
    'add_or_remove_items' => __( 'Add or remove Status' ),
    'choose_from_most_used' => __( 'Choose from the most used Status' ),
    'menu_name' => __( 'Status EN' ),
  ); 
 
// Now register the hierarchical taxonomy like tag
 
  register_taxonomy('Status','artwork',array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'StatusEnPWT' ),
  ));
}










//hook into the init action and call create_dimention_en_pwt_taxonomy when it fires
 
add_action( 'init', 'create_dimention_en_pwt_taxonomy', 0 );
 
function create_dimention_en_pwt_taxonomy() {
 
// Labels part for the GUI
 
  $labels = array(
    'name' => _x( 'Dimension', 'taxonomy general name' ),
    'singular_name' => _x( 'Dimension', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Dimensions' ),
    'popular_items' => __( 'Popular Dimensions' ),
    'all_items' => __( 'All Dimensions' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Dimension' ), 
    'update_item' => __( 'Update Dimension' ),
    'add_new_item' => __( 'Add New Dimension' ),
    'new_item_name' => __( 'New Dimension Name' ),
    'separate_items_with_commas' => __( 'Separate Dimensions with commas' ),
    'add_or_remove_items' => __( 'Add or remove Dimensions' ),
    'choose_from_most_used' => __( 'Choose from the most used Dimensions' ),
    'menu_name' => __( 'Dimension EN' ),
  ); 
 
// Now register the hierarchical taxonomy like tag
 
  register_taxonomy('Dimension','artwork',array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'DimensionEnPWT' ),
  ));
}



//hook into the init action and call create_price_size_en_pwt_taxonomy when it fires
 
add_action( 'init', 'create_price_size_en_pwt_taxonomy', 0 );
 
function create_price_size_en_pwt_taxonomy() {
 
// Labels part for the GUI
 
  $labels = array(
    'name' => _x( 'PriceSize', 'taxonomy general name' ),
    'singular_name' => _x( 'Size', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Size' ),
    'popular_items' => __( 'Popular Size' ),
    'all_items' => __( 'All Size' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Size' ), 
    'update_item' => __( 'Update Size' ),
    'add_new_item' => __( 'Add New Size' ),
    'new_item_name' => __( 'New Size Name' ),
    'separate_items_with_commas' => __( 'Separate Size with commas' ),
    'add_or_remove_items' => __( 'Add or remove Size' ),
    'choose_from_most_used' => __( 'Choose from the most used Size' ),
    'menu_name' => __( 'Price / Size' ),
  ); 
 
// Now register the hierarchical taxonomy like tag
 
  register_taxonomy('PriceSize','artwork',array( //here adauga parametru la 'artwork' CPT
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'PriceSizeEnPWT' ),
  ));
}

