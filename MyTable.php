<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    


<main class="content">
<div class="container-fluid p-0">

<h1 class="h3 mb-3">Data Base:</h1>
<div class="row">
	<div class="col-12">
	<div class="card">
	<div class="card-header">
		<h5 class="card-title mb-0">The Data From MySql Data Base:</h5>
</div>
	<div class="card-body">
	    <table class="table table-hover my-0">


        <?php 

          $connect = mysqli_connect("localhost","root","","mydb") or die("Failed");
          $get = "SELECT * FROM `info`" ;
          $res = mysqli_query($connect,$get);
          if(mysqli_num_rows($res) > 0) {

        ?>
                                 
        <thead>

			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Password</th>
			    <th>Created At</th>
				<th>Actions</th>
			</tr>

	    </thead>
		<tbody>
        <?php
           while($data = mysqli_fetch_assoc($res)){                    
        ?>            
                                    
        <tr>
                                    
            <td> <?php echo $data['S.no'] ?> </td>
		    <td> <?php echo $data['Name'] ?> </td>
			<td> <?php echo $data['Password']  ?> </td>
			<td> <?php echo $data['Time'] ?> </td>
            <td>
                                        
            <button class="btn btn-danger" > <a href="./delete.php?del=<?php echo $data['S.no']?>"> Delete</a></button> 

            <button class="btn btn-btn-primary"> <a href="./edit.php?id=<?php echo $data['S.no']?>"> Edit </a> </button> 

            <button class="btn btn-btn-primary"> <a href="./form.php"> Go Home </a> </button>
            </td>

        <?php } ?>

        </tr>

        </tbody>
        </table>

        <?php 
             }
                else{
                      echo "Record Not Found"; 
                }                    
        ?>


	    </div>
	    </div>
	    </div>
	    </div>
	    </div>
        </main>
    </body>
</html>