<?php
wpm_6310_template_skills(1, $ids, $allSlider, 1, '', 0);
if ($allSlider[0]) {
  echo "<div class='wpm-6310-carousel'>
  <div id='wpm-6310-slider-{$ids}' class='wpm-6310-owl-carousel'>";
  if ($members) {
    foreach ($members as $value) {
      if ($value['profile_details_type'] == 1) {
        $link_type = " class='wpm_6310_team_style_{$ids} wpm_6310_team_member_info' link-id='{$value['id']}' link-url='".wpm_6310_validate_profile_url($value['profile_url'])."' target='{$value['open_new_tab']}' team-id='0'";
      } else if ($value['profile_details_type'] == 2) {
        $link_type = " class='wpm_6310_team_style_{$ids} wpm_6310_team_member_info' link-id='0' team-id='{$value['id']}'";
      } else {
        $link_type = " class='wpm_6310_team_style_{$ids}' link-id='0' team-id='0'";
      }
?>
      <div class="wpm-6310-item-<?php echo $ids; ?>">
        <div <?php echo $link_type ?>>
        <img src="<?php echo $value['image'] ?>" data-6310-hover-image="<?php echo $value['hover_image'] ?>" alt="<?php echo $value['name'] ?>" data-wpm-6310-image-attr="<?php echo $value['image'] ?>">
          <figcaption>
            <div class="wpm_6310_team_style_<?php echo $ids ?>_content">
              <div class="wpm_6310_team_style_<?php echo $ids ?>_title"><?php echo wpm_6310_replace(esc_attr($value['name'])) ?></div>
              <div class="wpm_6310_team_style_<?php echo $ids ?>_designation"><?php echo wpm_6310_replace(esc_attr($value['designation'])) ?></div>
              <?php
              wpm_6310_social_icon($value['iconids'], $value['iconurl'], $allStyle[28], $value['id'], $ids, '', '', isset($allSlider['63']) ? $allSlider['63'] : 4);
              ?>
            </div>
          </figcaption>
        </div>
      </div>
    <?php
    }
  }
  echo "</div>
  </div>";
} else {
  
  if ($members) {
    echo "<div class='wpm-6310-row'>";
    
    foreach ($members as $value) {
      if ($value['profile_details_type'] == 1) {
        $link_type = " class='wpm_6310_team_style_{$ids} wpm_6310_team_member_info' link-id='{$value['id']}' link-url='".wpm_6310_validate_profile_url($value['profile_url'])."' target='{$value['open_new_tab']}' team-id='0'";
      } else if ($value['profile_details_type'] == 2) {
        $link_type = " class='wpm_6310_team_style_{$ids} wpm_6310_team_member_info' link-id='0' team-id='{$value['id']}'";
      } else {
        $link_type = " class='wpm_6310_team_style_{$ids}' link-id='0' team-id='0'";
      }
    ?>
      <div class="wpm-6310-col-<?php echo $desktop_row ?>">
        <div<?php echo $link_type ?>>
        <img src="<?php echo $value['image'] ?>" data-6310-hover-image="<?php echo $value['hover_image'] ?>" alt="<?php echo $value['name'] ?>" data-wpm-6310-image-attr="<?php echo $value['image'] ?>">
          <figcaption>
            <div class="wpm_6310_team_style_<?php echo $ids ?>_content">
              <div class="wpm_6310_team_style_<?php echo $ids ?>_title"><?php echo wpm_6310_replace(esc_attr($value['name'])) ?></div>
              <div class="wpm_6310_team_style_<?php echo $ids ?>_designation"><?php echo wpm_6310_replace(esc_attr($value['designation'])) ?></div>
              <?php
              wpm_6310_social_icon($value['iconids'], $value['iconurl'], $allStyle[28], $value['id'], $ids, '', '', isset($allSlider['63']) ? $allSlider['63'] : 4);
              ?>
            </div>
          </figcaption>
      </div>
      </div>
<?php
    }
    echo "</div>";
  }
}
?>

