<?php
require_once './Models/User.php';

function dd($arg) {
    echo "<pre>";
    print_r($arg);
    die;
}
function dd1($arg) {
    echo "<pre>";
    var_dump($arg);
    die;
}

$errors = array();

if ($_POST) {
//dd($_POST);
//    isset()
//    empty()

    if (class_exists('User')) {
        $user = new User();
    }


    try {
        $user->user_name = !empty($_POST['user_name']) ? $_POST['user_name'] : '';
    } catch (Exception $ex) {
        $errors['user_name'] = $ex->getMessage();
    }
    try {
        $user->name = !empty($_POST['name']) ? $_POST['name'] : '';
    } catch (Exception $ex) {
        $errors['name'] = $ex->getMessage();
    }
    try {
        $user->email = !empty($_POST['email']) ? $_POST['email'] : '';
    } catch (Exception $ex) {
        $errors['email'] = $ex->getMessage();
    }
    try {
        $dateOfBirth = array();
        $dateOfBirth['day'] = !empty($_POST['day']) ? (int) $_POST['day'] : '';
        $dateOfBirth['month'] = !empty($_POST['month']) ? (int) $_POST['month'] : '';
//        $dateOfBirth['month'] = 2;
        $dateOfBirth['year'] = !empty($_POST['year']) ? (int) $_POST['year'] : '';;
        $user->dob = $dateOfBirth;
        
    } catch (Exception $ex) {
        $errors['dob'] = $ex->getMessage();
    }


    try {
        $user->password = !empty($_POST['password']) ? $_POST['password'] : '';
    } catch (Exception $ex) {
        $errors['password'] = $ex->getMessage();
    }
    
//    echo $user->user_name;

    if(!empty($_POST['password']) && $_POST['retype_password']){
        if($_POST['password'] !== $_POST['retype_password']){
            $errors['retype_password'] = "Password and Ret;6ype Password not match";
        }
        
    }else{
        $errors['retype_password'] = "Retype Password is also required";
    }
    // retype passowrd
    

    try {
        $user->gender = !empty($_POST['gender']) ? $_POST['gender'] : '';
    } catch (Exception $ex) {
        $errors['gender'] = $ex->getMessage();
    }
    try {
        $user->profile_image = !empty($_FILES['image']) ? $_FILES['image'] : '';
    } catch (Exception $ex) {
        $errors['image'] = $ex->getMessage();
    }
    
    if(empty($errors)){
//        $addUser = $user->addToUser();
        if(true){
            $user->uploadProfileImage($_FILES['image']['tmp_name']);
        }
    }else{
        
    }
} 

?>
<style>
    .registration{
        max-width: 500px;
        width: 100%;
        margin: 0 auto;   
    }
</style>

<form method="post" action="" class="registration" enctype="multipart/form-data">
    <input type="text" name="user_name" placeholder="User Name"><br>
    <input type="text" name="name" placeholder="Enter Your name"><br>
    <input type="email" name="email" placeholder="Email">
    <br>
    <select name="day">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="31">31</option>
    </select>
    <select name="month">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <select name="year">
        <option value="2010">2010</option>
        <option value="2010">2010</option>
        <option value="2010">2010</option>
        <option value="2010">2010</option>
    </select>
    <br>
    <input type="password" name="password" placeholder="password">
    <br>
    <input type="password" name="retype_password" placeholder="Retype PAssword">
    <br>
    Male:
    <input type="radio" name="gender" value="male">
    Fe-male:
    <input type="radio" name="gender" value="fe-male">
    <br>
    <input type="file" name="image" >
    <br>
    <input type="submit" value="Registration">





</form>