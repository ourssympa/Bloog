<!doctype html>
<html lang="en">


<!-- Mirrored from oredoo.assiagroupe.net/Oredoo/post-layout-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Apr 2023 02:28:41 GMT -->
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- favicon -->
    <link rel="icon" sizes="16x16" href="assets/img/favicon.png">

    <!-- Title -->
    <title> Oredoo - Personal Blog HTML Template </title>

    <!-- CSS Plugins -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">

    <!-- main style -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
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

                <!--header-right-->
                <div class="header-right ">
                        <!--theme-switch-->
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox" />
                            <span class="slider round ">
                                <i class="lar la-sun icon-light"></i>
                                <i class="lar la-moon icon-dark"></i>
                            </span>
                        </label>
                    </div>

                        <!--search-icon-->
                    <div class="search-icon">
                        <i class="las la-search"></i>
                    </div>

                        <!--button-subsvribe-->
                    <div class="botton-sub">
                        <a href="signup.html" class="btn-subscribe">subscribe</a>
                    </div>
                        <!--navbar-toggler-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!--post-single-->
    <section class="post-single">
        <div class="container-fluid ">
            <div class="row ">
                <div class="col-lg-12">
                    <!--post-single-image-->
                        <div class="post-single-image">
                            <img src="{{asset('/'.$data->image)}}" alt="" width="900px" height="750px">
                        </div>

                        <div class="post-single-body">
                            <!--post-single-title-->
                            <div class="post-single-title">
                                <h2> {{$data->titre}}</h2>
                                <ul class="entry-meta">
                                   <li class="post-author"> <a href="author.html">Meriam Smith</a></li>
                                    <li class="entry-cat"> <a href="blog-layout-1.html" class="category-style-1 "> <span class="line"></span> {{$data->Categorie['libelle']}}</a></li>
                                    <li class="post-date"> <span class="line"></span> {{$data->created_at->diffForHumans()}}</li>
                                </ul>

                            </div>

                            <!--post-single-content-->
                            <div class="post-single-content">
                            {{ $data->content}}
                            </div>



                            <!--post-single-comments-->
                            <div class="post-single-comments">
                                <!--Comments-->
                                <h4 >{{ sizeof($data->Commentaire)}} Commentaire(s)</h4>
                                <ul class="comments">
                                   @foreach ($data->Commentaire as $comment )
                                   <li class="comment-item pt-0">
                                    <div class="content">
                                       <div class="meta">
                                           <ul class="list-inline">
                                               <li><a href="#">{{$comment->User['name']}}</a> </li>
                                               <li class="slash"></li>
                                               <li>{{$comment->created_at->diffForHumans()}}</li>
                                           </ul>
                                       </div>
                                       <p> {{$comment->content}}</p>
                                 </div>

                               </li>
                                   @endforeach



                                </ul>
                                <!--Leave-comments-->
                                <div class="comments-form">
                                <h4 >Ajouter un commentaire</h4>
                                    <!--form-->
                                    <form class="form " action="{{route("commentaire.store")}}" method="POST" id="main_contact_form">
                                        @csrf
                                            <input type="text" name="post" value="{{$data->id}}" hidden>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="content" id="message" cols="30" rows="5" class="form-control" placeholder="Message*" required="required"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">


                                                <button type="submit" name="submit" class="btn-custom">
                                                    Send Comment
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!--/-->
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>

     <!--instagram-->
     <div class="instagram">
        <div class="container-fluid">
            <div class="instagram-area">
                <div class="instagram-list">
                    <div class="instagram-item">
                        <a href="#">
                            <img src="assets/img/instagram/1.jpg" alt="">
                            <div class="icon">
                            <i class="lab la-instagram"></i>
                            </div>
                        </a>
                    </div>

                    <div class="instagram-item">
                        <a href="#">
                            <img src="assets/img/instagram/2.jpg" alt="">
                            <div class="icon">
                             <i class="lab la-instagram"></i>
                            </div>
                        </a>
                    </div>
                    <div class="instagram-item">
                        <a href="#">
                            <img src="assets/img/instagram/3.jpg" alt="">
                            <div class="icon">
                             <i class="lab la-instagram"></i>
                            </div>
                        </a>
                    </div>
                    <div class="instagram-item">
                        <a href="#">
                            <img src="assets/img/instagram/4.jpg" alt="">
                            <div class="icon">
                             <i class="lab la-instagram"></i>
                            </div>
                        </a>
                    </div>
                    <div class="instagram-item">
                        <a href="#">
                            <img src="assets/img/instagram/5.jpg" alt="">
                            <div class="icon">
                             <i class="lab la-instagram"></i>
                            </div>
                        </a>
                    </div>
                    <div class="instagram-item">
                        <a href="#">
                            <img src="assets/img/instagram/6.jpg" alt="">
                            <div class="icon">
                             <i class="lab la-instagram"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


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

                        <!--newslatter-->
                        <div class="col-md-6">
                            <div class="newslettre">
                                <div class="newslettre-info">
                                    <h3>Subscribe To OurNewsletter</h3>
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
                        </div>

                        <!--newslatter-->
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
            <!--footer-copyright-->
            <div class="footer-area-copyright">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright">
                            <p>© 2022,  AssiaGroupe, All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/-->
        </div>
    </div>

    <!--Back-to-top-->
    <div class="back">
        <a href="#" class="back-top">
            <i class="las la-long-arrow-alt-up"></i>
        </a>
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
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- JS Plugins  -->
    <script  src="{{asset('assets/js/theia-sticky-sidebar.js')}}"></script>
    <script src="{{asset('assets/js/ajax-contact.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/switch.js')}}"></script>
    <script src="{{asset('assets/js/jquery.marquee.js')}}"></script>

    <!-- JS main  -->
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>

<!-- Mirrored from oredoo.assiagroupe.net/Oredoo/post-layout-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Apr 2023 02:28:42 GMT -->
</html>
