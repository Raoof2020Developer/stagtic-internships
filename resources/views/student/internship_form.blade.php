<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>New Request - STAGTIC </title>
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
              <h6>Student</h6>

            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route('StudentProfile')}}">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route('StudentProfile')}}">
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
        <a class="nav-link collapsed" href="{{route('StudentDashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->



      <li class="nav-item">
        <a class="nav-link " data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Manage Request</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('EditStudent')}}" class="active">
              <i class="bi bi-circle"></i><span>New Request</span>
            </a>
          </li>
          
          <li>
            <a href="{{route('StudentRequestList')}}">
              <i class="bi bi-circle"></i><span>Requests List </span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>My Internship</span><i
            class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('UploadReport')}}">
              <i class="bi bi-circle"></i><span>Upload Report</span>
            </a>
          </li>

        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Notation</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <a href="{{route('NoteStudent')}}">
            <i class="bi bi-circle"></i><span>Internship Mark</span>
          </a>
        </ul>
      </li><!-- End Charts Nav -->



      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('StudentProfile')}}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->



      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('StudentContact')}}">
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
      <h1>New Request</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('StudentDashboard')}}">Home</a></li>
          <li class="breadcrumb-item active"> <a href="{{route('CreateRequest')}}"> New Request</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      @if (session('errors'))
              <div class="alert alert-danger" role="alert">
                {{ session('errors')->first() }}
              </div>
              @endif
              @if (session('success'))
              <div class="alert alert-success text-center" role="alert">
                {{ session('success') }}
              </div>
              @endif
              <form action="{{ route('CreateRequest')}}" method="POST">
                @csrf
              <div class="row">
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Your Personal Informations</h5>
                      @if (session('errors'))
                      <div class="alert alert-danger" role="alert">
                        {{ session('errors')->first() }}
                      </div>
                      @endif
                      @if (session('success'))
                      <div class="alert alert-success text-center" role="alert">
                        {{ session('success') }}
                      </div>
                      @endif
                        <div class="row mb-3">
                          <label for="inputName5" class="form-label">First Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="first_name_student" value="{{ $student->first_name_student ?? '' }}">
                            @if ($errors->has('first_name_student'))
                                <span class="text-danger">{{ $errors->first('first_name_student') }}</span>
                            @endif
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputName5" class="form-label">Last Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="last_name_student" value="{{ $student->last_name_student ?? '' }}">
                            @if ($errors->has('last_name_student'))
                                <span class="text-danger">{{ $errors->first('last_name_student') }}</span>
                            @endif
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputEmail" class="form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" name="email_student" value="{{ $student->email_student ?? '' }}">
                            @if ($errors->has('email_student'))
                                <span class="text-danger">{{ $errors->first('email_student') }}</span>
                             @endif
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="tel" class="form-label">Phone Number</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="phone_student" value="{{ $student->phone_student ?? '' }}">
                            @if ($errors->has('phone_student'))
                                <span class="text-danger">{{ $errors->first('phone_student') }}</span>
                            @endif
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="tel" class="form-label">Security Number</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="security_number" value="{{ $student->security_number ?? '' }}">
                            @if ($errors->has('security_number'))
                                <span class="text-danger">{{ $errors->first('security_number') }}</span>
                            @endif
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="tel" class="form-label">Card Number</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="card_number" value="{{ $student->card_number ?? '' }}">
                            @if ($errors->has('card_number'))
                                <span class="text-danger">{{ $errors->first('card_number') }}</span>
                                @endif
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputDate" class="form-label">Date Of birth</label>
                          <div class="col-sm-10">
                            <input type="date" class="form-control" name="date_of_birth" value="{{ $student->date_of_birth ?? '' }}">
                            @if ($errors->has('date_of_birth'))
                            <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
                            @endif
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="speciality" class="form-label">Speciality</label>
                          <div class="col-sm-10">
                              <select class="form-select" name="speciality" value="{{ $student->security_number ?? '' }}">
                                  <option value="TI">TI</option>
                                  <option value="SCI">SCI</option>
                                  <option value="GL">GL</option>
                                  <option value="SI">SI</option>
                                  <option value="STIC">STIC</option>
                                  <option value="SITW">SITW</option>
                                  <option value="RSD">RSD</option>
                              </select>
                              @if ($errors->has('speciality'))
                                  <span class="text-danger">{{ $errors->first('speciality') }}</span>
                              @endif
                          </div>
                        </div>
                        <div class="row mb-3">
                          <legend class="col-form-label col-sm-2 pt-0">Level</legend>
                          <div class="col-sm-10">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gridCheck1" name="level[]" value="L3" {{ in_array('L3', old('level', [])) ? 'checked' : '' }}>
                              <label class="form-check-label" for="gridCheck1">
                                L3
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gridCheck2"  name="level[]" value="M2" {{ in_array('M2', old('level', [])) ? 'checked' : '' }}>
                              <label class="form-check-label" for="gridCheck2">
                                M2
                              </label>
                            </div>
                            @if ($errors->has('level'))
                            <span class="text-danger">{{ $errors->first('level') }}</span>
                            @endif
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputDate" class="form-label">Semester</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="semester" value="{{ $student->semester ?? '' }}">
                            @if ($errors->has('semester'))
                            <span class="text-danger">{{ $errors->first('semester') }}</span>
                            @endif
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputYear" class="form-label">University Year</label>
                          <div class="col-sm-10">
                            <input type="datetime" class="form-control" name="college_year" value="{{ $student->college_year ?? '' }}">
                            @if ($errors->has('college_year'))
                            <span class="text-danger">{{ $errors->first('college_year') }}</span>
                            @endif
                          </div>
                        </div>
                  </div>
                </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Internship company</h5>
              @if (session('errors'))
              <div class="alert alert-danger" role="alert">
                {{ session('errors')->first() }}
              </div>
              @endif
              @if (session('success'))
              <div class="alert alert-success text-center" role="alert">
                {{ session('success') }}
              </div>
              @endif
              <p>Choose a company or create one</p>                
              <div class="col-md-12">
                <select id="inputState" class="form-select" name="company">
                    <option selected value="">Choose...</option>
                    @foreach ($companies as $company)
                        <option value="{{ $company->id }}">{{ $company->name_company }}</option>
                    @endforeach
                    <option value="new">New Company</option>
                </select>
            </div>            
                <div class="col-md-12">
                  <label for="inputYear" class="form-label">Company Name</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control"  name="name_company" id="name_input" >
                  @if ($errors->has('name_company'))
                    <span class="text-danger">{{ $errors->first('name_company') }}</span>
                    @endif
                  </div>
                </div>
                <div class="col-12">
                  <label for="inputYear" class="form-label">Company  Address</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control"  name="adresse" id="address_input" >
                  @if ($errors->has('adresse'))
                    <span class="text-danger">{{ $errors->first('adresse') }}</span>
                    @endif
                  </div>
                </div>
                <div class="col-12">
                  <label for="inputYear" class="form-label">Company  Email</label>
                  <div class="col-sm-10">
                  <input type="email" class="form-control"  name="email" id="email_input" >
                  @if ($errors->has('email'))
                  <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
                   </div>
                </div>
                <div class="col-12">
                  <label for="inputYear" class="form-label">Company Phone</label>
                  <div class="col-sm-10">
                  <input type="tel" class="form-control"  name="phone_number" id="phone_input" >
                  @if ($errors->has('phone_number'))
                  <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                  @endif
                    </div>
                </div>                             
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Internship Supervisor</h5>
              @if (session('errors'))
              <div class="alert alert-danger" role="alert">
                {{ session('errors')->first() }}
              </div>
              @endif
              @if (session('success'))
              <div class="alert alert-success text-center" role="alert">
                {{ session('success') }}
              </div>
              @endif                
                <div class="row mb-3">
                  <label for="inputText" class="form-label">First Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="first_name_internship_supervisor">
                    @if ($errors->has('first_name_internship_supervisor'))
                    <span class="text-danger">{{ $errors->first('first_name_internship_supervisor') }}</span>
                    @endif
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="form-label">Last Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="last_name_internship_supervisor">
                    @if ($errors->has('last_name_internship_supervisor'))
                    <span class="text-danger">{{ $errors->first('last_name_internship_supervisor') }}</span>
                    @endif
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="form-label">Email</label>
                  <div class="col-sm-10">
                  <input type="email*" class="form-control" name="email_internship_supervisor">
                  @if ($errors->has('email_internship_supervisor'))
                  <span class="text-danger">{{ $errors->first('email_internship_supervisor') }}</span>
                  @endif
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="tel" class="form-label">Phone Number</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="phone_internship_supervisor">
                  @if ($errors->has('phone_internship_supervisor'))
                  <span class="text-danger">{{ $errors->first('phone_internship_supervisor') }}</span>
                  @endif</div>
                </div>              
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Internship Informations</h5>
              @if (session('errors'))
              <div class="alert alert-danger" role="alert">
                {{ session('errors')->first() }}
              </div>
              @endif
              @if (session('success'))
              <div class="alert alert-success text-center" role="alert">
                {{ session('success') }}
              </div>
              @endif
                 
                <div class="row mb-3">
                  <label for="inputDate" class="form-label">Start Date</label>
                  <input type="date" class="form-control" name="start_date" id="start_date">
                  @if ($errors->has('start_date'))
                  <span class="text-danger">{{ $errors->first('start_date') }}</span>
                  @endif
                </div>
                <div class="row mb-3">
                  <label for="inputDate" class="form-label">End Date</label>
                  <input type="date" class="form-control" name="end_date" id="end_date">
                  @if ($errors->has('end_date'))
                  <span class="text-danger">{{ $errors->first('end_date') }}</span>
                  @endif
                </div>
                <div class="row mb-3">
                  <label for="Number" class="form-label">Period</label>
                  <input type="number" class="form-control" name="period" id="period" readonly>
                  @if ($errors->has('period'))
                  <span class="text-danger">{{ $errors->first('period') }}</span>
                  @endif
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="form-label">Internship Theme</label>
                  <textarea class="form-control" name="internship_theme" style="height: 100px"></textarea>
                  @if ($errors->has('internship_theme'))
                  <span class="text-danger">{{ $errors->first('internship_theme') }}</span>
                  @endif
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="form-label">Workplan</label>
                  <textarea class="form-control" name="workplan" style="height: 100px"></textarea>
                  @if ($errors->has('workplan'))
                  <span class="text-danger">{{ $errors->first('workplan') }}</span>
                  @endif
                </div>
            </div>
          </div>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary" style="background-color: #198754;">Send</button>
          <button type="reset" class="btn btn-secondary" style="background-color: #dc3545;">Cancel</button>
        </div>
      </form>
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
  <script src="/js/main.js"></script>
  <script>
    // Calculate period when start date or end date changes
    const startDateInput = document.getElementById('start_date');
    const endDateInput = document.getElementById('end_date');
    const periodInput = document.getElementById('period');
  
    startDateInput.addEventListener('change', updatePeriod);
    endDateInput.addEventListener('change', updatePeriod);
  
    function updatePeriod() {
      const startDate = new Date(startDateInput.value);
      const endDate = new Date(endDateInput.value);
  
      if (startDate && endDate && startDate < endDate) {
        const diffTime = Math.abs(endDate - startDate);
        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
        periodInput.value = diffDays;
      } else {
        periodInput.value = '';
      }
    }
  </script>
 
  
 <script>
  $(function() {
      $('#inputState').on('change', function() {
          var selectedOption = $(this).find('option:selected');
          if (selectedOption.val() === 'new') {
              $('#name_input').val('');
              $('#address_input').val('');
              $('#email_input').val('');
              $('#phone_input').val('');
          } else {
              var companyId = selectedOption.val();
              $.ajax({
                  url: '/company/' + companyId, // Replace with the URL of your company endpoint
                  type: 'GET',
                  success: function(data) {
                      $('#name_input').val(data.name_company);
                      $('#address_input').val(data.adresse);
                      $('#email_input').val(data.email);
                      $('#phone_input').val(data.phone_number);
                  },
                  error: function() {
                      alert('Error fetching company information.');
                  }
              });
          }
      });
  });
  </script>
  
 <!----<script>
    // enable/disable input fields and populate values based on company selection
    var companySelect = document.getElementById('company_select');
    companySelect.addEventListener('change', function () {
        var selectedOption = companySelect.options[companySelect.selectedIndex];
        if (selectedOption.value === '') {
            // no selection made
            enableInputFields();
            clearInputFields();
        } else if (selectedOption.value === 'new') {
            // new company
            enableInputFields();
            clearInputFields();
        } else {
            // existing company selected
            disableInputFields();
            populateInputFields(selectedOption.dataset);
        }
    });

    // enable input fields
    function enableInputFields() {
        document.getElementById('name_input').disabled = false;
        document.getElementById('address_input').disabled = false;
        document.getElementById('phone_input').disabled = false;
        document.getElementById('email_input').disabled = false;
    }

    // disable input fields
    function disableInputFields() {
        document.getElementById('name_input').disabled = true;
        document.getElementById('address_input').disabled = true;
        document.getElementById('phone_input').disabled = true;
        document.getElementById('email_input').disabled = true;
    }

    // clear input fields
    function clearInputFields() {
        document.getElementById('name_input').value = '';
        document.getElementById('address_input').value = '';
        document.getElementById('phone_input').value = '';
        document.getElementById('email_input').value = '';
    }

    // populate input fields with company data
    function populateInputFields(data) {
        document.getElementById('name_input').value = data.name;
        document.getElementById('address_input').value = data.address;
        document.getElementById('phone_input').value = data.phone;
        document.getElementById('email_input').value = data.email;
    }
</script>----->
</body>

</html>