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

if (file_exists(dirname(__FILE__) . '/cmb2/init.php')) {
    require_once dirname(__FILE__) . '/cmb2/init.php';
} elseif (file_exists(dirname(__FILE__) . '/CMB2/init.php')) {
    require_once dirname(__FILE__) . '/CMB2/init.php';
}

/**
 * Conditionally displays a metabox when used as a callback in the 'show_on_cb' cmb2_box parameter
 *
 * @param CMB2 $cmb CMB2 object.
 *
 * @return bool      True if metabox should show
 */
function yourprefix_show_if_front_page($cmb)
{
    // Don't show this metabox if it's not the front page template.
    if (get_option('page_on_front') !== $cmb->object_id) {
        return false;
    }
    return true;
}

/**
 * Conditionally displays a field when used as a callback in the 'show_on_cb' field parameter
 *
 * @param CMB2_Field $field Field object.
 *
 * @return bool              True if metabox should show
 */
function yourprefix_hide_if_no_cats($field)
{
    // Don't show this field if not in the cats category.
    if (!has_tag('cats', $field->object_id)) {
        return false;
    }
    return true;
}

/**
 * Manually render a field.
 *
 * @param array $field_args Array of field arguments.
 * @param CMB2_Field $field The field object.
 */
function yourprefix_render_row_cb($field_args, $field)
{
    $classes = $field->row_classes();
    $id = $field->args('id');
    $label = $field->args('name');
    $name = $field->args('_name');
    $value = $field->escaped_value();
    $description = $field->args('description');
    ?>
    <div class="custom-field-row <?php echo esc_attr($classes); ?>">
        <p><label for="<?php echo esc_attr($id); ?>"><?php echo esc_html($label); ?></label></p>
        <p><input id="<?php echo esc_attr($id); ?>" type="text" name="<?php echo esc_attr($name); ?>"
                  value="<?php echo $value; ?>"/></p>
        <p class="description"><?php echo esc_html($description); ?></p>
    </div>
    <?php
}

/**
 * Manually render a field column display.
 *
 * @param array $field_args Array of field arguments.
 * @param CMB2_Field $field The field object.
 */
function yourprefix_display_text_small_column($field_args, $field)
{
    ?>
    <div class="custom-column-display <?php echo esc_attr($field->row_classes()); ?>">
        <p><?php echo $field->escaped_value(); ?></p>
        <p class="description"><?php echo esc_html($field->args('description')); ?></p>
    </div>
    <?php
}

/**
 * Conditionally displays a message if the $post_id is 2
 *
 * @param array $field_args Array of field parameters.
 * @param CMB2_Field $field Field object.
 */
function yourprefix_before_row_if_2($field_args, $field)
{
    if (2 == $field->object_id) {
        echo '<p>Testing <b>"before_row"</b> parameter (on $post_id 2)</p>';
    } else {
        echo '<p>Testing <b>"before_row"</b> parameter (<b>NOT</b> on $post_id 2)</p>';
    }
}

//add_action( 'cmb2_admin_init', 'yourprefix_register_demo_metabox' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */


