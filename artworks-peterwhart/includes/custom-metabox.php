<?PHP


/**
/custom metabox for Artworks
*/

// Meta Box Class: ArtwoksProductsMetaBox
// Get the field value: $metavalue = get_post_meta( $post_id, $field_id, true );
class ArtwoksProductsMetaBox{

	private $screen = array(
		
		        'dashboard',
                'Artwork',
                'post',   
                        
	);

	private $meta_fields = array(
                array(
                    'label' => 'Product Number EN*',
                    'id' => 'product_number_en_custom_metabox',
                    'type' => 'text',
					'default' => '0',
					'placeholder' => '2022',
					'required' => 'true',
                ),
    
                array(
                    'label' => 'Year of creation EN * only numbers',
                    'id' => 'year_of_creation_en_custom_metabox',
					'default' => '2022',
					'placeholder' => '2022',
                    'type' => 'number',
                ),
    
                array(
                    'label' => 'Description (EN)',
                    'id' => 'description_en_custom_metabox',
                    'type' => 'textarea',
                ),
    
                array(
                    'label' => 'Price (EN) $ CAD (must be digits, numbers)',
                    'id' => 'price_en_custom_metabox',
                    'type' => 'number',
					'placeholder' => '2022',
                )

	);

	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
		add_action( 'save_post', array( $this, 'save_fields' ) );
	}

	public function add_meta_boxes() {
		foreach ( $this->screen as $single_screen ) {
			add_meta_box(
				'ArtwoksProducts',
				__( 'ArtwoksProducts', 'textdomain' ),
				array( $this, 'meta_box_callback' ),
				$single_screen,
				'normal',
				'default'
			);
		}
	}

	public function meta_box_callback( $post ) {
		wp_nonce_field( 'ArtwoksProducts_data', 'ArtwoksProducts_nonce' );
                echo 'Paintings detail EN';
		$this->field_generator( $post );
	}
	public function field_generator( $post ) {
		$output = '';
		foreach ( $this->meta_fields as $meta_field ) {
			$label = '<label for="' . $meta_field['id'] . '">' . $meta_field['label'] . '</label>';
			$meta_value = get_post_meta( $post->ID, $meta_field['id'], true );
			if ( empty( $meta_value ) ) {
				if ( isset( $meta_field['default'] ) ) {
					$meta_value = $meta_field['default'];
				}
			}
			switch ( $meta_field['type'] ) {
                                case 'textarea':
                                    $input = sprintf(
                                        '<textarea style="" id="%s" name="%s" rows="5">%s</textarea>',
                                        $meta_field['id'],
                                        $meta_field['id'],
                                        $meta_value
                                    );
                                    break;
            
				default:
                                    $input = sprintf(
                                        '<input %s id="%s" name="%s" type="%s" value="%s">',
                                        $meta_field['type'] !== 'color' ? 'style="width: 100%"' : '',
                                        $meta_field['id'],
                                        $meta_field['id'],
                                        $meta_field['type'],
                                        $meta_value
                                    );
			}
			$output .= $this->format_rows( $label, $input );
		}
		echo '<table class="form-table"><tbody>' . $output . '</tbody></table>';
	}

	public function format_rows( $label, $input ) {
		return '<tr><th>'.$label.'</th><td>'.$input.'</td></tr>';
	}

	public function save_fields( $post_id ) {
		if ( ! isset( $_POST['ArtwoksProducts_nonce'] ) )
			return $post_id;
		$nonce = $_POST['ArtwoksProducts_nonce'];
		if ( !wp_verify_nonce( $nonce, 'ArtwoksProducts_data' ) )
			return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return $post_id;
		foreach ( $this->meta_fields as $meta_field ) {
			if ( isset( $_POST[ $meta_field['id'] ] ) ) {
				switch ( $meta_field['type'] ) {
					case 'email':
						$_POST[ $meta_field['id'] ] = sanitize_email( $_POST[ $meta_field['id'] ] );
						break;
					case 'text':
						$_POST[ $meta_field['id'] ] = sanitize_text_field( $_POST[ $meta_field['id'] ] );
						break;
				}
				update_post_meta( $post_id, $meta_field['id'], $_POST[ $meta_field['id'] ] );
			} else if ( $meta_field['type'] === 'checkbox' ) {
				update_post_meta( $post_id, $meta_field['id'], '0' );
			}
		}
	}
}

if (class_exists('ArtwoksProductsMetabox')) {
	new ArtwoksProductsMetabox;
};