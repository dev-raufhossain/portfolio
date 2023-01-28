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
      $url = admin_url("admin.php?page=wpm-template-31-40&styleid=$redirect_id");
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
  <!-- Temaplate 31 -->
  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_31_preview wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_31_preview_pic">
            <div class="wpm_6310_team_style_31_preview_pic_container">
              <?php $temp = explode("||||", $arr[0]);  ?>
              <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            </div>
            <div class="wpm_6310_team_style_31_preview_pic_overlay">
              <div class="wpm_6310_team_style_31_preview_pic_overlay_button">
                View More...
              </div>
            </div>
          </div>
          <figcaption>
            <div class="wpm_6310_team_style_31_preview_caption">
              <div class="wpm_6310_team_style_31_preview_designation">Web Developer</div>
              <div class="wpm_6310_team_style_31_preview_title">Adam Smith</div>
              <div class="wpm-custom-fields-31-preview">
                <div class="wpm-custom-fields-list-31-preview">
                  <div class="wpm-custom-fields-list-label-31-preview">Fax</div>
                  <div class="wpm-custom-fields-list-content-31-preview">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-31-preview">
                  <div class="wpm-custom-fields-list-label-31-preview"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-31-preview">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-31-preview">
                  <div class="wpm-custom-fields-list-label-31-preview"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-31-preview">1588100157</div>
                </div>
              </div>
              <?php echo wpm_6310_skills_social(' wpm-6310-p-l-r-10') ?>
              <div class="wpm_6310_team_style_31_preview_description">             
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_31_preview_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                    echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </figcaption>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_31_preview wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_31_preview_pic">
            <div class="wpm_6310_team_style_31_preview_pic_container">
              <?php $temp = explode("||||", $arr[1]);  ?>
              <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            </div>
            <div class="wpm_6310_team_style_31_preview_pic_overlay">
              <div class="wpm_6310_team_style_31_preview_pic_overlay_button">
                View More...
              </div>
            </div>
          </div>
          <figcaption>
            <div class="wpm_6310_team_style_31_preview_caption">
              <div class="wpm_6310_team_style_31_preview_designation">Web Developer</div>
              <div class="wpm_6310_team_style_31_preview_title">Adam Smith</div>
              <div class="wpm-custom-fields-31-preview">
                <div class="wpm-custom-fields-list-31-preview">
                  <div class="wpm-custom-fields-list-label-31-preview">Fax</div>
                  <div class="wpm-custom-fields-list-content-31-preview">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-31-preview">
                  <div class="wpm-custom-fields-list-label-31-preview"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-31-preview">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-31-preview">
                  <div class="wpm-custom-fields-list-label-31-preview"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-31-preview">1588100157</div>
                </div>
              </div>
              <?php echo wpm_6310_skills_social(' wpm-6310-p-l-r-10') ?>
              <div class="wpm_6310_team_style_31_preview_description">             
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_31_preview_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                    echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </figcaption>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_31_preview wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_31_preview_pic">
            <div class="wpm_6310_team_style_31_preview_pic_container">
              <?php $temp = explode("||||", $arr[2]);  ?>
              <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            </div>
            <div class="wpm_6310_team_style_31_preview_pic_overlay">
              <div class="wpm_6310_team_style_31_preview_pic_overlay_button">
                View More...
              </div>
            </div>
          </div>
          <figcaption>
            <div class="wpm_6310_team_style_31_preview_caption">
              <div class="wpm_6310_team_style_31_preview_designation">Web Developer</div>
              <div class="wpm_6310_team_style_31_preview_title">Adam Smith</div>
              <div class="wpm-custom-fields-31-preview">
                <div class="wpm-custom-fields-list-31-preview">
                  <div class="wpm-custom-fields-list-label-31-preview">Fax</div>
                  <div class="wpm-custom-fields-list-content-31-preview">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-31-preview">
                  <div class="wpm-custom-fields-list-label-31-preview"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-31-preview">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-31-preview">
                  <div class="wpm-custom-fields-list-label-31-preview"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-31-preview">1588100157</div>
                </div>
              </div>
              <?php echo wpm_6310_skills_social(' wpm-6310-p-l-r-10') ?>
              <div class="wpm_6310_team_style_31_preview_description">             
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_31_preview_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                    echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </figcaption>
        </div>
      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 31 <small>(Single Effect)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-31">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>
    <!-- template 32 -->
    <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_32_preview wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_32">
            <div class="wpm_6310_team_style_32_wrapper">
              <div class="wpm_6310_team_style_32_img">
                <?php $temp = explode("||||", $arr[1]);  ?>
                <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
              </div>
            </div>
            <div class="wpm_6310_team_style_32_title">Williamson</div>
            <div class="wpm_6310_team_style_32_post">Web Developer</div>
            <figcaption>
              <div class="wpm_6310_team_style_32_preview_caption">
                <div class="wpm-custom-fields-32-preview">
                  <div class="wpm-custom-fields-list-32-preview">
                    <div class="wpm-custom-fields-list-label-32-preview">Fax</div>
                    <div class="wpm-custom-fields-list-content-32-preview">03424387263</div>
                  </div>
                  <div class="wpm-custom-fields-list-32-preview">
                    <div class="wpm-custom-fields-list-label-32-preview"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-32-preview">Dhaka, Bangladesh</div>
                  </div>
                  <div class="wpm-custom-fields-list-32-preview">
                    <div class="wpm-custom-fields-list-label-32-preview"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-32-preview">1588100157</div>
                  </div>
                </div>
              </div>
            </figcaption>
            <?php echo wpm_6310_skills_social(' wpm-6310-p-l-r-10') ?>
            <div class="wpm_6310_team_style_32_description">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </div>
            <ul class="wpm_6310_team_style_32_preview_social">
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
        <div class="wpm_6310_team_style_32_preview wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_32">
            <div class="wpm_6310_team_style_32_wrapper">
              <div class="wpm_6310_team_style_32_img">
                <?php $temp = explode("||||", $arr[2]);  ?>
                <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
              </div>
            </div>
            <div class="wpm_6310_team_style_32_title">Williamson</div>
            <div class="wpm_6310_team_style_32_post">Web Developer</div>
            <figcaption>
              <div class="wpm_6310_team_style_32_preview_caption">
                <div class="wpm-custom-fields-32-preview">
                  <div class="wpm-custom-fields-list-32-preview">
                    <div class="wpm-custom-fields-list-label-32-preview">Fax</div>
                    <div class="wpm-custom-fields-list-content-32-preview">03424387263</div>
                  </div>
                  <div class="wpm-custom-fields-list-32-preview">
                    <div class="wpm-custom-fields-list-label-32-preview"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-32-preview">Dhaka, Bangladesh</div>
                  </div>
                  <div class="wpm-custom-fields-list-32-preview">
                    <div class="wpm-custom-fields-list-label-32-preview"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-32-preview">1588100157</div>
                  </div>
                </div>
              </div>
            </figcaption>
            <?php echo wpm_6310_skills_social(' wpm-6310-p-l-r-10') ?>
            <div class="wpm_6310_team_style_32_description">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </div>
            <ul class="wpm_6310_team_style_32_preview_social">
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
        <div class="wpm_6310_team_style_32_preview wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_32">
            <div class="wpm_6310_team_style_32_wrapper">
              <div class="wpm_6310_team_style_32_img">
                <?php $temp = explode("||||", $arr[0]);  ?>
                <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
              </div>
            </div>
            <div class="wpm_6310_team_style_32_title">Williamson</div>
            <div class="wpm_6310_team_style_32_post">Web Developer</div>
            <figcaption>
              <div class="wpm_6310_team_style_32_preview_caption">
                <div class="wpm-custom-fields-32-preview">
                  <div class="wpm-custom-fields-list-32-preview">
                    <div class="wpm-custom-fields-list-label-32-preview">Fax</div>
                    <div class="wpm-custom-fields-list-content-32-preview">03424387263</div>
                  </div>
                  <div class="wpm-custom-fields-list-32-preview">
                    <div class="wpm-custom-fields-list-label-32-preview"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-32-preview">Dhaka, Bangladesh</div>
                  </div>
                  <div class="wpm-custom-fields-list-32-preview">
                    <div class="wpm-custom-fields-list-label-32-preview"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-32-preview">1588100157</div>
                  </div>
                </div>
              </div>
            </figcaption>
            <?php echo wpm_6310_skills_social(' wpm-6310-p-l-r-10') ?>
            <div class="wpm_6310_team_style_32_description">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </div>
            <ul class="wpm_6310_team_style_32_preview_social">
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
      Template 32 <small>(Single Effect)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-32">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>
   <!-- template 33 -->

   <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_33_preview wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_33">
            <div class="wpm_6310_team_style_33_wrapper">
              <div class="wpm_6310_team_style_33_img">
                <?php $temp = explode("||||", $arr[1]);  ?>
                <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
              </div>
            </div>
            <div class="wpm_6310_team_style_33_title">Williamson</div>
            <div class="wpm_6310_team_style_33_designation">Web Developer</div>
            <div class="wpm_6310_team_style_33_description">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </div>
            <figcaption>
              <div class="wpm_6310_team_style_33_preview_caption">
                <div class="wpm-custom-fields-32-preview">
                  <div class="wpm-custom-fields-list-33-preview">
                    <div class="wpm-custom-fields-list-label-33-preview">Fax</div>
                    <div class="wpm-custom-fields-list-content-33-preview">03424387263</div>
                  </div>
                  <div class="wpm-custom-fields-list-33-preview">
                    <div class="wpm-custom-fields-list-label-33-preview"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-33-preview">Dhaka, Bangladesh</div>
                  </div>
                  <div class="wpm-custom-fields-list-33-preview">
                    <div class="wpm-custom-fields-list-label-33-preview"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-33-preview">1588100157</div>
                  </div>
                </div>
              </div>
            </figcaption>
            <?php echo wpm_6310_skills_social(' wpm-6310-p-l-r-10') ?>
            <ul class="wpm_6310_team_style_33_preview_social">
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
        <div class="wpm_6310_team_style_33_preview wpm_6310_hover_img_change">
        <div class="wpm_6310_team_style_33">
            <div class="wpm_6310_team_style_33_wrapper">
              <div class="wpm_6310_team_style_33_img">
                <?php $temp = explode("||||", $arr[3]);  ?>
                <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
              </div>
            </div>
            <div class="wpm_6310_team_style_33_title">Williamson</div>
            <div class="wpm_6310_team_style_33_designation">Web Developer</div>
            <div class="wpm_6310_team_style_33_description">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </div>
            <figcaption>
              <div class="wpm_6310_team_style_33_preview_caption">
                <div class="wpm-custom-fields-32-preview">
                  <div class="wpm-custom-fields-list-33-preview">
                    <div class="wpm-custom-fields-list-label-33-preview">Fax</div>
                    <div class="wpm-custom-fields-list-content-33-preview">03424387263</div>
                  </div>
                  <div class="wpm-custom-fields-list-33-preview">
                    <div class="wpm-custom-fields-list-label-33-preview"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-33-preview">Dhaka, Bangladesh</div>
                  </div>
                  <div class="wpm-custom-fields-list-33-preview">
                    <div class="wpm-custom-fields-list-label-33-preview"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-33-preview">1588100157</div>
                  </div>
                </div>
              </div>
            </figcaption>
            <?php echo wpm_6310_skills_social(' wpm-6310-p-l-r-10') ?>
            <ul class="wpm_6310_team_style_33_preview_social">
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
        <div class="wpm_6310_team_style_33_preview wpm_6310_hover_img_change">
        <div class="wpm_6310_team_style_33">
            <div class="wpm_6310_team_style_33_wrapper">
              <div class="wpm_6310_team_style_33_img">
                <?php $temp = explode("||||", $arr[2]);  ?>
                <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
              </div>
            </div>
            <div class="wpm_6310_team_style_33_title">Williamson</div>
            <div class="wpm_6310_team_style_33_designation">Web Developer</div>
            <div class="wpm_6310_team_style_33_description">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </div>
            <figcaption>
              <div class="wpm_6310_team_style_33_preview_caption">
                <div class="wpm-custom-fields-32-preview">
                  <div class="wpm-custom-fields-list-33-preview">
                    <div class="wpm-custom-fields-list-label-33-preview">Fax</div>
                    <div class="wpm-custom-fields-list-content-33-preview">03424387263</div>
                  </div>
                  <div class="wpm-custom-fields-list-33-preview">
                    <div class="wpm-custom-fields-list-label-33-preview"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-33-preview">Dhaka, Bangladesh</div>
                  </div>
                  <div class="wpm-custom-fields-list-33-preview">
                    <div class="wpm-custom-fields-list-label-33-preview"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-33-preview">1588100157</div>
                  </div>
                </div>
              </div>
            </figcaption>
            <?php echo wpm_6310_skills_social(' wpm-6310-p-l-r-10') ?>
            <ul class="wpm_6310_team_style_33_preview_social">
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
      Template 33 <small>(Single Effect)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-33">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    
    <br class="wpm-6310-clear" />
  </div>
  <!-- template 34 -->

  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-2">
        <div class="wpm_6310_team_style_34_preview wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_34_preview">
            <div class="wpm_6310_team_style_34_preview_wrapper">
              <div class="wpm_6310_team_style_34_preview_img">
                <?php $temp = explode("||||", $arr[1]);  ?>
                <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
              </div>
              <div class="wpm_6310_team_style_34_preview-right-section">
                <div class="wpm_6310_team_style_34_preview_title">Williamson</div>
                <div class="wpm_6310_team_style_34_preview_designation">Web Developer</div>
                <ul class="wpm_6310_team_style_34_preview_social">
                  <?php
                  shuffle($icons);
                  for ($i = 0; $i < 4; $i++) {
                    echo $icons[$i];
                  }
                  ?>
                </ul>
                <div class="wpm_6310_team_style_34_preview_description">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </div>
                <figcaption>
                  <div class="wpm_6310_team_style_34_preview_caption">
                    <div class="wpm-custom-fields-34_preview">
                      <div class="wpm-custom-fields-list-34_preview">
                        <div class="wpm-custom-fields-list-label-34_preview">Fax</div>
                        <div class="wpm-custom-fields-list-content-34_preview">03424387263</div>
                      </div>
                      <div class="wpm-custom-fields-list-34_preview">
                        <div class="wpm-custom-fields-list-label-34_preview"><i class="far fa-address-card"></i></div>
                        <div class="wpm-custom-fields-list-content-34_preview">Dhaka, Bangladesh</div>
                      </div>
                      <div class="wpm-custom-fields-list-34_preview">
                        <div class="wpm-custom-fields-list-label-34_preview"><i class="fas fa-phone-square"></i></div>
                        <div class="wpm-custom-fields-list-content-34_preview">1588100157</div>
                      </div>
                    </div>
                  </div>
                  <?php echo wpm_6310_skills_social() ?>
                </figcaption>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="wpm-6310-col-2">
        <div class="wpm_6310_team_style_34_preview wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_34_preview">
            <div class="wpm_6310_team_style_34_preview_wrapper">
              <div class="wpm_6310_team_style_34_preview_img">
                <?php $temp = explode("||||", $arr[2]);  ?>
                <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
              </div>
              <div class="wpm_6310_team_style_34_preview-right-section">
                <div class="wpm_6310_team_style_34_preview_title">Williamson</div>
                <div class="wpm_6310_team_style_34_preview_designation">Web Developer</div>
                <ul class="wpm_6310_team_style_34_preview_social">
                  <?php
                  shuffle($icons);
                  for ($i = 0; $i < 4; $i++) {
                    echo $icons[$i];
                  }
                  ?>
                </ul>
                <div class="wpm_6310_team_style_34_preview_description">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </div>
                <figcaption>
                  <div class="wpm_6310_team_style_34_preview_caption">
                    <div class="wpm-custom-fields-34_preview">
                      <div class="wpm-custom-fields-list-34_preview">
                        <div class="wpm-custom-fields-list-label-34_preview">Fax</div>
                        <div class="wpm-custom-fields-list-content-34_preview">03424387263</div>
                      </div>
                      <div class="wpm-custom-fields-list-34_preview">
                        <div class="wpm-custom-fields-list-label-34_preview"><i class="far fa-address-card"></i></div>
                        <div class="wpm-custom-fields-list-content-34_preview">Dhaka, Bangladesh</div>
                      </div>
                      <div class="wpm-custom-fields-list-34_preview">
                        <div class="wpm-custom-fields-list-label-34_preview"><i class="fas fa-phone-square"></i></div>
                        <div class="wpm-custom-fields-list-content-34_preview">1588100157</div>
                      </div>
                    </div>
                  </div>
                  <?php echo wpm_6310_skills_social() ?>
                </figcaption>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 34 <small>(Single Effect)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-34">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>


  <!-- template 35 -->
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_35 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[0]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_35_caption">
              <div class="wpm_6310_team_style_35_designation">Web Developer</div>
              <div class="wpm_6310_team_style_35_title">Adam Smith</div>
              <div class="wpm-custom-fields-35">
                <div class="wpm-custom-fields-list-35">
                  <div class="wpm-custom-fields-list-label-35">Fax</div>
                  <div class="wpm-custom-fields-list-content-35">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-35">
                  <div class="wpm-custom-fields-list-label-35"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-35">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-35">
                  <div class="wpm-custom-fields-list-label-35"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-35">1588100157</div>
                </div>
              </div>
              <?php echo wpm_6310_skills_social() ?>
              <div class="wpm_6310_team_style_35_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_35_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </figcaption>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_35 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[1]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_35_caption">
              <div class="wpm_6310_team_style_35_designation">Web Developer</div>
              <div class="wpm_6310_team_style_35_title">Adam Smith</div>
              <div class="wpm-custom-fields-35">
                <div class="wpm-custom-fields-list-35">
                  <div class="wpm-custom-fields-list-label-35">Fax</div>
                  <div class="wpm-custom-fields-list-content-35">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-35">
                  <div class="wpm-custom-fields-list-label-35"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-35">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-35">
                  <div class="wpm-custom-fields-list-label-35"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-35">1588100157</div>
                </div>
              </div>
              <?php echo wpm_6310_skills_social() ?>
              <div class="wpm_6310_team_style_35_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_35_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </figcaption>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_35 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[2]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_35_caption">
              <div class="wpm_6310_team_style_35_designation">Web Developer</div>
              <div class="wpm_6310_team_style_35_title">Adam Smith</div>
              <div class="wpm-custom-fields-35">
                <div class="wpm-custom-fields-list-35">
                  <div class="wpm-custom-fields-list-label-35">Fax</div>
                  <div class="wpm-custom-fields-list-content-35">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-35">
                  <div class="wpm-custom-fields-list-label-35"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-35">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-35">
                  <div class="wpm-custom-fields-list-label-35"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-35">1588100157</div>
                </div>
              </div>
              <?php echo wpm_6310_skills_social() ?>
              <div class="wpm_6310_team_style_35_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_35_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </figcaption>
        </div>
      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 35 <small>(Single Effect)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-35">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>


  <!-- template 36 -->
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_36 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[0]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_36_caption">
              <div class="wpm_6310_team_style_36_designation">Web Developer</div>
              <div class="wpm_6310_team_style_36_title">Adam Smith</div>
              <div class="wpm-custom-fields-36">
                <div class="wpm-custom-fields-list-36">
                  <div class="wpm-custom-fields-list-label-36">Fax</div>
                  <div class="wpm-custom-fields-list-content-36">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-36">
                  <div class="wpm-custom-fields-list-label-36"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-36">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-36">
                  <div class="wpm-custom-fields-list-label-36"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-36">1588100157</div>
                </div>
              </div>
              <?php echo wpm_6310_skills_social() ?>
              <div class="wpm_6310_team_style_36_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_36_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </figcaption>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_36 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[1]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_36_caption">
              <div class="wpm_6310_team_style_36_designation">Web Developer</div>
              <div class="wpm_6310_team_style_36_title">Adam Smith</div>
              <div class="wpm-custom-fields-36">
                <div class="wpm-custom-fields-list-36">
                  <div class="wpm-custom-fields-list-label-36">Fax</div>
                  <div class="wpm-custom-fields-list-content-36">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-36">
                  <div class="wpm-custom-fields-list-label-36"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-36">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-36">
                  <div class="wpm-custom-fields-list-label-36"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-36">1588100157</div>
                </div>
              </div>
              <?php echo wpm_6310_skills_social() ?>
              <div class="wpm_6310_team_style_36_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_36_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </figcaption>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_36 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[2]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_36_caption">
              <div class="wpm_6310_team_style_36_designation">Web Developer</div>
              <div class="wpm_6310_team_style_36_title">Adam Smith</div>
              <div class="wpm-custom-fields-36">
                <div class="wpm-custom-fields-list-36">
                  <div class="wpm-custom-fields-list-label-36">Fax</div>
                  <div class="wpm-custom-fields-list-content-36">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-36">
                  <div class="wpm-custom-fields-list-label-36"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-36">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-36">
                  <div class="wpm-custom-fields-list-label-36"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-36">1588100157</div>
                </div>
              </div>
              <?php echo wpm_6310_skills_social() ?>
              <div class="wpm_6310_team_style_36_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_36_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </figcaption>
        </div>
      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 36 <small>(Single Effect)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-36">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>


  <!-- template 37 -->
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_37 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[0]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_37_caption">
              <div class="wpm_6310_team_style_37_designation">Web Developer</div>
              <div class="wpm_6310_team_style_37_title">Adam Smith</div>
              <div class="wpm-custom-fields-37">
                <div class="wpm-custom-fields-list-37">
                  <div class="wpm-custom-fields-list-label-37">Fax</div>
                  <div class="wpm-custom-fields-list-content-37">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-37">
                  <div class="wpm-custom-fields-list-label-37"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-37">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-37">
                  <div class="wpm-custom-fields-list-label-37"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-37">1588100157</div>
                </div>
              </div>
              <?php echo wpm_6310_skills_social() ?>
              <div class="wpm_6310_team_style_37_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_37_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </figcaption>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_37 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[1]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_37_caption">
              <div class="wpm_6310_team_style_37_designation">Web Developer</div>
              <div class="wpm_6310_team_style_37_title">Adam Smith</div>
              <div class="wpm-custom-fields-37">
                <div class="wpm-custom-fields-list-37">
                  <div class="wpm-custom-fields-list-label-37">Fax</div>
                  <div class="wpm-custom-fields-list-content-37">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-37">
                  <div class="wpm-custom-fields-list-label-37"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-37">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-37">
                  <div class="wpm-custom-fields-list-label-37"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-37">1588100157</div>
                </div>
              </div>
              <?php echo wpm_6310_skills_social() ?>
              <div class="wpm_6310_team_style_37_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_37_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </figcaption>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_37 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[2]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_37_caption">
              <div class="wpm_6310_team_style_37_designation">Web Developer</div>
              <div class="wpm_6310_team_style_37_title">Adam Smith</div>
              <div class="wpm-custom-fields-37">
                <div class="wpm-custom-fields-list-37">
                  <div class="wpm-custom-fields-list-label-37">Fax</div>
                  <div class="wpm-custom-fields-list-content-37">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-37">
                  <div class="wpm-custom-fields-list-label-37"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-37">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-37">
                  <div class="wpm-custom-fields-list-label-37"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-37">1588100157</div>
                </div>
              </div>
              <?php echo wpm_6310_skills_social() ?>
              <div class="wpm_6310_team_style_37_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_37_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </figcaption>
        </div>
      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 37 <small>(Single Effect)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-37">Create Team</button>
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