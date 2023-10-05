<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
          <div class="text-center mb-2"><img src="images/profile-5681749-4730491.gif" class="gif "> </div>
          <div class="form-group">
            <input type="email" class="form-control" id="email"  placeholder="Email" required>
          </div>

          <div class="form-group">
            <input type="password" class="form-control" id="password" placeholder="Password" required>
          </div>

          <button class="btn btn-primary btn-block" onclick="signin();">Sign In</button>

          <p class="mt-3 text-center">Don't have an account? <a href="signup.html" class="signup-link">Sign Up</a></p>

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
</body>

</html>