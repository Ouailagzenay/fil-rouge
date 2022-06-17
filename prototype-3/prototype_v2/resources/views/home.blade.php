@extends('layouts.app')
@section('link')
    <!-- ==== Favicon ==== -->
    <link rel="icon" href="{{asset('favicon.png')}}" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700%7CLobster')}}">
    
    <!-- ==== Plugins Bundle ==== -->
    <link rel="stylesheet" href="{{asset('css/plugins.min.css')}}">
    
    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
     <!-- ==== Main Stylesheet ==== -->
     <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
    <!-- ==== Responsive Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('css/responsive-style.css')}}">
    
    <!-- ==== Color Scheme Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('css/colors/color-1.css')}}" id="changeColorScheme">
    
    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
@endsection
@section('content')
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preloader--spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Section Start -->
        <header class="header--section">
            <!-- Header Navbar Start -->
            <div class="header--navbar navbar text-white">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Logo Start -->
                        <div class="header--logo navbar-brand">
                            <a href="index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <!-- Logo End -->
                    </div>

                    <div id="headerNav" class="navbar-collapse collapse">
                        <!-- Header Nav Links Start -->
                        <ul class="header--nav-links nav nav-links fw--400 text-uppercase float--right" data-trigger="scrollspy">
                            <li class="active"><a href="#banner" data-trigger="scroll">Home</a></li>
                            <li><a href="#about" data-trigger="scroll">About Me</a></li>
                            <li><a href="#contact" data-trigger="scroll">Contact</a></li>
                            <li><a href="{{route('Categories')}}" class="" style="background-color: rgb(176, 157, 49); border-radius: 10px;">reserve now <i class="fa-solid fa-arrow-right"></i></a></li>
                        </ul>
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
    
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                        <!-- Header Nav Links End -->
                    </div>
                </div>
            </div>
            <!-- Header Navbar End -->
        </header>
        <!-- Header Section End -->

        <!-- Banner Section Start -->
        <section id="banner" class="banner--section">
            <!-- Banner Slider Start -->
            <div class="banner--slider owl-carousel" data-owl-nav="true" data-owl-dots="true">
                <!-- Banner Item Start -->
                <div class="banner--item" data-bg-img="{{asset('img/home/hedare.png')}}">
                    <div class="vc--parent">
                        <div class="vc--child">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <!-- Banner Content Start -->
                                        <div class="banner--content pt--100 pb--100 text-white text-center">
                                            <div class="banner--title ff--primary">
                                                <h2 class="h2 text-primary">Traiteur Ouail</h2>
                                            </div>

                                            <div class="banner--subtitle">
                                                <h3 class="h4 text-white">Decoration anniversaire</h3>
                                            </div>

                                            <div class="banner--desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut et dolore. Ut quis nostrud exercitation.</p>
                                            </div>

                                            <div class="banner--action mt--30">
                                                <a href="#" class="btn btn-default">Start A Project</a>
                                            </div>
                                        </div>
                                        <!-- Banner Content End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner Item End -->

                <!-- Banner Item Start -->
                <div class="banner--item" data-bg-img="{{asset('img/home/hedare2.png')}}">
                    <div class="vc--parent">
                        <div class="vc--child">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <!-- Banner Content Start -->
                                        <div class="banner--content pt--100 pb--100 text-white text-center">
                                            <div class="banner--title ff--primary">
                                                <h2 class="h2 text-primary">Traiteur Ouail</h2>
                                            </div>

                                            <div class="banner--subtitle">
                                                <h3 class="h4 text-white">Decoration mariage</h3>
                                            </div>

                                            <div class="banner--desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut et dolore. Ut quis nostrud exercitation.</p>
                                            </div>

                                            <div class="banner--action mt--30">
                                                <a href="#" class="btn btn-default">Start A Project</a>
                                            </div>
                                        </div>
                                        <!-- Banner Content End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner Item End -->

                <!-- Banner Item Start -->
                <div class="banner--item" data-bg-img="https://travelata-a.akamaihd.net/thumbs/1920x1080/upload/2017_38/content_hotel_59c2a4bd7e98b2.03094497.jpg">
                    <div class="vc--parent">
                        <div class="vc--child">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <!-- Banner Content Start -->
                                        <div class="banner--content pt--100 pb--100 text-white text-center">
                                            <div class="banner--title ff--primary">
                                                <h2 class="h2 text-primary">Traiteur Ouail</h2>
                                            </div>

                                            <div class="banner--subtitle">
                                                <h3 class="h4 text-white">Decoration pause cafe</h3>
                                            </div>

                                            <div class="banner--desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut et dolore. Ut quis nostrud exercitation.</p>
                                            </div>

                                            <div class="banner--action mt--30">
                                                <a href="#" class="btn btn-default">Start A Project</a>
                                            </div>
                                        </div>
                                        <!-- Banner Content End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner Item End -->
            </div>
            <!-- Banner Slider End -->
        </section>
        <!-- Banner Section End -->

        <!-- About Section Start -->
        <section id="about" class="section pt--70 pb--20">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--60 text-center">
                    <h2 class="h1 ff--primary text-primary">About Me</h2>
                </div>
                <!-- Section Title End -->

                <div class="row row--md-vc">
                    <div class="col-md-6 pb--60">
                        <!-- About Image Start -->
                        <div class="about--img">
                            <img src="https://images.squarespace-cdn.com/content/v1/534d16d6e4b07b046e572a6c/1519140873274-2265H2CXB0X5HVWM52TG/image-asset.jpeg?format=1000w" alt="">
                        </div>
                        <!-- About Image End -->
                    </div>

                    <div class="col-md-6 pb--60">
                        <!-- About Summery Start -->
                        <div class="about--summery">
                            <div class="title">
                                <h2 class="h4">I'm Cool Photographer</h2>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quasi labore officia, illo fugit fugiat in sunt nam dignissimos. Recusandae rem sapiente eveniet enim impedit, soluta nihil odit, nulla deserunt.</p>
                            </div>

                            <div class="desc pt--20">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio suscipit in consequatur incidunt quidem id illum, voluptate eum delectus nulla vel praesentium quae rem harum debitis, obcaecati tempora distinctio nobis. Minus quam cum totam excepturi, nisi earum unde veritatis atque deserunt necessitatibus, hic officiis dolorum distinctio nihil, rem molestiae animi neque? Sint consequatur commodi omnis ipsam quam obcaecati debitis, soluta nihil odit, nulla deserunt.</p>
                            </div>

                            <div class="social pt--20">
                                <ul class="nav">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- About Summery End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section End -->

        <!-- Blog Section Start -->
        <section id="blog" class="section pt--70 pb--20">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--50 text-center">
                    <h2 class="h1 ff--primary text-primary">Nos services</h2>
                </div>
                <!-- Section Title End -->

                <div class="row">
                    <div class="col-md-4 pb--60">
                        <!-- Post Item Start -->
                        <div class="post--item">
                            <div class="post--img">
                                
                             <img src="{{asset('img/home/1.png')}}" alt="">
                                
                            </div>

                            <div class="post--title">
                                <h3 class="h5">
                                    <a href="#" class="btn-link">mariage</a>
                                </h3>
                            </div>

                            {{-- <div class="post--excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero error dolore numquam officiis ex harum doloribus dolores velit facere impedit assumenda numquam vitae.</p>
                            </div> --}}

                            {{-- <div class="post--action fw--500">
                                <a href="#" class="btn-link">Read More<i class="fa fa-long-arrow-right"></i></a>
                            </div> --}}
                        </div>
                        <!-- Post Item End -->
                    </div>

                    <div class="col-md-4 pb--60">
                        <!-- Post Item Start -->
                        <div class="post--item">
                            <div class="post--img">
                                <a href="#" data-overlay="0.55">
                                    <img src="{{asset('img/home/2.png')}}" alt="">

                                    <i class="icon fa fa-external-link"></i>
                                </a>
                            </div>

                            <div class="post--title">
                                <h3 class="h5">
                                    <a href="#" class="btn-link">anniverser</a>
                                </h3>
                            </div>
                        </div>
                        <!-- Post Item End -->
                    </div>

                    <div class="col-md-4 pb--60">
                        <!-- Post Item Start -->
                        <div class="post--item">
                            <div class="post--img">
                                <a href="#" data-overlay="0.55">
                                    <img src="{{asset('img/home/3.png')}}" alt="">

                                    <i class="icon fa fa-external-link"></i>
                                </a>
                            </div>

                            <div class="post--title">
                                <h3 class="h5">
                                    <a href="#" class="btn-link">pause cafe</a>
                                </h3>
                            </div>
                        </div>
                        <!-- Post Item End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Section End -->

        <!-- Call To Action Section Start -->
        <section class="section pt--120 pb--120" data-bg-img="https://www.freshcateringandevents.co.uk/wp-content/uploads/2019/01/header-home-01.jpg" data-overlay="0.55">
            <div class="container">
                <!-- Call To Action Content Start -->
                <div class="cta--content text-white text-center">
                    <div class="title">
                        <h2 class="h2 text-white">bienvenus chez nous</h2>
                    </div>

                    <div class="action">
                        <a href="#" class="btn btn-default">Get In Touch</a>
                    </div>
                </div>
                <!-- Call To Action Content End -->
            </div>
        </section>
        <!-- Call To Action Section End -->

        <!-- Team Section Start -->
        <section id="team" class="section pt--70 pb--20">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--50 text-center">
                    <h2 class="h1 ff--primary text-primary">My Team</h2>
                </div>
                <!-- Section Title End -->

                <div class="row">
                    <div class="col-md-4 pb--60">
                        <!-- Team Member Start -->
                        <div class="team--member">
                            <div class="img">
                                <img src="{{asset('img/home/2.png')}}" alt="">
                            </div>

                            <div class="info">
                                <div class="name text-uppercase">
                                    <h2 class="h4">Ellisa Doe</h2>
                                </div>

                                <div class="role fw--500">
                                    <p>Senior Photographer</p>
                                </div>

                                
                            </div>
                        </div>
                        <!-- Team Member End -->
                    </div>

                    <div class="col-md-4 pb--60">
                        <!-- Team Member Start -->
                        <div class="team--member">
                            <div class="img">
                                <img src="{{asset('img/home/2.png')}}" alt="">
                            </div>

                            <div class="info">
                                <div class="name text-uppercase">
                                    <h2 class="h4">Linda Jacobs</h2>
                                </div>

                                <div class="role fw--500">
                                    <p>Manager</p>
                                </div>
                            </div>
                        </div>
                        <!-- Team Member End -->
                    </div>

                    <div class="col-md-4 pb--60">
                        <!-- Team Member Start -->
                        <div class="team--member">
                            <div class="img">
                                <img src="{{asset('img/home/2.png')}}" alt="">
                            </div>

                            <div class="info">
                                <div class="name text-uppercase">
                                    <h2 class="h4">Andrea Hunt</h2>
                                </div>

                                <div class="role fw--500">
                                    <p>Head of Ideas</p>
                                </div>

                            </div>
                        </div>
                        <!-- Team Member End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Section End -->

        <!-- Footer Section Start -->
        <footer class="footer--section pt--50 pb--50 text-center bg-dark">
            <div class="container">
                <!-- Footer Social Start -->
                <div class="footer--social">
                    <ul class="nav">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <!-- Footer Social End -->

                <!-- Footer Copyright Start -->
                <div class="footer--copyright text-lighter fw--500">
                    <p>Copyright &copy; <a href="#">TheGraphy</a>. All Rights Reserved.</p>
                </div>
                <!-- Footer Copyright End -->
            </div>
        </footer>
        <!-- Footer Section End -->
    </div>
    <!-- Wrapper End -->

    <!-- Back To Top Button Start -->
    <div id="backToTop">
        <a href="#" class="btn btn-default"><i class="fa fa-angle-double-up"></i></a>
    </div>
    <!-- Back To Top Button End -->
  <!-- ==== Plugins Bundle ==== -->
  <script src="{{asset('js/plugins.min.js')}}"></script>

  <!-- ==== Main Script ==== -->
  <script src="{{asset('js/main.js')}}"></script>





@endsection


