<div id="tab-10">
  <div class="row wpm_6310_padding_15_px">
    <div class="wpm-col-6">
      <table class="table table-responsive wpm_6310_admin_table">
        <tr>
          <td width="45%">
            <b>Activate Category</b> <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span><br />
            <small style="color:#2196F3">(Available only in non-slider)</small>
          </td>
          <td>
            <input type="hidden" name="category_activation" id="category_activation" value="<?php echo isset($allSlider[101])?$allSlider[101]:0 ?>" />
            <button type="button" value="1" class="wpm-btn-multi activate-category<?php if (isset($allSlider[101]) && $allSlider[101] == 1) echo " active" ?>">Yes</button>
            <button type="button" value="0" class="wpm-btn-multi activate-category<?php if (isset($allSlider[101]) && $allSlider[101] == 0) echo " active" ?>">No</button>
          </td>
        </tr>
        <tr class="category_field">
          <td width="45%"><b>Category Position</b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
          <select name="category_position" class="wpm-form-input" id="category_position">
              <option value="left" <?php if (isset($allSlider[117]) && $allSlider[117] == 'left') echo " selected=''" ?>>Left</option>
              <option value="right" <?php if (isset($allSlider[117]) && $allSlider[117] == 'right') echo " selected=''" ?>>Right</option>
              <option value="center" <?php if (isset($allSlider[117]) && $allSlider[117] == 'center') echo " selected=''" ?>>Center</option>
            </select>
          </td>
        </tr>
        <tr class="category_field">
          <td width="45%"><b>Font Size</b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" class="wpm-form-input" name="category_font_size" id="wpm_6310_category_font_size" value="<?php echo (isset($allSlider[102]) && $allSlider[102])?$allSlider[102]:"14" ?>">
          </td>
        </tr>
        <tr class="category_field">
          <td width="45%"><b>Font Color</b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="category_font_color" id="wpm_category_font_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" value="<?php echo (isset($allSlider[103]) && $allSlider[103])?$allSlider[103]:"rgb(255, 255, 255)" ?>">
          </td>
        </tr>
        <tr class="category_field">
          <td width="45%"><b>Font Hover Color</b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="category_font_hover_color" id="wpm_category_font_hover_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" value="<?php echo (isset($allSlider[104]) && $allSlider[104])?$allSlider[104]:"rgb(255, 255, 255)" ?>">
          </td>
        </tr>
        <tr class="category_field">
          <td width="45%"><b>Border Width</b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" class="wpm-form-input" name="category_border_width" id="wpm_6310_category_border_width" value="<?php echo (isset($allSlider[105]) && $allSlider[105] !== '')?$allSlider[105]:"1" ?>">
          </td>
        </tr>
        <tr class="category_field">
          <td width="45%"><b>Border Color</b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="category_border_color" id="wpm_6310_category_border_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" data-opacity=".8" value="<?php echo (isset($allSlider[106]) && $allSlider[106])?$allSlider[106]:"rgba(0, 0, 0, 0.8)" ?>">
          </td>
        </tr>
        <tr class="category_field">
          <td width="45%"><b>Background Color</b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="category_background_color" id="wpm_6310_category_background_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" data-opacity=".8"value="<?php echo (isset($allSlider[107]) && $allSlider[107])?$allSlider[107]:"rgba(0, 179, 149, 0.8)" ?>">
          </td>
        </tr>
      </table>
    </div>
    <div class="wpm-col-6">
      <table class="table table-responsive wpm_6310_admin_table wpm_6310_category_field">        
        <tr class="category_field">
          <td width="45%"><b>Active Background Color</b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="category_active_background_color" id="wpm_6310_category_active_background_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" data-opacity=".8" value="<?php echo (isset($allSlider[108]) && $allSlider[108])?$allSlider[108]:"rgba(0, 94, 78, 0.8)" ?>">
          </td>
        </tr>
        <tr class="category_field">
          <td width="45%"><b>Active Font Color</b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="category_active_font_color" id="wpm_6310_category_active_font_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" value="<?php echo (isset($allSlider[109]) && $allSlider[109])?$allSlider[109]:"rgba(255, 255, 255)" ?>">
          </td>
        </tr>
        <tr class="category_field">
          <td width="45%"><b>Active Border Color</b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="category_active_border_color" id="wpm_6310_category_active_border_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" data-opacity=".8" value="<?php echo (isset($allSlider[110]) && $allSlider[110])?$allSlider[110]:"rgba(54, 54, 54, 0.8)" ?>">
          </td>
        </tr>
        <tr class="category_field">
          <td><b>Font Weight</b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <select name="category_font_weight" class="wpm-form-input" id="wpm_6310_category_font_weight">
              <option value="100" <?php if (isset($allSlider[111]) && $allSlider[111] == '100') echo " selected=''" ?>>100</option>
              <option value="200" <?php if (isset($allSlider[111]) && $allSlider[111] == '200') echo " selected=''" ?>>200</option>
              <option value="300" <?php if (isset($allSlider[111]) && $allSlider[111] == '300') echo " selected=''" ?>>300</option>
              <option value="400" <?php if (isset($allSlider[111]) && $allSlider[111] == '400') echo " selected=''" ?>>400</option>
              <option value="500" <?php if (isset($allSlider[111]) && $allSlider[111] == '500') echo " selected=''" ?>>500</option>
              <option value="600" <?php if (isset($allSlider[111]) && $allSlider[111] == '600') echo " selected=''" ?>>600</option>
              <option value="700" <?php if (isset($allSlider[111]) && $allSlider[111] == '700') echo " selected=''" ?>>700</option>
              <option value="800" <?php if (isset($allSlider[111]) && $allSlider[111] == '800') echo " selected=''" ?>>800</option>
              <option value="900" <?php if (isset($allSlider[111]) && $allSlider[111] == '900') echo " selected=''" ?>>900</option>
              <option value="normal" <?php if (isset($allSlider[111]) && $allSlider[111] == 'normal') echo " selected=''" ?>>Normal</option>
              <option value="bold" <?php if (isset($allSlider[111]) && $allSlider[111] == 'bold') echo " selected=''" ?>>Bold</option>
              <option value="lighter" <?php if (isset($allSlider[111]) && $allSlider[111] == 'lighter') echo " selected=''" ?>>Lighter</option>
              <option value="initial" <?php if (isset($allSlider[111]) && $allSlider[111] == 'initial') echo " selected=''" ?>>Initial</option>
            </select>
          </td>
        </tr>
        <tr class="category_field">
          <td><b>Font Family</b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="category_font_family" class="wpm-form-input" id="wpm_category_font_family" type="text"  value="<?php echo (isset($allSlider[112]) && $allSlider[112])?$allSlider[112]:"Amaranth" ?>">
          </td>
        </tr>
        <tr class="category_field">
          <td width="45%"><b>Margin Bottom</b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" class="wpm-form-input" name="category_margin_bottom" id="wpm_6310_category_margin_bottom"  value="<?php echo (isset($allSlider[113]) && $allSlider[113]!=='')?$allSlider[113]:"30" ?>">
          </td>
        </tr>
        <tr class="category_field">
          <td width="45%"><b>Menu Height</b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" class="wpm-form-input" name="category_menu_height" id="wpm_6310_category_menu_height"  value="<?php echo (isset($allSlider[114]) && $allSlider[114])?$allSlider[114]:"30" ?>">
          </td>
        </tr>
        <tr class="category_field">
          <td width="45%"><b>Margin Right</b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" class="wpm-form-input" name="category_margin_right" id="wpm_6310_category_margin_right"  value="<?php echo (isset($allSlider[115]) && $allSlider[115]!=='')?$allSlider[115]:"5" ?>">
          </td>
        </tr>
        <tr class="category_field">
          <td width="45%"><b>Padding </b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" class="wpm-form-input" name="category_padding_right_left" id="wpm_6310_category_padding_right_left" value="<?php echo (isset($allSlider[116]) && $allSlider[116]!=='')?$allSlider[116]:"20" ?>">
          </td>
        </tr>
        <tr class="category_field">
          <td width="45%"><b>Border Radius </b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" class="wpm-form-input" name="category_border_raidus" id="category_border_raidus" value="<?php echo (isset($allSlider[118]) && $allSlider[118]!=='')?$allSlider[118]:"3" ?>">
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>

