<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designing-world.com/affan-1.3.0/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Oct 2021 11:52:58 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Affan - PWA Mobile HTML Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#0134d4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>Tube Master - Login</title>
    <!-- Fonts -->
    <link rel="preconnect" href="fonts.gstatic.com/index.html">
    <link href="fonts.googleapis.com/css24d2f.css?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="{{asset('tubmasterlogo.ico')}}">
    <link rel="apple-touch-icon" href="{{asset('tubmasterlogo.ico')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('tubmasterlogo.ico')}}">
    <link rel="apple-touch-icon" sizes="167x167" href="{{asset('tubmasterlogo.ico')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('tubmasterlogo.ico')}}">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/tiny-slider.css">
    <link rel="stylesheet" href="css/baguetteBox.min.css">
    <link rel="stylesheet" href="css/rangeslider.css">
    <link rel="stylesheet" href="css/vanilla-dataTables.min.css">
    <link rel="stylesheet" href="css/apexcharts.css">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- Web App Manifest -->
    <link rel="manifest" href="manifest.json">
  </head>
  <body>
    <!-- Preloader -->
    <div id="preloader">
      <div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
    </div>
    <!-- Internet Connection Status -->
    <!-- # This code for showing internet connection status -->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Back Button -->

    <!-- Login Wrapper Area -->
    <div class="login-wrapper d-flex align-items-center justify-content-center">
      <div class="custom-container">
        <div class="text-center px-4"><img class="login-intro-img" src="{{asset('tubemasterlogo.jpeg')}}" alt=""></div>
        <!-- Register Form -->
        <div class="register-form mt-4">
          <h6 class="mb-3 text-center">Log in to continue to.</h6>
          <form action="{{route('login')}}" method="POST">
            @csrf
            <div class="form-group">
                <input id="email" placeholder='Enter Email' type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group position-relative">
                <input id="password" type="password" placeholder='Enter Password' class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
              <div class="position-absolute" id="password-visibility"><i class="bi bi-eye"></i><i class="bi bi-eye-slash"></i></div>
              @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
            </div>
            <button class="btn btn-primary w-100" type="submit">Sign In</button>
          </form>
        </div>
        <!-- Login Meta -->
        <div class="login-meta-data text-center">
          <p class="mb-0">Didn't have an account? <a class="stretched-link" href="{{ route('register') }}">Register Now</a>

        </p>
        </div>
      </div>
    </div>
    <!-- All JavaScript Files -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/slideToggle.min.js"></script>
    <script src="js/internet-status.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/rangeslider.min.js"></script>
    <script src="js/vanilla-dataTables.min.js"></script>
    <script src="js/index.js"></script>
    <script src="js/magic-grid.min.js"></script>
    <script src="js/dark-rtl.js"></script>
    <script src="js/active.js"></script>
    <!-- PWA -->
    <script src="js/pwa.js"></script>
  </body>

<!-- Mirrored from designing-world.com/affan-1.3.0/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Oct 2021 11:52:59 GMT -->
</html>
