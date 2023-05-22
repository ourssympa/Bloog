
<!doctype html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- favicon -->
    <link rel="icon" sizes="16x16" href="assets/img/favicon.png">

    <!-- Title -->
    <title> Le Bloog a l'ours </title>

    <!-- CSS Plugins -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">

    <!-- main style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    <!--loading -->
    <div class="loader">
        <div class="loader-element"></div>
      </div>

     <!-- Header-->
     <header class="header navbar-expand-lg fixed-top ">
        <div class="container-fluid ">
            <div class="header-area ">
                <!--logo-->
                <div class="logo">
                    <a href="index.html">
                        <img src="assets/img/logo/logo-dark.png" alt="" class="logo-dark">
                        <img src="assets/img/logo/logo-white.png" alt="" class="logo-white">
                    </a>
                </div>
                 <!--/-->

                <!--header-navbar-->
                <div class="header-navbar">
                    <nav class="navbar">
                        <!--navbar-collapse-->
                        <div class="collapse navbar-collapse" id="main_nav">
                            <ul class="navbar-nav ">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{route('post.index')}}"> Home </a>
                                </li>

                            </ul>
                        </div>
                        <!--/-->
                    </nav>
                </div>
                <!--/-->

                <!--header-right-->
                <div class="header-right ">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox" />
                            <span class="slider round ">
                                <i class="lar la-sun icon-light"></i>
                                <i class="lar la-moon icon-dark"></i>
                            </span>
                        </label>
                    </div>
                       <!--search icon-->
                    <div class="search-icon">
                        <i class="las la-search"></i>
                    </div>

                     <!--button subscribe-->
                    <div class="botton-sub">
                        <a href="signup.html" class="btn-subscribe">subscribe</a>
                    </div>

                       <!--nvbar-toggle-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!--Login-->
    <section class="login">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-8 m-auto">
                    <div class="login-content">
                        <h4>Enregistrement</h4>
                        <!--form-->
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username*" name="name" value="" required>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email Address*" name="email" value="" required>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password*" name="password" value="" required>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password*" name="password_confirmation" value="" required>
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn-custom">Sign Up</button>
                            </div>
                        </form>
                           <!--/-->
                    </div>
                </div>
             </div>
        </div>
    </section>



    <!--footer-->
    <div class="footer">
        <div class="footer-area">
            <div class="footer-area-content">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-md-3">
                            <div class="menu">
                                <h6>Menu</h6>
                                <ul>
                                    <li><a href="#">Homepage</a></li>
                                    <li><a href="#">about us</a></li>
                                    <li><a href="#">contact us</a></li>
                                    <li><a href="#">privarcy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!--newslatter-->
                            <div class="newslettre">
                                <div class="newslettre-info">
                                    <h3>Subscribe To Our Newsletter</h3>
                                    <p>Sign up for free and be the first to get notified about new posts.</p>
                                </div>
                                <form action="#" class="newslettre-form">
                                    <div class="form-flex">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email Adress" required="required">
                                        </div>
                                        <button class="submit-btn" type="submit">
                                            <i class="fas fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!--/-->
                        </div>
                        <div class="col-md-3">
                            <div class="menu">
                                <h6>Follow us</h6>
                                <ul>
                                    <li><a href="#">facebook</a></li>
                                    <li><a href="#">instagram</a></li>
                                    <li><a href="#">youtube</a></li>
                                    <li><a href="#">twitter</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>

            <!--Footer copyright-->
            <div class="footer-area-copyright">
                <div class="container">
                    <div class="row">
                       <div class="col-lg-12">
                           <div class="copyright">
                            <p>© 2022,  AssiaGroupe, All Rights Reserved.</p>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Search-form-->
    <div class="search">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-md-10 m-auto">
                    <div class="search-width">
                        <button type="button" class="close">
                            <i class="far fa-times"></i>
                        </button>
                        <form class="search-form" action="https://oredoo.assiagroupe.net/Oredoo/search.html">
                            <input type="search" value="" placeholder="What are you looking for?">
                            <button type="submit" class="search-btn"> search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.min.js"></script>3
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- JS Plugins  -->
    <script  src="assets/js/theia-sticky-sidebar.js"></script>
    <script src="assets/js/ajax-contact.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/switch.js"></script>
    <script src="assets/js/jquery.marquee.js"></script>

    <!-- JS main  -->
    <script src="assets/js/main.js"></script>

</body>

</html>
