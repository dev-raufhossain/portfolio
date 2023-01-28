
<div id="tab-11">
  <div class="row">
    <div class="wpm-col-6">
      <table class="table table-responsive wpm_6310_admin_table" width="100%">
        <tr>
          <td>
            <b>Select Modal Template</b><br />
            <small style="color:#FF0000">(No live preview)</small>
          </td>
          <td>
            <select name="modal_template_number" class="wpm-form-input" id="modal_template_number">
              <?php
              $modal_template = isset($allSlider[131]) ? $allSlider[131] : 1;
              for ($i = 1; $i <= 6; $i++) {
                $selected = ($i == $modal_template) ? ' selected' : '';
                if ($i != 1) {
                  echo "<option value='{$i}'{$selected}>Template 0{$i} <span class='wpm-6310-pro'>(Pro)</span></option>";
                }
                else {
                  echo "<option value='{$i}'{$selected}>Template 0{$i}</option>";
                }
              }
              ?>
            </select>
          </td>
        </tr>
      </table>
    </div>
    <div class="wpm-col-6">
      <table class="table table-responsive">
        <tr>
          <td>
            <a href='https://www.wpmart.org/wp-content/wpm-templates/modal_<?php echo $modal_template ?>.png' target="_blank" class="modal-demo-image"><img src="https://www.wpmart.org/wp-content/wpm-templates/modal_<?php echo $modal_template ?>.png" style="width: auto; height: 70px;" /></a>
            <small style="color:blue; display:block;">(Click to preview template design)</small>
          </td>
        </tr>
      </table>
    </div>
    <br class="wpm-6310-clear" />
  </div>
  <hr />

  <!-- Modal Template 01 Settings -->
  <div class="row modal-template-field-1 modal-template-field">
    <div class="wpm-col-6">
      <table class="table table-responsive wpm_6310_admin_table" width="100%">
        <tr>
          <td>
            <b>Template 1 Settings</b><br />
            <small style="color:#FF0000">(No live preview)</small>
          </td>
          <td>

          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_01_name_font_size" id="wpm_modal_01_name_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[132]) && $allSlider[132] !== '') ? $allSlider[132] : '22' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_01_name_font_family" id="wpm_modal_01_name_font_family" type="text" value="<?php echo (isset($allSlider[142]) && $allSlider[142] !== '') ? $allSlider[142] : 'Arimo' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_01_name_font_color" id="wpm_modal_01_name_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[133]) && $allSlider[133] !== '') ? $allSlider[133] : 'rgb(17, 1, 0)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_01_designation_font_size" id="wpm_modal_01_designation_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[134]) && $allSlider[134] !== '') ? $allSlider[134] : '14' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_01_designation_font_family" id="wpm_modal_01_designation_font_family" type="text" value="<?php echo (isset($allSlider[143]) && $allSlider[143] !== '') ? $allSlider[143] : 'Arimo' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_01_designation_font_color" id="wpm_modal_01_designation_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[135]) && $allSlider[135] !== '') ? $allSlider[135] : 'rgb(0, 0, 0)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Descritiption Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_01_description_font_size" id="wpm_modal_01_description_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[136]) && $allSlider[136] !== '') ? $allSlider[136] : '14' ?>" size="20">
          </td>
        </tr>
      </table>
    </div>
    <div class="wpm-col-6">
      <table class="table table-responsive wpm_6310_admin_table" width="100%">
        <tr height ="45">
          <td>Description Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_01_description_font_family" id="wpm_modal_01_description_font_family" type="text" value="<?php echo (isset($allSlider[144]) && $allSlider[144] !== '') ? $allSlider[144] : 'Arimo' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Descritiption Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_01_description_font_color" id="wpm_modal_01_description_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[137]) && $allSlider[137] !== '') ? $allSlider[137] : 'rgb(0, 0, 0)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Label/Icon Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_01_contact_label_font_size" id="wpm_modal_01_contact_label_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[138]) && $allSlider[138] !== '') ? $allSlider[138] : '18' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Label/Icon Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_01_contact_label_font_family" id="wpm_modal_01_contact_label_font_family" type="text" value="<?php echo (isset($allSlider[145]) && $allSlider[145] !== '') ? $allSlider[145] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Label/Icon Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_01_contact_label_font_color" id="wpm_modal_01_contact_label_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[139]) && $allSlider[139] !== '') ? $allSlider[139] : 'rgb(0, 100, 0)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_01_contact_content_font_size" id="wpm_modal_01_contact_content_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[140]) && $allSlider[140] !== '') ? $allSlider[140] : '14' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_01_contact_content_font_family" id="wpm_modal_01_contact_content_font_family" type="text" value="<?php echo (isset($allSlider[146]) && $allSlider[146] !== '') ? $allSlider[146] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_01_contact_content_font_color" id="wpm_modal_01_contact_content_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[141]) && $allSlider[141] !== '') ? $allSlider[141] : 'rgb(0, 0, 0)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Skill Label Font Color 
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <input type="text" name="modal_01_skill_label_font_color" id="wpm_modal_01_skill_label_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[356]) && $allSlider[356] !== '') ? $allSlider[356] : 'rgb(0, 0, 0)' ?>" size="20">
          </td>
        </tr>
      </table>
    </div>
  </div>

  <!-- Modal Template 02 Settings -->
  <div class="row modal-template-field-2 modal-template-field">
    <div class="wpm-col-6">
      <table class="table table-responsive wpm_6310_admin_table" width="100%">
        <tr>
          <td>
            <b>Template 2 Settings</b><br />
            <small style="color:#FF0000">(No live preview)</small>
          </td>
          <td>

          </td>
        </tr>
        <tr height ="45">
          <td>Custom Text
          <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_02_custom_text" class="wpm-form-input" value="<?php echo isset($allSlider[176]) ? wpm_6310_replace($allSlider[176]) : "HI I'M" ?>">
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_02_name_font_size" id="wpm_modal_02_name_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[161]) && $allSlider[161] !== '') ? $allSlider[161] : '30' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_02_name_font_family" id="wpm_modal_02_name_font_family" type="text" value="<?php echo (isset($allSlider[171]) && $allSlider[171] !== '') ? $allSlider[171] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_02_name_font_color" id="wpm_modal_02_name_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[162]) && $allSlider[162] !== '') ? $allSlider[162] : 'rgb(0, 150, 136)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_02_designation_font_size" id="wpm_modal_02_designation_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[163]) && $allSlider[163] !== '') ? $allSlider[163] : '20' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_02_designation_font_family" id="wpm_modal_02_designation_font_family" type="text" value="<?php echo (isset($allSlider[172]) && $allSlider[172] !== '') ? $allSlider[172] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_02_designation_font_color" id="wpm_modal_02_designation_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[164]) && $allSlider[164] !== '') ? $allSlider[164] : 'rgb(96, 125, 139)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Descritiption Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_02_description_font_size" id="wpm_modal_02_description_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[165]) && $allSlider[165] !== '') ? $allSlider[165] : '16' ?>" size="20">
          </td>
        </tr>
      </table>
    </div>
    <div class="wpm-col-6">
      <table class="table table-responsive wpm_6310_admin_table" width="100%">
        <tr height ="45">
          <td>Description Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_02_description_font_family" id="wpm_modal_02_description_font_family" type="text" value="<?php echo (isset($allSlider[173]) && $allSlider[173] !== '') ? $allSlider[173] : 'Arimo' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Descritiption Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_02_description_font_color" id="wpm_modal_02_description_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[166]) && $allSlider[166] !== '') ? $allSlider[166] : 'rgb(0, 0, 0)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Label/Icon Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_02_contact_label_font_size" id="wpm_modal_02_contact_label_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[167]) && $allSlider[167] !== '') ? $allSlider[167] : '15' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Label/Icon Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_02_contact_label_font_family" id="wpm_modal_02_contact_label_font_family" type="text" value="<?php echo (isset($allSlider[174]) && $allSlider[174] !== '') ? $allSlider[174] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Label/Icon Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_02_contact_label_font_color" id="wpm_modal_02_contact_label_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[168]) && $allSlider[168] !== '') ? $allSlider[168] : 'rgb(128, 128, 128)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_02_contact_content_font_size" id="wpm_modal_02_contact_content_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[169]) && $allSlider[169] !== '') ? $allSlider[169] : '15' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_02_contact_content_font_family" id="wpm_modal_02_contact_content_font_family" type="text" value="<?php echo (isset($allSlider[175]) && $allSlider[175] !== '') ? $allSlider[175] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_02_contact_content_font_color" id="wpm_modal_02_contact_content_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[170]) && $allSlider[170] !== '') ? $allSlider[170] : 'rgb(0, 0, 0)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Skill Label Font Color <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
         
          <td>
            <input type="text" name="modal_02_skill_label_font_color" id="wpm_modal_02_skill_label_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[357]) && $allSlider[357] !== '') ? $allSlider[357] : 'rgb(0, 0, 0)' ?>" size="20">
          </td>
        </tr>
      </table>
    </div>
  </div>

  <!-- Modal Template 03 Settings -->
  <div class="row modal-template-field-3 modal-template-field">
    <div class="wpm-col-6">
      <table class="table table-responsive wpm_6310_admin_table" width="100%">
        <tr>
          <td>
            <b>Template 3 Settings</b><br />
            <small style="color:#FF0000">(No live preview)</small>
          </td>
          <td>

          </td>
        </tr>
        <tr height ="45">
          <td>Custom Text
          <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_03_custom_text" class="wpm-form-input" value="<?php echo isset($allSlider[207])  ? wpm_6310_replace($allSlider[207]) : "I'm" ?>">
          </td>
        </tr>
        <tr height ="45">
          <td>Custom ToolTip
          <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_03_custom_tooltip" class="wpm-form-input" value="<?php echo isset($allSlider[208])  ? wpm_6310_replace($allSlider[208]) : "HELLO" ?>">
          </td>
        </tr>
        <tr height ="45">
          <td>Accent Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_03_accent_color" id="wpm_modal_03_accent_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[206]) && $allSlider[206] !== '') ? $allSlider[206] : 'rgb(7, 203, 121)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_03_name_font_size" id="wpm_modal_03_name_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[191]) && $allSlider[191] !== '') ? $allSlider[191] : '30' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_03_name_font_family" id="wpm_modal_03_name_font_family" type="text" value="<?php echo (isset($allSlider[201]) && $allSlider[201] !== '') ? $allSlider[201] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_03_name_font_color" id="wpm_modal_03_name_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[192]) && $allSlider[192] !== '') ? $allSlider[192] : 'rgb(7, 203, 121)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_03_designation_font_size" id="wpm_modal_03_designation_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[193]) && $allSlider[193] !== '') ? $allSlider[193] : '18' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_03_designation_font_family" id="wpm_modal_03_designation_font_family" type="text" value="<?php echo (isset($allSlider[202]) && $allSlider[202] !== '') ? $allSlider[202] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_03_designation_font_color" id="wpm_modal_03_designation_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[194]) && $allSlider[194] !== '') ? $allSlider[194] : 'rgb(128, 128, 128)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Descritiption Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_03_description_font_size" id="wpm_modal_03_description_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[195]) && $allSlider[195] !== '') ? $allSlider[195] : '16' ?>" size="20">
          </td>
        </tr>
      </table>
    </div>
    <div class="wpm-col-6">
      <table class="table table-responsive wpm_6310_admin_table" width="100%">
        <tr height ="45">
          <td>Description Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_03_description_font_family" id="wpm_modal_03_description_font_family" type="text" value="<?php echo (isset($allSlider[203]) && $allSlider[203] !== '') ? $allSlider[203] : 'Arimo' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Descritiption Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_03_description_font_color" id="wpm_modal_03_description_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[196]) && $allSlider[196] !== '') ? $allSlider[196] : 'rgb(0, 0, 0)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Label/Icon Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_03_contact_label_font_size" id="wpm_modal_03_contact_label_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[197]) && $allSlider[197] !== '') ? $allSlider[197] : '15' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Label/Icon Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_03_contact_label_font_family" id="wpm_modal_03_contact_label_font_family" type="text" value="<?php echo (isset($allSlider[204]) && $allSlider[204] !== '') ? $allSlider[204] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Label/Icon Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_03_contact_label_font_color" id="wpm_modal_03_contact_label_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[198]) && $allSlider[198] !== '') ? $allSlider[198] : 'rgb(0, 0, 0)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_03_contact_content_font_size" id="wpm_modal_03_contact_content_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[199]) && $allSlider[199] !== '') ? $allSlider[199] : '15' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_03_contact_content_font_family" id="wpm_modal_03_contact_content_font_family" type="text" value="<?php echo (isset($allSlider[205]) && $allSlider[205] !== '') ? $allSlider[205] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_03_contact_content_font_color" id="wpm_modal_03_contact_content_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[200]) && $allSlider[200] !== '') ? $allSlider[200] : 'rgb(128, 128, 128)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Skill Label Font Color <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          
          <td>
            <input type="text" name="modal_03_skill_label_font_color" id="wpm_modal_03_skill_label_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[358]) && $allSlider[358] !== '') ? $allSlider[358] : 'rgb(0, 0, 0)' ?>" size="20">
          </td>
        </tr>
      </table>
    </div>
  </div>

  <!-- Modal Template 04 Settings -->
  <div class="row modal-template-field-4 modal-template-field">
    <div class="wpm-col-6">
      <table class="table table-responsive wpm_6310_admin_table" width="100%">
        <tr>
          <td>
            <b>Template 4 Settings</b><br />
            <small style="color:#FF0000">(No live preview)</small>
          </td>
          <td>

          </td>
        </tr>
        <tr height ="45">
          <td>Accent Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_04_accent_color" id="wpm_modal_04_accent_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[236]) && $allSlider[236] !== '') ? $allSlider[236] : 'rgb(6, 167, 99)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_04_name_font_size" id="wpm_modal_04_name_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[221]) && $allSlider[221] !== '') ? $allSlider[221] : '30' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_04_name_font_family" id="wpm_modal_04_name_font_family" type="text" value="<?php echo (isset($allSlider[231]) && $allSlider[231] !== '') ? $allSlider[231] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_04_name_font_color" id="wpm_modal_04_name_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[222]) && $allSlider[222] !== '') ? $allSlider[222] : 'rgb(255, 255, 255)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_04_designation_font_size" id="wpm_modal_04_designation_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[223]) && $allSlider[223] !== '') ? $allSlider[223] : '18' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_04_designation_font_family" id="wpm_modal_04_designation_font_family" type="text" value="<?php echo (isset($allSlider[232]) && $allSlider[232] !== '') ? $allSlider[232] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_04_designation_font_color" id="wpm_modal_04_designation_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[224]) && $allSlider[224] !== '') ? $allSlider[224] : 'rgb(255, 255, 0)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Descritiption Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_04_description_font_size" id="wpm_modal_04_description_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[225]) && $allSlider[225] !== '') ? $allSlider[225] : '16' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Descritiption Font Color</td>
          <td>
            <input type="text" name="modal_04_description_font_color" id="wpm_modal_04_description_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[226]) && $allSlider[226] !== '') ? $allSlider[226] : 'rgb(68, 68, 68)' ?>" size="20">
          </td>
        </tr>
      </table>
    </div>
    <div class="wpm-col-6">
      <table class="table table-responsive wpm_6310_admin_table" width="100%">
        <tr height ="45">
          <td>Description Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_04_description_font_family" id="wpm_modal_04_description_font_family" type="text" value="<?php echo (isset($allSlider[233]) && $allSlider[233] !== '') ? $allSlider[233] : 'Arimo' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Descritiption Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_04_description_font_color" id="wpm_modal_04_description_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[226]) && $allSlider[226] !== '') ? $allSlider[226] : 'rgb(68, 68, 68)' ?>" size="20">
          </td>
        </tr>
        <tr>
          <td>Description Text Align
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <select name="modal_04_description_text_align" class="wpm-form-input" id="wpm_modal_04_description_text_align">
              <option value="center" <?php if (isset($allSlider[238]) && $allSlider[238] == 'center') echo "selected=''" ?> >
                Center</option>
              <option value="left" <?php if (isset($allSlider[238]) && $allSlider[238] == 'left') echo "selected=''" ?> >Left
              </option>
              <option value="right" <?php if (isset($allSlider[238]) && $allSlider[238] == 'right') echo "selected=''" ?> >Right
              </option>
            </select>
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Background Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_04_contact_background_color" id="wpm_modal_04_contact_background_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[237]) && $allSlider[237] !== '') ? $allSlider[237] : 'rgb(68, 68, 68)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Label/Icon Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_04_contact_label_font_size" id="wpm_modal_04_contact_label_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[227]) && $allSlider[227] !== '') ? $allSlider[227] : '15' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Label/Icon Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_04_contact_label_font_family" id="wpm_modal_04_contact_label_font_family" type="text" value="<?php echo (isset($allSlider[234]) && $allSlider[234] !== '') ? $allSlider[234] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Label/Icon Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_04_contact_label_font_color" id="wpm_modal_04_contact_label_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[228]) && $allSlider[228] !== '') ? $allSlider[228] : 'rgb(255, 255, 255)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_04_contact_content_font_size" id="wpm_modal_04_contact_content_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[229]) && $allSlider[229] !== '') ? $allSlider[229] : '15' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_04_contact_content_font_family" id="wpm_modal_04_contact_content_font_family" type="text" value="<?php echo (isset($allSlider[235]) && $allSlider[235] !== '') ? $allSlider[235] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_04_contact_content_font_color" id="wpm_modal_04_contact_content_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[230]) && $allSlider[230] !== '') ? $allSlider[230] : 'rgb(255, 255, 255)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Skill Label Font Color <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          
          <td>
            <input type="text" name="modal_04_skill_label_font_color" id="wpm_modal_04_skill_label_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[359]) && $allSlider[359] !== '') ? $allSlider[359] : 'rgb(0, 0, 0)' ?>" size="20">
          </td>
        </tr>
      </table>
    </div>
  </div>


  <!-- Modal Template 05 Settings -->
  <div class="row modal-template-field-5 modal-template-field">
    <div class="wpm-col-6">
      <table class="table table-responsive wpm_6310_admin_table" width="100%">
        <tr>
          <td>
            <b>Template 5 Settings</b><br />
            <small style="color:#FF0000">(No live preview)</small>
          </td>
          <td>

          </td>
        </tr>
        <tr height ="45">
          <td>Accent Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_05_accent_color" id="wpm_modal_05_accent_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[266]) && $allSlider[266] !== '') ? $allSlider[266] : 'rgb(7, 203, 121)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_05_name_font_size" id="wpm_modal_05_name_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[251]) && $allSlider[251] !== '') ? $allSlider[251] : '25' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_05_name_font_family" id="wpm_modal_05_name_font_family" type="text" value="<?php echo (isset($allSlider[261]) && $allSlider[261] !== '') ? $allSlider[261] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_05_name_font_color" id="wpm_modal_05_name_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[252]) && $allSlider[252] !== '') ? $allSlider[252] : 'rgb(255, 255, 255)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_05_designation_font_size" id="wpm_modal_05_designation_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[253]) && $allSlider[253] !== '') ? $allSlider[253] : '20' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_05_designation_font_family" id="wpm_modal_05_designation_font_family" type="text" value="<?php echo (isset($allSlider[262]) && $allSlider[262] !== '') ? $allSlider[262] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_05_designation_font_color" id="wpm_modal_05_designation_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[254]) && $allSlider[254] !== '') ? $allSlider[254] : 'rgb(68, 68, 68)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Descritiption Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_05_description_font_size" id="wpm_modal_05_description_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[255]) && $allSlider[255] !== '') ? $allSlider[255] : '16' ?>" size="20">
          </td>
        </tr>
      </table>
    </div>
    <div class="wpm-col-6">
      <table class="table table-responsive wpm_6310_admin_table" width="100%">
        <tr height ="45">
          <td>Description Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_05_description_font_family" id="wpm_modal_05_description_font_family" type="text" value="<?php echo (isset($allSlider[263]) && $allSlider[263] !== '') ? $allSlider[263] : 'Arimo' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Descritiption Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_05_description_font_color" id="wpm_modal_05_description_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[256]) && $allSlider[256] !== '') ? $allSlider[256] : 'rgb(190, 190, 190)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Label/Icon Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_05_contact_label_font_size" id="wpm_modal_05_contact_label_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[257]) && $allSlider[257] !== '') ? $allSlider[257] : '15' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Label/Icon Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_05_contact_label_font_family" id="wpm_modal_05_contact_label_font_family" type="text" value="<?php echo (isset($allSlider[264]) && $allSlider[264] !== '') ? $allSlider[264] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Label/Icon Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_05_contact_label_font_color" id="wpm_modal_05_contact_label_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[258]) && $allSlider[258] !== '') ? $allSlider[258] : 'rgb(255, 255, 255)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_05_contact_content_font_size" id="wpm_modal_05_contact_content_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[259]) && $allSlider[259] !== '') ? $allSlider[259] : '15' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_05_contact_content_font_family" id="wpm_modal_05_contact_content_font_family" type="text" value="<?php echo (isset($allSlider[265]) && $allSlider[265] !== '') ? $allSlider[265] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_05_contact_content_font_color" id="wpm_modal_05_contact_content_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[260]) && $allSlider[260] !== '') ? $allSlider[260] : 'rgb(190, 190, 190)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Skill Label Font Color <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
         
          <td>
            <input type="text" name="modal_05_skill_label_font_color" id="wpm_modal_05_skill_label_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[355]) && $allSlider[355] !== '') ? $allSlider[355] : 'rgb(255, 255, 255)' ?>" size="20">
          </td>
        </tr>
      </table>
    </div>
  </div>


  <!-- Modal Template 06 Settings -->
  <div class="row modal-template-field-6 modal-template-field">
    <div class="wpm-col-6">
      <table class="table table-responsive wpm_6310_admin_table" width="100%">
        <tr>
          <td>
            <b>Template 6 Settings</b><br />
            <small style="color:#FF0000">(No live preview)</small>
          </td>
          <td>

          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_06_name_font_size" id="wpm_modal_06_name_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[281]) && $allSlider[281] !== '') ? $allSlider[281] : '25' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_06_name_font_family" id="wpm_modal_06_name_font_family" type="text" value="<?php echo (isset($allSlider[291]) && $allSlider[291] !== '') ? $allSlider[291] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_06_name_font_color" id="wpm_modal_06_name_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[282]) && $allSlider[282] !== '') ? $allSlider[282] : 'rgb(101, 97, 97)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_06_designation_font_size" id="wpm_modal_06_designation_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[283]) && $allSlider[283] !== '') ? $allSlider[283] : '18' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_06_designation_font_family" id="wpm_modal_06_designation_font_family" type="text" value="<?php echo (isset($allSlider[292]) && $allSlider[292] !== '') ? $allSlider[292] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_06_designation_font_color" id="wpm_modal_06_designation_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[284]) && $allSlider[284] !== '') ? $allSlider[284] : 'rgb(140, 140, 140)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Descritiption Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_06_description_font_size" id="wpm_modal_06_description_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[285]) && $allSlider[285] !== '') ? $allSlider[285] : '16' ?>" size="20">
          </td>
        </tr>
      </table>
    </div>
    <div class="wpm-col-6">
      <table class="table table-responsive wpm_6310_admin_table" width="100%">
        <tr height ="45">
          <td>Description Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_06_description_font_family" id="wpm_modal_06_description_font_family" type="text" value="<?php echo (isset($allSlider[293]) && $allSlider[293] !== '') ? $allSlider[293] : 'Arimo' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Descritiption Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_06_description_font_color" id="wpm_modal_06_description_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[286]) && $allSlider[286] !== '') ? $allSlider[286] : 'rgb(53, 53, 53)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Label/Icon Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_06_contact_label_font_size" id="wpm_modal_06_contact_label_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[287]) && $allSlider[287] !== '') ? $allSlider[287] : '15' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Label/Icon Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_06_contact_label_font_family" id="wpm_modal_06_contact_label_font_family" type="text" value="<?php echo (isset($allSlider[294]) && $allSlider[294] !== '') ? $allSlider[294] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Label/Icon Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_06_contact_label_font_color" id="wpm_modal_06_contact_label_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[288]) && $allSlider[288] !== '') ? $allSlider[288] : 'rgb(0, 100, 0)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Size
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="number" name="modal_06_contact_content_font_size" id="wpm_modal_06_contact_content_font_size" class="wpm-form-input" value="<?php echo (isset($allSlider[289]) && $allSlider[289] !== '') ? $allSlider[289] : '15' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Family
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input name="modal_06_contact_content_font_family" id="wpm_modal_06_contact_content_font_family" type="text" value="<?php echo (isset($allSlider[295]) && $allSlider[295] !== '') ? $allSlider[295] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Color
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
          </td>
          <td>
            <input type="text" name="modal_06_contact_content_font_color" id="wpm_modal_06_contact_content_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[290]) && $allSlider[290] !== '') ? $allSlider[290] : 'rgb(68, 68, 68)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Skill Label Font Color <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          
          <td>
            <input type="text" name="modal_06_skill_label_font_color" id="wpm_modal_06_skill_label_font_color" class="wpm-form-input wpm_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($allSlider[360]) && $allSlider[360] !== '') ? $allSlider[360] : 'rgb(0, 0, 0)' ?>" size="20">
          </td>
        </tr>
      </table>
    </div>
  </div>


</div>

<script>
  jQuery(document).ready(function() {
    jQuery('.modal-template-field').hide();
    <?php
    echo "jQuery('.modal-template-field-{$modal_template}').show();";
    ?>

    jQuery('body').on('change', '#modal_template_number', function() {
      var num = jQuery(this).val();
      var url = `https://www.wpmart.org/wp-content/wpm-templates/modal_${num}.png`;
      jQuery('.modal-demo-image').attr('href', url);
      jQuery('.modal-demo-image img').attr('src', url);
      jQuery('.modal-template-field').hide();
      jQuery(`.modal-template-field-${num}`).show();
    });
  });
</script>