<?php
include("../php/connection/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Asset/css/index.css">
    <title>Umucyo | Dashbord</title>
</head>
<body>
<div class="web_content">
<div class="web_left_part">

<div class="web_left_content">
<div class="link_director">
<!-- <h3 id="text">Go</h3> -->
    <ul>
    <li><a href="dashbord.php"> Home </a>    </li>
    <li><a href="event.php"> Event </a>   </li>
    <li><a href="attend.php"> Attendence </a> </li>
    <li><a href="performance.php"> Perfomance </a> </li>
</ul> 
</div>
</div>

<div class="hamburger">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
</div>
            
        </div>

<div class="web_right_part">
<div class="search">
    <input type="text" placeholder="Search Here !..">
    <input type="submit" name="search" value="Search">
</div> 
</div>
        
     </div>
<form action="" method="post">
<div class="oparation">
<div class="input_fild">
    
<?php
include("../php/connection/connection.php");

if (!$database) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['member_id']) && is_numeric($_GET['member_id'])) {
    $id = $_GET['member_id'];
 
    $sql="SELECT `First_name`, `Secord_name`, `Telephone`, `district` FROM `members` where member_id='$id'";
    $result = $database->query($sql);

    if($result -> num_rows > 0){
        while ($row = $result -> fetch_assoc()) {
            ?>
        <h2> UPDATE site </h2>
        <form action="" method="post">
            <input type="text" name="First_name" value="<?=$row['First_name'];?>">
            <input type="text" name="Secord_name" value="<?=$row['Secord_name'];?>">
            <input type="text" name="Telephone" value="<?=$row['Telephone'];?>">
            <input type="text" name="district" value="<?=$row['district'];?>">
            <input type="submit" value="update" name="update">

        </form>
    <?php 
    }
  }
}
?>
<?php
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
            header("location:dashbord.php");
            exit();
        } 
?>
</div>
</div>
</form>
<script src="../javascript/index.js"></script>
</body>
</html>