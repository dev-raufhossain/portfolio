<div id="tab-12">
  <div class="row">
    <div class="wpm-col-6">
      <table class="table table-responsive wpm_6310_admin_table">
        <tr>
          <td>
            <b>Activate read more</b> <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span><br/>
          </td>
          <td>
            <label class="switch" for="read_more_activation">
              <input type="checkbox" name="read_more_activation" id="read_more_activation" value="1" <?php echo ((isset($allSlider[311]) && $allSlider[311]) ? 'checked' : '') ?>>
              <span class="slider round"></span>              
            </label>            
          </td>
          
        </tr>
        <tr  class="read_more_act_field">
        <td><b>Read More Text</b> <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
        <td>
          <input type="text" min="0" name="read_more_text" value="<?php echo (isset($allSlider[312]) && $allSlider[312]) ? wpm_6310_replace($allSlider[312]) : 'Read more' ?>" class="wpm-form-input" step="1" id="read_more_text" />
        </td>
      </tr>
      <tr  class="read_more_act_field">
        <td><b>Read More Height</b> <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
        <td>
          <input type="number" min="0" name="read_more_height" value="<?php echo (isset($allSlider[313]) && $allSlider[313]) ? $allSlider[313] : 33 ?>" class="wpm-form-input" step="1" id="read_more_height" />
        </td>
      </tr>
      <tr  class="read_more_act_field">
        <td><b>Read More Width</b> <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
        <td>
          <input type="number" name="read_more_width" class="wpm-form-input" id="read_more_width" value="<?php echo (isset($allSlider[314]) && $allSlider[314]) ? $allSlider[314] : 120 ?>">
        </td>
      </tr>
      <tr  class="read_more_act_field">
        <td><b>Read More Font Size</b> <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
        <td>
          <input type="number" min="0" name="read_more_font_size" value="<?php echo (isset($allSlider[315]) && $allSlider[315]) ? $allSlider[315] : 12 ?>" class="wpm-form-input" step="1" id="read_more_font_size" />
        </td>
      </tr>

      <tr  class="read_more_act_field">
        <td><b>Read More Font Color</b> <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
        <td>
          <input type="text" name="read_more_font_color" id="read_more_font_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" value="<?php echo (isset($allSlider[316]) && $allSlider[316]) ? $allSlider[316] : 'rgb(255, 255, 255)' ?>">
        </td>
      </tr>
      <tr  class="read_more_act_field">
        <td><b>Read More Font Hover Color</b> <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
        <td>
          <input type="text" name="read_more_font_hover_color" id="read_more_font_hover_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" value="<?php echo (isset($allSlider[317]) && $allSlider[317]) ? $allSlider[317] : 'rgb(255, 255, 255)' ?>">
        </td>
      </tr>
      <tr  class="read_more_act_field">
        <td><b>Read More Border Width</b> <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
        <td>
          <select name="read_more_border_width" class="wpm-form-input" id="read_more_border_width">
            <option value="0" <?php if (isset($allSlider[318]) && $allSlider[318] == '0') echo " selected=''" ?>>None
            </option> 
            <option value="1" <?php if (isset($allSlider[318]) && $allSlider[318] == '1') echo " selected=''" ?>>1
            </option>
            <option value="2" <?php if (isset($allSlider[318]) && $allSlider[318] == '2') echo " selected=''" ?>>2
            </option>
            <option value="3" <?php if (isset($allSlider[318]) && $allSlider[318] == '3') echo " selected=''" ?>>3
            </option>
            <option value="4" <?php if (isset($allSlider[318]) && $allSlider[318] == '4') echo " selected=''" ?>>4
            </option>
            <option value="5" <?php if (isset($allSlider[318]) && $allSlider[318] == '5') echo " selected=''" ?>>5
            </option>
          </select>
        </td>
      </tr>
      <tr  class="read_more_act_field">
        <td><b>Read More Border Color</b> <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
        <td>
          <input type="text" name="read_more_border_color" id="read_more_border_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" value="<?php echo (isset($allSlider[319]) && $allSlider[319]) ? $allSlider[319] : 'rgb(255, 0, 98)' ?>">
        </td>
      </tr>
      <tr  class="read_more_act_field">
        <td><b>Read More Border Hover Color</b> <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
        <td>
          <input type="text" name="read_more_border_hover_color" id="read_more_border_hover_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" value="<?php echo (isset($allSlider[320]) && $allSlider[320]) ? $allSlider[320] : 'rgb(255, 0, 98)' ?>">
        </td>
      </tr>      
      </table>
    </div>
    <div class="wpm-col-6">
      <table class="table table-responsive wpm_6310_admin_table">
      <tr  class="read_more_act_field">
          <td><b>Read More Background Color</b> <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <input type="text" name="read_more_background_color" id="read_more_background_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" value="<?php echo (isset($allSlider[322]) && $allSlider[322]) ? $allSlider[322] : 'rgb(49, 204, 199)' ?>">
          </td>
        </tr>
        <tr  class="read_more_act_field">
          <td><b>Read More Background Hover Color</b> <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <input type="text" name="read_more_background_hover_color" id="read_more_background_hover_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" value="<?php echo (isset($allSlider[323]) && $allSlider[323]) ? $allSlider[323] : 'rgb(204, 49, 90)' ?>">
          </td>
        </tr>
        <tr  class="read_more_act_field">
          <td><b>Read More Font Weight</b> <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
          <select name="read_more_font_weight" class="wpm-form-input" id="read_more_font_weight">
            <option value="100" <?php if (isset($allSlider[324]) && $allSlider[324] == '100') echo " selected=''" ?>>100</option>
            <option value="200" <?php if (isset($allSlider[324]) && $allSlider[324] == '200') echo " selected=''" ?>>200</option>
            <option value="300" <?php if (isset($allSlider[324]) && $allSlider[324] == '300') echo " selected=''" ?>>300</option>
            <option value="400" <?php if (isset($allSlider[324]) && $allSlider[324] == '400') echo " selected=''" ?>>400</option>
            <option value="500" <?php if (isset($allSlider[324]) && $allSlider[324] == '500') echo " selected=''" ?>>500</option>
            <option value="600" <?php if (isset($allSlider[324]) && $allSlider[324] == '600') echo " selected=''" ?>>600</option>
            <option value="700" <?php if (isset($allSlider[324]) && $allSlider[324] == '700') echo " selected=''" ?>>700</option>
            <option value="800" <?php if (isset($allSlider[324]) && $allSlider[324] == '800') echo " selected=''" ?>>800</option>
            <option value="900" <?php if (isset($allSlider[324]) && $allSlider[324] == '900') echo " selected=''" ?>>900</option>
            <option value="normal" <?php if (isset($allSlider[324]) && $allSlider[324] == 'normal') echo " selected=''" ?>>Normal
            </option>
            <option value="bold" <?php if (isset($allSlider[324]) && $allSlider[324] == 'bold') echo " selected=''" ?>>Bold</option>
            <option value="lighter" <?php if (isset($allSlider[324]) && $allSlider[324] == 'lighter') echo " selected=''" ?>>Lighter
            </option>
            <option value="initial" <?php if (isset($allSlider[324]) && $allSlider[324] == 'initial') echo " selected=''" ?>>Initial
            </option>
          </select>            
          </td>
        </tr>
        <tr  class="read_more_act_field">
          <td><b>Read More Text Transform</b> <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
          <select name="read_more_text_transform" class="wpm-form-input" id="read_more_text_transform">
            <option value="capitalize" <?php if (isset($allSlider[325]) && $allSlider[325] == 'capitalize') echo " selected=''" ?>>
              Capitalize</option>
            <option value="uppercase" <?php if (isset($allSlider[325]) && $allSlider[325] == 'uppercase') echo " selected=''" ?>>
              Uppercase</option>
            <option value="lowercase" <?php if (isset($allSlider[325]) && $allSlider[325] == 'lowercase') echo " selected=''" ?>>
              Lowercase</option>
            <option value="none" <?php if (isset($allSlider[325]) && $allSlider[325] == 'none') echo " selected=''" ?>>As Input</option>
          </select>          
          </td>
        </tr>
        <tr  class="read_more_act_field">
          <td>
          <b>Read More Text Align</b> <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span> 
          <div class="wpm-6310-pro">*Preview-on-change  not available</div>
          </td>
          <td>
          <select name="read_more_text_align" class="wpm-form-input" id="read_more_text_align">
            <option value="center" <?php if (isset($allSlider[326]) && $allSlider[326] == 'center') echo " selected=''" ?>>
              Center</option>
            <option value="left" <?php if (isset($allSlider[326]) && $allSlider[326] == 'left') echo " selected=''" ?>>Left
            </option>
            <option value="right" <?php if (isset($allSlider[326]) && $allSlider[326] == 'right') echo " selected=''" ?>>Right
            </option>
          </select>        
          </td>
        </tr>
        <tr  class="read_more_act_field">
          <td><b>Read More Font Family</b> <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <input name="read_more_font_family" id="read_more_font_family" type="text" value="<?php echo isset($allSlider[327]) ? $allSlider[327]:'Amaranth' ?>" />
          </td>
        </tr>
        <tr  class="read_more_act_field">
          <td><b>Read More Margin Top</b> <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <input name="read_more_margin_top" id="read_more_margin_top" type="number" value="<?php echo (isset($allSlider[328]) && $allSlider[328]) ? $allSlider[328] : 0 ?>" class="wpm-form-input" />
          </td>
        </tr>
        <tr  class="read_more_act_field">
          <td><b>Read More Margin Bottom</b> <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <input name="read_more_margin_bottom" id="read_more_margin_bottom" type="number" value="<?php echo (isset($allSlider[329]) && $allSlider[329]) ? $allSlider[329] : 0 ?>" class="wpm-form-input" />
          </td>
        </tr>
        <tr  class="read_more_act_field">
        <td><b>Read More Border Radius</b> <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
        <td>
          <input type="number" name="read_more_border_radius" id="read_more_border_radius" class="wpm-form-input " value="<?php echo (isset($allSlider[321]) && $allSlider[321]) ? $allSlider[321] : 3 ?>">
        </td>
      </tr>
      </table>
    </div>
  </div>
