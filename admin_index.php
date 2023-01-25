<?php
  require 'koneksi.php';
  session_start();

  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['level']==""){
    header("location:admin_index.php?pesan=gagal");
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Admin Page</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Bar Chart -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>

    <!-- Vendor CSS Files -->
    <link href="assets/vendor2/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor2/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor2/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor2/quill/quill.snow.css" rel="stylesheet" />
    <link href="assets/vendor2/quill/quill.bubble.css" rel="stylesheet" />
    <link href="assets/vendor2/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor2/simple-datatables/style.css" rel="stylesheet" />
 
    <!-- Template Main CSS File -->
    <link href="assets/css/admin.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
        <a href="admin_index.php" class="logo d-flex align-items-center">
          <span class="d-none d-lg-block">Bibliotecă</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div>
      <!-- End Logo -->

      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
          <li class="nav-item dropdown pe-3">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-person-circle"></i>
              <span class="d-none d-md-block dropdown-toggle ps-2">My Profile</span> </a
            ><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                <h6><?php echo $_SESSION['name_user']; ?></h6>
                <span>Admin</span>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="logout.php">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                </a>
              </li>
            </ul>
            <!-- End Profile Dropdown Items -->
          </li>
          <!-- End Profile Nav -->
        </ul>
      </nav>
      <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
      <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
          <a class="nav-link" href="admin_index.php">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#cashier-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-person-lines-fill"></i><span>Cashier Data</span><i class="bi bi-chevron-down ms-auto"></i> </a>
          <ul id="cashier-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
              <a href="admin_viewcashier.php"> <i class="bi bi-pencil-square"></i><span>View Data</span> </a>
            </li>
            <li>
              <a href="admin_addcashier.php"> <i class="bi bi-person-workspace"></i></i></i><span>Add Data</span> </a>
            </li>
          </ul>
        </li>
        <!-- End Data Cashier Nav -->

        <li class="nav-heading">Edit Books Category</li>

        <li class="nav-item">
          <a class="nav-link" href="admin_addbook.php">
            <i class="bi bi-journal-plus"></i>
            <span>Add Book</span>
          </a>
          <a class="nav-link" href="admin_kategori1.php">
            <i class="bi bi-tv"></i>
            <span>Action And Adventure</span>
          </a>
        </li>
        <!-- End Action And Adventure Category Nav -->

        <li class="nav-item">
          <a class="nav-link" href="admin_kategori2.php">
            <i class="bi bi-emoji-laughing">
            </i><span>Comedy</span>
          </a>
        </li>
        <!-- End Comedy Nav -->

        <li class="nav-item">
          <a class="nav-link" href="admin_kategori3.php">
            <i class="bi bi-moon-stars"></i>
            <span>Fantasy</span>
          </a>
        </li>
        <!-- End Fantasy Nav -->

        <li class="nav-item">
          <a class="nav-link" href="admin_kategori4.php">
            <i class="bi bi-hourglass-split"></i>
            <span>Historical</span>
          </a>
        </li>
        <!-- End Historical Nav -->

        <li class="nav-item">
          <a class="nav-link" href="admin_kategori5.php">
            <i class="bi bi-emoji-frown"></i>
            <span>Horror</span>
          </a>
        </li>
        <!-- End Horror Nav -->

        <li class="nav-item">
          <a class="nav-link" href="admin_kategori6.php">
            <i class="bi bi-emoji-heart-eyes"></i>
            <span>Romance</span>
          </a>
        </li>
        <!-- End Romance Nav -->

        <li class="nav-item">
          <a class="nav-link" href="admin_kategori7.php">
            <i class="bi bi-stars"></i>
            <span>Spiritual</span>
          </a>
        </li>
        <!-- End Spiritual Nav -->

        <li class="nav-item">
          <a class="nav-link" href="admin_kategori8.php">
            <i class="bi bi-heart"></i>
            <span>Young Adult</span>
          </a>
        </li>
        <!-- End Young Adult Nav -->

      </ul>
    </aside>
    <!-- End Sidebar-->

    <main id="main" class="main">
      <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin_index.php">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->

      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-8">
            <div class="row">

              <!-- Reports Today -->
              <div class="col-12">
                <div class="card">
                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>

                      <li><a class="dropdown-item" href="admin_index.php">Today</a></li>
                      <li><a class="dropdown-item" href="stock_thismonth.php">This Month</a></li>
                      <li><a class="dropdown-item" href="stock_thisyear.php">This Year</a></li>
                    </ul>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">Reports <span>| Today</span></h5>

                    <!-- Line Chart -->
                    <div class="container">
                    <canvas id="myChart" width="140" height="75"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Action and Adventure", "Comedy", "Fantasy", "Historical", "Horror", "Romance", "Spiritual", "Young Adult"],
                    datasets: [{
                            label: 'Book Stock',
                            data: [15, 19, 17, 21, 13, 10, 22, 8],
                            backgroundColor: [
                                '#167D7F',
                                '#167D7F',
                                '#167D7F',
                                '#167D7F',
                                '#167D7F',
                                '#167D7F',
                                '#167D7F',
                                '#167D7F'
                            ],
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
                    <!-- End Line Chart -->
                  </div>
                </div>
              </div>
              <!-- End Reports -->

              <!-- Recent Sales -->
              <div class="col-12">
                <div class="card recent-sales">
                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>

                      <li><a class="dropdown-item" href="#">Today</a></li>
                      <li><a class="dropdown-item" href="#">This Month</a></li>
                      <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                    <table class="table table-borderless datatable">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Buyer</th>
                          <th scope="col">Title Book</th>
                          <th scope="col">Price</th>
                          <th scope="col">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row"><a href="#">#2457</a></th>
                          <td>Jeano Lira</td>
                          <td><a href="#" class="text-primary">The Son of Neptune </a></td>
                          <td>Rp92.000</td>
                          <td><span class="badge bg-success">Approved</span></td>
                        </tr>
                        <tr>
                          <th scope="row"><a href="#">#2147</a></th>
                          <td>Jiandra Aresna</td>
                          <td><a href="#" class="text-primary">Comedy of Juno: Ketika Hidupmu Buntu, Tertawalah</a></td>
                          <td>Rp59.000</td>
                          <td><span class="badge bg-warning">Pending</span></td>
                        </tr>
                        <tr>
                          <th scope="row"><a href="#">#2049</a></th>
                          <td>Riyuna Jilla</td>
                          <td><a href="#" class="text-primary">The Hobbit</a></td>
                          <td>Rp60.000</td>
                          <td><span class="badge bg-success">Approved</span></td>
                        </tr>
                        <tr>
                          <th scope="row"><a href="#">#2644</a></th>
                          <td>Agustian Suryana</td>
                          <td><a href="#" class="text-primar">Langkah Kaki</a></td>
                          <td>Rp90.000</td>
                          <td><span class="badge bg-danger">Rejected</span></td>
                        </tr>
                        <tr>
                          <th scope="row"><a href="#">#2644</a></th>
                          <td>Yessana Jamani</td>
                          <td><a href="#" class="text-primary">So I Married The Anti-fan</a></td>
                          <td>Rp103.000</td>
                          <td><span class="badge bg-success">Approved</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- End Recent Sales -->
            </div>
          </div>
          <!-- End Left side columns -->

          <!-- Right side columns -->
          <div class="col-lg-4">

            <!-- Website Traffic -->
            <div class="card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body pb-0">
                <h5 class="card-title">Website Traffic <span>| Today</span></h5>

                <div id="trafficChart" style="min-height: 290px" class="echart"></div>

                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    echarts.init(document.querySelector("#trafficChart")).setOption({
                      tooltip: {
                        trigger: "item",
                      },
                      legend: {
                        top: "5%",
                        left: "center",
                      },
                      series: [
                        {
                          name: "Access From",
                          type: "pie",
                          radius: ["30%", "60%"],
                          avoidLabelOverlap: false,
                          label: {
                            show: false,
                            position: "center",
                          },
                          emphasis: {
                            label: {
                              show: true,
                              fontSize: "18",
                              fontWeight: "bold",
                            },
                          },
                          labelLine: {
                            show: false,
                          },
                          data: [
                            {
                              value: 1048,
                              name: "Search Engine",
                            },
                            {
                              value: 735,
                              name: "Direct",
                            },
                            {
                              value: 580,
                              name: "Email",
                            },
                            {
                              value: 484,
                              name: "Ads",
                            },
                          ],
                        },
                      ],
                    });
                  });
                </script>
              </div>
            </div>
            <!-- End Website Traffic -->

            <!-- Top Selling -->
            <div class="card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body pb-0">
                <h5 class="card-title">Top Selling <span>| Today</span></h5>
                    <table class="table table-borderless">
                      <thead>
                        <tr>
                          <th scope="col">Title Book</th>
                          <th scope="col">Price</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="#" class="text-primary fw-bold">Under The Whispering Door</a></td>
                          <td>Rp201.056</td>
                        </tr>
                        <tr>
                          <td><a href="#" class="text-primary fw-bold">Aroma Karsa</a></td>
                          <td>Rp101.000</td>
                        </tr>
                        <tr>
                          <td><a href="#" class="text-primary fw-bold">Fatimah Az-Zahra</a></td>
                          <td>Rp85.000</td>
                        </tr>
                        <tr>
                          <td><a href="#" class="text-primary fw-bold">Hujan</a></td>
                          <td>Rp78.000</td>
                        </tr>
                        <tr>
                          <td><a href="#" class="text-primary fw-bold">Dari Priyayi sampai Nyi Blorong</a></td>
                          <td>Rp99.000</td>
                        </tr>
                        <tr>
                          <td><a href="#" class="text-primary fw-bold">5 cm</a></td>
                          <td>Rp90.000</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- End Top Selling -->
          <!-- End Right side columns -->
        </div>
      </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="copyright">
        &copy; Copyright <strong><span>Bibliotecă</span></strong
        >. All Rights Reserved
      </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor2/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor2/chart.js/chart.min.js"></script>
    <script src="assets/vendor2/echarts/echarts.min.js"></script>
    <script src="assets/vendor2/quill/quill.min.js"></script>
    <script src="assets/vendor2/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor2/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor2/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/admin.js"></script>
  </body>
</html>
