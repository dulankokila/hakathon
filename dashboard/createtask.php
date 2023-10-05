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

    <div class="container-fluid">
        
        <div class="d-flex justify-content-start pt-lg-5">

            <div class="col-12 py-3 px-1 px-md-4">

                <h4 class="border-bottom border-dark fw-bold">Create Task</h4>

                <div class="d-flex flex-column mt-lg-3">

                    <p class="task-label-text">Task Name</p>
                    <input type="text" id="name" class="mb-md-2">

                    <p class="task-label-text">Description</p>
                    <textarea name="" id="dis" cols="30" rows="4" class="mb-md-2"></textarea>

                   

                    
                  

                    

                    <p class="task-label-text mt-2 ">Date</p>
                    <div class="d-flex mb-md-1 justify-content-start mt-2 mt-md-0">
                        <div class="d-flex col-12 col-md-10 col-lg-4 ms-lg-5 justify-content-between">
                            <p class="task-label-text">Start Date</p>
                            <input type="date" class="ms-5" id="start-date" name="start-date">
                        </div>
                    </div>
                    <div class="d-flex mb-md-3 justify-content-start">
                        <div class="d-flex col-12 col-md-10 col-lg-4 ms-lg-5 justify-content-between">
                            <p class="task-label-text">Dead Line</p>
                            <input type="date" class="ms-5" id="end-date" name="end-date">
                        </div>
                    </div>

                    <p class="task-label-text border-bottom border-dark mb-2 mb-md-2">Add Members</p>
                    <div id="addMember" class="mb-md-2">
                        
                        <select  type="text"   id="sel" class="form-select">
                        <option value="0">SELECT Member</option>
                            <?php
                            require "../connection.php";
                    $rs =         Database::search("SELECT * FROM `user_has_projects` WHERE `user_role_id`='2' AND `status_id`='1' AND `projects_id`='3'");
                    $num = $rs->num_rows;
                    for($x=0; $x<$num;$x++){
                        $data = $rs->fetch_assoc();
                        ?>
                           <option value="<?php echo $data["user_email"]?>"><?php echo $data["user_email"]?></option>
                        <?php
                    }
                            ?>
                            
                          
                        </select>
                       
                    </div>
                    <div id="member" class=""></div>

                </div>
                <button class="ms-3 btn-sm btn-lg text-center" onclick="addtask();"  id="pushmember"> add task</button>

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