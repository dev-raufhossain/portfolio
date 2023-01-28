<?php

global $wpdb;
$style_table = $wpdb->prefix . 'wpm_6310_style';
$icon_table = $wpdb->prefix . 'wpm_6310_icons';
$member_table = $wpdb->prefix . 'wpm_6310_member';
$category_table = $wpdb->prefix . 'wpm_6310_category';
wpm_6310_check_field_exists();
wp_enqueue_script('jquery');

$categoryData = $wpdb->get_results("SELECT * FROM $category_table order by serial asc", ARRAY_A);
$styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $ids), ARRAY_A);
if(!$styledata || $styledata == '') return;
$styleTemplate = (int) substr($styledata['style_name'], -2);
$allStyle = explode("|", $styledata['css']);
$allSlider = explode("|", $styledata['slider']);


$members = [];
if($styledata['memberid']){
   $memList = explode('||##||', $styledata['memberid']);
   if($memList[0]){
      if(!isset($memList[1])) {
         $memList = explode('##||##', $styledata['memberid']);
      } else {
         $memList = explode('##||##', $memList[0]);
      }
      $idExist = explode(',', $memList[0]);
      if($idExist){
         $tempId = '';
         foreach ($idExist as $ie) {
            if (trim($ie) != '') {
               if ($tempId != '') {
                  $tempId .= ',';
               }
               $tempId .= $ie;
            }
         }
         if ($tempId == '') {
            return;
         }
         $members = $wpdb->get_results("SELECT * FROM $member_table WHERE id in ({$tempId}) ORDER BY name asc", ARRAY_A);
      }
      else{
         return;
      }
   }
   else{
      return;
   }
}
else{
   return;
}

$rows = explode("@@##@@", $allStyle[0]);
$desktop_row = $rows[0];
$tablet_row = isset($rows[1]) ? $rows[1] : 1;
$mobile_row = isset($rows[2]) ? $rows[2] : 1;

$loading = wpm_6310_get_option( 'wpm_6310_loading_icon');
if(!$loading){
  $loading = wpm_6310_plugin_dir_url . 'assets/images/loading.gif';;
}

$loading_width = wpm_6310_get_option( 'wpm_6310_loading_image_width') > 0 ? wpm_6310_get_option( 'wpm_6310_loading_image_width') : 100;
$loading_height = wpm_6310_get_option( 'wpm_6310_loading_image_height') > 0 ? wpm_6310_get_option( 'wpm_6310_loading_image_height') : 100;

if (file_exists(wpm_6310_plugin_url . "output/{$styledata['style_name']}.php")) {
   $fonts = '';
   $google_font = wpm_6310_get_option( 'wpm_6310_google_font_status');
   if ($google_font != 1) {
      if(isset($allSlider[22])){
         $fonts .= '|' . (isset($allSlider[22])?str_replace("+", " ", $allSlider[22]):'Amaranth');
      } else {
         $fonts .= '|' . 'Amaranth';
      }
      if(isset($allSlider[77])){
         $fonts .= '|' . (isset($allSlider[77])?str_replace("+", " ", $allSlider[77]):'Amaranth');
      } else {
         $fonts .= '|' . 'Amaranth';
      }
      if(isset($allSlider[112])){
         $fonts .= '|' . (isset($allSlider[112])?str_replace("+", " ", $allSlider[112]):'Amaranth');
      } else {
         $fonts .= '|' . 'Amaranth';
      }
      if(isset($allSlider[142])){
         $fonts .= '|' . (isset($allSlider[142])?str_replace("+", " ", $allSlider[142]):'Amaranth');
      } else {
         $fonts .= '|' . 'Amaranth';
      }
      if(isset($allSlider[143])){
         $fonts .= '|' . (isset($allSlider[143])?str_replace("+", " ", $allSlider[143]):'Amaranth');
      } else {
         $fonts .= '|' . 'Amaranth';
      }
      if(isset($allSlider[144])){
         $fonts .= '|' . (isset($allSlider[144])?str_replace("+", " ", $allSlider[144]):'Arimo');
      } else {
         $fonts .= '|' . 'Arimo';
      }
      if(isset($allSlider[145])){
         $fonts .= '|' . (isset($allSlider[145])?str_replace("+", " ", $allSlider[145]):'Amaranth');
      } else {
         $fonts .= '|' . 'Amaranth';
      }
      if(isset($allSlider[146])){
         $fonts .= '|' . (isset($allSlider[146])?str_replace("+", " ", $allSlider[146]):'Amaranth');
      } else {
         $fonts .= '|' . 'Amaranth';
      }
      if(isset($allSlider[342])){
         $fonts .= '|' . (isset($allSlider[342])?str_replace("+", " ", $allSlider[342]):'Amaranth');
      } else {
         $fonts .= '|' . 'Amaranth';
      }
      wp_enqueue_style("wpm-google-font-{$ids}", "https://fonts.googleapis.com/css?family={$allStyle['17']}|{$allStyle['23']}{$fonts}");
   }
   wp_enqueue_style('wpm-font-awesome-5-0-13', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css');
   wp_enqueue_style('wpm-font-awesome-4-07', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
   if ($allSlider[0]) {
      wp_enqueue_style('wpm-6310-owl-carousel', plugins_url('assets/css/owl.carousel.min.css', __FILE__));
      wp_enqueue_script('wpm-6310-owl-carousel-js', plugins_url('assets/js/owl.carousel.min.js', __FILE__));
   }

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

   echo "
         <div class='wpm_6310_loading'>
            <img src='$loading' />
         </div>
         <div 
            class='wpm_main_template wpm_main_template_{$ids}'
            wpm-6310-carousel-styleName='{$styledata['style_name']}'
            wpm-6310-carousel-itemPerRow='{$desktop_row}'
            wpm-6310-carousel-itemPerRow-tablet='{$tablet_row}'
            wpm-6310-carousel-itemPerRow-mobile='{$mobile_row}'
            wpm-6310-carousel-id='{$ids}'
            wpm-6310-carousel-active='{$allSlider[0]}'
            wpm-6310-carousel-autoPlay='{$allSlider[2]}'
            wpm-6310-carousel-nav='{$allSlider[3]}'
            wpm-6310-carousel-dot='{$allSlider[11]}'
            wpm-6310-carousel-navText='{$allSlider[4]}'
            wpm-6310-category-active='". (isset($allSlider[101])?$allSlider[101]:0) ."'
            wpm-6310-search-active='". ((isset($allSlider[86]) && $allSlider[86]>0)?1:0) ."'
            wpm-6310-item-margin='".((isset($allSlider[127])?$allSlider[127]:15) * 2) ."'
            wpm-6310-padding='". ($allStyle[3] * 4) ."'
            wpm_6310_progress_bar_animation='0'
            wpm_6310_progress_bar_border_radius='". (isset($allSlider[344]) ? $allSlider[344] : 10) ."'
   >";
   echo "<div class='".(($allSlider[0] == 0) ? 'wpm-6310-no-carousel' : '')."'>";
   include wpm_6310_plugin_url . "output/{$styledata['style_name']}.php";

   echo "</div>";
   echo "</div>";

   wp_enqueue_script('wpm-6310-common-output-js', plugins_url('assets/js/wpm-common-output.js', __FILE__));

   if ($styledata['memberorder']) {
      echo "<style type='text/css'>" . $styledata['memberorder'] . "</style>";
   }
}
else {
   echo "<p>This template is only available on the pro version.</p>";
}
