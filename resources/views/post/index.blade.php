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
    <title> Le Blog de l'0urs </title>

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
        <div class="container-wrap ">
            <div class="header-area header-padding">
                <!--logo-->
                <div class="logo">
                    <a href="index.html">
                        <img src="{{asset('assets/img/logo/logo-dark.png')}}" alt="" class="logo-dark">
                        <img src="{{asset('assets/img/logo/logo-white.png')}}" alt="" class="logo-white">
                    </a>
                </div>
                <!--/-->
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
                    <!--button-subscribe-->
                    @if (Auth::user())
                    <div class="botton-sub">
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="btn-danger btn-lg">Deconnection</button>
                        </form>
                    </div>
                    @else
                    <div class="botton-sub">
                        <a href="{{route('login')}}" class="btn-subscribe">Connecter vous</a>
                        /
                        <a href="{{route('register')}}" class="btn-subscribe">Enregister vous</a>
                    </div>
                    @endif
                    <!--navbar-toggler-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!--blog-creative-->
    <div class="blog-creative blog-creative-1">
        <div class="container-wrap">
            <!--left-side-->
            <div class="left-side" >
                <div class="owl-carousel">
                    <!--post1-->

                    @for($i=0;$i<5;$i++)

                        <div class="blog-item" style="background-image: url({{asset('/'.$datas[$i]->image)}})">
                            <div class="blog-banner">
                                <div class="post-overly">
                                    <div class="post-overly-content">
                                        <div class="entry-cat">
                                            <a href="blog-layout-1.html" class="category-style-2">{{$datas[$i]->Categorie->libelle}}</a>
                                        </div>
                                        <h2 class="entry-title">
                                            <a href="{{route('post.show',$datas[$i]->id)}}">{{$datas[$i]->titre}}</a>
                                        </h2>
                                        <ul class="entry-meta">
                                            <li class="post-author"> <a href="author.html">Meriam Smith</a></li>
                                            <li class="post-date"> <span class="line"></span> Fabuary 10 ,2022</li>
                                         </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                @endfor

                    <!--/-->
                </div>
            </div>
            <!--/-->

            <!--right-side-->
            <div class="right-side">
                <div class="posts-lists">
                    <!--Les Posts-->
                    @foreach ($datas as $data )

                    <div class="post-list post-list-style1 pt-0">
                        <div class="post-list-image">
                            <a href="{{route('post.show',$data->id)}}">
                                <img src="{{asset('/'.$data->image)}}" alt="">
                            </a>
                        </div>
                        <div class="post-list-title">
                            <div class="entry-title">
                                <h5>
                                    <a href="{{route('post.show',$data->id)}}">{{$data->titre}}</a>
                                </h5>
                            </div>
                        </div>
                        <div class="post-list-category">
                            <div class="entry-cat">
                                <a href="blog-layout-1.html" class="category-style-1">{{$data->Categorie->libelle}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach



                </div>

                <!--pagination-->
                <div class="pagination">


                    <div class="pagination-area">
                        <div class="">
                            <ul class=" ">
                                <li> {{$datas->links()}}</li>
                              </ul>
                        </div>
                    </div>
                </div>
                <!--/-->
            </div>
            <!--/-->
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

</html>
