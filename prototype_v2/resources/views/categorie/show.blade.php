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

                <div class="meta pb--10">
                    <ul class="nav fw--500">
                        <li>
                            <a href="#">
                                <i class="fa fa-clock-o text-primary"></i>
                                <span>12 July 2017</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-map text-primary"></i>
                                <span>Mountain</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="content--inner">
                    <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit</h4>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati architecto ad, quod harum eos velit quia voluptates reiciendis aut quas aliquid maxime possimus, error voluptatibus unde, dolorum qui tempora. Cum.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero soluta fugiat cupiditate illo aut accusantium voluptate dignissimos nam sed numquam, aperiam laudantium facere iusto cum natus veritatis, modi autem eligendi. Ducimus, temporibus, corporis. Nam laboriosam expedita saepe a fugiat molestias ducimus laborum vero at. Nulla maxime, dolorum doloremque mollitia officia nemo provident sapiente voluptate, corporis eaque, eos <a href="#">quos veritatis voluptates</a>.</p>

                    <table class="specs">
                        <tbody>
                            <tr>
                                <td><i class="fa fa-camera-retro"></i>Camera</td>
                                <td><strong>TOSHIBA 3030</strong></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-eye"></i>Focus</td>
                                <td><strong>22.26 mm</strong></td>
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

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non dolores ex velit, similique molestiae debitis enim? Nemo necessitatibus sapiente sit, modi dolorum vel harum ut, libero, beatae praesentium nam perspiciatis!</p>
                </div>

                <div class="social pt--50">
                    <ul class="nav">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- Portfolio Details End -->
        </div>
    </section>
    <!-- Portfolio Section End -->

    <!-- Recent Shots Section Start -->
    <section class="section pt--80 pb--80" data-bg-img="img/recent-shots-img/bg.jpg" data-overlay="0.95 white">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section--title pb--50 text-center">
                <h2 class="h1 ff--primary text-primary">Recent Shorts</h2>
            </div>
            <!-- Section Title End -->
        </div>

        <!-- Recent Shots Start -->
        <div class="recent--shots owl-carousel" data-owl-center="true" data-owl-responsive='{"0": {"autoWidth": true}}' data-trigger="gallery_popup">
            <!-- Recent Shot Start -->
            <div class="recent--shot">
                <a href="img/recent-shots-img/small-01.jpg" data-overlay="0.75" class="zoom">
                    <img src="img/recent-shots-img/small-01.jpg" alt="">

                    <i class="fa fa-search-plus"></i>
                </a>
            </div>
            <!-- Recent Shot End -->

            <!-- Recent Shot Start -->
            <div class="recent--shot">
                <a href="img/recent-shots-img/small-02.jpg" data-overlay="0.75" class="zoom">
                    <img src="img/recent-shots-img/small-02.jpg" alt="">

                    <i class="fa fa-search-plus"></i>
                </a>
            </div>
            <!-- Recent Shot End -->
            
            <!-- Recent Shot Start -->
            <div class="recent--shot">
                <a href="img/recent-shots-img/small-03.jpg" data-overlay="0.75" class="zoom">
                    <img src="img/recent-shots-img/small-03.jpg" alt="">

                    <i class="fa fa-search-plus"></i>
                </a>
            </div>
            <!-- Recent Shot End -->
            
            <!-- Recent Shot Start -->
            <div class="recent--shot">
                <a href="img/recent-shots-img/small-04.jpg" data-overlay="0.75" class="zoom">
                    <img src="img/recent-shots-img/small-04.jpg" alt="">

                    <i class="fa fa-search-plus"></i>
                </a>
            </div>
            <!-- Recent Shot End -->
            
            <!-- Recent Shot Start -->
            <div class="recent--shot">
                <a href="img/recent-shots-img/small-05.jpg" data-overlay="0.75" class="zoom">
                    <img src="img/recent-shots-img/small-05.jpg" alt="">

                    <i class="fa fa-search-plus"></i>
                </a>
            </div>
            <!-- Recent Shot End -->
            
            <!-- Recent Shot Start -->
            <div class="recent--shot">
                <a href="img/recent-shots-img/small-06.jpg" data-overlay="0.75" class="zoom">
                    <img src="img/recent-shots-img/small-06.jpg" alt="">

                    <i class="fa fa-search-plus"></i>
                </a>
            </div>
            <!-- Recent Shot End -->
            
            <!-- Recent Shot Start -->
            <div class="recent--shot">
                <a href="img/recent-shots-img/small-07.jpg" data-overlay="0.75" class="zoom">
                    <img src="img/recent-shots-img/small-07.jpg" alt="">

                    <i class="fa fa-search-plus"></i>
                </a>
            </div>
            <!-- Recent Shot End -->
            
            <!-- Recent Shot Start -->
            <div class="recent--shot">
                <a href="img/recent-shots-img/small-08.jpg" data-overlay="0.75" class="zoom">
                    <img src="img/recent-shots-img/small-08.jpg" alt="">

                    <i class="fa fa-search-plus"></i>
                </a>
            </div>
            <!-- Recent Shot End -->
            
            <!-- Recent Shot Start -->
            <div class="recent--shot">
                <a href="img/recent-shots-img/small-09.jpg" data-overlay="0.75" class="zoom">
                    <img src="img/recent-shots-img/small-09.jpg" alt="">

                    <i class="fa fa-search-plus"></i>
                </a>
            </div>
            <!-- Recent Shot End -->
            
            <!-- Recent Shot Start -->
            <div class="recent--shot">
                <a href="img/recent-shots-img/small-10.jpg" data-overlay="0.75" class="zoom">
                    <img src="img/recent-shots-img/small-10.jpg" alt="">

                    <i class="fa fa-search-plus"></i>
                </a>
            </div>
            <!-- Recent Shot End -->
        </div>
        <!-- Recent Shots End -->

        <!-- Recent Shots Start -->
        <div class="recent--shots owl-carousel" data-owl-center="true" data-owl-responsive='{"0": {"autoWidth": true}}' data-trigger="gallery_popup">
            <!-- Recent Shot Start -->
            <div class="recent--shot">
                <a href="img/recent-shots-img/large-01.jpg" data-overlay="0.75" class="zoom">
                    <img src="img/recent-shots-img/large-01.jpg" alt="">

                    <i class="fa fa-search-plus"></i>
                </a>
            </div>
            <!-- Recent Shot End -->

            <!-- Recent Shot Start -->
            <div class="recent--shot">
                <a href="img/recent-shots-img/large-02.jpg" data-overlay="0.75" class="zoom">
                    <img src="img/recent-shots-img/large-02.jpg" alt="">

                    <i class="fa fa-search-plus"></i>
                </a>
            </div>
            <!-- Recent Shot End -->

            <!-- Recent Shot Start -->
            <div class="recent--shot">
                <a href="img/recent-shots-img/large-03.jpg" data-overlay="0.75" class="zoom">
                    <img src="img/recent-shots-img/large-03.jpg" alt="">

                    <i class="fa fa-search-plus"></i>
                </a>
            </div>
            <!-- Recent Shot End -->

            <!-- Recent Shot Start -->
            <div class="recent--shot">
                <a href="img/recent-shots-img/large-04.jpg" data-overlay="0.75" class="zoom">
                    <img src="img/recent-shots-img/large-04.jpg" alt="">

                    <i class="fa fa-search-plus"></i>
                </a>
            </div>
            <!-- Recent Shot End -->

            <!-- Recent Shot Start -->
            <div class="recent--shot">
                <a href="img/recent-shots-img/large-05.jpg" data-overlay="0.75" class="zoom">
                    <img src="img/recent-shots-img/large-05.jpg" alt="">

                    <i class="fa fa-search-plus"></i>
                </a>
            </div>
            <!-- Recent Shot End -->
        </div>
        <!-- Recent Shots End -->
    </section>
    <!-- Recent Shots Section End -->

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
