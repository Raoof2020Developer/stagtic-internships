<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - STAGTIC</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/img/logo_stage.png" rel="icon">
  <link href="/img/logo_stage.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{route('redirectToWelcome')}}" class="logo d-flex align-items-center">
        <img src="/img/logo_stage.png" alt="">
        <span class="d-none d-lg-block">STAGTIC</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->



        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{$userName}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Internship Supervisor</h6>

            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route('SupervisorProfile')}}">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route('SupervisorProfile')}}">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('SupervisorDashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->





      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Manage Request</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('SupervisorRequestList')}}">
              <i class="bi bi-circle"></i><span>Requests List</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#absences-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-circle"></i><span>Manage Absences</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="absences-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('ManageAbsences')}}">
              <i class="bi bi-circle"></i><span>Requests Absences</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#report-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-file-check"></i><span>Manage Report</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="report-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('ReportListSupervisor')}}">
              <i class="bi bi-circle"></i><span>Reports List</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->



      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Notation</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('ManageTrainees')}}">
              <i class="bi bi-circle"></i><span>Trainee List</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#attestat-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-file-pdf"></i><span>Attestation</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="attestat-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>New Attestation</span>
            </a>
          </li>
        </ul>
      </li>



      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('SupervisorProfile')}}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->



      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('SupervisorContact')}}">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('logout')}}">
          <i class="bi bi-box-arrow-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Request Details</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('SupervisorDashboard')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{route('SupervisorRequestList')}}">Requests List</a> </li>
          <li class="breadcrumb-item active"><a href="{{route('RequestDetailsSupervisor')}}">Request Details</a> </li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Personal Informations</h5>
              <form class="row g-3">
                <div class="row mb-3">
                  <label for="inputName5" class="form-label">First Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="first_name_student">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputName5" class="form-label">Last Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="last_name_student">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="email_student">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="tel" class="form-label">Phone Number</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="phone_student">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="tel" class="form-label">Security Number</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="security_number">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="tel" class="form-label">Card Number</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="card_number">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputDate" class="form-label">Date Of birth</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="date_of_birth">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="tel" class="form-label">Speciality</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="speciality">
                  </div>
                </div>
                <div class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Level</legend>
                  <div class="col-sm-10">

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1" name="level">
                      <label class="form-check-label" for="gridCheck1">
                        L3
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                      <label class="form-check-label" for="gridCheck2">
                        M2
                      </label>
                    </div>

                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="form-label">University Year</label>
                  <div class="col-sm-10">
                    <input type="datetime" class="form-control" name="college_year">
                  </div>
                </div>


              </form>

            </div>

          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Internship Company</h5>


              <form class="row g-3">

                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Name Of Company">
                </div>

                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Adress" name="adresse">
                </div>
                <div class="col-md-6">
                  <input type="email" class="form-control" placeholder="Email" name="email">
                </div>
                <div class="col-12">
                  <input type="tel" class="form-control" placeholder="Phone" name="phone_number">
                </div>
              </form>

            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{$userName}}</h5>


              <form>
                <div class="row mb-3">
                  <label for="inputText" class="form-label">First Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="first_name_internship_supervisor">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="form-label">Last Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="last_name_internship_supervisor">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail" class="form-label">Email</label>

                  <input type="text" class="form-control" name="email_internship_supervisor">

                </div>
                <div class="row mb-3">
                  <label for="tel" class="form-label">Phone Number</label>

                  <input type="text" class="form-control" name="phone_Internship_Supervisor">

                </div>

              </form>

            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Internship Informations</h5>


              <form class="row g-3">
                <div class="row mb-3">
                  <label for="Number" class="form-label">Period</label>

                  <input type="text" class="form-control" name="period">

                </div>

                <div class="row mb-3">
                  <label for="inputDate" class="form-label">Start Date</label>

                  <input type="date" class="form-control" name="start_date">

                </div>
                <div class="row mb-3">
                  <label for="inputDate" class="form-label">End Date</label>

                  <input type="date" class="form-control" name="end_date">

                </div>
                <div class="row mb-3">
                  <label for="inputText" class="form-label">Internship Theme</label>

                  <textarea class="form-control" style="height: 100px"></textarea>

                  <div class="row mb-3">
                    <label for="inputText" class="form-label">Workplan</label>

                    <textarea class="form-control" style="height: 100px"></textarea>

                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary" style="background-color: #198754;">Accept</button>
                    <button type="reset" class="btn btn-secondary" style="background-color: #dc3545;">Refuse</button>
                    <button type="reset" class="btn btn-secondary" style="background-color: #fd7e14;">Ask For
                      changes</button>
                  </div>

              </form>




            </div>

          </div>
        </div>

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>STAGTIC</span></strong>. All Rights Reserved
    </div>
    <div class="credits">

      Designed by <strong><span>Benarab Rania Baifouh Houda</span></strong>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/chart.js/chart.umd.js"></script>
  <script src="/vendor/echarts/echarts.min.js"></script>
  <script src="/vendor/quill/quill.min.js"></script>
  <script src="/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/vendor/tinymce/tinymce.min.js"></script>
  <script src="/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="//js/main.js"></script>

</body>

</html>