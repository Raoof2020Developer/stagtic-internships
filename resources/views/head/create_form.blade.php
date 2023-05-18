<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Store - STAGTIC </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/img/logo_stage.png" rel="icon">
  <link href="/img/logo_stage.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

  <main>
    <div class="container"  style="background-image: url('/img/entreprise_stage.jpg')">

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
                    <h5 class="card-title text-center pb-0 fs-4">Store Your Informations</h5>
                    <p class="text-center small">Enter your personal details </p>
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

                  <form class="row g-3 needs-validation" novalidate method="POST" action="{{route('StoreHeadOfDepartment')}}">
                    @csrf
                    
                  <div class="col-12">
                    <label for="yourName" class="form-label">First Name</label>
                    <input type="text" required name="first_name_head_of_department" class="form-control" id="yourfirst_name_head_of_department" value="{{old('first_name_head_of_department')}}">
                    @if ($errors->has('first_name_head_of_department'))
                      <span class="text-danger">{{ $errors->first('first_name_head_of_department') }}</span>
                      @endif
                    <div class="invalid-feedback">Please enter a valid Name!</div>
                  </div>
                  <div class="col-12">
                    <label for="yourEmail" class="form-label">Last Name</label>
                    <input type="text" required name="last_name_head_of_department" class="form-control" id="yourlast_name_head_of_department" value="{{old('last_name_head_of_department')}}">
                    @if ($errors->has('last_name_head_of_department'))
                      <span class="text-danger">{{ $errors->first('last_name_head_of_department') }}</span>
                      @endif
                    <div class="invalid-feedback">Please enter a valid Name!</div>
                  </div>

                  <div class="col-12">
                    <label for="yourEmail" class="form-label">Department Name</label>
                    <input type="text" required name="name_department" class="form-control" id="yourname_department" value="{{old('name_department')}}">
                    @if ($errors->has('name_department'))
                      <span class="text-danger">{{ $errors->first('name_department') }}</span>
                      @endif
                    <div class="invalid-feedback">Please enter a valid Name!</div>
                  </div>
                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" required name="email_head_of_department" class="form-control" id="youremail_head_of_department" value="{{old('email_head_of_department')}}">
                      @if ($errors->has('email_head_of_department'))
                        <span class="text-danger">{{ $errors->first('email_head_of_department') }}</span>
                        @endif
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Phone Number</label>
                      <input type="text" required name="phone_head_of_department" class="form-control" id="yourphone_head_of_department" value="{{old('phone_head_of_department')}}">
                      @if ($errors->has('phone_head_of_department'))
                        <span class="text-danger">{{ $errors->first('phone_head_of_department') }}</span>
                        @endif
                      <div class="invalid-feedback">Please enter a valid Phone number!</div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" style="background-color: #6610f2;">Confirm</button>
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

</body>

</html>