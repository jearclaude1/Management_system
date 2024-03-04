<?php
    $database=new mysqli("localhost","root","","Umucyo");
    $select=$database->query("SELECT * FROM `events`");
?>