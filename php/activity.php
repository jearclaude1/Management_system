<?php
    $database=new mysqli("localhost","root","","Umucyo");

    if (isset($_POST["saved"])) {
        $member_id = $_POST["member_id"];
        $event_id = $_POST["event_id"];
        $Amount = $_POST['Amount'];
        $dates=date('d/m/y');

        foreach ($member_id as $index =>$member_id) {
            $A_member_id= $member_id;
            $A_event_id = $event_id[$index];
            $A_Amount = $Amount[$index];
            $dates=$dates[$index];
            $query = mysqli_query($database,"INSERT INTO `activities`(`member_id`,`event_id`,`Amount`,dates) VALUES('$A_member_id','$A_event_id','$A_Amount','$dates')");
            header("location:../Pages/event.php");
        }
    }
?>
