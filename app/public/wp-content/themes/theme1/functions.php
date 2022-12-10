<?php 


function Theme01_setup(){
    load_theme_textdomain('Theme01', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'Theme01_setup');



function theme01_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails',array('post','sliders','team','testimonial','portfolio','gallery'));
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'Theme_01' ),
       
    ) );
}

add_action( 'after_setup_theme', 'theme01_support' );



function theme1_enqueue_assets() {

    //** Enqueue Style */

	wp_enqueue_style( 'default-css', get_stylesheet_uri() );
    wp_enqueue_style( 'font-css', get_template_directory_uri() . '//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_enqueue_style( 'magnific-css', get_template_directory_uri() . '/assets/css/magnific-popup.css');
    wp_enqueue_style( 'owl-css', get_template_directory_uri() . '/assets/css/owl.carousel.css');
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/assets/css/responsive.css');


    //** Enqueue Script */


	wp_enqueue_script( 'min-js', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), '1.0.0', true );
   
    wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'owl-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'magnific-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/assets/js/isotope.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'imgload-js', get_template_directory_uri() . '/assets/js/imageloaded.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'counter-js', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'waypoint-js', get_template_directory_uri() . '/assets/js/waypoint.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme1_enqueue_assets' );



// Slider Custom Post Type
function Slider() {
  
    register_post_type( 'sliders',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Sliders','Theme01' ),
                'singular_name' => __( 'Slide','Theme01' ),
                'all_items'           => __( 'All Slides', 'Theme01' ),
                'view_item'           => __( 'View Slide', 'Theme01' ),
                'add_new_item'        => __( 'Add New Slide', 'Theme01' ),
                'add_new'             => __( 'Add New', 'Theme01' ),
                'edit_item'           => __( 'Edit Slide', 'Theme01' ),
                'update_item'         => __( 'Update Slide', 'Theme01' ),
               
                
        
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'slides'),
            'show_in_rest' => true,
            'supports'            => array( 'title', 'editor',  'thumbnail',  'custom-fields', ),
            'menu_icon'           =>__('dashicons-align-center','Theme01'),
           
  
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'Slider' );












//** Services Custom Post */

function Service_post() {
  
    register_post_type( 'services',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Services','Theme01' ),
                'singular_name' => __( 'Service','Theme01' ),
                'add_new'               => __( 'Add New', 'Theme01' ),
		'add_new_item'          => __( 'Add New Service', 'Theme01' ),
		'new_item'              => __( 'New Service', 'Theme01' ),
		'edit_item'             => __( 'Edit Service', 'Theme01' ),
		'view_item'             => __( 'View Service', 'Theme01' ),
		'all_items'             => __( 'All Service', 'Theme01' ),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
            'show_in_rest' => true,
            'menu_icon' => __('dashicons-admin-multisite','Theme01'),
            'supports'           => array( 'title', 'editor','custom-fields'),


  
        )
    );
}
add_action( 'init', 'Service_post' );


//** Counter Custom Post */

function Counter_post() {
  
    register_post_type( 'counter',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Counters','Theme01' ),
                'singular_name' => __( 'Counter','Theme01' ),
                'add_new'               => __( 'Add New', 'Theme01' ),
		'add_new_item'          => __( 'Add New Counter', 'Theme01' ),
		'new_item'              => __( 'New Counter', 'Theme01' ),
		'edit_item'             => __( 'Edit Counter', 'Theme01' ),
		'view_item'             => __( 'View Counter', 'Theme01' ),
		'all_items'             => __( 'All Counter', 'Theme01' ),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'counters'),
            'show_in_rest' => true,
            'menu_icon' => __('dashicons-clock','Theme01'),
            'supports'           => array( 'custom-fields'),


  
        )
    );
}

add_action( 'init', 'Counter_post' );



//** Team Custom Post */