<style type="text/css">
  .wpm_6310_team_style_<?php echo $ids ?> {
    text-align: center;
    overflow: hidden;
    position: relative;
    z-index: 1;
    letter-spacing: .04em;
    -webkit-border-radius: <?php echo $allStyle[2] ?>%;
    -o-border-radius: <?php echo $allStyle[2] ?>%;
    -moz-border-radius: <?php echo $allStyle[2] ?>%;
    -ms-border-radius: <?php echo $allStyle[2] ?>%;
    border-radius: <?php echo $allStyle[2] ?>%;
    border-style: solid;
    border-width: <?php echo $allStyle[3] ?>px;
    border-color: <?php echo $allStyle[4] ?>;
    box-shadow: 0 0 <?php echo $allStyle[9] ?>px <?php echo $allStyle[8] ?>px <?php echo $allStyle[10] ?>;
    -moz-box-shadow: 0 0 <?php echo $allStyle[9] ?>px <?php echo $allStyle[8] ?>px <?php echo $allStyle[10] ?>;
    -o-box-shadow: 0 0 <?php echo $allStyle[9] ?>px <?php echo $allStyle[8] ?>px <?php echo $allStyle[10] ?>;
    -webkit-box-shadow: 0 0 <?php echo $allStyle[9] ?>px <?php echo $allStyle[8] ?>px <?php echo $allStyle[10] ?>;
    -ms-box-shadow: 0 0 <?php echo $allStyle[9] ?>px <?php echo $allStyle[8] ?>px <?php echo $allStyle[10] ?>;
    width: 100%;
    float: left;
  }

  .wpm_6310_team_style_<?php echo $ids ?> img {
    width: 100%;
    height: auto;
    padding: 0 !important;
    margin: 0 !important;
    float: left;
    -webkit-transition: all 0.5s ease-in-out 0s;
    -moz-transition: all 0.5s ease-in-out 0s;
    -ms-transition: all 0.5s ease-in-out 0s;
    -o-transition: all 0.5s ease-in-out 0s;
    transition: all 0.5s ease-in-out 0s;
    border-radius: 0 !important;
  }

  .wpm_6310_team_style_<?php echo $ids ?> figcaption {
    height: <?php echo ($allStyle[18] + $allStyle[24] + $allStyle[26] + 60) ?>px;
    bottom: -<?php echo ($allStyle[18] + 60) ?>px;
    left: 15px;
    right: 15px;
    position: absolute;
    color: rgba(31, 31, 31, 1);
    text-align: center;
    overflow: hidden;
    -webkit-transition: height 0.4s;
    -moz-transition: height 0.4s;
    transition: height 0.4s;    
    -webkit-transition: all 0.5s ease-in-out 0s;
    -moz-transition: all 0.5s ease-in-out 0s;
    -ms-transition: all 0.5s ease-in-out 0s;
    -o-transition: all 0.5s ease-in-out 0s;
    transition: all 0.5s ease-in-out 0s;
    background: <?php echo $allStyle[7] ?>;
    float: left;
  }

  .wpm_6310_team_style_<?php echo $ids ?>_title {
    margin-top: 15px;
    margin-bottom: 10px;
    font-size: <?php echo $allStyle[11] ?>px;
    color: <?php echo $allStyle[12] ?>;
    font-weight: <?php echo $allStyle[15] ?>;
    text-transform: <?php echo $allStyle[16]; ?>;
    font-family: <?php echo str_replace("+", " ", $allStyle[17]); ?>;
    line-height: <?php echo $allStyle[18] ?>px;
  }

  .wpm_6310_team_style_<?php echo $ids ?>_designation {
    font-size: <?php echo $allStyle[19] ?>px;
    color: <?php echo $allStyle[20] ?>;
    font-weight: <?php echo $allStyle[21] ?>;
    text-transform: <?php echo $allStyle[22] ?>;
    font-family: <?php echo str_replace("+", " ", $allStyle[23]); ?>;
    line-height: <?php echo ($allStyle[24] + 15) ?>px;
    opacity: 0;
    -moz-transition: all 0.5s ease-in-out 0.2s;
    transition: all 0.5s ease-in-out 0.2s;
  }

  .wpm_6310_team_style_<?php echo $ids ?>_designation::before,
  .wpm_6310_team_style_<?php echo $ids ?>_designation::after {
    content: "";
    height: 1px;
    position: absolute;
    opacity: 0;
    display: block;
    width: 0;
    border-top: 1px solid <?php echo $allStyle[4] ?>;
    -moz-transition: all 0.5s ease-in-out 0.2s;
    transition: all 0.5s ease-in-out 0.2s;
  }

  .wpm_6310_team_style_<?php echo $ids ?>_designation::after {
    right: 0;
  }

  .wpm_6310_team_style_<?php echo $ids ?>_social {
    height: 35px;
    line-height: 35px;
    font-size: 16px;
    margin: 10px 0;
  }

  .wpm_6310_team_style_<?php echo $ids ?>:hover img {
    transform: scale(1.10);
    -moz-transform: scale(1.10);
    -webkit-transform: scale(1.10);
    -ms-transform: scale(1.10);
    -o-transform: scale(1.10);
    float: left;

  }

  .wpm_6310_team_style_<?php echo $ids ?>:hover figcaption {
    bottom: 0;
  }

  .wpm_6310_team_style_<?php echo $ids ?>_content {
    float: left;
    width: 100%;
  }

  .wpm_6310_team_style_<?php echo $ids ?>:hover figcaption .wpm_6310_team_style_<?php echo $ids ?>_designation::before,
  .wpm_6310_team_style_<?php echo $ids ?>:hover figcaption .wpm_6310_team_style_<?php echo $ids ?>_designation::after,
  .wpm_6310_team_style_<?php echo $ids ?>:hover figcaption .wpm_6310_team_style_<?php echo $ids ?>_designation {
    opacity: 1;
    width: 100%;
  }

  ul.wpm_6310_team_style_<?php echo $ids ?>_social {
    margin: 10px 0 0 !important;
    padding: 0 !important;
    list-style: none;
    display: <?php echo (!isset($allStyle[31]) || (isset($allStyle[31]) && $allStyle[31])) ? 'block' : 'none'; ?>;
  }

  ul.wpm_6310_team_style_<?php echo $ids ?>_social li {
    display: inline-block;
    margin: 0 8px 8px 0 !important;
    padding: 0 !important;
  }

  ul.wpm_6310_team_style_<?php echo $ids ?>_social li:last-child {
    margin-right: 0 !important;
  }

  ul.wpm_6310_team_style_<?php echo $ids ?>_social li:before,
  ul.wpm_6310_team_style_<?php echo $ids ?>_social li:after {
    display: none !important;
  }

  ul.wpm_6310_team_style_<?php echo $ids ?>_social li a {
    margin-top: 4px;
    display: inline-block;
    -webkit-transition: all 0.5s ease 0s;
    -moz-transition: all 0.5s ease 0s;
    -ms-transition: all 0.5s ease 0s;
    -o-transition: all 0.5s ease 0s;
    transition: all 0.5s ease 0s;
    font-size: <?php echo ceil(($allStyle[26] + $allStyle[27]) / 4) ?>px;
    border-radius: <?php echo $allStyle[30] ?>%;
    -moz-border-radius: <?php echo $allStyle[30] ?>%;
    -webkit-border-radius: <?php echo $allStyle[30] ?>%;
    -o-border-radius: <?php echo $allStyle[30] ?>%;
    -ms-border-radius: <?php echo $allStyle[30] ?>%;
  }

  ul.wpm_6310_team_style_<?php echo $ids ?>_social li a:hover {
    box-shadow: none;
  }
</style>

<?php
include wpm_6310_plugin_url . "output/common-output-file.php";
wpm6310_common_output_css($ids);
?>