<?php
include("./connection/connection.php");

if (isset($_POST["save"])) 
{
   $FirstName=$_POST["FirstName"];
   $SecordName=$_POST["SecordName"];
   $Telephone=$_POST["Telephone"];
   $district=$_POST["district"];
   
   $insert=mysqli_query($database,"INSERT INTO `members`(`First_name`, `Secord_name`, `Telephone`, `district`) VALUES ('$FirstName','$SecordName','$Telephone','$district')");
   
   if ($insert == TRUE) 
   {
         print("<script>alert('User added well!..')</script>"); 
         header("location:../Pages/dashbord.php");
   }
}
?>