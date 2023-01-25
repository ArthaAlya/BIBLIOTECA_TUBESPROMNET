<?php
require 'koneksi.php';
  session_start();

  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['level']==""){
    header("location:cashier_index.php?pesan=gagal");
  }

  //Ambil data di URL
  $id = $_GET["id12"];

  //query data berdasarkan id
  $checkout = query("SELECT * FROM checkout WHERE id_checkout = $id");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Checkout Detail</title>

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
            <a href="cashier_index.php"><span>Bibliotecă</span></a>
          </h1>
        </div>

        <!-- Navbar -->
        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="get-started"><a href="cashier_index.php #contact">Back</a></li>
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
            <h2>Detail Order</h2>
          </div>
          <?php
            foreach($checkout as $check):
            ?>
          <div class="row">
            <div class="col-75">
              <div class="container" data-aos="fade-up">
                <div class="card border-dark px-4 px-lg-5 mt-6 ml-5 mb-5">
                    <br/><strong>Order Detail</strong>
                    <table class="table">
                      <tbody>
                        <tr>
                          <td>Title Book</td>
                          <td>Pulang, Hujan</td>
                        </tr>
                        <tr>
                          <td>Price Book</td>
                          <td>Rp 89000, Rp 234000</td>
                        </tr>
                        <tr>
                          <td>Total Order Book</td>
                          <td>1, 3</td>
                        </tr>
                      </tbody>
                    </table>
                    <br />
                    <strong>Billing Address</strong>
                    <table class="table">
                      <tbody>
                        <tr>
                          <td>Buyer Name</td>
                          <td><?= $check["name"]?></td>
                        </tr>
                        <tr>
                          <td>Buyer Addres</td>
                          <td><?= $check["address"]?><?= $check["city"]?> <?= $check["state"]?><?= $check["zip"]?></td>
                        </tr>
                        <tr>
                          <td>Buyer Phone Number</td>
                          <td><?= $check["number"]?></td>
                        </tr>
                        <tr>
                          <td>Buyer Email</td>
                          <td><?= $check["email"]?></td>
                        </tr>
                        <tr>
                          <td>Expedition</td>
                          <td><?= $check["expedition"]?></td>
                        </tr>
                      </tbody>
                    </table>
        
                    <br /><strong>Payment</strong>
                    <table class="table">
                      <tbody>
                        <tr>
                          <td>Payment Method</td>
                          <td><?= $check["method"]?></td>
                        </tr>
                        <tr>
                          <td>Name On Card</td>
                          <td><?= $check["cardname"]?></td>
                        </tr>
                        <tr>
                          <td>Card number</td>
                          <td><?= $check["card_number"]?></td>
                        </tr>
                        <tr>
                          <td>Total Payment</td>
                          <td>Rp <?= $check["total_price"]?></td>
                        </tr>
                        <tr>
                          <td>Proof of Payment</td>
                          <td><img src="assets/img/book/Upload/<?= $check["proof"]?>" class="rounded" alt="Cinque Terre" width="256px" height="256px" /></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
              </div>
            </div>
          </div>

          <?php
            endforeach;
            ?>
        
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
