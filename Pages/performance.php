<?php
    include("../php/connection/connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/index.css">
    <title>Umucyo | Attendence</title>
    <style>

    </style>
</head>
<body>
    <div class="web_content">
        <div class="web_left_part">

            <div class="web_left_content">
                <div class="link_director">
                    <hr>
                    <!-- <h3 id="text">Go</h3> -->
                    <ul>
                        <li id="dashbord"><a href="dashbord.php"> Dashbord </a> </li>
                        <hr id="hr">
                        <li><a href="dashbord.php"> Home </a> </li>
                        <li><a href="event.php"> Event </a> </li>
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

                <form action="perfomance_fetch.php" method="post">
                    <select name="event_id" class="inputed" id="input_fild">
                    <option value="#" id="Checked" >Select Event</option>
                        <?php   
                            include "../php/event_fecth.php";
                                while($envents = $select->fetch_assoc()){
                        ?>  
                                <option value="<?=$envents["event_id"];?>">
                                    <?=$envents["event_name"];?>
                                </option>
                                
                            
                        <?php
                            }
                        ?>
                     </select>
                    <select name="date" id="input_fild">
                        <option>Select Date</option>
                        <?php
                            include "../php/event_fecth.php";
                            if($select -> num_rows > 0){
                                while($row = $select->fetch_assoc()){
                        ?>
                        <option value="<?=$row["date"];?>"><?=$row["date"];?></option>
                        <?php
                            }
                        }
                    ?>
                    </select>
                    <input type="submit" name="Selectbtn" class="save" values="Select">
                </form>
            </div>
        </div>
        <div id="user_contented">
            <table border="1">
                <tr>
                    <th>Event Name</th>
                    <th>Amount</th>
                    <th>Event Co</th>
                    <th>Date</th>
                </tr>
                <?php   
                    include "../php/perfomance_fetch.php";

                    if($select -> num_rows > 0){

                    while($event = $select->fetch_assoc()){
                    
                                ?>
                                    
                                    <tr>
                                    <td><input readonly type="text" name="Event Name" value="<?=$event['event_name']?>"> </td>
                                    <td><input readonly type="text" name="Amount" value="<?=$event['Amount']?>"> </td>
                                    <td><input readonly type="text" name="Event Co" value="<?=$event['inchage']?>"> </td>
                                    <td><input readonly type="text" name="date" value="<?=$event['date']?>"></td>
                                </tr>
                                        
                        <?php
                        }
                            }else{
                                ?>
                                <?php
                                include("../php/perfomance_fetch.php");
                                if($select ->num_rows > 0){
                                    while ($row = $select->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td><input readonly type="text" name="FirstName" value="<?=$row['First_name']?>"> </td>
                                        <td><input readonly type="text" name="SecordName" value="<?=$row['Secord_name']?>"> </td>
                                        <td><input readonly type="text" name="attendence" value="<?=$row['attendence']?>"> </td>
                                        <td><input readonly type="text" name="date" value="<?=$row['date']?>"></td>
                                    </tr>
                            <?php
                        }
                    }
                    else{
                        // echo $error;
                    }
                }
                ?>

                </tr>
            </table>
        </div>
    </form>
    <script src="../javascript/index.js"></script>
</body>

</html>