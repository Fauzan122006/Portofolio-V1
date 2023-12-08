<?php
require "koneksi.php";

$fauzan = query("SELECT * FROM admin");
$sertifikat = query("SELECT * FROM sertifikat");
$projek = query("SELECT * FROM projek");

?>



<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Admin panel fauzan</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="./assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="./assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="./assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="./assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="./assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="./assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="./assets/js/config.js"></script>
  </head>
  <style>
    .logo {
      width: 50px;
      height: 50px;
    }
  </style>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img class="logo" src="../Images/Logo/fauzan-high-resolution-logo-transparent.png" alt="">
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">Admin Panel</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            
            <!-- Tambah data -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Tambah data</span></li>
            <!-- Forms -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Elements">tambah data</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="sertifikatform.php" class="menu-link">
                    <div data-i18n="Basic Inputs">Sertifikat</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="projekform.php" class="menu-link">
                    <div data-i18n="Input groups">Projek</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Forms & Tables -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Tables</span></li>
            <!-- Tables -->
            <li class="menu-item">
              <a href="tables-basic.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Tables</div>
              </a>
            </li>
            <!-- Misc -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
            <li class="menu-item">
              <a
                href="github.com/Fauzan122006/"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Support</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Documentation">Documentation</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                  <a
                    class="github-button"
                    href="https://github.com/themeselection/sneat-html-admin-template-free"
                    data-icon="octicon-star"
                    data-size="large"
                    data-show-count="true"
                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                    >Star</a
                  >
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <?php foreach ($fauzan as $row): ?>
                                                        <img src="./profile/<?= $row["gambar"]; ?>" alt class="w-px-40 h-auto rounded-circle" />
                      <?php endforeach; ?>
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <?php foreach ($fauzan as $row): ?>
                        <li>
                          <a class="dropdown-item" href="#">
                            <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                <div class="avatar avatar-online">
                                  <img src="./profile/<?= $row["gambar"]; ?>" alt class="w-px-40 h-auto rounded-circle" />
                                </div>
                              </div>
                              <div class="flex-grow-1">
                                <span class="fw-semibold d-block"><?= $row["nama"]; ?></span>
                                <small class="text-muted"><?= $row["status"]; ?></small>
                              </div>
                            </div>
                          </a>
                        </li>
                      <?php endforeach; ?>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-8 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <?php foreach ($fauzan as $row): ?>
                            <div class="col-sm-7">
                             <div class="card-body">
                              <h5 class="card-title text-primary"><?= $salam; ?>,
                                         <?= $row["nama"] ?>
                                       </h5>
                                       <p class="mb-4">
                                         Bagaimana kabarnya hari ini?, semoga sehat selalu yaa!
                                       </p>
                          
                                       <a href="https://mohfauzan.xyz" class="btn btn-sm btn-outline-primary">SUBSCRIBE</a>
                                     </div>
                                   </div>
                                   <div class="col-sm-5 text-center text-sm-left">
                                     <div class="card-body pb-0 px-0 px-md-4">
                                       <img src="./assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User"
                                         data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                         data-app-light-img="illustrations/man-with-laptop-light.png" />
                                     </div>
                                   </div>                                                    
                      <?php endforeach; ?>
                    </div>
                  </div>
                </div>
                
                
                <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                  <div class="row">
                   
                    <!-- </div>
    <div class="row"> -->
                    <div class="col-12 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                            <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                              <div class="card-title">
                                <h5 class="text-nowrap mb-2">Profile Report</h5>
                                <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                              </div>
                              <div class="mt-sm-auto">
                                <small class="text-success text-nowrap fw-semibold"
                                  ><i class="bx bx-chevron-up"></i> 68.2%</small
                                >
                                <h3 class="mb-0">$84,686k</h3>
                              </div>
                            </div>
                            <div id="profileReportChart"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- start sertifikat -->
                <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                      <div class="card-title mb-0">
                        <h5 class="m-0 me-2">sertifikat</h5>
                      </div>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="orederStatistics"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                          <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                          <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                          <a class="dropdown-item" href="sertifikatform.php">Tambah data</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                      </div>
                      <ul class="p-0 m-0">
                        <?php foreach ($sertifikat as $sertif): ?>
            <li class="d-flex mb-4 pb-1">
          <div class="avatar flex-shrink-0 me-3">
        <span class="avatar-initial rounded bg-label-primary"
        ><i><img src="../Data/Certificate/<?= $sertif["gambar"]; ?>" alt="<?= $sertif["nama"]; ?>"></i
       ></span>
     </div>
    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
      <div class="me-2">
        <h6 class="mb-0"><?= $sertif["nama"]; ?>
          </h6>
          <small class="text-muted">
            <?= $sertif["deskripsi"]; ?>
          </small>
        </div>
         <div class="user-progress">
            <small class="fw-semibold"><a href="<?= $sertif["link"]; ?>">Link</a></small>
         </div>
       </div>
     </li>
                        <?php endforeach; ?>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ end sertifikat -->

                <!-- Start projek -->
                <div class="col-md-6 col-lg-4 order-1 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                      <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Projek</h5>
                        
                      </div>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="orederStatistics"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                          <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                          <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                          <a class="dropdown-item" href="projekform.php">Tambah data</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                      </div>
                      <ul class="p-0 m-0">
                        <?php foreach ($projek as $projeck_detail): ?>
                              <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                              <span class="avatar-initial rounded bg-label-primary"
                                      ><i><img src="../Data/Project/<?= $projeck_detail["gambar"]; ?>" alt="<?= $projeck_detail["nama"]; ?>"></i
                             ></span>
                                 </div>
                               <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                               <div class="me-2">
                            <h6 class="mb-0"><?= $projeck_detail["nama"]; ?>
                                     </h6>
                                     <small class="text-muted">
                                       <?= $projeck_detail["deskripsi"]; ?>
                                     </small>
                                   </div>
                                   <div class="user-progress">
                                     <small class="fw-semibold"><a href="<?= $projeck_detail["link"]; ?>">Link</a></small>
                                   </div>
                            </div>
                          </li>
                        <?php endforeach; ?>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Expense Overview -->

                <!-- Transactions -->
                <div class="col-md-6 col-lg-4 order-2 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Logs</h5>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="transactionID"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                          <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="./assets/img/icons/unicons/paypal.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">Paypal</small>
                              <h6 class="mb-0">Send money</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">+82.6</h6>
                              <span class="text-muted">USD</span>
                            </div>
                          </div>
                        </li>
                
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Transactions -->
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://mohfauzan.xyz" target="_blank" class="footer-link fw-bolder">Fauzan</a>
                </div>
                
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="./assets/vendor/libs/jquery/jquery.js"></script>
    <script src="./assets/vendor/libs/popper/popper.js"></script>
    <script src="./assets/vendor/js/bootstrap.js"></script>
    <script src="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="./assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="./assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="./assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="./assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>