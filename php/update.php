<?php

include("./connection/connection.php");

if(isset($_POST['update'])){
            $First_name=$_POST['First_name'];
            $Secord_name=$_POST['Secord_name'];
            $Telephone=$_POST['Telephone'];
            $district=$_POST['district'];

            $sql= "UPDATE `members` SET `First_name`='$First_name',`Secord_name`='$Secord_name',`Telephone`='$Telephone',`district`='$district' WHERE member_id='$id'";
            $result= $database-> query($sql);
            
          if (!$result) {
            die("Deletion failed: " . mysqli_error($database));
           }
           header("location:../Pages/dashbord.php");
            exit();
        } 
?>