<?php

function wpm_template_01_10() {
   global $wpdb;
   $style_table = $wpdb->prefix . 'wpm_6310_style';
   $icon_table = $wpdb->prefix . 'wpm_6310_icons';
   $member_table = $wpdb->prefix . 'wpm_6310_member';
   $category_table = $wpdb->prefix . 'wpm_6310_category';

   wp_enqueue_style('wpm-6310-style', plugins_url('assets/css/style.css', __FILE__));
   wp_enqueue_style('wpm-color-style', plugins_url('assets/css/jquery.minicolors.css', __FILE__));
   wpm_6310_link_css_js();

   include wpm_6310_plugin_url . 'header.php';
   if (empty($_GET['styleid'])) {
      wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=Amaranth');
      wp_enqueue_style('wpm-style-01-10', plugins_url('assets/css/style-01-10.css', __FILE__));
      wp_enqueue_style('wpm-style-contact-description', plugins_url('assets/css/contact-description.css', __FILE__));
      include wpm_6310_plugin_url . 'settings/preview-01-10.php';
   } else if (!empty($_GET['styleid'])) {
      $styleId = (int) ($_GET['styleid']);
      $loading = wpm_6310_plugin_dir_url . 'assets/images/loading.gif';
      $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $styleId), ARRAY_A);
      $template_id = substr($styledata['style_name'], -2);
      include_once(wpm_6310_plugin_url . 'settings/helper/common-helper.php');
      wpm_6310_color_picker_script();
      wpm_6310_font_picker_script();
      wp_enqueue_script('wpm-font-select-js', plugins_url('assets/js/fontselect.js', __FILE__), array('jquery'));
      wp_enqueue_script('wpm-admin-js', plugins_url('assets/js/wpm-admin-script.js', __FILE__), array('jquery'));
      wp_enqueue_script('wpm-6310-owl-carousel', plugins_url('assets/js/owl.carousel.min.js', __FILE__), array('jquery'));

      wp_enqueue_style('wpm-font-select-style', plugins_url('assets/css/fontselect.css', __FILE__));
      wp_enqueue_style('wpm-6310-owl-carousel', plugins_url('assets/css/owl.carousel.min.css', __FILE__));

      wp_enqueue_script('wpm-6310-jquery-ui-js', wpm_6310_plugin_dir_url . 'assets/js/jquery-ui.min.js', array('jquery'));
      wp_enqueue_style('wpm-6310-jquery-ui', wpm_6310_plugin_dir_url . 'assets/css/jquery-ui.min.css');
      $categoryData = $wpdb->get_results("SELECT * FROM $category_table order by serial asc", ARRAY_A);
      include wpm_6310_plugin_url . 'settings/templates/' . $styledata['style_name'] . '.php';
   }
}

function wpm_template_11_20() {
   global $wpdb;
   $style_table = $wpdb->prefix . 'wpm_6310_style';
   $icon_table = $wpdb->prefix . 'wpm_6310_icons';
   $member_table = $wpdb->prefix . 'wpm_6310_member';
   $category_table = $wpdb->prefix . 'wpm_6310_category';

   wp_enqueue_style('wpm-6310-style', plugins_url('assets/css/style.css', __FILE__));
   wp_enqueue_style('wpm-color-style', plugins_url('assets/css/jquery.minicolors.css', __FILE__));
   wpm_6310_link_css_js();

   include wpm_6310_plugin_url . 'header.php';
   if (empty($_GET['styleid'])) {
      wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=Amaranth');
      wp_enqueue_style('wpm-style-11-20', plugins_url('assets/css/style-11-20.css', __FILE__));
      wp_enqueue_style('wpm-style-contact-description', plugins_url('assets/css/contact-description.css', __FILE__));
      include wpm_6310_plugin_url . 'settings/preview-11-20.php';
   } else if (!empty($_GET['styleid'])) {
      $styleId = (int) ($_GET['styleid']);
      $loading = wpm_6310_plugin_dir_url . 'assets/images/loading.gif';
      $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $styleId), ARRAY_A);
      $template_id = substr($styledata['style_name'], -2);
      include_once(wpm_6310_plugin_url . 'settings/helper/common-helper.php');
      wpm_6310_color_picker_script();
      wpm_6310_font_picker_script();
      wp_enqueue_script('wpm-font-select-js', plugins_url('assets/js/fontselect.js', __FILE__), array('jquery'));
      wp_enqueue_script('wpm-admin-js', plugins_url('assets/js/wpm-admin-script.js', __FILE__), array('jquery'));
      wp_enqueue_script('wpm-6310-owl-carousel', plugins_url('assets/js/owl.carousel.min.js', __FILE__), array('jquery'));

      wp_enqueue_style('wpm-font-select-style', plugins_url('assets/css/fontselect.css', __FILE__));
      wp_enqueue_style('wpm-6310-owl-carousel', plugins_url('assets/css/owl.carousel.min.css', __FILE__));

      wp_enqueue_script('wpm-6310-jquery-ui-js', wpm_6310_plugin_dir_url . 'assets/js/jquery-ui.min.js', array('jquery'));
      wp_enqueue_style('wpm-6310-jquery-ui', wpm_6310_plugin_dir_url . 'assets/css/jquery-ui.min.css');
      $categoryData = $wpdb->get_results("SELECT * FROM $category_table order by serial asc", ARRAY_A);
      include wpm_6310_plugin_url . 'settings/templates/' . $styledata['style_name'] . '.php';
   }
}

