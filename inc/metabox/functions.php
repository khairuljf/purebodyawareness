<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/CMB2/CMB2
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}

/**
 * Conditionally displays a metabox when used as a callback in the 'show_on_cb' cmb2_box parameter
 *
 * @param  CMB2 $cmb CMB2 object.
 *
 * @return bool      True if metabox should show
 */
function yourprefix_show_if_front_page( $cmb ) {
	// Don't show this metabox if it's not the front page template.
	if ( get_option( 'page_on_front' ) !== $cmb->object_id ) {
		return false;
	}
	return true;
}

/**
 * Conditionally displays a field when used as a callback in the 'show_on_cb' field parameter
 *
 * @param  CMB2_Field $field Field object.
 *
 * @return bool              True if metabox should show
 */
function yourprefix_hide_if_no_cats( $field ) {
	// Don't show this field if not in the cats category.
	if ( ! has_tag( 'cats', $field->object_id ) ) {
		return false;
	}
	return true;
}

/**
 * Manually render a field.
 *
 * @param  array      $field_args Array of field arguments.
 * @param  CMB2_Field $field      The field object.
 */
function yourprefix_render_row_cb( $field_args, $field ) {
	$classes     = $field->row_classes();
	$id          = $field->args( 'id' );
	$label       = $field->args( 'name' );
	$name        = $field->args( '_name' );
	$value       = $field->escaped_value();
	$description = $field->args( 'description' );
	?>
	<div class="custom-field-row <?php echo esc_attr( $classes ); ?>">
		<p><label for="<?php echo esc_attr( $id ); ?>"><?php echo esc_html( $label ); ?></label></p>
		<p><input id="<?php echo esc_attr( $id ); ?>" type="text" name="<?php echo esc_attr( $name ); ?>" value="<?php echo $value; ?>"/></p>
		<p class="description"><?php echo esc_html( $description ); ?></p>
	</div>
	<?php
}

/**
 * Manually render a field column display.
 *
 * @param  array      $field_args Array of field arguments.
 * @param  CMB2_Field $field      The field object.
 */
function yourprefix_display_text_small_column( $field_args, $field ) {
	?>
	<div class="custom-column-display <?php echo esc_attr( $field->row_classes() ); ?>">
		<p><?php echo $field->escaped_value(); ?></p>
		<p class="description"><?php echo esc_html( $field->args( 'description' ) ); ?></p>
	</div>
	<?php
}

/**
 * Conditionally displays a message if the $post_id is 2
 *
 * @param  array      $field_args Array of field parameters.
 * @param  CMB2_Field $field      Field object.
 */
function yourprefix_before_row_if_2( $field_args, $field ) {
	if ( 2 == $field->object_id ) {
		echo '<p>Testing <b>"before_row"</b> parameter (on $post_id 2)</p>';
	} else {
		echo '<p>Testing <b>"before_row"</b> parameter (<b>NOT</b> on $post_id 2)</p>';
	}
}

//add_action( 'cmb2_admin_init', 'yourprefix_register_demo_metabox' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */





