<div id="tab-9">
  <div class="row">
    <div class="wpm-col-6">
      <table class="table table-responsive wpm_6310_admin_table" width="100%">
        <tr>
          <td>
            <b>Activate Search</b> <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span><br />
            <small style="color:#2196F3">(Available only in non-slider)</small>
          </td>
          <td>
            <label class="switch" for="wpm_search_activation">
              <input type="checkbox" name="search_activation" id="wpm_search_activation" value="1" <?php echo (isset($allSlider[86]) && $allSlider[86]) ? 'checked' : '' ?>>
              <span class="slider round"></span>
            </label>
          </td>
        </tr>
        <tr class="search_act_field">
          <td><b>Placeholder Text</b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="search_placeholder" id="wpm_search_placeholder" class="wpm-form-input" value="<?php echo (isset($allSlider[87]) && $allSlider[87] !== '') ? $allSlider[87] : 'Search by Name or Designation' ?>">
          </td>
        </tr>
        <tr class="search_act_field">
          <td><b>Alignment </b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <select name="search_align" class="wpm-form-input" id="wpm_search_align">
              <option value="center" <?php if (isset($allSlider[88]) && $allSlider[88] == 'center') echo "selected" ?>>
                Center</option>
              <option value="flex-start" <?php if (isset($allSlider[88]) && $allSlider[88] == 'flex-start') echo "selected" ?>>Left
              </option>
              <option value="flex-end" <?php if (!isset($allSlider[88]) || (isset($allSlider[88]) && $allSlider[88] == 'flex-end')) echo "selected" ?>>Right
              </option>
            </select>
          </td>
        </tr>
        <tr class="search_act_field">
          <td><b>Font Color </b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="search_font_color" id="wpm_search_font_color"
              class="wpm-form-input wpm_6310_color_picker" data-format="rgb"
              value="<?php echo (isset($allSlider[92]) && $allSlider[92] !== '') ? $allSlider[92] : 'rgb(0, 0, 0)' ?>">
          </td>
        </tr>
        <tr class="search_act_field">
          <td><b>Placeholder Font Color </b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="search_placeholder_font_color" id="wpm_search_placeholder_font_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" value="<?php echo (isset($allSlider[94]) && $allSlider[94] !== '') ? $allSlider[94] : 'rgb(128, 128, 128)' ?>">
          </td>
        </tr>
      </table>
    </div>
    <div class="wpm-col-6" >
      <table class="table table-responsive wpm_6310_admin_table search_act_field">
        <tr>
          <td><b>Search Box Height </b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" min="0" name="search_height" value="<?php echo (isset($allSlider[95]) && $allSlider[95] !== '') ? $allSlider[95] : 40 ?>" class="wpm-form-input" id="wpm_search_height" />
          </td>
        </tr>
        <tr>
          <td><b>Border Width </b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" min="0" name="search_border_width" value="<?php echo (isset($allSlider[89]) && $allSlider[89] !== '') ? $allSlider[89] : 2 ?>" class="wpm-form-input" id="wpm_search_border_width" />
          </td>
        </tr>
        <tr>
          <td><b>Border Color </b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="search_border_color" id="wpm_search_border_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" data-opacity=".8" value="<?php echo (isset($allSlider[90]) && $allSlider[90] !== '') ? $allSlider[90] : 'rgba(0, 0, 0, 1)' ?>">
          </td>
        </tr>
        <tr>
          <td><b>Border Radius </b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" min="0" name="search_border_radius" value="<?php echo (isset($allSlider[91]) && $allSlider[91] !== '') ? $allSlider[91] : 50 ?>" class="wpm-form-input" id="wpm_search_border_radius" />
          </td>
        </tr>
        <tr>
          <td><b>Margin Bottom </b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="search_margin_bottom" id="wpm_search_margin_bottom" type="number" min="0"
              value="<?php echo (isset($allSlider[93]) && $allSlider[93] !== '') ? $allSlider[93] : 10;?>" class="wpm-form-input" />
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>
<div id="tab-13">
  <div class='wpm-6310-skill-msg'>In the free version, you can show maximum of 2 skills in the output.</div>