function wpm_template_21_30() {
   global $wpdb;
   $style_table = $wpdb->prefix . 'wpm_6310_style';
   $icon_table = $wpdb->prefix . 'wpm_6310_icons';
   $member_table = $wpdb->prefix . 'wpm_6310_member';
   $category_table = $wpdb->prefix . 'wpm_6310_category';

   wp_enqueue_style('wpm-6310-style', plugins_url('assets/css/style.css', __FILE__));
   wp_enqueue_style('wpm-color-style', plugins_url('assets/css/jquery.minicolors.css', __FILE__));
   wpm_6310_link_css_js();

   include wpm_6310_plugin_url . 'header.php';
   if (empty($_GET['styleid'])) {
      wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=Amaranth');
      wp_enqueue_style('wpm-style-21-30', plugins_url('assets/css/style-21-30.css', __FILE__));
      wp_enqueue_style('wpm-style-contact-description', plugins_url('assets/css/contact-description.css', __FILE__));
      include wpm_6310_plugin_url . 'settings/preview-21-30.php';
   } else if (!empty($_GET['styleid'])) {
      $styleId = (int) ($_GET['styleid']);
      $loading = wpm_6310_plugin_dir_url . 'assets/images/loading.gif';
      $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $styleId), ARRAY_A);
      $template_id = substr($styledata['style_name'], -2);
      include_once(wpm_6310_plugin_url . 'settings/helper/common-helper.php');
      wpm_6310_color_picker_script();
      wpm_6310_font_picker_script();
      wp_enqueue_script('wpm-font-select-js', plugins_url('assets/js/fontselect.js', __FILE__), array('jquery'));
      wp_enqueue_script('wpm-admin-js', plugins_url('assets/js/wpm-admin-script.js', __FILE__), array('jquery'));
      wp_enqueue_script('wpm-6310-owl-carousel', plugins_url('assets/js/owl.carousel.min.js', __FILE__), array('jquery'));

      wp_enqueue_style('wpm-font-select-style', plugins_url('assets/css/fontselect.css', __FILE__));
      wp_enqueue_style('wpm-6310-owl-carousel', plugins_url('assets/css/owl.carousel.min.css', __FILE__));

      wp_enqueue_script('wpm-6310-jquery-ui-js', wpm_6310_plugin_dir_url . 'assets/js/jquery-ui.min.js', array('jquery'));
      wp_enqueue_style('wpm-6310-jquery-ui', wpm_6310_plugin_dir_url . 'assets/css/jquery-ui.min.css');
      $categoryData = $wpdb->get_results("SELECT * FROM $category_table order by serial asc", ARRAY_A);
      include wpm_6310_plugin_url . 'settings/templates/' . $styledata['style_name'] . '.php';
   }
}

function wpm_template_31_40() {
   global $wpdb;
   $style_table = $wpdb->prefix . 'wpm_6310_style';
   $icon_table = $wpdb->prefix . 'wpm_6310_icons';
   $member_table = $wpdb->prefix . 'wpm_6310_member';
   $category_table = $wpdb->prefix . 'wpm_6310_category';

   wp_enqueue_style('wpm-6310-style', plugins_url('assets/css/style.css', __FILE__));
   wp_enqueue_style('wpm-color-style', plugins_url('assets/css/jquery.minicolors.css', __FILE__));
   wpm_6310_link_css_js();

   include wpm_6310_plugin_url . 'header.php';
   if (empty($_GET['styleid'])) {
      wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=Amaranth');
      wp_enqueue_style('wpm-style-31-40', plugins_url('assets/css/style-31-40.css', __FILE__));
      wp_enqueue_style('wpm-style-contact-description', plugins_url('assets/css/contact-description.css', __FILE__));
      include wpm_6310_plugin_url . 'settings/preview-31-40.php';
   } else if (!empty($_GET['styleid'])) {
      $styleId = (int) ($_GET['styleid']);
      $loading = wpm_6310_plugin_dir_url . 'assets/images/loading.gif';
      $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $styleId), ARRAY_A);
      $template_id = substr($styledata['style_name'], -2);
      include_once(wpm_6310_plugin_url . 'settings/helper/common-helper.php');
      wpm_6310_color_picker_script();
      wpm_6310_font_picker_script();
      wp_enqueue_script('wpm-font-select-js', plugins_url('assets/js/fontselect.js', __FILE__), array('jquery'));
      wp_enqueue_script('wpm-admin-js', plugins_url('assets/js/wpm-admin-script.js', __FILE__), array('jquery'));
      wp_enqueue_script('wpm-6310-owl-carousel', plugins_url('assets/js/owl.carousel.min.js', __FILE__), array('jquery'));

      wp_enqueue_style('wpm-font-select-style', plugins_url('assets/css/fontselect.css', __FILE__));
      wp_enqueue_style('wpm-6310-owl-carousel', plugins_url('assets/css/owl.carousel.min.css', __FILE__));

      wp_enqueue_script('wpm-6310-jquery-ui-js', wpm_6310_plugin_dir_url . 'assets/js/jquery-ui.min.js', array('jquery'));
      wp_enqueue_style('wpm-6310-jquery-ui', wpm_6310_plugin_dir_url . 'assets/css/jquery-ui.min.css');
      $categoryData = $wpdb->get_results("SELECT * FROM $category_table order by serial asc", ARRAY_A);
      include wpm_6310_plugin_url . 'settings/templates/' . $styledata['style_name'] . '.php';
   }
}


