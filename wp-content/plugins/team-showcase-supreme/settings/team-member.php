<?php
if (!defined('ABSPATH'))
   exit;

$iconDiv = 1;
?>
<div class="wpm-6310">
   <h1>Team Members 
      <button class="wpm-btn-success" id="add-team-member">Add New</button>
      <button class="wpm-btn-primary" id="export-team-member">Export Members <span>(Pro)</span></button>
      <button class="wpm-btn-primary" id="import-team-member">Import Members <span>(Pro)</span></button>
   </h1>
   <a href="https://www.youtube.com/watch?v=AxQQYtnjm28" target="_blank"  class="wpm-6310-use-info">How to show new members on output (Video)</a>
   <?php
   $icon_table = $wpdb->prefix . 'wpm_6310_icons';
   $member_table = $wpdb->prefix . 'wpm_6310_member';
   $category_table = $wpdb->prefix . 'wpm_6310_category';
   wp_enqueue_media();


   wpm_6310_color_picker_script();

   $allIconList = "";
   $icon_table_data = $wpdb->get_results('SELECT * FROM ' . $icon_table . ' ORDER BY name ASC', ARRAY_A);
   foreach ($icon_table_data as $value) {
      $allIconList .= "<option value=\"{$value['id']}\">{$value['name']}</option>";
   }

   if (!empty($_POST['clone']) && $_POST['clone'] == 'Clone') {
      $nonce = $_REQUEST['_wpnonce'];
      $style_table = $wpdb->prefix . 'wpm_6310_style';
      
      if (!wp_verify_nonce($nonce, 'wpm-nonce-field-clone')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         $id = (int) $_POST['id'];
         $selectedData = $wpdb->get_row($wpdb->prepare("SELECT * FROM $member_table WHERE id = %d ", $id), ARRAY_A);
         $dupList = array(
            $selectedData['name'], 
            $selectedData['designation'], 
            $selectedData['profile_details_type'],  
            $selectedData['profile_url'],
            $selectedData['open_new_tab'],
            $selectedData['profile_details'],
            $selectedData['effect'],
            $selectedData['image'],
            $selectedData['hover_image'],
            $selectedData['iconids'],
            $selectedData['iconurl'],
            $selectedData['category'],
            $selectedData['contact_info'],
            $selectedData['skills']
         );

         $wpdb->query($wpdb->prepare("INSERT INTO {$member_table} (name, designation, profile_details_type, profile_url, open_new_tab, profile_details, effect, image, hover_image, iconids, iconurl, category, contact_info, skills) VALUES ( %s, %s, %d, %s, %d, %s, %s, %s, %s, %s, %s, %s, %s, %s )", $dupList));
      }
  }

   if (!empty($_POST['rearrange-icon-list-save']) && isset($_POST['member_id']) && is_numeric($_POST['member_id'])) {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'wpm-6310-nonce-update-icon-order')) {
         die('You do not have sufficient permissions to access this pageddd.');
      } else {
         $selMember = $wpdb->get_row($wpdb->prepare("SELECT * FROM $member_table WHERE id = %d ", $_POST['member_id']), ARRAY_A);
         if($selMember['iconids']){
            $iconUrl = explode("||||", $selMember['iconurl']);
            $iconIds = explode(",", $selMember['iconids']);
            $icons = explode(",", $_POST['rearrange_list']);
            $url = "";
            for($i = 0; $i < count($icons); $i++){
               if($url){
                  $url .= "||||";
               }
               $index = array_search($icons[$i], $iconIds);
               $url .= $iconUrl[$index];
            }
            if($url){
               $wpdb->query($wpdb->prepare("UPDATE $member_table SET iconids = %s, iconurl = %s WHERE id = %d", $_POST['rearrange_list'], $url, $_POST['member_id']));
            }
         }
      }
   }
   if (!empty($_POST['rearrange-skills-list-save']) && isset($_POST['member_id']) && is_numeric($_POST['member_id'])) {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'wpm-6310-nonce-update-skills-order')) {
         die('You do not have sufficient permissions to access this pageddd.');
      } else {

         $idList = explode("####||||####", $_POST['rearrange_list']);
         $selMember = $wpdb->get_row($wpdb->prepare("SELECT * FROM $member_table WHERE id = %d ", $_POST['member_id']), ARRAY_A);
         $iconList = explode("####||||####", $selMember['skills']); 
         $iconsArray = [];
         foreach($idList as $list){
            $iconsArray[] = $iconList[$list];
         }
         $iconsArray = implode("####||||####", $iconsArray);
          $wpdb->query($wpdb->prepare("UPDATE $member_table SET skills = %s WHERE id = %d", $iconsArray, $_POST['member_id']));
      }
   }

   if (!empty($_POST['rearrange-contact-list-save']) && isset($_POST['member_id']) && is_numeric($_POST['member_id'])) {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'wpm-6310-nonce-update-contacts-order')) {
         die('You do not have sufficient permissions to access this pageddd.');
      } else {

         $idList = explode("####||||####", $_POST['rearrange_list']);
         $selMember = $wpdb->get_row($wpdb->prepare("SELECT * FROM $member_table WHERE id = %d ", $_POST['member_id']), ARRAY_A);
         $iconList = explode("####||||####", $selMember['contact_info']); 
         $iconsArray = [];
         foreach($idList as $list){
            $iconsArray[] = $iconList[$list];
         }
         $iconsArray = implode("####||||####", $iconsArray);
          $wpdb->query($wpdb->prepare("UPDATE $member_table SET contact_info = %s WHERE id = %d", $iconsArray, $_POST['member_id']));
      }
   }


   if (!empty($_POST['delete']) && isset($_POST['id']) && is_numeric($_POST['id'])) {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'wpm-nonce-field-delete')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         $id = (int) $_POST['id'];
         $wpdb->query($wpdb->prepare("DELETE FROM {$member_table} WHERE id = %d", $id));
         wpm_6310_delete_member_from_category_info($id);
      }
   } else if (!empty($_POST['save']) && $_POST['save'] == 'Save') {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'wpm-6310-nonce-add')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         $myData = array();
         $myData[0] = sanitize_text_field($_POST['name']);
         $myData[1] = sanitize_text_field($_POST['designation']);
         $myData[2] = sanitize_text_field($_POST['pd']);
         if ($myData[2] == 1) {
            $myData[3] = sanitize_text_field($_POST['url']);
            $myData[4] = sanitize_text_field($_POST['new_tab']);
            $myData[5] = "";
            $myData[6] = "";
         } else if ($myData[2] == 2) {
            $myData[3] = "";
            $myData[4] = "";
            $myData[5] = $_POST['profile_details_new'];
            $myData[6] = sanitize_text_field($_POST['effect']);
         } else {
            $myData[3] = "";
            $myData[4] = "";
            $myData[5] = "";
            $myData[6] = "";
         }
         $myData[7] = sanitize_text_field($_POST['image']);

         $iconIds = "";
         $iconUrl = "";

         if (isset($_POST['icon_link']) && $_POST['icon_link']) {
            $icon_name = array_map('sanitize_text_field', $_POST['icon_name']);
            $icon_link = array_map('sanitize_text_field', $_POST['icon_link']);
            if ($icon_link) {
               foreach ($icon_link as $dkey => $dvalue) {
                  if ($dvalue) {
                     if ($iconIds) {
                        $iconIds .= ",";
                        $iconUrl .= "||||";
                     }
                     $iconIds .= $icon_name[$dkey];
                     $iconUrl .= $icon_link[$dkey];
                  }
               }
            }
         }
         $myData[8] = $iconIds;
         $myData[9] = $iconUrl;

         $catList = "";
         $catid = [];
         if (isset($_POST['catid']) && $_POST['catid']) {
            $catid = array_map('sanitize_text_field', $_POST['catid']);
            foreach ($catid as $cat) {
               if($catList){
                  $catList .= " ";
               }
               $catList .= "{$cat}";
            }
         }
         $myData[10] = $catList;

         $contacts = "";
         if (isset($_POST['contact_label']) && $_POST['contact_label']) {
            $contact_label = $_POST['contact_label'];
            $contact_details = array_map('sanitize_text_field', $_POST['contact_details']);
            foreach ($contact_label as $key => $value) {
               if ($value || $contact_details[$key]) {
                  if ($contacts) {
                     $contacts .= "####||||####";
                  }
                  $contacts .= "{$value}||||{$contact_details[$key]}";
               }
            }
         }
         $myData[11] = $contacts;
         $myData[12] = sanitize_text_field($_POST['hover_image']);
         $skills = "";
         if (isset($_POST['skills_name']) && $_POST['skills_name']) {
            $skills_name = array_map('sanitize_text_field', $_POST['skills_name']);
            $skills_rating = array_map('sanitize_text_field', $_POST['skills_rating']);
            if($skills_name){
               foreach ($skills_name as $key => $value) {
                  if (strlen($value) > 1) {
                     if ($skills) {
                        $skills .= "####||||####";
                     }
                     $skills .= "{$value}||||{$skills_rating[$key]}";
                  }
               }
            }
         }
         $myData[13] = $skills;

         $wpdb->query($wpdb->prepare("INSERT INTO {$member_table} set
                     name = %s,
                     designation = %s,
                     profile_details_type = %d,
                     profile_url = %s,
                     open_new_tab = %d,
                     profile_details = %s,
                     effect = %s,
                     image = %s,
                     iconids = %s,
                     iconurl = %s,
                     category = %s,
                     contact_info = %s,
                     hover_image = %s,
                     skills = %s", $myData));
      }
   } else if (!empty($_POST['update']) && $_POST['update'] == 'Update') {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'wpm-6310-nonce-update')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         $id = (int) sanitize_text_field($_POST['eid']);
         $myData = array();
         $myData[0] = sanitize_text_field($_POST['name']);
         $myData[1] = sanitize_text_field($_POST['designation']);
         $myData[2] = sanitize_text_field($_POST['pd']);
         if ($myData[2] == 1) {
            $myData[3] = sanitize_text_field($_POST['url']);
            $myData[4] = sanitize_text_field($_POST['new_tab']);
            $myData[5] = "";
            $myData[6] = "";
         } else if ($myData[2] == 2) {
            $myData[3] = "";
            $myData[4] = "";
            $myData[5] = $_POST['profile_details_new'];
            $myData[6] = sanitize_text_field($_POST['effect']);
         } else {
            $myData[3] = "";
            $myData[4] = "";
            $myData[5] = "";
            $myData[6] = "";
         }
         $myData[7] = sanitize_text_field($_POST['image']);

         $iconIds = "";
         $iconUrl = "";
         if (isset($_POST['icon_link']) && $_POST['icon_link']) {
            $icon_name = array_map('sanitize_text_field', $_POST['icon_name']);
            $icon_link = array_map('sanitize_text_field', $_POST['icon_link']);
            if ($icon_link) {
               foreach ($icon_link as $dkey => $dvalue) {
                  if ($dvalue) {
                     if ($iconIds) {
                        $iconIds .= ",";
                        $iconUrl .= "||||";
                     }
                     $iconIds .= $icon_name[$dkey];
                     $iconUrl .= $icon_link[$dkey];
                  }
               }
            }
         }
         $myData[8] = $iconIds;
         $myData[9] = $iconUrl;

         $catList = "";
         $catid = [];
         if (isset($_POST['catid']) && $_POST['catid']) {
            $catid = array_map('sanitize_text_field', $_POST['catid']);
            foreach ($catid as $cat) {
               if($catList){
                  $catList .= " ";
               }
               $catList .= "{$cat}";
            }
         }
         $myData[10] = $catList;
         $contacts = "";
         if (isset($_POST['contact_label']) && $_POST['contact_label']) {
            $contact_label = $_POST['contact_label'];
            $contact_details = array_map('sanitize_text_field', $_POST['contact_details']);
            foreach ($contact_label as $key => $value) {
               if ($value || $contact_details[$key]) {
                  if ($contacts) {
                     $contacts .= "####||||####";
                  }
                  $contacts .= "{$value}||||{$contact_details[$key]}";
               }
            }
         }
         $myData[11] = $contacts;
         $myData[12] = sanitize_text_field($_POST['hover_image']);
         $skills = "";
         if (isset($_POST['skills_name']) && $_POST['skills_name']) {
            $skills_name = array_map('sanitize_text_field', $_POST['skills_name']);
            $skills_rating = array_map('sanitize_text_field', $_POST['skills_rating']);
            if($skills_name){
               foreach ($skills_name as $key => $value) {
                  if (strlen($value) > 1) {
                     if ($skills) {
                        $skills .= "####||||####";
                     }
                     $skills .= "{$value}||||{$skills_rating[$key]}";
                  }
               }
            }
         }
         $myData[13] = $skills;
         $myData[14] = $id;

         $wpdb->query($wpdb->prepare("UPDATE {$member_table} set
                           name = %s,
                           designation = %s,
                           profile_details_type = %d,
                           profile_url = %s,
                           open_new_tab = %d,
                           profile_details = %s,
                           effect = %s,
                           image = %s,
                           iconids = %s,
                           iconurl = %s,
                           category = %s,
                           contact_info = %s,
                           hover_image = %s,
                           skills = %s
                           where id = %d", $myData));

         wpm_6310_update_all_category_member_info($id, $catid);                  
      }
   } else if (!empty($_POST['edit']) && $_POST['edit'] == 'Edit') {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'wpm-nonce-field-edit')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         $id = (int) $_POST['id'];
         $selMember = $wpdb->get_row($wpdb->prepare("SELECT * FROM $member_table WHERE id = %d ", $id), ARRAY_A);
         ?>
         <div id="wpm-6310-modal-edit" class="wpm-6310-modal" style="display: none">
            <div class="wpm-6310-modal-content wpm-6310-modal-md">
               <form action="" method="post">
                  <?php wp_nonce_field("wpm-6310-nonce-update") ?>
                  <input type="hidden" name="eid" value="<?php echo $id; ?>" />
                  <div class="wpm-6310-modal-header">
                     Edit Member
                     <span class="wpm-6310-close">&times;</span>
                  </div>
                  <div class="wpm-6310-modal-body-form">
                     <table border="0" width="100%" cellpadding="10" cellspacing="0">
                        <tr>
                           <td style="width: 150px;"><label class="wpm-form-label" for="name-edit">Full Name:</label></td>
                           <td><input type="text"  name="name" id="name-edit" value="<?php echo wpm_6310_replace(esc_attr($selMember['name'])) ?>" class="wpm-form-input lg" placeholder="Full Name" /></td>
                        </tr>
                        <tr>
                           <td><label class="wpm-form-label" for="designation-edit">Designation:</label></td>
                           <td><input type="text"  name="designation" id="designation-edit" value="<?php echo wpm_6310_replace(esc_attr($selMember['designation'])) ?>" class="wpm-form-input lg" placeholder="Designation" /></td>
                        </tr>
                        <tr>
                           <td><label class="wpm-form-label" for="pd-edit">Profile Details Type:</label></td>
                           <td>
                              <input type="hidden" name="pd" id="pd-edit" value="<?php echo $selMember['profile_details_type'] ?>" />
                              <button type="button" value="1" class="wpm-btn-multi profile-details-type-edit<?php if ($selMember['profile_details_type'] == 1) echo " active"; ?>">Link</button>
                              <button type="button" value="2" class="wpm-btn-multi profile-details-type-edit<?php if ($selMember['profile_details_type'] == 2) echo " active"; ?>">Pop Up</button>
                              <button type="button" value="0" class="wpm-btn-multi profile-details-type-edit<?php if ($selMember['profile_details_type'] == 0) echo " active"; ?>">None</button>
                           </td>
                        </tr>
                        <tr id="profile_url-edit">
                           <td><label class="wpm-form-label" for="url">Profile URL:</label></td>
                           <td>
                              <input type="text" name="url" value="<?php echo wpm_6310_replace(esc_attr($selMember['profile_url'])) ?>" class="wpm-form-input lg" id="url-edit" placeholder="http://www.example.com/profile" />
                           </td>
                        </tr>
                        <tr id="profile_url_tab-edit">
                           <td><label class="wpm-form-label" for="new_tab-edit">Open new tab:</label></td>
                           <td>
                              <input type="hidden" name="new_tab" id="new_tab-edit" value="<?php echo wpm_6310_replace(esc_attr($selMember['open_new_tab'])) ?>" />
                              <button type="button" value="1" class="wpm-btn-multi profile-new-tab-edit<?php if ($selMember['open_new_tab'] == 1) echo " active" ?>">Yes</button>
                              <button type="button" value="0" class="wpm-btn-multi profile-new-tab-edit<?php if ($selMember['open_new_tab'] == 0) echo " active" ?>">No</button>
                           </td>
                        </tr>
                        <tr id="profile_details-edit">
                           <td><label class="wpm-form-label" for="profile_details">Profile Details:</label></td>
                           <td>
                              <?php
                              $selMember['profile_details'] = str_replace("\'", "'", $selMember['profile_details']);
                              $selMember['profile_details'] = str_replace('\"', '"', $selMember['profile_details']);
                              $settings = array(
                                  'teeny' => TRUE,
                                  'media_buttons' => false,
                                  'textarea_rows' => 5
                              );
                              wp_editor($selMember['profile_details'], "profile_details_new", $settings);
                              ?>
                           </td>
                        </tr>
                        <tr id="effect-appearance-edit">
                           <td><label class="wpm-form-label" for="popup_app-edit">Popup Effect Appearance:</label></td>
                           <td>
                              <select name="effect" class="wpm-form-input " id="popup_app-edit">
                                 <option value="top"<?php if ($selMember['effect'] == 'top') echo " selected=''"; ?>>Top</option>
                                 <option value="bottom"<?php if ($selMember['effect'] == 'bottom') echo " selected=''"; ?>>Bottom</option>
                                 <option value="left"<?php if ($selMember['effect'] == 'left') echo " selected=''"; ?>>Left</option>
                                 <option value="right"<?php if ($selMember['effect'] == 'right') echo " selected=''"; ?>>Right</option>
                                 <option value="top-left"<?php if ($selMember['effect'] == 'top-left') echo " selected=''"; ?>>Top-Left</option>
                                 <option value="top-right"<?php if ($selMember['effect'] == 'top-right') echo " selected=''"; ?>>Top-Right</option>
                                 <option value="bottom-left"<?php if ($selMember['effect'] == 'bottom-left') echo " selected=''"; ?>>Bottom-Left</option>
                                 <option value="bottom-right"<?php if ($selMember['effect'] == 'bottom-right') echo " selected=''"; ?>>Bottom-Right</option>
                              </select>
                           </td>
                        </tr>

                        <tr>
                           <td colspan="2">
                              <label class="wpm-form-label" for="social_icon-edit">Social Icon <small>(Make Blank if you Don't want all)</small>:</label>
                              <br />
                              <?php
                              $iconList = $selMember['iconids'];
                              if ($iconList) {
                                 $iconList = explode(",", $iconList);
                                 $iconUrl = explode("||||", $selMember['iconurl']);
                                 $i = 0;
                                 foreach ($iconList as $list) {
                                    ?>
                                    <div style="margin-bottom: -6px; width: 100%; display: block;">
                                       <div class="wpm_6310_additonal_info_2">
                                          <select name="icon_name[]" class="wpm-form-input">
                                             <?php
                                             foreach ($icon_table_data as $itd) {
                                                if ($itd['id'] == $list) {
                                                   echo "<option value='" . $itd['id'] . "' selected>{$itd['name']}</option>";
                                                } else {
                                                   echo "<option value='" . $itd['id'] . "'>{$itd['name']}</option>";
                                                }
                                             }
                                             ?>
                                          </select>
                                       </div>
                                       <div class="wpm_6310_additonal_info_3"><input type="text" name="icon_link[]" value="<?php echo $iconUrl[$i] ?>"  class="wpm-form-input" placeholder="https://www.example.com/" ></div>&nbsp;
                                       <button type="button" class="wpm-btn-danger sm wpm_6310_icon_remove-edit-exist" value="Remove"><i class="far fa-times-circle" aria-hidden="true"></i></button>
                                       <br class="wpm-6310-clear" />
                                       <br class="wpm-6310-clear" />
                                    </div>
                                    <?php
                                    $i++;
                                 }
                              } else {
                                 ?>
                                 <div style="margin-bottom: -6px; width: 100%; display: block;">
                                    <div class="wpm_6310_additonal_info_2">
                                       <select name="icon_name[]" class="wpm-form-input">
                                          <?php
                                          echo $allIconList;
                                          ?>
                                       </select>
                                    </div>
                                    <div class="wpm_6310_additonal_info_3"><input type="text" name="icon_link[]"  class="wpm-form-input" placeholder="https://www.example.com/" ></div>
                                    <br class="wpm-6310-clear" />
                                 </div><br />
                              <?php } ?>

                              <div class="wpm_6310_additonal_info" id="wpm_6310_icon_new-edit">
                                 <input type="button" class="wpm-btn-default wpm_6310_icon_new-edit" value="Add Row" ><br />
                              </div>
                           </td>
                        </tr>
                       
                         <tr>
                           <td colspan="2">
                              <br />
                              <label class="wpm-form-label" for="popup_app-edit">
                                 Taxonomy / Custom Field <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span><br />

                                 <small class="wpm-6310-info">(You can add font awesome icon or text. Make Blank if you Don't want)</small>
                                 :
                              </label>

                              <input type="hidden" id="icon_select_div">
                              <?php
                              $contacts = isset($selMember['contact_info']) ? $selMember['contact_info'] : '';
                              if ($contacts) {
                                 $contacts = explode("####||||####", $contacts);
                                 echo '<div class="contact-info" style="width: 100%; float: left">';
                                 foreach ($contacts as $contact) {
                                    $contact = explode("||||", $contact);
                              ?>
                                  
                                 <div class="wpm_6310_additonal_info" id='wpm_6310_icon_div_<?php echo $iconDiv++ ?>'>
                                    <div class="wpm_6310_additonal_info_1"><i class="fas fa-plus-circle"></i></div>
                                    <div class="wpm_6310_additonal_info_2"><input type="text" name="contact_label[]" class="wpm-form-input" placeholder="Email, Phone, Fax, etc." value="<?php echo str_replace("\\", "", htmlentities($contact[0])) ?>"></div>
                                    <div class="wpm_6310_additonal_info_3"><input name="contact_details[]" type="text" class="wpm-form-input" placeholder="email@example.com" value="<?php echo $contact[1] ?>"></div>
                                    <div class="wpm_6310_additonal_info_4">&nbsp;&nbsp;<button type="button" class="wpm-btn-danger sm wpm_6310_icon_remove" value="Remove"><i class="far fa-times-circle" aria-hidden="true"></i></button></div>
                                    <br>
                                 </div>                                  
                                 <?php
                                 }
                                 echo '</div>';
                              } else {
                                 ?>                                 
                                 <div class="wpm_6310_additonal_info" id='wpm_6310_icon_div_<?php echo $iconDiv ?>'>
                                    <div class="wpm_6310_additonal_info_1"><i class="fas fa-plus-circle"></i></div>
                                    <div class="wpm_6310_additonal_info_2"><input type="text" name="contact_label[]" class="wpm-form-input" placeholder="Email, Phone, Fax, etc."></div>
                                    <div class="wpm_6310_additonal_info_3"><input name="contact_details[]" type="text" class="wpm-form-input" placeholder="email@example.com"></div>
                                    <div class="wpm_6310_additonal_info_4"></div>
                                    <br>
                                 </div>
                              <?php
                              }
                              ?>
                               
                              <div class="wpm_6310_additonal_contact" id="wpm_6310_contact_new-edit">
                                 <input type="button" class="wpm-btn-default wpm_6310_contact_new-edit" value="Add Row"><br />
                              </div>

                           </td>
                        </tr>
                        <!-- Skills List -->
                        <tr>
                           <td colspan="2">
                              <br />
                              <div style="width: 100%; display: block;" class="skill-edit-button">
                              <label class="wpm-form-label" for="popup_app-edit">
                                 Skills List
                                 <small>(Make Blank if you Don't want)</small>
                                 :
                              </label>
                              <?php
                              $skills = esc_attr( $selMember['skills'] );
                              if ($skills) {
                                 $skills = explode("####||||####", $skills);
                                 foreach ($skills as $skill) {
                                    $skill = explode("||||", $skill);
                              ?>
                                    <div class="skills-info">
                                       <input type="text" name="skills_name[]" class="wpm-form-input skills-name" value="<?php echo wpm_6310_replace($skill[0]) ?>" placeholder="Enter Skills Name">
                                       <input name="skills_rating[]" type="range" step="1" min="20" max="100" value="<?php echo wpm_6310_replace($skill[1]) ?>" data-rangeSlider title="">
                                       <output><?php echo wpm_6310_replace($skill[1]) ?></output><span><button type="button" class="wpm-btn-danger sm wpm_6310_skills_remove" value="Remove"><i class="far fa-times-circle" aria-hidden="true"></i></button></span>
                                    </div>
                                 <?php
                                 }
                                 ?>

                              <?php
                              } else {
                              ?>
                                 <div class="skills-info">
                                    <input type="text" name="skills_name[]" class="wpm-form-input skills-name" placeholder="Enter Skills Name">
                                    <input name="skills_rating[]" type="range" step="1" min="20" max="100" data-rangeSlider title="">
                                    <output></output><span><button type="button" class="wpm-btn-danger sm wpm_6310_skills_remove" value="Remove"><i class="far fa-times-circle" aria-hidden="true"></i></button></span>
                                 </div>
                              <?php
                              }
                              ?>
                              </div>
                              <div class="wpm_6310_additonal_skills" id="wpm_6310_skills_new-edit">
                                 <input type="button" class="wpm-btn-default wpm_6310_skills_new-edit" value="Add Row"><br />
                              </div>

                           </td>
                        </tr>
                        <tr>
                        <td colspan="2">
                           <br />
                           <label class="wpm-form-label" for="popup_app-edit">
                              Select Category: <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
                           </label>
                           <div>
                              <?php
                              $category = $wpdb->get_results("SELECT * FROM {$category_table} ORDER BY serial ASC", ARRAY_A);
                              $selCategory = $selMember['category'];
                              if($selCategory){
                                 $selCategory = explode(" ", $selCategory);
                              }

                              foreach ($category as $cat) {
                                 $selected = "";
                                 if($selCategory && in_array($cat['c_name'], $selCategory)){
                                    $selected = " checked ";
                                 }
                                 echo "<div class='wpm-row-select-cat' id='{$cat['id']}'>
                                       <input type='checkbox' name='catid[]' value='{$cat['c_name']}'
                                       id='cat-box-{$cat['id']}'
                                       {$selected}
                                       class='wpm-row-select-cat-checkbox' />
                                       ".wpm_6310_replace($cat['name'])."
                                    </div>";
                              }
                              ?>
                           </div>
                        </td>           
                        </tr>      
                        <tr>
                           <td>Image URL</td> 
                           <td>
                              <input type="text" name="image" id="wpm_6310_upload_team_member_image_src-edit" value="<?php echo $selMember['image'] ?>" class="wpm-form-input lg" >
                              <input type="button" id="wpm_6310_upload_team_member_image-edit" value="Upload Image" class="wpm-btn-default" >
                           </td>
                        </tr>
                        <tr>
                           <td>Image Hover URL <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                           <td>
                              <input type="text" name="hover_image" id="wpm_6310_upload_team_member_hover_image_src-edit" value="<?php echo $selMember['hover_image'] ?>" class="wpm-form-input lg" >
                              <input type="button" id="wpm_6310_upload_team_member_hover_image-edit" value="Upload Hover Image" class="wpm-btn-default" >
                           </td>
                        </tr>
                     </table>

                  </div>
                  <div class="wpm-6310-modal-form-footer">
                     <button type="button" name="close" id="wpm-from-close-edit" class="wpm-btn-danger wpm-pull-right">Close</button>
                     <input type="submit" name="update" class="wpm-btn-primary wpm-pull-right wpm-margin-right-10" value="Update"/>
                  </div>
                  <br class="wpm-6310-clear" />
               </form>
            </div>
            <br class="wpm-6310-clear" />
         </div>
         <script>
            
            jQuery(document).ready(function () {
               jQuery('#wpm-6310-modal-edit').fadeIn(500);
               jQuery("body").css({
                  "overflow": "hidden"
               });
      <?php
      if ($selMember['profile_details_type'] == 1) {
         echo 'jQuery("#profile_details-edit, #effect-appearance-edit").hide();';
      } else if ($selMember['profile_details_type'] == 2) {
         echo 'jQuery("#profile_url-edit, #profile_url_tab-edit").hide();';
      } else {
         echo 'jQuery("#profile_details-edit, #effect-appearance-edit, #profile_url-edit, #profile_url_tab-edit").hide();';
      }
      ?>

               /* Profile Details Type Start */
               jQuery("body").on("click", ".profile-details-type-edit", function () {
                  var val = parseInt(jQuery(this).val());
                  jQuery(".profile-details-type-edit").removeClass("active");
                  jQuery(this).addClass("active");

                  if (val == 0) {
                     jQuery("#profile_details-edit, #effect-appearance-edit, #profile_url-edit, #profile_url_tab-edit").hide();
                  } else if (val == 1) {
                     jQuery("#profile_url-edit, #profile_url_tab-edit").show();
                     jQuery("#profile_details-edit, #effect-appearance-edit").hide();
                  } else if (val == 2) {
                     jQuery("#profile_details-edit, #effect-appearance-edit").show();
                     jQuery("#profile_url-edit, #profile_url_tab-edit").hide();
                  }
                  jQuery("#pd-edit").val(val);
                  return false;
               });

               jQuery("body").on("click", ".profile-new-tab-edit", function () {
                  var val = parseInt(jQuery(this).val());
                  jQuery(".profile-new-tab-edit").removeClass("active");
                  jQuery(this).addClass("active");
                  jQuery("#new_tab-edit").val(val);
                  return false;
               });
               /* Profile Details Type End */

               /* Social Icon Start */
               jQuery("body").on("click", ".wpm_6310_icon_new-edit", function (e) {
                  var html = '<div class="wpm_6310_additonal_info"><div class="wpm_6310_additonal_info_2"><select name="icon_name[]" class="wpm-form-input"><?php echo $allIconList; ?></select></div><div class="wpm_6310_additonal_info_3"><input type="text" name="icon_link[]" class="wpm-form-input" placeholder="https://www.example.com" ></div><div class="wpm_6310_additonal_info_4"> &nbsp;&nbsp;<button type="button" class="wpm-btn-danger sm wpm_6310_icon_remove-edit" value="Remove"><i class="far fa-times-circle" aria-hidden="true"></i></button></div><br /></div>';
                  jQuery("body").css({
                     "overflow": "hidden"
                  });
                  jQuery("#wpm_6310_icon_new-edit").before(html);
               });
               jQuery("body").on("click", ".wpm_6310_icon_remove-edit", function (e) {
                  jQuery(this).parent().parent().remove();
                  return false;
               });
               jQuery("body").on("click", ".wpm_6310_icon_remove-edit-exist", function (e) {
                  jQuery(this).parent().remove();
                  return false;
               });
               /* Social Icon End */

               jQuery("body").on("click", ".wpm-6310-close-edit, #wpm-from-close-edit", function () {
                  jQuery("#wpm-6310-modal-add, #wpm-6310-modal-edit").fadeOut(500);
                  jQuery("body").css({
                     "overflow": "initial"
                  });
               });
               jQuery(window).click(function (event) {
                  if (event.target == document.getElementById('wpm-6310-modal-add')) {
                     jQuery("#wpm-6310-modal-add").fadeOut(500);
                     jQuery("body").css({
                        "overflow": "initial"
                     });
                  } else if (event.target == document.getElementById('wpm-6310-modal-edit')) {
                     jQuery("#wpm-6310-modal-edit").fadeOut(500);
                     jQuery("body").css({
                        "overflow": "initial"
                     });
                  }
               });

               /* ######### Media Start ########### */
               jQuery("body").on("click", "#wpm_6310_upload_team_member_image-edit", function (e) {
                  e.preventDefault();
                  var image = wp.media({
                     title: 'Upload Image',
                     multiple: false
                  }).open()
                          .on('select', function (e) {
                             var uploaded_image = image.state().get('selection').first();
                             var image_url = uploaded_image.toJSON().url;
                             jQuery("#wpm_6310_upload_team_member_image_src-edit").val(image_url);
                          });

                  jQuery("#wpm_6310_add_new_media").css({
                     "overflow-x": "hidden",
                     "overflow-y": "auto"
                  });
               });

               jQuery("body").on("click", "#wpm_6310_upload_team_member_hover_image-edit", function (e) {
                  e.preventDefault();
                  var image = wp.media({
                     title: 'Upload Hover Image',
                     multiple: false
                  }).open()
                          .on('select', function (e) {
                             var uploaded_image = image.state().get('selection').first();
                             var image_url = uploaded_image.toJSON().url;
                             jQuery("#wpm_6310_upload_team_member_hover_image_src-edit").val(image_url);
                          });
                  jQuery("#wpm_6310_add_new_media").css({
                     "overflow-x": "hidden",
                     "overflow-y": "auto"
                  });
               });   


               /* ######### Media End ########### */

            });
         </script>

      </script>
      <?php
   }
}
else if (!empty($_POST['rearrange-contacts']) && $_POST['rearrange-contacts'] == 'Rearrange') {
   $nonce = $_REQUEST['_wpnonce'];
   if (!wp_verify_nonce($nonce, 'wpm-nonce-field-reorder-contacts')) {
      die('You do not have sufficient permissions to access this page.');
   } else {
      $id = (int) $_POST['id'];
   ?>

      <div id="wpm_6310_rearrange_team_modal" class="wpm-6310-modal" style="display: none">
         <div class="wpm-6310-modal-content wpm-6310-modal-sm">
            <form action="" method="post">
               <?php wp_nonce_field("wpm-6310-nonce-update-contacts-order") ?>
               <input type="hidden" name="member_id" value="<?php echo $id ?>" />
               <input type="hidden" name="rearrange_list" id="rearrange_list" value="" />
               <div class="wpm-6310-modal-header">
                  Rearrange Contacts Order
                  <span class="wpm-6310-close">&times;</span>
               </div>
               <div class="wpm-6310-modal-body-form">
                  <ul id="wpm-6310-sortable">
                     <?php
                     $selMember = $wpdb->get_row($wpdb->prepare("SELECT * FROM $member_table WHERE id = %d ", $id), ARRAY_A);
                     $contactNumber = 0;
                     if($selMember['contact_info']){
                        $contacts = explode("####||||####", $selMember['contact_info']);
                        foreach ($contacts as $key => $contact) {
                           $temp = explode("||||", $contact);
                           $cls = str_replace("\\", "", $temp[0]);
                           $contact = str_replace("\\", "", $contact);
                           echo "<li class='ui-state-default wpm-6310-ui-state-default' id='{$contactNumber}'>". $cls .": {$temp[1]}</li>";
                           $contactNumber++;
                        }
                     }
                     ?>
                  </ul>
               </div>
               <div class="wpm-6310-modal-form-footer">
                  <button type="button" name="close" class="wpm-btn-danger wpm-pull-right">Close</button>
                  <input type="submit" name="rearrange-contact-list-save" class="wpm-btn-primary wpm-pull-right wpm-margin-right-10" id="wpm-6310-sortable-sub" value="Save" />
               </div>
            </form>
            <br class="wpm-6310-clear" />
         </div>
      </div>
      <style>
         .wpm-6310-ui-state-default {
            padding: 8px 10px !important;
            cursor: pointer !important;
            border-radius: 3px !important;
         }
      </style>
      <script>
         var $ = jQuery;
         jQuery(document).ready(function() {
            jQuery('#wpm_6310_rearrange_team_modal').fadeIn(500);
            jQuery("body").css({
               "overflow": "hidden"
            });
         });
         jQuery(function() {
            jQuery("#wpm-6310-sortable").sortable();
            jQuery("#wpm-6310-sortable").disableSelection();
         });
         jQuery(document).ready(function() {
            jQuery("#wpm-6310-sortable-sub").click(function() {
               var list_sortable = jQuery('#wpm-6310-sortable').sortable('toArray').join("####||||####");
               jQuery("#rearrange_list").val(list_sortable);
            });

            jQuery("body").on("click", ".wpm-row-select-checkbox", function(event) {
               event.stopPropagation();
            });


            jQuery("body").on("click", "#wpm_6310_rearrange_team", function() {
               jQuery("#wpm_6310_rearrange_team_modal").fadeIn(500);
               jQuery("body").css({
                  "overflow": "hidden"
               });
               return false;
            });

            jQuery("body").on("click", "#wpm_6310_add_new_media", function() {
               jQuery("#wpm_6310_add_new_media_modal").fadeIn(500);
               jQuery("body").css({
                  "overflow": "hidden"
               });
               return false;
            });
            jQuery("body").on("click", ".wpm-6310-close, .wpm-btn-danger", function() {
               jQuery("#wpm_6310_add_new_media_modal, #wpm_6310_rearrange_team_modal").fadeOut(500);
               jQuery("body").css({
                  "overflow": "initial"
               });
            });
            jQuery(window).click(function(event) {
               if (event.target == document.getElementById('wpm_6310_rearrange_team_modal')) {
                  jQuery("#wpm_6310_rearrange_team_modal").fadeOut(500);
                  jQuery("body").css({
                     "overflow": "initial"
                  });
               }
               if (event.target == document.getElementById('wpm_6310_add_new_media_modal')) {
                  jQuery("#wpm_6310_add_new_media_modal").fadeOut(500);
                  jQuery("body").css({
                     "overflow": "initial"
                  });
               }
            });
         });
      </script>

<?php
   }
}
else if (!empty($_POST['rearrange-skills']) && $_POST['rearrange-skills'] == 'Rearrange') {
   $nonce = $_REQUEST['_wpnonce'];
   if (!wp_verify_nonce($nonce, 'wpm-nonce-field-reorder-skills')) {
      die('You do not have sufficient permissions to access this page.');
   } else {
      $id = (int) $_POST['id'];
   ?>

      <div id="wpm_6310_rearrange_team_modal" class="wpm-6310-modal" style="display: none">
         <div class="wpm-6310-modal-content wpm-6310-modal-sm">
            <form action="" method="post">
               <?php wp_nonce_field("wpm-6310-nonce-update-skills-order") ?>
               <input type="hidden" name="member_id" value="<?php echo $id ?>" />
               <input type="hidden" name="rearrange_list" id="rearrange_list" value="" />
               <div class="wpm-6310-modal-header">
                  Rearrange Contacts Order
                  <span class="wpm-6310-close">&times;</span>
               </div>
               <div class="wpm-6310-modal-body-form">
                  <ul id="wpm-6310-sortable">
                     <?php
                     $selMember = $wpdb->get_row($wpdb->prepare("SELECT * FROM $member_table WHERE id = %d ", $id), ARRAY_A);
                     $skillNumber = 0;
                     if($selMember['skills']){
                        $skills = explode("####||||####", $selMember['skills']);
                        foreach ($skills as $key => $skill) {
                           $temp = explode("||||", $skill);
                           $cls = str_replace("\\", "", $temp[0]);
                           $skill = str_replace("\\", "", $skill);
                           echo "<li class='ui-state-default wpm-6310-ui-state-default' id='{$skillNumber}'>". $cls .": {$temp[1]}</li>";
                           $skillNumber++;
                        }
                     }
                     ?>
                  </ul>
               </div>
               <div class="wpm-6310-modal-form-footer">
                  <button type="button" name="close" class="wpm-btn-danger wpm-pull-right">Close</button>
                  <input type="submit" name="rearrange-skills-list-save" class="wpm-btn-primary wpm-pull-right wpm-margin-right-10" id="wpm-6310-sortable-sub" value="Save" />
               </div>
            </form>
            <br class="wpm-6310-clear" />
         </div>
      </div>
      <style>
         .wpm-6310-ui-state-default {
            padding: 8px 10px !important;
            cursor: pointer !important;
            border-radius: 3px !important;
         }
      </style>
      <script>
         var $ = jQuery;
         jQuery(document).ready(function() {
            jQuery('#wpm_6310_rearrange_team_modal').fadeIn(500);
            jQuery("body").css({
               "overflow": "hidden"
            });
         });
         jQuery(function() {
            jQuery("#wpm-6310-sortable").sortable();
            jQuery("#wpm-6310-sortable").disableSelection();
         });
         jQuery(document).ready(function() {
            jQuery("#wpm-6310-sortable-sub").click(function() {
               var list_sortable = jQuery('#wpm-6310-sortable').sortable('toArray').join("####||||####");
               jQuery("#rearrange_list").val(list_sortable);
            });

            jQuery("body").on("click", ".wpm-row-select-checkbox", function(event) {
               event.stopPropagation();
            });


            jQuery("body").on("click", "#wpm_6310_rearrange_team", function() {
               jQuery("#wpm_6310_rearrange_team_modal").fadeIn(500);
               jQuery("body").css({
                  "overflow": "hidden"
               });
               return false;
            });

            jQuery("body").on("click", "#wpm_6310_add_new_media", function() {
               jQuery("#wpm_6310_add_new_media_modal").fadeIn(500);
               jQuery("body").css({
                  "overflow": "hidden"
               });
               return false;
            });
            jQuery("body").on("click", ".wpm-6310-close, .wpm-btn-danger", function() {
               jQuery("#wpm_6310_add_new_media_modal, #wpm_6310_rearrange_team_modal").fadeOut(500);
               jQuery("body").css({
                  "overflow": "initial"
               });
            });
            jQuery(window).click(function(event) {
               if (event.target == document.getElementById('wpm_6310_rearrange_team_modal')) {
                  jQuery("#wpm_6310_rearrange_team_modal").fadeOut(500);
                  jQuery("body").css({
                     "overflow": "initial"
                  });
               }
               if (event.target == document.getElementById('wpm_6310_add_new_media_modal')) {
                  jQuery("#wpm_6310_add_new_media_modal").fadeOut(500);
                  jQuery("body").css({
                     "overflow": "initial"
                  });
               }
            });
         });
      </script>


   <?php
   }
}
else if (!empty($_POST['rearrange-icon']) && $_POST['rearrange-icon'] == 'Rearrange') {
   $nonce = $_REQUEST['_wpnonce'];
   if (!wp_verify_nonce($nonce, 'wpm-nonce-field-reorder-icon')) {
      die('You do not have sufficient permissions to access this page.');
   } else {
      $id = (int) $_POST['id'];
   ?>

      <div id="wpm_6310_rearrange_team_modal" class="wpm-6310-modal" style="display: none">
         <div class="wpm-6310-modal-content wpm-6310-modal-sm">
            <form action="" method="post">
               <?php wp_nonce_field("wpm-6310-nonce-update-icon-order") ?>
               <input type="hidden" name="member_id" value="<?php echo $id ?>" />
               <input type="hidden" name="rearrange_list" id="rearrange_list" value="" />
               <div class="wpm-6310-modal-header">
                  Rearrange Social Icon Order
                  <span class="wpm-6310-close">&times;</span>
               </div>
               <div class="wpm-6310-modal-body-form">
                  <ul id="wpm-6310-sortable">
                     <?php
                     $selMember = $wpdb->get_row($wpdb->prepare("SELECT * FROM $member_table WHERE id = %d ", $id), ARRAY_A);
                     if($selMember['iconids']){
                        $iconIds = explode(",", $selMember['iconids']);
                        for ($i = 0; $i < count($iconIds); $i++) {
                           if($iconIds[$i]){
                              $icons = $wpdb->get_row("SELECT * FROM $icon_table WHERE id={$iconIds[$i]}", ARRAY_A);
                              echo "<li class='ui-state-default wpm-6310-ui-state-default' id='{$icons['id']}'><b>{$icons['name']}: </b> <button class='wpm-btn-icon' style='color:" . $icons['color'] . "; background-color: " . $icons['bgcolor'] . "; margin-right: 5px; margin-bottom: 5px;'><i class='" . $icons['class_name'] . "'></i></button></li>";
                           }
                        }
                     }
                     ?>
                  </ul>
               </div>
               <div class="wpm-6310-modal-form-footer">
                  <button type="button" name="close" class="wpm-btn-danger wpm-pull-right">Close</button>
                  <input type="submit" name="rearrange-icon-list-save" class="wpm-btn-primary wpm-pull-right wpm-margin-right-10" id="wpm-6310-sortable-sub" value="Save" />
               </div>
            </form>
            <br class="wpm-6310-clear" />
         </div>
      </div>
      <style>
         #wpm-6310-sortable li{
            color: black !important;
            background: transparent !important;
            border: 1px solid #4e994e;
         }
         .wpm-6310-ui-state-default {
            padding: 8px 5px !important;
            cursor: pointer !important;
            border-radius: 3px !important;
         }
      </style>
      <script>
         var $ = jQuery;
         jQuery(document).ready(function() {
            jQuery('#wpm_6310_rearrange_team_modal').fadeIn(500);
            jQuery("body").css({
               "overflow": "hidden"
            });
         });
         jQuery(function() {
            jQuery("#wpm-6310-sortable").sortable();
            jQuery("#wpm-6310-sortable").disableSelection();
         });
         jQuery(document).ready(function() {
            jQuery("#wpm-6310-sortable-sub").click(function() {
               var list_sortable = jQuery('#wpm-6310-sortable').sortable('toArray').join(",");
               jQuery("#rearrange_list").val(list_sortable);
            });

            jQuery("body").on("click", ".wpm-row-select-checkbox", function(event) {
               event.stopPropagation();
            });


            jQuery("body").on("click", "#wpm_6310_rearrange_team", function() {
               jQuery("#wpm_6310_rearrange_team_modal").fadeIn(500);
               jQuery("body").css({
                  "overflow": "hidden"
               });
               return false;
            });

            jQuery("body").on("click", "#wpm_6310_add_new_media", function() {
               jQuery("#wpm_6310_add_new_media_modal").fadeIn(500);
               jQuery("body").css({
                  "overflow": "hidden"
               });
               return false;
            });
            jQuery("body").on("click", ".wpm-6310-close, .wpm-btn-danger", function() {
               jQuery("#wpm_6310_add_new_media_modal, #wpm_6310_rearrange_team_modal").fadeOut(500);
               jQuery("body").css({
                  "overflow": "initial"
               });
            });
            jQuery(window).click(function(event) {
               if (event.target == document.getElementById('wpm_6310_rearrange_team_modal')) {
                  jQuery("#wpm_6310_rearrange_team_modal").fadeOut(500);
                  jQuery("body").css({
                     "overflow": "initial"
                  });
               }
               if (event.target == document.getElementById('wpm_6310_add_new_media_modal')) {
                  jQuery("#wpm_6310_add_new_media_modal").fadeOut(500);
                  jQuery("body").css({
                     "overflow": "initial"
                  });
               }
            });
         });
      </script>


   <?php
   }
}
?>

