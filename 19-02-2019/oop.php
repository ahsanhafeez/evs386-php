<?php


function dd($arg){
    echo "<pre>";
    print_r($arg);
    die;
}
function dd1($arg){
    echo "<pre>";
    var_dump($arg);
    die;
}
class User{
    // public , private , protected
//    $user_name = "";
    public $user_name = "";
    protected $father_name = "";
    private $cnic = "213213";
    
    
    public function __construct($cb) {
        echo $this->cnic;
    }
    // Properties / Data Members
    
    public function getName(){
        echo "getName Function";
    }
    
    // Data Functions
    
    
}

new User('asdas');
//echo $user->user_name;
//echo $user->father_name;
//echo $user->cnic;
//$user->getName();
//dd();