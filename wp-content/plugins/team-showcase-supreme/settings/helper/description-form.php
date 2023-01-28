<?php
  if(isset($allSlider[71])){
    $defaultDescription = false;
  }
?>

<div id="tab-7">
<div class="row">
  <div class="wpm-col-6">
    <table class="table table-responsive wpm_6310_admin_table">
      <tr>
        <td>
          <b>Activate Description</b>
          
        </td>
        <td>
          <?php
          if(isset($defaultDescription) && $defaultDescription){
          ?>
            <input type="hidden" name="description_activation" id="description_activation" value="1" />
            <button type="button" value="1" class="wpm-btn-multi activate-description active">Yes</button>
            <button type="button" value="0" class="wpm-btn-multi activate-description">No</button>
          <?php
          }else{
          ?>
            <input type="hidden" name="description_activation" id="description_activation" value="<?php echo isset($allSlider[71]) ? $allSlider[71] : 0; ?>" />
          <button type="button" value="1" class="wpm-btn-multi activate-description <?php if (isset($allSlider[71]) && $allSlider[71] == 1) echo " active" ?>">Yes</button>
          <button type="button" value="0" class="wpm-btn-multi activate-description <?php if (!isset($allSlider[71]) || $allSlider[71] == 0) echo " active" ?>">No</button>
          <?php 
          }
          ?>
          
        </td>
      </tr>
      <tr class="description_act_field">
        <td>
          <b>Number of Words</b>
          <div class="wpm-6310-pro">*Preview-on-change  not available</div>
          <div class="wpm-6310-pro">To show full description, use -1</div>
        </td>
        <td>
          <input type="number" min="-1" name="description_number_of_words" id="description_number_of_words" value="<?php echo (isset($allSlider[72]) && $allSlider[72] !== '')?$allSlider[72]:$numberOfWords ?>"
            class="wpm-form-input" step="1" id="" />
        </td>
      </tr>
      <tr class="description_act_field">
        <td><b>Font Size</b>
        
        </td>
        <td>
          <input type="number" min="0" name="description_font_size" value="<?php echo (isset($allSlider[73]) && $allSlider[73] !== '')?$allSlider[73]:14 ?>"
            class="wpm-form-input" step="1" id="description_font_size" />
        </td>
      </tr>
      <tr class="description_act_field">
        <td><b>Line Height</b>
        
        </td>
        <td>
          <input name="description_line_height" id="description_line_height" type="number" min="0"
            value="<?php echo (isset($allSlider[74]) && $allSlider[74] !== '')?$allSlider[74]:(isset($defaultDescription) && $defaultDescription && isset($defaultDescriptionLineHeight) ? $defaultDescriptionLineHeight : '18') ?>" class="wpm-form-input" />
        </td>
      </tr>
      <tr class="description_act_field"> 
        <td><b>Font Color</b>
        
        </td>
        <td>
          <input type="text" name="description_font_color" id="description_font_color"
            class="wpm-form-input wpm_6310_color_picker" data-format="rgb"
            value="<?php echo (isset($allSlider[75]) && $allSlider[75] !== '')?$allSlider[75]:(isset($defaultDescription) && $defaultDescription && isset($defaultDescriptionColor)? $defaultDescriptionColor:'rgb(0, 0, 0)') ?>">
        </td>
      </tr>
      <tr class="description_act_field">
        <td><b>Font Hover Color</b>
        
        </td>
        <td>
          <input type="text" name="description_font_hover_color" id="description_font_hover_color"
            class="wpm-form-input wpm_6310_color_picker" data-format="rgb"
            value="<?php echo (isset($allSlider[76]) && $allSlider[76] !== '')?$allSlider[76]:(isset($defaultDescription) && $defaultDescription && isset($defaultDescriptionHoverColor)? $defaultDescriptionHoverColor:'rgb(0, 0, 0)') ?>">
        </td>
      </tr>
      
     
    </table>
  </div>
  <div class="wpm-col-6">
    <table class="table table-responsive wpm_6310_admin_table">
      <tr class="description_act_field">
        <td><b>Font Family</b>
        
        </td>
        <td>
          <input name="description_font_family" id="description_font_family" type="text"
            value="<?php echo (isset($allSlider[77]) && $allSlider[77] !== '')?$allSlider[77]:'Amaranth' ?>" />
        </td>
      </tr>  
      <tr class="description_act_field">
        <td><b>Font Weight</b>
        
        </td>
        <td>
          <select name="description_font_weight" class="wpm-form-input" id="description_font_weight">
            <option value="100" <?php if (isset($allSlider[78]) && $allSlider[78] == '100') echo " selected=''" ?>>100</option>
            <option value="200" <?php if (isset($allSlider[78]) && $allSlider[78] == '200') echo " selected=''" ?>>200</option>
            <option value="300" <?php if (isset($allSlider[78]) && $allSlider[78] == '300') echo " selected=''" ?>>300</option>
            <option value="400" <?php if (isset($allSlider[78]) && $allSlider[78] == '400') echo " selected=''" ?>>400</option>
            <option value="500" <?php if (isset($allSlider[78]) && $allSlider[78] == '500') echo " selected=''" ?>>500</option>
            <option value="600" <?php if (isset($allSlider[78]) && $allSlider[78] == '600') echo " selected=''" ?>>600</option>
            <option value="700" <?php if (isset($allSlider[78]) && $allSlider[78] == '700') echo " selected=''" ?>>700</option>
            <option value="800" <?php if (isset($allSlider[78]) && $allSlider[78] == '800') echo " selected=''" ?>>800</option>
            <option value="900" <?php if (isset($allSlider[78]) && $allSlider[78] == '900') echo " selected=''" ?>>900</option>
            <option value="normal" <?php if (isset($allSlider[78]) && $allSlider[78] == 'normal') echo " selected=''" ?>>Normal
            </option>
            <option value="bold" <?php if (isset($allSlider[78]) && $allSlider[78] == 'bold') echo " selected=''" ?>>Bold</option>
            <option value="lighter" <?php if (isset($allSlider[78]) && $allSlider[78] == 'lighter') echo " selected=''" ?>>Lighter
            </option>
            <option value="initial" <?php if (isset($allSlider[78]) && $allSlider[78] == 'initial') echo " selected=''" ?>>Initial
            </option>
          </select>
        </td>
      </tr>
      <tr class="description_act_field">
        <td><b>Text Transform</b>
        
        </td>
        <td>
          <select name="description_text_transform" class="wpm-form-input" id="description_text_transform">
            <option value="capitalize" <?php if (isset($allSlider[79]) && $allSlider[79] == 'capitalize') echo " selected=''" ?>>
              Capitalize</option>
            <option value="uppercase" <?php if (isset($allSlider[79]) && $allSlider[79] == 'uppercase') echo " selected=''" ?>>
              Uppercase</option>
            <option value="lowercase" <?php if (isset($allSlider[79]) && $allSlider[79] == 'lowercase') echo " selected=''" ?>>
              Lowercase</option>
            <option value="none" <?php if (isset($allSlider[79]) && $allSlider[79] == 'none') echo " selected=''" ?>>As Input</option>
          </select>
        </td>
      </tr>
      <tr class="description_act_field">
        <td><b>Text Align</b>
        
        </td>
        <td>
          <select name="description_text_align" class="wpm-form-input" id="description_text_align">
            <option value="center" <?php if (isset($allSlider[80]) && $allSlider[80] == 'center') echo " selected=''" ?>>
              Center</option>
            <option value="left" <?php if (isset($allSlider[80]) && $allSlider[80] == 'left') echo " selected=''" ?>>Left
            </option>
            <option value="right" <?php if (isset($allSlider[80]) && $allSlider[80] == 'right') echo " selected=''" ?>>Right
            </option>
          </select>
        </td>
      </tr>
      <tr class="description_act_field">
        <td><b>Margin Top</b>
        
        </td>
        <td>
          <input name="description_margin_top" id="description_margin_top" type="number" min="0" value="<?php echo (isset($allSlider[81]) && $allSlider[81] !== '')?($allSlider[81]):(isset($defaultDescription) && $defaultDescription && isset($defaultDescriptionMarginTop) ? $defaultDescriptionMarginTop : '0') ?>" class="wpm-form-input" />
        </td>
      </tr>
      <tr class="description_act_field">
        <td><b>Margin Bottom</b>
        
        </td>
        <td>
          <input name="description_margin_bottom" id="description_margin_bottom" type="number" min="0"
            value="<?php echo (isset($allSlider[82]) && $allSlider[82] !== '')?($allSlider[82]):(isset($defaultDescription) && $defaultDescription && isset($defaultDescriptionMarginBottom) ? $defaultDescriptionMarginBottom : '15') ?>" class="wpm-form-input" />
        </td>
      </tr>
    </table>
  </div>
