<?php
include_once("Email.php");
class User{
  private $conn;
  private $table = 'user'; 
  private $id;
  private $db;

    private $username;
    private $password;
    private $emailUser;
    public function __construct($conn){
      $this->conn = '$db';
    }

    public function doLogin($username,$password){
        $query = 'SELECT * FROM ' . $this->table . 'WHERE username = :username';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $this->username);
        $stmt->execute();
        $row = $stmt->fetch(PDO:FETCH_ASSOC);

        if($row && password_verify($this->password, $row['password'])){
          $this->id = $row['id'];
          return true;
        }
        return false;
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