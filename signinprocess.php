<?php
$email  = $_POST["email"];
$password = $_POST["password"];

if(empty($email)){
    echo("Please enter your email");
}
else if(empty($password)){
    echo("Please enter your password");
}
else{
 $user_rs =    Database::search("SELECT * FROM `user` WHERE `email`='".$email."' AND `password`='".$password."'");
 $num = $user_rs->num_rows;
 
}
?>