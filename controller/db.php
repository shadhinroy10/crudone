<?php


$servername = "localhost";
$username = "root";
$password = "";
$datatable = "crudone";

$conn = new mysqli($servername,$username,$password,$datatable);

if ($conn->connect_error){
    die("connection Failed:".$conn->connect_error);
}


?>
