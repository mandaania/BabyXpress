<?php
include_once('../Controller/dbconnection.php');
// DbConnection.php
// ../../Controller/dbconnection.php
 
class User extends DbConnection{
 
    public function __construct(){
 
        parent::__construct();
    }
 
    public function check_login($email, $password){
 
        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $query = $this->connection->query($sql);
 
        if($query->num_rows > 0){
            $row = $query->fetch_array();
            return $row['id'];
        }
        else{
            return false;
        }
    }
 
    public function details($sql){
 
        $query = $this->connection->query($sql);
 
        $row = $query->fetch_array();
 
        return $row;       
    }
 
    public function escape_string($value){
 
        return $this->connection->real_escape_string($value);
    }
}
?>