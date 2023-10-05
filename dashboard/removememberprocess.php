<?php

require '../connection.php';

$email = $_GET["email"];
$project = $_GET["project_id"];
$role = $_GET["role"];

$user_role= Database::search("SELECT * FROM `user_role` WHERE `role`= '" . $role . "';");

    $role_id = $user_role->fetch_assoc();

$project_member = Database::search("DELETE FROM `user_has_projects` 
WHERE `user_email`= '" . $email . "' AND `user_role_id`='" . $role_id['id'] . "' 
AND `projects_id`='" . $project . "';");

?>
<script>
window.location = 'projectdetails.php';
</script>

