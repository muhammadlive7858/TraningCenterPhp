<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Orbiter is a bootstrap minimal & clean admin template">
    <meta name="keywords" content="admin, admin panel, admin template, admin dashboard, responsive, bootstrap 4, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Edunity</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{asset("assets/images/favicon.ico")}}">
    <!-- Start css -->
    <link href="{{asset("assets/plugins/switchery/switchery.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/plugins/apexcharts/apexcharts.css")}}" rel="stylesheet">
    <link href="{{asset("assets/plugins/slick/slick.css")}}" rel="stylesheet">
    <link href="{{asset("assets/plugins/slick/slick-theme.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/flag-icon.min.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("assets/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("assets/css/icons.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("assets/css/style.css")}}" rel="stylesheet" type="text/css">
    <!-- End css -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    <div id="containerbar">

        <div class="leftbar">
            <!-- Start Sidebar -->
            <div class="sidebar">
                <!-- Start Logobar -->
                <div class="logobar">
                    {{-- <a href="index.html" class="logo logo-large"><img src="assets/images/logo.svg" class="img-fluid" alt="logo"></a> --}}
                    <h4 class="text-primary" >Edunity Panel</h4>
                    <a href="index.html" class="logo logo-small"><img src="assets/images/small_logo.svg" class="img-fluid" alt="logo"></a>
                </div>
                <!-- End Logobar -->
                <!-- Start Navigationbar -->
                <div class="navigationbar">
                    <ul class="vertical-menu">
                        {{-- dashboard --}}
                        <li>
                            <a href="#">
                              <img src="assets/images/svg-icon/dashboard.svg" class="img-fluid" alt="dashboard"><span>Dashboard</span>
                            </a>
                        </li>
                        {{-- EndDashboard --}}

                        {{-- group --}}
                        <li>
                            <a href="#">
                                <img src="assets/images/svg-icon/tables.svg" class="img-fluid" alt="tables"><span>Group</span>
                            </a>

                        </li>
                        {{-- endgroup --}}

                        {{-- Mentors  --}}
                        <li>
                            <a href="{{route('mentor.index')}}">
                                <img src="assets/images/svg-icon/basic.svg" class="img-fluid" alt="basic"><span>Mentors</span>
                            </a>
                        </li>
                        {{-- endMentors --}}

                        {{-- Student --}}
                        <li>
                            <a href="javaScript:void();">
                                <img src="assets/images/svg-icon/advanced.svg" class="img-fluid" alt="advanced"><span>Students</span>
                            </a>
                        </li>
                        {{-- endstudent --}}

                        {{-- Yoqlama --}}
                        <li>
                            <a href="javaScript:void();">
                                <img src="assets/images/svg-icon/tables.svg" class="img-fluid"
                                <span>Don't send</span>
                            </a>
                        </li>
                        {{-- endyoqlama --}}

                        {{-- payments --}}
                        <li>
                            <a href="javaScript:void();">
                            <img src="assets/images/svg-icon/apps.svg" class="img-fluid" alt="apps"><span>payments</span>
                            </a>
                        </li>
                        {{-- endpayments --}}

                        {{-- hisobat --}}
                        <li>
                            <a href="javaScript:void();">
                                <img src="assets/images/svg-icon/form_elements.svg" class="img-fluid" alt="form_elements"><span>Report</span>
                            </a>
                        </li>
                        {{-- end hisobot --}}

                        {{-- grafik hisobot --}}
                        <li>
                            <a href="javaScript:void();">
                                <img src="assets/images/svg-icon/chart.svg" class="img-fluid" alt="chart"><span>graphical report</span>
                            </a>
                        </li>

                        {{-- endhisobot --}}

                        {{-- task --}}
                        <li>
                            <a href="javaScript:void();">
                                <img src="assets/images/svg-icon/ecommerce.svg" class="img-fluid"
                                alt="chart"><span>Task</span>
                            </a>
                        </li>
                        {{-- edn task --}}

                        {{-- user add --}}
                        <li>
                            <a href="javaScript:void();">
                                <img src="assets/images/svg-icon/icons.svg" class="img-fluid" alt="icons"><span>User add</span>
                            </a>
                        </li>
                        {{-- end user add --}}

                        {{-- yodlangan so'zlar  --}}
                        <li>
                            <a href="javaScript:void();">
                                <img src="assets/images/svg-icon/maps.svg" class="img-fluid" alt="maps"><span>Memorized words</span>
                            </a>
                        </li>
                        {{-- end yoqlangan so'zlar --}}

                        {{-- royxatdan o'tganlar --}}
                        <li>
                            <a href="widgets.html">
                                <img src="assets/images/svg-icon/widgets.svg" class="img-fluid" alt="widgets"><span>Registered</span><span class="badge badge-success pull-right">New</span>
                            </a>
                        </li>
                        {{--end royxatdan o'tganlar --}}

                        {{-- pdf Excel --}}
                        <li>
                            <a href="javaScript:void();">
                              <img src="assets/images/svg-icon/pages.svg" class="img-fluid" alt="pages"><span>Pdf Excel</span>
                            </a>
                        </li>
                        {{--end pdf excel  --}}

                        {{-- <li>
                            <a href="javaScript:void();">
                                <img src="assets/images/svg-icon/ecommerce.svg" class="img-fluid" alt="ecommerce"><span>eCommerce</span><i class="feather icon-chevron-right pull-right"></i>
                            </a>
                            <ul class="vertical-submenu">
                                <li><a href="ecommerce-product-list.html">Product List</a></li>
                                <li><a href="ecommerce-product-detail.html">Product Detail</a></li>
                                <li><a href="ecommerce-order-list.html">Order List</a></li>
                                <li><a href="ecommerce-order-detail.html">Order Detail</a></li>
                                <li><a href="ecommerce-shop.html">Shop</a></li>
                                <li><a href="ecommerce-single-product.html">Single Product</a></li>
                                <li><a href="ecommerce-cart.html">Cart</a></li>
                                <li><a href="ecommerce-checkout.html">Checkout</a></li>
                                <li><a href="ecommerce-thankyou.html">Thank You</a></li>
                                <li><a href="ecommerce-myaccount.html">My Account</a></li>
                            </ul>
                        </li> --}}
                    </ul>
                </div>
                <!-- End Navigationbar -->
            </div>
            <!-- End Sidebar -->
        </div>
        <div class="rightbar">
            <!-- Start Topbar Mobile -->
            <div class="topbar-mobile">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="mobile-logobar">
                            <a href="index.html" class="mobile-logo"><img src="assets/images/logo.svg" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="mobile-togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="topbar-toggle-icon">
                                        <a class="topbar-toggle-hamburger" href="javascript:void();">
                                            <img src="assets/images/svg-icon/horizontal.svg" class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                            <img src="assets/images/svg-icon/verticle.svg" class="img-fluid menu-hamburger-vertical" alt="verticle">
                                         </a>
                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                            <img src="assets/images/svg-icon/collapse.svg" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                            <img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close">
                                         </a>
                                     </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Topbar -->
            <div class="topbar">
                <!-- Start row -->
                <div class="row align-items-center">
                    <!-- Start col -->
                    <div class="col-md-12 align-self-center">
                        <div class="togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="menubar">

                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="searchbar">
                                        <form>
                                            <div class="input-group">
                                              <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                              <div class="input-group-append">
                                                <button class="btn" type="submit" id="button-addon2"><img src="assets/images/svg-icon/search.svg" class="img-fluid" alt="search"></button>
                                              </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="infobar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="settingbar">
                                        <a href="javascript:void(0)" id="infobar-settings-open" class="infobar-icon">
                                            <img src="assets/images/svg-icon/settings.svg" class="img-fluid" alt="settings">
                                        </a>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="notifybar">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle infobar-icon" href="index.html#" role="button" id="notoficationlink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/svg-icon/notifications.svg" class="img-fluid" alt="notifications">
                                            <span class="live-icon"></span></a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notoficationlink">
                                                <div class="notification-dropdown-title">
                                                    <h4>Notifications</h4>
                                                </div>
                                                <ul class="list-unstyled">
                                                    <li class="media dropdown-item">
                                                        <span class="action-icon badge badge-primary-inverse"><i class="feather icon-dollar-sign"></i></span>
                                                        <div class="media-body">
                                                            <h5 class="action-title">$135 received</h5>
                                                            <p><span class="timing">Today, 10:45 AM</span></p>
                                                        </div>
                                                    </li>
                                                    <li class="media dropdown-item">
                                                        <span class="action-icon badge badge-success-inverse"><i class="feather icon-file"></i></span>
                                                        <div class="media-body">
                                                            <h5 class="action-title">Project X prototype approved</h5>
                                                            <p><span class="timing">Yesterday, 01:40 PM</span></p>
                                                        </div>
                                                    </li>
                                                    <li class="media dropdown-item">
                                                        <span class="action-icon badge badge-danger-inverse"><i class="feather icon-eye"></i></span>
                                                        <div class="media-body">
                                                            <h5 class="action-title">John requested to view wireframe</h5>
                                                            <p><span class="timing">3 Sep 2019, 05:22 PM</span></p>
                                                        </div>
                                                    </li>
                                                    <li class="media dropdown-item">
                                                        <span class="action-icon badge badge-warning-inverse"><i class="feather icon-package"></i></span>
                                                        <div class="media-body">
                                                            <h5 class="action-title">Sports shoes are out of stock</h5>
                                                            <p><span class="timing">15 Sep 2019, 02:55 PM</span></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="languagebar">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle" href="index.html#" role="button" id="languagelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag flag-icon-us flag-icon-squared"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="languagelink">
                                                <a class="dropdown-item" href="index.html#"><i class="flag flag-icon-us flag-icon-squared"></i>English</a>
                                                <a class="dropdown-item" href="index.html#"><i class="flag flag-icon-de flag-icon-squared"></i>German</a>
                                                <a class="dropdown-item" href="index.html#"><i class="flag flag-icon-bl flag-icon-squared"></i>France</a>
                                                <a class="dropdown-item" href="index.html#"><i class="flag flag-icon-ru flag-icon-squared"></i>Russian</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="profilebar">
                                        <div class="dropdown">
                                          <a class="dropdown-toggle" href="index.html#" role="button" id="profilelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/profile.svg" class="img-fluid" alt="profile"><span class="feather icon-chevron-down live-icon"></span></a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profilelink">
                                                <div class="dropdown-item">
                                                    <div class="profilename">
                                                      <h5>John Doe</h5>
                                                    </div>
                                                </div>
                                                <div class="userbox">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="media dropdown-item">
                                                            <a href="index.html#" class="profile-icon"><img src="assets/images/svg-icon/user.svg" class="img-fluid" alt="user">My Profile</a>
                                                        </li>
                                                        <li class="media dropdown-item">
                                                            <a href="index.html#" class="profile-icon"><img src="assets/images/svg-icon/email.svg" class="img-fluid" alt="email">Email</a>
                                                        </li>
                                                        <li class="media dropdown-item">
                                                            {{-- <a href="index.html#" class="profile-icon"><img src="assets/images/svg-icon/logout.svg" class="img-fluid" alt="logout">Logout</a> --}}
                                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
            <!-- End Topbar -->
            <!-- Start Breadcrumbbar -->
            {{-- <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">CRM</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="index.html#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">CRM</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                            <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- End Breadcrumbbar -->
            <!-- Start Contentbar -->
            <div class="contentbar mt-5">
                    @yield('content')

            </div>
            <!-- End Contentbar -->
            <!-- Start Footerbar -->
            <div class="footerbar">
                <footer class="footer">
                    <p class="mb-0">© 2022 Aftor - Abbos Allanazarov</p>
                </footer>
            </div>
            <!-- End Footerbar -->
        </div>
    </div>
    <!-- End Containerbar -->
    <!-- Start js -->
    <script src="{{asset("assets/js/jquery.min.js")}}"></script>
    <script src="{{asset("assets/js/popper.min.js")}}"></script>
    <script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("assets/js/modernizr.min.js")}}"></script>
    <script src="{{asset("assets/js/detect.js")}}"></script>
    <script src="{{asset("assets/js/jquery.slimscroll.js")}}"></script>
    <script src="{{asset("assets/js/vertical-menu.js")}}"></script>
    <script src="{{asset("assets/plugins/switchery/switchery.min.js")}}"></script>
    <script src="{{asset("assets/plugins/apexcharts/apexcharts.min.js")}}"></script>
    <script src="{{asset("assets/plugins/apexcharts/irregular-data-series.js")}}"></script>
    <script src="{{asset("assets/plugins/slick/slick.min.js")}}"></script>
    <script src="{{asset("assets/js/custom/custom-dashboard.js")}}"></script>
    <script src="{{asset("assets/js/core.js")}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- End js -->
</body>
</html>
