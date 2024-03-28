<?php

$connection = new mysqli("localhost","root","","user_db");

if($_SERVER['REQUEST METHOD'] === 'POST'){
   if(isset($_POST['submit'])){

$username = $_POST['username'];
$password = $_POST['password'];
$cpwd = $_POST['cpassword'];
$email = $_POST['email'];
//password
function checkpwd($password ,$cpwd){
    if($cpwd !== $password){
        header("Location: SignUp.php");
        echo("<script>alert('long password')</script>");
    }else{
        echo("thankyou");
        }
    }
//check if is not empty values
function validatevalues($username ,$password){
    if(!empty($username && $password)){
        return true;
    }else{
        return false;
    }
}

}
} 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="cpassword" name="cpassword" placeholder="confirm password">
        <input type="email" name="email" placeholder="email">
        <button type="submit" name="submit">login</button>
    </form>
</body>
</html>