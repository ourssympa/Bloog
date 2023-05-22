<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <title>Blog</title>
    <!-- ficon
        ============================================ -->
        <link rel="shortcut icon" href="{{asset('logo_gestline1.jpeg')}}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('dashboardassets/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('dashboardassets/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('dashboardassets/assets/css/app.min.css') }}" id="app-style" rel="stylesheet"
        type="text/css" />
    @yield('css')
</head>

<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">


                        <a href="#" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{asset('assets/img/logo/logo-white.png')}}" width="70" height="50" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <br>
                                <img src="{{asset('assets/img/logo/logo-white.png')}}"  alt="logo">
                                <br>
                            </span>

                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>


                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            data-bs-toggle="fullscreen">
                            <i class="bx bx-fullscreen"></i>
                        </button>
                    </div>


                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            <span class="d-none d-xl-inline-block ms-1"
                                key="t-henry"></span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href=""><i
                                    class="bx bx-user font-size-16 align-middle me-1"></i> <span
                                    key="t-profile">Profile</span></a>
                                    <a class="dropdown-item" href=""><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Changer de mots de passe</span></a>


                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="{{ route('logout') }}"><i
                                    class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span
                                    key="t-logout">Logout</span></a>
                        </div>
                    </div>


                </div>
            </div>
        </header>

        <!-- ========== Menu ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <br>
                    <br>
                    <br>
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" key="t-menu">Menu</li>

                        <li>
                            <a href="{{route('categorie.index')}}" class="waves-effect">

                                <i class="bx bx-sticker"></i>

                                <span key="t-dashboards">Categories</span>
                            </a>

                        </li>
                        <li>
                            <a href="{{route('dashboard.index')}}" class="waves-effect">

                                <i class="bx bxs-collection"></i>
                                <span key="t-dashboards">Post</span>
                            </a>

                        </li>

                    </ul>
                </div>

            </div>
        </div>



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">

                            @yield('section')

                        </div>
                    </div>
                    <!-- end page title -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Ourssympa.
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>


    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('dashboardassets/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboardassets/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboardassets/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('dashboardassets/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('dashboardassets/assets/libs/node-waves/waves.min.js') }}"></script>

    <script src="{{ asset('dashboardassets/assets/js/app.js') }}"></script>
    @yield('script')
</body>

</html>
