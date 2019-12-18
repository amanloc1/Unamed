<?php
    function check_if_added_to_cart($item_id)
    {
        $con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
        $user_id = $_SESSION['user_id'];
        $check_query = "SELECT * FROM users_items WHERE item_id='$item_id' and user_id ='$user_id' and status='Added to cart'";
        $check_submit = mysqli_query($con, $check_query) or die(mysqli_error($con));
        $check_result = mysqli_num_rows($check_submit);
        if($check_result>=1)
        {
            return 1;
        }
        else 
        {
            return 0;
        }
    }   
    ?>