function banner_section() {
	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_demo = new_cmb2_box( array(
		'id'            => 'banner_section',
		'title'         => esc_html__( 'Banner Section', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
		// 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
		// 'context'    => 'normal',
//		 'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.

	) );


	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Banner Title', 'cmb2' ),
		'desc' => esc_html__( 'Please enter banner title (If available for this page)', 'cmb2' ),
		'id'   => 'banner_title',
		'type' => 'text',
		// 'repeatable' => true,
		// 'column' => array(
		// 	'name'     => esc_html__( 'Column Title', 'cmb2' ), // Set the admin column title
		// 	'position' => 2, // Set as the second column.
		// );
		// 'display_cb' => 'yourprefix_display_text_small_column', // Output the display of the column values through a callback.
	) );
    $cmb_demo->add_field( array(
        'name' => esc_html__( 'Banner Subtitle', 'cmb2' ),
        'desc' => esc_html__( 'Please enter banner subtitle (If available for this page)', 'cmb2' ),
        'id'   => 'banner_subtitle',
        'type' => 'text',
        // 'repeatable' => true,
        // 'column' => array(
        // 	'name'     => esc_html__( 'Column Title', 'cmb2' ), // Set the admin column title
        // 	'position' => 2, // Set as the second column.
        // );
        // 'display_cb' => 'yourprefix_display_text_small_column', // Output the display of the column values through a callback.
    ) );
    $cmb_demo->add_field( array(
        'name' => esc_html__( 'Banner Button Name', 'cmb2' ),
        'desc' => esc_html__( 'Please enter banner button Name (If available for this page)', 'cmb2' ),
        'id'   => 'banner_button_name',
        'type' => 'text_small',
        // 'repeatable' => true,
        // 'column' => array(
        // 	'name'     => esc_html__( 'Column Title', 'cmb2' ), // Set the admin column title
        // 	'position' => 2, // Set as the second column.
        // );
        // 'display_cb' => 'yourprefix_display_text_small_column', // Output the display of the column values through a callback.
    ) );
    $cmb_demo->add_field( array(
        'name' => esc_html__( 'Button Link', 'cmb2' ),
        'desc' => esc_html__( 'Enter Button link', 'cmb2' ),
        'id'   => 'banner_button_url',
        'type' => 'text_url',
        // 'repeatable' => true,
        // 'column' => array(
        // 	'name'     => esc_html__( 'Column Title', 'cmb2' ), // Set the admin column title
        // 	'position' => 2, // Set as the second column.
        // );
        // 'display_cb' => 'yourprefix_display_text_small_column', // Output the display of the column values through a callback.
    ) );
    $cmb_demo->add_field( array(
        'name' => esc_html__( 'Banner Overlay', 'cmb2' ),
        'desc' => esc_html__( 'Do you want overlay?', 'cmb2' ),
        'id'   => 'banner_overlay',
        'type' => 'checkbox'
    ) );

    $cmb_demo->add_field( array(
        'name'    => 'Test Color Picker',
        'id'      => 'wiki_test_colorpicker',
        'type'    => 'colorpicker',
        'default' => '#ffffff',
        'hide' => true,
        'attributes'    => array(
            'data-conditional-id'     => 'banner_overlay',
            'data-conditional-value'  => 1,
        ),
    ) );


    $cmb_demo->add_field( array(
        'name'          => __( 'Conditional select test:', 'your-text-domain' ),
        'desc'          => __('some description', 'your-text-domain'),
        'id'            => 'test_select_id',
        'type'          => 'select',
        'options'       => array(
            'one'    => __('one', 'your-text-domain' ),
            'two'    => __('two', 'your-text-domain'),
            'three'  => __('three', 'your-text-domain'),
        ),
    ) );
    // conditional field
    $cmb_demo->add_field(array(
        'name'          => __( 'Will show on value two selected', 'your-text-domain' ),
        'desc'          => __('some description', 'your-text-domain'),
        'id'            => 'test_select_depend',
        'type'          => 'select',
        'options'       => array(
            'four'   => __('Four', 'your-text-domain'),
            'five'   => __('Five', 'your-text-domain'),
            'six'    => __('Six', 'your-text-domain'),
        ),
        'attributes'    => array(
            'data-conditional-id'     => 'test_select_id',
            'data-conditional-value'  => 'two',
        ),
    ) );


}

add_action( 'cmb2_admin_init', 'banner_section' );

function pressReadMore() {
    /**
     * Sample metabox to demonstrate each field type included
     */
    $cmb_demo = new_cmb2_box( array(
        'id'            => 'press_ctp',
        'title'         => esc_html__( 'Other Options', 'cmb2' ),
        'object_types'  => array( 'press' ), // Post type
        // 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
        // 'context'    => 'normal',
        'priority'   => 'high',
        // 'show_names' => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // true to keep the metabox closed by default
        // 'classes'    => 'extra-class', // Extra cmb2-wrap classes
        // 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.

    ) );


    $cmb_demo->add_field( array(
        'name' => esc_html__( 'Read More URL', 'cmb2' ),
        'desc' => esc_html__( 'Please enter banner title (If available for this page)', 'cmb2' ),
        'id'   => 'press_read_url',
        'type' => 'text_url',
        // 'repeatable' => true,
        // 'column' => array(
        // 	'name'     => esc_html__( 'Column Title', 'cmb2' ), // Set the admin column title
        // 	'position' => 2, // Set as the second column.
        // );
        // 'display_cb' => 'yourprefix_display_text_small_column', // Output the display of the column values through a callback.
    ) );

}

add_action( 'cmb2_admin_init', 'pressReadMore' );

function other_demo_section_for_copy() {
    /**
     * Sample metabox to demonstrate each field type included
     */
    $cmb_demo = new_cmb2_box( array(
        'id'            => 'demo_section',
        'title'         => esc_html__( 'Demo Section for copy', 'cmb2' ),
        'object_types'  => array( 'page' ), // Post type
        // 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
        // 'context'    => 'normal',
         'priority'   => 'high',
        // 'show_names' => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // true to keep the metabox closed by default
        // 'classes'    => 'extra-class', // Extra cmb2-wrap classes
        // 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.

    ) );


    $cmb_demo->add_field( array(
        'name' => esc_html__( 'Demo Field', 'cmb2' ),
        'desc' => esc_html__( 'Please enter banner title (If available for this page)', 'cmb2' ),
        'id'   => 'demo_field',
        'type' => 'text',
        // 'repeatable' => true,
        // 'column' => array(
        // 	'name'     => esc_html__( 'Column Title', 'cmb2' ), // Set the admin column title
        // 	'position' => 2, // Set as the second column.
        // );
        // 'display_cb' => 'yourprefix_display_text_small_column', // Output the display of the column values through a callback.
    ) );

}

add_action( 'cmb2_admin_init', 'other_demo_section_for_copy' );