<style>
 <?php
  if(isset($allSlider[101]) && $allSlider[101]){
    if($allSlider[0]){
      echo "#wpm-6310-category-{$styleId}{display: none}";
    }
    else{
      echo "#wpm-6310-category-carousel-{$styleId}{display: none}";
    }
  }
  else{
    echo "#wpm-6310-category-{$styleId}{display: none}";
  }
 ?>
  #wpm-6310-category-<?php echo $styleId ?>{
    width: calc(100% - 30px);
    text-align: <?php echo isset($allSlider[117])?$allSlider[117]:'left' ?>;
    position: relative;
    line-height: <?php echo isset($allSlider[114])?$allSlider[114]:'30' ?>px;    
    margin-left: 15px;
    margin-right: 15px;
}
#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list {
    display: inline-block;
    font-size: <?php echo isset($allSlider[102])?$allSlider[102]:'14' ?>px;
    color:  <?php echo isset($allSlider[103])?$allSlider[103]:'rgb(255, 255, 255)' ?>;
    border: <?php echo isset($allSlider[105])?$allSlider[105]:'1' ?>px solid <?php echo isset($allSlider[106])?$allSlider[106]:'rgb(0, 0, 0)' ?>;
    background-color: <?php echo isset($allSlider[107])?$allSlider[107]:'rgba(0, 94, 78, 0.8)' ?>;
    font-weight: <?php echo isset($allSlider[111])?$allSlider[111]:'100' ?>;
    font-family: <?php echo (isset($allSlider[112]) && $allSlider[112])?str_replace("+", " ", $allSlider[112]):'Amaranth' ?>;
    padding: 0 <?php echo isset($allSlider[116])?$allSlider[116]:'20' ?>px;
    position: relative;
    height: <?php echo isset($allSlider[114])?$allSlider[114]:'30' ?>px;
    line-height: <?php echo isset($allSlider[114])?$allSlider[114]:'30' ?>px; 
    margin-bottom: <?php echo isset($allSlider[113])?$allSlider[113]:'30' ?>px;
    margin-right:  <?php echo isset($allSlider[115])?$allSlider[115]:'5' ?>px;
    border-radius: <?php echo isset($allSlider[118])?$allSlider[118]:'3' ?>px;
    cursor: pointer;
    -webkit-transition: all 0.6s ease 0s;
    -moz-transition: all 0.6s ease 0s;
    -ms-transition: all 0.6s ease 0s;
    -o-transition: all 0.6s ease 0s;
    transition: all 0.6s ease 0s;
    box-sizing: content-box !important;
}
#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list_active {
    background-color:  <?php echo isset($allSlider[108])?$allSlider[108]:'rgba(0, 94, 78, 0.8)' ?> !important;
    color:  <?php echo isset($allSlider[109])?$allSlider[109]:'rgb(255, 255, 255)' ?> !important;
    border-color:  <?php echo isset($allSlider[110])?$allSlider[110]:'rgba(255, 0, 0, 0.8)' ?> !important;
}
#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list:hover{
  color:  <?php echo isset($allSlider[104])?$allSlider[104]:'rgb(255, 255, 255)' ?> !important;
  background-color:  <?php echo isset($allSlider[108])?$allSlider[108]:'rgba(0, 94, 78, 0.8)' ?> !important;
}
.wpm-6310-owl-carousel-container{
  width: calc(100% - 30px) !important;
  padding: 0 15px;
}
.wpm-6310-col-2{
   width: calc(50% - <?php echo ((isset($allSlider[127])?$allSlider[127]:15) * 2) ?>px) !important;
}
.wpm-6310-col-3{
   width: calc(33.33% - <?php echo ((isset($allSlider[127])?$allSlider[127]:15) * 2) ?>px) !important;
}
.wpm-6310-col-4{
   width: calc(25% - <?php echo ((isset($allSlider[127])?$allSlider[127]:15) * 2) ?>px) !important;
}
.wpm-6310-col-5{
   width: calc(20% - <?php echo ((isset($allSlider[127])?$allSlider[127]:15) * 2) ?>px) !important;
}
.wpm-6310-col-6{
   width: calc(16.6667% - <?php echo ((isset($allSlider[127])?$allSlider[127]:15) * 2) ?>px) !important;
}
.wpm-6310-col-2, .wpm-6310-col-3, .wpm-6310-col-4, .wpm-6310-col-5, .wpm-6310-col-6{
  margin: 0 <?php echo (isset($allSlider[127])?$allSlider[127]:15) ?>px <?php echo ((isset($allSlider[127])?$allSlider[127]:15) * 2) ?>px !important;
}
</style>

