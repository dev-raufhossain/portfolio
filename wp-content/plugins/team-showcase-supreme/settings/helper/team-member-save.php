<?php
if (!empty($_POST['rearrange-list-save']) && $_POST['rearrange-list-save'] == 'Save' && $_POST['rearrange_id'] != ''&& $_POST['rearrange_list'] != '') {
    $memberId = $_POST['rearrange_list'] . "||##||" . $_POST['order_type'] . "||##||" . $_POST['rearrange_list_all'];
    $wpdb->query($wpdb->prepare("UPDATE $style_table SET memberid = %s WHERE id = %d", $memberId, $_POST['rearrange_id']));
}

if (!empty($_POST['category-rearrange-list-save']) && $_POST['category-rearrange-list-save'] == 'Save' && $_POST['category_rearrange_id'] != '') {
    $nonce = $_REQUEST['_wpnonce'];
    $style_table = $wpdb->prefix . 'wpm_6310_style';
    
    if (!wp_verify_nonce($nonce, 'wpm-6310-nonce-rearrange-category')) {
       die('You do not have sufficient permissions to access this page.');
    } else {
        $id = (int) sanitize_text_field($_POST['category_rearrange_id']);
        $catOrder = sanitize_text_field($_POST['category_rearrange_list']);
        $wpdb->query($wpdb->prepare("UPDATE $style_table SET categoryids = %s WHERE id = %d", $catOrder, $id));
    }
}

if (!empty($_POST['team-category-save']) && $_POST['team-category-save'] == 'Save' && $_POST['styleid'] != '') {
    $nonce = $_REQUEST['_wpnonce'];
    $style_table = $wpdb->prefix . 'wpm_6310_style';
    
    if (!wp_verify_nonce($nonce, 'wpm-6310-nonce-add-category')) {
       die('You do not have sufficient permissions to access this page.');
    } else {
        $id = (int) sanitize_text_field($_POST['styleid']);
        $catOrder = $_POST['catid'] ? array_map('sanitize_text_field', $_POST['catid']) : '';
        if($catOrder) {
            $catOrder = implode(',', $catOrder);
        }
        $wpdb->query($wpdb->prepare("UPDATE $style_table SET categoryids = %s WHERE id = %d", $catOrder, $id));
    }
}

