function wpbootstrap_scripts_with_jquery()
{
    // Register the script like this for a theme:
    wp_enqueue_script( 'bootstrap.min.js', get_stylesheet_directory_uri() . '/bootstrap.min.js', array( 'jquery' ) );

}

add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );