<?php
 require "connection.php";
 session_start();
if(isset($_SESSION["u"])){
   
$data = $_SESSION["u"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>HOME</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="image/black.png" />
    <link rel="stylesheet" href="bootstrap.css">

</head>

<body class="body">
    <?php include "header.php" ?>
    <div class="container-fluid">
        <div class="row">


            <div class="col-12">
                <h1 class="mt-5  text-center">HOME</h1>

                <div class="row ms-4 d-flex justify-content-center">

                    <div class="col-5 mx-3 border border-3 b1">
                        <label class="text-center border-bottom border-3 border-secondary">News</label>
                        <div class="row m-3 border border-2 news">
                            <div class="overflow-auto p-3 scroll">
                                <label class="mt-1 fw-bold">
                                    What is SALFORD ?
                                </label>
                                <div class="col-11 b2">
                                    <img src="images/black2.jpg" class="img2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-5 border border-3 b1">
                        <label class="text-center border-bottom border-3 border-secondary">Project</label>
                        <div class="row m-3">
                            <div class="col-12">
                                <button class="btn btn-info mb-2">Create projects</button>
                                <button class="button" onclick="go();">Create projects</button>
                            </div>
                            <div class="col-12 border border-2 cp">
                                <div class="overflow-auto p-3 bg-light scroll">
                                    This is an example of using <code>.overflow-auto</code>
                                    on an element with set width and height dimensions. By design, this content will vertically scroll.
                                    Paragraf is the first company in the world to mass produce graphene-based electronic devices
                                    using standard semiconductors processes. Using our unique foundry capability, we bring to market
                                    differentiated graphene-based electronics as standard products, such as magnetic sensors and biosensors.
                                    We solve important problems in a range of applications, including automotive, industrial automation,
                                    cryogenics, healthcare and agri-tech.
                                    Paragraf won Excellence in Product Design (high-reliability systems) 2020, the Automotive
                                    Electronics Award 2021 at the annual Elektra Awards and Business Weekly Business of the Year
                                    Award in 2023.
                                </div>
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

                   for($x=0; $x<$pro_num; $x++){
                    ?>
                     <a href=""><?php  echo($user_data["name"]);?></a> <br>
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
                       
                        
                       $pro_rs =       Database::search("SELECT * FROM `projects` INNER JOIN `user_has_projects` ON projects.id=user_has_projects.projects_id INNER JOIN `user_role` ON user_role.id=user_has_projects.user_role_id WHERE `role`='Admin'");
                       $pro_num =  $pro_rs->num_rows;
                       $user_data = $pro_rs->fetch_assoc();
    
                       for($x=0; $x<$pro_num; $x++){
                        ?>
                         <a href=""><?php  echo($user_data["name"]);?></a> <br>
                        <?php
                       }
                            
                       
                            ?>
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
