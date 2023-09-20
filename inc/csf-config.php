<?php
/**
 * The file is for Code star framework options.
 *
 * @link https://codestarframework.com/documentation
 *
 * @package Sofi
 */

if ( class_exists( 'CSF' ) ) {

	//
	// Set a unique slug-like ID.
	$prefix = 'sofi_options';

	//
	// Create options.
	CSF::createOptions(
		$prefix,
		array(

			// framework title.
			'framework_title'         => 'Sofi Options <small>by Junaid Bin Jaman</small>',
			'framework_class'         => '',

			// menu settings.
			'menu_title'              => 'Sofi Options',
			'menu_slug'               => 'sofi-options',
			'menu_type'               => 'menu',
			'menu_capability'         => 'manage_options',
			'menu_icon'               => 'dashicons-welcome-widgets-menus',
			'menu_position'           => 3,
			'menu_hidden'             => false,
			'menu_parent'             => '',

			// menu extras.
			'show_bar_menu'           => true,
			'show_sub_menu'           => true,
			'show_in_network'         => true,
			'show_in_customizer'      => true,

			'show_search'             => false,
			'show_reset_all'          => false,
			'show_reset_section'      => false,
			'show_footer'             => true,
			'show_all_options'        => false,
			'show_form_warning'       => true,
			'sticky_header'           => true,
			'save_defaults'           => true,
			'ajax_save'               => true,

			// admin bar menu settings.
			'admin_bar_menu_icon'     => '',
			'admin_bar_menu_priority' => 80,

			// footer.
			'footer_text'             => 'Thank you for building with Sofi Version: ' . _S_VERSION,
			'footer_after'            => '',
			'footer_credit'           => '',

			// database model.
			'database'                => '', // options, transient, theme_mod, network.
			'transient_time'          => 0,

			// contextual help.
			'contextual_help'         => array(),
			'contextual_help_sidebar' => '',

			// typography options.
			'enqueue_webfont'         => true,
			'async_webfont'           => false,

			// others.
			'output_css'              => true,

			// theme and wrapper classname.
			'nav'                     => 'normal',
			'theme'                   => 'light',
			'class'                   => '',

			// external default values.
			'defaults'                => array(),

		)
	);

	//
	// Create header section.
	CSF::createSection(
		$prefix,
		array(
			'title'  => 'Header settings',
			'fields' => array(
				array(
					'id'         => 'sofi_cursor_customizer',
					'type'       => 'switcher',
					'title'      => 'Do you want to enable cursor customizer option for users?',
					'text_on'    => 'Enabled',
					'text_off'   => 'Disabled',
					'text_width' => 100,
				),

				// Whether you want to display logo or not.
				array(
					'id'         => 'sofi_site_logo',
					'type'       => 'switcher',
					'title'      => 'Do you want to add logo',
					'text_on'    => 'Enabled',
					'text_off'   => 'Disabled',
					'text_width' => 100,
				),

				// Logo upload instruction.
				array(
					'type'     => 'callback',
					'function' => 'sofi_goto_logo_upload_page',
				),

			),
		)
	);

	//
	// Create footer section.
	CSF::createSection(
		$prefix,
		array(
			'title'  => 'Footer Settings',
			'fields' => array(

				// Color picker for footer background.
				array(
					'id'     => 'sofi_footer_background',
					'type'   => 'color',
					'title'  => 'Footer background color',
					'output' => array( '.element-1', '.element-2', '.element-3' ),
				),

				// Footer copy right text.
				array(
					'id'            => 'sofi_copyright_text',
					'type'          => 'wp_editor',
					'title'         => 'Footer copyright text!',
					'tinymce'       => true,
					'quicktags'     => true,
					'media_buttons' => true,
					'height'        => '100px',
				),

				// Social links builder.
				array(
					'id'     => 'sofi_social_links',
					'type'   => 'group',
					'title'  => 'Add social links',
					'fields' => array(

						// Social platform title.
						array(
							'id'    => 'sofi_social_platform_title',
							'type'  => 'text',
							'title' => 'Platform title <br /><small>e,g: Facebook, twitter etc</small>',
						),

						// Social profile URL.
						array(
							'id'    => 'sofi_social_platform_profile_url',
							'type'  => 'text',
							'title' => 'Platform profile URL <small>e,g: https://www.facebook.com/username</small>',
						),

						// Social media icon.
						array(
							'id'      => 'sofi_social_icon',
							'type'    => 'icon',
							'title'   => 'Icon',
							'default' => 'fa fa-wordpress',
						),
					),
				),

				// Social media icon color.
				array(
					'id'     => 'sofi_footer_social_icon_color',
					'type'   => 'color',
					'title'  => 'Footer social icons color',
					'output' => array( '.element-1', '.element-2', '.element-3' ),
				),

			),
		)
	);

	//
	// Create Home page section.
	CSF::createSection(
		$prefix,
		array(
			'id'    => 'sofi_home',
			'title' => 'Home page configurations',
		)
	);

	//
	// Create hero area configuration.
	CSF::createSection(
		$prefix,
		array(
			'parent' => 'sofi_home',
			'title'  => 'Hero area',
			'fields' => array(

				// Hero heading.
				array(
					'id'    => 'sofi_hero_heading',
					'type'  => 'text',
					'title' => 'Hero main heading',
					'class' => 'sofi_hero_heading_input',
					'desc'  => '<small class="sofi-hero-heading-error sofi-admin-hide"></small>',
				),

				// Hero description.
				array(
					'id'      => 'sofi_hero_description',
					'type'    => 'textarea',
					'title'   => 'Hero area description',
					'default' => 'Lorem ipsum dollar.',
					'class'   => 'sofi_hero_description',
					'desc'    => '<small class="sofi-hero-desc-error sofi-admin-hide"></small>',
				),

				// Hero description font color.
				array(
					'id'      => 'sofi_hero_desc_font_color',
					'type'    => 'color',
					'title'   => 'Description color',
					'default' => '#767676',
				),

				// Hero knowledge section title.
				array(
					'id'    => 'sofi_hero_knowledge_title',
					'type'  => 'textarea',
					'title' => 'Knowledge',
					'class' => 'sofi_hero_knowledge_section_title',
					'desc'  => 'Use <code>' . esc_html( '<br />' ) . '</code> as a line divider. <br/> <p class="sofi-hero-knowledge-title-error sofi-admin-hide"></p>',
				),

				// Hero knowledge section icons.
				array(
					'id'     => 'sofi_hero_knowledge_icons',
					'type'   => 'group',
					'title'  => 'Knowledge icons',
					'desc'   => 'Max recommended skill is four. So if you add more than four, only first four will be displayed on frontend',
					'fields' => array(

						// Technology name.
						array(
							'id'    => 'sofi_hero_knowledge_tech_name',
							'type'  => 'text',
							'title' => 'Technology Name',
						),

						// Technology icon.
						array(
							'id'      => 'sofi_hero_knowledge_tech_icon',
							'type'    => 'icon',
							'title'   => 'Technology Icons',
							'default' => 'fa fa-wordpress',
						),

					),
				),

				// Hero knowledge icon color.
				array(
					'id'      => 'sofi_hero_knowledge_tech_icon_color',
					'type'    => 'color',
					'title'   => 'Knowledge technology icons color',
					'default' => '#563d7c',
				),

				// Hero knowledge icon font size.
				array(
					'id'          => 'sofi_hero_knowledge_tech_icon_size',
					'type'        => 'number',
					'title'       => 'Knowledge icon font size',
					'unit'        => 'px',
					'output'      => '.heading',
					'output_mode' => 'width',
					'default'     => 40,
				),

				// Hero area profile image.
				array(
					'id'      => 'sofi_hero_profile_img',
					'type'    => 'media',
					'title'   => 'Upload profile image',
					'library' => 'image',
				),


			),
		)
	);

	// About section.
	CSF::createSection(
		$prefix,
		array(
			'parent' => 'sofi_home', // The slug id of the parent section.
			'title'  => 'About section',
			'fields' => array(

				// About section image.
				array(
					'id'      => 'sofi_about_image',
					'type'    => 'media',
					'title'   => 'Upload about image',
					'library' => 'image',
				),

				// Experience year input.
				array(
					'id'          => 'sofi_about_exper_year',
					'type'        => 'number',
					'title'       => 'Industry experience in year',
					'unit'        => 'year',
					'output'      => '.heading',
					'output_mode' => 'width',
					'default'     => 5,
					'validate'    => 'sofi_validate_exper_year_num',
				),

				// Experience background img.
				array(
					'id'      => 'sofi_about_exper_bg_img',
					'type'    => 'media',
					'title'   => 'Upload experience number background',
					'library' => 'image',
				),

				// Text in experience circle.
				array(
					'id'    => 'sofi_about_exper_circle_text',
					'type'  => 'text',
					'title' => 'Experience circle text',
				),

				// About section title.
				array(
					'id'    => 'sofi_about_section_title',
					'type'  => 'text',
					'title' => 'About title',
					'class' => 'sofi_about_section_title',
					'desc'  => '<p class="sofi_about_section_title_error sofi-admin-hide"></p>',
				),

				// About section title color.
				array(
					'id'      => 'sofi_about_section_title_color',
					'type'    => 'color',
					'title'   => 'About title color',
					'default' => '#000000',
				),

				// About section description.
				array(
					'id'    => 'sofi_about_section_desc',
					'type'  => 'textarea',
					'title' => 'About Description',
					'class' => 'sofi_about_section_description',
					'desc'  => '<p class="sofi_about_section_desc_error sofi-admin-hide"></p>',
				),

				// About section description color.
				array(
					'id'      => 'sofi_about_section_desc_color',
					'type'    => 'color',
					'title'   => 'About description color',
					'default' => '#767676',
				),
			),
		)
	);

}

/**
 * Custom callback to take users to logo uploader on customizer
 *
 * @return void
 */
function sofi_goto_logo_upload_page() {
	?>
	<p>To upload your logo, Go to 
		<a href="<?php echo esc_url( get_admin_url() . '/customize.php' ); ?>">
		customizer</a> > Site Identity and upload your logo.
	</p>

	<?php
}

/**
 * Validate users inserted years of experience
 *
 * @param number $value User's inserted value.
 * @return string
 */
function sofi_validate_exper_year_num( $value ) {
	if ( $value >= 100 || $value <= 0 ) {
		return 'Please insert a valid number. Years have to be between 1 - 100';
	}
}
