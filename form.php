<!DOCTYPE html>
<html>
<head>
    <title>Form To Data Base</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">

  <h2>Enter Data Above</h2>

  <form class="form-inline m-2" action="create.php" method="POST">

    <label for="name">Name:</label>
    <input type="text" class="form-control m-4" id="name" name="name">

    <label for="password">Password:</label>
    <input type="text" class="form-control m-4" id="password" name="password">

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>

  </form>

  <h5></h5>
  <h5></h5>
  
</div>
</body>