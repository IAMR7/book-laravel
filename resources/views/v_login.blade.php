<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Laravel - Book</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('assets')}}/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{asset('assets')}}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{asset('assets')}}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('assets')}}/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('assets')}}/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-3 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <h3 class="text-primary"><i class="ti-book"></i> LARAVEL BOOK</h3>
              </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror form-control-lg" id="email" placeholder="Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-group">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror form-control-lg" id="password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">LOGIN</button>
                    </div>
                    <div class="my-2 d-flex justify-content-between align-items-center">
                    <a href="#" class="auth-link text-black">Lupa password</a>
                    </div>
                    {{-- <div class="text-center mt-4 font-weight-light">
                    Belum punya akun? <a href="register.html" class="text-primary">Daftar disini</a>
                    </div> --}}
                </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('assets')}}/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('assets')}}/js/off-canvas.js"></script>
  <script src="{{asset('assets')}}/js/hoverable-collapse.js"></script>
  <script src="{{asset('assets')}}/js/template.js"></script>
  <script src="{{asset('assets')}}/js/settings.js"></script>
  <script src="{{asset('assets')}}/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
