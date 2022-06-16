@extends('layouts.app')


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
                <h2 class="h1 text-primary">detail categorie</h2>
            </div>
        </div>
    </section>
    <!-- Page Header End -->

    <!-- Portfolio Section Start -->
    <section class="section pt--80 pb--80">
        <div class="container">
            <!-- Portfolio Details Start -->
            <div class="portfolio--details">
                <div class="img pb--20">
                    <img src="{{asset('img/home/hedare.png')}}" alt="">
                </div>

                <div class="content--inner">
                    <table class="specs">
                        <h4>{{$categories->title}}</h4>
                        <tbody>
                            <tr>
                                <td><i class="fa fa-camera-retro"></i>max price</td>
                                <td><strong>{{$categories->max_price}}</strong></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-eye"></i>min price</td>
                                <td><strong>{{$categories->min_price}}</strong></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-image"></i>Resulation</td>
                                <td><strong>72 dpi</strong></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-instagram"></i>Sharpness</td>
                                <td><strong>Color value of this image</strong></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-circle-thin"></i>Contast</td>
                                <td><strong>Color value of this image</strong></td>
                            </tr>
                        </tbody>
                    </table>

                    <h5>Description</h5>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati architecto ad, quod harum eos velit quia voluptates reiciendis aut quas aliquid maxime possimus, error voluptatibus unde, dolorum qui tempora. Cum.</p>
                    <p>
                        <a href="{{route('prodact.categorie',$categories->slug)}}" class="btn btn-round btn-danger my-5" ><i class="fa fa-shopping-cart"></i>Next</a>
                    </p>
                </div>
            </div>
            <!-- Portfolio Details End -->
        </div>
    </section>
    <!-- Portfolio Section End -->

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
