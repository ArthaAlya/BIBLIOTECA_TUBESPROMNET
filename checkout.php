<?php
  require 'koneksi.php';
  session_start();

  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['level']==""){
    header("location:buyer_index.php?pesan=gagal");
  }

  if(isset($_POST["submit"])){
    if(checkout($_POST) > 0){
        echo "<script>
        alert('Your data successfully uploaded!');
        document.location.href = 'buyer_index.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Your data has been unsuccessfull to upload!');
        document.location.href = 'buyer_index.php';
        </script>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Checkout page</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/checkout.css" rel="stylesheet" />

  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center">
        <div class="logo mr-auto">
          <h1 class="text-light">
            <a href="index.html"><span>Bibliotecă</span></a>
          </h1>
        </div>

        <!-- Navbar -->
        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="get-started"><a href="buyer_index.php #contact">Back</a></li>
          </ul>
        </nav>
        <!-- .nav-menu -->
      </div>
    </header>
    <!-- End Header -->

      <!--======= Portfolio Section =======-->
      <section id="portfolio" class="portfolio">
        <div class="container">
          <div class="section-title" data-aos="fade-up">
            <h2>Check Out</h2>
            <h5>Please transfer to here : 8471726476433</h5>
          </div>
          <div class="row">
            <div class="col-75">
              <div class="container" data-aos="fade-up">
                <form action="" method="post" enctype="multipart/form-data">
                
                  <div class="row">
                    <div class="col-50">
                      <h3>Billing Address</h3>
                      <input type="text" id="id_user" name="id_user" value="11" hidden>
                      <label for="name"><i class="fa fa-user"></i> Full Name</label>
                      <input type="text" id="name" name="name" placeholder="John M. Doe" required>
                      <label for="number"><i class="fa fa-user"></i> Phone Number</label>
                      <input type="text" id="number" name="number" placeholder="John M. Doe" required>
                      <label for="email"><i class="fa fa-envelope"></i> Email</label>
                      <input type="text" id="email" name="email" placeholder="john@example.com" required>
                      <label for="adress"><i class="fa fa-address-card-o"></i> Address</label>
                      <input type="text" id="adress" name="address" placeholder="542 W. 15th Street" required>
                      <label for="city"><i class="fa fa-institution"></i> City</label>
                      <input type="text" id="city" name="city" placeholder="New York" required>
          
                      <div class="row">
                        <div class="col-50">
                          <label for="state">State</label>
                          <input type="text" id="state" name="state" placeholder="NY" required>
                        </div>
                        <div class="col-50">
                          <label for="zip">Zip</label>
                          <input type="text" id="zip" name="zip" placeholder="10001" required>
                        </div>
                        <div class="col-50">

                            <label  for="expedition">Expedition</label>
                            <select class="form-select" id="expedition" name="expedition" style="  width: 100%;margin-bottom: 20px; padding: 12px;border: 1px solid #ccc;border-radius: 3px;">
                            <option selected>Choose...</option>
                              <option value="DHL">DHL</option>
                              <option value="EMS">EMS</option>
                              <option value="POS">POS</option>
                              <option value="JNE">JNE</option>
                              <option value="JNT">JNT</option>
                              <option value="SICEPAT">SICEPAT</option>
                            </select>
                        </div>
                      
                      </div>
                    </div>
          
                    <div class="col-50">
                    <input type="text" id="id_order" name="id_order" value="151" hidden>
                      <h3>Payment</h3>
                      <label for="method">Method Payment </label>
                      <input type="text" id="method" name="method" placeholder="Credit Card">

                      <label for="cardname">Name on Card</label>
                      <input type="text" id="cardname" name="cardname" placeholder="John More Doe">
                      <label for="cardnumber">Card number</label>
                      <input type="text" id="cardnumber" name="cardnumber" placeholder="1111-2222-3333-4444">

                      <label for="subtotal">Sub Total Payment</label>
                      <input type="text" id="sub" name="subtotal" onkeyup="sum(); " value="323000"  readonly="readonly"> 
                      <label for="ongkir">Ongkir</label>
                      <input type="text" id="ongkir" name="ongkir" onkeyup="sum();"  >
                      <label for="total_price">Total Payment</label>
                      <input type="text" id="total_price" name="total_price" value="" readonly="readonly">
                    
                      <label for="expmonth">Proof of payment </label>
                      <input type="file" id="proof" name="proof" placeholder=" ">
                    </div>

                    <script type="text/javascript" language="Javascript">
                    function sum() {
                    var txtFirstNumberValue = document.getElementById('sub').value;
                    var txtSecondNumberValue = document.getElementById('ongkir').value;
                    var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
                    if (!isNaN(result)) {
                    document.getElementById('total_price').value = result;
      }
}
                    </script>
                    
                  </div>
                  <label>
                    <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                  </label>
                  <input type="submit" name="submit" value="Continue to checkout" class="btn">
                </form>
              </div>
            </div>
            <div class="col-25">
              <div class="containerCart" data-aos="fade-up">
                <h2></h2>
                <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>2</b></span></h4>
                <p></p>
                <p><a href="#">Pulang</a> <span class="price">Rp 89000</span></p>
                <p><a href="#">Hujan</a> <span class="price">Rp 234000</span></p>
                <br/>
                <hr>
                <p>Total <span class="price" style="color:black"><b>Rp 323000</b></span></p>
              </div>
            </div>
          </div>
          
          </body>
          </html>

        
        
        </div>
      </section>
      <!-- End Portfolio Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-lg-6 text-lg-left text-center">
            <div class="copyright">&copy; Copyright <strong>Bibliotecă</strong>. All Rights Reserved</div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    
  </body>
</html>
