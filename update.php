<?php

if(isset($_POST['submit'])){

    $id = $_POST['id'];
    $name = htmlspecialchars($_POST['name']);
    $password = htmlspecialchars($_POST['password']);

    if(empty($name)){
        $error = "Please write the new Updated Data";
    }
    elseif(empty($password)){
        $error = "Please write the new Updated Password";
    }
    else {
        $connect = mysqli_connect("localhost","root","","mydb");
        $query = "UPDATE `info` SET `Name`='$name',`Password`='$password' WHERE `S.no`=$id";

        mysqli_query($connect,$query) or die("Connection Failed");
        header('location: ./MyTable.php');
    }
}

?>