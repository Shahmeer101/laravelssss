<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('backend/assets/img/favicon.png')}}" rel="icon">
  <link href="{{url('backend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('backend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('backend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('backend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{url('backend/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{url('backend/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{url('backend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{url('backend/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('backend/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="{{url('backend/assets/img/logo.png')}}" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  @if ($errors->has('email') || $errors->has('password'))
                  <div class="alert alert-danger">
                      <p>Email or password field is required.</p>
                  </div>
              @endif
              
              <form action="{{ url('add/login') }}" method="POST">
                  @csrf
                  <div class="row gy-3 overflow-hidden">
                      <div class="col-12">
                          <div class="form-floating mb-3">
                              <input 
                                  type="text" 
                                  class="form-control @error('email') is-invalid @enderror"  
                                  name="email" 
                                  id="email" 
                                  placeholder="name@example.com" 
                                  value="{{ old('email') }}"
                              >
                              <label for="email" class="form-label">Email</label>
                              @error('email')
                                  <p class="invalid-feedback">{{ $message }}</p>    
                              @enderror
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="form-floating mb-3">
                              <input 
                                  type="password" 
                                  class="form-control @error('password') is-invalid @enderror"  
                                  name="password" 
                                  id="password" 
                                  placeholder="Password">
                              <label for="password" class="form-label">Password</label>
                              @error('password')
                                  <p class="invalid-feedback">{{ $message }}</p>    
                              @enderror
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="d-grid">
                              <button class="btn bsb-btn-xl btn-primary py-3" type="submit">Log in now</button>
                          </div>
                      </div>
                      <div class="col-12">
                          <p class="small mb-0">
                              Don't have an account? 
                              <a href="{{ url('register') }}">Create an account</a>
                          </p>
                      </div>
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
  <script src="{{url('backend/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{url('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('backend/assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{url('backend/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{url('backend/assets/vendor/quill/quill.js')}}"></script>
  <script src="{{url('backend/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{url('backend/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{url('backend/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{url('backend/assets/js/main.js')}}"></script>

</body>

</html>