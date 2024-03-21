<?php
class Database{
    public $conn; 

    // connection
    public function connect_db(){
        $this->conn= mysqli_connect("localhost", "root", "", "e_comm");

        if(mysqli_connect_errno())
        {
            die("Database connection failed! ". mysqli_connect_errno());
        }
    }

    // create 
    public function create($name, $age){
        $sql="INSERT INTO `example` (`name`, `age`)  VALUES ('$name','$age')"; 
        $res= mysqli_query($this->conn, $sql);

        if($res){
            return true; 
        }
        else{
            return false; 
        }
    }


}
$db= new Database();
$db->connect_db(); 

?>