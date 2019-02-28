<?php


class User{
    
    private $user_name;
    private $name;
    private $email;
    private $dob;
    private $password;
    private $gender;
    private $profile_image;
    
    public function __set($name, $value) {  
        $methodName = "set";
        $explode = explode("_", $name);
        $ucfirst = array_map('ucfirst', $explode);
        $implode = implode("", $ucfirst);
        $methodName .= $implode;
        if(!method_exists($this, $methodName)){
            throw new Exception("Setter Function not exists : " . $name);
        }
        $this->$methodName($value);
    }
    
    public function __get($name) {
        ;
    }
    
    private function setUserName($value){
        if(empty($value)){
            throw new Exception("User Name is Empty");
        }
        $this->user_name = $value;
        dd($value);
    }
    
    private function setName(){
        
    }
    
    private function setEmail(){
        
    }
    
    
}

?>








