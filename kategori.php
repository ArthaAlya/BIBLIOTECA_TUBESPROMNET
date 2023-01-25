<?php
  require 'koneksi.php';

  $action = query("SELECT * FROM book WHERE id_category = 1");
  $comedy = query("SELECT * FROM book WHERE id_category = 2");
  $fantasy = query("SELECT * FROM book WHERE id_category = 3");
  $history = query("SELECT * FROM book WHERE id_category = 4");
  $horror = query("SELECT * FROM book WHERE id_category = 5");
  $romance = query("SELECT * FROM book WHERE id_category = 6");
  $spirit = query("SELECT * FROM book WHERE id_category = 7");
  $young = query("SELECT * FROM book WHERE id_category = 8");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Bibliotecă - Bookstore WebStore</title>

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
    <link href="assets/css/style.css" rel="stylesheet" />
    
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center">
        <div class="logo mr-auto">
          <h1 class="text-light">
            <a href="index.php"><span>Bibliotecă</span></a>
          </h1>
        </div>

        <!-- Navbar -->
        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="index.php #header">Home</a></li>
            <li><a href="index.php #about">About</a></li>
            <li><a href="index.php #promo">Promo</a></li>
            <li><a href="index.php #arrival">New Arrival</a></li>
            <li><a href="kategori.php">Category</a></li>
            <li><a href="index.php #team">Team</a></li>
            <li><a href="index.php #contact">Contact</a></li>

            <li class="get-started"><a href="login.php">Login</a></li>
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
          <h2>Category</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-action">Action and Adventure</li>
              <li data-filter=".filter-comedy">Comedy</li>
              <li data-filter=".filter-fantasy">Fantasy</li>
              <li data-filter=".filter-history">Historical</li>
              <li data-filter=".filter-horror">Horror</li>
              <li data-filter=".filter-romance">Romance</li>
              <li data-filter=".filter-spirit">Spiritual</li>
              <li data-filter=".filter-young">Young Adult</li>
            </ul>
          </div>
        </div>

          <div class="row portfolio-container justify-content-center" data-aos="fade-up" data-aos-delay="400">
            <!--Action and Adventure-->
            <?php
              foreach($action as $act):
            ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-action ml-4 mt-4">
              <div class="portfolio-wrap">
                <img src="assets/img/book/Action and Adventure/<?= $act["photo_book"]?>" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4><?= $act["name_book"]?></h4>
                  <p>Rp <?= $act["book_price"]?></p>
                  <div class="portfolio-links">
                    <a href="assets/img/book/Action and Adventure/<?= $act["photo_book"]?>" data-gall="portfolioGallery" class="venobox" title="<?= $act["name_book"]?> by <?= $act["author"]?>"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <?php
                endforeach;
            ?>

            <!-- Comedy -->
            <?php
              foreach($comedy as $com):
            ?>
              <div class="col-lg-4 col-md-6 portfolio-item filter-comedy ml-4 mt-4">
                <div class="portfolio-wrap">
                  <img src="assets/img/book/Comedy/<?= $com["photo_book"]?>" class="img-fluid" alt="" />
                  <div class="portfolio-info">
                    <h4><?= $com["name_book"]?></h4>
                    <p>Rp <?= $com["book_price"]?></p>
                    <div class="portfolio-links">
                      <a href="assets/img/book/Comedy/<?= $com["photo_book"]?>" data-gall="portfolioGallery" class="venobox" title="<?= $com["name_book"]?> by <?= $com["author"]?>"><i class="bx bx-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <?php
                endforeach;
            ?>

              <!-- Fantasy -->
              <?php
                foreach($fantasy as $fan):
              ?>
              <div class="col-lg-4 col-md-6 portfolio-item filter-fantasy ml-4 mt-4">
                <div class="portfolio-wrap">
                  <img src="assets/img/book/Fantasy/<?= $fan["photo_book"]?>" class="img-fluid" alt="" />
                  <div class="portfolio-info">
                    <h4><?= $fan["name_book"]?></h4>
                    <p>Rp <?= $fan["book_price"]?></p>
                    <div class="portfolio-links">
                      <a href="assets/img/book/Fantasy/<?= $fan["photo_book"]?>" data-gall="portfolioGallery" class="venobox" title="<?= $fan["name_book"]?> by <?= $fan["author"]?>"><i class="bx bx-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <?php
                endforeach;
              ?>

              <!-- Historical -->
              <?php
                foreach($history as $his):
              ?>
              <div class="col-lg-4 col-md-6 portfolio-item filter-history ml-4 mt-4">
                <div class="portfolio-wrap">
                  <img src="assets/img/book/Historical/<?= $his["photo_book"]?>" class="img-fluid" alt="" />
                  <div class="portfolio-info">
                    <h4><?= $his["name_book"]?></h4>
                    <p>Rp <?= $his["book_price"]?></p>
                    <div class="portfolio-links">
                      <a href="assets/img/book/Historical/<?= $his["photo_book"]?>" data-gall="portfolioGallery" class="venobox" title="<?= $his["name_book"]?> by <?= $his["author"]?>"><i class="bx bx-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <?php
                endforeach;
              ?>

              <!-- Horror -->
              <?php
                foreach($horror as $hor):
              ?>
              <div class="col-lg-4 col-md-6 portfolio-item filter-horror ml-4 mt-4">
                <div class="portfolio-wrap">
                  <img src="assets/img/book/Horror/<?= $hor["photo_book"]?>" class="img-fluid" alt="" />
                  <div class="portfolio-info">
                    <h4><?= $hor["name_book"]?></h4>
                    <p>Rp <?= $hor["book_price"]?></p>
                    <div class="portfolio-links">
                      <a href="assets/img/book/Horror/<?= $hor["photo_book"]?>" data-gall="portfolioGallery" class="venobox" title="<?= $hor["name_book"]?> by <?= $hor["author"]?>"><i class="bx bx-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <?php
                endforeach;
              ?>
              
              <!-- Romance -->
              <?php
                foreach($romance as $rom):
              ?>
              <div class="col-lg-4 col-md-6 portfolio-item filter-romance ml-4 mt-4">
                <div class="portfolio-wrap">
                  <img src="assets/img/book/Romance/<?= $rom["photo_book"]?>" class="img-fluid" alt="" />
                  <div class="portfolio-info">
                    <h4><?= $rom["name_book"]?></h4>
                    <p>Rp <?= $rom["book_price"]?></p>
                    <div class="portfolio-links">
                      <a href="assets/img/book/Romance/<?= $rom["photo_book"]?>" data-gall="portfolioGallery" class="venobox" title="<?= $rom["name_book"]?> by <?= $rom["author"]?>"><i class="bx bx-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <?php
                endforeach;
              ?>

              <!-- Spiritual -->
              <?php
                foreach($spirit as $spi):
              ?>
              <div class="col-lg-4 col-md-6 portfolio-item filter-spirit ml-4 mt-4">
                <div class="portfolio-wrap">
                  <img src="assets/img/book/Spiritual/<?= $spi["photo_book"]?>" class="img-fluid" alt="" />
                  <div class="portfolio-info">
                    <h4><?= $spi["name_book"]?></h4>
                    <p>Rp <?= $spi["book_price"]?></p>
                    <div class="portfolio-links">
                      <a href="assets/img/book/Spiritual/<?= $spi["photo_book"]?>" data-gall="portfolioGallery" class="venobox" title="<?= $spi["name_book"]?> by <?= $spi["author"]?>"><i class="bx bx-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <?php
                endforeach;
              ?>

              <!-- Young Adult -->
              <?php
                foreach($young as $you):
              ?>
              <div class="col-lg-4 col-md-6 portfolio-item filter-young ml-4 mt-4">
                <div class="portfolio-wrap">
                  <img src="assets/img/book/Young Adult/<?= $you["photo_book"]?>" class="img-fluid" alt="" />
                  <div class="portfolio-info">
                    <h4><?= $you["name_book"]?></h4>
                    <p>Rp <?= $you["book_price"]?></p>
                    <div class="portfolio-links">
                      <a href="assets/img/book/Young Adult/<?= $you["photo_book"]?>" data-gall="portfolioGallery" class="venobox" title="<?= $you["name_book"]?> by <?= $you["author"]?>"><i class="bx bx-plus"></i></a>
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

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-lg-6 text-lg-left text-center">
            <div class="copyright">&copy; Copyright <strong>Bibliotecă</strong>. All Rights Reserved</div>
          </div>
          <div class="col-lg-6">
            <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
              <a href="#intro" class="scrollto">Home</a>
              <a href="#about" class="scrollto">About</a>
              <a href="" style="pointer-events: none">Privacy Policy</a>
              <a href="" style="pointer-events: none">Terms of Use</a>
            </nav>
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
