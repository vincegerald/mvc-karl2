<?php 
require('../database/database.php');
class UsersModel{
    public $name;
    public $type;
    public $username;
    public $password;

    private $db;

    public function __construct(){
        $this->db = new Database();
    }
    public function addUser(){
        $sql = "INSERT INTO information(name,type,username,password) VALUES('$this->name','$this->type','$this->username','$this->password')";
        return $this->db->execute($sql);
    }
    public function auth(){
        $sql = "SELECT * FROM information WHERE username='$this->username' AND password='$this->password'";
        return $this->db->execute($sql);
    }

}


?>