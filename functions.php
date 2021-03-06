

function custom_function() {
  // Add scripts and stylesheets
  function gwerful_scripts() {
  	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );
  	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
  	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
  }

  add_action( 'wp_enqueue_scripts', 'gwerful_scripts' );
}
add_action( 'action', 'custom_function');
