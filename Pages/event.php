<?php
include("../php/connection/connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>Umucyo | Dashbord</title>
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
<?php
if (isset($_SESSION['status'])) {
    ?>
    <h4><?php echo $_SESSION['status'];?></h4>
    <?php
    unset($_SESSION['status']);
}
?>
<form  method="post">
    <div class="web_right_part">
        <div class="search">
            <input type="text"  name="input" placeholder="Search Here !..">
            <input type="submit" name="search" value="Search">
        </div> 
    </div>

</div>
</form>
<form action="../php/event.php" method="post">
    <div class="oparation">

        <div class="input_submit">
            <label>Event/action </label>
        </div>

        <div class="input_fild">
            <input type="text" name="Event_name" placeholder="Event_name">
            <input type="text" name="Amount" placeholder="Amount">
            <input type="text" name="Inchage" placeholder="Inchage">
            <input type="submit" name="save" class="save" onclick="alert('insert well record....!')" >
        </div>
    </div>
</form>
        
<form action="../php/activity.php" method="post">
  <div class="user_contented">
            <div class="dog">
                    <div class="top">
                        <div class="text" id="top">
                            <label for=""> Add user activity </label>
                        </div>
                    <div class="button_to_add" id="top">
                        <input type="button" class="add_user" value="Add user">
                    </div>
                </div>
            </div>
        <div class="content">
<div class="selection_content">
    <div class="selection_memember">
            <select name="member_id[]" id="input_fild">        
                    <option>Select Name</option>
                    <?php
                    include("../php/connection/connection.php");
                        $select = mysqli_query($database,"SELECT * FROM members");
                            if ($select->num_rows > 0) {
                                while ($row = $select->fetch_assoc()) {
                    ?>
                           <option value="<?=$row['member_id']; ?>"> <?php echo $row["First_name"]." ".$row['Secord_name'] ?></option>
                                    <?php
                                }
                            }
                    ?>
            </select>
    </div> 
    <div class="selection_event">
    <select name="event_id[]" id="input_fild">
            
        <option>Select Event</option>
            <?php
                include("../php/connection/connection.php");
                    $select = mysqli_query($database, "SELECT * FROM events ");
                        if ($select->num_rows > 0) {
                            while ($row = $select->fetch_assoc()) {
            ?>
                            <option value="<?= $row["event_id"]; ?>"><?php echo $row["event_name"]; ?></option>
                                <?php
                            }
                        }
            ?>
    </select>
    </div>
    <div class="Select_Amout">
            <input type="text" name="Amount[]" placeholder="Amount">
            <input type="button" value="Remove" onclick="removeUser(this)">
    </div>  
</div> 

<div class="added_user_record"></div> 
    </div>
    <div class="save_button">
        <input type="submit" id="save_button" name="saved" value="Save Data">
    </div>
</div>

</form>

<script src="../javascript/index.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('.add_user').addEventListener('click', function () {
        var addedUserRecord = document.querySelector('.added_user_record');
        var content = document.createElement('div');
        content.classList.add('content');
        content.innerHTML=` 
        <div class="selection_content">
            <div class="selection_memember">
                <select name="member_id[]" id="input_fild">        
                    <option>Select Name</option>
                        <?php
                            include("../php/connection/connection.php");
                                $select = mysqli_query($database,"SELECT * FROM members");
                                    if ($select->num_rows > 0) {
                                        while ($row = $select->fetch_assoc()) {
                        ?>
                                        <option value="<?=$row['member_id']; ?>"> <?php echo $row["First_name"]." ".$row['Secord_name'] ?></option>
                                            <?php
                                        }
                                    }
                        ?>
                    </select>
         </div> 
        <div class="selection_event">
            <select name="event_id[]" id="input_fild">     
                <option>Select Event</option>
                    <?php
                        include("../php/connection/connection.php");
                            $select = mysqli_query($database, "SELECT * FROM events ");
                                if ($select->num_rows > 0) {
                                    while ($row = $select->fetch_assoc()) {
                    ?>
                                    <option value="<?= $row["event_id"]; ?>"><?php echo $row["event_name"]; ?></option>
                                        <?php
                                    }
                                }
                    ?>
            </select>
    </div>
        <div class="Select_Amout">
            <input type="text" name="Amount[]" placeholder="Amount">
            <input type="button" value="Remove" onclick="removeUser(this)">
        </div>         
</div>`;
        addedUserRecord.appendChild(content);
    });

    function removeUser(element) {
        var content = element.parentNode;
        content.parentNode.removeChild(content);
    }
});
</script>
</body>
</html>