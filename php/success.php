<!DOCTYPE html>
<?php
    require 'common.php';
    if (!isset($_SESSION['email'])) 
    {   
        header('location: index.php'); 
    } 
?>
<html>
    <head>
        <title>Lifestyle Store</title>
    </head>
    <body>
<?php
    $user_id = $_SESSION['user_id'];
    $item_id = explode(",",$_GET['id']);
    $num = count($item_id);
    $i=0;
    while($num)
    {
        $item_val = $item_id[$i];
        $cart_success_query = "update users_items set status='confirmed' where user_id='$user_id' and item_id='$item_val'";
        $success_query_submit = mysqli_query($con, $cart_success_query) or die(mysqli_error($con));
        $num--;
        $i++;
    }
?>
    <center>
        <p>Your order is confirmed Thank you for shopping with us</p>
        <p><a href="products.php">click here</a> to purchase any other item</p>
    </center>
    </body>
</html>