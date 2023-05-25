<?php
require_once 'User.php';
$database_host = 'localhost';
$database_name = 'dbbabyxpress';
$database_user = 'root';
$database_password = '';

try{
    $db = new PDO("mysql:host={$database_host};dbname={$database_name}", $database_user, $database_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $userObj = new User($db);
    $username = $_POST['username'];
    $password = $_POST['password'];
    //echo "Username:".$username;
    //echo "Password:".$password;
    include_once("User.php");
    

    $resultLogin = $userObj->doLogin($username,$password);
    if($resultLogin == false){
        header("Location: login.php");
    }
    else{
        header("Location: dashboard.php");
    }
}catch(PDOException $e){
    echo 'connection error: ' . $e->getMessage();
}
?>