function banner_section()
{
    /**
     * Sample metabox to demonstrate each field type included
     */
    $cmb_demo = new_cmb2_box(array(
        'id' => 'banner_section',
        'title' => esc_html__('Banner Section', 'cmb2'),
        'object_types' => array('page'), // Post type
        'show_on' => array( 'key' => 'page-template', 'value' => array('page-template/Front-page-template.php', 'page-template/page-two-columns.php') ),
    ));


    $cmb_demo->add_field(array(
        'name' => esc_html__('Banner Title', 'cmb2'),
        'desc' => esc_html__('Please enter banner title (If available for this page)', 'cmb2'),
        'id' => 'banner_title',
        'type' => 'text',
    ));
    $cmb_demo->add_field(array(
        'name' => esc_html__('Banner Subtitle', 'cmb2'),
        'desc' => esc_html__('Please enter banner subtitle (If available for this page)', 'cmb2'),
        'id' => 'banner_subtitle',
        'type' => 'text',
    ));
    $cmb_demo->add_field(array(
        'name' => 'Banner Button Name',
        'desc' => 'Please enter banner button Name',
        'id' => 'banner_button_name',
        'type' => 'text',

    ));
    $cmb_demo->add_field(array(
        'name' => esc_html__('Button Link', 'cmb2'),
        'desc' => esc_html__('Enter Button link', 'cmb2'),
        'id' => 'banner_button_url',
        'type' => 'text_url',
    ));
    $cmb_demo->add_field(array(
        'name' => esc_html__('Banner Overlay', 'cmb2'),
        'desc' => esc_html__('Do you want overlay?', 'cmb2'),
        'id' => 'banner_overlay',
        'type' => 'checkbox'
    ));

    $cmb_demo->add_field(array(
        'name' => 'Banner Overlay Color',
        'id' => 'banner_overlay_color',
        'type' => 'colorpicker',
        'default' => '#ffffff',
        'attributes' => array(
            'data-conditional-id' => 'banner_overlay',
            'data-conditional-value' => 1,
        ),
        'options' => array(
            'alpha' => true, // Make this a rgba color picker.
        ),
    ));

    $cmb_demo->add_field(array(
        'name' => esc_html__('Add Class', 'cmb2'),
        'id' => 'addBannerClass',
        'type' => 'text',
        'desc' => 'Add Class to Section'
    ));

}

add_action('cmb2_admin_init', 'banner_section');

//function banner_section_only_image(){
//    $cmb_demo = new_cmb2_box(array(
//        'id' => 'banner_section_only_img',
//        'title' => esc_html__('Banner Image Option', 'cmb2'),
//        'object_types' => array('page'), // Post type
//        'show_on' => array( 'key' => 'page-template', 'value' => array( 'page-template/donate-to-ggo-template.php','page-template/fundraise-for-ggo.php') ),
//    ));
//
//    $cmb_demo->add_field(array(
//        'name' => esc_html__('Upload image', 'cmb2'),
//        'id' => 'only_banner_img',
//        'type' => 'file',
//        'desc' => 'Add image for banner'
//    ));
//
//}
//add_action('cmb2_admin_init', 'banner_section_only_image');

function donate_page_footer(){
    $cmb_demo = new_cmb2_box(array(
        'id' => 'donate_page_field_footer',
        'title' => esc_html__('Footer above option', 'cmb2'),
        'object_types' => array('page'), // Post type
        'show_on' => array( 'key' => 'page-template', 'value' => array( 'page-template/donate-to-ggo-template.php', 'page-template/other-ways-to-give-template.php') ),
    ));

    $cmb_demo->add_field(array(
        'name' => esc_html__('Donate footer above title', 'cmb2'),
        'id' => 'donate_footer_title',
        'type' => 'text',
        'desc' => 'Enter Donate footer above title'
    ));
    $cmb_demo->add_field(array(
        'name' => esc_html__('Description', 'cmb2'),
        'id' => 'donate_footer_title_desc',
        'type' => 'text',
        'desc' => 'Add Description'
    ));
    $cmb_demo->add_field(array(
        'name' => esc_html__('Button 1 Name', 'cmb2'),
        'id' => 'donate_footer_btn1_name',
        'type' => 'text',
        'desc' => 'Button 1 Name'
    ));
    $cmb_demo->add_field(array(
        'name' => esc_html__('Button 1 URL', 'cmb2'),
        'id' => 'donate_footer_btn1_url',
        'type' => 'text',
        'desc' => 'Button 1 URL'
    ));
    $cmb_demo->add_field(array(
        'name' => esc_html__('Button 2 Name', 'cmb2'),
        'id' => 'donate_footer_btn2_name',
        'type' => 'text',
        'desc' => 'Button 2 Name'
    ));
    $cmb_demo->add_field(array(
        'name' => esc_html__('Button 2 URL', 'cmb2'),
        'id' => 'donate_footer_btn2_url',
        'type' => 'text',
        'desc' => 'Button 2 url'
    ));
}

