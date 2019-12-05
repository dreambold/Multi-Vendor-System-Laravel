<?php
use App\Product;


if(!function_exists("rand_str")){
    function rand_str($length = 32, $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890')
    {
        // Length of character list
        $chars_length = (strlen($chars) - 1);

        // Start our string
        $string = $chars{rand(0, $chars_length)};

        // Generate random string
        for ($i = 1; $i < $length; $i = strlen($string))
        {
            // Grab a random character from our list
            $r = $chars{rand(0, $chars_length)};

            // Make sure the same two characters don't appear next to each other
            if ($r != $string{$i - 1}) $string .=  $r;
        }
        // Return the string
        return $string;
    }

}

if(!function_exists("getSellerProductCount")){
    function getSellerProductCount($seller_id){
        return Product::where(array("seller_id"=>$seller_id))->count();
    }
}

if(!function_exists("find_in_set")){
    function find_in_set($str, $str_list){
        return in_array($str, explode(",", $str_list));
    }
}

if(!function_exists("getSavedSearchPrice")){
    function getSavedSearchPrice($conditions){
        $ret = "";
        if(!isset($conditions)) return $ret;
        $conditions_a = explode(",", $conditions);
        $ret = $conditions_a[0];
        if(count($conditions_a)>1){
            $ret .= "~".$conditions_a[1];
        }
        return $ret;
    }
}


if(!function_exists("getProductConditionTitles")){
    function getProductConditionTitles($conditions){
        $ret = "";
        if(!isset($conditions)) return $ret;
        $stateArr = array("none", "new", "unuseed");
        $conditions_a = explode(",", $conditions);
        foreach($conditions_a as $item){
            if(isset($stateArr[$item])){
                $ret .=  (""==$ret? "":",").$stateArr[$item];
            }
        }

        return $ret;
    }
}

if(!function_exists("getProductConditionTitle")){
    function getProductConditionTitle($condition){
        $ret = "";
        $stateArr = array("none", "new", "unuseed");
        if(isset($stateArr[$condition])){
            $ret = $stateArr[$condition];
        }
        return $ret;
    }
}

if(!function_exists("getOrderDiscountState")){
    function getOrderDiscountState($state){
        $ret = "";
        $stateArr = array("none", "user proposal", "agree", "seller proposal", "cancel");
        if(isset($stateArr[$state])){
            $ret = $stateArr[$state];
        }
        return $ret;
    }
}

if(!function_exists("getOrderState")){
    function getOrderState($state){
        $ret = "";
        $stateArr = array("unpaid", "prepare", "delivery", "check", "complete");
        if(isset($stateArr[$state])){
            $ret = $stateArr[$state];
        }
        return $ret;
    }
}

if(!function_exists("getOrderStateClass")){
    function getOrderStateClass($state){
        $ret = "";
        $stateArr = array("label-warning", "label-info", "label-info", "label-danger", "label-success");
        if(isset($stateArr[$state])){
            $ret = $stateArr[$state];
        }
        return $ret;
    }
}

if(!function_exists("newOrderNo")){
    function newOrderNo($user_id){
        $ret = date('YmdHis');
        $ret = $ret .$user_id .rand(1111, 9999);
        return $ret;
    }
}

if(!function_exists("convertStdClassToArray")){
    function convertStdClassToArray($class){
        $classStr = json_encode($class);
        $ret = json_decode($classStr,1);
        return $ret;
    }
}

if(!function_exists("encryptShipAddress")){
    function encryptShipAddress($address){
        if($address == '') return;
        $prefix = substr($address,0,2);
        $suffix = substr($address, -2,2);
        return $prefix."xxxxxxxx".$suffix;
    }
}

if(!function_exists('convertArrayGroupArray')){
    function convertArrayGroupArray($array, $disKey) {
        if (count($array) == 0)
            return array();

        $curKeyValue = $array[0][$disKey];
        $retEleArray = array();
        $retArray = array();

        foreach ($array as $item) {
            if ($curKeyValue == $item[$disKey]) {
                $retEleArray[] = $item;
            } else {
                $retArray[] = $retEleArray;
                $retEleArray = array();
                $retEleArray[] = $item;
                $curKeyValue = $item[$disKey];
            }
        }

        if (count($retEleArray) > 0) {
            $retArray[] = $retEleArray;
        }

        return $retArray;
    }
}

if(!function_exists('convertArrayGroupArray1')){
    function convertArrayGroupArray1($array, $disKey) {
        if (count($array) == 0)
            return array();

        $curKeyValue = $array[0][$disKey];
        $retEleArray = array();
        $retArray = array();

        foreach ($array as $item) {
            if ($curKeyValue == $item[$disKey]) {
                $retEleArray[] = $item;
            } else {
                $retArray[] = array('list' => $retEleArray, 'key' =>$curKeyValue);
                $retEleArray = array();
                $retEleArray[] = $item;
                $curKeyValue = $item[$disKey];
            }
        }

        if (count($retEleArray) > 0) {
            $retArray[] = array('list' =>$retEleArray,  'key' =>$curKeyValue);
        }

        return $retArray;
    }
}


if(!function_exists('convertAttrToArray')) {
    function convertAttrToArray($class)
    {
        $classStr = json_encode($class);
        $ret = json_decode($classStr, 1);
        return $ret;
    }
}

if(!function_exists('getBannerCategoryTitle')){
    function getBannerCategoryTitle($category_id){
        $ret = '-';
        switch($category_id){
            case "0":
                $ret = 'Top Banner';
                break;
            case "1":
                $ret = 'Daily Deal';
                break;
            case "2":
                $ret = 'Middle Top Banner';
                break;
            case "3":
                $ret = 'Middle Bottom Banner';
                break;
            case "4":
                $ret = 'Bottom Banner';
                break;
        }
        return $ret;
    }
}


if (!function_exists('makeUploadFileName')) {
    function makeUploadFileName()
    {
        $datetime = date('YmdHis');
        $datetime = $datetime . rand(1111, 9999);
        return $datetime;
    }
}

if(!function_exists('getAttrTypeName')){
    function getAttrTypeName($attr_type){
        $ret = '-';
        switch($attr_type){
            case "0":
                $ret = 'text';
                break;
            case "1":
                $ret = 'select';
                break;
            case "2":
                $ret = 'checkbox';
                break;
            case "3":
                $ret = 'radio';
                break;
        }
        return $ret;
    }
}

if (!function_exists('correctImgPath')) {
    function correctImgPath($path)
    {
        if($path == ""){
            return url("assets/images/default_no_image.jpg");
        }
        if (0 !== strpos($path, 'http')) { // 첫시작이 아니면
            return url($path);
        }
        return $path;
    }
}

if (!function_exists('correctImgPath1')) {
    function correctImgPath1($path)
    {
        if(!isset($path)) return "";
        if (0 !== strpos($path, 'http')) { // 첫시작이 아니면
            return url($path);
        }
        return $path;
    }
}


