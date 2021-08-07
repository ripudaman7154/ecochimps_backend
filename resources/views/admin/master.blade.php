
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Ecochimps</title>
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/jquery-bar-rating/css-stars.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/demo_1/style.css')}}" />
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />
</head>
<body>
<div class="container-scroller">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile border-bottom">
                <a href="#" class="nav-link flex-column">
                    <div class="nav-profile-image">
                        <img src="{{asset('assets/images/faces/face1.jpg')}}" alt="profile" />
                    </div>
                    <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
                        <span class="font-weight-semibold mb-1 mt-2 text-center">{{auth()->user()->full_name()}}</span>
                        <span class="text-secondary icon-sm text-center">$3499.00</span>
                    </div>
                </a>
            </li>
            <li class="nav-item pt-3">
                <a class="nav-link d-block" href="">
                    <div class="small font-weight-light pt-1" style="color: black; font-weight: bold">ECOCHIMPS</div>
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard.index')}}">
                    <i class="mdi mdi-compass-outline menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <i class="mdi mdi-account menu-icon"></i>
                    <span class="menu-title">Vendors</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('vendor.list.all')}}">All Vendors</a>
                        </li>
                    </ul>
                </div>
            </li>



            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="mdi mdi-account menu-icon"></i>
                    <span class="menu-title">Clients</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="{{route('user.list.all')}}">
                    <i class="mdi mdi mdi-account menu-icon"></i>
                    <span class="menu-title">Users</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="mdi mdi-more menu-icon"></i>
                    <span class="menu-title">Products</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="mdi mdi-file-document menu-icon"></i>
                    <span class="menu-title">Reports</span>
                </a>
            </li>

            <li class="nav-item pt-3">
                <a class="nav-link" href="{{route('logout')}}">
                    <i class="mdi mdi mdi-lock-open menu-icon"></i>
                    <span class="menu-title">Logout</span>
                </a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid page-body-wrapper">
        <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
            <i class="settings-close mdi mdi-close"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options selected" id="sidebar-default-theme">
                <div class="img-ss rounded-circle bg-light border mr-3"></div>Default
            </div>
            <div class="sidebar-bg-options" id="sidebar-dark-theme">
                <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
            </div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
                <div class="tiles default primary"></div>
                <div class="tiles success"></div>
                <div class="tiles warning"></div>
                <div class="tiles danger"></div>
                <div class="tiles info"></div>
                <div class="tiles dark"></div>
                <div class="tiles light"></div>
            </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-menu-wrapper d-flex align-items-stretch" style="#background-color: #2E7D32">
                <button class="navbar-toggler navbar-toggler align-self-center" style="#background-color: #2E7D32" type="button" data-toggle="minimize">
                    <span class="mdi mdi-chevron-double-left"></span>
                </button>
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-email-outline"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-left navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                            <h6 class="p-3 mb-0 font-weight-semibold">Messages</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{asset('assets/images/faces/face1.jpg')}}" alt="image" class="profile-pic">
                                </div>
                                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{asset('assets/images/faces/face1.jpg')}}" alt="image" class="profile-pic">
                                </div>
                                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{asset('assets/images/faces/face1.jpg')}}" alt="image" class="profile-pic">
                                </div>
                                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <h6 class="p-3 mb-0 text-center text-primary font-13">4 new messages</h6>
                        </div>
                    </li>
                    <li class="nav-item dropdown ml-3">
                        <a class="nav-link" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="mdi mdi-bell-outline"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-left navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                            <h6 class="px-3 py-3 font-weight-semibold mb-0">Notifications</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="mdi mdi-calendar"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject font-weight-normal mb-0">New order recieved</h6>
                                    <p class="text-gray ellipsis mb-0"> 45 sec ago </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="mdi mdi-settings"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject font-weight-normal mb-0">Server limit reached</h6>
                                    <p class="text-gray ellipsis mb-0"> 55 sec ago </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="mdi mdi-link-variant"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject font-weight-normal mb-0">Kevin karvelle</h6>
                                    <p class="text-gray ellipsis mb-0"> 11:09 PM </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <h6 class="p-3 font-13 mb-0 text-primary text-center">View all notifications</h6>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown d-none d-md-block">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <div class="nav-profile-text">English </div>
                        </a>
                        <div class="dropdown-menu center navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="flag-icon flag-icon-bl mr-3"></i> French </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <i class="flag-icon flag-icon-cn mr-3"></i> Chinese </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <i class="flag-icon flag-icon-de mr-3"></i> German </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <i class="flag-icon flag-icon-ru mr-3"></i>Russian </a>
                        </div>
                    </li>
                    <li class="nav-item nav-logout d-none d-lg-block">
                        <a class="nav-link" href="index.html">
                            <i class="mdi mdi-home-circle"></i>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        @yield('content')
    </div>
</div>

<script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-bar-rating/jquery.barrating.min.js')}}"></script>
<script src="{{asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('assets/vendors/flot/jquery.flot.js')}}"></script>
<script src="{{asset('assets/vendors/flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('assets/vendors/flot/jquery.flot.categories.js')}}"></script>
<script src="{{asset('assets/vendors/flot/jquery.flot.fillbetween.js')}}"></script>
<script src="{{asset('assets/vendors/flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('assets/js/off-canvas.js')}}"></script>
<script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('assets/js/misc.js')}}"></script>
<script src="{{asset('assets/js/settings.js')}}"></script>
<script src="{{asset('assets/js/todolist.js')}}"></script>
<script src="{{asset('assets/js/dashboard.js')}}"></script>

</body>
</html>
