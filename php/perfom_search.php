<?php
include "./connection/connection.php";

if(isset($_POST['search'])){
    $search=$_POST['input'];
    $sql="SELECT`First_name`,`Secord_name` FROM `attendance_list` WHERE First_name='$search'";
    $fetc=mysqli_query($database,$sql);
}