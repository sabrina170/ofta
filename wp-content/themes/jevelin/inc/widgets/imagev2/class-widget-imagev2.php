<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

class Widget_ImageV2 extends WP_Widget {

    /**
     * Widget constructor.
     */
    private $options;
    private $prefix;
    function __construct() {

        $widget_ops = array( 'description' => esc_html__( 'Add your image', 'jevelin' ) );
        parent::__construct( false, esc_html__( 'Shufflehound Image V2', 'jevelin' ), $widget_ops );
        $this->options = array(

            'id' => array( 'type' => 'unique' ),

            'title' => array(
                'type' => 'text',
                'label' => esc_html__('Widget Title', 'jevelin'),
                'value' => __('Image', 'jevelin'),
            ),


            'image' => array(
                'label'   => esc_html__( 'Image', 'jevelin' ),
                'desc'    => esc_html__( 'Upload image', 'jevelin' ),
                'type'    => 'upload',
                'images_only' => true,
            ),

            'url'   => array(
                'type'  => 'text',
                'label' => esc_html__( 'URL', 'jevelin' ),
                'desc'  => esc_html__( 'Enter URL', 'jevelin' ),
            ),

        );
        $this->prefix = 'online_support';
    }

    function widget( $args, $instance ) {
        extract( $args );
        $params = array();

        foreach ( $instance as $key => $value ) {
            $atts[ $key ] = $value;
        }

        $filepath = dirname( __FILE__ ) . '/views/widget.php';

        $instance = $atts;
        $before_widget = str_replace( 'class="', 'class="widget_advertise ', $before_widget );

        if ( file_exists( $filepath ) ) {
            require_once $filepath;
        }
    }

    function update( $new_instance, $old_instance ) {
        // Unyson metaboxes
        if( defined( 'FW' ) && jevelin_framework() == 'unyson' ) :

            return fw_get_options_values_from_input(
                $this->options,
                FW_Request::POST(fw_html_attr_name_to_array_multi_key($this->get_field_name($this->prefix)), array())
            );

        // Shufflehound metaboxes
        else :
            return Shufflehound_Metaboxes::widget_update( $new_instance, $old_instance, $this->options );
        endif;
    }

    function form( $values ) {
        // Unyson metaboxes
        if( defined( 'FW' ) && jevelin_framework() == 'unyson' ) :

            $prefix = $this->get_field_id($this->prefix);
            $id = 'fw-widget-options-'. $prefix;

            echo '<div class="fw-force-xs fw-theme-admin-widget-wrap" id="'. esc_attr($id) .'">';
            echo fw()->backend->render_options($this->options, $values, array(
                'id_prefix' => $prefix .'-',
                'name_prefix' => $this->get_field_name($this->prefix),
            ));
            echo '</div>';
            $this->print_widget_javascript($id);

        // Shufflehound metaboxes
        else :
            $name_prefix = substr( $this->get_field_name(''), 0, -2 );
            echo Shufflehound_Metaboxes::widget( $this->options, $values, $name_prefix );
        endif;

        return $values;
    }

    private function print_widget_javascript($id) {
        if( defined( 'FW' ) && jevelin_framework() == 'unyson' ) : ?>
            <script type="text/javascript">
                jQuery(function($) {
                	let timeoutAddId;
                	$(document).on('widget-added', function(ev, $widget){
                		clearTimeout(timeoutAddId);
                		timeoutAddId = setTimeout(function(){ // wait a few milliseconds for html replace to finish
                			$widget.find('form input[type="submit"]').click();
                		}, 300);
                	});

                	let timeoutUpdateId;
                	$(document).on('widget-updated', function(ev, $widget){
                		clearTimeout(timeoutUpdateId);
                		timeoutUpdateId = setTimeout(function(){ // wait a few milliseconds for html replace to finish
                			fwEvents.trigger('fw:options:init', { $elements: $widget });
                		}, 100);
                	});
                });
            </script>
        <?php endif;
    }

}
