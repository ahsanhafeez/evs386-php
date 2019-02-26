<?php

if (!function_exists('getTableLayout')) {

    function getTableLayout($s , $r) {
        for($a = $s ; $a <= $r ; $a++){
            echo "$a <br>"; 
        }
    }

}
//if (!function_exists('getTableLayout')) {
//
//    function getTableLayout() {
////    echo "getHomePage";
//    }
//
//}


if(!function_exists('getReturnValue')){
    function getReturnValue(){
        return "abc";
    }
}


echo getReturnValue();

//getTableLayout($start  = 5 , $range = 10);
//echo "====== <br>";
//getTableLayout($start  = 1 , $range = 10);
//echo "====== <br>";
//getTableLayout($start  = 6 , $range = 60);
//echo "====== <br>";
//getTableLayout($start  = 1 , $range = 3);
//echo "====== <br>";

?>
