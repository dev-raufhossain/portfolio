<div class="wpm-6310">
  <div class="wpm-6310-sm">
    <?php
    include wpm_6310_plugin_url . 'settings/helper/team-member-save.php';
    $numberOfWords = 0;
    $styleTemplate = 1;
    
    if (!empty($_POST['update_style_change']) && $_POST['update_style_change'] == 'Save' && $_POST['styleid'] != '') {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'wpm_nonce_field_form')) {
        die('You do not have sufficient permissions to access this pagess.');
      } else {
        $css = "";
        $css .= sanitize_text_field($_POST['item_per_row_data_desktop']) . "@@##@@" . sanitize_text_field($_POST['item_per_row_data_tablet']) . "@@##@@" . sanitize_text_field($_POST['item_per_row_data_mobile']);
        $css = "";
        $css .= sanitize_text_field($_POST['item_per_row_data_desktop']) . "@@##@@" . sanitize_text_field($_POST['item_per_row_data_tablet']) . "@@##@@" . sanitize_text_field($_POST['item_per_row_data_mobile']);
        $css .= "|";
        $css .= "|" . (isset($_POST['image_width']) ? sanitize_text_field($_POST['image_width']) : 100);       
        $css .= "|" . sanitize_text_field($_POST['border_bottom_height']);
        $css .= "|" . sanitize_text_field($_POST['border_bottom_color']);
        $css .= "|";
        //0 - 5


        $css .= "|nai";
        $css .= "|" . sanitize_text_field($_POST['border_bottom_hover_color']);
        $css .= "|" ;
        $css .= "|" ;
        $css .= "|" ;
        //6 - 10

        $css .= "|" . sanitize_text_field($_POST['member_font_size']);
        $css .= "|" . sanitize_text_field($_POST['member_font_color']);
        $css .= "|" . sanitize_text_field($_POST['member_font_hover_color']);
        $css .= "|";
        $css .= "|" . sanitize_text_field($_POST['member_font_weight']);
        //11 - 15

        $css .= "|" . sanitize_text_field($_POST['member_text_transform']);
        $css .= "|" . sanitize_text_field($_POST['member_font_family']);
        $css .= "|" . sanitize_text_field($_POST['member_line_height']);
        $css .= "|" . sanitize_text_field($_POST['designation_font_size']);
        $css .= "|" . sanitize_text_field($_POST['designation_font_color']);
        //16 - 20
        $css .= "|" . sanitize_text_field($_POST['designation_font_weight']);
        $css .= "|" . sanitize_text_field($_POST['designation_text_transform']);
        $css .= "|" . sanitize_text_field($_POST['designation_font_family']);
        $css .= "|" . sanitize_text_field($_POST['designation_line_height']);
        $css .= "|" . sanitize_text_field($_POST['designation_font_hover_color']);
        //21 - 25

        $css .= "|" . sanitize_text_field($_POST['social_icon_width']);
        $css .= "|" . sanitize_text_field($_POST['social_icon_height']);
        $css .= "|" . sanitize_text_field($_POST['social_border_width']);
        $css .= "|";
        $css .= "|" . sanitize_text_field($_POST['social_border_radius']);
        //26 - 30

        $css .= "|";
        $css .= "|" . sanitize_text_field($_POST['box_background']);
        $css .= "|" . (isset($_POST['social_activation']) ? sanitize_text_field($_POST['social_activation']) : 0);
        $css .= "|" . sanitize_text_field($_POST['box_hover_background']);
        $css .= "|" ;
        // 31 - 35

        $css .= "|" ;
        $css .= "|" ;
        $css .= "|" ;
        $css .= "|" ;
        $css .= "|" . sanitize_text_field($_POST['member_margin_top']);
        // 36 - 40

        $css .= "|" . sanitize_text_field($_POST['member_margin_bottom']);
        $css .= "|" . sanitize_text_field($_POST['designation_margin_top']);
        $css .= "|" . sanitize_text_field($_POST['designation_margin_bottom']);
        // 41-45


        include wpm_6310_plugin_url . 'settings/helper/slider_form_save.php';
      }
    }
    $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $styleId), ARRAY_A);
    $allStyle = explode("|", $styledata['css']);
    $allSlider = explode("|", $styledata['slider']);
    $results = wpm_6310_extract_members($styledata['memberid'], $styleId);
    $members = $results['members'];
    $filterList = $results['filter_activation'];

    $rows = explode("@@##@@", $allStyle[0]);
    $desktop_row = $rows[0];
    $tablet_row = isset($rows[1]) ? $rows[1] : 1;
    $mobile_row = isset($rows[2]) ? $rows[2] : 1;
    ?>

      <div class="wpm_6310_tabs_panel_settings">
        <form method="post">
          <?php wp_nonce_field("wpm_nonce_field_form") ?>
          <input type="hidden" name="styleid" value="<?php echo $styleId ?>" />
          <div class="wpm_6310_padding_15_px">
            <?php include wpm_6310_plugin_url . 'settings/helper/tab-menu.php'; ?>
          </div>
          <div class="wpm-tab-content">
          <div id="tab-1">
            <div class="row wpm_6310_padding_15_px">
              <div class="wpm-col-6">
                <table class="table table-responsive wpm_6310_admin_table">
                  <?php
                  wpm_6310_change_template($styledata['style_name'], $styleId);
                  wpm_items_per_row($styleId, $allStyle[0], $styledata['name'])
                  ?>
                  <tr>
                    <td><b>Items Alignment</b></td>
                    <td>
                      <select name="item_align" class="wpm-form-input" id="wpm_item_align">
                        <option value="center" <?php if (!isset($allSlider[126]) || (isset($allSlider[126]) && $allSlider[126] == 'center')) echo " selected=''" ?>>Center</option>
                        <option value="flex-start" <?php if (isset($allSlider[126]) && $allSlider[126] == 'flex-start') echo " selected=''" ?>>Left</option>
                        <option value="flex-end" <?php if (isset($allSlider[126]) && $allSlider[126] == 'flex-end') echo " selected=''" ?>>Right</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <b>Items Margin</b>
                      <div class="wpm-6310-pro">*Preview-on-change not available</div>
                    </td>
                    <td>
                      <input type="number" name="item_margin" id="wpm_item_margin" class="wpm-form-input" value="<?php echo (isset($allSlider[127]) && $allSlider[127]) ? $allSlider[127] : "15" ?>">
                    </td>
                  </tr>
                </table>
              </div>
              <div class="wpm-col-6">
                <table class="table table-responsive wpm_6310_admin_table">
                <tr>
                    <td><b>Image width(%)</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
                    </td>
                    <td>
                    <input type="number" min="0" name="image_width" value="<?php echo (isset($allStyle[2]) && $allStyle[2] !== '') ? $allStyle[2] : 100 ?>" class="wpm-form-input" id="wpm_image_width" />
                    </td>
                  </tr>
                  <tr>
                    <td><b>Border bottom Height</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
                    </td>
                    <td>
                      <input type="number" min="0" name="border_bottom_height" value="<?php echo (isset($allStyle[3]) && $allStyle[3] !== '') ? $allStyle[3] : 6 ?>" class="wpm-form-input" id="wpm_border_bottom_height" />
                    </td>
                  </tr>
                  <tr>
                    <td><b>Border bottom Color</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                    <td>
                      <input type="text" name="border_bottom_color" id="wpm_border_bottom_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" value="<?php echo (isset($allStyle[4]) && $allStyle[4] !== '') ? $allStyle[4] : '#e6e5e5' ?>">
                    </td>
                  </tr>
                 <tr>
                    <td><b>Border bottom Hover Color</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                    <td>
                      <input type="text" name="border_bottom_hover_color" id="wpm_border_bottom_hover_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" value="<?php echo (isset($allStyle[7]) && $allStyle[7] !== '') ? $allStyle[7] : 'rgb(22, 160, 133)' ?>">
                    </td>
                  </tr>
                  <tr>
                    <td><b>Box Background Color</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                    <td>
                      <input type="text" name="box_background" id="wpm_box_background" class="wpm-form-input wpm_6310_color_picker" data-opacity=".8" data-format="rgb" value="<?php echo (isset($allStyle[32]) && $allStyle[32] !== '') ? $allStyle[32] : 'rgb(22, 160, 133)' ?>">
                    </td>
                  </tr>
                  <tr>
                    <td><b>Box Hover Background color </b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                    <td>
                      <input type="text" name="box_hover_background" id="wpm_box_hover_background" class="wpm-form-input wpm_6310_color_picker" data-opacity=".8" data-format="rgb" value="<?php echo (isset($allStyle[34]) && $allStyle[34] !== '') ? $allStyle[34] : 'rgb(211, 84, 0)' ?>">
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div id="tab-2">
            <div class="row">
              <div class="wpm-col-6">
                <table class="table table-responsive wpm_6310_admin_table">
                  <tr>
                    <td><b>Font Size</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                    <td>
                      <input type="number" min="0" name="member_font_size" value="<?php echo $allStyle[11] ?>" class="wpm-form-input" step="1" id="wpm_member_font_size" />
                    </td>
                  </tr>
                  <tr>
                    <td><b>Font Color</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                    <td>
                      <input type="text" name="member_font_color" id="wpm_member_font_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" value="<?php echo $allStyle[12] ?>">
                    </td>
                  </tr>
                  <tr>
                    <td><b>Font Hover Color</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                    <td>
                      <input type="text" name="member_font_hover_color" id="wpm_member_font_hover_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" value="<?php echo $allStyle[13] ?>">
                    </td>
                  </tr>
                  <tr>
                    <td><b>Font Weight</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span><?php
                                          ?></td>
                    <td>
                      <select name="member_font_weight" class="wpm-form-input" id="wpm_member_font_weight">
                        <option value="100" <?php if ($allStyle[15] == '100') echo " selected=''" ?>>100</option>
                        <option value="200" <?php if ($allStyle[15] == '200') echo " selected=''" ?>>200</option>
                        <option value="300" <?php if ($allStyle[15] == '300') echo " selected=''" ?>>300</option>
                        <option value="400" <?php if ($allStyle[15] == '400') echo " selected=''" ?>>400</option>
                        <option value="500" <?php if ($allStyle[15] == '500') echo " selected=''" ?>>500</option>
                        <option value="600" <?php if ($allStyle[15] == '600') echo " selected=''" ?>>600</option>
                        <option value="700" <?php if ($allStyle[15] == '700') echo " selected=''" ?>>700</option>
                        <option value="800" <?php if ($allStyle[15] == '800') echo " selected=''" ?>>800</option>
                        <option value="900" <?php if ($allStyle[15] == '900') echo " selected=''" ?>>900</option>
                        <option value="normal" <?php if ($allStyle[15] == 'normal') echo " selected=''" ?>>Normal
                        </option>
                        <option value="bold" <?php if ($allStyle[15] == 'bold') echo " selected=''" ?>>Bold</option>
                        <option value="lighter" <?php if ($allStyle[15] == 'lighter') echo " selected=''" ?>>Lighter
                        </option>
                        <option value="initial" <?php if ($allStyle[15] == 'initial') echo " selected=''" ?>>Initial
                        </option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td><b>Text Transform</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span><?php
                                              ?></td>
                    <td>
                      <select name="member_text_transform" class="wpm-form-input" id="wpm_member_text_transform">
                        <option value="capitalize" <?php if ($allStyle[16] == 'capitalize') echo " selected=''" ?>>
                          Capitalize</option>
                        <option value="uppercase" <?php if ($allStyle[16] == 'uppercase') echo " selected=''" ?>>
                          Uppercase</option>
                        <option value="lowercase" <?php if ($allStyle[16] == 'lowercase') echo " selected=''" ?>>
                          Lowercase</option>
                        <option value="none" <?php if ($allStyle[16] == 'none') echo " selected=''" ?>>As Input</option>

                      </select>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="wpm-col-6">
                <table class="table table-responsive wpm_6310_admin_table">
                  <tr>
                    <td><b>Font Family</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                    <td>
                      <input name="member_font_family" id="wpm_jquery_heading_font" type="text" value="<?php echo $allStyle[17] ?>" />
                    </td>
                  </tr>
                  <tr>
                    <td><b>Line Height</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                    <td>
                      <input name="member_line_height" id="wpm_heading_line_height" type="number" min="0" value="<?php echo $allStyle[18] ?>" class="wpm-form-input" />
                    </td>
                  </tr>
                  <tr>
                    <td><b>Margin Top</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                    <td>
                      <input name="member_margin_top" id="wpm_member_margin_top" type="number" min="0" value="<?php echo (isset($allStyle[40]) && $allStyle[40] != '') ? $allStyle[40] : 0; ?>" class="wpm-form-input" />
                    </td>
                  </tr>
                  <tr>
                    <td><b>Margin Bottom</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                    <td>
                      <input name="member_margin_bottom" id="wpm_member_margin_bottom" type="number" min="0" value="<?php echo (isset($allStyle[41]) && $allStyle[41] !== '') ? $allStyle[41] : 10; ?>" class="wpm-form-input" />
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div id="tab-3">
            <div class="row">
              <div class="wpm-col-6">
                <table class="table table-responsive wpm_6310_admin_table">
                  <tr>
                    <td><b>Font Size</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                    <td>
                      <input type="number" min="0" name="designation_font_size" value="<?php echo $allStyle[19] ?>" class="wpm-form-input" step="1" id="wpm_designation_font_size" />
                    </td>
                  </tr>
                  <tr>
                    <td><b>Font Color</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                    <td>
                      <input type="text" name="designation_font_color" id="wpm_designation_font_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" value="<?php echo $allStyle[20] ?>">
                    </td>
                  </tr>
                  <tr>
                    <td><b>Font Hover Color</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                    <td>
                      <input type="text" name="designation_font_hover_color" id="wpm_designation_font_hover_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" value="<?php echo $allStyle[25] ?>">
                    </td>
                  </tr>
                  <tr>
                    <td><b>Font Weight</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span><?php
                                          ?></td>
                    <td>
                      <select name="designation_font_weight" class="wpm-form-input" id="wpm_designation_font_weight">
                        <option value="100" <?php if ($allStyle[21] == '100') echo " selected=''" ?>>100</option>
                        <option value="200" <?php if ($allStyle[21] == '200') echo " selected=''" ?>>200</option>
                        <option value="300" <?php if ($allStyle[21] == '300') echo " selected=''" ?>>300</option>
                        <option value="400" <?php if ($allStyle[21] == '400') echo " selected=''" ?>>400</option>
                        <option value="500" <?php if ($allStyle[21] == '500') echo " selected=''" ?>>500</option>
                        <option value="600" <?php if ($allStyle[21] == '600') echo " selected=''" ?>>600</option>
                        <option value="700" <?php if ($allStyle[21] == '700') echo " selected=''" ?>>700</option>
                        <option value="800" <?php if ($allStyle[21] == '800') echo " selected=''" ?>>800</option>
                        <option value="900" <?php if ($allStyle[21] == '900') echo " selected=''" ?>>900</option>
                        <option value="normal" <?php if ($allStyle[21] == 'normal') echo " selected=''" ?>>Normal
                        </option>
                        <option value="bold" <?php if ($allStyle[21] == 'bold') echo " selected=''" ?>>Bold</option>
                        <option value="lighter" <?php if ($allStyle[21] == 'lighter') echo " selected=''" ?>>Lighter
                        </option>
                        <option value="initial" <?php if ($allStyle[21] == 'initial') echo " selected=''" ?>>Initial
                        </option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td><b>Text Transform</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                    <td>
                      <select name="designation_text_transform" class="wpm-form-input" id="wpm_designation_text_transform">
                        <option value="capitalize" <?php if ($allStyle[22] == 'capitalize') echo " selected=''" ?>>
                          Capitalize</option>
                        <option value="uppercase" <?php if ($allStyle[22] == 'uppercase') echo " selected=''" ?>>
                          Uppercase</option>
                        <option value="lowercase" <?php if ($allStyle[22] == 'lowercase') echo " selected=''" ?>>
                          Lowercase</option>
                        <option value="none" <?php if ($allStyle[22] == 'none') echo " selected=''" ?>>As Input</option>

                      </select>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="wpm-col-6">
                <table class="table table-responsive wpm_6310_admin_table">
                  <tr>
                    <td><b>Font Family</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                    <td>
                      <input name="designation_font_family" id="wpm_jquery_designation_font" type="text" value="<?php echo $allStyle[23] ?>" />
                    </td>
                  </tr>
                  <tr>
                    <td><b>Line Height</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                    <td>
                      <input name="designation_line_height" id="wpm_designation_line_height" type="number" min="0" value="<?php echo $allStyle[24] ?>" class="wpm-form-input" />
                    </td>
                  </tr>
                  <tr>
                    <td><b>Margin Top</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                    <td>
                      <input name="designation_margin_top" id="wpm_designation_margin_top" type="number" min="0" value="<?php echo (isset($allStyle[42]) && $allStyle[42] !== '') ? $allStyle[42] : 0; ?>" class="wpm-form-input" />
                    </td>
                  </tr>
                  <tr>
                    <td><b>Margin Bottom</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                    <td>
                      <input name="designation_margin_bottom" id="wpm_designation_margin_bottom" type="number" min="0" value="<?php echo (isset($allStyle[43]) && $allStyle[43] !== '') ? $allStyle[43] : 0; ?>" class="wpm-form-input" />
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div id="tab-4">
            <div class="row">
              <div class="wpm-col-6">
                <table class="table table-responsive wpm_6310_admin_table" width="100%">
                  <tr>
                    <td>
                      <b>Display Social Icons</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span><br />
                    </td>
                    <td>
                      <label class="switch" for="wpm_social_activation">
                        <input type="checkbox" name="social_activation" id="wpm_social_activation" value="1" <?php echo (!isset($allStyle[33]) || (isset($allStyle[33]) && $allStyle[33])) ? 'checked' : '' ?>>
                        <span class="slider round"></span>
                      </label>
                    </td>
                  </tr>
                  <tr class="social_act_field">
                    <td><b>Social Icon Number</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
                      <div class="wpm-6310-pro">*Preview-on-change not available</div>
                    </td>
                    <td>
                      <select name="social_icon_number" id="social_icon_number" class="wpm-form-input">

                        <?php
                        for ($i = 1; $i <= 9; $i++) {
                          $items = $i == 1 ? ' item' : ' items';
                          if (!isset($allSlider[63]) && $i == 4) {
                            echo "<option selected value='{$i}'>{$i}{$items}</option>";
                          } else if (isset($allSlider[63]) && $allSlider[63] == $i) {
                            echo "<option selected value='{$i}'>{$i}{$items}</option>";
                          } else {
                            echo "<option value='{$i}'>{$i}{$items}</option>";
                          }
                        }
                        ?>
                      </select>
                    </td>
                  </tr>
                  <tr class="social_act_field">
                    <td><b>Social Icon Width</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                    <td>
                      <input type="number" min="0" name="social_icon_width" value="<?php echo $allStyle[26] ?>" class="wpm-form-input" id="wpm_social_icon_width" />
                    </td>
                  </tr>
                  <tr class="social_act_field">
                    <td><b>Social Icon Height</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span><?php
                                                  ?></td>
                    <td>
                      <input type="number" min="0" name="social_icon_height" value="<?php echo $allStyle[27] ?>" class="wpm-form-input" id="wpm_social_icon_height" />
                    </td>
                  </tr>
                </table>
              </div>
              <div class="wpm-col-6">
                <table class="table table-responsive wpm_6310_admin_table social_act_field">
                  <tr class="social_act_field">
                    <td><b>Social Icon Border Width</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span><?php
                                                        ?></td>
                    <td>
                      <input type="number" min="0" name="social_border_width" value="<?php echo $allStyle[28] ?>" class="wpm-form-input" id="wpm_social_border_width" />
                    </td>
                  </tr>
                  <tr class="social_act_field">
                    <td><b>Social Icon Border Radius</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                    <td>
                      <input type="number" min="0" name="social_border_radius" value="<?php echo $allStyle[30] ?>" class="wpm-form-input" id="wpm_social_border_radius" />
                    </td>
                  </tr>
                  <tr>
                    <td><b>Social Icon Margin Top</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                    <td>
                      <input type="number" min="0" name="social_margin_top" value="<?php echo (isset($allSlider[61]) && $allSlider[61] !== '') ? $allSlider[61] : 5; ?>" class="wpm-form-input" id="wpm_social_margin_top" />
                    </td>
                  </tr>
                  <tr>
                    <td><b>Social Icon Margin Bottom</b> <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                    <td>
                      <input type="number" min="0" name="social_margin_bottom" value="<?php echo (isset($allSlider[62]) && $allSlider[62] !== '') ? $allSlider[62] : 10; ?>" class="wpm-form-input" id="wpm_social_margin_bottom" />
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
            

            <?php 
              include wpm_6310_plugin_url . 'settings/helper/slider_form.php'; 
              include wpm_6310_plugin_url . 'settings/helper/search_form.php'; 
              include wpm_6310_plugin_url . 'settings/helper/category_form.php';  
            ?>

            <br class="wpm-6310-clear" />
            <br class="wpm-6310-clear" />
            <hr />
            <input type="submit" name="update_style_change" value="Save" class="wpm-btn-primary wpm-pull-right"
              style="margin-right: 15px; margin-bottom: 10px; display: block" />
            <br class="wpm-6310-clear" />
          </div>
        </form>
      </div>

      <style type="text/css">
      .wpm_6310_tabs_panel_preview .wpm-6310-row {
        justify-content: <?php echo (isset($allSlider[126]) && $allSlider[126] !== '') ? $allSlider[126] : 'center' ?> !important;
      }
    .wpm-6310-col-3 {
      overflow: hidden;
    }

    .wpm_6310_team_style_34{
     float: left;
     width: 100%;
     background: <?php echo $allStyle[32] ?>;
     padding: 5px; 
     transition: .5s;
     height: 100%;
    }
    .wpm_6310_team_style_34:hover{
      background: <?php echo $allStyle[34] ?>;
    }
  .wpm_6310_team_style_34_img {
      float: left;
      overflow: hidden;
      width: <?php echo $allStyle[2] ?>%;
  }

  .wpm_6310_team_style_34_img_content{
      transition: all .5s;
      display: block;
      width: 100%;
  }
  .wpm_6310_team_style_34:hover .wpm_6310_team_style_34_img_content{
      transform: scale(1.2);
  }

  .wpm_6310_team_style_34_img_content img{
    width: 100%;
  }

  .wpm_6310_team_style_34-right-section {
      float: left;
      padding-left: 20px;
      width: calc(100% - <?php echo $allStyle[2] ?>%);
      
  }
  .wpm_6310_team_style_34_title {
      font-size: <?php echo $allStyle[11] ?>px;
      font-weight: <?php echo $allStyle[15]?>;
      text-transform: <?php echo $allStyle[16] ?>;
      color: <?php echo $allStyle[12] ?>;      
      margin-top: <?php echo (isset($allStyle[40]) && $allStyle[40] !== '') ? $allStyle[40] : 0; ?>px;
      margin-bottom: <?php echo (isset($allStyle[41]) && $allStyle[41] !== '') ? $allStyle[41] : 0; ?>px;
      line-height: <?php echo $allStyle[18] ?>px;
      font-family: <?php echo $allStyle[17] ?>;
      position: relative;
  }
  .wpm_6310_team_style_34:hover .wpm_6310_team_style_34_title {
        color: <?php echo $allStyle[13] ?>;
      }
  .wpm_6310_team_style_34_title:after {
      content: "";
      position: absolute;
      width: 20%;
      height: <?php echo $allStyle[3] ?>px;
      background: <?php echo $allStyle[4] ?>;
      bottom: calc(-<?php echo $allStyle[3] ?>px / 2 - 2px);
      left: 0;
      transition: .5s;
  }
  .wpm_6310_team_style_34:hover .wpm_6310_team_style_34_title:after{
      width: 30%;
      background: <?php echo $allStyle[7] ?>;
  }
  .wpm_6310_team_style_34_designation{
      font-size: <?php echo $allStyle[19] ?>px;
      font-weight: <?php echo $allStyle[21]?>;
      color: <?php echo $allStyle[20] ?>;
      text-transform: <?php echo $allStyle[22] ?>;
      font-family: <?php echo $allStyle[23] ?>;
      line-height: <?php echo $allStyle[24] ?>px;
      margin-top: <?php echo $allStyle[42]?>px;
      margin-bottom: <?php echo $allStyle[43]?>px;  
  }
  .wpm_6310_team_style_34:hover .wpm_6310_team_style_34_designation {
        color: <?php echo $allStyle[25] ?>;
      }

  .wpm_6310_team_style_34_social {
      display: <?php echo (!isset($allStyle[33]) || (isset($allStyle[33]) && $allStyle[33])) ? 'flex':'none'?>; 
      flex-wrap: wrap;
      width: 100%;
      float: left;
      margin: <?php echo (isset($allSlider[61]) && $allSlider[61] !== '') ? $allSlider[61]:5;?>px 0 <?php echo (isset($allSlider[62]) && $allSlider[62] !== '') ? $allSlider[62]:10;?>px !important;
    }
    .wpm_6310_team_style_34_social a{
      display: flex;
      justify-content: center;
      align-items: center;
      width:  <?php echo $allStyle[26] ?>px;
      height: <?php echo $allStyle[27] ?>px;
      font-size: <?php echo (ceil(($allStyle[26] + $allStyle[27]) / 4) - 2) ?>px; 
      margin-right: 5px;
      text-decoration: none;   
      transition: all 0.3s ease-out 0s;
      border-radius:  <?php echo $allStyle[30] ?>%;
    }

  .wpm_6310_team_style_34_description {
      float: left;
      width: calc(100% - 10px);
      font-size: 13px;
      line-height: 22px;
      font-family: 'Amaranth';
      color: #525252;
      margin: 10px 5px;
  }

  .wpm_6310_team_style_34_caption {
      float: left;
      width: 100%;
      margin-top: 10px;
  }
  .wpm-custom-fields-list-34 {
      display: flex;
      margin-bottom: 5px;
  }
  .wpm-custom-fields-list-label-34 {
      margin-right: 5px;
  }
  .wpm-custom-fields-list-content-34 {
      color: #000;
      font-family: 'Amaranth';
      font-size: 14px;
  }
  .wpm_6310_team_style_34:hover .wpm-custom-fields-list-content-34{
      color: #c0392b !important;
  }
  ul.wpm_6310_team_style_34_social li {
    float: left;
}
  @media only screen and (max-width: 990px){
      .wpm_6310_team_style_34{ margin-bottom: 30px; }
  }
  .wpm-6310-item{
    overflow: hidden;
  }    
