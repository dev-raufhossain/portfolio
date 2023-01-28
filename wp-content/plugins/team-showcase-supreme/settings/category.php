<?php
if (!defined('ABSPATH'))
   exit;

if (!current_user_can('edit_others_pages')) {
   wp_die(__('You do not have sufficient permissions to access this page.'));
}
?>
<div class="wpm-6310">
   <h1>Category <button class="wpm-btn-success" id="add-category_item">Add New</button></h1>
   <?php
   if (!defined('ABSPATH'))
      exit;
   if (!current_user_can('manage_options')) {
      wp_die(__('You do not have sufficient permissions to access this page.'));
   }
   
   $style_table = $wpdb->prefix . 'wpm_6310_style';
   $category_table = $wpdb->prefix . 'wpm_6310_category';
   wpm_6310_color_picker_script();

   if (!empty($_POST['delete']) && isset($_POST['id']) && is_numeric($_POST['id'])) {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'wpm-nonce-field-delete')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         $id = (int) $_POST['id'];
         $style_table = $wpdb->prefix . 'wpm_6310_style';
         $data = $wpdb->get_results('SELECT * FROM ' . $style_table . ' ORDER BY id DESC', ARRAY_A);
         if($data) {
            foreach ($data as $value) {
               $categoryIds = $value['categoryids'];
               if($categoryIds) {
                  $categoryIds = explode(',', $categoryIds);
                  if(count($categoryIds) > 1) {
                     if (($key = array_search($id, $categoryIds)) !== false) {
                        unset($categoryIds[$key]);
                     }
                     $categoryIds = implode(',', $categoryIds);
                  } else {
                     $categoryIds = '';
                  }
                  $wpdb->query($wpdb->prepare("update $style_table SET categoryids=%s where id=%d", $categoryIds, $value['id']));
               }
            }
         }
         $wpdb->query($wpdb->prepare("DELETE FROM {$category_table} WHERE id = %d", $id));
      }
   } else if (!empty($_POST['save']) && $_POST['save'] == 'Save') {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'wpm-6310-nonce-add')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         $myData[0] = sanitize_text_field($_POST['name']);
         $myData[1] = "c-" . time();
         $myData[2] = sanitize_text_field($_POST['serial']);

         foreach($myData as $key=>$value){ 
            $value = wpm_6310_replace($value);        
            while($value != $myData[$key]){
               $myData[$key] = $value;
               $value = wpm_6310_replace($value);
            }
            $myData[$key] = $value;
          }

         $wpdb->query($wpdb->prepare("insert into $category_table SET name = %s, c_name = %s, serial = %s", $myData));
      }
   } else if (!empty($_POST['update']) && $_POST['update'] == 'Update') {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'wpm-6310-nonce-update')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         $id = (int) sanitize_text_field($_POST['id']);
         $myData[0] = sanitize_text_field($_POST['name']);
         $myData[1] = sanitize_text_field($_POST['serial']);
         $myData[2] = $id;

         foreach($myData as $key=>$value){ 
            $value = wpm_6310_replace($value);        
            while($value != $myData[$key]){
               $myData[$key] = $value;
               $value = wpm_6310_replace($value);
            }
            $myData[$key] = $value;
          }

         $wpdb->query($wpdb->prepare("update $category_table SET name = %s, serial = %s where id=%d", $myData));
      }
   } else if (!empty($_POST['edit']) && $_POST['edit'] == 'Edit') {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'wpm-nonce-field-edit')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         $id = (int) $_POST['id'];
         $selCategory = $wpdb->get_row($wpdb->prepare("SELECT * FROM $category_table WHERE id = %d ", $id), ARRAY_A);
   ?>
         <div id="wpm-6310-modal-edit" class="wpm-6310-modal">
            <div class="wpm-6310-modal-content wpm-6310-modal-sm">
               <form action="" method="post">
                  <input type="hidden" name="id" value="<?php echo $selCategory['id'] ?>" />
                  <div class="wpm-6310-modal-header">
                     Category Settings
                     <span class="wpm-6310-close">&times;</span>
                  </div>
                  <div class="wpm-6310-modal-body-form">
                     <?php wp_nonce_field("wpm-6310-nonce-update") ?>
                     <table border="0" width="100%" cellpadding="10" cellspacing="0">
                        <tr>
                           <td width="50%"><label class="wpm-form-label" for="icon_name">Category Name:</label></td>
                           <td><input type="text" required="" name="name" id="icon_name" value="<?php echo wpm_6310_replace($selCategory['name']) ?>" class="wpm-form-input" /></td>
                        </tr>                        
                        <tr>
                           <td><label class="wpm-form-label" for="bgcolor">Category Serial:</label></td>
                           <td><input type="number"required="" name="serial" value="<?php echo $selCategory['serial'] ?>" class="wpm-form-input" /></td>
                        </tr>
                     </table>

                  </div>
                  <div class="wpm-6310-modal-form-footer">
                     <button type="button" name="close" class="wpm-btn-danger wpm-pull-right">Close</button>
                     <input type="submit" name="update" class="wpm-btn-primary wpm-pull-right wpm-margin-right-10" value="Update" />
                  </div>
               </form>
               <br class="wpm-6310-clear" />
            </div>
         </div>
         <script>
            var $ = jQuery;
            jQuery(document).ready(function() {
               jQuery('#wpm-6310-modal-edit').fadeIn(500);
               jQuery("body").css({
                  "overflow": "hidden"
               });
            });
         </script>
   <?php
      }
   }
   ?>

   <table class="wpm-table">
      <tr>
         <td>Category Name</td>
         <td style="width: 100px">Category Serial</td>
         <td style="width: 100px">Edit Delete</td>
      </tr>

      <?php
      $data = $wpdb->get_results('SELECT * FROM ' . $category_table . ' ORDER BY serial ASC', ARRAY_A);
      foreach ($data as $value) {
         echo '<tr>';
         echo '<td>' . wpm_6310_replace($value['name']) . '</td>';
         echo '<td>' . $value['serial'] . '</td>';         
         echo '<td>
                 <form method="post">
                   ' . wp_nonce_field("wpm-nonce-field-edit") . '
                          <input type="hidden" name="id" value="' . $value['id'] . '">
                          <button class="wpm-btn-success wpm-margin-right-10" style="float:left"  title="Edit"  type="submit" value="Edit" name="edit"><i class="fas fa-edit" aria-hidden="true"></i></button>  
                  </form>';
         echo     '<form method="post">
                   ' . wp_nonce_field("wpm-nonce-field-delete") . '
                          <input type="hidden" name="id" value="' . $value['id'] . '">
                          <button class="wpm-btn-danger" style="float:left"  title="Delete"  type="submit" value="delete" name="delete" onclick="return confirm(\'Do you want to delete?\');"><i class="far fa-times-circle" aria-hidden="true"></i></button>  
                  </form>';
         echo '</td>';
      }
      ?>


   </table>
   <div id="wpm-6310-modal-add" class="wpm-6310-modal" style="display: none">
      <div class="wpm-6310-modal-content wpm-6310-modal-sm">
         <form action="" method="post">
            <div class="wpm-6310-modal-header">
               Category Settings
               <span class="wpm-6310-close">&times;</span>
            </div>
            <div class="wpm-6310-modal-body-form">
               <?php wp_nonce_field("wpm-6310-nonce-add") ?>
               <table border="0" width="100%" cellpadding="10" cellspacing="0">
                  <tr>
                     <td width="50%"><label class="wpm-form-label" for="icon_name">Category Name:</label></td>
                     <td><input type="text" required="" name="name" class="wpm-form-input" placeholder="HR, Manager" /></td>
                  </tr>
                  <tr>
                     <td><label class="wpm-form-label" for="bgcolor">Category Serial:</label></td>
                     <td><input type="number" required min="2" name="serial" class="wpm-form-input" placeholder="1, 2, 3"></td>
                  </tr>
               </table>

            </div>
            <div class="wpm-6310-modal-form-footer">
               <button type="button" name="close" class="wpm-btn-danger wpm-pull-right">Close</button>
               <input type="submit" name="save" class="wpm-btn-primary wpm-pull-right wpm-margin-right-10" value="Save" />
            </div>
         </form>
         <br class="wpm-6310-clear" />
      </div>
   </div>
</div>

<script>
   var $ = jQuery;
   jQuery(document).ready(function() {
      jQuery("body").on("click", "#add-category_item", function() {
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