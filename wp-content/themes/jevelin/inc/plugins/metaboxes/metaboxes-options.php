<?php
function sh_metaboxes_options( $id = '' ) {
    // Declare your sections
    $page_sections = $post_sections = $portfolio_sections = [];

    $post_sections[] = array(
        'title'         => __( 'Post', 'gillion' ),
        'icon'          => 'ti-layout-column3',
        'fields'        => array(


            /*
            ** Post Format - Standard
            */
            array(
        		'id' => 'hide-image',
        		'title' => esc_html__( 'Hide Featured Image', 'gillion' ),
        		'subtitle' => esc_html__( 'Enable this if you want to hide featured image inside the blog post', 'gillion' ),
        		'type' => 'button_set',
        		'options' => array(
        			'0' => 'Off',
        			'1' => esc_html__( 'On', 'gillion' ),
        		),
                'class' => 'sh-metaboxes-post-format sh-metaboxes-post-format-0',
        	),


            /*
            ** Post Format - Gallery
            */
        	array(
        		'id' => 'post-gallery',
        		'title' => esc_html__( 'Gallery', 'gillion' ),
        		'subtitle' => esc_html__( 'Upload images to your gallery', 'gillion' ),
        		'type' => 'gallery',
                'class' => 'sh-metaboxes-post-format sh-metaboxes-post-format-gallery',
        	),


            /*
            ** Post Format - Quote
            */
        	array(
        		'id' => 'post-quote',
        		'title' => esc_html__( 'Quote', 'gillion' ),
        		'subtitle' => esc_html__( 'Enter quote', 'gillion' ),
        		'type' => 'textarea',
                'class' => 'sh-metaboxes-post-format sh-metaboxes-post-format-quote',
        	),

        	array(
        		'id' => 'post-quote-author',
        		'title' => esc_html__( 'Quote Author', 'gillion' ),
        		'subtitle' => esc_html__( 'Enter quote author', 'gillion' ),
        		'type' => 'text',
                'class' => 'sh-metaboxes-post-format sh-metaboxes-post-format-quote',
        	),


            /*
            ** Post Format - Link
            */
        	array(
        		'id' => 'post-url-title',
        		'title' => esc_html__( 'URL Title', 'gillion' ),
        		'subtitle' => esc_html__( 'Enter URL title', 'gillion' ),
        		'type' => 'text',
                'class' => 'sh-metaboxes-post-format sh-metaboxes-post-format-link',
        	),

        	array(
        		'id' => 'post-url',
        		'title' => esc_html__( 'URL', 'gillion' ),
        		'subtitle' => esc_html__( 'Dont forget to add http://', 'gillion' ),
        		'type' => 'text',
                'class' => 'sh-metaboxes-post-format sh-metaboxes-post-format-link',
        	),


            /*
            ** Post Format - Video
            */
        	array(
        		'id' => 'post-video',
        		'title' => esc_html__( 'Video URL', 'gillion' ),
        		'subtitle' => esc_html__( 'Enter WordPress supported link (like Youtube or Vimeo)', 'gillion' ),
        		'type' => 'text',
                'class' => 'sh-metaboxes-post-format sh-metaboxes-post-format-video',
        	),

        	array(
        		'id' => 'post-video-file',
        		'title' => esc_html__( 'Video File URL', 'gillion' ),
        		'subtitle' => esc_html__( 'Enter video file URL (MP4 or WebM)', 'gillion' ),
        		'url' => '1',
        		'type' => 'media',
                'images_only' => false,
        		'help' => 'Please note that not all WordPress installation supports media file upload by default',
                'class' => 'sh-metaboxes-post-format sh-metaboxes-post-format-video',
        	),


            /*
            ** Post Format - Audio
            */
        	array(
        		'id' => 'post-audio',
        		'title' => esc_html__( 'Audio URL', 'gillion' ),
        		'subtitle' => esc_html__( 'Enter WordPress supported link (like Soundcloud)', 'gillion' ),
        		'type' => 'text',
                'class' => 'sh-metaboxes-post-format sh-metaboxes-post-format-audio',
        	),

        	array(
        		'id' => 'post-audio-file',
        		'title' => esc_html__( 'Audio File URL', 'gillion' ),
        		'subtitle' => esc_html__( 'Enter audio file URL (MP3 or OGG)', 'gillion' ),
        		'url' => '1',
        		'type' => 'media',
                'images_only' => false,
        		'help' => 'Please note that not all WordPress installation supports media file upload by default',
                'class' => 'sh-metaboxes-post-format sh-metaboxes-post-format-audio',
        	),



            array(
        		'id' => 'post-copyrights',
        		'title' => esc_html__( 'Copyrights Text', 'gillion' ),
        		'subtitle' => esc_html__( 'Enter copyrights text for your main featured image, video or media', 'gillion' ),
        		'type' => 'textarea',
        	),

            array(
        		'id' => 'post-popover',
        		'title' => esc_html__( 'Popover', 'gillion' ),
        		'subtitle' => esc_html__( 'Small informative meesage', 'gillion' ),
        		'type' => 'radio',
        		'options' => array(
        			'none' => esc_html__( 'None', 'gillion' ),
        			'new' => esc_html__( 'NEW', 'gillion' ),
        			'hot' => esc_html__( 'HOT', 'gillion' ),
        		),
        		'default' => 'none',
        	),

        ),
    );


    $post_sections[] = array(
        'title'         => __( 'General', 'gillion' ),
        'icon'          => 'ti-crown',
        'fields'        => array(

            array(
        		'id' => 'post_layout',
        		'title' => esc_html__( 'Post Template', 'gillion' ),
        		'subtitle' => esc_html__( 'Choose post template', 'gillion' ),
        		'type' => 'radio',
        		'options' => array(
        			'global_default' => esc_html__( 'Global Default (from theme settings)', 'gillion' ),
        			'default' => esc_html__( 'Default', 'gillion' ),
        			'sidebar-left' => esc_html__( 'Sidebar Left', 'gillion' ),
        			'sidebar-right' => esc_html__( 'Sidebar Right', 'gillion' ),
        		),
        		'default' => 'global_default',
        	),

        ),
    );


    $page_sections[] = array(
        'title'         => __( 'General', 'gillion' ),
        'icon'          => 'ti-crown',
        'fields'        => array(

            array(
        		'id' => 'page_layout',
        		'title' => esc_html__( 'Page Layout', 'gillion' ),
        		'subtitle' => esc_html__( 'Choose main page layout', 'gillion' ),
        		'type' => 'radio',
        		'options' => array(
        			'global_default' => esc_html__( 'Global Default (from theme settings)', 'gillion' ),
        			'default' => esc_html__( 'Default (without sidebar)', 'gillion' ),
        			'full' => esc_html__( 'Full Width', 'gillion' ),
        			'sidebar-left' => esc_html__( 'Sidebar Left', 'gillion' ),
        			'sidebar-right' => esc_html__( 'Sidebar Right', 'gillion' ),
        		),
        		'default' => 'global_default',
        	),

        	array(
        		'id' => 'page_featured_image',
        		'title' => esc_html__( 'Featured Image', 'gillion' ),
        		'subtitle' => esc_html__( 'Choose to enable or disable page featured image', 'gillion' ),
        		'type' => 'radio',
        		'options' => array(
        			'on' => esc_html__( 'On', 'gillion' ),
        			'off' => esc_html__( 'Off', 'gillion' ),
        		),
        		'default' => 'on',
        	),

        ),
    );


    $portfolio_sections[] = array(
        'title'         => __( 'General', 'gillion' ),
        'icon'          => 'ti-crown',
        'fields'        => array(

            array(
        		'id' => 'style',
        		'title' => esc_html__( 'Portfolio Layout', 'gillion' ),
        		'subtitle' => esc_html__( 'Choose portfolio layout', 'gillion' ),
        		'type' => 'radio',
        		'options' => array(
        			'default' => esc_html__( 'Default', 'gillion' ),
        			'slider' => esc_html__( 'Gallery Slider', 'gillion' ),
        			'gallery-slider-dynamic' => esc_html__( 'Gallery Dynamic Slider', 'gillion' ),
        			'video-slider' => esc_html__( 'Video Slider', 'gillion' ),
        			'iframe-slider' => esc_html__( 'Iframe Slider', 'gillion' ),
        		),
        		'default' => 'default',
        	),

        	array(
        		'id' => 'video',
        		'title' => esc_html__( 'Video URL', 'gillion' ),
                'subtitle'  => wp_kses( __( 'Enter video URL from WordPress <a target="_blank" href="https://codex.wordpress.org/Embeds#Okay.2C_So_What_Sites_Can_I_Embed_From.3F">supported video sites</a>. Only for video slider layout', 'jevelin' ), jevelin_allowed_html() ),
        		'type' => 'text',
            ),

        	array(
        		'id' => 'iframe',
        		'title' => esc_html__( 'Iframe URL', 'gillion' ),
        		'subtitle' => esc_html__( 'Enter iframe URL. Only for iframe slider layout', 'gillion' ),
        		'type' => 'text',
        	),

        	array(
        		'id' => 'field_client',
        		'title' => esc_html__( 'Client', 'gillion' ),
        		'subtitle' => esc_html__( 'Enter your client name', 'gillion' ),
        		'type' => 'text',
        	),

        	array(
        		'id' => 'field_link',
        		'title' => esc_html__( 'URL', 'gillion' ),
        		'subtitle' => esc_html__( 'Enter your URL', 'gillion' ),
        		'type' => 'text',
        	),

        	array(
        		'id' => 'info',
        		'title' => esc_html__( 'Custom Fields', 'gillion' ),
        		'subtitle' => esc_html__( 'Add some custom fields', 'gillion' ),
        		'type' => 'multi_text',
        	),

        	array(
        		'id' => 'custom_url',
        		'title' => esc_html__( 'Custom URL', 'gillion' ),
        		'subtitle' => esc_html__( 'Enter your custom URL where page will be redirected', 'gillion' ),
        		'type' => 'text',
        	),

        ),
    );


    if( class_exists('RevSlider') ) :
    	$slider = new RevSlider();
    	$arrSliders = $slider->getArrSlidersShort();
    endif;

    if( !isset($arrSliders) || !count($arrSliders) ) :
    	$arrSliders = array(
    		'disabled' => 'Disabled'
    	);
    elseif( class_exists('RevSlider') ) :
    	$arrSliders['disabled'] = 'Disabled';
    	$arrSliders = array_reverse($arrSliders, true);
    endif;

    $page_sections[] = $post_sections[] = $portfolio_sections[] = array(
        'title'         => __( 'Header', 'gillion' ),
        'icon'          => 'ti-flag-alt-2',
        'fields'        => array(

            array(
        		'id' => 'header',
        		'title' => esc_html__( 'Header', 'gillion' ),
        		'subtitle' => esc_html__( 'Enable or disable header', 'gillion' ),
        		'type' => 'button_set',
        		'options' => array(
        			'off' => esc_html__( 'Off', 'gillion' ),
        			'on' => esc_html__( 'On', 'gillion' ),
        		),
        		'default' => 'on',
        	),

        	array(
        		'id' => 'header_layout',
        		'title' => esc_html__( 'Header Layout', 'gillion' ),
        		'subtitle' => esc_html__( 'Choose main header layout', 'gillion' ),
        		'type' => 'select',
        		'default' => 'default',
                'options' => array_merge( array( 'default' => esc_html__( 'Default (from theme options)', 'jevelin' ) ), jevelin_get_headers() ),
        	),

    	array(
    		'id' => 'header builder_divider',
    		'title' => '<h2>' . esc_html__( 'Header Builder (beta)', 'gillion' ) . '</h2>',
    		'type' => 'raw',
    	),

        	array(
        		'id' => 'header_above_content',
        		'title' => esc_html__( 'Above Content', 'gillion' ),
        		'subtitle' => esc_html__( 'Can be useful when using transparent background to place it above content like a slider (will be applied only when viewing actual pages)', 'gillion' ),
        		'type' => 'select',
        		'options' => array(
        			'disabled' => esc_html__( 'Disabled', 'gillion' ),
        			'enabled' => esc_html__( 'Enabled', 'gillion' ),
        		),
        		'default' => 'disabled',
        	),

        	array(
        		'id' => 'header_classic_divider',
        		'title' => '<h2>' . esc_html__( 'Header Classic (from Theme Settings)', 'gillion' ) . '</h2>',
        		'type' => 'raw',
        	),

    	array(
    		'id' => 'titlebar_divider',
    		'title' => '<h2>' . esc_html__( 'Titlebar', 'gillion' ) . '</h2>',
    		'type' => 'raw',
    	),

        	array(
        		'id' => 'titlebar',
        		'title' => esc_html__( 'Titlebar', 'gillion' ),
        		'subtitle' => esc_html__( 'Enable or disable titlebar', 'gillion' ),
        		'type' => 'select',
        		'options' => array(
        			'default' => esc_html__( 'Default (from theme options)', 'gillion' ),
        			'on' => esc_html__( 'On', 'gillion' ),
        			'off' => esc_html__( 'Off', 'gillion' ),
        		),
        	),

        	array(
        		'id' => 'titlebar_text_color',
        		'title' => esc_html__( 'Titlebar Text Color', 'gillion' ),
        		'subtitle' => esc_html__( 'Select titlebar text color', 'gillion' ),
        		'type' => 'color',
        	),

        	array(
        		'id' => 'titlebar_background',
        		'title' => esc_html__( 'Titlebar Background Image', 'gillion' ),
        		'subtitle' => esc_html__( 'Upload titlebar background image', 'gillion' ),
        		'url' => '1',
        		'type' => 'media',
        	),

        	array(
        		'id' => 'titlebar_background_parallax',
        		'title' => esc_html__( 'Titlebar Parallax Background', 'gillion' ),
        		'subtitle' => esc_html__( 'Enable or disable parallax background', 'gillion' ),
        		'type' => 'select',
        		'options' => array(
        			'default' => esc_html__( 'Default (from theme options)', 'gillion' ),
        			'on' => esc_html__( 'On', 'gillion' ),
        			'off' => esc_html__( 'Off', 'gillion' ),
        		),
        	),

        	array(
        		'id' => 'titlebar_revslider',
        		'title' => esc_html__( 'Titlebar Revolution Slider', 'gillion' ),
        		'subtitle' => esc_html__( 'Replace titlebar content with Revolution Slider', 'gillion' ),
        		'type' => 'select',
                'options' => $arrSliders
        	),


        ),
    );


    $page_sections[] = $post_sections[] = $portfolio_sections[] = array(
        'title'         => __( 'Footer', 'gillion' ),
        'icon'          => 'ti-anchor',
        'fields'        => array(

            array(
        		'id' => 'footer_template',
        		'title' => esc_html__( 'Footer Layout', 'gillion' ),
        		'subtitle' => esc_html__( 'Choose footer layout', 'gillion' ),
        		'type' => 'select',
        		'options' => jevelin_get_footers(),
        		'default' => 'default',
        	),

        	array(
        		'id' => 'footer_widgets',
        		'title' => esc_html__( 'Widgets', 'gillion' ),
        		'subtitle' => esc_html__( 'Enable or disable footer widgets', 'gillion' ),
        		'type' => 'select',
        		'options' => array(
        			'default' => esc_html__( 'Default (from theme options)', 'gillion' ),
        			'on' => esc_html__( 'On', 'gillion' ),
        			'off' => esc_html__( 'Off', 'gillion' ),
        		),
        	),

        	array(
        		'id' => 'footer_widgets_padding',
        		'title' => esc_html__( 'Footer Widgets Padding', 'gillion' ),
        		'subtitle' => esc_html__( 'Enter custom footer widgets padding (default: 100px 0 100px 0)', 'gillion' ),
        		'type' => 'text',
        	),

        	array(
        		'id' => 'copyright_bar',
        		'title' => esc_html__( 'Copyrights', 'gillion' ),
        		'subtitle' => esc_html__( 'Enable or disable footer copyrights', 'gillion' ),
        		'type' => 'select',
        		'options' => array(
        			'default' => esc_html__( 'Default (from theme options)', 'gillion' ),
        			'on' => esc_html__( 'On', 'gillion' ),
        			'off' => esc_html__( 'Off', 'gillion' ),
        		),
        	),


        ),
    );


    $page_sections[] = array(
        'title'         => __( 'Blog', 'gillion' ),
        'icon'          => 'ti-pencil-alt',
        'fields'        => array(

            array(
        		'id' => 'use only if page template is set to blog_divider',
        		'title' => '<h2>' . esc_html__( 'Use only if page template is set to Blog', 'gillion' ) . '</h2>',
        		'type' => 'raw',
        	),

        	array(
        		'id' => 'page_blog_editor',
        		'title' => esc_html__( 'Blog Editor Content', 'gillion' ),
        		'subtitle' => esc_html__( 'Enable or disable blog page editor content tabs', 'gillion' ),
        		'type' => 'radio',
        		'options' => array(
        			'on' => esc_html__( 'On', 'gillion' ),
        			'off' => esc_html__( 'Off', 'gillion' ),
        		),
        		'default' => 'off',
        	),

        	array(
        		'id' => 'page-blog-style',
        		'title' => esc_html__( 'Blog Style', 'gillion' ),
        		'subtitle' => esc_html__( 'Choose blog style', 'gillion' ),
        		'type' => 'radio',
        		'options' => array(
        			'masonry masonry2' => esc_html__( 'Masonry 2.0 Standard', 'gillion' ),
        			'masonry masonry-shadow' => esc_html__( 'Masonry Shadow', 'gillion' ),
        			'masonry' => esc_html__( 'Masonry Standard', 'gillion' ),
        			'grid' => esc_html__( 'Grid', 'gillion' ),
        			'mix masonry2' => esc_html__( 'Mix', 'gillion' ),
        			'large' => esc_html__( 'Large Images', 'gillion' ),
        			'medium' => esc_html__( 'Medium Images', 'gillion' ),
        			'small' => esc_html__( 'Small Images', 'gillion' ),
        		),
        		'default' => 'masonry masonry-shadow',
        	),

        	array(
        		'id' => 'page_blog_categories_tab',
        		'title' => esc_html__( 'Blog Categories Tabs', 'gillion' ),
        		'subtitle' => esc_html__( 'Enable or disable blog categories tabs', 'gillion' ),
        		'type' => 'radio',
        		'options' => array(
        			'on' => esc_html__( 'On', 'gillion' ),
        			'off' => esc_html__( 'Off', 'gillion' ),
        		),
        		'default' => 'off',
        	),

        	array(
        		'id' => 'page_blog_category',
        		'title' => esc_html__( 'Blog Categories', 'gillion' ),
        		'subtitle' => esc_html__( 'Choose which blog categories you want to show', 'gillion' ),
        		'type' => 'multi-select',
        		'population' => 'taxonomy',
        		'source' => 'category',
        		'prepopulate' => '200',
        		'limit' => '100',
        	),

        	array(
        		'id' => 'page_blog_posts_per_page',
        		'title' => esc_html__( 'Blog Posts Per Page', 'gillion' ),
        		'subtitle' => esc_html__( 'Choose how many posts will be disaplayed per page', 'gillion' ),
        		'type' => 'select',
        		'options' => array(
        			'default' => esc_html__( 'Default (from theme options)', 'gillion' ),
        			'3' => esc_html__( '3 posts', 'gillion' ),
        			'4' => esc_html__( '4 posts', 'gillion' ),
        			'5' => esc_html__( '5 posts', 'gillion' ),
        			'6' => esc_html__( '6 posts', 'gillion' ),
        			'7' => esc_html__( '7 posts', 'gillion' ),
        			'8' => esc_html__( '8 posts', 'gillion' ),
        			'9' => esc_html__( '9 posts', 'gillion' ),
        			'10' => esc_html__( '10 posts', 'gillion' ),
        			'11' => esc_html__( '11 posts', 'gillion' ),
        			'12' => esc_html__( '12 posts', 'gillion' ),
        			'13' => esc_html__( '13 posts', 'gillion' ),
        			'14' => esc_html__( '14 posts', 'gillion' ),
        			'15' => esc_html__( '15 posts', 'gillion' ),
        			'16' => esc_html__( '16 posts', 'gillion' ),
        		),
        		'default' => 'default',
        	),

        	array(
        		'id' => 'page_blog_pagination_type',
        		'title' => esc_html__( 'Blog Pagination Type', 'gillion' ),
        		'subtitle' => esc_html__( 'Choose blog pagination type', 'gillion' ),
        		'type' => 'radio',
        		'options' => array(
        			'default' => esc_html__( 'Default per page', 'gillion' ),
        			'button' => esc_html__( 'Load More button (on click)', 'gillion' ),
        			'infinite' => esc_html__( 'Infinite loading (on scroll)', 'gillion' ),
        		),
        		'default' => 'default',
        	),

        ),
    );


    $page_sections[] = $post_sections[] = array(
        'title'         => __( 'Colors', 'gillion' ),
        'icon'          => 'ti-palette',
        'fields'        => array(

            array(
        		'id' => 'accent_color',
        		'title' => esc_html__( 'Accent Color', 'gillion' ),
        		'subtitle' => esc_html__( 'Set custom accent color for this page or leave blank for default', 'gillion' ),
        		'type' => 'color',
        	),

        	array(
        		'id' => 'accent_hover_color',
        		'title' => esc_html__( 'Accent Hover Color', 'gillion' ),
        		'subtitle' => esc_html__( 'Select page accent color on hover or leave blank for default', 'gillion' ),
        		'type' => 'color',
        	),

        	array(
        		'id' => 'header_nav_active_color',
        		'title' => esc_html__( 'Active Navigation Color', 'gillion' ),
        		'subtitle' => esc_html__( 'Select active navigation color or leave blank for default', 'gillion' ),
        		'type' => 'color',
        	),

        ),
    );




    // Declare your metaboxes
    $metaboxes = array();
    $metaboxes[] = array(
        'id'            => 'page-settings',
        'title'         => __( 'Page Settings', 'gillion' ),
        'post_type'     => 'page',
        //'page_template' => array('page-test.php'), // Visibility of box based on page template selector
        //'post_format' => array('image'), // Visibility of box based on post format
        'position'      => 'normal', // normal, advanced, side
        'priority'      => 'high', // high, core, default, low - Priorities of placement
        'sections'      => $page_sections,
    );

    $metaboxes[] = array(
        'id'            => 'post-settings',
        'title'         => __( 'Post Settings', 'gillion' ),
        'post_type'     => 'post',
        'position'      => 'normal',
        'priority'      => 'high',
        'sections'      => $post_sections,
    );

    $metaboxes[] = array(
        'id'            => 'portfolio-settings',
        'title'         => __( 'Portfolio Settings', 'gillion' ),
        'post_type'     => 'fw-portfolio',
        //'page_template' => array('page-test.php'), // Visibility of box based on page template selector
        //'post_format' => array('image'), // Visibility of box based on post format
        'position'      => 'normal', // normal, advanced, side
        'priority'      => 'high', // high, core, default, low - Priorities of placement
        'sections'      => $portfolio_sections,
    );

    return $metaboxes;
}
