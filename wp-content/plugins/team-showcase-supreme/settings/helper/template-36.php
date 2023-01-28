<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery("#wpm_image_radius").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.wpm_6310_team_style_36 { border-radius:" + value + "; -moz-border-radius:" + value + "; -ms-border-radius:" + value + "; -o-border-radius:" + value + "; -webkit-border-radius:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_real_image_radius").on("change", function () {
            var value = jQuery(this).val() + "%";
            jQuery("<style type='text/css'>.wpm_6310_team_style_36 img { border-radius:" + value + "; -moz-border-radius:" + value + "; -ms-border-radius:" + value + "; -o-border-radius:" + value + "; -webkit-border-radius:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_border_width").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.wpm_6310_team_style_36 { border-width:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_border_color").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.wpm_6310_team_style_36  { border-color:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });


        jQuery("#wpm_image_hover_background").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.wpm_6310_team_style_36:hover { background:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_box_shadow_width, #wpm_box_shadow_blur, #wpm_box_shadow_color").on("change", function () {
            var spread = jQuery("#wpm_box_shadow_width").val() + "px";
            var blur = jQuery("#wpm_box_shadow_blur").val() + "px";
            var color = jQuery("#wpm_box_shadow_color").val().replace(/\+/g, ' ');
            color = color.split(':');
            jQuery("<style type='text/css'> .wpm_6310_team_style_36 { box-shadow: 0 1px " + blur + " " + spread + " " + color + "; -moz-box-shadow: 0 1px " + blur + " " + spread + " " + color + "; -webkit-box-shadow: 0 1px " + blur + " " + spread + " " + color + "; -ms-box-shadow: 0 1px " + blur + " " + spread + " " + color + "; -o-box-shadow: 0 1px " + blur + " " + spread + " " + color + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");

            jQuery("<style type='text/css'>.wpm_6310_team_style_36:hover { box-shadow: 0 5px calc(" + blur + " * 5) " + spread + " " + color + "; -moz-box-shadow: 0 5px calc(" + blur + " * 5) " + spread + " " + color + "; -webkit-box-shadow: 0 5px calc(" + blur + " * 5) " + spread + " " + color + "; -ms-box-shadow: 0 5px calc(" + blur + " * 5) " + spread + " " + color + "; -o-box-shadow: 0 5px calc(" + blur + " * 5) " + spread + " " + color + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_member_font_size").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.wpm_6310_team_style_36 .wpm_6310_team_style_36_title { font-size:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });

        jQuery("#wpm_member_font_color").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.wpm_6310_team_style_36 .wpm_6310_team_style_36_title, .wpm_6310_team_style_36 .wpm_6310_team_style_36_title a { color:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_member_font_hover_color").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.wpm_6310_team_style_36:hover .wpm_6310_team_style_36_title { color:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_member_font_weight").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.wpm_6310_team_style_36 .wpm_6310_team_style_36_title { font-weight:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_member_text_transform").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.wpm_6310_team_style_36 .wpm_6310_team_style_36_title { text-transform:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_jquery_heading_font").on("change", function () {
            var value = jQuery(this).val().replace(/\+/g, ' ');
            value = value.split(':');
            jQuery("<style type='text/css'>.wpm_6310_team_style_36 .wpm_6310_team_style_36_title { font-family:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_heading_line_height").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> .wpm_6310_team_style_36 .wpm_6310_team_style_36_title { line-height:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_designation_font_size").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> .wpm_6310_team_style_36_designation { font-size:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_designation_font_color").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .wpm_6310_team_style_36_designation { color:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_designation_font_hover_color").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .wpm_6310_team_style_36:hover .wpm_6310_team_style_36_designation { color:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });

        jQuery("#wpm_designation_font_weight").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .wpm_6310_team_style_36_designation { font-weight:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_designation_text_transform").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .wpm_6310_team_style_36_designation { text-transform:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_jquery_designation_font").on("change", function () {
            var value = jQuery(this).val().replace(/\+/g, ' ');
            value = value.split(':');
            jQuery("<style type='text/css'>.wpm_6310_team_style_36_designation { font-family:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_designation_line_height").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> .wpm_6310_team_style_36_designation { line-height:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#social_from_content").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.wpm_6310_team_style_36_designation { padding-bottom:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_social_icon_width").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> .wpm_6310_team_style_36 .wpm_6310_team_style_36_social li a { width:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_social_icon_height").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> .wpm_6310_team_style_36 .wpm_6310_team_style_36_social li a { height:" + value + "; line-height:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_social_border_width").on("change", function () {
            var value = jQuery(this).val() + "px !important";
            jQuery("<style type='text/css'>.wpm_6310_team_style_36 .wpm_6310_team_style_36_social li a { border-width:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_social_border_radius").on("change", function () {
            var value = jQuery(this).val() + "%";
            jQuery("<style type='text/css'> .wpm_6310_team_style_36 .wpm_6310_team_style_36_social li a { border-radius:" + value + "; -moz-border-radius:" + value + "; -webkit-border-radius:" + value + "; -o-border-radius:" + value + "; -ms-border-radius:" + value + "; } </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_member_margin_top").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.wpm_6310_team_style_36 .wpm_6310_team_style_36_title { margin-top:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_member_margin_bottom").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.wpm_6310_team_style_36 .wpm_6310_team_style_36_title { margin-bottom:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_designation_margin_top").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.wpm_6310_team_style_36 .wpm_6310_team_style_36_designation { margin-top:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_designation_margin_bottom").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.wpm_6310_team_style_36 .wpm_6310_team_style_36_designation { margin-bottom:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_social_margin_top").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.wpm_6310_team_style_36 ul.wpm_6310_team_style_36_social { margin-top:" + value + " !important;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_social_margin_bottom").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.wpm_6310_team_style_36 ul.wpm_6310_team_style_36_social { margin-bottom:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_box_background").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.wpm_6310_team_style_36 { background:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });   
        jQuery("#wpm_box_background, #wpm_box_background_2, #wpm_box_background_3, #wpm_real_image_radius").on("change", function () {
            var image_radius = Number(jQuery('#wpm_real_image_radius').val());
            var background_bg1 = jQuery('#wpm_box_background').val();
            var background_bg2 = jQuery('#wpm_box_background_2').val();
            var background_bg3 = jQuery('#wpm_box_background_3').val();
            let gradient = image_radius ? `linear-gradient(top, ${background_bg1} 0%, ${background_bg2} 48%, ${background_bg3} 99%)` : `linear-gradient(top, #fff 0%, ${background_bg1} 30%, ${background_bg2} 70%, ${background_bg3} 99%)`;
            jQuery(`<style type='text/css'>.wpm_6310_team_style_36 {
                background-color: ${background_bg1}; 
                background: -moz-${gradient};
                background: -webkit-${gradient}; 
                background: ${gradient};
            } </style>`).appendTo(".wpm_6310_tabs_panel_preview");
        });

        jQuery("#wpm_image_hover_background, #wpm_image_hover_background2, #wpm_image_hover_background3, #wpm_real_image_radius").on("change", function () {
            var image_radius = Number(jQuery('#wpm_real_image_radius').val());
            var hover_bg1 = jQuery('#wpm_image_hover_background').val();
            var hover_bg2 = jQuery('#wpm_image_hover_background2').val();
            var hover_bg3 = jQuery('#wpm_image_hover_background3').val();
            let gradient = image_radius ? `linear-gradient(top, ${hover_bg1} 0%, ${hover_bg2} 48%, ${hover_bg3} 99%)` : `linear-gradient(top, #fff 0%, ${hover_bg1} 30%, ${hover_bg2} 70%, ${hover_bg3} 99%)`;

            jQuery(`<style type='text/css'>.wpm_6310_team_style_36:hover { 
                background-color: ${hover_bg1}; 
                background: -moz-${gradient};
                background: -webkit-${gradient}; 
                background: ${gradient};    
            } </style>`).appendTo(".wpm_6310_tabs_panel_preview"); 
        });   


        <?php
        if((isset($allStyle[33]) && ($allStyle[33] == '' || $allStyle[33] == 0)) ){
            echo 'jQuery(".social_act_field").hide();';
        }
        ?>
        jQuery('body').on('click', '#wpm_social_activation', function(){
            if (jQuery(this).prop('checked') == true) {
                jQuery("ul.wpm_6310_team_style_36_social").show();
                jQuery(".social_act_field").show();
            }
            else{
                jQuery("ul.wpm_6310_team_style_36_social").hide();
                jQuery(".social_act_field").hide();
            }
        });
        jQuery("#wpm_item_align").on("change", function () {
            var value = jQuery(this).val() ;
            jQuery("<style type='text/css'> .wpm_6310_tabs_panel_preview .wpm-6310-row { justify-content:" + value + " !important;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
    });
</script>