</div>

<script>
  jQuery(document).ready(function(){
    <?php
      if(!(isset($allSlider[311]) && $allSlider[311] != '') ){       
        echo 'jQuery(".read_more_act_field").hide();';
      }
    ?>
    jQuery('body').on('click', '#read_more_activation', function(){
      if (jQuery(this).prop('checked') == true) {       

        jQuery(".wpm_6310_read_more_<?php echo $template_id; ?>, .read_more_act_field").show();
      }
      else{       
        jQuery(".wpm_6310_read_more_<?php echo $template_id; ?>, .read_more_act_field").hide();
      }
     
    });

   

    // Search
    jQuery("body").on("input", '#read_more_text', function () {   
        var value = jQuery(this).val();
        jQuery('.wpm_6310_read_more_<?php echo  $template_id; ?>_text').text(value);
    });
    jQuery(`
        #read_more_height, 
        #read_more_width,
        #read_more_font_size,
        #read_more_font_color,
        #read_more_font_hover_color,
        #read_more_border_width,
        #read_more_border_color,
        #read_more_border_hover_color,
        #read_more_background_color,
        #read_more_background_hover_color,
        #read_more_font_weight,
        #read_more_text_transform,
        #read_more_text_align,
        #read_more_font_family,
        #read_more_margin_top,
        #read_more_margin_bottom,
        #read_more_border_radius
    `).on("change", function () {
      var read_more_height = Number(jQuery('#read_more_height').val()); 
      var read_more_width = Number(jQuery('#read_more_width').val()); 
      var read_more_font_size = Number(jQuery('#read_more_font_size').val()); 
      var read_more_font_color = jQuery('#read_more_font_color').val();  
      var read_more_font_hover_color = jQuery('#read_more_font_hover_color').val(); 
      var read_more_border_width = jQuery('#read_more_border_width').val(); 
      var read_more_border_color = jQuery('#read_more_border_color').val(); 
      var read_more_border_hover_color = jQuery('#read_more_border_hover_color').val(); 
      var read_more_background_color = jQuery('#read_more_background_color').val(); 
      var read_more_background_hover_color = jQuery('#read_more_background_hover_color').val(); 
      var read_more_font_weight = jQuery('#read_more_font_weight').val(); 
      var read_more_text_transform = jQuery('#read_more_text_transform').val(); 
      var read_more_text_align = jQuery('#read_more_text_align').val(); 
      var read_more_font_family = jQuery('#read_more_font_family').val().replace(/\+/g, ' ');
      var read_more_margin_top = Number(jQuery('#read_more_margin_top').val()); 
      var read_more_margin_bottom = Number(jQuery('#read_more_margin_bottom').val()); 
      var read_more_border_radius = Number(jQuery('#read_more_border_radius').val()); 

      read_more_font_family = read_more_font_family.split(':');     
      jQuery(`<style type='text/css'>.wpm_6310_read_more_<?php echo $template_id; ?>_text{ 
          background: ${read_more_background_color};
          font-size: ${read_more_font_size}px;
          color: ${read_more_font_color};
          height: ${read_more_height}px;
          font-family: ${read_more_font_family};
          font-weight: ${read_more_font_weight};
          border-radius: ${read_more_border_radius}px;
          text-transform: ${read_more_text_transform};
          width: ${read_more_width}px;
          border: ${read_more_border_width}px solid ${read_more_border_color};
          margin-top: ${read_more_margin_top}px !important;
          margin-bottom: ${read_more_margin_bottom}px !important;
      }</style>`).appendTo(".wpm_6310_tabs_panel_preview");

      jQuery(`<style type='text/css'>.wpm_6310_read_more_<?php echo $template_id; ?>_text a{ 
        color: ${read_more_font_color};
        height: ${read_more_height}px;
        line-height: ${read_more_height}px;
      }</style>`).appendTo(".wpm_6310_tabs_panel_preview");

      jQuery(`<style type='text/css'>.wpm_6310_read_more_<?php echo $template_id; ?> .wpm_6310_read_more_<?php echo $template_id; ?>_text:hover{
        background-color: ${read_more_background_hover_color} !important;
			  color: ${read_more_font_hover_color};
			  border: ${read_more_border_width}px solid ${read_more_border_hover_color};
      }</style>`).appendTo(".wpm_6310_tabs_panel_preview");

      jQuery(`<style type='text/css'>.wpm_6310_read_more_<?php echo $template_id; ?> .wpm_6310_read_more_<?php echo $template_id; ?>_text:hover a
        color: ${read_more_font_hover_color} !important;
      }</style>`).appendTo(".wpm_6310_tabs_panel_preview");

      jQuery(`<style type='text/css'>.wpm_6310_read_more_<?php echo $template_id; ?> a:visited{
        background: ${read_more_background_color};
        color: ${read_more_font_color};
      }</style>`).appendTo(".wpm_6310_tabs_panel_preview");
    });

  });
</script>
<style>
.wpm_6310_tabs_panel_preview ul li a{
  box-sizing: content-box !important;
}
.wpm_6310_tabs_panel_preview ul li a[tooltip-href] {
  cursor: pointer;
}
</style>