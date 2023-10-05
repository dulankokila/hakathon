<?php
require "connection.php";
session_start();
if (isset($_SESSION["u"])) {

    $email = $_SESSION["u"]["email"];

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>HOME</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="images/black.jpg" />
        <link rel="stylesheet" href="bootstrap.css">

    </head>

    <body class="body">
        <?php include "header.php" ?>
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                    <h1 class="mt-5 titel01">HOME</h1>

                    <div class="row ms-4 d-flex justify-content-center">

                        <div class="col-5 mx-3 rounded bg-dark ">
                            <label class="text-center   text-white">News</label>
                            <div class="row m-3 ">
                                <label class="mt-2 fw-bold text-white">
                                    Techies at Meta and Google do "fake work", alleges tech veteran | Tech
                                </label>
                                <img src="images/images/Pichai-says-some-employees-have-to-share-desks-and-offices-details-inside.webp">
                            </div>
                        </div>
                        <div class="col-5 border border-3 rounded b1">
                            <div class="conatiner">

                                <label class="text-center  rounded">Project</label>



                                <div class="row m-3">
                                    <div class="col-12">
                                        <?php
                                        $details_rs = Database::search("SELECT * FROM `user`  WHERE `email`='" . $email . "'");
                                        $image_rs = Database::search("SELECT * FROM `image` WHERE `user_email`='" . $email . "'");
                                        $image_data = $image_rs->fetch_assoc();
                                        $data = $details_rs->fetch_assoc();
                                        ?>
                                        <img src="<?php echo $image_data["path"]; ?>" class="rounded mt-5" style="width: 150px;" />
                                        <br /> Logged As <span class="text-primary"><?php echo $data["name"]; ?></span>
                                        <br />
                                        <?php echo $data["email"]; ?>
                                    </div>
                                    <div class=" row col-12 mt-5">


                                        <div class="col-5">
                                            <h3>my projects</h3>
                                        </div>
                                        <div class="col-5 justify-content-center">
                                            <input type="text" class="form-control" placeholder="Searsh your projects">
                                        </div>
                                        <div class="col-12">
                                            <!-- search projects -->
                                        </div>

                                    </div>
                                    <div class=" row col-12 mt-5">


                                        <div class="col-5">
                                            <h6 class="fw-bold">members projects</h6>
                                            <div class="col-12">
                                            <?php
$pro_rs = Database::search("SELECT * FROM `projects` INNER JOIN `user_has_projects` ON projects.id=user_has_projects.projects_id  WHERE `user_role_id`='2'");
$pro_num = $pro_rs->num_rows;

// Loop through each project
while ($user_data = $pro_rs->fetch_assoc()) {
    ?>
    <a href="dashboard/projectdetails.php?id=<?php echo $user_data['id']; ?>"><?php echo ($user_data["name"]); ?></a> <br>
    <?php
}
?>

                                            </div>
                                        </div>
                                        <div class="col-5 justify-content-center">
                                            <h6 class="fw-bold">Admin projects</h6>
                                        </div>
                                        <div class="col-12">
                                            <?php


                                            $pro1_rs =       Database::search("SELECT * FROM `projects` INNER JOIN `user_has_projects` ON projects.id=user_has_projects.projects_id  WHERE `user_role_id`='1'");
                                            $pro1_num =  $pro1_rs->num_rows;
                                            $user1_data = $pro1_rs->fetch_assoc();

                                            while ($user1_data = $pro1_rs->fetch_assoc()) {
                                                ?>
                                                <a href="dashboard/projectdetails.php?id=<?php echo $user1_data['id']; ?>"><?php echo ($user1_data["name"]); ?></a> <br>
                                                <?php
                                            }
                                            }


                                            ?>
                                        </div>

                                    </div>


                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="container ">
                        <div class="row mx-3">
                            <div class="card mx-3" style="width: 18rem;">
                                <img src="images/images/1649106561425.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    
                                    <p class="card-text">Elon Exposes twitter as X.</p>
                                    <a href="#" class="btn btn-secondary">Find Out</a>
                                </div>
                            </div>
                       
                      
                            <div class="card mx-3" style="width: 18rem;">
                                <img src="images/images/5247b370-03c7-11ee-bff3-6eb6001555e5.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    
                                    <p class="card-text">Find Out ios 17 new Features.</p>
                                    <a href="#" class="btn btn-secondary">Find Out</a>
                                </div>
                            </div>
                       

                            <div class="card mx-3" style="width: 18rem;">
                                <img src="images/images/media_1c9568bea14470395f2c881516fe1698dd9d1de47.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                
                                    <p class="card-text">Adobe Creative clouds are very Optimized now.</p>
                                    <a href="#" class="btn btn-secondary">Find Out</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/script.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>

    </html>
<?php
 
?>