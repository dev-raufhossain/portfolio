<style type="text/css">
.wpm_6310_modal_template_before, .wpm_6310_modal_template_after{
  position: absolute;
  cursor: pointer;
  z-index: 99999999;
  border-radius: 50%;
}
.wpm_6310_modal_template_before{
  content: url('<?php echo $prev ?>');
  left: -50px;
  top: calc(50% - 30px);
}
.wpm_6310_modal_template_after{
  content: url('<?php echo $next ?>');
  right: -50px;
  top: calc(50% - 30px);
}
.wpm_6310_team_style_<?php echo $ids ?>{
  height: 100%;
}
.wpm-6310-no-carousel {
  width: calc(100% + 30px);
  margin-left: -15px;
}
.wpm-6310-item-<?php echo $ids ?>{
  <?php 
    if(isset($styleTemplate ) && $styleTemplate == 1){
      echo 'padding-top: 15px !important;';
    }  
  ?>
  width: 100% !important;
}

.wpm-6310-owl-stage{
  display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    min-width: 10317px;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}
.wpm-6310-owl-item{
  display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: auto !important;
}
  .wpm-6310-tooltip:hover:after {
  display: -webkit-flex;
  display: flex;
  -webkit-justify-content: center;
  justify-content: center;
  background: rgba(0, 119, 181, 1);
  border-radius: 5px;
  color: #fff;
  content: attr(tooltip-href);
  margin: -85px 5px 0;
  font-size: 14px;
  line-height: 25px;
  padding: 8px 10px;
  position: absolute;
  z-index: 999;
  min-width: 140px;
}
.wpm_main_template{
  position: relative;
  z-index: 0;
}
.wpm_main_template *, .wpm_6310_modal * {
  box-sizing: border-box !important;
  word-break: break-word !important; 
}

