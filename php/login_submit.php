<?php
    require 'common.php';
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pass=md5(mysqli_real_escape_string($con, $_POST['pass']));
    $select_query = "select * from users where email='$email' and password='$pass'";
    $select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
    $total_row_fetched = mysqli_num_rows($select_query_result);
    if($total_row_fetched==0)
    {
        header('location:login.php?login_msg=incorrect email or password');
    }
    else 
    {
        $row = mysqli_fetch_array($select_query_result);
        $_SESSION['email'] = $email;
        $_SESSION['user_id'] = $row['id'];
        header('location:/myweb/index.php');
    }
?>
