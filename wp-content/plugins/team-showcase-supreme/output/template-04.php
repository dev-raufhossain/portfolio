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
                  <div class="wpm_6310_team_style_<?php echo $ids ?>_caption">
                     <div class="wpm_6310_team_style_<?php echo $ids ?>_designation"><?php echo wpm_6310_replace(esc_attr($value['designation'])) ?></div>
                     <div class="wpm_6310_team_style_<?php echo $ids ?>_title"><?php echo wpm_6310_replace(esc_attr($value['name'])) ?></div>
                     <?php
                        wpm_6310_social_icon($value['iconids'], $value['iconurl'], $allStyle[28], $value['id'], $ids, '', '', isset($allSlider['63']) ? $allSlider['63'] : 4);
                     ?>
                  </div>
               </figcaption>
               <div class="wpm_6310_team_style_<?php echo $ids ?>_overlay"></div>
               <div class="wpm_6310_team_style_<?php echo $ids ?>_icon">
                  <?php
                  if ($value['profile_details_type'] > 0) {
                     echo '<i class="fas fa-plus-circle"></i>';
                  }
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
            <img src="<?php echo $value['image'] ?>" data-6310-hover-image="<?php echo $value['hover_image'] ?>" alt="<?php echo $value['name'] ?>" data-wpm-6310-image-attr="<?php echo $value['image'] ?>">
               <figcaption>
                  <div class="wpm_6310_team_style_<?php echo $ids ?>_caption">
                     <div class="wpm_6310_team_style_<?php echo $ids ?>_designation"><?php echo wpm_6310_replace(esc_attr($value['designation'])) ?></div>
                     <div class="wpm_6310_team_style_<?php echo $ids ?>_title"><?php echo wpm_6310_replace(esc_attr($value['name'])) ?></div>
                     <?php
                        wpm_6310_social_icon($value['iconids'], $value['iconurl'], $allStyle[28], $value['id'], $ids, '', '', isset($allSlider['63']) ? $allSlider['63'] : 4);
                     ?>
                  </div>
               </figcaption>
               <div class="wpm_6310_team_style_<?php echo $ids ?>_overlay"></div>
               <div class="wpm_6310_team_style_<?php echo $ids ?>_icon">
                  <?php
                  if ($value['profile_details_type'] > 0) {
                     echo '<i class="fas fa-plus-circle"></i>';
                  }
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
      box-shadow: 0 0 <?php echo ($allStyle[9] * 2) ?>px <?php echo $allStyle[8] ?>px <?php echo $allStyle[10] ?>;
      width: 100%;
      float: left;
   }

   .wpm_6310_team_style_<?php echo $ids ?> img {
      width: 100%;
      height: auto;
      padding: 0 !important;
      margin: 0 !important;
      float: left;
      border-radius: 0 !important;
   }

   .wpm_6310_team_style_<?php echo $ids ?>_caption {
      padding: 15px 0 10px;
      text-align: center;
      float: left;
      width: 100%;
      position: absolute;
      height: 100%;
   }

   .wpm_6310_team_style_<?php echo $ids ?>_designation {
      text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
      font-size: <?php echo $allStyle[19] ?>px;
      color: <?php echo $allStyle[20] ?>;
      font-weight: <?php echo $allStyle[21] ?>;
      text-transform: <?php echo $allStyle[22] ?>;
      font-family: <?php echo str_replace("+", " ", $allStyle[23]); ?>;
      line-height: <?php echo $allStyle[24] ?>px;
      bottom: 65px;
      padding: 3px 20px 3px 15px;
   }

   .wpm_6310_team_style_<?php echo $ids ?>_title {
      font-size: <?php echo $allStyle[11] ?>px;
      color: <?php echo $allStyle[12] ?>;
      font-weight: <?php echo $allStyle[15] ?>;
      text-transform: <?php echo $allStyle[16]; ?>;
      font-family: <?php echo str_replace("+", " ", $allStyle[17]); ?>;
      line-height: <?php echo $allStyle[18] ?>px;
      bottom: 40px;
      padding: 0 20px 5px 15px;
   }

   .wpm_6310_team_style_<?php echo $ids ?>_title,
   .wpm_6310_team_style_<?php echo $ids ?>_designation {
      left: 0;
      position: absolute;
      background-color: #1F7DCF;
   }

   ul.wpm_6310_team_style_<?php echo $ids ?>_social {
      padding: 0 !important;
      margin: 0 !important;
      width: 100%;
      position: absolute;
      bottom: -100%;
      z-index: 999;
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
      display: inline-block;
      font-size: <?php echo ceil(($allStyle[26] + $allStyle[27]) / 4) ?>px;
      transition: all 0.5s ease 0s;
      border-radius: <?php echo $allStyle[30] ?>%;
      -moz-border-radius: <?php echo $allStyle[30] ?>%;
      -webkit-border-radius: <?php echo $allStyle[30] ?>%;
      -o-border-radius: <?php echo $allStyle[30] ?>%;
      -ms-border-radius: <?php echo $allStyle[30] ?>%;
      box-shadow: none;
      text-decoration: none;
      padding: 0 !important;
      margin: 0 !important;
   }

   ul.wpm_6310_team_style_<?php echo $ids ?>_social li a:hover {
      box-shadow: none;
   }

   .wpm_6310_team_style_<?php echo $ids ?>_icon {
      position: absolute;
      font-size: 50px;
      line-height: 50px;
      color: #FFF;
      text-align: center;
      width: 100%;
      top: -100px;
   }

   .wpm_6310_team_style_<?php echo $ids ?>_icon .fa {
      color: #FFF;
   }

   .wpm_6310_team_style_<?php echo $ids ?>_overlay {
      position: absolute;
      width: 100%;
      height: 100%;
      left: 0;
      bottom: 0;
      padding: 0 10px;
      color: #fff;
      background: <?php echo $allStyle[7] ?>;
      opacity: 0;
   }

   .wpm_6310_team_style_<?php echo $ids ?> img,
   .wpm_6310_team_style_<?php echo $ids ?>_title,
   .wpm_6310_team_style_<?php echo $ids ?>_designation,
   ul.wpm_6310_team_style_<?php echo $ids ?>_social,
   ul.wpm_6310_team_style_<?php echo $ids ?>_social li a,
   .wpm_6310_team_style_<?php echo $ids ?>_icon,
   .wpm_6310_team_style_<?php echo $ids ?>_overlay {

      -webkit-transition: all 0.5s ease 0s;
      -moz-transition: all 0.5s ease 0s;
      -ms-transition: all 0.5s ease 0s;
      -o-transition: all 0.5s ease 0s;
      transition: all 0.5s ease 0s
   }

   .wpm_6310_team_style_<?php echo $ids ?>:hover .wpm_6310_team_style_<?php echo $ids ?>_designation,
   .wpm_6310_team_style_<?php echo $ids ?>:hover .wpm_6310_team_style_<?php echo $ids ?>_title {
      left: -100%;
   }

   .wpm_6310_team_style_<?php echo $ids ?>:hover ul.wpm_6310_team_style_<?php echo $ids ?>_social {
      bottom: 40px;
   }

   .wpm_6310_team_style_<?php echo $ids ?>:hover img {
      transform: scale(1.05);
      opacity: .8
   }

   .wpm_6310_team_style_<?php echo $ids ?>:hover .wpm_6310_team_style_<?php echo $ids ?>_overlay {
      opacity: 1;
   }

   .wpm_6310_team_style_<?php echo $ids ?>:hover .wpm_6310_team_style_<?php echo $ids ?>_icon {
      top: calc(50% - 25px);
      transform: rotate(720deg);
   }
</style>
<?php
include wpm_6310_plugin_url . "output/common-output-file.php";
wpm6310_common_output_css($ids);
?>