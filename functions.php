<?php 
    function theme_support(){
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_image_size('latest_news_thumbnails',370,262,true);
       

    }
    add_action('after_setup_theme','theme_support');
    function allcss(){
        //-- all css here -->//
        wp_enqueue_style('bootstrap',   get_template_directory_uri() . '/css/bootstrap.min.css');
        wp_enqueue_style('maincss',get_template_directory_uri().'/css/all.css');
        wp_enqueue_style('iconcss',get_template_directory_uri().'/css/themify-icons.css');
        wp_enqueue_style('popupcss',get_template_directory_uri().'/css/magnific-popup.css');
        wp_enqueue_style('animatecss',get_template_directory_uri().'/css/animate.css');
        wp_enqueue_style('helpercss',get_template_directory_uri().'/css/helper.css');
        wp_enqueue_style('stylecss',get_template_directory_uri().'/css/style.css');
        wp_enqueue_style('responsivecss',get_template_directory_uri().'/css/responsive.css');
        wp_enqueue_style('stylecss', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts','allcss');

    function alljs(){
        //-- all js here -->//
        // wp_enqueue_script('jquery',   get_template_directory_uri() . '/js/jquery-3.3.1.min.js');
        // wp_enqueue_script('plugins',get_template_directory_uri().'/js/plugins.js');
        // wp_enqueue_script('main',get_template_directory_uri().'/js/main.js');
        wp_enqueue_script('jquery');
    	wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js','jquery','v1.0',true);
    	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js','jquery','v1.0',true);
    }
    add_action('wp_enqueue_scripts','alljs');
    register_nav_menus(array(
		'primary_menu' => 'primaray menu'
	));

	function callback(){ 
    ?>
		<a href="<?php echo esc_url(site_url()); ?>/wp-admin/nav-menus.php?action=edit&menu=0">Create Menu</a>
    <?php
	}


	if ( !file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	    // File does not exist... return an error.
	    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
	} 
	else {
	    // File exists... require it.
	    require_once get_template_directory() .'/class-wp-bootstrap-navwalker.php';
	}
    ?>
    <?php
    function work_section_post_function() {
        register_post_type( 'work_section', array(
            'label'               => __( 'Work Section', 'resturant' ),
            'description'         => __( 'work_slider news and reviews', 'resturant' ),
            'labels'              => $labels,
            'supports'            => array( 'title','author', 'thumbnail', ),
            'taxonomies'          => array( 'genres' ),	
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
    
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
            // 'taxonomies'          => array( 'category' ),
        ) );
        $labels = array(
            'name'                => _x( 'work_slider', 'Post Type General Name', 'resturant' ),
            'singular_name'       => _x( 'work_slider', 'Post Type Singular Name', 'resturant' ),
            'menu_name'           => __( 'work_slider', 'resturant' ),
            'parent_item_colon'   => __( 'Parent work_slider', 'resturant' ),
            'all_items'           => __( 'All work_slider', 'resturant' ),
            'view_item'           => __( 'View work_slider', 'resturant' ),
            'add_new_item'        => __( 'Add New work_slider', 'resturant' ),
            'add_new'             => __( 'Add New', 'resturant' ),
            'edit_item'           => __( 'Edit work_slider', 'resturant' ),
            'update_item'         => __( 'Update work_slider', 'resturant' ),
            'search_items'        => __( 'Search work_slider', 'resturant' ),
            'not_found'           => __( 'Not Found', 'resturant' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'resturant' ),
            'item_published'      => __('Portfolio published'),
        );
        register_taxonomy(
            'category',
            'work_section',
            array(
                'hierarchical' => true,
                'label'        => 'Category',
                'query_ver'    => true,
                'show_admin_column'=>true,
                'rewrite'          => array(
                    'slug'         => 'faqs-category',
                    'with_front'   =>true,
                )
            ),

        );
    }
    add_action( 'init', 'work_section_post_function', 0 );

    // What_I_do_section

    function What_I_do_section_post_function(){
        register_post_type('What_I_do_section', array(
            'labels' => array(
                'menu_name' => 'What I do Section',
                'name' => 'What I do Section',
                'add_new' => 'Add New',
                'all_items' => 'All posts',
                'add_new_item' => 'Add New Item'
    
            ),
            'public'    => true,
            'supports'  => array('custom-fields','title','editor','thumbnail'),
            'menu_icon' => 'dashicons-clipboard'
        ));
        }
    add_action('init' , 'What_I_do_section_post_function');

    function experience_section_post_function(){
    register_post_type('experience_section', array(
        'labels' => array(
            'menu_name' => 'Experience Section',
            'name' => 'Experience Section',
            'add_new' => 'Add New',
            'all_items' => 'All posts',
            'add_new_item' => 'Add New Item'

        ),
        'public'    => true,
        'supports'  => array('custom-fields','title','editor','thumbnail'),
        'menu_icon' => 'dashicons-clipboard'
    ));
    }
    add_action('init' , 'experience_section_post_function');


    
    function latest_news_section_post_function(){
        register_post_type('latest_news', array(
            'labels' => array(
                'menu_name' => 'Latest News Section',
                'name' => 'latest_news',
                'add_new' => 'Add New',
                'all_items' => 'All posts',
                'add_new_item' => 'Add New Item'
    
            ),
            'public'    => true,
            'supports'  => array('custom-fields','title','editor','thumbnail'),
            'menu_icon' => 'dashicons-clipboard'
        ));
        }
        add_action('init' , 'latest_news_section_post_function');

        


    require_once('inc/redux-framework/redux-framework.php');
    require_once('inc/barebones-config.php'); 
    