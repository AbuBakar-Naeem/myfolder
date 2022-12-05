<?php

if(isset($_GET['del'])){
    $id = $_GET['del'];

    $con = mysqli_connect("localhost","root","","mydb") or die("Failed");
    $set = "DELETE FROM `info` WHERE `S.no` = $id";
 
    $sql = mysqli_query($con,$set) or die("It FAILED");

    header('location: ./MyTable.php');

}

?>