
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Jummah Travellers</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('admin/node_modules/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
  <!-- endinject -->
  <link rel="stylesheet" href="{{asset('admin/node_modules/rickshaw/rickshaw.min.css')}}" />
  <link rel="stylesheet" href="{{asset('admin/bower_components/chartist/dist/chartist.min.css')}}" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('admin/images/favicon.png')}}" />
</head>
<body class="sidebar-dark">

  <!-- partial -->
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="index.html"><img src="images/salt_logo.svg" alt="Logo"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="btn-group d-none d-sm-block">
          <button type="button" class="btn btn-secondary btn-sm text-muted border-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </div>
        <form class="form-inline mt-2 ml-3 mt-md-0 d-none d-sm-block">
          <div class="input-group solid">
            <span class="input-group-addon"><i class="mdi mdi-magnify"></i></span>
            <input type="text" class="form-control">
          </div>
        </form>
        
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <div class="profile">
              <img src="{{ asset('admin/images/faces/face2.jpg') }}" alt="">
            </div>
            <div class="details">
              <p class="user-name">Dave Mattew</p>
              <p class="designation">Developer</p>
            </div>
          </div>
          <ul class="nav">
            <!--main pages start-->
            <li class="nav-item nav-category">
              <span class="nav-link">Main</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="{{URL::to('/category')}}" aria-expanded="false" aria-controls="authSubmenu">
                <i class="mdi mdi-lock-outline menu-icon"></i>
                <span class="menu-title">Category</span>
                 <span class="badge badge-danger badge-pill ml-auto">New</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenu" aria-expanded="false" aria-controls="layoutsSubmenu">
                <i class="mdi mdi-arrow-expand-all menu-icon"></i>
                <span class="menu-title">Add Category</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts" aria-expanded="false" aria-controls="sidebar_layouts">
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                <span class="menu-title">Category List</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#authSubmenu" aria-expanded="false" aria-controls="authSubmenu">
                <i class="mdi mdi-lock-outline menu-icon"></i>
                <span class="menu-title">Sub-Category</span>
                 <span class="badge badge-danger badge-pill ml-auto">New</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#errorSubmenu" aria-expanded="false" aria-controls="errorSubmenu">
                <i class="mdi mdi-alert-circle-outline menu-icon"></i>
                <span class="menu-title">Sub-Category List</span>

                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#generalSubmenu" aria-expanded="false" aria-controls="generalSubmenu">
                <i class="mdi mdi-google-pages menu-icon"></i>
                <span class="menu-title">Articles</span>
                <span class="badge badge-danger badge-pill ml-auto">New</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        @yield('content') 
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Salt Admin</a> &copy; 2017
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <script src="{{asset('admin/node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('admin/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('admin/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('admin/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('admin/node_modules/flot/jquery.flot.js')}}"></script>
  <script src="{{asset('admin/node_modules/flot/jquery.flot.resize.js')}}"></script>
  <script src="{{asset('admin/node_modules/flot/jquery.flot.categories.js')}}"></script>
  <script src="{{asset('admin/node_modules/flot/jquery.flot.pie.js')}}"></script>
  <script src="{{asset('admin/node_modules/rickshaw/vendor/d3.v3.js')}}"></script>
  <script src="{{asset('admin/node_modules/rickshaw/rickshaw.min.js')}}"></script>
  <script src="{{asset('admin/bower_components/chartist/dist/chartist.min.js')}}"></script>
  <script src="{{asset('admin/node_modules/chartist-plugin-legend/chartist-plugin-legend.js')}}"></script>
  <script src="{{asset('admin/node_modules/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('admin/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('admin/js/off-canvas.js')}}"></script>
  <script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('admin/js/misc.js')}}"></script>
  <script src="{{asset('admin/js/settings.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('admin/js/dashboard_1.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>
