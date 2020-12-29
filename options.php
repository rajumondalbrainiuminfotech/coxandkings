<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'concourse'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __( 'One', 'concourse' ),
		'two' => __( 'Two', 'concourse' ),
		'three' => __( 'Three', 'concourse' ),
		'four' => __( 'Four', 'concourse' ),
		'five' => __( 'Five', 'concourse' )
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __( 'French Toast', 'concourse' ),
		'two' => __( 'Pancake', 'concourse' ),
		'three' => __( 'Omelette', 'concourse' ),
		'four' => __( 'Crepe', 'concourse' ),
		'five' => __( 'Waffle', 'concourse' )
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array(
		'name' => __( 'Header Settings', 'concourse' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Logo', 'concourse' ),
		'desc' => __( 'Site logo', 'concourse' ),
		'id' => 'logo',
		'type' => 'upload'
	);
	

	$options[] = array(
		'name' => __( 'Phone Number', 'concourse' ),
		'desc' => __( '', 'concourse' ),
		'id' => 'phn_num',
		'type' => 'text'
	);
	

	$options[] = array(
		'name' => __( 'Footer Settings', 'concourse' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Facebook Link', 'concourse' ),
		'desc' => __( '', 'concourse' ),
		'id' => 'facebook_link',
		'std' => '#',
		'class' => 'mini',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Twitter Link', 'concourse' ),
		'desc' => __( '', 'concourse' ),
		'id' => 'twitter_link',
		'std' => '#',
		'class' => 'mini',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Google Plus Link', 'concourse' ),
		'desc' => __( '', 'concourse' ),
		'id' => 'gplus_link',
		'std' => '#',
		'class' => 'mini',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Linkedin Link', 'concourse' ),
		'desc' => __( '', 'concourse' ),
		'id' => 'linkedin_link',
		'std' => '#',
		'class' => 'mini',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Vimeo Link', 'concourse' ),
		'desc' => __( '', 'concourse' ),
		'id' => 'vimeo_link',
		'std' => '#',
		'class' => 'mini',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Copyright', 'concourse' ),
		'desc' => __( 'Copyright Section.', 'concourse' ),
		'id' => 'copyright',
		'std' => '',
		'type' => 'textarea'
	);

	/*$options[] = array(
		'name' => __( 'Input Text Mini', 'concourse' ),
		'desc' => __( 'A mini text input field.', 'concourse' ),
		'id' => 'example_text_mini',
		'std' => 'Default',
		'class' => 'mini',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Input Text', 'concourse' ),
		'desc' => __( 'A text input field.', 'concourse' ),
		'id' => 'example_text',
		'std' => 'Default Value',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Input with Placeholder', 'concourse' ),
		'desc' => __( 'A text input field with an HTML5 placeholder.', 'concourse' ),
		'id' => 'example_placeholder',
		'placeholder' => 'Placeholder',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Textarea', 'concourse' ),
		'desc' => __( 'Textarea description.', 'concourse' ),
		'id' => 'example_textarea',
		'std' => 'Default Text',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'Input Select Small', 'concourse' ),
		'desc' => __( 'Small Select Box.', 'concourse' ),
		'id' => 'example_select',
		'std' => 'three',
		'type' => 'select',
		'class' => 'mini', //mini, tiny, small
		'options' => $test_array
	);

	$options[] = array(
		'name' => __( 'Input Select Wide', 'concourse' ),
		'desc' => __( 'A wider select box.', 'concourse' ),
		'id' => 'example_select_wide',
		'std' => 'two',
		'type' => 'select',
		'options' => $test_array
	);

	if ( $options_categories ) {
		$options[] = array(
			'name' => __( 'Select a Category', 'concourse' ),
			'desc' => __( 'Passed an array of categories with cat_ID and cat_name', 'concourse' ),
			'id' => 'example_select_categories',
			'type' => 'select',
			'options' => $options_categories
		);
	}

	if ( $options_tags ) {
		$options[] = array(
			'name' => __( 'Select a Tag', 'options_check' ),
			'desc' => __( 'Passed an array of tags with term_id and term_name', 'options_check' ),
			'id' => 'example_select_tags',
			'type' => 'select',
			'options' => $options_tags
		);
	}

	$options[] = array(
		'name' => __( 'Select a Page', 'concourse' ),
		'desc' => __( 'Passed an pages with ID and post_title', 'concourse' ),
		'id' => 'example_select_pages',
		'type' => 'select',
		'options' => $options_pages
	);

	$options[] = array(
		'name' => __( 'Input Radio (one)', 'concourse' ),
		'desc' => __( 'Radio select with default options "one".', 'concourse' ),
		'id' => 'example_radio',
		'std' => 'one',
		'type' => 'radio',
		'options' => $test_array
	);

	$options[] = array(
		'name' => __( 'Example Info', 'concourse' ),
		'desc' => __( 'This is just some example information you can put in the panel.', 'concourse' ),
		'type' => 'info'
	);

	$options[] = array(
		'name' => __( 'Input Checkbox', 'concourse' ),
		'desc' => __( 'Example checkbox, defaults to true.', 'concourse' ),
		'id' => 'example_checkbox',
		'std' => '1',
		'type' => 'checkbox'
	);

	$options[] = array(
		'name' => __( 'Advanced Settings', 'concourse' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Check to Show a Hidden Text Input', 'concourse' ),
		'desc' => __( 'Click here and see what happens.', 'concourse' ),
		'id' => 'example_showhidden',
		'type' => 'checkbox'
	);

	$options[] = array(
		'name' => __( 'Hidden Text Input', 'concourse' ),
		'desc' => __( 'This option is hidden unless activated by a checkbox click.', 'concourse' ),
		'id' => 'example_text_hidden',
		'std' => 'Hello',
		'class' => 'hidden',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Uploader Test', 'concourse' ),
		'desc' => __( 'This creates a full size uploader that previews the image.', 'concourse' ),
		'id' => 'example_uploader',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => "Example Image Selector",
		'desc' => "Images for layout.",
		'id' => "example_images",
		'std' => "2c-l-fixed",
		'type' => "images",
		'options' => array(
			'1col-fixed' => $imagepath . '1col.png',
			'2c-l-fixed' => $imagepath . '2cl.png',
			'2c-r-fixed' => $imagepath . '2cr.png'
		)
	);

	$options[] = array(
		'name' =>  __( 'Example Background', 'concourse' ),
		'desc' => __( 'Change the background CSS.', 'concourse' ),
		'id' => 'example_background',
		'std' => $background_defaults,
		'type' => 'background'
	);

	$options[] = array(
		'name' => __( 'Multicheck', 'concourse' ),
		'desc' => __( 'Multicheck description.', 'concourse' ),
		'id' => 'example_multicheck',
		'std' => $multicheck_defaults, // These items get checked by default
		'type' => 'multicheck',
		'options' => $multicheck_array
	);

	$options[] = array(
		'name' => __( 'Colorpicker', 'concourse' ),
		'desc' => __( 'No color selected by default.', 'concourse' ),
		'id' => 'example_colorpicker',
		'std' => '',
		'type' => 'color'
	);

	$options[] = array( 'name' => __( 'Typography', 'concourse' ),
		'desc' => __( 'Example typography.', 'concourse' ),
		'id' => "example_typography",
		'std' => $typography_defaults,
		'type' => 'typography'
	);

	$options[] = array(
		'name' => __( 'Custom Typography', 'concourse' ),
		'desc' => __( 'Custom typography options.', 'concourse' ),
		'id' => "custom_typography",
		'std' => $typography_defaults,
		'type' => 'typography',
		'options' => $typography_options
	);

	$options[] = array(
		'name' => __( 'Text Editor', 'concourse' ),
		'type' => 'heading'
	);

	

	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress,wplink' )
	);

	$options[] = array(
		'name' => __( 'Default Text Editor', 'concourse' ),
		'desc' => sprintf( __( 'You can also pass settings to the editor.  Read more about wp_editor in <a href="%1$s" target="_blank">the WordPress codex</a>', 'concourse' ), 'http://codex.wordpress.org/Function_Reference/wp_editor' ),
		'id' => 'example_editor',
		'type' => 'editor',
		'settings' => $wp_editor_settings
	);*/

	return $options;
}