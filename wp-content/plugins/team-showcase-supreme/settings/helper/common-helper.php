<?php

function wpm_6310_add_new_media($id, $member_table, $icon_table, $members = NULL, $template = 0)
{
   global $wpdb;
   wp_enqueue_media();

   $style_table = $wpdb->prefix . 'wpm_6310_style';
   $category_table = $wpdb->prefix . 'wpm_6310_category';
   $allCategory = $wpdb->get_results('SELECT * FROM ' . $category_table . ' ORDER BY serial ASC', ARRAY_A);
   $selStyle = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $id), ARRAY_A);
   $selCategoryIds = [];
   if($selStyle['categoryids']) {
      $selcCat = explode(',', $selStyle['categoryids']);
      if ($selcCat) {
         foreach ($selcCat as $catid) {
            if ($catid) {
               $selCategoryIds[] = $wpdb->get_row("SELECT * FROM $category_table WHERE id={$catid}", ARRAY_A);
            }
         }
      }
   }
?>
   <div class="wpm_6310_add_media">
      <h6>Customize Team Members</h6>
      <div class="wpm_6310_add_media_body" id="wpm_6310_add_new_media">
         <i class="fas fa-plus-circle wpm_6310_add_media_add_new_icon"></i>
         Add/Edit Members
      </div>
   </div>
   <br />
   <div class="wpm_6310_add_media">
      <h6>
         Rearrange Team 
         <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
      </h6>
      <div class="wpm_6310_add_media_body" id="wpm_6310_rearrange_team">
         <i class="fas fa-cogs wpm_6310_add_media_add_new_icon"></i>
      </div>
   </div>
   <br />
   <div class="wpm_6310_add_media">
      <h6>Shortcode</h6>
      <div class="wpm_6310_add_media_body_shortcode">
         <input type="text" onclick="this.setSelectionRange(0, this.value.length)" value='[wpm_team_showcase id="<?php echo $id; ?>"]' />
      </div>
   </div>
   <br />
   <div class="wpm_6310_add_media">
      <h6>
         Customize Category
         <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
      </h6>
      <div class="wpm_6310_add_media_body" id="wpm_6310_category">
         <i class="fas fa-plus-circle wpm_6310_add_media_add_new_icon"></i>
         Add/Edit Category
      </div>
   </div>
   <br />
   <div class="wpm_6310_add_media">
      <h6>
         Rearrange Category
         <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
      </h6>
      <div class="wpm_6310_add_media_body" id="wpm_6310_rearrange_category">
         <i class="fas fa-cogs wpm_6310_add_media_add_new_icon"></i>
      </div>
   </div>
   <br />
   <div class="wpm_6310_add_media">
      <h6>How to Use</h6>
      <div class="wpm_6310_add_media_body">
         <a href="https://www.youtube.com/watch?v=XQMLA_F_CYs" target="_blank">
            <i class="fas fa-video fa-2x"></i><br />
            Watch Video Tutorial
         </a>
      </div>
   </div>

   <?php
      $results = array();
      $order_type = 0;
      if ($members) {
         $memList = explode("||##||", $members);
         $order_type = isset($memList[1]) ? $memList[1] : 0;
         $memberids = explode(",", $memList[0]);
         if ($memberids) {
            foreach ($memberids as $memid) {
               if ($memid) {
                  $results[] = $wpdb->get_row("SELECT * FROM $member_table WHERE id={$memid}", ARRAY_A);
               }
            }
         }
      }
      ?>

