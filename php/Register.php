<?php
require "Config.php";

$user_id = $_POST['user_id'];
$user_password = $_POST['user_password'];
$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$user_phone = $_POST['user_phone'];
$user_address = $_POST['user_address'];
$user_creditcard = $_POST['user_creditcard'];
$datetime = date('YmdHis');

$sql_insert_logins = "INSERT INTO `logins`(`login_user_id`, `login_user_password`) VALUES ('" . $user_id . "','" . $user_password . "')";
$sql_insert_users = "INSERT INTO `users`(`user_id`, `user_name`, `user_email`, `user_phone`, `user_address`, `user_creditcard`, `user_create_stmp`) VALUES ('" . $user_id . "','" . $user_name . "','" . $user_email . "','" . $user_phone . "','" . $user_address. "','" . $user_creditcard . "','" . $datetime . "')";

if(!mysql_query($sql_insert_logins, $conn)){
    echo "Error: " . mysql_error($conn);
}
else{
    if(!mysql_query($sql_insert_users, $conn)){
        echo "Error: " . mysql_error($conn);
    }
    else{
        header("Location: ../cs160/php7/Testserver.php");
    }
}

mysql_close($conn);
?>