if (!empty($_POST['team-member-save']) && $_POST['team-member-save'] == 'Save' && $_POST['styleid'] != '') {
         $nonce = $_REQUEST['_wpnonce'];
         $member_table = $wpdb->prefix . 'wpm_6310_member';
         $category_table = $wpdb->prefix . 'wpm_6310_category';
         
         if (!wp_verify_nonce($nonce, 'wpm-6310-nonce-add-member')) {
            die('You do not have sufficient permissions to access this page.');
         } else {
            $id = sanitize_text_field($_POST['styleid']);
            $memberids = isset($_POST['memid']) ? $_POST['memid'] : '';
            $memIds = "";
            $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $id), ARRAY_A);
            $memList = explode("||##||", $styledata['memberid']);
            $mainStr = '';
            if($memberids){
                $memIds = implode(',', $memberids); //Default member list
                $mainStr = $memList[2];
                $allMembers = $wpdb->get_results('SELECT * FROM ' . $member_table . ' ORDER BY id ASC', ARRAY_A);	
                $allCategory = $wpdb->get_results('SELECT * FROM ' . $category_table . ' ORDER BY serial ASC', ARRAY_A);
                if($allCategory){
                    foreach ($allCategory as $cat) {
                        if (strpos($mainStr, $cat['c_name']) !== false) {
                            continue;
                        }
                        else{
                            $mainStr .= "##||##{$cat['c_name']}##@@##";
                        }
                    }
                }

                foreach($allMembers as $mem){
                    $filters = explode('##||##', $mainStr);
                    if(in_array($mem['id'], $memberids)){ //Need to add
                        $tempStr = '';
                        if(!$filters){
                            continue;
                        }
                        foreach ($filters as $filter){ //Read category list one by one
                            $temp = explode('##@@##', $filter);  
                            if(isset($temp[1])){
                                $selMember = $wpdb->get_row("SELECT * FROM $member_table WHERE id='".$mem['id']."' and category like '%".$temp[0]."%'");
                                if($selMember){ //member found with category and need to add in the list
                                    $tempPos = ",{$temp[1]},";
                                    if (strpos($tempPos, ",{$mem['id']},") !== false) {
                                        //already exist in the list
                                        if($tempStr != ''){
                                            $tempStr .= '##||##';
                                        }
                                        $tempStr .= $temp[0] . '##@@##' . "{$temp[1]}";
                                    }
                                    else{
                                         //added in the list
                                        if($tempStr != ''){
                                            $tempStr .= '##||##';
                                        }
                                        $tempStr .= $temp[0] . '##@@##' . "{$temp[1]},{$mem['id']}";
                                    }
                                }
                                else{
                                    if($tempStr != ''){
                                        $tempStr .= '##||##';
                                    }
                                    $tempStr .= $temp[0] . '##@@##' . "{$temp[1]}";
                                }
                            }
                        }
                        if($tempStr){
                           $mainStr = $tempStr;  
                        }
                    }
                    else{ //Need to remove
                        $mainStr =  str_replace('##||##', ',##||##', $mainStr);
                        $mainStr =  str_replace('##@@##', '##@@##,', $mainStr);
                        $mainStr .= ",";
                        if (strpos($mainStr, ",{$mem['id']},") !== false) {
                                $mainStr = str_replace(",{$mem['id']},", ',', $mainStr);
                        }
                        $mainStr =  str_replace(',##||##', '##||##', $mainStr);
                        $mainStr =  str_replace(',##||##', '##||##', $mainStr);
                        $mainStr =  str_replace(',##||##', '##||##', $mainStr);
                        $mainStr =  str_replace('##@@##,', '##@@##', $mainStr);
                        $mainStr =  str_replace('##@@##,', '##@@##', $mainStr);
                        $mainStr =  str_replace('##@@##,', '##@@##', $mainStr);
                        while(substr($mainStr, -1) == ','){
                            $mainStr = substr($mainStr, 0, strlen($mainStr) - 1);
                        }
                    }
                }
            }
            $newStr = $memIds . '||##||' . (isset($memList[1]) ? $memList[1] : 0) . '||##||' . $mainStr;
            $wpdb->query($wpdb->prepare("UPDATE $style_table SET memberid = %s WHERE id = %d", $newStr, $id));
         }
}


if (!empty($_POST['change_template_update']) && $_POST['change_template_update'] == 'Update') {
    $nonce = $_REQUEST['_wpnonce'];
    $style_table = $wpdb->prefix . 'wpm_6310_style';
    
    if (!wp_verify_nonce($nonce, 'wpm_nonce_change_template')) {
       die('You do not have sufficient permissions to access this page.');
    } else {
        $id = (int) sanitize_text_field($_POST['id']);
        $old = sanitize_text_field($_POST['old_style_name']);
        $new = sanitize_text_field($_POST['new_style_name']);
        
        if($old != $new) {
            $defaultData = wpm_6310_default_value($new);
            $css = $defaultData['css'];
            $slider = $defaultData['slider'];
            $wpdb->query($wpdb->prepare("UPDATE $style_table SET style_name = %s, css = %s, slider = %s WHERE id = %d", $new, $css, $slider, $id));
            $suffix = (int) substr($new, -2);
            if($suffix >= 1 && $suffix <= 10) {
                $suffix = '01-10';
            } if($suffix >= 11 && $suffix <= 20) {
                $suffix = '11-20';
            } if($suffix >= 21 && $suffix <= 30) {
                $suffix = '21-30';
            } if($suffix >= 31 && $suffix <= 40) {
                $suffix = '31-40';
            } 

            $url = admin_url("admin.php?page=wpm-template-{$suffix}&styleid=$id");
            echo '<script type="text/javascript"> document.location.href = "' . $url . '"; </script>';
        }
    }
}

?>
