<?php

include_once 'db.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $sql ="INSERT INTO person(`name`,`phone`) VALUES ('$name','$phone')";
    $query = $conn->query($sql);
    if($query==TRUE){
        header("Location:../student.php");

    }else{
        header("Location: ../index.php");
    }
}


?>
