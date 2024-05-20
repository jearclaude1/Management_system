<?php
session_start();
include("../php/connection/connection.php");

if (isset($_POST["submit"])) 
{
   $FirstName=$_POST["FirstName"];
   $SecordName=$_POST["SecordName"];
   $userName=$_POST['username'];
   $email=$_POST['email'];
   $Telephone=$_POST["Telephone"];
   $gender=$_POST['gender'];
   $pswd=$_POST['password'];
   $district=$_POST["district"];
   $cpwd=$_POST['cpassword'];
   $_SESSION['cpassword'] = $cpwd;
   echo($_SESSION['cpassword'] = $cpwd);
   
   $insert=mysqli_query($database,"INSERT INTO members(`First_name`,`Secord_name`,`username`,`email`,`Telephone`,`gender`,`password`,`district`) VALUES ('$FirstName','$SecordName','$userName','$email','$Telephone','$gender','$pswd','$district')");
   
   if ($insert == TRUE) 
   {
         print("<script>alert('User added well!..')</script>"); 
         header("location:.../Pages/dashbord.php");
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>UmucyoSignUp Page</title>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="shortcut icon" href="../Assets/img/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="../Assets/css/preloader.css">
<link rel="stylesheet" href="../Assets/css/index.css">
</head>
<body style="background:rgb(230, 230, 230); bacground:no-repeat;">
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
                <label for="firstName" class="form-label">firstName:</label>
                <input type="text" name="FirstName" class="form-control" required>   
            </div>
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
        <div class="left-cols" style="margin-left:2rem;">
            <div class="mb-3 mt-3">
                <label for="lastName" class="form-label">Lastname:</label>
                <input type="text" name="LastName" class="form-control" required>   
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" required>   
            </div>
            <div class="mb-3 mt-3">
                <label for="cpassword" class="form-label">Comfirm password:</label>
                <input type="password" name="cpassword" class="form-control" required>   
            </div>
            <div class="mb-3 mt-3">
                <label for="gender" class="form-label"> Gender:</label>
                <input type="text" name="gender" class="form-control" required>   
            </div>
        </div>
        </div>
        <!-- end left column -->
        <div class="down-div mb-5" style="margin-left:3rem; margin-top:-2rem;">
         <button type="submit" class="btn btn-primary d-block mb-5" style="width: 35rem;"> SignUp</button>
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
