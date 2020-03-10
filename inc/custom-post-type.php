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
        'menu_icon'        => 'dashicons-email-alt',
        'supports'         =>array('title', 'editor', 'thumbnail'),
        'public'              => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_in_rest' => true,

    );

    register_post_type('press', $args);

}
add_action('init', 'purebodyawareness_ctp');