<div class="row">
    <div class="wpm-col-6">
      <table class="table table-responsive wpm_6310_admin_table" width="100%">
        <tr>
          <td>
            <b>Activate Skills</b><br />
            <span class="wpm-6310-skill-msg"></span>               
          </td>
          <td>
            <label class="switch" for="skills-activation">
              <input type="checkbox" name="activate-skills" id="skills-activation" value="1" <?php echo (isset($allSlider[354]) && $allSlider[354]) ? 'checked' : '' ?>>
              <span class="slider round"></span>
            </label>
          </td>
        </tr>
        <tr class="skill_act_field">
            <td>
              <b>Skills Font Size</b>
            </td>
            <td class="skill_act_field">
              <input type="number" min="0" name="skills_font_size" value="<?php echo (isset($allSlider[336]) && $allSlider[336]) ? $allSlider[336] : 12 ?>" class="wpm-form-input" step="1" id="skills_font_size" />
            </td>
        </tr>
        <tr class="skill_act_field">
               <td><b>Skills Line Height</b></td>
               <td>
                  <input name="skills_line_height" id="skills_line_height" type="number" value="<?php echo (isset($allSlider[337]) && $allSlider[337]) ? $allSlider[337] : 16 ?>" class="wpm-form-input" />
               </td>
            </tr>
            <tr class="skill_act_field">
               <td>
                  <b>Skills Text Transform</b>
               </td>
               <td>
                  <select name="skills_text_transform" class="wpm-form-input" id="skills_text_transform">
                    <option value="capitalize" <?php if (isset($allSlider[338]) && $allSlider[338] == 'capitalize') echo " selected=''" ?>>
                      Capitalize</option>
                    <option value="uppercase" <?php if (isset($allSlider[338]) && $allSlider[338] == 'uppercase') echo " selected=''" ?>>
                      Uppercase</option>
                    <option value="lowercase" <?php if (isset($allSlider[338]) && $allSlider[338] == 'lowercase') echo " selected=''" ?>>
                      Lowercase</option>
                    <option value="none" <?php if (isset($allSlider[338]) && $allSlider[338] == 'none') echo " selected=''" ?>>As Input</option>
                  </select>
               </td>
            </tr>
            <tr class="skill_act_field">
               <td><b>Skills Font Color</b></td>
               <td>
                  <input type="text" name="skills_font_color" id="skills_font_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" value="<?php echo (isset($allSlider[339]) && $allSlider[339]) ? $allSlider[339] : 'rgb(2, 4, 23)' ?>">
               </td>
            </tr>
            <tr class="skill_act_field">
               <td><b>Skills Font Hover Color</b></td>
               <td>
                  <input type="text" name="skills_font_hover_color" id="skills_font_hover_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" value="<?php echo (isset($allSlider[340]) && $allSlider[340]) ? $allSlider[340] : 'rgb(5, 77, 125)' ?>">
               </td>
            </tr>
            <tr class="skill_act_field">
               <td><b>Font Weight</b></td>
               <td>
                  <select name="skills_font_weight" class="wpm-form-input" id="skills_font_weight">
                  <option value="100" <?php if (isset($allSlider[341]) && $allSlider[341] == '100') echo " selected=''" ?>>100</option>
                  <option value="200" <?php if (isset($allSlider[341]) && $allSlider[341] == '200') echo " selected=''" ?>>200</option>
                  <option value="300" <?php if (isset($allSlider[341]) && $allSlider[341] == '300') echo " selected=''" ?>>300</option>
                  <option value="400" <?php if (isset($allSlider[341]) && $allSlider[341] == '400') echo " selected=''" ?>>400</option>
                  <option value="500" <?php if (isset($allSlider[341]) && $allSlider[341] == '500') echo " selected=''" ?>>500</option>
                  <option value="600" <?php if (isset($allSlider[341]) && $allSlider[341] == '600') echo " selected=''" ?>>600</option>
                  <option value="700" <?php if (isset($allSlider[341]) && $allSlider[341] == '700') echo " selected=''" ?>>700</option>
                  <option value="800" <?php if (isset($allSlider[341]) && $allSlider[341] == '800') echo " selected=''" ?>>800</option>
                  <option value="900" <?php if (isset($allSlider[341]) && $allSlider[341] == '900') echo " selected=''" ?>>900</option>
                  <option value="normal" <?php if (isset($allSlider[341]) && $allSlider[341] == 'normal') echo " selected=''" ?>>Normal
                  </option>
                  <option value="bold" <?php if (isset($allSlider[341]) && $allSlider[341] == 'bold') echo " selected=''" ?>>Bold</option>
                  <option value="lighter" <?php if (isset($allSlider[341]) && $allSlider[341] == 'lighter') echo " selected=''" ?>>Lighter
                  </option>
                  <option value="initial" <?php if (isset($allSlider[341]) && $allSlider[341] == 'initial') echo " selected=''" ?>>Initial
                  </option>
                  </select>
               </td>
            </tr>
            <tr class="skill_act_field">
               <td><b>Font Family</b></td>
               <td>
                  <input name="skills_font_family" id="skills_font_family" class="wpm-form-input" type="text" value="<?php echo isset($allSlider[342])?$allSlider[342]:'Amaranth' ?>" />
               </td>
            </tr>

            <tr class="skill_act_field">
               <td>
                  <b>Progress Bar Height</b>
                  <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
               </td>
               <td>
                  <input type="number" min="0" name="progress_bar_height" value="<?php echo isset($allSlider[343])?$allSlider[343]: 8 ?>" class="wpm-form-input" step="1" id="progress_bar_height" />
               </td>
            </tr>
            <tr class="skill_act_field">
               <td>
                  <b>Progress Bar Radius</b>
                  <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
               </td>
               <td>
                  <input type="number" min="0" name="progress_bar_border_radius" value="<?php echo isset($allSlider[344])?$allSlider[344]: 10 ?>" class="wpm-form-input" step="1" id="progress_bar_border_radius" />
               </td>
            </tr>
      </table>
    </div>
    <div class="wpm-col-6" >
      <table class="table table-responsive  wpm_6310_admin_table" width="100%"">
            <tr class="skill_act_field">
               <td>
                  <b>Progress Bar Border Size</b>
                  <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
               </td>
               <td>
                  <input type="number" min="0" name="progress_bar_border_size" value="<?php echo isset($allSlider[345])?$allSlider[345]: 1 ?>" class="wpm-form-input" step="1" id="progress_bar_border_size" />
               </td>
            </tr>
            <tr class="skill_act_field">
               <td>
                  <b>Progress Bar Border Color</b>
                  <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
               </td>
               <td>
                  <input type="text" name="progress_bar_border_color" id="progress_bar_border_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" value="<?php echo (isset($allSlider[346]) && $allSlider[346]) ? $allSlider[346] : 'rgb(3, 142, 173)' ?>">
               </td>
            </tr>
            <tr class="skill_act_field">
               <td>
                  <b>Progress Bar Type</b>
               </td>
               <td>
                  <select class="wpm-form-input" id="progress_bar_type" name="progress_bar_type">
                     <option value="1" <?php if (isset($allSlider[347]) && $allSlider[347] == 1) echo " selected " ?>>Striped <span class="wpm-6310-pro-text">(Pro)</span></option>
                     <option value="0" <?php if (isset($allSlider[347]) && $allSlider[347] == 0) echo " selected " ?>>Regular</option>
                  </select>
               </td>
            </tr>
            <tr class="skill_act_field">
               <td><b>Progress Bar Background Color</b></td>
               <td>
                  <input type="text" name="progress_bar_background_color" id="progress_bar_background_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" value="<?php echo (isset($allSlider[348]) && $allSlider[348]) ? $allSlider[348] : 'rgb(255, 255, 255)' ?>">
               </td>
            </tr>
            <tr class="skill_act_field">
               <td><b>Progress Bar Color</b></td>
               <td>
                  <input type="text" name="progress_bar_color" id="progress_bar_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" value="<?php echo (isset($allSlider[349]) && $allSlider[349]) ? $allSlider[349] : 'rgb(3, 142, 173)' ?>">
               </td>
            </tr>
            <tr class="striped_show skill_act_field" >
               <td><b>Progress Bar Alternate Color</b><span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
               <td>
                  <input type="text" name="progress_bar_alternate_color" id="progress_bar_alternate_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" data-opacity=".8" value="<?php echo (isset($allSlider[350]) && $allSlider[350]) ? $allSlider[350] : 'rgba(0, 208, 255, 1)' ?>">
               </td>
            </tr>
            <tr class="striped_show skill_act_field">
               <td>
                  <b>Progress Bar Animaiton</b><span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
                  <div class="wpm-6310-pro">*Preview-on-change  not available</div>
               </td>
               <td>
                  <select class="wpm-form-input" id="progress_bar_animation" name="progress_bar_animation">
                     <option value="1" <?php if (isset($allSlider[351]) && $allSlider[351] == 1) echo " selected " ?>>Yes</option>
                     <option value="0" <?php if (!isset($allSlider[351]) || $allSlider[351] == 0) echo " selected " ?>>No</option>
                  </select>
               </td>
            </tr>
            <tr class="skill_act_field">
               <td><b>Margin Top</b></td>
               <td>
                  <input name="wpm_progress_bar_margin_top" id="wpm_progress_bar_margin_top" type="number" value="<?php echo (isset($allSlider[352]) && $allSlider[352]) ? $allSlider[352] : 0 ?>" class="wpm-form-input" />
               </td>
            </tr>
            <tr  class="skill_act_field">
               <td><b>Margin Bottom</b></td>
               <td>
                  <input name="wpm_progress_bar_margin_bottom" id="wpm_progress_bar_margin_bottom" type="number" value="<?php echo (isset($allSlider[353]) && $allSlider[353]) ? $allSlider[353] : 0 ?>" class="wpm-form-input" />
               </td>
            </tr>
      </table>
    </div>
  </div>
