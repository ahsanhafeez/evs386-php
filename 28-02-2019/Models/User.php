<?php

class DataBaseConnection {
    
    protected $con;

    public function __construct() {
        $this->getConnection();
    }
    
    public function getConnection() {
        $mySql = new mysqli();
        
        $mySql->connect('127.0.0.1', 'root', '');
        
        if(!empty($mySql->connect_errno)){
            throw new Exception("Connection not created");
        }
        
        
        $mySql->select_db('evs386');
        
        if($mySql->error){
            throw new Exception("Database name not correct");
        }
        
        $this->con =  $mySql;
        
    }

}


class User extends DataBaseConnection{

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
        if (!method_exists($this, $methodName)) {
            throw new Exception("Setter Function not exists : " . $name);
        }
        $this->$methodName($value);
    }

    public function __get($name) {
        $methodName = "get";
        $explode = explode("_", $name);
        $ucfirst = array_map('ucfirst', $explode);
        $implode = implode("", $ucfirst);
        $methodName .= $implode;
        if (!method_exists($this, $methodName)) {
            throw new Exception("Getter: Function not exists : " . $name);
        }
        return $this->$methodName();
    }

    private function setUserName($value) {
        $value = trim($value);
        if (empty($value)) {
            throw new Exception("User Name is Empty");
        }
        $this->user_name = $value;
    }
    
    private function getUserName(){
        return $this->user_name;
    }

    private function setName($value) {
        $value = trim($value);
        if (empty($value)) {
            throw new Exception("Name is Empty");
        }
        $this->name = $value;
    }
    private function getName() {
        return $this->name;
    }

    private function setEmail($value) {
        // regax pending

        $value = trim($value);
        if (empty($value)) {
            throw new Exception("Email requried");
        }
        $this->email = $value;
    }
    
    private function getEmail() {
        return $this->email;
    }

    private function setDob($value) {
        extract($value);
//        dd($year);
        if (!checkdate($month, $day, $year)) {
            throw new Exception("Date is invalid");
        }
//        dd(date());
//        dd((1551799884 + 3600) - time());

        $dob = mktime(0, 0, 0, $month, $day, $year);

        $this->dob = $dob;
    }
    
    private function getDob() {
        return $this->dob;
    }

    private function setPassword($value) {

        $value = trim($value);
        if (empty($value)) {
            throw new Exception("password is Empty");
        }

        if (strlen($value) < 5) {
            throw new Exception("Your password less then 5");
        }

        $this->password = sha1($value);
    }
    
    private function getPassword() {
        return $this->password;
    }

    private function setProfileImage($image) {

        if ($image['error'] == 4) {
            throw new Exception('Please select the image');
        }

        if ($image['type'] !== "image/jpeg") {
            throw new Exception('Please select JPEG image');
        }


        if ($image['size'] > 5242880) {
            throw new Exception("Your image size less then 5mb");
        }

        $image_size = getimagesize($image['tmp_name']);


        if ($image['type'] !== $image_size['mime']) {
            throw new Exception('Image not valid');
        }
        $getExtension = explode('.', $image['name']);
        $ext = end($getExtension);


        $this->profile_image = $this->user_name . '.' . $ext;
    }
    
    private function getProfileImage() {
        return $this->profile_image;
    }
    
    private function setGender($value){
        $value = trim($value);
        if (empty($value)) {
            throw new Exception("Gender requried");
        }
        $this->gender = $value;
    }
    
    private function getGender(){
        return $this->gender;
    }

    
    public function addToUser(){
        dd('here');
    }
    
    public function uploadProfileImage($imagePath){
        
        $uploadImage = "../users/" . $this->username . '/';
//        dd(__FILE__);
//        dd1(__DIR__ .'/../users');
        if(!is_dir(__DIR__ .'/../users')){
            mkdir(__DIR__ .'/../users');
        }
        
        if(!is_dir(__DIR__ .'/../users/'.$this->user_name)){
            mkdir(__DIR__ .'/../users/'.$this->user_name);
        }
        
        
//        $upload = move_uploaded_file($imagePath, $uploadImage);
//        
        dd($upload);
//        dd($uploadImage);
    }
    
    
}
?>








