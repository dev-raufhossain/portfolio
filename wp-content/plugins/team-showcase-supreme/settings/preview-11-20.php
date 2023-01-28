<?php
if (!defined('ABSPATH'))
  exit;

if (!empty($_POST['submit']) && $_POST['submit'] == 'Save' && $_POST['style'] != '') {
  $nonce = $_REQUEST['_wpnonce'];
  if (!wp_verify_nonce($nonce, 'wpm-nonce-field')) {
    die('You do not have sufficient permissions to access this page.');
  } else {
    $name = sanitize_text_field($_POST['style_name']);
    $style_name = sanitize_text_field($_POST['style']);

    $defaultData = wpm_6310_default_value($_POST['style']);
    $css = $defaultData['css'];
    $slider = $defaultData['slider']; 

    $members = $wpdb->get_results('SELECT * FROM ' . $member_table . ' ORDER BY name ASC', ARRAY_A);
    $membersId = "";
    if($_POST['import_member'] == 1){
      foreach ($members as $member) {
        if ($membersId) {
            $membersId .= ",";
        }
        $membersId .= $member['id'];
      }
    }

    $wpdb->query($wpdb->prepare("INSERT INTO {$style_table} (name, style_name, css, slider, memberid) VALUES ( %s, %s, %s, %s, %s )", array($name, $style_name, $css, $slider,  $membersId)));
    $redirect_id = $wpdb->insert_id;

    if ($redirect_id == 0) {
      $url = admin_url("admin.php?page=wpm-team-showcase");
    } else if ($redirect_id != 0) {
      $url = admin_url("admin.php?page=wpm-template-11-20&styleid=$redirect_id");
    }
    echo '<script type="text/javascript"> document.location.href = "' . $url . '"; </script>';
    exit;
  }
}

//Load Image
$arr = array(
  wpm_6310_plugin_dir_url . 'assets/images/1.jpg||||' . wpm_6310_plugin_dir_url . 'assets/images/1_hover.jpg',
  wpm_6310_plugin_dir_url . 'assets/images/2.jpg||||' . wpm_6310_plugin_dir_url . 'assets/images/2_hover.jpg',
  wpm_6310_plugin_dir_url . 'assets/images/3.jpg||||' . wpm_6310_plugin_dir_url . 'assets/images/3_hover.jpg',
  wpm_6310_plugin_dir_url . 'assets/images/4.jpg||||' . wpm_6310_plugin_dir_url . 'assets/images/4_hover.jpg',
  wpm_6310_plugin_dir_url . 'assets/images/5.jpg||||' . wpm_6310_plugin_dir_url . 'assets/images/5_hover.jpg'
);

