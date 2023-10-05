<?php
 require "connection.php";
session_start();
if(isset($_SESSION["u"])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>HOME</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

<link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="image/black.png" />
    <link rel="stylesheet" href="bootstrap.css">

</head>

<body class="body">
<?php include "header.php" ?>
    <div class="container-fluid">
        <div class="row">
       

            <div class="col-12">
                <h1 class="mt-5 titel01">HOME</h1>
                
                <div class="row ms-4 d-flex justify-content-center">
                    
                    <div class="col-5 mx-3 border border-3 b1">
                        <label class="text-center border-bottom border-3 border-secondary">News</label>
                        <div class="row m-3 border border-3 news">
                            <label class="mt-2 fw-bold">
                                What is SALFORD ?
                            </label>
                            <img src="images/logo.png">
                        </div>
                    </div>
                    <div class="col-5 border border-3 b1">
                        <label class="text-center border-bottom border-3 border-secondary">Project</label>
                        <div class="row m-3">
                            <div class="col-12">
                                <button class="button">Create projects</button>
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
                       
                        
                   $pro_rs =       Database::search("SELECT * FROM `projects` INNER JOIN `user_has_projects` ON projects.id=user_has_projects.projects_id INNER JOIN `user_role` ON user_role.id=user_has_projects.user_role_id WHERE `role`='member'");
                   $pro_num =  $pro_rs->num_rows;
                   $user_data = $pro_rs->fetch_assoc();
                         ?>
                         <a href=""><?php echo $u["email"]?></a>
                         <?php
                   
                        ?>
                       </div>
                       </div>
                       <div class="col-5 justify-content-center">
                       <h6 class="fw-bold">Admin projects</h6>
                       </div>
                       <div class="col-12">
                           <!-- search projects -->
                       </div>

                       </div>


                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
<?php
}
else{
echo("Please login first");
}
?>
