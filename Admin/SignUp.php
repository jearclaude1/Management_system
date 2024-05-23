<?php
session_start();

include("../php/connection/connection.php");

if (isset($_POST["save"])) 
{
   $username=$_POST["username"];
   $password=$_POST["password"];
   $Telephone=$_POST["Telephone"];

//    right size

   $email=$_POST["email"];
   $conform_password=$_POST["conform_password"];
   $user_type='user';
   
   $insert=mysqli_query($database,"INSERT INTO `user`(`user_id`, `Username`, `Password`, `Telephone`, `email`, `conform_password`, `user_type`) 
   VALUES ('','$username','$password','$Telephone','$email','$conform_password','$user_type')");
   
   if ($insert) 
   {

         header("location:../Pages/dashbord.php"); 
         echo "<script>alert('Welcome to Umucyo Choir.');</script>";
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>UmucyoSignUp Page</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="shortcut icon" href="../Assets/img/favicon.png" type="image/x-icon">

</head>
<body style="background:rgb(230, 230, 230); background:no-repeat;">
<!-- Preloader HTML -->
<!-- <div id="preloader">
    <div class="spinner"></div>
</div>  -->
<!-- end -->
<div class="container">
    <div class="card mt-3" style="width:50rem; margin-left:15rem">
        <div class="card-body text-center text-primary">
            <!-- <img src="../Assets/img/favicon.png" class="img-fluid" alt="umucyo image"> -->
            <p class="h4">SignUp To UmucyoChoirMs</p>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" style="margin-left:4rem;">
       <div class="main d-flex m-5">
        <!-- right column of form -->
        <div class="right-cols">

            <div class="mb-3 mt-3">
                <label for="username" class="form-label">username:</label>
                <input type="text" name="username" class="form-control" required>   
            </div>
            <div class="mb-3 mt-3">
                <label for="password" class="form-label">password:</label>
                <input type="password" name="password" class="form-control" required>   
            </div>
            <div class="mb-3 mt-3">
                <label for="phone" class="form-label">Phones:</label>
                <input type="number" name="Telephone" class="form-control" placeholder="+250 " required>   
            </div>
        </div>
        <!-- end right column -->

        <!-- left column of form -->
       
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" required>   
            </div>
            <div class="mb-3 mt-3">
                <label for="cpassword" class="form-label">Comfirm password:</label>
                <input type="password" name="conform_password" class="form-control" required>   
        </div>
        </div>
        <!-- end left column -->
         <div class="down-div mb-5" style="margin-left:3rem; margin-top:-2rem;">
         <input type="submit" class="btn btn-primary d-block mb-5" style="width: 35rem;" name="save"> SignUp</input>
         <a href="./SignIn.php">Arleady have an Account?</a>  
        </div>
    </form>
    </div>
</div>
    <!-- end main -->

<!-- Footer -->
<div class="footer">
<div class="footermain text-center mt-5 text-dark-primary" >
        &copy; copyrigth 2024 , UmucyoChoirManagment System , From CyberCodeTechLtd
    </div>
</div>
<script src="../Assets/js/preloader.js"></script>
</body>
</html>
