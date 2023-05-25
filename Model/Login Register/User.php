<?php
include_once("Email.php");
class User{

    private $username;
    private $password;
    private $emailUser;

    public function doLogin($username,$password){
        $this->username = $username;
        $this->password = $password;
       if($this->username == '' || $this->password == ''){
         return false;
       }
       else{
         return true;
       }

    }

    public function doRegister($username,$password,$emailUser){

        //validate

        //Email
        $emailObj = new Email();
        $subject = "Verification User:".$username;
        $content ="GenerateCode:xwrda";
        $emailObj->sendEmail($subject,$emailUser,$content);
    }

}

?>