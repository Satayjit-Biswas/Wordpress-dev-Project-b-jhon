<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "jhon_ver";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Jhon Options', 'Jhon' ),
        'page_title'           => __( 'Jhon Options', 'Jhon' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => 5,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'Jhon' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'Jhon' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'Jhon' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'Jhon' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'Jhon' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'Jhon' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'Jhon' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'Jhon' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'Jhon' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'Jhon' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'Jhon' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */
    // -> Logo section


    Redux::setSection( $opt_name, array(
        'title' => __( 'logo Section', 'Jhon' ),
        'id'    => 'logo_section',
        'desc'  => __( 'logo Section Option.', 'Jhon' ),
        'icon'  => 'el el-logo'
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'logo img', 'Jhon' ),
        'desc'       => __( 'Header Section logo img, visit: ', 'Jhon' ),
        'id'         => 'logo_section_img',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'logo_section_img_id',
                'type'     => 'media',
                'title'    => __( 'Img', 'Jhon' ),
                'desc'     => __( 'Upload your Header Section logo Img', 'Jhon' ),
                'url'      => true,
                'default'  => array(
                    'url'  => get_template_directory_uri().'/img/logo.png'
                ),
            ),
        )
    ) );

    // -> START home Fields


    Redux::setSection( $opt_name, array(
        'title' => __( 'Home Section', 'Jhon' ),
        'id'    => 'home_section',
        'desc'  => __( 'Home Section Option.', 'Jhon' ),
        'icon'  => 'el el-home'
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Bg img', 'Jhon' ),
        'desc'       => __( 'Header Section bg img, visit: ', 'Jhon' ),
        'id'         => 'home_section_img',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'home_section_img_id',
                'type'     => 'media',
                'title'    => __( 'Background Img', 'Jhon' ),
                'desc'     => __( 'Upload your Header Section Background Img', 'Jhon' ),
                'url'      => true,
                'default'  => array(
                    'url'  => get_template_directory_uri().'/img/home.jpg'
                ),
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Text', 'Jhon' ),
        'desc'       => __( 'Header Section All Text, visit: ', 'Jhon' ),
        'id'         => 'home_section_text',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'home_section_text_a',
                'type'     => 'text',
                'title'    => __( 'Text 1', 'Jhon' ),
                'subtitle' => __( 'Subtitle', 'Jhon' ),
                'desc'     => __( 'Header Section Text a', 'Jhon' ),
                'default'  => 'Hi there I am',
            ),
            array(
                'id'       => 'home_section_text_b',
                'type'     => 'text',
                'title'    => __( 'Text 2', 'Jhon' ),
                'subtitle' => __( 'Subtitle', 'Jhon' ),
                'desc'     => __( 'Header Section Text b', 'Jhon' ),
                'default'  => 'Martin Kupper',
            ),
            array(
                'id'       => 'home_section_text_c',
                'type'     => 'text',
                'title'    => __( 'Text 3', 'Jhon' ),
                'subtitle' => __( 'Subtitle', 'Jhon' ),
                'desc'     => __( 'Header Section Text c', 'Jhon' ),
                'default'  => 'Front-end-Developer',
            ),
        )
    ) );


    //About Me section
    Redux::setSection( $opt_name, array(
        'title' => __( 'About Section', 'Jhon' ),
        'id'    => 'about_section',
        'desc'  => __( 'about Section Option.', 'Jhon' ),
        'icon'  => 'el el-home'
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Your Pic', 'Jhon' ),
        'desc'       => __( 'About Section img, visit: ', 'Jhon' ),
        'id'         => 'about_section_img',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'about_section_img_id',
                'type'     => 'media',
                'title'    => __( 'Background Img', 'Jhon' ),
                'desc'     => __( 'Upload your Header Section Background Img', 'Jhon' ),
                'url'      => true,
                'default'  => array(
                    'url'  => get_template_directory_uri().'/img/me.jpg'
                ),
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Text', 'Jhon' ),
        'desc'       => __( 'About Section All Text, visit: ', 'Jhon' ),
        'id'         => 'about_section_text',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'about_section_text_a',
                'type'     => 'text',
                'title'    => __( 'Birthday', 'Jhon' ),
                'desc'     => __( 'Your birthday', 'Jhon' ),
                'default'  => '19/05/2000',
            ),
            array(
                'id'       => 'about_section_text_b',
                'type'     => 'text',
                'title'    => __( 'Gender', 'Jhon' ),
                'desc'     => __( 'Your Gender', 'Jhon' ),
                'default'  => 'Male',
            ),
            array(
                'id'       => 'about_section_text_c',
                'type'     => 'text',
                'title'    => __( 'E-mail', 'Jhon' ),
                'desc'     => __( 'Your Email', 'Jhon' ),
                'default'  => 'info@gmail.com',
            ),
            array(
                'id'       => 'about_section_text_d',
                'type'     => 'text',
                'title'    => __( 'Country', 'Jhon' ),
                'desc'     => __( 'Your Country', 'Jhon' ),
                'default'  => 'New-York,USA',
            ),
            array(
                'id'       => 'about_section_text_e',
                'type'     => 'text',
                'title'    => __( 'Phone', 'Jhon' ),
                'desc'     => __( 'Your Phone Number', 'Jhon' ),
                'default'  => '+55 (77) 100 20 20',
            ),
            array(
                'id'       => 'about_section_text_f',
                'type'     => 'textarea',
                'title'    => __( 'About Your Self', 'Jhon' ),
                'desc'     => __( 'About Your Self', 'Jhon' ),
                'default'  => 'I am a full stack web developer. consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla...',
            ),
        )
    ) );
    // Redux::setSection( $opt_name, array(
    //     'title'      => __( 'Your CV', 'Jhon' ),
    //     'desc'       => __( 'About Section img, visit: ', 'Jhon' ),
    //     'id'         => 'about_section_cv',
    //     'subsection' => true,
    //     'fields'     => array(
    //         array(
    //             'id'        => 'opt-multi-media',
    //             'type'      => 'multi_media',
    //             'title'     => 'Multi Media Selector',
    //             'subtitle'  => 'Multi file media selector',
    //             'labels'    => array(
    //                 'upload_file'       => __('Select File(s)', 'redux-framework-demo'),
    //                 'remove_image'      => __('Remove Image', 'redux-framework-demo'),
    //                 'remove_file'       => __('Remove', 'redux-framework-demo'),
    //                 'file'              => __('File: ', 'redux-framework-demo'),
    //                 'download'          => __('Download', 'redux-framework-demo'),
    //                 'title'             => __('Multi Media Selector', 'redux-framework-demo'),
    //                 'button'            => __('Add or Upload File','redux-framework-demo')
    //             ),
    //             'library_filter'  => array('gif','jpg','png'),
    //             'max_file_upload' => 5
    //         ),
    //     )
    // ) );




    //Counter section

    Redux::setSection( $opt_name, array(
        'title' => __( 'Counter Section', 'Jhon' ),
        'id'    => 'counter_section',
        'desc'  => __( 'counter Section Option.', 'Jhon' ),
        'icon'  => 'el el-home'
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Counter 1', 'Jhon' ),
        'desc'       => __( 'counter Section img, visit: ', 'Jhon' ),
        'id'         => 'counter_section_a',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'counter_section_a_text_a_id',
                'type'     => 'text',
                'title'    => __( 'Counter Name', 'Jhon' ),
                'desc'     => __( 'Type Your Counter Name', 'Jhon' ),
                'default'  => 'Happy Clients'
                ),
            
            array(
                'id'       => 'counter_section_a_text_b_id',
                'type'     => 'text',
                'title'    => __( 'Counter Number', 'Jhon' ),
                'desc'     => __( 'Type Your Counter Number', 'Jhon' ),
                'default'  => '200'
                ),
        ),
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Counter 2', 'Jhon' ),
        'desc'       => __( 'counter Section img, visit: ', 'Jhon' ),
        'id'         => 'counter_section_b',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'counter_section_b_text_a_id',
                'type'     => 'text',
                'title'    => __( 'Counter Name', 'Jhon' ),
                'desc'     => __( 'Type Your Counter Name', 'Jhon' ),
                'default'  => 'Project Done'
                ),
            
            array(
                'id'       => 'counter_section_b_text_b_id',
                'type'     => 'text',
                'title'    => __( 'Counter Number', 'Jhon' ),
                'desc'     => __( 'Type Your Counter Number', 'Jhon' ),
                'default'  => '370'
                ),
        ),
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Counter 3', 'Jhon' ),
        'desc'       => __( 'counter Section img, visit: ', 'Jhon' ),
        'id'         => 'counter_section_c',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'counter_section_c_text_a_id',
                'type'     => 'text',
                'title'    => __( 'Counter Name', 'Jhon' ),
                'desc'     => __( 'Type Your Counter Name', 'Jhon' ),
                'default'  => 'Sleepless night'
                ),
            
            array(
                'id'       => 'counter_section_c_text_b_id',
                'type'     => 'text',
                'title'    => __( 'Counter Number', 'Jhon' ),
                'desc'     => __( 'Type Your Counter Number', 'Jhon' ),
                'default'  => '2550'
                ),
        ),
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Counter 4', 'Jhon' ),
        'desc'       => __( 'counter Section img, visit: ', 'Jhon' ),
        'id'         => 'counter_section_d',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'counter_section_d_text_a_id',
                'type'     => 'text',
                'title'    => __( 'Counter Name', 'Jhon' ),
                'desc'     => __( 'Type Your Counter Name', 'Jhon' ),
                'default'  => 'Wining award'
                ),
            
            array(
                'id'       => 'counter_section_d_text_b_id',
                'type'     => 'text',
                'title'    => __( 'Counter Number', 'Jhon' ),
                'desc'     => __( 'Type Your Counter Number', 'Jhon' ),
                'default'  => '5'
                ),
        ),
    ) );

    //Footer Section

    Redux::setSection( $opt_name, array(
        'title' => __( 'Footer Section', 'Jhon' ),
        'id'    => 'footer_section',
        'desc'  => __( 'Footer Section Option.', 'Jhon' ),
        'icon'  => 'el el-home'
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Footer', 'Jhon' ),
        'desc'       => __( 'footer Section, visit: ', 'Jhon' ),
        'id'         => 'footer_section_a',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'footer_section_text_id',
                'type'     => 'text',
                'title'    => __( 'Counter Name', 'Jhon' ),
                'desc'     => __( 'Type Your Counter Name', 'Jhon' ),
                'default'  => 'Copyright &copy; 2020. All right reserved.'
            ),
        ),
    ) );


    /*
     * <--- END SECTIONS
     */
