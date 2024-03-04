<?php
include("../php/connection/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>Umucyo | Dashbord</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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

<div class="web_right_part">
<div class="search">
    <input type="text" placeholder="Search Here !..">
    <input type="submit" name="search" value="Search">
</div> 
</div>
        
     </div>
<div class="input_submit">
    <input type="submit" value=" + | Add user to database" name="my_data" class="save">
</div>

<form action="../php/member.php" method="post">
<div class="oparation">
    
<div class="input_filds">
    <input type="text" name="FirstName" placeholder="FirstName">
    <input type="text" name="SecordName" placeholder="SecordName">
    <input type="text" name="Telephone" placeholder="Telephone">
    <input type="text" name="district" placeholder="district">
    <input type="submit" name="save" class="save">
</div>

</div>
</form>
<form action="" method="post">
<div id="user_contented">
<table border="1" >
<tr>
    <th>member_id</th>
    <th>FirstName</th>
    <th>SecordName</th>
    <th>Telephone</th>
    <th>district</th>
    <th colspan="2" >Action</th>
</tr>

<?php 
    include("../php/fetch.php");
    if($fetc->num_rows > 0)
        {
            while ($row = $fetc -> fetch_assoc()) {
                
                ?> 
            <tr>
                <td class="id" ><?= $row['member_id']?> </td>
                <td> <?=$row['First_name']?> </td>
                <td> <?=$row['Secord_name']?> </td>
                <td class="id" > <?=$row['Telephone']?> </td>
                <td> <?=$row['district']?> </td>
                <td class="btn" >
                <a class="delete" href="Remove.php?member_id=<?=$row['member_id']; ?>" ><i class="fa-solid fa-trash"></i></a>
                </td>
                <td class="btn">
                <a class="update" href="update.php?member_id=<?=$row['member_id']; ?>" ><i class="fa-solid fa-pen-to-square"></i></a>
                </td>
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