<?php function enqueue_custom_styles()
{
    // Enqueue CSS file
    wp_enqueue_style('styles', get_stylesheet_directory_uri() . '/src/output.css');
   
    // glide.js
  

    // Enqueue Tailwind CSS 
    wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/src/input.css', array(), 10);

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
// widget 
function custom_monetisation_widget() {
    register_sidebar(
        array(
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            'before_widget' => '<div class="custom-monetization-widget">',
            'after_widget' => '</div>',
            'name' => 'Monetisation',
            'id' => 'money-1',
            'description' => 'Sidebar Widget Area for Monetisation',
        )
    );
}
add_action('widgets_init', 'custom_monetisation_widget');

// Custom ad widget
class Custom_Monetisation_Widget extends WP_Widget {

    // Constructor
    function __construct() {
        parent::__construct(
            'custom_monetisation_widget', // Base ID
            __('Custom Monetisation Widget', 'text_domain'), // Widget name
            array( 'description' => __( 'Custom widget for displaying ads', 'text_domain' ), ) // Widget description
        );
    }
    
    // Widget Front-end
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        echo '<div class="ad-content">';
        echo $instance['ad_code']; // Output ad code
        echo '</div>';
        echo $args['after_widget'];
    }
    
    // Widget Back-end
    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : '';
        $ad_code = ! empty( $instance['ad_code'] ) ? $instance['ad_code'] : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'ad_code' ); ?>"><?php _e( 'Ad Code:' ); ?></label> 
            <textarea class="widefat" id="<?php echo $this->get_field_id( 'ad_code' ); ?>" name="<?php echo $this->get_field_name( 'ad_code' ); ?>"><?php echo esc_textarea( $ad_code ); ?></textarea>
        </p>
        <?php 
    }
    
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['ad_code'] = ( ! empty( $new_instance['ad_code'] ) ) ? $new_instance['ad_code'] : '';
        return $instance;
    }
}

// Register and load the widget
function load_custom_monetisation_widget() {
    register_widget( 'custom_monetisation_widget' );
}
add_action( 'widgets_init', 'load_custom_monetisation_widget' );

?>