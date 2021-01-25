<?php
/**
 * Titlebar HTML
 */

$id = ( !is_search() ) ? jevelin_page_id() : '';

$mobile_layout = esc_attr( jevelin_option( 'titlebar_mobile_spacing', 'compact' ) );
$mobile_title  = esc_attr( jevelin_option( 'titlebar_mobile_title', 'on' ) );

$titlebar1 = $id ? esc_attr( jevelin_post_option( $id, 'titlebar' ) ) : 0;
$titlebar2 = esc_attr( jevelin_option( 'titlebar', 'on' ) );

$show_titlebar = ( isset($titlebar1) && $titlebar1 && $titlebar1 != 'default' ) ? $titlebar1 : ( ( isset($titlebar2) && $titlebar2 ) ? $titlebar2 : 'off' );

if( $show_titlebar == 'on' ) :

	$titlebar_background_image_main = jevelin_get_image( jevelin_option( 'titlebar_background' ) );
	$titlebar_background_image_page = jevelin_get_image( jevelin_post_option( jevelin_page_id(), 'titlebar_background' ) );
	$titlebar_background_image = ( $titlebar_background_image_page ) ? $titlebar_background_image_page : $titlebar_background_image_main;

	$titlebar_layout = esc_attr( jevelin_option( 'titlebar_layout', 'side' ) );
	$titlebar_background = jevelin_get_image( jevelin_post_option( $id, 'titlebar_background' ) );

	$titlebar_background_parallax_main = esc_attr( jevelin_option( 'titlebar_background_parallax' ) );
	$titlebar_background_parallax_page = esc_attr( jevelin_post_option( $id, 'titlebar_background_parallax' ) );
	$titlebar_background_parallax = ( $titlebar_background_parallax_page && ($titlebar_background_parallax_page == 'off' || $titlebar_background_parallax_page == 'on') ) ? $titlebar_background_parallax_page : $titlebar_background_parallax_main;

	$default_home = esc_html__( 'Home', 'jevelin' );
	$default_blog = esc_html__( 'Blog', 'jevelin' );
	$default_portfolio = esc_html__( 'Portfolio', 'jevelin' );
	$default_404 = esc_html__( '404', 'jevelin' );

	$titlebar_style_val = jevelin_post_option( $id, 'header_style' );
	$titlebar_style_val2 = ( isset( $titlebar_style_val['header_style'] ) ) ? esc_attr($titlebar_style_val['header_style']) : 'default';
	$titlebar_style_atts = jevelin_get_picker( $titlebar_style_val );
	$titlebar_style = ( $titlebar_style_val2 == 'bottom_titlebar' || $titlebar_style_val2 == 'light' || $titlebar_style_val2 == 'light light_noborder' || $titlebar_style_val2 == 'light_mobile_off' ) ? ' sh-titlebar-light' : '';

	if( $titlebar_background && $titlebar_background_parallax == 'on' ) :
		$titlebar_style.= ' sh-titlebar-parallax';
	endif;

	if( isset($titlebar_style_atts['titlebar_text_style']) && $titlebar_style_atts['titlebar_text_style'] ) :
		$titlebar_style.= ' sh-titlebar-text-'.$titlebar_style_atts['titlebar_text_style'];
	endif;

	if( is_search() ) :
		$titlebar_layout = 'side';
		$titlebar_style_val2 = 'default';
	endif;

	if( function_exists( 'putRevSlider' ) ) :
		$revslider = jevelin_post_option( $id, 'titlebar_revslider' );
	endif;


	$heading = jevelin_option( 'titlebar-headings-seo', 'h2' );
	if( $heading != 'h1' && $heading != 'h2' ) :
		$heading = 'h2';
	endif;

	$titlebar_style.= ' sh-titlebar-mobile-layout-'.$mobile_layout;
	$titlebar_style.= ' sh-titlebar-mobile-title-'.$mobile_title;
