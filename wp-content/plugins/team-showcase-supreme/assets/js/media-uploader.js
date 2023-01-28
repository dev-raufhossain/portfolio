
jQuery(document).ready(function ($) {
    var custom_uploader;
    jQuery('#sb-image-upload-button').click(function (e) {
        e.preventDefault();
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }

        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: true
        });
        custom_uploader.on('select', function () {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            jQuery('#sb-image-upload-url').val(attachment.url);
                       
            jQuery("#sb-image-add-new-item-data").css({
                "overflow-x": "hidden",
                "overflow-y": "auto"

            });
            jQuery("body").css({
                "overflow" : "hidden"
            });
          
        });
        custom_uploader.open();
    });
});


jQuery(document).ready(function ($) {
    var custom_uploader;
    jQuery('#sb-image-hover-upload-button').click(function (e) {
        e.preventDefault();
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }

        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: true
        });
        custom_uploader.on('select', function () {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            jQuery('#sb-image-hover-upload-url').val(attachment.url);
                       
            jQuery("#sb-image-add-new-item-data").css({
                "overflow-x": "hidden",
                "overflow-y": "auto"

            });
            jQuery("body").css({
                "overflow" : "hidden"
            });
          
        });
        custom_uploader.open();
    });
});