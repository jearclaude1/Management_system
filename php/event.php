<?php
include("./connection/connection.php");

if (isset($_POST["save"])) 
{
   $Event_name=$_POST["Event_name"];
   $Amount=$_POST["Amount"];
   $inchage=$_POST["Inchage"];
   $A_date=date('d/m/y');
   $insert=mysqli_query($database,"INSERT INTO `events`(`event_name`, `Amount`, `inchage`,`date`) VALUES ('$Event_name','$Amount','$inchage','$A_date');");

   if ($insert) 
   {
         $_SESSION['status']="Multiple Data inserted Successfully";
         header("location:../Pages/event.php");
         exit(0);
   }
   else {
      $_SESSION['status']="Data not inserted Successfully";
      header("location:../Pages/event.php");
      exit(0);
   }
}
?>