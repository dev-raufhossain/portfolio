<div id="tab-8">
<div class="row">
  <div class="wpm-col-6">
    <table class="table table-responsive wpm_6310_admin_table">
    <tr>
        <td>
          <b>Activate contact</b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
        </td>
        <td>
          <input type="hidden" name="contact_activation" id="contact_activation" value="<?php echo isset($allSlider[21]) ? $allSlider[21] : 0 ?>" />
          <button type="button" value="1" class="wpm-btn-multi activate-contact <?php if (isset($allSlider[21]) && $allSlider[21] == 1) echo " active" ?>">Yes</button>
          <button type="button" value="0" class="wpm-btn-multi activate-contact <?php if (!isset($allSlider[21]) || $allSlider[21] == 0) echo " active" ?>">No</button>
        </td>
      </tr>
      <tr class="contact_act_field">
        <td><b>Font Family</b>
        <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
        </td>
        <td >
          <input name="contact_font_family" id="contact_font_family" type="text"
            value="<?php echo isset($allSlider[22])?$allSlider[22]:'Amaranth' ?>" />
        </td>
      </tr>
      <tr class="contact_act_field">
        <td><b>Font Size</b>
        <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
        </td>
        <td>
          <input type="number" min="0" name="contact_font_size" value="<?php echo isset($allSlider[23])?$allSlider[23]:14 ?>"
            class="wpm-form-input" step="1" id="contact_font_size" />
        </td>
      </tr>
      <tr class="contact_act_field">
        <td><b>Line Height</b>
        <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
        </td>
        <td>
          <input name="contact_line_height" id="contact_line_height" type="number" min="0"
            value="<?php echo isset($allSlider[24])?$allSlider[24]:'20' ?>" class="wpm-form-input" />
        </td>
      </tr>
      <tr class="contact_act_field">
        <td><b>Margin Top</b>
        <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
        </td>
        <td>
          <input name="contact_margin_top" id="contact_margin_top" type="number" min="0" value="<?php echo isset($allSlider[25])?($allSlider[25]):'0' ?>" class="wpm-form-input" />
        </td>
      </tr>
      <tr class="contact_act_field">
        <td><b>Margin Bottom</b>
        <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
        </td>
        <td>
          <input name="contact_margin_bottom" id="contact_margin_bottom" type="number" min="0"
            value="<?php echo isset($allSlider[26])?($allSlider[26]):'15' ?>" class="wpm-form-input" />
        </td>
      </tr>
      <tr class="contact_act_field">
        <td><b>Text Align</b>
        <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
        </td>
        <td>
          <select name="contact_text_align" class="wpm-form-input" id="contact_text_align">
            <option value="center" <?php if (isset($allSlider[27]) && $allSlider[27] == 'center') echo " selected=''" ?>>
              Center</option>
            <option value="left" <?php if (isset($allSlider[27]) && $allSlider[27] == 'left') echo " selected=''" ?>>Left
            </option>
            <option value="right" <?php if (isset($allSlider[27]) && $allSlider[27] == 'right') echo " selected=''" ?>>Right
            </option>
          </select>
        </td>
      </tr>
    </table>
  </div>
  <div class="wpm-col-6">
    <table class="table table-responsive wpm_6310_admin_table">
      <tr class="contact_act_field"> 
        <td><b>Icon/Label Font Color</b>
        <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
        </td>
        <td>
          <input type="text" name="contact_label_font_color" id="contact_label_font_color"
            class="wpm-form-input wpm_6310_color_picker" data-format="rgb"
            value="<?php echo isset($allSlider[28])?$allSlider[28]:'rgb(0, 0, 0)' ?>">
        </td>
      </tr>
      <tr class="contact_act_field">
        <td><b>Icon/Label Font Hover Color</b>
        <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
        </td>
        <td>
          <input type="text" name="contact_label_font_hover_color" id="contact_label_font_hover_color"
            class="wpm-form-input wpm_6310_color_picker" data-format="rgb"
            value="<?php echo isset($allSlider[29])?$allSlider[29]:'rgb(0, 0, 0)' ?>">
        </td>
      </tr>
      <tr class="contact_act_field"> 
        <td><b>Content Font Color</b>
        <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
        </td>
        <td>
          <input type="text" name="contact_content_font_color" id="contact_content_font_color"
            class="wpm-form-input wpm_6310_color_picker" data-format="rgb"
            value="<?php echo isset($allSlider[30])?$allSlider[30]:'rgb(0, 0, 0)' ?>">
        </td>
      </tr>
      <tr class="contact_act_field">
        <td><b>Content Font Hover Color</b>
        <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
        </td>
        <td>
          <input type="text" name="contact_content_font_hover_color" id="contact_content_font_hover_color"
            class="wpm-form-input wpm_6310_color_picker" data-format="rgb"
            value="<?php echo isset($allSlider[31])?$allSlider[31]:'rgb(0, 0, 0)' ?>">
        </td>
      </tr>
      <tr class="contact_act_field">
        <td><b>Icon/Label Font Weight</b>
        <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
        </td>
        <td>
          <select name="contact_label_font_weight" class="wpm-form-input" id="contact_label_font_weight">
            <option value="100" <?php if (isset($allSlider[32]) && $allSlider[32] == '100') echo " selected=''" ?>>100</option>
            <option value="200" <?php if (isset($allSlider[32]) && $allSlider[32] == '200') echo " selected=''" ?>>200</option>
            <option value="300" <?php if (isset($allSlider[32]) && $allSlider[32] == '300') echo " selected=''" ?>>300</option>
            <option value="400" <?php if (isset($allSlider[32]) && $allSlider[32] == '400') echo " selected=''" ?>>400</option>
            <option value="500" <?php if (isset($allSlider[32]) && $allSlider[32] == '500') echo " selected=''" ?>>500</option>
            <option value="600" <?php if (isset($allSlider[32]) && $allSlider[32] == '600') echo " selected=''" ?>>600</option>
            <option value="700" <?php if (isset($allSlider[32]) && $allSlider[32] == '700') echo " selected=''" ?>>700</option>
            <option value="800" <?php if (isset($allSlider[32]) && $allSlider[32] == '800') echo " selected=''" ?>>800</option>
            <option value="900" <?php if (isset($allSlider[32]) && $allSlider[32] == '900') echo " selected=''" ?>>900</option>
            <option value="normal" <?php if (isset($allSlider[32]) && $allSlider[32] == 'normal') echo " selected=''" ?>>Normal
            </option>
            <option value="bold" <?php if (isset($allSlider[32]) && $allSlider[32] == 'bold') echo " selected=''" ?>>Bold</option>
            <option value="lighter" <?php if (isset($allSlider[32]) && $allSlider[32] == 'lighter') echo " selected=''" ?>>Lighter
            </option>
            <option value="initial" <?php if (isset($allSlider[32]) && $allSlider[32] == 'initial') echo " selected=''" ?>>Initial
            </option>
          </select>
        </td>
      </tr>
      <tr class="contact_act_field">
        <td><b>Content Font Weight</b>
        <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
        </td>
        <td>
          <select name="contact_content_font_weight" class="wpm-form-input" id="contact_content_font_weight">
            <option value="100" <?php if (isset($allSlider[33]) && $allSlider[33] == '100') echo " selected=''" ?>>100</option>
            <option value="200" <?php if (isset($allSlider[33]) && $allSlider[33] == '200') echo " selected=''" ?>>200</option>
            <option value="300" <?php if (isset($allSlider[33]) && $allSlider[33] == '300') echo " selected=''" ?>>300</option>
            <option value="400" <?php if (isset($allSlider[33]) && $allSlider[33] == '400') echo " selected=''" ?>>400</option>
            <option value="500" <?php if (isset($allSlider[33]) && $allSlider[33] == '500') echo " selected=''" ?>>500</option>
            <option value="600" <?php if (isset($allSlider[33]) && $allSlider[33] == '600') echo " selected=''" ?>>600</option>
            <option value="700" <?php if (isset($allSlider[33]) && $allSlider[33] == '700') echo " selected=''" ?>>700</option>
            <option value="800" <?php if (isset($allSlider[33]) && $allSlider[33] == '800') echo " selected=''" ?>>800</option>
            <option value="900" <?php if (isset($allSlider[33]) && $allSlider[33] == '900') echo " selected=''" ?>>900</option>
            <option value="normal" <?php if (isset($allSlider[33]) && $allSlider[33] == 'normal') echo " selected=''" ?>>Normal
            </option>
            <option value="bold" <?php if (isset($allSlider[33]) && $allSlider[33] == 'bold') echo " selected=''" ?>>Bold</option>
            <option value="lighter" <?php if (isset($allSlider[33]) && $allSlider[33] == 'lighter') echo " selected=''" ?>>Lighter
            </option>
            <option value="initial" <?php if (isset($allSlider[33]) && $allSlider[33] == 'initial') echo " selected=''" ?>>Initial
            </option>
          </select>
        </td>
      </tr>
      <tr class="contact_act_field">
        <td><b>Icon/Label Text Transform</b>
        <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
        </td>
        <td>
          <select name="contact_label_text_transform" class="wpm-form-input" id="contact_label_text_transform">
            <option value="capitalize" <?php if (isset($allSlider[34]) && $allSlider[34] == 'capitalize') echo " selected=''" ?>>
              Capitalize</option>
            <option value="uppercase" <?php if (isset($allSlider[34]) && $allSlider[34] == 'uppercase') echo " selected=''" ?>>
              Uppercase</option>
            <option value="lowercase" <?php if (isset($allSlider[34]) && $allSlider[34] == 'lowercase') echo " selected=''" ?>>
              Lowercase</option>
            <option value="none" <?php if (isset($allSlider[34]) && $allSlider[34] == 'none') echo " selected=''" ?>>As Input</option>
          </select>
        </td>
      </tr>
      <tr class="contact_act_field">
        <td><b>Content Text Transform</b>
        <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
        </td>
        <td>
          <select name="contact_content_text_transform" class="wpm-form-input" id="contact_content_text_transform">
            <option value="capitalize" <?php if (isset($allSlider[35]) && $allSlider[35] == 'capitalize') echo " selected=''" ?>>
              Capitalize</option>
            <option value="uppercase" <?php if (isset($allSlider[35]) && $allSlider[35] == 'uppercase') echo " selected=''" ?>>
              Uppercase</option>
            <option value="lowercase" <?php if (isset($allSlider[35]) && $allSlider[35] == 'lowercase') echo " selected=''" ?>>
              Lowercase</option>
            <option value="none" <?php if (isset($allSlider[35]) && $allSlider[35] == 'none') echo " selected=''" ?>>As Input</option>
          </select>
        </td>
      </tr>
    </table>
  </div>
