<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register - STAGTIC </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/logo_stage.png" rel="icon">
  <link href="img/logo_stage.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

  
</head>

<body>

  <main>
    <div class="container"  style="background-image: url('img/entreprise_stage.jpg')">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="{{route('redirectToWelcome')}}" class="logo d-flex align-items-center w-auto">
                  <img src="img/logo_stage.png" alt="">
                  <span class="d-none d-lg-block">STAGTIC</span>
                </a>
              </div><!-- End Logo -->
              
              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>
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

                  <form class="row g-3 needs-validation" novalidate method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="form-group">
                      <select name="userType" required class="form-control mb-3">
                          <option value="">--Select User Roles--</option>
                          <option {{ (old("userType") == 'student' ? "selected":"") }} value="student">Student</option>
                        </select>
                  @if ($errors->has('userType'))
                  <span class="text-danger">{{ $errors->first('userType') }}</span>
                  @endif

                  </div>
                  <div class="col-12">
                    <label for="yourName" class="form-label">First Name</label>
                    <input type="text" required name="first_name" class="form-control" id="yourfirst_name" value="{{old('first_name')}}">
                    @if ($errors->has('first_name'))
                      <span class="text-danger">{{ $errors->first('first_name') }}</span>
                      @endif
                    <div class="invalid-feedback">Please enter a valid Name!</div>
                  </div>
                  <div class="col-12">
                    <label for="yourEmail" class="form-label">Last Name</label>
                    <input type="text" required name="last_name" class="form-control" id="yourlast_name" value="{{old('last_name')}}">
                    @if ($errors->has('last_name'))
                      <span class="text-danger">{{ $errors->first('last_name') }}</span>
                      @endif
                    <div class="invalid-feedback">Please enter a valid Name!</div>
                  </div>
                  <div class="col-12">
                    <label for="yourEmail" class="form-label">Department Name</label>
                    <input type="text" required name="name_department" class="form-control" id="yourname_department" value="{{old('name_department')}}">
                    @if ($errors->has('name_department'))
                      <span class="text-danger">{{ $errors->first('name_department') }}</span>
                      @endif
                    <div class="invalid-feedback">Please enter a valid Department Name!</div>
                  </div>
                  <div class="col-12">
                    <label for="Security Number" class="form-label">Security Number</label>
                    <input type="text" required name="security_number" class="form-control" id="yoursecurity_number" value="{{old('security_number')}}">
                    @if ($errors->has('security_number'))
                      <span class="text-danger">{{ $errors->first('security_number') }}</span>
                      @endif
                    <div class="invalid-feedback">Please enter a valid Security Number!</div>
                  </div>
                  <div class="col-12">
                    <label for="yourCardNumber" class="form-label">Card Number</label>
                    <input type="text" required name="card_number" class="form-control" id="yourcard_number" value="{{old('card_number')}}">
                    @if ($errors->has('card_number'))
                      <span class="text-danger">{{ $errors->first('card_number') }}</span>
                      @endif
                    <div class="invalid-feedback">Please enter a valid Card Name!</div>
                  </div>
                  <div class="col-12">
                    <label for="yourphone_student" class="form-label">Phone Number</label>
                    <input type="tel" required name="phone_student" class="form-control" id="yourphone_student" value="{{old('phone_student')}}">
                    @if ($errors->has('phone_student'))
                      <span class="text-danger">{{ $errors->first('phone_student') }}</span>
                      @endif
                    <div class="invalid-feedback">Please enter a valid Phone Number</div>
                  </div>
                  <div class="col-12">
                    <label for="yourName" class="form-label">Date Of Birth</label>
                    <input type="date" required name="date_of_birth" class="form-control" id="yourdate_of_birth" value="{{old('date_of_birth')}}">
                    @if ($errors->has('date_of_birth'))
                      <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
                      @endif
                    <div class="invalid-feedback">Please enter a valid Date!</div>
                  </div>
                  <div class="col-12">
                    <label for="speciality" class="form-label">Speciality</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="speciality">
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
                  <div class="col-12">
                    <label for="yourName" class="form-label">Level</label>
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
                    <div class="invalid-feedback">Please enter a valid Level!</div>
                  </div>
                  <div class="col-12">
                    <label for="yourName" class="form-label">Semester</label>
                    <input type="text" required name="semester" class="form-control" id="yoursemester" value="{{old('semester')}}">
                    @if ($errors->has('semester'))
                      <span class="text-danger">{{ $errors->first('semester') }}</span>
                      @endif
                    <div class="invalid-feedback">Please enter a valid Semester!</div>
                  </div>
                  <div class="col-12">
                    <label for="yourName" class="form-label">University Year</label>
                    <input type="datetime" required name="college_year" class="form-control" id="yourcollege_year" value="{{old('college_year')}}">
                    @if ($errors->has('college_year'))
                      <span class="text-danger">{{ $errors->first('college_year') }}</span>
                      @endif
                    <div class="invalid-feedback">Please enter a valid Name!</div>
                  </div>
                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" required name="email" class="form-control" id="yourEmail" value="{{old('email')}}">
                      @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password"  required="" name="password" class="form-control" id="yourPassword"  value="{{old('password')}}">
                      @if ($errors->has('password'))
                      <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                        <label for="yourPassword" class="form-label">Confirm Password</label>
                        <input type="password"  required="" name="confirmpassword" class="form-control" id="yourconfirmpassword"  value="{{old('confirmpassword')}}">
                        @if ($errors->has('confirmpassword'))
                      <span class="text-danger">{{ $errors->first('confirmpassword') }}</span>
                    @endif
                        <div class="invalid-feedback">Please enter the same password!</div>
                      </div>

                    
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" style="background-color: #6610f2;">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="{{route('showLoginForm')}}">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

              
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/apexcharts/apexcharts.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/chart.js/chart.umd.js"></script>
  <script src="vendor/echarts/echarts.min.js"></script>
  <script src="vendor/quill/quill.min.js"></script>
  <script src="vendor/simple-datatables/simple-datatables.js"></script>
  <script src="vendor/tinymce/tinymce.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>