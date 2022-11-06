
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zeta admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Zeta admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('/dashboard_assets')}}/images/logo/favicon-icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('/dashboard_assets')}}/images/logo/favicon-icon.png" type="image/x-icon">
    <title>Zeta admin dashboard </title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/dashboard_assets')}}/css/vendors/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('/dashboard_assets')}}/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('/dashboard_assets')}}/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('/dashboard_assets')}}/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('/dashboard_assets')}}/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/dashboard_assets')}}/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/dashboard_assets')}}/css/style.css">
    <link id="color" rel="stylesheet" href="{{asset('/dashboard_assets')}}/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/dashboard_assets')}}/css/responsive.css">
  </head>
  <body>

    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="loader">
        <div class="loader-bar"></div>
        <div class="loader-bar"></div>
        <div class="loader-bar"></div>
        <div class="loader-bar"></div>
        <div class="loader-bar"></div>
        <div class="loader-ball"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <section>         </section>
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-12">
          <div class="login-card">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form class="theme-form login-form" method="POST" action="{{ route('login') }}" >

             @csrf
             <x-auth-validation-errors class="mb-4" :errors="$errors" />
              <h4>Login</h4>
              <h6>Welcome back! Log in to your account.</h6>

              <div class="form-group">
                     <label>Email Address</label>
                       <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                          <input id="email" class="form-control" placeholder="Enter Your Email Address"type="email" name="email" :value="old('email')" required autofocus>
                </div>
              </div>

              <div class="form-group">
                <label>Password</label>
                <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                  <input class="form-control" id="password"  type="password"  name="password"  required autocomplete="current-password" placeholder="*********" >
                </div>

              </div>

              <div class="form-group">
                <div class="checkbox">
                  <input id="checkbox1" type="checkbox">
                  <label for="checkbox1">{{ __('Remember me') }}</label>
                </div><a class="link" href="{{ route('password.request') }}">Forgot password?</a>
              </div>
              <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">  {{ __('Log in') }} </button>
              </div>
              <div class="login-social-title">
                <h5>Sign in with</h5>
              </div>
              <div class="form-group">
                <ul class="login-social">
                  <li><a href="https://www.linkedin.com/" target="_blank"><i data-feather="linkedin"></i></a></li>
                  <li><a href="https://twitter.com/" target="_blank"><i data-feather="twitter"></i></a></li>
                  <li><a href="https://www.facebook.com/" target="_blank"><i data-feather="facebook"></i></a></li>
                  <li><a href="https://www.instagram.com/" target="_blank"><i data-feather="instagram">                  </i></a></li>
                </ul>
              </div>
              <p>Don't have account?<a class="ms-2" href="{{ route('register') }}">Create Account</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="{{asset('/dashboard_assets')}}/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('/dashboard_assets')}}/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="{{asset('/dashboard_assets')}}/js/icons/feather-icon/feather.min.js"></script>
    <script src="{{asset('/dashboard_assets')}}/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <!-- Sidebar jquery-->
    <script src="{{asset('/dashboard_assets')}}/js/config.js"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('/dashboard_assets')}}/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>

</html>
