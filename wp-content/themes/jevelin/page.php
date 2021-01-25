<?php
/*
** Single Page
*/
if( jevelin_page_layout() == 'sidebar-right' || jevelin_page_layout() == 'sidebar-left' ) :
    $layout_sidebar = esc_attr( jevelin_page_layout() );
endif;

$class = '';
if( function_exists('fw_ext_page_builder_is_builder_post') && !fw_ext_page_builder_is_builder_post( get_queried_object_id() ) ) {
	$class = ' page-default-content';
}
get_header(); ?>

	<div id="content" class="page-content <?php if( isset($layout_sidebar) && $layout_sidebar ) : ?>content-with-<?php echo esc_attr( $layout_sidebar ); endif; ?><?php echo esc_attr( $class ); ?>">

        <?php
        if( jevelin_get_thumb( get_the_ID() ) ) : ?>
            <div class="page-featured-image <?php echo ( jevelin_post_option( jevelin_page_id(), 'page_featured_image', 'on' ) == 'off' ) ? 'page-featured-image-hidden' : ''; ?>">
                <a href="<?php echo jevelin_get_thumb( get_the_ID(), 'large' ); ?>" data-rel="lightcase">
                    <?php echo the_post_thumbnail( 'jevelin-landscape-large' ); ?>
                </a>
            </div>
        <?php endif; ?>


		<?php
			while ( have_posts() ) : the_post();
				the_content();
			endwhile;
		?>

		<?php /* Clear unclosed floats */ ?>
		<div class="sh-clear"></div>

		<?php
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			if ( is_singular() ) :
				wp_enqueue_script( 'comment-reply' );
			endif;
		?>

	</div>
	<?php if( isset($layout_sidebar) && $layout_sidebar ) : ?>
		<div id="sidebar" class="<?php echo esc_attr( $layout_sidebar ); ?>" role="complementary" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
			<?php get_sidebar(); ?>
		</div>
	<?php endif; ?>

<?php get_footer(); ?>
