<?php 

function load_my_scripts() {

	wp_deregister_script( 'jquery' );  
    wp_register_script('jquery', get_template_directory_uri().'/js/dev/jquery-1.10.2.js');  
    wp_enqueue_script('jquery');  
    wp_register_script('myscript', get_template_directory_uri().'/js/custom-min.js', array('jquery') );  
    wp_enqueue_script('myscript');  

	// wp_enqueue_script( 'custom-script', '/js/custom-min.js' );
}

add_action( 'wp_enqueue_scripts', 'load_my_scripts' );
remove_filter( 'the_content', 'wpautop' );

add_filter('show_admin_bar', '__return_false');


add_filter( 'the_author', 'guest_author_name' );
add_filter( 'get_the_author_display_name', 'guest_author_name' );

function guest_author_name( $name ) {
    global $post;

    $author = get_post_meta( $post->ID, 'author', true );

    if ( $author )
    $name = $author;

return $name;
}


function login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo_cmyk_small.png);
            background-size: contain;
            height: 180px;
            width: auto;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'login_logo' );

?>