<?php

class A{
    
    public $abc = "";
    protected $abcd;
    private $d;


    public function getName2(){
        echo "getName";
    }
    
}

class B extends A{

    public function getName(){
        
    }
}


$b = new B();


?>