<?php
/*
** Layout
*/
Redux::setSection( $opt_name, array(
    'title'  => __( 'General', 'jevelin' ),
    'id'     => 'general',
    'icon'   => 'ti-crown',
    'fields' => array(

        array(
    		'id' => 'global_page_layout',
    		'title' => esc_html__( 'Page Layout', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose default page layout', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'default' => esc_html__( 'Default (without sidebar)', 'gillion' ),
    			'full' => esc_html__( 'Full Width', 'gillion' ),
    			'sidebar-left' => esc_html__( 'Sidebar Left', 'gillion' ),
    			'sidebar-right' => esc_html__( 'Sidebar Right', 'gillion' ),
    		),
    		'default' => 'default',
    	),

        array(
    		'id' => 'page_layout',
    		'title' => esc_html__( 'Boxed Layout', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose main page layout. Boxed layout will not work together with left header', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'full' => esc_html__( 'Disabled', 'gillion' ),
    			'boxed' => esc_html__( 'Enabled', 'gillion' ),
    		),
            'default' => 'full',
    	),

            array(
        		'id' => 'boxed_border_style',
        		'title' => esc_html__( 'Border Style', 'gillion' ),
        		'subtitle' => esc_html__( 'Choose content border style', 'gillion' ),
        		'type' => 'radio',
        		'options' => array(
        			'none' => esc_html__( 'None', 'gillion' ),
        			'shadow' => esc_html__( 'Shadow', 'gillion' ),
        			'line' => esc_html__( 'Line', 'gillion' ),
        		),
        		'default' => 'shadow',
                'required' => [ 'page_layout', '=', 'boxed' ],
        	),

        	array(
        		'id' => 'boxed_background_color',
        		'title' => esc_html__( 'Background Color', 'gillion' ),
        		'subtitle' => esc_html__( 'Select background color', 'gillion' ),
        		'type' => 'color',
        		'default' => '#fafafa',
                'required' => [ 'page_layout', '=', 'boxed' ],
        	),

        	array(
        		'id' => 'boxed_background_image',
        		'title' => esc_html__( 'Page Background Image', 'gillion' ),
        		'subtitle' => esc_html__( 'Select page background image', 'gillion' ),
        		'url' => '1',
        		'type' => 'media',
                'required' => [ 'page_layout', '=', 'boxed' ],
        	),

    	array(
    		'id' => 'white_borders',
    		'title' => esc_html__( 'White Frame', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable white frame around the page', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'0' => 'Off',
    			'1' => esc_html__( 'On', 'gillion' ),
    		),
            'default' => '0',
    	),

    	array(
    		'id' => 'white_borders_only_on_pages',
    		'title' => esc_html__( 'White Frame Only in Pages', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable white frame only in pages', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'0' => 'Off',
    			'1' => esc_html__( 'On', 'gillion' ),
    		),
            'default' => '0',
    	),

    	array(
    		'id' => 'responsive_layout',
    		'title' => esc_html__( 'Responsive Layout', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable responsive layout for mobile devices', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'0' => 'Off',
    			'1' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => '1',
    	),

    	array(
    		'id' => 'smooth-scrooling',
    		'title' => esc_html__( 'Smooth Scrolling', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable smooth scrolling for webkit browers like Chrome', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'0' => 'Off',
    			'1' => esc_html__( 'On', 'gillion' ),
    		),
            'default' => '0',
    	),

    	array(
    		'id' => 'back_to_top',
    		'title' => esc_html__( 'Back To Top Button', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose style for "Back to top" button or disable it', 'gillion' ),
    		'type' => 'select',
    		'options' => array(
    			'disabled' => esc_html__( 'Disabled', 'gillion' ),
    			'1' => esc_html__( 'Style 1', 'gillion' ),
    			'1 filled' => esc_html__( 'Style 1 (filled)', 'gillion' ),
    			'2' => esc_html__( 'Style 2', 'gillion' ),
    			'2 filled' => esc_html__( 'Style 2 (filled)', 'gillion' ),
    			'3' => esc_html__( 'Style 3', 'gillion' ),
    		),
    		'default' => '1',
    	),

    	array(
    		'id' => 'back_to_top_rounded',
    		'title' => esc_html__( 'Back To Top Button Rounded', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable rounded corners for back to top button', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'0' => 'Off',
    			'1' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => '1',
    	),

    	array(
    		'id' => 'rtl_support',
    		'title' => esc_html__( 'RTL Support', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable RTL (Right to Left) support', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'0' => 'Off',
    			'1' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => '0',
    	),

    	array(
    		'id' => 'crispy_images',
    		'title' => esc_html__( 'Crispy Images', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable crispy images effect', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'0' => 'Off',
    			'1' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => '0',
    	),

    	array(
    		'id' => 'page_comments',
    		'title' => esc_html__( 'Comments', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable post comments and page comments', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'0' => 'Off',
    			'1' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => '1',
    	),

    	array(
    		'id' => 'page_comments_depth',
    		'title' => esc_html__( 'Comments Depth', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose comments max depth', 'gillion' ),
    		'type' => 'select',
    		'options' => array(
    			'1' => esc_html__( '1 level', 'gillion' ),
    			'2' => esc_html__( '2 levels', 'gillion' ),
    			'3' => esc_html__( '3 levels', 'gillion' ),
    			'4' => esc_html__( '4 levels', 'gillion' ),
    			'5' => esc_html__( '5 levels', 'gillion' ),
    		),
    		'default' => '5',
    	),

    	array(
    		'id' => 'one_pager',
    		'title' => esc_html__( 'One Page Navigation', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable one page navigation', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'0' => 'Off',
    			'1' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => '1',
    	),

    	array(
    		'id' => 'api_key',
    		'title' => esc_html__( 'Google Maps API Key', 'gillion' ),
    		'subtitle' => esc_html__( 'Google Maps requires API Key to work correctly. Therefore please create an application in Google Console and add key here.</a>', 'gillion' ),
    		'type' => 'text',
    	),

    	array(
    		'id' => 'theme_options_stored',
    		'title' => esc_html__( 'Themes Options Stored In', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose how theme options are stored', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'file' => esc_html__( 'Stored in CSS file (inside wp-content/uploads) - faster', 'gillion' ),
    			'inline' => esc_html__( 'Generated on fly in HTML HEAD tag as dynamic CSS - slower', 'gillion' ),
    		),
    		'default' => 'file',
    	),


    )
));




/*
** Styling
*/
Redux::setSection( $opt_name, array(
    'title'  => __( 'Styling', 'jevelin' ),
    'id'     => 'styling',
    'icon'   => 'ti-palette',
    'fields' => array(

        array(
    		'id' => 'styling_body_background',
    		'title' => esc_html__( 'Body Background Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select body background color', 'gillion' ),
    		'type' => 'color',
    		'default' => '#ffffff',
    	),

    	array(
    		'id' => 'styling_body',
    		'title' => esc_html__( 'Body Font', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose default body font settings', 'gillion' ),
    		'type' => 'typography',
            'google'   => true,
    		'default' => array(
    			'font-family' => 'Raleway',
    			'font-weight' => '400',
    			'font-size' => '14px',
    			'color' => '#8d8d8d',
    		),
            'text-align' => false,
            'letter-spacing' => true,
            'line-height' => true,
            'subsets' => false,
    	),

    	array(
    		'id' => 'google_fonts_subset',
    		'title' => esc_html__( 'Choose the character sets', 'gillion' ),
    		'subtitle' => esc_html__( 'Select the character sets you want to use for fonts (will be used only if available)', 'gillion' ),
    		'type' => 'checkbox',
    		'options' => array(
    			'greek' => esc_html__( 'Greek ', 'gillion' ),
    			'greek-ext' => esc_html__( 'Greek Extended', 'gillion' ),
    			'latin' => esc_html__( 'Latin', 'gillion' ),
    			'vietnamese' => esc_html__( 'Vietnamese', 'gillion' ),
    			'cyrillic-ext' => esc_html__( 'Cyrillic Extended', 'gillion' ),
    			'latin-ext' => esc_html__( 'Latin Extended', 'gillion' ),
    			'cyrillic' => esc_html__( 'Cyrillic ', 'gillion' ),
    		),
    		'default' => array(
    			'latin' => 1,
    		),
    	),

    	array(
    		'id' => 'google_fonts_mini',
    		'title' => esc_html__( 'Only main font weights', 'gillion' ),
    		'subtitle' => esc_html__( 'Improve page speed by loading only main font weights', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'0' => 'Off',
    			'1' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => '1',
    	),

	array(
		'id' => 'general_divider',
		'title' => '<h2>' . esc_html__( 'General', 'gillion' ) . '</h2>',
		'type' => 'raw',
	),

    	array(
    		'id' => 'accent_color',
    		'title' => esc_html__( 'Accent Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select page accent color', 'gillion' ),
    		'type' => 'color',
    		'default' => '#47c9e5',
    	),

    	array(
    		'id' => 'accent_hover_color',
    		'title' => esc_html__( 'Accent Hover Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select page accent color on hover', 'gillion' ),
    		'type' => 'color',
    		'default' => '#15bee4',
    	),

    	array(
    		'id' => 'link_color',
    		'title' => esc_html__( 'Link Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select page link color', 'gillion' ),
    		'type' => 'color',
    		'default' => '#16acce',
    	),

    	array(
    		'id' => 'link_hover_color',
    		'title' => esc_html__( 'Link Hover Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select page link color on hover', 'gillion' ),
    		'type' => 'color',
    		'default' => '#10a0c0',
    	),

	array(
		'id' => 'headings_divider',
		'title' => '<h2>' . esc_html__( 'Headings', 'gillion' ) . '</h2>',
		'type' => 'raw',
	),

    	array(
    		'id' => 'styling_headings',
    		'title' => esc_html__( 'Headings', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose default font settings for all headings', 'gillion' ),
    		'type' => 'typography',
    		'default' => array(
    			'font-family' => 'Raleway',
    			'font-weight' => '700',
    			'color' => '#3f3f3f',
    		),
            'font-size' => false,
            'text-align' => false,
            'letter-spacing' => false,
            'line-height' => false,
            'subsets' => false,
    	),

    	array(
    		'id' => 'styling_h1',
    		'title' => esc_html__( 'Heading 1', 'gillion' ),
    		'subtitle' => esc_html__( 'Select heading 1 font size (pixels)', 'gillion' ),
    		'min' => '5',
    		'max' => '65',
    		'type' => 'slider',
    		'default' => '30',
    	),

    	array(
    		'id' => 'styling_h2',
    		'title' => esc_html__( 'Heading 2', 'gillion' ),
    		'subtitle' => esc_html__( 'Select heading 2 font size (pixels)', 'gillion' ),
    		'min' => '5',
    		'max' => '65',
    		'type' => 'slider',
    		'default' => '24',
    	),

    	array(
    		'id' => 'styling_h3',
    		'title' => esc_html__( 'Heading 3', 'gillion' ),
    		'subtitle' => esc_html__( 'Select heading 3 font size (pixels)', 'gillion' ),
    		'min' => '5',
    		'max' => '65',
    		'type' => 'slider',
    		'default' => '21',
    	),

    	array(
    		'id' => 'styling_h4',
    		'title' => esc_html__( 'Heading 4', 'gillion' ),
    		'subtitle' => esc_html__( 'Select heading 4 font size (pixels)', 'gillion' ),
    		'min' => '5',
    		'max' => '65',
    		'type' => 'slider',
    		'default' => '18',
    	),

    	array(
    		'id' => 'styling_h5',
    		'title' => esc_html__( 'Heading 5', 'gillion' ),
    		'subtitle' => esc_html__( 'Select heading 5 font size (pixels)', 'gillion' ),
    		'min' => '5',
    		'max' => '65',
    		'type' => 'slider',
    		'default' => '16',
    	),

    	array(
    		'id' => 'styling_h6',
    		'title' => esc_html__( 'Heading 6', 'gillion' ),
    		'subtitle' => esc_html__( 'Select heading 6 font size (pixels)', 'gillion' ),
    		'min' => '5',
    		'max' => '65',
    		'type' => 'slider',
    		'default' => '14',
    	),

	array(
		'id' => 'header_divider',
		'title' => '<h2>' . esc_html__( 'Header', 'gillion' ) . '</h2>',
		'type' => 'raw',
	),

    	array(
    		'id' => 'header_background_color',
    		'title' => esc_html__( 'Header Background Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select header background color', 'gillion' ),
    		'type' => 'color',
    		'default' => '#fff',
    	),

    	array(
    		'id' => 'header_background_image',
    		'title' => esc_html__( 'Header Background Image', 'gillion' ),
    		'subtitle' => esc_html__( 'Upload a header background image. Note: Image will only appear when background color transparancy will be set', 'gillion' ),
    		'url' => '1',
    		'type' => 'media',
    	),

    	array(
    		'id' => 'header_text_color',
    		'title' => esc_html__( 'Header Text Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select header text color', 'gillion' ),
    		'type' => 'color',
    		'default' => '#8d8d8d',
    	),

    	array(
    		'id' => 'header_border_color',
    		'title' => esc_html__( 'Header Border Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select header border color', 'gillion' ),
    		'type' => 'color',
    		'default' => 'rgba( 0,0,0,0.08 )',
    	),

    	array(
    		'id' => 'header_top_background_color',
    		'title' => esc_html__( 'Top Bar Background Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select top bar background color', 'gillion' ),
    		'type' => 'color',
    		'default' => '#47c9e5',
    	),

    	array(
    		'id' => 'header_top_color',
    		'title' => esc_html__( 'Top Bar Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select top bar color', 'gillion' ),
    		'type' => 'color',
    		'default' => '#ffffff',
    	),

        array(
    		'id' => 'header_light_text_color',
    		'title' => esc_html__( 'Light Header Text Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select light header text color', 'gillion' ),
    		'type' => 'color',
    	),

        array(
    		'id' => 'header_light_text_active_color',
    		'title' => esc_html__( 'Light Header Text Active Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select light header text active color', 'gillion' ),
    		'type' => 'color',
    	),

	array(
		'id' => 'navigation_divider',
		'title' => '<h2>' . esc_html__( 'Navigation', 'gillion' ) . '</h2>',
		'type' => 'raw',
	),

    	array(
    		'id' => 'header_nav_font',
    		'title' => esc_html__( 'Font Famility', 'gillion' ),
    		'subtitle' => esc_html__( 'Select navigation font famility', 'gillion' ),
    		'type' => 'select',
    		'options' => array(
    			'heading' => esc_html__( 'Heading', 'gillion' ),
    			'body' => esc_html__( 'Body', 'gillion' ),
    			'additional1' => esc_html__( 'Additional font 1', 'gillion' ),
    			'additional2' => esc_html__( 'Additional font 2', 'gillion' ),
    		),
    		'default' => 'body',
    	),

    	array(
    		'id' => 'header_nav_size',
    		'title' => esc_html__( 'Navigation Size', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter your navigation size (with <b>px</b>)', 'gillion' ),
    		'type' => 'text',
    		'default' => '14px',
    	),

    	array(
    		'id' => 'header_nav_color',
    		'title' => esc_html__( 'Navigation Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select navigation color', 'gillion' ),
    		'type' => 'color',
    		'default' => 'rgba(61,61,61,0.69)',
    	),

    	array(
    		'id' => 'header_nav_hover_color',
    		'title' => esc_html__( 'Navigation Hover Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select navigation color on hover', 'gillion' ),
    		'type' => 'color',
    		'default' => 'rgba(61,61,61,0.80)',
    	),

    	array(
    		'id' => 'header_nav_active_color',
    		'title' => esc_html__( 'Active Navigation Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select active navigation color', 'gillion' ),
    		'type' => 'color',
    		'default' => '#47c9e5',
    	),

    	array(
    		'id' => 'header_nav_active_background_color',
    		'title' => esc_html__( 'Active Navigation Background Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select active navigation background color (optional)', 'gillion' ),
    		'type' => 'color',
    	),

	array(
		'id' => 'dropdown / menu_divider',
		'title' => '<h2>' . esc_html__( 'Dropdown / Menu', 'gillion' ) . '</h2>',
		'type' => 'raw',
	),

    	array(
    		'id' => 'menu_background_color',
    		'title' => esc_html__( 'Menu Background Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select background color', 'gillion' ),
    		'type' => 'color',
    		'default' => '#232323',
    	),

    	array(
    		'id' => 'menu_title_color',
    		'title' => esc_html__( 'Menu Title Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select title color', 'gillion' ),
    		'type' => 'color',
    	),

    	array(
    		'id' => 'menu_link_color',
    		'title' => esc_html__( 'Menu Text Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select text color', 'gillion' ),
    		'type' => 'color',
    		'default' => '#aaaaaa',
    	),

    	array(
    		'id' => 'menu_link_hover_color',
    		'title' => esc_html__( 'Menu Link Hover and Active Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select menu link hover and active color', 'gillion' ),
    		'type' => 'color',
    		'default' => '#ffffff',
    	),

    	array(
    		'id' => 'menu_link_border_color',
    		'title' => esc_html__( 'Menu Link Border Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select menu link border color', 'gillion' ),
    		'type' => 'color',
    		'default' => '#303030',
    	),

    	array(
    		'id' => 'menu_active_background1',
    		'title' => esc_html__( 'Menu Background Color 1', 'gillion' ),
    		'subtitle' => esc_html__( 'Select menu background color 1 (for dropdown style 2 only)', 'gillion' ),
    		'type' => 'color',
    	),

    	array(
    		'id' => 'menu_active_background2',
    		'title' => esc_html__( 'Menu Background Color 2', 'gillion' ),
    		'subtitle' => esc_html__( 'Select menu background color 2 to make gradient (for dropdown style 2 only)', 'gillion' ),
    		'type' => 'color',
    	),

	array(
		'id' => 'content_divider',
		'title' => '<h2>' . esc_html__( 'Content', 'gillion' ) . '</h2>',
		'type' => 'raw',
	),

    	array(
    		'id' => 'content_border',
    		'title' => esc_html__( 'Borders', 'gillion' ),
    		'subtitle' => esc_html__( 'Will change borders in blog, portfolio and shop content pages', 'gillion' ),
    		'type' => 'color',
    		'default' => '#e5e5e5',
    	),

    	array(
    		'id' => 'content_button_background',
    		'title' => esc_html__( 'Buttons Background Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Will change different button background color in blog, portfolio and shop content pages', 'gillion' ),
    		'type' => 'color',
    		'default' => '#f2f2f2',
    	),

    	array(
    		'id' => 'content_button_background_hover',
    		'title' => esc_html__( 'Buttons Background Hover Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Will change different button background hover color in blog, portfolio and shop content pages', 'gillion' ),
    		'type' => 'color',
    		'default' => '#e5e5e5',
    	),

    	array(
    		'id' => 'content_button_text_color',
    		'title' => esc_html__( 'Buttons Text Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Will change different button text color in blog, portfolio and shop content pages', 'gillion' ),
    		'type' => 'color',
    		'default' => '#9a9a9a',
    	),

    	array(
    		'id' => 'content_input_background_color',
    		'title' => esc_html__( 'Input, Textarea Background Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Will change different input and textarea field background color in blog, portfolio and shop content pages', 'gillion' ),
    		'type' => 'color',
    		'default' => '#ffffff',
    	),

    	array(
    		'id' => 'content_input_border_color',
    		'title' => esc_html__( 'Input, Textarea Border Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Will change different input and textarea field border color in blog, portfolio and shop content pages', 'gillion' ),
    		'type' => 'color',
    		'default' => '#e3e3e3',
    	),

    	array(
    		'id' => 'content_input_text_color',
    		'title' => esc_html__( 'Input, Textarea Text Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Will change different input and textarea field border color in blog, portfolio and shop content pages', 'gillion' ),
    		'type' => 'color',
    		'default' => '#8d8d8d',
    	),

    	array(
    		'id' => 'content_search_background_color',
    		'title' => esc_html__( 'Search Widget Icon Background Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Will change search widget icon background color', 'gillion' ),
    		'type' => 'color',
    		'default' => '#f0f0f0',
    	),

    	array(
    		'id' => 'content_search_text_color',
    		'title' => esc_html__( 'Search Widget Icon Text Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Will change search widget icon text color', 'gillion' ),
    		'type' => 'color',
    		'default' => '#505050',
    	),

	array(
		'id' => 'sidebar_divider',
		'title' => '<h2>' . esc_html__( 'Sidebar', 'gillion' ) . '</h2>',
		'type' => 'raw',
	),

    	array(
    		'id' => 'sidebar_headings',
    		'title' => esc_html__( 'Sidebar Headings', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose default sidebar heading font settings', 'gillion' ),
    		'type' => 'typography',
    		'default' => array(
    			'font-size' => 14,
    			'color' => '#505050',
    		),
            'text-align' => false,
            'font-style' => false,
            'font-family' => false,
            'font-weight' => false,
            'letter-spacing' => false,
            'line-height' => false,
            'subsets' => false,
    	),

    	array(
    		'id' => 'sidebar_border_color',
    		'title' => esc_html__( 'Sidebar Border Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select sidebar border color', 'gillion' ),
    		'type' => 'color',
    		'default' => '#e3e3e3',
    	),

	array(
		'id' => 'footer styling_divider',
		'title' => '<h2>' . esc_html__( 'Footer Styling', 'gillion' ) . '</h2>',
		'type' => 'raw',
	),

    	array(
    		'id' => 'footer_background_color',
    		'title' => esc_html__( 'Footer Background Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select footer background color', 'gillion' ),
    		'type' => 'color',
    		'default' => '#262626',
    	),

    	array(
    		'id' => 'footer_background_image',
    		'title' => esc_html__( 'Footer Background Image', 'gillion' ),
    		'subtitle' => esc_html__( 'Upload a footer background image. Note: Image will appear only when background color transparancy will be set', 'gillion' ),
    		'url' => '1',
    		'type' => 'media',
    	),

    	array(
    		'id' => 'footer_headings',
    		'title' => esc_html__( 'Footer Headings', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose default footer heading font settings', 'gillion' ),
    		'type' => 'typography',
    		'default' => array(
    			'font-size' => 20,
    			'color' => '#ffffff',
    		),
            'text-align' => false,
            'font-style' => false,
            'font-family' => false,
            'font-weight' => false,
            'letter-spacing' => false,
            'line-height' => false,
            'subsets' => false,
    	),

    	array(
    		'id' => 'footer_text_color',
    		'title' => esc_html__( 'Footer Text Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select footer text color', 'gillion' ),
    		'type' => 'color',
    		'default' => '#e3e3e3',
    	),

    	array(
    		'id' => 'footer_link_color',
    		'title' => esc_html__( 'Footer Link Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select footer link color', 'gillion' ),
    		'type' => 'color',
    		'default' => '#ffffff',
    	),

    	array(
    		'id' => 'footer_hover_color',
    		'title' => esc_html__( 'Footer Hover Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select footer color on hover', 'gillion' ),
    		'type' => 'color',
    		'default' => '#47c9e5',
    	),

    	array(
    		'id' => 'footer_icon_color',
    		'title' => esc_html__( 'Footer Icon Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select footer icon color', 'gillion' ),
    		'type' => 'color',
    		'default' => '#f7f7f7',
    	),

    	array(
    		'id' => 'footer_border_color',
    		'title' => esc_html__( 'Footer Border Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select footer border color', 'gillion' ),
    		'type' => 'color',
    		'default' => 'rgba(255,255,255,0.10)',
    	),

	array(
		'id' => 'copyright styling_divider',
		'title' => '<h2>' . esc_html__( 'Copyright Styling', 'gillion' ) . '</h2>',
		'type' => 'raw',
	),

    	array(
    		'id' => 'copyright_background_color',
    		'title' => esc_html__( 'Copyright Background Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select copyright background color', 'gillion' ),
    		'type' => 'color',
    		'default' => '#222222',
    	),

    	array(
    		'id' => 'copyright_text_color',
    		'title' => esc_html__( 'Copyright Text Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select copyright text color', 'gillion' ),
    		'type' => 'color',
    		'default' => '#ffffff',
    	),

    	array(
    		'id' => 'copyright_link_color',
    		'title' => esc_html__( 'Copyright Link Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select copyright link color', 'gillion' ),
    		'type' => 'color',
    		'default' => '#ffffff',
    	),

    	array(
    		'id' => 'copyright_hover_color',
    		'title' => esc_html__( 'Copyright Link Hover Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select copyright link color on hover', 'gillion' ),
    		'type' => 'color',
    		'default' => '#c0e3eb',
    	),

    	array(
    		'id' => 'copyright_border_color',
    		'title' => esc_html__( 'Copyright Border Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select copyright border color', 'gillion' ),
    		'type' => 'color',
    		'default' => 'rgba(255,255,255,0.15)',
    	),

	array(
		'id' => 'popover styling_divider',
		'title' => '<h2>' . esc_html__( 'Popover Styling', 'gillion' ) . '</h2>',
		'type' => 'raw',
	),

    	array(
    		'id' => 'popover_wc',
    		'title' => esc_html__( 'Popover', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable popover for WooCommerce elements', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'off' => esc_html__( 'Off', 'gillion' ),
    			'on' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => 'on',
    	),

    	array(
    		'id' => 'popover_color',
    		'title' => esc_html__( 'Popover Background Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select popover background color. Leave empty for default accent color', 'gillion' ),
    		'type' => 'color',
    	),

    	array(
    		'id' => 'popover_font',
    		'title' => esc_html__( 'Popover Font Famility', 'gillion' ),
    		'subtitle' => esc_html__( 'Select popover font famility source', 'gillion' ),
    		'type' => 'select',
    		'options' => array(
    			'heading' => esc_html__( 'Heading', 'gillion' ),
    			'body' => esc_html__( 'Body', 'gillion' ),
    			'additional1' => esc_html__( 'Additional font 1', 'gillion' ),
    			'additional2' => esc_html__( 'Additional font 2', 'gillion' ),
    		),
    		'default' => 'additional1',
    	),

	array(
		'id' => 'adittional fonts_divider',
		'title' => '<h2>' . esc_html__( 'Adittional Fonts', 'gillion' ) . '</h2>',
		'type' => 'raw',
	),

    	array(
    		'id' => 'additional_font1',
    		'title' => esc_html__( 'Adittional Font 1', 'gillion' ),
    		'subtitle' => esc_html__( 'Used adittional font for WoocCmmerce sale popover', 'gillion' ),
    		'type' => 'typography',
    		'default' => array(
    			'font-family' => 'Raleway',
    			'font-weight' => '400',
    		),
            'text-align' => false,
            'letter-spacing' => false,
            'line-height' => false,
            'subsets' => false,
            'font-size' => false,
            'color' => false,
    	),

    	array(
    		'id' => 'additional_font2',
    		'title' => esc_html__( 'Adittional Font 2', 'gillion' ),
    		'subtitle' => esc_html__( 'Used adittional font for heading and other shortcodes', 'gillion' ),
    		'type' => 'typography',
    		'default' => array(
                'font-family' => 'Raleway',
    			'font-weight' => '400',
    		),
            'text-align' => false,
            'letter-spacing' => false,
            'line-height' => false,
            'subsets' => false,
            'font-size' => false,
            'color' => false,
    	),

    )
));




/*
** Header
*/
Redux::setSection( $opt_name, array(
    'title'  => __( 'Header', 'jevelin' ),
    'id'     => 'header',
    'icon'   => 'ti-flag-alt-2',
    'fields' => array(

        array(
    		'id' => 'header_layout',
    		'title' => esc_html__( 'Header Template', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose header template', 'gillion' ),
    		'type' => 'radio',
    		'options' => jevelin_get_headers(),
    		'default' => '1',
    	),

    	array(
    		'id' => 'header logos_divider',
    		'title' => '<h2>' . esc_html__( 'Header Logos', 'gillion' ) . '</h2>',
    		'type' => 'raw',
    	),

    	array(
    		'id' => 'logo',
    		'title' => esc_html__( 'Standard Logo', 'gillion' ),
    		'subtitle' => esc_html__( 'Upload a logo image (max height 250px) used in posts, portfolio and other pages', 'gillion' ),
    		'url' => '1',
    		'type' => 'media',
    	),

    	array(
    		'id' => 'logo_light',
    		'title' => esc_html__( 'Light Logo Version (optional)', 'gillion' ),
    		'subtitle' => esc_html__( 'Upload a light logo version (max height 250px) used only when light style is activated or is above slide', 'gillion' ),
    		'url' => '1',
    		'type' => 'media',
    	),

    	array(
    		'id' => 'logo_sticky',
    		'title' => esc_html__( 'Sticky Logo (optional)', 'gillion' ),
    		'subtitle' => esc_html__( 'Upload a sticky logo image (max height 250px) used only when sticky header is activated', 'gillion' ),
    		'url' => '1',
    		'type' => 'media',
    	),

        array(
    		'id' => 'header_logo_sizes',
    		'title' => esc_html__( 'Logo Sizes', 'gillion' ),
    		'subtitle' => esc_html__( 'Switch between orgianl and manual header logo sizing', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'orginal' => esc_html__( 'Orginal', 'gillion' ),
    			'manual' => esc_html__( 'Manual', 'gillion' ),
    		),
    		'default' => 'orginal',
    	),

        	array(
        		'id' => 'standard_height',
        		'title' => esc_html__( 'Logo Height', 'gillion' ),
        		'subtitle' => esc_html__( 'Choose header logo height size', 'gillion' ),
        		'type' => 'text',
        		'default' => '40',
                'required' => [ 'header_logo_sizes', '=', 'manual' ],
        	),

        	array(
        		'id' => 'sticky_height',
        		'title' => esc_html__( 'Sticky Logo Height', 'gillion' ),
        		'subtitle' => esc_html__( 'Choose sticky logo height size', 'gillion' ),
        		'type' => 'text',
        		'default' => '40',
                'required' => [ 'header_logo_sizes', '=', 'manual' ],
        	),

        	array(
        		'id' => 'responsive_height',
        		'title' => esc_html__( 'Responsive Logo Height', 'gillion' ),
        		'subtitle' => esc_html__( 'Choose responsive logo height size', 'gillion' ),
        		'type' => 'text',
        		'default' => '40',
                'required' => [ 'header_logo_sizes', '=', 'manual' ],
        	),

    	array(
    		'id' => 'logo_status',
    		'title' => esc_html__( 'Logo Visibilty', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable header logo visibilty', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'0' => 'Off',
    			'1' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => '1',
    	),

        array(
    		'id' => 'logo_title',
    		'title' => esc_html__( 'Title Logo', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable custom logo title', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'off' => esc_html__( 'Off', 'gillion' ),
    			'on' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => 'off',
    	),

        	array(
        		'id' => 'logo_title_value',
        		'title' => esc_html__( 'Logo Title Name', 'gillion' ),
        		'subtitle' => esc_html__( 'Enter your login title name', 'gillion' ),
        		'type' => 'text',
                'required' => [ 'logo_title', '=', 'on' ],
        	),

        	array(
        		'id' => 'logo_both',
        		'title' => esc_html__( 'Logo Title Name With Logo Image', 'gillion' ),
        		'subtitle' => esc_html__( 'Show both logo image and text', 'gillion' ),
        		'type' => 'button_set',
        		'options' => array(
        			'off' => esc_html__( 'Off', 'gillion' ),
        			'on' => esc_html__( 'On', 'gillion' ),
        		),
        		'default' => 'off',
                'required' => [ 'logo_title', '=', 'on' ],
        	),

	array(
		'id' => 'header settings_divider',
		'title' => '<h2>' . esc_html__( 'Header Settings', 'gillion' ) . '</h2>',
		'type' => 'raw',
	),

    	array(
    		'id' => 'header_mega_style',
    		'title' => esc_html__( 'Dropdown Style', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose header dropdown style', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'style1' => esc_html__( 'Style 1', 'gillion' ),
    			'style2' => esc_html__( 'Style 2 (with shadow)', 'gillion' ),
    		),
    		'default' => 'style1',
    	),

    	array(
    		'id' => 'ipad_landscape_full_navigation',
    		'title' => esc_html__( 'iPad landscape navigation', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable iPad landscape to use desktop navigation (expermetal feature)', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'0' => 'Off',
    			'1' => esc_html__( 'On', 'gillion' ),
    		),
            'default' => '0',
    	),

    	array(
    		'id' => 'header_width',
    		'title' => esc_html__( 'Header Width', 'gillion' ),
    		'subtitle' => esc_html__( 'Select header width', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'default' => esc_html__( 'Default', 'gillion' ),
    			'full' => esc_html__( 'Full', 'gillion' ),
    		),
    		'default' => 'default',
    	),

    	array(
    		'id' => 'header_sticky',
    		'title' => esc_html__( 'Sticky Header', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable sticky header', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'0' => 'Off',
    			'1' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => '1',
    	),

    	array(
    		'id' => 'header_mobile_sticky',
    		'title' => esc_html__( 'Sticky Mobile Header', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable sticky mobile header', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'0' => 'Off',
    			'1' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => '0',
    	),

    	array(
    		'id' => 'header_elements',
    		'title' => esc_html__( 'Header Elements', 'gillion' ),
    		'subtitle' => esc_html__( 'Select header elements you want to see', 'gillion' ),
    		'type' => 'checkbox',
    		'options' => array(
    			'social' => esc_html__( 'Social Media', 'gillion' ),
    			'social_mobile' => esc_html__( 'Social Media (mobile)', 'gillion' ),
    			'search' => esc_html__( 'Search', 'gillion' ),
    			'woo_cart' => esc_html__( 'WooCommerce Cart', 'gillion' ),
    			'woo_account' => esc_html__( 'WooCommerce Account', 'gillion' ),
    		),
    		'default' => array(
    			'social' => 1,
    			'social_mobile' => 1,
    			'search' => 1,
    			'woo_cart' => 1,
    			'woo_account' => '',
    		),
    	),

    	array(
    		'id' => 'header_search_style',
    		'title' => esc_html__( 'Header Search Style', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose header search style', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'style1' => esc_html__( 'Style 1', 'gillion' ),
    			'style2' => esc_html__( 'Style 2', 'gillion' ),
    		),
    		'default' => 'style1',
    	),

    	array(
    		'id' => 'header_uppercase',
    		'title' => esc_html__( 'Navigation Uppercase', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable uppercase navigation text transformation', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'0' => 'Off',
    			'1' => esc_html__( 'On', 'gillion' ),
    		),
            'default' => '0',
    	),

    	array(
    		'id' => 'header_icons',
    		'title' => esc_html__( 'Icons Size', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose icons size', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'small' => esc_html__( 'Small', 'gillion' ),
    			'large' => esc_html__( 'Large', 'gillion' ),
    		),
    		'default' => 'large',
    	),

    	array(
    		'id' => 'header_search_results',
    		'title' => esc_html__( 'Header Search Results', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose Header Search Results', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'posts' => esc_html__( 'Blog posts and pages', 'gillion' ),
    			'onlyposts' => esc_html__( 'Blog posts only', 'gillion' ),
    			'products' => esc_html__( 'Products', 'gillion' ),
    			'adaptive' => esc_html__( 'Adaptive', 'gillion' ),
    		),
    		'default' => 'posts',
    	),

    	array(
    		'id' => 'header_menu_icon',
    		'title' => esc_html__( 'Header Menu Icon', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose Header Search Results', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'hamburger' => esc_html__( 'Hamburger', 'gillion' ),
    			'dots' => esc_html__( 'Dots grid', 'gillion' ),
    		),
    		'default' => 'hamburger',
    	),

    	array(
    		'id' => 'header language settings_divider',
    		'title' => '<h2>' . esc_html__( 'Header Language Settings', 'gillion' ) . '</h2>',
    		'type' => 'raw',
    	),

    	array(
    		'id' => 'header_lang',
    		'title' => esc_html__( 'Header Language Dropdown', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose language dropdown plugin', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'off' => esc_html__( 'Off', 'gillion' ),
    			'wpml' => esc_html__( 'WPML integration', 'gillion' ),
    			'polylang' => esc_html__( 'Polylang integration', 'gillion' ),
    		),
    		'default' => 'off',
    	),

    	array(
    		'id' => 'top bar settings_divider',
    		'title' => '<h2>' . esc_html__( 'Top Bar Settings', 'gillion' ) . '</h2>',
    		'type' => 'raw',
    	),

    	array(
    		'id' => 'topbar_status',
    		'title' => esc_html__( 'Topbar', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable header topbar', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'0' => 'Off',
    			'1' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => '1',
    	),

    	array(
    		'id' => 'contact_phone',
    		'title' => esc_html__( 'Contact Phone', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter contact phone', 'gillion' ),
    		'type' => 'text',
    		'default' => '+123 456 678 890',
    	),

    	array(
    		'id' => 'contact_email',
    		'title' => esc_html__( 'Contact E-mail', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter contact e-mail', 'gillion' ),
    		'type' => 'text',
    		'default' => 'info@mysite.com',
    	),

    	array(
    		'id' => 'contact_location',
    		'title' => esc_html__( 'Contact Location', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter contact location', 'gillion' ),
    		'type' => 'text',
    		'default' => 'Main street 12',
    	),

    	array(
    		'id' => 'contact_workhours',
    		'title' => esc_html__( 'Contact Working hours', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter working hours', 'gillion' ),
    		'type' => 'text',
    	),

	array(
		'id' => 'header_animations_divider',
		'title' => '<h2>' . esc_html__( 'Header Animations', 'gillion' ) . '</h2>',
		'type' => 'raw',
	),

    	array(
    		'id' => 'header_animation_dropdown_delay',
    		'title' => esc_html__( 'Header Dropdown Closing Delay', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose header dropdown closing delay speed (seconds)', 'gillion' ),
    		'max' => '4',
    		'step' => '0.1',
    		'resolution' => '0.1',
    		'type' => 'text',
    		'default' => '1',
    	),

    	array(
    		'id' => 'header_animation_dropdown_speed',
    		'title' => esc_html__( 'Header Dropdown Opening Speed', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose header dropdown opening speed (seconds)', 'gillion' ),
    		'max' => '4',
    		'step' => '0.1',
    		'resolution' => '0.1',
    		'type' => 'text',
    		'default' => '0.3',
    	),

    	array(
    		'id' => 'header_animation_dropdown',
    		'title' => esc_html__( 'Header Dropdown Animation', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose dropdown animation', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'linear' => esc_html__( 'Linear', 'gillion' ),
    			'easeOutQuint' => esc_html__( 'Fast to slow', 'gillion' ),
    			'easeInExpo' => esc_html__( 'Slow to fast', 'gillion' ),
    			'easeInOutExpo' => esc_html__( 'Slow to fast (2)', 'gillion' ),
    			'easeOutBounce' => esc_html__( 'Bounce', 'gillion' ),
    		),
    		'default' => 'easeOutQuint',
    	),

	array(
		'id' => 'header responsive_divider',
		'title' => '<h2>' . esc_html__( 'Header Responsive', 'gillion' ) . '</h2>',
		'type' => 'raw',
	),

    	array(
    		'id' => 'header_mobile_spacing',
    		'title' => esc_html__( 'Mobile Spacing', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose header mobile spacing', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'default' => esc_html__( 'Default', 'gillion' ),
    			'compact' => esc_html__( 'Compact', 'gillion' ),
    		),
    		'default' => 'compact',
    	),

    )
));




/*
** Titlebar
*/
Redux::setSection( $opt_name, array(
    'title'  => __( 'Titlebar', 'jevelin' ),
    'id'     => 'titlebar',
    'icon'   => 'ti-layout-list-thumb',
    'fields' => array(

        array(
    		'id' => 'titlebar',
    		'title' => esc_html__( 'Titlebar', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable titlebar', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'off' => esc_html__( 'Off', 'gillion' ),
    			'on' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => 'on',
    	),

    	array(
    		'id' => 'titlebar_layout',
    		'title' => esc_html__( 'Titlebar Layout', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose titlebar layout', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'side' => esc_html__( 'Sides', 'gillion' ),
    			'center' => esc_html__( 'Center', 'gillion' ),
    		),
    		'default' => 'side',
    	),

    	array(
    		'id' => 'titlebar_height',
    		'title' => esc_html__( 'Titlebar Height', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose titlebar height', 'gillion' ),
    		'type' => 'select',
    		'options' => array(
    			'small' => esc_html__( 'Small', 'gillion' ),
    			'medium' => esc_html__( 'Medium', 'gillion' ),
    			'large' => esc_html__( 'Large', 'gillion' ),
    		),
    		'default' => 'medium',
    	),

    	array(
    		'id' => 'titlebar_background',
    		'title' => esc_html__( 'Titlebar Background Image', 'gillion' ),
    		'subtitle' => esc_html__( 'Upload a background image for titlebar', 'gillion' ),
    		'url' => '1',
    		'type' => 'media',
    	),

    	array(
    		'id' => 'titlebar_background_parallax',
    		'title' => esc_html__( 'Parallax Background', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable parallax background', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'off' => esc_html__( 'Off', 'gillion' ),
    			'on' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => 'off',
    	),

    	array(
    		'id' => 'titlebar-background-color',
    		'title' => esc_html__( 'Titlebar Background Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select titlebar background color', 'gillion' ),
    		'type' => 'color',
    		'default' => '#fbfbfb',
    	),

    	array(
    		'id' => 'titlebar-title-color',
    		'title' => esc_html__( 'Titlebar Title Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select titlebar title color', 'gillion' ),
    		'type' => 'color',
    	),

    	array(
    		'id' => 'titlebar-breadcrumbs-color',
    		'title' => esc_html__( 'Titlebar Breadcrumbs Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select titlebar breadcrumbs color', 'gillion' ),
    		'type' => 'color',
    	),

    	array(
    		'id' => 'titlebar-headings-seo',
    		'title' => esc_html__( 'Titlebar Headings', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose titlebar headings for seo purposes', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'h1' => esc_html__( 'H1', 'gillion' ),
    			'h2' => esc_html__( 'H2', 'gillion' ),
    		),
    		'default' => 'h2',
    	),

    	array(
    		'id' => 'titlebar-home-title',
    		'title' => esc_html__( 'Home Title', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter main title of home page', 'gillion' ),
    		'type' => 'text',
    		'default' => 'Home',
    	),

    	array(
    		'id' => 'titlebar-post-title',
    		'title' => esc_html__( 'Post Title', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter main title of post pages', 'gillion' ),
    		'type' => 'text',
    		'default' => 'Blog Post',
    	),

    	array(
    		'id' => 'titlebar-portfolio-title',
    		'title' => esc_html__( 'Portfolio Title', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter main title of Portfolio pages', 'gillion' ),
    		'type' => 'text',
    		'default' => 'Portfolio',
    	),

    	array(
    		'id' => 'titlebar-blog-woocommerce',
    		'title' => esc_html__( 'WooCommerce Title', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter main title of WooCommerce pages', 'gillion' ),
    		'type' => 'text',
    		'default' => 'Shop',
    	),

    	array(
    		'id' => 'titlebar-404-title',
    		'title' => esc_html__( '404 Title', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter main title of 404 page', 'gillion' ),
    		'type' => 'text',
    		'default' => 'Page could not be found',
    	),

    	array(
    		'id' => 'titlebar responsive_divider',
    		'title' => '<h2>' . esc_html__( 'Titlebar Responsive', 'gillion' ) . '</h2>',
    		'type' => 'raw',
    	),

    	array(
    		'id' => 'titlebar_mobile_spacing',
    		'title' => esc_html__( 'Mobile Spacing', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose titlebar mobile spacing', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'default' => esc_html__( 'Default', 'gillion' ),
    			'compact' => esc_html__( 'Compact', 'gillion' ),
    		),
    		'default' => 'compact',
    	),

    	array(
    		'id' => 'titlebar_mobile_title',
    		'title' => esc_html__( 'Mobile Layout Main Title', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable main title', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'off' => esc_html__( 'Off', 'gillion' ),
    			'on' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => 'on',
    	),

    )
));





/*
** Footer
*/
Redux::setSection( $opt_name, array(
    'title'  => __( 'Footer', 'jevelin' ),
    'id'     => 'footer',
    'icon'   => 'ti-anchor',
    'fields' => array(

        array(
    		'id' => 'footer_template',
    		'title' => esc_html__( 'Footer Template', 'gillion' ),
    		'subtitle' => esc_html__( 'Select footer template', 'gillion' ),
    		'type' => 'radio',
    		'options' => jevelin_get_footers(),
    		'default' => 'default',
    	),

	array(
		'id' => 'footer settings_divider',
		'title' => '<h2>' . esc_html__( 'Footer Settings', 'gillion' ) . '</h2>',
		'type' => 'raw',
	),

    	array(
    		'id' => 'footer_widgets',
    		'title' => esc_html__( 'Footer Widgets', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable footer widgets', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'off' => esc_html__( 'Off', 'gillion' ),
    			'on' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => 'on',
    	),

    	array(
    		'id' => 'footer_width',
    		'title' => esc_html__( 'Footer Width', 'gillion' ),
    		'subtitle' => esc_html__( 'Select footer width', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'default' => esc_html__( 'Default', 'gillion' ),
    			'full' => esc_html__( 'Full', 'gillion' ),
    		),
    		'default' => 'default',
    	),

    	array(
    		'id' => 'footer_columns',
    		'title' => esc_html__( 'Footer Columns', 'gillion' ),
    		'subtitle' => esc_html__( 'Select footer column count', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'1' => esc_html__( '1 Columns', 'gillion' ),
    			'2' => esc_html__( '2 Columns', 'gillion' ),
    			'3' => esc_html__( '3 Columns', 'gillion' ),
    			'4' => esc_html__( '4 Columns', 'gillion' ),
    			'5' => esc_html__( '5 Columns', 'gillion' ),
    		),
    		'default' => '4',
    	),

    	array(
    		'id' => 'footer_parallax',
    		'title' => esc_html__( 'Footer Parallax', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable whole footer to act as an parallax element', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'off' => esc_html__( 'Off', 'gillion' ),
    			'on' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => 'off',
    	),

	array(
		'id' => 'footer copyright settings_divider',
		'title' => '<h2>' . esc_html__( 'Footer Copyright Settings', 'gillion' ) . '</h2>',
		'type' => 'raw',
	),

    	array(
    		'id' => 'copyright_bar',
    		'title' => esc_html__( 'Copyright Bar', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable copyright bar', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'off' => esc_html__( 'Off', 'gillion' ),
    			'on' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => 'on',
    	),

        array(
    		'id' => 'style',
    		'title' => esc_html__( 'Copyright Style', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose main style for copyrights', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'style1' => esc_html__( 'Style 1', 'gillion' ),
    			'style2' => esc_html__( 'Style 2 (logo and copyright left, social icons right)', 'gillion' ),
    			'style3' => esc_html__( 'Style 3 (logo left, copyrights center, social icons rights)', 'gillion' ),
    		),
            'default' => 'style1',
    	),

        	array(
        		'id' => 'social',
        		'title' => esc_html__( 'Social Icons', 'gillion' ),
        		'subtitle' => esc_html__( 'Enable or disable social icons', 'gillion' ),
        		'type' => 'button_set',
        		'options' => array(
        			'0' => 'Off',
        			'1' => esc_html__( 'On', 'gillion' ),
        		),
        		'default' => '1',
                'required' => [
                    [ 'style', '=', '1' ],
                    [ 'style', '=', '3' ],
                ],
        	),


    	array(
    		'id' => 'copyright_padding',
    		'title' => esc_html__( 'Padding', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter custom footer widgets padding (default: 0px 0px 0px 0px)', 'gillion' ),
    		'type' => 'text',
    	),

    	array(
    		'id' => 'copyright_logo',
    		'title' => esc_html__( 'Footer Logo', 'gillion' ),
    		'subtitle' => esc_html__( 'Upload a footer logo image', 'gillion' ),
    		'url' => '1',
    		'type' => 'media',
    	),

    	array(
    		'id' => 'copyright_text',
    		'title' => esc_html__( 'Copyright Text', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter some description about copyright in your website', 'gillion' ),
    		'type' => 'editor',
    		'teeny' => '1',
    		'reinit' => '1',
    		'size' => 'large',
    		'editor_height' => '110',
    	),

    	array(
    		'id' => 'copyright_text_multi_lines',
    		'title' => esc_html__( 'Copyright Text in Multiple Lines', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable copyright text in multiple lines', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'off' => esc_html__( 'Off', 'gillion' ),
    			'on' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => 'off',
    	),

    	array(
    		'id' => 'copyright_deveveloper',
    		'title' => esc_html__( 'Developer Copyrights', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable theme developer copyrights', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'0' => 'Off',
    			'1' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => '1',
    	),

    	array(
    		'id' => 'copyright_deveveloper_all',
    		'title' => esc_html__( 'Invisible Developer Copyrights', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable invisible developer copyrights. Say thanks by leaving invisible developer copyrights on', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'0' => 'Off',
    			'1' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => '1',
    	),

    )
));




/*
** Social Media Icons
*/
Redux::setSection( $opt_name, array(
    'title'  => __( 'Social Media Icons', 'jevelin' ),
    'id'     => 'social-media',
    'icon'   => 'ti-facebook',
    'fields' => array(

        array(
    		'id' => 'social_newtab',
    		'title' => esc_html__( 'Links In New Tab', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable social media link opening in new tab', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'0' => 'Off',
    			'1' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => '1',
    	),

    	array(
    		'id' => 'social_twitter',
    		'title' => esc_html__( 'Twitter URL', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter your custom link to show the Twitter icon. Leave blank to hide this icon', 'gillion' ),
    		'type' => 'text',
    	),

    	array(
    		'id' => 'social_facebook',
    		'title' => esc_html__( 'Facebok URL', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter your custom link to show the Facebook icon. Leave blank to hide this icon', 'gillion' ),
    		'type' => 'text',
    	),

    	array(
    		'id' => 'social_instagram',
    		'title' => esc_html__( 'Instagram URL', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter your custom link to show the Instagram icon. Leave blank to hide this icon', 'gillion' ),
    		'type' => 'text',
    	),

    	array(
    		'id' => 'social_youtube',
    		'title' => esc_html__( 'Youtube URL', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter your custom link to show the Yotube icon. Leave blank to hide this icon', 'gillion' ),
    		'type' => 'text',
    	),

    	array(
    		'id' => 'social_pinterest',
    		'title' => esc_html__( 'Pinterest URL', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter your custom link to show the Pinterest icon. Leave blank to hide this icon', 'gillion' ),
    		'type' => 'text',
    	),

    	array(
    		'id' => 'social_flickr',
    		'title' => esc_html__( 'Flickr URL', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter your custom link to show the Flickr icon. Leave blank to hide this icon', 'gillion' ),
    		'type' => 'text',
    	),

    	array(
    		'id' => 'social_dribbble',
    		'title' => esc_html__( 'Dribbble URL', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter your custom link to show the Dribbble icon. Leave blank to hide this icon', 'gillion' ),
    		'type' => 'text',
    	),

    	array(
    		'id' => 'social_linkedIn',
    		'title' => esc_html__( 'LinkedIn URL', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter your custom link to show the LinkedIn icon. Leave blank to hide this icon', 'gillion' ),
    		'type' => 'text',
    	),

    	array(
    		'id' => 'social_skype',
    		'title' => esc_html__( 'Skype Nick', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter your account name to show the Skype icon. Leave blank to hide this icon', 'gillion' ),
    		'type' => 'text',
    	),

    	array(
    		'id' => 'social_spotify',
    		'title' => esc_html__( 'Spotify', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter your account name to show the Spotify icon. Leave blank to hide this icon', 'gillion' ),
    		'type' => 'text',
    	),

    	array(
    		'id' => 'social_soundcloud',
    		'title' => esc_html__( 'Soundcloud', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter your account name to show the Soundcloud icon. Leave blank to hide this icon', 'gillion' ),
    		'type' => 'text',
    	),

    	array(
    		'id' => 'social_tumblr',
    		'title' => esc_html__( 'Tumblr URL', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter your custom link to show the Tumblr icon. Leave blank to hide this icon', 'gillion' ),
    		'type' => 'text',
    	),

    	array(
    		'id' => 'social_wordpress',
    		'title' => esc_html__( 'Wordpress URL', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter your custom link to show the Wordpress icon. Leave blank to hide this icon', 'gillion' ),
    		'type' => 'text',
    	),

    )
));




/*
** Blog
*/
Redux::setSection( $opt_name, array(
    'title'  => __( 'Blog', 'jevelin' ),
    'id'     => 'blog',
    'icon'   => 'ti-pencil-alt',
    'fields' => array(

        array(
    		'id' => 'blog_style',
    		'title' => esc_html__( 'Blog Style', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose blog style (will change some widget, post and other blog elements style)', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'style1' => esc_html__( 'Style 1', 'gillion' ),
    			'style2' => esc_html__( 'Style 2', 'gillion' ),
    		),
    		'default' => 'style2',
    	),

    	array(
    		'id' => 'pagination',
    		'title' => esc_html__( 'Pagination', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable pagination', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'off' => esc_html__( 'Off', 'gillion' ),
    			'on' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => 'on',
    	),

    	array(
    		'id' => 'blog-items',
    		'title' => esc_html__( 'Blog Posts Per Page', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose how many posts will be disaplayed per page', 'gillion' ),
    		'min' => '1',
    		'max' => '30',
    		'type' => 'slider',
    		'default' => '12',
    	),

    	array(
    		'id' => 'blog_round_images',
    		'title' => esc_html__( 'Round Images', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable round images for blog posts', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'off' => esc_html__( 'Off', 'gillion' ),
    			'on' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => 'off',
    	),

	array(
		'id' => 'post settings_divider',
		'title' => '<h2>' . esc_html__( 'Post Settings', 'gillion' ) . '</h2>',
		'type' => 'raw',
	),

    	array(
    		'id' => 'post_layout',
    		'title' => esc_html__( 'Post Template', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose post template', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'default' => esc_html__( 'Default', 'gillion' ),
    			'sidebar-left' => esc_html__( 'Sidebar Left', 'gillion' ),
    			'sidebar-right' => esc_html__( 'Sidebar Right', 'gillion' ),
    		),
    		'default' => 'sidebar-right',
    	),

    	array(
    		'id' => 'post_overlay',
    		'title' => esc_html__( 'Post Overlay', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose post overlay style', 'gillion' ),
    		'type' => 'select',
    		'options' => array(
    			'style1' => esc_html__( 'Style 1', 'gillion' ),
    			'style2' => esc_html__( 'Style 2', 'gillion' ),
    			'style3' => esc_html__( 'Style 3', 'gillion' ),
    		),
    		'default' => 'style1',
    	),

    	array(
    		'id' => 'post_elements',
    		'title' => esc_html__( 'Post Elements', 'gillion' ),
    		'subtitle' => esc_html__( 'Select post elements you want to see in blog', 'gillion' ),
    		'type' => 'checkbox',
    		'options' => array(
    			'date' => esc_html__( 'Date', 'gillion' ),
    			'share' => esc_html__( 'Share', 'gillion' ),
    			'prev_next' => esc_html__( 'Prev/next links', 'gillion' ),
    			'athor_box' => esc_html__( 'Author additional information box', 'gillion' ),
    			'related_posts' => esc_html__( 'Related posts', 'gillion' ),
    			'comments' => esc_html__( 'Comments', 'gillion' ),
    		),
    		'default' => array(
    			'date' => 1,
    			'prev_next' => 1,
    			'athor_box' => 1,
    			'share' => 1,
    			'related_posts' => 1,
    			'comments' => 1,
    		),
    	),

    	array(
    		'id' => 'post_related_posts',
    		'title' => esc_html__( 'Related Posts', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable related posts', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'off' => esc_html__( 'Off', 'gillion' ),
    			'on' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => 'on',
    	),

    	array(
    		'id' => 'post_main_image_lightbiox',
    		'title' => esc_html__( 'Post Featured Image Lightbox', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable single blog post featured image lightbox', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'off' => esc_html__( 'Off', 'gillion' ),
    			'on' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => 'on',
    	),

    	array(
    		'id' => 'post_desc',
    		'title' => esc_html__( 'Description Length (words)', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose post description preview length', 'gillion' ),
    		'min' => '10',
    		'max' => '250',
    		'type' => 'slider',
    		'default' => '45',
    	),

    )
));





/*
** AMP
*/
Redux::setSection( $opt_name, array(
    'title'  => __( 'AMP', 'jevelin' ),
    'id'     => 'amp',
    'icon'   => 'ti-bolt',
    'fields' => array(

        array(
    		'id' => 'amp_post_accent_color',
    		'title' => esc_html__( 'Accent Color', 'gillion' ),
    		'type' => 'color',
    	),

    	array(
    		'id' => 'amp_post_content_color',
    		'title' => esc_html__( 'Content Color', 'gillion' ),
    		'type' => 'color',
    	),

    	array(
    		'id' => 'amp_post_heading_color',
    		'title' => esc_html__( 'Heading Color', 'gillion' ),
    		'type' => 'color',
    	),

    	array(
    		'id' => 'amp_post_content_size',
    		'title' => esc_html__( 'Post Content Size', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter post content size with PX', 'gillion' ),
    		'type' => 'text',
    	),

    	array(
    		'id' => 'amp_logo_size_desktop',
    		'title' => esc_html__( 'Logo Size (desktop)', 'gillion' ),
    		'min' => '1',
    		'max' => '100',
    		'type' => 'slider',
    		'default' => '40',
    	),

    	array(
    		'id' => 'amp_logo_size_mobile',
    		'title' => esc_html__( 'Logo Size (mobile)', 'gillion' ),
    		'min' => '1',
    		'max' => '100',
    		'type' => 'slider',
    		'default' => '22',
    	),

        array(
    		'id' => 'amp_mode',
    		'title' => esc_html__( 'AMP Mode', 'gillion' ),
    		'subtitle' => esc_html__( 'Advanced: Set to all modes if Standard or Transitional template mode is needed', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
                'optimised' => esc_html__( 'Optimized mode only', 'gillion' ),
    			'all' => esc_html__( 'All modes', 'gillion' ),
    			'disabled' => esc_html__( 'Disable all Gillion optimizations (not recommended)', 'gillion' ),
    		),
    		'default' => 'optimised',
    	),

    )
));




/*
** Portfolio
*/
Redux::setSection( $opt_name, array(
    'title'  => __( 'Portfolio', 'jevelin' ),
    'id'     => 'portfolio',
    'icon'   => 'ti-layout-grid2',
    'fields' => array(

        array(
    		'id' => 'portfolio_main_page',
    		'title' => esc_html__( 'Portfolio Main Page ID', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter portfolio main page ID, useful to change default portfolio breadcrumbs page', 'gillion' ),
    		'type' => 'text',
    	),

	array(
		'id' => 'portfolio single page_divider',
		'title' => '<h2>' . esc_html__( 'Portfolio Single Page', 'gillion' ) . '</h2>',
		'type' => 'raw',
	),

    	array(
    		'id' => 'portfolio_single_page_layout',
    		'title' => esc_html__( 'Layout', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose portfolio single page layout', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'default' => esc_html__( 'Default', 'gillion' ),
    			'full' => esc_html__( 'Full Width', 'gillion' ),
    		),
            'default' => 'default',
    	),

    	array(
    		'id' => 'portfolio_related',
    		'title' => esc_html__( 'Related items', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable "Related items" in single portfolio page', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'0' => 'Off',
    			'1' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => '1',
    	),

    	array(
    		'id' => 'portfolio_comments',
    		'title' => esc_html__( 'Portfolio Comments', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable comments in single portfolio page', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'0' => 'Off',
    			'1' => esc_html__( 'On', 'gillion' ),
    		),
            'default' => '0',
    	),

    	array(
    		'id' => 'portfolio_share',
    		'title' => esc_html__( 'Social Share', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable social share buttons in single portfolio page', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'0' => 'Off',
    			'1' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => '1',
    	),

    	array(
    		'id' => 'portfolio_single_image',
    		'title' => esc_html__( 'Image Size', 'gillion' ),
    		'subtitle' => esc_html__( 'Use full size image, if image quality is lower than expected.', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'large' => esc_html__( 'Large', 'gillion' ),
    			'full' => esc_html__( 'Full', 'gillion' ),
    		),
    		'default' => 'large',
    	),

    	array(
    		'id' => 'portfolio_gallery_autoplay',
    		'title' => esc_html__( 'Gallery Autoplay', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable gallery autoplay in single portfolio page', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'off' => esc_html__( 'Off', 'gillion' ),
    			'on' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => 'off',
    	),

    	array(
    		'id' => 'portfolio archive settings_divider',
    		'title' => '<h2>' . esc_html__( 'Portfolio Archive Settings', 'gillion' ) . '</h2>',
    		'type' => 'raw',
    	),

    	array(
    		'id' => 'portfolio_archive_layout',
    		'title' => esc_html__( 'Portfolio Archive Layout', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose portfolio archive layout', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'default' => esc_html__( 'Default', 'gillion' ),
    			'sidebar-left' => esc_html__( 'Sidebar Left', 'gillion' ),
    			'sidebar-right' => esc_html__( 'Sidebar Right', 'gillion' ),
    		),
    		'default' => 'default',
    	),

    	array(
    		'id' => 'portfolio_archive_columns',
    		'title' => esc_html__( 'Portfolio Archive Columns', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose portfolio archive column item count', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'2' => esc_html__( '2 columns', 'gillion' ),
    			'3' => esc_html__( '3 columns', 'gillion' ),
    			'4' => esc_html__( '4 columns', 'gillion' ),
    		),
    		'default' => '3',
    	),

    	array(
    		'id' => 'portfolio_archive_per_page',
    		'title' => esc_html__( 'Portfolio Archive Items Per Page', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose portfolio archive items per page', 'gillion' ),
    		'type' => 'select',
    		'options' => array(
    			'-1' => esc_html__( 'Show All items', 'gillion' ),
    			'1' => esc_html__( '1 item', 'gillion' ),
    			'2' => esc_html__( '2 items', 'gillion' ),
    			'3' => esc_html__( '3 items', 'gillion' ),
    			'4' => esc_html__( '4 Items', 'gillion' ),
    			'5' => esc_html__( '5 Items', 'gillion' ),
    			'6' => esc_html__( '6 items', 'gillion' ),
    			'7' => esc_html__( '7 items', 'gillion' ),
    			'8' => esc_html__( '8 items', 'gillion' ),
    			'9' => esc_html__( '9 items', 'gillion' ),
    			'10' => esc_html__( '10 items', 'gillion' ),
    			'11' => esc_html__( '12 items', 'gillion' ),
    			'12' => esc_html__( '12 items', 'gillion' ),
    			'13' => esc_html__( '13 items', 'gillion' ),
    			'14' => esc_html__( '14 items', 'gillion' ),
    			'15' => esc_html__( '15 items', 'gillion' ),
    		),
    		'default' => '12',
    	),

    	array(
    		'id' => 'portfolio_gallery_columns',
    		'title' => esc_html__( 'Portfolio Project Gallery Columns', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose portfolio project columns for gallery layout', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'columns3' => esc_html__( 'Columns 3', 'gillion' ),
    			'columns4' => esc_html__( 'Columns 4', 'gillion' ),
    			'columns5' => esc_html__( 'Columns 5', 'gillion' ),
    		),
    		'default' => 'columns3',
    	),

    	array(
    		'id' => 'portfolio_gallery_slider',
    		'title' => esc_html__( 'Portfolio Project Gallery Slider', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable portfolio project gallery slider', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'off' => esc_html__( 'Off', 'gillion' ),
    			'on' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => 'off',
    	),

    	array(
    		'id' => 'portfolio_padding',
    		'title' => esc_html__( 'Portfolio Single Page Content Padding', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter custom portfolio single plage default content padding (default: 60px 0px 60px 0px)', 'gillion' ),
    		'type' => 'text',
    	),

    )
));




/*
** Lightbox
*/
Redux::setSection( $opt_name, array(
    'title'  => __( 'Lightbox', 'jevelin' ),
    'id'     => 'lightbox',
    'icon'   => 'ti-gallery',
    'fields' => array(

        array(
    		'id' => 'lightbox_transition',
    		'title' => esc_html__( 'Transition', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose lightbox transition', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'none' => esc_html__( 'None', 'gillion' ),
    			'elastic' => esc_html__( 'Elastic', 'gillion' ),
    			'fade' => esc_html__( 'Fade', 'gillion' ),
    			'fadeInline' => esc_html__( 'Fade Inline', 'gillion' ),
    		),
    		'default' => 'elastic',
    	),

    	array(
    		'id' => 'lightbox_opacity',
    		'title' => esc_html__( 'Background Opacity', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose lightbox background opacity', 'gillion' ),
    		'min' => '1',
    		'max' => '100',
    		'type' => 'slider',
    		'default' => '88',
    	),

    	array(
    		'id' => 'lightbox_window_max_width',
    		'title' => esc_html__( 'Window Max Width', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter window max width', 'gillion' ),
    		'type' => 'text',
    	),

    	array(
    		'id' => 'lightbox_window_max_height',
    		'title' => esc_html__( 'Window Max Height', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter window max height', 'gillion' ),
    		'type' => 'text',
    	),

    	array(
    		'id' => 'lightbox_window_size',
    		'title' => esc_html__( 'Windows Size in Percentage', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter window size 10-100, default is 80', 'gillion' ),
    		'type' => 'text',
    		'default' => '80',
    	),

    )
));



/*
** Carousel
*/
Redux::setSection( $opt_name, array(
    'title'  => __( 'Carousel', 'jevelin' ),
    'id'     => 'carousel',
    'icon'   => 'ti-layout-column3',
    'fields' => array(

        array(
    		'id' => 'carousel_dots_style',
    		'title' => esc_html__( 'Dots Style', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'style1' => esc_html__( 'Standard - Large active (width shadow) and smaller other dots with background color', 'gillion' ),
    			'style2' => esc_html__( 'Standard - Equal size dots with background color', 'gillion' ),
    			'style3' => esc_html__( 'Modern - Equal size dots with background color for active and border only for other dots', 'gillion' ),
    		),
    		'default' => 'style1',
    	),

    	array(
    		'id' => 'carousel_dots_spacing',
    		'title' => esc_html__( 'Dots Spacing', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'3px' => esc_html__( '3px', 'gillion' ),
    			'5px' => esc_html__( '5px', 'gillion' ),
    			'8px' => esc_html__( '8px', 'gillion' ),
    			'10px' => esc_html__( '10px', 'gillion' ),
    			'12px' => esc_html__( '12px', 'gillion' ),
    			'15px' => esc_html__( '15px', 'gillion' ),
    		),
    		'default' => '5px',
    	),

    	array(
    		'id' => 'carousel_dots_top_margin',
    		'title' => esc_html__( 'Dots Additional Top Margin', 'gillion' ),
    		'type' => 'select',
    		'options' => array(
    			'0px' => esc_html__( '0px', 'gillion' ),
    			'3px' => esc_html__( '3px', 'gillion' ),
    			'5px' => esc_html__( '5px', 'gillion' ),
    			'8px' => esc_html__( '8px', 'gillion' ),
    			'10px' => esc_html__( '10px', 'gillion' ),
    			'12px' => esc_html__( '12px', 'gillion' ),
    			'15px' => esc_html__( '15px', 'gillion' ),
    		),
    		'default' => '0px',
    	),

    	array(
    		'id' => 'carousel_dots_size',
    		'title' => esc_html__( 'Dots Size', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'small' => esc_html__( 'Small', 'gillion' ),
    			'standard' => esc_html__( 'Standard', 'gillion' ),
    		),
    		'default' => 'standard',
    	),

    	array(
    		'id' => 'carousel_dots_background_color',
    		'title' => esc_html__( 'Dot Background Color', 'gillion' ),
    		'type' => 'color',
    	),

    	array(
    		'id' => 'carousel_dots_border_color',
    		'title' => esc_html__( 'Dot Border Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Changes dot border color if this style uses border', 'gillion' ),
    		'type' => 'color',
    	),

    	array(
    		'id' => 'carousel_dots_active_background_color',
    		'title' => esc_html__( 'Active Dot Background Color', 'gillion' ),
    		'type' => 'color',
    	),

    	array(
    		'id' => 'carousel_dots_active_border_color',
    		'title' => esc_html__( 'Active Dot Border Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Changes dot border color if this style uses border', 'gillion' ),
    		'type' => 'color',
    	),

    )
));




/*
** WooCommerce
*/
Redux::setSection( $opt_name, array(
    'title'  => __( 'WooCommerce', 'jevelin' ),
    'id'     => 'woocommerce',
    'icon'   => 'ti-shopping-cart-full',
    'fields' => array(

        array(
    		'id' => 'wc_sort',
    		'title' => esc_html__( 'WooCommerce Sort', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable WooCommerce product sorting dropdown', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'0' => 'Off',
    			'1' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => '1',
    	),

    	array(
    		'id' => 'wc_sort_sale',
    		'title' => esc_html__( 'WooCommerce Sort by Sale', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable opaction to sort by sale', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'off' => esc_html__( 'Off', 'gillion' ),
    			'on' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => 'off',
    	),

    	array(
    		'id' => 'wc_lightbox',
    		'title' => esc_html__( 'WooCommerce Lightbox', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose WooCommerce lightbox', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'jevelin' => esc_html__( 'Jevelin Lightbox', 'gillion' ),
    			'woocommerce' => esc_html__( 'WooCommerce Lightbox', 'gillion' ),
    			'disable' => esc_html__( 'Disable', 'gillion' ),
    		),
    		'default' => 'jevelin',
    	),

    	array(
    		'id' => 'wc_style',
    		'title' => esc_html__( 'WooCommerce Item Style', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose WooCommerce item style', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'style1' => esc_html__( 'Style 1', 'gillion' ),
    			'style2' => esc_html__( 'Style 2', 'gillion' ),
    		),
    		'default' => 'style1',
    	),

    	array(
    		'id' => 'wc_columns',
    		'title' => esc_html__( 'WooCommerce Columns', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose WooCommerce product column count', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'2' => esc_html__( '2 columns', 'gillion' ),
    			'3' => esc_html__( '3 columns', 'gillion' ),
    			'4' => esc_html__( '4 columns', 'gillion' ),
    		),
    		'default' => '4',
    	),

    	array(
    		'id' => 'wc_layout',
    		'title' => esc_html__( 'WooCommerce Layout', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose WooCommerce layout', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'default' => esc_html__( 'Default', 'gillion' ),
    			'sidebar-left' => esc_html__( 'Sidebar Left', 'gillion' ),
    			'sidebar-right' => esc_html__( 'Sidebar Right', 'gillion' ),
    		),
    		'default' => 'sidebar-left',
    	),

    	array(
    		'id' => 'wc_items',
    		'title' => esc_html__( 'Items Per Page', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose WooCommerce products per page', 'gillion' ),
    		'min' => '1',
    		'max' => '40',
    		'type' => 'slider',
    		'default' => '12',
    	),

    	array(
    		'id' => 'wc_items_additional_information',
    		'title' => esc_html__( 'Items Additional Information', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose what kind of additional information will be shown under product title', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'none' => esc_html__( 'None', 'gillion' ),
    			'desc' => esc_html__( 'Short description', 'gillion' ),
    			'cat' => esc_html__( 'Categories', 'gillion' ),
    		),
    		'default' => 'cat',
    	),

    	array(
    		'id' => 'wc_quantity_button',
    		'title' => esc_html__( 'Jevelin Quantity Button', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable Jevelin quantity button (by disabling it could fix some plugin compatibility issues)', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'off' => esc_html__( 'Off', 'gillion' ),
    			'on' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => 'on',
    	),

    	array(
    		'id' => 'wc_banner',
    		'title' => esc_html__( 'Banner', 'gillion' ),
    		'subtitle' => esc_html__( 'You can upload a banner image, which will be shown in checkout page', 'gillion' ),
    		'url' => '1',
    		'type' => 'media',
    	),

    	array(
    		'id' => 'single product page_divider',
    		'title' => '<h2>' . esc_html__( 'Single Product Page', 'gillion' ) . '</h2>',
    		'type' => 'raw',
    	),

    	array(
    		'id' => 'wc_layout_single',
    		'title' => esc_html__( 'WooCommerce Layout', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose WooCommerce layout for Product Page', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'default' => esc_html__( 'Default', 'gillion' ),
    			'sidebar-left' => esc_html__( 'Sidebar Left', 'gillion' ),
    			'sidebar-right' => esc_html__( 'Sidebar Right', 'gillion' ),
    		),
    		'default' => 'default',
    	),

    	array(
    		'id' => 'wc_tabs',
    		'title' => esc_html__( 'Tabs Position', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose tab product tabs position', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'right' => esc_html__( 'Right Side', 'gillion' ),
    			'bottom' => esc_html__( 'Bottom', 'gillion' ),
    		),
    		'default' => 'right',
    	),

    	array(
    		'id' => 'wc_related',
    		'title' => esc_html__( 'Related Products', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable "Related products" in single product page', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'0' => 'Off',
    			'1' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => '1',
    	),

    )
));




/*
** Lazy loading
*/
Redux::setSection( $opt_name, array(
    'title'  => __( 'Lazy Loading', 'jevelin' ),
    'id'     => 'lazy-laoding',
    'icon'   => 'ti-reload',
    'fields' => array(

        array(
    		'id' => 'lazy_loading',
    		'title' => esc_html__( 'Lazy Loading', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable lazy loading for image gallery and single image elements (improves page loading time)', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'disabled' => esc_html__( 'Disabled', 'gillion' ),
    			'enabled' => esc_html__( 'Enabled', 'gillion' ),
    		),
    		'default' => 'disabled',
    	),

    )
));




/*
** Page Loader
*/
Redux::setSection( $opt_name, array(
    'title'  => __( 'Page Loader', 'jevelin' ),
    'id'     => 'page-loader',
    'icon'   => 'ti-infinite',
    'fields' => array(

        array(
    		'id' => 'page_loader',
    		'title' => esc_html__( 'Enable Page Loader', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose page loader status', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'off' => esc_html__( 'Off', 'gillion' ),
    			'on1' => esc_html__( 'On - In every page', 'gillion' ),
    			'on2' => esc_html__( 'On - Only first load', 'gillion' ),
    		),
    		'default' => 'off',
    	),

    	array(
    		'id' => 'page_loader_style',
    		'title' => esc_html__( 'Page Loader Style', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose page loader style', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'cube-folding' => esc_html__( 'Cube Folding', 'gillion' ),
    			'cube-grid' => esc_html__( 'Cube Grid', 'gillion' ),
    			'spinner' => esc_html__( 'Dots', 'gillion' ),
    		),
    		'default' => 'cube-folding',
    	),

    	array(
    		'id' => 'page_loader_accent_color',
    		'title' => esc_html__( 'Page Loader Accent Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select page loader accent color', 'gillion' ),
    		'type' => 'color',
    	),

    	array(
    		'id' => 'page_loader_background_color',
    		'title' => esc_html__( 'Page Loader Background Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select page loader background color', 'gillion' ),
    		'type' => 'color',
    		'default' => '#ffffff',
    	),

    )
));




/*
** 404 Page
*/
Redux::setSection( $opt_name, array(
    'title'  => __( '404 Page', 'jevelin' ),
    'id'     => 'page-404',
    'icon'   => 'ti-alert',
    'fields' => array(

        array(
    		'id' => '404_status',
    		'title' => esc_html__( 'Enable 404 page', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable 404 page', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'0' => 'Off',
    			'1' => esc_html__( 'On', 'gillion' ),
    		),
    		'default' => '1',
    	),

    	array(
    		'id' => '404_wpbakery_page',
    		'title' => esc_html__( 'Replace with page content', 'gillion' ),
    		'subtitle' => esc_html__( 'Choose any WPbakery page builder page and set it to 404 page', 'gillion' ),
    		'type' => 'select',
    		'options' => jevelin_get_pages(),
    		'default' => 'disabled',
    	),

    	array(
    		'id' => '404_title',
    		'title' => esc_html__( 'Title', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter 404 page title', 'gillion' ),
    		'type' => 'text',
    		'default' => 'Oops, This Page Could Not Be Found!',
    	),

    	array(
    		'id' => '404_text',
    		'title' => esc_html__( 'Message', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter 404 page message', 'gillion' ),
    		'type' => 'text',
    		'default' => 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.',
    	),

    	array(
    		'id' => '404_button',
    		'title' => esc_html__( 'Reload Button', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter 404 page "Reload" button name', 'gillion' ),
    		'type' => 'text',
    		'default' => 'Reload',
    	),

    	array(
    		'id' => '404_image',
    		'title' => esc_html__( 'Image', 'gillion' ),
    		'subtitle' => esc_html__( 'Upload a background image for 404 page', 'gillion' ),
    		'url' => '1',
    		'type' => 'media',
    	),

    	array(
    		'id' => '404_background',
    		'title' => esc_html__( 'Background Color', 'gillion' ),
    		'subtitle' => esc_html__( 'Select 404 page background color', 'gillion' ),
    		'type' => 'color',
    		'default' => '#3f3f3f',
    	),


    )
));




/*
** Notice
*/
Redux::setSection( $opt_name, array(
    'title'  => __( 'Notice', 'jevelin' ),
    'id'     => 'notice',
    'icon'   => 'ti-notepad',
    'fields' => array(

        array(
    		'id' => 'notice_status',
    		'title' => esc_html__( 'Notice', 'gillion' ),
    		'subtitle' => esc_html__( 'Enable or disable notice abowe header', 'gillion' ),
    		'type' => 'button_set',
    		'options' => array(
    			'0' => 'Off',
    			'1' => esc_html__( 'On', 'gillion' ),
    		),
            'default' => '0',
    	),

    	array(
    		'id' => 'notice_text',
    		'title' => esc_html__( 'Notice Text', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter notice text', 'gillion' ),
    		'type' => 'editor',
    		'default' => 'By using our website, you agree to the use of our cookies.',
    		'teeny' => '1',
    		'reinit' => '1',
    		'size' => 'large',
    		'editor_height' => '110',
    	),

    	array(
    		'id' => 'notice_close',
    		'title' => esc_html__( 'Close Button', 'gillion' ),
    		'subtitle' => esc_html__( 'Select if this notice can be closed', 'gillion' ),
    		'type' => 'radio',
    		'options' => array(
    			'disable' => esc_html__( 'Disable', 'gillion' ),
    			'enable' => esc_html__( 'Enable (remember close action)', 'gillion' ),
    			'enable2' => esc_html__( 'Enable (do not remember close action)', 'gillion' ),
    		),
    		'default' => 'enable',
    	),

    	array(
    		'id' => 'notice_more_url',
    		'title' => esc_html__( 'Learn More URL', 'gillion' ),
    		'subtitle' => esc_html__( 'Enter learn more URL', 'gillion' ),
    		'type' => 'text',
    	),

    )
));





/*
** Custom CSS/JS
*/
Redux::setSection( $opt_name, array(
    'title'  => __( 'Custom CSS/JS', 'jevelin' ),
    'id'     => 'custom-js-css',
    'icon'   => 'ti-reload',
    'fields' => array(

        array(
            'id'       => 'custom_css',
            'type'     => 'ace_editor',
            'title'    => __( 'CSS Code', 'jevelin' ),
            'subtitle' => __( 'Paste your CSS code here.', 'jevelin' ),
            'mode'     => 'css',
            'theme'    => 'monokai',
            'default'  => "body {\n\t\n}"
        ),

        array(
            'id'       => 'custom_js',
            'type'     => 'ace_editor',
            'title'    => __( 'JavaScript Code', 'jevelin' ),
            'subtitle' => __( 'Paste your JS code here.', 'jevelin' ),
            'mode'     => 'javascript',
            'theme'    => 'chrome',
            'default'  => "jQuery(document).ready( function($){\n\t\n});"
        ),

        array(
    		'id' => 'google_analytics',
    		'title' => esc_html__( 'Google Analytics ID', 'jevelin' ),
    		'subtitle' => esc_html__( 'Enter your Google Analytics ID like UA-XXXXX-Y to enable Google Analytics statistics', 'jevelin' ),
    		'type' => 'text',
    	),

    )
));
