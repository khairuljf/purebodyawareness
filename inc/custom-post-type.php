<?php



/*CONTACT CPT*/
function purebodyawareness_ctp(){

    $labels = array(
        'name'                  => 'Press',
        'singular_name'         => 'Press',
        'menu_name'             => 'Press',
        'name_admin_bar'        => 'Press',
        'parent_item_colon'     => 'Parent Press',
        'all_items'             => 'All Press',
        'view_item'             =>'View Press',
        'add_new_item'          =>'Add New Press',
        'add_new'               =>'Add New',
        'edit_item'             =>'Edit Press',
        'update_item'           =>'Update Press',
        'search_items'          =>'Search Press',
        'not_found'             =>'Not Found',
        'not_found_in_trash'    =>'Not found in Trash',
    );

    $args = array(
        'labels'           => $labels,
        'show_ui'          => true,
        'show_in_menu'     => true,
        'capability_type'  => 'post',
        'hierarchical'     => false,
        'menu_postion'     =>26,
        'menu_icon'        => 'dashicons-admin-page',
        'supports'         =>array('title', 'editor', 'thumbnail'),
        'public'              => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_in_rest' => true,

    );

    register_post_type('press', $args);


    $labels = array(
        'name'                  => 'Meet Our Staff',
        'singular_name'         => 'Meet Our Staff',
        'menu_name'             => 'Meet Our Staff',
        'name_admin_bar'        => 'Meet Our Staff',
        'all_items'             => 'All Staff',
        'view_item'             =>'View Staff',
        'add_new_item'          =>'Add New Staff',
        'add_new'               =>'Add New',
        'edit_item'             =>'Edit Staff',
        'update_item'           =>'Update Staff',
        'search_items'          =>'Search Staff',
        'not_found'             =>'Not Found',
        'not_found_in_trash'    =>'Not found in Trash',
    );

    $args = array(
        'labels'           => $labels,
        'show_ui'          => true,
        'show_in_menu'     => true,
        'capability_type'  => 'post',
        'hierarchical'     => false,
        'menu_postion'     =>26,
        'menu_icon'        => 'dashicons-buddicons-buddypress-logo',
        'supports'         =>array('title', 'editor', 'thumbnail'),
        'public'              => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_in_rest' => true,

    );

    register_post_type('meet-our-staff', $args);

    $labels = array(
        'name'                  => 'Meet Our Board',
        'singular_name'         => 'Meet Our Board',
        'menu_name'             => 'Meet Our Board',
        'name_admin_bar'        => 'Meet Our Board',
        'all_items'             => 'All Board',
        'view_item'             =>'View Board',
        'add_new_item'          =>'Add New Board',
        'add_new'               =>'Add New',
        'edit_item'             =>'Edit Staff',
        'update_item'           =>'Update Board',
        'search_items'          =>'Search Board',
        'not_found'             =>'Not Found',
        'not_found_in_trash'    =>'Not found in Trash',
    );

    $args = array(
        'labels'           => $labels,
        'show_ui'          => true,
        'show_in_menu'     => true,
        'capability_type'  => 'post',
        'hierarchical'     => false,
        'menu_postion'     =>26,
        'menu_icon'        => 'dashicons-welcome-learn-more',
        'supports'         =>array('title', 'editor', 'thumbnail'),
        'public'              => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_in_rest' => true,

    );

    register_post_type('meet-our-board', $args);

}
add_action('init', 'purebodyawareness_ctp');
