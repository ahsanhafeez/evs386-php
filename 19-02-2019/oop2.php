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
    public $user_name = "Saqib";
    protected $father_name = "Tariq";
    private $cnic = "2131321";
    
    // Properties / Data Members
    
    public function getName(){
        echo "getName Function";
    }
    
    
    
    
    
    
    // Data Functions
    
    
}

$user  = new User;
echo $user->user_name;
//echo $user->father_name;
//echo $user->cnic;
$user->getName();
//dd();