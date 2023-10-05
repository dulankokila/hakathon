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

    <?php include '../header.php' ?>

    <div class="container-fluid pt-1 pt-md-2 pt-lg-0 mt-5">

        <div class="d-flex justify-content-start pt-1 pt-md-1 pt-lg-2">

            <div class="col-12 py-3 px-1 px-md-4">

            <?php
            require "../connection.php";
         $rs =    Database::search("SELECT * FROM `projects` INNER JOIN `user_has_projects` ON user_has_projects.projects_id=projects.id
            WHERE `id`='3'");

         $data =    $rs->fetch_assoc();
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

                           

                        </div>

                    </div>
                    <div class="col-12 col-md-5">
                        <div class="d-flex flex-column align-items-start align-items-md-end">
                            <p class="fw-bold mb-2 text-danger">Project DeadLine :<?php echo $data[""]?></p>
                            <p class="mb-2r">Project Start Date : 2023-11-23</p>
                            <div class="d-flex flex-column align-items-start align-items-md-end">
                                <p class="fw-bold mb-2">Technologies</p>
                                <ul class="list-group list-group-flush bg-transparent text-start text-md-end">
                                    <li class="list-group-item bg-transparent m-0 px-1"><i class="bi bi-dot"></i> An item</li>
                                    <li class="list-group-item bg-transparent m-0 px-1"><i class="bi bi-dot"></i> A second item</li>
                                    <li class="list-group-item bg-transparent m-0 px-1"><i class="bi bi-dot"></i> A third item</li>
                                    <li class="list-group-item bg-transparent m-0 px-1"><i class="bi bi-dot"></i> A fourth item</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <h4 class="border-bottom border-dark fw-bold mt-1 pb-2 pb-md-2">Assigned Members</h4>

                <div class="d-flex flex-row">

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
                            <tr>
                                <th scope="row">1</th>
                                <td>pky</td>
                                <td>Otto</td>
                                <td>Otto</td>
                                <td class="">
                                    <a href="" class="project-view-btn bg-dark text-white"><i class="bi bi-wrench"></i></a>
                                    <a href="" class="project-view-btn bg-danger text-white"><i class="bi bi-ban"></i></a>
                                    <a href="" class="project-view-btn bg-success text-white"><i class="bi bi-eye-fill"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>pky</td>
                                <td>Otto</td>
                                <td>Otto</td>
                                <td class="">
                                    <a href="" class="project-view-btn bg-dark text-white"><i class="bi bi-wrench"></i></a>
                                    <a href="" class="project-view-btn bg-danger text-white"><i class="bi bi-ban"></i></a>
                                    <a href="" class="project-view-btn bg-success text-white"><i class="bi bi-eye-fill"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>pky</td>
                                <td>Otto</td>
                                <td>Otto</td>
                                <td class="">
                                    <a href="" class="project-view-btn bg-dark text-white"><i class="bi bi-wrench"></i></a>
                                    <a href="" class="project-view-btn bg-danger text-white"><i class="bi bi-ban"></i></a>
                                    <a href="" class="project-view-btn bg-success text-white"><i class="bi bi-eye-fill"></i></a>
                                </td>
                            </tr>
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