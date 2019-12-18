<?php
    require 'common.php';
    $user_id = $_SESSION['user_id'];
    $item_id = $_GET['id'];
    $delete_query = "delete from users_items where item_id = $item_id and user_id = $user_id";
    $delete_query_submit = mysqli_query($con, $delete_query);
    header('location:cart.php');
?>


