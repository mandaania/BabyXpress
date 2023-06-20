<?php
if(!defined('DB_SERVER')){
    require_once("initialize.php");
    // ./View/html/LoginRegister/initialize.php
}

class DbConnection{
 
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'dbbabyxpress';
 
    public $connection;
    
    public function __construct(){
 
        if (!isset($this->connection)) {
 
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
 
            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
    }
    public function __destruct(){
        $this->connection->close();
    }

}
?>