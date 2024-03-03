<?php
function enqueue_custom_styles()
{
    // Enqueue CSS file
    wp_enqueue_style('styles', get_stylesheet_directory_uri() . '/src/output.css');

    // Enqueue Tailwind CSS 
    wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/src/input.css', array(), 1);

    // Enqueue custom JavaScript file
    wp_enqueue_script('js', get_template_directory_uri() . '/js/script.js');
    // Register a custom navigation menu for the footer
    register_nav_menu('footer', __('Footer Menu'));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');


// Register a custom navigation menu
function register_my_menu() {
    register_nav_menu('primary', __('Primary Menu'));
}
add_action('after_setup_theme', 'register_my_menu');






// Custom post type function 
function create_product_post_type() {
    $args = array(
        'public' => true,
        'label'  => 'Products',
        // Add more arguments as needed
    );
    register_post_type( 'product', $args );
}
add_action( 'init', 'create_product_post_type' );

// hover for menu items


function add_product_custom_fields() {
    add_meta_box(
        'product_details',
        'Product Details',
        'render_product_custom_fields',
        'product', // Custom post type name
        'normal',
        'default'
    );
}
add_action( 'add_meta_boxes', 'add_product_custom_fields' );

function render_product_custom_fields( $post ) {
    // Render custom fields here using HTML input elements
     // Retrieve existing values for custom fields
     $product_price = get_post_meta( $post->ID, 'product_price', true );
     $product_description = get_post_meta( $post->ID, 'product_description', true );
     $product_image_url = get_post_meta( $post->ID, 'product_image_url', true );
    ?>
    <div class="product-custom-fields">
    <label for="product-name">Product Name:</label>
        <input type="text" id="product-name" name="product_name" value="<?php echo esc_attr( $post->post_title ); ?>" readonly>

        <label for="product-price">Product Price:</label>
        <input type="text" id="product-price" name="product_price" value="<?php echo esc_attr( $product_price ); ?>">

        <label for="product-description">Product Description:</label>
        <textarea id="product-description" name="product_description"><?php echo esc_textarea( $product_description ); ?></textarea>

        <label for="product-image">Product Image URL:</label>
        <input type="text" id="product-image" name="product_image_url" value="<?php echo esc_url( $product_image_url ); ?>">
    </div>

    <?php
     
}


