<?php 
session_start();
define('BASE_URL', __DIR__ . "/");
$image_path = "http://" . $_SERVER['SERVER_NAME'] . "/evs/evs386/php/28-02-2019/";

define("IMG_BASE_PATH" , $image_path);

if(empty($_SESSION['users'])){
   header("Location: http://localhost/evs/evs386/php/28-02-2019/login.php"); 
}


$userData = !empty($_SESSION['users']) ? unserialize($_SESSION['users']) : '';

?>
<h1>User Dashbaord</h1>

<h3><?= $userData['name'] ?></h3>
<img src="<?= IMG_BASE_PATH . "users/" .$userData['user_name'] ."/" . $userData['profile_image']  ?>" >

<?php 
echo "<pre>";
print_r($userData);

?>

