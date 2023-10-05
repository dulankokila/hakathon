<?php
require "connection.php";
session_start();
$email = $_POST["email"];
$password = $_POST["password"];
$checked = $_POST["c"];

if (empty($email)) {
    echo("Please enter your email");
} elseif (empty($password)) {
    echo("Please enter your password");
} else {
    $user_rs = Database::search("SELECT * FROM `user`  WHERE `email`='" . $email . "' AND `password`='" . $password . "'");
    $num = $user_rs->num_rows;

    if ($num == 1) {
        echo("sucess");
        $user_Data = $user_rs->fetch_assoc();
        $_SESSION["u"]  =  $user_Data;

        if ($checked == "true") {
            setcookie("email", $email, time() + (60 * 60 * 24 * 365));
            setcookie("password", $password, time() + (60 * 60 * 24 * 365));
        } else {
            setcookie("email", "", -1);
            setcookie("password", "", -1);
        }
        
    } else {
        echo("invalid email or password");
    }
}
?>
