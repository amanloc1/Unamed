<?php
    require 'common.php';
    $name = $_POST['name'];
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pass = $_POST['password'];
    $phone = $_POST['contact'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $select_query = "SELECT * FROM users WHERE email='$email'";
    $select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
    $total_row_fetched = mysqli_num_rows($select_query_result);
    if($total_row_fetched>0)
    {
        header('location: signup.php?signup_msg=user already registered');
    }
    else 
    {
        $signup_query = "insert into users(name,email,password,contact,city,address) values ('$name','$email',md5('$pass'),'$phone','$city','$address')";
        $signup_submit = mysqli_query($con, $signup_query) or die(mysqli_error($con));
        $_SESSION['email'] = $email;
        $_SESSION['user_id'] = mysqli_insert_id($con);
        header('location: login.php?signup_msg=registeration successful sign in');
    }
?>