function Team_post() {
  
    register_post_type( 'team',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Team','Theme01' ),
                'singular_name' => __( 'Team','Theme01' ),
                'add_new'               => __( 'Add New', 'Theme01' ),
		'add_new_item'          => __( 'Add New Team', 'Theme01' ),
		'new_item'              => __( 'New Team', 'Theme01' ),
		'edit_item'             => __( 'Edit Team', 'Theme01' ),
		'view_item'             => __( 'View Team', 'Theme01' ),
		'all_items'             => __( 'All Team', 'Theme01' ),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'team'),
            'show_in_rest' => true,
            'menu_icon' => __('dashicons-admin-users
            ','Theme01'),
            'supports'           => array( 'thumbnail','custom-fields'),


  
        )
    );
}

add_action( 'init', 'Team_post' );




//** Testimonial Custom Post */

function Testimonial_post() {
  
    register_post_type( 'testimonial',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Testimonials','Theme01' ),
                'singular_name' => __( 'Testimonial','Theme01' ),
                'add_new'               => __( 'Add New', 'Theme01' ),
		'add_new_item'          => __( 'Add New Testimonial', 'Theme01' ),
		'new_item'              => __( 'New Testimonial', 'Theme01' ),
		'edit_item'             => __( 'Edit Testimonial', 'Theme01' ),
		'view_item'             => __( 'View Testimonial', 'Theme01' ),
		'all_items'             => __( 'All Testimonial', 'Theme01' ),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'testimonials'),
            'show_in_rest' => true,
            'menu_icon' => __('dashicons-format-status
            ','Theme01'),
            'supports'           => array( 'custom-fields','thumbnail'),


  
        )
    );
}

add_action( 'init', 'Testimonial_post' );

// Custom Portfolio Post
function portfolio_post() {
  
    register_post_type( 'portfolio',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Portfolios','Theme01' ),
                'singular_name' => __( 'Portfolio','Theme01' ),
                'add_new'               => __( 'Add New', 'Theme01' ),
                'add_new_item'          => __( 'Add New Portfolio', 'Theme01' ),
                'new_item'              => __( 'New Portfolio', 'Theme01' ),
                'edit_item'             => __( 'Edit Portfolio', 'Theme01' ),
                'view_item'             => __( 'View Portfolio', 'Theme01' ),
                'all_items'             => __( 'All Portfolio', 'Theme01' ),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'movies','Theme01'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-portfolio',
            'supports'           => array( 'title','editors','custom-fields','thumbnail'),
  
        )
    );
}


add_action( 'init', 'portfolio_post' );

// Custom Gallery Post
function gallery_post() {
  
    register_post_type( 'gallery',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Gallery','Theme01' ),
                'singular_name' => __( 'Gallery','Theme01' ),
                'add_new'               => __( 'Add New', 'Theme01' ),
                'add_new_item'          => __( 'Add New Gallery', 'Theme01' ),
                'new_item'              => __( 'New Gallery', 'Theme01' ),
                'edit_item'             => __( 'Edit Gallery', 'Theme01' ),
                'view_item'             => __( 'View Gallery', 'Theme01' ),
                'all_items'             => __( 'All Gallery', 'Theme01' ),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'gallery','Theme01'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-format-gallery',
            'supports'           => array( 'title','custom-fields','thumbnail'),
  
        )
    );
}



















add_action( 'init', 'gallery_post' );


// Custom Portfolio Post Taxonomy
function portfolio_taxonomy() {
  
    register_taxonomy('portfolio-cat',array('portfolio'), array(
        'hierarchical' => true,
        'labels' => array(
            'name' => __( 'portfolios','Theme01' ),
            'singular_name' => __( 'portfolio','Theme01' ),),
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        
        'rewrite' => array( 'slug' => 'portfolio' ),
      ));
}

add_action( 'init', 'portfolio_taxonomy' );


//** Register Sidebar  */

function Theme01_sidebar1_init() {
 
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'Theme01' ),
        'id' => 'sidebar-1',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'Theme01' ),
        'before_widget' => '<div class="single-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h4">',
        'after_title' => '</h4>',
    ) );
 
  
    }
 
