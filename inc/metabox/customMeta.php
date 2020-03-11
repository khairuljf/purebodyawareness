<?php

$pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);


if($pageTemplate == 'page-template/about-us-template.php' ){


}


function About_US() {
    $cmb_demo = new_cmb2_box( array(
        'id'            => 'About_US',
        'title'         => esc_html__( 'About US Top Section', 'cmb2' ),
        'object_types'  => array( 'page' ),
        'show_on' => array( 'key' => 'page-template', 'value' => array('page-template/about-us-template.php') ),
        'priority'   => 'high',
    ) );

    $cmb_demo->add_field( array(
        'name'    => 'Section_image',
        'desc'    => 'Upload an image or enter an URL.',
        'id'      => 'about_top_img',
        'type'    => 'file',
        // Optional:
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
        ),
        // query_args are passed to wp.media's library query.
        'query_args' => array(
             'type' => array(
             	'image/jpeg',
             	'image/png',
             ),
        ),
        'preview_size' => 'medium', // Image size to use when previewing in the admin.
    ) );
    $cmb_demo->add_field( array(
        'name' => 'Section Title',
        'desc' => 'Enter the title',
        'type' => 'text',
        'id'   => 'about_1st_title'
    ) );

    $cmb_demo->add_field( array(
        'name'    => 'Section Content',
        'desc'    => 'Content will goes Here',
        'id'      => 'about_top_content',
        'type'    => 'wysiwyg',
        'options' => array(),
    ) );

    $cmb_demo->add_field( array(
        'name'             => 'Button URL 1',
        'desc'             => 'Enter page link',
        'id'               => 'btnurl1',
        'type'             => 'text',

    ) );

    $cmb_demo->add_field( array(
        'name'             => 'Button URL 2',
        'desc'             => 'Enter page link',
        'id'               => 'btnurl2',
        'type'             => 'text',

    ) );

}

add_action( 'cmb2_admin_init', 'About_US' );