?>

	<?php if( function_exists( 'putRevSlider' ) && $revslider && $revslider != 'disabled' ) : ?>

		<div class="sh-titlebar sh-titlebar-revslider">
			<?php
				if( function_exists( 'putRevSlider' ) && $revslider ) :
					$slider = new RevSlider();
					$arrSliders = $slider->getArrSlidersShort();
					$validate = 0;
					foreach( $arrSliders as $key => $slide ) :
						if( $key == $revslider ) :
							$validate = 1;
						endif;
					endforeach;

					if( $validate == 1 ) :
						echo do_shortcode( '[rev_slider alias="'.esc_attr( $revslider ).'"]' );
					endif;

				endif;
			?>
		</div>

	<?php else : ?>

		<?php if( $titlebar_background_image ) : ?>
			<style media="screen">
				.sh-titlebar {
					background-image: url( <?php echo esc_url( $titlebar_background_image ); ?> );
				}
			</style>
		<?php endif; ?>

		<?php if( $titlebar_style_val2 == 'bottom_titlebar' || $titlebar_style_val2 == 'light' || $titlebar_style_val2 == 'light light_noborder' ) : ?>

			<div class="sh-titlebar sh-titlebar-center<?php echo esc_attr( $titlebar_style ); ?>">
				<div class="container">
					<div class="sh-table sh-titlebar-height-<?php echo esc_attr( jevelin_option( 'titlebar_height', 'medium' ) ); ?>">
						<div class="sh-table-cell">
							<div class="titlebar-title">

								<<?php echo esc_attr( $heading ); ?> class="titlebar-title-h1">
									<?php
										wp_reset_postdata();
										if( ( is_front_page() && is_home() ) || is_front_page() ) :
											echo esc_attr( jevelin_option( 'titlebar-home-title', $default_home ) );
										elseif( is_home() ) :
											echo get_the_title( jevelin_page_id() );
										elseif( is_404() ) :
											echo esc_attr( jevelin_option( 'titlebar-404-title', $default_404 ) );
										elseif( is_search() ) :
											printf(esc_html__('Search Results for "%s"', 'jevelin'), get_search_query());
										elseif( jevelin_is_realy_woocommerce_page() ) :
											echo esc_attr( jevelin_option( 'titlebar-blog-woocommerce' ) );
										elseif( is_archive() ) :
											echo get_the_archive_title();
										elseif( is_page() ) :
											echo get_the_title();
										elseif( is_author() ) :
											echo get_the_author();
										elseif( is_singular( 'fw-portfolio' ) ) :
											echo esc_attr( jevelin_option( 'titlebar-portfolio-title', $default_portfolio ) );
										elseif( is_singular( 'post' ) || get_option('page_for_posts', true) ) :
											echo esc_attr( jevelin_option( 'titlebar-post-title', $default_blog ) );
										else :
											echo get_the_title();
										endif;
									?>
								</<?php echo esc_attr( $heading ); ?>>

								<?php if( $titlebar_style_atts['description'] ) : ?>
									<div class="sh-titlebar-desc">
										<p><?php echo do_shortcode( $titlebar_style_atts['description'] ); ?></p>
									</div>
								<?php endif; ?>

							</div>
							<?php if( $titlebar_style_atts['breadcrumbs'] == true ) : ?>
								<div class="title-level">

									<?php echo jevelin_breadcrumbs( array(
										'home_title' => esc_attr( jevelin_option( 'titlebar-home-title', $default_home ) ),
									)); ?>

								</div>
							<?php endif; ?>
						</div>
					</div>

					<?php if( $titlebar_style_atts['scroll_button'] == true ) : ?>
						<div class="sh-titlebar-icon">
							<i class="ti-mouse"></i>
						</div>
					<?php endif; ?>
				</div>
			</div>

			<script type="text/javascript">
				<?php if( $titlebar_style_val2 != 'bottom_titlebar' ) : ?>
					if (document.documentElement.clientWidth > 1020) {
						var header_height = document.getElementsByClassName('primary-desktop')[0].clientHeight;
						document.getElementsByClassName("sh-titlebar")[0].style.paddingTop = header_height +'px';
					} else {
						var header_height = document.getElementsByClassName('sh-header-mobile-navigation')[0].clientHeight;
						document.getElementsByClassName("sh-titlebar")[0].style.paddingTop = header_height +'px';
					}
				<?php else : ?>
					if (document.documentElement.clientWidth > 1020) {
						var header_height = document.getElementsByClassName('primary-desktop')[0].clientHeight;
						document.getElementsByClassName("sh-titlebar")[0].style.paddingBottom = header_height +'px';
					} else {
						var header_height = document.getElementsByClassName('sh-header-mobile-navigation')[0].clientHeight;
						document.getElementsByClassName("sh-titlebar")[0].style.paddingBottom = header_height +'px';
					}
				<?php endif; ?>
			</script>

			<?php if( $titlebar_style_val2 == 'bottom_titlebar' ) : ?>
				<style media="screen">
					.sh-titlebar {
						padding-bottom: 121px;
					}
				</style>
			<?php endif; ?>

		<?php elseif( $titlebar_layout != 'side' ) : ?>

			<div class="sh-titlebar sh-titlebar-center<?php echo esc_attr( $titlebar_style ); ?>">
				<div class="container">
					<div class="sh-table sh-titlebar-height-<?php echo esc_attr( jevelin_option( 'titlebar_height', 'medium' ) ); ?>">
						<div class="sh-table-cell">
							<div class="titlebar-title">

								<<?php echo esc_attr( $heading ); ?>>
									<?php
										wp_reset_postdata();
										if( ( is_front_page() && is_home() ) || is_front_page() ) :
											echo esc_attr( jevelin_option( 'titlebar-home-title', $default_home ) );
										elseif( is_home() ) :
											echo get_the_title( jevelin_page_id() );
										elseif( is_404() ) :
											echo esc_attr( jevelin_option( 'titlebar-404-title', $default_404 ) );
										elseif( is_search() ) :
											printf(esc_html__('Search Results for "%s"', 'jevelin'), get_search_query());
										elseif( jevelin_is_realy_woocommerce_page() ) :
											echo esc_attr( jevelin_option( 'titlebar-blog-woocommerce' ) );
										elseif( is_archive() ) :
											echo get_the_archive_title();
										elseif( is_page() ) :
											echo get_the_title();
										elseif( is_author() ) :
											echo get_the_author();
										elseif( is_singular( 'fw-portfolio' ) ) :
											echo esc_attr( jevelin_option( 'titlebar-portfolio-title', $default_portfolio ) );
										elseif( is_singular( 'post' ) || get_option('page_for_posts', true) ) :
											echo esc_attr( jevelin_option( 'titlebar-post-title', $default_blog ) );
										else :
											echo get_the_title();
										endif;
									?>
								</<?php echo esc_attr( $heading ); ?>>

							</div>
							<div class="title-level">

								<?php echo jevelin_breadcrumbs( array(
									'home_title' => esc_attr( jevelin_option( 'titlebar-home-title', $default_home ) ),
								)); ?>

							</div>
						</div>
					</div>
				</div>
			</div>

		<?php else : ?>

			<div class="sh-titlebar<?php echo esc_attr( $titlebar_style ); ?>">
				<div class="container">
					<div class="sh-table sh-titlebar-height-<?php echo esc_attr( jevelin_option( 'titlebar_height', 'medium' ) ); ?>">
						<div class="titlebar-title sh-table-cell">

							<<?php echo esc_attr( $heading ); ?>>
								<?php
									wp_reset_postdata();
									if( ( is_front_page() && is_home() ) || is_front_page() ) :
										echo esc_attr( jevelin_option( 'titlebar-home-title', $default_home ) );
									elseif( is_home() ) :
										echo get_the_title( jevelin_page_id() );
									elseif( is_404() ) :
										echo esc_attr( jevelin_option( 'titlebar-404-title', $default_404 ) );
									elseif( is_search() ) :
										printf(esc_html__('Search Results for "%s"', 'jevelin'), get_search_query());
									elseif( jevelin_is_realy_woocommerce_page() ) :
										echo esc_attr( jevelin_option( 'titlebar-blog-woocommerce' ) );
									elseif( is_archive() ) :
										echo get_the_archive_title();
									elseif( is_page() ) :
										echo get_the_title();
									elseif( is_author() ) :
										echo get_the_author();
									elseif( is_singular( 'fw-portfolio' ) ) :
										echo esc_attr( jevelin_option( 'titlebar-portfolio-title', $default_portfolio ) );
									elseif( is_singular( 'post' ) || get_option('page_for_posts', true) ) :
										echo esc_attr( jevelin_option( 'titlebar-post-title', $default_blog ) );
									else :
										echo get_the_title();
									endif;
								?>
							</<?php echo esc_attr( $heading ); ?>>

						</div>
						<div class="title-level sh-table-cell">

							<?php echo jevelin_breadcrumbs( array(
								'home_title' => esc_attr( jevelin_option( 'titlebar-home-title', $default_home ) ),
							)); ?>

						</div>
					</div>
				</div>
			</div>

		<?php endif; ?>
	<?php endif; ?>
<?php endif; ?>
