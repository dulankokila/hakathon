
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Signup Page</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css" />
</head>

<body class="body3">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 div">
        <div id=" " class="col-12 col-lg-12 ">
          <h2 class="text-center">Sign Up</h2>
          <div class="text-center mb-2">
            <img src="images/profile-5681749-4730491.gif" class="gif" />
          </div>
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username"  required />
          </div>

          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" required />
          </div>

          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password"  required />
          </div>
          


          <div class="form-group">
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" class="form-control" id="confirmPassword" required />
          </div>
          <div class="form-group">
            <label for="password">Country:</label>
            <select  id="country" class="form-select">
             
              <option value="0">Select Country</option>
              <?php
              require "connection.php";
                                $country_rs = Database::search("SELECT * FROM `country`");
                                $country_num = $country_rs->num_rows;
                                echo($country_num);

                                for($x = 0; $x<$country_num; $x++){
                                    $country_data =  $country_rs->fetch_assoc();
                                    ?>
                                    <option value="<?php echo$country_data["id"]?>"><?php echo$country_data["name"]?></option>
                                    <?php
                                }
                                ?>
             
             </select>
          </div>

          <button type="submit" class="btn btn-primary btn-block" onclick="signup();">
            Sign Up
          </button>
          <p class="mt-3 text-center">
            Have an account?
            <a href="signin.html" class="signup-link">Sign In</a>
          </p>
          <div class="row justify-content-center mt-5">
            <img src="images/2993685_brand_brands_google_logo_logos_icon (1).png" class="icon mx-3" /><img
              src="images/4202105_microsoft_logo_social_social media_icon.png" class="icon mx-3" /><img
              src="images/5296499_fb_facebook_facebook logo_icon.png" class="icon mx-3" />
          </div>
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