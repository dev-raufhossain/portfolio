<?php
wpm_6310_template_skills(1, $ids, $allSlider, 1, '', 0);
$numberOfWords = 0;
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
               <div class="wpm_6310_team_style_<?php echo $ids ?>_pic">
               <img src="<?php echo $value['image'] ?>" data-6310-hover-image="<?php echo $value['hover_image'] ?>" alt="<?php echo $value['name'] ?>" data-wpm-6310-image-attr="<?php echo $value['image'] ?>">
               </div>
               <div class="wpm_6310_team_style_<?php echo $ids ?>_team_content">
                  <div class="wpm_6310_team_style_<?php echo $ids ?>_title"><?php echo wpm_6310_replace(esc_attr($value['name'])) ?></div>
                  <div class="wpm_6310_team_style_<?php echo $ids ?>_designation"><?php echo wpm_6310_replace(esc_attr($value['designation'])) ?></div>
                  <?php
                     echo wpm_6310_extract_member_description($value['profile_details'], ((isset($allSlider[72]) && $allSlider[72] !== '') ? $allSlider[72] : $numberOfWords), $ids);

                      wpm_6310_social_icon($value['iconids'], $value['iconurl'], $allStyle[28], $value['id'], $ids, '', '', isset($allSlider['63']) ? $allSlider['63'] : 4);
                  ?>
               </div>
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
               <div class="wpm_6310_team_style_<?php echo $ids ?>_pic">
               <img src="<?php echo $value['image'] ?>" data-6310-hover-image="<?php echo $value['hover_image'] ?>" alt="<?php echo $value['name'] ?>" data-wpm-6310-image-attr="<?php echo $value['image'] ?>">
               </div>
               <div class="wpm_6310_team_style_<?php echo $ids ?>_team_content">
                  <div class="wpm_6310_team_style_<?php echo $ids ?>_title"><?php echo wpm_6310_replace(esc_attr($value['name'])) ?></div>
                  <div class="wpm_6310_team_style_<?php echo $ids ?>_designation"><?php echo wpm_6310_replace(esc_attr($value['designation'])) ?></div>
                  <?php
                     echo wpm_6310_extract_member_description($value['profile_details'], ((isset($allSlider[72]) && $allSlider[72] !== '') ? $allSlider[72] : $numberOfWords), $ids);

                      wpm_6310_social_icon($value['iconids'], $value['iconurl'], $allStyle[28], $value['id'], $ids, '', '', isset($allSlider['63']) ? $allSlider['63'] : 4);
                  ?>
               </div>
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

   .wpm_6310_team_style_<?php echo $ids ?> .wpm_6310_team_style_<?php echo $ids ?>_pic {
      margin: 0;
      position: relative;
      -webkit-transition: all 0.5s ease 0s;
      -moz-transition: all 0.5s ease 0s;
      -ms-transition: all 0.5s ease 0s;
      -o-transition: all 0.5s ease 0s;
      transition: all 0.5s ease 0s;
      overflow: hidden;
      width: 100%;
   }

   .wpm_6310_team_style_<?php echo $ids ?>_pic img {
      float: left;
   }

   .wpm_6310_team_style_<?php echo $ids ?>:hover {
      border-color: <?php echo $allStyle[7] ?>
   }

   .wpm_6310_team_style_<?php echo $ids ?> .wpm_6310_team_style_<?php echo $ids ?>_pic:after {
      content: "";
      background: <?php echo $allStyle[7] ?>;
      width: 100%;
      height: 0;
      position: absolute;
      left: 0;
      opacity: 0;
      top: 60%;
      -webkit-transition: all 0.5s ease 0s;
      -moz-transition: all 0.5s ease 0s;
      -ms-transition: all 0.5s ease 0s;
      -o-transition: all 0.5s ease 0s;
      transition: all 0.5s ease 0s
   }

   .wpm_6310_team_style_<?php echo $ids ?>:hover .wpm_6310_team_style_<?php echo $ids ?>_pic:after {
      height: 60%;
      opacity: 0.85;
      top: 20%
   }

   .wpm_6310_team_style_<?php echo $ids ?> img {
      width: 100%;
      height: auto;
      padding: 0 !important;
      margin: 0 !important;
      float: left;
      border-radius: 0;
   }

   .wpm_6310_team_style_<?php echo $ids ?> .wpm_6310_team_style_<?php echo $ids ?>_pic:after {
      top: <?php echo $allStyle[1] ?>;
   }

   .wpm_6310_team_style_<?php echo $ids ?>_team_content {
      width: 100%;
      position: absolute;
      left: 0;
      opacity: 0;
      -webkit-transition: all 0.5s ease 0.2s;
      -moz-transition: all 0.5s ease 0.2s;
      -ms-transition: all 0.5s ease 0.2s;
      -o-transition: all 0.5s ease 0.2s;
      transition: all 0.5s ease 0.2s;
      top: 32%;
      float: left;
   }

   .wpm_6310_team_style_<?php echo $ids ?>:hover .wpm_6310_team_style_<?php echo $ids ?>_team_content {
      opacity: 1
   }

   .wpm_6310_team_style_<?php echo $ids ?>_title {
      margin: 0 0 5px 0;
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
      line-height: <?php echo $allStyle[24] ?>px;
      padding-bottom: <?php echo $allStyle[25] ?>px;
      display: block;
   }

   .wpm_6310_team_style_<?php echo $ids ?>_title:hover {
      color: <?php echo $allStyle[13]; ?>
   }

   .wpm_6310_team_style_<?php echo $ids ?>_designation:hover {
      color: <?php echo $allStyle[25]; ?>
   }

   ul.wpm_6310_team_style_<?php echo $ids ?>_social {
      margin: 15px 0 0 !important;
      padding: 0 !important;
      list-style: none;
      display: <?php echo (!isset($allStyle[32]) || (isset($allStyle[32]) && $allStyle[32])) ? 'block' : 'none'; ?>;
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
      display: inline-block;
      font-size: 18px;
      color: #fff;
      -webkit-transition: all 0.5s ease 0s;
      -moz-transition: all 0.5s ease 0s;
      -ms-transition: all 0.5s ease 0s;
      -o-transition: all 0.5s ease 0s;
      transition: all 0.5s ease 0s;
      border-radius: <?php echo $allStyle[30] ?>%;
      -moz-border-radius: <?php echo $allStyle[30] ?>%;
      -webkit-border-radius: <?php echo $allStyle[30] ?>%;
      -o-border-radius: <?php echo $allStyle[30] ?>%;
      -ms-border-radius: <?php echo $allStyle[30] ?>%;
      box-shadow: none;
      text-decoration: none;
      margin: 0 !important;
      padding: 0 !important;
   }
   .wpm_6310_team_style_<?php echo $ids ?>_description{
    padding: 0 10px;
  }

   ul.wpm_6310_team_style_<?php echo $ids ?>_social li a:hover {
      box-shadow: none;
   }
</style>
<?php
include wpm_6310_plugin_url . "output/common-output-file.php";
wpm6310_common_output_css($ids);
?>