add_action('cmb2_admin_init', 'donate_page_footer');

function pressReadMore()
{
    /**
     * Sample metabox to demonstrate each field type included
     */
    $cmb_demo = new_cmb2_box(array(
        'id' => 'press_ctp',
        'title' => 'Other Options',
        'object_types' => array('press'), // Post type
        'priority' => 'high',
    ));


    $cmb_demo->add_field(array(
        'name' => esc_html__('Read More URL', 'cmb2'),
        'desc' => esc_html__('Please enter banner title (If available for this page)', 'cmb2'),
        'id' => 'press_read_url',
        'type' => 'text_url',
    ) );

}

add_action('cmb2_admin_init', 'pressReadMore');


function page_cta()
{
    $cmb_demo = new_cmb2_box(array(
        'id' => 'cta_section',
        'title' => esc_html__('Call To Action - Above Footer ', 'cmb2'),
        'object_types' => array('page'),
        'show_on' => array( 'key' => 'page-template', 'value' => array('page-template/fundraise-for-ggo.php', 'page-template/page-press.php') ),
        'priority' => 'high',
    ));

    $cmb_demo->add_field(array(
        'name' => esc_html__('Active Call to Action', 'cmb2'),
        'id' => 'cta_active',
        'type' => 'checkbox'
    ));

    $cmb_demo->add_field(array(
        'name' => esc_html__('Add Class', 'cmb2'),
        'id' => 'addClass',
        'type' => 'text',
        'desc' => 'Add Class to Section ex. white-outline',
        'attributes' => array(
            'data-conditional-id' => 'cta_active',
            'data-conditional-value' => 1,
        ),
    ));

    $cmb_demo->add_field(array(
        'name' => esc_html__('CTA Title', 'cmb2'),
        'id' => 'cta_title',
        'type' => 'text',
        'attributes' => array(
            'data-conditional-id' => 'cta_active',
            'data-conditional-value' => 1,
        ),
    ));
    $cmb_demo->add_field(array(
        'name' => esc_html__('CTA Subtitle', 'cmb2'),
        'id' => 'cta_subtitle',
        'type' => 'textarea_small',
        'attributes' => array(
            'data-conditional-id' => 'cta_active',
            'data-conditional-value' => 1,
        ),
    ));

    $cmb_demo->add_field(array(
        'name' => esc_html__('CTA Button Name', 'cmb2'),
        'id' => 'cta_button_name',
        'type' => 'text',
        'attributes' => array(
            'data-conditional-id' => 'cta_active',
            'data-conditional-value' => 1,
        ),
    ));
    $cmb_demo->add_field(array(
        'name' => esc_html__('Button Link', 'cmb2'),
        'id' => 'cta_button_url',
        'type' => 'text_url',
        'attributes' => array(
            'data-conditional-id' => 'cta_active',
            'data-conditional-value' => 1,
        ),
    ));

    $cmb_demo->add_field(array(
        'name' => esc_html__('CTA Button Name 2', 'cmb2'),
        'id' => 'cta_button_name2',
        'type' => 'text',
        'attributes' => array(
            'data-conditional-id' => 'cta_active',
            'data-conditional-value' => 1,
        ),
    ));
    $cmb_demo->add_field(array(
        'name' => esc_html__('Button Link 2', 'cmb2'),
        'id' => 'cta_button_url2',
        'type' => 'text_url',
        'attributes' => array(
            'data-conditional-id' => 'cta_active',
            'data-conditional-value' => 1,
        ),
    ));

    $cmb_demo->add_field(array(
        'name' => esc_html__('CTA Background Image', 'cmb2'),
        'id' => 'cta_bg_img',
        'type' => 'file',
        'attributes' => array(
            'data-conditional-id' => 'cta_active',
            'data-conditional-value' => 1,
        ),
        'options' => array(
            'url' => true,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Background Image'
        ),
        'query_args' => array(
            'type' => array(
                'image/jpeg',
                'image/png'
            )

        ),
        'preview_size' => 'medium',
    ));

    $cmb_demo->add_field(array(
        'name' => esc_html__('Add CTA Overlay', 'cmb2'),
        'id' => 'cta_show_overlay',
        'type' => 'checkbox',
        'attributes' => array(
            'data-conditional-id' => 'cta_active',
            'data-conditional-value' => 1,
        )
    ));

    $cmb_demo->add_field(array(
        'name' => 'CTA Overlay Color',
        'id' => 'cta_overlay',
        'type' => 'colorpicker',
        'default' => '#ffffff',
        'attributes' => array(
            'data-conditional-id' => 'cta_show_overlay',
            'data-conditional-value' => 1,
        ),
        'options' => array(
            'alpha' => true, // Make this a rgba color picker.
        ),
    ));
}
add_action('cmb2_admin_init', 'page_cta');

