<?php
  require 'koneksi.php';
  session_start();

  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['level']==""){
    header("location:admin_index.php?pesan=gagal");
  }

  $fantasy = query("SELECT * FROM book WHERE id_category=3");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Fantasy Page</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

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

    <!-- Page Title -->
    <main id="main" class="main">
      <div class="pagetitle">
        <h1>Fantasy</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin_index.php">Home</a></li>
            <li class="breadcrumb-item active">Category</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->

 <!-- Recent Sales -->
 <div class="col-12">
    <div class="card recent-sales">
      <div class="card-body">
        <h5 class="card-title">Edit Books <span>| Fantasy</span></h5>

        <table class="table table-borderless datatable">
          <thead>
            <tr>
              <th scope="col">Image</th>
              <th scope="col">Tittle Book</th>
              <th scope="col">Author</th>
              <th scope="col">Price</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($fantasy as $fan):
            ?>
            <tr>
              <td><img src="assets/img/book/Fantasy/<?= $fan["photo_book"]?>" widht="100px" height="100px"></td>
              <td><?= $fan["name_book"]?></td>
              <td><?= $fan["author"]?></td>
              <td>Rp <?= $fan["book_price"]?></td>
              <td><a href="admin_updatebook.php?id=<?= $act["id_book"]?>"><i class="bi bi-pencil-square"></i></a> |
                <a href="admin_delete.php?id3=<?= $fan["id_book"]?>" onclick="return confirm('Are you sure about this?');"><i class="bi bi-trash-fill"></i></a>
              </td>
            </tr>
            <?php
                endforeach;
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- End Recent Sales -->

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
