<?php
  require 'koneksi.php';
  session_start();

  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['level']==""){
    header("location:buyer_index.php?pesan=gagal");
  }

  $action = query("SELECT * FROM book WHERE id_category = 1");
  $comedy = query("SELECT * FROM book WHERE id_category = 2");
  $fantasy = query("SELECT * FROM book WHERE id_category = 3");
  $history = query("SELECT * FROM book WHERE id_category = 4");
  $horror = query("SELECT * FROM book WHERE id_category = 5");
  $romance = query("SELECT * FROM book WHERE id_category = 6");
  $spirit = query("SELECT * FROM book WHERE id_category = 7");
  $young = query("SELECT * FROM book WHERE id_category = 8");

  $user=$_SESSION['id_user'];

  $notify = query("SELECT * FROM notify WHERE id_user=$user");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Buyer Page</title>

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
    <link href="assets/css/buyer.css" rel="stylesheet" />
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
            <a href="#category" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Category</span></a>
          </li>
          <li>
            <a href="#testimonials" class="nav-link scrollto"><i class="bi bi-bell"></i> <span>Notification</span></a>
          </li>
          <li>
            <a href="#cart" class="nav-link scrollto"><i class="bi bi-cart4"></i> <span>Cart</span></a>
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
        <h1 data-aos="zoom-in" data-aos-delay="50"><span class="typed" data-typed-items="Welcome to Our Website"></span></h1>
        <p data-aos="zoom-in" data-aos-delay="600"><?php echo $_SESSION['name_user']; ?></p>
      </div>
    </section>
    <!-- End Home -->

    <main id="main">
      <!-- ======= Category Section ======= -->
      <section id="category" class="portfolio section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
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
            <div class="col-lg-3 col-md-6 portfolio-item filter-action ml-4 mt-4">
              <div class="portfolio-wrap">
                <img src="assets/img/book/Action and Adventure/<?= $act["photo_book"]?>" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4><?= $act["name_book"]?></h4>
                  <p>Rp <?= $act["book_price"]?></p>
                  <div class="portfolio-links">
                    <a href="assets/img/book/Action and Adventure/<?= $act["photo_book"]?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $act["name_book"]?> by <?= $act["author"]?>"><i class="bx bx-plus"></i></a>
                    <a href=""><i class="bi bi-cart4"></i></a>
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
              <div class="col-lg-3 col-md-6 portfolio-item filter-comedy ml-4 mt-4">
                <div class="portfolio-wrap">
                  <img src="assets/img/book/Comedy/<?= $com["photo_book"]?>" class="img-fluid" alt="" />
                  <div class="portfolio-info">
                    <h4><?= $com["name_book"]?></h4>
                    <p>Rp <?= $com["book_price"]?></p>
                    <div class="portfolio-links">
                      <a href="assets/img/book/Comedy/<?= $com["photo_book"]?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $com["name_book"]?> by <?= $com["author"]?>"><i class="bx bx-plus"></i></a>
                      <a href=""><i class="bi bi-cart4"></i></a>
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
              <div class="col-lg-3 col-md-6 portfolio-item filter-fantasy ml-4 mt-4">
                <div class="portfolio-wrap">
                  <img src="assets/img/book/Fantasy/<?= $fan["photo_book"]?>" class="img-fluid" alt="" />
                  <div class="portfolio-info">
                    <h4><?= $fan["name_book"]?></h4>
                    <p>Rp <?= $fan["book_price"]?></p>
                    <div class="portfolio-links">
                      <a href="assets/img/book/Fantasy/<?= $fan["photo_book"]?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $fan["name_book"]?> by <?= $fan["author"]?>"><i class="bx bx-plus"></i></a>
                      <a href=""><i class="bi bi-cart4"></i></a>
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
              <div class="col-lg-3 col-md-6 portfolio-item filter-history ml-4 mt-4">
                <div class="portfolio-wrap">
                  <img src="assets/img/book/Historical/<?= $his["photo_book"]?>" class="img-fluid" alt="" />
                  <div class="portfolio-info">
                    <h4><?= $his["name_book"]?></h4>
                    <p>Rp <?= $his["book_price"]?></p>
                    <div class="portfolio-links">
                      <a href="assets/img/book/Historical/<?= $his["photo_book"]?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $his["name_book"]?> by <?= $his["author"]?>"><i class="bx bx-plus"></i></a>
                      <a href=""><i class="bi bi-cart4"></i></a>
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
              <div class="col-lg-3 col-md-6 portfolio-item filter-horror ml-4 mt-4">
                <div class="portfolio-wrap">
                  <img src="assets/img/book/Horror/<?= $hor["photo_book"]?>" class="img-fluid" alt="" />
                  <div class="portfolio-info">
                    <h4><?= $hor["name_book"]?></h4>
                    <p>Rp <?= $hor["book_price"]?></p>
                    <div class="portfolio-links">
                      <a href="assets/img/book/Horror/<?= $hor["photo_book"]?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $hor["name_book"]?> by <?= $hor["author"]?>"><i class="bx bx-plus"></i></a>
                      <a href=""><i class="bi bi-cart4"></i></a>
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
              <div class="col-lg-3 col-md-6 portfolio-item filter-romance ml-4 mt-4">
                <div class="portfolio-wrap">
                  <img src="assets/img/book/Romance/<?= $rom["photo_book"]?>" class="img-fluid" alt="" />
                  <div class="portfolio-info">
                    <h4><?= $rom["name_book"]?></h4>
                    <p>Rp <?= $rom["book_price"]?></p>
                    <div class="portfolio-links">
                      <a href="assets/img/book/Romance/<?= $rom["photo_book"]?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $rom["name_book"]?> by <?= $rom["author"]?>"><i class="bx bx-plus"></i></a>
                      <a href=""><i class="bi bi-cart4"></i></a>
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
              <div class="col-lg-3 col-md-6 portfolio-item filter-spirit ml-4 mt-4">
                <div class="portfolio-wrap">
                  <img src="assets/img/book/Spiritual/<?= $spi["photo_book"]?>" class="img-fluid" alt="" />
                  <div class="portfolio-info">
                    <h4><?= $spi["name_book"]?></h4>
                    <p>Rp <?= $spi["book_price"]?></p>
                    <div class="portfolio-links">
                      <a href="assets/img/book/Spiritual/<?= $spi["photo_book"]?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $spi["name_book"]?> by <?= $spi["author"]?>"><i class="bx bx-plus"></i></a>
                      <a href=""><i class="bi bi-cart4"></i></a>
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
              <div class="col-lg-3 col-md-6 portfolio-item filter-young ml-4 mt-4">
                <div class="portfolio-wrap">
                  <img src="assets/img/book/Young Adult/<?= $you["photo_book"]?>" class="img-fluid" alt="" />
                  <div class="portfolio-info">
                    <h4><?= $you["name_book"]?></h4>
                    <p>Rp <?= $you["book_price"]?></p>
                    <div class="portfolio-links">
                      <a href="assets/img/book/Young Adult/<?= $you["photo_book"]?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $you["name_book"]?> by <?= $you["author"]?>"><i class="bx bx-plus"></i></a>
                      <a href=""><i class="bi bi-cart4"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <?php
                endforeach;
              ?>
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

          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
              <?php
                foreach($notify as $not):
              ?>
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <h3>ID order : <?= $not["id_order"]?></h3>
                  <h4>Status : <?= $not["status"]?></h4>
                  <h5>Date : <?= $not["date_notif"]?></h5>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Hello, <?php echo $_SESSION['name_user']; ?>.<br/>
                    This is your number of receipt : <?= $not["num_receipt"]?>. <br/>
                    If you have any questions regarding your order, please contact us through our media at the main page.
                    We hope you will be very satisfied. <br/>
                    Thank you.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
              <!-- End testimonial item -->
              <?php
                endforeach;
              ?>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!-- End Testimonials Section -->

      <!-- ======= Cart Section ======= -->
      <section id="cart" class="cart">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Cart</h2>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <!-- Table with stripped rows -->
                  <table class="table datatable">
                    <thead>
                      <tr align="center">
                        <th scope="col">No.</th>
                        <th scope="col"></th>
                        <th scope="col">Detail</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <form name="autoSumForm" action="">
                      <tr align="center">
                        <th scope="row">1</th>
                        <td><img src="assets/img/book/Action and Adventure/Pulang.jpg" width="150px" height="200px" /></td>
                        <td>Pulang<br /><br/>Rp <input type="text" name='harga1' value="89000" readonly/></td>
                        <td>
                          <input type="text" class="form-control" name='jumlah1' onFocus="startCalc();" onBlur="stopCalc();" width="5px" />
                        </td>
                        <td>Rp <input type="text" name="total1" value="0" readonly/></td>
                        <td><i class="bi bi-trash"></i></td>
                      </tr>
                      <tr align="center">
                        <th scope="row">2</th>
                        <td><img src="assets/img/book/Young Adult/Hujan.jpg" width="150px" height="200px" /></td>
                        <td>Hujan<br /><br/>Rp <input type="text" name='harga2' value="78000" readonly /></td>
                        <td>
                          <input type="text" class="form-control" name='jumlah2' onFocus="startCalc();" onBlur="stopCalc();" width="5px" />
                        </td>
                        <td>Rp <input type="text" name="total2" value="0" readonly/></td>
                        <td><i class="bi bi-trash"></i></td>
                      </tr>
                      <tr>
                        <td colspan="6" align="right">
                          Total : Rp <input type="text" name="total3" value="0" readonly/> <br /><br /><br />
                        </td>
                      </tr>
                      </form>
                    </tbody>
                  </table>
                  <!-- End Table with stripped rows -->
                  <a href="checkout.php"><input type="submit" value="Checkout" class="btn" /></a>
                  <script>

                    function startCalc(){

                    interval = setInterval("calc()",1);}

                    function calc(){

                    one = document.autoSumForm.harga1.value;

                    two = document.autoSumForm.jumlah1.value;

                    document.autoSumForm.total1.value = (one * 1) * (two * 1) ;
                      
                    three = document.autoSumForm.harga2.value;

                    four = document.autoSumForm.jumlah2.value;

                    document.autoSumForm.total2.value = (three * 1) * (four * 1) ;

                    five = document.autoSumForm.total1.value;

                    six = document.autoSumForm.total2.value; 

                    document.autoSumForm.total3.value = (five * 1) + (six * 1) ;
                    }


                    function stopCalc(){

                    clearInterval(interval);}

                    </script>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Cart Section -->
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/buyer.js"></script>
  </body>
</html>
