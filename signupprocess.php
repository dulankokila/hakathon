<?php
require "connection.php";

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$repassword = $_POST["repassword"];
$country = $_POST["country"];



if(empty($name)){
    echo("Enter the fname");
}

else if(empty($email)){
    echo("Enter the email");
}
else if(empty($password)){
    echo("Enter the password");
}
else if(strlen($password)== 40){
    echo("Enter the Valide password");
}
else if(empty($repassword)){
    echo("Enter the repassword");
}
else if($password !== $repassword){
    echo("Enter the Valide re password");
}
else if(empty($country)){
    echo("Select the grade");
}

 

else{
 $user_rs =  Database::search("SELECT * FROM `user` WHERE `email`='".$email."'");
 $num = $user_rs->num_rows;
 if($num > 0){
    echo("Try another Email");
 }else{
   
    Database::iud("INSERT INTO `user`(`email`,`password`,`country_id`,`name`)
    VALUES ('".$email."','".$password."','".$country."', '".$name."')
    ");

        echo("Sucess");
      }
     
    }
 

?>