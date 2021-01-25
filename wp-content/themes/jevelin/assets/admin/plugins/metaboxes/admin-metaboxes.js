/*
** Shufflehound Metaboxes
*/
jQuery(document).ready( function($) {
    "use strict";



    /*
    ** Metaboxes - Image Browsw
    */
    // Gallery window
    var meta_gallery_frame;
    $('.sh-metaboxes-field-media-upload[data-type="gallery"]').on( 'click', function(e) {
        var meta_prefix = $(this).attr( 'data-prefix' );
        var meta_image_preview = $(this).parent().parent().children('.sh-metaboxes-field-media-preview');
        var meta_image_remove = $(this).closest('.sh-metaboxes-field-media').find('.sh-metaboxes-field-media-remove');
        var meta_image_gallery = $(this).parent().parent().children('.sh-metaboxes-field-media-gallery');
        e.preventDefault();

        // Check if frame exists
        if( meta_gallery_frame ) {
            meta_gallery_frame.open();
            return;
        }

        // Create new media library frame
        meta_gallery_frame = wp.media.frames.meta_gallery_frame = wp.media({
            title: 'Gallery',
            button: {
                text: 'Select'
            },
            library: {
               type: 'image'
            },
            multiple: true,
        });

        // When image is selected
        meta_gallery_frame.on('select', function () {
            // Get image data
            var media_attachments = meta_gallery_frame.state().get('selection').toJSON();

            // Set new images to HTMl
            meta_image_gallery.html( '' );
            $.each( media_attachments, function( index, item ) {
                meta_image_gallery.append('\
                <div class="sh-metaboxes-field-media-preview active">\
                    <img src="' + item.sizes.thumbnail.url + '">\
                    <input type="hidden" name="' + meta_prefix + '" value="' + item.id + '" class="sh-metaboxes-field-media-value">\
                </div>');
            });
            meta_image_preview.addClass( 'active' );
            meta_image_remove.addClass( 'active-button' );
        })

        // Open media library frame
        meta_gallery_frame.open();
    });


    // Single image window
    var meta_image_frame;
    $('.sh-metaboxes-field-media-upload[data-type="media"]').on( 'click', function(e) {
        var meta_image = $(this).parent().children('.sh-metaboxes-field-media-value');
        var meta_image_preview = $(this).parent().parent().children('.sh-metaboxes-field-media-preview');
        var meta_image_remove = $(this).closest('.sh-metaboxes-field-media').find('.sh-metaboxes-field-media-remove');
        e.preventDefault();

        // Check if frame exists
        if( meta_image_frame ) {
            meta_image_frame.open();
            return;
        }

        // Create new media library frame
        meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
            title: 'Media',
            button: {
                text: 'Select'
            },
            library: {
               type: 'image'
            },
            multiple: false,
        });

        // When image is selected
        meta_image_frame.on('select', function () {
            // Get image data
            var media_attachment = meta_image_frame.state().get('selection').first().toJSON();

            // Save to field inputs
            meta_image.val( media_attachment.id );
            meta_image_preview.children('img').attr('src', media_attachment.sizes.thumbnail.url);
            meta_image_preview.addClass( 'active' );
            meta_image_remove.addClass( 'active-button' );
        })

        // Open media library frame
        meta_image_frame.open();
    });


    // Remove image
    $('body').on( 'click', '.sh-metaboxes-field-media-remove', function() {
        $(this).closest('.sh-metaboxes-field-media').find('.sh-metaboxes-field-media-gallery').html( '' );
        $(this).closest('.sh-metaboxes-field-media').find('.sh-metaboxes-field-media-preview').slideDown().removeClass('active');
        $(this).closest('.sh-metaboxes-field-media').find('.sh-metaboxes-field-media-value').val( '' );
        $(this).removeClass( 'active-button' );
    });




    /*
    ** Metaboxes
    */
    $('.sh-metaboxes-sidebar-item').on( 'click', function() {
        $('.sh-metaboxes-sidebar-item').removeClass('active');
        $(this).addClass('active');

        $(this).parent().parent().find( '.sh-metaboxes-section' ).removeClass('active');
        $(this).parent().parent().find( '.sh-metaboxes-section[data-id=' + $(this).attr( 'data-id' )  +']' ).addClass('active');

        return false;
    });


    /*
    ** Metaboxes Field - Multi Text
    */
    $('.sh-metaboxes-field-multi_text-add').on( 'click', function() {
        var data_prefix = $(this).attr( 'data-prefix' );
        $(this).parent().find( '.sh-metaboxes-field-multi_text-content' ).append( '\
        <div class="sh-metaboxes-field-multi_text-item">\
            <input name="' + data_prefix + '" class="sh-metaboxes-field-multi_text-input" type="text" />\
            <span class="sh-metaboxes-field-multi_text-delete">\
                <i class="dashicons dashicons-dismiss"></i>\
            </span>\
        </div>' );
        $(this).parent().find( '.sh-metaboxes-field-multi_text-content .sh-metaboxes-field-multi_text-item:last-child input' ).focus();
    });

    $('.sh-metaboxes').on( 'click', '.sh-metaboxes-field-multi_text-delete', function() {
        $(this).parent().remove();
    });


    /*
    ** Metaboxes Field - Repeater
    */
    if( $('.sh-metaboxes-field').length ) {
        // Set repeater title
        /*$('.sh-metaboxes-repeater-item-container').each( function() {
            $(this).find( '.sh-metaboxes-repeater-header-title' ).html( $(this).find( 'input' ).val() );
        });*/

        // Open repeater
        $('body').on( 'click', '.sh-metaboxes-repeater-header', function() {
            $(this).closest( '.sh-metaboxes-repeater-item-container' ).toggleClass( 'open' );
            $(this).find( '.sh-metaboxes-repeater-header-title' ).html( $(this).parent().find( 'input' ).val() );
        });

        // Delete repeater
        $('body').on( 'click', '.sh-metaboxes-field-repeater-delete', function() {
            $(this).closest('.sh-metaboxes-repeater-item').remove();
        });

        // Add repeater
        $('body').on( 'click', '.sh-metaboxes-field-repeater-add', function() {
            var next_number = parseInt( $(this).attr( 'data-next-number' ) );
            var data_prefix = $(this).attr( 'data-prefix' );
            var fields_data = $(this).attr( 'data-fields' );
            var fields = '';
            fields_data = JSON.parse( fields_data );


            // Get fields
            $.each( fields_data, function( key, field ) {
                console.log( field );
                fields = fields + '\
                <div class="sh-metaboxes-repeater-field-item">\
                    <label>\
                        ' + field.title + '\
                        <input name="' + data_prefix + '['+next_number+']['+ field.id +']" class="sh-metaboxes-field-repeater-field-input" value="" type="text">\
                    </label>\
                </div>';
            });


            // Show block
            $(this).parent().find( '.sh-metaboxes-field-repeater-content' ).append( '\
            <div class="sh-metaboxes-repeater-item">\
                <div class="sh-metaboxes-repeater-item-container open">\
                    <div class="sh-metaboxes-repeater-header">\
                        <div class="sh-metaboxes-repeater-header-title"></div>\
                        <div class="sh-metaboxes-repeater-header-controls">\
                            <span class="sh-metaboxes-field-repeater-delete">\
                                <i class="dashicons dashicons-dismiss"></i>\
                            </span>\
                        </div>\
                    </div>\
                    <div class="sh-metaboxes-repeater-item-content">'+ fields +'</div>\
                </div>\
            </div>' );
            $(this).parent().find( '.sh-metaboxes-field-multi_text-content .sh-metaboxes-field-multi_text-item:last-child input' ).focus();
            $(this).attr( 'data-next-number', ( next_number + 1 ) );
        });
    }


    /*
    ** Metaboxes Field - Color
    */
    $('.sh-metaboxes-field-color input').wpColorPicker();



    /*
    ** Metaboxes - Post Formats
    */
    jQuery( window ).load( function() {
        if( $('body.block-editor-page').length ) {
            var post_format = $('.editor-post-format .editor-post-format__content select option:selected').val();
            $('.sh-metaboxes-post-format-'+post_format).css('display', 'flex');

            $('.editor-post-format .editor-post-format__content select').on( 'change', function() {
                var post_format_change = $(this).find('option:selected').val();
                $('.sh-metaboxes-post-format').hide();
                $('.sh-metaboxes-post-format-'+ post_format_change ).css('display', 'flex');
            });
        } else {
            var post_format = $('input[name=post_format]:checked', '#post-formats-select').val();
            $('.sh-metaboxes-post-format-'+post_format).css('display', 'flex');

            $('input[name=post_format]').on( 'change', function() {
                var post_format_change = $(this).val();
                $('.sh-metaboxes-post-format').hide();
                $('.sh-metaboxes-post-format-'+ post_format_change ).css('display', 'flex');
            });
        }
    });
});
