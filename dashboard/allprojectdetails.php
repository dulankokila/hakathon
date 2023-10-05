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

    <div class="container-fluid pt-5 pt-md-3 pt-lg-0">

        <div class="d-flex justify-content-start pt-5 pt-md-5 pt-lg-5">

            <div class="col-12 py-3 px-1 px-md-4">

                <h4 class="border-bottom border-dark fw-bold pb-2 pb-md-2">Projects</h4>

                <div class="d-flex flex-column mt-lg-3">

                    <div class="d-flex align-items-center mt-1">

                        <div class="col p-1 m-1 rounded-3 project-detail-btn-1" style="height: 40px;text-justify: center;">
                            <div class="d-flex flex-column text-center justify-content-center h-100">
                                <p class="m-0 fw-bold">Ongoing Projects - 12</p>
                            </div>
                        </div>

                        <div class="col p-1 m-1 rounded-3 project-detail-btn-2" style="height: 40px;text-justify: center;">
                            <div class="d-flex flex-column text-center justify-content-center h-100">
                                <p class="m-0 fw-bold">Active Members - 14</p>
                            </div>
                        </div>

                    </div>
                    <div class="d-flex mt-1">

                        <div class="col p-1 m-1 rounded-3 project-detail-btn-3" style="height: 40px;text-justify: center;">
                            <div class="d-flex flex-column text-center justify-content-center h-100">
                                <p class="m-0 fw-bold">Pending Projects - 4</p>
                            </div>
                        </div>
                        <div class="col p-1 m-1 rounded-3 project-detail-btn-4" style="height: 40px;text-justify: center;">
                            <div class="d-flex flex-column text-center justify-content-center h-100">
                                <p class="m-0 fw-bold">Nearest DeadLine - 2023-11-23</p>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="d-flex flex-row mt-lg-3">

                    <table id="project-detail-table" class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Project - Name</th>
                                <th scope="col">Active Members</th>
                                <th scope="col">Dead Line</th>
                                <th scope="col">View</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="d-flex align-items-center h-100">1</th>
                                <td class="">Pakaya</td>
                                <td class="">15</td>
                                <td class="">2023-04-10</td>
                                <td class=""><a href="" class="project-view-btn"><i class="bi bi-eye-fill"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row" class="d-flex align-items-center h-100">1</th>
                                <td class="">Pakaya</td>
                                <td class="">15</td>
                                <td class="">2023-04-10</td>
                                <td class=""><a href="" class="project-view-btn"><i class="bi bi-eye-fill"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row" class="d-flex align-items-center h-100">1</th>
                                <td class="">Pakaya</td>
                                <td class="">15</td>
                                <td class="">2023-04-10</td>
                                <td class=""><a href="" class="project-view-btn"><i class="bi bi-eye-fill"></i></a></td>
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