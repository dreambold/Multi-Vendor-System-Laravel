<?php

if(!function_exists("getLastWeekInfo")){
    function getLastWeekInfo(){
        $ret = array();
        array_push($ret,date("Y-m-d",strtotime("last Sunday")));
        array_push($ret,date("Y-m-d",strtotime("last Saturday")));
        array_push($ret,date("Y-m-d",strtotime("last Week")));
        return $ret;
    }
}

if(!function_exists("getLastMonthInfo")){
    function getLastMonthInfo(){
        $ret = array();
        $start = date("Y-m",strtotime("last Month"));
        $start .= "-01";
        $end = date("Y-m");
        $end .= "-01";
        array_push($ret, $start);
        array_push($ret, $end);
        array_push($ret, date("Y-m-d",strtotime("last Month")));
        return $ret;
    }
}



