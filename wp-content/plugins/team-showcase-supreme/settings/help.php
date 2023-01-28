<?php
if (!defined('ABSPATH'))
   exit;

?>
<div class="wpm-6310">
   <div class="wpm-6310-row wpm-6310-row-plugins">
      <h1 class="wpm-6310-wpmart-all-plugins">Plugins Reference Video</h1>
   </div>
</div>

<script>
   jQuery.getJSON('https://demo.tcsesoft.com/plugins/wpm.php', function(data) {
      let htmlCode = '';
      for(let i = 0; i < data.length; i++) {         
         htmlCode += `
         <div class="wpm-6310-help-section">         
            <div class="wpm-6310-wpmart-plugins-video">
            <i class="fas fa-film"></i><a href="${data[i].url}" target="_blank" rel="nofollow">${data[i].title}</a>
            </div>
         </div>`;
      }
      jQuery('.wpm-6310-wpmart-all-plugins').after(htmlCode);
   });
</script>
<style>
.wpm-6310-row-plugins{
   background-color: #FFF;
   padding: 30px 0;
   width: calc(100% - 23px) !important;
}
h1.wpm-6310-wpmart-all-plugins {  
    color: chocolate !important;   
}
.wpm-6310-help-section{
   width: 100%;
   display: inline;
   float: left;
   margin: 10px 30px;
   font-size: 14px;
}
.wpm-6310-wpmart-plugins-video{
   background-color: transparent;
}
.wpm-6310-wpmart-plugins-video i{
   float: left;
   padding-right: 5px;
   font-size: 21px;
   color: #009097;
}
.wpm-6310-wpmart-plugins-video a {
    text-decoration: none;
    float: left;
    margin: 0;
    padding: 0;
    color: #424242;
    font-size: 16px
}
.wpm-6310-wpmart-plugins-video a:hover {
    color: #027f85;
}

</style>