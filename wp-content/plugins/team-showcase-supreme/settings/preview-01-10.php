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
         $url = admin_url("admin.php?page=wpm-template-01-10&styleid=$redirect_id");
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

  <!-- Temaplate 01 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
      <div class="wpm_6310_team_style_01 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[0]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_01_caption">
              <div class="wpm_6310_team_style_01_designation">Web Developer</div>
              <div class="wpm_6310_team_style_01_title">Adam Smith</div>
              <div class="wpm-custom-fields-01">
                <div class="wpm-custom-fields-list-01">
                    <div class="wpm-custom-fields-list-label-01">Fax</div>
                    <div class="wpm-custom-fields-list-content-01">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-01">
                    <div class="wpm-custom-fields-list-label-01"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-01">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-01">
                    <div class="wpm-custom-fields-list-label-01"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-01">1588100157</div>
                </div>
              </div>
              <?php echo wpm_6310_skills_social() ?>
              <div class="wpm_6310_team_style_01_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_01_social">
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
      <div class="wpm_6310_team_style_01 wpm_6310_hover_img_change">
        <?php $temp = explode("||||", $arr[1]);  ?>
        <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_01_caption">
              <div class="wpm_6310_team_style_01_designation">Web Developer</div>
              <div class="wpm_6310_team_style_01_title">Adam Smith</div>
              <div class="wpm-custom-fields-01">
                <div class="wpm-custom-fields-list-01">
                    <div class="wpm-custom-fields-list-label-01">Fax</div>
                    <div class="wpm-custom-fields-list-content-01">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-01">
                    <div class="wpm-custom-fields-list-label-01"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-01">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-01">
                    <div class="wpm-custom-fields-list-label-01"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-01">1588100157</div>
                </div>
              </div>
              <?php echo wpm_6310_skills_social() ?>
              <div class="wpm_6310_team_style_01_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_01_social">
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
      <div class="wpm_6310_team_style_01 wpm_6310_hover_img_change">
        <?php $temp = explode("||||", $arr[2]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_01_caption">
              <div class="wpm_6310_team_style_01_designation">Web Developer</div>
              <div class="wpm_6310_team_style_01_title">Adam Smith</div>
              <div class="wpm-custom-fields-01">
                <div class="wpm-custom-fields-list-01">
                    <div class="wpm-custom-fields-list-label-01">Fax</div>
                    <div class="wpm-custom-fields-list-content-01">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-01">
                    <div class="wpm-custom-fields-list-label-01"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-01">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-01">
                    <div class="wpm-custom-fields-list-label-01"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-01">1588100157</div>
                </div>
              </div>
              <?php echo wpm_6310_skills_social() ?>
              <div class="wpm_6310_team_style_01_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_01_social">
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
      Template 1 <small>(Single Effect)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-01">Create Team</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 02 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_02 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_02_pic">
            <?php $temp = explode("||||", $arr[0]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_02_team_content">
            <div class="wpm_6310_team_style_02_title">Mildred Martin</div>
            <div class="wpm_6310_team_style_02_designation">Sales Agent</div>            
              <div class="wpm_6310_team_style_02_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <ul class="wpm_6310_team_style_02_social">
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
        <div class="wpm_6310_team_style_02 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_02_pic">
            <?php $temp = explode("||||", $arr[1]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_02_team_content">
            <div class="wpm_6310_team_style_02_title">Mildred Martin</div>
            <div class="wpm_6310_team_style_02_designation">Sales Agent</div>
            <div class="wpm-custom-fields-02">
              <div class="wpm-custom-fields-list-02">
                  <div class="wpm-custom-fields-list-label-02">Fax</div>
                  <div class="wpm-custom-fields-list-content-02">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-02">
                  <div class="wpm-custom-fields-list-label-02"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-02">1588100157</div>
              </div>
            </div>            
            <ul class="wpm_6310_team_style_02_social">
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
        <div class="wpm_6310_team_style_02 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_02_pic">
            <?php $temp = explode("||||", $arr[2]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_02_team_content">
            <div class="wpm_6310_team_style_02_title">Mildred Martin</div>
            <div class="wpm_6310_team_style_02_designation">Sales Agent</div>            
            <div class="wpm_6310_team_style_02_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <ul class="wpm_6310_team_style_02_social">
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
      Template 2 <small>(3 Effects)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-02">Create Team</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 03 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
      <div class="wpm_6310_team_style_03 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[0]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_03_caption">
              <div class="wpm_6310_team_style_03_designation">Web Developer</div>
              <div class="wpm_6310_team_style_03_title">Adam Smith</div>
              <div class="wpm-custom-fields-03">
                <div class="wpm-custom-fields-list-03">
                    <div class="wpm-custom-fields-list-label-03">Fax</div>
                    <div class="wpm-custom-fields-list-content-03">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-03">
                    <div class="wpm-custom-fields-list-label-03"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-03">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-03">
                    <div class="wpm-custom-fields-list-label-03"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-03">1588100157</div>
                </div>
              </div>
              <?php echo wpm_6310_skills_social() ?>
              <div class="wpm_6310_team_style_03_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_03_social">
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
      <div class="wpm_6310_team_style_03 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[1]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_03_caption">
              <div class="wpm_6310_team_style_03_designation">Web Developer</div>
              <div class="wpm_6310_team_style_03_title">Adam Smith</div>
              <div class="wpm-custom-fields-03">
                <div class="wpm-custom-fields-list-03">
                    <div class="wpm-custom-fields-list-label-03">Fax</div>
                    <div class="wpm-custom-fields-list-content-03">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-03">
                    <div class="wpm-custom-fields-list-label-03"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-03">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-03">
                    <div class="wpm-custom-fields-list-label-03"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-03">1588100157</div>
                </div>
              </div>
              <?php echo wpm_6310_skills_social() ?>
              <div class="wpm_6310_team_style_03_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_03_social">
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
      <div class="wpm_6310_team_style_03 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[2]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_03_caption">
              <div class="wpm_6310_team_style_03_designation">Web Developer</div>
              <div class="wpm_6310_team_style_03_title">Adam Smith</div>
              <div class="wpm-custom-fields-03">
                <div class="wpm-custom-fields-list-03">
                    <div class="wpm-custom-fields-list-label-03">Fax</div>
                    <div class="wpm-custom-fields-list-content-03">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-03">
                    <div class="wpm-custom-fields-list-label-03"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-03">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-03">
                    <div class="wpm-custom-fields-list-label-03"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-03">1588100157</div>
                </div>
              </div>
              <?php echo wpm_6310_skills_social() ?>
              <div class="wpm_6310_team_style_03_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_03_social">
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
      Template 3 <small>(3 Effects)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-03">Create Team</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 04 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
      <div class="wpm_6310_team_style_04 wpm_6310_hover_img_change">
        <?php $temp = explode("||||", $arr[0]);  ?>
        <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_04_caption">
              <div class="wpm_6310_team_style_04_designation">CEO</div>
              <div class="wpm_6310_team_style_04_title">Adam Smith</div>
              <ul class="wpm_6310_team_style_04_social">
                <?php
                        shuffle($icons);
                        for ($i = 0; $i < 4; $i++) {
                           echo $icons[$i];
                        }
                        ?>
              </ul>
            </div>
          </figcaption>
          <div class="wpm_6310_team_style_04_overlay"></div>
          <div class="wpm_6310_team_style_04_icon">
            <i class="fas fa-plus-circle"></i>
          </div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
      <div class="wpm_6310_team_style_04 wpm_6310_hover_img_change">
        <?php $temp = explode("||||", $arr[1]);  ?>
        <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_04_caption">
              <div class="wpm_6310_team_style_04_designation">Sales Agent</div>
              <div class="wpm_6310_team_style_04_title">Adam Smith</div>
              <ul class="wpm_6310_team_style_04_social">
                <?php
                        shuffle($icons);
                        for ($i = 0; $i < 4; $i++) {
                           echo $icons[$i];
                        }
                        ?>
              </ul>
            </div>
          </figcaption>
          <div class="wpm_6310_team_style_04_overlay"></div>
          <div class="wpm_6310_team_style_04_icon">
            <i class="fas fa-plus-circle"></i>
          </div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
      <div class="wpm_6310_team_style_04 wpm_6310_hover_img_change">
        <?php $temp = explode("||||", $arr[2]);  ?>
        <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_04_caption">
              <div class="wpm_6310_team_style_04_designation">Support Manager</div>
              <div class="wpm_6310_team_style_04_title">Adam Smith</div>
              <ul class="wpm_6310_team_style_04_social">
                <?php
                        shuffle($icons);
                        for ($i = 0; $i < 4; $i++) {
                           echo $icons[$i];
                        }
                        ?>
              </ul>
            </div>
          </figcaption>
          <div class="wpm_6310_team_style_04_overlay"></div>
          <div class="wpm_6310_team_style_04_icon">
            <i class="fas fa-plus-circle"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 4 <small>(Single Effect)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-04">Create Team</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 05 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_05 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_05_pic">
            <?php $temp = explode("||||", $arr[0]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_05_team_content">
            <div class="wpm_6310_team_style_05_title">Mildred Martin</div>
            <div class="wpm_6310_team_style_05_designation">Sales Agent</div>
            <div class="wpm_6310_team_style_05_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <ul class="wpm_6310_team_style_05_social">
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
        <div class="wpm_6310_team_style_05 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_05_pic">
            <?php $temp = explode("||||", $arr[1]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_05_team_content">
            <div class="wpm_6310_team_style_05_title">Mildred Martin</div>
            <div class="wpm_6310_team_style_05_designation">Sales Agent</div>
            <div class="wpm-custom-fields-05">
              <div class="wpm-custom-fields-list-05">
                  <div class="wpm-custom-fields-list-label-05"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-05">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-05">
                  <div class="wpm-custom-fields-list-label-05"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-05">1588100157</div>
              </div>
            </div>
            <ul class="wpm_6310_team_style_05_social">
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
        <div class="wpm_6310_team_style_05 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_05_pic">
            <?php $temp = explode("||||", $arr[2]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_05_team_content">
            <div class="wpm_6310_team_style_05_title">Mildred Martin</div>
            <div class="wpm_6310_team_style_05_designation">Sales Agent</div>
            <div class="wpm_6310_team_style_05_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <ul class="wpm_6310_team_style_05_social">
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
      Template 5 <small>(3 Effects)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-05">Create Team</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 06 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_06 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_06_pic">
            <?php $temp = explode("||||", $arr[0]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="team showcase supreme">
            <figcaption>
              <div class="wpm_6310_team_style_06_content">
                <div class="wpm_6310_team_style_06_designation">Marketing Head</div>
                <div class="wpm_6310_team_style_06_title">Connor Charles</div>
                <div class="wpm-custom-fields-06">
                  <div class="wpm-custom-fields-list-06">
                    <div class="wpm-custom-fields-list-label-06">Fax</div>
                    <div class="wpm-custom-fields-list-content-06">03424387263</div>
                  </div>
                  <div class="wpm-custom-fields-list-06">
                    <div class="wpm-custom-fields-list-label-06"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-06">Dhaka, Bangladesh</div>
                  </div>
                  <div class="wpm-custom-fields-list-06">
                    <div class="wpm-custom-fields-list-label-06"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-06">1588100157</div>
                  </div>                  
                </div>
                <?php echo wpm_6310_skills_social() ?>
                <div class="wpm_6310_team_style_06_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                <ul class="wpm_6310_team_style_06_social">
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
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_06 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_06_pic">
            <?php $temp = explode("||||", $arr[1]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="team showcase supreme">
            <figcaption>
              <div class="wpm_6310_team_style_06_content">
                <div class="wpm_6310_team_style_06_designation">Marketing Head</div>
                <div class="wpm_6310_team_style_06_title">Connor Charles</div>
                <div class="wpm-custom-fields-06">
                  <div class="wpm-custom-fields-list-06">
                    <div class="wpm-custom-fields-list-label-06">Fax</div>
                    <div class="wpm-custom-fields-list-content-06">03424387263</div>
                  </div>
                  <div class="wpm-custom-fields-list-06">
                    <div class="wpm-custom-fields-list-label-06"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-06">Dhaka, Bangladesh</div>
                  </div>
                  <div class="wpm-custom-fields-list-06">
                    <div class="wpm-custom-fields-list-label-06"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-06">1588100157</div>
                  </div>                  
                </div>
                <?php echo wpm_6310_skills_social() ?>
                <div class="wpm_6310_team_style_06_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                <ul class="wpm_6310_team_style_06_social">
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
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_06 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_06_pic">
            <?php $temp = explode("||||", $arr[2]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="team showcase supreme">
            <figcaption>
              <div class="wpm_6310_team_style_06_content">
                <div class="wpm_6310_team_style_06_designation">Marketing Head</div>
                <div class="wpm_6310_team_style_06_title">Connor Charles</div>
                <div class="wpm-custom-fields-06">
                  <div class="wpm-custom-fields-list-06">
                    <div class="wpm-custom-fields-list-label-06">Fax</div>
                    <div class="wpm-custom-fields-list-content-06">03424387263</div>
                  </div>
                  <div class="wpm-custom-fields-list-06">
                    <div class="wpm-custom-fields-list-label-06"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-06">Dhaka, Bangladesh</div>
                  </div>
                  <div class="wpm-custom-fields-list-06">
                    <div class="wpm-custom-fields-list-label-06"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-06">1588100157</div>
                  </div>                  
                </div>
                <?php echo wpm_6310_skills_social() ?>
                <div class="wpm_6310_team_style_06_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                <ul class="wpm_6310_team_style_06_social">
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
    </div>
    <div class="wpm-6310-template-list">
      Template 6 <small>(11 Effects)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-06">Create Team</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 07 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_07 wpm_6310_hover_img_change">
            <?php $temp = explode("||||", $arr[0]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_07_content">
              <div class="wpm_6310_team_style_07_title">Connor Charles</div>
              <div class="wpm_6310_team_style_07_designation">Marketing Head</div>
              <ul class="wpm_6310_team_style_07_social">
                <?php
                        shuffle($icons);
                        for ($i = 0; $i < 3; $i++) {
                           echo $icons[$i];
                        }
                        ?>
              </ul>
            </div>
          </figcaption>

        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_07 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[1]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_07_content">
              <div class="wpm_6310_team_style_07_title">Connor Charles</div>
              <div class="wpm_6310_team_style_07_designation">Marketing Head</div>
              <ul class="wpm_6310_team_style_07_social">
                <?php
                        shuffle($icons);
                        for ($i = 0; $i < 3; $i++) {
                           echo $icons[$i];
                        }
                        ?>
              </ul>
            </div>
          </figcaption>

        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_07 wpm_6310_hover_img_change">
          <?php $temp = explode("||||", $arr[2]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_07_content">
              <div class="wpm_6310_team_style_07_title">Connor Charles</div>
              <div class="wpm_6310_team_style_07_designation">Marketing Head</div>
              <ul class="wpm_6310_team_style_07_social">
                <?php
                        shuffle($icons);
                        for ($i = 0; $i < 3; $i++) {
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
      Template 7 <small>(Single Effect)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-07">Create Team</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 08 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_08 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_08_pic">
            <?php $temp = explode("||||", $arr[0]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>

          <div class="wpm_6310_team_style_08_team_content">
            <div class="wpm_6310_team_style_08_title">JHON</div>
            <div class="wpm_6310_team_style_08_border"></div>
            <div class="wpm_6310_team_style_08_designation">Web Desginer</div>
            <div class="wpm-custom-fields-08">
              <div class="wpm-custom-fields-list-08">
                <div class="wpm-custom-fields-list-label-08">Fax</div>
                <div class="wpm-custom-fields-list-content-08">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-08">
                <div class="wpm-custom-fields-list-label-08"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-08">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-08">
                <div class="wpm-custom-fields-list-label-08"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-08">1588100157</div>
              </div>              
            </div>
            <?php echo wpm_6310_skills_social() ?>
            <div class="wpm_6310_team_style_08_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <ul class="wpm_6310_team_style_08_social">
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
        <div class="wpm_6310_team_style_08 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_08_pic">
            <?php $temp = explode("||||", $arr[1]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>

          <div class="wpm_6310_team_style_08_team_content">
            <div class="wpm_6310_team_style_08_title">JHON</div>
            <div class="wpm_6310_team_style_08_border"></div>
            <div class="wpm_6310_team_style_08_designation">Web Desginer</div>
            <div class="wpm-custom-fields-08">
              <div class="wpm-custom-fields-list-08">
                <div class="wpm-custom-fields-list-label-08">Fax</div>
                <div class="wpm-custom-fields-list-content-08">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-08">
                <div class="wpm-custom-fields-list-label-08"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-08">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-08">
                <div class="wpm-custom-fields-list-label-08"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-08">1588100157</div>
              </div>              
            </div>
            <?php echo wpm_6310_skills_social() ?>
            <div class="wpm_6310_team_style_08_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <ul class="wpm_6310_team_style_08_social">
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
        <div class="wpm_6310_team_style_08 wpm_6310_hover_img_change">
        <div class="wpm_6310_team_style_08_pic">
          <?php $temp = explode("||||", $arr[2]);  ?>
          <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>

          <div class="wpm_6310_team_style_08_team_content">
            <div class="wpm_6310_team_style_08_title">JHON</div>
            <div class="wpm_6310_team_style_08_border"></div>
            <div class="wpm_6310_team_style_08_designation">Web Desginer</div>
            <div class="wpm-custom-fields-08">
              <div class="wpm-custom-fields-list-08">
                <div class="wpm-custom-fields-list-label-08">Fax</div>
                <div class="wpm-custom-fields-list-content-08">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-08">
                <div class="wpm-custom-fields-list-label-08"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-08">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-08">
                <div class="wpm-custom-fields-list-label-08"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-08">1588100157</div>
              </div>              
            </div>
            <?php echo wpm_6310_skills_social() ?>
            <div class="wpm_6310_team_style_08_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <ul class="wpm_6310_team_style_08_social">
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
      Template 8 <small>(Single Effect)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-08">Create Team</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 09 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_09 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_09_pic">
            <?php $temp = explode("||||", $arr[0]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>

          <div class="wpm_6310_team_style_09_team_content">
            <div class="wpm_6310_team_style_09_title">Mildred Martin</div>
            <div class="wpm_6310_team_style_09_designation">Sales Agent</div>
            <div class="wpm-custom-fields-09">
              <div class="wpm-custom-fields-list-09">
                <div class="wpm-custom-fields-list-label-09">Fax</div>
                <div class="wpm-custom-fields-list-content-09">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-09">
                <div class="wpm-custom-fields-list-label-09"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-09">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-09">
                <div class="wpm-custom-fields-list-label-09"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-09">1588100157</div>
              </div>              
            </div>
            <?php echo wpm_6310_skills_social(' wpm-6310-p-l-r-10') ?>
            <p class="wpm_6310_team_style_09_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <ul class="wpm_6310_team_style_09_social">
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
        <div class="wpm_6310_team_style_09 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_09_pic">
              <?php $temp = explode("||||", $arr[1]);  ?>
              <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>

          <div class="wpm_6310_team_style_09_team_content">
            <div class="wpm_6310_team_style_09_title">Mildred Martin</div>
            <div class="wpm_6310_team_style_09_designation">Sales Agent</div>
            <div class="wpm-custom-fields-09">
              <div class="wpm-custom-fields-list-09">
                <div class="wpm-custom-fields-list-label-09">Fax</div>
                <div class="wpm-custom-fields-list-content-09">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-09">
                <div class="wpm-custom-fields-list-label-09"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-09">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-09">
                <div class="wpm-custom-fields-list-label-09"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-09">1588100157</div>
              </div>              
            </div>
            <?php echo wpm_6310_skills_social(' wpm-6310-p-l-r-10') ?>
            <p class="wpm_6310_team_style_09_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <ul class="wpm_6310_team_style_09_social">
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
        <div class="wpm_6310_team_style_09 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_09_pic">
            <?php $temp = explode("||||", $arr[2]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          </div>

          <div class="wpm_6310_team_style_09_team_content">
            <div class="wpm_6310_team_style_09_title">Mildred Martin</div>
            <div class="wpm_6310_team_style_09_designation">Sales Agent</div>
            <div class="wpm-custom-fields-09">
              <div class="wpm-custom-fields-list-09">
                <div class="wpm-custom-fields-list-label-09">Fax</div>
                <div class="wpm-custom-fields-list-content-09">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-09">
                <div class="wpm-custom-fields-list-label-09"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-09">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-09">
                <div class="wpm-custom-fields-list-label-09"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-09">1588100157</div>
              </div>              
            </div>
            <?php echo wpm_6310_skills_social(' wpm-6310-p-l-r-10') ?>
            <p class="wpm_6310_team_style_09_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <ul class="wpm_6310_team_style_09_social">
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
      Template 9 <small>(Single Effect)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-09">Create Team</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 10 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_10 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_10_pic">
            <?php $temp = explode("||||", $arr[0]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <div class="wpm_6310_team_style_10_social_team">
              <ul class="wpm_6310_team_style_10_social">
                <?php
                        shuffle($icons);
                        for ($i = 0; $i < 4; $i++) {
                           echo $icons[$i];
                        }
                        ?>
              </ul>
            </div>
          </div>
          <div class="wpm_6310_team_style_10_team_content">
            <div class="wpm_6310_team_style_10_title">
              Adam Smith
            </div>
            <div class="wpm_6312_team_style_10_designation">Web Desginer</div>
            <div class="wpm-custom-fields-10">
              <div class="wpm-custom-fields-list-10">
                <div class="wpm-custom-fields-list-label-10">Fax</div>
                <div class="wpm-custom-fields-list-content-10">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-10">
                <div class="wpm-custom-fields-list-label-10"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-10">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-10">
                <div class="wpm-custom-fields-list-label-10"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-10">1588100157</div>
              </div>              
            </div>
            <?php echo wpm_6310_skills_social() ?>
            <p class="wpm_6310_team_style_10_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_10 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_10_pic">
            <?php $temp = explode("||||", $arr[1]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <div class="wpm_6310_team_style_10_social_team">
              <ul class="wpm_6310_team_style_10_social">
                <?php
                        shuffle($icons);
                        for ($i = 0; $i < 4; $i++) {
                           echo $icons[$i];
                        }
                        ?>
              </ul>
            </div>
          </div>
          <div class="wpm_6310_team_style_10_team_content">
            <div class="wpm_6310_team_style_10_title">
              Adam Smith
            </div>
            <div class="wpm_6312_team_style_10_designation">Web Developer</div>
            <div class="wpm-custom-fields-10">
              <div class="wpm-custom-fields-list-10">
                <div class="wpm-custom-fields-list-label-10">Fax</div>
                <div class="wpm-custom-fields-list-content-10">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-10">
                <div class="wpm-custom-fields-list-label-10"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-10">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-10">
                <div class="wpm-custom-fields-list-label-10"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-10">1588100157</div>
              </div>              
            </div>
            <?php echo wpm_6310_skills_social() ?>
            <p class="wpm_6310_team_style_10_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_10 wpm_6310_hover_img_change">
          <div class="wpm_6310_team_style_10_pic">
            <?php $temp = explode("||||", $arr[2]);  ?>
            <img src="<?php echo $temp[0] ?>" data-6310-hover-image="<?php echo $temp[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <div class="wpm_6310_team_style_10_social_team">
              <ul class="wpm_6310_team_style_10_social">
                <?php
                        shuffle($icons);
                        for ($i = 0; $i < 4; $i++) {
                           echo $icons[$i];
                        }
                        ?>
              </ul>
            </div>
          </div>
          <div class="wpm_6310_team_style_10_team_content">
            <div class="wpm_6310_team_style_10_title">
              Adam Smith
            </div>
            <div class="wpm_6312_team_style_10_designation">SEO Expert</div>
            <div class="wpm-custom-fields-10">
              <div class="wpm-custom-fields-list-10">
                <div class="wpm-custom-fields-list-label-10">Fax</div>
                <div class="wpm-custom-fields-list-content-10">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-10">
                <div class="wpm-custom-fields-list-label-10"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-10">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-10">
                <div class="wpm-custom-fields-list-label-10"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-10">1588100157</div>
              </div>              
            </div>
            <?php echo wpm_6310_skills_social() ?>
            <p class="wpm_6310_team_style_10_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>

      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 10 <small>(Single Effect)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-10">Create Team</button>
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