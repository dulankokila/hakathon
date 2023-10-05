<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="../css/style.css">
</head>

<body id="create-task-body">

    <?php
    include '../header.php';
    ?>

    <br />
    <br />

    <?php

    require "../connection.php";

    $email = $_GET["email"];
    // $email = 'nal@gmail.com';

    $details_rs = Database::search("SELECT * FROM `user_has_projects` 
            INNER JOIN `user` ON `user_has_projects`.`user_email` = `user`.`email` 
            INNER JOIN `projects` ON `user_has_projects`.`projects_id` = `projects`.`id` 
            INNER JOIN `user_role` ON `user_has_projects`.`user_role_id` = `user_role`.`id`
            INNER JOIN `country` ON `user`.`country_id` = `country`.`id` WHERE `email`='" . $email . "'");

    $image_rs = Database::search("SELECT * FROM image WHERE user_email='" . $email . "'");
    // $country_rs = Database::search("SELECT * FROM `user` INNER JOIN `country` ON 
    //     `country`.`id`=`user`.`country_id` WHERE `email`='nal@gmail.com'");

    $details_rs_row = $details_rs->num_rows;
    $data = $details_rs->fetch_assoc();
    $image_data = $image_rs->fetch_assoc();
    // $country_data = $country_rs->fetch_assoc();

    ?>

    <div class="col-12 overflow-x-hidden" style="background-color:#183D3D;height: 100vh;">
        <div class="row">

            <div class="col-10 offset-1 rounded mt-4 mb-4" style="background-color: #93B1A6;">
                <div class="row g-2">

                    <div class="col-12 col-md-4">
                        <div class="d-flex flex-column align-items-center text-center p-3 pt-5 px-md-5 py-md-5">

                            <img src="../images/black2.jpg" style="height: 200px;" />

                        </div>
                    </div>

                    <div class="col-12 col-md-8">
                        <div class="p-3 py-5">

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="fw-bold"><?php echo $data["firstname"]; ?> <?php echo $data["lastname"]; ?></h4>
                            </div>

                            <div class="row mt-4">

                                <div class="d-flex flex-column align-items-start mb-3">

                                    <h5><?php echo $data["countryname"]; ?></h5>
                                </div>

                                <div class="d-flex flex-column align-items-start mb-3">

                                    <h5>Assigned Projects</h5>

                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Project</th>
                                                <th scope="col">Role</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            for ($x = 0; $x < $details_rs_row; $x++) {
                                            ?>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td><?php echo $data['name'] ?></td>
                                                    <td><?php echo $data["role"] ?></td>


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
            </div>

        </div>
    </div>
    </div>

    </div>


    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>