// Only for abous us page
function about_page_cta() {
    $cmb_demo = new_cmb2_box(array(
        'id' => 'aboutCta_section',
        'title' => esc_html__('About US top Call To Action', 'cmb2'),
        'show_on' => array( 'key' => 'page-template', 'value' => array('page-template/about-us-template.php') ),
        'object_types' => array('page'),
        'priority' => 'high',
        'desc' => 'This call to action only show on About Us Page'
    ));

    $cmb_demo->add_field(array(
        'name' => esc_html__('Active Call to Action', 'cmb2'),
        'id' => 'about_cta_active',
        'type' => 'checkbox'
    ));

    $cmb_demo->add_field(array(
        'name' => esc_html__('Add Class', 'cmb2'),
        'id' => 'aboutAddClass',
        'type' => 'text',
        'desc' => 'Add Class to Section ex. white-outline',
        'attributes' => array(
            'data-conditional-id' => 'about_cta_active',
            'data-conditional-value' => 1,
        ),
    ));

    $cmb_demo->add_field(array(
        'name' => esc_html__('CTA Title', 'cmb2'),
        'id' => 'aboutCta_title',
        'type' => 'text',
        'attributes' => array(
            'data-conditional-id' => 'about_cta_active',
            'data-conditional-value' => 1,
        ),
    ));
    $cmb_demo->add_field(array(
        'name' => esc_html__('CTA Subtitle', 'cmb2'),
        'id' => 'aboutCta_subtitle',
        'type' => 'textarea_small',
        'attributes' => array(
            'data-conditional-id' => 'about_cta_active',
            'data-conditional-value' => 1,
        ),
    ));

    $cmb_demo->add_field(array(
        'name' => esc_html__('CTA Button Name', 'cmb2'),
        'id' => 'aboutCta_button_name',
        'type' => 'text',
        'attributes' => array(
            'data-conditional-id' => 'about_cta_active',
            'data-conditional-value' => 1,
        ),
    ));
    $cmb_demo->add_field(array(
        'name' => esc_html__('Button Link', 'cmb2'),
        'id' => 'aboutCta_button_url',
        'type' => 'text_url',
        'attributes' => array(
            'data-conditional-id' => 'about_cta_active',
            'data-conditional-value' => 1,
        ),
    ));

    $cmb_demo->add_field(array(
        'name' => esc_html__('CTA Background Image', 'cmb2'),
        'id' => 'aboutCta_bg_img',
        'type' => 'file',
        'attributes' => array(
            'data-conditional-id' => 'about_cta_active',
            'data-conditional-value' => 1,
        ),
        'options' => array(
            'url' => true,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Background Image'
        ),
        'query_args' => array(
            'type' => array(
                'image/jpeg',
                'image/png'
            )

        ),
        'preview_size' => 'medium',
    ));

    $cmb_demo->add_field(array(
        'name' => esc_html__('Add CTA Overlay', 'cmb2'),
        'id' => 'about_cta_show_overlay',
        'type' => 'checkbox',
        'attributes' => array(
            'data-conditional-id' => 'about_cta_active',
            'data-conditional-value' => 1,
        )
    ));

    $cmb_demo->add_field(array(
        'name' => 'CTA Overlay Color',
        'id' => 'about_cta_overlay',
        'type' => 'colorpicker',
        'default' => '#ffffff',
        'attributes' => array(
            'data-conditional-id' => 'about_cta_show_overlay',
            'data-conditional-value' => 1,
        ),
        'options' => array(
            'alpha' => true, // Make this a rgba color picker.
        ),
    ));
}
add_action('cmb2_admin_init', 'about_page_cta');

