<?php

class Database
{
    public $conn;


    public function Conn()
    {
        $this->conn = mysqli_connect("localhost", "root", "", "sound_db");

        if (mysqli_connect_error()) {
            echo ("Connection failed") . mysqli_connect_error();
        }
    }
    public function Insert($name, $desc, $path)
    {
        $sql = "INSERT INTO `naat`(`name`, `description`, `path`) VALUES ('$name','$desc','$path')";
        $res = mysqli_query($this->conn, $sql);
    }
    public function Show_Records()
    {
        $sql = "Select * FROM naat";
        $res = mysqli_query($this->conn, $sql);
        return $res;
    }

    public function View_Records($id)
    {
        $sql = "Select * FROM naat where id='$id'";
        $res = mysqli_query($this->conn, $sql);
        return $res;
    }
    public function Add_Comments($comments, $id){
        $sql = "UPDATE `naat` SET `comments`='$comments' WHERE id='$id'";
        $res = mysqli_query($this->conn, $sql);
    }
}

$db = new Database();
$db->Conn();