add_action( 'widgets_init', 'Theme01_sidebar1_init' );

//** Register Sidebar Footer-1 */

function Theme01_sidebar12_init() {
 
    register_sidebar( array(
        'name' => __( 'Footer-1', 'Theme01' ),
        'id' => 'Footer-1',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'Theme01' ),
        'before_widget' => 'single-footer footer-logo',
        'after_widget' => '</div>',
        'before_title' => '<h3">',
        'after_title' => '</h3>',
    ) );
 
  
    }
 
add_action( 'widgets_init', 'Theme01_sidebar12_init' );


//** Register Sidebar Footer-2  */

function Theme01_sidebar2_init() {
 
    register_sidebar( array(
        'name' => __( 'Footer-2', 'Theme01' ),
        'id' => 'Footer-2',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'Theme01' ),
        'before_widget' => 'col-lg-2 col-md-6',
        'after_widget' => '</div>',
        'before_title' => '<h4">',
        'after_title' => '</h4>',
    ) );
 
  
    }
 
add_action( 'widgets_init', 'Theme01_sidebar2_init' );


//** Register Sidebar Footer-3 */

function Theme01_sidebar3_init() {
 
    register_sidebar( array(
        'name' => __( 'Footer-3', 'Theme01' ),
        'id' => 'Footer-3',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'Theme01' ),
        'before_widget' => '<div class="single-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h4">',
        'after_title' => '</h4>',
    ) );
 
  
    }
 
add_action( 'widgets_init', 'Theme01_sidebar3_init' );

function acf_header_css(){ ?>
    <style>
        .header-top{
            background-color: <?php the_field('header_background', 'option'); ?>;
        }
    </style>
<?php 
}
add_action('wp_head','acf_header_css');


//** Options Page  */


if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme01 Settings','Theme01',
        'menu_title'    => 'Theme01 Settings','Theme01',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme01 Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => ' Footer ',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'About Part',
        'menu_title'    => 'About Part',
        'parent_slug'   => 'theme-general-settings',
    ));
  
    acf_add_options_sub_page(array(
        'page_title'    => 'FAQ Part',
        'menu_title'    => 'FAQ Part',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'CTA Part',
        'menu_title'    => 'CTA Part',
        'parent_slug'   => 'theme-general-settings',
    ));


    acf_add_options_sub_page(array(
        'page_title'    => 'Contact Part',
        'menu_title'    => 'Contact Part',
        'parent_slug'   => 'theme-general-settings',
    ));


    
}



/** Comment Rearranage Form //
 */
function Theme01_comment_form_fields($comment_fields) {
    if (isset($comment_fields['comment'])) {
        $comment_field = $comment_fields['comment'];
        unset($comment_fields['comment']);
        $comment_fields['comment'] = $comment_field;
    }

    return $comment_fields;
}

add_filter( 'comment_form_fields', 'Theme01_comment_form_fields', 10, 1 );


/**
 * Change comment form textarea to use placeholder
 *
 * @since  1.0.0
 * @param  array $args
 * @return array
 */
function Comment_placeholder1( $args ) {
	$args['comment_field']        = str_replace( 'textarea', 'textarea placeholder="Comment Here"', $args['comment_field'] );
	return $args;
}
add_filter( 'comment_form_defaults', 'Comment_placeholder1' );

/**
 * Comment Form Fields Placeholder
 *
 */
function Comment_placeholder2( $fields ) {
	foreach( $fields as &$field ) {
		$field = str_replace( 'id="author"', 'id="author" placeholder="Your Name"', $field );
		$field = str_replace( 'id="email"', 'id="email" placeholder="Your Email"', $field );
		$field = str_replace( 'id="url"', 'id="url" placeholder="Your Website"', $field );
	}
	return $fields;
}
add_filter( 'comment_form_default_fields', 'Comment_placeholder2' );