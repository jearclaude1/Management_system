<?php
    $database=new mysqli("localhost","root","","Umucyo");
if (isset($_POST['Selectbtn'])) {
    $eventId = $_POST['event_id'];
    $eventdate = $_POST['date'];
    $select = $database->query("SELECT events.*, activities.* FROM events INNER JOIN activities ON events.date = activities.dates WHERE events.date = '$eventdate'");

}





