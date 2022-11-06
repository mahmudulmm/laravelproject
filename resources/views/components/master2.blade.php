
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>General</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('/dashboard_assets')}}/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/dashboard_assets')}}/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/dashboard_assets')}}/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/dashboard_assets')}}/css/vendors/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/dashboard_assets')}}/css/vendors/prism.css">
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
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
        <x-partial.pageheader/>
      <!-- Page Header Ends -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <x-partial.sidebar/>
        <!-- Page Sidebar Ends-->
        <!-- Container-fluid Start-->
            {{$slot}}
      <!-- Container-fluid Ends-->
        <!-- footer start-->
        <x-partial.pagefooter/>
       <!-- footer end-->
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
    <script src="{{asset('/dashboard_assets')}}/js/scrollbar/simplebar.js"></script>
    <script src="{{asset('/dashboard_assets')}}/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="{{asset('/dashboard_assets')}}/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="{{asset('/dashboard_assets')}}/js/sidebar-menu.js"></script>
    <script src="{{asset('/dashboard_assets')}}/js/chart/chartjs/chart.min.js"></script>
    <script src="{{asset('/dashboard_assets')}}/js/chart/chartist/chartist.js"></script>
    <script src="{{asset('/dashboard_assets')}}/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="{{asset('/dashboard_assets')}}/js/chart/apex-chart/apex-chart.js"></script>
    <script src="{{asset('/dashboard_assets')}}/js/chart/apex-chart/stock-prices.js"></script>
    <script src="{{asset('/dashboard_assets')}}/js/prism/prism.min.js"></script>
    <script src="{{asset('/dashboard_assets')}}/js/counter/jquery.waypoints.min.js"></script>
    <script src="{{asset('/dashboard_assets')}}/js/counter/jquery.counterup.min.js"></script>
    <script src="{{asset('/dashboard_assets')}}/js/counter/counter-custom.js"></script>
    <script src="{{asset('/dashboard_assets')}}/js/owlcarousel/owl.carousel.js"></script>
    <script src="{{asset('/dashboard_assets')}}/js/owlcarousel/owl-custom.js"></script>
    <script src="{{asset('/dashboard_assets')}}/js/dashboard/dashboard_2.js"></script>
    <script src="{{asset('/dashboard_assets')}}/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('/dashboard_assets')}}/js/script.js"></script>
    <script src="{{asset('/dashboard_assets')}}/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>
