
<!doctype html>
<html lang="en" class="minimal-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
  <!--plugins-->
  <link href="{{asset('backend/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
  {{-- <link href="{{asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" /> --}}
  <link href="{{asset('backend/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />

  @yield('Backend_css')
  <!-- Bootstrap CSS -->
  <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/css/bootstrap-extended.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/css/style.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/css/icons.css')}}" rel="stylesheet">
  <link href="{{asset('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap')}}" rel="stylesheet">
  {{-- <link rel="stylesheet" href="{{asset('backend/../../../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.9.1/font/bootstrap-icons.css')}}"> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css">

  <!-- loader-->
	<link href="{{asset('backend/assets/css/pace.min.css')}}" rel="stylesheet" />

  <!--Theme Styles-->
  <link href="{{asset('backend/assets/css/dark-theme.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/css/light-theme.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/css/semi-dark.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/css/header-colors.css')}}" rel="stylesheet" />

  <title>ICT Information M</title>
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
      <header class="top-header">
        <nav class="navbar navbar-expand">
          <div class="mobile-toggle-icon d-xl-none">
              <i class="bi bi-list"></i>
            </div>
            <div class="top-navbar d-none d-xl-block">

            </div>
            <div class="search-toggle-icon d-xl-none ms-auto">
              <i class="bi bi-search"></i>
            </div>
            <form class="searchbar d-none d-xl-flex ms-auto">
                <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
                <input class="form-control" type="text" placeholder="Type here to search">
                <div class="position-absolute top-50 translate-middle-y d-block d-xl-none search-close-icon"><i class="bi bi-x-lg"></i></div>
            </form>
            <div class="top-navbar-right ms-3">
              <ul class="navbar-nav align-items-center">
              <li class="nav-item dropdown dropdown-large">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                  <div class="user-setting d-flex align-items-center gap-1">
                    {{-- <img src="assets/images/avatars/avatar-1.png" class="user-img" alt=""> --}}
                    <div class="user-name d-none d-sm-block">
                        <a class="btn btn-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
                    </div>
                  </div>
                </a>

              </li>


              </ul>
              </div>
        </nav>
      </header>
       <!--end top header-->

        <!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
          <div class="sidebar-header">
            <div>
              <img src="{{asset('backend/assets/images/NHA_PNG_LOGO.png')}}" class="logo-icon" alt="logo icon">
            </div>
            <div>
              <h4 class="logo-text">IM for NHA</h4>
            </div>
            <div class="toggle-icon ms-auto"><i class="bi bi-chevron-double-left"></i>
            </div>
          </div>
          <!--navigation-->
          <ul class="metismenu" id="menu">

            <li>
                <a href="{{ route('home') }}" class="has-arrow">
                  <div class="parent-icon"><i class="bi bi-house-door"></i>
                  </div>
                  <div class="menu-title">Dashboard</div>
                </a>
              </li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-house-door"></i>
                </div>
                <div class="menu-title">Set Up Managment</div>
              </a>
              <ul>
                <li> <a href="{{ route('Setup.index') }}"><i class="bi bi-arrow-right-short"></i>Department</a>
                </li>
                <li> <a href="{{ route('setup_designation.index') }}"><i class="bi bi-arrow-right-short"></i>Designation</a>
                </li>
                <li> <a href="{{ route('setup_status.index') }}"><i class="bi bi-arrow-right-short"></i>Status</a>
                </li>
                <li> <a href="{{ route('setup_problem.index') }}"><i class="bi bi-arrow-right-short"></i>Problem List</a>
                </li>
                <li> <a href="{{ route('type.index') }}"><i class="bi bi-arrow-right-short"></i>category</a>
                </li>


              </ul>
            </li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-grid"></i>
                </div>
                <div class="menu-title">ALl Problem</div>
              </a>
              <ul>
                <li> <a href="{{ route('admin_Problem_list.index') }}"><i class="bi bi-arrow-right-short"></i>Problem List</a>
                </li>

                </li>

              </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                  <div class="parent-icon"><i class="bi bi-grid"></i>
                  </div>
                  <div class="menu-title">User Information Upload</div>
                </a>
                <ul>
                  <li> <a href="{{ route('UserUpoload.create') }}"><i class="bi bi-arrow-right-short"></i>User add</a>
                  </li>
                  <li> <a href="{{ route('computerinfo.create') }}"><i class="bi bi-arrow-right-short"></i>Computer Information</a>
                  </li>
                  <li> <a href="{{ route('printer.index') }}"><i class="bi bi-arrow-right-short"></i>Printer Information</a>
                  </li>
                  <li> <a href="{{ route('scanner.index') }}"><i class="bi bi-arrow-right-short"></i>Scanner Information</a>
                  </li>
                </ul>
              </li>


                </ul>
              </li>

              </ul>
            </li>
        </ul>
          <!--end navigation-->
       </aside>
       <!--end sidebar -->
       @yield('backend_app')

       <!--start content-->

       <!--end page main-->

       <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
       <!--end overlay-->

       <!--Start Back To Top Button-->
		     <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
       <!--End Back To Top Button-->


       <!--end switcher-->

  </div>


  <!--end wrapper-->


  <!-- Bootstrap bundle JS -->
  <script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
  <!--plugins-->
  <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/easyPieChart/jquery.easypiechart.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/peity/jquery.peity.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
  <script src="{{asset('backend/assets/js/pace.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
	<script src="{{asset('backend/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
  {{-- <script src="{{asset('backend/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script> --}}
  <script src="{{asset('backend/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('backend/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/fontawesome.min.js"></script>
  <!--app-->
  <script src="{{asset('backend/assets/js/app.js')}}"></script>
  <script src="{{asset('backend/assets/js/index2.js')}}"></script>
  @yield('backend_js')

</body>

</html>