.wpm-6310-row img, .wpm-6310-owl-item img{
  float: left !important;
  width: 100% !important;
}
.wpm_main_template, .wpm_main_template a{
  box-shadow: none !important;
}
.wpm-6310-row{
  width: 100%;
  clear: both;
  text-align: center;
  font-size: 0;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
.wpm-6310-img-responsive{
  width: 100%;
  height: auto;
}
.wpm_6310_team_style_<?php echo $ids ?> figcaption{
  padding: 0;
  margin: 0;
  border: none;
}
.wpm-6310-owl-carousel .wpm-6310-item-<?php echo $ids; ?>{
  padding: 5px 0;
}
.wpm_6310_team_member_info{
  cursor: pointer;
}
.wpm-6310-col-1{
  width: 100%;
  margin-bottom: 30px !important;
  float: left;
  position: relative;
}
.wpm-6310-col-2, .wpm-6310-col-3, .wpm-6310-col-4, .wpm-6310-col-5, .wpm-6310-col-6{
  margin-bottom: 30px !important;
  display: inline-block;
  margin-left: 15px;
  margin-right: 15px;
  vertical-align: top;
  padding: 0  !important;
}
.wpm-6310-col-2{
  width: calc(50% - 30px);
}
.wpm-6310-col-3{
  width: calc(33.33% - 30px);
}
.wpm-6310-col-4{
  width: calc(25% - 30px);
}
.wpm-6310-col-5{
  width: calc(20% - 30px);
}
.wpm-6310-col-6{
  width: calc(16.6667% - 30px);
}
ul.wpm_6310_team_style_<?php echo $ids ?>_social i[class*="fa-"]{
  line-height: <?php echo $allStyle[27] ?>px !important;
  width: <?php echo $allStyle[26] ?>px !important;;
  height: <?php echo $allStyle[27] ?>px !important;;
}
@media screen and (max-width: 767px) {
  .wpm-6310-col-2, .wpm-6310-col-3, .wpm-6310-col-4, .wpm-6310-col-5, .wpm-6310-col-6{
    width: 100% !important;
  }
}
<?php
if ($allSlider[0]) {
  ?>
  #wpm-6310-slider-<?php echo $ids ?> .wpm-6310-owl-nav div {
    position: absolute;
    top: calc(50% - <?php echo ($allSlider[5] * 2) ?>px);
    background: <?php echo $allSlider[7] ?>;
    color: <?php echo $allSlider[8] ?>;
    margin: 0;
    transition: all 0.3s ease-in-out;
    text-align: center;
    padding: 0;
  }
  #wpm-6310-slider-<?php echo $ids ?> .wpm-6310-owl-nav div:hover{
    background: <?php echo $allSlider[9] ?>;
    color: <?php echo $allSlider[10] ?>;
  }
  #wpm-6310-slider-<?php echo $ids ?> .wpm-6310-owl-nav div.wpm-6310-owl-prev {
    left: 0;
    border-radius: 0 <?php echo $allSlider[6] ?>% <?php echo $allSlider[6] ?>% 0;
  }
  #wpm-6310-slider-<?php echo $ids ?> .wpm-6310-owl-nav div.wpm-6310-owl-next {
    <?php
    if(isset($styleTemplate)){
      echo "right: 0px;";
    }
    else{
      echo "right: " . ($allStyle[3] * 2 - 2) . "px;";
    }
    ?>

    border-radius: <?php echo $allSlider[6] ?>% 0 0 <?php echo $allSlider[6] ?>%;
  }
  #wpm-6310-slider-<?php echo $ids ?> .wpm-6310-owl-nav div.wpm-6310-owl-prev i[class*="fa-"], #wpm-6310-slider-<?php echo $ids ?> .wpm-6310-owl-nav div.wpm-6310-owl-next i[class*="fa-"]{
    color: <?php echo $allSlider[8] ?>;
    top: 0;
    font-size: <?php echo $allSlider[5] ?>px;
    line-height: <?php echo ($allSlider[5] * 2) ?>px;
    height: <?php echo ($allSlider[5] * 2) ?>px;
    width: <?php echo ($allSlider[5] * 2) ?>px;
  }
  #wpm-6310-slider-<?php echo $ids ?> .wpm-6310-owl-nav div.wpm-6310-owl-prev:hover i[class*="fa-"],
  #wpm-6310-slider-<?php echo $ids ?> .wpm-6310-owl-nav div.wpm-6310-owl-next:hover i[class*="fa-"]{
    color: <?php echo $allSlider[10] ?>;
  }
  #wpm-6310-slider-<?php echo $ids ?> .wpm-6310-wpm-6310-owl-dots {
    text-align: center;
    padding-top: 15px;
  }
  #wpm-6310-slider-<?php echo $ids ?> .wpm-6310-wpm-6310-owl-dots div {
    width: <?php echo $allSlider[12] ?>px;
    height: <?php echo $allSlider[13] ?>px;
    border-radius: <?php echo $allSlider[16] ?>%;
    display: inline-block;
    background-color: <?php echo $allSlider[15] ?>;
    margin: 0 <?php echo $allSlider[17] ?>px;
  }
  #wpm-6310-slider-<?php echo $ids ?> .wpm-6310-wpm-6310-owl-dots div.active {
    background-color: <?php echo $allSlider[14] ?>;
  }
  <?php
}
?>
</style>


<style type="text/css">
.wpm_6310_modal, .wpm_6310_loading {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 99999999; /* Sit on top */
  padding-top: 50px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(0,0,0,0.8); /* Black w/ opacity */
  font-family: sans-serif;
}

/* wpm_6310_modal Content */
.wpm_6310_modal-content {
  position: relative;
  background-color: transparent;
  margin: auto;
  padding: 0;
  width: 75%;
  border-radius: 5px;
  -webkit-animation-duration: 0.4s;
  animation-duration: 0.4s;
  margin-bottom: 50px;
}

/* Add Animation */
@-webkit-keyframes wpm-animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}
@keyframes wpm-animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

@keyframes wpm-animatebottom {
  from {bottom:-300px; opacity:0}
  to {bottom:0; opacity:1}
}

