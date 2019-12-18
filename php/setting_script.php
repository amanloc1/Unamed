<?php
    require 'common.php';
    if (!isset($_SESSION['email'])) 
    {   
        header('location: index.php'); 
    } 
    $user_id = $_SESSION['user_id'];
    $old_pass = mysqli_real_escape_string($con, $_POST['old_pass']);
    $new_pass = mysqli_real_escape_string($con, $_POST['new_pass']);
    $re_pass =  mysqli_real_escape_string($con, $_POST['re_pass']);
    if($new_pass!=$re_pass)
    {
        header('location: setting.php?pass_msg=retype new password');
    }
    else
    {
        $select_pass_query = "select * from users where password=md5('$old_pass') and user_id='$user_id'";
        $select_pass_submit = mysqli_query($con, $select_pass_query) or die(mysqli_error($con));
        $select_pass_result = mysqli_num_rows($select_pass_submit);
        if($select_pass_result)
        {
            $update_pass_query = "update users set password=md5('$new_pass') where user_id='$user_id'";
            $update_pass_submit = mysqli_query($con, $update_pass_query) or die(mysqli_error($con));
            header('location:/myweb/index.php');
        }
        else 
        {
            header('location: setting.php?pass_msg=enter correct old password');
        }
    }
?>
