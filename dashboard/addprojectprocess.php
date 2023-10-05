<?php

 require "../connection.php";
 session_start();
 $dataa = $_SESSION["u"];

$name = $_POST["name"];
$des = $_POST["des"];
$tech = $_POST["tech"];
$sdate = $_POST["sdate"];
$odate = $_POST["odate"];

if(empty($name)){
    echo("Please enter your project name");
}
else if(empty($des)){
    echo("Please enter your Description");
}
else if(empty($tech)){
    echo("Please enter your Technology");
}
else if(empty($sdate)){
    echo("Please enter your start date");
}
else if(empty($des)){
    echo("Please enter end date");
}
else{
    Database::search("INSERT INTO `projects`(`name`,`description`,`technology`,`start_date`,`close_date`,`prgroess_id`)
    VALUES('".$name."','".$des."','".$tech."','".$sdate."','".$odate."','1')");
 
 
$rs =  Database::search("SELECT * FROM projects ORDER BY id DESC LIMIT 1;");
$data = $rs->fetch_assoc();



    Database::search("INSERT INTO `user_has_projects`(`user_email`,`projects_id`,`user_role_id`,`status_id`)
    VALUES('".$dataa["email"]."','".$data["id"]."','1','1')");

    echo("Sucess");
}
 ?>