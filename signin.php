<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/black.png" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Sign In</title>
</head>

<body class="body3">

  <div class="container ">
    <div class="row justify-content-center">
      <div class="col-md-6 ">
        <div id="signInForm">
          <h2 class="text-center mb-4">Sign In</h2>
          <?php
require "connection.php";
$email = "";
$password = "";

if (isset($_COOKIE["email"])) {
    $email = $_COOKIE["email"];
}

if (isset($_COOKIE["password"])) {
    $password = $_COOKIE["password"];
}

?>
          <div class="text-center mb-2"><img src="images/profile-5681749-4730491.gif" class="gif "> </div>
          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $email;?>"  required>
          </div>

          <div class="form-group">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo $password;?>"  required>
          </div>

          <div class="d-flex justify-content-between">
            <div class="d-flex align-items-center col justify-content-start m-0 p-0">
              <input type="checkbox" class="m-0" height="100%" id="check">
              <p class="m-0 ml-2" for="">Remember Me</p>
            </div>
            <div class="d-flex align-items-center col justify-content-end m-0 p-0">
              <a href="#!" class="m-0 "  onclick="frogotpassword();"><p class="m-0">Forgot Password ?</p></a>
            </div>
            
          </div>

          <button  class="btn btn-primary btn-block mt-2" onclick="signin();">Sign In</button>
          

          <p class="mt-3 text-center">Don't have an account? <a href="signup.php" class="signup-link">Sign Up</a></p>

          <div class="row justify-content-center  mt-5"><img
              src="images/2993685_brand_brands_google_logo_logos_icon (1).png" class="icon mx-3" /><img
              src="images/4202105_microsoft_logo_social_social media_icon.png" class="icon mx-3" /><img
              src="images/5296499_fb_facebook_facebook logo_icon.png" class="icon mx-3" /></div>

             
</div>
      </div>
    </div>
    
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
    <!-- modal -->

    <div class="modal" tabindex="-1" id="forgotPasswordModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Reset Password</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-3">

                                <div class="col-6">
                                    <label class="form-label">New Password</label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="npi"/>
                                        <button class="btn btn-outline-secondary" type="button" id="npb" onclick="showPassword1();"><i id="e1" class="bi bi-eye-slash-fill"></i></button>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <label class="form-label">Re-type Password</label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="rnp"/>
                                        <button class="btn btn-outline-secondary" type="button" id="rnpb" onclick="showPassword2();"><i id="e2" class="bi bi-eye-slash-fill"></i></button>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Verification Code</label>
                                    <input type="text" class="form-control" id="vc"/>
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="resetpw();">Reset Password</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal -->
</body>

</html>