</div>
</div>
<style>
  .wpm_6310_team_style_<?php echo $styleId ?>_description {
    float: left;
    width: 100%;
    display:  <?php echo (isset($allSlider[71]) && $allSlider[71])?'block': (isset($defaultDescription) && $defaultDescription ? 'block':'none') ?>;
    font-size: <?php echo (isset($allSlider[73]) && $allSlider[73] !== '')?$allSlider[73]:14 ?>px;
    line-height: <?php echo (isset($allSlider[74]) && $allSlider[74] !== '')?$allSlider[74]:(isset($defaultDescription) && $defaultDescription && isset($defaultDescriptionLineHeight) ? $defaultDescriptionLineHeight : 18) ?>px;
    color: <?php echo (isset($allSlider[75]) && $allSlider[75] !== '')?$allSlider[75]:(isset($defaultDescription) && $defaultDescription && isset($defaultDescriptionColor) ? $defaultDescriptionColor:'black') ?>;
    font-family: <?php echo isset($allSlider[77])?str_replace("+", " ", $allSlider[77]):'sans-serif' ?>;
    font-weight: <?php echo (isset($allSlider[78]) && $allSlider[78] !== '')?$allSlider[78]:100 ?>;
    text-transform: <?php echo (isset($allSlider[79]) && $allSlider[79] !== '')?$allSlider[79]:'none' ?>;
    text-align: <?php echo (isset($allSlider[80]) && $allSlider[80] !== '')?$allSlider[80]:(isset($defaultDescription) && $defaultDescription && isset($defaultDescriptionTextAlign) ? $defaultDescriptionTextAlign : 'center') ?>;
    margin-top: <?php echo (isset($allSlider[81]) && $allSlider[81] !== '')?$allSlider[81]:(isset($defaultDescription) && $defaultDescription && isset($defaultDescriptionMarginTop) ? $defaultDescriptionMarginTop : '0') ?>px;
    margin-bottom: <?php echo (isset($allSlider[82]) && $allSlider[82] !== '')?$allSlider[82]:(isset($defaultDescription) && $defaultDescription && isset($defaultDescriptionMarginBottom) ? $defaultDescriptionMarginBottom : '15') ?>px;
  }
  .wpm_6310_team_style_<?php echo $template_id ?>:hover .wpm_6310_team_style_<?php echo $styleId ?>_description{
    color: <?php echo isset($allSlider[76])?$allSlider[76]:(isset($defaultDescription) && $defaultDescription && isset($defaultDescriptionHoverColor)? $defaultDescriptionHoverColor:'black') ?>;
  }
  .wpm_6310_team_style_<?php echo $styleId ?>_border {
    float: left;
    width: 100%;
    height: 1px;
    background-color: <?php echo $allStyle[12] ?>;
  }
