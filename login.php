<?php
  require 'koneksi.php';
  session_start();

  if(isset($_POST["login"])){
    $uname = $_POST["username"];
    $password = $_POST["password"];

    $result=mysqli_query($conn, "SELECT * FROM user WHERE uname='$uname' and password='$password'");
    
    //cek username ada atau tidak di dalam database
    if(mysqli_num_rows($result) > 0){

      $data = mysqli_fetch_assoc($result);
      
      // cek jika user login sebagai admin
      if($data['level']=="admin"){

        // buat session login dan username
        $_SESSION['id_user']= $data['id_user'];
        $_SESSION['name_user']= $data['name_user'];
        $_SESSION['uname'] = $uname;
        $_SESSION['level'] = "admin";
        // alihkan ke halaman dashboard admin
        header("location:admin_index.php");
      }
      
      //Jika masuk sebagai pembeli
      else if($data['level']=="buyer"){
        // buat session login dan username
        $_SESSION['id_user']= $data['id_user'];
        $_SESSION['name_user']= $data['name_user'];
        $_SESSION['uname'] = $uname;
        $_SESSION['level'] = "buyer";
        // alihkan ke halaman dashboard pegawai
        header("location:buyer_index.php");

      }

      //Jika masuk sebagai kasir
      else if($data['level']=="cashier"){
          // buat session login dan username
          $_SESSION['id_user']= $data['id_user'];
          $_SESSION['name_user']= $data['name_user'];
          $_SESSION['uname'] = $uname;
          $_SESSION['level'] = "cashier";
          // alihkan ke halaman dashboard pegawai
          header("location:cashier_index.php");
        
      }
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

    <title>Login Page</title>
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
                  <h3>Login to <strong style="color: #167d7f">Bibliotecă</strong></h3>
                  <p class="mb-4">This page will lead you to the page you have already assigned with. If you are a buyer and didn't have any account, please click the "Make New Account" below</p>
                </div>
                <form action="" method="post">
                  <div class="form-group first">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required />
                  </div>
                  <div class="form-group middle mb-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required />
                  </div>

                  <div class="d-flex mb-5 align-items-center">
                    <label class="control control--checkbox mb-0"
                      ><span class="caption">Remember me</span>
                      <input type="checkbox" checked="checked" />
                      <div class="control__indicator"></div>
                    </label>
                    <span class="ml-auto"><a href="signup.php" class="register">Make new account</a></span>
                  </div>

                  <center><button type="submit" name="login" class="btn">Log In</button></center>
                </form>
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