</div>

<script>
  jQuery(document).ready(function(){
    <?php
      if(!(isset($allSlider[86]) && $allSlider[86] != '') ){
        echo 'jQuery(".wpm-6310-search-container").hide();';
        echo 'jQuery(".search_act_field").hide();';
      }
    ?>
    jQuery('body').on('click', '#wpm_search_activation', function(){
      let slider_activation = Number(jQuery('#slider_activation').val());
      if(slider_activation) {
         jQuery(this).removeAttr('checked');
         alert('You can not Activate Search options when Slider are activated');
         jQuery(".search_act_field").hide();
      } else {
         if (jQuery(this).prop('checked') == true) {
         jQuery('.wpm-6310-search-box').val('');
         jQuery(".wpm-6310-search-container").show();
         jQuery(".search_act_field").show();
         }
         else{
         jQuery(".wpm-6310-search-container").hide();
         jQuery(".search_act_field").hide();
         }
         var category = Number(jQuery('#category_activation').val());
         if(category == 1){
         jQuery('.wpm_6310_category_list_active').trigger('click');
         }
      }
    });

    //Filter members 
    jQuery(".wpm-6310-search-box").on("keyup", function() {
      var value = jQuery(this).val().toLowerCase();     
      var ids = jQuery(this).data('wpm-6310-template-id'); 
      var category = Number(jQuery('#category_activation').val());
      let className = '';
      if(category == 1){
        className = jQuery('.wpm_6310_category_list_active').attr('wpm-data-filter');
      }
      else{
        className = "wpm-6310-default-members";
      }
      jQuery(`#wpm-6310-noslider-<?php echo $styleId ?> .${className} .wpm-6310-col-<?php echo $desktop_row; ?>`).filter(function() {
        var title = jQuery(this).find(`.wpm_6310_team_style_${ids}_title`).text().toLowerCase();
        var designation = jQuery(this).find(`.wpm_6310_team_style_${ids}_designation`).text().toLowerCase();
        let status = title.indexOf(value) > -1 || designation.indexOf(value) > -1;
        if(status){
          jQuery(this).show(100);
        }
        else{
          jQuery(this).hide(100);
        }
      });
    });

    // Search
    jQuery("body").on("keyup", '#wpm_search_placeholder', function () {
        var value = jQuery(this).val();
        jQuery('.wpm-6310-search-template-<?php echo $template_id ?> input').attr('placeholder', value);
    });
    jQuery("#wpm_search_align").on("change", function () {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'> .wpm-6310-search-<?php echo $template_id ?> { justify-content: " + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_search_border_width").on("change", function () {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.wpm-6310-search-template-<?php echo $template_id ?> input { border-width: " + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_search_border_color").on("change", function () {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.wpm-6310-search-template-<?php echo $template_id ?> input { border-color:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        jQuery("<style type='text/css'>.wpm-6310-search-template-<?php echo $template_id ?> i.search-icon { color:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        jQuery("<style type='text/css'>.wpm-6310-search-template-<?php echo $template_id ?> input:focus { border-color:" + value + " !important;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_search_border_radius").on("change", function () {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.wpm-6310-search-template-<?php echo $template_id ?> input { border-radius: " + value + "; -moz-border-radius: " + value + "; -ms-border-radius: " + value + "; -o-border-radius: " + value + "; -webkit-border-radius: " + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_search_font_color").on("change", function () {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.wpm-6310-search-template-<?php echo $template_id ?> input { color:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_search_margin_bottom").on("change", function () {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.wpm-6310-search-template-<?php echo $template_id ?> { margin-bottom:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_search_placeholder_font_color").on("change", function () {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.wpm-6310-search-template-<?php echo $template_id ?> input::placeholder { color:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_search_height").on("change", function () {
        var value = jQuery(this).val() + 'px';
        jQuery("<style type='text/css'>.wpm-6310-search-template-<?php echo $template_id ?> input { height: " + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
  });

</script>

<style>
  .wpm_6310_member_skills_wrapper {
   margin: 0;
   width: 50%;
   float: left;
   display: block;
    margin-top: <?php echo (isset($allSlider[352]) && $allSlider[352] !== '') ? $allSlider[352] : 10 ?>px;
    margin-bottom: <?php echo (isset($allSlider[353]) && $allSlider[353] !== '') ? $allSlider[353] : 0 ?>px;
}

.wpm_6310_skills_label {
  font-size: <?php echo (isset($allSlider[336]) && $allSlider[336] !== '') ? $allSlider[336] : 12 ?>px;
  text-transform: <?php echo (isset($allSlider[338]) && $allSlider[338] !== '') ? $allSlider[338] : 'capitalize' ?>;
  color: <?php echo (isset($allSlider[339]) && $allSlider[339] !== '') ? $allSlider[339] : 'rgb(67, 148, 67)' ?>;
  font-weight: <?php echo (isset($allSlider[341]) && $allSlider[341] !== '') ? $allSlider[341] : 200 ?>;
  font-family: <?php echo str_replace("+", " ", (isset($allSlider[342]) ? $allSlider[342]:'Amaranth'))?>;
  line-height: <?php echo (isset($allSlider[337]) && $allSlider[337] !== '') ? $allSlider[337] : 16 ?>px;
  margin-bottom: 2px;
  text-align: left;
  display: block;
}

.wpm_6310_team_style:hover .wpm_6310_skills_label{
  color: <?php echo (isset($allSlider[340]) && $allSlider[340]) ? $allSlider[340] : 'rgb(189, 8, 28)' ?>;
}

.wpm_6310_skills_prog {
  height: <?php echo isset($allSlider[343])?$allSlider[343]: 10 ?>px;
  margin-bottom: 6px;
  border-radius: <?php echo isset($allSlider[344])?$allSlider[344]: 10 ?>px;
  -webkit-border-radius: <?php echo isset($allSlider[344])?$allSlider[344]: 10 ?>px;
  -moz-border-radius: <?php echo isset($allSlider[344])?$allSlider[344]: 10 ?>px;
  -o-border-radius: <?php echo isset($allSlider[344])?$allSlider[344]: 10 ?>px;
  border: <?php echo isset($allSlider[345])?$allSlider[345]: 1 ?>px solid <?php echo (isset($allSlider[346]) && $allSlider[346]) ? $allSlider[346] : 'rgb(55, 110, 55)' ?>;
  background-color: <?php echo (isset($allSlider[348]) && $allSlider[348]) ? $allSlider[348] : 'rgb(204, 49, 90)' ?>;
  box-shadow: none;
  -o-box-shadow: none;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-sizing: border-box;
}

.wpm_6310_fill {
  position: relative;
  background-color: <?php echo (isset($allSlider[349]) && $allSlider[349]) ? $allSlider[349] : 'rgb(64, 152, 247)' ?>;
  height: 100%;
  background-size: 20px 20px;

  <?php if (isset($allSlider[347]) && $allSlider[347]) {
  ?>background-image: linear-gradient(135deg, <?php echo $allSlider[350] ?> 25%, transparent 25%,
        transparent 50%, <?php echo $allSlider[350] ?> 50%, <?php echo $allSlider[350] ?> 75%,
        transparent 75%, transparent);
  <?php
  }

  ?>
}
</style>

<script>
         <?php
            if(!isset($allSlider[354]) || !$allSlider[354]){
               echo "jQuery('.skill_act_field').hide();";
            }
						if(!isset($allSlider[347]) || !$allSlider[347]){
							echo "jQuery('.striped_show').hide();";
					 }
         ?>
				   jQuery('body').on('click', '#skills-activation', function(){
						if (jQuery(this).prop('checked') == true) {
							jQuery(".skill_act_field").show();
							jQuery(".wpm_6310_member_skills_wrapper_<?php echo $template_id ?>").show();
						}
						else{
							jQuery(".skill_act_field").hide();
							jQuery(".wpm_6310_member_skills_wrapper_<?php echo $template_id ?>").hide();
						}
						var category = Number(jQuery('#category_activation').val());
						if(category == 1){
							jQuery('.wpm_6310_category_list_active').trigger('click');
						}
					});
         jQuery("body").on("change", "#skills_font_size", function() {
            jQuery("<style type='text/css'>.wpm_6310_skills_label_<?php echo $template_id ?>{ font-size:" + jQuery(this).val() +
               "px !important;} </style>").appendTo(".wpm-preview-box");
         });

         jQuery("body").on("change", "#skills_text_transform", function() {
            jQuery("<style type='text/css'>.wpm_6310_skills_label_<?php echo $template_id ?> { text-transform:" + jQuery(this).val() +
               ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
         });

         jQuery("body").on("change", "#skills_font_color", function() {
            jQuery("<style type='text/css'>.wpm_6310_skills_label_<?php echo $template_id ?> { color:" + jQuery(this).val() +
               ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
         });

         jQuery("body").on("change", "#skills_font_hover_color", function() {
            var value = jQuery(this).val();
            jQuery(
               "<style type='text/css'>.wpm_6310_team_style_<?php echo $template_id; ?>:hover .wpm_6310_skills_label_<?php echo $template_id ?>{ color:" +
               value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
         });

         jQuery("body").on("change", "#skills_font_weight", function() {
            jQuery("<style type='text/css'>.wpm_6310_skills_label_<?php echo $template_id ?> { font-weight:" + jQuery(this).val() +
               ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
         });

         jQuery("body").on("change", "#skills_font_family", function() {
            var value = jQuery(this).val().replace(/\+/g, ' ');
            value = value.split(':');
            jQuery("<style type='text/css'>.wpm_6310_skills_label_<?php echo $template_id ?> { font-family:" + value + ";} </style>")
               .appendTo(".wpm_6310_tabs_panel_preview");
         });

         jQuery("body").on("change", "#skills_line_height", function() {
            jQuery("<style type='text/css'>.wpm_6310_skills_label_<?php echo $template_id ?> { line-height:" + jQuery(this).val() +
               "px;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
         });

         jQuery("body").on("change", "#progress_bar_height", function() {
            jQuery("<style type='text/css'>.wpm_6310_skills_prog_<?php echo $template_id ?> { height:" + jQuery(this).val() +
               "px;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
         });

         jQuery("body").on("change", "#progress_bar_border_radius", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.wpm_6310_skills_prog_<?php echo $template_id ?> { border-radius:" + value +
               "; -moz-border-radius:" + value + "; -ms-border-radius:" + value + "; -o-border-radius:" + value +
               "; -webkit-border-radius:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
         });

         jQuery("#progress_bar_border_size").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.wpm_6310_skills_prog_<?php echo $template_id ?> { border-width:" + value + ";} </style>")
               .appendTo(".wpm_6310_tabs_panel_preview");
         });

         jQuery("#progress_bar_border_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.wpm_6310_skills_prog_<?php echo $template_id ?>  { border-color:" + value + ";} </style>")
               .appendTo(".wpm_6310_tabs_panel_preview");
         });

         jQuery("#progress_bar_background_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.wpm_6310_skills_prog_<?php echo $template_id ?>  { background-color:" + value +
               ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
         });

         jQuery("#wpm_progress_bar_margin_top").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.wpm_6310_member_skills_wrapper_<?php echo $template_id ?> { margin-top:" + value +
               ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
         });
         jQuery("#wpm_progress_bar_margin_bottom").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.wpm_6310_member_skills_wrapper_<?php echo $template_id ?>{ margin-bottom:" + value +
               ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
         });


         jQuery("#progress_bar_type, #progress_bar_color, #progress_bar_alternate_color, #progress_bar_animation").on("change",
            function() {
               var pbt = parseInt(jQuery("#progress_bar_type").val());
               var pb_color = jQuery("#progress_bar_color").val();
               var pb_alt_color = jQuery("#progress_bar_alternate_color").val();
               var pb_animation = parseInt(jQuery("#progress_bar_animation").val());

							 jQuery(`<style type='text/css'>
							 					.wpm-6310-tooltip-percent{ background-color: ${pb_color}; }
							 					.wpm-6310-tooltip-percent::after{ border-top-color: ${pb_color} !important; } 
											</style>`).appendTo(".wpm_6310_tabs_panel_preview");

               if (pbt) {
                  jQuery(".striped_show").show();
                  //
                  if (pb_animation) {
                     jQuery(
                        "<style type='text/css'>.wpm_6310_fill_<?php echo $template_id ?>  { animation-iteration-count: infinite !important;} </style>"
                     ).appendTo(".wpm_6310_tabs_panel_preview");
                  } else {
                     jQuery(
                        "<style type='text/css'>.wpm_6310_fill_<?php echo $template_id ?>  { animation-iteration-count: 0 !important;} </style>"
                     ).appendTo(".wpm_6310_tabs_panel_preview");
                  }

                  //Set Progress Bar Color
                  jQuery("<style type='text/css'>.wpm_6310_fill_<?php echo $template_id ?>  { background-color:" + pb_color +
                     ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");

                  //Set Progress Bar Alternate Color
                  pb_alt_color = "linear-gradient(135deg, " + pb_alt_color + " 25%, transparent 25%, transparent 50%, " +
                     pb_alt_color + " 50%, " + pb_alt_color + " 75%, transparent 75%, transparent)";
                  jQuery("<style type='text/css'>.wpm_6310_fill_<?php echo $template_id ?>  { background-image:" + pb_alt_color +
                     ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");

               } else {
                  jQuery(".striped_show").hide();
                  //Stop Progress Animation
                  jQuery(
                     "<style type='text/css'>.wpm_6310_fill_<?php echo $template_id ?>  { animation-iteration-count: 0 !important;} </style>"
                  ).appendTo(".wpm_6310_tabs_panel_preview");

                  //Set Progress Bar Color
                  jQuery("<style type='text/css'>.wpm_6310_fill_<?php echo $template_id ?>  { background-color:" + pb_color +
                     ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");

                  //Set Progress Bar and Alternate Color are same
                  pb_color = "linear-gradient(135deg, " + pb_color + " 25%, transparent 25%, transparent 50%, " + pb_color +
                     " 50%, " + pb_color + " 75%, transparent 75%, transparent)";
                  jQuery("<style type='text/css'>.wpm_6310_fill_<?php echo $template_id ?>  { background-image:" + pb_color +
                     ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
               }
            });
      </script>

		<style>
						.wpm-6310-tooltip-percent{
						  position: absolute;
							width: 34px;
							background-color: <?php echo (isset($allSlider[349]) && $allSlider[349]) ? $allSlider[349] : 'rgb(64, 152, 247)' ?>;
							color: #fff;
							height: 20px;
							line-height: 20px;
							text-align: center;
					    right: -17px;
    					top: -29px;
							display: none;
							border-radius: 5px;
							font-weight: 400;
							font-size: 11px;
							border-radius: 2px;
							transition: all .33s; 
							font-family: <?php echo str_replace("+", " ", (isset($allSlider[342]) ? $allSlider[342]:'Amaranth'))?>;
						}		
					.wpm_6310_skills_prog_<?php echo $template_id; ?>:hover .wpm-6310-tooltip-percent, .wpm_6310_skills_prog:hover .wpm-6310-tooltip-percent{
						display: block
					}
					.wpm-6310-tooltip-percent::after {
						position: absolute;
						content: '';
						height: 0;
						border-left: 7px solid transparent;
						border-right: 7px solid transparent;
						border-top: 7px solid <?php echo (isset($allSlider[349]) && $allSlider[349]) ? $allSlider[349] : 'rgb(64, 152, 247)' ?>;
						top: 20px;
						right: 10px;
						z-index: 1;
					}
         .wpm_6310_member_skills_wrapper_<?php echo $template_id; ?> {
            margin: 0;
            width: 100%;
            float: left;
						display: <?php echo (isset($allSlider[354]) && $allSlider[354]) ? 'block' : 'none' ?>;
            margin-top: <?php echo (isset($allSlider[352]) && $allSlider[352] !== '') ? $allSlider[352] : 10 ?>px;
            margin-bottom: <?php echo (isset($allSlider[353]) && $allSlider[353] !== '') ? $allSlider[353] : 0 ?>px;
         }

         .wpm_6310_skills_label_<?php echo $template_id; ?> {
            font-size: <?php echo (isset($allSlider[336]) && $allSlider[336] !== '') ? $allSlider[336] : 12 ?>px;
            text-transform: <?php echo (isset($allSlider[338]) && $allSlider[338] !== '') ? $allSlider[338] : 'capitalize' ?>;
            color: <?php echo (isset($allSlider[339]) && $allSlider[339] !== '') ? $allSlider[339] : 'rgb(67, 148, 67)' ?>;
            font-weight: <?php echo (isset($allSlider[341]) && $allSlider[341] !== '') ? $allSlider[341] : 200 ?>;
						font-family: <?php echo str_replace("+", " ", (isset($allSlider[342]) ? $allSlider[342]:'Amaranth'))?>;
            line-height: <?php echo (isset($allSlider[337]) && $allSlider[337] !== '') ? $allSlider[337] : 16 ?>px;
            margin-bottom: 2px;
            text-align: left;
            display: block;
         }

         .wpm_6310_team_style_<?php echo $template_id; ?>:hover .wpm_6310_skills_label_<?php echo $template_id; ?> {
            color: <?php echo (isset($allSlider[340]) && $allSlider[340]) ? $allSlider[340] : 'rgb(189, 8, 28)' ?>;
         }

         .wpm_6310_skills_prog_<?php echo $template_id; ?> {
            /* overflow: hidden; */
            height: <?php echo isset($allSlider[343])?$allSlider[343]: 10 ?>px;
            margin-bottom: 6px;
            border-radius: <?php echo isset($allSlider[344])?$allSlider[344]: 10 ?>px;
            -webkit-border-radius: <?php echo isset($allSlider[344])?$allSlider[344]: 10 ?>px;
            -moz-border-radius: <?php echo isset($allSlider[344])?$allSlider[344]: 10 ?>px;
            -o-border-radius: <?php echo isset($allSlider[344])?$allSlider[344]: 10 ?>px;
            border: <?php echo isset($allSlider[345])?$allSlider[345]: 1 ?>px solid <?php echo (isset($allSlider[346]) && $allSlider[346]) ? $allSlider[346] : 'rgb(55, 110, 55)' ?>;
            background-color: <?php echo (isset($allSlider[348]) && $allSlider[348]) ? $allSlider[348] : 'rgb(255, 255, 255)' ?>;
            box-shadow: none;
            -o-box-shadow: none;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-sizing: content-box;
            -moz-box-sizing: content-box;
            -webkit-box-sizing: content-box;
         }
				 .wpm_6310_modal_template_4 .wpm_6310_skills_prog {
						margin: 0 auto;
				}

            .wpm_6310_modal_template_4 .wpm_6310_member_skills_section{
               align-items: center;
               justify-content: center !important;
               width: 100% !important;
               margin: 0 auto !important;
				}
            .wpm_6310_modal_template_4 .wpm_6310_member_skills_wrapper{
               flex-wrap: wrap;
               width: 80% !important;
               justify-content: center;
            }
            .wpm_6310_modal_template_4 .wpm_6310_member_skills_content {
               float: left;
               width: 33%;
               display: flex;
               align-items: center;
               padding: 0 15px;
               margin-bottom: 5px;
               flex-direction: column;
               box-sizing: border-box;
               border-right: 1px solid #c0c0c0;
            }
            .wpm_6310_modal_template_4 .wpm_6310_member_skills_content:last-child{
               border: none;
            }
             .wpm_6310_modal_template_4 .wpm_6310_member_skills_wrapper .wpm_6310_skills_label{
               width: 100%;
            }
            .wpm_6310_modal_template_4 .wpm_6310_member_skills_content:nth-of-type(3n+3) {
               border-right: none;
            }



				.wpm_6310_modal_template_6 .wpm_6310_member_skills_section{
               justify-content: center !important;
               align-items: center;
               margin: 0 auto !important;
               width: 100% !important;
				}
            .wpm_6310_modal_template_6 .wpm_6310_member_skills_wrapper{
               flex-wrap: wrap;
               width: 70% !important;
               justify-content: center;
            }
            .wpm_6310_modal_template_6 .wpm_6310_member_skills_content {
               float: left;
               width: 33%;
               display: flex;
               align-items: center;
               padding: 0 15px;
               margin-bottom: 5px;
               flex-direction: column;
               box-sizing: border-box;
               border-right: 1px solid #c0c0c0;
            }
            .wpm_6310_modal_template_6 .wpm_6310_member_skills_content:last-child{
               border: none;
            }
             .wpm_6310_modal_template_6 .wpm_6310_member_skills_wrapper .wpm_6310_skills_label{
               width: 100%;
            }
            .wpm_6310_modal_template_6 .wpm_6310_member_skills_content:nth-of-type(3n+3) {
               border-right: none;
            }

         .wpm_6310_fill_<?php echo $template_id; ?> {
            background-color: <?php echo (isset($allSlider[349]) && $allSlider[349]) ? $allSlider[349] : 'rgb(64, 152, 247)' ?>;
            height: 100%;
            background-size: 20px 20px;
						position: relative;
            <?php if(isset($allSlider[347]) && $allSlider[347]) {
            ?>
							background-image: linear-gradient(135deg, <?php echo (isset($allSlider[350]) && $allSlider[350]) ? $allSlider[350] : 'rgba(0, 208, 255, 1)' ?> 25%, transparent 25%,
                  transparent 50%, <?php echo (isset($allSlider[350]) && $allSlider[350]) ? $allSlider[350] : 'rgba(0, 208, 255, 1)' ?> 50%, <?php echo (isset($allSlider[350]) && $allSlider[350]) ? $allSlider[350] : 'rgba(0, 208, 255, 1)' ?> 75%,
                  transparent 75%, transparent);
            <?php
            }else if(!isset($allSlider[347])){
							?>
							background-image: linear-gradient(135deg, <?php echo (isset($allSlider[350]) && $allSlider[350]) ? $allSlider[350] : 'rgba(0, 208, 255, 1)' ?> 25%, transparent 25%,
                  transparent 50%, <?php echo (isset($allSlider[350]) && $allSlider[350]) ? $allSlider[350] : 'rgba(0, 208, 255, 1)' ?> 50%, <?php echo (isset($allSlider[350]) && $allSlider[350]) ? $allSlider[350] : 'rgba(0, 208, 255, 1)' ?> 75%,
                  transparent 75%, transparent);
							<?php
						}
            ?>
         }
      </style> 
