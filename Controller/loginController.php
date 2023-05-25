<?php
$username = $_POST['username'];
$password = $_POST['password'];
//echo "Username:".$username;
//echo "Password:".$password;
include_once("User.php");
$userObj = new User();
$resultLogin = $userObj->doLogin($username,$password);
if($resultLogin == false){
    header("Location: login.php");
}
else{
    echo "Login diproses";
}

?>