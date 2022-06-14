@section('link')
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.css"')}}">
<link rel="stylesheet" href="{{ asset('css/plugin.css')}}">
<link rel="stylesheet" href="{{ asset('css/main.css')}}">


@endsection

@section('content')
<div class="body">

    <div class="main-wrapper">
        <!-- Navigation-->
        <nav class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./index.html">
                        <img src="img/nav-logo.png" alt="nav-logo">
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="./index.html"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</span></a>
                            
                        </li>
                        <li class="dropdown">
                            <a href="./menu_all.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu</span></a>
                            
                        </li>
                        <li class="dropdown">
                            <a href="./reservation.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reservatio</span></a>
                            
                        </li>
                        <li class="dropdown">
                            <a href="./about.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                        </li>
                        <li class="dropdown">
                            <a href="./blog_right_sidebar.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('Categories')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
                        </li>
                    </ul>
                </div>
                <!--/.navbar-collapse -->
            </div>
        </nav>

        <!-- Home page-->
        <section class="home">
            <div class="tittle-block">
                <div class="logo">
                    <a href="./index.html">
                        <img src="{{ asset('img/logo.png')}}" alt="logo">
                    </a>
                </div>
                <h1>DELICIOUS Food</h1>
                <h2>Tomato is a delitious restaurant website template</h2>
            </div>
            <div class="scroll-down">
                
                    <a href="{{route('Categories')}}" class="btn btn-primary">
                        reserve now
                    </a>
                
            </div>
        </section>
</div>


  
@endsection

@section('script')
<!-- Javascript -->
<script src="{{ asset('js/vendor/jquery-1.11.2.min.js')}}"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/vendor/jquery.flexslider-min.js')}}"></script>
<script src="{{ asset('js/vendor/spectragram.js')}}"></script>
<script src="{{ asset('js/vendor/owl.carousel.min.js')}}"></script>
<script src="{{ asset('js/vendor/velocity.min.js')}}"></script>
<script src="{{ asset('js/vendor/velocity.ui.min.js')}}"></script>
<script src="{{ asset('js/vendor/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ asset('js/vendor/bootstrap-clockpicker.min.js')}}"></script>
<script src="{{ asset('js/vendor/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('js/vendor/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('js/vendor/slick.min.js')}}"></script>
<script src="{{ asset('js/vendor/wow.min.js')}}"></script>
<script src="{{ asset('js/animation.js')}}"></script>
<script src="{{ asset('js/vendor/vegas/vegas.min.js')}}"></script>
<script src="{{ asset('js/vendor/jquery.mb.YTPlayer.js')}}"></script>
<script src="{{ asset('js/vendor/jquery.stellar.js')}}"></script>
<script src="{{ asset('js/vendor/mc/jquery.ketchup.all.min.js')}}"></script>
<script src="{{ asset('js/vendor/mc/main.js')}}"></script>
<script src="{{ asset('js/vendor/validate.js')}}"></script>
<script src="{{ asset('js/reservation.js')}}"></script>
<!-- Main JS -->
<script src="{{ asset('js/main.js')}}"></script>
@endsection