$icons = array(
  '<li><a href="https://www.linkedin.com" class="open_in_new_tab_class wpm-social-link-linkedin" title="Linkedin" target="_blank" id=""><i class="fab fa-linkedin-in"></i></a></li>',
  '<li><a href="https://www.facebook.com" class="open_in_new_tab_class wpm-social-link-facebook" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>',
  '<li><a href="https://www.youtube.com" class="open_in_new_tab_class wpm-social-link-youtube" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a></li>',
  '<li><a href="https://www.twitter.com" class="open_in_new_tab_class wpm-social-link-twitter" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>',
  '<li><a href="https://www.google.com" class="open_in_new_tab_class wpm-social-link-google" title="Google Plus" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>',
  '<li><a href="https://www.pinterest.com" class="open_in_new_tab_class wpm-social-link-pinterest" title="Pinterest" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>',
  '<li><a href="https://www.whatsapp.com" class="open_in_new_tab_class wpm-social-link-whatsapp" title="Whatsapp" target="_blank"><i class="fab fa-whatsapp"></i></a></li>'
);
?>
<div class="wpm-6310">
  <h1>Select Template</h1>

  <!-- Template 11 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
      <div class="wpm_6310_team_style_11 wpm_6310_hover_img_change">
        <div class="">
            <?php $temp = explode("||||", $arr[0]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <div class="wpm_6310_team_style_11_title">Adam Smith</div>
          </div>
          <div class="wpm_6310_team_style_11_hover_animation_top">
            <div class="wpm_6310_team_style_11_table">
              <div class="wpm_6310_team_style_11_table_cell">
                <div class="wpm_6310_team_style_11_title_hover">Adam Smith</div>
                <div class="wpm_6310_team_style_11_designation_hover">CEO</div>
                <div class="wpm-custom-fields-11">
                  <div class="wpm-custom-fields-list-11">
                    <div class="wpm-custom-fields-list-label-11">Fax</div>
                    <div class="wpm-custom-fields-list-content-11">03424387263</div>
                  </div>
                  <div class="wpm-custom-fields-list-11">
                    <div class="wpm-custom-fields-list-label-11"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-11">Dhaka, Bangladesh</div>
                  </div>
                  <div class="wpm-custom-fields-list-11">
                    <div class="wpm-custom-fields-list-label-11"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-11">1588100157</div>
                  </div>
                </div>
                <div class="wpm_6310_team_style_11_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                <ul class="wpm_6310_team_style_11_social_hover">
                  <?php
                  shuffle($icons);
                  for ($i = 0; $i < 4; $i++) {
                    echo $icons[$i];
                  }
                  ?>
                </ul>
                <div class="wpm_6310_team_style_11_read_more">
                  <a href="#">VIEW MORE</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
      <div class="wpm_6310_team_style_11 wpm_6310_hover_img_change">
        <div class="">
            <?php $temp = explode("||||", $arr[1]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <div class="wpm_6310_team_style_11_title">Adam Smith</div>
          </div>
          <div class="wpm_6310_team_style_11_hover_animation_left">
            <div class="wpm_6310_team_style_11_table">
              <div class="wpm_6310_team_style_11_table_cell">
                <div class="wpm_6310_team_style_11_title_hover">James Miller</div>
                <div class="wpm_6310_team_style_11_designation_hover">Sales Manager</div>
                <div class="wpm-custom-fields-11">
                  <div class="wpm-custom-fields-list-11">
                    <div class="wpm-custom-fields-list-label-11">Fax</div>
                    <div class="wpm-custom-fields-list-content-11">03424387263</div>
                  </div>
                  <div class="wpm-custom-fields-list-11">
                    <div class="wpm-custom-fields-list-label-11"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-11">Dhaka, Bangladesh</div>
                  </div>
                  <div class="wpm-custom-fields-list-11">
                    <div class="wpm-custom-fields-list-label-11"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-11">1588100157</div>
                  </div>
                </div>
                <div class="wpm_6310_team_style_11_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                <ul class="wpm_6310_team_style_11_social_hover">
                  <?php
                  shuffle($icons);
                  for ($i = 0; $i < 4; $i++) {
                    echo $icons[$i];
                  }
                  ?>
                </ul>
                <div class="wpm_6310_team_style_11_read_more">
                  <a href="#">VIEW MORE</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_11 wpm_6310_hover_img_change">
          <div class="">
              <?php $temp = explode("||||", $arr[0]);  ?>
              <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
              <div class="wpm_6310_team_style_11_title">Adam Smith</div>
            </div>
          <div class="wpm_6310_team_style_11_hover_animation_right">
            <div class="wpm_6310_team_style_11_table">
              <div class="wpm_6310_team_style_11_table_cell">
                <div class="wpm_6310_team_style_11_title_hover">Michel Clark</div>
                <div class="wpm_6310_team_style_11_designation_hover">Sales Agent</div>
                <div class="wpm-custom-fields-11">
                  <div class="wpm-custom-fields-list-11">
                    <div class="wpm-custom-fields-list-label-11">Fax</div>
                    <div class="wpm-custom-fields-list-content-11">03424387263</div>
                  </div>
                  <div class="wpm-custom-fields-list-11">
                    <div class="wpm-custom-fields-list-label-11"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-11">Dhaka, Bangladesh</div>
                  </div>
                  <div class="wpm-custom-fields-list-11">
                    <div class="wpm-custom-fields-list-label-11"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-11">1588100157</div>
                  </div>
                </div>
                <div class="wpm_6310_team_style_11_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                <ul class="wpm_6310_team_style_11_social_hover">
                  <?php
                  shuffle($icons);
                  for ($i = 0; $i < 4; $i++) {
                    echo $icons[$i];
                  }
                  ?>
                </ul>
                <div class="wpm_6310_team_style_11_read_more">
                  <a href="#">VIEW MORE</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 11 <small>(4 Effects)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-11">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 12 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_12 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_12_pic">
            <?php $temp = explode("||||", $arr[0]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>

          <div class="wpm_6310_team_style_12_team_content">
            <div class="wpm_6310_team_style_12_title"> William </div>
            <div class="wpm_6310_team_style_12_designation">Web Developer</div>
            <div class="wpm-custom-fields-12">
              <div class="wpm-custom-fields-list-12">
                <div class="wpm-custom-fields-list-label-12">Fax</div>
                <div class="wpm-custom-fields-list-content-12">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-12">
                <div class="wpm-custom-fields-list-label-12"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-12">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-12">
                <div class="wpm-custom-fields-list-label-12"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-12">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_12_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="wpm_6310_team_style_12_border"></div>

            <ul class="wpm_6310_team_style_12_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>

          </div>
        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_12 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_12_pic">
              <?php $temp = explode("||||", $arr[1]);  ?>
              <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>

          <div class="wpm_6310_team_style_12_team_content">
            <div class="wpm_6310_team_style_12_title"> William </div>
            <div class="wpm_6310_team_style_12_designation">Web Developer</div>
            <div class="wpm-custom-fields-12">
              <div class="wpm-custom-fields-list-12">
                <div class="wpm-custom-fields-list-label-12">Fax</div>
                <div class="wpm-custom-fields-list-content-12">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-12">
                <div class="wpm-custom-fields-list-label-12"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-12">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-12">
                <div class="wpm-custom-fields-list-label-12"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-12">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_12_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="wpm_6310_team_style_12_border"></div>

            <ul class="wpm_6310_team_style_12_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>

          </div>
        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_12 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_12_pic">
            <?php $temp = explode("||||", $arr[2]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>

          <div class="wpm_6310_team_style_12_team_content">
            <div class="wpm_6310_team_style_12_title"> William </div>
            <div class="wpm_6310_team_style_12_designation">Web Developer</div>
            <div class="wpm-custom-fields-12">
              <div class="wpm-custom-fields-list-12">
                <div class="wpm-custom-fields-list-label-12">Fax</div>
                <div class="wpm-custom-fields-list-content-12">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-12">
                <div class="wpm-custom-fields-list-label-12"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-12">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-12">
                <div class="wpm-custom-fields-list-label-12"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-12">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_12_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="wpm_6310_team_style_12_border"></div>

            <ul class="wpm_6310_team_style_12_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>

          </div>
        </div>

      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 12
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-12">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 13 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_13 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_13_pic">
            <?php $temp = explode("||||", $arr[0]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>

          <div class="wpm_6310_team_style_13_team_content">
            <div class="wpm_6310_team_style_13_title">Mildred Martin</div>
            <div class="wpm_6310_team_style_13_designation">Sales Agent</div>
            <div class="wpm-custom-fields-13">
              <div class="wpm-custom-fields-list-13">
                <div class="wpm-custom-fields-list-label-13">Fax</div>
                <div class="wpm-custom-fields-list-content-13">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-13">
                <div class="wpm-custom-fields-list-label-13"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-13">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-13">
                <div class="wpm-custom-fields-list-label-13"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-13">1588100157</div>
              </div>              
            </div>
            <?php echo wpm_6310_skills_social(' wpm-6310-p-l-r-10') ?>
            <ul class="wpm_6310_team_style_13_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
            <div class="wpm_6310_team_style_13_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </div>

          </div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_13 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_13_pic">
            <?php $temp = explode("||||", $arr[1]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>

          <div class="wpm_6310_team_style_13_team_content">
            <div class="wpm_6310_team_style_13_title">Mildred Martin</div>
            <div class="wpm_6310_team_style_13_designation">Sales Agent</div>
            <div class="wpm-custom-fields-13">
              <div class="wpm-custom-fields-list-13">
                <div class="wpm-custom-fields-list-label-13">Fax</div>
                <div class="wpm-custom-fields-list-content-13">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-13">
                <div class="wpm-custom-fields-list-label-13"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-13">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-13">
                <div class="wpm-custom-fields-list-label-13"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-13">1588100157</div>
              </div>              
            </div>
            <?php echo wpm_6310_skills_social(' wpm-6310-p-l-r-10') ?>
            <ul class="wpm_6310_team_style_13_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
            <div class="wpm_6310_team_style_13_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </div>

          </div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_13 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_13_pic">
            <?php $temp = explode("||||", $arr[2]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>

          <div class="wpm_6310_team_style_13_team_content">
            <div class="wpm_6310_team_style_13_title">Mildred Martin</div>
            <div class="wpm_6310_team_style_13_designation">Sales Agent</div>
            <div class="wpm-custom-fields-13">
              <div class="wpm-custom-fields-list-13">
                <div class="wpm-custom-fields-list-label-13">Fax</div>
                <div class="wpm-custom-fields-list-content-13">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-13">
                <div class="wpm-custom-fields-list-label-13"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-13">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-13">
                <div class="wpm-custom-fields-list-label-13"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-13">1588100157</div>
              </div>              
            </div>
            <?php echo wpm_6310_skills_social(' wpm-6310-p-l-r-10') ?>
            <ul class="wpm_6310_team_style_13_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
            <div class="wpm_6310_team_style_13_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </div>

          </div>
        </div>
      </div>

    </div>
    <div class="wpm-6310-template-list">
      Template 13
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-13">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 14 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_14 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[0]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <div class="wpm_6310_team_style_14_team_content">
            <div class="wpm_6310_team_style_14_title">William</div>
            <div class="wpm_6310_team_style_14_designation">Web Desginer</div>
            <div class="wpm-custom-fields-14">
              <div class="wpm-custom-fields-list-14">
                <div class="wpm-custom-fields-list-label-14">Fax</div>
                <div class="wpm-custom-fields-list-content-14">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-14">
                <div class="wpm-custom-fields-list-label-14"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-14">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-14">
                <div class="wpm-custom-fields-list-label-14"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-14">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_14_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <ul class="wpm_6310_team_style_14_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_14 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[1]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <div class="wpm_6310_team_style_14_team_content">
            <div class="wpm_6310_team_style_14_title">
              William

            </div>
            <div class="wpm_6310_team_style_14_designation">Web Desginer</div>
            <div class="wpm-custom-fields-14">
              <div class="wpm-custom-fields-list-14">
                <div class="wpm-custom-fields-list-label-14">Fax</div>
                <div class="wpm-custom-fields-list-content-14">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-14">
                <div class="wpm-custom-fields-list-label-14"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-14">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-14">
                <div class="wpm-custom-fields-list-label-14"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-14">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_14_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <ul class="wpm_6310_team_style_14_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>

          </div>

        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_14 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[2]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <div class="wpm_6310_team_style_14_team_content">
            <div class="wpm_6310_team_style_14_title">
              William

            </div>
            <div class="wpm_6310_team_style_14_designation">Web Desginer</div>
            <div class="wpm-custom-fields-14">
              <div class="wpm-custom-fields-list-14">
                <div class="wpm-custom-fields-list-label-14">Fax</div>
                <div class="wpm-custom-fields-list-content-14">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-14">
                <div class="wpm-custom-fields-list-label-14"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-14">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-14">
                <div class="wpm-custom-fields-list-label-14"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-14">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_14_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <ul class="wpm_6310_team_style_14_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>

          </div>

        </div>

      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 14
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-14">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 15 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_15 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_15_pic">
            <?php $temp = explode("||||", $arr[0]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_15_team_content">
            <div class="wpm_6310_team_style_15_title">William</div>
            <div class="wpm_6310_team_style_15_designation">Web Desginer</div>
            <div class="wpm-custom-fields-15">
              <div class="wpm-custom-fields-list-15">
                <div class="wpm-custom-fields-list-label-15">Fax</div>
                <div class="wpm-custom-fields-list-content-15">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-15">
                <div class="wpm-custom-fields-list-label-15"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-15">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-15">
                <div class="wpm-custom-fields-list-label-15"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-15">1588100157</div>               
              </div>              
            </div>
            <div class="wpm_6310_team_style_15_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed sit amet ipsum ut quam faucibus dictum.</div>
            <ul class="wpm_6310_team_style_15_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>

          </div>
          <div class="wpm_6310_team_style_15_team_display">
            <div class="wpm_6310_team_style_15_title">William</div>
            <div class="wpm_6310_team_style_15_designation">Web Desginer</div>
          </div>
        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_15 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_15_pic">
            <?php $temp = explode("||||", $arr[1]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_15_team_content">
            <div class="wpm_6310_team_style_15_title">William</div>
            <div class="wpm_6310_team_style_15_designation">Web Desginer</div>
            <div class="wpm-custom-fields-15">
              <div class="wpm-custom-fields-list-15">
                <div class="wpm-custom-fields-list-label-15">Fax</div>
                <div class="wpm-custom-fields-list-content-15">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-15">
                <div class="wpm-custom-fields-list-label-15"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-15">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-15">
                <div class="wpm-custom-fields-list-label-15"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-15">1588100157</div>                
              </div>             
            </div>
            <div class="wpm_6310_team_style_15_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed sit amet ipsum ut quam faucibus dictum.</div>
            <ul class="wpm_6310_team_style_15_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>

          </div>
          <div class="wpm_6310_team_style_15_team_display">
            <div class="wpm_6310_team_style_15_title">William</div>
            <div class="wpm_6310_team_style_15_designation">Web Desginer</div>
          </div>
        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_15 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_15_pic">
            <?php $temp = explode("||||", $arr[2]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_15_team_content">
            <div class="wpm_6310_team_style_15_title">William</div>
            <div class="wpm_6310_team_style_15_designation">Web Desginer</div>
            <div class="wpm-custom-fields-15">
              <div class="wpm-custom-fields-list-15">
                <div class="wpm-custom-fields-list-label-15">Fax</div>
                <div class="wpm-custom-fields-list-content-15">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-15">
                <div class="wpm-custom-fields-list-label-15"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-15">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-15">
                <div class="wpm-custom-fields-list-label-15"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-15">1588100157</div>                
              </div>             
            </div>
            <div class="wpm_6310_team_style_15_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed
              sit amet ipsum ut quam faucibus dictum.</div>
            <ul class="wpm_6310_team_style_15_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>

          </div>
          <div class="wpm_6310_team_style_15_team_display">
            <div class="wpm_6310_team_style_15_title">William</div>
            <div class="wpm_6310_team_style_15_designation">Web Desginer</div>
          </div>
        </div>

      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 15
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-15">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 16 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_16 wpm_6310_hover_img_change">
        <div class="wpm_6310_team_style_16_pic">
          <?php $temp = explode("||||", $arr[0]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <div class="wpm_6310_team_style_16_social_team">
              <ul class="wpm_6310_team_style_16_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="wpm_6310_team_style_16_team_content">
            <div class="wpm_6310_team_style_16_title">William</div>
            <div class="wpm_6310_team_style_16_designation">Web Desginer</div>
            <div class="wpm-custom-fields-16">
              <div class="wpm-custom-fields-list-16">
                <div class="wpm-custom-fields-list-label-16">Fax</div>
                <div class="wpm-custom-fields-list-content-16">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-16">
                <div class="wpm-custom-fields-list-label-16"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-16">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-16">
                <div class="wpm-custom-fields-list-label-16"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-16">1588100157</div>               
              </div>              
            </div>
            <?php echo wpm_6310_skills_social() ?>
            <div class="wpm_6310_team_style_16_description">Lorem ipsum dolor sit amet, consectetur adipiscing.</div>
          </div>

        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_16 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_16_pic">
            <?php $temp = explode("||||", $arr[1]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <div class="wpm_6310_team_style_16_social_team">
              <ul class="wpm_6310_team_style_16_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="wpm_6310_team_style_16_team_content">
            <div class="wpm_6310_team_style_16_title">William</div>
            <div class="wpm_6310_team_style_16_designation">Web Desginer</div>
            <div class="wpm-custom-fields-16">
              <div class="wpm-custom-fields-list-16">
                <div class="wpm-custom-fields-list-label-16">Fax</div>
                <div class="wpm-custom-fields-list-content-16">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-16">
                <div class="wpm-custom-fields-list-label-16"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-16">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-16">
                <div class="wpm-custom-fields-list-label-16"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-16">1588100157</div>                
              </div>
            </div>
            <?php echo wpm_6310_skills_social() ?>
            <div class="wpm_6310_team_style_16_description">Lorem ipsum dolor sit amet, consectetur adipiscing.</div>
          </div>

        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_16 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_16_pic">
            <?php $temp = explode("||||", $arr[2]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <div class="wpm_6310_team_style_16_social_team">
              <ul class="wpm_6310_team_style_16_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="wpm_6310_team_style_16_team_content">
            <div class="wpm_6310_team_style_16_title">William</div>
            <div class="wpm_6310_team_style_16_designation">Web Desginer</div>
            <div class="wpm-custom-fields-16">
              <div class="wpm-custom-fields-list-16">
                <div class="wpm-custom-fields-list-label-16">Fax</div>
                <div class="wpm-custom-fields-list-content-16">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-16">
                <div class="wpm-custom-fields-list-label-16"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-16">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-16">
                <div class="wpm-custom-fields-list-label-16"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-16">1588100157</div>                
              </div>
            </div>
            <?php echo wpm_6310_skills_social() ?>
            <div class="wpm_6310_team_style_16_description">Lorem ipsum dolor sit amet, consectetur adipiscing.</div>
          </div>
        </div>
      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 16
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-16">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- template 17 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_17 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_17_pic_border">
            <div class="wpm_6310_team_style_17_pic">
              <?php $temp = explode("||||", $arr[0]);  ?>
              <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
              <ul class="wpm_6310_team_style_17_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="wpm_6310_team_style_17_team_content">
            <div class="wpm_6310_team_style_17_title">William</div>
            <div class="wpm_6310_team_style_17_designation">Web Desginer</div>
            <div class="wpm-custom-fields-17">
              <div class="wpm-custom-fields-list-17">
                <div class="wpm-custom-fields-list-label-17">Fax</div>
                <div class="wpm-custom-fields-list-content-17">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-17">
                <div class="wpm-custom-fields-list-label-17"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-17">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-17">
                <div class="wpm-custom-fields-list-label-17"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-17">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_17_description">Lorem ipsum dolor sit amet, consectetur adipiscing.</div>
          </div>

        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_17 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_17_pic_border">
            <div class="wpm_6310_team_style_17_pic">
              <?php $temp = explode("||||", $arr[1]);  ?>
              <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
              <ul class="wpm_6310_team_style_17_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="wpm_6310_team_style_17_team_content">
            <div class="wpm_6310_team_style_17_title">William</div>
            <div class="wpm_6310_team_style_17_designation">Web Desginer</div>
            <div class="wpm-custom-fields-17">
              <div class="wpm-custom-fields-list-17">
                <div class="wpm-custom-fields-list-label-17">Fax</div>
                <div class="wpm-custom-fields-list-content-17">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-17">
                <div class="wpm-custom-fields-list-label-17"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-17">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-17">
                <div class="wpm-custom-fields-list-label-17"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-17">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_17_description">Lorem ipsum dolor sit amet, consectetur adipiscing.</div>
          </div>

        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_17 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_17_pic_border">
            <div class="wpm_6310_team_style_17_pic">
              <?php $temp = explode("||||", $arr[2]);  ?>
              <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">

              <ul class="wpm_6310_team_style_17_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="wpm_6310_team_style_17_team_content">
            <div class="wpm_6310_team_style_17_title">William</div>
            <div class="wpm_6310_team_style_17_designation">Web Desginer</div>
            <div class="wpm-custom-fields-17">
              <div class="wpm-custom-fields-list-17">
                <div class="wpm-custom-fields-list-label-17">Fax</div>
                <div class="wpm-custom-fields-list-content-17">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-17">
                <div class="wpm-custom-fields-list-label-17"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-17">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-17">
                <div class="wpm-custom-fields-list-label-17"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-17">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_17_description">Lorem ipsum dolor sit amet, consectetur adipiscing.</div>
          </div>

        </div>

      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 17
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-17">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 18 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_18 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_18_pic">
            <?php $temp = explode("||||", $arr[0]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <ul class="wpm_6310_team_style_18_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>
          <div class="wpm_6310_team_style_18_team_content">
            <div class="wpm_6310_team_style_18_title">William</div>
            <div class="wpm_6310_team_style_18_designation">Web Desginer</div>
            <div class="wpm-custom-fields-18">
              <div class="wpm-custom-fields-list-18">
                <div class="wpm-custom-fields-list-label-18">Fax</div>
                <div class="wpm-custom-fields-list-content-18">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-18">
                <div class="wpm-custom-fields-list-label-18"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-18">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-18">
                <div class="wpm-custom-fields-list-label-18"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-18">1588100157</div>
              </div>
            </div>
            <?php echo wpm_6310_skills_social(' wpm-6310-p-l-r-10') ?>
            <div class="wpm_6310_team_style_18_description">            
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          </div>
        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_18 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_18_pic">
            <?php $temp = explode("||||", $arr[1]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <ul class="wpm_6310_team_style_18_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>

          <div class="wpm_6310_team_style_18_team_content">
            <div class="wpm_6310_team_style_18_title">William</div>
            <div class="wpm_6310_team_style_18_designation">Web Desginer</div>
            <div class="wpm-custom-fields-18">
              <div class="wpm-custom-fields-list-18">
                <div class="wpm-custom-fields-list-label-18">Fax</div>
                <div class="wpm-custom-fields-list-content-18">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-18">
                <div class="wpm-custom-fields-list-label-18"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-18">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-18">
                <div class="wpm-custom-fields-list-label-18"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-18">1588100157</div>
              </div>
            </div>
            <?php echo wpm_6310_skills_social(' wpm-6310-p-l-r-10') ?>
            <div class="wpm_6310_team_style_18_description">            
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          </div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_18 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_18_pic">
            <?php $temp = explode("||||", $arr[2]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <ul class="wpm_6310_team_style_18_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>

          <div class="wpm_6310_team_style_18_team_content">
            <div class="wpm_6310_team_style_18_title">William</div>
            <div class="wpm_6310_team_style_18_designation">Web Desginer</div>
            <div class="wpm-custom-fields-18">
              <div class="wpm-custom-fields-list-18">
                <div class="wpm-custom-fields-list-label-18">Fax</div>
                <div class="wpm-custom-fields-list-content-18">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-18">
                <div class="wpm-custom-fields-list-label-18"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-18">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-18">
                <div class="wpm-custom-fields-list-label-18"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-18">1588100157</div>
              </div>
            </div>
            <?php echo wpm_6310_skills_social(' wpm-6310-p-l-r-10') ?>
            <div class="wpm_6310_team_style_18_description">             
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          </div>

        </div>

      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 18
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-18">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 19 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_19 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_19_pic">
            <?php $temp = explode("||||", $arr[0]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <ul class="wpm_6310_team_style_19_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>
          <div class="wpm_6310_team_style_19_team_content">
            <div class="wpm_6310_team_style_19_title">William</div>
            <div class="wpm_6310_team_style_19_designation">Web Desginer</div>
            <div class="wpm-custom-fields-19">
              <div class="wpm-custom-fields-list-19">
                <div class="wpm-custom-fields-list-label-19">Fax</div>
                <div class="wpm-custom-fields-list-content-19">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-19">
                <div class="wpm-custom-fields-list-label-19"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-19">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-19">
                <div class="wpm-custom-fields-list-label-19"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-19">1588100157</div>
              </div>
            </div>
            <?php echo wpm_6310_skills_social(' wpm-6310-p-l-r-10') ?>
            <div class="wpm_6310_team_style_19_description">            
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          </div>
        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_19 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_19_pic">
            <?php $temp = explode("||||", $arr[1]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <ul class="wpm_6310_team_style_19_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>

          <div class="wpm_6310_team_style_19_team_content">
            <div class="wpm_6310_team_style_19_title">William</div>
            <div class="wpm_6310_team_style_19_designation">Web Desginer</div>
            <div class="wpm-custom-fields-19">
              <div class="wpm-custom-fields-list-19">
                <div class="wpm-custom-fields-list-label-19">Fax</div>
                <div class="wpm-custom-fields-list-content-19">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-19">
                <div class="wpm-custom-fields-list-label-19"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-19">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-19">
                <div class="wpm-custom-fields-list-label-19"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-19">1588100157</div>
              </div>
            </div>
            <?php echo wpm_6310_skills_social(' wpm-6310-p-l-r-10') ?>
            <div class="wpm_6310_team_style_19_description">            
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          </div>

        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_19 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_19_pic">
            <?php $temp = explode("||||", $arr[2]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <ul class="wpm_6310_team_style_19_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>

          <div class="wpm_6310_team_style_19_team_content">
            <div class="wpm_6310_team_style_19_title">William</div>
            <div class="wpm_6310_team_style_19_designation">Web Desginer</div>
            <div class="wpm-custom-fields-19">
              <div class="wpm-custom-fields-list-19">
                <div class="wpm-custom-fields-list-label-19">Fax</div>
                <div class="wpm-custom-fields-list-content-19">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-19">
                <div class="wpm-custom-fields-list-label-19"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-19">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-19">
                <div class="wpm-custom-fields-list-label-19"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-19">1588100157</div>
              </div>
            </div>
            <?php echo wpm_6310_skills_social(' wpm-6310-p-l-r-10') ?>
            <div class="wpm_6310_team_style_19_description">             
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          </div>
        </div>
      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 19
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-19">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 20 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_20 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_20_pic">
            <?php $temp = explode("||||", $arr[0]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <div class="wpm_6310_team_style_20_img_overlay"></div>
            <ul class="wpm_6310_team_style_20_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>

          <div class="wpm_6310_team_style_20_team_content">
            <div class="wpm_6310_team_style_20_title">William</div>
            <div class="wpm_6310_team_style_20_designation">Web Desginer</div>
            <div class="wpm-custom-fields-20">
              <div class="wpm-custom-fields-list-20">
                <div class="wpm-custom-fields-list-label-20">Fax</div>
                <div class="wpm-custom-fields-list-content-20">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-20">
                <div class="wpm-custom-fields-list-label-20"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-20">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-20">
                <div class="wpm-custom-fields-list-label-20"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-20">1588100157</div>
              </div>
            </div>
            <?php echo wpm_6310_skills_social(' wpm-6310-p-l-r-10') ?>
            <div class="wpm_6310_team_style_20_description">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          </div>

        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_20 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_20_pic">
            <?php $temp = explode("||||", $arr[1]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <div class="wpm_6310_team_style_20_img_overlay"></div>
            <ul class="wpm_6310_team_style_20_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>

          <div class="wpm_6310_team_style_20_team_content">
            <div class="wpm_6310_team_style_20_title">William</div>
            <div class="wpm_6310_team_style_20_designation">Web Desginer</div>
            <div class="wpm-custom-fields-20">
              <div class="wpm-custom-fields-list-20">
                <div class="wpm-custom-fields-list-label-20">Fax</div>
                <div class="wpm-custom-fields-list-content-20">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-20">
                <div class="wpm-custom-fields-list-label-20"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-20">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-20">
                <div class="wpm-custom-fields-list-label-20"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-20">1588100157</div>
              </div>
            </div>
            <?php echo wpm_6310_skills_social(' wpm-6310-p-l-r-10') ?>
            <div class="wpm_6310_team_style_20_description">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          </div>

        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_20 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_20_pic">
            <?php $temp = explode("||||", $arr[2]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <div class="wpm_6310_team_style_20_img_overlay"></div>
            <ul class="wpm_6310_team_style_20_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>

          <div class="wpm_6310_team_style_20_team_content">
            <div class="wpm_6310_team_style_20_title">William</div>
            <div class="wpm_6310_team_style_20_designation">Web Desginer</div>
            <div class="wpm-custom-fields-20">
              <div class="wpm-custom-fields-list-20">
                <div class="wpm-custom-fields-list-label-20">Fax</div>
                <div class="wpm-custom-fields-list-content-20">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-20">
                <div class="wpm-custom-fields-list-label-20"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-20">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-20">
                <div class="wpm-custom-fields-list-label-20"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-20">1588100157</div>
              </div>
            </div>
            <?php echo wpm_6310_skills_social(' wpm-6310-p-l-r-10') ?>
            <div class="wpm_6310_team_style_20_description"> 
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          </div>
        </div>

      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 20
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-20">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>
</div>

<div id="wpm-6310-modal-add" class="wpm-6310-modal" style="display: none">
  <div class="wpm-6310-modal-content wpm-6310-modal-sm">
    <form action="" method="post">
      <div class="wpm-6310-modal-header">
        Create Team
        <div class="wpm-6310-close">&times;</div>
      </div>
      <div class="wpm-6310-modal-body-form">
        <?php wp_nonce_field("wpm-nonce-field") ?>
        <input type="hidden" name="style" id="wpm-style-hidden" />
        <table border="0" width="100%" cellpadding="10" cellspacing="0">
          <tr>
            <td width="50%"><label class="wpm-form-label" for="icon_name">Team Name:</label></td>
            <td><input type="text" required="" name="style_name" id="style_name" value="" class="wpm-form-input"
                placeholder="Team Name" /></td>
          </tr>
          <tr>
            <td><label class="wpm-form-label" for="icon_name">Import team members:</label></td>
            <td>
              <input type="radio" name="import_member" value="1" checked />Yes
              <input type="radio" name="import_member" value="0"  />No
            </td>
          </tr>
        </table>
      </div>
      <div class="wpm-6310-modal-form-footer">
        <button type="button" name="close" class="wpm-btn-danger wpm-pull-right">Close</button>
        <input type="submit" name="submit" class="wpm-btn-primary wpm-pull-right wpm-margin-right-10" value="Save" />
      </div>
    </form>
    <br class="wpm-6310-clear" />
  </div>
</div>


<script>
jQuery(document).ready(function() {
  jQuery("body").on("click", ".wpm_choosen_style", function() {
    jQuery("#wpm-6310-modal-add").fadeIn(500);
    jQuery("#wpm-style-hidden").val(jQuery(this).attr("id"));
    jQuery("body").css({
      "overflow": "hidden"
    });
    return false;
  });

  jQuery("body").on("click", ".wpm-6310-close, .wpm-btn-danger", function() {
    jQuery("#wpm-6310-modal-add").fadeOut(500);
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
    }
  });
  jQuery("body").on("mouseenter mouseleave", ".wpm_6310_hover_img_change", function(e) {
    e.preventDefault();
    var orgImage = jQuery(this).find('img').attr('src');
    var hoverImage = jQuery(this).find('img').attr('data-6310-hover-image');
    if (hoverImage && hoverImage.length > 5) {
      jQuery(this).find('img').attr("src", hoverImage);
      jQuery(this).find('img').attr("data-6310-hover-image", orgImage);
    }
  });
});
</script>