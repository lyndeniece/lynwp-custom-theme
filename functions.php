<?php

function LynWP_enqueue() {
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    if($_SERVER['SERVER_NAME'] != 'localhost'){
      wp_enqueue_style('style', get_template_directory_uri() . '/style.min.css');
    } else{
      wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    }
    //wp_enqueue_script( 'customjs', get_template_directory_uri() . '/assets/js/custom.min.js', array('jquery'), '', true );
    wp_enqueue_style('Montserrat', "https://fonts.googleapis.com/css?family=Montserrat:700|Montserrat:normal|Montserrat:300");
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css');
    wp_enqueue_style('fontawesome', '//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css');
    wp_enqueue_style('aoscss', 'https://unpkg.com/aos@2.3.1/dist/aos.css');

    wp_enqueue_script( 'bootstrapcdn', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'jvalidatecdn', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'circleprogress', 'https://rawgit.com/kottenator/jquery-circle-progress/1.2.1/dist/circle-progress.js', array('jquery'), '', true );
    wp_enqueue_script( 'isotopejs', 'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'aosjs', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array('jquery'), '', true );
    wp_enqueue_script( 'customjs', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '', true );
}
add_action('wp_enqueue_scripts', 'LynWP_enqueue');

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
register_nav_menus( array(
    'header' => 'Custom Primary Menu',
  ) );

function LynWP_widgets_init() {

  register_sidebar( array(
    'name'          => 'Footer 1',
    'id'            => 'footer_1',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="ttl">',
    'after_title'   => '</h4>',
  ) );

  register_sidebar( array(
    'name'          => 'Footer 2',
    'id'            => 'footer_2',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="ttl">',
    'after_title'   => '</h4>',
  ) );

  register_sidebar( array(
    'name'          => 'Footer 3',
    'id'            => 'footer_3',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="ttl">',
    'after_title'   => '</h4>',
  ) );
  register_sidebar( array(
    'name'          => 'sidebar',
    'id'            => 'sidebar',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="ttl">',
    'after_title'   => '</h4>',
  ) );

}
add_action( 'widgets_init', 'LynWP_widgets_init' );

// Remove WP version from links
function lynwp_remove_wp_version() {
  return '';
}
add_filter('the_generator', 'lynwp_remove_wp_version');

//Change admin footer text
function lynwp_change_admin_footer () {
  echo 'Created by <a href="https://lyndeniece.wordpress.com/" target="_blank">lyndeniece WP</a></p>';
}

add_filter('admin_footer_text', 'lynwp_change_admin_footer');

//Custom widget message on dashboard
add_action('wp_dashboard_setup', 'lynwp_dashboard_msg');

function lynwp_dashboard_msg() {
  global $wp_meta_boxes;

  wp_add_dashboard_widget('custom_help_widget', 'Lyn WP - Message', 'lynwp_admin_msg_text');
}

function lynwp_admin_msg_text() {
  echo '<p>This custom theme was created by <a href="https://lyndeniece.wordpress.com/">lyndeniece WP</a>. For assistance contact <a href="lyndeniece@gmail.com" target="_blank">this email</a></p>';
}

//Remove Welcome to Wordpress
remove_action('welcome_panel', 'wp_welcome_panel');

// WP Bootstrap navwalker
require_once get_template_directory() . '/assets/class-wp-bootstrap-navwalker.php';

// Creates Portfolio Custom Post Type
function cpt_portfolio_init() {
    $args = array(
      'label' => 'Portfolio',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'cudaportfolio', 'with_front' => false),
        'query_var' => true,
        'menu_icon' => 'dashicons-format-gallery',
        'has_archive' => true,          
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'revisions',
            'page-attributes',)
        );
    register_post_type( 'cudaportfolio', $args );
}
add_action( 'init', 'cpt_portfolio_init' );

//Portfolio Taxonomy
function portfolio_taxonomy() {  
    register_taxonomy(  
        'portfolio-category', 
        'cudaportfolio',        
        array(  
            'hierarchical' => true,  
            'label' => 'Categories',
            'show_admin_column' => true, ////SHOW COLUMN SORTABLE           
            'query_var' => true,
            'has_archive' =>  true,
            'rewrite' => array(
                'slug' => 'portfolio-category', 
                'with_front' => false 
            )
        )  
    );  
}  
add_action( 'init', 'portfolio_taxonomy');