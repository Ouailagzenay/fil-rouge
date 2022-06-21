@extends('layouts.app')
@section('link')
@endsection
@section('content')
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
                        <li><a href="#services" data-trigger="scroll">Services</a></li>
                        <li><a href="{{route('Categories')}}" class="btn btn-primary">reserve now</a></li>
                        <li><a href="#blog" data-trigger="scroll">Blog</a></li>
                        <li><a href="#contact" data-trigger="scroll">Contact</a></li>
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<span class="caret"></span></a>

                            <ul class="dropdown-menu">
                                <li><a href="work-single.html">Work Single</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Header Nav Links End -->
                </div>
            </div>
        </div>
        <!-- Header Navbar End -->
    </header>
    <!-- Header Section End -->

    <!-- Page Header Start -->
    <section class="page--header pt--190 pb--140 text-center" data-bg-img="{{asset('img/home/hedare.png')}}">
        <div class="container">
            <div class="title ff--primary">
                <h2 class="h1 text-primary">categorie</h2>
            </div>
        </div>
    </section>
    <!-- Page Header End -->


        <!-- Pricing Section Start -->
        <section id="pricing" class="section pt--70 pb--80">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--50 text-center">
                    <h2 class="h1 ff--primary text-primary">Price List</h2>

                    <p>categorie</p>
                </div>
                <!-- Section Title End -->
                <!-- Pricing Items Start -->
                <div class="pricing--items owl-carousel" data-owl-margin="30" data-owl-dots="true" data-loop="false" data-owl-responsive='{"0": {"items": 1}, "551": {"items": 2}, "992": {"items": 3}}'>
                    @foreach ($categorie as $value)
                    <!-- Pricing Item Start -->
                    <div class="pricing--item">
                        <div class="amount">
                            <img src="{{$value->image1}}" alt="">
                        </div>

                        <div class="title text-uppercase">
                            <h3 class="h2">${{$value->max_price}}-${{$value->min_price}}</h3>
                        </div>
                        <div class="features">
                            <ul class="nav">
                                <li>{{$value->title}}</li>
                                <li>Lorem ipsum dolor sit amet consect</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipisicing elit</li>
                                <li>Lorem ipsum dolor sit</li>
                            </ul>
                        </div>

                        <div class="action">
                            <a href="{{route('categorie.show', $value->slug)}}" class="btn btn-default">Order Now</a>
                        </div>
                    </div>
                    <!-- Pricing Item End -->
                    @endforeach

                </div>
                <!-- Pricing Items End -->
            </div>
        </section>
        <!-- Pricing Section End -->

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


