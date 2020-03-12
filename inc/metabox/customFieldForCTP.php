<?php




function meet_our_staff() {
    $cmb_demo = new_cmb2_box( array(
        'id'            => 'staff_board',
        'title'         => esc_html__( 'Other Options', 'cmb2' ),
        'object_types'  => array( 'meet-our-board', 'meet-our-staff' ),
        'priority'   => 'high',
    ) );


    $cmb_demo->add_field( array(
        'name' => 'Current Position:',
        'type' => 'text',
        'id'   => 'sb_postion'
    ) );

    $cmb_demo->add_field( array(
        'name'    => 'Email',
        'id'      => 'sb_email',
        'type'    => 'text',
    ) );


}

add_action( 'cmb2_admin_init', 'meet_our_staff' );



