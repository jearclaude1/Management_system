<?php

include("../php/connection/connection.php");
if(isset($_POST["save"])) 
{
   $username=$_POST["email"];
   $password=$_POST["password"];

   $insert=mysqli_query($database,"SELECT * FROM `user` WHERE `Username`='$username' AND `Password`='$password'; ");

   if($insert == false){
    echo "<script>alert('invalid username tor password !');</script>";
   }
   else{
   echo "<script>alert('Welcome to Umucyo Choir.');</script>";
   header("location:../Pages/dashbord.php"); 
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>

<!-- Latest compiled and minified CSS -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="shortcut icon" href="../Assets/img/favicon.png" type="image/x-icon">
</head>
<body style="background:rgb(230, 230, 230z); background:no-repeat;">

<!-- Preloader HTML -->

<div id="preloader">
    <div class="spinner"></div>
</div> 
<!-- end -->
<div class="container ">
    <div class="card px-2 py-2" style="width:700px; margin-left:19rem; margin-top:5rem; border-radius:10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);">
        <div class="card-body">
            <p class="h3 text-primary text-center p-1">SignIn To UmucyoChoirMs</p>
        </div>
        <div class="form" style="width:500px; margin-left:6rem; margin-top:2rem">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="">
                    <label for="username" class="form-label">Username:</label><br>
                    <input type="text" class="form-control" id="username" name="username" required><br><br>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="">
                    <label for="password" class="form-label">Password:</label><br>
                    <input type="password" class="form-control" id="password" name="password" required><br><br>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="down" style="display:flex; padding:3rem; margin-top:-1rem;">
                <input type="submit" value="SignIn" name="save" id="signup" class="btn btn-primary" style="width:60rem; margin-top:-3rem;">
            </div>
                <div class="down d-flex">
                <a href="./SignUp.php">Forget your password?</a>
                <a href="../index.php" class="btn btn-primary" style="margin-left:2rem;">Back</a>
            </div>
        </form> 
  </div>
</div>
</div>

<!-- Footer -->
<div class="footer" style="margin-top:10rem;">
<div class="footermain text-center mt-5 text-dark-primary">
        &copy; copyrigth 2024 , UmucyoChoirManagment System , From CyberCodeTechLtd
    </div>
</div>
<script src="./js/preloader.js"></script>
</body>
</html>