</div>
</div>
<style>
  .wpm-custom-fields-<?php echo $styleId ?>{
    float: left;
    width: 100%;
    margin-top: <?php echo (isset($allSlider[25]) && $allSlider[25] !== '')?$allSlider[25]:'0' ?>px;
    margin-bottom: <?php echo (isset($allSlider[26]) && $allSlider[26] !== '')?$allSlider[26]:'15' ?>px; 
    display: <?php echo (isset($allSlider[21]) && $allSlider[21])?'block':'none' ?>
  }
  .wpm-custom-fields-list-<?php echo $styleId ?>{
    font-size: <?php echo isset($allSlider[23])?$allSlider[23]:'14' ?>px;
    text-align:  <?php echo isset($allSlider[27])?$allSlider[27]:'center' ?> !important;
    font-family: <?php echo isset($allSlider[22])?str_replace("+", " ", $allSlider[22]):'Amaranth' ?>;
    line-height: <?php echo isset($allSlider[24])?$allSlider[24]:20 ?>px;
    min-height: <?php echo isset($allSlider[24])?$allSlider[24]:20 ?>px;
    float: left;
    width: 100%;
    -moz-transition-duration: 0.4s;
    -o-transition-duration: 0.4s;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
  }
  .wpm-custom-fields-list-label-<?php echo $styleId ?>{
    color: <?php echo isset($allSlider[28])?$allSlider[28]:'rgb(0, 0, 0)' ?>;
    font-weight: <?php echo (isset($allSlider[32]) && $allSlider[32] !== '')?$allSlider[32]:'300' ?>;
    text-transform: <?php echo isset($allSlider[34])?$allSlider[34]:'none'  ?>;
    display: inline-block;
  }
  .wpm_6310_team_style_<?php echo $template_id ?>:hover .wpm-custom-fields-list-label-<?php echo $styleId ?> {
    color: <?php echo isset($allSlider[29])?$allSlider[29]:'rgb(0, 0, 0)' ?>;
  }
  .wpm-custom-fields-list-content-<?php echo $styleId ?>{
    color: <?php echo isset($allSlider[30])?$allSlider[30]:'rgb(0, 0, 0)' ?>;
    font-weight: <?php echo (isset($allSlider[33]) && $allSlider[33] !== '')?$allSlider[33]:'300' ?>;
    text-transform: <?php echo isset($allSlider[35])?$allSlider[35]:'none'  ?>;
    display: inline-block;
    word-break: break-all;
  }
  .wpm_6310_team_style_<?php echo $template_id ?>:hover .wpm-custom-fields-list-content-<?php echo $styleId ?> {
    color: <?php echo isset($allSlider[31])?$allSlider[31]:'rgb(0, 0, 0)' ?>;
  }

  /* This CSS is for POPUP */
  .wpm-custom-fields-list{
    text-align:  left;
    font-family: 'Amaranth';
    float: left;
    width: 100%;
    -moz-transition-duration: 0.4s;
    -o-transition-duration: 0.4s;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
  }
  .wpm-custom-fields-list-label{
    color: rgb(0, 100, 0);
    font-weight: 300;
    display: inline-block;
    font-size: 18px;
    line-height: 20px;
    min-height: 24px;
  }
  .wpm-custom-fields-list-content{
    color: rgb(0, 0, 0);
    font-weight: 300;
    display: inline-block;
    font-size: 14px;
    line-height: 20px;
    min-height: 24px;
  }
  .wpm-custom-fields-list:hover .wpm-custom-fields-list-label{
    color: black;
  }
  .wpm-custom-fields-list:hover .wpm-custom-fields-list-content{
    color: rgb(0, 100, 0);
  }
