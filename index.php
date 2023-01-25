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

    <?php
      require 'koneksi.php';

      $promo = query("SELECT category.name_category,book.name_book,book.author,book.book_price,book.photo_book FROM book
        LEFT JOIN category ON book.id_category = category.id_category ORDER BY id_book ASC LIMIT 5"
      );

      $arrival = query("SELECT category.name_category,book.name_book,book.author,book.book_price,book.photo_book FROM book
        LEFT JOIN category ON book.id_category = category.id_category ORDER BY id_book DESC LIMIT 10"
      );
    ?>
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
            <li class="active"><a href="#header">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#promo">Promo</a></li>
            <li><a href="#arrival">New Arrival</a></li>
            <li><a href="kategori.php">Category</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#contact">Contact</a></li>

            <li class="get-started"><a href="login.php">Login</a></li>
          </ul>
        </nav>
        <!-- .nav-menu -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Find your wanted books at Bibliotecă</h1>
            <br />
            <div data-aos="fade-up" data-aos-delay="800">
              <a href="login.php" class="btn-get-started scrollto">Get Started</a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
            <img src="assets/img/hero-img2.png" class="img-fluid animated" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <main>
      <!-- ======= Clients Section ======= -->
      <section id="clients" class="clients clients">
        <div class="container">
          <div class="row">
            <div class="col-lg-2 col-md-4 col-6">
              <img src="assets/img/clients/client-1.png" class="img-fluid" alt="" data-aos="zoom-in" />
            </div>

            <div class="col-lg-2 col-md-4 col-6">
              <img src="assets/img/clients/client-2.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100" />
            </div>

            <div class="col-lg-2 col-md-4 col-6">
              <img src="assets/img/clients/client-3.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="200" />
            </div>

            <div class="col-lg-2 col-md-4 col-6">
              <img src="assets/img/clients/client-4.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="300" />
            </div>

            <div class="col-lg-2 col-md-4 col-6">
              <img src="assets/img/clients/client-5.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="400" />
            </div>

            <div class="col-lg-2 col-md-4 col-6">
              <img src="assets/img/clients/client-6.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="500" />
            </div>
          </div>
        </div>
      </section>

      <!-- End Clients Section -->

      <!-- ======= About Us Section ======= -->
      <section id="about" class="about">
        <div class="container">
          <div class="section-title" data-aos="fade-up">
            <h2>About Us</h2>
          </div>

          <div class="row">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
              <p style="text-align: justify; text-indent: 0.5in">
                Bibliotecă is a online shop platform which design for selling some fiction books that related to some categories. Bibliotecă could be visited by anyone for searching and buying fiction books that they want to buy without go
                outside from home, it's also easily accessable and usable for all people. With Bibliotecă, you can order 24 hours per day, 7 days in a week. We offer some newest books and provide the delivery service all around Indonesia.
              </p>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
              <p style="text-align: justify; text-indent: 0.5in">
                We guarantee our customer about the delivery of the books, which will be done safely and quickly as soon as it can. For maintaining the quality of books, every book that will be sent always packaged carefully and safely.
                Lastly, we also offer the payment system with high level security system for protecting our customer's data and to prevent some frauds that can be happen.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Us Section -->

      <!-- ======= Promo Section ======= -->
      <section id="promo" class="promo">
        <div class="container">
          <div class="section-title" data-aos="fade-up">
            <h2>Promo</h2>
          </div>

          <div class="ml-5">
            <div class="row portfolio-container justify-content-center" data-aos="fade-up" data-aos-delay="400">
              <?php
                foreach($promo as $pro):
              ?>
              <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-wrap">
                  <img src="assets/img/book/<?= $pro["name_category"]?>/<?= $pro["photo_book"]?>" class="img-fluid" alt="" />
                  <div class="portfolio-info">
                    <h4><?= $pro["name_book"]?></h4>
                    <p>Rp <?= $pro["book_price"]?></p>
                    <div class="portfolio-links">
                      <a href="assets/img/book/<?= $pro["name_category"]?>/<?= $pro["photo_book"]?>" data-gall="portfolioGallery" class="venobox" title="<?= $pro["name_book"]?> by <?= $pro["author"]?>"><i class="bx bx-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <?php
                endforeach;
              ?>
            </div>
          </div>
        </div>
      </section>
      <!-- ======= End Promo Section ======= -->

      <!-- ======= New Arrival Section ======= -->
      <section id="arrival" class="arrival">
        <div class="container">
          <div class="section-title" data-aos="fade-up">
            <h2>New Arrival</h2>
          </div>
          <div class="ml-5">
            <div class="row portfolio-container justify-content-center" data-aos="fade-up" data-aos-delay="400">
              <?php
                foreach($arrival as $new):
              ?>
              <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-wrap">
                  <img src="assets/img/book/<?= $new["name_category"]?>/<?= $new["photo_book"]?>" class="img-fluid" alt="" />
                  <div class="portfolio-info">
                    <h4><?= $new["name_book"]?></h4>
                    <p>Rp <?= $new["book_price"]?></p>
                    <div class="portfolio-links">
                      <a href="assets/img/book/<?= $new["name_category"]?>/<?= $new["photo_book"]?>" data-gall="portfolioGallery" class="venobox" title="<?= $new["name_book"]?> by <?= $new["author"]?>"><i class="bx bx-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <?php
                endforeach;
              ?>

            </div>
          </div>
        </div>
      </section>
      <!-- End More New Arrival Section -->

      <!-- ======= Team Section ======= -->
      <section id="team" class="team section-bg">
        <div class="container">
          <div class="section-title" data-aos="fade-up">
            <h2>Team</h2>
            <p>Together Everyone Achieves More</p>
          </div>

          <div class="row justify-content-center">
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="assets/img/team/andrea.png" class="img-fluid" alt="" />
                  <div class="social">
                    <a href="https://www.instagram.com/andrearahmaa/" target="_blank"><i class="icofont-instagram"></i></a>
                    <a href="mailto:andrearahmania8@upi.edu" target="_blank"><i class="icofont-ui-text-chat"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Andrea Rahmania</h4>
                  <span>Founder</span>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="200">
                <div class="member-img">
                  <img src="assets/img/team/alya.png" class="img-fluid" alt="" />
                  <div class="social">
                    <a href="https://www.instagram.com/artha_0607/" target="_blank"><i class="icofont-instagram"></i></a>
                    <a href="mailto:arthamevia_0607@upi.edu" target="_blank"><i class="icofont-ui-text-chat"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Alya Arthamevia</h4>
                  <span>Founder</span>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="300">
                <div class="member-img">
                  <img src="assets/img/team/hasna.png" class="img-fluid" alt="" />
                  <div class="social">
                    <a href="https://www.instagram.com/hasnasyifas/" target="_blank"><i class="icofont-instagram"></i></a>
                    <a href="mailto:hasnasyifashbrh@upi.edu" target="_blank"><i class="icofont-ui-text-chat"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Hasna Syifa Shabirah</h4>
                  <span>Founder</span>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="400">
                <div class="member-img">
                  <img src="assets/img/team/sarah.png" class="img-fluid" alt="" />
                  <div class="social">
                    <a href="https://www.instagram.com/ssarahng_/" target="_blank"><i class="icofont-instagram"></i></a>
                    <a href="mailto:sarahgustin02@upi.edu" target="_blank"><i class="icofont-ui-text-chat"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>S. Sarah Nuraisya Gustin</h4>
                  <span>Founder</span>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="400">
                <div class="member-img">
                  <img src="assets/img/team/vina.png" class="img-fluid" alt="" />
                  <div class="social">
                    <a href="https://www.instagram.com/vinaputripurnamar/" target="_blank"><i class="icofont-instagram"></i></a>
                    <a href="mailto:vinaputripr@upi.edu" target="_blank"><i class="icofont-ui-text-chat"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Vinaputri Purnama</h4>
                  <span>Founder</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Team Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container">
          <div class="section-title" data-aos="fade-up">
            <h2>Contact Us</h2>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="contact-about">
                <h3>Bibliotecă</h3>
                <p>Bibliotecă is a online shop platform which design for selling some fiction books that related to some categories.</p>
                <div class="social-links">
                  <a href="https://twitter.com/upi_official" class="twitter"><i class="icofont-twitter"></i></a>
                  <a href="https://www.facebook.com/upiofficial" class="facebook"><i class="icofont-facebook"></i></a>
                  <a href="https://www.instagram.com/upiofficial/" class="instagram"><i class="icofont-instagram"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
              <div class="info">
                <div>
                  <i class="ri-map-pin-line"></i>
                  <p>
                    Jl. Dr. Setiabudhi No. 229<br />Bandung 40154 <br />
                    Jawa Barat, Indonesia
                  </p>
                </div>

                <div>
                  <i class="ri-mail-send-line"></i>
                  <p>sekuniv_upi@upi.edu</p>
                </div>

                <div>
                  <i class="ri-phone-line"></i>
                  <p>022-2013163</p>
                </div>
              </div>
            </div>

            <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
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
