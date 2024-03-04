<?php
include("../php/connection/connection.php");

if (!$database) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['member_id']) && is_numeric($_GET['member_id'])) {
    $id = $_GET['member_id'];

    $deleteQuery = mysqli_query($database, "DELETE FROM members WHERE member_id = '$id'");

    if (!$deleteQuery) {
        die("Deletion failed: " . mysqli_error($database));
    }
    header("location:dashbord.php");
    exit();
}
?>