// Two Column Page
function two_column_section() {

    $cmb_demo = new_cmb2_box(array(
        'id' => 'two_column_page',
        'title' => esc_html__('Two Column Page Contents', 'cmb2'),
        'object_types' => array('page')
    ));

    $group_field_id = $cmb_demo->add_field(array(
        'id' => 'two_column_repeat_group',
        'type' => 'group',
        'options' => array(
            'group_title' => __('Entry {#}', 'cmb2'), // since version 1.1.4, {#} gets replaced by row number
            'add_button' => __('Add Another Entry', 'cmb2'),
            'remove_button' => __('Remove Entry', 'cmb2'),
            'sortable' => true,
        ),
    ));

    $cmb_demo->add_group_field($group_field_id, array(
        'name' => 'Two Column Title',
        'id' => 'two_column_title',
        'type' => 'text',
    ));

    $cmb_demo->add_group_field($group_field_id, array(
        'name' => 'Add Class',
        'id' => 'two_column_customClass',
        'type' => 'text',
    ));

    $cmb_demo->add_group_field($group_field_id, array(
        'name' => 'Two Column Desc',
        'id' => 'two_column_desc',
        'type' => 'wysiwyg',
        'options' => array(),
    ));
    $cmb_demo->add_group_field($group_field_id, array(
        'name' => 'Button Name',
        'id' => 'two_column_btn',
        'type' => 'text',
    ));
    $cmb_demo->add_group_field($group_field_id, array(
        'name' => 'Button Link',
        'id' => 'two_column_btn_link',
        'type' => 'text_url',
    ));

    $cmb_demo->add_group_field($group_field_id, array(
        'name' => 'Button Name 2',
        'id' => 'two_column_btn2',
        'type' => 'text',
    ));
    $cmb_demo->add_group_field($group_field_id, array(
        'name' => 'Button Link 2',
        'id' => 'two_column_btn_link2',
        'type' => 'text_url',
    ));

    $cmb_demo->add_group_field($group_field_id, array(
        'name' => 'Two Column Image',
        'id' => 'two_column_image',
        'type' => 'file',
        'options' => array(
            'url' => true,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Image'
        ),
        'query_args' => array(
            'type' => array(
                'image/jpeg',
                'image/png'
            )
        ),
        'preview_size' => 'medium',
    ));

    $cmb_demo->add_group_field($group_field_id, array(
        'name' => 'Image Alignment',
        'id' => 'two_column_image_align',
        'type' => 'select',
        'show_option_none' => false,
        'default' => 'media-right',
        'options' => array(
            'media-right' => 'Right Side',
            'media-left' => 'Left Side'
        ),
    ));

}

add_action('cmb2_admin_init', 'two_column_section');

function interested_section()
{
    $cmb_demo = new_cmb2_box(array(
        'id' => 'interested_section',
        'title' => 'Interested Section',
        'object_types' => array('page'),
        'show_on' => array( 'key' => 'page-template', 'value' => array('page-template/partnerships.php') ),
        'priority' => 'high'
    ));

    $cmb_demo->add_field(array(
        'id' => 'ititle',
        'name' => 'Title',
        'type' => 'text'
    ));

    $cmb_demo->add_field(array(
        'name' => 'Description',
        'id' => 'idesc',
        'type' => 'wysiwyg'
    ));
    $cmb_demo->add_field(array(
        'name' => 'Button Name',
        'id' => 'ibtn',
        'type' => 'text'
    ));
    $cmb_demo->add_field(array(
        'name' => 'Button Url',
        'id' => 'iurl',
        'type' => 'text',
        'desc' => 'Enter Email Address'
    ));

}

