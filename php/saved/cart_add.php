<?php
    require 'common.php';
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $cart_add_query = "insert into users_items(user_id, item_id, status) values ($user_id,$item_id,'Added to cart')";
    $cart_query_submit = mysqli_query($con, $cart_add_query) or die(mysqli_error($con));
    header('location:products.php');
?>


