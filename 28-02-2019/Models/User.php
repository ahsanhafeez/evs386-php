<?php

class User {

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
        ;
    }

    private function setUserName($value) {
//        $value .= "     ";
//        ltrim($str)
//        rtrim($str)
        $value = trim($value);
        if (empty($value)) {
            throw new Exception("User Name is Empty");
        }
        $this->user_name = $value;
    }

    private function setName($value) {
        $value = trim($value);
        if (empty($value)) {
            throw new Exception("Name is Empty");
        }
        $this->name = $value;
    }

    private function setEmail($value) {
        // regax pending

        $value = trim($value);
        if (empty($value)) {
            throw new Exception("Email requried");
        }
        $this->email = $value;
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

    private function setProfileImage($image) {

        if ($image['error'] == 4) {
            throw new Exception('Please select the image');
        }

        if ($image['type'] !== "image/jpeg") {
            throw new Exception('Please select JPEG image');
        }
        
        
        $image_size = getimagesize($image['tmp_name']);
        
        
        if($image['type'] !== $image_size['mime']){
             throw new Exception('Image not valid');
        }
        dd($image_size);
    }

}
?>








