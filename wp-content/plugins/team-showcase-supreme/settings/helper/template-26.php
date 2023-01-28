<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery("#wpm_image_radius").on("change", function () {
            var value = jQuery(this).val() + "%";
            jQuery("<style type='text/css'>.wpm_6310_team_style_26 { border-radius:" + value + "; -moz-border-radius:" + value + "; -ms-border-radius:" + value + "; -o-border-radius:" + value + "; -webkit-border-radius:" + value + ";} </style>").appendTo(".wpm-preview-box");
        });
        jQuery("#wpm_border_width").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.wpm_6310_team_style_26 { border-width:" + value + ";} </style>").appendTo(".wpm-preview-box");
        });
        jQuery("#wpm_border_color").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.wpm_6310_team_style_26, .wpm_6310_team_style_26:hover .wpm_6310_team_style_26_pic img { border-color:" + value + ";} </style>").appendTo(".wpm-preview-box");
            jQuery("<style type='text/css'>.wpm_6310_team_style_26 .wpm_6310_team_style_26_team_content { border-left: 0.5em solid " + value + ";} </style>").appendTo(".wpm-preview-box");
        });

        jQuery("#wpm_image_hover_background").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.wpm_6310_team_style_26:hover .wpm_6310_team_style_26_team_content{ background:" + value + " !important;} </style>").appendTo(".wpm-preview-box");
        });
        jQuery("#wpm_box_shadow_width, #wpm_box_shadow_blur, #wpm_box_shadow_color").on("change", function () {
            var spread = jQuery("#wpm_box_shadow_width").val() + "px";
            var blur = jQuery("#wpm_box_shadow_blur").val() + "px";
            var color = jQuery("#wpm_box_shadow_color").val().replace(/\+/g, ' ');
            color = color.split(':');
            jQuery("<style type='text/css'> .wpm_6310_team_style_26 { box-shadow: 0 0 " + blur + " " + spread + " " + color + "; -moz-box-shadow: 0 0 " + blur + " " + spread + " " + color + "; -webkit-box-shadow: 0 0 " + blur + " " + spread + " " + color + "; -ms-box-shadow: 0 0 " + blur + " " + spread + " " + color + "; -o-box-shadow: 0 0 " + blur + " " + spread + " " + color + ";} </style>").appendTo(".wpm-preview-box");
        });
        jQuery("#wpm_member_font_size").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.wpm_6310_team_style_26_title { font-size:" + value + ";} </style>").appendTo(".wpm-preview-box");
        });
        jQuery("#wpm_member_font_color").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.wpm_6310_team_style_26_title { color:" + value + ";} </style>").appendTo(".wpm-preview-box");
        });

        jQuery("#wpm_member_font_weight").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.wpm_6310_team_style_26_title { font-weight:" + value + ";} </style>").appendTo(".wpm-preview-box");
        });
        jQuery("#wpm_member_text_transform").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.wpm_6310_team_style_26_title  { text-transform:" + value + ";} </style>").appendTo(".wpm-preview-box");
        });
        jQuery("#wpm_jquery_heading_font").on("change", function () {
            var value = jQuery(this).val().replace(/\+/g, ' ');
            value = value.split(':');
            jQuery("<style type='text/css'>.wpm_6310_team_style_26_title { font-family:" + value + ";} </style>").appendTo(".wpm-preview-box");
        });
        jQuery("#wpm_heading_line_height").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> .wpm_6310_team_style_26_title { line-height:" + value + ";} </style>").appendTo(".wpm-preview-box");
        });
        jQuery("#wpm_designation_font_size").on("change", function () {
            var value = jQuery(this).val();
            var lh = jQuery("#wpm_designation_line_height").val();
            var mt = jQuery("#wpm_designation_margin_top").val();
            var mb = jQuery("#wpm_designation_margin_bottom").val();
            jQuery("<style type='text/css'> .wpm_6310_team_style_26_designation { font-size:" + value + "px;} </style>").appendTo(".wpm-preview-box");
            if (value >= lh) {
                var hoverHeight = Number(value) + Number(mt) + Number(mb);
                jQuery("<style type='text/css'> .wpm_6310_team_style_26:hover .wpm_6310_team_style_26_hover_contents { height:" + hoverHeight + "px;} </style>").appendTo(".wpm-preview-box");
            }
        });
        jQuery("#wpm_designation_font_color").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .wpm_6310_team_style_26_designation { color:" + value + ";} </style>").appendTo(".wpm-preview-box");
        });
        jQuery("#wpm_designation_font_weight").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .wpm_6310_team_style_26_designation{ font-weight:" + value + ";} </style>").appendTo(".wpm-preview-box");
        });
        jQuery("#wpm_designation_text_transform").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .wpm_6310_team_style_26_designation { text-transform:" + value + ";} </style>").appendTo(".wpm-preview-box");
        });
        jQuery("#wpm_jquery_designation_font").on("change", function () {
            var value = jQuery(this).val().replace(/\+/g, ' ');
            value = value.split(':');
            jQuery("<style type='text/css'>.wpm_6310_team_style_26_designation { font-family:" + value + ";} </style>").appendTo(".wpm-preview-box");
        });
        jQuery("#wpm_designation_line_height").on("change", function () {
            var value = jQuery(this).val();
            var fs = jQuery("#wpm_designation_font_size").val();
            var mt = jQuery("#wpm_designation_margin_top").val();
            var mb = jQuery("#wpm_designation_margin_bottom").val();
            jQuery("<style type='text/css'> .wpm_6310_team_style_26_designation { line-height:" + value + "px;} </style>").appendTo(".wpm-preview-box");
            if (value >= fs) {
                var hoverHeight = Number(value) + Number(mt) + Number(mb);
                jQuery("<style type='text/css'> .wpm_6310_team_style_26:hover .wpm_6310_team_style_26_hover_contents { height:" + hoverHeight + "px;} </style>").appendTo(".wpm-preview-box");
            }
        });
        jQuery("#wpm_social_icon_width").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> .wpm_6310_team_style_26 .wpm_6310_team_style_26_social li a { width:" + value + ";} </style>").appendTo(".wpm-preview-box");
        });
        jQuery("#wpm_social_icon_height").on("change", function () {
            var value = Number(jQuery(this).val());
            var bw = Number(jQuery("#wpm_social_border_width").val());
            var mt = Number(jQuery("#wpm_social_margin_top").val());
            var mb = Number(jQuery("#wpm_social_margin_bottom").val());
            jQuery("<style type='text/css'> .wpm_6310_team_style_26 .wpm_6310_team_style_26_social li a { height:" + value + "px; line-height:" + value + "px;} </style>").appendTo(".wpm-preview-box");
            var tcPadBottom = value + 2*bw + mt + mb;
            jQuery("<style type='text/css'> .wpm_6310_team_style_26:hover .wpm_6310_team_style_26_team_content { padding-bottom:" + tcPadBottom + "px;} </style>").appendTo(".wpm-preview-box");
        });
        jQuery("#wpm_social_border_width").on("change", function () {
            var value = Number(jQuery(this).val());
            var ih = Number(jQuery("#wpm_social_icon_height").val());
            var mt = Number(jQuery("#wpm_social_margin_top").val());
            var mb = Number(jQuery("#wpm_social_margin_bottom").val());
            jQuery("<style type='text/css'>.wpm_6310_team_style_26 .wpm_6310_team_style_26_social li a { border-width:" + value + "px !important;} </style>").appendTo(".wpm-preview-box");
            var tcPadBottom = 2*value + ih + mt + mb;
            jQuery("<style type='text/css'> .wpm_6310_team_style_26:hover .wpm_6310_team_style_26_team_content { padding-bottom:" + tcPadBottom + "px;} </style>").appendTo(".wpm-preview-box");
        });
        jQuery("#wpm_social_border_color").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.wpm_6310_team_style_26 .wpm_6310_team_style_26_social li a { border-color:" + value + ";} </style>").appendTo(".wpm-preview-box");
        });
        jQuery("#wpm_social_border_radius").on("change", function () {
            var value = jQuery(this).val() + "%";
            jQuery("<style type='text/css'> .wpm_6310_team_style_26 .wpm_6310_team_style_26_social li a { border-radius:" + value + "; -moz-border-radius:" + value + "; -webkit-border-radius:" + value + "; -o-border-radius:" + value + "; -ms-border-radius:" + value + "; } </style>").appendTo(".wpm-preview-box");
        });
        jQuery("#wpm_member_margin_top").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.wpm_6310_team_style_26:hover .wpm_6310_team_style_26_title { margin-top:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_member_margin_bottom").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.wpm_6310_team_style_26:hover .wpm_6310_team_style_26_title { margin-bottom:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_designation_margin_top").on("change", function () {
            var value = Number(jQuery(this).val());
            var fs = Number(jQuery("#wpm_designation_font_size").val());
            var lh = Number(jQuery("#wpm_designation_line_height").val());
            var mb = Number(jQuery("#wpm_designation_margin_bottom").val());
            jQuery("<style type='text/css'>.wpm_6310_team_style_26:hover .wpm_6310_team_style_26_designation { margin-top:" + value + "px;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
            var hoverHeight = ((fs > lh) ? fs + value + mb : lh + value + mb);
            jQuery("<style type='text/css'> .wpm_6310_team_style_26:hover .wpm_6310_team_style_26_hover_contents { height:" + hoverHeight + "px;} </style>").appendTo(".wpm-preview-box");
        });
        jQuery("#wpm_designation_margin_bottom").on("change", function () {
            var value = Number(jQuery(this).val());
            var fs = Number(jQuery("#wpm_designation_font_size").val());
            var lh = Number(jQuery("#wpm_designation_line_height").val());
            var mt = Number(jQuery("#wpm_designation_margin_top").val());
            jQuery("<style type='text/css'>.wpm_6310_team_style_26 .wpm_6310_team_style_26_designation { margin-bottom:" + value + "px;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
            var hoverHeight = ((fs > lh) ? fs + mt + value : lh + mt + value);
            jQuery("<style type='text/css'> .wpm_6310_team_style_26:hover .wpm_6310_team_style_26_hover_contents { height:" + hoverHeight + "px;} </style>").appendTo(".wpm-preview-box");
        });
        jQuery("#wpm_social_margin_top").on("change", function () {
            var value = Number(jQuery(this).val());
            var ih = Number(jQuery("#wpm_social_icon_height").val());
            var bw = Number(jQuery("#wpm_social_border_width").val());
            var mb = Number(jQuery("#wpm_social_margin_bottom").val());
            jQuery("<style type='text/css'>.wpm_6310_team_style_26 ul.wpm_6310_team_style_26_social { margin-top:" + value + "px !important;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
            var tcPadBottom = ih + 2*bw + value + mb;
            jQuery("<style type='text/css'> .wpm_6310_team_style_26:hover .wpm_6310_team_style_26_team_content { padding-bottom:" + tcPadBottom + "px;} </style>").appendTo(".wpm-preview-box");
        });
        jQuery("#wpm_social_margin_bottom").on("change", function () {
            var value = Number(jQuery(this).val());
            var ih = Number(jQuery("#wpm_social_icon_height").val());
            var bw = Number(jQuery("#wpm_social_border_width").val());
            var mt = Number(jQuery("#wpm_social_margin_top").val());
            jQuery("<style type='text/css'>.wpm_6310_team_style_26 ul.wpm_6310_team_style_26_social { margin-bottom:" + value + "px !important;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
            var tcPadBottom = ih + 2*bw + mt + value;
            jQuery("<style type='text/css'> .wpm_6310_team_style_26:hover .wpm_6310_team_style_26_team_content { padding-bottom:" + tcPadBottom + "px;} </style>").appendTo(".wpm-preview-box");
        });
        jQuery("#wpm_content_background").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.wpm_6310_team_style_26_team_content { background:" + value + " !important;} </style>").appendTo(".wpm-preview-box");
        });
        jQuery("#wpm_member_font_hover_color").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.wpm_6310_team_style_26:hover .wpm_6310_team_style_26_title { color:" + value + " !important;} </style>").appendTo(".wpm-preview-box");
        });
        <?php
        if((isset($allStyle[33]) && ($allStyle[33] == '' || $allStyle[33] == 0)) ){
            echo 'jQuery(".social_act_field").hide();';
        }
        ?>
        jQuery('body').on('click', '#wpm_social_activation', function(){
            if (jQuery(this).prop('checked') == true) {
                jQuery("ul.wpm_6310_team_style_26_social").show();
                jQuery(".social_act_field").show();
            }
            else{
                jQuery("ul.wpm_6310_team_style_26_social").hide();
                jQuery(".social_act_field").hide();
            }
        });
        jQuery("#wpm_item_align").on("change", function () {
            var value = jQuery(this).val() ;
            jQuery("<style type='text/css'> .wpm_6310_tabs_panel_preview .wpm-6310-row { justify-content:" + value + " !important;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
    });
</script>