</style>

<script>
  jQuery(document).ready(function(){
    <?php
      if(!(isset($allSlider[21]) && $allSlider[21])) {
        echo "jQuery('.contact_act_field').hide();";
      }
    ?>
    jQuery('body').on("click", ".activate-contact", function() {
      let val = parseInt(jQuery(this).val());
      jQuery(".activate-contact").removeClass("active");
      jQuery(this).addClass("active");
      jQuery("#contact_activation").val(val);
      if (val) {
        jQuery(".contact_act_field").show();
        jQuery("<style type='text/css'>.wpm-custom-fields-<?php echo $styleId ?> {display:block !important;} </style>").appendTo(".wpm-preview-box");
      }
      else{
        jQuery(".contact_act_field").hide();
        jQuery("<style type='text/css'>.wpm-custom-fields-<?php echo $styleId ?> {display:none !important;} </style>").appendTo(".wpm-preview-box");
      }
    });

    jQuery("#contact_font_family").on("change", function () {
        var value = jQuery(this).val().replace(/\+/g, ' ');
        value = value.split(':');
        jQuery("<style type='text/css'>.wpm-custom-fields-list-<?php echo $styleId ?>{ font-family:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#contact_font_size").on("change", function () {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.wpm-custom-fields-list-<?php echo $styleId ?> { font-size:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#contact_line_height").on("change", function () {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.wpm-custom-fields-list-<?php echo $styleId ?>{ line-height:" + value + ";min-height:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#contact_margin_top").on("change", function () {
        var value = jQuery(this).val() ;
        jQuery("<style type='text/css'>.wpm-custom-fields-<?php echo $styleId ?>{ margin-top:" + value + "px;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#contact_margin_bottom").on("change", function () {
        var value = jQuery(this).val() ;
        jQuery("<style type='text/css'>.wpm-custom-fields-<?php echo $styleId ?>{ margin-bottom:" + value + "px;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#contact_text_align").on("change", function () {
        var value = jQuery(this).val() ;
        jQuery("<style type='text/css'> .wpm-custom-fields-list-<?php echo $styleId ?>{ text-align:" + value + " !important;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#contact_label_font_color").on("change", function () {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.wpm-custom-fields-list-label-<?php echo $styleId ?>{ color:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#contact_label_font_hover_color").on("change", function () {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.wpm_6310_team_style_<?php echo $template_id ?>:hover .wpm-custom-fields-list-label-<?php echo $styleId ?>{ color:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#contact_content_font_color").on("change", function () {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.wpm-custom-fields-list-content-<?php echo $styleId ?>{ color:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#contact_content_font_hover_color").on("change", function () {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.wpm_6310_team_style_<?php echo $template_id ?>:hover .wpm-custom-fields-list-content-<?php echo $styleId ?>{ color:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#contact_label_font_weight").on("change", function () {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.wpm-custom-fields-list-label-<?php echo $styleId ?> { font-weight:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#contact_content_font_weight").on("change", function () {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.wpm-custom-fields-list-content-<?php echo $styleId ?> { font-weight:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#contact_label_text_transform").on("change", function () {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.wpm-custom-fields-list-label-<?php echo $styleId ?>{ text-transform:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#contact_content_text_transform").on("change", function () {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.wpm-custom-fields-list-content-<?php echo $styleId ?>{ text-transform:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
  });
</script>