<script>
  jQuery(document).ready(function() {
    /* validation start */
    <?php
      if(!(isset($allSlider[101]) && $allSlider[101])) {
        echo "jQuery('.category_field').hide();";
      }
    ?>
    
    jQuery("#category_position").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?>{ text-align:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#category_position").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> { text-align:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_6310_category_font_size").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list{ font-size:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });

    jQuery("#wpm_category_font_color, #wpm_category_font_hover_color").on("change", function () {
            var value = jQuery("#wpm_category_font_color").val();
            var value2 = jQuery("#wpm_category_font_hover_color").val();
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list:not(.wpm_6310_category_list_active) { color:" + value + " !important;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list:not(.wpm_6310_category_list_active):hover { color:" + value2 + " !important;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_category_font_hover_color").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list:hover  { color:" + value + " !important;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_6310_category_border_width, #wpm_6310_category_border_color").on("change", function () {
            var width = jQuery("#wpm_6310_category_border_width").val()+"px";
            var color = jQuery("#wpm_6310_category_border_color").val();
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list{ border:" + width + " solid "+ color +";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_6310_category_background_color").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list{ background:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_6310_category_active_background_color").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list_active,  #wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list:hover{ background-color:" + value + " !important;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });

    jQuery("#wpm_6310_category_active_font_color").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list_active { color:" + value + " !important ;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_6310_category_active_border_color").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list_active,  #wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list:hover { border-color:" + value + " !important;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_6310_category_font_weight").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list { font-weight:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_category_font_family").on("change", function () {
      var value = jQuery(this).val().replace(/\+/g, ' ');
            value = value.split(':');
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list { font-family:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_6310_category_margin_bottom").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list{ margin-bottom:" + value + "px;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
     jQuery("#wpm_6310_category_menu_height").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list { height:" + value + "px; line-height:" + value + "px;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_6310_category_margin_right").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list { margin-right:" + value + "px;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_6310_category_padding_right_left").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list { padding: 0 " + value + "px;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#category_border_raidus").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list { border-radius:" + value + "px;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    

    /* reset all member if click slider active or inactive */
    jQuery(".activate-slider").on('click', function(){
      /* reset non slider */
      jQuery(`.wpm-6310-col-<?php echo $desktop_row ?>`).show();
      /* Reset category menu */
      jQuery("#wpm-6310-category-<?php echo $styleId ?>").find(".wpm_6310_category_list:first-child").addClass('wpm_6310_category_list_active');        
    });
   

    //Active or inactive menu
    jQuery("body").on("click", ".activate-category", function(event) {
      var category = parseInt(jQuery(this).val());
      var slider = parseInt(jQuery("#slider_activation").val());
      if(slider == 1){
        event.preventDefault();
        alert("You can not change Activate Category options when Slider are activated");
        jQuery("#wpm-6310-category-<?php echo $styleId ?>").hide(); 
        jQuery("#wpm-6310-category-<?php echo $styleId ?>, .category_field").hide();
        jQuery("#wpm-6310-category-<?php echo $styleId ?>, .category_field, .wpm-6310-category-filter").hide();
        jQuery(".activate-category").removeClass("active");
        jQuery('.activate-category:last').addClass("active");
        jQuery("#category_activation").val(0);
        return;
      }
      jQuery(".activate-category").removeClass("active");
      jQuery(this).addClass("active");
      jQuery("#category_activation").val(category);
      jQuery("#wpm-6310-noslider-<?php echo $styleId ?> .wpm-6310-col-<?php echo $desktop_row ?>").show();
      if (category == 1) {
        jQuery("#wpm-6310-category-<?php echo $styleId ?>, .category_field").show();
        jQuery(".wpm_6310_category_list").removeClass('wpm_6310_category_list_active');
        jQuery("#wpm-6310-category-<?php echo $styleId ?>").find(".wpm_6310_category_list:first-child").addClass('wpm_6310_category_list_active');
        jQuery(".wpm-6310-default-members").hide();
        let defaultClass = jQuery("#wpm-6310-category-<?php echo $styleId ?>").find(".wpm_6310_category_list:first-child").attr('wpm-data-filter');
        jQuery(`.${defaultClass}`).show();
      } else {
        jQuery("#wpm-6310-category-<?php echo $styleId ?>, .category_field").hide();
        jQuery("#wpm-6310-category-<?php echo $styleId ?>, .category_field, .wpm-6310-category-filter").hide();
        jQuery(".wpm-6310-default-members").show();
      }
    });

    jQuery(".wpm_6310_category_list").on('click', function(){
      let rand = [];
      while(rand.length < 6) {
        let randNum = Math.floor(Math.random() * 8) + 1;
        let found = true;
        for(let i = 0; i < rand.length; i++){
            if(rand[i] == randNum) {
              found = false;
              break;
            }
        }
        if(found){
            rand.push(randNum);
        }
      }

      let attr = jQuery(this).attr('wpm-data-filter');
      jQuery(".wpm_6310_category_list").removeClass('wpm_6310_category_list_active');
      jQuery(this).addClass('wpm_6310_category_list_active');
      jQuery(`.wpm-6310-row:not(.${attr})`).hide();

      var searchActive = jQuery('#wpm_search_activation').prop('checked');
      var value = jQuery('.wpm-6310-search-box').val().toLowerCase();     
      if(value != '' && value.trim() != '' && searchActive == true){
        var ids = jQuery('.wpm-6310-search-box').data('wpm-6310-template-id'); 
        jQuery(`.${attr} .wpm-6310-col-<?php echo $desktop_row; ?>`).filter(function() {
          jQuery(`.${attr}`).show();
          var title = jQuery(this).find(`.wpm_6310_team_style_${ids}_title`).text().toLowerCase();
          var designation = jQuery(this).find(`.wpm_6310_team_style_${ids}_designation`).text().toLowerCase();
          let status = title.indexOf(value) > -1 || designation.indexOf(value) > -1;
          if(status){
            jQuery(this).show();
          }
          else{
            jQuery(this).hide();
          }
        });
      }
      else{
        jQuery(`.${attr}`).show();
        jQuery(`.${attr} .wpm-6310-col-<?php echo $desktop_row; ?>`).filter(function() {
          jQuery(this).show();
        });
      }
      jQuery(`
         <style type='text/css'>
            #wpm-6310-noslider-<?php echo $styleId ?> .${attr} > div:nth-child(4n + 1) {
               -webkit-animation: slideup_${rand[0]} 1s ease;
               animation: slideup_${rand[0]} 1s ease;
            }
            #wpm-6310-noslider-<?php echo $styleId ?> .${attr} > div:nth-child(4n + 2) {
               -webkit-animation: slideup_${rand[1]} 1s ease;
               animation: slideup_${rand[1]} 1s ease;
            }
            #wpm-6310-noslider-<?php echo $styleId ?> .${attr} > div:nth-child(4n + 3) {
               -webkit-animation: slideup_${rand[2]} 1s ease;
               animation: slideup_${rand[2]} 1s ease;
            }
            #wpm-6310-noslider-<?php echo $styleId ?> .${attr} > div:nth-child(4n + 4) {
               -webkit-animation: slideup_${rand[3]} 1s ease;
               animation: slideup_${rand[3]} 1s ease;
            }
            #wpm-6310-noslider-<?php echo $styleId ?> .${attr} > div:nth-child(4n + 4) {
               -webkit-animation: slideup_${rand[4]} 1s ease;
               animation: slideup_${rand[4]} 1s ease;
            }
            #wpm-6310-noslider-<?php echo $styleId ?> .${attr} > div:nth-child(4n + 4) {
               -webkit-animation: slideup_${rand[5]} 1s ease;
               animation: slideup_${rand[5]} 1s ease;
            }   
         </style>`).appendTo(".wpm_6310_tabs_panel_preview");

    });
  });
</script>
