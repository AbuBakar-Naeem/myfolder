<?php 

$error = $succes = '';

if(isset($_POST['submit'])){

  $name = htmlspecialchars($_POST['name']);
  $password = htmlspecialchars($_POST['password']);

  if(empty($name)){
     $error = "Please Enter Your Name Above !";
  }
  elseif(empty($password)){
     $error = "Please Enter Password Above";
  }
  else{
     $connect = mysqli_connect("localhost","root","","mydb") or die("Connection Failed !");
     $query = "INSERT INTO `info`(`Name`, `Password`) VALUES ('$name','$password ')";

     $sql = mysqli_query($connect,$query);
     header('location: ./MyTable.php');
   }
  }
?> 