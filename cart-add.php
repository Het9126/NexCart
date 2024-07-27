<?php
require "includes/common.php";
session_start();
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    // $price = $_GET['price'];
    // $name = $_GET['name'];
    // $query = "INSERT INTO users_products(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
    // $qury = "INSERT INTO users_products(price, name) SELECT price, name from products where id = '$item_id'";
    $query = "INSERT INTO users_products(item_id, price, name) SELECT id, price, name from products where id = '$item_id'";
    mysqli_query($con, $query) or die(mysqli_error($con));
    // mysqli_query($con, $qury) or die(mysqli_error($con));
    header('location: products.php');
}
?>