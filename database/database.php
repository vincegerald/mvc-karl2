<?php
class database{
    private $con;

    public function __construct(){
        $this->con = mysqli_connect("localhost","root","","project");
    }
    public function execute($sql){
        return mysqli_query($this->con, $sql);
    }
}

?>