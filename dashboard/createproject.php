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
        
        <div class="d-flex justify-content-start pt-5 pt-md-5 pt-lg-5">

            <div class="col-12 py-3 px-1 px-md-4">

                <h4 class="border-bottom border-dark fw-bold">Create Project</h4>

                <div class="d-flex flex-column mt-lg-3">

                    <p class="task-label-text">Project Name</p>
                    <input type="text" class="mb-md-2" id="name">

                    <p class="task-label-text">Description</p>
                    <textarea name="" id="dis" cols="30" rows="4" class="mb-md-2"></textarea>

                    <p class="task-label-text mt-2 mt-md-0 mb-1 mb-md-0">Technologies</p>
                    <textarea name="" id="tech" cols="30" rows="4" class="mb-md-2"></textarea>

                   

                   
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

                    <!-- <p class="task-label-text border-bottom border-dark mb-2 mb-md-2">Add Members</p>
                    <div id="addMember" class="mb-md-2">
                        <input type="text" placeholder="Search Member" id="member">
                        <button class="ms-3 btn-sm btn-lg" onclick="addMembers();" id="pushmember"><i class="bi bi-search"></i></button>
                    </div>
                    <div id="member" class=""></div> -->
                    <!-- <button class="ms-3  btn-secondary" id="pushmember"><i class="bi bi-search">Add Projects</i></button> -->
                    <button class="btn-danger" onclick="addeprojects();" >Add project</button>
                </div>

            </div>

        </div>

    </div>
    <script src="js/"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
   
</body>

</html>