add_action('cmb2_admin_init', 'interested_section');

function align_brand()
{
    $cmb_demo = new_cmb2_box(array(
        'id' => 'align_brand_section',
        'title' => 'Align Brand Section',
        'object_types' => array('page'),
        'show_on' => array( 'key' => 'page-template', 'value' => array('page-template/fundraise-for-ggo.php') ),
        'priority' => 'high'
    ));

    $cmb_demo->add_field(array(
        'name' => esc_html__('Partnership Banner Image', 'cmb2'),
        'id' => 'partnership_banner_bg',
        'type' => 'file',
        'options' => array(
            'url' => true,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Background Image'
        ),
        'query_args' => array(
            'type' => array(
                'image/jpeg',
                'image/png'
            )

        ),
        'preview_size' => 'medium',
    ));
    $cmb_demo->add_field(array(
        'name' => esc_html__('Partnership Parallax Image', 'cmb2'),
        'id' => 'partnership_parallax_bg',
        'type' => 'file',
        'options' => array(
            'url' => true,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Background Image'
        ),
        'query_args' => array(
            'type' => array(
                'image/jpeg',
                'image/png'
            )

        ),
        'preview_size' => 'medium',
    ));

    $cmb_demo->add_field(array(
        'id' => 'atitle',
        'name' => 'Title',
        'type' => 'text'
    ));

    $cmb_demo->add_field(array(
        'name' => 'Description',
        'id' => 'adesc',
        'type' => 'wysiwyg'
    ));
}

add_action('cmb2_admin_init', 'align_brand');

function partner_accordion()
{
    $cmb_demo = new_cmb2_box(array(
        'id' => 'partner_accordion_section',
        'title' => 'Partner Accordion Section',
        'show_on' => array( 'key' => 'page-template', 'value' => array('page-template/partnerships.php') ),
        'object_types' => array('page'),
        'priority' => 'high'
    ));

    $cmb_demo->add_field(array(
        'name' => 'Accordion Main Title',
        'id' => 'accordion_main_title',
        'type' => 'text',
    ));

    $group_field_id = $cmb_demo->add_field(array(
        'id' => 'partner_accordion_group',
        'type' => 'group',
        'options' => array(
            'group_title' => __('Entry {#}', 'cmb2'), // since version 1.1.4, {#} gets replaced by row number
            'add_button' => __('Add Another Entry', 'cmb2'),
            'remove_button' => __('Remove Entry', 'cmb2'),
            'sortable' => true,
        ),
    ));

    $cmb_demo->add_group_field($group_field_id, array(
        'name' => 'Title',
        'id' => 'accordion_title',
        'type' => 'text',
    ));

    $cmb_demo->add_group_field($group_field_id, array(
        'name' => 'Description',
        'id' => 'accordion_desc',
        'type' => 'wysiwyg',
    ));

    $cmb_demo->add_group_field($group_field_id, array(
        'name' => 'Button Name',
        'id' => 'accordion_btn',
        'type' => 'text',
    ));

    $cmb_demo->add_group_field($group_field_id, array(
        'name' => 'Button Url',
        'id' => 'accordion_url',
        'type' => 'text',
    ));
}

add_action('cmb2_admin_init', 'partner_accordion');

