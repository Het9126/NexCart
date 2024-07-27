<?php
require "includes/common.php";
session_start();
if (isset($_GET['item_id']) && is_numeric($_GET['item_id'])) {
    $item_id = $_GET['item_id'];
    $user_id = $_SESSION['$user_id'];
    $query = "DELETE FROM users_products WHERE '$item_id' = item_id ";
    $res = mysqli_query($con, $query);
    header("location:cart.php");
}
?>