</style>

<script>
  jQuery(document).ready(function(){
    <?php
      if(!(isset($allSlider[71]) && $allSlider[71])) {
        echo "jQuery('.description_act_field').hide();";
      }
    ?>
    jQuery('body').on("click", ".activate-description", function() {
      let val = parseInt(jQuery(this).val());
      jQuery(".activate-description").removeClass("active");
      jQuery(this).addClass("active");
      jQuery("#description_activation").val(val);
      if (val) {
        jQuery(".description_act_field").show();
        jQuery("<style type='text/css'>.wpm_6310_team_style_<?php echo $styleId ?>_description {display:block !important;} </style>").appendTo(".wpm-preview-box");
      }
      else{
        jQuery(".description_act_field").hide();
        jQuery("<style type='text/css'>.wpm_6310_team_style_<?php echo $styleId ?>_description {display:none !important;} </style>").appendTo(".wpm-preview-box");
      }
    });

    jQuery("#description_font_family").on("change", function () {
        var value = jQuery(this).val().replace(/\+/g, ' ');
        value = value.split(':');
        jQuery("<style type='text/css'>.wpm_6310_team_style_<?php echo $styleId ?>_description { font-family:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#description_font_size").on("change", function () {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.wpm_6310_team_style_<?php echo $styleId ?>_description { font-size:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#description_line_height").on("change", function () {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.wpm_6310_team_style_<?php echo $styleId ?>_description { line-height:" + value + ";min-height:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#description_margin_top").on("change", function () {
        var value = jQuery(this).val() ;
        jQuery("<style type='text/css'>.wpm_6310_team_style_<?php echo $styleId ?>_description{ margin-top:" + value + "px;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#description_margin_bottom").on("change", function () {
        var value = jQuery(this).val() ;
        jQuery("<style type='text/css'>.wpm_6310_team_style_<?php echo $styleId ?>_description{ margin-bottom:" + value + "px;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#description_text_align").on("change", function () {
        var value = jQuery(this).val() ;
        jQuery("<style type='text/css'> .wpm_6310_team_style_<?php echo $styleId ?>_description{ text-align:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#description_font_color").on("change", function () {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.wpm_6310_team_style_<?php echo $styleId ?>_description{ color:" + value + " ;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#description_font_hover_color").on("change", function () {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.wpm_6310_team_style_<?php echo $template_id ?>:hover .wpm_6310_team_style_<?php echo $styleId ?>_description{ color:" + value + " ;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#description_font_weight").on("change", function () {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.wpm_6310_team_style_<?php echo $styleId ?>_description { font-weight:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#description_text_transform").on("change", function () {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.wpm_6310_team_style_<?php echo $styleId ?>_description{ text-transform:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
  });
</script>
