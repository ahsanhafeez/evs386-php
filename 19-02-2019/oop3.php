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
    
    
    // Data Function 
    
    public function __construct() {
        
    }
    
    public function __set($name, $value) {
//        dd($value);
//        is_integer
        $this->$name = $value;
//        dd($name);
    }
//    
    public function __get($name) {
        return $this->$name;
    }

    public function getName(){
        echo "getName Function";
    }
    
   
}

$user  = new User;
$user->cnic = 123;

echo $user->cnic;
dd($user);
//echo $user->user_name;
//$user->cnic2 = 897987987987;