<div id="wpm_6310_rearrange_team_modal" class="wpm-6310-modal" style="display: none">
      <div class="wpm-6310-modal-content" style="padding-left: 15px; padding-right: 15px;">
         <form action="" method="post">
            <input type="hidden" name="rearrange_id" value="<?php echo $id ?>" />
            <input type="hidden" name="rearrange_list" id="rearrange_list" value="<?php echo $memList[0] ?>" />
            <input type="hidden" name="rearrange_list_all" id="rearrange_list_all" value="" />
            <div class="wpm-6310-modal-header">
               Rearrange Teams
               <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
               <span class="wpm-6310-icon-close">&times;</span>
            </div>
            <div class="wpm-6310-modal-body-form">
               <p>
                  <b>Order Type: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
                  <input type="radio" name="order_type" value="0" checked>Custom Order &nbsp;&nbsp;&nbsp;
                  <input type="radio" name="order_type" value="1" <?php if($order_type == 1) echo ' checked'; ?>>Random Order
               </p>
               <div class="wpm-6310-filter-popup">
                  <p>Drag and drop to change members order</p>
                  <div class="wpm-6310-filter-popup-left">
                  <?php
                     if($selCategoryIds){
                        foreach($selCategoryIds as $cat){
                           echo "<div class='wpm-6310-filter-popup-title'>Category: " . wpm_6310_replace($cat['name']) . "</div>";
                           echo "<ul id='wpm-6310-sortable' class='wpm-6310-sortable' data-id='{$cat['c_name']}' id='wpm-6310-sortable-{$cat['c_name']}'>";
                           foreach ($results as $result) {
                              echo "<li class='ui-state-default wpm-6310-ui-state-default' id='{$result['id']}'>" . wpm_6310_replace($result['name']) . "</li>";
                           }
                           echo "</ul>";
                           break;
                        }
                     }
                  ?>
                  </div>
                  <div class="wpm-6310-filter-popup-right">
                  <?php
                     $count = 1;
                     if($selCategoryIds){
                        foreach($selCategoryIds as $cat){
                           if($count){   
                              echo "<div class='wpm-6310-filter-popup-50'>
                                    <div class='wpm-6310-filter-popup-title'>Category: " . wpm_6310_replace($cat['name']) . "</div>";
                              echo "<ul class='wpm-6310-sortable' data-id='{$cat['c_name']}' id='wpm-6310-sortable-{$cat['c_name']}'>";

                              if(isset($memList[2]) && $memList[2] != ''){
                                 $memIds = explode('##||##', $memList[2]);
                                 $idList = [];
                                 foreach($memIds as $temp){
                                    $temp = explode('##@@##', $temp);
                                    if(in_array($cat['c_name'], $temp)){
                                       $idList = $temp[1];
                                    }
                                 }
                                 if($idList){
                                    $results = [];
                                    $memberids = explode(",", $idList);
                                    if ($memberids) {
                                       foreach ($memberids as $memid) {
                                          if ($memid) {
                                             $results[] = $wpdb->get_row("SELECT * FROM $member_table WHERE id={$memid}", ARRAY_A);
                                          }
                                       }
                                    }
                                 }
                              }

                              foreach ($results as $result) {
                                 $catList = $result['category'] ? explode(' ', $result['category']) : [];
                                 if($catList && in_array($cat['c_name'], $catList)){
                                    echo "<li class='ui-state-default wpm-6310-ui-state-default' id='{$result['id']}'>" . wpm_6310_replace($result['name']) . "</li>";
                                 } 
                              }
                              echo "</ul></div>";
                           }
                           $count++;
                        }
                     }
                  ?>
                  </div>
               </div>
            </div>
            <div class="wpm-6310-modal-form-footer">
               <button type="button" name="close" class="wpm-btn-danger wpm-pull-right">Close</button>
               <input type="submit" name="rearrange-list-save" class="wpm-btn-primary wpm-pull-right wpm-margin-right-10" id="wpm-6310-sortable-sub" value="Save" />
            </div>
         </form>
         <br class="wpm-6310-clear" />
      </div>
   </div>

   <div id="wpm_6310_rearrange_category_modal" class="wpm-6310-modal" style="display: none">
      <div class="wpm-6310-modal-content" style="padding-left: 15px; padding-right: 15px;">
         <form action="" method="post">
         <?php wp_nonce_field("wpm-6310-nonce-rearrange-category") ?>
            <input type="hidden" name="category_rearrange_id" value="<?php echo $id ?>" />
            <input type="hidden" name="category_rearrange_list" id="category_rearrange_list" value="<?php echo $selStyle['categoryids'] ?>" />
            <div class="wpm-6310-modal-header">
               Rearrange Category
               <span class="wpm-6310-icon-close">&times;</span>
            </div>
            <div class="wpm-6310-modal-body-form">
               <?php
                  if($selStyle['categoryids']) {
                     $categoryOrder = explode(',', $selStyle['categoryids']);
                     if($categoryOrder) {
                        echo '<ul id="wpm-6310-sortable-category" class="ui-sortable">';
                        foreach($categoryOrder as $cat) {
                           if($cat) {
                              $result = $wpdb->get_row("SELECT * FROM $category_table WHERE id={$cat}", ARRAY_A);
                              if($result) {
                                 echo "<li class='ui-state-default wpm-6310-ui-state-default' id='{$result['id']}'>".wpm_6310_replace($result['name'])."</li>";
                              }
                           }
                        }
                        echo '</ul>';
                     } else {
                        echo "<p>No category added.</p>";
                     }
                  }else {
                     echo "<p>No category added.</p>";
                  }
               ?>
            </div>
            <div class="wpm-6310-modal-form-footer">
               <button type="button" name="close" class="wpm-btn-danger wpm-pull-right">Close</button>
               <input type="submit" name="category-rearrange-list-save" class="wpm-btn-primary wpm-pull-right wpm-margin-right-10" id="wpm-6310-sortable-category-save" value="Save" />
            </div>
         </form>
         <br class="wpm-6310-clear" />
      </div>
   </div>

   <div id="wpm_6310_add_new_media_modal" class="wpm-6310-modal" style="display: none">
      <div class="wpm-6310-modal-content wpm-6310-modal-md">
         <form action="" method="post">
            <div class="wpm-6310-modal-header">
               Add/Edit Members
               <span class="wpm-6310-icon-close">&times;</span>
            </div>
            <div class="wpm-6310-modal-body-form">
               <input type="hidden" name="styleid" value="<?php echo $id ?>" />
               <?php wp_nonce_field("wpm-6310-nonce-add-member") ?>
               <table border="0" width="100%" cellpadding="0" cellspacing="0" class="wpm-member-table">
                  <tr height="40" style="font-weight: bold">
                     <td></td>
                     <td>Name</td>
                     <td>Designation</td>
                     <td>Image</td>
                     <td>Icon</td>
                  </tr>
                  <?php
                     $memberList = [];
                     $member_order = [];
                     $allmembers = $wpdb->get_results('SELECT * FROM ' . $member_table . ' ORDER BY name ASC', ARRAY_A);
                     if($allmembers){
                        if ($members) {
                           $member_order = explode("||##||", $members);
                           $member_order = ($member_order[0] != '') ? explode(",", $member_order[0]) : [];
                        }
                        if($member_order){
                           foreach($member_order as $mem){
                              if($mem != ''){
                                 $tempMemebr = $wpdb->get_row("SELECT * FROM $member_table where id='".$mem."'", ARRAY_A);
                                 if ($tempMemebr) {
                                    $memberList[] = $tempMemebr;
                                 }
                              }
                           }
                        }

                        foreach ($allmembers as $allMem) {
                           if($member_order && !in_array($allMem['id'], $member_order)){
                              $memberList[] = $allMem;
                           }
                           else if(!$member_order){
                              $memberList[] = $allMem;
                           }
                        }
                     }    
                     
                  if (!$memberList) {
                     echo "<tr height='60'>
                          <td colspan='4'>No team members found. For add team member, <a href='" . site_url() . "/wp-admin/admin.php?page=wpm-team-showcase-team-member' class='wpm-btn-success'>Click Here</a></td>
                    </tr>";
                  } else {
                     foreach ($memberList as $allmember) {
                        if (!$allmember) {
                           continue;
                        }
                        $checked = '';
                        if($member_order && in_array($allmember['id'], $member_order)){
                           $checked = ' checked';
                        }
                  ?>
                        <tr class="wpm-row-select" id="<?php echo $allmember['id']; ?>">
                           <td width="20"><input type="checkbox" name="memid[]" value="<?php echo $allmember['id'] ?>" <?php echo $checked; ?> id="chk-box-<?php echo $allmember['id']; ?>" class="wpm-row-select-checkbox" /></td>
                           <td width="120"><?php echo wpm_6310_replace($allmember['name']) ?></td>
                           <td width="120"><?php echo wpm_6310_replace($allmember['designation']) ?></td>
                           <td><img src="<?php echo $allmember['image'] ?>" height="50" /></td>
                           <td>
                              <?php
                              if ($allmember['iconids']) {
                                 if ($allmember['iconids']) {
                                    $idExist = explode(',', $allmember['iconids']);
                                    $idExist = implode('', $idExist);
                                    $idExist = trim(str_replace(' ', '', $idExist));
                                    if ($idExist) {
                                       $myIcon = $wpdb->get_results("SELECT * FROM $icon_table WHERE id in (" . $allmember['iconids'] . ")", ARRAY_A);
                                       if ($myIcon) {
                                          foreach ($myIcon as $k => $v) {
                                             echo "<button class='wpm-btn-icon' style='color:" . $v['color'] . "; background-color: " . $v['bgcolor'] . "; margin-right: 5px; margin-bottom: 5px;'><i class='" . $v['class_name'] . "'></i></button>";
                                          }
                                       }
                                    }
                                 }
                              }
                              ?>
                           </td>
                        </tr>
                  <?php
                     }
                  }
                  ?>
               </table>

            </div>
            <div class="wpm-6310-modal-form-footer">
               <button type="button" name="close" class="wpm-btn-danger wpm-pull-right">Close</button>
               <input type="submit" name="team-member-save" class="wpm-btn-primary wpm-pull-right wpm-margin-right-10" value="Save" />
            </div>
         </form>
         <br class="wpm-6310-clear" />
      </div>
   </div>

   <div id="wpm_6310_category_modal" class="wpm-6310-modal" style="display: none">
      <div class="wpm-6310-modal-content wpm-6310-modal-md">
         <form action="" method="post">
            <div class="wpm-6310-modal-header">
               Add/Edit Category
               <span class="wpm-6310-icon-close">&times;</span>
            </div>
            <div class="wpm-6310-modal-body-form">
               <input type="hidden" name="styleid" value="<?php echo $id ?>" />
               <?php wp_nonce_field("wpm-6310-nonce-add-category") ?>
               <table border="0" width="100%" cellpadding="0" cellspacing="0" class="wpm-member-table">
                  <tr height="40" style="font-weight: bold">
                     <td></td>
                     <td>Name</td>
                  </tr>
                  <?php
                     $categoryList = [];
                     $category_order = [];
                     $allCategory = $wpdb->get_results('SELECT * FROM ' . $category_table . " ORDER BY serial ASC", ARRAY_A);
                     if($selStyle){
                        if($selStyle['categoryids']) {
                           $category_order = explode(',', $selStyle['categoryids']);
                        }
                        if($category_order){
                           foreach($category_order as $cat){
                              if($cat != ''){
                                 $tempCategory = $wpdb->get_row("SELECT * FROM $category_table where id='".$cat."'", ARRAY_A);
                                 if ($tempCategory) {
                                    $categoryList[] = $tempCategory;
                                 }
                              }
                           }
                        }

                        foreach ($allCategory as $allCat) {
                           if($category_order && !in_array($allCat['id'], $category_order)){
                              $categoryList[] = $allCat;
                           }
                           else if(!$category_order){
                              $categoryList[] = $allCat;
                           }
                        }
                     }    

                  if (!$categoryList) {
                     echo "<tr height='60'>
                          <td colspan='4'>No category found. For add category, <a href='" . site_url() . "/wp-admin/admin.php?page=wpm-team-showcase-category' class='wpm-btn-success'>Click Here</a></td>
                    </tr>";
                  } else {
                     foreach ($categoryList as $allCat) {
                        if (!$allCat) {
                           continue;
                        }
                        $checked = '';
                        if($category_order && in_array($allCat['id'], $category_order)){
                           $checked = ' checked';
                        }
                  ?>
                        <tr class="wpm-row-select-cat" id="<?php echo $allCat['id']; ?>" height='60'>
                           <td width="10%"><input type="checkbox" name="catid[]" value="<?php echo $allCat['id'] ?>" <?php echo $checked; ?> id="cat-check-box-<?php echo $allCat['id']; ?>" class="wpm-row-select-checkbox-category" /></td>
                           <td width="120"><?php echo wpm_6310_replace($allCat['name']) ?></td>
                        </tr>
                  <?php
                     }
                  }
                  ?>
               </table>

            </div>
            <div class="wpm-6310-modal-form-footer">
               <button type="button" name="close" class="wpm-btn-danger wpm-pull-right">Close</button>
               <input type="submit" name="team-category-save" class="wpm-btn-primary wpm-pull-right wpm-margin-right-10" value="Save" />
            </div>
         </form>
         <br class="wpm-6310-clear" />
      </div>
   </div>

   <style>
      .wpm-6310-ui-state-default {
         padding: 8px 10px;
         cursor: move;
         border-radius: 3px;
      }
   </style>
   <script>
      jQuery(document).ready(function() {
         <?php
            if($order_type == 1){
               echo 'jQuery(".wpm-6310-filter-popup").hide();';
            }
         ?>
         jQuery(`#wpm-6310-sortable`).sortable();
         jQuery(`#wpm-6310-sortable`).disableSelection();

         var sortable = jQuery(".wpm-6310-sortable");
         sortable.each(function(){
            let currentId = jQuery(this).attr('id');
            jQuery(`#${currentId}`).sortable();
            jQuery(`#${currentId}`).disableSelection();
         });

         jQuery("#wpm-6310-sortable-sub").click(function() {
            let list_sortable = '';
            sortable.each(function(){
            let currentId = jQuery(this).attr('id');
               if(list_sortable != ''){
                  list_sortable += "##||##";
               }
               list_sortable += jQuery(this).data('id') + "##@@##" + jQuery(`#${currentId}`).sortable('toArray').toString();
            });
            jQuery("#rearrange_list").val(jQuery(`#wpm-6310-sortable`).sortable('toArray').toString());
            jQuery("#rearrange_list_all").val(list_sortable);
         });

         //Category sort
         jQuery(`#wpm-6310-sortable-category`).sortable();
         jQuery(`#wpm-6310-sortable-category`).disableSelection();
         var sortableCat = jQuery("#wpm-6310-sortable-category li");
         jQuery("#wpm-6310-sortable-category-save").click(function() {
            let list_sortable = '';
            sortableCat.each(function(){
               if(list_sortable != ''){
                  list_sortable += ",";
               }
               list_sortable += jQuery(this).attr('id');
            });
            jQuery("#category_rearrange_list").val(jQuery(`#wpm-6310-sortable-category`).sortable('toArray').toString());
         });

         jQuery("body").on("click", "#wpm_6310_rearrange_team", function() {
            var slider = parseInt(jQuery('#slider_activation').val());
            var category = parseInt(jQuery('#category_activation').val());
            jQuery("#wpm_6310_rearrange_team_modal .wpm-6310-modal-content").removeClass('wpm-6310-modal-md wpm-6310-modal-sm');
            if(slider == 0 && category == 1){     
               jQuery("#wpm_6310_rearrange_team_modal .wpm-6310-modal-content").addClass('wpm-6310-modal-md');
               jQuery('.wpm-6310-filter-popup-right, .wpm-6310-filter-popup-title').show();
               jQuery('.wpm-6310-filter-popup-left').hide();
            }
            else{
               jQuery('.wpm-6310-filter-popup-left').show();
               jQuery('.wpm-6310-filter-popup-right, .wpm-6310-filter-popup-title, .wpm-6310-filter-popup-show').hide();
               jQuery("#wpm_6310_rearrange_team_modal .wpm-6310-modal-content").addClass('wpm-6310-modal-sm');
            }

            jQuery("#wpm_6310_rearrange_team_modal").fadeIn(500);
            jQuery("body").css({
               "overflow": "hidden"
            });
            return false;
         });   

         jQuery("body").on("click", "#wpm_6310_rearrange_category", function() {
            jQuery("#wpm_6310_rearrange_category_modal .wpm-6310-modal-content").removeClass('wpm-6310-modal-md wpm-6310-modal-sm');
            jQuery('.wpm-6310-filter-popup-right, .wpm-6310-filter-popup-title').hide();
            jQuery("#wpm_6310_rearrange_category_modal .wpm-6310-modal-content").addClass('wpm-6310-modal-sm');
            jQuery("#wpm_6310_rearrange_category_modal").fadeIn(500);
            jQuery("body").css({
               "overflow": "hidden"
            });
            return false;
         });   

         jQuery('body').on('click', "input[name='order_type']", function(){
            if (jQuery(this).val() == '1' || jQuery(this).val() == 1) {
               jQuery(".wpm-6310-filter-popup").hide();
            }
            else{
               jQuery(".wpm-6310-filter-popup").show();
            }
         });

         jQuery("body").on("click", ".wpm-row-select-checkbox, .wpm-row-select-checkbox-category", function(event) {
            event.stopPropagation();
         });
         jQuery("body").on("click", ".wpm-row-select", function() {
            var id = jQuery(this).attr("id");
            if (jQuery("#chk-box-" + id).prop('checked') == true) {
               jQuery("#chk-box-" + id).prop('checked', false);
               return false;
            } else {
               jQuery("#chk-box-" + id).prop('checked', true);
               return true;
            }
         });

         jQuery("body").on("click", ".wpm-row-select-cat", function() {
            var id = jQuery(this).attr("id");
            if (jQuery("#cat-check-box-" + id).prop('checked') == true) {
               jQuery("#cat-check-box-" + id).prop('checked', false);
               return false;
            } else {
               jQuery("#cat-check-box-" + id).prop('checked', true);
               return true;
            }
         });

         jQuery("body").on("click", "#wpm_6310_category", function() {
            jQuery("#wpm_6310_category_modal").fadeIn(500);
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
         jQuery("body").on("click", ".wpm-6310-icon-close, .wpm-btn-danger", function() {
            jQuery("#wpm_6310_add_new_media_modal, #wpm_6310_rearrange_team_modal, #wpm_6310_rearrange_category_modal, #wpm_6310_category_modal").fadeOut(500);
            jQuery("body").css({
               "overflow": "initial"
            });
         });
         jQuery(window).click(function(event) {
            if (event.target == document.getElementById('wpm_6310_rearrange_category_modal')) {
               jQuery("#wpm_6310_rearrange_category_modal").fadeOut(500);
               jQuery("body").css({
                  "overflow": "initial"
               });
            }
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
            if (event.target == document.getElementById('wpm_6310_category_modal')) {
               jQuery("#wpm_6310_category_modal").fadeOut(500);
               jQuery("body").css({
                  "overflow": "initial"
               });
            }
         });
      });
   </script>

<div id="wpm-6310-modal-add" class="wpm-6310-modal" style="display: none">
	 <div class="wpm-6310-modal-content wpm-6310-modal-sm">
			<form action="" method="post">
				 <div class="wpm-6310-modal-header">
						Change Template
						<span class="wpm-6310-close">&times;</span>
				 </div>
				 <div class="wpm-6310-modal-body-form">
						<?php wp_nonce_field("wpm_nonce_change_template") ?>
						<input type="hidden" name="id" value="<?php echo $id ?>" />
						<input type='hidden' name='old_style_name' value='<?php echo $template ?>' />
						<table border="0" width="100%" cellpadding="10" cellspacing="0">
							 <tr>
									<td width="50%"><label class="wpm-form-label" for="icon_name">
											Select Template:
										 <span style='color: red; font-weight: 100; font-size: 11px; display: block'>If you change template, you will lose current template default CSS.</span> 
									</label></td>
									<td>
										 <select name="new_style_name" class="wpm-form-input">
												<?php
												 for($i = 1; $i <= 37; $i++){
													 $num = $i < 10 ? 0: '';
													 $selected = "template-{$num}{$i}" == $template ? ' selected' : '';
													 echo "<option value='template-{$num}{$i}' {$selected}>Template {$num}{$i}</option>";	
												 }
												?>
										 </select>
									</td>
							 </tr>
						</table>

				 </div>
				 <div class="wpm-6310-modal-form-footer">
						<button type="button" name="close" class="wpm-btn-danger wpm-pull-right">Close</button>
						<input type="submit" name="change_template_update" class="wpm-btn-primary wpm-pull-right wpm-margin-right-10" value="Update" />
				 </div>
			</form>
			<br class="wpm-6310-clear" />
	 </div>
</div>
<script>
	 jQuery(document).ready(function() {
			jQuery("body").on("click", "#wpm_items_per_row", function() {
				 jQuery("#wpm-6310-modal-add").fadeIn(500);
				 jQuery("body").css({
						"overflow": "hidden"
				 });
				 return false;
			});

			jQuery("body").on("click", ".wpm-6310-close, .wpm-btn-danger", function() {
				 jQuery("#wpm-6310-modal-add, #wpm-6310-modal-edit").fadeOut(500);
				 jQuery("body").css({
						"overflow": "initial"
				 });
			});
			jQuery(window).click(function(event) {
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

	 });
</script>
<?php
}

function wpm_6310_color_picker_script()
{
?>
   <script>
      jQuery(document).ready(function() {
         jQuery('.wpm_6310_color_picker').each(function() {
            jQuery(this).minicolors({
               control: jQuery(this).attr('data-control') || 'hue',
               defaultValue: jQuery(this).attr('data-defaultValue') || '',
               format: jQuery(this).attr('data-format') || 'hex',
               keywords: jQuery(this).attr('data-keywords') || '',
               inline: jQuery(this).attr('data-inline') === 'true',
               letterCase: jQuery(this).attr('data-letterCase') || 'lowercase',
               opacity: jQuery(this).attr('data-opacity'),
               position: jQuery(this).attr('data-position') || 'bottom left',
               swatches: jQuery(this).attr('data-swatches') ? jQuery(this).attr('data-swatches').split('|') : [],
               change: function(value, opacity) {
                  if (!value)
                     return;
                  if (opacity)
                     value += ', ' + opacity;
                  if (typeof console === 'object') {
                  }
               },
               theme: 'bootstrap'
            });
         });
      });
   </script>
<?php
}

function wpm_6310_font_picker_script()
{
?>
   <script>
      jQuery(document).ready(function() {
         jQuery('#wpm_jquery_heading_font, #wpm_jquery_designation_font, #wpm_jquery_heading_font_style1, #wpm_jquery_designation_font_style1, #wpm_jquery_heading_font_style, #wpm_jquery_designation_font_style, #wpm-front-end-load, #contact_font_family, #wpm_category_font_family, #description_font_family, #read_more_font_family, #wpm_jquery_vm_font, #wpm_modal_01_name_font_family, #wpm_modal_01_designation_font_family, #wpm_modal_01_description_font_family, #wpm_modal_01_contact_label_font_family, #wpm_modal_01_contact_content_font_family, #wpm_modal_02_name_font_family, #wpm_modal_02_designation_font_family, #wpm_modal_02_description_font_family, #wpm_modal_02_contact_label_font_family, #wpm_modal_02_contact_content_font_family, #wpm_modal_03_name_font_family, #wpm_modal_03_designation_font_family, #wpm_modal_03_description_font_family, #wpm_modal_03_contact_label_font_family, #wpm_modal_03_contact_content_font_family, #wpm_modal_04_name_font_family, #wpm_modal_04_designation_font_family, #wpm_modal_04_description_font_family, #wpm_modal_04_contact_label_font_family, #wpm_modal_04_contact_content_font_family, #wpm_modal_05_name_font_family, #wpm_modal_05_designation_font_family, #wpm_modal_05_description_font_family, #wpm_modal_05_contact_label_font_family, #wpm_modal_05_contact_content_font_family, #wpm_modal_06_name_font_family, #wpm_modal_06_designation_font_family, #wpm_modal_06_description_font_family, #wpm_modal_06_contact_label_font_family, #wpm_modal_06_contact_content_font_family, #skills_font_family').fontselect();
      });
   </script>
<?php
}

function wpm_6310_modal_settings_for_member_description($loading, $wpm_6310_plugin_url, $allSlider)
{  
   global $wpdb;

   //Loading
   $loading = wpm_6310_get_option('wpm_6310_loading_icon');
   if(!$loading){
      $loading = wpm_6310_plugin_dir_url . 'assets/images/loading.gif';
   }

   $loading_width = wpm_6310_get_option( 'wpm_6310_loading_image_width') > 0 ? wpm_6310_get_option( 'wpm_6310_loading_image_width') : 100;
   $loading_height = wpm_6310_get_option( 'wpm_6310_loading_image_height') > 0 ? wpm_6310_get_option( 'wpm_6310_loading_image_height') : 100;

   $wpm_6310_arrow_activation = wpm_6310_get_option('wpm_6310_arrow_activation');
   if($wpm_6310_arrow_activation == 1) {
      echo "<style>.wpm_6310_modal_template_before, .wpm_6310_modal_template_after{display: none !important}</style>";
   }

   //Previous
   $prev = wpm_6310_get_option('wpm_6310_prev_icon');
   if(!$prev){
      $prev = wpm_6310_plugin_dir_url . 'assets/images/prev.png';
   }

   //Next
   $next = wpm_6310_get_option('wpm_6310_next_icon');
   if(!$next){
      $next = wpm_6310_plugin_dir_url . 'assets/images/next.png';
   }
?>
   <div class="wpm_6310_loading">
      <img src="<?php echo $loading; ?>" />
   </div>
   <div id="mywpm_6310_modal" class="wpm_6310_modal">
      <?php 
          include $wpm_6310_plugin_url . 'settings/helper/modal-templates.php';
      ?>
      <br class="wpm-6310-clear" />
   </div>
   <script>
      jQuery(document).ready(function(e) {
         jQuery("body").on("click", "a.open_in_new_tab_class", function(event) {
            event.preventDefault();
            if (jQuery(this).closest('.wpm_6310_modal').length == 0) {
               if (jQuery(this).attr("target") == "_blank") {
                  window.open(jQuery(this).attr("href"), '_blank').focus();
               } else if (jQuery(this).attr("wpm-6310-tooltip") == "yes") {
                  let totalWidth = parseInt(jQuery(this).closest('ul').width()) + 20;
                  let pos = parseInt(jQuery(this).position().left);
                  if (jQuery(this).attr("wpm-6310-tooltip-relative") == "20") {
                     jQuery('head').append(`<style>
                              .wpm-6310-tooltip:after{ display: none !important; }
                              </style>`);
                  }
                  else if (jQuery(this).attr("wpm-6310-tooltip-relative") == "19") {
                     jQuery('head').append(`<style>
                              .wpm-6310-tooltip:after{ right: 34px !important; bottom: 0 !important; }
                              .wpm-6310-tooltip:hover:after { padding: 5px 10px !important; }
                              </style>`);
                  }
                  else if (jQuery(this).attr("wpm-6310-tooltip-relative") == "21") {
                     if (pos - 90 < 0) {
                        jQuery('head').append('<style>.wpm-6310-tooltip:after{left: -' + pos +
                           'px !important; right: initial !important;}</style>');
                     } else if (totalWidth > 180 && pos + 110 < totalWidth) {
                        jQuery('head').append('<style>.wpm-6310-tooltip:after{left: -' + (pos - 30) +
                           'px !important; right: initial !important;}</style>');
                     } else {
                        jQuery('head').append('<style>.wpm-6310-tooltip:after{right: -' + (totalWidth - (pos + 40)) +
                           'px !important; left: initial !important;}</style>');
                     }
                  } else {
                     if (pos - 90 < 0) {
                     jQuery('head').append('<style>.wpm-6310-tooltip:after{left: ' + 0 +
                        'px !important; right: initial !important;}</style>');
                     } else if (totalWidth > 180 && pos + 90 < totalWidth) {
                        jQuery('head').append('<style>.wpm-6310-tooltip:after{left: ' + (pos - 90) +
                           'px !important; right: initial !important;}</style>');
                     } else {
                        jQuery('head').append('<style>.wpm-6310-tooltip:after{left: initial !important; right: ' + 0 +
                           'px !important;}</style>');
                     }
                  }
               } else {
                  window.open(jQuery(this).attr("href"), '_parent').focus();
               }
            }
            return false;
         });

         jQuery("body").on("mouseenter", 'a.open_in_new_tab_class', function(event) {
            var attr = jQuery(this).attr('data-social-modal');
            if (typeof attr !== typeof undefined && attr !== false) {
               jQuery('head').append('<style>.wpm-6310-tooltip:after{left: initial !important; right: initial !important;}</style>');
            }
            else {
               if (jQuery(this).attr("wpm-6310-tooltip") == "yes") {
                  let totalWidth = parseInt(jQuery(this).closest('ul').width()) + 20;
                  let pos = parseInt(jQuery(this).position().left);
                  if (jQuery(this).attr("wpm-6310-tooltip-relative") == "20") {
                     jQuery('head').append(`<style>
                                 .wpm-6310-tooltip:after{ display: none !important; }
                              </style>`);
                  }
                  else if (jQuery(this).attr("wpm-6310-tooltip-relative") == "19") {
                     jQuery('head').append(`<style>
                              .wpm-6310-tooltip:after{ right: 34px !important; bottom: 0 !important; }
                              .wpm-6310-tooltip:hover:after { padding: 5px 10px !important; }
                              </style>`);
                  }
                  else if (jQuery(this).attr("wpm-6310-tooltip-relative") == "21") {
                     if (pos - 90 < 0) {
                        jQuery('head').append('<style>.wpm-6310-tooltip:after{left: -' + pos +
                           'px !important; right: initial !important;}</style>');
                     } else if (totalWidth > 180 && pos + 110 < totalWidth) {
                        jQuery('head').append('<style>.wpm-6310-tooltip:after{left: -' + (pos - 30) +
                           'px !important; right: initial !important;}</style>');
                     } else {
                        jQuery('head').append('<style>.wpm-6310-tooltip:after{right: -' + (totalWidth - (pos + 60)) +
                           'px !important; left: initial !important;}</style>');
                     }
                  } else {
                     if (pos - 90 < 0) {
                     jQuery('head').append('<style>.wpm-6310-tooltip:after{left: ' + 0 +
                        'px !important; right: initial !important;}</style>');
                     } else if (totalWidth > 180 && pos + 90 < totalWidth) {
                        jQuery('head').append('<style>.wpm-6310-tooltip:after{left: ' + (pos - 90) +
                           'px !important; right: initial !important;}</style>');
                     } else {
                        jQuery('head').append('<style>.wpm-6310-tooltip:after{left: initial !important; right: ' + 5 +
                           'px !important;}</style>');
                     }
                  }
               }
            } 
         });

         jQuery("body").on("click", ".wpm-6310-custom-field-mail-link-class", function (event) {
            var customField = jQuery(this).attr("wpm-data-custom-field");
            if(customField != undefined){
               window.open(customField, '_blank').focus();
               event.preventDefault();
               return false;
            }
         });

         let modalId = '';
         jQuery("body").on("click", ".wpm_6310_team_member_info", function() {
            modalId = parseInt(jQuery(this).attr("team-id"));
            var linkId = parseInt(jQuery(this).attr("link-id"));

            if (linkId > 0) {
               if (jQuery(this).attr("target") == "1") {
                  window.open(jQuery(this).attr("link-url"), '_blank').focus();
               } else {
                  window.open(jQuery(this).attr("link-url"), '_parent').focus();
               }
            } else if (modalId > 0) {
               jQuery(".wpm_6310_loading").show();
               jQuery("body").css({
                  "overflow": "hidden"
               });
               var datas = {
                  'action': 'wpm_6310_team_member_info',
                  'ids': modalId,
                  'styleId': jQuery('.wpm_6310_tabs_panel_preview').attr('data-main-template-id'),
                  'clicked': '',
                  'progress_bar_animation': jQuery('#progress_bar_animation').val(),
                  'progress_bar_border_radius': jQuery('#progress_bar_border_radius').val()
               };

               wpm_6310_load_modal(datas);
            }
         });

         jQuery("body").on("click", ".wpm_6310_modal_template_before", function() {
            var datas = {
               'action': 'wpm_6310_team_member_info',
               'ids': jQuery('.wpm_6310_modal').attr('wpm-6310-member-id'),
               'styleId': jQuery('.wpm_6310_tabs_panel_preview').attr('data-main-template-id'),
               'clicked': 'prev',
               'progress_bar_animation': jQuery('#progress_bar_animation').val(),
               'progress_bar_border_radius': jQuery('#progress_bar_border_radius').val()
            };
            jQuery(".wpm_6310_loading").show();
            jQuery('.wpm_6310_modal').hide();
            wpm_6310_load_modal(datas);
         });

         jQuery("body").on("click", ".wpm_6310_modal_template_after", function() {
            var datas = {
               'action': 'wpm_6310_team_member_info',
               'ids': jQuery('.wpm_6310_modal').attr('wpm-6310-member-id'),
               'styleId': jQuery('.wpm_6310_tabs_panel_preview').attr('data-main-template-id'),
               'clicked': 'next',
               'progress_bar_animation': jQuery('#progress_bar_animation').val(),
               'progress_bar_border_radius': jQuery('#progress_bar_border_radius').val()
            };
            jQuery(".wpm_6310_loading").show();
            jQuery('.wpm_6310_modal').hide();
            wpm_6310_load_modal(datas);
         });

         jQuery("body").on("click", ".wpm-6310-icon-close", function() {
            jQuery("#mywpm_6310_modal").fadeOut(500);
            jQuery("body").css({
               "overflow": "initial"
            });
         });

         jQuery(window).click(function(event) {
            if (event.target == document.getElementById('mywpm_6310_modal')) {
               jQuery("#mywpm_6310_modal").fadeOut(500);
               jQuery("body").css({
                  "overflow": "initial"
               });
            }
         });
      });

      function wpm_6310_load_modal(datas){
         jQuery.getJSON(ajaxurl, datas, function(data) {
            jQuery(".wpm_6310_loading").hide();
            jQuery(".wpm_6310_modal-content").css({
               "-webkit-animation-name": "wpm-animate" + data['styledata']['effect'],
               "animation-name": "wpm-animate" + data['styledata']['effect']
            });
            jQuery("#mywpm_6310_modal").show();
            jQuery('.wpm_6310_modal').attr('wpm-6310-member-id', data['styledata']['id']);
            var mIds = Number(jQuery(".wpm_6310_tabs_panel_preview").attr("data-modal-template"));
            if (mIds == 1) {
               jQuery(".wpm_6310_modal_template_1 .wpm_6310_modal_img").attr("src", data['styledata']['image'] ? data['styledata']['image'] : data['styledata']['hover_image']);
               jQuery(".wpm_6310_modal_template_1 .wpm_6310_modal_img").attr("data-6310-hover-image", data['styledata']['hover_image'] ? data['styledata']['hover_image'] : data['styledata']['image']);
               jQuery(".wpm_6310_modal_template_1 .wpm_6310_modal_designation").text(data['styledata']['designation']);
               jQuery(".wpm_6310_modal_template_1 .wpm_6310_modal_name").text(data['styledata']['name']);
               jQuery(".wpm_6310_modal_template_1 .wpm_6310_modal_contact").html("");
               jQuery(".wpm_6310_modal_template_1 .wpm_6310_modal_contact").append(data['contact']);
               jQuery(".wpm_6310_modal_template_1 .wpm_6310_modal_social").html("");
               jQuery(".wpm_6310_modal_template_1 .wpm_6310_modal_social").append(data['link']);
               jQuery(".wpm_6310_modal_template_1 .wpm_6310_member_skills_wrapper").html("");
               jQuery(".wpm_6310_modal_template_1 .wpm_6310_member_skills_wrapper").append(data['skills']);

               jQuery(".wpm_6310_modal_template_1 .wpm_6310_modal_details").html(data['styledata']['profile_details'].replace(/\n/g, "<br>"));
            }
            else if (mIds == 2) {
               jQuery(".wpm_6310_modal_template_2 .wpm_6310_modal_img").attr("src", data['styledata']['image'] ? data['styledata']['image'] : data['styledata']['hover_image']);
               jQuery(".wpm_6310_modal_template_2 .wpm_6310_modal_img").attr("data-6310-hover-image", data['styledata']['hover_image'] ? data['styledata']['hover_image'] : data['styledata']['image']);
               jQuery(".wpm_6310_modal_template_2 .wpm_6310_modal_name").text(data['styledata']['name']);
               jQuery(".wpm_6310_modal_template_2 .wpm_6310_modal_designation").text(data['styledata']['designation']);
               jQuery(".wpm_6310_modal_template_2 .wpm_6310_modal_social").html("");
               jQuery(".wpm_6310_modal_template_2 .wpm_6310_modal_social").append(data['link']);
               jQuery(".wpm_6310_modal_template_2 .wpm_6310_modal_details").html(data['styledata']['profile_details'].replace(/\n/g, "<br>"));
               jQuery(".wpm_6310_modal_template_2 .wpm_6310_modal_contact").html("");
               jQuery(".wpm_6310_modal_template_2 .wpm_6310_modal_contact").append(data['contact']);
               jQuery(".wpm_6310_modal_template_2 .wpm_6310_member_skills_wrapper").html("");
               jQuery(".wpm_6310_modal_template_2 .wpm_6310_member_skills_wrapper").append(data['skills']);
            }
            else if (mIds == 3) {
               jQuery(".wpm_6310_modal_template_3 .wpm_6310_modal_img").attr("src", data['styledata']['image'] ? data['styledata']['image'] : data['styledata']['hover_image']);
               jQuery(".wpm_6310_modal_template_3 .wpm_6310_modal_img").attr("data-6310-hover-image", data['styledata']['hover_image'] ? data['styledata']['hover_image'] : data['styledata']['image']);
               jQuery(".wpm_6310_modal_template_3 .wpm_6310_modal_name").text(data['styledata']['name']);
               jQuery(".wpm_6310_modal_template_3 .wpm_6310_modal_designation").text(data['styledata']['designation']);
               jQuery(".wpm_6310_modal_template_3 .wpm_6310_modal_social").html("");
               jQuery(".wpm_6310_modal_template_3 .wpm_6310_modal_social").append(data['link']);
               jQuery(".wpm_6310_modal_template_3 .wpm_6310_modal_details").html(data['styledata']['profile_details'].replace(/\n/g, "<br>"));
               jQuery(".wpm_6310_modal_template_3 .wpm_6310_modal_contact").html("");
               jQuery(".wpm_6310_modal_template_3 .wpm_6310_modal_contact").append(data['contact']);
               jQuery(".wpm_6310_modal_template_3 .wpm_6310_member_skills_wrapper").html("");
               jQuery(".wpm_6310_modal_template_3 .wpm_6310_member_skills_wrapper").append(data['skills']);
            }
            else if (mIds == 4) {
               jQuery(".wpm_6310_modal_template_4 .wpm_6310_modal_img").attr("src", data['styledata']['image'] ? data['styledata']['image'] : data['styledata']['hover_image']);
               jQuery(".wpm_6310_modal_template_4 .wpm_6310_modal_img").attr("data-6310-hover-image", data['styledata']['hover_image'] ? data['styledata']['hover_image'] : data['styledata']['image']);
               jQuery(".wpm_6310_modal_template_4 .wpm_6310_modal_name").text(data['styledata']['name']);
               jQuery(".wpm_6310_modal_template_4 .wpm_6310_modal_designation").text(data['styledata']['designation']);
               jQuery(".wpm_6310_modal_template_4 .wpm_6310_member_skills_wrapper").html("");
               jQuery(".wpm_6310_modal_template_4 .wpm_6310_member_skills_wrapper").append(data['skills']);
               jQuery(".wpm_6310_modal_template_4 .wpm_6310_modal_contact").html("");
               jQuery(".wpm_6310_modal_template_4 .wpm_6310_modal_contact").append(data['contact']);
               jQuery(".wpm_6310_modal_template_4 .wpm_6310_modal_social").html("");
               jQuery(".wpm_6310_modal_template_4 .wpm_6310_modal_social").append(data['link']);
               jQuery(".wpm_6310_modal_template_4 .wpm_6310_modal_details").html(data['styledata']['profile_details'].replace(/\n/g, "<br>"));
            }
            else if (mIds == 5) {
               jQuery(".wpm_6310_modal_template_5 .wpm_6310_modal_img").attr("src", data['styledata']['image'] ? data['styledata']['image'] : data['styledata']['hover_image']);
               jQuery(".wpm_6310_modal_template_5 .wpm_6310_modal_img").attr("data-6310-hover-image", data['styledata']['hover_image'] ? data['styledata']['hover_image'] : data['styledata']['image']);
               jQuery(".wpm_6310_modal_template_5 .wpm_6310_modal_name").text(data['styledata']['name']);
               jQuery(".wpm_6310_modal_template_5 .wpm_6310_modal_designation").text(data['styledata']['designation']);
               jQuery(".wpm_6310_modal_template_5 .wpm_6310_modal_social").html("");
               jQuery(".wpm_6310_modal_template_5 .wpm_6310_modal_social").append(data['link']);
               jQuery(".wpm_6310_modal_template_5 .wpm_6310_modal_details").html(data['styledata']['profile_details'].replace(/\n/g, "<br>"));
               jQuery(".wpm_6310_modal_template_5 .wpm_6310_member_skills_wrapper").html("");
               jQuery(".wpm_6310_modal_template_5 .wpm_6310_member_skills_wrapper").append(data['skills']);
               jQuery(".wpm_6310_modal_template_5 .wpm_6310_modal_contact").html("");
               jQuery(".wpm_6310_modal_template_5 .wpm_6310_modal_contact").append(data['contact']);
            }
            else if (mIds == 6) {
               jQuery(".wpm_6310_modal_template_6 .wpm_6310_modal_img").attr("src", data['styledata']['image'] ? data['styledata']['image'] : data['styledata']['hover_image']);
               jQuery(".wpm_6310_modal_template_6 .wpm_6310_modal_img").attr("data-6310-hover-image", data['styledata']['hover_image'] ? data['styledata']['hover_image'] : data['styledata']['image']);
               jQuery(".wpm_6310_modal_template_6 .wpm_6310_modal_name").text(data['styledata']['name']);
               jQuery(".wpm_6310_modal_template_6 .wpm_6310_modal_designation").text(data['styledata']['designation']);
               jQuery(".wpm_6310_modal_template_6 .wpm_6310_modal_details").html(data['styledata']['profile_details'].replace(/\n/g, "<br>"));
               jQuery(".wpm_6310_modal_template_6 .wpm_6310_modal_social").html("");
               jQuery(".wpm_6310_modal_template_6 .wpm_6310_modal_social").append(data['link']);
               jQuery(".wpm_6310_modal_template_6 .wpm_6310_member_skills_wrapper").html("");
               jQuery(".wpm_6310_modal_template_6 .wpm_6310_member_skills_wrapper").append(data['skills']);
               jQuery(".wpm_6310_modal_template_6 .wpm_6310_modal_contact").html("");
               jQuery(".wpm_6310_modal_template_6 .wpm_6310_modal_contact").append(data['contact']);
            }
            jQuery('.wpm_6310_modal').show();
         });
      }
   </script>

   <style type="text/css">
      .wpm_6310_modal,
      .wpm_6310_loading {
         display: none;
         /* Hidden by default */
         position: fixed;
         /* Stay in place */
         z-index: 9999;
         /* Sit on top */
         padding-top: 50px;
         /* Location of the box */
         left: 0;
         top: 0;
         width: 100%;
         /* Full width */
         height: 100%;
         /* Full height */
         overflow: auto;
         /* Enable scroll if needed */
         background-color: rgba(0, 0, 0, 0.8);
         /* Black w/ opacity */
         font-family: sans-serif;
      }

      /* wpm_6310_modal Content */
      .wpm_6310_modal-content {
         position: relative;
         background-color: transparent;
         margin: auto;
         padding: 0 0 50px;
         width: 75%;
         border-radius: 5px;
         -webkit-animation-duration: 0.4s;
         animation-duration: 0.4s;
         margin-bottom: 50px;
      }

      /* Add Animation */
      @-webkit-keyframes wpm-animatetop {
         from {
            top: -300px;
            opacity: 0
         }

         to {
            top: 0;
            opacity: 1
         }
      }

      @keyframes wpm-animatetop {
         from {
            top: -300px;
            opacity: 0
         }

         to {
            top: 0;
            opacity: 1
         }
      }

      @keyframes wpm-animatebottom {
         from {
            bottom: -300px;
            opacity: 0
         }

         to {
            bottom: 0;
            opacity: 1
         }
      }

      @-webkit-keyframes wpm-animatebottom {
         from {
            bottom: -300px;
            opacity: 0
         }

         to {
            bottom: 0;
            opacity: 1
         }
      }

      @keyframes wpm-animateleft {
         from {
            left: -300px;
            opacity: 0
         }

         to {
            left: 0;
            opacity: 1
         }
      }

      @-webkit-keyframes wpm-animateleft {
         from {
            left: -300px;
            opacity: 0
         }

         to {
            left: 0;
            opacity: 1
         }
      }

      @keyframes wpm-animateright {
         from {
            right: -300px;
            opacity: 0
         }

         to {
            right: 0;
            opacity: 1
         }
      }

      @-webkit-keyframes wpm-animateright {
         from {
            right: -300px;
            opacity: 0
         }

         to {
            right: 0;
            opacity: 1
         }
      }

      /* The Close Button */
      .wpm-6310-icon-close {
         color: #000;
         float: right;
         font-size: 28px;
         font-weight: bold;
         line-height: 28px;
         padding: 0;
         margin: 0;
         position: absolute;
         right: 20px;
         top: 15px;
      }

      .wpm-6310-icon-close:hover,
      .wpm-6310-icon-close:focus {
         color: #878787;
         text-decoration: none;
         cursor: pointer;
      }

      .wpm_6310_modal_body_picture {
         float: left;
         width: 300px;
         padding-right: 30px;
      }

      .wpm_6310_modal_body_content {
         width: calc(100% - 330px);
         float: left;
      }

      .wpm_6310_modal_body_picture img {
         float: left;
         width: calc(100% - 10px);
         height: auto;
         padding: 5px;
      }

      #wpm_6310_modal_designation {
         font-size: 14px;
         text-transform: uppercase;
         font-weight: 300;
      }

      #wpm_6310_modal_name {
         text-transform: capitalize;
         font-size: 22px;
         line-height: 30px;
         margin: 0 0 25px;
         font-weight: 600;
         color: #111;
      }

      #wpm_6310_modal_details {
         font-size: 14px;
         line-height: 20px;
      }


      .wpm-popup-link {
         width: 35px;
         height: 35px;
         line-height: 35px;
         float: left;
         margin: 15px 10px 0 0;
         font-size: 18px;
         border-radius: 3px;
         text-align: center;
         cursor: pointer;
         -webkit-transition: all 0.3s ease 0s;
         -moz-transition: all 0.3s ease 0s;
         -ms-transition: all 0.3s ease 0s;
         -o-transition: all 0.3s ease 0s;
         transition: all 0.3s ease 0s;
      }

      .wpm_6310_modal-footer {
         padding: 10px 15px;
         color: white;
      }

      br.wpm_6310_clear {
         clear: both;
      }

      .wpm_6310_loading {
         padding-top: 170px;
         /* Location of the box */
         text-align: center;
         background-color: rgba(0, 0, 0, 0.7);
         /* Black w/ opacity */
      }

      .wpm_6310_loading img {
         border-radius: 50%;
         width: <?php echo $loading_width ?>px;
         height: <?php echo $loading_height ?>px;
      }
   </style>
<?php
}

