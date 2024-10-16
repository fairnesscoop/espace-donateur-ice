<?php
/**
 * TS Charity Theme Customizer
 *
 * @package ts-charity
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function ts_charity_customize_register( $wp_customize ) {	

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-changer.php' );

	//add home page setting pannel
	$wp_customize->add_panel( 'ts_charity_panel_id', array(
	    'priority' => 12,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'ts-charity' ),
	    'description' => __( 'Description of what this panel does.', 'ts-charity' ),
	) );

	$ts_charity_font_array = array(
		  '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Coming Soon' => 'Coming Soon',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Noto Sans' => 'Noto Sans',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Poppins' => 'Poppins',
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Roboto' => 'Roboto',
        'Roboto Condensed' => 'Roboto Condensed',
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Satisfy' => 'Satisfy',
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Unica One' => 'Unica One',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz'
    );

	//Typography
	$wp_customize->add_section( 'ts_charity_typography', array(
    	'title'      => __( 'Typography', 'ts-charity' ),
		'priority'   => 30,
		'panel' => 'ts_charity_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'ts_charity_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_charity_paragraph_color', array(
		'label' => __('Paragraph Color', 'ts-charity'),
		'section' => 'ts_charity_typography',
		'settings' => 'ts_charity_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('ts_charity_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'ts_charity_sanitize_choices'
	));
	$wp_customize->add_control(
	    'ts_charity_paragraph_font_family', array(
	    'section'  => 'ts_charity_typography',
	    'label'    => __( 'Paragraph Fonts','ts-charity'),
	    'type'     => 'select',
	    'choices'  => $ts_charity_font_array,
	));

	$wp_customize->add_setting('ts_charity_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_charity_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','ts-charity'),
		'section'	=> 'ts_charity_typography',
		'setting'	=> 'ts_charity_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'ts_charity_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_charity_atag_color', array(
		'label' => __('"a" Tag Color', 'ts-charity'),
		'section' => 'ts_charity_typography',
		'settings' => 'ts_charity_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('ts_charity_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'ts_charity_sanitize_choices'
	));
	$wp_customize->add_control(
	    'ts_charity_atag_font_family', array(
	    'section'  => 'ts_charity_typography',
	    'label'    => __( '"a" Tag Fonts','ts-charity'),
	    'type'     => 'select',
	    'choices'  => $ts_charity_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'ts_charity_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_charity_li_color', array(
		'label' => __('"li" Tag Color', 'ts-charity'),
		'section' => 'ts_charity_typography',
		'settings' => 'ts_charity_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('ts_charity_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'ts_charity_sanitize_choices'
	));
	$wp_customize->add_control(
	    'ts_charity_li_font_family', array(
	    'section'  => 'ts_charity_typography',
	    'label'    => __( '"li" Tag Fonts','ts-charity'),
	    'type'     => 'select',
	    'choices'  => $ts_charity_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'ts_charity_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_charity_h1_color', array(
		'label' => __('H1 Color', 'ts-charity'),
		'section' => 'ts_charity_typography',
		'settings' => 'ts_charity_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('ts_charity_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'ts_charity_sanitize_choices'
	));
	$wp_customize->add_control(
	    'ts_charity_h1_font_family', array(
	    'section'  => 'ts_charity_typography',
	    'label'    => __( 'H1 Fonts','ts-charity'),
	    'type'     => 'select',
	    'choices'  => $ts_charity_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('ts_charity_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('ts_charity_h1_font_size',array(
		'label'	=> __('H1 Font Size','ts-charity'),
		'section'	=> 'ts_charity_typography',
		'setting'	=> 'ts_charity_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'ts_charity_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_charity_h2_color', array(
		'label' => __('h2 Color', 'ts-charity'),
		'section' => 'ts_charity_typography',
		'settings' => 'ts_charity_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('ts_charity_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'ts_charity_sanitize_choices'
	));
	$wp_customize->add_control(
	    'ts_charity_h2_font_family', array(
	    'section'  => 'ts_charity_typography',
	    'label'    => __( 'h2 Fonts','ts-charity'),
	    'type'     => 'select',
	    'choices'  => $ts_charity_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('ts_charity_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_charity_h2_font_size',array(
		'label'	=> __('h2 Font Size','ts-charity'),
		'section'	=> 'ts_charity_typography',
		'setting'	=> 'ts_charity_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'ts_charity_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_charity_h3_color', array(
		'label' => __('h3 Color', 'ts-charity'),
		'section' => 'ts_charity_typography',
		'settings' => 'ts_charity_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('ts_charity_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'ts_charity_sanitize_choices'
	));
	$wp_customize->add_control(
	    'ts_charity_h3_font_family', array(
	    'section'  => 'ts_charity_typography',
	    'label'    => __( 'h3 Fonts','ts-charity'),
	    'type'     => 'select',
	    'choices'  => $ts_charity_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('ts_charity_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_charity_h3_font_size',array(
		'label'	=> __('h3 Font Size','ts-charity'),
		'section'	=> 'ts_charity_typography',
		'setting'	=> 'ts_charity_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'ts_charity_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_charity_h4_color', array(
		'label' => __('h4 Color', 'ts-charity'),
		'section' => 'ts_charity_typography',
		'settings' => 'ts_charity_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('ts_charity_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'ts_charity_sanitize_choices'
	));
	$wp_customize->add_control(
	    'ts_charity_h4_font_family', array(
	    'section'  => 'ts_charity_typography',
	    'label'    => __( 'h4 Fonts','ts-charity'),
	    'type'     => 'select',
	    'choices'  => $ts_charity_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('ts_charity_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_charity_h4_font_size',array(
		'label'	=> __('h4 Font Size','ts-charity'),
		'section'	=> 'ts_charity_typography',
		'setting'	=> 'ts_charity_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'ts_charity_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_charity_h5_color', array(
		'label' => __('h5 Color', 'ts-charity'),
		'section' => 'ts_charity_typography',
		'settings' => 'ts_charity_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('ts_charity_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'ts_charity_sanitize_choices'
	));
	$wp_customize->add_control(
	    'ts_charity_h5_font_family', array(
	    'section'  => 'ts_charity_typography',
	    'label'    => __( 'h5 Fonts','ts-charity'),
	    'type'     => 'select',
	    'choices'  => $ts_charity_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('ts_charity_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_charity_h5_font_size',array(
		'label'	=> __('h5 Font Size','ts-charity'),
		'section'	=> 'ts_charity_typography',
		'setting'	=> 'ts_charity_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'ts_charity_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_charity_h6_color', array(
		'label' => __('h6 Color', 'ts-charity'),
		'section' => 'ts_charity_typography',
		'settings' => 'ts_charity_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('ts_charity_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'ts_charity_sanitize_choices'
	));
	$wp_customize->add_control(
	    'ts_charity_h6_font_family', array(
	    'section'  => 'ts_charity_typography',
	    'label'    => __( 'h6 Fonts','ts-charity'),
	    'type'     => 'select',
	    'choices'  => $ts_charity_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('ts_charity_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_charity_h6_font_size',array(
		'label'	=> __('h6 Font Size','ts-charity'),
		'section'	=> 'ts_charity_typography',
		'setting'	=> 'ts_charity_h6_font_size',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('ts_charity_background_skin_mode',array(
        'default' => 'Transparent Background',
        'sanitize_callback' => 'ts_charity_sanitize_choices'
	));
	$wp_customize->add_control('ts_charity_background_skin_mode',array(
        'type' => 'select',
        'label' => __('Background Type','ts-charity'),
        'section' => 'background_image',
        'choices' => array(
            'With Background' => __('With Background','ts-charity'),
            'Transparent Background' => __('Transparent Background','ts-charity'),
        ),
	) );

	// woocommerce section
	$wp_customize->add_section('ts_charity_woocommerce_settings', array(
		'title'    => __('WooCommerce Settings', 'ts-charity'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

   $wp_customize->add_setting( 'ts_charity_shop_page_sidebar',array(
		'default' => false,
		'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
   ) );
   $wp_customize->add_control('ts_charity_shop_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Woocommerce Page Sidebar','ts-charity'),
		'section' => 'ts_charity_woocommerce_settings'
   ));

   // shop page sidebar alignment
   $wp_customize->add_setting('ts_charity_shop_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'ts_charity_sanitize_choices',
	));
	$wp_customize->add_control('ts_charity_shop_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Shop Page layout', 'ts-charity'),
		'section'        => 'ts_charity_woocommerce_settings',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'ts-charity'),
			'Right Sidebar' => __('Right Sidebar', 'ts-charity'),
		),
	));

	$wp_customize->add_setting( 'ts_charity_wocommerce_single_page_sidebar',array(
		'default' => false,
		'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
   ) );
   $wp_customize->add_control('ts_charity_wocommerce_single_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Single Product Page Sidebar','ts-charity'),
		'section' => 'ts_charity_woocommerce_settings'
   ));
    
   // single product page sidebar alignment
   $wp_customize->add_setting('ts_charity_single_product_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'ts_charity_sanitize_choices',
	));
	$wp_customize->add_control('ts_charity_single_product_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Single product Page layout', 'ts-charity'),
		'section'        => 'ts_charity_woocommerce_settings',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'ts-charity'),
			'Right Sidebar' => __('Right Sidebar', 'ts-charity'),
		),
	));

	$wp_customize->add_setting('ts_charity_show_related_products',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_charity_show_related_products',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Related Product','ts-charity'),
       'section' => 'ts_charity_woocommerce_settings',
    ));

	$wp_customize->add_setting('ts_charity_show_wooproducts_border',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_charity_show_wooproducts_border',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Product Border','ts-charity'),
       'section' => 'ts_charity_woocommerce_settings',
    ));

    $wp_customize->add_setting( 'ts_charity_wooproducts_per_columns' , array(
		'default'           => 4,
		'transport'         => 'refresh',
		'sanitize_callback' => 'ts_charity_sanitize_choices',
	) );
	$wp_customize->add_control( 'ts_charity_wooproducts_per_columns', array(
		'label'    => __( 'Display Product Per Columns', 'ts-charity' ),
		'section'  => 'ts_charity_woocommerce_settings',
		'type'     => 'select',
		'choices'  => array(
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
		),
	)  );

	$wp_customize->add_setting('ts_charity_wooproducts_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'ts_charity_sanitize_float',
	));	
	$wp_customize->add_control('ts_charity_wooproducts_per_page',array(
		'label'	=> __('Display Product Per Page','ts-charity'),
		'section'	=> 'ts_charity_woocommerce_settings',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'ts_charity_top_bottom_wooproducts_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'ts_charity_sanitize_float',
	));
	$wp_customize->add_control( 'ts_charity_top_bottom_wooproducts_padding',	array(
		'label' => esc_html__( 'Top Bottom Product Padding','ts-charity' ),
		'section' => 'ts_charity_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'ts_charity_left_right_wooproducts_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'ts_charity_sanitize_float',
	));
	$wp_customize->add_control( 'ts_charity_left_right_wooproducts_padding',	array(
		'label' => esc_html__( 'Right Left Product Padding','ts-charity' ),
		'section' => 'ts_charity_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'ts_charity_wooproducts_border_radius',array(
		'default' => 0,
		'sanitize_callback'    => 'ts_charity_sanitize_number_range',
	));
	$wp_customize->add_control('ts_charity_wooproducts_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','ts-charity' ),
		'section' => 'ts_charity_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	));

	$wp_customize->add_setting( 'ts_charity_wooproducts_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'ts_charity_sanitize_number_range',
	));
	$wp_customize->add_control('ts_charity_wooproducts_box_shadow',array(
		'label' => esc_html__( 'Product Box Shadow','ts-charity' ),
		'section' => 'ts_charity_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	));

	$wp_customize->add_setting('ts_charity_products_navigation',array(
      'default' => 'Yes',
      'sanitize_callback'	=> 'ts_charity_sanitize_choices'
   ));
   $wp_customize->add_control('ts_charity_products_navigation',array(
      'type' => 'radio',
      'label' => __('Woocommerce Products Navigation','ts-charity'),
      'choices' => array(
         'Yes' => __('Yes','ts-charity'),
         'No' => __('No','ts-charity'),
      ),
      'section' => 'ts_charity_woocommerce_settings',
   ));

	$wp_customize->add_setting( 'ts_charity_top_bottom_product_button_padding',array(
		'default' => 14.5,
		'sanitize_callback'	=> 'ts_charity_sanitize_float',
	));
	$wp_customize->add_control('ts_charity_top_bottom_product_button_padding',	array(
		'label' => esc_html__( 'Product Button Top Bottom Padding','ts-charity' ),
		'section' => 'ts_charity_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

	$wp_customize->add_setting( 'ts_charity_left_right_product_button_padding',array(
		'default' => 14.5,
		'sanitize_callback'	=> 'ts_charity_sanitize_float',
	));
	$wp_customize->add_control('ts_charity_left_right_product_button_padding',array(
		'label' => esc_html__( 'Product Button Right Left Padding','ts-charity' ),
		'section' => 'ts_charity_woocommerce_settings',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'ts_charity_product_button_border_radius',array(
		'default' => 0,
		'sanitize_callback'    => 'ts_charity_sanitize_number_range',
	));
	$wp_customize->add_control('ts_charity_product_button_border_radius',array(
		'label' => esc_html__( 'Product Button Border Radius','ts-charity' ),
		'section' => 'ts_charity_woocommerce_settings',
		'type'		=> 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('ts_charity_align_product_sale',array(
        'default' => 'Right',
        'sanitize_callback' => 'ts_charity_sanitize_choices'
	));
	$wp_customize->add_control('ts_charity_align_product_sale',array(
        'type' => 'radio',
        'label' => __('Product Sale Button Alignment','ts-charity'),
        'section' => 'ts_charity_woocommerce_settings',
        'choices' => array(
            'Right' => __('Right','ts-charity'),
            'Left' => __('Left','ts-charity'),
        ),
	) );

	$wp_customize->add_setting( 'ts_charity_border_radius_product_sale',array(
		'default' => 50,
		'sanitize_callback'	=> 'ts_charity_sanitize_float',
	));
	$wp_customize->add_control('ts_charity_border_radius_product_sale', array(
        'label'  => __('Product Sale Button Border Radius','ts-charity'),
        'section'  => 'ts_charity_woocommerce_settings',
        'type'        => 'number',
        'input_attrs' => array(
        	'step'=> 1,
            'min' => 0,
            'max' => 50,
        )
    ) );

	$wp_customize->add_setting('ts_charity_product_sale_font_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'ts_charity_sanitize_float'
	));
	$wp_customize->add_control('ts_charity_product_sale_font_size',array(
		'label'	=> __('Product Sale Button Font Size','ts-charity'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'ts_charity_woocommerce_settings',
		'type'=> 'number'
	));

	// sale button padding
	$wp_customize->add_setting( 'ts_charity_sale_padding_top',array(
		'default' => 0,
		'sanitize_callback'	=> 'ts_charity_sanitize_float',
	));
	$wp_customize->add_control( 'ts_charity_sale_padding_top',	array(
		'label' => esc_html__( ' Product Sale Top Bottom Padding','ts-charity' ),
		'section' => 'ts_charity_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'ts_charity_sale_padding_left',array(
		'default' => 0,
		'sanitize_callback'	=> 'ts_charity_sanitize_float',
	));
	$wp_customize->add_control( 'ts_charity_sale_padding_left',	array(
		'label' => esc_html__( ' Product Sale Left Right Padding','ts-charity' ),
		'section' => 'ts_charity_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	// Add the Theme Color Option section.
	$wp_customize->add_section( 'ts_charity_theme_color_option', array( 
		'panel' => 'ts_charity_panel_id', 
		'title' => esc_html__( 'Theme Color Option', 'ts-charity' ) 
	) );

  	$wp_customize->add_setting( 'ts_charity_theme_color', array(
	    'default' => '#fcb20b',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_charity_theme_color', array(
  		'label' => 'Color Option',
	    'description' => __('One can change complete theme color on just one click.', 'ts-charity'),
	    'section' => 'ts_charity_theme_color_option',
	    'settings' => 'ts_charity_theme_color',
  	)));

	//Top Bar
	$wp_customize->add_section('ts_charity_topbar_header',array(
		'title'	=> __('Top Bar Section','ts-charity'),
		'description'	=> __('Add Top Bar Content here','ts-charity'),
		'priority'	=> null,
		'panel' => 'ts_charity_panel_id',
	) );

	//Show /Hide Topbar
	$wp_customize->add_setting( 'ts_charity_display_topbar',array(
		'default' => false,
      	'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ) );
    $wp_customize->add_control('ts_charity_display_topbar',array(
    	'type' => 'checkbox',
        'label' => __( 'Topbar','ts-charity' ),
        'section' => 'ts_charity_topbar_header'
    ));

    $wp_customize->add_setting('ts_charity_topbar_top_bottom_spacing',array(
		'default'=> '',
		'sanitize_callback'	=> 'ts_charity_sanitize_float',
	));
	$wp_customize->add_control('ts_charity_topbar_top_bottom_spacing',array(
		'label'	=> __('Top Bottom Topbar Content Space','ts-charity'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'ts_charity_topbar_header',
		'type'=> 'number'
	));

    $wp_customize->add_setting('ts_charity_search_option',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_charity_search_option',array(
       'type' => 'checkbox',
       'label' => __('Search','ts-charity'),
       'section' => 'ts_charity_topbar_header'
    ));

	$wp_customize->add_setting('ts_charity_search_icon',array(
		'default'	=> 'fas fa-search',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ts_Charity_Icon_Changer(
        $wp_customize,'ts_charity_search_icon',array(
		'label'	=> __('Search Icon','ts-charity'),
		'transport' => 'refresh',
		'section'	=> 'ts_charity_topbar_header',
		'type'		=> 'icon'
	)));

    //Sticky Header
	$wp_customize->add_setting( 'ts_charity_sticky_header',array(
		'default' => false,
      	'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ) );
    $wp_customize->add_control('ts_charity_sticky_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Sticky Header','ts-charity' ),
        'section' => 'ts_charity_topbar_header'
    ));

    $wp_customize->add_setting( 'ts_charity_sticky_header_padding_settings', array(
		'default'=> '',
		'sanitize_callback'	=> 'ts_charity_sanitize_float',
	) );
	$wp_customize->add_control( 'ts_charity_sticky_header_padding_settings', array(
		'label'       => esc_html__( 'Sticky Header Padding','ts-charity' ),
		'section'     => 'ts_charity_topbar_header',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('ts_charity_phone_icon',array(
		'default'	=> 'fas fa-phone-volume',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ts_Charity_Icon_Changer(
        $wp_customize,'ts_charity_phone_icon',array(
		'label'	=> __('Phone Icon','ts-charity'),
		'transport' => 'refresh',
		'section'	=> 'ts_charity_topbar_header',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('ts_charity_call',array(
		'default'	=> '',
		'sanitize_callback'	=> 'ts_charity_sanitize_phone_number'
	));	
	$wp_customize->add_control('ts_charity_call',array(
		'label'	=> __('Add Phone Number','ts-charity'),
		'section'	=> 'ts_charity_topbar_header',
		'setting'	=> 'ts_charity_call',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('ts_charity_header_time_icon',array(
		'default'	=> 'far fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ts_Charity_Icon_Changer(
        $wp_customize,'ts_charity_header_time_icon',array(
		'label'	=> __('Time Icon','ts-charity'),
		'transport' => 'refresh',
		'section'	=> 'ts_charity_topbar_header',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('ts_charity_time',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_charity_time',array(
		'label'	=> __('Add Time','ts-charity'),
		'section'	=> 'ts_charity_topbar_header',
		'setting'	=> 'ts_charity_time',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('ts_charity_email_icon',array(
		'default'	=> 'far fa-envelope',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ts_Charity_Icon_Changer(
        $wp_customize,'ts_charity_email_icon',array(
		'label'	=> __('Email Icon','ts-charity'),
		'transport' => 'refresh',
		'section'	=> 'ts_charity_topbar_header',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('ts_charity_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));
	$wp_customize->add_control('ts_charity_email',array(
		'label'	=> __('Add Email','ts-charity'),
		'section'	=> 'ts_charity_topbar_header',
		'setting'	=> 'ts_charity_email',
		'type'		=> 'text'
	));

	//Social Icons
	$wp_customize->add_section('ts_charity_social_icon',array(
		'title'	=> __('Social Icons Section','ts-charity'),
		'priority'	=> null,
		'panel' => 'ts_charity_panel_id',
	) );

	$wp_customize->add_setting('ts_charity_facebook_icon',array(
		'default'	=> 'fab fa-facebook-f',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ts_Charity_Icon_Changer(
        $wp_customize,'ts_charity_facebook_icon',array(
		'label'	=> __('Facebook Icon','ts-charity'),
		'transport' => 'refresh',
		'section'	=> 'ts_charity_social_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('ts_charity_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );
	$wp_customize->add_control('ts_charity_facebook_url',array(
		'label'	=> __('Add Facebook link','ts-charity'),
		'section'	=> 'ts_charity_social_icon',
		'setting'	=> 'ts_charity_facebook_url',
		'type'	=> 'url'
	) );

	$wp_customize->add_setting('ts_charity_twitter_icon',array(
		'default'	=> 'fab fa-twitter',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ts_Charity_Icon_Changer(
        $wp_customize,'ts_charity_twitter_icon',array(
		'label'	=> __('Twitter Icon','ts-charity'),
		'transport' => 'refresh',
		'section'	=> 'ts_charity_social_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('ts_charity_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('ts_charity_twitter_url',array(
		'label'	=> __('Add Twitter link','ts-charity'),
		'section'	=> 'ts_charity_social_icon',
		'setting'	=> 'ts_charity_twitter_url',
		'type'	=> 'url'
	) );

	$wp_customize->add_setting('ts_charity_youtube_icon',array(
		'default'	=> 'fab fa-youtube',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ts_Charity_Icon_Changer(
        $wp_customize,'ts_charity_youtube_icon',array(
		'label'	=> __('Youtube Icon','ts-charity'),
		'transport' => 'refresh',
		'section'	=> 'ts_charity_social_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('ts_charity_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('ts_charity_youtube_url',array(
		'label'	=> __('Add Youtube link','ts-charity'),
		'section'	=> 'ts_charity_social_icon',
		'setting'	=> 'ts_charity_youtube_url',
		'type'		=> 'url'
	) );

	$wp_customize->add_setting('ts_charity_rss_icon',array(
		'default'	=> 'fas fa-rss',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ts_Charity_Icon_Changer(
        $wp_customize,'ts_charity_rss_icon',array(
		'label'	=> __('RSS Icon','ts-charity'),
		'transport' => 'refresh',
		'section'	=> 'ts_charity_social_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('ts_charity_rss_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('ts_charity_rss_url',array(
		'label'	=> __('Add RSS link','ts-charity'),
		'section'	=> 'ts_charity_social_icon',
		'setting'	=> 'ts_charity_rss_url',
		'type'	=> 'url'
	) );

	$wp_customize->add_setting('ts_charity_insta_icon',array(
		'default'	=> 'fab fa-instagram',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ts_Charity_Icon_Changer(
        $wp_customize,'ts_charity_insta_icon',array(
		'label'	=> __('Instagram Icon','ts-charity'),
		'transport' => 'refresh',
		'section'	=> 'ts_charity_social_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('ts_charity_insta_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('ts_charity_insta_url',array(
		'label'	=> __('Add Instagram link','ts-charity'),
		'section'	=> 'ts_charity_social_icon',
		'setting'	=> 'ts_charity_insta_url',
		'type'	=> 'url'
	) );

	$wp_customize->add_setting('ts_charity_pint_icon',array(
		'default'	=> 'fab fa-pinterest-p',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ts_Charity_Icon_Changer(
        $wp_customize,'ts_charity_pint_icon',array(
		'label'	=> __('Pintrest Icon','ts-charity'),
		'transport' => 'refresh',
		'section'	=> 'ts_charity_social_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('ts_charity_pint_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('ts_charity_pint_url',array(
		'label'	=> __('Add Pintrest link','ts-charity'),
		'section'	=> 'ts_charity_social_icon',
		'setting'	=> 'ts_charity_pint_url',
		'type'	=> 'url'
	) );

	// Menu settings
	$wp_customize->add_section('ts_charity_menu_settings',array(
		'title'	=> __('Menu Settings','ts-charity'),
		'priority'	=> null,
		'panel' => 'ts_charity_panel_id',
	));

	$wp_customize->add_setting('ts_charity_text_tranform_menu',array(
		'default' => 'Uppercase',
		'sanitize_callback' => 'ts_charity_sanitize_choices'
 	));
 	$wp_customize->add_control('ts_charity_text_tranform_menu',array(
		'type' => 'radio',
		'label' => __('Menu Text Transform','ts-charity'),
		'section' => 'ts_charity_menu_settings',
		'choices' => array(
		   'Uppercase' => __('Uppercase','ts-charity'),
		   'Lowercase' => __('Lowercase','ts-charity'),
		   'Capitalize' => __('Capitalize','ts-charity'),
		),
	) );

	$wp_customize->add_setting('ts_charity_menus_font_size',array(
		'default'=> 12,
		'sanitize_callback'	=> 'ts_charity_sanitize_float'
	));
	$wp_customize->add_control('ts_charity_menus_font_size',array(
		'label'	=> __('Menus Font Size','ts-charity'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'ts_charity_menu_settings',
		'type'=> 'number'
	));

	$wp_customize->add_setting('ts_charity_menu_weight',array(
		'default'=> '',
		'sanitize_callback'	=> 'ts_charity_sanitize_choices',
	));
	$wp_customize->add_control('ts_charity_menu_weight',array(
		'label'	=> __('Menus Font Weight','ts-charity'),
		'section'=> 'ts_charity_menu_settings',
		'type' => 'select',
		'choices' => array(
            '100' => __('100','ts-charity'),
            '200' => __('200','ts-charity'),
            '300' => __('300','ts-charity'),
            '400' => __('400','ts-charity'),
            '500' => __('500','ts-charity'),
            '600' => __('600','ts-charity'),
            '700' => __('700','ts-charity'),
            '800' => __('800','ts-charity'),
            '900' => __('900','ts-charity'),
        ),
	));

	$wp_customize->add_setting('ts_charity_menus_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'ts_charity_sanitize_float'
	));
	$wp_customize->add_control('ts_charity_menus_padding',array(
		'label'	=> __('Menus Padding','ts-charity'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'ts_charity_menu_settings',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'ts_charity_menu_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_charity_menu_color_settings', array(
  		'label' => __('Menu Color', 'ts-charity'),
	    'section' => 'ts_charity_menu_settings',
	    'settings' => 'ts_charity_menu_color_settings',
  	)));

  	$wp_customize->add_setting( 'ts_charity_menu_hover_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_charity_menu_hover_color_settings', array(
  		'label' => __('Menu Hover Color', 'ts-charity'),
	    'section' => 'ts_charity_menu_settings',
	    'settings' => 'ts_charity_menu_hover_color_settings',
  	)));
 
  	$wp_customize->add_setting( 'ts_charity_submenu_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_charity_submenu_color_settings', array(
  		'label' => __('Sub-menu Color', 'ts-charity'),
	    'section' => 'ts_charity_menu_settings',
	    'settings' => 'ts_charity_submenu_color_settings',
  	)));

  	$wp_customize->add_setting( 'ts_charity_submenu_hover_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_charity_submenu_hover_color_settings', array(
  		'label' => __('Sub-menu Hover Color', 'ts-charity'),
	    'section' => 'ts_charity_menu_settings',
	    'settings' => 'ts_charity_submenu_hover_color_settings',
  	)));

	//home page slider
	$wp_customize->add_section( 'ts_charity_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'ts-charity' ),
		'priority'   => null,
		'panel' => 'ts_charity_panel_id'
	) );

	$wp_customize->add_setting('ts_charity_slider_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_charity_slider_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','ts-charity'),
		'description' => "<ul><li>". esc_html('You can change how many slides there are.','ts-charity') ."</li><li>". esc_html('You can change the font family and the colours of headings and subheadings.','ts-charity') ."</li><li>". esc_html('And so on...','ts-charity') ."</li></ul><a target='_blank' href='". esc_url(TS_CHARITY_BUY_NOW) ." '>". esc_html('Upgrade to Pro','ts-charity') ."</a>",
		'section'=> 'ts_charity_slidersettings'
	));

	$wp_customize->add_setting('ts_charity_slider_hide_show',array(
      'default' => false,
      'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
	));
	$wp_customize->add_control('ts_charity_slider_hide_show',array(
	  'type' => 'checkbox',
	  'label' => __('Show / Hide slider','ts-charity'),
	  'section' => 'ts_charity_slidersettings',
	));

   $wp_customize->add_setting('ts_charity_slider_title_Show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
   ));
   $wp_customize->add_control('ts_charity_slider_title_Show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Title','ts-charity'),
       'section' => 'ts_charity_slidersettings'
   ));

   $wp_customize->add_setting('ts_charity_slider_content_Show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
   ));
   $wp_customize->add_control('ts_charity_slider_content_Show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Content','ts-charity'),
       'section' => 'ts_charity_slidersettings'
   ));

   $wp_customize->add_setting('ts_charity_slider_button_show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
   ));
   $wp_customize->add_control('ts_charity_slider_button_show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Button','ts-charity'),
       'section' => 'ts_charity_slidersettings'
   ));

	$wp_customize->add_setting( 'ts_charity_slider_small_title', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'ts_charity_slider_small_title', array(
		'label'    => __( 'Add Slider Small Text', 'ts-charity' ),
		'section'  => 'ts_charity_slidersettings',
		'type'     => 'text'
	) );

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'ts_charity_slidersettings_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'ts_charity_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'ts_charity_slidersettings_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'ts-charity' ),
			'section'  => 'ts_charity_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting('ts_charity_slider_overlay',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_charity_slider_overlay',array(
       'type' => 'checkbox',
       'label' => __('Home Page Slider Overlay','ts-charity'),
		'description'    => __('This option will add colors over the slider.','ts-charity'),
       'section' => 'ts_charity_slidersettings'
    ));

    $wp_customize->add_setting('ts_charity_slider_image_overlay_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ts_charity_slider_image_overlay_color', array(
		'label'    => __('Home Page Slider Overlay Color', 'ts-charity'),
		'section'  => 'ts_charity_slidersettings',
		'description'    => __('It will add the color overlay of the slider. To make it transparent, use the below option.','ts-charity'),
		'settings' => 'ts_charity_slider_image_overlay_color',
	)));

	//content layout
    $wp_customize->add_setting('ts_charity_slider_content_alignment',array(
    'default' => 'Left',
        'sanitize_callback' => 'ts_charity_sanitize_choices'
	));
	$wp_customize->add_control('ts_charity_slider_content_alignment',array(
        'type' => 'radio',
        'label' => __('Slider Content Alignment','ts-charity'),
        'section' => 'ts_charity_slidersettings',
        'choices' => array(
            'Center' => __('Center','ts-charity'),
            'Left' => __('Left','ts-charity'),
            'Right' => __('Right','ts-charity'),
        ),
	) );

    //Slider excerpt
	$wp_customize->add_setting( 'ts_charity_slider_excerpt_length', array(
		'default'              => 20,
		'sanitize_callback'	=> 'absint',
	) );
	$wp_customize->add_control( 'ts_charity_slider_excerpt_length', array(
		'label'       => esc_html__( 'Slider Excerpt length','ts-charity' ),
		'section'     => 'ts_charity_slidersettings',
		'type'        => 'number',
		'settings'    => 'ts_charity_slider_excerpt_length',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Opacity
	$wp_customize->add_setting('ts_charity_slider_image_opacity',array(
      'default'              => 0.6,
      'sanitize_callback' => 'ts_charity_sanitize_choices'
	));
	$wp_customize->add_control( 'ts_charity_slider_image_opacity', array(
	'label'       => esc_html__( 'Slider Image Opacity','ts-charity' ),
	'section'     => 'ts_charity_slidersettings',
	'type'        => 'select',
	'settings'    => 'ts_charity_slider_image_opacity',
	'choices' => array(
		'0' =>  esc_attr('0','ts-charity'),
		'0.1' =>  esc_attr('0.1','ts-charity'),
		'0.2' =>  esc_attr('0.2','ts-charity'),
		'0.3' =>  esc_attr('0.3','ts-charity'),
		'0.4' =>  esc_attr('0.4','ts-charity'),
		'0.5' =>  esc_attr('0.5','ts-charity'),
		'0.6' =>  esc_attr('0.6','ts-charity'),
		'0.7' =>  esc_attr('0.7','ts-charity'),
		'0.8' =>  esc_attr('0.8','ts-charity'),
		'0.9' =>  esc_attr('0.9','ts-charity')
	),
	));

	$wp_customize->add_setting( 'ts_charity_slider_speed_option',array(
		'default' => 3000,
		'sanitize_callback'    => 'ts_charity_sanitize_number_range',
	));
	$wp_customize->add_control( 'ts_charity_slider_speed_option',array(
		'label' => esc_html__( 'Slider Speed Option','ts-charity' ),
		'section' => 'ts_charity_slidersettings',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	));

	$wp_customize->add_setting('ts_charity_slider_image_height',array(
		'default'=> __('','ts-charity'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_charity_slider_image_height',array(
		'label'	=> __('Slider Image Height','ts-charity'),
		'section'=> 'ts_charity_slidersettings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('ts_charity_slider_button',array(
		'default'=> __('READ MORE','ts-charity'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_charity_slider_button',array(
		'label'	=> __('Slider Button Text','ts-charity'),
		'section'=> 'ts_charity_slidersettings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('ts_charity_slider_button_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('ts_charity_slider_button_url',array(
		'label'	=> esc_html__('Add Button Link','ts-charity'),
		'section'=> 'ts_charity_slidersettings',
		'type'=> 'url'
	));

	$wp_customize->add_setting('ts_charity_slider_btn_bg_color', array(
		'default'           => '#fcb20b',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ts_charity_slider_btn_bg_color', array(
		'label'    => __('Slider Button Background Color', 'ts-charity'),
		'section'  => 'ts_charity_slidersettings',
	)));

	$wp_customize->add_setting('ts_charity_top_bottom_slider_content_space',array(
		'default'=> '',
		'sanitize_callback'	=> 'ts_charity_sanitize_float',
	));
	$wp_customize->add_control('ts_charity_top_bottom_slider_content_space',array(
		'label'	=> __('Top Bottom Slider Content Space','ts-charity'),
		'section'=> 'ts_charity_slidersettings',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('ts_charity_left_right_slider_content_space',array(
		'default'=> '',
		'sanitize_callback'	=> 'ts_charity_sanitize_float',
	));
	$wp_customize->add_control('ts_charity_left_right_slider_content_space',array(
		'label'	=> __('Left Right Slider Content Space','ts-charity'),
		'section'=> 'ts_charity_slidersettings',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	//Our Causes
	$wp_customize->add_section('ts_charity_causes_section',array(
		'title'	=> __('Our Causes','ts-charity'),
		'description'	=> '',
		'priority'	=> null,
		'panel' => 'ts_charity_panel_id',
	));

	$wp_customize->add_setting('ts_charity_causes_sec_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_charity_causes_sec_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','ts-charity'),
		'description' => "<ul><li>". esc_html('Includes settings to set section title.','ts-charity') ."</li><li>". esc_html('Contains settings for the background colour.','ts-charity') ."</li><li>". esc_html('Contains options for background images.','ts-charity') ."</li><li>". esc_html('You can change the font family and colours of heading.','ts-charity') ."</li><li>". esc_html('And so on...','ts-charity') ."</li></ul><a target='_blank' href='". esc_url(TS_CHARITY_BUY_NOW) ." '>". esc_html('Upgrade to Pro','ts-charity') ."</a>",
		'section'=> 'ts_charity_causes_section'
	));
	
	$wp_customize->add_setting('ts_charity_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('ts_charity_title',array(
		'label'	=> __('Title','ts-charity'),
		'section'	=> 'ts_charity_causes_section',
		'type'	=> 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('ts_charity_causes_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'ts_charity_sanitize_choices',
	));
	$wp_customize->add_control('ts_charity_causes_category',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => __('Select Category to display Latest Post','ts-charity'),
		'section' => 'ts_charity_causes_section',
	));

	//Blog Post
	$wp_customize->add_section('ts_charity_blog_post',array(
		'title'	=> __('Blog Post Settings','ts-charity'),
		'panel' => 'ts_charity_panel_id',
	));	

	$wp_customize->add_setting('ts_charity_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_charity_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','ts-charity'),
       'section' => 'ts_charity_blog_post'
    ));

	$wp_customize->add_setting('ts_charity_date_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ts_Charity_Icon_Changer(
        $wp_customize,'ts_charity_date_icon',array(
		'label'	=> __('Post Date Icon','ts-charity'),
		'transport' => 'refresh',
		'section'	=> 'ts_charity_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('ts_charity_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_charity_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Comments','ts-charity'),
       'section' => 'ts_charity_blog_post'
    ));

	$wp_customize->add_setting('ts_charity_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ts_Charity_Icon_Changer(
        $wp_customize,'ts_charity_comment_icon',array(
		'label'	=> __('Comments Icon','ts-charity'),
		'transport' => 'refresh',
		'section'	=> 'ts_charity_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('ts_charity_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_charity_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Author','ts-charity'),
       'section' => 'ts_charity_blog_post'
    ));

	$wp_customize->add_setting('ts_charity_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ts_Charity_Icon_Changer(
        $wp_customize,'ts_charity_author_icon',array(
		'label'	=> __('Author Icon','ts-charity'),
		'transport' => 'refresh',
		'section'	=> 'ts_charity_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('ts_charity_time_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_charity_time_hide',array(
       'type' => 'checkbox',
       'label' => __('Time','ts-charity'),
       'section' => 'ts_charity_blog_post'
    ));

	$wp_customize->add_setting('ts_charity_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ts_Charity_Icon_Changer(
        $wp_customize,'ts_charity_time_icon',array(
		'label'	=> __('Time Icon','ts-charity'),
		'transport' => 'refresh',
		'section'	=> 'ts_charity_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('ts_charity_show_featured_image_post',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_charity_show_featured_image_post',array(
       'type' => 'checkbox',
       'label' => __('Blog Post Image','ts-charity'),
       'section' => 'ts_charity_blog_post'
    ));

   $wp_customize->add_setting( 'ts_charity_featured_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'ts_charity_sanitize_float',
	) );
	$wp_customize->add_control( 'ts_charity_featured_img_border_radius', array(
		'label'       => esc_html__( 'Blog Post Image Border Radius','ts-charity' ),
		'section'     => 'ts_charity_blog_post',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'ts_charity_featured_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'ts_charity_sanitize_float',
	));
	$wp_customize->add_control('ts_charity_featured_img_box_shadow',array(
		'label' => esc_html__( 'Blog Post Image Shadow','ts-charity' ),
		'section' => 'ts_charity_blog_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));

	$wp_customize->add_setting('ts_charity_show_first_caps',array(
        'default' => false,
        'sanitize_callback' => 'ts_charity_sanitize_checkbox',
    ));
	$wp_customize->add_control( 'ts_charity_show_first_caps',array(
		'label' => esc_html__('First Cap (First Capital Letter)', 'ts-charity'),
		'type' => 'checkbox',
		'section' => 'ts_charity_blog_post',
	));

    $wp_customize->add_setting('ts_charity_blog_post_description_option',array(
    	'default'   => 'Excerpt Content',
        'sanitize_callback' => 'ts_charity_sanitize_choices'
	));
	$wp_customize->add_control('ts_charity_blog_post_description_option',array(
        'type' => 'radio',
        'label' => __('Post Description Length','ts-charity'),
        'section' => 'ts_charity_blog_post',
        'choices' => array(
            'No Content' => __('No Content','ts-charity'),
            'Excerpt Content' => __('Excerpt Content','ts-charity'),
            'Full Content' => __('Full Content','ts-charity'),
        ),
	) );

   $wp_customize->add_setting( 'ts_charity_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'absint'
	) );
	$wp_customize->add_control( 'ts_charity_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','ts-charity' ),
		'section'     => 'ts_charity_blog_post',
		'type'        => 'text',
		'settings'    => 'ts_charity_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'ts_charity_post_suffix_option', array(
		'default'   => __('...','ts-charity'), 
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'ts_charity_post_suffix_option', array(
		'label'       => esc_html__( 'Post Excerpt Indicator Option','ts-charity' ),
		'section'     => 'ts_charity_blog_post',
		'type'        => 'text',
		'settings'    => 'ts_charity_post_suffix_option',
	) );

	$wp_customize->add_setting( 'ts_charity_metabox_separator_blog_post', array(
		'default'   => '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'ts_charity_metabox_separator_blog_post', array(
		'label'       => esc_html__( 'Meta Box Separator','ts-charity' ),
		'input_attrs' => array(
      'placeholder' => __( 'Add Meta Separator. e.g.: "|", "/", etc.', 'ts-charity' ),
        ),
		'section'     => 'ts_charity_blog_post',
		'type'        => 'text',
		'settings'    => 'ts_charity_metabox_separator_blog_post',
	) );

	$wp_customize->add_setting('ts_charity_display_blog_page_post',array(
        'default' => 'In Box',
        'sanitize_callback' => 'ts_charity_sanitize_choices'
	));
	$wp_customize->add_control('ts_charity_display_blog_page_post',array(
        'type' => 'radio',
        'label' => __('Display Blog Page Post :','ts-charity'),
        'section' => 'ts_charity_blog_post',
        'choices' => array(
            'In Box' => __('In Box','ts-charity'),
            'Without Box' => __('Without Box','ts-charity'),
        ),
	) );

	$wp_customize->add_setting('ts_charity_blog_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_charity_blog_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Pagination in Blog Page','ts-charity'),
       'section' => 'ts_charity_blog_post'
    ));

	$wp_customize->add_setting( 'ts_charity_pagination_settings', array(
        'default'			=> 'Numeric Pagination',
        'sanitize_callback'	=> 'ts_charity_sanitize_choices'
    ));
    $wp_customize->add_control( 'ts_charity_pagination_settings', array(
        'section' => 'ts_charity_blog_post',
        'type' => 'radio',
        'label' => __( 'Post Pagination', 'ts-charity' ),
        'choices'		=> array(
            'Numeric Pagination'  => __( 'Numeric Pagination', 'ts-charity' ),
            'next-prev' => __( 'Next / Previous', 'ts-charity' ),
    )));

	$wp_customize->add_setting('ts_charity_pagination_alignment',array(
	    'default' => 'Left',
	    'transport' => 'refresh',
	    'sanitize_callback' => 'ts_charity_sanitize_choices'
	));
	$wp_customize->add_control('ts_charity_pagination_alignment',array(
	    'type' => 'select',
	    'label' => __('Pagination Alignment','ts-charity'),
	    'section' => 'ts_charity_blog_post',
	    'choices' => array(
	    	'Left' => __('Left','ts-charity'),
	        'Center' => __('Center','ts-charity'),
	        'Right' => __('Right','ts-charity')
	    ),
	) );

	// Button
	$wp_customize->add_section( 'ts_charity_theme_button', array(
		'title' => __('Button Option','ts-charity'),
		'panel' => 'ts_charity_panel_id',
	));

	$wp_customize->add_setting('ts_charity_button_text',array(
		'default'=> __('Read More','ts-charity'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_charity_button_text',array(
		'label'	=> __('Add Button Text','ts-charity'),
		'section'=> 'ts_charity_theme_button',
		'type'=> 'text'
	));

	$wp_customize->add_setting('ts_charity_button_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'ts_charity_sanitize_float'
	));
	$wp_customize->add_control('ts_charity_button_font_size',array(
		'label'	=> __('Button Font Size','ts-charity'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'ts_charity_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting('ts_charity_btn_font_weight',array(
		'default'=> '',
		'sanitize_callback'	=> 'ts_charity_sanitize_choices',
	));
	$wp_customize->add_control('ts_charity_btn_font_weight',array(
		'label'	=> __('Button Font Weight','ts-charity'),
		'section'=> 'ts_charity_theme_button',
		'type' => 'select',
		'choices' => array(
            '100' => __('100','ts-charity'),
            '200' => __('200','ts-charity'),
            '300' => __('300','ts-charity'),
            '400' => __('400','ts-charity'),
            '500' => __('500','ts-charity'),
            '600' => __('600','ts-charity'),
            '700' => __('700','ts-charity'),
            '800' => __('800','ts-charity'),
            '900' => __('900','ts-charity'),
        ),
	));

	$wp_customize->add_setting('ts_charity_button_text_transform',array(
		'default' => 'Uppercase',
		'sanitize_callback' => 'ts_charity_sanitize_choices'
 	));
 	$wp_customize->add_control('ts_charity_button_text_transform',array(
		'type' => 'radio',
		'label' => __('Button Text Transform','ts-charity'),
		'section' => 'ts_charity_theme_button',
		'choices' => array(
		   'Uppercase' => __('Uppercase','ts-charity'),
		   'Lowercase' => __('Lowercase','ts-charity'),
		   'Capitalize' => __('Capitalize','ts-charity'),
		),
	) );

	$wp_customize->add_setting('ts_charity_button_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'ts_charity_sanitize_float',
	));
	$wp_customize->add_control('ts_charity_button_padding_top_bottom',array(
		'label'	=> __('Top and Bottom Padding','ts-charity'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'ts_charity_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting('ts_charity_button_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'ts_charity_sanitize_float',
	));
	$wp_customize->add_control('ts_charity_button_padding_left_right',array(
		'label'	=> __('Left and Right Padding','ts-charity'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'ts_charity_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'ts_charity_button_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'ts_charity_sanitize_float',
	) );
	$wp_customize->add_control( 'ts_charity_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','ts-charity' ),
		'section'     => 'ts_charity_theme_button',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Single Post Settings
	$wp_customize->add_section('ts_charity_single_post',array(
		'title'	=> __('Single Post Settings','ts-charity'),
		'panel' => 'ts_charity_panel_id',
	));

	$wp_customize->add_setting('ts_charity_single_post_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_charity_single_post_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Date','ts-charity'),
       'section' => 'ts_charity_single_post'
    ));

	$wp_customize->add_setting('ts_charity_single_post_date_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ts_Charity_Icon_Changer(
        $wp_customize,'ts_charity_single_post_date_icon',array(
		'label'	=> __('Single Post Date Icon','ts-charity'),
		'transport' => 'refresh',
		'section'	=> 'ts_charity_single_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('ts_charity_single_post_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_charity_single_post_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Comments','ts-charity'),
       'section' => 'ts_charity_single_post'
    ));

	$wp_customize->add_setting('ts_charity_single_post_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ts_Charity_Icon_Changer(
        $wp_customize,'ts_charity_single_post_comment_icon',array(
		'label'	=> __('Single Post Comments Icon','ts-charity'),
		'transport' => 'refresh',
		'section'	=> 'ts_charity_single_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('ts_charity_single_post_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_charity_single_post_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Author','ts-charity'),
       'section' => 'ts_charity_single_post'
    ));

	$wp_customize->add_setting('ts_charity_single_post_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ts_Charity_Icon_Changer(
        $wp_customize,'ts_charity_single_post_author_icon',array(
		'label'	=> __('Single Post Author Icon','ts-charity'),
		'transport' => 'refresh',
		'section'	=> 'ts_charity_single_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('ts_charity_single_post_time_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_charity_single_post_time_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Time','ts-charity'),
       'section' => 'ts_charity_single_post'
    ));

	$wp_customize->add_setting('ts_charity_single_post_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ts_Charity_Icon_Changer(
        $wp_customize,'ts_charity_single_post_time_icon',array(
		'label'	=> __('Single Post Time Icon','ts-charity'),
		'transport' => 'refresh',
		'section'	=> 'ts_charity_single_post',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('ts_charity_tags_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ));
   $wp_customize->add_control('ts_charity_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Tags','ts-charity'),
       'section' => 'ts_charity_single_post'
    ));

   $wp_customize->add_setting('ts_charity_show_featured_image_single_post',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
   ));
   $wp_customize->add_control('ts_charity_show_featured_image_single_post',array(
       'type' => 'checkbox',
       'label' => __('Single Post Image','ts-charity'),
       'section' => 'ts_charity_single_post'
   ));

   $wp_customize->add_setting( 'ts_charity_single_post_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'ts_charity_sanitize_float',
	) );
	$wp_customize->add_control( 'ts_charity_single_post_img_border_radius', array(
		'label'       => esc_html__( 'Single Post Image Border Radius','ts-charity' ),
		'section'     => 'ts_charity_single_post',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'ts_charity_single_post_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'ts_charity_sanitize_float',
	));
	$wp_customize->add_control('ts_charity_single_post_img_box_shadow',array(
		'label' => esc_html__( 'Single Post Image Shadow','ts-charity' ),
		'section' => 'ts_charity_single_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));

	$wp_customize->add_setting('ts_charity_single_post_first_caps',array(
        'default' => false,
        'sanitize_callback' => 'ts_charity_sanitize_checkbox',
    ));
	$wp_customize->add_control( 'ts_charity_single_post_first_caps',array(
		'label' => esc_html__('First Cap (First Capital Letter)', 'ts-charity'),
		'type' => 'checkbox',
		'section' => 'ts_charity_single_post',
	));

    $wp_customize->add_setting( 'ts_charity_post_comment',array(
		'default' => true,
		'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
		) );
	$wp_customize->add_control('ts_charity_post_comment',array(
		'type' => 'checkbox',
		'label' => __('Single Post Comment Box','ts-charity'),
		'section' => 'ts_charity_single_post'
		));

	$wp_customize->add_setting( 'ts_charity_single_post_breadcrumb',array(
		'default' => false,
		'transport' => 'refresh',
      	'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ) );
   $wp_customize->add_control('ts_charity_single_post_breadcrumb',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Single Post Breadcrumb','ts-charity' ),
        'section' => 'ts_charity_single_post'
    ));

   // show/hide single post pagination
    $wp_customize->add_setting('ts_charity_show_single_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_charity_show_single_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Pagination','ts-charity'),
       'section' => 'ts_charity_single_post'
    ));

   $wp_customize->add_setting('ts_charity_category_show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ));
   $wp_customize->add_control('ts_charity_category_show_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Category','ts-charity'),
       'section' => 'ts_charity_single_post'
    )); 

   $wp_customize->add_setting('ts_charity_title_comment_form',array(
       'default' => __('Leave a Reply','ts-charity'),
       'sanitize_callback'	=> 'sanitize_text_field'
   ));
   $wp_customize->add_control('ts_charity_title_comment_form',array(
       'type' => 'text',
       'label' => __('Comment Form Heading Text','ts-charity'),
       'section' => 'ts_charity_single_post'
   ));

   $wp_customize->add_setting('ts_charity_comment_form_button_content',array(
       'default' => __('Post Comment','ts-charity'),
       'sanitize_callback'	=> 'sanitize_text_field'
   ));
   $wp_customize->add_control('ts_charity_comment_form_button_content',array(
       'type' => 'text',
       'label' => __('Comment Form Button Text','ts-charity'),
       'section' => 'ts_charity_single_post'
   )); 

   //Comment Textarea Width
    $wp_customize->add_setting( 'ts_charity_comment_width', array(
		'default'=> '100',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(
	    'ts_charity_comment_width', array(
		'label'  => __('Comment Textarea Width','ts-charity'),
		'section'  => 'ts_charity_single_post',
		'description' => __('Measurement is in %.','ts-charity'),
		'input_attrs' => array(
		   'step'=> 1,
		   'min' => 0,
		   'max' => 100,
		),
		'type'		=> 'number'
   ));

   $wp_customize->add_setting( 'ts_charity_single_post_meta_seperator', array(
		'default'   => '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'ts_charity_single_post_meta_seperator', array(
		'label'       => esc_html__( 'Single Post Meta Box Seperator','ts-charity' ),
		'section'     => 'ts_charity_single_post',
		'description' => __('Here you can add the seperator for meta box. e.g. "|",  ",", "/", etc. ','ts-charity'),
		'type'        => 'text',
		'settings'    => 'ts_charity_single_post_meta_seperator',
	) );

	//Grid Post Settings
	$wp_customize->add_section('ts_charity_grid_post',array(
		'title'	=> __('Grid Post Settings','ts-charity'),
		'panel' => 'ts_charity_panel_id',
	));

	$wp_customize->add_setting('ts_charity_grid_post_date',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_charity_grid_post_date',array(
       'type' => 'checkbox',
       'label' => __('Post Date','ts-charity'),
       'section' => 'ts_charity_grid_post'
    ));

	$wp_customize->add_setting('ts_charity_grid_post_date_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ts_Charity_Icon_Changer(
        $wp_customize,'ts_charity_grid_post_date_icon',array(
		'label'	=> __('Date Icon','ts-charity'),
		'transport' => 'refresh',
		'section'	=> 'ts_charity_grid_post',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('ts_charity_grid_post_comment',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_charity_grid_post_comment',array(
       'type' => 'checkbox',
       'label' => __('Post Comment','ts-charity'),
       'section' => 'ts_charity_grid_post'
    ));

	$wp_customize->add_setting('ts_charity_grid_post_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ts_Charity_Icon_Changer(
        $wp_customize,'ts_charity_grid_post_comment_icon',array(
		'label'	=> __('Comment Icon','ts-charity'),
		'transport' => 'refresh',
		'section'	=> 'ts_charity_grid_post',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('ts_charity_grid_post_author',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_charity_grid_post_author',array(
       'type' => 'checkbox',
       'label' => __('Post Author','ts-charity'),
       'section' => 'ts_charity_grid_post'
    ));

	$wp_customize->add_setting('ts_charity_grid_post_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ts_Charity_Icon_Changer(
        $wp_customize,'ts_charity_grid_post_author_icon',array(
		'label'	=> __('Author Icon','ts-charity'),
		'transport' => 'refresh',
		'section'	=> 'ts_charity_grid_post',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('ts_charity_grid_post_time',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_charity_grid_post_time',array(
       'type' => 'checkbox',
       'label' => __('Post Time','ts-charity'),
       'section' => 'ts_charity_grid_post'
    ));

	$wp_customize->add_setting('ts_charity_grid_post_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ts_Charity_Icon_Changer(
        $wp_customize,'ts_charity_grid_post_time_icon',array(
		'label'	=> __('Time Icon','ts-charity'),
		'transport' => 'refresh',
		'section'	=> 'ts_charity_grid_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting( 'ts_charity_grid_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'absint'
	) );
	$wp_customize->add_control( 'ts_charity_grid_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','ts-charity' ),
		'section'     => 'ts_charity_grid_post',
		'type'        => 'text',
		'settings'    => 'ts_charity_grid_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Related Post Settings
	$wp_customize->add_section('ts_charity_related_post',array(
		'title'	=> __('Related Post Settings','ts-charity'),
		'panel' => 'ts_charity_panel_id',
	));

   $wp_customize->add_setting( 'ts_charity_show_related_post',array(
		'default' => true,
      'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
   ) );
   $wp_customize->add_control('ts_charity_show_related_post',array(
    	'type' => 'checkbox',
      'label' => __( 'Related Post','ts-charity' ),
      'section' => 'ts_charity_related_post'
   ));

   $wp_customize->add_setting('ts_charity_related_posts_taxanomies_options',array(
        'default' => 'categories',
        'sanitize_callback' => 'ts_charity_sanitize_choices'
	));
	$wp_customize->add_control('ts_charity_related_posts_taxanomies_options',array(
        'type' => 'radio',
        'label' => __('Related Post Taxonomies','ts-charity'),
        'section' => 'ts_charity_related_post',
        'choices' => array(
            'categories' => __('Categories','ts-charity'),
            'tags' => __('Tags','ts-charity'),
        ),
	) );

	$wp_customize->add_setting('ts_charity_related_post_title',array(
		'default'=> __('Related Posts','ts-charity'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_charity_related_post_title',array(
		'label'	=> __('Related Post Title','ts-charity'),
		'section'=> 'ts_charity_related_post',
		'type'=> 'text'
	));

   $wp_customize->add_setting('ts_charity_related_posts_number',array(
		'default'=> 3,
		'sanitize_callback'	=> 'ts_charity_sanitize_float',
	));
	$wp_customize->add_control('ts_charity_related_posts_number',array(
		'label'	=> __('Related Post Number','ts-charity'),
		'section'=> 'ts_charity_related_post',
		'type'=> 'number',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));

	$wp_customize->add_setting('ts_charity_related_post_excerpt_number',array(
		'default'=> 20,
		'sanitize_callback'	=> 'ts_charity_sanitize_float',
	));
	$wp_customize->add_control('ts_charity_related_post_excerpt_number',array(
		'label'	=> __('Related Post Content Limit','ts-charity'),
		'section'=> 'ts_charity_related_post',
		'type'=> 'number',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));
	
	//Layouts
	$wp_customize->add_section( 'ts_charity_left_right', array(
    	'title'      => __( 'Layout Settings', 'ts-charity' ),
		'priority'   => null,
		'panel' => 'ts_charity_panel_id'
	) );

	$wp_customize->add_setting('ts_charity_theme_options',array(
        'default' => 'Default',
        'sanitize_callback' => 'ts_charity_sanitize_choices'
	));
	$wp_customize->add_control('ts_charity_theme_options',array(
        'type' => 'radio',
        'label' => __('Container Box','ts-charity'),
        'description' => __('Here you can change the Width layout. ','ts-charity'),
        'section' => 'ts_charity_left_right',
        'choices' => array(
            'Default' => __('Default','ts-charity'),
            'Container' => __('Container','ts-charity'),
            'Box Container' => __('Box Container','ts-charity'),
        ),
	) );

	$wp_customize->add_setting('ts_charity_preloader_option',array(
       'default' => false,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
   ));
   $wp_customize->add_control('ts_charity_preloader_option',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Preloader','ts-charity'),
       'section' => 'ts_charity_left_right'
   ));

   $wp_customize->add_setting('ts_charity_preloader_type_options', array(
		'default'           => 'Preloader 1',
		'sanitize_callback' => 'ts_charity_sanitize_choices',
	));
	$wp_customize->add_control('ts_charity_preloader_type_options',array(
		'type'           => 'radio',
		'label'          => __('Preloader Type', 'ts-charity'),
		'section'        => 'ts_charity_left_right',
		'choices'        => array(
			'Preloader 1'  => __('Preloader 1', 'ts-charity'),
			'Preloader 2' => __('Preloader 2', 'ts-charity'),
		),
	));

	$wp_customize->add_setting('ts_charity_preloader_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'ts_charity_preloader_bg_image',array(
        'label' => __('Preloader Background Image','ts-charity'),
        'section' => 'ts_charity_left_right'
	)));

   $wp_customize->add_setting( 'ts_charity_loader_background_color_first', array(
	   'default' => '',
	   'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_charity_loader_background_color_first', array(
  		'label' => __('Background Color for Preloader', 'ts-charity'),
	   'section' => 'ts_charity_left_right',
	   'settings' => 'ts_charity_loader_background_color_first',
  	)));

  	$wp_customize->add_setting( 'ts_charity_breadcrumb_color', array(
	    'default' => '#000',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_charity_breadcrumb_color', array(
  		 'label' => __('Breadcrumb Color', 'ts-charity'),
	    'section' => 'ts_charity_left_right',
	    'settings' => 'ts_charity_breadcrumb_color',
  	)));

  	$wp_customize->add_setting( 'ts_charity_breadcrumb_bg_color', array(
	    'default' => '#fcb20b',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_charity_breadcrumb_bg_color', array(
  		 'label' => __('Breadcrumb Background Color', 'ts-charity'),
	    'section' => 'ts_charity_left_right',
	    'settings' => 'ts_charity_breadcrumb_bg_color',
  	)));

   $wp_customize->add_setting( 'ts_charity_single_page_breadcrumb',array(
		'default' => false,
      	'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
   ) );
   $wp_customize->add_control('ts_charity_single_page_breadcrumb',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Single Page Breadcrumb','ts-charity' ),
        'section' => 'ts_charity_left_right'
   ));

	$wp_customize->add_setting('ts_charity_layout_options',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'ts_charity_sanitize_choices'	        
	) );
	$wp_customize->add_control('ts_charity_layout_options',array(
        'type' => 'radio',
        'label' => __('Blog Post Layouts','ts-charity'),
        'section' => 'ts_charity_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','ts-charity'),
            'Right Sidebar' => __('Right Sidebar','ts-charity'),
            'One Column' => __('One Column','ts-charity'),
            'Three Columns' => __('Three Columns','ts-charity'),
            'Four Columns' => __('Four Columns','ts-charity'),
            'Grid Layout' => __('Grid Layout','ts-charity')
        ),
	) );

	$wp_customize->add_setting('ts_charity_single_post_sidebar_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'ts_charity_sanitize_choices',
	));
	$wp_customize->add_control('ts_charity_single_post_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Post Layouts', 'ts-charity'),
		'section'        => 'ts_charity_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'ts-charity'),
			'Right Sidebar' => __('Right Sidebar', 'ts-charity'),
			'One Column'    => __('One Column', 'ts-charity'),
		),
	));

	$wp_customize->add_setting('ts_charity_single_page_sidebar_layout', array(
		'default'           => 'One Column',
		'sanitize_callback' => 'ts_charity_sanitize_choices',
	));
	$wp_customize->add_control('ts_charity_single_page_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Page Layouts', 'ts-charity'),
		'section'        => 'ts_charity_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'ts-charity'),
			'Right Sidebar' => __('Right Sidebar', 'ts-charity'),
			'One Column'    => __('One Column', 'ts-charity'),
		),
	));

	//no Result Found
	$wp_customize->add_section('ts_charity_noresult_found',array(
		'title'	=> __('No Result Found','ts-charity'),
		'panel' => 'ts_charity_panel_id',
	));	

	$wp_customize->add_setting('ts_charity_nosearch_found_title',array(
		'default'=> __('Nothing Found','ts-charity'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_charity_nosearch_found_title',array(
		'label'	=> __('No Result Found Title','ts-charity'),
		'section'=> 'ts_charity_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('ts_charity_nosearch_found_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','ts-charity'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_charity_nosearch_found_content',array(
		'label'	=> __('No Result Found Content','ts-charity'),
		'section'=> 'ts_charity_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('ts_charity_show_noresult_search',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ));
   $wp_customize->add_control('ts_charity_show_noresult_search',array(
       'type' => 'checkbox',
       'label' => __('No Result search','ts-charity'),
       'section' => 'ts_charity_noresult_found'
    ));

	//404 Page Setting
	$wp_customize->add_section('ts_charity_404_page_setting',array(
		'title'	=> __('404 Page','ts-charity'),
		'panel' => 'ts_charity_panel_id',
	));	

	$wp_customize->add_setting('ts_charity_title_404_page',array(
		'default'=> __('404 Not Found','ts-charity'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_charity_title_404_page',array(
		'label'	=> __('404 Page Title','ts-charity'),
		'section'=> 'ts_charity_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('ts_charity_content_404_page',array(
		'default'=> __('Looks like you have taken a wrong turn&hellip. Dont worry&hellip it happens to the best of us.','ts-charity'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_charity_content_404_page',array(
		'label'	=> __('404 Page Content','ts-charity'),
		'section'=> 'ts_charity_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('ts_charity_button_404_page',array(
		'default'=> __('Back to Home Page','ts-charity'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_charity_button_404_page',array(
		'label'	=> __('404 Page Button','ts-charity'),
		'section'=> 'ts_charity_404_page_setting',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('ts_charity_responsive_setting',array(
		'title'	=> __('Responsive Settings','ts-charity'),
		'panel' => 'ts_charity_panel_id',
	));

	// taggle button color
    $wp_customize->add_setting( 'ts_charity_taggle_menu_bg_color_settings', array(
	   'default' => '#222',
	   'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_charity_taggle_menu_bg_color_settings', array(
  		'label' => __('Toggle Menu Bg Color', 'ts-charity'),
	   'section' => 'ts_charity_responsive_setting',
	   'settings' => 'ts_charity_taggle_menu_bg_color_settings',
  	)));

	$wp_customize->add_setting('ts_charity_open_menu_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ts_Charity_Icon_Changer(
        $wp_customize,'ts_charity_open_menu_icon',array(
		'label'	=> __('Open Menu Icon','ts-charity'),
		'transport' => 'refresh',
		'section'	=> 'ts_charity_responsive_setting',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('ts_charity_close_menu_icon',array(
		'default'	=> 'far fa-times-circle',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ts_Charity_Icon_Changer(
        $wp_customize,'ts_charity_close_menu_icon',array(
		'label'	=> __('Close Menu Icon','ts-charity'),
		'transport' => 'refresh',
		'section'	=> 'ts_charity_responsive_setting',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('ts_charity_mobile_search_option',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_charity_mobile_search_option',array(
       'type' => 'checkbox',
       'label' => __('Search','ts-charity'),
       'section' => 'ts_charity_responsive_setting'
    ));

    $wp_customize->add_setting('ts_charity_responsive_sticky_header',array(
       'default' => false,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_charity_responsive_sticky_header',array(
       'type' => 'checkbox',
       'label' => __('Sticky Header','ts-charity'),
       'section' => 'ts_charity_responsive_setting'
    ));

    $wp_customize->add_setting('ts_charity_responsive_slider',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_charity_responsive_slider',array(
       'type' => 'checkbox',
       'label' => __('Slider','ts-charity'),
       'section' => 'ts_charity_responsive_setting'
    ));

    $wp_customize->add_setting('ts_charity_responsive_scroll',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_charity_responsive_scroll',array(
       'type' => 'checkbox',
       'label' => __('Scroll To Top','ts-charity'),
       'section' => 'ts_charity_responsive_setting'
    ));

    $wp_customize->add_setting('ts_charity_responsive_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_charity_responsive_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Sidebar','ts-charity'),
       'section' => 'ts_charity_responsive_setting'
    ));

    $wp_customize->add_setting('ts_charity_responsive_preloader',array(
       'default' => false,
       'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_charity_responsive_preloader',array(
       'type' => 'checkbox',
       'label' => __('Preloader','ts-charity'),
       'section' => 'ts_charity_responsive_setting'
    ));

	//footer
	$wp_customize->add_section('ts_charity_footer_section',array(
		'title'	=> __('Footer Text','ts-charity'),
		'priority'	=> null,
		'panel' => 'ts_charity_panel_id',
	));

	$wp_customize->add_setting('ts_charity_show_hide_footer',array(
		'default' => true,
		'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
	));
	$wp_customize->add_control('ts_charity_show_hide_footer',array(
     	'type' => 'checkbox',
      'label' => __('Show / Hide Footer','ts-charity'),
      'section' => 'ts_charity_footer_section',
	));

	$wp_customize->add_setting('ts_charity_footer_widget_areas',array(
        'default'           => 4,
        'sanitize_callback' => 'ts_charity_sanitize_choices',
   ));
   $wp_customize->add_control('ts_charity_footer_widget_areas',array(
        'type'        => 'select',
        'label'       => __('Footer widget area', 'ts-charity'),
        'section'     => 'ts_charity_footer_section',
        'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'ts-charity'),
        'choices' => array(
            '1'     => __('One', 'ts-charity'),
            '2'     => __('Two', 'ts-charity'),
            '3'     => __('Three', 'ts-charity'),
            '4'     => __('Four', 'ts-charity')
        ),
   ));

   $wp_customize->add_setting('ts_charity_footer_widget_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ts_charity_footer_widget_bg_color', array(
		'label'    => __('Footer Widget Background Color', 'ts-charity'),
		'section'  => 'ts_charity_footer_section',
	)));

	$wp_customize->add_setting('ts_charity_footer_widget_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'ts_charity_footer_widget_bg_image',array(
        'label' => __('Footer Widget Background Image','ts-charity'),
        'section' => 'ts_charity_footer_section'
	)));

	$wp_customize->add_setting('ts_charity_footer_heading',array(
	    'default' => 'Left',
	    'transport' => 'refresh',
	    'sanitize_callback' => 'ts_charity_sanitize_choices'
	));
	$wp_customize->add_control('ts_charity_footer_heading',array(
	    'type' => 'select',
	    'label' => __('Footer Heading Alignment','ts-charity'),
	    'section' => 'ts_charity_footer_section',
	    'choices' => array(
	    	'Left' => __('Left','ts-charity'),
	        'Center' => __('Center','ts-charity'),
	        'Right' => __('Right','ts-charity')
	    ),
	) );

	$wp_customize->add_setting('ts_charity_footer_content',array(
	    'default' => 'Left',
	    'transport' => 'refresh',
	    'sanitize_callback' => 'ts_charity_sanitize_choices'
	));
	$wp_customize->add_control('ts_charity_footer_content',array(
	    'type' => 'select',
	    'label' => __('Footer Content Alignment','ts-charity'),
	    'section' => 'ts_charity_footer_section',
	    'choices' => array(
	    	'Left' => __('Left','ts-charity'),
	        'Center' => __('Center','ts-charity'),
	        'Right' => __('Right','ts-charity')
	    ),
	) );

	$wp_customize->add_setting('ts_charity_footer_font_size',array(
		'default'=> 24,
		'sanitize_callback'	=> 'ts_charity_sanitize_float'
	));
	$wp_customize->add_control('ts_charity_footer_font_size',array(
		'label'	=> __('Footer Heading Font Size','ts-charity'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'ts_charity_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('ts_charity_footer_text_tranform',array(
		'default' => 'Uppercase',
		'sanitize_callback' => 'ts_charity_sanitize_choices'
 	));
 	$wp_customize->add_control('ts_charity_footer_text_tranform',array(
		'type' => 'radio',
		'label' => __('Footer Heading Text Transform','ts-charity'),
		'section' => 'ts_charity_footer_section',
		'choices' => array(
		   'Uppercase' => __('Uppercase','ts-charity'),
		   'Lowercase' => __('Lowercase','ts-charity'),
		   'Capitalize' => __('Capitalize','ts-charity'),
		),
	) );

	$wp_customize->add_setting('ts_charity_show_hide_copyright',array(
		'default' => true,
		'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
	));
	$wp_customize->add_control('ts_charity_show_hide_copyright',array(
     	'type' => 'checkbox',
      'label' => __('Show / Hide Copyright','ts-charity'),
      'section' => 'ts_charity_footer_section',
	));
	
	$wp_customize->add_setting('ts_charity_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));	
	$wp_customize->add_control('ts_charity_footer_copy',array(
		'label'	=> __('Copyright Text','ts-charity'),
		'section'	=> 'ts_charity_footer_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('ts_charity_copyright_content_align',array(
        'default' => 'center',
        'sanitize_callback' => 'ts_charity_sanitize_choices'
	));
	$wp_customize->add_control('ts_charity_copyright_content_align',array(
        'type' => 'select',
        'label' => __('Copyright Text Alignment ','ts-charity'),
        'section' => 'ts_charity_footer_section',
        'choices' => array(
            'left' => __('Left','ts-charity'),
            'right' => __('Right','ts-charity'),
            'center' => __('Center','ts-charity'),
        ),
	) );

	$wp_customize->add_setting('ts_charity_footer_content_font_size',array(
		'default'=> 16,
		'sanitize_callback'	=> 'ts_charity_sanitize_float',
	));
	$wp_customize->add_control('ts_charity_footer_content_font_size',array(
		'label' => esc_html__( 'Copyright Font Size','ts-charity' ),
		'section'=> 'ts_charity_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	));

	$wp_customize->add_setting('ts_charity_copyright_padding',array(
		'default'=> 15,
		'sanitize_callback'	=> 'ts_charity_sanitize_float',
	));
	$wp_customize->add_control('ts_charity_copyright_padding',array(
		'label'	=> __('Copyright Padding','ts-charity'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'ts_charity_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('ts_charity_footer_text_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ts_charity_footer_text_color', array(
		'label'    => __('Copyright Text Color', 'ts-charity'),
		'section'  => 'ts_charity_footer_section',
	)));

	$wp_customize->add_setting('ts_charity_footer_text_bg_color', array(
		'default'           => '#fcb20b',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ts_charity_footer_text_bg_color', array(
		'label'    => __('Copyright Background Color', 'ts-charity'),
		'section'  => 'ts_charity_footer_section',
	)));

	$wp_customize->add_setting('ts_charity_enable_disable_scroll',array(
      'default' => true,
      'sanitize_callback'	=> 'ts_charity_sanitize_checkbox'
	));
	$wp_customize->add_control('ts_charity_enable_disable_scroll',array(
     	'type' => 'checkbox',
      'label' => __('Show / Hide Scroll Top Button','ts-charity'),
      'section' => 'ts_charity_footer_section',
	));

	$wp_customize->add_setting('ts_charity_back_to_top_icon',array(
		'default'	=> 'fas fa-chevron-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ts_Charity_Icon_Changer(
        $wp_customize,'ts_charity_back_to_top_icon',array(
		'label'	=> __('Scroll Back to Top Icon','ts-charity'),
		'transport' => 'refresh',
		'section'	=> 'ts_charity_footer_section',
		'type'		=> 'icon'
	)));

   $wp_customize->add_setting('ts_charity_back_to_top_bg_color', array(
		'default'           => '#252525',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ts_charity_back_to_top_bg_color', array(
		'label'    => __('Back to Top Background Color', 'ts-charity'),
		'section'  => 'ts_charity_footer_section',
	)));

   $wp_customize->add_setting('ts_charity_back_to_top_bg_hover_color', array(
		'default'           => '#252525',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ts_charity_back_to_top_bg_hover_color', array(
		'label'    => __('Back to Top Background Hover Color', 'ts-charity'),
		'section'  => 'ts_charity_footer_section',
	)));

	$wp_customize->add_setting('ts_charity_scroll_setting',array(
      'default' => 'Right',
      'sanitize_callback' => 'ts_charity_sanitize_choices'
	));
	$wp_customize->add_control('ts_charity_scroll_setting',array(
      'type' => 'select',
      'label' => __('Scroll Back to Top Position','ts-charity'),
      'section' => 'ts_charity_footer_section',
      'choices' => array(
         'Left' => __('Left','ts-charity'),
         'Right' => __('Right','ts-charity'),
         'Center' => __('Center','ts-charity'),
        ),
	) );

	$wp_customize->add_setting('ts_charity_scroll_font_size_icon',array(
		'default'=> 20,
		'sanitize_callback'	=> 'ts_charity_sanitize_float',
	));
	$wp_customize->add_control('ts_charity_scroll_font_size_icon',array(
		'label'	=> __('Scroll Icon Font Size','ts-charity'),
		'section'=> 'ts_charity_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	) );
	
}
add_action( 'customize_register', 'ts_charity_customize_register' );	

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class TS_Charity_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'TS_Charity_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new TS_Charity_Customize_Section_Pro(
				$manager,
				'ts_charity_example_1',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Charity Pro Theme', 'ts-charity' ),
					'pro_text' => esc_html__( 'Get Pro','ts-charity' ),
					'pro_url'  => esc_url('https://www.themeshopy.com/themes/premium-charity-wordpress-theme/')
				)
			)
		);

		$manager->add_section(
			new TS_Charity_Customize_Section_Pro(
				$manager,
				'ts_charity_doc_link',
				array(
					'priority'   => 10,
					'title'    => esc_html__( 'Guide', 'ts-charity' ),
					'pro_text' => esc_html__( 'Documentation','ts-charity' ),
					'pro_url'  => esc_url('https://themeshopy.com/demo/docs/free-charity/')
				)
			)
		);

		$manager->add_section(
			new TS_Charity_Customize_Section_Pro(
				$manager,
				'ts_charity_demo_link',
				array(
					'priority'   => 11,
					'title'    => esc_html__( 'Live Demo', 'ts-charity' ),
					'pro_text' => esc_html__( 'Preview','ts-charity' ),
					'pro_url'  => esc_url('https://themeshopy.com/ts-charity-pro/')
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'ts-charity-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'ts-charity-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
TS_Charity_Customize::get_instance();