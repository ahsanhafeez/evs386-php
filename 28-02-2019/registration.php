<?php
require_once './Models/User.php';

function dd($arg) {
    echo "<pre>";
    print_r($arg);
    die;
}
$errors = array();

if ($_POST) {

//    isset()
//    empty()

if(class_exists('User')){
    $user = new User();
}


    try{
        $user->user_name = !empty($_POST['uname']) ? $_POST['uname'] : '';
    } catch (Exception $ex) {

    }
    
    $user->user_name = !empty($_POST['uname']) ? $_POST['uname'] : '';
    
    $user->user_name = !empty($_POST['uname']) ? $_POST['uname'] : '';
}

//dd/();
?>


<form method="post" action="">
    <input type="text" name="uname" placeholder="User Name"><br>
    <input type="text" name="name" placeholder="Enter Your name"><br>
    <input type="email" name="email" placeholder="Email">
    <br>
    <select name="day">
        <option value="1">1</option>
        <option value="1">1</option>
        <option value="1">1</option>
        <option value="1">1</option>
    </select>
    <select name="month">
        <option value="1">1</option>
        <option value="1">1</option>
        <option value="1">1</option>
        <option value="1">1</option>
    </select>
    <select name="year">
        <option value="1">1</option>
        <option value="1">1</option>
        <option value="1">1</option>
        <option value="1">1</option>
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