<table class="wpm-table">
   <tr>
      <td style="width: 100px;">Full Name</td>
      <td style="width: 100px;">Designation</td>
      <td style="width: 180px;">Social Icon</td>
      <td style="width: 150px;">Skills</td>
      <td>Contact Info</td>
      <td>Category</td>
      <td style="width: 60px">Image</td>
      <td style="width: 60px">Hover Image</td>
      <td style="width: 120px">Edit Delete</td>
   </tr>

   <?php
   $data = $wpdb->get_results('SELECT * FROM ' . $member_table . ' ORDER BY id DESC', ARRAY_A);
   foreach ($data as $value) {
      echo '<tr>';
      echo '<td>' . wpm_6310_replace(esc_attr($value['name'])) . '</td>';
      echo '<td>' . wpm_6310_replace(esc_attr($value['designation'])) . '</td>';

      echo "<td>";
      $conNo = 0;
      if ($value['iconids']) {
         $iconIds = explode(",", esc_attr($value['iconids']));
         $iconUrl = explode("||||", esc_attr($value['iconurl']));

         if($iconIds){
            for($i = 0; $i < count($iconIds); $i++){
               if($iconIds[$i] && $iconUrl[$i]){
                  $selIcon = $wpdb->get_row("SELECT * FROM $icon_table WHERE id={$iconIds[$i]}", ARRAY_A);
                  if($selIcon){
                     echo "<button class='wpm-btn-icon' style='color:" . $selIcon['color'] . "; background-color: " . $selIcon['bgcolor'] . "; margin-right: 5px; margin-bottom: 5px;'><i class='" . $selIcon['class_name'] . "'></i></button>";
                     $conNo = 1;
                  }
               }
            }
         }
      }
      if($conNo){
         echo '<div class="wpm_6310_tabs_panel_settings"><form method="post">
                  ' . wp_nonce_field("wpm-nonce-field-reorder-icon") . '
                  <input type="hidden" name="id" value="' . $value['id'] . '">
                  <button class="wpm-btn-primary wpm-margin-right-10  wpm-6310-change-order"  title="Rearrange  Contact"  type="submit" value="Rearrange" name="rearrange-icon">Change Order</button>
                  </form></div>'; 
      }else{
         echo "---";
      }
      echo "</td>";
      echo "<td>";
         if ($value['skills']) {
            $skills = explode("####||||####", wpm_6310_replace(esc_attr( $value['skills'] )));
            $skl = 0;
            foreach ($skills as $skill) {
               if ($skl) {
                  echo ",<br />";
               }
               $skill = explode("||||", $skill);
               echo "<b>{$skill[0]}</b>: {$skill[1]}%";
               $skl = 1;
            }
            echo '<form method="post">
          ' . wp_nonce_field("wpm-nonce-field-reorder-skills") . '
          <input type="hidden" name="id" value="' . $value['id'] . '">
          <button class="wpm-btn-primary wpm-margin-right-10 wpm-6310-change-order" title="Rearrange  Skills"  type="submit" value="Rearrange" name="rearrange-skills">Change Order</button>
          </form>';
         } else {
            echo "---";
         }
         echo "</td>";

      echo "<td style='font-size: 12px'>";
         if (isset($value['contact_info']) && $value['contact_info']) {
            $contacts = explode("####||||####", esc_attr($value['contact_info']));
            $skl = 0;
            foreach ($contacts as $contact) {
               $contact = explode("||||", $contact);
               echo "<span class='wpm-category-display'><b>" . str_replace("\\", "", $contact[0]) . (($contact[0])?':':'') . "</b> {$contact[1]}</span>";
               $skl = 1;
            }   
            if($skl){
               echo '<div class="wpm_6310_tabs_panel_settings"><form method="post">
                     ' . wp_nonce_field("wpm-nonce-field-reorder-contacts") . '
                     <input type="hidden" name="id" value="' . $value['id'] . '">
                     <button class="wpm-btn-primary wpm-margin-right-10  wpm-6310-change-order"  title="Rearrange  Contact"  type="submit" value="Rearrange" name="rearrange-contacts">Change Order</button>
                     </form></div>';
            }        
         } else {
            echo "---";
         }
         echo "</td>";

      echo "<td>";
      if ($value['category']) {
         $category = explode(" ", esc_attr(trim($value['category'])));
         if($category){
            foreach($category as $cat){
               $results = $wpdb->get_row($wpdb->prepare("SELECT * FROM $category_table WHERE c_name = %s ", trim($cat)), ARRAY_A);
               if($results){
                  echo "<span class='wpm-category-display'>" . wpm_6310_replace($results['name']) . "</span>";
               }
            }
         }
      }
      echo "</td>";

      if ($value['image']) {
         echo "<td><img src='" . $value['image'] . "' height='60' /></td>";
      } else {
         echo '<td>Not Avaliable</td>';
      }
      if ($value['hover_image']) {
         echo "<td><img src='" . $value['hover_image'] . "' height='60' /></td>";
      } else {
         echo '<td>Not Avaliable</td>';
      }

      echo '<td>
                 <form method="post">
                   ' . wp_nonce_field("wpm-nonce-field-edit") . '
                          <input type="hidden" name="id" value="' . $value['id'] . '">
                          <button class="wpm-btn-success" style="float:left; margin-right: 5px;"  title="Edit"  type="submit" value="Edit" name="edit"><i class="fas fa-edit" aria-hidden="true"></i></button>
                  </form>
                  <form method="post">
                   ' . wp_nonce_field("wpm-nonce-field-clone") . '
                          <input type="hidden" name="id" value="' . $value['id'] . '">
                          <button class="wpm-btn-primary" style="float:left; margin-right: 5px;"  title="Clone"  type="submit" value="Clone" name="clone" onclick="return confirm(\'Do you want to clone this member?\');"><i class="fas fa-clone" aria-hidden="true"></i></button>
                  </form>
                  <form method="post">
                   ' . wp_nonce_field("wpm-nonce-field-delete") . '
                          <input type="hidden" name="id" value="' . $value['id'] . '">
                          <button class="wpm-btn-danger" style="float:left"  title="Delete"  type="submit" value="delete" name="delete" onclick="return confirm(\'Do you want to delete?\');"><i class="far fa-times-circle" aria-hidden="true"></i></button>
                  </form>

                             </td>';
   }
   ?>


