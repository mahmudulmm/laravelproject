



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

    <!-- page-wrapper Start-->
    <section>
      <div class="container-fluid p-0">
        <div class="row m-0">
          <div class="col-12 p-0">
            <div class="login-card">
              <div class="login-main">
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form class="theme-form login-form" method="POST" action="{{ route('password.email') }}">
                    @csrf
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <div class="mb-4 text-sm text-gray-600">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>
                  <div class="form-group">
                    <div class="row">
                      <label>Email Address</label>
                        <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                         <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                      <button class="btn btn-primary" position="center"  type="submit">  {{ __('Email Password Reset Link') }}</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- page-wrapper end-->
    </section>
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
