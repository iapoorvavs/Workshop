<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="insert into `crud` (name, email, mobile, password)
    values('$name','$email','$mobile','$password')";
    $result=mysqli_query($con, $sql);
    if($result){
      header('location:display.php');  
      //echo "Data inserted successfully";
    }else{
        die(mysqli_error ($con));
    }


}






?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  </head>
  <body>
    <h3>CRUD Operation</h3>
  </body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <form method="post">
            <div class="row mb-3">
                 <label for="inputName3" class="col-sm-1 col-form-label">Name</label>
        <div class="col-sm-5">
    <input type="name" class="form-control" id="inputName3"
    placeholder="Enter your name"
    name="name">
  </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-1 col-form-label">Email</label>
    <div class="col-sm-5">
      <input type="email" class="form-control" id="inputEmail3"
      placeholder="Enter your email"
      name="email">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputMobile3" class="col-sm-1 col-form-label">Mobile</label>
    <div class="col-sm-5">
      <input type="mobile" class="form-control" id="inputMobile3"
      placeholder="Enter your mobile"
      name="mobile">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-1 col-form-label">Password</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" id="inputPassword3"
      placeholder="Enter your password"
      name="password">
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="submit" style="width: 300px; height: 50px;">Submit</button>
</form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>