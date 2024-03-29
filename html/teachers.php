<?php
session_start();

// if (isset($_SESSION['role']) && $_SESSION['role'] == "Admin") {

    include "connection/connection_db.php";
    include "data/subject.php";
    include "data/classes.php";
    include "data/teacher.php";

    $objSubject = getAllSubjects($conn);
    $objClasses = getAllClasses($conn);
    $objTeacher = getAllTeacher($conn);

    
    $getTeacherByUFL = getTeacherByUFL($_SESSION['username'], 
                      $_SESSION['fname'], $_SESSION['lname'], $conn);

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

    <title>Vertical Layouts - Forms | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.php" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                  width="25"
                  viewBox="0 0 25 42"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <defs>
                    <path
                      d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                      id="path-1"
                    ></path>
                    <path
                      d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                      id="path-3"
                    ></path>
                    <path
                      d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                      id="path-4"
                    ></path>
                    <path
                      d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                      id="path-5"
                    ></path>
                  </defs>
                  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                      <g id="Icon" transform="translate(27.000000, 15.000000)">
                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                          <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                          </mask>
                          <use fill="#696cff" xlink:href="#path-1"></use>
                          <g id="Path-3" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-3"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                          </g>
                          <g id="Path-4" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-4"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                          </g>
                        </g>
                        <g
                          id="Triangle"
                          transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                        >
                          <use fill="#696cff" xlink:href="#path-5"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">emp</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="students.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div data-i18n="Boxicons">Student</div>
              </a>
            </li>

            <li class="menu-item active">
              <a href="teachers.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-briefcase-alt-2"></i>
                <div data-i18n="Boxicons">Teacher</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="classes.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-buildings"></i>
                <div data-i18n="Boxicons">Class</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="subjects.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-captions"></i>
                <div data-i18n="Boxicons">Subject</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="section.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-captions"></i>
                <div data-i18n="Boxicons">Section</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="grades.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-food-menu"></i>
                <div data-i18n="Boxicons">Grade</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">Authentications</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="auth-login-basic.php" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Login</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="auth-register-basic.php" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Register</div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        
          <!-- Admin container -->
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
                        <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                      </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                        <a class="dropdown-item" href="#">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar avatar-online">
                                <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <span class="fw-semibold d-block">John Doe</span>
                              <small class="text-muted">Admin</small>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>
                      </li>
                      <li>
                        <a class="dropdown-item" href="accounts.php">
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
                        <a class="dropdown-item" href="#">
                          <span class="d-flex align-items-center align-middle">
                            <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                            <span class="flex-grow-1 align-middle">Billing</span>
                            <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                          </span>
                        </a>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>
                      </li>
                      <li>
                        <a class="dropdown-item" href="auth-login-basic.php">
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
            <?php 
              if (isset($_SESSION['role']) && $_SESSION['role'] == "Admin") {
            ?>
              <!-- Content Admin -->
              <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Enter Teachers Information</h4>

                  <!-- Basic Layout -->
                  
                  <div class="row">
                    <div class="col-xl">
                      <div class="card mb-4">
                        <h5 class="card-header">Light Table head</h5>
                        <div class="table-responsive text-nowrap">
                          <table class="table">
                            <thead class="table-light">
                              <tr>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Users name</th>
                                <th>Subject</th>
                                <th>Class</th>
                                <th>Users</th>
                                <th>Status</th>
                                <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            <?php
                              if($objTeacher!= NULL){
                                foreach ($objTeacher as $teacher) {
                              
                              ?>  
                              <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= strtoupper($teacher['fname']) ?></strong></td>
                                <td><strong><?= strtoupper($teacher['lname']) ?></td>
                                <td><strong><?= strtoupper($teacher['username']) ?></td>
                                <td><strong><?= strtoupper($teacher['subjects']) ?></td>
                                <td><strong><?= strtoupper($teacher['class']) ?></td>
                                <td>
                                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Lilian Fuller"
                                    >
                                      <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                    
                                  </ul> 
                                </td>
                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                <td>
                                <div class="dropdown">
                                    <div class="buy-now">
                                    <button
                                      type="button"
                                      class="btn btn-info"
                                      data-bs-toggle="modal"
                                      data-bs-target="#modalCenter"
                                      data-username = "<?=$teacher['username']?>"
                                      data-fname = "<?=$teacher['fname']?>"
                                      data-lname = "<?=$teacher['lname'] ?>"
                                      data-class = "<?=$teacher['class'] ?>"
                                      data-subjects = "<?=$teacher['subjects'] ?>"
                                      data-address = "<?=$teacher['address']?>"
                                      data-gender = "<?=$teacher['gender']?>"
                                      data-phone_number = "<?=$teacher['phone_number']?>"
                                      data-date_of_birth = "<?=$teacher['date_of_birth']?>"
                                      data-emailaddress = "<?=$teacher['email_address']?>"
                                      data-id = "<?=$teacher['teachers_id']?>"
                                      onclick="fn_update(this)"
                                      >Edit
                                    </button>
                                    <a href="req/teacher-delete.php?teachers_id=<?= $teacher['teachers_id'] ?>&username=<?= $teacher['username'] ?>&password=<?= $teacher['password'] ?>">
                                      <button 
                                      type="button"
                                      class="btn btn-danger"
                                      data-bs-toggle="modal"
                                      data-bs-target="#modalCenter"
                                      >Delete
                                    </button>
                                    </a>
                                  </div>
                                </div>
                                </td>
                              </tr>
                            </tbody>
                            <?php
                              }
                                }
                              ?>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- / Content -->

                <div class="content-backdrop fade"></div>
              </div>

            <?php
              } else if(isset($_SESSION['role']) && $_SESSION['role'] == "student") {
            ?>
             <!-- Content student -->
             <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Teachers Information</h4>

                  <!-- Basic Layout -->
                  
                  <div class="row">
                    <div class="col-xl">
                      <div class="card mb-4">
                        <h5 class="card-header">Light Table </h5>
                        <div class="table-responsive text-nowrap">
                          <table class="table">
                            <thead class="table-light">
                              <tr>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Users name</th>
                                <th>Subject</th>
                                <th>Class</th>
                                <th>Users</th>
                                <th>View teacher in class</th>
                                <!-- <th>Actions</th> -->
                              </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            <?php
                              if($objTeacher!= NULL){
                                foreach ($objTeacher as $teacher) {
                              
                              ?>  
                              <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= strtoupper($teacher['fname']) ?></strong></td>
                                <td><strong><?= strtoupper($teacher['lname']) ?></td>
                                <td><strong><?= strtoupper($teacher['username']) ?></td>
                                <td><strong><?= strtoupper($teacher['subjects']) ?></td>
                                <td><strong><?= strtoupper($teacher['class']) ?></td>
                                <td>
                                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Lilian Fuller"
                                    >
                                      <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                    
                                  </ul>
                                </td>
                                <td>
                                  <a href="teacher-view.php?class=<?= $teacher['class'] ?>&teachers_id=<?= $teacher['teachers_id'] ?>">
                                  <button 
                                    type="button"
                                    class="btn btn-primary"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalCenter"
                                    >View
                                  </button>
                                </td>
                                
                              </tr>
                            </tbody>
                            <?php
                              }
                                }
                              ?>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- / Content -->

                <div class="content-backdrop fade"></div>
            </div>
            <?php
              } else if (isset($_SESSION['role']) && $_SESSION['role'] == "teachers") {
            ?>

                <!-- <p>Menu Not Allow</p> -->

            <?php
              } else {
                header("Location: ../html/auth-login-basic.php");
                exit;
              }
            ?>
        </div>

        

        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
    <?php 
      if (isset($_SESSION['role']) && $_SESSION['role'] == "Admin") {
    ?>
    
      <div class="buy-now">
          <button
            type="button"
            class="btn btn-danger btn-buy-now"
            data-bs-toggle="modal"
            data-bs-target="#modalCenter"
            onclick="update()"
            >Adding Teachers</button>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalCenterTitle">Add New Teacher</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="card">
            <div class="card-body">
            <form id="formAuthentication" class="mb-3" action="req/teacher.php" method="POST">
              <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstname"
                  name="firstname"
                  placeholder="Enter your First Name"
                  autofocus
                />
              </div>

              <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastname"
                  name="lastname"
                  placeholder="Enter your Last Name"
                  autofocus
                />
              </div>

              <div class="mb-3">
                      <label class="form-label">Username</label>
                      <input type="text" 
                      id="username"
                      class="form-control"
                      value=""
                      name="username">
              </div>

              <div class="mb-3 form-password-toggle">
                <label class="form-label" for="password">Password</label>
                <div class="input-group input-group-merge">
                  <input
                    type="password"
                    id="password"
                    class="form-control"
                    name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password"
                  />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>

              <div class="mb-3">
                <label for="username" class="form-label">Address</label>
                <input
                  type="text"
                  class="form-control"
                  id="address"
                  name="address"
                  placeholder="Enter your address"
                  autofocus
                />
              </div>

              <div class="mb-3">
                <label for="html5-tel-input" class="col-md-2 col-form-label">Phone</label>
                <input 
                  type="tel"
                  class="form-control" 
                  id="phone_number"
                  name="phone_number"
                  placeholder="+855-96-188-556"
                />
              </div>

              <div class="mb-3">
                <label for="username" class="form-label">Emial Address</label>
                <input
                  type="text"
                  class="form-control"
                  id="emailaddress"
                  name="emailaddress"
                  placeholder="Enter your email address"
                  autofocus
                />
              </div>

              <div class="mb-3">
                <div class="form-check mt-3">
                  <input
                    name="gender"
                    class="form-check-input"
                    type="radio"
                    value="male"
                    id="gender1"
                    checked
                  />
                  <label class="form-check-label" for="defaultRadio1"> Male </label>
                </div>
                <div class="form-check">
                  <input
                    name="gender"
                    class="form-check-input"
                    type="radio"
                    value="female"
                    id="gender"
                  />
                  <label class="form-check-label" for="defaultRadio2"> Female </label>
                </div>
                </div>

              <div class="mb-3">
                    <label class="form-label">Date of birth</label>
                    <input 
                    type="date" 
                    class="form-control"
                    name="date_of_birth">
              </div>

              
              <div class="mb-3">
                <label class="form-label">Subject</label>
                <div class="row row-cols-4">
                  <?php foreach ($objSubject as $subject): ?>
                  <div class="col">
                    <input type="checkbox"
                          name="subjects[]"
                          value="<?=$subject['subject_name']?>">
                          <?=$subject['subject_name']?>
                  </div>
                  <?php endforeach ?>
                  
                </div>
              </div>
              
              <div class="mb-3">
                <label class="form-label">Class</label>
                <div class="row row-cols-5">
                  <?php foreach ($objClasses as $class): ?>
                    <div class="col">
                    <input type="checkbox"
                          name="class[]"
                          value="<?=$class['grade']?>(<?=$class['section']?>)">
                          <?=$class['grade']?>(<?=$class['section']?>)
                    </div>
                  <?php endforeach ?>
                
                </div>
              </div>

              <div class="row g-2" id="updateteachers" style="display: none;">
                  <div class="col mb-0">
                    <label for="emailWithTitle" class="form-label">ID</label>
                    <input
                      type="text"
                      id="teachers_id"
                      class="form-control"
                      placeholder="Grade"
                      name="teachers_id"
                    />
                  </div>
                </div>

              <button type="submit" class="btn btn-primary d-grid w-100">Add Teacher</button>
            </form>
          </div>
        </div>
      </div>

    <?php
      }
    ?>

    

    
        <!-- Core JS -->
    
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../html/js/teacher.js"></script>
    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
<?php

// } else {
//   header("Location: ../html/req/auth-login-basic.php");
//   exit;
// }

?>