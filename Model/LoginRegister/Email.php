<?php
 class Email{
    private $emailAdress;
    private $password;

    function doLogin(){
        echo "Proses login gmail:".$emailAdress;
    }

    function sendEmail($subject,$emailUser,$content){
        echo "Email diproses";
    }


 }

?>