function other_way_group(){
    $cmb_demo = new_cmb2_box(array(
        'id' => 'other_way_options',
        'title' => 'Other Way Group Fields',
        'show_on' => array( 'key' => 'page-template', 'value' => array('page-template/other-ways-to-give-template.php') ),
        'object_types' => array('page'),
        'priority' => 'high'
    ));
    $group_field_id = $cmb_demo->add_field(array(
        'id' => 'other_way_group',
        'type' => 'group',
        'options' => array(
            'group_title' => __('Entry {#}', 'cmb2'), // since version 1.1.4, {#} gets replaced by row number
            'add_button' => __('Add Another Entry', 'cmb2'),
            'remove_button' => __('Remove Entry', 'cmb2'),
            'sortable' => true,
        ),
    ));

    $cmb_demo->add_group_field($group_field_id, array(
        'name' => 'Title',
        'id' => 'accordion_title',
        'type' => 'text',
    ));
    $cmb_demo->add_group_field($group_field_id, array(
        'name' => 'group_img',
        'id' => 'group_img',
        'type' => 'file',
    ));

    $cmb_demo->add_group_field($group_field_id, array(
        'name' => 'Description',
        'id' => 'accordion_desc',
        'type' => 'wysiwyg',
    ));

    $cmb_demo->add_group_field($group_field_id, array(
        'name' => 'Button Name',
        'id' => 'btn_name',
        'type' => 'text',
    ));

    $cmb_demo->add_group_field($group_field_id, array(
        'name' => 'Button Url',
        'id' => 'btn_url',
        'type' => 'text',
    ));
}
add_action('cmb2_admin_init', 'other_way_group');


function donate_button() {
    $cmb_demo = new_cmb2_box(array(
        'id' => 'post_donate_button_section',
        'title' => 'Donate Button',
        'object_types' => array('post'),
        'priority' => 'high'
    ));
    $cmb_demo->add_field(array(
        'id' => 'donate_class',
        'name' => 'Custom Class',
        'type' => 'text'
    ));
    $cmb_demo->add_field(array(
        'id' => 'donate_btn',
        'name' => 'Donate Button Name',
        'type' => 'text'
    ));

    $cmb_demo->add_field(array(
        'id' => 'donate_btn_url',
        'name' => 'Donate Button Url',
        'type' => 'text_url'
    ));

//    $cmb_demo->add_field(array(
//        'id' => 'donate_width',
//        'name' => 'Donate Width',
//        'type'       => 'text',
//        'attributes' => array(
//            'type' => 'number',
//        ),
//    ));
//    $cmb_demo->add_field(array(
//        'id' => 'donate_height',
//        'name' => 'Donate Height',
//        'type'       => 'text',
//        'attributes' => array(
//            'type' => 'number',
//        ),
//    ));

    $cmb_demo->add_field(array(
        'name' => esc_html__('Donate Background', 'cmb2'),
        'id' => 'donate_bg',
        'type' => 'file',
        'options' => array(
            'url' => true,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Image'
        ),
        'query_args' => array(
            'type' => array(
                'image/jpeg',
                'image/png'
            )

        ),
        'preview_size' => 'medium',
    ));
}

add_action('cmb2_admin_init', 'donate_button');


function gifts_button() {
    $cmb_demo = new_cmb2_box(array(
        'id' => 'gifts_button_section',
        'title' => 'Gift Now',
        'object_types' => array('gifts-for-pet', 'gifts-for-humanitarian', 'gifts-for-environmentalist'),
        'priority' => 'high'
    ));
//    $cmb_demo->add_field(array(
//        'id' => 'gift_section_title',
//        'name' => 'Section Title',
//        'type' => 'text'
//    ));
//    $cmb_demo->add_field(array(
//        'name' => 'Section BG',
//        'id' => 'section_bg',
//        'type' => 'colorpicker',
//        'default' => '#ffffff',
//        'options' => array(
//            'alpha' => true,
//        ),
//    ));

    $cmb_demo->add_field(array(
        'id' => 'gift_now',
        'name' => 'Gift Now Title',
        'type' => 'text'
    ));

    $cmb_demo->add_field(array(
        'id' => 'gift_now_url',
        'name' => 'Gift Now Url',
        'type' => 'text_url'
    ));
}

add_action('cmb2_admin_init', 'gifts_button');

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


//include 'customMeta.php';
include 'customFieldForCTP.php';