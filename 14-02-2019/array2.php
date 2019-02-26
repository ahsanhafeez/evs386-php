<?php

$Colloege = array(
  "Class 11" => array(
      'Students' => array(
          'name' => array(
            'Abc'
          )
      ),
      'Teacher' => array(
          'name' => array(
              'Abc'
          )
      )
  ),
    "Class 12" => array(
      'Students' => array(
          'name' => array(
            'Abc'
          )
      ),
      'Teacher' => array(
          'name' => array(
              'Abc'
          )
      )
  )  
);


//for($a = 0 ; $a <= 1; $a++ ){
//    print_r(key($Colloege));
//}

$a = array();

foreach($a as $k => $v){
    
    echo "key ===== $k ======= $v <br>"; 
//    print_r($v);
}

//print_r($Colloege);
//var_dump($Colloege);


?>
