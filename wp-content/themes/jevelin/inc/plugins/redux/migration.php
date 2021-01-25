<?php
/**
** Migrate fro Unyson to Redux framework
**/
function gillion_framework_migrate_redux( $type = '', $ocdi = 0 ) {
    if( $type == 'start' ) :
        if( class_exists( 'Redux' ) ) :

            // Migrate theme settings
            $options = get_option( 'fw_theme_settings_options:gillion' ); //fw_get_db_settings_option();
            $options = is_array( $options ) ? $options : [];
            foreach( $options as $key => $option ) :
                if( !is_array( $option ) ) :
                    if( is_bool( $option ) ) :
                        $option = (int)$option;
                    endif;

                    // Fix colors
                    if( $option && in_array( $key, [
                        'styling_meta_categories_slider_color',
                        'styling_meta_categories_slider_hover_color',
                        'header_background_color',
                        'header_text_color',
                        'header_border_color',
                        'header_nav_active_background_color',
                        'menu_background_color',
                        'menu_link_border_color',
                        'footer_widgets_bottom_border_color',
                        'footer_bottom_border_color',
                        'footer_background_color',
                        'footer_border_color',
                        'footer_border_color2',
                        'copyright_background_color',
                        'header_logo_background_color',
                        'header_top_background_color',
                        'header_top_background_image',
                        'header_top_color',
                        'header_top_hover_color',
                    ]) ) :
                        $rgba = $color = $option;
                        $alpha = 1;
                        if( is_numeric( strpos( $option, '#' ) ) ) :
                            $option = [
                                'color' => $color
                            ];
                        elseif( is_numeric( strpos( $option, 'rgb' ) ) ) :
                            preg_match( '/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i', $color, $by_color );

                            if( isset( $by_color[3] ) ) :
                                if( substr_count( $color, ',') == 3 ) :
                                    $color_data = explode( ',', $color );
                                    $alpha_data = floatval( end( $color_data ) );
                                    if( $alpha_data > 0 ) :
                                        $alpha = $alpha_data;
                                    endif;

                                    //var_dump( $color_data ); die;
                                endif;

                                $color = sprintf( '#%02x%02x%02x', $by_color[1], $by_color[2], $by_color[3] );
                            endif;

                            $option = [
                                'color' => $color,
                                'alpha' => $alpha,
                                'rgba' => $rgba,
                            ];
                        else :
                            $option = '';
                        endif;
                    endif;

                    Redux::set_option( 'gillion_options', $key, $option );
                else :
                    if( $key == 'page_layout' && isset( $option['page_layout'] ) ) :
                        Redux::set_option( 'gillion_options', $key, $option['page_layout'] );

                        if( $option['page_layout'] == 'boxed' && isset( $option[ $option['page_layout'] ] ) ) :
                            $boxed = $option[ $option['page_layout'] ];

                            if( !empty( $boxed[ 'border_style' ] ) ) :
                                Redux::set_option( 'gillion_options', 'boxed_border_style', $boxed[ 'border_style' ] );
                            endif;
                            if( !empty( $boxed[ 'page_background_color' ] ) ) :
                                Redux::set_option( 'gillion_options', 'boxed_page_background_color', $boxed[ 'page_background_color' ] );
                            endif;
                            if( !empty( $boxed[ 'page_background_image' ] ) ) :
                                Redux::set_option( 'gillion_options', 'boxed_page_background_image', $boxed[ 'page_background_image' ] );
                            endif;
                            if( !empty( $boxed[ 'content_background_color' ] ) ) :
                                Redux::set_option( 'gillion_options', 'boxed_content_background_color', $boxed[ 'content_background_color' ] );
                            endif;
                            if( !empty( $boxed[ 'specific_pages' ] ) ) :
                                Redux::set_option( 'gillion_options', 'boxed_specific_pages', $boxed[ 'specific_pages' ] );
                            endif;
                            if( !empty( $boxed[ 'margin_top' ] ) ) :
                                Redux::set_option( 'gillion_options', 'boxed_margin_top', $boxed[ 'margin_top' ] );
                            endif;
                            if( !empty( $boxed[ 'footer_width' ] ) ) :
                                Redux::set_option( 'gillion_options', 'boxed_footer_width', $boxed[ 'footer_width' ] );
                            endif;
                            if( !empty( $boxed[ 'page_radius' ] ) ) :
                                Redux::set_option( 'gillion_options', 'boxed_page_radius', $boxed[ 'page_radius' ] );
                            endif;
                        endif;

                    elseif( isset( $option['attachment_id'] ) ) :
                        $custom_option = [];
                        $custom_option['id'] = $option['attachment_id'];
                        if( isset( $option['url'] ) ) :
                            $custom_option['url'] = $option['url'];
                            $custom_option['thumbnail'] = $option['url'];
                        endif;

                        Redux::set_option( 'gillion_options', $key, $custom_option );
                    elseif( isset( $option['family'] ) ) :
                        $custom_option = $option;
                        $custom_option['font-family'] = $option['family'];
                        unset( $custom_option['family'] );

                        if( isset( $option['weight'] ) ) :
                            $custom_option['font-weight'] = $option['weight'];
                            unset( $custom_option['weight'] );
                        endif;

                        if( isset( $option['size'] ) ) :
                            $custom_option['font-size'] = is_numeric( $option['size'] ) ? $option['size'] . 'px' : $option['size'];
                            unset( $custom_option['size'] );
                        endif;

                        Redux::set_option( 'gillion_options', $key, $custom_option );
                    else :
                        Redux::set_option( 'gillion_options', $key, $option );
                    endif;
                endif;
            endforeach;


            // Migrate page and post setttings
            $page_posts = new WP_Query( array(
                'post_type' => [ 'page', 'post' ],
                'posts_per_page' => -1,
            ));
            if( $page_posts->have_posts() ) :
                while( $page_posts->have_posts() ) : $page_posts->the_post();
                    $post_id = get_the_ID();
                    $post_meta = get_post_meta( $post_id, 'fw_options', 1 );
                    if( $ocdi ) :
                        $migration_check = get_post_meta( $post_id, 'shufflehound_migration_version', 1 );
                    endif;

                    if( empty( $migration_check ) ) :
                        // Fix page blog categories
                        if( isset( $post_meta['page_blog_category'] ) && is_array( $post_meta['page_blog_category'] ) ) :
                            $categories = [];
                            $categories_data = $post_meta['page_blog_category'];
                            foreach( $categories_data as $category_id ) :
                                $category = get_term_by( 'id', $category_id, 'category');
                    			if( !empty( $category->term_id ) ) :
                    				$categories[] = $category->name;
                    			endif;
                            endforeach;
                            $post_meta['page_blog_category'] = implode( PHP_EOL, $categories );
                        endif;

                        // Fix header_style
                        if( isset( $post_meta['header_style'] ) ) :
                            $header_style = $post_meta['header_style'];
                            if( isset( $header_style['header_style'] ) ) :
                                $post_meta['header_style'] = $header_style['header_style'];
                                $header_style = isset( $header_style[$header_style['header_style']] ) ? $header_style[$header_style['header_style']] : [];

                                if( isset( $header_style['description'] ) ) :
                                    $post_meta['header_style_description'] = $header_style['description'];
                                endif;

                                if( isset( $header_style['breadcrumbs'] ) ) :
                                    $post_meta['header_style_breadcrumbs'] = $header_style['breadcrumbs'];
                                endif;

                                if( isset( $header_style['scroll_button'] ) ) :
                                    $post_meta['header_style_scroll_button'] = $header_style['scroll_button'];
                                endif;
                            endif;
                        endif;

                        // Save
                        Shufflehound_Metaboxes::save( $post_id, $post_meta, $migration = 1 );

                        // Review score
                        $review_score = get_post_meta( $post_id, 'fw:opt:review_score', 1 );
                        if( $review_score ) :
                            update_post_meta(
                                $post_id,
                                'review_score',
                                sanitize_text_field( $review_score )
                            );
                        endif;

                        // Save post migration complete
                        update_post_meta(
                            $post_id,
                            'shufflehound_migration_version',
                            '1'
                        );
                    endif;
                endwhile;
                wp_reset_postdata();
            endif;


            // Set framework to Redux
            update_option( 'gillion_framework', 'redux' );


            // Success message
            return '<span style="color: #00b50f;">Done! You are now using Redux Framework</span>';
        else :
            return 'Migration failed';
        endif;
    endif;
}
