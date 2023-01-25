<?php
  require 'koneksi.php';
  session_start();

  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['level']==""){
    header("location:cashier_index.php?pesan=gagal");
  }

  if(isset($_POST["add"])){
    if(status($_POST) > 0){
        echo "<script>
        alert('Data has been unsuccessfully added!'); </script>";
    }
    else{
        echo "<script>
        alert('Data has been successfully added!'); </script>";
    }
  }

  $notify = query("SELECT * FROM notify LEFT JOIN user ON notify.id_user=user.id_user");
  $checkout=query("SELECT * FROM checkout");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Cashier Page</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor3/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor3/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor3/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor3/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor3/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor3/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/cashier.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Mobile nav toggle button ======= -->
    <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">
      <nav id="navbar" class="navbar nav-menu">
        <ul>
          <li>
            <a href="#home" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a>
          </li>
          <li>
            <a href="#category" class="nav-link scrollto"><i class="bi bi-view-list"></i> <span>List Notification</span></a>
          </li>
          <li>
            <a href="#testimonials" class="nav-link scrollto"><i class="bi bi-megaphone"></i> <span>Make Notification</span></a>
          </li>
          <li>
            <a href="#contact" class="nav-link scrollto"><i class="bi bi-list-check"></i> <span>List Order</span></a>
          </li>
          <li>
            <a href="logout.php" class="nav-link scrollto"><i class="bi bi-box-arrow-right"></i> <span>Log Out</span></a>
          </li>
        </ul>
      </nav>
      <!-- .nav-menu -->
    </header>
    <!-- End Header -->

    <!-- ======= Home Section ======= -->
    <section id="home" class="d-flex flex-column justify-content-center">
      <div class="container" data-aos="zoom-in" data-aos-delay="100">
        <h1 data-aos="zoom-in" data-aos-delay="50"><span class="typed" data-typed-items="Welcome Cashier!"></span></h1>
        <p data-aos="zoom-in" data-aos-delay="600"><?php echo $_SESSION['name_user']; ?></p>
      </div>
    </section>
    <!-- End Home -->

    <main id="main">
      <!-- ======= Category Section ======= -->
      <section id="category" class="portfolio section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>List Notification</h2>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <!-- Table with stripped rows -->
                  <table class="table datatable">
                    <thead>
                      <tr align="center">
                        <th scope="col">Date</th>
                        <th scope="col">ID_Buyer</th>
                        <th scope="col">Name Buyer</th>
                        <th scope="col">ID_Order</th>
                        <th scope="col">Status</th>
                        <th scope="col">Receipt Number</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <?php
                      foreach($notify as $not):
                    ?>
                    <tbody>
                      <tr align="center">
                        <th><?= $not["date_notif"]?></th>
                        <td><?= $not["id_user"]?></td>
                        <td><?= $not["name_user"]?></td>
                        <td><?= $not["id_order"]?></td>
                        <td><?= $not["status"]?></td>
                        <td><?= $not["num_receipt"]?></td>
                        <td><a href="admin_delete.php?id10=<?= $not["id_notify"]?>" onclick="return confirm('Are you sure about this?');"><i class="bi bi-trash"></i></a></td>
                      </tr>
                    </tbody>
                    <?php
                      endforeach;
                    ?>
                  </table>
                  <!-- End Table with stripped rows -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Portfolio Section -->

      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials section-bg" style="background-color: #ddffe7">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Notification</h2>
          </div>

          <div class="col-12">
            <div class="card recent-sales">
              <div class="card-body"><br>
                <form action="" method="post" enctype="multipart/form-data">
                  <div class="mb-3">
                    <label for="id_buyer" class="form-label">ID_Buyer</label>
                    <input type="text" class="form-control" id="id_buyer" name="id_buyer" placeholder="ID_Buyer" require>
                  </div>
                  <div class="mb-3">
                    <label for="id_order" class="form-label">ID_Order</label>
                    <input type="text" class="form-control" id="id_order" name="id_order" placeholder="ID_Order" require>
                  </div>
                  <div class="mb-3">
                    <label for="status" class="form-label">Status Order</label>
                    <input type="text" class="form-control" id="status" name="status" placeholder="Status Order" require>
                  </div>
                  <div class="mb-3">
                    <label for="date_notif" class="form-label">Date Notification</label>
                    <input type="date" class="form-control" id="date_notif" name="date_notif" placeholder="Date" require>
                  </div>
                  <div class="mb-3">
                    <label for="num_receipt" class="form-label">Number of Receipt</label>
                    <input type="text" class="form-control" id="num_receipt" name="num_receipt" placeholder="Number of Receipt" require>
                  </div>
                  <button type="submit" name="add" id="add" class="btn btn-outline-success">Make Notification</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Testimonials Section -->

      <!-- ======= List Order Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>List Order</h2>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <!-- Table with stripped rows -->
                  <table class="table datatable">
                    <thead>
                      <tr align="center">
                        <th scope="col">ID Order</th>
                        <th scope="col">ID Buyer</th>
                        <th scope="col">Buyer Name</th>
                        <th scope="col">Proof</th>
                        <th scope="col" colspan="2">Detail</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        foreach($checkout as $check):
                      ?>
                      <tr align="center">
                        <td><?= $check["id_order"]?></td>
                        <td><?= $check["id_user"]?></td>
                        <td><?= $check["name"]?></td>
                        <td><img src="assets/img/book/Upload/<?= $check["proof"]?>" widht="100px" height="100px"></td>
                        <td>
                          <a href="order_detail.php?id12=<?= $check["id_checkout"]?>"><i class="bi bi-card-list"></i></a>
                        </td>
                        <td>
                          <a href="admin_delete.php?id11=<?= $check["id_checkout"]?>" onclick="return confirm('Are you sure about this?');"><i class="bi bi-trash"></i></a>
                        </td>
                      </tr>
                      <?php
                        endforeach;
                      ?>
                    </tbody>
                  </table>
                  <!-- End Table with stripped rows -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <h3>Bibliotecă</h3>
        <div class="social-links">
          <a href="https://twitter.com/upi_official" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/upiofficial" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/upiofficial/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
        </div>
        <div class="copyright">
          &copy; Copyright <strong><span>Bibliotecă</span></strong
          >. All Rights Reserved
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor3/purecounter/purecounter.js"></script>
    <script src="assets/vendor3/aos/aos.js"></script>
    <script src="assets/vendor3/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor3/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor3/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor3/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor3/typed.js/typed.min.js"></script>
    <script src="assets/vendor3/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor3/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/buyer.js"></script>
  </body>
</html>
