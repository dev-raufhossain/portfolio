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
      $url = admin_url("admin.php?page=wpm-template-21-30&styleid=$redirect_id");
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

  <!-- Template 21 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_21 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_21_pic">
            <?php $temp = explode("||||", $arr[0]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_21_team_content">
            <div class="wpm_6310_team_style_21_title">William</div>
            <div class="wpm_6310_team_style_21_designation">Web Desginer</div>
            <div class="wpm-custom-fields-21">
              <div class="wpm-custom-fields-list-21">
                <div class="wpm-custom-fields-list-label-21">Fax</div>
                <div class="wpm-custom-fields-list-content-21">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-21">
                <div class="wpm-custom-fields-list-label-21"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-21">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-21">
                <div class="wpm-custom-fields-list-label-21"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-21">1588100157</div>
              </div>
            </div>
            <?php echo wpm_6310_skills_social() ?>
            <div class="wpm_6310_team_style_21_description">            
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <ul class="wpm_6310_team_style_21_social">
              <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
              <li><a href=""><i class="fab fa-twitter"></i></a></li>
              <li><a href=""><i class="fab fa-youtube"></i></a></li>
              <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
          </div>

        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_21 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_21_pic">
            <?php $temp = explode("||||", $arr[1]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_21_team_content">
            <div class="wpm_6310_team_style_21_title">William</div>
            <div class="wpm_6310_team_style_21_designation">Web Desginer</div>
            <div class="wpm-custom-fields-21">
              <div class="wpm-custom-fields-list-21">
                <div class="wpm-custom-fields-list-label-21">Fax</div>
                <div class="wpm-custom-fields-list-content-21">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-21">
                <div class="wpm-custom-fields-list-label-21"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-21">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-21">
                <div class="wpm-custom-fields-list-label-21"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-21">1588100157</div>
              </div>
            </div>
            <?php echo wpm_6310_skills_social() ?>
            <div class="wpm_6310_team_style_21_description">            
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <ul class="wpm_6310_team_style_21_social">
              <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
              <li><a href=""><i class="fab fa-twitter"></i></a></li>
              <li><a href=""><i class="fab fa-youtube"></i></a></li>
              <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
          </div>

        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_21 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_21_pic">
            <?php $temp = explode("||||", $arr[2]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_21_team_content">
            <div class="wpm_6310_team_style_21_title">William</div>
            <div class="wpm_6310_team_style_21_designation">Web Desginer</div>
            <div class="wpm-custom-fields-21">
              <div class="wpm-custom-fields-list-21">
                <div class="wpm-custom-fields-list-label-21">Fax</div>
                <div class="wpm-custom-fields-list-content-21">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-21">
                <div class="wpm-custom-fields-list-label-21"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-21">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-21">
                <div class="wpm-custom-fields-list-label-21"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-21">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_21_description">
            <?php echo wpm_6310_skills_social() ?>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <ul class="wpm_6310_team_style_21_social">
              <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
              <li><a href=""><i class="fab fa-twitter"></i></a></li>
              <li><a href=""><i class="fab fa-youtube"></i></a></li>
              <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
          </div>

        </div>

      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 21
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-21">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 22 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_22 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_22_pic">
            <?php $temp = explode("||||", $arr[0]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <ul class="wpm_6310_team_style_22_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>
          <div class="wpm_6310_team_style_22_team_content">
            <div class="wpm_6310_team_style_22_title">William</div>
            <div class="wpm_6310_team_style_22_designation">Web Desginer</div>
            <div class="wpm-custom-fields-22">
              <div class="wpm-custom-fields-list-22">
                <div class="wpm-custom-fields-list-label-22">Fax</div>
                <div class="wpm-custom-fields-list-content-22">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-22">
                <div class="wpm-custom-fields-list-label-22"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-22">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-22">
                <div class="wpm-custom-fields-list-label-22"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-22">1588100157</div>
              </div>
            </div>
            <?php echo wpm_6310_skills_social() ?>
            <div class="wpm_6310_team_style_22_description">            
            Lorem ipsum dolor sit amet, consectetur adipiscing.</div>
          </div>

        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_22 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_22_pic">
            <?php $temp = explode("||||", $arr[1]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <ul class="wpm_6310_team_style_22_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>
          <div class="wpm_6310_team_style_22_team_content">
            <div class="wpm_6310_team_style_22_title">William</div>
            <div class="wpm_6310_team_style_22_designation">Web Desginer</div>
            <div class="wpm-custom-fields-22">
              <div class="wpm-custom-fields-list-22">
                <div class="wpm-custom-fields-list-label-22">Fax</div>
                <div class="wpm-custom-fields-list-content-22">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-22">
                <div class="wpm-custom-fields-list-label-22"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-22">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-22">
                <div class="wpm-custom-fields-list-label-22"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-22">1588100157</div>
              </div>
            </div>
            <?php echo wpm_6310_skills_social() ?>
            <div class="wpm_6310_team_style_22_description">            
              Lorem ipsum dolor sit amet, consectetur adipiscing.</div>
          </div>

        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_22 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_22_pic">
            <?php $temp = explode("||||", $arr[2]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <ul class="wpm_6310_team_style_22_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>
          <div class="wpm_6310_team_style_22_team_content">
            <div class="wpm_6310_team_style_22_title">William</div>
            <div class="wpm_6310_team_style_22_designation">Web Desginer</div>
            <div class="wpm-custom-fields-22">
              <div class="wpm-custom-fields-list-22">
                <div class="wpm-custom-fields-list-label-22">Fax</div>
                <div class="wpm-custom-fields-list-content-22">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-22">
                <div class="wpm-custom-fields-list-label-22"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-22">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-22">
                <div class="wpm-custom-fields-list-label-22"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-22">1588100157</div>
              </div>
            </div>
            <?php echo wpm_6310_skills_social() ?>
            <div class="wpm_6310_team_style_22_description">            
            Lorem ipsum dolor sit amet, consectetur adipiscing.</div>
          </div>
        </div>
      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 22
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-22">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 23 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_23 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[0]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <div class="wpm_6310_team_style_23_team_content">
            <div class="wpm_6310_team_style_23_title">Sara</div>
            <div class="wpm_6310_team_style_23_designation">web designer</div>
            <ul class="wpm_6310_team_style_23_social">
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
        <div class="wpm_6310_team_style_23 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[1]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <div class="wpm_6310_team_style_23_team_content">
            <div class="wpm_6310_team_style_23_title">Sara</div>
            <div class="wpm_6310_team_style_23_designation">web designer</div>
            <ul class="wpm_6310_team_style_23_social">
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
        <div class="wpm_6310_team_style_23 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[2]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <div class="wpm_6310_team_style_23_team_content">
            <div class="wpm_6310_team_style_23_title">Sara</div>
            <div class="wpm_6310_team_style_23_designation">web designer</div>
            <ul class="wpm_6310_team_style_23_social">
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
      Template 23
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-23">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 24 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_24 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[0]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <ul class="wpm_6310_team_style_24_social">
            <?php
            shuffle($icons);
            for ($i = 0; $i < 4; $i++) {
              echo $icons[$i];
            }
            ?>
          </ul>
          <div class="wpm_6310_team_style_24_team_content">
            <div class="wpm_6310_team_style_24_title">Williamson</div>
            <div class="wpm_6310_team_style_24_designation">web developer</div>
          </div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_24 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[1]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <ul class="wpm_6310_team_style_24_social">
            <?php
            shuffle($icons);
            for ($i = 0; $i < 4; $i++) {
              echo $icons[$i];
            }
            ?>
          </ul>
          <div class="wpm_6310_team_style_24_team_content">
            <div class="wpm_6310_team_style_24_title">Williamson</div>
            <div class="wpm_6310_team_style_24_designation">web developer</div>
          </div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_24 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[2]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <ul class="wpm_6310_team_style_24_social">
            <?php
            shuffle($icons);
            for ($i = 0; $i < 4; $i++) {
              echo $icons[$i];
            }
            ?>
          </ul>
          <div class="wpm_6310_team_style_24_team_content">
            <div class="wpm_6310_team_style_24_title">Williamson</div>
            <div class="wpm_6310_team_style_24_designation">web developer</div>
          </div>
        </div>
      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 24
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-24">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 25 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_25 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[0]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">

          <div class="wpm_6310_team_style_25_team_content">
            <div class="wpm_6310_team_style_25_title">Williamson</div>
            <div class="wpm_6310_team_style_25_designation">web developer</div>
            <div class="wpm-custom-fields-25">
              <div class="wpm-custom-fields-list-25">
                <div class="wpm-custom-fields-list-label-25">Fax</div>
                <div class="wpm-custom-fields-list-content-25">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-25">
                <div class="wpm-custom-fields-list-label-25"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-25">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-25">
                <div class="wpm-custom-fields-list-label-25"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-25">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_25_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          </div>
          <ul class="wpm_6310_team_style_25_social">
            <?php
            shuffle($icons);
            for ($i = 0; $i < 4; $i++) {
              echo $icons[$i];
            }
            ?>
          </ul>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_25 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[1]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">

          <div class="wpm_6310_team_style_25_team_content">
            <div class="wpm_6310_team_style_25_title">Williamson</div>
            <div class="wpm_6310_team_style_25_designation">web developer</div>
            <div class="wpm-custom-fields-25">
              <div class="wpm-custom-fields-list-25">
                <div class="wpm-custom-fields-list-label-25">Fax</div>
                <div class="wpm-custom-fields-list-content-25">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-25">
                <div class="wpm-custom-fields-list-label-25"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-25">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-25">
                <div class="wpm-custom-fields-list-label-25"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-25">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_25_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          </div>
          <ul class="wpm_6310_team_style_25_social">
            <?php
            shuffle($icons);
            for ($i = 0; $i < 4; $i++) {
              echo $icons[$i];
            }
            ?>
          </ul>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_25 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[2]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">

          <div class="wpm_6310_team_style_25_team_content">
            <div class="wpm_6310_team_style_25_title">Williamson</div>
            <div class="wpm_6310_team_style_25_designation">web developer</div>
            <div class="wpm-custom-fields-25">
              <div class="wpm-custom-fields-list-25">
                <div class="wpm-custom-fields-list-label-25">Fax</div>
                <div class="wpm-custom-fields-list-content-25">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-25">
                <div class="wpm-custom-fields-list-label-25"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-25">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-25">
                <div class="wpm-custom-fields-list-label-25"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-25">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_25_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          </div>
          <ul class="wpm_6310_team_style_25_social">
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
    <div class="wpm-6310-template-list">
      Template 25
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-25">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 26 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_26 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[0]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">

          <div class="wpm_6310_team_style_26_team_content">
            <div class="wpm_6310_team_style_26_title">Williamson</div>
            <div class="wpm_6310_team_style_26_designation">web developer</div>
            <ul class="wpm_6310_team_style_26_social">
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
        <div class="wpm_6310_team_style_26 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[1]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">

          <div class="wpm_6310_team_style_26_team_content">
            <div class="wpm_6310_team_style_26_title">Williamson</div>
            <div class="wpm_6310_team_style_26_designation">web developer</div>
            <ul class="wpm_6310_team_style_26_social">
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
        <div class="wpm_6310_team_style_26 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[2]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">

          <div class="wpm_6310_team_style_26_team_content">
            <div class="wpm_6310_team_style_26_title">Williamson</div>
            <div class="wpm_6310_team_style_26_designation">web developer</div>
            <ul class="wpm_6310_team_style_26_social">
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
      Template 26
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-26">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 27 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_27 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[0]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <ul class="wpm_6310_team_style_27_social">
            <?php
            shuffle($icons);
            for ($i = 0; $i < 4; $i++) {
              echo $icons[$i];
            }
            ?>
          </ul>
          <div class="wpm_6310_team_style_27_team_content">
            <div class="wpm_6310_team_style_27_title">Sara</div>
            <div class="wpm_6310_team_style_27_designation">web designer</div>

          </div>

        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_27 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[1]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <ul class="wpm_6310_team_style_27_social">
            <?php
            shuffle($icons);
            for ($i = 0; $i < 4; $i++) {
              echo $icons[$i];
            }
            ?>
          </ul>
          <div class="wpm_6310_team_style_27_team_content">
            <div class="wpm_6310_team_style_27_title">Sara</div>
            <div class="wpm_6310_team_style_27_designation">web designer</div>

          </div>

        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_27 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[2]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <ul class="wpm_6310_team_style_27_social">
            <?php
            shuffle($icons);
            for ($i = 0; $i < 4; $i++) {
              echo $icons[$i];
            }
            ?>
          </ul>
          <div class="wpm_6310_team_style_27_team_content">
            <div class="wpm_6310_team_style_27_title">Sara</div>
            <div class="wpm_6310_team_style_27_designation">web designer</div>

          </div>

        </div>
      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 27
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-27">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 28 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_28">
          <div class="wpm_6310_team_style_28_pic">
            <?php $temp = explode("||||", $arr[0]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_28_team_content">
            <div class="wpm_6310_team_style_28_box_content">
              <div class="wpm_6310_team_style_28_title">Williamson</div>
              <div class="wpm_6310_team_style_28_designation">web developer</div>
              <div class="wpm-custom-fields-28">
                <div class="wpm-custom-fields-list-28">
                  <div class="wpm-custom-fields-list-label-28">Fax</div>
                  <div class="wpm-custom-fields-list-content-28">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-28">
                  <div class="wpm-custom-fields-list-label-28"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-28">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-28">
                  <div class="wpm-custom-fields-list-label-28"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-28">1588100157</div>
                </div>
              </div>
              <div class="wpm_6310_team_style_28_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_28_social">
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
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_28">
          <div class="wpm_6310_team_style_28_pic">
            <?php $temp = explode("||||", $arr[1]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_28_team_content">
            <div class="wpm_6310_team_style_28_box_content">
              <div class="wpm_6310_team_style_28_title">Williamson</div>
              <div class="wpm_6310_team_style_28_designation">web developer</div>
              <div class="wpm-custom-fields-28">
                <div class="wpm-custom-fields-list-28">
                  <div class="wpm-custom-fields-list-label-28">Fax</div>
                  <div class="wpm-custom-fields-list-content-28">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-28">
                  <div class="wpm-custom-fields-list-label-28"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-28">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-28">
                  <div class="wpm-custom-fields-list-label-28"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-28">1588100157</div>
                </div>
              </div>
              <div class="wpm_6310_team_style_28_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_28_social">
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
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_28">
          <div class="wpm_6310_team_style_28_pic">
            <?php $temp = explode("||||", $arr[2]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_28_team_content">
            <div class="wpm_6310_team_style_28_box_content">
              <div class="wpm_6310_team_style_28_title">Williamson</div>
              <div class="wpm_6310_team_style_28_designation">web developer</div>
              <div class="wpm-custom-fields-28">
                <div class="wpm-custom-fields-list-28">
                  <div class="wpm-custom-fields-list-label-28">Fax</div>
                  <div class="wpm-custom-fields-list-content-28">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-28">
                  <div class="wpm-custom-fields-list-label-28"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-28">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-28">
                  <div class="wpm-custom-fields-list-label-28"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-28">1588100157</div>
                </div>
              </div>
              <div class="wpm_6310_team_style_28_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_28_social">
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
    </div>
    <div class="wpm-6310-template-list">
      Template 28
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-28">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 29 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_29 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_29_pic">
            <?php $temp = explode("||||", $arr[0]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <ul class="wpm_6310_team_style_29_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>
          <div class="wpm_6310_team_style_29_title">Sara</div>
          <div class="wpm_6310_team_style_29_designation">web designer</div>
          <div class="wpm-custom-fields-29">
            <div class="wpm-custom-fields-list-29">
              <div class="wpm-custom-fields-list-label-29">Fax</div>
              <div class="wpm-custom-fields-list-content-29">03424387263</div>
            </div>
            <div class="wpm-custom-fields-list-29">
              <div class="wpm-custom-fields-list-label-29"><i class="far fa-address-card"></i></div>
              <div class="wpm-custom-fields-list-content-29">Dhaka, Bangladesh</div>
            </div>
            <div class="wpm-custom-fields-list-29">
              <div class="wpm-custom-fields-list-label-29"><i class="fas fa-phone-square"></i></div>
              <div class="wpm-custom-fields-list-content-29">1588100157</div>
            </div>
          </div>
          <?php echo wpm_6310_skills_social(' wpm-6310-p-l-r-10') ?>
          <div class="wpm_6310_team_style_29_description">         
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_29 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_29_pic">
            <?php $temp = explode("||||", $arr[1]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <ul class="wpm_6310_team_style_29_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>
          <div class="wpm_6310_team_style_29_title">Sara</div>
          <div class="wpm_6310_team_style_29_designation">web designer</div>
          <div class="wpm-custom-fields-29">
            <div class="wpm-custom-fields-list-29">
              <div class="wpm-custom-fields-list-label-29">Fax</div>
              <div class="wpm-custom-fields-list-content-29">03424387263</div>
            </div>
            <div class="wpm-custom-fields-list-29">
              <div class="wpm-custom-fields-list-label-29"><i class="far fa-address-card"></i></div>
              <div class="wpm-custom-fields-list-content-29">Dhaka, Bangladesh</div>
            </div>
            <div class="wpm-custom-fields-list-29">
              <div class="wpm-custom-fields-list-label-29"><i class="fas fa-phone-square"></i></div>
              <div class="wpm-custom-fields-list-content-29">1588100157</div>
            </div>
          </div>
          <?php echo wpm_6310_skills_social(' wpm-6310-p-l-r-10') ?>
          <div class="wpm_6310_team_style_29_description">          
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_29 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_29_pic">
            <?php $temp = explode("||||", $arr[2]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <ul class="wpm_6310_team_style_29_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>
          <div class="wpm_6310_team_style_29_title">Sara</div>
          <div class="wpm_6310_team_style_29_designation">web designer</div>
          <div class="wpm-custom-fields-29">
            <div class="wpm-custom-fields-list-29">
              <div class="wpm-custom-fields-list-label-29">Fax</div>
              <div class="wpm-custom-fields-list-content-29">03424387263</div>
            </div>
            <div class="wpm-custom-fields-list-29">
              <div class="wpm-custom-fields-list-label-29"><i class="far fa-address-card"></i></div>
              <div class="wpm-custom-fields-list-content-29">Dhaka, Bangladesh</div>
            </div>
            <div class="wpm-custom-fields-list-29">
              <div class="wpm-custom-fields-list-label-29"><i class="fas fa-phone-square"></i></div>
              <div class="wpm-custom-fields-list-content-29">1588100157</div>
            </div>
          </div>
          <?php echo wpm_6310_skills_social(' wpm-6310-p-l-r-10') ?>
          <div class="wpm_6310_team_style_29_description">          
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
        </div>
      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 29
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-29">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 30 -->

  <?php shuffle($arr); ?>
  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_30">
          <div class="wpm_6310_team_style_30_pic">
            <?php $temp = explode("||||", $arr[0]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_30_team_content">
            <div class="wpm_6310_team_style_30_box_content">
              <div class="wpm_6310_team_style_30_title">Williamson</div>
              <div class="wpm_6310_team_style_30_designation">web developer</div>
              <div class="wpm-custom-fields-30">
                <div class="wpm-custom-fields-list-30">
                  <div class="wpm-custom-fields-list-label-30">Fax</div>
                  <div class="wpm-custom-fields-list-content-30">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-30">
                  <div class="wpm-custom-fields-list-label-30"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-30">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-30">
                  <div class="wpm-custom-fields-list-label-30"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-30">1588100157</div>
                </div>
              </div>
              <div class="wpm_6310_team_style_30_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Sed sit amet ipsum ut quam faucibus dictum a sit amet lorem.</div>

              <ul class="wpm_6310_team_style_30_social">
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
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_30">
            <div class="wpm_6310_team_style_30_pic">
              <?php $temp = explode("||||", $arr[1]);  ?>
              <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            </div>
          <div class="wpm_6310_team_style_30_team_content">
            <div class="wpm_6310_team_style_30_box_content">
              <div class="wpm_6310_team_style_30_title">Williamson</div>
              <div class="wpm_6310_team_style_30_designation">web developer</div>
              <div class="wpm-custom-fields-30">
                <div class="wpm-custom-fields-list-30">
                  <div class="wpm-custom-fields-list-label-30">Fax</div>
                  <div class="wpm-custom-fields-list-content-30">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-30">
                  <div class="wpm-custom-fields-list-label-30"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-30">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-30">
                  <div class="wpm-custom-fields-list-label-30"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-30">1588100157</div>
                </div>
              </div>
              <div class="wpm_6310_team_style_30_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Sed sit amet ipsum ut quam faucibus dictum a sit amet lorem.</div>

              <ul class="wpm_6310_team_style_30_social">
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
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_30">
          <div class="wpm_6310_team_style_30_pic">
            <?php $temp = explode("||||", $arr[2]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_30_team_content">
            <div class="wpm_6310_team_style_30_box_content">
              <div class="wpm_6310_team_style_30_title">Williamson</div>
              <div class="wpm_6310_team_style_30_designation">web developer</div>
              <div class="wpm-custom-fields-30">
                <div class="wpm-custom-fields-list-30">
                  <div class="wpm-custom-fields-list-label-30">Fax</div>
                  <div class="wpm-custom-fields-list-content-30">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-30">
                  <div class="wpm-custom-fields-list-label-30"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-30">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-30">
                  <div class="wpm-custom-fields-list-label-30"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-30">1588100157</div>
                </div>
              </div>
              <div class="wpm_6310_team_style_30_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Sed sit amet ipsum ut quam faucibus dictum a sit amet lorem.</div>

              <ul class="wpm_6310_team_style_30_social">
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
    </div>
    <div class="wpm-6310-template-list">
      Template 30
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-30">Create Team</button>
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