<?php
session_start();
define('BASE_URL', __DIR__ . "/");
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
    if (class_exists('User')) {
        $user = new User();
    }

    try {
        $user->email = !empty($_POST['email']) ? $_POST['email'] : '';
    } catch (Exception $ex) {
        $errors['email'] = $ex->getMessage();
    }


    try {
        $user->password = !empty($_POST['password']) ? $_POST['password'] : '';
    } catch (Exception $ex) {
        $errors['password'] = $ex->getMessage();
    }


    if (empty($errors)) {
        try {
            $userDetail = $user->getUserDetail();
        } catch (Exception $ex) {
            $errors['users'] = $ex->getMessage();
        }
        if(!empty($errors)){
            $_SESSION['errors'] = serialize($errors);
        }else{
            $_SESSION['users'] = serialize($userDetail);
            unset($_SESSION['errors']);
            header("Location: http://localhost/evs/evs386/php/28-02-2019/dashboard.php");
        }
    } else {
        $_SESSION['errors'] = serialize($errors);
    }
}
?>
<style>
    .login{
        max-width: 500px;
        width: 100%;
        margin: 0 auto;   
    }
</style>
<?php
$errors = !empty($_SESSION['errors']) ? unserialize($_SESSION['errors']) : '';
?>
<ul>
    <?php
    if (!empty($errors)) {
        foreach ($errors as $key => $error) {
            ?>
            <li><?php echo $error; ?></li>
            <?php
        }
    }
    ?>
</ul>
<form method="post" action="" class="login" enctype="multipart/form-data">
    <input type="email" name="email" placeholder="Email">
    <br>
    <input type="password" name="password" placeholder="password">
    <br>
    <input type="submit" value="Registration">





</form>