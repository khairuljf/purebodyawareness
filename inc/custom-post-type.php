<?php



/*CONTACT CPT*/
function purebodyawareness_ctp(){

    $labels = array(
        'name'             => 'Press',
        'singular_name'    => 'Press',
        'menu_name'        => 'Press',
        'name_admin_bar'   => 'Press'
    );

    $args = array(
        'labels'           => $labels,
        'show_ui'          => true,
        'show_in_menu'     => true,
        'capability_type'  => 'post',
        'hierarchical'     => false,
        'menu_postion'     =>26,
        'menu_icon'        => 'dashicons-email-alt',
        'supports'         =>array('title', 'editor', 'thumbnail')
    );

    register_post_type('press', $args);

}
add_action('init', 'purebodyawareness_ctp');