function wpm_items_per_row($id, $rows = NULL, $templateName = '')
{
   $rows = explode("@@##@@", $rows);
?>
   <tr>
      <td>
         <b>Template Name:</b>
      </td>
      <td>
         <input type="text" name="template_name" class="wpm-form-input" value="<?php echo $templateName; ?>" />
      </td>
   </tr>
   <tr>
      <td>
         <b>Item Per Row in Desktop:</b>
         <div class="wpm-6310-pro">*Preview-on-change  not available</div>
      </td>
      <td>
         <select name="item_per_row_data_desktop" class="wpm-form-input">
            <option value="1" <?php if ($rows[0] == 1) echo " selected" ?>>1 Item per Row</option>
            <option value="2" <?php if ($rows[0] == 2) echo " selected" ?>>2 Items per Row</option>
            <option value="3" <?php if ($rows[0] == 3) echo " selected" ?>>3 Items per Row</option>
            <option value="4" <?php if ($rows[0] == 4) echo " selected" ?>>4 Items per Row</option>
            <option value="5" <?php if ($rows[0] == 5) echo " selected" ?>>5 Items per Row</option>
            <option value="6" <?php if ($rows[0] == 6) echo " selected" ?>>6 Items per Row</option>
         </select>
      </td>
   </tr>
   <tr>
      <td>
         <b>
            Item Per Row in Tablet <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
         </b>
         <div class="wpm-6310-pro">*Preview-on-change  not available</div>
      </td>
      <td>
         <select name="item_per_row_data_tablet" class="wpm-form-input">
            <option value="1" <?php if ((isset($rows[1]) && $rows[1] == 1) || !isset($rows[2])) echo " selected" ?>>1 Item per Row</option>
            <option value="2" <?php if (isset($rows[1]) && $rows[1] == 2) echo " selected" ?>>2 Items per Row</option>
            <option value="3" <?php if (isset($rows[1]) && $rows[1] == 3) echo " selected" ?>>3 Items per Row</option>
            <option value="4" <?php if (isset($rows[1]) && $rows[1] == 4) echo " selected" ?>>4 Items per Row</option>
         </select>
      </td>
   </tr>
   <tr>
      <td>
         <b>
            Item Per Row in Mobile
            <span class="wpm-6310-pro">(Pro) <div class="wpm-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
         </b>
         <div class="wpm-6310-pro">*Preview-on-change  not available</div>
      </td>
      <td>
         <select name="item_per_row_data_mobile" class="wpm-form-input">
            <option value="1" <?php if ((isset($rows[2]) && $rows[2] == 1) || !isset($rows[2])) echo " selected" ?>>1 Item per Row</option>
            <option value="2" <?php if (isset($rows[2]) && $rows[2] == 2) echo " selected" ?>>2 Items per Row</option>
            <option value="3" <?php if (isset($rows[2]) && $rows[2] == 3) echo " selected" ?>>3 Items per Row</option>
            <option value="4" <?php if (isset($rows[2]) && $rows[2] == 4) echo " selected" ?>>4 Items per Row</option>
         </select>
      </td>
   </tr>
<?php
}

$template_id = isset($template_id) ? $template_id : 1;
?>
<script>
   jQuery(document).ready(function(){
      jQuery("body").on("mouseenter mouseleave", ".wpm_6310_team_style_<?php echo $template_id ?>", function(e) {
         e.preventDefault();
         var orgImage = jQuery(this).find('img').attr('src');
         var hoverImage = jQuery(this).find('img').attr('data-6310-hover-image');
         if (hoverImage && hoverImage.length > 5) {
            jQuery(this).find('img').attr("src", hoverImage);
            jQuery(this).find('img').attr("data-6310-hover-image", orgImage);
         }
      });

      jQuery('body').on("mouseenter mouseleave", '.wpm_6310_modal .wpm_6310_modal_img', function(e) {
         e.preventDefault();
         var orgImage = jQuery(this).attr('src');
         var hoverImage = jQuery(this).attr('data-6310-hover-image');
         if (hoverImage && hoverImage.length > 5) {
            jQuery(this).attr("src", hoverImage);
            jQuery(this).attr("data-6310-hover-image", orgImage);
         }
      });
   });
</script>
