<?php
/**
 * centoedez Theme Customizer
 *
 * @package centoedez
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function centoedez_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	// Add Section for text in blog page

	$wp_customize->add_section( 'blogtext' , array(
		'title'      =>'Página de artigos',
		'priority'   => 30,
	) );

	$wp_customize->add_setting( 'blogintrotext', array( 'default' => '' ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'blogintrotext', array( 
		'label' => 'Intro for blog',
			'section' => 'blogtext',
			'settings' => 'blogintrotext',
			'description' => 'Text for blog block',
			'type' => 'textarea',
			)
		)
	);


	// Add new section for updated pages
	$wp_customize->add_section( 'newupdates' , array(
		'title'      =>'Actualizações',
		'priority'   => 30,
	) );

	  $wp_customize->add_setting( 'newlinks', array( 'default' => '' ) );
	  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'newlinks', array( 
		  'label' => 'Ativar notificação?',
			  'section' => 'newupdates',
			  'settings' => 'newlinks',
			  'type'      => 'checkbox'
			   )
		  )
	  );

		$wp_customize->add_setting( 'page-link-1', array( 
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'themeslug_sanitize_dropdown_pages')
		 );
		 $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page-link-1', array(
			'label' => 
				'Página que foi actualizada',
				'type' => 'dropdown-pages',
				'section' => 'newupdates',
				'settings' => 'page-link-1',
				'description' => __( 'Escolher a página que foi actualizada' )
				) 
			)
	 	);

		 $wp_customize->add_setting( 'page-link-2', array( 
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'themeslug_sanitize_dropdown_pages')
		 );
		 $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page-link-2', array(
			'label' => 
				'Página que foi actualizada',
				'type' => 'dropdown-pages',
				'section' => 'newupdates',
				'settings' => 'page-link-2',
				'description' => __( 'Escolher a página que foi actualizada' )
				) 
			)
	 	);

		 $wp_customize->add_setting( 'page-link-3', array( 
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'themeslug_sanitize_dropdown_pages')
		 );
		 $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page-link-3', array(
			'label' => 
				'Página que foi actualizada',
				'type' => 'dropdown-pages',
				'section' => 'newupdates',
				'settings' => 'page-link-3',
				'description' => __( 'Escolher a página que foi actualizada' )
				) 
			)
	 	);


	// Add Social Media Section
	$wp_customize->add_panel( 'social-media', array(
		'title' => __( 'Social Networks' ),
		'description' => 'Social Networks to link and to allow sharing',
		'priority' => 160,
	  ) );
	  $wp_customize->add_section('for-sharing' , array(
		'title' => 'For Sharing',
		'panel' => 'social-media',
	  ) );
	  $wp_customize->add_section('for-linking' , array(
		'title' => 'For Linking',
		'panel' => 'social-media',
	  ) );

	$linksocials = array('Facebook','Instagram','Twitter','Linkedin','Youtube');
	foreach($linksocials as $linksocial) {
		$wp_customize->add_setting( $linksocial.'-link', array( 'default' => '' ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, $linksocial.'-link', array( 
			'label' => __( 
				$linksocial.' URL', '_s' ),
				'section' => 'for-linking',
				'settings' => $linksocial.'-link',
				 )
			)
		);
	}

	$sharesocials = array('Linkedin','Twitter','Instagram','Facebook','Email');
	foreach($sharesocials as $sharesocial) {
		$wp_customize->add_setting( $sharesocial.'-share', array( 'default' => '' ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, $sharesocial.'-share', array( 
			'label' => __( 
				$sharesocial.' URL', '_s' ),
				'section' => 'for-sharing',
				'settings' => $sharesocial.'-share',
				'type'      => 'checkbox',
				 )
			)
		);
	}

	$frontpageconfigurations = array('Block-1','Block-2','Block-3','Block-4');
	foreach($frontpageconfigurations as $frontpageconfiguration) {
		$wp_customize->add_setting( $frontpageconfiguration.'-title', array( 'default' => '' ) );
		$wp_customize->add_setting( $frontpageconfiguration.'-description', array( 'default' => '' ) );
		$wp_customize->add_setting( $frontpageconfiguration.'-image', array( 'default' => '' ) );
		$wp_customize->add_setting( $frontpageconfiguration.'-link', array( 
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'themeslug_sanitize_dropdown_pages')
		 );


		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, $frontpageconfiguration.'-title', array( 
			'label' => __( 
				'Title for '.$frontpageconfiguration, '_s' ),
				'section' => 'static_front_page',
				'settings' => $frontpageconfiguration.'-title',
				'description' => 'Title for homepage block',
				'type' => '',
				)
			)
		);
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, $frontpageconfiguration.'-description', array( 
			'label' => __( 
				'Description for '.$frontpageconfiguration, '_s' ),
				'section' => 'static_front_page',
				'settings' => $frontpageconfiguration.'-description',
				'type' => '',
				)
			)
		);
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $frontpageconfiguration.'-image', array(
			'label' => __( 
				'Image for '.$frontpageconfiguration, '_s' ),
				'section' => 'static_front_page',
				'settings' => $frontpageconfiguration.'-image',
		
				) 
			)
	 	);
		 $wp_customize->add_control( new WP_Customize_Control( $wp_customize, $frontpageconfiguration.'-link', array(
			'label' => __( 
				'Image for '.$frontpageconfiguration, '_s' ),
				'type' => 'dropdown-pages',
				'section' => 'static_front_page',
				'label' => __( 'Custom Dropdown Pages' ),
				'settings' => $frontpageconfiguration.'-link',
				'description' => __( 'This is a custom dropdown pages option.' )
				) 
			)
	 	);
	}

	  function themeslug_sanitize_dropdown_pages( $page_id, $setting ) {
		// Ensure $input is an absolute integer.
		$page_id = absint( $page_id );
	  
		// If $page_id is an ID of a published page, return it; otherwise, return the default.
		return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
	  }


	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'centoedez_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'centoedez_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'centoedez_customize_register' );



/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function centoedez_customize_partial_blogname() {
	bloginfo( 'name' );
}
function centoedez_customize_partial_blogdescription() {
	bloginfo( 'description' );
}



/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function centoedez_customize_preview_js() {
	wp_enqueue_script( 'centoedez-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'centoedez_customize_preview_js' );
