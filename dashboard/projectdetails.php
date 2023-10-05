<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="../css/style.css">
</head>

<body id="create-task-body">

    <?php
    include '../header.php';
    require "../connection.php"
        ?>

    <div class="container-fluid pt-1 pt-md-2 pt-lg-0 mt-5">
    <?php
           
         $rs =    Database::search("SELECT * FROM `projects` INNER JOIN `user_has_projects` ON user_has_projects.projects_id=projects.id
            WHERE `id`='3'");

         $data =    $rs->fetch_assoc();
            ?>

    <div class="container-fluid pt-5 pt-md-4 pt-lg-3">

        <div class="d-flex justify-content-start pt-4 pt-md-2 pt-lg-3">

            <div class="col-12 py-3 px-1 px-md-4">

            <?php
           
         $rsa =    Database::search("SELECT * FROM `projects` INNER JOIN `user_has_projects` ON user_has_projects.projects_id=projects.id
            WHERE `id`='3'");

         $dataa =    $rsa->fetch_assoc();
            ?>

                <h4 class="border-bottom border-dark fw-bold pb-2 pb-md-2"><?php echo $data["name"]?></h4>
                

                <div class="d-flex flex-column flex-md-row">

                    <div class="col-12 col-md-7">

                        <div class="d-flex flex-column">
                            <p class="fw-bold mb-2">Project Name : <?php echo $data["name"]?></p>

                            <div class="d-flex flex-column">
                                <p class="fw-bold m-0">Description :</p>
                                <p class="m-0"><?php echo $data["description"]?>.</p>
                            </div>

                           

                            

                            <div class="d-flex flex-column mt-2 mb-2">
                                <p class="fw-bold m-0">Tasks :</p>
                                <ul class="list-group list-group-flush bg-transparent text-start">
                                    <?php
                                    for ($x = 0; $x < $project_data_row; $x++) {
                                        ?>
                                        <li class="list-group-item bg-transparent m-0 py-1"><i class="bi bi-dot"></i>
                                            <?php echo $project["technology"] ?>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>

                        </div>

                    </div>
                    <div class="col-12 col-md-5">
                        <div class="d-flex flex-column align-items-start align-items-md-end">
                            <p class="fw-bold mb-2 text-danger">Project DeadLine :<?php echo $data["close_date"]?></p>
                            <p class="mb-2r">Project Start Date : <?php echo $data["start_date"]?></p>
                            <div class="d-flex flex-column align-items-start align-items-md-end">
                                <p class="fw-bold mb-2">Technologies</p>
                                <p>   <?php echo $data["technology"] ?></p>
                            </div>
                        </div>
                    </div>

                </div>

                <?php
$project_member = Database::search("SELECT * FROM `user_has_projects` INNER JOIN `user_role` ON user_role.id=user_has_projects.user_role_id WHERE `projects_id`='3'");

$project_member_row = $project_member->num_rows;

?>

<h4 class="border-bottom border-dark fw-bold mt-1 pb-2 pb-md-2">Assigned Members</h4>

<div class="d-flex flex-row">

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Role</th>
                <th scope="col">Manage</th>
            </tr>
        </thead>
        <tbody>

            <?php
           
            for ($x = 0; $x < $project_member_row; $x++) {
                $project_member_data = $project_member->fetch_assoc(); 
                ?>
                <tr>
                    <th scope="row"><?php echo $x + 1 ?></th>
                    <td>
                        <?php echo $project_member_data["user_email"] ?>
                    </td>
                    <td>
                        <?php echo $project_member_data["role"] ?>
                    </td>
                    <td class="">
                        <a href="memberprofile.php?email=<?php echo $project_member_data["user_email"] ?>" class="project-view-btn bg-dark text-white"><i
                                class="bi bi-wrench"></i></a>
                        <a href="removememberprocess.php?email=<?php echo $project_member_data["user_email"] ?>&project_id=<?php echo $project_member_data["projects_id"] ?>" class="project-view-btn bg-danger text-white"><i
                                class="bi bi-ban"></i></a>
                        <a href="memberprofile.php?email=<?php echo $project_member_data["user_email"] ?>"
                            class="project-view-btn bg-success text-white"><i
                                class="bi bi-eye-fill"></i></a>
                    </td>
                </tr>
                <?php
            }
            ?>

        </tbody>
    </table>
</div>


                </div>

            </div>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
</body>

</html>