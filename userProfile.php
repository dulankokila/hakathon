<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Profile </title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resource/logo.png" />
</head>

<body style="background-color: #040D12;">

    <div class="container-fluid">
        <div class="row">

            <?php include "header.php"; ?>

            <br/>
            <br/>


                <div class="col-12" style="background-color:#183D3D;">
                    <div class="row">

                        <div class="col-10 offset-1 rounded mt-4 mb-4" style="background-color: #93B1A6;">
                            <div class="row g-2">

                                <div class="col-md-3 border-end">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
 


                                        <span class="fw-bold"> </span>
                                        <span class="fw-bold text-black-50"></span>

                                        <input type="file" class="d-none"/><img src="profile_img/profile.png" style="height: 200px;" />
                                        <label for="profileimg" class="btn btn-primary mt-5" >Update Profile Image</label>

                                    </div>
                                </div>

                                <div class="col-md-8 border-end">
                                    <div class="p-3 py-5">

                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="fw-bold">Profile Settings</h4>
                                        </div>

                                        <div class="row mt-4">

                                            <div class="col-6">
                                                <label class="form-label">First Name</label>
                                                <input type="text" class="form-control" style="border-radius: 20px;"/>
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Last Name</label>
                                                <input type="text" class="form-control" style="border-radius: 20px;"/>
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label">Mobile</label>
                                                <input type="text" class="form-control" style="border-radius: 20px;"/>
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label" >Password</label>
                                                <div class="input-group"  >
                                                    <input type="password" class="form-control" style="border-top-left-radius: 20px; border-bottom-left-radius: 20px;"/>
                                                    
                                                    <span class="input-group-text bg-primary" style="border-bottom-right-radius: 20px;  border-top-right-radius: 20px">
                                                        <i class="bi bi-eye-slash-fill text-white"></i>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label">Email</label>
                                                <input type="text" class="form-control" style="border-radius: 20px;" readonly/>
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label">Registered Date</label>
                                                <input type="text" class="form-control" style="border-radius: 20px;" readonly/>
                                            </div>
   

                                            <div class="col-12 d-grid mt-3">
                                                <button class="btn btn-primary">Update My Profile</button>
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