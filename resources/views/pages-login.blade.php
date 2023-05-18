<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login - STAGTIC </title>
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
    <div class="container" style="background-image: url('img/bg-01.jpg')">

      <section class="section register min-vh-100 d-flex flex-column  justify-content-center py-2">
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
                    
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your role, email & password to login</p>
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
                  <form class="row g-3 needs-validation" novalidate method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="col-12">
                        
                        <div class="form-group">
                            <select name="userType" required class="form-control mb-3">
                                <option value="">--Select User Roles--</option>
                                <option {{ (old("userType") == 'internship_supervisor' ? "selected":"") }} value="internship_supervisor">Internship Supervisor</option>
                                <option {{ (old("userType") == 'head_of_department' ? "selected":"") }} value="head_of_department">Head of Department</option>
                                <option {{ (old("userType") == 'student' ? "selected":"") }} value="student">Student</option>
                              </select>
                        @if ($errors->has('userType'))
                        <span class="text-danger">{{ $errors->first('userType') }}</span>
                        @endif

                        </div>
                      </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        
                        <input type="email" required name="email" class="form-control" id="yourEmail" value="{{old('email')}}">
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                        <div class="invalid-feedback">Please enter your email.</div>
                      </div>
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
                      
                         <a href="pages-reset_password.html">Forgot Password?</a>
                     
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="login" value='Login'  style="background-color:#6610f2">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="{{route('showRegistrationForm')}}">Create an account</a></p>
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
  <<script src="vendor/echarts/echarts.min.js"></script>
  <script src="vendor/quill/quill.min.js"></script>
  <script src="vendor/simple-datatables/simple-datatables.js"></script>
  <script src="vendor/tinymce/tinymce.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>