</table>
<div id="wpm-6310-modal-add" class="wpm-6310-modal" style="display: none">
   <div class="wpm-6310-modal-content wpm-6310-modal-md">
      <form action="" method="post">
         <div class="wpm-6310-modal-header">
            Add Member
            <span class="wpm-6310-close">&times;</span>
         </div>
         <div class="wpm-6310-modal-body-form">
            <?php wp_nonce_field("wpm-6310-nonce-add") ?>
            <table border="0" width="100%" cellpadding="10" cellspacing="0">
               <tr>
                  <td style="width: 150px;"><label class="wpm-form-label" for="name">Full Name:</label></td>
                  <td><input type="text"  name="name" id="name" value="" class="wpm-form-input lg" placeholder="Full Name" /></td>
               </tr>
               <tr>
                  <td><label class="wpm-form-label" for="designation">Designation:</label></td>
                  <td><input type="text"  name="designation" id="designation" value="" class="wpm-form-input lg" placeholder="Designation" /></td>
               </tr>
               <tr>
                  <td><label class="wpm-form-label" for="pd">Profile Details Type:</label></td>
                  <td>
                     <input type="hidden" name="pd" id="pd" value="1" />
                     <button type="button" value="1" class="wpm-btn-multi profile-details-type active">Link</button>
                     <button type="button" value="2" class="wpm-btn-multi profile-details-type">Pop Up</button>
                     <button type="button" value="0" class="wpm-btn-multi profile-details-type">None</button>
                  </td>
               </tr>
               <tr id="profile_url">
                  <td><label class="wpm-form-label" for="url">Profile URL:</label></td>
                  <td>
                     <input type="text" name="url" value="" class="wpm-form-input lg" id="url" placeholder="http://www.example.com/profile" />
                  </td>
               </tr>
               <tr id="profile_url_tab">
                  <td><label class="wpm-form-label" for="new_tab">Open new tab:</label></td>
                  <td>
                     <input type="hidden" name="new_tab" id="new_tab" value="1" />
                     <button type="button" value="1" class="wpm-btn-multi profile-new-tab active">Yes</button>
                     <button type="button" value="0" class="wpm-btn-multi profile-new-tab">No</button>
                  </td>
               </tr>
               <tr id="profile_details">
                  <td><label class="wpm-form-label" for="profile_details">Profile Details:</label></td>
                  <td>
                     <?php
                     $settings = array(
                         'teeny' => TRUE,
                         'media_buttons' => false,
                         'textarea_rows' => 5
                     );
                     wp_editor("", "profile_details_new", $settings);
                     ?>
                  </td>
               </tr>
               <tr id="effect-appearance">
                  <td><label class="wpm-form-label" for="popup_app">Popup Effect Appearance:</label></td>
                  <td>
                     <select name="effect" class="wpm-form-input " id="popup_app">
                        <option value="top">Top</option>
                        <option value="bottom">Bottom</option>
                        <option value="left">Left</option>
                        <option value="right">Right</option>
                        <option value="top-left">Top-Left:</option>
                        <option value="top-right">Top-Right</option>
                        <option value="bottom-left">Bottom-Left</option>
                        <option value="bottom-right">Bottom-Right</option>
                     </select>
                  </td>
               </tr>

               <tr>
                  <td colspan="2">
                     <label class="wpm-form-label" for="social_icon">Social Icon <small>(Make Blank if you Don't want all)</small>:</label>
                     <br />
                     <div style="margin-bottom: -6px; width: 100%; display: block;">
                        <div class="wpm_6310_additonal_info_2">
                           <select name="icon_name[]" class="wpm-form-input">
                              <?php
                              echo $allIconList;
                              ?>
                           </select>
                        </div>
                        <div class="wpm_6310_additonal_info_3"><input type="text" name="icon_link[]"  class="wpm-form-input" placeholder="https://www.example.com/" ></div>
                        <br class="wpm-6310-clear" />
                     </div>

                     <br />
                     <div class="wpm_6310_additonal_info" id="wpm_6310_icon_new">
                        <input type="button" class="wpm-btn-default wpm_6310_icon_new" value="Add Row" ><br />
                     </div>
                  </td>
               </tr>

               <tr>
                  <td colspan="2">                  
                     <div style="width: 100%; display: block; margin-bottom: 10px;">
                        <label class="wpm-form-label" for="popup_app-edit">
                           Taxonomy / Custom Field <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
                           <br />
                           <small class="wpm-6310-info">(You can add font awesome icon or text. Make Blank if you Don't want)</small>
                           :
                        </label>
                     </div>
                     
                     <input type="hidden" id="icon_select_div">
                     <div class="wpm_6310_additonal_info" id='wpm_6310_icon_div_<?php echo $iconDiv ?>'>
                        <div class="wpm_6310_additonal_info_1"><i class="fas fa-plus-circle"></i></div>
                        <div class="wpm_6310_additonal_info_2"><input type="text" name="contact_label[]" class="wpm-form-input" placeholder="Email, Phone, Fax, etc."></div>
                        <div class="wpm_6310_additonal_info_3"><input name="contact_details[]" type="text" class="wpm-form-input" placeholder="email@example.com"></div>
                        <div class="wpm_6310_additonal_info_4"></div>
                        <br>
                     </div>

                     <div class="wpm_6310_additonal_contact" id="wpm_6310_contact_new">
                        <input type="button" class="wpm-btn-default wpm_6310_contact_new" value="Add Row"><br />
                     </div>

                  </td>
               </tr>
               <!-- Skills List -->
               <tr>
                     <td colspan="2">
                        <br />
                        <div style="width: 100%; display: block;">
                           <label class="wpm-form-label" for="popup_app-edit">
                              Skills List
                              <small>(Make Blank if you Don't want)</small>
                              :
                           </label>
                           <div class="skills-info">
                              <input type="text" name="skills_name[]" class="wpm-form-input skills-name" placeholder="Enter Skills Name">
                              <input name="skills_rating[]" type="range" step="1" min="20" max="100" value="90" data-rangeSlider title="">
                              <output>90</output><span><button type="button" class="wpm-btn-danger sm wpm_6310_skills_remove" value="Remove"><i class="far fa-times-circle" aria-hidden="true"></i></button></span>
                           </div>
                        </div>

                        <div class="wpm_6310_additonal_skills" id="wpm_6310_skills_new">
                           <input type="button" class="wpm-btn-default wpm_6310_skills_new" value="Add Row"><br />
                        </div>

                     </td>
                  </tr>
               <tr>
                  <td colspan="2">
                     <br />
                     <label class="wpm-form-label" for="popup_app-edit">
                        Select Category: <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
                     </label>
                     <div>
                        <?php
                        $category = $wpdb->get_results("SELECT * FROM {$category_table} ORDER BY serial ASC", ARRAY_A);
                        foreach ($category as $cat) {
                           echo "<div class='wpm-row-select-cat' id='{$cat['id']}'>
                                 <input type='checkbox' name='catid[]' value='{$cat['c_name']}'
                                 id='cat-box-{$cat['id']}'
                                 class='wpm-row-select-cat-checkbox' />
                                 ". wpm_6310_replace($cat['name']) ."
                              </div>";
                        }
                        ?>
                     </div>
                  </td>
               </tr>            
               <tr>
                  <td>Image URL</td>
                  <td>
                     <input type="text" name="image" id="wpm_6310_upload_team_member_image_src" class="wpm-form-input lg" >
                     <input type="button" id="wpm_6310_upload_team_member_image" value="Upload Image" class="wpm-btn-default" >
                  </td>
               </tr>
               <tr>
                  <td>Image Hover URL <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                  <td>
                     <input type="text" name="hover_image" id="wpm_6310_upload_team_member_hover_image_src" class="wpm-form-input lg" >
                     <input type="button" id="wpm_6310_upload_team_member_hover_image" value="Upload Hover Image" class="wpm-btn-default" >
                  </td>
               </tr>
            </table>

         </div>
         <div class="wpm-6310-modal-form-footer">
            <button type="button" name="close" id="wpm-from-close" class="wpm-btn-danger wpm-pull-right">Close</button>
            <input type="submit" name="save" class="wpm-btn-primary wpm-pull-right wpm-margin-right-10" value="Save"/>
         </div>
         <br class="wpm-6310-clear" />
      </form>
   </div>
   <br class="wpm-6310-clear" />
</div>
</div>

<div id="wpm_6310_social_icon" class="wpm-6310-modal" style="display: none">
         <div class="wpm-6310-modal-content wpm-6310-modal-xl">
            <form action="" method="post">
               <?php wp_nonce_field("wpm-6310-nonce-update-icon-order") ?>
              
               <input type="hidden" name="rearrange_list" id="rearrange_list" value="" />
               <div class="wpm-6310-modal-header">
                  <span style="float: left; margin-right: 15px;">Choose your Icon</span>
                  <input type="text" id="icon-filter" class="wpm-form-input" placeholder="Search Icon" />
                  <span class="wpm-6310-icon-close">&times;</span>
               </div>
               <div class="wpm-6310-modal-body-form">
                  <ul class="wpm-6310-choose-icon">
                     <?php echo wpm_6310_fa_icon_list('li', '</li>'); ?>
                  </ul>
               </div>
               <div class="wpm-6310-modal-form-footer">
                  <button type="button" name="close" id="wpm-6310-font-icon-close" class="wpm-btn-danger wpm-pull-right">Close</button>
               </div>
            </form>
            <br class="wpm-6310-clear" />
         </div>
      </div>

<script>
   let iconDiv = <?php echo $iconDiv ?>;
   jQuery(document).ready(function () {
      //category select
      jQuery("body").on("click", ".wpm-row-select-cat-checkbox", function(event) {
         event.stopPropagation();
      });
      jQuery("body").on("click", ".wpm-row-select-cat", function() {
         var id = jQuery(this).attr("id");
         if (jQuery("#cat-box-" + id).prop('checked') == true) {
            jQuery("#cat-box-" + id).prop('checked', false);
            return false;
         } else {
            jQuery("#cat-box-" + id).prop('checked', true);
            return true;
         }
      });

      jQuery("#profile_details, #effect-appearance").hide();
      jQuery("body").on("click", "#add-team-member", function () {
         jQuery("#wpm-6310-modal-add").fadeIn(500);
         jQuery("body").css({
            "overflow": "hidden"
         });
         return false;
      });

     //Filter
      jQuery("#icon-filter").on("keyup", function() {
         var value = jQuery(this).val().toLowerCase();
         jQuery(".wpm-6310-choose-icon li").filter(function() {
            jQuery(this).toggle(jQuery(this).attr(`data-icon-name`).toLowerCase().indexOf(value) > -1);
         });
      });


      
      jQuery("body").on("click", "#wpm-6310-font-icon-close, .wpm-6310-icon-close", function () {
         jQuery("#wpm_6310_social_icon").fadeOut(500);
      });

      jQuery(window).click(function (event) {
         if (event.target == document.getElementById('wpm_6310_social_icon')) {
            jQuery("#wpm_6310_social_icon").fadeOut(500);
         }
      });

      jQuery("body").on("click", ".wpm_6310_additonal_info_1 i", function () {
         if(jQuery('#icon-filter').val()) {
            jQuery('#icon-filter').val('');
            jQuery(".wpm-6310-choose-icon li").filter(function() {
               jQuery(this).toggle();
            });
         }
         
         let divId = jQuery(this).parent().parent().attr('id');
         divId = divId.substring(18);
         jQuery('#icon_select_div').val(divId);         
         jQuery("#wpm_6310_social_icon").fadeIn(500);
         jQuery("body").css({
            "overflow": "hidden"
         });
         jQuery('#icon-filter').focus();
         return false;
      });

      jQuery("body").on("click", "ul.wpm-6310-choose-icon li", function () {
         let cls = jQuery(this).find('i').attr('class');
         let sl = jQuery('#icon_select_div').val();
         jQuery(`#wpm_6310_icon_div_${sl}`).find('input:first').val(`<i class='${cls}'></i>`);
         jQuery("#wpm_6310_social_icon").fadeOut(500);
      });      

      /* Profile Details Type Start */
      jQuery("body").on("click", ".profile-details-type", function () {
         var val = parseInt(jQuery(this).val());
         jQuery(".profile-details-type").removeClass("active");
         jQuery(this).addClass("active");

         if (val == 0) {
            jQuery("#profile_details, #effect-appearance, #profile_url, #profile_url_tab").hide();
         } else if (val == 1) {
            jQuery("#profile_url, #profile_url_tab").show();
            jQuery("#profile_details, #effect-appearance").hide();
         } else if (val == 2) {
            jQuery("#profile_details, #effect-appearance").show();
            jQuery("#profile_url, #profile_url_tab").hide();
         }
         jQuery("#pd").val(val);
         return false;
      });
      jQuery("body").on("click", ".profile-new-tab", function () {
         var val = parseInt(jQuery(this).val());
         jQuery(".profile-new-tab").removeClass("active");
         jQuery(this).addClass("active");
         jQuery("#new_tab").val(val);
         return false;
      });
      /* Profile Details Type End */

      
      /* Contact New */
      
      jQuery("body").on("click", ".wpm_6310_contact_new", function(e) {
         iconDiv++;
         var html = '<div class="wpm_6310_additonal_info" id="wpm_6310_icon_div_'+iconDiv+'"><div class="wpm_6310_additonal_info_1"><i class="fas fa-plus-circle"></i></div><div class="wpm_6310_additonal_info_2"><input type="text" name="contact_label[]" class="wpm-form-input" placeholder="Email, Phone, Fax, etc."></div><div class="wpm_6310_additonal_info_3"><input name="contact_details[]" type="text" class="wpm-form-input" placeholder="email@example.com" ></div><div class="wpm_6310_additonal_info_4"> &nbsp;&nbsp;<button type="button" class="wpm-btn-danger sm wpm_6310_icon_remove" value="Remove"><i class="far fa-times-circle" aria-hidden="true"></i></button></div></div>';
         jQuery("body").css({
            "overflow": "hidden"
         });
         jQuery("#wpm_6310_contact_new").before(html);
      });

      /* Contact Edit */
      jQuery("body").on("click", ".wpm_6310_contact_new-edit", function(e) {
         iconDiv++;
         var html = '<div class="wpm_6310_additonal_info" id="wpm_6310_icon_div_'+iconDiv+'"><div class="wpm_6310_additonal_info_1"><i class="fas fa-plus-circle"></i></div><div class="wpm_6310_additonal_info_2"><input type="text" name="contact_label[]" class="wpm-form-input" placeholder="Email, Phone, Fax, etc."></div><div class="wpm_6310_additonal_info_3"><input name="contact_details[]" type="text" class="wpm-form-input" placeholder="email@example.com" ></div><div class="wpm_6310_additonal_info_4"> &nbsp;&nbsp;<button type="button" class="wpm-btn-danger sm wpm_6310_icon_remove" value="Remove"><i class="far fa-times-circle" aria-hidden="true"></i></button></div></div>';
         jQuery("body").css({
            "overflow": "hidden"
         });
         jQuery("#wpm_6310_contact_new-edit").before(html);
      });


      /* Social Icon Start */
      jQuery("body").on("click", ".wpm_6310_icon_new", function (e) {
         var html = '<div class="wpm_6310_additonal_info"><div class="wpm_6310_additonal_info_2"><select name="icon_name[]" class="wpm-form-input"><?php echo $allIconList; ?></select></div><div class="wpm_6310_additonal_info_3"><input type="text" name="icon_link[]" class="wpm-form-input" placeholder="https://www.example.com" ></div><div class="wpm_6310_additonal_info_4"> &nbsp;&nbsp;<button type="button" class="wpm-btn-danger sm wpm_6310_icon_remove" value="Remove"><i class="far fa-times-circle" aria-hidden="true"></i></button></div></div>';
         jQuery("body").css({
            "overflow": "hidden"
         });
         jQuery("#wpm_6310_icon_new").before(html);
      });
      jQuery("body").on("click", ".wpm_6310_icon_remove", function (e) {
         jQuery(this).parent().parent().remove();
         return false;
      });
      /* Social Icon End */

      /* Modal Close Start */
      jQuery("body").on("click", ".wpm-6310-close, #wpm-from-close", function () {
         jQuery("#wpm-6310-modal-add, #wpm-6310-modal-edit").fadeOut(500);
         jQuery("body").css({
            "overflow": "initial"
         });
      });
      jQuery(window).click(function (event) {
         if (event.target == document.getElementById('wpm-6310-modal-add')) {
            jQuery("#wpm-6310-modal-add").fadeOut(500);
            jQuery("body").css({
               "overflow": "initial"
            });
         } else if (event.target == document.getElementById('wpm-6310-modal-edit')) {
            jQuery("#wpm-6310-modal-edit").fadeOut(500);
            jQuery("body").css({
               "overflow": "initial"
            });
         }
      });
      /* Modal Close End */

      /* ######### Media Start ########### */
      jQuery("body").on("click", "#wpm_6310_upload_team_member_image", function (e) {
         e.preventDefault();
         var image = wp.media({
            title: 'Upload Image',
            multiple: false
         }).open()
                 .on('select', function (e) {
                    var uploaded_image = image.state().get('selection').first();
                    var image_url = uploaded_image.toJSON().url;
                    jQuery("#wpm_6310_upload_team_member_image_src").val(image_url);
                    //jQuery("#vkcmu-favicon-image").attr("src", image_url);
                 });

         jQuery("#wpm_6310_add_new_media").css({
            "overflow-x": "hidden",
            "overflow-y": "auto"
         });
      });
      
      (function() {
         var selector = '[data-rangeSlider]',
            elements = document.querySelectorAll(selector);

         function valueOutput(element) {
            var value = element.value,
               output = element.parentNode.getElementsByTagName('output')[0];
            output.innerHTML = value;
         }
         Array.prototype.slice.call(document.querySelectorAll('input[type="range"]')).forEach(function(el) {
            el.addEventListener('input', function(e) {
               valueOutput(e.target);
            }, false);
         });
      })();

      jQuery("body").on("click", "#wpm_6310_upload_team_member_hover_image", function (e) {
         e.preventDefault();
         var image = wp.media({
            title: 'Upload Hover Image',
            multiple: false
         }).open()
                 .on('select', function (e) {
                    var uploaded_image = image.state().get('selection').first();
                    var image_url = uploaded_image.toJSON().url;
                    jQuery("#wpm_6310_upload_team_member_hover_image_src").val(image_url);
                 });

         jQuery("#wpm_6310_add_new_media").css({
            "overflow-x": "hidden",
            "overflow-y": "auto"

         });
      });
      /* ######### Media End ########### */

      /* Skills New */
      jQuery("body").on("click", ".wpm_6310_skills_new", function(e) {
         var html = '<div class="skills-info"><input type="text" name="skills_name[]" class="wpm-form-input skills-name" placeholder="Enter Skills Name"><input name="skills_rating[]" type="range" step="1" min="20" max="100" value="90" data-rangeSlider title="">&nbsp;<output>90</output><span><button type="button" class="wpm-btn-danger sm wpm_6310_skills_remove" value="Remove"><i class="far fa-times-circle" aria-hidden="true"></i></button></span></div>';
         jQuery("body").css({
            "overflow": "hidden"
         });
         jQuery("#wpm_6310_skills_new").before(html);

         (function() {
            var selector = '[data-rangeSlider]',
               elements = document.querySelectorAll(selector);

            function valueOutput(element) {
               var value = element.value,
                  output = element.parentNode.getElementsByTagName('output')[0];
               output.innerHTML = value;
            }
            Array.prototype.slice.call(document.querySelectorAll('input[type="range"]')).forEach(function(el) {
               el.addEventListener('input', function(e) {
                  valueOutput(e.target);
               }, false);
            });
         })();
      });
  /* Skills Remove */
      jQuery("body").on("click", ".wpm_6310_skills_remove", function(e) {
            jQuery(this).parent().parent().remove();
            return false;
         });

         /* Skills Edit */
      jQuery("body").on("click", ".wpm_6310_skills_new-edit", function(e) {
         var html = '<div class="skills-info"><input type="text" name="skills_name[]" class="wpm-form-input skills-name" placeholder="Enter Skills Name"><input name="skills_rating[]" type="range" step="1" min="20" max="100" value="90" data-rangeSlider title="">&nbsp;<output>90</output><span><button type="button" class="wpm-btn-danger sm wpm_6310_skills_remove" value="Remove"><i class="far fa-times-circle" aria-hidden="true"></i></button></span></div>';
         jQuery("body").css({
            "overflow": "hidden"
         });
         jQuery(".wpm_6310_skills_new-edit").before(html);


         (function() {
            var selector = '[data-rangeSlider]',
               elements = document.querySelectorAll(selector);

            function valueOutput(element) {
               var value = element.value,
                  output = element.parentNode.getElementsByTagName('output')[0];
               output.innerHTML = value;
            }
            Array.prototype.slice.call(document.querySelectorAll('input[type="range"]')).forEach(function(el) {
               el.addEventListener('input', function(e) {
                  valueOutput(e.target);
               }, false);
            });
         })();
      });
   });
</script>