@-webkit-keyframes wpm-animatebottom {
  from {bottom:-300px; opacity:0}
  to {bottom:0; opacity:1}
}

@keyframes wpm-animateleft {
  from {left:-300px; opacity:0}
  to {left:0; opacity:1}
}

@-webkit-keyframes wpm-animateleft {
  from {left:-300px; opacity:0}
  to {left:0; opacity:1}
}

@keyframes wpm-animateright {
  from {right:-300px; opacity:0}
  to {right:0; opacity:1}
}

@-webkit-keyframes wpm-animateright {
  from {right:-300px; opacity:0}
  to {right:0; opacity:1}
}
/* The Close Button */
.wpm-6310-close {
  color: #000;
  float: right;
  font-size: 18px;
  font-weight: bold;
  line-height: 0px;
  padding: 0;
  margin: 0;
  position: absolute;
  right: 20px;
  top: 25px;
  z-index: 999;
}

.wpm-6310-close:hover,
.wpm-6310-close:focus {
  color: #878787;
  text-decoration: none;
  cursor: pointer;
}
.wpm_6310_modal_body_picture {
  float: left;
  width: 300px;
  padding-right: 15px;}
  .wpm_6310_modal_body_content{
    width: calc(100% - 315px);
    float: left;
  }
  .wpm_6310_modal_body_picture img{
    width: calc(100% - 12px) !important;
    height: auto;
    border: 1px solid #ccc;
    padding: 5px;
  }
  #wpm_6310_modal_designation{
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 300;
    color: #727272
  }
  #wpm_6310_modal_name{
    text-transform: capitalize;
    font-size: 22px;
    line-height: 30px;
    margin: 0 0 25px;
    font-weight: 600;
    color: #272727;
  }
  #wpm_6310_modal_details, #wpm_6310_modal_details p{
    font-size: 14px;
    line-height: 20px;
    color: #272727;
    padding: 0;
    margin: 0 0 10px 0;
  }
  .wpm_6310_modal_social a{
    width: 36px !important;
    height: 36px !important;
    line-height: 36px !important;
    float:  left;
    margin: 15px 10px 0 0 !important;
    font-size: 18px !important;
    border-radius: 3px !important;
    text-align: center !important;
    cursor: pointer;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -ms-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    padding: 0;
    box-shadow: none;
    text-decoration: none;
  }
  .wpm_6310_modal_social a i {
    font-size: 18px !important;
    line-height: 30px !important;
  }
  .wpm_6310_modal_social a:hover{
    box-shadow: none;
  }
  .wpm_6310_modal .wpm_6310_modal_social{
    float: left;
    position: relative;
    width: 100%
  }
  .wpm_6310_modal .wpm-6310-tooltip:hover:after{
    margin-left: -60px !important;
  }
  .wpm_6310_modal-footer {
    padding: 10px 15px;
    color: white;
  }
  br.wpm_6310_clear{
    clear: both;
  }
  .mywpm_6310_modal{
    display: none;
  }
  .wpm_6310_loading{
    width: 100% !important;
    max-width: 100% !important;
    padding-top: 170px; /* Location of the box */
    text-align: center;
    background-color: rgba(0,0,0,0.5); /* Black w/ opacity */
    display:none;
  }
  .wpm_6310_loading img{
    border-radius: 50%;
    width: <?php echo $loading_width ?>px;
    height: <?php echo $loading_height ?>px;
    position: absolute;
    left: calc(50% - <?php echo ceil($loading_width / 2); ?>px);
    top: calc(50% - <?php echo ceil($loading_height / 2); ?>px);
  }
  @media only screen and (max-width: 600px) {
    .wpm_6310_modal-content{
      width: 90% !important;
    }
    .wpm-6310-close {
      top: -20px;
      right: 0;
      font-size: 30px;
      font-weight: 100;
      color: lightgray;
    }
    .wpm_6310_modal_body_content, .wpm_6310_modal_body_picture img{
      width: 100% !important;
    }
    .wpm_6310_modal_body_picture{
      width: 100% !important;
      padding: 0 !important;
    }
    #wpm_6310_modal_designation{
      margin-top: 15px;
    }
  }
