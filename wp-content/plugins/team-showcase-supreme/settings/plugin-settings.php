<?php
if (!defined('ABSPATH'))
   exit;
?>
<div class="wpm-6310">
   <h1>Plugin Settings</h1>
   <?php

   wp_enqueue_media();
   wpm_6310_color_picker_script();

  $loading = wpm_6310_get_option('wpm_6310_loading_icon');
  $prev = wpm_6310_get_option( 'wpm_6310_prev_icon');
  $next = wpm_6310_get_option( 'wpm_6310_next_icon');
  $google_font = wpm_6310_get_option( 'wpm_6310_google_font_status');
  $wpm_6310_arrow_activation = wpm_6310_get_option( 'wpm_6310_arrow_activation');
  $wpm_6310_loading_image_width = wpm_6310_get_option( 'wpm_6310_loading_image_width') > 0 ? wpm_6310_get_option( 'wpm_6310_loading_image_width') : 100;
  $wpm_6310_loading_image_height = wpm_6310_get_option( 'wpm_6310_loading_image_height') > 0 ? wpm_6310_get_option( 'wpm_6310_loading_image_height') : 100;
  $wpm_6310_selected_server = wpm_6310_get_option('wpm_6310_selected_server');

   if (!empty($_POST['update']) && $_POST['update'] == 'Update') {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'wpm-6310-nonce-update')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         //Loading image start
         $wpm_6310_loading_icon = wpm_6310_get_option('wpm_6310_loading_icon');
         if(!$wpm_6310_loading_icon){
            $wpdb->query("DELETE FROM {$wpdb->prefix}options where option_name='wpm_6310_loading_icon'");
               $wpdb->query("INSERT INTO {$wpdb->prefix}options(option_name, option_value) VALUES ('wpm_6310_loading_icon', '". $_POST['loading_image'] ."')");
         }
         else{
            $wpdb->query("UPDATE {$wpdb->prefix}options set 
								option_value='". $_POST['loading_image'] ."' 
								where option_name = 'wpm_6310_loading_icon'");
         }
        $loading =  $_POST['loading_image'];

        //Loading image width start
        $wpm_6310_loading_image_width = wpm_6310_get_option('wpm_6310_loading_image_width');
        if(!$wpm_6310_loading_image_width){
         $wpdb->query("DELETE FROM {$wpdb->prefix}options where option_name='wpm_6310_loading_image_width'");
              $wpdb->query("INSERT INTO {$wpdb->prefix}options(option_name, option_value) VALUES ('wpm_6310_loading_image_width', '". $_POST['wpm_6310_loading_image_width'] ."')");
        }
        else{
           $wpdb->query("UPDATE {$wpdb->prefix}options set 
                       option_value='". $_POST['wpm_6310_loading_image_width'] ."' 
                       where option_name = 'wpm_6310_loading_image_width'");
        }
         $wpm_6310_loading_image_width =  $_POST['wpm_6310_loading_image_width'];

         //Loading image height start
         $wpm_6310_loading_image_height = wpm_6310_get_option('wpm_6310_loading_image_height');
         if(!$wpm_6310_loading_image_height){
            $wpdb->query("DELETE FROM {$wpdb->prefix}options where option_name='wpm_6310_loading_image_height'");
               $wpdb->query("INSERT INTO {$wpdb->prefix}options(option_name, option_value) VALUES ('wpm_6310_loading_image_height', '". $_POST['wpm_6310_loading_image_height'] ."')");
         }
         else{
            $wpdb->query("UPDATE {$wpdb->prefix}options set 
                        option_value='". $_POST['wpm_6310_loading_image_height'] ."' 
                        where option_name = 'wpm_6310_loading_image_height'");
         }
         $wpm_6310_loading_image_height =  $_POST['wpm_6310_loading_image_height'];

        //Previous image start
        $wpm_6310_prev_icon = wpm_6310_get_option( 'wpm_6310_prev_icon');
        if(!$wpm_6310_prev_icon){
         $wpdb->query("DELETE FROM {$wpdb->prefix}options where option_name='wpm_6310_prev_icon'");
              $wpdb->query("INSERT INTO {$wpdb->prefix}options(option_name, option_value) VALUES ('wpm_6310_prev_icon', '". $_POST['prev_image'] ."')");
        }
        else{
           $wpdb->query("UPDATE {$wpdb->prefix}options set 
                       option_value='". $_POST['prev_image'] ."' 
                       where option_name = 'wpm_6310_prev_icon'");
        }
       $prev =  $_POST['prev_image'];

       //Next image start
       $wpm_6310_next_icon = wpm_6310_get_option( 'wpm_6310_next_icon');
        if(!$wpm_6310_next_icon){
         $wpdb->query("DELETE FROM {$wpdb->prefix}options where option_name='wpm_6310_next_icon'");
              $wpdb->query("INSERT INTO {$wpdb->prefix}options(option_name, option_value) VALUES ('wpm_6310_next_icon', '". $_POST['next_image'] ."')");
        }
        else{
           $wpdb->query("UPDATE {$wpdb->prefix}options set 
                       option_value='". $_POST['next_image'] ."' 
                       where option_name = 'wpm_6310_next_icon'");
        }
       $next =  $_POST['next_image'];

       //Active / Inactive Arrow
       if($wpm_6310_arrow_activation != ''){
         $wpdb->query("UPDATE {$wpdb->prefix}options set 
         option_value='". $_POST['wpm_6310_arrow_activation'] ."' 
         where option_name = 'wpm_6310_arrow_activation'");
        }
        else{
         $wpdb->query("DELETE FROM {$wpdb->prefix}options where option_name='wpm_6310_arrow_activation'");
         $wpdb->query("INSERT INTO {$wpdb->prefix}options(option_name, option_value) VALUES ('wpm_6310_arrow_activation', '". $_POST['wpm_6310_arrow_activation'] ."')");
        }
        $wpm_6310_arrow_activation = $_POST['wpm_6310_arrow_activation'];

        //Google Font Start
        if($google_font != ''){
         $wpdb->query("UPDATE {$wpdb->prefix}options set 
         option_value='". $_POST['google_font'] ."' 
         where option_name = 'wpm_6310_google_font_status'");
        }
        else{
         $wpdb->query("INSERT INTO {$wpdb->prefix}options(option_name, option_value) VALUES ('wpm_6310_google_font_status', '". $_POST['google_font'] ."')");
        }

        $google_font = $_POST['google_font'];

        //server activation
        if(!$wpm_6310_selected_server){
            $wpdb->query("DELETE FROM {$wpdb->prefix}options where option_name='wpm_6310_selected_server'");
            $wpdb->query("INSERT INTO {$wpdb->prefix}options(option_name, option_value) VALUES ('wpm_6310_selected_server', '". $_POST['wpm_6310_selected_server'] ."')");
         }
         else{
            $wpdb->query("UPDATE {$wpdb->prefix}options set 
                        option_value='". $_POST['wpm_6310_selected_server'] ."' 
                        where option_name = 'wpm_6310_selected_server'");
         }
         $wpm_6310_selected_server =  $_POST['wpm_6310_selected_server'];
      }
   }

   
   if(!$loading){
     $loading = wpm_6310_plugin_dir_url . 'assets/images/loading.gif';
   }
   if(!$prev){
      $prev = wpm_6310_plugin_dir_url . 'assets/images/prev.png';
   }
   if(!$next){
      $next = wpm_6310_plugin_dir_url . 'assets/images/next.png';
   }
   ?>
   <form action="" method="post">
      <?php wp_nonce_field("wpm-6310-nonce-update") ?>
      <div class="wpm-6310-modal-body-form">
         <table width="100%" cellpadding="10" cellspacing="0">
            <tr>
               <td width="200px"><b>Loading Image</b></td>
               <td width="500px">
                  <input type="text" required name="loading_image" id="loading-image-src" value="<?php echo $loading ?>" class="wpm-form-input" style="width: 70%">
                  <input type="button" id="loading-image" value="Change Image" class="wpm-btn-default">
               </td>
               <td>
                  <img src="<?php echo $loading ?>" height="70" />
               </td>
            </tr>
            <tr>
               <td width="200px"><b>Loading Image Width</b></td>
               <td width="500px" colspan="2">
                  <input type="number" min="1" required name="wpm_6310_loading_image_width" value="<?php echo $wpm_6310_loading_image_width ?>" class="wpm-form-input" style="width: 40%">
               </td>
            </tr>
            <tr>
               <td width="200px"><b>Loading Image Height</b></td>
               <td width="500px" colspan="2">
                  <input type="number" min="1" required name="wpm_6310_loading_image_height" value="<?php echo $wpm_6310_loading_image_height ?>" class="wpm-form-input" style="width: 40%">
               </td>
            </tr>
            <tr>
               <td width="200px"><b>Previous Arrow</b></td>
               <td width="500px">
                  <input type="text" required name="prev_image" id="prev-image-src" value="<?php echo $prev ?>" class="wpm-form-input" style="width: 70%">
                  <input type="button" id="next-image" value="Change Image" class="wpm-btn-default">
               </td>
               <td>
                  <img src="<?php echo $prev ?>" height="70" />
               </td>
            </tr>
            <tr>
               <td width="200px"><b>Next Arrow</b></td>
               <td width="500px">
                  <input type="text" required name="next_image" id="next-image-src" value="<?php echo $next ?>" class="wpm-form-input" style="width: 70%">
                  <input type="button" id="next-image" value="Change Image" class="wpm-btn-default">
               </td>
               <td>
                  <img src="<?php echo $next ?>" height="70" />
               </td>
            </tr>
            <tr>
               <td width="200px">
                  <b>Active/Inactive Arrow:</b><br />
               </td>
               <td width="500px" colspan="2">
                  <input type="radio" name="wpm_6310_arrow_activation" value="0"  <?php echo ($wpm_6310_arrow_activation != 1) ? ' checked':'' ?>> Yes &nbsp;&nbsp;&nbsp;
                  <input type="radio" name="wpm_6310_arrow_activation" value="1" <?php echo ($wpm_6310_arrow_activation == 1) ? ' checked':'' ?>> No
               </td>
            </tr>
            <tr>
               <td width="200px">
                  <b>Google Font Activation:</b><br />
                  <small>Select yes to enable Google fonts rendering on output</small>
               </td>
               <td width="500px" colspan="2">
                  <input type="radio" name="google_font" value="-1"  <?php echo ($google_font != 1) ? ' checked':'' ?>> Yes &nbsp;&nbsp;&nbsp;
                  <input type="radio" name="google_font" value="1" <?php echo ($google_font == 1) ? ' checked':'' ?>> No
               </td>
            </tr>
            <tr>
               <td width="200px">
                  <b>Activation Server:</b><br />
                  <small>If you fetch license key activation error, please change server</small>
               </td>
               <td width="500px" colspan="2">
                  <input type="radio" name="wpm_6310_selected_server" value="1"  <?php echo ($wpm_6310_selected_server != 2) ? ' checked':'' ?>> Server 1 &nbsp;&nbsp;&nbsp;
                  <input type="radio" name="wpm_6310_selected_server" value="2" <?php echo ($wpm_6310_selected_server == 2) ? ' checked':'' ?>> Server 2
               </td>
            </tr>
            <tr>
               <td colspan="3">
                  <input type="submit" name="update" class="wpm-btn-primary wpm-margin-right-10" value="Update" />
               </td>
            </tr>
         </table>
      </div>
      <br class="wpm-6310-clear" />
   </form>
   <script>
      jQuery(document).ready(function() {
         /* ######### Media Start ########### */
         jQuery("body").on("click", "#loading-image", function(e) {
            e.preventDefault();
            var image = wp.media({
                  title: 'Upload Image',
                  multiple: false
               }).open()
               .on('select', function(e) {
                  var uploaded_image = image.state().get('selection').first();
                  var image_url = uploaded_image.toJSON().url;
                  jQuery("#loading-image-src").val(image_url);
               });

            jQuery("#wpm_6310_add_new_media").css({
               "overflow-x": "hidden",
               "overflow-y": "auto"
            });
         });

         jQuery("body").on("click", "#prev-image", function(e) {
            e.preventDefault();
            var image = wp.media({
                  title: 'Upload Image',
                  multiple: false
               }).open()
               .on('select', function(e) {
                  var uploaded_image = image.state().get('selection').first();
                  var image_url = uploaded_image.toJSON().url;
                  jQuery("#prev-image-src").val(image_url);
               });

            jQuery("#wpm_6310_add_new_media").css({
               "overflow-x": "hidden",
               "overflow-y": "auto"
            });
         });

         jQuery("body").on("click", "#next-image", function(e) {
            e.preventDefault();
            var image = wp.media({
                  title: 'Upload Image',
                  multiple: false
               }).open()
               .on('select', function(e) {
                  var uploaded_image = image.state().get('selection').first();
                  var image_url = uploaded_image.toJSON().url;
                  jQuery("#next-image-src").val(image_url);
               });

            jQuery("#wpm_6310_add_new_media").css({
               "overflow-x": "hidden",
               "overflow-y": "auto"
            });
         });
      });
   </script>