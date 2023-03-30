<?php

include_once("User.php");
$username = $_POST['username'];
$password = $_POST['password'];
$emailUser = $_POST['emailuser'];
$userObj = new User();
$userObj->doRegister($username,$password,$emailUser);
?>