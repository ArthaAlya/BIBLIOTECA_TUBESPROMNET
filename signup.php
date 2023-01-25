<?php
  require 'koneksi.php';
  session_start();

  if(isset($_POST["signup"])){
    if(registrasi($_POST)>0){
      echo "<script>
        alert('Your account has successfully added!');
      </script>";
    }
    else{
      echo mysqli_error($conn);
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="assets//vendor4/fonts/icomoon/style.css" />

    <link rel="stylesheet" href="assets/vendor4/css/owl.carousel.min.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor4/css/bootstrap.min.css" />

    <!-- Style -->
    <link rel="stylesheet" href="assets/vendor4/css/login.css" />

    <title>Sign Up Page</title>
  </head>
  <body>
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 order-md-2">
            <img src="assets/img/login_picture.svg" alt="Image" class="img-fluid" />
          </div>
          <div class="col-md-6 contents">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="mb-4">
                  <h3>Sign Up to <strong style="color: #167d7f">Bibliotecă</strong></h3>
                  <p class="mb-4">This page is for buyer who wants to make a new account at our system. Please check the data carefully before press the button</p>
                </div>
                <form action="" method="post">
                  <div class="form-group first">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" name ="name" id="name" required />
                  </div>
                  <div class="form-group second">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" required />
                  </div>
                  <div class="form-group third mb-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required />
                  </div>
                  <div class="form-group last">
                    <input type="text" class="form-control" name="level" id="level" value="buyer" hidden />
                  </div>

                  <center><button type="submit" name="signup" class="btn">Sign Up</button></center>
                </form>
                <div class="d-flex mb-5 align-items-center">
                  <br/><br/><br/><br/><br/><br/>
                  <span class="ml-auto"><a href="login.php" class="register">Back to Log In</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="assets/vendor4/js/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor4/js/popper.min.js"></script>
    <script src="assets/vendor4/js/bootstrap.min.js"></script>
    <script src="assets/vendor4/js/main.js"></script>
  </body>
</html>