</style>
<!-- #####################  Slider Section Start #################### -->


<?php
if (!function_exists('wpm6310_common_output_css')) {
  function wpm6310_common_output_css($ids)
  {
    ?>
    <style type="text/css">
    ul.wpm_6310_team_style_<?php echo $ids ?>_social{
      padding: 0 !important;
      list-style: none !important;
    }
    ul.wpm_6310_team_style_<?php echo $ids ?>_social li{
      display: inline-block !important;
      padding: 0 !important;
    }
    ul.wpm_6310_team_style_<?php echo $ids ?>_social li a{
      display: inline-block !important;
      box-shadow: none !important;
      text-decoration: none !important;
      padding: 0 !important;
      margin: 0 !important;
    }
    ul.wpm_6310_team_style_<?php echo $ids ?>_social li a:hover{
      box-shadow: none !important;
      text-decoration: none !important;
    }
    </style>
    <?php
  }
}
?>

<style>
  .wpm_6310_mmt_<?php echo $ids ?> .wpm_6310_modal_template_1 {
      float: left;
      width: 100%;
      padding: 20px;
      background: #fefefe;
      border: 1px solid #888;
      border-radius: 5px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .wpm_6310_mmt_<?php echo $ids ?> .wpm_6310_modal_template_1 .wpm_6310_modal_body_picture img {
      border: 1px solid #ccc;
    }
    .wpm_6310_mmt_<?php echo $ids ?> .wpm_6310_modal_template_1 .wpm_6310_modal_designation {
      font-size: <?php echo (isset($allSlider[134]) && $allSlider[134] !== '') ? $allSlider[134] : '14' ?>px;
      line-height: <?php echo (isset($allSlider[134]) && $allSlider[134] !== '') ? ($allSlider[134] + 6) : '20' ?>px;
      font-family: <?php echo (isset($allSlider[143]) && $allSlider[143])?str_replace("+", " ", $allSlider[143]):'sans-serif' ?>;
      color: <?php echo (isset($allSlider[135]) && $allSlider[135] !== '') ? $allSlider[135] : '' ?>;
      text-transform: uppercase;
      font-weight: 300;
    }
    @media only screen and (max-width: 767px){
      .wpm_6310_mmt_<?php echo $ids ?> .wpm_6310_modal_template_1 .wpm_6310_modal_designation {
        margin-top: 15px;
      }
    }
    .wpm_6310_mmt_<?php echo $ids ?> .wpm_6310_modal_template_1 .wpm_6310_modal_name {
      font-size: <?php echo (isset($allSlider[132]) && $allSlider[132] !== '') ? $allSlider[132] : '22' ?>px;
      line-height: <?php echo (isset($allSlider[132]) && $allSlider[132] !== '') ? ($allSlider[132] + 5) : 27 ?>px;
      font-family: <?php echo (isset($allSlider[142]) && $allSlider[142])?str_replace("+", " ", $allSlider[142]):'sans-serif' ?>;
      color: <?php echo (isset($allSlider[133]) && $allSlider[133] !== '') ? $allSlider[133] : 'rgb(17, 1, 0)' ?>;
      text-transform: capitalize;
      margin-bottom: 25px;
      line-height: 30px;
      font-weight: 600;
    }
    .wpm_6310_mmt_<?php echo $ids ?> .wpm_6310_modal_template_1 .wpm_6310_modal_details {
      font-size: <?php echo (isset($allSlider[136]) && $allSlider[136] !== '') ? $allSlider[136] : '14' ?>px;
      line-height: <?php echo (isset($allSlider[136]) && $allSlider[136] !== '') ? ($allSlider[136] + 5) : 19 ?>px;
      font-family: <?php echo (isset($allSlider[144]) && $allSlider[144])?str_replace("+", " ", $allSlider[144]):'Arimo' ?>;
      color: <?php echo (isset($allSlider[137]) && $allSlider[137] !== '') ? $allSlider[137] : 'rgb(0, 0, 0)' ?>;
      line-height: calc(<?php echo (isset($allSlider[136]) && $allSlider[136] !== '') ? $allSlider[136] : '14' ?>px + 6px);
    }
    .wpm_6310_mmt_<?php echo $ids ?> .wpm_6310_modal_template_1 .wpm_6310_modal_contact {
      padding: 0;
    }
    .wpm_6310_mmt_<?php echo $ids ?> .wpm_6310_modal_template_1 .wpm-custom-fields-list-label {
      font-size: <?php echo (isset($allSlider[138]) && $allSlider[138] !== '') ? $allSlider[138] : '18' ?>px;
      font-family: <?php echo (isset($allSlider[145]) && $allSlider[145])?str_replace("+", " ", $allSlider[145]):'Amaranth' ?>;
      color: <?php echo (isset($allSlider[139]) && $allSlider[139] !== '') ? $allSlider[139] : 'rgb(0, 100, 0)' ?>;
      font-weight: 300;
      line-height: calc(<?php echo (isset($allSlider[138]) && $allSlider[138] !== '') ? $allSlider[138] : '18' ?>px + 2px);
    }
    .wpm_6310_mmt_<?php echo $ids ?> .wpm_6310_modal_template_1 .wpm-custom-fields-list:hover .wpm-custom-fields-list-label {
      color: <?php echo (isset($allSlider[141]) && $allSlider[141] !== '') ? $allSlider[141] : 'rgb(0, 0, 0)' ?>;
    }
    .wpm_6310_mmt_<?php echo $ids ?> .wpm_6310_modal_template_1 .wpm-custom-fields-list-content {
      font-size: <?php echo (isset($allSlider[140]) && $allSlider[140] !== '') ? $allSlider[140] : '14' ?>px;
      font-family: <?php echo (isset($allSlider[146]) && $allSlider[146])?str_replace("+", " ", $allSlider[146]):'Amaranth' ?>;
      color: <?php echo (isset($allSlider[141]) && $allSlider[141] !== '') ? $allSlider[141] : 'rgb(0, 0, 0)' ?>;
      font-weight: 300;
      line-height: calc(<?php echo (isset($allSlider[140]) && $allSlider[140] !== '') ? $allSlider[140] : '14' ?>px + 6px);
    }
    .wpm_6310_mmt_<?php echo $ids ?> .wpm_6310_modal_template_1 .wpm-custom-fields-list:hover .wpm-custom-fields-list-content {
      color: <?php echo (isset($allSlider[139]) && $allSlider[139] !== '') ? $allSlider[139] : 'rgb(0, 100, 0)' ?>;
    }
    .wpm_6310_mmt_<?php echo $ids ?> .wpm_6310_modal_template_1 .wpm_6310_member_skills_wrapper .wpm_6310_skills_label_<?php echo $ids ?> {
      color: <?php echo (isset($allSlider[356]) && $allSlider[356] !== '') ? $allSlider[356] : 'rgb(255, 255, 255)' ?> !important;
    }
    .wpm_6310_mmt_<?php echo $ids ?> .wpm_6310_modal_template_6 .wpm-custom-fields-list{
      display: flex;
    }

    .wpm_6310_mmt_<?php echo $ids ?> .wpm_6310_modal_template_4 .wpm_6310_member_skills_wrapper {
        display: inline-block !important;
        width: 80% !important;
      }
      .wpm_6310_mmt_<?php echo $ids ?> .wpm_6310_modal_template_4 .wpm_6310_skills_prog_<?php echo $ids ?> {
        margin: auto !important;
      }
    
.wpm_6310_member_skills_wrapper_<?php echo $ids ?>, .wpm_6310_member_skills_wrapper {
  margin: 0;
  width: 100%;
  float: left;
  margin-top: <?php echo (isset($allSlider[352]) && $allSlider[352] !== '') ? $allSlider[352] : 10 ?>px;
  margin-bottom: <?php echo (isset($allSlider[353]) && $allSlider[353] !== '') ? $allSlider[353] : 0 ?>px;
}
.wpm_6310_member_skills_wrapper_<?php echo $ids ?> {
  display: <?php echo (isset($allSlider[354]) && $allSlider[354]) ? 'block' : 'none' ?>;
}
.wpm_6310_modal .wpm_6310_member_skills_wrapper {
  width: 50%;  
}
.wpm_6310_skills_label_<?php echo $ids ?> {
  font-size: <?php echo (isset($allSlider[336]) && $allSlider[336] !== '') ? $allSlider[336] : 12 ?>px;
  text-transform: <?php echo (isset($allSlider[338]) && $allSlider[338] !== '') ? $allSlider[338] : 'capitalize' ?>;
  color: <?php echo (isset($allSlider[339]) && $allSlider[339] !== '') ? $allSlider[339] : 'rgb(67, 148, 67)' ?>;
  font-weight: <?php echo (isset($allSlider[341]) && $allSlider[341] !== '') ? $allSlider[341] : 200 ?>;
  font-family: <?php echo str_replace("+", " ", (isset($allSlider[342]) ? $allSlider[342]:'Amaranth'))?>;
  line-height: <?php echo (isset($allSlider[337]) && $allSlider[337] !== '') ? $allSlider[337] : 16 ?>px;
  margin-bottom: 2px;
  text-align: left;
  display: block;
}

.wpm_6310_team_style_<?php echo $ids; ?>:hover .wpm_6310_member_skills_wrapper_<?php echo $ids ?> .wpm_6310_skills_label_<?php echo $ids ?> {
  color: <?php echo (isset($allSlider[340]) && $allSlider[340]) ? $allSlider[340] : 'rgb(189, 8, 28)' ?>;
}

.wpm_6310_skills_prog_<?php echo $ids ?> {
  flex: 1;
  height: 6px;
  margin-bottom: 6px;
  border-radius: 10px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -o-border-radius: 10px;
  border:  1px solid rgb(55, 110, 55);
  background-color: <?php echo (isset($allSlider[348]) && $allSlider[348]) ? $allSlider[348] : 'rgb(204, 49, 90)' ?>;
  box-shadow: none;
  -o-box-shadow: none;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-sizing: border-box;

}
  .wpm_6310_modal_template_4 .wpm_6310_skills_prog_<?php echo $ids ?> {
		margin: 0 5px;
	}
  .wpm_6310_modal_template_6 .wpm_6310_skills_prog_<?php echo $ids ?> {
		margin: 0 5px;
	}
	.wpm_6310_modal_template_6 .wpm_6310_member_skills_section{
		justify-content: center !important;
	}
  .wpm_6310_modal_template_6 .wpm_6310_member_skills_wrapper{
    align-items: center;
  }
  .wpm_6310_modal_template_6 .wpm_6310_skills_prog_<?php echo $ids ?> .wpm-custom-fields-list{
      display: flex;
  }
.wpm_6310_fill_<?php echo $ids ?> {
  float: left;
  background-color: <?php echo (isset($allSlider[349]) && $allSlider[349]) ? $allSlider[349] : 'rgb(64, 152, 247)' ?>;
  height: 100%;
  background-size: 20px 20px;
  position: relative;
} 

.wpm_6310_skills_prog_<?php echo $ids ?> .wpm-6310-tooltip-percent{
    position: absolute;
    width: 34px;
    background-color: <?php echo (isset($allSlider[349]) && $allSlider[349]) ? $allSlider[349] : 'rgb(64, 152, 247)' ?>;
    color: #fff;
    height: 20px;
    line-height: 20px;
    text-align: center;
    right: -17px;
    top: -29px;
    display: none;
    border-radius: 5px;
    font-weight: 400;
    font-size: 11px;
    border-radius: 2px;
    transition: all .33s; 
    font-family: <?php echo str_replace("+", " ", (isset($allSlider[342]) ? $allSlider[342]:'Amaranth'))?>;
  }		
  .wpm_6310_skills_prog_<?php echo $id; ?>:hover .wpm-6310-tooltip-percent, 
  .wpm_6310_skills_prog_<?php echo $ids ?> .wpm_6310_skills_prog:hover .wpm-6310-tooltip-percent{
    display: block
  }
  .wpm_6310_skills_prog_<?php echo $ids ?> .wpm-6310-tooltip-percent::after {
    position: absolute;
    content: '';
    height: 0;
    border-left: 7px solid transparent;
    border-right: 7px solid transparent;
    border-top: 7px solid <?php echo (isset($allSlider[349]) && $allSlider[349]) ? $allSlider[349] : 'rgb(64, 152, 247)' ?>;
    top: 20px;
    right: 10px;
    z-index: 1;
  }


  /* ################### Description CSS #################### */
  .wpm_6310_team_style_<?php echo $ids ?>_description{
    float: left;
    width: 100%;
    display:  <?php echo (isset($allSlider[71]) && $allSlider[71])?'block': (isset($defaultDescription) && $defaultDescription ? 'block':'none') ?>;
    font-size: <?php echo isset($allSlider[73])?$allSlider[73]:14 ?>px;
    line-height: <?php echo (isset($allSlider[74]) && $allSlider[74] !== '')?$allSlider[74]:(isset($defaultDescription) && $defaultDescription && isset($defaultDescriptionLineHeight) ? $defaultDescriptionLineHeight : 18) ?>px;
    color: <?php echo (isset($allSlider[75]) && $allSlider[75] !== '')?$allSlider[75]:(isset($defaultDescription) && $defaultDescription && isset($defaultDescriptionColor) ? $defaultDescriptionColor:'black') ?>;
    font-family: <?php echo isset($allSlider[77])?str_replace("+", " ", $allSlider[77]):'Amaranth' ?> !important;
    font-weight: <?php echo isset($allSlider[78])?$allSlider[78]:100 ?>;
    text-transform: <?php echo isset($allSlider[79])?$allSlider[79]:'none' ?>;
    text-align: <?php echo isset($allSlider[80])?$allSlider[80]:(isset($defaultDescription) && $defaultDescription && isset($defaultDescriptionTextAlign) ? $defaultDescriptionTextAlign:'left') ?>;
    margin-top: <?php echo (isset($allSlider[81]) && $allSlider[81] !== '')?$allSlider[81]:(isset($defaultDescription) && $defaultDescription && isset($defaultDescriptionMarginTop) ? $defaultDescriptionMarginTop : '0') ?>px;
    margin-bottom: <?php echo (isset($allSlider[82]) && $allSlider[82] !== '')?$allSlider[82]:(isset($defaultDescription) && $defaultDescription && isset($defaultDescriptionMarginBottom) ? $defaultDescriptionMarginBottom : '15') ?>px;
  }
  .wpm_6310_team_style_<?php echo $ids ?>:hover .wpm_6310_team_style_<?php echo $ids ?>_description{
    color: <?php echo isset($allSlider[76])?$allSlider[76]:(isset($defaultDescription) && $defaultDescription  && isset($defaultDescriptionHoverColor)? $defaultDescriptionHoverColor:'black') ?>;
  }
  .wpm-6310-p-l-r-10{
    padding-left: 10px;
    padding-right: 10px;
  }
  #wpm-6310-slider-<?php echo $ids ?> .wpm-6310-owl-nav div.wpm-6310-owl-prev i[class*="fa-"], #wpm-6310-slider-<?php echo $ids ?> .wpm-6310-owl-nav div.wpm-6310-owl-next i[class*="fa-"]{
    line-height: <?php echo ($allSlider[5] * 2) ?>px !important;
  }
</style>