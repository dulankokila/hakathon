<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="../css/style.css">
</head>

<body id="create-task-body">

    <?php
    include '../header.php';
    require '../connection.php';


    ?>

    <?php

    $project_data = Database::search("SELECT * FROM `user_has_projects` 
INNER JOIN `user` ON `user_has_projects`.`user_email` = `user`.`email`
INNER JOIN `projects` ON `user_has_projects`.`projects_id` = `projects`.`id` 
INNER JOIN `user_role` ON `user_has_projects`.`user_role_id` = `user_role`.`id` 
WHERE `user`.`email` = 'nal@gmail.com' AND `user_role`.`role`='admin';");

    $project_data_row = $project_data->num_rows;

    $project = $project_data->fetch_assoc();
    ?>

    <div class="container-fluid pt-5 pt-md-4 pt-lg-3">

        <div class="d-flex justify-content-start pt-4 pt-md-2 pt-lg-3">

            <div class="col-12 py-3 px-1 px-md-4">

                <h4 class="border-bottom border-dark fw-bold pb-2 pb-md-2">
                    <?php echo $project["name"] ?>
                </h4>

                <div class="d-flex flex-column flex-md-row">

                    <div class="col-12 col-md-7">

                        <div class="d-flex flex-column">
                            <p class="fw-bold mb-2">Project Name :
                                <?php echo $project["name"] ?>
                            </p>

                            <div class="d-flex flex-column">
                                <p class="fw-bold m-0">Description :</p>
                                <p class="m-0">
                                    <?php echo $project["description"] ?>
                                </p>
                            </div>

                            <div class="d-flex flex-column mt-4 mb-2">
                                <div class="d-flex flex-row justify-content-between border-bottom border-dark">
                                    <p class="fw-bold m-0 w-50">Tasks</p>
                                    <a href="createtask.php" class="btn btn-primary w-50 mb-1">Add Task</a>
                                </div>

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
                            <p class="fw-bold mb-2 text-danger">Project DeadLine :
                                <?php echo $project["close_date"] ?>
                            </p>
                            <p class="mb-2r">Project Start Date :
                                <?php echo $project["start_date"] ?>
                            </p>
                            <div class="d-flex flex-column align-items-start align-items-md-end">
                                <p class="fw-bold mb-2">Technologies</p>
                                <ul class="list-group list-group-flush bg-transparent text-start text-md-end">

                                    <?php
                                    for ($x = 0; $x < $project_data_row; $x++) {
                                    ?>

                                        <li class="list-group-item bg-transparent m-0 px-1"><i class="bi bi-dot"></i>
                                            <?php echo $project["technology"] ?>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <?php
                $project_member = Database::search("SELECT * FROM `user_has_projects` 
INNER JOIN `user` ON `user_has_projects`.`user_email` = `user`.`email`
INNER JOIN `projects` ON `user_has_projects`.`projects_id` = `projects`.`id` 
INNER JOIN `user_role` ON `user_has_projects`.`user_role_id` = `user_role`.`id` 
WHERE `user`.`email` != 'nal@gmail.com' AND `user_role`.`role`!='admin';");

                $project_member_row = $project_member->num_rows;

                // $project_member_data = $project_member->fetch_assoc();
                ?>

                <div class="d-flex flex-row justify-content-between border-bottom border-dark ">
                    <h4 class="fw-bold mt-1 pb-2 pb-md-2">Assigned Members</h4>
                    <button type="button" class="btn btn-primary w-auto mb-1" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus-lg"></i></button>
                </div>
                <div class="d-flex flex-row">


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Members</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <?php
                                    $add_member = Database::search("SELECT * FROM `user`
                                    WHERE `user`.`email` != 'nal@gmail.com';");

                                    $add_member_row = $add_member->num_rows;
                                    for ($x = 0; $x < $add_member_row; $x++) {
                                        $add_member_data = $add_member->fetch_assoc();
                                    ?>
                                        <div class="d-flex justify-content-between">
                                            <p>
                                                <?php echo $add_member_data["firstname"] ?>
                                                <?php echo $add_member_data["lastname"] ?>
                                            </p>
                                            <a href="addmemberstoprojectprocess.php?member_id=<?php echo $add_member_data["email"] ?>" class="btn btn-primary w-auto mb-1"><i class="bi bi-plus-lg"></i></a>


                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Role</th>
                                <th scope="col">Task</th>
                                <th scope="col">Manage</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            for ($x = 0; $x < $project_member_row; $x++) {
                                $project_member_data = $project_member->fetch_assoc();
                            ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $x ?>
                                    </th>
                                    <td>
                                        <?php echo $project_member_data["firstname"] ?>
                                        <?php echo $project_member_data["lastname"] ?>
                                    </td>
                                    <td>
                                        <?php echo $project_member_data["role"] ?>
                                    </td>
                                    <td>Otto</td>

                                    <td class="">
                                        <a href="removememberprocess.php?email=<?php echo $project_member_data["email"] ?>&project_id=<?php echo $project_member_data["projects_id"] ?>&role=<?php echo $project_member_data["role"] ?>" class="project-view-btn bg-danger text-white"><i class="bi bi-ban"></i></a>
                                        <a href="memberprofile.php?email=<?php echo $project_member_data["email"] ?>" class="project-view-btn bg-success text-white"><i class="bi bi-eye-fill"></i></a>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
</body>

</html>