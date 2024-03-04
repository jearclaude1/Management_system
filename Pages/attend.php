
<?php
include("../php/connection/connection.php");

if (isset($_POST["save"])) 
{
   $FirstName=$_POST["FirstName"];
   $SecordName=$_POST["SecordName"];
   $attendence=$_POST['attendence'];
   $date=$_POST["date"];
   
   foreach($FirstName AS $index => $FirstNames){
    $A_FirstName=$FirstNames;
    $A_SecordName=$SecordName[$index];
    $A_attendence=$attendence[$index];
    $A_date=date('d/m/y');

    $insert=mysqli_query($database,"INSERT INTO `attendance_list` (`First_name`, `Secord_name`, `attendence`, `date`) 
    VALUES ('$A_FirstName','$A_SecordName','$A_attendence','$A_date')");
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>Umucyo | Attendence</title>
</head>
<body>
<div class="web_content">
    <div class="web_left_part">
    <div class="web_left_content">
<div class="link_director">
<hr>
<!-- <h3 id="text">Go</h3> -->
    <ul>
    <li id="dashbord"><a href="dashbord.php"> Dashbord </a>   </li>
    <hr id="hr">
    <li><a href="dashbord.php"> Home </a>   </li>
    <li><a href="event.php"> Event </a>   </li>
    <li><a href="attend.php"> Attendence </a> </li>
    <li><a href="performance.php"> Management </a> </li>
    <li><a href="performance.php"> Perfomance </a> </li>
</ul> 
<hr> 
</div>
</div>

<div class="hamburger">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
</div>
            
</div>
<form action="" method="post">
<div class="web_right_part">
    <div class="search">
        <input type="text" name="input" placeholder="Search Here !..">
        <input type="submit" name="search" value="Search">
    </div> 
</div>
</form>     
     </div>
<form action="" method="post">
<div class="oparation">
<div class="input_fild">
    <input type="Date" id="input_fild_date" name="date[]">
    <input type="submit" name="save" class="save">
</div>
</div>
<div id="user_contented">
    <table>
    <tr>
        <th>FirstName</th>
        <th>SecordName</th>
        <th>Attendence</th>
    </tr>
    <?php 
        include("../php/fetch.php");

        if($fetc ->num_rows > 0)
        {
            foreach ($fetc AS $row) {
                ?> 
                <tr>
                    <td><input type="text" name="FirstName[]" value="<?=$row['First_name']?>" > </td>
                    <td><input type="text" name="SecordName[]" value="<?=$row['Secord_name']?>" > </td>
                    <td> <input type="text" name="attendence[]"  id="input_fild_attend"> </td>
                </tr>
                <?php
            }
        }
        else{

            echo $error;
        }
    ?>

    </tr>
    </table>
</div>
</form>
<script src="../javascript/index.js"></script>
</body>
</html>