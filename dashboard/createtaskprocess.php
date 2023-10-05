<?php

 require "../connection.php";
 session_start();
 $dataa = $_SESSION["u"];

$name = $_POST["name"];
$des = $_POST["des"];
$sdate = $_POST["sdate"];
$odate = $_POST["odate"];
$mem = $_POST["mem"];

if(empty($name)){
    echo("Please enter your project name");
}
else if(empty($des)){
    echo("Please enter your Description");
}

else if(empty($sdate)){
    echo("Please enter your start date");
}
else if(empty($des)){
    echo("Please enter end date");
}
else{
    Database::iud("INSERT INTO `task`(`title`,`description`,`Start_date`,`Close_date`,`projects_id`,`status_id`,`prgroess_id`)
    VALUES('".$name."','".$des."','".$sdate."','".$odate."','3','1','1')");
 
 
$rs =  Database::search("SELECT * FROM task ORDER BY id DESC LIMIT 1;");
$data = $rs->fetch_assoc();



Database::iud("INSERT INTO `user_has_projects_has_task`(`user_has_projects_user_email`,`user_has_projects_projects_id`,`task_id`,`status_id`)
    VALUES('".$mem."','3','".$data["id"]."','1')");

    echo("Sucess");
}
 ?>