function wpm_team_6310_team_member() {
   global $wpdb;

   wp_enqueue_style('wpm-6310-style', plugins_url('assets/css/style.css', __FILE__));
   wp_enqueue_style('wpm-color-style', plugins_url('assets/css/jquery.minicolors.css', __FILE__));
   wpm_6310_link_css_js();

   include wpm_6310_plugin_url . 'header.php';
   include_once(wpm_6310_plugin_url . 'settings/helper/common-helper.php');
   include wpm_6310_plugin_url . 'settings/team-member.php';
}

function wpm_team_6310_icon() {
   global $wpdb;

   wp_enqueue_style('wpm-6310-style', plugins_url('assets/css/style.css', __FILE__));
   wp_enqueue_style('wpm-color-style', plugins_url('assets/css/jquery.minicolors.css', __FILE__));
   wpm_6310_link_css_js();

   include wpm_6310_plugin_url . 'header.php';
   include_once(wpm_6310_plugin_url . 'settings/helper/common-helper.php');
   include wpm_6310_plugin_url . 'settings/social-icon.php';
}

function wpm_team_6310_category(){
   global $wpdb;
   wp_enqueue_style('wpm-6310-style', plugins_url('assets/css/style.css', __FILE__));
   wp_enqueue_style('wpm-color-style', plugins_url('assets/css/jquery.minicolors.css', __FILE__));
   wpm_6310_link_css_js();

   include wpm_6310_plugin_url . 'header.php';
   include_once(wpm_6310_plugin_url . 'settings/helper/common-helper.php');
   include wpm_6310_plugin_url . 'settings/category.php';
}

function wpm_team_6310_settings(){
   global $wpdb;
   wp_enqueue_style('wpm-6310-style', plugins_url('assets/css/style.css', __FILE__));
   wp_enqueue_style('wpm-color-style', plugins_url('assets/css/jquery.minicolors.css', __FILE__));
   wpm_6310_link_css_js();

   include wpm_6310_plugin_url . 'header.php';
   include_once(wpm_6310_plugin_url . 'settings/helper/common-helper.php');
   include wpm_6310_plugin_url . 'settings/plugin-settings.php';
}

function wpm_team_6310_lincense()
{
   global $wpdb;
   wp_enqueue_style('wpm-6310-style', plugins_url('assets/css/style.css', __FILE__));
   wpm_6310_link_css_js();
   include wpm_6310_plugin_url . 'header.php';
   include wpm_6310_plugin_url . 'license.php';
}

function wpm_team_6310_help()
{
  global $wpdb;
  wp_enqueue_style('wpm-6310-style', plugins_url('assets/css/style.css', __FILE__));

  wpm_6310_link_css_js();

  include wpm_6310_plugin_url . 'header.php';
  include_once(wpm_6310_plugin_url . 'settings/helper/common-helper.php');
  include wpm_6310_plugin_url . 'settings/help.php';
}
function wpm_6310_wpmart_plugins()
{
  global $wpdb;
  wp_enqueue_style('wpm-6310-style', plugins_url('assets/css/style.css', __FILE__));

  wpm_6310_link_css_js();

  include wpm_6310_plugin_url . 'header.php';
  include_once(wpm_6310_plugin_url . 'settings/helper/common-helper.php');
  include wpm_6310_plugin_url . 'settings/wpmart-plugins.php';
}

function wpm_team_6310_import_export()
{
  global $wpdb;
  wp_enqueue_style('wpm-6310-style', plugins_url('assets/css/style.css', __FILE__));

  wpm_6310_link_css_js();

  include wpm_6310_plugin_url . 'header.php';
  include_once(wpm_6310_plugin_url . 'settings/helper/common-helper.php');
  include wpm_6310_plugin_url . 'settings/import-export-plugins.php';
}