</style>

      <?php
      include wpm_6310_plugin_url . 'settings/helper/template-34.php';
      ?>
    <div class="wpm-plugin-setting-left">
      <div class="wpm-preview-box">
        <div class="wpm-6310-preview">
          Preview
          <div style="display: inline; float: right">
            <input type="text" id="wpm_background_preview"
              class="wpm-form-input  wpm-pull-right wpm_6310_color_picker wpm_preview_color_chooser" data-format="rgb"
              data-opacity=".8" value="rgba(255, 255, 255, .8)"></div>
        </div>
        <hr />
      </div>
      <div 
        class="wpm_6310_tabs_panel_preview" 
        data-modal-template="<?php echo isset($allSlider[131])?$allSlider[131]:1 ?>"
        data-main-template-id="<?php echo $styleId ?>"
      >
        <div id="wpm-6310-noslider-<?php echo $styleId ?>">
          <?php 
          wpm_6310_search_template($template_id, $allSlider, $desktop_row); 
          wpm_6310_category_menu($categoryData, $styleId, $styledata['categoryids']); 

          if ($members) {
            $displayCSS = '';
            if(!(!isset($allSlider[101]) || $allSlider[101] == 0)){
              $displayCSS = " style='display:none';";
            }
            echo "<div class='wpm-6310-row wpm-6310-default-members' {$displayCSS}>";
            foreach ($members as $value) {
              $attr2 = [];
              if ($value['profile_details_type'] == 1) {
                $cls = " wpm_6310_team_member_info";
                $attr = " link-id='{$value['id']}' link-url='".wpm_6310_validate_profile_url($value['profile_url'])."' target='{$value['open_new_tab']}' team-id='0'";
                $attr2 = [
                  " link-id='{$value['id']}' team-id='0'",
                  wpm_6310_validate_profile_url($value['profile_url']),
                  $value['open_new_tab']
                ];
              } else if ($value['profile_details_type'] == 2) {
                $cls = " wpm_6310_team_member_info";
                $attr = " link-id='0' team-id='{$value['id']}'";
                $attr2[] = $attr;
              } else {
                $cls = '';
                $attr = " link-id='0' team-id='0'";
                $attr2[] = $attr;
              }
              $readMoreActive = isset($allSlider[311]) && $allSlider[311] > 0 ? 1 : 0; 
          ?>
          <div class="wpm-6310-col-<?php echo $desktop_row; ?>">
            <div class="wpm_6310_team_style_34<?php echo !$readMoreActive ? $cls : '' ?>" <?php echo !$readMoreActive ? $attr : '' ?>>
            <div class="wpm_6310_team_style_34_wrapper">
                  <div class="wpm_6310_team_style_34_img">
                    <div class="wpm_6310_team_style_34_img_content">
                    <img src="<?php echo ($value['image'] ? $value['image'] : $value['hover_image']) ?>" data-6310-hover-image="<?php echo $value['hover_image'] ?>" alt="<?php echo $value['name'] ?>" >
                    </div>
                  </div>
                  <div class="wpm_6310_team_style_34-right-section">
                  <div class="wpm_6310_team_style_34_title"><?php echo wpm_6310_replace(esc_attr($value['name'])) ?></div>
                  <div class="wpm_6310_team_style_34_designation"><?php echo wpm_6310_replace(esc_attr($value['designation'])) ?></div>                  
                  <?php
                    wpm_6310_social_icon($value['iconids'], $value['iconurl'], $allStyle[28], $value['id'], $template_id, '', '', isset($allSlider['63']) ? $allSlider['63'] : 4);
                    echo wpm_6310_extract_member_description($value['profile_details'], ((isset($allSlider[72]) && $allSlider[72] !== '') ? $allSlider[72] : $numberOfWords), $styleId);
                    wpm_6310_extract_contact_info(isset($value['contact_info']) ? $value['contact_info'] : '', $styleId);
                    wpm_6310_template_skills_admin($value['skills'], $template_id, $allSlider, $value['id']);   
                    wpm_6310_read_more($readMoreActive, $template_id, $allSlider, $cls, $attr2, 0);
                  ?>
                  </div>
              </div>
          </div>
        </div>
        <?php 
            }
            echo "</div>";
          }

          if($filterList){
            $catIdList = explode(",", $styledata['categoryids']);
            foreach($filterList as $filterKey => $filterValue){
              $returnMember = wpm_6310_extract_members($filterValue);
              $catMembers = $returnMember['members'];
              if ($catMembers) {
                if(isset($allSlider[101]) && $allSlider[101] == 1) {
                  $displayCSS = wpm_6310_first_category($catIdList[0], $filterKey);
                } else{
                  $displayCSS = " style='display:none';";
                }

                echo "<div class='wpm-6310-row wpm-6310-category-filter {$filterKey}' {$displayCSS}>";
                foreach ($catMembers as $value) {
                  $attr2 = [];
                  if ($value['profile_details_type'] == 1) {
                    $cls = " wpm_6310_team_member_info";
                    $attr = " link-id='{$value['id']}' link-url='".wpm_6310_validate_profile_url($value['profile_url'])."' target='{$value['open_new_tab']}' team-id='0'";
                    $attr2 = [
                      " link-id='{$value['id']}' team-id='0'",
                      wpm_6310_validate_profile_url($value['profile_url']),
                      $value['open_new_tab']
                    ];
                  } else if ($value['profile_details_type'] == 2) {
                    $cls = " wpm_6310_team_member_info";
                    $attr = " link-id='0' team-id='{$value['id']}'";
                    $attr2[] = $attr;
                  } else {
                    $cls = '';
                    $attr = " link-id='0' team-id='0'";
                    $attr2[] = $attr;
                  }
                  $readMoreActive = isset($allSlider[311]) && $allSlider[311] > 0 ? 1 : 0; 
              ?>
              <div class="wpm-6310-col-<?php echo $desktop_row; ?>">
                <div class="wpm_6310_team_style_34<?php echo !$readMoreActive ? $cls : '' ?>" <?php echo !$readMoreActive ? $attr : '' ?>>
                <div class="wpm_6310_team_style_34_wrapper">
                  <div class="wpm_6310_team_style_34_img">
                    <div class="wpm_6310_team_style_34_img_content">
                    <img src="<?php echo ($value['image'] ? $value['image'] : $value['hover_image']) ?>" data-6310-hover-image="<?php echo $value['hover_image'] ?>" alt="<?php echo $value['name'] ?>" >
                    </div>
                  </div>
                  <div class="wpm_6310_team_style_34-right-section">
                  <div class="wpm_6310_team_style_34_title"><?php echo wpm_6310_replace(esc_attr($value['name'])) ?></div>
                  <div class="wpm_6310_team_style_34_designation"><?php echo wpm_6310_replace(esc_attr($value['designation'])) ?></div>                  
                  <?php
                    wpm_6310_social_icon($value['iconids'], $value['iconurl'], $allStyle[28], $value['id'], $template_id, '', '', isset($allSlider['63']) ? $allSlider['63'] : 4);
                    echo wpm_6310_extract_member_description($value['profile_details'], ((isset($allSlider[72]) && $allSlider[72] !== '') ? $allSlider[72] : $numberOfWords), $styleId);
                    wpm_6310_extract_contact_info(isset($value['contact_info']) ? $value['contact_info'] : '', $styleId);
                    wpm_6310_template_skills_admin($value['skills'], $template_id, $allSlider, $value['id']);   
                    wpm_6310_read_more($readMoreActive, $template_id, $allSlider, $cls, $attr2, 0);
                  ?>
                  </div>
              </div>
                  
              </div>
            </div>
            <?php 
                }
                echo "</div>";
              }
            }
          }  
    ?>
      </div>

      <div class="carousel">
        <div id="wpm-6310-slider-<?php echo $styleId ?>" class="wpm-6310-owl-carousel">
          <?php
          if ($members) {
            foreach ($members as $value) {
              $attr2 = [];
              if ($value['profile_details_type'] == 1) {
                $cls = " wpm_6310_team_member_info";
                $attr = " link-id='{$value['id']}' link-url='".wpm_6310_validate_profile_url($value['profile_url'])."' target='{$value['open_new_tab']}' team-id='0'";
                $attr2 = [
                  " link-id='{$value['id']}' team-id='0'",
                  wpm_6310_validate_profile_url($value['profile_url']),
                  $value['open_new_tab']
                ];
              } else if ($value['profile_details_type'] == 2) {
                $cls = " wpm_6310_team_member_info";
                $attr = " link-id='0' team-id='{$value['id']}'";
                $attr2[] = $attr;
              } else {
                $cls = '';
                $attr = " link-id='0' team-id='0'";
                $attr2[] = $attr;
              }
              $readMoreActive = isset($allSlider[311]) && $allSlider[311] > 0 ? 1 : 0; 
          ?>
          <div class="wpm-6310-item">
           <div class="wpm_6310_team_style_34<?php echo !$readMoreActive ? $cls : '' ?>" <?php echo !$readMoreActive ? $attr : '' ?>>
                <div class="wpm_6310_team_style_34_wrapper">
                  <div class="wpm_6310_team_style_34_img">
                    <div class="wpm_6310_team_style_34_img_content">
                    <img src="<?php echo ($value['image'] ? $value['image'] : $value['hover_image']) ?>" data-6310-hover-image="<?php echo $value['hover_image'] ?>" alt="<?php echo $value['name'] ?>" >
                    </div>
                  </div>
                  <div class="wpm_6310_team_style_34-right-section">
                  <div class="wpm_6310_team_style_34_title"><?php echo wpm_6310_replace(esc_attr($value['name'])) ?></div>
                  <div class="wpm_6310_team_style_34_designation"><?php echo wpm_6310_replace(esc_attr($value['designation'])) ?></div>                  
                  <?php
                    wpm_6310_social_icon($value['iconids'], $value['iconurl'], $allStyle[28], $value['id'], $template_id, '', '', isset($allSlider['63']) ? $allSlider['63'] : 4);
                    echo wpm_6310_extract_member_description($value['profile_details'], ((isset($allSlider[72]) && $allSlider[72] !== '') ? $allSlider[72] : $numberOfWords), $styleId);
                    wpm_6310_extract_contact_info(isset($value['contact_info']) ? $value['contact_info'] : '', $styleId);
                    wpm_6310_template_skills_admin($value['skills'], $template_id, $allSlider, $value['id']);   
                    wpm_6310_read_more($readMoreActive, $template_id, $allSlider, $cls, $attr2, 0);
                  ?>
                  </div>
              </div>
            </div>
          </div>
          <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
    <br />

  </div>
  <div class="wpm-plugin-setting-right">
    <?php wpm_6310_add_new_media($styleId, $member_table, $icon_table, $styledata['memberid'], $styledata['style_name']) ?>
  </div>
</div>
</div>
<?php wpm_6310_modal_settings_for_member_description($loading, wpm_6310_plugin_url, $allSlider); ?>