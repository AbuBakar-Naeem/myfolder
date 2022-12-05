<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <form class="form-inline m-2" action="Update.php" method="POST">

      <?php
         
         $id = $_GET['id'];

         $connect = mysqli_connect("localhost","root","","mydb");
         $query   = "SELECT * FROM `info` WHERE `S.no` = $id";

         $apply = mysqli_query($connect,$query);

         if(mysqli_num_rows($apply) > 0){
            while($data = mysqli_fetch_assoc($apply)){

      ?>
      
        <label for="name">Name:</label>
        <input type="hidden" name="id" value="<?php echo $data['S.no'] ?>" >
        <input type="text" class="form-control m-4" value="<?php echo $data['Name']?>" id="name" name="name">

        <label for="password">Password:</label>
        <input type="text" class="form-control m-4" value="<?php echo $data['Password']?>" id="password" name="password">

        <button type="submit" name="submit" class="btn btn-primary">Update</button>

    </form>

    <?php
         }

         }
    ?>

       
    
</body>
</html>