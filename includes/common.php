<?php
$con = mysqli_connect("localhost", "root", "", "shopping");
if (!$con) {
    die("connection failed: " . mysqli_connect_error());
}
?>